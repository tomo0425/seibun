<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 ">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="/components">
                        <image style="width:50px; height:50px;" src="https://www.silhouette-illust.com/wp-content/uploads/2016/11/16428-300x300.jpg">
                    </a>
                </div>

            </div>

            <!-- Settings Dropdown -->
            <div class="flex flex-row-reverse">
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>
    
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>
                        
                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>
    
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
    
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
                <div class="flex shrink-0 items-center">
                    <a href="/posts/index">
                        <image style="width:40px; height:40px;" src="https://www.silhouette-illust.com/wp-content/uploads/2019/09/memo_keijiban_45212-600x600.jpg">
                    </a>
                </div>
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                                <div>
                                    <a>
                                        <image style="width:30px; height:30px;" src="data:image/png;base64,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">
                                    </a>    
                                </div>
                        </x-slot>
                        
                        <x-slot name="content">
                            <x-dropdown-link>
                               <div class="@yield('seibun')">
                                  @yield('navigations')
                                </div>
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>    
            
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>         

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>                                                                                                                                                                                                                  
        </div>
    </div>
    
    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
