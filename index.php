<?php
$page_title = "FINTRASC - Professional Translation Services";
$current_page = "home";
include 'header.php';
?>

<!-- Hero Section -->
<section id="hero" class="hero-section relative min-h-screen flex items-center">
    <!-- Background Video (Desktop only) -->
    <video autoplay muted loop playsinline class="hidden md:block absolute inset-0 w-full h-full object-cover z-0">
        <source src="images/inspiration/syline.mp4" type="video/mp4">
    </video>
    <div class="hero-overlay absolute inset-0"></div>

    <!-- Desktop Video Hero Layout -->
    <div class="hidden md:flex hero-video-container">
        <div class="hero-video-content">
            <h1 class="hero-video-title">
                <span id="typewriter-desktop"></span><span class="typewriter-cursor">|</span>
            </h1>
            <p class="hero-video-subtitle">
                Accurate, consistent and compliance-aware translations for investment funds, asset managers and
                financial institutions.
            </p>
            <div class="hero-video-buttons">
                <a href="#contact" class="btn-primary px-8 py-4 rounded-lg text-center shadow-lg text-lg">
                    Request a Quote
                </a>
                <a href="#services" class="btn-secondary-video px-8 py-4 rounded-lg text-center text-lg">
                    What we do
                </a>
            </div>
        </div>
    </div>

    <!-- Mobile/Tablet Layout -->
    <div
        class="md:hidden white-square max-w-7xl mx-auto ml-[14%] px-4 sm:px-6 lg:px-8 relative z-10 flex items-center min-h-[60vh]">
        <div class="flex flex-col gap-12 items-center w-full">
            <div class="hero-content text-left rounded-2xl p-10 w-full max-w-[46rem] min-h-[380px]">
                <h1 class="hero-title text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                    <span id="typewriter-mobile"></span><span class="typewriter-cursor">|</span>
                </h1>
                <p class="hero-subtitle text-lg md:text-xl mb-8 leading-relaxed opacity-90">
                    Accurate, consistent and compliance-aware translations for investment funds, asset managers and
                    financial institutions.
                </p>
                <div class="hero-buttons flex flex-col sm:flex-row gap-4">
                    <a href="#contact" class="btn-primary px-6 py-3 rounded-lg text-center shadow-lg text-base">
                        Request a Quote
                    </a>
                    <a href="#services" class="btn-secondary px-6 py-3 rounded-lg text-center text-base">
                        What we do
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Downward Arrow Indicator -->
    <a href="#expertise"
        class="absolute left-1/2 bottom-28 transform -translate-x-1/2 z-20 animate-bounce cursor-pointer hover:opacity-80 transition-opacity">
        <svg class="w-10 h-10 text-white drop-shadow-lg" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
        </svg>
    </a>
</section>

<!-- Expertise Section -->
<section id="expertise" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-block font-family text-sm font-bold tracking-wider uppercase mb-4 px-4 py-2 rounded-full"
                style="background-color: rgba(31, 75, 118, 0.1); color: #1f4b76;">
                OUR EXPERTISE
            </span>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">How we help you</h2>
            <p class="text-lg md:text-xl text-gray-700 max-w-3xl mx-auto">
                We focus exclusively on financial services translation, bringing deep financial knowledge and technical precision to every project.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="relative bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl shadow-lg hover:shadow-2xl transition duration-300 overflow-hidden border border-blue-200">
                <div class="absolute top-0 right-0 w-32 h-32 transform translate-x-8 -translate-y-8">
                    <div class="absolute inset-0 rounded-full opacity-10" style="background-color: #1f4b76;"></div>
                </div>
                <div class="p-8 relative z-10">
                    <div class="flex items-center justify-center w-16 h-16 rounded-xl mb-6 shadow-lg"
                        style="background: linear-gradient(135deg, #1f4b76 0%, #2d7fb8 100%);">
                        <i class="fa-solid fa-file-invoice text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Specialised fund documentation</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Exclusively focused on <strong>investment funds</strong> - prospectuses, KIIDs, supplements,
                        annual reports, and investor communications. We understand the nuances that generic
                        translation services miss.
                    </p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="relative rounded-xl shadow-lg hover:shadow-2xl transition duration-300 overflow-hidden" style="background: linear-gradient(135deg, #eaf0f8 0%, #d2e4f0 100%); border: 1px solid #b8d3e8;">
                <div class="absolute top-0 right-0 w-32 h-32 transform translate-x-8 -translate-y-8">
                    <div class="absolute inset-0 rounded-full opacity-10" style="background-color: #22517E;"></div>
                </div>
                <div class="p-8 relative z-10">
                    <div class="flex items-center justify-center w-16 h-16 rounded-xl mb-6 shadow-lg"
                        style="background: linear-gradient(135deg, #22517E 0%, #2A659E 100%);">
                        <i class="fa-solid fa-gavel text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Deep regulatory knowledge</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Hands-on experience with <strong>UCITS, AIFMD, PRIIPs, and SFDR</strong> documentation across
                        multiple European jurisdictions. We know what regulators expect and how to deliver it.
                    </p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="relative rounded-xl shadow-lg hover:shadow-2xl transition duration-300 overflow-hidden" style="background: linear-gradient(135deg, #e5eef8 0%, #cce0f5 100%); border: 1px solid #a3c9e8;">
                <div class="absolute top-0 right-0 w-32 h-32 transform translate-x-8 -translate-y-8">
                    <div class="absolute inset-0 rounded-full opacity-10" style="background-color: #3279BE;"></div>
                </div>
                <div class="p-8 relative z-10">
                    <div class="flex items-center justify-center w-16 h-16 rounded-xl mb-6 shadow-lg"
                        style="background: linear-gradient(135deg, #2A659E 0%, #3279BE 100%);">
                        <i class="fa-solid fa-shield-halved text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Compliance-first approach</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Native-level translation with rigorous terminology management, deadline adherence, and
                        regulatory awareness built into every step of our process. Quality that passes regulatory
                        scrutiny.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Specialist Translation Matters Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Column: Image -->
            <div class="order-2 lg:order-1">
                <img src="images/inspiration/2.jpg" alt="Financial documents"
                    class="rounded-xl shadow-2xl w-full h-auto">
            </div>

            <!-- Right Column: Content -->
            <div class="order-1 lg:order-2">
                <div class="inline-block mb-4 px-4 py-2 rounded-full"
                    style="background-color: rgba(31, 75, 118, 0.1);">
                    <span class="text-sm font-bold tracking-wider uppercase" style="color: #1f4b76;">
                        WHY IT MATTERS
                    </span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">You can't just ask AI...</h2>

                <div class="space-y-6">
                    <div class="bg-white p-6 rounded-lg shadow-md border-l-4" style="border-color: #1f4b76;">
                        <p class="text-lg text-gray-700 leading-relaxed">
                            Translating regulated financial documents is not simply a linguistic exercise.
                            <strong>Inconsistent terminology, imprecise wording or a lack of regulatory awareness</strong> can create
                            unnecessary compliance risk.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Yes, AI and machine translation can do many things, we also use them! But for highly technical
                            documents like annual reports, financial statements, or regulatory documents, it's best not to rely solely
                            on computers.
                        </p>
                        <p class="text-gray-700 leading-relaxed">
                            Just think of the many ways the word <em>"rate"</em> can be translated without context!
                            Human translators will always play a crucial role. And that's where we come in...
                        </p>
                    </div>

                    <div class="p-6 rounded-lg text-white shadow-lg"
                        style="background: linear-gradient(135deg, #1f4b76 0%, #2d7fb8 100%);">
                        <p class="text-xl font-semibold">
                            Specialist financial translation, with the right mix of digital and human resources, makes all the difference.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'footer.php'; ?>