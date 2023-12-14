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
            <input type="search" class="flex p-2 rounded-xl w-64 h-8 text-xs" placeholder="Search name..." />
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
                    <tbody>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 flex items-center justify-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <img src="" alt="salim_pic" class="h-20 w-20" />
                        </th>
                        <td class="px-6 py-4">
                            Salim Iddi Mchomvu
                        </td>
                        <td class="px-6 py-4">
                            2021-04-06692
                        </td>
                        <td class="px-6 py-4">
                            Chairperson
                        </td>
                        <td class="px-6 py-4">
                            CoICT
                        </td>
                        <td class="px-6 py-4">
                            II
                        </td>
                        <th scope="col" class="px-6 py-3">
                            <button class="flex p-2 items-center justify-center rounded-md bg-blue-400 text-white w-16">Edit</button>
                        </th>

                    </tr>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
