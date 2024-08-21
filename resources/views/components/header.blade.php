<div class="fixed top-0 left-0 z-20 w-full">
    <nav class="max-w-[1800px] mx-auto bg-white shadow-sm">
        <div class="flex items-center justify-between container md:w-[89%] mx-auto px-4 pt-6 max-sm:pt-4 max-sm:pb-4">
            <a href="{{ route('home', app()->getLocale()) }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('images/logo-ksr.png') }}" class="h-14 max-sm:h-12" alt="Logo KSR" />
            </a>
            <div class="flex items-center gap-5">
                <div class="flex gap-2">
                    <a href="{{ route(Route::currentRouteName(), array_merge(Route::current()->parameters(), ['language' => 'id'])) }}" class="text-xs px-8 max-sm:px-3 py-1.5 border transition duration-150 ease-in {{ app()->getLocale() == 'id' ? 'bg-red-600 text-white border-red-600' : 'border-gray-300 hover:border-red-600 hover:bg-red-600 hover:text-white' }}">
                        <span class="hidden max-sm:block">ID</span>
                        <span class="block max-sm:hidden">Indonesia</span>
                    </a>
                    <a href="{{ route(Route::currentRouteName(), array_merge(Route::current()->parameters(), ['language' => 'en'])) }}" class="text-xs px-8 max-sm:px-3 py-1.5 border transition duration-150 ease-in {{ app()->getLocale() == 'en' ? 'bg-red-600 text-white border-red-600' : 'border-gray-300 hover:border-red-600 hover:bg-red-600 hover:text-white' }}">
                        <span class="hidden max-sm:block">EN</span>
                        <span class="block max-sm:hidden">English</span>
                    </a>
                </div>
                <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="hidden w-full md:block md:w-auto py-4 max-sm:bg-gray-100" id="navbar-default">
            <div class="container md:w-[89%] mx-auto px-4 grid grid-cols-1 md:grid-cols-2 items-center max-sm:gap-4">
                <div class="pl-3 max-sm:pl-0">
                    <ul class="flex flex-col text-sm font-light p-4 max-sm:p-0 md:p-0 mt-4 max-sm:mt-0 border border-gray-100 rounded-lg bg-gray-50 max-sm:bg-gray-100 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
                        <li>
                            <button id="dd_aboutusLink" data-dropdown-toggle="dd_aboutus" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0 md:w-auto">
                                {{ __('language.aboutus') }}
                                <svg class="w-2 h-2 ms-1 mt-1 text-red-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dd_aboutus" class="z-10 hidden font-light bg-white max-sm:bg-gray-100 divide-y divide-gray-100 shadow max-sm:shadow-none dd_menu">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="{{ route('milestones', app()->getLocale()) }}" class="block px-4 max-sm:px-6 py-2 hover:bg-gray-100">{{ __('language.milestone') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('our_facility', app()->getLocale()) }}" class="block px-4 max-sm:px-6 py-2 hover:bg-gray-100">{{ __('language.ourfacility') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('faq', app()->getLocale()) }}" class="block px-4 max-sm:px-6 py-2 hover:bg-gray-100">{{ __('language.faq') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('our_customer', app()->getLocale()) }}" class="block px-4 max-sm:px-6 py-2 hover:bg-gray-100">{{ __('language.ourcust') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('certificate', app()->getLocale()) }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0">{{ __('language.certificate') }}</a>
                        </li>
                        <li>
                            <button id="dd_maklonLink" data-dropdown-toggle="dd_maklon" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0 md:w-auto">
                                {{ __('language.maklon') }}
                                <svg class="w-2 h-2 ms-1 mt-1 text-red-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dd_maklon" class="z-10 hidden font-light bg-white max-sm:bg-gray-100 divide-y divide-gray-100 shadow max-sm:shadow-none dd_menu">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="{{ route('car_care', app()->getLocale()) }}" class="block px-4 max-sm:px-6 py-2 hover:bg-gray-100">{{ __('language.carcare') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('house_care', app()->getLocale()) }}" class="block px-4 max-sm:px-6 py-2 hover:bg-gray-100">{{ __('language.household') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('personal_care', app()->getLocale()) }}" class="block px-4 max-sm:px-6 py-2 hover:bg-gray-100">{{ __('language.personalcare') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('contactus', app()->getLocale()) }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0">{{ __('language.contactus') }}</a>
                        </li>
                    </ul>
                </div>
                <div class="relative">
                    <form action="#">
                        <input type="text" id="search-navbar" class="block w-full p-3 ps-5 text-sm font-light text-gray-900 border border-gray-400 rounded-full bg-white focus:border-gray-500 focus:ring-gray-500 focus:shadow-none" placeholder="Search">
                        <div class="absolute inset-y-0 end-0 flex items-center justify-center cursor-pointer bg-gray-500 w-20 rounded-r-full">
                            <button type="submit" class="">
                                <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                                <span class="sr-only">Search icon</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</div>