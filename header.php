<!DOCTYPE html>
<html lang="en">

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
    <!-- Navigation Bar -->
    <nav class="bg-white shadow-md fixed w-full top-0 z-50">
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
                    <a href="index.php#services" class="text-gray-700 hover:text-blue-900 transition duration-300 <?php echo (isset($current_page) && $current_page == 'home') ? 'font-semibold' : ''; ?>">Home</a>
                    <a href="about.php" class="text-gray-700 hover:text-blue-900 transition duration-300 <?php echo (isset($current_page) && $current_page == 'about') ? 'text-blue-900 font-semibold' : ''; ?>">Services</a>
                    <a href="contact.php" class="text-gray-700 hover:text-blue-900 transition duration-300 <?php echo (isset($current_page) && $current_page == 'contact') ? 'text-blue-900 font-semibold' : ''; ?>">Contact</a>
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
                    class="block px-3 py-2 text-gray-700 hover:text-blue-900 hover:bg-gray-50 rounded-md transition duration-300">Services</a>
                <a href="about.php"
                    class="block px-3 py-2 text-gray-700 hover:text-blue-900 hover:bg-gray-50 rounded-md transition duration-300 <?php echo (isset($current_page) && $current_page == 'about') ? 'text-blue-900 font-semibold bg-blue-50' : ''; ?>">About</a>
                <a href="contact.php"
                    class="block px-3 py-2 text-gray-700 hover:text-blue-900 hover:bg-gray-50 rounded-md transition duration-300 <?php echo (isset($current_page) && $current_page == 'contact') ? 'text-blue-900 font-semibold bg-blue-50' : ''; ?>">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Spacer for fixed navbar -->
    <div class="h-16"></div>