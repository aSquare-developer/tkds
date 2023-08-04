<!doctype html>
<html lang="en" class="h-full bg-white">
@include('dashboard.includes.head')
<body class="h-full">

    @include('dashboard.includes.mobile-menu')

    @include('dashboard.includes.sidebar')

    <div class="lg:pl-72">
        <div class="sticky top-0 z-40 flex h-16 shrink-0 items-center gap-x-4 border-b border-gray-200 bg-white px-4 shadow-sm sm:gap-x-6 sm:px-4 lg:px-4">
            <button type="button" class="-m-2.5 p-2.5 text-gray-700 lg:hidden">
                <span class="sr-only">Open sidebar</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>

            <div class="flex flex-1 justify-between gap-x-4 self-stretch lg:gap-x-6">
                <div class="flex items-center">@yield('page-header')</div>

                <div class="flex">
                    <div class="flex items-center">
                        <a href="{{ route('home') }}" target="_blank" class="bg-gray-800 text-white group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold hover:text-white hover:bg-gray-600">Visit TKDS</a>
                    </div>
                    <div class="flex items-center">
                        <div class="relative">
                            <button type="button" class="-m-1.5 flex items-center p-1.5" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <span class="hidden lg:flex lg:items-center">
                                    <span class="ml-4 text-sm font-semibold leading-6 text-gray-900" aria-hidden="true">{{ auth()->user()->name }}</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('dashboard.includes.main')
    </div>

</body>
</html>
