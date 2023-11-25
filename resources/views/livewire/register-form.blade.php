<div class="h-screen flex sm:flex sm:flex-col sm:items-center lg:flex lg:flex-row">
    <div class="flex w-1/2 bg-gradient-to-tr sm:rounded-full md:mt-12 sml:mt-8 sml:mb-8 sm:mt-8 sm:mb-8 sm:h-44 lg:w-1/2 lg:items-center lg:px-6 lg:h-screen lg:mb-0 lg:mt-0 lg:rounded-none sm:w-44 md:rounded-full sml:rounded-full sml:h-48 sml:w-48  sm:items-center from-blue-800 to-purple-700 i justify-around items-center">
        <div>
            <h1 class="text-white font-bold text-4xl font-sans">GoFinance</h1>
            <p class="text-white mt-1">The most popular peer-to-peer lending platform in SEA</p>
            <button type="submit" class="block w-28 bg-white text-indigo-800 mt-4 py-2 rounded-2xl font-bold mb-2">Read More</button>
        </div>
    </div>
    <div class="flex w-1/2 justify-center items-center lg:w-full lg:items-center bg-white">
        <form class="bg-white md:mt-24 sm:items-center  flex flex-col gap-4 lg:items-center sm:mb-8 lg:w-full  ">
           <div class="flex flex-col">
               <h1 class=" font-bold text-2xl text-blue-600 sm:text-lg sml:text-lg mb-6">Welcome to Student E-Voting</h1>
               <h1 class="text-gray-800 font-semibold italic sm:text-lg sml:text-lg text-2xl mb-6">Fill the form below to register</h1>
           </div>
            <div class=" flex-row gap-4 sm:flex-col md:flex md:flex-row lg:flex lg:flex-row lg:gap-8 ">
                <div class=" flex flex-col gap-2 md:flex md:gap-4">
                    <div>
                        <div class="flex items-center border-2 py-2 px-3 rounded-2xl sml:w-96 w-80 md:w-80 lg:w-72  ">
                            <input wire:model="firstname" class="pl-2 outline-none border-none " type="text" name="firstname" id="firstname" placeholder="First Name" />
                        </div>
                        @error('firstname')
                            <span class=" rounded-md  text-red-600 p-2 w-64">{{ $message }}</span>
                        @enderror
                    </div>
                   <div>
                       <div class="flex items-center border-2 py-2 px-3 rounded-2xl sml:w-96  w-80 md:w-80 lg:w-72">
                           <input wire:model="midname" class="pl-2 outline-none border-none" type="text" name="midname" id="midname" placeholder="Middle Name" />
                       </div>
                       @error('midname')
                       <span class="  text-red-600 p-2 w-64">{{ $message }}</span>
                       @enderror
                   </div>
                    <div>
                        <div class="flex items-center border-2 py-2 px-3 rounded-2xl sml:w-96  w-80 md:w-80 lg:w-72">
                            <input wire:model="surname" class="pl-2 outline-none border-none" type="text" name="surname" id="surname" placeholder="Surname" />
                        </div>
                        @error('surname')
                        <span class="  text-red-600 p-2 w-64">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <div class="flex items-center border-2 py-2 px-3 rounded-2xl sml:w-96  w-80 md:w-80 lg:w-72">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                            </svg>
                            <input wire:model="email" class="pl-2 outline-none border-none" type="text" name="email" id="email" placeholder="Email Address" />
                        </div>
                        @error('email')
                        <span class="  text-red-600 p-2 w-64">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <div class="flex items-center border-2 py-2 px-3 rounded-2xl sml:w-96 w-80 md:w-80 lg:w-72">
                            <input wire:model="regNo" class="pl-2 outline-none border-none" type="number" name="regNo" id="regNo" placeholder="Registration Number" />
                        </div>
                        @error('regNo')
                        <span class="  text-red-600 p-2 w-64">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <div class="flex items-center border-2 sm:mb-2 py-2 px-3 rounded-2xl sml:w-96  w-80 md:w-80 lg:w-72">
                            <input wire:model="yearOfStudy" class="pl-2 outline-none border-none" type="text" name="yearOfStudy" id="yearOfStudy" placeholder="Year of Study" />
                        </div>
                        @error('yearOfStudy')
                        <span class="  text-red-600 p-2 w-64">{{ $message }}</span>
                        @enderror
                    </div>

                </div>
                <div class="flex flex-col gap-2 md:flex md:gap-4">
                    <div>
                        <div class="flex items-center border-2 py-2 px-3 rounded-2xl sml:w-96 w-80 md:w-80 lg:w-72">
                            <input wire:model="phoneNumber" class="pl-2 outline-none border-none" type="text" name="phoneNumber" id="phoneNumber" placeholder="Phone Number" />
                        </div>
                        @error('phoneNumber')
                        <span class="  text-red-600 p-2 w-64">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <div class="flex items-center border-2 py-2 px-3 rounded-2xl sml:w-96  w-80 md:w-80 lg:w-72">
                            <input wire:model="voteNumber" class="pl-2 outline-none border-none" type="text" name="voteNumber" id="voteNumber" placeholder="Vote Number" />
                        </div>
                        @error('voteNumber')
                        <span class="  text-red-600 p-2 w-64">{{ $message }}</span>
                        @enderror
                    </div>
                   <div>
                       <div class="flex items-center border-2 py-2 px-3 rounded-2xl sml:w-96  w-80 md:w-80 lg:w-72">
                           <input wire:model="profilePic" class="pl-2 outline-none border-none rounded" type="file" name="profilePic" id="profilePic" placeholder="Photo URL" />
                       </div>
                       @error('profilePic')
                       <span class="  text-red-600 p-2 w-64">{{ $message }}</span>
                       @enderror
                   </div>
                   <div>
                       <div class="flex items-center border-2 py-2 px-3 rounded-2xl sml:w-96  w-80 md:w-80 lg:w-72">
                           <select wire:model="course" class="w-80 md:w-80 lg:w-72">
                               <option class="w-80 md:w-80 lg:w-72" value="2">ASKAS</option>
                               <option class="w-80 md:w-80 lg:w-72" value="3">dsldfkf</option>
                               <option class="w-80 md:w-80 lg:w-72" value="6">kldfdf</option>
                           </select>
                       </div>
                       @error('course')
                       <span class="  text-red-600 p-2 w-64">{{ $message }}</span>
                       @enderror
                   </div>
                    <div>
                        <div class="flex items-center border-2 py-2 px-3 rounded-2xl sml:w-96  w-80 md:w-80 lg:w-72">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                            </svg>
                            <input wire:model="password" class="pl-2 outline-none border-none" type="password" name="password" id="password" placeholder="Password" />
                        </div>
                        @error('password')
                        <span class="  text-red-600 p-2 w-64">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <div class="flex items-center border-2 py-2 px-3 rounded-2xl sml:w-96  w-80 md:w-80 lg:w-72">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                            </svg>
                            <input wire:model="confirmPassword" class="pl-2 outline-none border-none" type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" />
                        </div>
                        @error('confirmPassword')
                        <span class=" text-red-600 p-2 w-64">{{ $message }}</span>
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
</div>
