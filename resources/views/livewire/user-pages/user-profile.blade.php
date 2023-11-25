<div class="relative justify-center w-full items-center flex flex-col">
    <!-- Overlay div (below the content) -->
    <div  class=" absolute top-0 left-0 inset-48 xs:h-20 xs:-ml-5 xs:inset-14 inline-flex llg:-ml-6 smx:ml-12 bg-yellow-800 sm:h-28 sm:inset-10 sm:w-2/3 sm:ml-7 sml:h-32 sml:inset-12 sml:ml-14 sml:w-96  md:h-44 md:inset-12 xl:h-56 lg:h-52 lg:w-2/3 md:ml-11 lg:inset-48 md:w-2/3 rounded-3xl opacity-50 mt-24 h-56 w-3/4 lg:-ml-16 xl:ml-4  ">
        <div class="flex md:w-28 xl:w-44 lg:w-36 xs:w-14 xs:m-3 items-center ml-6 bg-green-400 mt-6 rounded-xl sml:w-20 sm:m-3 sm:w-20 sml:m-3 w-44 mb-6">salim</div>
    </div>

    <!-- Content div -->
    <div  class="bg-blue-500 xs:w-64 xs:h-44 sm:w-3/4 sm:h-44 md:h-52 lg:h-96 sml:h-48 sml:w-3/4 md:w-4/5 w-full lg:w-5/6 xl:w-5/6 flex flex-col items-end mt-4 rounded-xl text-white p-4 h-96">
        <div class="w-16 flex gap-3">
            <div class="flex gap-3">
                <button wire:click="openModal" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16"> <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/> <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/> </svg>
                </button>

                <div class="relative inline-block text-left">
                    <button wire:click="openNotification" class="flex items-center justify-center w-8 h-8 text-gray-500 hover:text-gray-900 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                        </svg>
                    </button>
                    @if($this->showDropdown)
                        <div  class="origin-top-right absolute right-0 mt-2 w-96 rounded-lg shadow-lg bg-white ring-1 ring-black ring-opacity-5 flex flex-col">
                            <!-- Dropdown content here -->
                            <a href="#" class=" px-4 py-6 text-gray-900 hover:bg-gray-100 hover:rounded-lg">Item 1</a>
                            <a href="#" class=" px-4 py-6 text-gray-900 hover:bg-gray-100 hover:rounded-lg">Item 2</a>
                            <a href="#" class=" px-4 py-6 text-gray-900 hover:bg-gray-100 hover:rounded-lg">Item 3</a>
                        </div>
                    @endif

                </div>

            </div>
            @if($this->showModal)
                <div class="fixed inset-0 lg:h-5/6 lg:mt-6 sm:h-3/4 sm:mt-5 smx:h-5/6 md:h-1/2 md:mt-4  flex items-center justify-center z-50">
                    <div class="modal-overlay fixed inset-0 bg-black bg-opacity-70"></div>
                    <div class="modal-container relative w-full  max-w-md p-2 rounded-lg shadow  dark:bg-gray-700">
                        <button wire:click="closeModal" type="button" class="absolute  mt-8 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="px-6 py-6 lg:px-8 flex flex-col mt-8 items-center">
                            <h3 class="mb-4  items-center flex justify-center text-white font-medium w-80 dark:text-white">Edit Profile</h3>
                            <img src="your-image.jpg" alt="Your Image" class="bg-yellow-800 rounded-full w-20 h-20">

                            <form class="space-y-2 flex flex-col items-center" action="#">
                                <div class="flex flex-col gap-1">
                                    <label class="flex sm:text-xs smx:text-sm">Email</label>
                                    <input type="text" class=" flex sm:text-xs smx:text-sm bg-gray-500 p-2 rounded-md sm:w-64 md:w-80" >
                                </div>
                                <div class="flex flex-col gap-1">
                                    <label class="flex sm:text-xs smx:text-sm">Phone Number</label>
                                    <input type="number" class=" flex sm:text-xs smx:text-sm bg-gray-500 p-2 rounded-md sm:w-64 md:w-80" >
                                </div>

                                <div class="flex flex-col gap-1">
                                    <label class="flex sm:text-xs smx:text-sm">Profile Picture</label>
                                    <input type="file" class=" flex bg-gray-500 sm:text-xs smx:text-sm  rounded-md sm:w-64 md:w-80" >
                                </div>
                                <div class="flex flex-col gap-1">
                                    <label class="flex sm:text-xs smx:text-sm">Description</label>
                                    <textarea  class="flex h-12 sm:w-64 sm:text-xs smx:text-sm md:w-80 bg-gray-500 rounded-md" ></textarea>
                                </div>
                                <button class="bg-gray-900 sm:text-xs rounded-md p-2 smx:text-sm w-20">Edit</button>
                            </form>
                        </div>
                    </div>
                </div>
            @else
            @endif

        </div>
    </div>

    <div class="flex gap-4 mt-40 xs:flex-col w-full sm:flex-col items-center sml:flex-col justify-evenly lg:gap-2 lg:flex-col xl:flex-row md:flex-col">
        <div class="flex flex-col bg-green-400 xs:w-64 xs:h-64 sm:h-72 sm:w-64 w-80 sml:h-80 md:h-80 lg:h-96 h-96 mb-12 md:w-80 xl:w-80 rounded-lg lg:w-96 xl:text-lg p-3 opacity-60">
            <span class="font-semibold md:text-xs lg:text-sm sm:text-xs xs:text-xs">Status</span>
            <div class="flex gap-24 mt-6 justify-between">
                <div class="flex flex-col gap-3 text-sm md:text-xs lg:text-sm sml:text-xs sm:text-xs xs:text-xs">
                    <span>User state:</span>
                    <span>Voting state:</span>
                    <span>Vote Number:</span>
                    <span>Reg Number:</span>
                    <span>{message}</span>
                </div>

               <div class="flex flex-col text-sm gap-3 items-end md:text-xs lg:text-sm sml:text-xs sm:text-xs xs:text-xs ">
                   <span>Online</span>
                   <span>Not Voted</span>
                   <span>39484847</span>
                   <span>2021-04-06692</span>
               </div>
            </div>
        </div>
        <div class="flex flex-col bg-gray-400 xs:w-64 w-80 xs:h-80 sm:h-80 sm:w-64 md:w-80 h-96 sml:h-80 mb-12 md:h-80 lg:h-96 xl:w-80 rounded-lg p-3 lg:w-96 opacity-60">
            <span class="font-semibold md:text-xs lg:text-sm sml:text-xs sm:text-xs xs:text-xs">Profile Information</span>
            <div class="flex justify-between gap-24">
                <div class="flex flex-col gap-3 mt-6 text-sm md:text-xs lg:text-sm sml:text-xs sm:text-xs xs:text-xs">
                    <span>First Name:</span>
                    <span>Mid-Name:</span>
                    <span>Surname:</span>
                    <span>Email:</span>
                    <span>Phone:</span>
                    <span>Course:</span>
                    <span>Year Of Study:</span>
                </div>

                <div class="flex flex-col gap-3 mt-6 text-sm items-end md:text-xs lg:text-sm sml:text-xs sm:text-xs xs:text-xs">
                    <span>First Name:</span>
                    <span>Mid-Name:</span>
                    <span>Surname:</span>
                    <span>Email:</span>
                    <span>Phone:</span>
                    <span>Course:</span>
                    <span>Year Of Study:</span>
                </div>
            </div>
            <div class="flex flex-col text-sm mt-3 gap-1">
                <span class="md:text-xs mb-2  sml:text-xs sm:text-xs xs:text-xs">Description:</span>
                <textarea type="text" class="flex p-2  xs:h-8 xs:-mt-2 rounded-md sm:h-8 bg-gray-3 00 md:p-1 smx:-mt-2 sm:-mt-2 sml:-mt-2 sml:h-8 md:-mt-2  md:h-8 lg:h-16 lg:mt-1" disabled></textarea>
            </div>

        </div>
        <div class="flex flex-col bg-red-400 w-80 h-96 xs:h-64 xs:w-64 md:w-80 mb-12 sm:w-64 sm:h-72 sml:h-80 md:h-80 lg:h-96 xl:w-80 rounded-lg p-3 lg:w-96 opacity-60">
            <span class="font-semibold md:text-xs lg:text-sm sml:text-xs sm:text-xs xs:text-xs">Conversations</span>
            <div class="flex flex-col mt-32 ml-8 italic text-sm md:text-xs lg:text-sm sml:text-xs sm:text-xs xs:text-xs">
                There are currently no conversations
            </div>
        </div>
    </div>
</div>
