<div class=" w-full h-full flex flex-col text-xs ">
    <form class="xs:mt-24 sm:items-center xs:items-center flex flex-col gap-4 lg:items-center sm:mb-8 w-full">
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
