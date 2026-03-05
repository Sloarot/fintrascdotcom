<?php
// ── Language detection ──────────────────────────────────────────────────────
// Reads the 'fintrasc_lang' cookie set by the JS dropdown.
// $lang is available to every page that includes header.php.
// Tomorrow you can do: $translations = json_decode(file_get_contents("lang/$lang.json"), true);
$_allowed_langs = ['en', 'fr', 'es', 'nl'];
$lang = (isset($_COOKIE['fintrasc_lang']) && in_array($_COOKIE['fintrasc_lang'], $_allowed_langs))
    ? $_COOKIE['fintrasc_lang']
    : 'en';

$_lang_meta = [
    'en' => ['flag' => 'gb', 'label' => 'EN'],
    'fr' => ['flag' => 'fr', 'label' => 'FR'],
    'es' => ['flag' => 'es', 'label' => 'ES'],
    'nl' => ['flag' => 'nl', 'label' => 'NL'],
];
$_current_flag  = $_lang_meta[$lang]['flag'];
$_current_label = $_lang_meta[$lang]['label'];
// ────────────────────────────────────────────────────────────────────────────
require_once __DIR__ . '/includes/translate.php';
$page_title = __('meta.' . ($current_page ?? 'home') . '_title');
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'FINTRASC - Financial Translation Services'; ?></title>

    <!-- Google Fonts - Lato -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body class="font-sans">
    <!-- Language Bar -->
    <div class="fixed top-0 w-full z-50 bg-gray-100 border-b border-gray-200" style="overflow: visible;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" style="overflow: visible;">
            <div class="flex justify-end items-center h-9" style="overflow: visible;">
                <div class="relative" id="lang-selector">
                    <button id="lang-btn" class="flex items-center gap-1.5 text-sm text-gray-600 hover:text-gray-900 py-1 px-2 rounded hover:bg-gray-200 transition duration-150">
                        <img id="current-flag" src="https://flagcdn.com/16x12/<?php echo $_current_flag; ?>.png" width="16" height="12" alt="<?php echo $_current_label; ?> flag">
                        <span id="current-lang" class="font-medium tracking-wide"><?php echo $_current_label; ?></span>
                        <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="lang-dropdown" class="hidden absolute right-0 mt-1 bg-white border border-gray-200 rounded shadow-lg py-1 min-w-[80px]" style="z-index: 9999; top: 100%;">
                        <button onclick="setLang('en','gb')" class="lang-option flex items-center gap-2 w-full px-3 py-1.5 text-sm text-gray-700 hover:bg-gray-50 transition duration-100">
                            <img src="https://flagcdn.com/16x12/gb.png" width="16" height="12" alt="EN"> EN
                        </button>
                        <button onclick="setLang('fr','fr')" class="lang-option flex items-center gap-2 w-full px-3 py-1.5 text-sm text-gray-700 hover:bg-gray-50 transition duration-100">
                            <img src="https://flagcdn.com/16x12/fr.png" width="16" height="12" alt="FR"> FR
                        </button>
                        <button onclick="setLang('es','es')" class="lang-option flex items-center gap-2 w-full px-3 py-1.5 text-sm text-gray-700 hover:bg-gray-50 transition duration-100">
                            <img src="https://flagcdn.com/16x12/es.png" width="16" height="12" alt="ES"> ES
                        </button>
                        <button onclick="setLang('nl','nl')" class="lang-option flex items-center gap-2 w-full px-3 py-1.5 text-sm text-gray-700 hover:bg-gray-50 transition duration-100">
                            <img src="https://flagcdn.com/16x12/nl.png" width="16" height="12" alt="NL"> NL
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Bar -->
    <nav class="bg-white shadow-md fixed w-full top-9 z-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="index.php" class="text-2xl font-bold text-blue-600">
                        <img src="images/Fintrasc 2026 logo.png" class="img-fluid h-10" alt="FINTRASC">
                    </a>
                </div>

                <!-- Desktop Navigation Links -->
                <div class="hidden md:flex space-x-8">
                    <a href="index.php#services" class="text-gray-700 hover:text-blue-900 transition duration-300 <?php echo (isset($current_page) && $current_page == 'home') ? 'font-semibold' : ''; ?>"><?= htmlspecialchars(__('nav.home')) ?></a>
                    <a href="about.php" class="text-gray-700 hover:text-blue-900 transition duration-300 <?php echo (isset($current_page) && $current_page == 'about') ? 'text-blue-900 font-semibold' : ''; ?>"><?= htmlspecialchars(__('nav.services')) ?></a>
                    <a href="contact.php" class="text-gray-700 hover:text-blue-900 transition duration-300 <?php echo (isset($current_page) && $current_page == 'contact') ? 'text-blue-900 font-semibold' : ''; ?>"><?= htmlspecialchars(__('nav.contact')) ?></a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-700 hover:text-blue-900 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path id="hamburger-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                            <path id="close-icon" class="hidden" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white shadow-lg">
                <a href="index.php#services"
                    class="block px-3 py-2 text-gray-700 hover:text-blue-900 hover:bg-gray-50 rounded-md transition duration-300"><?= htmlspecialchars(__('nav.services')) ?></a>
                <a href="about.php"
                    class="block px-3 py-2 text-gray-700 hover:text-blue-900 hover:bg-gray-50 rounded-md transition duration-300 <?php echo (isset($current_page) && $current_page == 'about') ? 'text-blue-900 font-semibold bg-blue-50' : ''; ?>"><?= htmlspecialchars(__('nav.about')) ?></a>
                <a href="contact.php"
                    class="block px-3 py-2 text-gray-700 hover:text-blue-900 hover:bg-gray-50 rounded-md transition duration-300 <?php echo (isset($current_page) && $current_page == 'contact') ? 'text-blue-900 font-semibold bg-blue-50' : ''; ?>"><?= htmlspecialchars(__('nav.contact')) ?></a>
            </div>
        </div>
    </nav>

    <!-- Spacer for fixed lang bar + navbar (36px + 64px) -->
    <div class="h-[100px]"></div>