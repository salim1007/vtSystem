<div  class=" w-full h-full flex flex-col">
    @vite('resources/css/app.css')
    <div class="h-14 pl-4 mb-4 flex w-full items-center justify-end p-2 xs:text-xs bg-green-500">
        <button wire:click="logout" class="" >
            <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M17 16L21 12M21 12L17 8M21 12L7 12M13 16V17C13 18.6569 11.6569 20 10 20H6C4.34315 20 3 18.6569 3 17V7C3 5.34315 4.34315 4 6 4H10C11.6569 4 13 5.34315 13 7V8" stroke="#374151" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
        </button>
    </div>
    <span class="flex pl-4 font-medium mb-8 xs:text-xs">Welcome { Admin }</span>
    <div class="flex bg-pink-600 gap-4 justify-start p-3">
        <div class="p-2 xs:text-xs bg-blue-300 font-medium justify-between gap-6 w-44 flex flex-col rounded-md">
            <span>Total Posts</span>
            <span class="">20</span>
        </div>
        <div class="p-2 xs:text-xs bg-blue-300 font-medium justify-between gap-6 w-44 flex flex-col rounded-md">
            <span>Total Candidates</span>
            <span class="">230</span>
        </div>
        <div class="p-2 xs:text-xs bg-blue-300 font-medium justify-between gap-6 w-44 flex flex-col rounded-md">
            <span>Total Voters</span>
            <span class="">89</span>
        </div>
        <div class="p-2 xs:text-xs bg-blue-300 font-medium justify-between gap-6 w-44 flex flex-col rounded-md">
            <span>Voters voted</span>
            <span class="">32</span>
        </div>

    </div>

        <div class=" bg-amber-200 xs:items-center xs:justify-center xs:w-full xs:flex xs:mt-6 p-5 xs:mb-2"  >
            <div class="px-1  w-fit" id="chart"></div>
        </div>



    <div class="p-3" >
        <div>
           <select id="filters" class="bg-gray-50 xs:text-xs mb-4 mt-4 w-44 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
               <option selected>All Voters</option>
               <option value="">Voted</option>
               <option value="">Not Voted</option>
           </select>

        </div>

        <div class="relative overflow-x-auto xs:rounded-lg shadow-md sm:rounded-lg">
            <table class="w-full xs:text-xs  text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        full name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        year
                    </th>
                    <th scope="col" class="px-6 py-3">
                        status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        account
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        1
                    </th>
                    <td class="px-6 py-4">
                        Salim Iddi Mchomvu
                    </td>
                    <td class="px-6 py-4">
                        3
                    </td>
                    <td class="px-6 py-4">
                        Voted
                    </td>
                    <td class="px-6 py-4">
                        ACTIVE
                    </td>

                </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>


    @push('js')
        <script>
            var options = {
                chart: {
                    width: 300,
                    type: "donut"
                },
                dataLabels: {
                    enabled: false
                },
                series: [{{ $votedCount }}, {{ $notedCount }}],
                labels: ['Voted', 'Noted', 'Unvoted', 'Registered']
            };


            var chart = new ApexCharts(document.querySelector("#chart"), options);


                chart.render();


            function random() {
                return Math.floor(Math.random() * (100 - 1 + 1)) + 1;
            }

            function appendData() {
                var arr = chart.w.globals.series.map(() => {
                    return random();
                });
                arr.push(random());
                return arr;
            }

            function removeData() {
                var arr = chart.w.globals.series.map(() => {
                    return random()
                });
                arr.pop();
                return arr;
            }

            function randomize() {
                return chart.w.globals.series.map(() => {
                    return random();
                });
            }

            function reset() {
                return options.series;
            }

            document.querySelector("#randomize").addEventListener("click", function() {
                chart.updateSeries(randomize());
            });

            document.querySelector("#add").addEventListener("click", function() {
                console.log(appendData());
                chart.updateSeries(appendData());
            });

            document.querySelector("#remove").addEventListener("click", function() {
                chart.updateSeries(removeData());
            });

            document.querySelector("#reset").addEventListener("click", function() {
                chart.updateSeries(reset());
            });

        </script>
    @endpush




