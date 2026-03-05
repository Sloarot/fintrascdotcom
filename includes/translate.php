<?php

/**
 * Translation helper
 * Loaded by header.php (and by contact.php early, before form handling).
 *
 * Usage:  echo htmlspecialchars(__('section.subsection.key'));
 *
 * Dot-notation traverses the JSON tree.
 * Falls back to English, then to the raw key — never blank, never crashes.
 */

function __($key)
{
    global $_t, $_t_fallback;

    $parts = explode('.', $key);

    // Try current language
    $val = $_t;
    foreach ($parts as $part) {
        if (!is_array($val) || !array_key_exists($part, $val)) {
            $val = null;
            break;
        }
        $val = $val[$part];
    }
    if (is_string($val)) return $val;

    // Fall back to English
    $val = $_t_fallback;
    foreach ($parts as $part) {
        if (!is_array($val) || !array_key_exists($part, $val)) {
            return $key;
        }
        $val = $val[$part];
    }
    return is_string($val) ? $val : $key;
}

// $lang is set by the caller (header.php or contact.php) before this file is required.
$_lang_dir      = __DIR__ . '/../lang/';
$_fallback_file = $_lang_dir . 'en.json';
$_lang_file     = $_lang_dir . $lang . '.json';

$_t_fallback = json_decode(file_get_contents($_fallback_file), true) ?? [];
$_t          = ($lang === 'en') ? $_t_fallback
    : (json_decode(@file_get_contents($_lang_file), true) ?? $_t_fallback);
