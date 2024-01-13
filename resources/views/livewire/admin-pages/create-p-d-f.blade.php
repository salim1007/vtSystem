<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 7 PDF Example</title>
    <link rel="stylesheet" href="resources/css/app.css">
    <script src="resources/js/app.js"></script>
    <style>
        .bg-yellow-200 {
            background-color: #FFFFFF;
        }
        .h-full {
            height: 100%;
        }
        .flex {
            display: flex;
        }
        .flex-col {
            flex-direction: column;
        }
        .flex-row {
            flex-direction: row;
        }
        .p-3 {
            padding: 0.75rem;
        }
        .overflow-x-auto {
            overflow-x: auto;
        }
        .shadow-md {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        .rounded-lg {
            border-radius: 0.5rem;
        }
        .text-sm {
            font-size: 0.875rem;
        }
        .text-left {
            text-align: left;
        }
        .text-gray-500 {
            color: #6b7280;
        }
        .text-xs {
            font-size: 0.75rem;
        }
        .text-gray-700 {
            color: #374151;
        }
        .uppercase {
            text-transform: uppercase;
        }
        .bg-gray-50 {
            background-color: #f9fafb;
        }
        .italic {
            font-style: italic;
        }
        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }
        .py-3 {
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
        }
        .font-medium {
            font-weight: 900;
        }
        .text-gray-900 {
            color: #1f2937;
        }
        .whitespace-nowrap {
            white-space: nowrap;
        }
        .mb-2 {
            margin-bottom: 0.5rem;
        }
        .mb-6 {
            margin-bottom: 4rem;
        }
        .ml-2 {
            margin-left: 1rem;
        }
        .ml-1 {
            margin-left: 0.2rem;
        }
        .mb-4 {
            margin-bottom: 2rem;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body class="bg-yellow-200 container flex-col">
<span class="font-medium mb-2">THE UNIVERSITY OF DAR ES SALAAM (UDSM)</span>
<div class="font-medium">Results for the <span id="currentYear"></span> election as implemented by vtSystem:</div>
<div class="bg-yellow-200 h-full flex flex-col p-3">
    <div class="relative overflow-x-auto sm:rounded-lg">
        @php
            $post_codes = [];
            for ($i = 3; $i <= 69; $i += 3) {
                $post_codes[] = str_pad($i, 4, '0', STR_PAD_LEFT);
            }
        @endphp
        @foreach(\Illuminate\Support\Facades\DB::table('posts')->whereIn('post_code', $post_codes )->get() as $post)
            <span class="flex font-medium ml-1 xs:text-xs lg:text-sm mb-2">{{ $post->post_title }}</span>
            <table class="w-full text-sm text-left mb-2 rtl:text-right text-gray-500 dark:text-gray-400">
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
                    $winners = [];
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
                        if ($status == 'WON') {
                           $winners[] = $candidate->full_name;
                        }
                    @endphp
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap    ">
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
            <div class="flex-row flex ">
                <p class="italic ml-2">{{ $post->post_title }}:</p>
                @foreach($winners as $winner)
                    <p class="ml-2 mb-6"> => {{ $winner }}</p>
                @endforeach
            </div>
        @endforeach

    </div>


</div>
</body>
<script>
    document.getElementById("currentYear").textContent = new Date().getFullYear();
</script>
</html>
