<?php include("./includes/header.php"); ?>
    <style>
        .bg-trainer {
            background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('/api/placeholder/1600/900');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Navigation -->
    <nav class="bg-gray-900 text-white shadow-lg ">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <i class="fas fa-dumbbell text-indigo-500 text-2xl mr-2"></i>
                        <a href="gym1.php" class="font-bold text-xl">FitHub</a>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <a href="home.php" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>
                            <a href="class.php" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Classes</a>
                            <a href="#" class="bg-indigo-600 text-white px-3 py-2 rounded-md text-sm font-medium">Trainers</a>
                        </div>
                    </div>
                </div>
                <div class="flex items-center">
                    <button type="button" class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none">
                        <i class="fas fa-bell"></i>
                        <span class="absolute top-3 right-14 md:right-28 inline-flex items-center justify-center h-5 w-5 rounded-full bg-red-500 text-xs font-bold text-white">3</span>
                    </button>
                    <div class="ml-4 flex items-center md:ml-6">
                        <div class="ml-3 relative">
                            <div class="flex items-center">
                                <div class="h-8 w-8 rounded-full bg-indigo-600 flex items-center justify-center">
                                    <span class="text-sm font-medium text-white">JD</span>
                                </div>
                                <span class="ml-2 text-sm text-gray-300">John Doe</span>
                            </div>
                        </div>
                    </div>
                    <div class="ml-4 md:hidden">
                        <button type="button" class="text-gray-400 hover:text-white focus:outline-none">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Membership Status Banner -->
    <div class="bg-indigo-600 text-white p-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center">
            <div class="flex items-center mb-2 md:mb-0">
                <i class="fas fa-star-half-alt text-yellow-300 mr-2"></i>
                <span>Your <span class="font-semibold">Premium Membership</span> expires in <span class="font-bold">23 days</span></span>
            </div>
            <button id="renew-btn" class="bg-yellow-500 hover:bg-yellow-600 text-black font-bold py-1 px-4 rounded-lg transition duration-300">
                Renew Now
            </button>
        </div>
    </div>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Trainer Management Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Trainer Management</h1>
            <p class="text-gray-600">Browse, book, and manage your personal trainers.</p>
        </div>

        <!-- Trainer Filter and Search -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <label for="trainer-specialty" class="block text-sm font-medium text-gray-700 mb-1">Specialty</label>
                    <select id="trainer-specialty" class="w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 py-2 px-3 border">
                        <option value="">All Specialties</option>
                        <option value="strength">Strength Training</option>
                        <option value="cardio">Cardio</option>
                        <option value="yoga">Yoga</option>
                        <option value="hiit">HIIT</option>
                        <option value="nutrition">Nutrition</option>
                        <option value="rehab">Rehabilitation</option>
                    </select>
                </div>
                <div>
                    <label for="trainer-availability" class="block text-sm font-medium text-gray-700 mb-1">Availability</label>
                    <select id="trainer-availability" class="w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 py-2 px-3 border">
                        <option value="">Any Time</option>
                        <option value="morning">Morning (6AM - 12PM)</option>
                        <option value="afternoon">Afternoon (12PM - 5PM)</option>
                        <option value="evening">Evening (5PM - 10PM)</option>
                        <option value="weekend">Weekends Only</option>
                    </select>
                </div>
                <div>
                    <label for="trainer-search" class="block text-sm font-medium text-gray-700 mb-1">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-search text-gray-400"></i>
                        </div>
                        <input type="text" id="trainer-search" class="pl-10 w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 py-2 px-3 border" placeholder="Search trainers...">
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col md:flex-row gap-6">
            <!-- Left Column - Trainers List -->
            <div class="w-full md:w-2/3">
                <!-- Trainer Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <!-- Trainer Card 1 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                        <div class="relative">
                            <img src="assetes/images/R.jpeg" alt="Mike Thompson" class="w-full h-48 object-cover">
                            <div class="absolute top-4 right-4 bg-indigo-600 text-white text-xs font-bold px-2 py-1 rounded-full">
                                Top Rated
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900">Mike Thompson</h3>
                                    <p class="text-gray-600">HIIT & CrossFit Specialist</p>
                                </div>
                                <div class="flex text-yellow-500">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="ml-1 text-gray-600 text-sm">(48)</span>
                                </div>
                            </div>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">HIIT</span>
                                <span class="bg-indigo-100 text-indigo-800 text-xs px-2 py-1 rounded">CrossFit</span>
                                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Strength</span>
                                <span class="bg-red-100 text-red-800 text-xs px-2 py-1 rounded">Weight Loss</span>
                            </div>
                            <p class="text-gray-600 text-sm mb-4">
                                Certified CrossFit coach with 8+ years of experience helping clients achieve their fitness goals through high-intensity training.
                            </p>
                            <div class="flex justify-between items-center">
                                <div>
                                    <span class="text-gray-900 font-bold">$85</span>
                                    <span class="text-gray-600 text-sm">/ session</span>
                                </div>
                                <button onclick="openTrainerDetails('mike-thompson')" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition duration-300">
                                    View Profile
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Trainer Card 2 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                        <div class="relative">
                            <img src="assetes/images/t.jpeg" alt="Sarah Johnson" class="w-full h-48 object-cover">
                            <div class="absolute top-4 right-4 bg-green-600 text-white text-xs font-bold px-2 py-1 rounded-full">
                                Available Today
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900">Sarah Johnson</h3>
                                    <p class="text-gray-600">Yoga & Mindfulness Expert</p>
                                </div>
                                <div class="flex text-yellow-500">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span class="ml-1 text-gray-600 text-sm">(35)</span>
                                </div>
                            </div>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-red-100 text-red-800 text-xs px-2 py-1 rounded">Yoga</span>
                                <span class="bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded">Pilates</span>
                                <span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded">Meditation</span>
                                <span class="bg-pink-100 text-pink-800 text-xs px-2 py-1 rounded">Flexibility</span>
                            </div>
                            <p class="text-gray-600 text-sm mb-4">
                                200-hour certified yoga instructor specializing in vinyasa flow, restorative yoga, and mindfulness techniques for stress reduction.
                            </p>
                            <div class="flex justify-between items-center">
                                <div>
                                    <span class="text-gray-900 font-bold">$75</span>
                                    <span class="text-gray-600 text-sm">/ session</span>
                                </div>
                                <button onclick="openTrainerDetails('sarah-johnson')" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition duration-300">
                                    View Profile
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Trainer Card 3 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                        <div class="relative">
                            <img src="assetes/images/e.jpeg" alt="Alex Peterson" class="w-full h-48 object-cover">
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900">Alex Peterson</h3>
                                    <p class="text-gray-600">Cardio & Cycling Coach</p>
                                </div>
                                <div class="flex text-yellow-500">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span class="ml-1 text-gray-600 text-sm">(29)</span>
                                </div>
                            </div>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded">Cycling</span>
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">Cardio</span>
                                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Endurance</span>
                                <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">Nutrition</span>
                            </div>
                            <p class="text-gray-600 text-sm mb-4">
                                Former competitive cyclist with expertise in endurance training, interval workouts, and cardio-based fitness programs.
                            </p>
                            <div class="flex justify-between items-center">
                                <div>
                                    <span class="text-gray-900 font-bold">$70</span>
                                    <span class="text-gray-600 text-sm">/ session</span>
                                </div>
                                <button onclick="openTrainerDetails('alex-peterson')" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition duration-300">
                                    View Profile
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Trainer Card 4 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                        <div class="relative">
                            <img src="assetes/images/q.jpeg" alt="Emma Lee" class="w-full h-48 object-cover">
                            <div class="absolute top-4 right-4 bg-purple-600 text-white text-xs font-bold px-2 py-1 rounded-full">
                                New Trainer
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900">Emma Lee</h3>
                                    <p class="text-gray-600">Pilates & Rehabilitation</p>
                                </div>
                                <div class="flex text-yellow-500">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span class="ml-1 text-gray-600 text-sm">(12)</span>
                                </div>
                            </div>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded">Pilates</span>
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">Rehab</span>
                                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Core</span>
                                <span class="bg-orange-100 text-orange-800 text-xs px-2 py-1 rounded">Posture</span>
                            </div>
                            <p class="text-gray-600 text-sm mb-4">
                                Certified Pilates instructor with physical therapy background, specializing in rehabilitation and corrective exercise techniques.
                            </p>
                            <div class="flex justify-between items-center">
                                <div>
                                    <span class="text-gray-900 font-bold">$80</span>
                                    <span class="text-gray-600 text-sm">/ session</span>
                                </div>
                                <button onclick="openTrainerDetails('emma-lee')" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition duration-300">
                                    View Profile
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Trainer Card 5 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                        <div class="relative">
                            <img src="assetes/images/w.jpeg" alt="James Rodriguez" class="w-full h-48 object-cover">
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900">James Rodriguez</h3>
                                    <p class="text-gray-600">Strength & Conditioning</p>
                                </div>
                                <div class="flex text-yellow-500">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span class="ml-1 text-gray-600 text-sm">(31)</span>
                                </div>
                            </div>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Strength</span>
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">Functional</span>
                                <span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded">Sports</span>
                                <span class="bg-red-100 text-red-800 text-xs px-2 py-1 rounded">Performance</span>
                            </div>
                            <p class="text-gray-600 text-sm mb-4">
                                Strength and conditioning specialist with a background in sports performance, focusing on functional training and athletic development.
                            </p>
                            <div class="flex justify-between items-center">
                                <div>
                                    <span class="text-gray-900 font-bold">$90</span>
                                    <span class="text-gray-600 text-sm">/ session</span>
                                </div>
                                <button onclick="openTrainerDetails('james-rodriguez')" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition duration-300">
                                    View Profile
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Trainer Card 6 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                        <div class="relative">
                            <img src="assetes/images/o.jpg" alt="Maria Garcia" class="w-full h-48 object-cover">
                            <div class="absolute top-4 right-4 bg-green-600 text-white text-xs font-bold px-2 py-1 rounded-full">
                                Available Today
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900">Maria Garcia</h3>
                                    <p class="text-gray-600">Dance & Zumba Instructor</p>
                                </div>
                                <div class="flex text-yellow-500">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="ml-1 text-gray-600 text-sm">(45)</span>
                                </div>
                            </div>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-pink-100 text-pink-800 text-xs px-2 py-1 rounded">Zumba</span>
                                <span class="bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded">Dance</span>
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">Cardio</span>
                                <span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded">Rhythm</span>
                            </div>
                            <p class="text-gray-600 text-sm mb-4">
                                Licensed Zumba instructor bringing energy and fun to fitness through dance-based workouts that appeal to all fitness levels.
                            </p>
                            <div class="flex justify-between items-center">
                                <div>
                                    <span class="text-gray-900 font-bold">$65</span>
                                    <span class="text-gray-600 text-sm">/ session</span>
                                </div>
                                <button onclick="openTrainerDetails('maria-garcia')" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition duration-300">
                                    View Profile
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="flex justify-center items-center my-6">
                    <nav class="flex items-center">
                        <button class="px-3 py-1 rounded-l-lg border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="px-3 py-1 border-t border-b border-gray-300 bg-indigo-600 text-white">1</button>
                        <button class="px-3 py-1 border-t border-b border-gray-300 bg-white text-gray-700 hover:bg-gray-50">2</button>
                        <button class="px-3 py-1 border-t border-b border-gray-300 bg-white text-gray-700 hover:bg-gray-50">3</button>
                        <button class="px-3 py-1 rounded-r-lg border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </nav>
                </div>
            </div>

            <!-- Right Column - Featured Trainer and Stats -->
            <div class="w-full md:w-1/3 space-y-6">
                <!-- Featured Trainer -->
                <div class="bg-gradient-to-r from-indigo-700 to-purple-700 rounded-xl overflow-hidden shadow-lg text-white">
                    <div class="p-6">
                        <span class="inline-block bg-yellow-500 text-black text-xs font-bold px-2 py-1 rounded mb-3">FEATURED TRAINER</span>
                        <h3 class="text-xl font-bold mb-2">David Miller</h3>
                        <p class="text-sm text-indigo-200 mb-4">CrossFit Level 3 Trainer</p>
                        <div class="flex items-center mb-4">
                            <div class="h-16 w-16 rounded-full bg-white flex items-center justify-center mr-3">
                                <img src="assetes/images/m.webp" alt="David Miller" class="h-16 w-16 rounded-full">
                            </div>
                            <div>
                                <div class="flex text-yellow-300 mb-1">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="text-sm text-indigo-100">125+ satisfied clients</p>
                            </div>
                        </div>
                        <p class="mb-4 text-indigo-100">
                            "David transformed my approach to fitness with his expert knowledge and motivational coaching. I've never been stronger!"
                        </p>
                        <div class="text-sm text-indigo-200 italic mb-6">
                            - Jennifer K., lost 30 lbs in 3 months
                        </div>
                        <button onclick="openTrainerDetails('david-miller')" class="w-full bg-white text-indigo-700 font-bold py-2 px-4 rounded-lg hover:bg-indigo-100 transition duration-300">
                            View Profile
                        </button>
                    </div>
                </div>
                
                <!-- Your Trainers Widget -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="p-6 border-b border-gray-200">
                        <h3 class="font-bold text-gray-900">Your Trainers</h3>
                    </div>
                    <div class="p-6">
                        <div class="space-y-4">
                            <div class="border border-gray-200 rounded-lg p-4 flex justify-between items-center">
                                <div class="flex items-center">
                                    <div class="h-12 w-12 rounded-full mr-4">
                                        <img src="/api/placeholder/100/100" alt="Mike T." class="h-12 w-12 rounded-full">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">Mike Thompson</h4>
                                        <p class="text-sm text-gray-500">Next session: Today, 5:30 PM</p>
                                    </div>
                                </div>
                                <button class="text-indigo-600 hover:text-indigo-800 focus:outline-none">
                                    <i class="fas fa-calendar-alt"></i>
                                </button>
                            </div>
                            <div class="border border-gray-200 rounded-lg p-4 flex justify-between items-center">
                                <div class="flex items-center">
                                    <div class="h-12 w-12 rounded-full mr-4">
                                        <img src="/api/placeholder/100/100" alt="Sarah J." class="h-12 w-12 rounded-full">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">Sarah Johnson</h4>
                                        <p class="text-sm text-gray-500">Next session: Fri, May 6, 9:00 AM</p>
                                    </div>
                                </div>
                                <button class="text-indigo-600 hover:text-indigo-800 focus:outline-none">
                                    <i class="fas fa-calendar-alt"></i>
                                </button>
                            </div>
                        </div>
                        <div class="mt-4 text-center">
                        <button class="text-indigo-600 font-medium hover:text-indigo-800 focus:outline-none">
                                View All Sessions
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Stats Widget -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="p-6 border-b border-gray-200">
                        <h3 class="font-bold text-gray-900">Your Fitness Progress</h3>
                    </div>
                    <div class="p-6">
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm font-medium text-gray-700">Weekly Sessions</span>
                                    <span class="text-sm font-medium text-indigo-600">3/4</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-indigo-600 h-2 rounded-full" style="width: 75%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm font-medium text-gray-700">Monthly Goal</span>
                                    <span class="text-sm font-medium text-indigo-600">65%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-green-500 h-2 rounded-full" style="width: 65%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm font-medium text-gray-700">Trainer Satisfaction</span>
                                    <span class="text-sm font-medium text-indigo-600">90%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-yellow-500 h-2 rounded-full" style="width: 90%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Upcoming Events Widget -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="p-6 border-b border-gray-200">
                        <h3 class="font-bold text-gray-900">Upcoming Events</h3>
                    </div>
                    <div class="p-6">
                        <div class="space-y-4">
                            <div class="border border-gray-200 rounded-lg p-4">
                                <div class="flex items-center justify-between mb-2">
                                    <h4 class="font-semibold text-gray-900">Group HIIT Challenge</h4>
                                    <span class="bg-red-100 text-red-800 text-xs px-2 py-1 rounded">Tomorrow</span>
                                </div>
                                <p class="text-sm text-gray-600 mb-2">Join Mike for a high-intensity group workout challenge</p>
                                <div class="flex items-center text-gray-500 text-sm">
                                    <i class="far fa-clock mr-1"></i>
                                    <span>9:00 AM - 10:30 AM</span>
                                </div>
                            </div>
                            <div class="border border-gray-200 rounded-lg p-4">
                                <div class="flex items-center justify-between mb-2">
                                    <h4 class="font-semibold text-gray-900">Yoga Retreat</h4>
                                    <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">May 15</span>
                                </div>
                                <p class="text-sm text-gray-600 mb-2">Full day yoga retreat with Sarah at Willowbrook Park</p>
                                <div class="flex items-center text-gray-500 text-sm">
                                    <i class="far fa-clock mr-1"></i>
                                    <span>8:00 AM - 4:00 PM</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 text-center">
                            <button class="text-indigo-600 font-medium hover:text-indigo-800 focus:outline-none">
                                View All Events
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-lg font-bold mb-4">FitHub</h3>
                    <p class="text-gray-400 text-sm">
                        The ultimate fitness management platform for trainers and clients to connect and achieve their goals.
                    </p>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-white">Home</a></li>
                        <li><a href="#" class="hover:text-white">Classes</a></li>
                        <li><a href="#" class="hover:text-white">Trainers</a></li>
                        <li><a href="#" class="hover:text-white">Nutrition</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-4">Support</h3>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-white">Help Center</a></li>
                        <li><a href="#" class="hover:text-white">Contact Us</a></li>
                        <li><a href="#" class="hover:text-white">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-white">Terms of Service</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-4">Connect</h3>
                    <div class="flex space-x-4 mb-4">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                    <p class="text-gray-400 text-sm">Subscribe to our newsletter</p>
                    <div class="mt-2 flex">
                        <input type="email" placeholder="Your email" class="bg-gray-800 text-white px-3 py-2 text-sm rounded-l-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <button class="bg-indigo-600 px-3 py-2 text-sm rounded-r-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-6 text-center text-gray-400 text-sm">
                <p>&copy; 2025 FitHub. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Trainer Detail Modal -->
    <div id="trainer-modal" class="hidden fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50 flex items-center justify-center">
        <div class="bg-white rounded-xl shadow-2xl max-w-4xl w-full mx-4 my-8">
            <div id="trainer-modal-content" class="relative">
                <!-- Modal content will be loaded dynamically -->
                <div class="bg-trainer rounded-t-xl p-12 text-white relative">
                    <button id="close-modal" class="absolute top-4 right-4 text-white hover:text-gray-300 focus:outline-none">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="h-32 w-32 rounded-full bg-white p-1 mb-6 md:mb-0 md:mr-8">
                            <img src="/api/placeholder/300/300" alt="Trainer" class="h-full w-full rounded-full">
                        </div>
                        <div>
                            <h2 id="modal-trainer-name" class="text-3xl font-bold mb-2">Mike Thompson</h2>
                            <p id="modal-trainer-specialty" class="text-xl text-indigo-200 mb-4">HIIT & CrossFit Specialist</p>
                            <div class="flex items-center">
                                <div class="flex text-yellow-400 mr-2">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span id="modal-trainer-reviews" class="text-white">(48 reviews)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-8">
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="bg-blue-100 text-blue-800 text-sm px-3 py-1 rounded-full">HIIT</span>
                        <span class="bg-indigo-100 text-indigo-800 text-sm px-3 py-1 rounded-full">CrossFit</span>
                        <span class="bg-green-100 text-green-800 text-sm px-3 py-1 rounded-full">Strength</span>
                        <span class="bg-red-100 text-red-800 text-sm px-3 py-1 rounded-full">Weight Loss</span>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-4">About</h3>
                            <p class="text-gray-600 mb-4">
                                Certified CrossFit coach with 8+ years of experience helping clients achieve their fitness goals through high-intensity training. Specializing in functional movement, weight loss, and athletic performance.
                            </p>
                            <p class="text-gray-600">
                                My approach combines challenging workouts with proper form and technique to ensure safe and effective progress. I believe in pushing boundaries while adapting workouts to each client's individual needs and goals.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Credentials</h3>
                            <ul class="space-y-2 text-gray-600">
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                    <span>CrossFit Level 3 Trainer</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                    <span>NASM Certified Personal Trainer</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                    <span>Precision Nutrition Level 1 Coach</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                    <span>First Aid & CPR Certified</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                    <span>Bachelor's in Exercise Science</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <div class="border border-gray-200 rounded-lg p-4 text-center">
                            <div class="text-3xl font-bold text-indigo-600 mb-1">$85</div>
                            <div class="text-gray-500 text-sm">Per session (60 min)</div>
                        </div>
                        <div class="border border-gray-200 rounded-lg p-4 text-center">
                            <div class="text-3xl font-bold text-indigo-600 mb-1">$750</div>
                            <div class="text-gray-500 text-sm">Package (10 sessions)</div>
                        </div>
                        <div class="border border-gray-200 rounded-lg p-4 text-center">
                            <div class="text-3xl font-bold text-indigo-600 mb-1">85%</div>
                            <div class="text-gray-500 text-sm">Client success rate</div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-4 mt-8">
                        <button class="flex-1 bg-indigo-600 text-white py-3 rounded-lg font-bold hover:bg-indigo-700 transition duration-300">
                            Book a Session
                        </button>
                        <button class="flex-1 border border-indigo-600 text-indigo-600 py-3 rounded-lg font-bold hover:bg-indigo-50 transition duration-300">
                            Send Message
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
    <script>
        // Modal functionality
        function openTrainerDetails(trainerId) {
            document.getElementById('trainer-modal').classList.remove('hidden');
            // In a real application, you would fetch trainer details based on ID
            // For this example, we're just showing the modal with placeholder content
        }

        document.getElementById('close-modal').addEventListener('click', function() {
            document.getElementById('trainer-modal').classList.add('hidden');
        });
        
        // Close modal when clicking outside
        document.getElementById('trainer-modal').addEventListener('click', function(e) {
            if (e.target === this) {
                this.classList.add('hidden');
            }
        });
        
        // Renew membership button
        document.getElementById('renew-btn').addEventListener('click', function() {
            alert('Taking you to membership renewal page...');
        });
    </script>
