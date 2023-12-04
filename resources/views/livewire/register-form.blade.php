<div class=" w-full h-full flex flex-col ">
    <form class="xs:mt-24 sm:items-center xs:items-center flex flex-col gap-4 lg:items-center sm:mb-8 w-full">
        <div class="flex flex-col">
            <h1 class=" font-bold text-2xl text-blue-600 sm:text-lg sml:text-lg xs:text-sm mb-6">Welcome to Student E-Voting</h1>
            <h1 class="text-gray-800 font-semibold italic sm:text-lg sml:text-lg xs:text-sm text-2xl mb-6">Fill the form below to register</h1>
        </div>
        <div class=" flex-row gap-4 sm:flex-col xs:flex-col md:flex md:flex-row lg:flex lg:flex-row lg:gap-8 ">
            <div class=" flex flex-col gap-2 md:flex md:gap-4">
                <div>
                    <div class="sml:w-96 w-80 md:w-80 lg:w-72 xs:w-48 sm:w-64 ">
                        <input wire:model="firstname" type="text" name="firstname" id="firstname" placeholder="First Name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>
                    @error('firstname')
                    <span class=" rounded-md  text-red-600 text-xs p-2 w-64">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <div class="sml:w-96 w-80 md:w-80 lg:w-72 xs:w-48 sm:w-64 ">
                        <input wire:model="midname" type="text" name="midname" id="midname" placeholder="Mid-Name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>
                    @error('midname')
                    <span class="  text-red-600 text-xs p-2 w-64">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <div class="sml:w-96 w-80 md:w-80 lg:w-72 xs:w-48 sm:w-64 ">
                        <input wire:model="surname" type="text" name="surname" id="surname" placeholder="Surname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>
                    @error('surname')
                    <span class="  text-red-600 text-xs p-2 w-64">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <div class="sml:w-96 w-80 md:w-80 lg:w-72 xs:w-48 sm:w-64 ">
                        <input wire:model="email" type="text" name="email" id="email" placeholder="Email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>
                    @error('email')
                    <span class="  text-red-600 text-xs p-2 w-64">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <div class="sml:w-96 w-80 md:w-80 lg:w-72 xs:w-48 sm:w-64 ">
                        <input wire:model="regNo" type="text" name="regNo" id="regNo" placeholder="Reg. No." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>
                    @error('regNo')
                    <span class="  text-red-600 text-xs p-2 w-64">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <div class="sml:w-96 w-80 md:w-80 lg:w-72 xs:w-48 sm:w-64 ">
                        <input wire:model="yearOfStudy" type="text" name="yearOfStudy" id="yearOfStudy" placeholder="Year of study" class="bg-gray-50 mb-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>
                    @error('yearOfStudy')
                    <span class="  text-red-600 text-xs p-2 w-64">{{ $message }}</span>
                    @enderror
                </div>

            </div>
            <div class="flex flex-col gap-2 md:flex md:gap-4">
                <div>
                    <div class="sml:w-96 w-80 md:w-80 lg:w-72 xs:w-48 sm:w-64 ">
                        <input wire:model="phoneNumber" type="text" name="phoneNumber" id="phoneNumber" placeholder="Phone number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>
                    @error('phoneNumber')
                    <span class="  text-red-600 text-xs p-2 w-64">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <div class="sml:w-96 w-80 md:w-80 lg:w-72 xs:w-48 sm:w-64 ">
                        <input wire:model="voteNumber" type="text" name="voteNumber" id="voteNumber" placeholder="Vote number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>
                    @error('voteNumber')
                    <span class="  text-red-600 text-xs p-2 w-64">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <div class="sml:w-96 w-80 md:w-80 lg:w-72 xs:w-48 sm:w-64 ">
                        <input wire:model="profilePic" type="file" name="profilePic" id="profilePic" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>
                    @error('profilePic')
                    <span class="  text-red-600 text-xs p-2 w-64">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <div class="sml:w-96 w-80 md:w-80 lg:w-72 xs:w-48 sm:w-64 ">
                        <select wire:model="course" class="bg-gray-50 border border-gray-300 text-gray-900 p-2.5 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option class="w-80 md:w-80 lg:w-72" value="2">ASKAS</option>
                            <option class="w-80 md:w-80 lg:w-72" value="3">dsldfkf</option>
                            <option class="w-80 md:w-80 lg:w-72" value="6">kldfdf</option>
                        </select>
                    </div>
                    @error('course')
                    <span class="  text-red-600 text-xs p-2 w-64">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <div class="sml:w-96 w-80 md:w-80 lg:w-72 xs:w-48 sm:w-64 ">
                        <input wire:model="password" type="password" name="password" id="password" placeholder="Password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>
                    @error('password')
                    <span class="  text-red-600 text-xs p-2 w-64">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <div class="sml:w-96 w-80 md:w-80 lg:w-72 xs:w-48 sm:w-64 ">
                        <input wire:model="confirmPassword" type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>
                    @error('confirmPassword')
                    <span class=" text-red-600 text-xs p-2 w-64">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="md:items-center sml:items-center sml:flex sml:flex-col md:flex md:flex-col">
            <button type="submit" wire:click.prevent="register" class="block md:w-80 lg:w-72 w-full bg-indigo-600 mt-4 py-2 rounded-2xl sml:w-96 text-white font-semibold mb-2 hover:bg-blue-900">Register</button>
            <span class="text-sm ml-2  cursor-pointer">Already have an account? <a wire:navigate href="/login" class=" text-blue-500 font-bold">Sign In</a></span>
        </div>

    </form>

</div>
