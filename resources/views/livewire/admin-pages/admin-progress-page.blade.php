<div class="flex flex-col w-full h-full">
    <div class="flex h-14 pl-4 items-center shadow-lg bg-blue-400 w-full"></div>
    <div class="flex flex-col bg-gray-400 h-full">
        <div class="w-full p-3">
            <button class="flex rounded-md bg-green-200 p-2">Settings</button>
        </div>
        <span class=" flex flex-col mt-4 justify-center items-center font-medium">Election Progress</span>
        <div class="mt-4 bg-green-200 flex gap-3 w-full p-3">
            <div class="flex flex-col gap-3 w-1/2">
                <div class="flex gap-2 bg-purple-400 justify-between rounded-md p-3">
                    <span>Post:</span>
                    <span>Chairperson</span>
                </div>
                <div class="flex justify-between bg-red-200 rounded-md p-3">
                    <span>Candidates:</span>
                    <div class="flex flex-col">
                        <span>Salim</span>
                        <span>Isak</span>
                    </div>
                </div>
            </div>
            <div class="flex w-1/2">
                <div class="bg-blue-200 w-full rounded-md"  >
                    <div class="px-1  w-full" id="chart"></div>
                </div>
            </div>
        </div>

    </div>
</div>



@push('js')
    <script>
       var options = {
            chart: {
                type: 'bar'
            },
            plotOptions: {
                bar: {
                    horizontal: true
                }
            },
            series: [{
                data: [{
                    x: 'Salim',
                    y: 20000
                }, {
                    x: 'Isak',
                    y: 13000
                }]
            }]
        }
       var chart = new ApexCharts(document.querySelector("#chart"), options);

       chart.render();
    </script>
@endpush
