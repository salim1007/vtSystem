<div class="flex flex-col w-full xs:text-xs h-full">
    <div class="flex h-14 pl-4 items-center justify-between shadow-lg bg-blue-400 w-full">
        <span>jkksdjnk</span>
        <button wire:click="logout" class="flex " >
            <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M17 {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', 0006 )->skip(1)->value('cand_idty'))->count() }}L21 12M21 12L17 8M21 12L7 12M13 {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', 0006 )->skip(1)->value('cand_idty'))->count() }}V17C13 18.6569 11.6569 20 10 20H6C4.34315 20 3 18.6569 3 17V7C3 5.34315 4.34315 4 6 4H10C11.6569 4 13 5.34315 13 7V8" stroke="#374151" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
        </button>
    </div>
    <div class="flex flex-col bg-gray-400 h-full">
        <div class="w-full p-3">
            <button type="button" onclick="openModal(true)" class="flex rounded-md bg-green-200 shadow-lg p-2">Settings</button>
        </div>
        <span class=" flex flex-col mt-4 justify-center items-center font-medium">Election Progress</span>
        @foreach(\Illuminate\Support\Facades\DB::table('posts')->get() as $post)
            <div class="mt-4 bg-green-200 xs:flex xs:flex-col flex gap-3 w-full p-3">
                <div class="flex flex-col gap-3 xs:w-full smx:w-72 w-1/2">
                    <div class="flex gap-2 bg-purple-400 shadow-lg justify-between rounded-md p-3">
                        <span class="font-medium">Post:</span>
                        <span class="italic font-medium text-white">{{ $post->post_title }}</span>
                    </div>

                        <div class="flex justify-between shadow-lg bg-red-200 rounded-md p-3">
                            <span class="font-medium">Candidates:</span>
                            <div class="flex font-medium text-white italic flex-col">
                                @foreach(\Illuminate\Support\Facades\DB::table('candidates')->where('post', $post->post_title)->get() as $candidate)
                                <span class="text-gray-800">{{ $candidate->full_name }}</span>
                                @endforeach
                            </div>
                        </div>

                </div>
                <span class="font-medium italic ml-3 mt-4">Statistics</span>
                <div class="flex shadow-lg smx:w-3/4 xs:w-full w-1/2">
                    <div class="bg-slate-300 w-full rounded-md"  >
                        <div class="px-1  w-full" id="{{'chart'.$post->post_code }}"></div>
                    </div>
                </div>
            </div>
        @endforeach


    </div>

    <!-- overlay -->
    <div id="modal_overlay" class="hidden absolute inset-0 bg-black bg-opacity-30 h-screen w-full flex justify-center items-start md:items-center pt-10 md:pt-0">

        <!-- modal -->
        <div id="modal" class="opacity-0 transform -translate-y-full scale-150  relative w-10/12 md:w-1/2 h-1/2 md:h-3/4 bg-white rounded shadow-lg transition-opacity transition-transform duration-300">

            <!-- button close -->
            <button
                onclick="openModal(false)"
                class="absolute -top-3 -right-3 bg-red-500 hover:bg-red-600 text-2xl w-10 h-10 rounded-full focus:outline-none text-white">
                &cross;
            </button>

            <!-- header -->
            <div class="px-4 py-3 border-b border-gray-200">
                <h2 class="text-xl font-semibold text-gray-600">Settings</h2>
            </div>

            <!-- body -->
            <div class="w-full p-3">
                Set Timer
            </div>

            <!-- footer -->
            <div class="absolute bottom-0 left-0 px-4 py-3 border-t border-gray-200 w-full flex justify-end items-center gap-3">
                <button class="bg-green-500 hover:bg-green-600 px-4 py-2 rounded text-white focus:outline-none">Set</button>
                <button
                    onclick="openModal(false)"
                    class="bg-red-500 hover:bg-red-600 px-4 py-2 rounded text-white focus:outline-none"
                >Close</button>
            </div>
        </div>

    </div>

</div>






@push('js')
    <script>

        var options = {
            chart: {
                type: 'bar',
                height:'200'
            },
            plotOptions: {
                bar: {
                    horizontal: true
                }
            },
            series: [{
                data: [{
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', 0003 )->value('full_name')  }}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', 0003 )->value('cand_idty'))->count() }}
                }, {
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', 0003)->skip(1)->value('full_name') }}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', 0003 )->skip(1)->value('cand_idty'))->count() }}

                }
                ],
                name:'votes'
            }]
        }

        var chart = new ApexCharts(document.querySelector("#chart0003"), options);

        chart.render();


    </script>
@endpush

@push('js')
    <script>

        var options = {
            chart: {
                type: 'bar',
                height:'200'
            },
            plotOptions: {
                bar: {
                    horizontal: true
                }
            },
            series: [{
                data: [{
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', 0006 )->value('full_name')}}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', 0006 )->value('cand_idty'))->count() }}
                }, {
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', 0006)->skip(1)->value('full_name') }}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', 0006 )->skip(1)->value('cand_idty'))->count() }}

                }
                ],
                name:'votes'
            }]
        }

        var chart = new ApexCharts(document.querySelector("#chart0006"), options);

        chart.render();


    </script>
@endpush

@push('js')
    <script>

        var options = {
            chart: {
                type: 'bar',
                height:'200'
            },
            plotOptions: {
                bar: {
                    horizontal: true
                }
            },
            series: [{
                data: [{
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0009" )->value('full_name')}}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0009" )->value('cand_idty'))->count() }}
                }, {
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0009")->skip(1)->value('full_name') }}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0009" )->skip(1)->value('cand_idty'))->count() }}

                }
                ],
                name:'votes'
            }]
        }

        var chart = new ApexCharts(document.querySelector("#chart0009"), options);

        chart.render();


    </script>
@endpush

@push('js')
    <script>

        var options = {
            chart: {
                type: 'bar',
                height:'200'
            },
            plotOptions: {
                bar: {
                    horizontal: true
                }
            },
            series: [{
                data: [{
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0012" )->value('full_name')}}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0012" )->value('cand_idty'))->count() }}
                }, {
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0012")->skip(1)->value('full_name') }}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0012" )->skip(1)->value('cand_idty'))->count() }}

                }
                ],
                name:'votes'
            }]
        }

        var chart = new ApexCharts(document.querySelector("#chart0012"), options);

        chart.render();


    </script>
@endpush

@push('js')
    <script>

        var options = {
            chart: {
                type: 'bar',
                height:'200'
            },
            plotOptions: {
                bar: {
                    horizontal: true
                }
            },
            series: [{
                data: [{
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0015" )->value('full_name')}}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0015" )->value('cand_idty'))->count() }}
                }, {
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0015")->skip(1)->value('full_name') }}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0015" )->skip(1)->value('cand_idty'))->count() }}

                }
                ],
                name:'votes'
            }]
        }

        var chart = new ApexCharts(document.querySelector("#chart0015"), options);

        chart.render();


    </script>
@endpush

@push('js')
    <script>

        var options = {
            chart: {
                type: 'bar',
                height:'200'
            },
            plotOptions: {
                bar: {
                    horizontal: true
                }
            },
            series: [{
                data: [{
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0018" )->value('full_name')}}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0018" )->value('cand_idty'))->count() }}
                }, {
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0018")->skip(1)->value('full_name') }}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0018" )->skip(1)->value('cand_idty'))->count() }}

                }
                ],
                name:'votes'
            }]
        }

        var chart = new ApexCharts(document.querySelector("#chart0018"), options);

        chart.render();


    </script>
@endpush

@push('js')
    <script>

        var options = {
            chart: {
                type: 'bar',
                height:'200'
            },
            plotOptions: {
                bar: {
                    horizontal: true
                }
            },
            series: [{
                data: [{
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0021" )->value('full_name')}}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0021" )->value('cand_idty'))->count() }}
                }, {
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0021")->skip(1)->value('full_name') }}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0021" )->skip(1)->value('cand_idty'))->count() }}

                }
                ],
                name:'votes'
            }]
        }

        var chart = new ApexCharts(document.querySelector("#chart0021"), options);

        chart.render();


    </script>
@endpush

@push('js')
    <script>

        var options = {
            chart: {
                type: 'bar',
                height:'200'
            },
            plotOptions: {
                bar: {
                    horizontal: true
                }
            },
            series: [{
                data: [{
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0024" )->value('full_name')}}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0024" )->value('cand_idty'))->count() }}
                }, {
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0024")->skip(1)->value('full_name') }}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0024" )->skip(1)->value('cand_idty'))->count() }}

                }
                ],
                name:'votes'
            }]
        }

        var chart = new ApexCharts(document.querySelector("#chart0024"), options);

        chart.render();


    </script>
@endpush

@push('js')
    <script>

        var options = {
            chart: {
                type: 'bar',
                height:'200'
            },
            plotOptions: {
                bar: {
                    horizontal: true
                }
            },
            series: [{
                data: [{
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0027" )->value('full_name')}}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0027" )->value('cand_idty'))->count() }}
                }, {
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0027")->skip(1)->value('full_name') }}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0027" )->skip(1)->value('cand_idty'))->count() }}

                }
                ],
                name:'votes'
            }]
        }

        var chart = new ApexCharts(document.querySelector("#chart0027"), options);

        chart.render();


    </script>
@endpush

@push('js')
    <script>

        var options = {
            chart: {
                type: 'bar',
                height:'200'
            },
            plotOptions: {
                bar: {
                    horizontal: true
                }
            },
            series: [{
                data: [{
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0030" )->value('full_name')}}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0030" )->value('cand_idty'))->count() }}
                }, {
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0030")->skip(1)->value('full_name') }}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0030" )->skip(1)->value('cand_idty'))->count() }}

                }
                ],
                name:'votes'
            }]
        }

        var chart = new ApexCharts(document.querySelector("#chart0030"), options);

        chart.render();


    </script>
@endpush

@push('js')
    <script>

        var options = {
            chart: {
                type: 'bar',
                height:'200'
            },
            plotOptions: {
                bar: {
                    horizontal: true
                }
            },
            series: [{
                data: [{
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0033" )->value('full_name')}}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0033" )->value('cand_idty'))->count() }}
                }, {
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0033")->skip(1)->value('full_name') }}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0033" )->skip(1)->value('cand_idty'))->count() }}

                }
                ],
                name:'votes'
            }]
        }

        var chart = new ApexCharts(document.querySelector("#chart0033"), options);

        chart.render();


    </script>
@endpush

@push('js')
    <script>

        var options = {
            chart: {
                type: 'bar',
                height:'200'
            },
            plotOptions: {
                bar: {
                    horizontal: true
                }
            },
            series: [{
                data: [{
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0036" )->value('full_name')}}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0036" )->value('cand_idty'))->count() }}
                }, {
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0036")->skip(1)->value('full_name') }}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0036" )->skip(1)->value('cand_idty'))->count() }}

                }
                ],
                name:'votes'
            }]
        }

        var chart = new ApexCharts(document.querySelector("#chart0036"), options);

        chart.render();


    </script>
@endpush

@push('js')
    <script>

        var options = {
            chart: {
                type: 'bar',
                height:'200'
            },
            plotOptions: {
                bar: {
                    horizontal: true
                }
            },
            series: [{
                data: [{
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0039" )->value('full_name')}}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0039" )->value('cand_idty'))->count() }}
                }, {
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0039")->skip(1)->value('full_name') }}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0039" )->skip(1)->value('cand_idty'))->count() }}

                }
                ],
                name:'votes'
            }]
        }

        var chart = new ApexCharts(document.querySelector("#chart0039"), options);

        chart.render();


    </script>
@endpush

@push('js')
    <script>

        var options = {
            chart: {
                type: 'bar',
                height:'200'
            },
            plotOptions: {
                bar: {
                    horizontal: true
                }
            },
            series: [{
                data: [{
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0042" )->value('full_name')}}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0042" )->value('cand_idty'))->count() }}
                }, {
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0042")->skip(1)->value('full_name') }}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0042" )->skip(1)->value('cand_idty'))->count() }}

                }
                ],
                name:'votes'
            }]
        }

        var chart = new ApexCharts(document.querySelector("#chart0042"), options);

        chart.render();


    </script>
@endpush

@push('js')
    <script>

        var options = {
            chart: {
                type: 'bar',
                height:'200'
            },
            plotOptions: {
                bar: {
                    horizontal: true
                }
            },
            series: [{
                data: [{
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0045" )->value('full_name')}}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0045" )->value('cand_idty'))->count() }}
                }, {
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0045")->skip(1)->value('full_name') }}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0045" )->skip(1)->value('cand_idty'))->count() }}

                }
                ],
                name:'votes'
            }]
        }

        var chart = new ApexCharts(document.querySelector("#chart0045"), options);

        chart.render();


    </script>
@endpush

@push('js')
    <script>

        var options = {
            chart: {
                type: 'bar',
                height:'200'
            },
            plotOptions: {
                bar: {
                    horizontal: true
                }
            },
            series: [{
                data: [{
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0048" )->value('full_name')}}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0048" )->value('cand_idty'))->count() }}
                }, {
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0048")->skip(1)->value('full_name') }}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0048" )->skip(1)->value('cand_idty'))->count() }}

                }
                ],
                name:'votes'
            }]
        }

        var chart = new ApexCharts(document.querySelector("#chart0048"), options);

        chart.render();


    </script>
@endpush

@push('js')
    <script>

        var options = {
            chart: {
                type: 'bar',
                height:'200'
            },
            plotOptions: {
                bar: {
                    horizontal: true
                }
            },
            series: [{
                data: [{
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0051" )->value('full_name')}}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0051" )->value('cand_idty'))->count() }}
                }, {
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0051")->skip(1)->value('full_name') }}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0051" )->skip(1)->value('cand_idty'))->count() }}

                }
                ],
                name:'votes'
            }]
        }

        var chart = new ApexCharts(document.querySelector("#chart0051"), options);

        chart.render();


    </script>
@endpush

@push('js')
    <script>

        var options = {
            chart: {
                type: 'bar',
                height:'200'
            },
            plotOptions: {
                bar: {
                    horizontal: true
                }
            },
            series: [{
                data: [{
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0054" )->value('full_name')}}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0054" )->value('cand_idty'))->count() }}
                }, {
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0054")->skip(1)->value('full_name') }}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0054" )->skip(1)->value('cand_idty'))->count() }}

                }
                ],
                name:'votes'
            }]
        }

        var chart = new ApexCharts(document.querySelector("#chart0054"), options);

        chart.render();


    </script>
@endpush

@push('js')
    <script>

        var options = {
            chart: {
                type: 'bar',
                height:'200'
            },
            plotOptions: {
                bar: {
                    horizontal: true
                }
            },
            series: [{
                data: [{
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0057" )->value('full_name')}}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0057" )->value('cand_idty'))->count() }}
                }, {
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0057")->skip(1)->value('full_name') }}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0057" )->skip(1)->value('cand_idty'))->count() }}

                }
                ],
                name:'votes'
            }]
        }

        var chart = new ApexCharts(document.querySelector("#chart0057"), options);

        chart.render();


    </script>
@endpush

@push('js')
    <script>

        var options = {
            chart: {
                type: 'bar',
                height:'200'
            },
            plotOptions: {
                bar: {
                    horizontal: true
                }
            },
            series: [{
                data: [{
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0060" )->value('full_name')}}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0060" )->value('cand_idty'))->count() }}
                }, {
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0060")->skip(1)->value('full_name') }}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0060" )->skip(1)->value('cand_idty'))->count() }}

                }
                ],
                name:'votes'
            }]
        }

        var chart = new ApexCharts(document.querySelector("#chart0054"), options);

        chart.render();


    </script>
@endpush



<script>
    const modal_overlay = document.querySelector('#modal_overlay');
    const modal = document.querySelector('#modal');

    function openModal(value){
        const modalCl = modal.classList
        const overlayCl = modal_overlay

        if(value){
            overlayCl.classList.remove('hidden')
            setTimeout(() => {
                modalCl.remove('opacity-0')
                modalCl.remove('-translate-y-full')
                modalCl.remove('scale-150')
            }, 100);
        } else {
            modalCl.add('-translate-y-full')
            setTimeout(() => {
                modalCl.add('opacity-0')
                modalCl.add('scale-150')
            }, 100);
            setTimeout(() => overlayCl.classList.add('hidden'), 300);
        }
    }
    openModal(false)
</script>
