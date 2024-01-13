<div class=" bg-blue-400 flex h-full flex-col w-full">
    <div class="p-3 flex bg-amber-200 xs:text-xs lg:text-sm ">
        Hi, {{ auth()->user()->firstname }}. The election results are now available.
    </div>
    <div class="flex flex-col  h-full">
        <span class="bg-green-400 xs:text-xs flex p-3 lg:text-sm">
            The following are the results of the 2023 election held at UDSM.
        </span>
        <div class="bg-yellow-200 h-full flex flex-col p-3">
            <div class="pb-4 dark:bg-gray-900">
                <label for="table-search" class="sr-only xs:text-xs lg:text-sm">Search</label>
                <div class="relative mt-1">
                    <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="text" id="table-search" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                </div>
            </div>


            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                @php
                    $post_codes = [];
                    for ($i = 3; $i <= 69; $i += 3) {
                        $post_codes[] = str_pad($i, 4, '0', STR_PAD_LEFT);
                    }
                @endphp
                @foreach(\Illuminate\Support\Facades\DB::table('posts')->whereIn('post_code', $post_codes )->get() as $post)
                    <span class="flex ml-1 xs:text-xs lg:text-sm mb-1">{{ $post->post_title }}</span>
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 mb-8">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                full name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                reg. number
                            </th>
                            <th scope="col" class="px-6 py-3">
                                year
                            </th>
                            <th scope="col" class="px-6 py-3">
                                college
                            </th>
                            <th scope="col" class="px-6 py-3">
                                no. of votes
                            </th>
                            <th scope="col" class="px-6 py-3">
                                status
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $candidates = \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', $post->post_code)->get();
                            $votes = [];
                            foreach ($candidates as $candidate) {
                                $votes[$candidate->cand_idty] = \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', $candidate->cand_idty)->count();
                            }
                            arsort($votes);
                            $maxVotes = reset($votes);
                        @endphp
                        @foreach($candidates as $candidate)
                            @php
                                $voteCount = $votes[$candidate->cand_idty];
                                $status = $voteCount == $maxVotes ? 'WON' : 'LOST';
                            @endphp
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $candidate->full_name }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $candidate->reg_no }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $candidate->year }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $candidate->college }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $voteCount }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $status }}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endforeach

            </div>
            <div class=" flex p-1 mt-4">

            </div>

        </div>
    </div>

</div>

