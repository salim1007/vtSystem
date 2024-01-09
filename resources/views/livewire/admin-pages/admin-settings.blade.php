<div class="flex flex-col w-full h-full">
    <div class="flex h-14 pl-4 justify-between items-center bg-blue-400 w-full">
        <span class="font-bold">Settings</span>
        <button wire:click="logout" class="flex mr-3" >
            <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M17 16L21 12M21 12L17 8M21 12L7 12M13 16V17C13 18.6569 11.6569 20 10 20H6C4.34315 20 3 18.6569 3 17V7C3 5.34315 4.34315 4 6 4H10C11.6569 4 13 5.34315 13 7V8" stroke="#374151" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
        </button>
    </div>
    <div class="flex flex-col h-screen items-center bg-gray-500">
        <!-- Include the Flowbite datepicker.js file -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/datepicker.min.js"></script>


        <!-- Create a form with two input elements for the start and end dates -->
        <form wire:submit="submitElectionDates" id="dateForm" class="flex flex-col gap-8 w-full  items-center justify-center mt-44">
            <span class="text-white">Select the start and end date for the election</span>
            <div class="space-y-4">
                <!-- Start date picker -->
                <div class="relative flex max-w-lg">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <!-- SVG for the calendar icon -->
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                    </div>
                    <input wire:model="start_date" id="start_date" name="start_date"  type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select start date">
                </div>

                <!-- End date picker -->
                <div class="relative max-w-lg">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <!-- SVG for the calendar icon -->
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                    </div>
                    <input wire:model="end_date" id="end_date" name="end_date"  type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select end date">
                </div>

                <!-- Submit button -->
                <div class="flex flex-col w-32 gap-3 text-sm">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Set Timer
                    </button>
                    <button type="button" wire:click="UpdateTimer" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Update Timer
                    </button>
                </div>
            </div>
        </form>

        <div class="flex flex-col gap-3 mt-12 text-sm">
            <span>Chosen start_date: <b class="text-green-400 ml-1">{{ $start_Date }}</b></span>
            <span>Chosen end_date: <b class="text-red-400 ml-2">{{ $end_Date }}</b></span>
        </div>

    </div>
</div>

