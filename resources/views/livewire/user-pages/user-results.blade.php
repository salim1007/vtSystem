<div class=" bg-blue-400 flex h-full flex-col w-full">
    <div class="p-4 flex bg-gray-300 xs:text-xs lg:text-sm ">
        Hi, <b class="ml-1">{{ auth()->user()->firstname }}</b>. The election results are now available.
    </div>
    <div class="flex flex-col h-full">
        <span class="bg-gray-200 shadow-lg xs:text-xs flex p-3 lg:text-sm">
            The following are the results of the 2023 election held at UDSM:
        </span>
        <div class="bg-gray-200 h-full flex flex-col p-3">
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

