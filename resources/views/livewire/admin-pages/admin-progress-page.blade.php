<div class="flex flex-col w-full xs:text-xs h-full">
    <div class="flex h-14 pl-4 items-center justify-between shadow-lg bg-gray-300 w-full">
        <div class="flex gap-3 items-center">
            <span class="p-1 text-sm font-bold">Progress</span>
            @if(!$this->date_is_in_btn)
                <span>
           <button wire:click="generatePDF" class="flex rounded-md p-1 hover:bg-red-400 text-black bg-red-400 items-center gap-1">
               <span>Download</span>
               <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 18a.969.969 0 0 0 .933 1h12.134A.97.97 0 0 0 15 18M1 7V5.828a2 2 0 0 1 .586-1.414l2.828-2.828A2 2 0 0 1 5.828 1h8.239A.97.97 0 0 1 15 2v5M6 1v4a1 1 0 0 1-1 1H1m0 9v-5h1.5a1.5 1.5 0 1 1 0 3H1m12 2v-5h2m-2 3h2m-8-3v5h1.375A1.626 1.626 0 0 0 10 13.375v-1.75A1.626 1.626 0 0 0 8.375 10H7Z"/>
               </svg>
           </button>
        </span>
            @endif
        </div>
        <button wire:click="logout" class="flex mr-3 " >
            <svg class="w-6 h-6 text-gray-800 dark:text-white" height="10" width="10" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h11m0 0-4-4m4 4-4 4m-5 3H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h3"/>
            </svg>
        </button>
    </div>
    <div class="flex flex-col bg-gray-200 h-full">

        <span class=" flex flex-col mt-4 text-sm justify-center items-center font-bold">Election Progress</span>
        @foreach(\Illuminate\Support\Facades\DB::table('posts')->get() as $post)
            <div class="mt-4 bg-gray-200 xs:flex xs:flex-col flex gap-3 w-full p-3">
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

        var chart = new ApexCharts(document.querySelector("#chart0060"), options);

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
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0063" )->value('full_name')}}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0063" )->value('cand_idty'))->count() }}
                }, {
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0063")->skip(1)->value('full_name') }}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0063" )->skip(1)->value('cand_idty'))->count() }}

                }
                ],
                name:'votes'
            }]
        }

        var chart = new ApexCharts(document.querySelector("#chart0063"), options);

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
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0066" )->value('full_name')}}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0066" )->value('cand_idty'))->count() }}
                }, {
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0066")->skip(1)->value('full_name') }}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0066" )->skip(1)->value('cand_idty'))->count() }}

                }
                ],
                name:'votes'
            }]
        }

        var chart = new ApexCharts(document.querySelector("#chart0066"), options);

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
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0069" )->value('full_name')}}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0069" )->value('cand_idty'))->count() }}
                }, {
                    x: '{{ \Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0069")->skip(1)->value('full_name') }}',
                    y: {{ \Illuminate\Support\Facades\DB::table('votes')->where('candidate_chosen', DB::table('candidates')->where('post_code', "0069" )->skip(1)->value('cand_idty'))->count() }}

                }
                ],
                name:'votes'
            }]
        }

        var chart = new ApexCharts(document.querySelector("#chart0069"), options);

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
