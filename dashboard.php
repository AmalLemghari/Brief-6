<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex flex-wrap bg-gray-100 w-full h-screen">
        <!-- <div class="w-3/12 bg-gradient-to-b from-indigo-500 to-green-500 rounded p-3 shadow-lg"> -->
        <div class="h-full bg-gradient-to-b from-indigo-500 to-green-500 rounded p-3 shadow-lg">

            <div class="flex items-center space-x-4 p-2 mb-5">
                <div class="relative">
                    <img class="w-10 h-10 rounded-full" src="images/team.jpg" alt="">
                    <span class="top-0 left-7 absolute  w-3.5 h-3.5 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full"></span>
                </div>
                <div>
                    <h4 class="font-semibold text-lg text-gray-700 capitalize font-poppins tracking-wide">Marie Lefevre</h4>
                    <span class="text-sm tracking-wide flex items-center space-x-1">
                        <svg class="h-4 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg><span class="text-gray-600">Verified</span>
                    </span>
                </div>
            </div>
            <ul class="space-y-2 text-sm">
                <li>
                    <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 bg-gray-200 focus:shadow-outline">
                        <span class="text-gray-600">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                        <span class="text-gray-600">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                            </svg>
                        </span>
                        <span>Team members</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                        <span class="text-gray-600">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                            </svg>
                        </span>
                        <span>Projects</span>
                    </a>
                </li>
                <!-- <li>
                    <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                        <span class="text-gray-600">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <span>My profile</span>
                    </a>
                </li> -->
                <!-- <li>
                    <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                        <span class="text-gray-600">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                            </svg>
                        </span>
                        <span>My orders</span>
                    </a>
                </li> -->
                <!-- <li>
                    <a href="" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                        <span class=" text-gray-600">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </span>
                        <span>My wishlist</span>
                    </a>
                </li> -->
                <!-- <li>
                    <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                        <span class="text-gray-600">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                            </svg>
                        </span>
                        <span>Settings</span>
                    </a>
                </li> -->
                <!-- <li>
                    <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                        <span class="text-gray-600">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </span>
                        <span>Change password</span>
                    </a>
                </li> -->
                <li>
                    <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                        <span class="text-gray-600">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                        </span>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    


    <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 flex items-center justify-center">
        <div class="max-w-xs bg-white shadow-md rounded-lg overflow-hidden transform transition-transform hover:translate-y-2">
            <div class="p-4">
                <h1 class="text-xl font-semibold"></h1>
                <div class="mt-2">
                    <a href="#" class="text-blue-500 underline"></a>
                </div>
                
                <div class="flex items-center gap-4">
                    <img class="w-10 h-10 rounded-full" src="images/team1.jpg" alt="team 1">
                    <div class="font-medium dark:text-white">
                        <div>Jese Leos</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">Joined in August 2020</div>
                    </div>
                </div>

                <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita cumque qui minus exercitationem dolores minima cum sunt unde ut et facilis vitae vel, ad in laborum quae labore praesentium illo?</p>
            </div>
        </div>
    </div>

    <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 flex items-center justify-center">
        <div class="max-w-xs bg-white shadow-md rounded-lg overflow-hidden transform transition-transform hover:translate-y-2">
            <div class="p-4">
                <h1 class="text-xl font-semibold"></h1>
                <div class="mt-2">
                    <a href="#" class="text-blue-500 underline"></a>
                </div>
                
                <div class="flex items-center gap-4">
                    <img class="w-10 h-10 rounded-full" src="images/team2.jpg" alt="team 2">
                    <div class="font-medium dark:text-white">
                        <div>Émilie Dubois</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">Joined in Junary 2019</div>
                    </div>
                </div>

                <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita cumque qui minus exercitationem dolores minima cum sunt unde ut et facilis vitae vel, ad in laborum quae labore praesentium illo?</p>
            </div>
        </div>
    </div>

    <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 flex items-center justify-center">
        <div class="max-w-xs bg-white shadow-md rounded-lg overflow-hidden transform transition-transform hover:translate-y-2">
            <div class="p-4">
                <h1 class="text-xl font-semibold"></h1>
                <div class="mt-2">
                    <a href="#" class="text-blue-500 underline"></a>
                </div>
                
                <div class="flex items-center gap-4">
                    <img class="w-10 h-10 rounded-full" src="images/team3.jpg" alt="team 3">
                    <div class="font-medium dark:text-white">
                        <div>Hugo Mercier</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">Joined in april 2019</div>
                    </div>
                </div>

                <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita cumque qui minus exercitationem dolores minima cum sunt unde ut et facilis vitae vel, ad in laborum quae labore praesentium illo?</p>
            </div>
        </div>
    </div>

</div>


        

</body>
</html>
