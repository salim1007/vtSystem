<div  class="mt-6">
    <div class="w-full" style="height: 50%;">
        <div class="px-10" id="chart"></div>
    </div>
</div>

@push('js')
    <script>
        var options = {
            chart: {
                type: 'bar'
            },
            series: [{
                name: 'sales',
                data: [{{ DB::table('users')->where('firstname', 'Salim')->where('id', 1)->value('regNo') }},40]
            }],
            xaxis: {
                categories: [1991,1992]
            }
        }

        var chart = new ApexCharts(document.querySelector("#chart"), options);

        chart.render();
    </script>
@endpush
