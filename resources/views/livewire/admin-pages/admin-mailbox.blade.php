<div class="flex flex-col w-full text-sm h-full overflow-y-auto scrollbar-hidden" style="height: 100vh">
    <div class="flex p-4 pl-4 items-center justify-between bg-blue-400 w-full">
        <span>jkksdjnk</span>
        <button wire:click="logout" class="flex mr-4" >
            <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M17 16L21 12M21 12L17 8M21 12L7 12M13 16V17C13 18.6569 11.6569 20 10 20H6C4.34315 20 3 18.6569 3 17V7C3 5.34315 4.34315 4 6 4H10C11.6569 4 13 5.34315 13 7V8" stroke="#374151" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
        </button>
    </div>
    <div class="flex h-full bg-gray-400 flex-col">
        <div class="flex flex-col">
            <span class="flex flex-col p-2 shadow-lg font-medium italic bg-green-200">Some response from the system users</span>
            <div class="flex mt-2 flex-col">
                <form wire:submit.prevent="findSender" class=" flex flex-col">
                    <div class="flex">
                        <input wire:model="sender_reg_no" type="search" placeholder="Search Sender....." class="flex p-2 ml-4 rounded-lg m-2 text-sm xs:w-44 sm:w-56" />
                        <button type="submit" class="flex ml-4 hover:bg-blue-200 items-center justify-center rounded-md bg-white p-1 m-4">find</button>
                    </div>
                    @error('sender_reg_no')
                    <span class="ml-4 text-red-800 text-xs p-2 w-64">{{ $message }}</span>
                    @enderror
                </form>
                @if($this->sender_full_name)
                    <div class="flex flex-col bg-green-200 italic xs:w-44 sm:w-56 mb-4 mt-2 text-xs ml-4 rounded-md">
                        <span class=" p-2 w-64">Name: {{ $this->sender_full_name }}</span>
                        <span class=" p-2 w-64">College: {{ $this->sender_college }}</span>
                        <span class=" p-2 w-64">Year: {{ $this->sender_year }}</span>
                    </div>
                @endif

            </div>
            <div wire:poll.keep-alive.5s class="py-4  relative scrollbar-hidden overflow-y-auto  flex h-full flex-grow flex-col px-7 justify-start">
                @foreach($mails as $mail)
                    <div class="mr-auto rounded-lg mb-5 rounded-tl-none my-1 p-2 text-sm bg-white flex flex-col relative speech-bubble-left">
                        <p>{{ $mail->mail_body }}</p>
                        <p class="text-gray-600 text-xs text-right leading-none mt-1">{{ $mail->created_at }}</p>
                        <p class="text-gray-600 text-xs text-right w-fit italic bg-gray-200 p-1 rounded-md leading-none mt-3">{{ $mail->sender_reg_no }}</p>
                    </div>

                @endforeach


            </div>

        </div>

    </div>
    <style>
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
