<div class="flex flex-col w-full text-sm h-full">
    <div class="flex h-14 items-center p-3 shadow-lg justify-between bg-blue-400 w-full">
        <span>jkksdjnk</span>
            <button wire:click="logout" class="flex " >
                <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M17 16L21 12M21 12L17 8M21 12L7 12M13 16V17C13 18.6569 11.6569 20 10 20H6C4.34315 20 3 18.6569 3 17V7C3 5.34315 4.34315 4 6 4H10C11.6569 4 13 5.34315 13 7V8" stroke="#374151" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
            </button>
    </div>
    <div class="flex w-full flex-col bg-green-200 h-full">
        <span class="flex font-medium bg-red-50 p-3">Candidates List</span>
        <div class="p-3">
            <input wire:model.live.debounce.200ms="search" type="search" id="search" name="search" class="flex p-2 rounded-xl w-64 h-8 text-xs" placeholder="Search by: name, reg_number" />
        </div>
        <div class="flex flex-col bg-amber-100 p-4 h-full">
            <div class="relative overflow-x-auto xs:rounded-lg shadow-md sm:rounded-lg">
                <table class="w-full xs:text-xs  text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            photo
                        </th>
                        <th scope="col" class="px-6 py-3">
                            full name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            reg. no
                        </th>
                        <th scope="col" class="px-6 py-3">
                            post
                        </th>
                        <th scope="col" class="px-6 py-3">
                            programme
                        </th>
                        <th scope="col" class="px-6 py-3">
                            college
                        </th>
                        <th scope="col" class="px-6 py-3">
                            year
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                    </thead>
                    @foreach($candidates as $candidate)
                        <tbody>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-2 py-4 flex items-center justify-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <img src="{{ asset('storage/'.$candidate->photo_url) }}" alt="" class="h-20 w-20 rounded-lg" />
                            </th>
                            <td class="px-6 py-4">
                                {{ $candidate->full_name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $candidate->reg_no }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $candidate->post }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $candidate->programme }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $candidate->college }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $candidate->year }}
                            </td>
                            <th scope="col" class="px-6 py-3">
                                <button wire:click.prevent="gotoEditPage({{ $candidate->id }})" class="flex p-2 items-center justify-center rounded-md bg-blue-400 text-white w-16">Edit</button>
                            </th>

                        </tr>

                        </tbody>
                    @endforeach

                </table>
            </div>
        </div>

    </div>
</div>
