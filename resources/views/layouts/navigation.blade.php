<nav class ='nav' x-data="{ open: false }" >
    <!-- Primary Navigation Menu Dashboard -->
    <div class="nav-bar-container">    
        <a href="{{ url('/dashboard') }}"> <img class = "logo" src="{{ asset('assets/Logo.svg') }}"></a> 

        <div class = "dashboard-nav-bar-right-div">

        <div class = 'dashboard-search-container'>
        <!-- Search Input -->
            <form class="search-input" action="search.php" method="GET">
                <input class="search" placeholder = "Search..." type="text" name="query">
                <button value='Search' class="search-button" type="submit"><img src= "{{ asset('assets/Glass-icon.svg') }}"></button>
                
            </form>
            </div>
            
        
            <!-- Navigation Links -->
            <div class="dashboard-nav-link-container">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        <img src="{{ asset('assets/Home-icon.svg') }}" alt="">
                        <!--{{ ('Pepito') }}-->
                    </x-nav-link>
                    <x-nav-link :href="route('formAddNewCard.index')"
                        :active="request()->routeIs('formAddNewCard.index')">
                        <img src="{{ asset('assets/Create-icon.svg') }}" alt="">
                    </x-nav-link>
                    <form method="POST" action="{{ route('logout') }}">
                            @csrf
                     <x-nav-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();"> <img src="{{ asset('assets/Logout-icon.svg') }}" alt="">
                                <!--{{ __('Log Out') }}-->
                    </x-nav-link>
                        </form>

                </div>
               
            </div>

        </div>

            <!-- Settings Dropdown 
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}
                            </div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">-->
                        <!-- Authentication 
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div> -->

            <!-- Hamburger 
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div> -->

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('formAddNewCard.index')"
                :active="request()->routeIs('formAddNewCard.index')">
                Add New
            </x-responsive-nav-link>
        </div>


        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}
                </div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>