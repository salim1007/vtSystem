<div class=" flex flex-col w-full h-full ">
    <div class=" flex h-16 items-center justify-center gap-2 bg-green-400">
        <input type="search" class="rounded-xl" placeholder="Search Name..." />
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 30 30">
            <path d="M 13 3 C 7.4889971 3 3 7.4889971 3 13 C 3 18.511003 7.4889971 23 13 23 C 15.396508 23 17.597385 22.148986 19.322266 20.736328 L 25.292969 26.707031 A 1.0001 1.0001 0 1 0 26.707031 25.292969 L 20.736328 19.322266 C 22.148986 17.597385 23 15.396508 23 13 C 23 7.4889971 18.511003 3 13 3 z M 13 5 C 17.430123 5 21 8.5698774 21 13 C 21 17.430123 17.430123 21 13 21 C 8.5698774 21 5 17.430123 5 13 C 5 8.5698774 8.5698774 5 13 5 z"></path>
        </svg>
    </div>


    <div class="py-4 relative flex flex-grow flex-col px-10 justify-start" style="background-color:#e5ddd5;">
        <span class="mb-28 rounded-3xl shadow-lg bg-blue-400 w-fit p-2">Have a little chat with your fellows </span>

        <div
            class="ml-auto rounded-lg rounded-tr-none my-1 p-2 text-sm bg-green-300 flex flex-col relative speech-bubble-right">
            <p class="">Do you still have that car from gone in 60 seconds? Can I borrow it please.</p>
            <p class="text-gray-600 text-xs text-right leading-none">8:00 AM</p>
        </div>
        <div class="mr-auto rounded-lg rounded-tl-none my-1 p-2 text-sm bg-white flex flex-col relative speech-bubble-left">
            <p>Yeah dude for sure</p>
            <p class="text-gray-600 text-xs text-right leading-none">8:45 AM</p>
        </div>
        <div
            class="ml-auto rounded-lg rounded-tr-none my-1 p-2 text-sm bg-green-300 flex flex-col relative speech-bubble-right">
            <p class="">Dude WTF was up with that plane you were on!!!?</p>
            <p class="text-gray-600 text-xs text-right leading-none">8:00 AM</p>
        </div>
        <div class="mr-auto rounded-lg rounded-tl-none my-1 p-2 text-sm bg-white flex flex-col relative speech-bubble-left">
            <p>LOL I Know right </p>
            <p class="text-gray-600 text-xs text-right leading-none">8:45 AM</p>
        </div>
        <div
            class="ml-auto rounded-lg rounded-tr-none my-1 p-2 text-sm bg-green-300 flex flex-col relative speech-bubble-right">
            <p class="">Hey man what should we do this weekend?</p>
            <p class="text-gray-600 text-xs text-right leading-none">8:00 AM</p>
        </div>
        <div class="mr-auto rounded-lg rounded-tl-none my-1 p-2 text-sm bg-white flex flex-col relative speech-bubble-left">
            <p>Steal the declaration of independence?...</p>
            <p class="text-gray-600 text-xs text-right leading-none">8:45 AM</p>
        </div>
        <div
            class="ml-auto rounded-lg rounded-tr-none my-1 p-2 text-sm bg-green-300 flex flex-col relative speech-bubble-right">
            <p class="">Do you still have that car from gone in 60 seconds? Can I borrow it please.</p>
            <p class="text-gray-600 text-xs text-right leading-none">8:00 AM</p>
        </div>
        <div class="mr-auto rounded-lg rounded-tl-none my-1 p-2 text-sm bg-white flex flex-col relative speech-bubble-left">
            <p>Yeah dude for sure</p>
            <p class="text-gray-600 text-xs text-right leading-none">8:45 AM</p>
        </div>
        <div
            class="ml-auto rounded-lg rounded-tr-none my-1 p-2 text-sm bg-green-300 flex flex-col relative speech-bubble-right">
            <p class="">Dude WTF was up with that plane you were on!!!?</p>
            <p class="text-gray-600 text-xs text-right leading-none">8:00 AM</p>
        </div>
        <div class="mr-auto rounded-lg rounded-tl-none my-1 p-2 text-sm bg-white flex flex-col relative speech-bubble-left">
            <p>LOL I Know right </p>
            <p class="text-gray-600 text-xs text-right leading-none">8:45 AM</p>
        </div>
        <div
            class="ml-auto rounded-lg rounded-tr-none my-1 p-2 text-sm bg-green-300 flex flex-col relative speech-bubble-right">
            <p class="">Hey man what should we do this weekend?</p>
            <p class="text-gray-600 text-xs text-right leading-none">8:00 AM</p>
        </div>
        <div class="mr-auto rounded-lg rounded-tl-none my-1 p-2 text-sm bg-white flex flex-col relative speech-bubble-left">
            <p>Steal the declaration of independence?...</p>
            <p class="text-gray-600 text-xs text-right leading-none">8:45 AM</p>
        </div>

        <div class="flex flex-row items-center justify-end w-full gap-1 mr-4 mt-64">
            <div class="flex items-center h-20 w-full">
                <textarea type="text" class="rounded-xl items-center flex w-full p-2"></textarea>
            </div>
            <div class="flex-shrink-0">
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" id="send">
                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                        <path d="M3.4 20.4l17.45-7.48c.81-.35.81-1.49 0-1.84L3.4 3.6c-.66-.29-1.39.2-1.39.91L2 9.12c0 .5.37.93.87.99L17 12 2.87 13.88c-.5.07-.87.5-.87 1l.01 4.61c0 .71.73 1.2 1.39.91z"></path>
                    </svg>
                </button>
            </div>
        </div>


    </div>


    <style>
        .speech-bubble-right::before {
            content: "";
            width: 0px;
            height: 0px;
            position: absolute;
            border-left: 5px solid #9ae6b4;
            border-right: 5px solid transparent;
            border-top: 5px solid #9ae6b4;
            border-bottom: 5px solid transparent;
            right: -10px;
            top: 0;
        }

        .speech-bubble-left::before {
            content: "";
            width: 0px;
            height: 0px;
            position: absolute;
            border-left: 5px solid transparent;
            border-right: 5px solid white;
            border-top: 5px solid white;
            border-bottom: 5px solid transparent;
            left: -10px;
            top: 0;
        }
    </style>
</div>

