<div class="flex flex-col w-full h-full">
    <div class="flex h-14 pl-4 justify-between items-center bg-blue-400 w-full">
        <span>jkksdjnk</span>
        <button wire:click="logout" class="flex mr-3" >
            <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M17 16L21 12M21 12L17 8M21 12L7 12M13 16V17C13 18.6569 11.6569 20 10 20H6C4.34315 20 3 18.6569 3 17V7C3 5.34315 4.34315 4 6 4H10C11.6569 4 13 5.34315 13 7V8" stroke="#374151" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
        </button>
    </div>
    <div class="flex flex-col items-center">
        <span class="text-sm mx font-medium text-black dark:text-white bg-amber-100 w-full flex items-center justify-center p-3 shadow-lg mb-8">Create Candidate</span>
        <div class="">

            <div class="relative z-0 mb-12 xs:w-52 sm:w-72 smx:w-96 group">
               <form wire:submit="setRegNumber">
                   <input wire:model="reg_number" autocomplete="off" type="text" name="reg_number" id="reg_number" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                   <label for="reg_number" class="peer-focus:font-medium absolute text-sm text-blue-300 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto xs:text-xs peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Enter Registration Number</label>
                   <button type="submit" class="xs:text-xs md:text-xs rounded-md bg-blue-400 p-1 mt-2">Populate data</button>
                   @if($this->reg_number == null)
                   @else
                       @if(!DB::table('users')->where('regNo', $this->reg_number)->exists())
                           <span class=" rounded-md  text-red-400 text-xs p-2 w-64">Registration number does not exist</span>

                       @endif
                   @endif
                   @error('reg_number')
                   <span class=" rounded-md  text-red-400 text-xs p-2 w-64">{{ $message }}</span>
                   @enderror
               </form>
            </div>

            <form wire:submit="createCandidate" class="max-w-md items-center flex flex-col mx-auto">
                @if($this->profile_pic)
                    <img class="flex mb-8 xs:h-32 xs:w-32 mt-2 rounded-lg "  alt="profile photo" src="{{ asset('storage/'.$this->profile_pic) }}" />

                @endif

                <div class="relative z-0 xs:w-52 sm:w-72 smx:w-96 mb-5 group">
                    <input type="text" disabled  wire:model="full_name" name="full_name" id="full_name" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                    <label for="full_name" class="peer-focus:font-medium absolute text-sm text-blue-300 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 xs:text-xs peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Full Name</label>
                    @error('full_name')
                    <span class=" rounded-md  text-red-400 text-xs p-2 w-64">{{ $message }}</span>
                    @enderror
                </div>
                <div class="relative z-0 xs:w-52 sm:w-72 smx:w-96 mb-5 group">
                    <select wire:model="post" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                        <option value="" class="text-gray-500">Select Post</option>
                        @foreach($post_list as $post_item)
                            <option class="text-black" value="{{ $post_item->post_code }}" >{{ $post_item->post_title }}</option>

                        @endforeach
                    </select>
                    @error('post')
                    <span class=" rounded-md  text-red-400 text-xs p-2 w-64">{{ $message }}</span>
                    @enderror
                </div>

                    <div class="relative z-0 xs:w-52 sm:w-72 smx:w-96 mb-5 group">
                        <input type="text" disabled  wire:model="year" name="year" id="year" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                        <label for="year" class="peer-focus:font-medium absolute text-sm text-blue-300 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 xs:text-xs peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Year</label>
                        @error('year')
                        <span class=" rounded-md  text-red-400 text-xs p-2 w-64">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="relative z-0 xs:w-52 sm:w-72 smx:w-96 mb-5 group">
                        <input type="text" disabled  wire:model="programme"  name="programme" id="programme" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                        <label for="programme" class="peer-focus:font-medium absolute text-sm text-blue-300 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 xs:text-xs peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Course</label>
                        @error('programme')
                        <span class=" rounded-md  text-red-400 text-xs p-2 w-64">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="relative z-0 xs:w-52 sm:w-72 smx:w-96 mb-5 group">
                        <input type="text" disabled wire:model="college" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="college" id="college" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                        <label for="college" class="peer-focus:font-medium absolute text-sm text-blue-300 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 xs:text-xs peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">College</label>
                        @error('college')
                        <span class=" rounded-md  text-red-400 text-xs p-2 w-64">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="relative z-0 xs:w-52 sm:w-72 smx:w-96 mb-5 group">
                        <textarea wire:model="description" type="text" name="description" id="description" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  ></textarea>
                        <label for="description" class="peer-focus:font-medium absolute text-sm text-blue-300 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 xs:text-xs peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Description</label>
                        @error('description')
                        <span class=" rounded-md  text-red-400 text-xs p-2 w-64">{{ $message }}</span>
                        @enderror
                    </div>
                <button type="submit" class="text-white bg-blue-700 mt-4 mb-8 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>

        </div>
        <div class="flex flex-col w-full items-center">
            <span class="text-sm w-full  font-medium text-black  dark:text-white bg-amber-100  flex items-center justify-center p-3 shadow-lg mb-8">Upload Photo(s)</span>
            <div class="">
                    <form wire:submit="findCandidate">
                        <div class="relative flex-col flex z-0 mb-20 xs:w-52 sm:w-72 smx:w-96 group">
                            <input wire:model="upload_reg_no" autocomplete="off" type="text" name="upload_reg_no" id="upload_reg_no" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                            <label for="upload_reg_no" class="peer-focus:font-medium absolute text-sm text-blue-300 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto xs:text-xs peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Enter Registration Number</label>
                            <button type="submit" class="xs:text-xs w-fit md:text-xs rounded-md bg-blue-400 p-1 mt-2">Populate data</button>
                            @if(session()->has('error'))
                                <span class=" rounded-md  text-red-400 text-xs p-2 w-64">{{ session('error') }}</span>
                            @endif
                            @error('upload_reg_no')
                            <span class=" rounded-md  text-red-400 text-xs p-2 w-64">Registration number is required</span>
                            @enderror
                            @if($this->candidate_name)
                                <div class="flex flex-col text-sm mt-8 gap-1 ">
                                    <span class="text-gray-300">Candidate name:</span>
                                    <span class="flex bg-gray-400 w-fit font-medium rounded-md text-sm p-1 italic"> {{$this->candidate_name }}</span>
                                </div>
                            @endif
                        </div>
                    </form>

            </div>

            <div class="flex w-full p-6 ">
                <div class="flex flex-col w-fit bg-gray-400 sm:w-full p-3 rounded-lg mb-8">
                    <form wire:submit="uploadCandidatePhoto" class="relative z-0 w-full mb-5 group">
                        <label class="block mb-2  text-sm font-medium text-white dark:text-white" for="user_avatar">Upload Photos for:<i class="text-black">{{"  ".$this->candidate_name }}</i></label>
                        <input multiple wire:model="images" accept="image/png, image/jpeg"  class="block text-black w-full xs:w-44 sm:w-64 smx:w-96 text-sm border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="images" name="images" type="file">
                        @error('images.*')
                            <span class="flex text-red-400 text-sm">{{ $message }}</span>

                        @enderror
                        <div class="flex w-full mt-4 sml:inline-grid sml:grid-cols-3 smx:inline-grid smx:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xs:inline-grid xs:grid-cols-1 sm:grid-cols-2 gap-4 ">
                            @if($this->images)
                                @foreach($this->images as $image)
                                    <img class=" rounded-md w-44 h-44" src="{{ $image->temporaryUrl() }}"  />

                                @endforeach
                            @endif
                        </div>
                        <button type="submit" class="xs:text-xs p-2 rounded-md bg-blue-400 mt-6">
                            Upload
                        </button>
                    </form>
                </div>
            </div>
            <span class="text-sm w-full  font-medium text-black  dark:text-white bg-amber-100  flex items-center justify-center p-3 shadow-lg mb-8">Upload Video(s)</span>


            <div class="">
                <form wire:submit="findCandidate2">
                    <div class="relative flex-col flex z-0 mb-20 xs:w-52 sm:w-72 smx:w-96 group">
                        <input wire:model="upload_reg_no2" autocomplete="off" type="text" name="upload_reg_no2" id="upload_reg_no2" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                        <label for="upload_reg_no2" class="peer-focus:font-medium absolute text-sm text-blue-300 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto xs:text-xs peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Enter Registration Number</label>
                        <button type="submit" class="xs:text-xs w-fit md:text-xs rounded-md bg-blue-400 p-1 mt-2">Populate data</button>
                        @if(session()->has('error'))
                            <span class=" rounded-md  text-red-400 text-xs p-2 w-64">{{ session('error') }}</span>
                        @endif
                        @error('upload_reg_no2')
                        <span class=" rounded-md  text-red-400 text-xs p-2 w-64">Registration number is required</span>
                        @enderror
                        @if($this->candidate_name2)
                            <div class="flex flex-col text-sm mt-8 gap-1 ">
                                <span class="text-gray-300">Candidate name:</span>
                                <span class="flex bg-gray-400 w-fit font-medium rounded-md text-sm p-1 italic"> {{$this->candidate_name2 }}</span>
                            </div>
                        @endif
                    </div>
                </form>

            </div>

            <div class="flex w-full p-6 ">
                <div class="flex flex-col w-full bg-gray-400 p-3 rounded-lg mb-8">
                    <form class="relative z-0 w-full mb-5 group">
                        <label class="block mb-2 text-sm font-medium text-white dark:text-white" for="user_avatar">Upload Videos</label>
                        <input class="block w-full xs:w-44 sm:w-64 smx:w-96 text-sm text-white border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">

                        <div class="flex w-full  sml:inline-grid sml:grid-cols-3 smx:inline-grid smx:grid-cols-2 xs:inline-grid xs:grid-cols-1 gap-4">
{{--                            <video class=" w-full mt-4 rounded-md" controls>--}}
{{--                                <source src="/docs/videos/flowbite.mp4" type="video/mp4">--}}
{{--                                Your browser does not support the video tag.--}}
{{--                            </video>--}}
{{--                            <video class=" w-full mt-4 rounded-md" controls>--}}
{{--                                <source src="/docs/videos/flowbite.mp4" type="video/mp4">--}}
{{--                                Your browser does not support the video tag.--}}
{{--                            </video>--}}
{{--                            <video class=" w-full mt-4 rounded-md" controls>--}}
{{--                                <source src="/docs/videos/flowbite.mp4" type="video/mp4">--}}
{{--                                Your browser does not support the video tag.--}}
{{--                            </video>--}}
{{--                            <video class=" w-full mt-4 rounded-md" controls>--}}
{{--                                <source src="/docs/videos/flowbite.mp4" type="video/mp4">--}}
{{--                                Your browser does not support the video tag.--}}
{{--                            </video>--}}
{{--                            <video class=" w-full mt-4 rounded-md" controls>--}}
{{--                                <source src="/docs/videos/flowbite.mp4" type="video/mp4">--}}
{{--                                Your browser does not support the video tag.--}}
{{--                            </video>--}}
                        </div>

                        <button type="submit" class="xs:text-xs p-2 rounded-md bg-blue-400 mt-6">
                            Upload
                        </button>
                    </form>


                </div>
            </div>

        </div>

    </div>

</div>
