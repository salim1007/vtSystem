<div class="flex flex-col w-3/4 xs:w-64 lg:w-2/3 smx:w-96 sml:w-4/5 xs:h-fit llg:mt-2 xs:mt-4 sm:w-80 rounded-3xl ">
    <div class="flex items-center justify-center mt-6 p-2">
        <input wire:model.live.debounce.200ms="search" type="search" placeholder="Search name, post..." class="flex rounded-2xl p-2 pl-4 w-72"  />
    </div>
    @foreach($candidates as $candidate)
        <div class="p-4">
            <!-- Overlay div (below the content) -->
            <div class="xs:flex xs:flex-col ">
                <div class="relative inset-0 bg-yellow-800  xs:w-24 xs:h-24  rounded-2xl opacity-50 h-44 w-44 ml-4 flex">
                    <img class="rounded-md" src="{{ asset('storage/'.$candidate->photo_url) }}" />

                </div>
                <!-- Content div -->
                <div class="bg-blue-500 w-full smx:h-72 xs:-mt-12 xs:h-96 flex xs:flex-col flex-col items-start xs:text-xs -mt-20 rounded-xl text-white p-4 h-64">
                    <span class=" xs:mt-12 uppercase xs:text-xs -mt-12">{{ $candidate->full_name }}</span>
                    <span class=" xs:mt-1 mt-5 xs:text-xs"> Post: {{ $candidate->post }}</span>
                    <span class=" xs:mt-1 xs:text-xs">Year {{ $candidate->year }} - {{ $candidate->college }}</span>
                    <span class="mt-4 w-full sml:h-36 sm:h-64 xs:h-56 rounded-md bg-red-400 p-2 xs:text-xs">
                        {{ $candidate->description }}
                </span>
                </div>
            </div>
            <div class="flex flex-col float-left mt-4 gap-2">
                <button wire:click="viewCampaign({{ $candidate->id }})" class="rounded-md hover:bg-[#2557D6]/90 xs:w-28 xs:text-xs bg-red-500 p-2 w-64">
                    View Campaign
                </button>
                <button wire:click="viewPhotos({{ $candidate->id }})" class="rounded-md hover:bg-[#3b5998]/90 xs:w-28 xs:text-xs bg-red-500 p-2 w-64">
                    View Photos
                </button>
            </div>

        </div>
    @endforeach
    @if($this->open_campaign_window)
        <div class="fixed inset-0 flex w-full z-50">
            <div class="modal-overlay fixed inset-0 bg-black bg-opacity-70"></div>
            <div class="modal-container relative w-full  max-w-md p-2 rounded-lg shadow  dark:bg-gray-700">
                <button wire:click="closeModal" type="button" class="absolute  mt-8 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class=" w-full gap-2 flex">

                   @foreach($this->campaign as $campaign_video)
                        <video class=" mt-2 rounded-md" controls>
                            <source src="{{ asset('storage/'.$campaign_video->video_url) }}" type="video/mp4">

                        </video>
                   @endforeach
                </div>

            </div>
        </div>
    @endif

</div>

