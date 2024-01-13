<div class="flex flex-col w-3/4 xs:w-64 lg:w-2/3 smx:w-96 sml:w-4/5 xs:h-fit llg:mt-2 xs:mt-4 sm:w-80 rounded-3xl h-full">
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
        <div class="modal-overlay fixed inset-0 bg-black bg-opacity-80"></div>
        <div class="fixed inset-0 flex w-full z-50 p-6 mt-24 overflow-auto mb-12">
            <div class="grid grid-cols-4 gap-x-4 xs:flex items-center xs:flex-col w-full h-full text-center space-y-10">
                <div class="flex gap-5">
                    <h1 class=" text-2xl text-white  xs:text-sm lg:text-lg">Campaign Videos for :  <b class="italic">{{' '.$this->candidate_name }}</b></h1>
                    <button wire:click.prevent="closeCampaignWindow" class="flex hover:text-white hover:bg-gray-600 w-fit text-sm p-1 rounded-md items-center justify-center bg-red-500">close</button>

                </div>
                @foreach($this->campaign as $campaign_video)
                    <video class="mt-2 xs:w-fit rounded-md " controls>
                        <source src="{{ asset('storage/'.$campaign_video->video_url) }}" type="video/mp4">
                    </video>
                @endforeach
            </div>
        </div>


    @endif

    @if($this->open_photo_window)
        <div class="modal-overlay fixed inset-0 bg-black bg-opacity-80"></div>
        <div class="fixed inset-0 flex w-full z-50 p-6 mt-24 overflow-auto mb-12">
            <div class="grid grid-cols-4 gap-x-4 xs:flex items-center xs:flex-col w-full h-full text-center space-y-10">
                <div class="flex gap-5">
                    <h1 class=" text-2xl text-white  xs:text-sm lg:text-lg">Campaign Photos for :  <b class="italic">{{' '.$this->candidate_name }}</b></h1>
                    <button wire:click.prevent="closeCampaignPhotoWindow" class="flex hover:text-white hover:bg-gray-600 w-fit text-sm p-1 rounded-md items-center justify-center bg-red-500">close</button>

                </div>
                <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->
                <div class="container mx-auto px-5 py-2 lg:px-32 lg:pt-12">
                    <div class="-m-1 flex flex-wrap md:-m-2">
                        <div class="flex sm:w-full w-1/3 items-center justify-center flex-wrap">
                            @foreach($this->campaign_photos as $campaign_photo)
                            <div class="flex items-center justify-center gap-3 p-1 md:p-2">
                                <img
                                    alt="gallery"
                                    class="block h-80 w-80 rounded-lg object-cover object-center hover:scale-150 transition duration-500 cursor-pointer"
                                    src="{{ asset('storage/'.$campaign_photo->photo_url) }}" />
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>


    @endif

</div>

