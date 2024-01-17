<!-- component -->
{{--<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>--}}
<div class="md:flex flex-col md:flex-row md:min-h-screen w-full">
    <div @click.away="open = false" class="flex flex-col w-full md:w-64 text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0" x-data="{ open: false }">
        <div class="flex-shrink-0 px-8 py-4 flex flex-row items-center w-screen justify-between">
            <a href="#" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">vtsystem</a>
            <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>

        </div>
        <nav :class="{'block': open, 'hidden': !open}" class="flex-grow md:block px-4 pb-4 md:pb-0 md:overflow-y-auto">
            <a wire:navigate class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/profile">Profile</a>
            <a wire:navigate class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/candidates">Candidates</a>
            @if($this->date_is_in_btn)
            <a wire:navigate class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/vote">Vote</a>
            @endif
            <a wire:navigate class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/chatroom">ChatRoom</a>
            @if(!$this->date_is_in_btn)
                <a wire:navigate class=" block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/results">Results</a>
            @endif
            <a wire:navigate class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/mail">Mailbox</a>
            <div @click.away="open = false" class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:block hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                    <span>Security</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                    <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                        <a wire:navigate class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/privacy_policy">Privacy Policy</a>
                        <a wire:navigate class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/terms_of_service">Terms & Conditions</a>
                    </div>
                </div>
            </div>
            @if(session()->get('vali') != 'profile')
                <div wire:click="logout" class="flex items-center hover:bg-gray-200 mt-4 w-28 rounded-md">
                    <a  class="block px-4 py-2 text-sm font-semibold  bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 focus:outline-none italic  text-red-600 focus:shadow-outline" href="#">Logout</a>
                    <button  class="" >
                        <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M17 16L21 12M21 12L17 8M21 12L7 12M13 16V17C13 18.6569 11.6569 20 10 20H6C4.34315 20 3 18.6569 3 17V7C3 5.34315 4.34315 4 6 4H10C11.6569 4 13 5.34315 13 7V8" stroke="#374151" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
                    </button>
                </div>
            @endif

            <span class="flex ml-3.5 md:hidden xs:mt-14">Powered by @Ydde-MaUI</span>
        </nav>

    </div>
    <div class="flex justify-center w-full bg-gray-200 ">
        @if(session()->get('vali') == 'profile')
            <div class="flex flex-col w-full">
                <livewire:user-pages.user-profile />
                <footer class="flex xs:text-xs w-full p-3 bg-gray-300">
                    <p class="font-medium">&copy; <span id="currentYear"></span> vtSystem</p>
                </footer>
            </div>

        @elseif(session()->get('vali') == 'candidates')
            <div class="flex flex-col w-full items-center">
                <livewire:user-pages.user-candidates />
                <footer class="flex xs:text-xs w-full p-3 bg-gray-300">
                    <p class="font-medium">&copy; <span id="currentYear"></span> vtSystem</p>
                </footer>
            </div>

        @elseif(session()->get('vali') == 'vote')
            @if($this->date_is_in_btn)
                <div class="flex flex-col w-full">
                    <livewire:user-pages.user-votepage />
                    <footer class="flex xs:text-xs w-full p-3 bg-gray-300">
                        <p class="font-medium">&copy; <span id="currentYear"></span> vtSystem</p>
                    </footer>
                </div>

            @else
                <div class="fixed inset-0 flex z-50">
                    <div class="modal-overlay fixed inset-0 bg-black bg-opacity-98 text-white  smx:text-2xl xs:text-sm lg:text-3xl flex justify-center pt-52"> 401 - Unauthorized</div>
                </div>
            @endif
        @elseif(session()->get('vali') == 'chatroom')
            <div class="flex flex-col w-full">
                <livewire:user-pages.user-chatroom />
                <footer class="flex xs:text-xs w-full p-3 bg-gray-300">
                    <p class="font-medium">&copy; <span id="currentYear"></span> vtSystem</p>
                </footer>
            </div>

        @elseif(session()->get('vali') == 'results')
            @if(!$this->date_is_in_btn)
                <div class="flex flex-col w-full">
                    <livewire:user-pages.user-results />
                    <footer class="flex xs:text-xs w-full p-3 bg-gray-300">
                        <p class="font-medium">&copy; <span id="currentYear"></span> vtSystem</p>
                    </footer>
                </div>
            @else
                <div class="fixed inset-0 flex z-50">
                    <div class="modal-overlay fixed inset-0 bg-black bg-opacity-98 text-white  smx:text-2xl xs:text-sm lg:text-3xl flex justify-center pt-52"> 401 - Unauthorized</div>
                </div>
            @endif
        @elseif(session()->get('vali') == 'mail')
            <div class="flex flex-col w-full">
                <livewire:user-pages.user-mailbox />
                <footer class="flex xs:text-xs w-full p-3 bg-gray-300">
                    <p class="font-medium">&copy; <span id="currentYear"></span> vtSystem</p>
                </footer>
            </div>

        @elseif(session()->get('vali') == 'privacy_policy')
            <div class="flex flex-col w-full">
                <livewire:user-pages.user-p-r-policy />
                <footer class="flex xs:text-xs w-full p-3 bg-gray-300">
                    <p class="font-medium">&copy; <span id="currentYear"></span> vtSystem</p>
                </footer>
            </div>

        @elseif(session()->get('vali') == 'terms_of_service')
            <div class="flex flex-col w-full">
                <livewire:user-pages.user-terms />
                <footer class="flex xs:text-xs w-full p-3 bg-gray-300">
                    <p class="font-medium">&copy; <span id="currentYear"></span> vtSystem</p>
                </footer>
            </div>

        @endif
    </div>






</div>
<script src="https://cdn.jsdelivr.net/npm/apexcharts">
</script>

