<?php include("./includes/header.php"); ?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
        }
        
        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .trainer-img {
            filter: grayscale(40%);
            transition: all 0.3s ease;
        }
        
        .trainer-card:hover .trainer-img {
            filter: grayscale(0%);
        }
        
        .class-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, rgba(79, 70, 229, 0.2) 0%, rgba(79, 70, 229, 0.9) 100%);
            opacity: 0;
            transition: all 0.4s ease;
            border-radius: 0.5rem;
            z-index: 1;
        }
        
        .class-card:hover::before {
            opacity: 1;
        }
        
        .class-info {
            z-index: 2;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.4s ease;
        }
        
        .class-card:hover .class-info {
            opacity: 1;
            transform: translateY(0);
        }
        
        .feature-card {
            overflow: hidden;
        }
        
        .feature-card:hover .feature-icon {
            transform: scale(1.2) rotate(10deg);
        }
        
        @keyframes pulse-ring {
            0% {
                transform: scale(0.9);
                opacity: 0.8;
            }
            70% {
                transform: scale(1.5);
                opacity: 0;
            }
            100% {
                transform: scale(0.9);
                opacity: 0;
            }
        }
        
        .pulse::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: #4f46e5;
            border-radius: 50%;
            animation: pulse-ring 1.8s cubic-bezier(0.215, 0.61, 0.355, 1) infinite;
        }
        
        .scrolled {
            background-color: white;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        
        .progress-container {
            width: 100%;
            height: 4px;
            background: transparent;
            position: fixed;
            top: 0;
            z-index: 100;
        }
        
        .progress-bar {
            height: 4px;
            background: #7c3aed;
            width: 0%;
        }
        
        .counters-section .counter-box {
            transition: all 0.3s ease;
        }
        
        .counters-section .counter-box:hover {
            transform: translateY(-5px);
        }
        
        .wave-divider {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 50px;
            overflow: hidden;
        }
        
        .wave {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 200%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg viewBox="0 0 1200 120" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" fill="%23ffffff"></path></svg>');
            background-repeat: repeat-x;
            background-size: 1200px 100%;
            animation: wave 10s linear infinite;
        }
        
        @keyframes wave {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }
        
        .special-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .login-btn:hover .btn-text {
            transform: translateX(-8px);
        }
        
        .login-btn:hover .btn-icon {
            opacity: 1;
            transform: translateX(0);
        }
        
        .btn-icon {
            opacity: 0;
            transform: translateX(-15px);
        }
        
        .btn-text, .btn-icon {
            transition: all 0.3s ease;
        }
        
        .skewed-bg {
            clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
        }
        
        .dashboard-menu-item {
            position: relative;
            transition: all 0.3s ease;
        }
        
        .dashboard-menu-item::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #4f46e5;
            transition: width 0.3s ease;
        }
        
        .dashboard-menu-item:hover::after {
            width: 100%;
        }

        /* Notification Badge */
        .notification-badge {
            position: relative;
        }
        
        .notification-badge::after {
            content: '';
            position: absolute;
            top: 0px;
            right: 0px;
            width: 8px;
            height: 8px;
            background-color: #ef4444;
            border-radius: 50%;
        }
        
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #4f46e5;
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #7c3aed;
        }
        .parallax {
            background-image: url('assetes/images/R.jpeg');
            min-height: 100vh;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Progress Bar -->
    <div class="progress-container">
        <div class="progress-bar" id="progressBar"></div>
    </div>

    <!-- Navigation Bar -->
    <nav class="fixed w-full z-50 transition-all duration-300" id="navbar" x-data="{ mobileMenuOpen: false, userMenuOpen: false, notificationsOpen: false, dashboardOpen: false }">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <div class="text-3xl text-indigo-600 mr-2">
                        <i class="fas fa-dumbbell animate__animated animate__swing animate__delay-1s"></i>
                    </div>
                    <span class="font-bold text-2xl bg-gradient-to-r from-indigo-600 to-purple-600 text-transparent bg-clip-text">FitHub</span>
                </div>
                
                <div class="hidden md:flex space-x-8">
                    <a href="user.php" class="text-gray-800 hover:text-indigo-600 transition-colors duration-300 dashboard-menu-item">Home</a>
                    <a href="#classes" class="text-gray-800 hover:text-indigo-600 transition-colors duration-300 dashboard-menu-item">Classes</a>
                    <a href="#membership" class="text-gray-800 hover:text-indigo-600 transition-colors duration-300 dashboard-menu-item">Membership</a>
                    <a href="#trainers" class="text-gray-800 hover:text-indigo-600 transition-colors duration-300 dashboard-menu-item">Trainers</a>
                    <a href="#contact" class="text-gray-800 hover:text-indigo-600 transition-colors duration-300 dashboard-menu-item">Contact</a>
                </div>
                
                <div class="hidden md:flex items-center space-x-4">
                    <!-- Dashboard Button -->
                    <div class="relative" @click.away="dashboardOpen = false">
                        <button @click="dashboardOpen = !dashboardOpen" class="flex items-center text-gray-800 hover:text-indigo-600 transition-colors duration-300 dashboard-menu-item">
                            <span>Dashboard</span>
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        
                        <div x-show="dashboardOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50" style="display: none;">
                            <a href="user.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-100">My Profile</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-100">My Classes</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-100">My Membership</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-100">Payment History</a>
                        </div>
                    </div>
                    
                    <!-- Notifications Button -->
                    <div class="relative" @click.away="notificationsOpen = false">
                        <button @click="notificationsOpen = !notificationsOpen" class="text-gray-800 hover:text-indigo-600 transition-colors duration-300 notification-badge">
                            <i class="far fa-bell text-xl"></i>
                        </button>
                        
                        <div x-show="notificationsOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute right-0 mt-2 w-80 bg-white rounded-md shadow-lg py-1 z-50" style="display: none;">
                            <div class="px-4 py-2 border-b border-gray-200">
                                <p class="text-sm font-medium text-gray-700">Notifications</p>
                            </div>
                            <div class="max-h-60 overflow-y-auto">
                                <a href="#" class="block px-4 py-3 hover:bg-gray-50 transition ease-in-out duration-150">
                                    <div class="flex items-start">
                                        <div class="flex-shrink-0 bg-indigo-100 rounded-full p-1">
                                            <i class="fas fa-calendar-check text-indigo-600"></i>
                                        </div>
                                        <div class="ml-3 w-0 flex-1">
                                            <p class="text-sm font-medium text-gray-900">Class Booking Confirmed</p>
                                            <p class="text-sm text-gray-500">Your HIIT class is confirmed for tomorrow at 6:00 PM</p>
                                            <p class="mt-1 text-xs text-gray-400">1 hour ago</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="block px-4 py-3 hover:bg-gray-50 transition ease-in-out duration-150">
                                    <div class="flex items-start">
                                        <div class="flex-shrink-0 bg-yellow-100 rounded-full p-1">
                                            <i class="fas fa-exclamation-circle text-yellow-600"></i>
                                        </div>
                                        <div class="ml-3 w-0 flex-1">
                                            <p class="text-sm font-medium text-gray-900">Membership Expiring Soon</p>
                                            <p class="text-sm text-gray-500">Your membership expires in 7 days. Renew now!</p>
                                            <p class="mt-1 text-xs text-gray-400">1 day ago</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="px-4 py-2 border-t border-gray-200">
                                <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">View all notifications</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- User Menu -->
                    <div class="relative ml-3" @click.away="userMenuOpen = false">
                        <button @click="userMenuOpen = !userMenuOpen" class="flex items-center">
                            <div class="h-8 w-8 rounded-full bg-indigo-600 flex items-center justify-center text-white">
                                <i class="fas fa-user-circle"></i>
                            </div>
                        </button>
                        
                        <div x-show="userMenuOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50" style="display: none;">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-100">Your Profile</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-100">Settings</a>
                            <div class="border-t border-gray-100"></div>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-100">Sign out</a>
                        </div>
                    </div>
                    
                    <a href="log.php" class="login-btn bg-indigo-600 text-white px-6 py-2 rounded-lg font-semibold overflow-hidden flex items-center">
                        <span class="btn-text">Login</span>
                        <i class="fas fa-arrow-right ml-2 btn-icon"></i>
                    </a>
                </div>
                
                <div class="md:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-gray-800 focus:outline-none">
                        <svg class="h-6 w-6" x-show="!mobileMenuOpen" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg class="h-6 w-6" x-show="mobileMenuOpen" style="display: none;" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Mobile Menu -->
            <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="md:hidden mt-4 pb-2 space-y-2" style="display: none;">
                <a href="#" class="block py-2 px-3 rounded-lg text-gray-800 hover:bg-indigo-100 hover:text-indigo-600 transition-colors duration-300">Home</a>
                <a href="#classes" class="block py-2 px-3 rounded-lg text-gray-800 hover:bg-indigo-100 hover:text-indigo-600 transition-colors duration-300">Classes</a>
                <a href="#membership" class="block py-2 px-3 rounded-lg text-gray-800 hover:bg-indigo-100 hover:text-indigo-600 transition-colors duration-300">Membership</a>
                <a href="#trainers" class="block py-2 px-3 rounded-lg text-gray-800 hover:bg-indigo-100 hover:text-indigo-600 transition-colors duration-300">Trainers</a>
                <a href="#contact" class="block py-2 px-3 rounded-lg text-gray-800 hover:bg-indigo-100 hover:text-indigo-600 transition-colors duration-300">Contact</a>
                <a href="dashboard.php" class="block py-2 px-3 rounded-lg text-gray-800 hover:bg-indigo-100 hover:text-indigo-600 transition-colors duration-300">Dashboard</a>
                <a href="login.php" class="block py-2 px-3 mt-4 rounded-lg bg-indigo-600 text-white hover:bg-indigo-700 transition-colors duration-300">Login</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
<div class="relative text-white pt-28 pb-20 overflow-hidden">
    <!-- Background Video -->
    <video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover">
        <source src="assetes/images/g2.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Overlay (optional: to darken video for better text readability) -->
    <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-40"></div>

    <!-- Content -->
    <div class="container mx-auto px-4 py-12 md:pt-16 md:pb-24 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div class="animate__animated animate__fadeInLeft">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                    Transform Your <span class="relative">Body<span class="absolute -bottom-2 left-0 w-full h-1 bg-white opacity-40"></span></span>, 
                    Transform Your <span class="relative">Life<span class="absolute -bottom-2 left-0 w-full h-1 bg-white opacity-40"></span></span>
                </h1>
                <p class="text-lg md:text-xl mb-8 text-indigo-100">
                    Join our community of fitness enthusiasts and achieve your health goals with personalized training plans and expert guidance.
                </p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="#membership" class="bg-white text-indigo-700 px-8 py-4 rounded-lg font-semibold text-center hover:bg-indigo-100 transition duration-300 transform hover:scale-105 hover:shadow-lg">Join Now</a>
                    <a href="#classes" class="border-2 border-white px-8 py-4 rounded-lg font-semibold text-center hover:bg-white hover:text-indigo-700 transition duration-300">View Classes</a>
                </div>
                <div class="mt-12 hidden md:flex space-x-6">
                    <div class="flex items-center">
                        <div class="h-12 w-12 rounded-full flex items-center justify-center bg-white bg-opacity-20 mr-3">
                            <i class="fas fa-check text-white"></i>
                        </div>
                        <span>Expert Trainers</span>
                    </div>
                    <div class="flex items-center">
                        <div class="h-12 w-12 rounded-full flex items-center justify-center bg-white bg-opacity-20 mr-3">
                            <i class="fas fa-check text-white"></i>
                        </div>
                        <span>Premium Equipment</span>
                    </div>
                </div>
            </div>

            <!-- Right Content -->
            <div class="relative animate__animated animate__fadeInRight">
                <div class="h-96 w-96 mx-auto relative">
                    <div class="absolute inset-0 rounded-full bg-gradient-to-r from-indigo-500 to-purple-600 blur-3xl opacity-30 animate-pulse"></div>
                    <img src="/api/placeholder/500/500" alt="Fitness" class="rounded-3xl relative z-10 shadow-2xl transform -rotate-3">
                    <div class="absolute -bottom-6 -right-6 h-24 w-24 bg-yellow-400 rounded-xl transform rotate-12 flex items-center justify-center text-gray-800 font-bold shadow-lg">
                        <div>
                            <div class="text-2xl">50%</div>
                            <div class="text-xs">DISCOUNT</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


        <!-- Floating Cards -->
        <div class="hidden lg:block absolute bottom-20 left-10 special-card rounded-xl p-4 shadow-lg transform rotate-6 animate__animated animate__fadeInUp animate__delay-1s">
            <div class="flex items-center">
                <div class="w-10 h-10 rounded-full bg-green-500 flex items-center justify-center mr-3">
                    <i class="fas fa-dumbbell text-white"></i>
                </div>
                <div>
                    <div class="text-sm font-medium">New Member</div>
                    <div class="text-xs opacity-80">John just joined!</div>
                </div>
            </div>
        </div>
        
        <div class="hidden lg:block absolute top-40 right-20 special-card rounded-xl p-4 shadow-lg transform -rotate-3 animate__animated animate__fadeInUp animate__delay-2s">
            <div class="flex items-center">
                <div class="w-10 h-10 rounded-full bg-indigo-500 flex items-center justify-center mr-3">
                    <i class="fas fa-calendar-check text-white"></i>
                </div>
                <div>
                    <div class="text-sm font-medium">Class Booked</div>
                    <div class="text-xs opacity-80">75 bookings today</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="counters-section py-12 bg-white ">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="counter-box text-center p-6 rounded-lg hover:shadow-lg transition-all duration-500">
                    <div class="text-4xl font-bold text-indigo-600 mb-2 counter" data-target="12000">
                        <span class="count">0</span><span>+</span>
                    </div>
                    <div class="text-gray-600">Happy Members</div>
                </div>
                
                <div class="counter-box text-center p-6 rounded-lg hover:shadow-lg transition-all duration-500">
                    <div class="text-4xl font-bold text-indigo-600 mb-2 counter" data-target="250">
                        <span class="count">0</span><span>+</span>
                    </div>
                    <div class="text-gray-600">Weekly Classes</div>
                </div>
                
                <div class="counter-box text-center p-6 rounded-lg hover:shadow-lg transition-all duration-500">
                    <div class="text-4xl font-bold text-indigo-600 mb-2 counter" data-target="30">
                        <span class="count">0</span><span>+</span>
                    </div>
                    <div class="text-gray-600">Expert Trainers</div>
                </div>
                
                <div class="counter-box text-center p-6 rounded-lg hover:shadow-lg transition-all duration-500">
                    <div class="text-4xl font-bold text-indigo-600 mb-2 counter" data-target="98">
                        <span class="count">0</span><span>%</span>
                    </div>
                    <div class="text-gray-600">Success Rate</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="container mx-auto px-4 py-20">
        <div class="text-center mb-16" data-aos="fade-up">
            <p class="text-indigo-600 text-sm uppercase font-semibold tracking-wider mb-2">Our Advantages</p>
            <h2 class="text-3xl md:text-4xl font-bold">Why Choose FitHub?</h2>
            <div class="w-24 h-1 bg-indigo-600 mx-auto mt-4"></div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div class="feature-card bg-white p-8 rounded-xl shadow-lg transition-all duration-500 card-hover" data-aos="fade-up" data-aos-delay="100">
                <div class="text-indigo-600 text-5xl mb-6 feature-icon transition-all duration-500">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">Expert Trainers</h3>
                <p class="text-gray-600 mb-6">Our certified trainers create personalized workout plans to help you achieve your fitness goals efficiently and safely.</p>
                <a href="#trainers" class="text-indigo-600 font-medium hover:text-indigo-800 flex items-center">
                    Learn More
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
            
            <div class="feature-card bg-white p-8 rounded-xl shadow-lg transition-all duration-500 card-hover" data-aos="fade-up" data-aos-delay="200">
                <div class="text-indigo-600 text-5xl mb-6 feature-icon transition-all duration-500">
                    <i class="fas fa-dumbbell"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">Modern Equipment</h3>
                <p class="text-gray-600 mb-6">Access state-of-the-art fitness equipment designed to maximize your workout performance and get you results faster.</p>
                <a href="#classes" class="text-indigo-600 font-medium hover:text-indigo-800 flex items-center">
                    Learn More
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
            
            <div class="feature-card bg-white p-8 rounded-xl shadow-lg transition-all duration-500 card-hover" data-aos="fade-up" data-aos-delay="300">
                <div class="text-indigo-600 text-5xl mb-6 feature-icon transition-all duration-500">
                    <i class="fas fa-clock"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">Flexible Hours</h3>
                <p class="text-gray-600 mb-6">Open 24/7 to accommodate your busy schedule. Work out whenever is most convenient for you, day or night.</p>
                <a href="#membership" class="text-indigo-600 font-medium hover:text-indigo-800 flex items-center">
                    Learn More
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>

   

    <!-- Membership Section -->
    <div id="membership" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16" data-aos="fade-up">
                <p class="text-indigo-600 text-sm uppercase font-semibold tracking-wider mb-2">Pricing Plans</p>
                <h2 class="text-3xl md:text-4xl font-bold">Choose Your Membership</h2>
                <div class="w-24 h-1 bg-indigo-600 mx-auto mt-4"></div>
                <p class="text-gray-600 mt-6 max-w-2xl mx-auto">Select the perfect membership option that fits your fitness goals and budget.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-500 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="100">
                    <div class="p-8 border-b">
                        <h3 class="text-xl font-semibold mb-2">Basic</h3>
                        <div class="flex items-end mb-4">
                            <span class="text-4xl font-bold">$29</span>
                            <span class="text-gray-500 ml-1">/month</span>
                        </div>
                        <p class="text-gray-600">Perfect for beginners who want to start their fitness journey.</p>
                    </div>
                    <div class="p-8">
                        <ul class="space-y-4">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>Access to gym facilities</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>2 group classes per week</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>Basic fitness assessment</span>
                            </li>
                            <li class="flex items-center text-gray-400">
                                <i class="fas fa-times text-red-500 mr-3"></i>
                                <span>Personal training sessions</span>
                            </li>
                            <li class="flex items-center text-gray-400">
                                <i class="fas fa-times text-red-500 mr-3"></i>
                                <span>Nutrition consultation</span>
                            </li>
                        </ul>
                        <a href="#" class="mt-8 block w-full bg-gray-100 text-indigo-600 text-center py-3 rounded-lg font-semibold hover:bg-gray-200 transition duration-300">Choose Plan</a>
                    </div>
                </div>
                
                <div class="bg-indigo-600 rounded-xl shadow-lg overflow-hidden transform scale-105 relative z-10 transition-all duration-500 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="200">
                    <div class="absolute top-0 right-0 bg-yellow-400 text-xs font-bold px-3 py-1 uppercase rounded-bl-lg">Popular</div>
                    <div class="p-8 border-b border-indigo-500">
                        <h3 class="text-xl font-semibold mb-2 text-white">Premium</h3>
                        <div class="flex items-end mb-4">
                            <span class="text-4xl font-bold text-white">$59</span>
                            <span class="text-indigo-200 ml-1">/month</span>
                        </div>
                        <p class="text-indigo-100">Our most popular plan for fitness enthusiasts.</p>
                    </div>
                    <div class="p-8">
                        <ul class="space-y-4 text-white">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-300 mr-3"></i>
                                <span>24/7 access to gym facilities</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-300 mr-3"></i>
                                <span>Unlimited group classes</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-300 mr-3"></i>
                                <span>Advanced fitness assessment</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-300 mr-3"></i>
                                <span>2 personal training sessions/month</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-300 mr-3"></i>
                                <span>Nutrition consultation</span>
                            </li>
                        </ul>
                        <a href="#" class="mt-8 block w-full bg-white text-indigo-600 text-center py-3 rounded-lg font-semibold hover:bg-indigo-50 transition duration-300">Choose Plan</a>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-500 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="300">
                    <div class="p-8 border-b">
                        <h3 class="text-xl font-semibold mb-2">Elite</h3>
                        <div class="flex items-end mb-4">
                            <span class="text-4xl font-bold">$99</span>
                            <span class="text-gray-500 ml-1">/month</span>
                        </div>
                        <p class="text-gray-600">The ultimate fitness experience with personalized attention.</p>
                    </div>
                    <div class="p-8">
                        <ul class="space-y-4">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>24/7 access to all facilities</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>Unlimited group classes</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>Comprehensive fitness assessment</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>8 personal training sessions/month</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>Personalized nutrition plan</span>
                            </li>
                        </ul>
                        <a href="#" class="mt-8 block w-full bg-gray-100 text-indigo-600 text-center py-3 rounded-lg font-semibold hover:bg-gray-200 transition duration-300">Choose Plan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Trainers Section -->
    <div id="trainers" class="py-20 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16" data-aos="fade-up">
                <p class="text-indigo-600 text-sm uppercase font-semibold tracking-wider mb-2">Expert Team</p>
                <h2 class="text-3xl md:text-4xl font-bold">Meet Our Trainers</h2>
                <div class="w-24 h-1 bg-indigo-600 mx-auto mt-4"></div>
                <p class="text-gray-600 mt-6 max-w-2xl mx-auto">Our certified fitness professionals are dedicated to helping you achieve your goals.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="trainer-card bg-white rounded-xl overflow-hidden shadow-lg transition-all duration-500 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="100">
                    <div class="relative">
                        <img src="/api/placeholder/300/300" alt="Trainer" class="w-full h-64 object-cover trainer-img">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-indigo-600 to-transparent p-4">
                            <h3 class="text-white text-lg font-semibold">Sarah Johnson</h3>
                            <p class="text-indigo-100 text-sm">Yoga Specialist</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4">10+ years of experience teaching various yoga styles including Vinyasa, Hatha, and Restorative yoga.</p>
                        <div class="flex space-x-3">
                            <a href="#" class="text-indigo-600 hover:text-indigo-800"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-indigo-600 hover:text-indigo-800"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="text-indigo-600 hover:text-indigo-800"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="trainer-card bg-white rounded-xl overflow-hidden shadow-lg transition-all duration-500 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative">
                        <img src="/api/placeholder/300/300" alt="Trainer" class="w-full h-64 object-cover trainer-img">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-indigo-600 to-transparent p-4">
                            <h3 class="text-white text-lg font-semibold">Michael Rodriguez</h3>
                            <p class="text-indigo-100 text-sm">Strength Coach</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4">Former competitive powerlifter specializing in strength development and muscle building programs.</p>
                        <div class="flex space-x-3">
                            <a href="#" class="text-indigo-600 hover:text-indigo-800"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-indigo-600 hover:text-indigo-800"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="text-indigo-600 hover:text-indigo-800"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="trainer-card bg-white rounded-xl overflow-hidden shadow-lg transition-all duration-500 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="300">
                    <div class="relative">
                        <img src="/api/placeholder/300/300" alt="Trainer" class="w-full h-64 object-cover trainer-img">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-indigo-600 to-transparent p-4">
                            <h3 class="text-white text-lg font-semibold">Emily Chen</h3>
                            <p class="text-indigo-100 text-sm">HIIT Instructor</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4">Certified in high-intensity interval training and group fitness with expertise in metabolic conditioning.</p>
                        <div class="flex space-x-3">
                            <a href="#" class="text-indigo-600 hover:text-indigo-800"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-indigo-600 hover:text-indigo-800"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="text-indigo-600 hover:text-indigo-800"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="trainer-card bg-white rounded-xl overflow-hidden shadow-lg transition-all duration-500 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="400">
                    <div class="relative">
                        <img src="/api/placeholder/300/300" alt="Trainer" class="w-full h-64 object-cover trainer-img">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-indigo-600 to-transparent p-4">
                            <h3 class="text-white text-lg font-semibold">David Wilson</h3>
                            <p class="text-indigo-100 text-sm">Nutrition Coach</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4">Certified nutritionist specializing in meal planning, weight management, and performance nutrition.</p>
                        <div class="flex space-x-3">
                            <a href="#" class="text-indigo-600 hover:text-indigo-800"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-indigo-600 hover:text-indigo-800"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="text-indigo-600 hover:text-indigo-800"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16" data-aos="fade-up">
                <p class="text-indigo-600 text-sm uppercase font-semibold tracking-wider mb-2">Get In Touch</p>
                <h2 class="text-3xl md:text-4xl font-bold">Contact Us</h2>
                <div class="w-24 h-1 bg-indigo-600 mx-auto mt-4"></div>
                <p class="text-gray-600 mt-6 max-w-2xl mx-auto">Have questions or ready to start your fitness journey? Reach out to us today.</p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div data-aos="fade-right">
                    <div class="bg-indigo-600 rounded-2xl p-8 text-white">
                        <h3 class="text-2xl font-semibold mb-6">Contact Information</h3>
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="mr-4 mt-1">
                                    <i class="fas fa-map-marker-alt text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-medium mb-1">Address</h4>
                                    <p class="text-indigo-100">123 Fitness Street, Workout City, FL 10001</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="mr-4 mt-1">
                                    <i class="fas fa-phone-alt text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-medium mb-1">Phone</h4>
                                    <p class="text-indigo-100">(123) 456-7890</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="mr-4 mt-1">
                                    <i class="fas fa-envelope text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-medium mb-1">Email</h4>
                                    <p class="text-indigo-100">info@fithub.com</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="mr-4 mt-1">
                                    <i class="far fa-clock text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-medium mb-1">Hours</h4>
                                    <p class="text-indigo-100">Open 24/7</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-8">
                            <h4 class="font-medium mb-3">Follow Us</h4>
                            <div class="flex space-x-4">
                                <a href="#" class="h-10 w-10 rounded-full bg-white bg-opacity-20 flex items-center justify-center hover:bg-opacity-30 transition duration-300">
                                    <i class="fab fa-facebook-f text-white"></i>
                                </a>
                                <a href="#" class="h-10 w-10 rounded-full bg-white bg-opacity-20 flex items-center justify-center hover:bg-opacity-30 transition duration-300">
                                    <i class="fab fa-twitter text-white"></i>
                                </a>
                                <a href="#" class="h-10 w-10 rounded-full bg-white bg-opacity-20 flex items-center justify-center hover:bg-opacity-30 transition duration-300">
                                    <i class="fab fa-instagram text-white"></i>
                                </a>
                                <a href="#" class="h-10 w-10 rounded-full bg-white bg-opacity-20 flex items-center justify-center hover:bg-opacity-30 transition duration-300">
                                    <i class="fab fa-youtube text-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div data-aos="fade-left">
                    <form class="bg-white rounded-2xl p-8 shadow-lg">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
                                <input type="text" id="name" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition" placeholder="Your Name">
                            </div>
                            <div>
                                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                                <input type="email" id="email" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition" placeholder="Your Email">
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <label for="subject" class="block text-gray-700 font-medium mb-2">Subject</label>
                            <input type="text" id="subject" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition" placeholder="Subject">
                        </div>
                        
                        <div class="mb-6">
                            <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
                            <textarea id="message" rows="5" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition" placeholder="Your Message"></textarea>
                        </div>
                        
                        <button type="submit" class="w-full bg-indigo-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-indigo-700 transition duration-300 flex items-center justify-center">
                            Send Message
                            <i class="fas fa-paper-plane ml-2"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-16 pb-6">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <div>
                    <div class="flex items-center mb-6">
                        <div class="text-3xl text-indigo-400 mr-2">
                            <i class="fas fa-dumbbell"></i>
                        </div>
                        <span class="font-bold text-2xl">FitHub</span>
                    </div>
                    <p class="text-gray-400 mb-6">Empowering people to reach their fitness goals with expert guidance and premium facilities.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-6">Quick Links</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Home</a></li>
                        <li><a href="#classes" class="text-gray-400 hover:text-white transition duration-300">Classes</a></li>
                        <li><a href="#membership" class="text-gray-400 hover:text-white transition duration-300">Membership</a></li>
                        <li><a href="#trainers" class="text-gray-400 hover:text-white transition duration-300">Trainers</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white transition duration-300">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-6">Services</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Personal Training</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Group Classes</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Nutrition Coaching</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Fitness Assessment</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Online Programs</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-6">Newsletter</h3>
                    <p class="text-gray-400 mb-4">Subscribe to our newsletter for the latest updates and offers.</p>
                    <form>
                        <div class="flex">
                            <input type="email" placeholder="Your Email" class="bg-gray-800 text-white px-4 py-2 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 w-full">
                            <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-r-lg hover:bg-indigo-700 transition duration-300">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-6">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-400 text-sm">&copy; 2025 FitHub. All rights reserved.</p>
                    <div class="mt-4 md:mt-0">
                        <ul class="flex space-x-6">
                            <li><a href="#" class="text-gray-400 hover:text-white text-sm transition duration-300">Privacy Policy</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white text-sm transition duration-300">Terms of Service</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white text-sm transition duration-300">Cookie Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <a href="#" id="backToTop" class="fixed bottom-8 right-8 bg-indigo-600 text-white h-12 w-12 rounded-full flex items-center justify-center shadow-lg transform transition-all duration-300 scale-0">
        <i class="fas fa-chevron-up"></i>
    </a>

    <!-- JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            once: true
        });
        
        // Navbar Scroll Effect
        const navbar = document.getElementById('navbar');
        const backToTopBtn = document.getElementById('backToTop');
        const progressBar = document.getElementById('progressBar');
        
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
            
            // Show or hide back to top button
            if (window.scrollY > 300) {
                backToTopBtn.classList.remove('scale-0');
                backToTopBtn.classList.add('scale-100');
            } else {
                backToTopBtn.classList.remove('scale-100');
                backToTopBtn.classList.add('scale-0');
            }
            
            // Update progress bar
            const scrollableHeight = document.documentElement.scrollHeight - window.innerHeight;
            const scrolled = (window.scrollY / scrollableHeight) * 100;
            progressBar.style.width = scrolled + '%';
        });
        
        // Back to top functionality
        backToTopBtn.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Counter animation
        const counters = document.querySelectorAll('.count');
        const speed = 300; // The lower the faster
        
        const startCounters = () => {
            counters.forEach(counter => {
                const target = +counter.closest('.counter').getAttribute('data-target');
                let count = 0;
                const updateCount = () => {
                    const increment = target / speed;
                    if (count < target) {
                        count += increment;
                        counter.innerText = Math.ceil(count);
                        setTimeout(updateCount, 1);
                    } else {
                        counter.innerText = target;
                    }
                };
                updateCount();
            });
        };
        
        // Start counters when they come into view
        const counterSection = document.querySelector('.counters-section');
        const observerOptions = {
            threshold: 0.5
        };
        
        const observer = new IntersectionObserver(function(entries) {
            if (entries[0].isIntersecting) {
                startCounters();
                observer.unobserve(counterSection);
            }
        }, observerOptions);
        
        observer.observe(counterSection);
    </script>
</body>
</html>