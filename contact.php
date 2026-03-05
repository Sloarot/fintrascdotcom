<?php
$page_title = "Contact - FINTRASC";
$current_page = "contact";

// Early language detection so __() is available for form validation messages.
// header.php will call require_once on the same file — safely skipped the second time.
$_allowed_langs = ['en', 'fr', 'es', 'nl'];
$lang = (isset($_COOKIE['fintrasc_lang']) && in_array($_COOKIE['fintrasc_lang'], $_allowed_langs))
    ? $_COOKIE['fintrasc_lang']
    : 'en';
require_once __DIR__ . '/includes/translate.php';

// ── Form handling ────────────────────────────────────────────────────────────
$form_success = false;
$form_error   = false;
$errors       = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = trim($_POST['name']    ?? '');
    $email   = trim($_POST['email']   ?? '');
    $message = trim($_POST['message'] ?? '');

    if (empty($name))    $errors[] = __('contact.messages.err_name');
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL))
        $errors[] = __('contact.messages.err_email');
    if (empty($message)) $errors[] = __('contact.messages.err_message');

    if (empty($errors)) {
        // ── Configure this address to receive enquiries ───────────────────
        $to      = 'hello@fintrasc.com';
        $subject = 'New enquiry from ' . htmlspecialchars($name) . ' – FINTRASC website';
        $body    = "Name:    {$name}\r\nEmail:   {$email}\r\n\r\nMessage:\r\n{$message}";
        $headers = implode("\r\n", [
            'From: FINTRASC Website <noreply@fintrasc.com>',
            'Reply-To: ' . $email,
            'Content-Type: text/plain; charset=UTF-8',
        ]);

        // mail() requires a configured PHP mailer / SMTP relay (see notes below)
        if (@mail($to, $subject, $body, $headers)) {
            $form_success = true;
        } else {
            $form_error = true;
        }
    } else {
        $form_error = true;
    }
}

include 'header.php';
?>

<!-- ── Page Hero ────────────────────────────────────────────────────────────── -->
<section class="relative text-white py-20 md:py-32"
    style="background: linear-gradient(135deg, #22517E 0%, #2A659E 60%, #3279BE 100%);">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0"
            style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
        </div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                <?= htmlspecialchars(__('contact.hero.heading')) ?>
            </h1>
            <p class="text-xl md:text-2xl text-blue-100 font-light">
                <?= htmlspecialchars(__('contact.hero.subtitle')) ?>
            </p>
        </div>
    </div>
</section>

<!-- ── Contact Section ───────────────────────────────────────────────────────── -->
<section id="contact" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">

            <!-- Left column: info cards -->
            <div>
                <span class="inline-block font-family text-sm font-bold tracking-wider uppercase mb-4 px-4 py-2 rounded-full"
                    style="background-color: rgba(31, 75, 118, 0.1); color: #1f4b76;">
                    <?= htmlspecialchars(__('contact.info.badge')) ?>
                </span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    <?= htmlspecialchars(__('contact.info.heading')) ?>
                </h2>
                <p class="text-lg text-gray-600 mb-10 leading-relaxed">
                    <?= htmlspecialchars(__('contact.info.intro')) ?>
                </p>

                <div class="space-y-6">
                    <!-- Response time -->
                    <div class="bg-white rounded-xl p-6 shadow-md flex items-start gap-5 border border-blue-100">
                        <div class="flex-shrink-0 flex items-center justify-center w-12 h-12 rounded-lg shadow"
                            style="background: linear-gradient(135deg, #1f4b76 0%, #2d7fb8 100%);">
                            <i class="fa-solid fa-clock text-white text-lg"></i>
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-gray-900 mb-1"><?= htmlspecialchars(__('contact.info.card1_title')) ?></h3>
                            <p class="text-gray-600 text-sm"><?= htmlspecialchars(__('contact.info.card1_body')) ?></p>
                        </div>
                    </div>

                    <!-- Confidentiality -->
                    <div class="bg-white rounded-xl p-6 shadow-md flex items-start gap-5 border border-blue-100">
                        <div class="flex-shrink-0 flex items-center justify-center w-12 h-12 rounded-lg shadow"
                            style="background: linear-gradient(135deg, #22517E 0%, #2A659E 100%);">
                            <i class="fa-solid fa-lock text-white text-lg"></i>
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-gray-900 mb-1"><?= htmlspecialchars(__('contact.info.card2_title')) ?></h3>
                            <p class="text-gray-600 text-sm"><?= htmlspecialchars(__('contact.info.card2_body')) ?></p>
                        </div>
                    </div>

                    <!-- Email direct -->
                    <div class="bg-white rounded-xl p-6 shadow-md flex items-start gap-5 border border-blue-100">
                        <div class="flex-shrink-0 flex items-center justify-center w-12 h-12 rounded-lg shadow"
                            style="background: linear-gradient(135deg, #2A659E 0%, #3279BE 100%);">
                            <i class="fa-solid fa-envelope text-white text-lg"></i>
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-gray-900 mb-1"><?= htmlspecialchars(__('contact.info.card3_title')) ?></h3>
                            <p class="text-gray-600 text-sm">
                                <?= htmlspecialchars(__('contact.info.card3_body')) ?>
                                <a href="mailto:hello@fintrasc.com" class="font-semibold hover:underline"
                                    style="color: #1f4b76;">hello@fintrasc.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right column: form -->
            <div class="bg-white rounded-2xl shadow-xl p-8 md:p-10 border border-blue-50">

                <!-- Success message -->
                <?php if ($form_success): ?>
                    <div class="alert-success mb-6 flex items-center gap-3">
                        <i class="fa-solid fa-circle-check text-green-600 text-xl"></i>
                        <div>
                            <p class="font-bold"><?= htmlspecialchars(__('contact.messages.success_title')) ?></p>
                            <p class="text-sm mt-0.5"><?= htmlspecialchars(__('contact.messages.success_body')) ?></p>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Error message -->
                <?php if ($form_error && !empty($errors)): ?>
                    <div class="alert-error mb-6">
                        <p class="font-bold mb-1 flex items-center gap-2">
                            <i class="fa-solid fa-circle-exclamation"></i> <?= htmlspecialchars(__('contact.messages.error_heading')) ?>
                        </p>
                        <ul class="list-disc list-inside text-sm space-y-0.5">
                            <?php foreach ($errors as $e): ?>
                                <li><?php echo htmlspecialchars($e); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php elseif ($form_error): ?>
                    <div class="alert-error mb-6">
                        <p class="font-bold flex items-center gap-2">
                            <i class="fa-solid fa-circle-exclamation"></i> <?= htmlspecialchars(__('contact.messages.error_generic')) ?>
                        </p>
                    </div>
                <?php endif; ?>

                <form method="POST" action="#contact" novalidate class="space-y-6">

                    <!-- Name -->
                    <div class="floating-label-group">
                        <input
                            type="text"
                            id="name"
                            name="name"
                            class="floating-input"
                            placeholder=" "
                            autocomplete="name"
                            value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>"
                            required>
                        <label for="name" class="floating-label"><?= htmlspecialchars(__('contact.form.name_label')) ?></label>
                    </div>

                    <!-- Email -->
                    <div class="floating-label-group">
                        <input
                            type="email"
                            id="email"
                            name="email"
                            class="floating-input"
                            placeholder=" "
                            autocomplete="email"
                            value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>"
                            required>
                        <label for="email" class="floating-label"><?= htmlspecialchars(__('contact.form.email_label')) ?></label>
                    </div>

                    <!-- Message -->
                    <div class="floating-label-group floating-label-group--textarea">
                        <textarea
                            id="message"
                            name="message"
                            class="floating-textarea"
                            placeholder=" "
                            rows="5"
                            required><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
                        <label for="message" class="floating-label"><?= htmlspecialchars(__('contact.form.message_label')) ?></label>
                    </div>

                    <!-- Submit -->
                    <div class="pt-2">
                        <button type="submit" class="btn-contact-submit w-full flex items-center justify-center gap-3">
                            <i class="fa-solid fa-paper-plane"></i>
                            <span><?= htmlspecialchars(__('contact.form.submit')) ?></span>
                        </button>
                    </div>

                    <p class="text-xs text-gray-400 text-center leading-relaxed">
                        <?= htmlspecialchars(__('contact.form.privacy')) ?>
                    </p>
                </form>
            </div>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>