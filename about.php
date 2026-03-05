<?php
$page_title = "About - FINTRASC";
$current_page = "about";
include 'header.php';
?>

<!-- Hero Section -->
<section class="relative text-white py-20 md:py-32" style="background: linear-gradient(135deg, #22517E 0%, #2A659E 60%, #3279BE 100%);">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0"
            style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
        </div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                <?= htmlspecialchars(__('about.hero.heading')) ?>
            </h1>
            <p class="text-xl md:text-2xl text-blue-100 font-light">
                <?= htmlspecialchars(__('about.hero.subtitle')) ?>
            </p>
        </div>
    </div>
</section>

<!-- What we Do Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold text-gray-900 mb-6"><?= htmlspecialchars(__('about.what_we_do.heading')) ?></h2>
        <p class="text-lg text-gray-700 mb-12 max-w-3xl">
            <?= htmlspecialchars(__('about.what_we_do.intro')) ?>
        </p>

        <!-- Document Types Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
            <div
                class="bg-gradient-to-br from-blue-50 to-blue-100 p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300 border border-blue-200">
                <div class="flex items-center mb-4">
                    <i class="fas fa-file-alt text-3xl mr-4" style="color: #1f4b76;"></i>
                    <h3 class="text-xl font-semibold text-gray-900"><?= htmlspecialchars(__('about.what_we_do.doc1_title')) ?></h3>
                </div>
                <p class="text-gray-700"><?= htmlspecialchars(__('about.what_we_do.doc1_body')) ?></p>
            </div>

            <div
                class="p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300" style="background: linear-gradient(135deg, #eaf0f8 0%, #d2e4f0 100%); border: 1px solid #b8d3e8;">
                <div class="flex items-center mb-4">
                    <i class="fas fa-key text-3xl mr-4" style="color: #22517E;"></i>
                    <h3 class="text-xl font-semibold text-gray-900"><?= htmlspecialchars(__('about.what_we_do.doc2_title')) ?></h3>
                </div>
                <p class="text-gray-700"><?= htmlspecialchars(__('about.what_we_do.doc2_body')) ?></p>
            </div>

            <div
                class="p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300" style="background: linear-gradient(135deg, #e5eef8 0%, #cce0f5 100%); border: 1px solid #a3c9e8;">
                <div class="flex items-center mb-4">
                    <i class="fas fa-chart-bar text-3xl mr-4" style="color: #3279BE;"></i>
                    <h3 class="text-xl font-semibold text-gray-900"><?= htmlspecialchars(__('about.what_we_do.doc3_title')) ?></h3>
                </div>
                <p class="text-gray-700"><?= htmlspecialchars(__('about.what_we_do.doc3_body')) ?></p>
            </div>

            <div
                class="bg-gradient-to-br from-green-50 to-green-100 p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300 border border-green-200">
                <div class="flex items-center mb-4">
                    <i class="fas fa-leaf text-3xl text-green-600 mr-4"></i>
                    <h3 class="text-xl font-semibold text-gray-900"><?= htmlspecialchars(__('about.what_we_do.doc4_title')) ?></h3>
                </div>
                <p class="text-gray-700"><?= htmlspecialchars(__('about.what_we_do.doc4_body')) ?></p>
            </div>

            <div
                class="bg-gradient-to-br from-teal-50 to-teal-100 p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300 border border-teal-200">
                <div class="flex items-center mb-4">
                    <i class="fas fa-globe-europe text-3xl text-teal-600 mr-4"></i>
                    <h3 class="text-xl font-semibold text-gray-900"><?= htmlspecialchars(__('about.what_we_do.doc5_title')) ?></h3>
                </div>
                <p class="text-gray-700"><?= htmlspecialchars(__('about.what_we_do.doc5_body')) ?></p>
            </div>
        </div>

        <div class="bg-blue-50 border-l-4 p-6 rounded-r-lg" style="border-color: #1f4b76;">
            <p class="text-lg text-gray-800">
                <span class="font-semibold"><?= htmlspecialchars(__('about.what_we_do.focus_label')) ?></span> <?= htmlspecialchars(__('about.what_we_do.focus_body')) ?>
            </p>
        </div>
    </div>
</section>

<!-- Compliance-Focused Approach Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Column: Image -->
            <div class="order-2 lg:order-1">
                <div class="relative overflow-hidden rounded-lg shadow-2xl">
                    <img src="images/inspiration/7.jpg" alt="Compliance and Regulatory Documentation"
                        class="w-full h-auto block">
                    <div class="absolute inset-0 rounded-lg" style="background: linear-gradient(135deg, rgba(34, 81, 126, 0.18) 0%, rgba(50, 121, 190, 0.10) 100%); pointer-events: none;"></div>
                </div>
            </div>

            <!-- Right Column: Content -->
            <div class="order-1 lg:order-2">
                <h2 class="text-4xl font-bold text-gray-900 mb-6"><?= htmlspecialchars(__('about.compliance.heading')) ?></h2>
                <p class="text-lg text-gray-700 mb-6">
                    <?= htmlspecialchars(__('about.compliance.intro')) ?>
                </p>

                <div class="space-y-4 mb-8">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-10 w-10 rounded-full text-white"
                                style="background-color: #1f4b76;">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-900"><?= htmlspecialchars(__('about.compliance.check1')) ?></h3>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-10 w-10 rounded-full text-white"
                                style="background-color: #1f4b76;">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-900"><?= htmlspecialchars(__('about.compliance.check2')) ?></h3>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-10 w-10 rounded-full text-white"
                                style="background-color: #1f4b76;">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-900"><?= htmlspecialchars(__('about.compliance.check3')) ?></h3>
                        </div>
                    </div>
                </div>

                <p class="text-gray-700 mb-6">
                    <?= htmlspecialchars(__('about.compliance.body')) ?>
                </p>

                <div class="bg-blue-900 text-white p-6 rounded-lg">
                    <p class="text-xl font-semibold"><?= htmlspecialchars(__('about.compliance.highlight')) ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ESG & Sustainability Section -->
<section class="py-20 bg-gradient-to-br from-green-50 to-teal-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <div
                    class="inline-flex items-center justify-center w-16 h-16 bg-green-600 text-white rounded-full mb-6">
                    <i class="fas fa-leaf text-3xl"></i>
                </div>
                <h2 class="text-4xl font-bold text-gray-900 mb-6"><?= htmlspecialchars(__('about.esg.heading')) ?></h2>
            </div>

            <div class="bg-white rounded-lg shadow-xl p-8 md:p-12">
                <p class="text-lg text-gray-700 mb-6">
                    <?= htmlspecialchars(__('about.esg.body1')) ?>
                </p>

                <div
                    class="bg-gradient-to-r from-green-100 to-teal-100 border-l-4 border-green-600 p-6 rounded-r-lg mb-6">
                    <p class="text-lg text-gray-800 font-semibold">
                        <?= htmlspecialchars(__('about.esg.highlight')) ?>
                    </p>
                </div>

                <p class="text-gray-700 mb-6">
                    <?= htmlspecialchars(__('about.esg.body2')) ?>
                </p>

                <div class="text-center pt-6 border-t border-gray-200">
                    <p class="text-xl text-gray-900 font-semibold">
                        <?= htmlspecialchars(__('about.esg.conclusion')) ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How I Work Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-6"><?= htmlspecialchars(__('about.how_we_work.heading')) ?></h2>
            <p class="text-lg text-gray-700 max-w-3xl mx-auto">
                <?= htmlspecialchars(__('about.how_we_work.intro')) ?>
            </p>
        </div>

        <!-- Process Steps -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Step 1 -->
            <div class="relative">
                <div class="bg-white border-2 border-blue-200 rounded-lg p-8 h-full transition duration-300 hover:shadow-lg"
                    style="--hover-border-color: #1f4b76;" onmouseenter="this.style.borderColor='#1f4b76'"
                    onmouseleave="this.style.borderColor=''">
                    <div class="absolute -top-4 -left-4 text-white w-12 h-12 rounded-full flex items-center justify-center text-xl font-bold shadow-lg"
                        style="background-color: #1f4b76;">
                        1
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4 mt-2"><?= htmlspecialchars(__('about.how_we_work.step1_title')) ?></h3>
                    <p class="text-gray-700">
                        <?= htmlspecialchars(__('about.how_we_work.step1_body')) ?>
                    </p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="relative">
                <div class="bg-white border-2 border-blue-200 rounded-lg p-8 h-full transition duration-300 hover:shadow-lg"
                    onmouseenter="this.style.borderColor='#1f4b76'" onmouseleave="this.style.borderColor=''">
                    <div class="absolute -top-4 -left-4 text-white w-12 h-12 rounded-full flex items-center justify-center text-xl font-bold shadow-lg"
                        style="background-color: #1f4b76;">
                        2
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4 mt-2"><?= htmlspecialchars(__('about.how_we_work.step2_title')) ?></h3>
                    <p class="text-gray-700">
                        <?= htmlspecialchars(__('about.how_we_work.step2_body')) ?>
                    </p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="relative">
                <div class="bg-white border-2 border-blue-200 rounded-lg p-8 h-full transition duration-300 hover:shadow-lg"
                    onmouseenter="this.style.borderColor='#1f4b76'" onmouseleave="this.style.borderColor=''">
                    <div class="absolute -top-4 -left-4 text-white w-12 h-12 rounded-full flex items-center justify-center text-xl font-bold shadow-lg"
                        style="background-color: #1f4b76;">
                        3
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4 mt-2"><?= htmlspecialchars(__('about.how_we_work.step3_title')) ?></h3>
                    <p class="text-gray-700">
                        <?= htmlspecialchars(__('about.how_we_work.step3_body')) ?>
                    </p>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="relative">
                <div class="bg-white border-2 border-blue-200 rounded-lg p-8 h-full transition duration-300 hover:shadow-lg"
                    onmouseenter="this.style.borderColor='#1f4b76'" onmouseleave="this.style.borderColor=''">
                    <div class="absolute -top-4 -left-4 text-white w-12 h-12 rounded-full flex items-center justify-center text-xl font-bold shadow-lg"
                        style="background-color: #1f4b76;">
                        4
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4 mt-2"><?= htmlspecialchars(__('about.how_we_work.step4_title')) ?></h3>
                    <p class="text-gray-700">
                        <?= htmlspecialchars(__('about.how_we_work.step4_body')) ?>
                    </p>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="relative">
                <div class="bg-white border-2 border-blue-200 rounded-lg p-8 h-full transition duration-300 hover:shadow-lg"
                    onmouseenter="this.style.borderColor='#1f4b76'" onmouseleave="this.style.borderColor=''">
                    <div class="absolute -top-4 -left-4 text-white w-12 h-12 rounded-full flex items-center justify-center text-xl font-bold shadow-lg"
                        style="background-color: #1f4b76;">
                        5
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4 mt-2"><?= htmlspecialchars(__('about.how_we_work.step5_title')) ?></h3>
                    <p class="text-gray-700">
                        <?= htmlspecialchars(__('about.how_we_work.step5_body')) ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Who I Work With Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Column: Content -->
            <div>
                <h2 class="text-4xl font-bold text-gray-900 mb-6"><?= htmlspecialchars(__('about.who_we_work_with.heading')) ?></h2>
                <p class="text-lg text-gray-700 mb-8">
                    <?= htmlspecialchars(__('about.who_we_work_with.intro')) ?>
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
                    <div class="flex items-center bg-white p-4 rounded-lg shadow-md border-l-4"
                        style="border-color: #1f4b76;">
                        <i class="fas fa-building text-2xl mr-4" style="color: #1f4b76;"></i>
                        <span class="text-gray-800 font-semibold"><?= htmlspecialchars(__('about.who_we_work_with.client1')) ?></span>
                    </div>

                    <div class="flex items-center bg-white p-4 rounded-lg shadow-md border-l-4 border-indigo-600">
                        <i class="fas fa-chart-line text-2xl text-indigo-600 mr-4"></i>
                        <span class="text-gray-800 font-semibold"><?= htmlspecialchars(__('about.who_we_work_with.client2')) ?></span>
                    </div>

                    <div class="flex items-center bg-white p-4 rounded-lg shadow-md border-l-4 border-purple-600">
                        <i class="fas fa-file-invoice text-2xl text-purple-600 mr-4"></i>
                        <span class="text-gray-800 font-semibold"><?= htmlspecialchars(__('about.who_we_work_with.client3')) ?></span>
                    </div>

                    <div class="flex items-center bg-white p-4 rounded-lg shadow-md border-l-4 border-green-600">
                        <i class="fas fa-balance-scale text-2xl text-green-600 mr-4"></i>
                        <span class="text-gray-800 font-semibold"><?= htmlspecialchars(__('about.who_we_work_with.client4')) ?></span>
                    </div>

                    <div
                        class="flex items-center bg-white p-4 rounded-lg shadow-md border-l-4 border-teal-600 sm:col-span-2">
                        <i class="fas fa-briefcase text-2xl text-teal-600 mr-4"></i>
                        <span class="text-gray-800 font-semibold"><?= htmlspecialchars(__('about.who_we_work_with.client5')) ?></span>
                    </div>
                </div>

                <p class="text-lg text-gray-700 bg-blue-50 p-6 rounded-lg border" style="border-color: #1f4b76;">
                    <?= htmlspecialchars(__('about.who_we_work_with.cta')) ?>
                </p>
            </div>

            <!-- Right Column: Image -->
            <div>
                <div class="relative overflow-hidden rounded-lg shadow-2xl" style="height: 600px;">
                    <img src="images/inspiration/5.jpg" alt="Professional collaboration"
                        class="w-full h-full object-cover block">
                    <div class="absolute inset-0 rounded-lg" style="background: linear-gradient(135deg, rgba(34, 81, 126, 0.18) 0%, rgba(50, 121, 190, 0.10) 100%); pointer-events: none;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>