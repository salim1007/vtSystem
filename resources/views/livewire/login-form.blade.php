<div class=" w-full h-full flex flex-col text-xs ">
    <form class="xs:mt-24 sm:items-center xs:items-center flex flex-col gap-4 lg:items-center sm:mb-8 w-full">
        @if(session()->has('success'))
            <div id="toast-simple" class="flex items-center w-full max-w-xs p-4 space-x-4 rtl:space-x-reverse text-gray-500 bg-white divide-x rtl:divide-x-reverse divide-gray-200 rounded-lg shadow dark:text-gray-400 dark:divide-gray-700 space-x dark:bg-gray-800" role="alert">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <div class="ps-4 text-sm font-normal">{{ session('success') }}</div>
            </div>

        @endif
        <div class="flex flex-col">
            <h1 class="text-gray-800 font-bold text-lg mb-1">Hello Again!</h1>
            <p class="text-xs font-normal text-gray-600 mb-7">Welcome Back</p>
        </div>
        <div class=" flex-row gap-4 sm:flex-col xs:flex-col md:flex md:flex-row lg:flex lg:flex-row lg:gap-8 ">
            <div class=" flex flex-col gap-2 md:flex md:gap-4">
                <div>
                    <div class="sml:w-96 w-80 md:w-80 lg:w-72 xs:w-48 sm:w-64 ">
                        <input wire:model="email" type="text" name="email" id="email" placeholder="Email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>
                    @error('email')
                    <span class=" rounded-md  text-red-600 text-xs p-2 w-64">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <div class="sml:w-96 w-80 md:w-80 lg:w-72 xs:w-48 sm:w-64 ">
                        <input wire:model="password" type="password" name="password" id="password" placeholder="Password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white text-sm dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>
                    @error('password')
                    <span class="  text-red-600 text-xs p-2 w-64">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <button type="submit" wire:click.prevent="login" class="block w-fit p-3 bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2 hover:bg-blue-900">Login</button>
        <div class="flex flex-col sm:items-center sm:gap-2 sm:mb-12">
            <span class="text-xs ml-2 hover:text-blue-500 cursor-pointer">Forgot Password?</span>
            <span class="text-xs ml-2  cursor-pointer">Don't have an account? <a wire:navigate href="/register" class="text-blue-500 font-bold">Sign Up</a></span>
        </div>

    </form>

</div>
