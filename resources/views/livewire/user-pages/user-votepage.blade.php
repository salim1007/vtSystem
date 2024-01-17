<div class="flex w-full flex-col">
    <div class="flex items-center font-bold h-16 bg-gray-300 p-2 justify-center mb-2" >
        You can only vote once, goodluck!
    </div>
    <div class="w-full h-full flex flex-col items-center gap-2 p-3 ">

            <div class=" w-5/6 smx:w-full xs:w-80 items-center flex justify-center rounded-lg flex-col  ">
                @if(session()->has('success_vote'))
                    <div id="toast-success" class="flex items-center w-full mt-4 max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
                        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                            </svg>
                            <span class="sr-only">Check icon</span>
                        </div>
                        <div class="ms-3 text-sm font-normal">{{ session('success_vote') }}</div>
                        <button type="button" wire:click="successVote" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                        </button>
                    </div>
                @endif
                @if($post_title_0003)
                    <form wire:submit="submitVote0003" id="votingForm" class="bg-gray-300 smx:w-full  p-3  mt-8 mb-8 xs:w-72 flex flex-col items-center justify-evenly rounded-md w-fit">
                            <div class="w-full items-center justify-center flex flex-col">
                                <span class=" mt-8 xs:w-64 items-center uppercase flex justify-center font-semibold">post: {{ \Illuminate\Support\Facades\DB::table('posts')->where('post_code', 0003)->value('post_title') }}</span>
                                @foreach(\Illuminate\Support\Facades\DB::table('candidates')->where('post_code', 0003)->get() as $candidate)
                                    <div  class="bg-gray-200 shadow-xl mt-8 xs:w-64 smx:w-2/3 lg:w-1/2 flex flex-col p-3 gap-2 h-72 rounded-md w-full">
                                        <div class="flex gap-2 items-center">
                                            <img src="{{ asset('storage/'.$candidate->photo_url) }}" alt="candidate_photo" class="bg-green-400 xs:text-xs mt-3 lg:mt-1 justify-center xs:h-16 items-center lg:w-20 lg:h-20 xs:w-16 flex  rounded-md" />


                                            <div class="text-xs">{{ $candidate->full_name }}</div>
                                        </div>
                                        <div class="flex-col mt-1 xs:h-32 ">
                                            <div class=" mt-3 xs:w-full xs:justify-between xs:h-10 mb-4 xs:flex-col xs:text-xs flex gap-2 h-44 w-fit p-1">
                                                <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                    <span>Reg Number</span>
                                                    <span>{{ $candidate->reg_no }}</span>
                                                </div>
                                                <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                    <span>Year</span>
                                                    <span>{{ $candidate->year }}</span>
                                                </div>
                                                <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                    <span>College</span>
                                                    <span>{{ $candidate->college }}</span>
                                                </div>

                                            </div>
                                            @if($this->voter_choice_0003)
                                            @else
                                            <div class=" xs:w-32 h-44 w-fit p-1 gap-3 text-xs justify-start items-center flex ml-1">
                                                <input wire:model="voter_choice_0003"  type="radio" class="form-radio ring-4 border-2 border-gray-300 ring-gray-300  rounded p-3 vote-option" value="{{ $candidate->cand_idty }}" name="{{ $candidate->post }}">
                                                <span>Tick to  vote</span>
                                            </div>
                                            @endif
                                        </div>

                                    </div>
                                @endforeach
                                @if($this->voter_choice_0003)
                                    <span class="flex mt-6">Your vote went to : <b class="ml-1.5">{{ \Illuminate\Support\Facades\DB::table('candidates')->where('cand_idty', $this->voter_choice_0003)->value('full_name') }}</b></span>
                                @else
                                    <button type="submit" class="flex items-start bg-gray-200 shadow-lg p-2 rounded-md mt-6 justify-start text-xs lg:text-sm">Submit</button>
                                @endif

                            </div>


                    </form>
                    @endif

                @if($post_title_0006)
                <form wire:submit="submitVote0006" id="votingForm" class="bg-gray-300 smx:w-full  p-3  mt-8 mb-8 xs:w-72 flex flex-col items-center justify-evenly rounded-md w-fit">
                    <div class="w-full items-center justify-center flex flex-col">
                        <span class=" mt-8 xs:w-64 items-center uppercase flex justify-center font-semibold">post: {{ \Illuminate\Support\Facades\DB::table('posts')->where('post_code', 0006)->value('post_title') }}</span>
                        @foreach(\Illuminate\Support\Facades\DB::table('candidates')->where('post_code', 0006)->get() as $candidate)
                            <div  class="bg-gray-200 shadow-xl mt-8 xs:w-64 smx:w-2/3 lg:w-1/2 flex flex-col p-3 gap-2 h-72 rounded-md w-full">
                                <div class="flex gap-2 items-center">
                                    <img src="{{ asset('storage/'.$candidate->photo_url) }}" alt="candidate_photo" class="bg-green-400 xs:text-xs mt-3 lg:mt-1 justify-center xs:h-16 items-center lg:w-20 lg:h-20 xs:w-16 flex  rounded-md" />


                                    <div class="text-xs">{{ $candidate->full_name }}</div>
                                </div>
                                <div class="flex-col mt-1 xs:h-32 ">
                                    <div class=" mt-3 xs:w-full xs:justify-between xs:h-10 mb-4 xs:flex-col xs:text-xs flex gap-2 h-44 w-fit p-1">
                                        <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                            <span>Reg Number</span>
                                            <span>{{ $candidate->reg_no }}</span>
                                        </div>
                                        <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                            <span>Year</span>
                                            <span>{{ $candidate->year }}</span>
                                        </div>
                                        <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                            <span>College</span>
                                            <span>{{ $candidate->college }}</span>
                                        </div>

                                    </div>
                                    @if($this->voter_choice_0006)
                                    @else
                                    <div class=" xs:w-32 h-44 w-fit p-1 gap-3 text-xs justify-start items-center flex ml-1">
                                        <input wire:model="voter_choice_0006"   type="radio" class="form-radio ring-4 border-2 border-gray-300 ring-gray-300  rounded p-3 vote-option" value="{{ $candidate->cand_idty }}" name="{{ $candidate->post }}">
                                        <span>Tick to  vote</span>
                                    </div>
                                    @endif
                                </div>

                            </div>
                        @endforeach
                        @if($this->voter_choice_0006)
                            <span class="flex mt-6">Your vote went to : <b class="ml-1.5">{{ \Illuminate\Support\Facades\DB::table('candidates')->where('cand_idty', $this->voter_choice_0006)->value('full_name') }}</b></span>
                        @else
                            <button type="submit" class="flex items-start bg-gray-200 shadow-lg p-2 rounded-md mt-6 justify-start text-xs lg:text-sm">Submit</button>
                        @endif

                    </div>


                </form>
                    @endif

                @if($post_title_0009)
                <form wire:submit="submitVote0009" id="votingForm" class="bg-gray-300 smx:w-full  p-3  mt-8 mb-8 xs:w-72 flex flex-col items-center justify-evenly rounded-md w-fit">
                    <div class="w-full items-center justify-center flex flex-col">
                        <span class=" mt-8 xs:w-64 items-center uppercase flex justify-center font-semibold">post: {{ \Illuminate\Support\Facades\DB::table('posts')->where('post_code', "0009")->value('post_title') }}</span>
                        @foreach(\Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0009")->get() as $candidate)
                            <div  class="bg-gray-200 shadow-xl mt-8 xs:w-64 smx:w-2/3 lg:w-1/2 flex flex-col p-3 gap-2 h-72 rounded-md w-full">
                                <div class="flex gap-2 items-center">
                                    <img src="{{ asset('storage/'.$candidate->photo_url) }}" alt="candidate_photo" class="bg-green-400 xs:text-xs mt-3 lg:mt-1 justify-center xs:h-16 items-center lg:w-20 lg:h-20 xs:w-16 flex  rounded-md" />


                                    <div class="text-xs">{{ $candidate->full_name }}</div>
                                </div>
                                <div class="flex-col mt-1 xs:h-32 ">
                                    <div class=" mt-3 xs:w-full xs:justify-between xs:h-10 mb-4 xs:flex-col xs:text-xs flex gap-2 h-44 w-fit p-1">
                                        <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                            <span>Reg Number</span>
                                            <span>{{ $candidate->reg_no }}</span>
                                        </div>
                                        <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                            <span>Year</span>
                                            <span>{{ $candidate->year }}</span>
                                        </div>
                                        <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                            <span>College</span>
                                            <span>{{ $candidate->college }}</span>
                                        </div>

                                    </div>
                                    @if($this->voter_choice_0009)
                                    @else
                                        <div class=" xs:w-32 h-44 w-fit p-1 gap-3 text-xs justify-start items-center flex ml-1">
                                            <input wire:model="voter_choice_0009"   type="radio" class="form-radio ring-4 border-2 border-gray-300 ring-gray-300 rounded p-3 vote-option" value="{{ $candidate->cand_idty }}" name="{{ $candidate->post }}">
                                            <span>Tick to  vote</span>
                                        </div>
                                    @endif
                                </div>

                            </div>
                        @endforeach
                        @if($this->voter_choice_0009)
                            <span class="flex mt-6">Your vote went to : <b class="ml-1.5">{{ \Illuminate\Support\Facades\DB::table('candidates')->where('cand_idty', $this->voter_choice_0009)->value('full_name') }}</b></span>
                        @else
                            <button type="submit" class="flex items-start bg-gray-200 shadow-lg p-2 rounded-md mt-6 justify-start text-xs lg:text-sm">Submit</button>
                        @endif

                    </div>


                </form>
                    @endif

                @if($post_title_0012)
                    <form wire:submit="submitVote0012" id="votingForm" class="bg-gray-300 smx:w-full  p-3  mt-8 mb-8 xs:w-72 flex flex-col items-center justify-evenly rounded-md w-fit">
                        <div class="w-full items-center justify-center flex flex-col">
                            <span class=" mt-8 xs:w-64 items-center uppercase flex justify-center font-semibold">post: {{ \Illuminate\Support\Facades\DB::table('posts')->where('post_code', "0012")->value('post_title') }}</span>
                            @foreach(\Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0012")->get() as $candidate)
                                <div  class="bg-gray-200 shadow-xl mt-8 xs:w-64 smx:w-2/3 lg:w-1/2 flex flex-col p-3 gap-2 h-72 rounded-md w-full">
                                    <div class="flex gap-2 items-center">
                                        <img src="{{ asset('storage/'.$candidate->photo_url) }}" alt="candidate_photo" class="bg-green-400 xs:text-xs mt-3 lg:mt-1 justify-center xs:h-16 items-center lg:w-20 lg:h-20 xs:w-16 flex  rounded-md" />


                                        <div class="text-xs">{{ $candidate->full_name }}</div>
                                    </div>
                                    <div class="flex-col mt-1 xs:h-32 ">
                                        <div class=" mt-3 xs:w-full xs:justify-between xs:h-10 mb-4 xs:flex-col xs:text-xs flex gap-2 h-44 w-fit p-1">
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>Reg Number</span>
                                                <span>{{ $candidate->reg_no }}</span>
                                            </div>
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>Year</span>
                                                <span>{{ $candidate->year }}</span>
                                            </div>
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>College</span>
                                                <span>{{ $candidate->college }}</span>
                                            </div>

                                        </div>
                                        @if($this->voter_choice_0012)
                                        @else
                                            <div class=" xs:w-32 h-44 w-fit p-1 gap-3 text-xs justify-start items-center flex ml-1">
                                                <input wire:model="voter_choice_0012"   type="radio" class="form-radio ring-4 border-2 border-gray-300 ring-gray-300 rounded p-3 vote-option" value="{{ $candidate->cand_idty }}" name="{{ $candidate->post }}">
                                                <span>Tick to  vote</span>
                                            </div>
                                        @endif
                                    </div>

                                </div>
                            @endforeach
                            @if($this->voter_choice_0012)
                                <span class="flex mt-6">Your vote went to : <b class="ml-1.5">{{ \Illuminate\Support\Facades\DB::table('candidates')->where('cand_idty', $this->voter_choice_0012)->value('full_name') }}</b></span>
                            @else
                                <button type="submit" class="flex items-start bg-gray-200 shadow-lg p-2 rounded-md mt-6 justify-start text-xs lg:text-sm">Submit</button>
                            @endif

                        </div>


                    </form>
                    @endif

                @if($post_title_0015)
                    <form wire:submit="submitVote0015" id="votingForm" class="bg-gray-300 smx:w-full  p-3  mt-8 mb-8 xs:w-72 flex flex-col items-center justify-evenly rounded-md w-fit">
                        <div class="w-full items-center justify-center flex flex-col">
                            <span class=" mt-8 xs:w-64 items-center uppercase flex justify-center font-semibold">post: {{ \Illuminate\Support\Facades\DB::table('posts')->where('post_code', "0015")->value('post_title') }}</span>
                            @foreach(\Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0015")->get() as $candidate)
                                <div  class="bg-gray-200 shadow-xl mt-8 xs:w-64 smx:w-2/3 lg:w-1/2 flex flex-col p-3 gap-2 h-72 rounded-md w-full">
                                    <div class="flex gap-2 items-center">
                                        <img src="{{ asset('storage/'.$candidate->photo_url) }}" alt="candidate_photo" class="bg-green-400 xs:text-xs mt-3 lg:mt-1 justify-center xs:h-16 items-center lg:w-20 lg:h-20 xs:w-16 flex  rounded-md" />


                                        <div class="text-xs">{{ $candidate->full_name }}</div>
                                    </div>
                                    <div class="flex-col mt-1 xs:h-32 ">
                                        <div class=" mt-3 xs:w-full xs:justify-between xs:h-10 mb-4 xs:flex-col xs:text-xs flex gap-2 h-44 w-fit p-1">
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>Reg Number</span>
                                                <span>{{ $candidate->reg_no }}</span>
                                            </div>
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>Year</span>
                                                <span>{{ $candidate->year }}</span>
                                            </div>
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>College</span>
                                                <span>{{ $candidate->college }}</span>
                                            </div>

                                        </div>
                                        @if($this->voter_choice_0015)
                                        @else
                                            <div class=" xs:w-32 h-44 w-fit p-1 gap-3 text-xs justify-start items-center flex ml-1">
                                                <input wire:model="voter_choice_0015"   type="radio" class="form-radio ring-4 border-2 border-gray-300 ring-gray-300 rounded p-3 vote-option" value="{{ $candidate->cand_idty }}" name="{{ $candidate->post }}">
                                                <span>Tick to  vote</span>
                                            </div>
                                        @endif
                                    </div>

                                </div>
                            @endforeach
                            @if($this->voter_choice_0015)
                                <span class="flex mt-6">Your vote went to : <b class="ml-1.5">{{ \Illuminate\Support\Facades\DB::table('candidates')->where('cand_idty', $this->voter_choice_0015)->value('full_name') }}</b></span>
                            @else
                                <button type="submit" class="flex items-start bg-gray-200 shadow-lg p-2 rounded-md mt-6 justify-start text-xs lg:text-sm">Submit</button>
                            @endif

                        </div>


                    </form>
                    @endif

                @if($post_title_0018)
                    <form wire:submit="submitVote0018" id="votingForm" class="bg-gray-300 smx:w-full  p-3  mt-8 mb-8 xs:w-72 flex flex-col items-center justify-evenly rounded-md w-fit">
                        <div class="w-full items-center justify-center flex flex-col">
                            <span class=" mt-8 xs:w-64 items-center uppercase flex justify-center font-semibold">post: {{ \Illuminate\Support\Facades\DB::table('posts')->where('post_code', "0018")->value('post_title') }}</span>
                            @foreach(\Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0018")->get() as $candidate)
                                <div  class="bg-gray-200 shadow-xl mt-8 xs:w-64 smx:w-2/3 lg:w-1/2 flex flex-col p-3 gap-2 h-72 rounded-md w-full">
                                    <div class="flex gap-2 items-center">
                                        <img src="{{ asset('storage/'.$candidate->photo_url) }}" alt="candidate_photo" class="bg-green-400 xs:text-xs mt-3 lg:mt-1 justify-center xs:h-16 items-center lg:w-20 lg:h-20 xs:w-16 flex  rounded-md" />


                                        <div class="text-xs">{{ $candidate->full_name }}</div>
                                    </div>
                                    <div class="flex-col mt-1 xs:h-32 ">
                                        <div class=" mt-3 xs:w-full xs:justify-between xs:h-10 mb-4 xs:flex-col xs:text-xs flex gap-2 h-44 w-fit p-1">
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>Reg Number</span>
                                                <span>{{ $candidate->reg_no }}</span>
                                            </div>
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>Year</span>
                                                <span>{{ $candidate->year }}</span>
                                            </div>
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>College</span>
                                                <span>{{ $candidate->college }}</span>
                                            </div>

                                        </div>
                                        @if($this->voter_choice_0018)
                                        @else
                                            <div class=" xs:w-32 h-44 w-fit p-1 gap-3 text-xs justify-start items-center flex ml-1">
                                                <input wire:model="voter_choice_0018"   type="radio" class="form-radio ring-4 border-2 border-gray-300 ring-gray-300 rounded p-3 vote-option" value="{{ $candidate->cand_idty }}" name="{{ $candidate->post }}">
                                                <span>Tick to  vote</span>
                                            </div>
                                        @endif
                                    </div>

                                </div>
                            @endforeach
                            @if($this->voter_choice_0018)
                                <span class="flex mt-6">Your vote went to : <b class="ml-1.5">{{ \Illuminate\Support\Facades\DB::table('candidates')->where('cand_idty', $this->voter_choice_0018)->value('full_name') }}</b></span>
                            @else
                                <button type="submit" class="flex items-start bg-gray-200 shadow-lg p-2 rounded-md mt-6 justify-start text-xs lg:text-sm">Submit</button>
                            @endif

                        </div>


                    </form>
                    @endif

                @if($post_title_0021)
                    <form wire:submit="submitVote0021" id="votingForm" class="bg-gray-300 smx:w-full  p-3  mt-8 mb-8 xs:w-72 flex flex-col items-center justify-evenly rounded-md w-fit">
                        <div class="w-full items-center justify-center flex flex-col">
                            <span class=" mt-8 xs:w-64 items-center uppercase flex justify-center font-semibold">post: {{ \Illuminate\Support\Facades\DB::table('posts')->where('post_code', "0021")->value('post_title') }}</span>
                            @foreach(\Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0021")->get() as $candidate)
                                <div  class="bg-gray-200 shadow-xl mt-8 xs:w-64 smx:w-2/3 lg:w-1/2 flex flex-col p-3 gap-2 h-72 rounded-md w-full">
                                    <div class="flex gap-2 items-center">
                                        <img src="{{ asset('storage/'.$candidate->photo_url) }}" alt="candidate_photo" class="bg-green-400 xs:text-xs mt-3 lg:mt-1 justify-center xs:h-16 items-center lg:w-20 lg:h-20 xs:w-16 flex  rounded-md" />


                                        <div class="text-xs">{{ $candidate->full_name }}</div>
                                    </div>
                                    <div class="flex-col mt-1 xs:h-32 ">
                                        <div class=" mt-3 xs:w-full xs:justify-between xs:h-10 mb-4 xs:flex-col xs:text-xs flex gap-2 h-44 w-fit p-1">
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>Reg Number</span>
                                                <span>{{ $candidate->reg_no }}</span>
                                            </div>
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>Year</span>
                                                <span>{{ $candidate->year }}</span>
                                            </div>
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>College</span>
                                                <span>{{ $candidate->college }}</span>
                                            </div>

                                        </div>
                                        @if($this->voter_choice_0021)
                                        @else
                                            <div class=" xs:w-32 h-44 w-fit p-1 gap-3 text-xs justify-start items-center flex ml-1">
                                                <input wire:model="voter_choice_0021"   type="radio" class="form-radio ring-4 border-2 border-gray-300 ring-gray-300 rounded p-3 vote-option" value="{{ $candidate->cand_idty }}" name="{{ $candidate->post }}">
                                                <span>Tick to  vote</span>
                                            </div>
                                        @endif
                                    </div>

                                </div>
                            @endforeach
                            @if($this->voter_choice_0021)
                                <span class="flex mt-6">Your vote went to : <b class="ml-1.5">{{ \Illuminate\Support\Facades\DB::table('candidates')->where('cand_idty', $this->voter_choice_0021)->value('full_name') }}</b></span>
                            @else
                                <button type="submit" class="flex items-start bg-gray-200 shadow-lg p-2 rounded-md mt-6 justify-start text-xs lg:text-sm">Submit</button>
                            @endif

                        </div>


                    </form>
                    @endif

                @if($post_title_0024)
                    <form wire:submit="submitVote0024" id="votingForm" class="bg-gray-300 smx:w-full  p-3  mt-8 mb-8 xs:w-72 flex flex-col items-center justify-evenly rounded-md w-fit">
                        <div class="w-full items-center justify-center flex flex-col">
                            <span class=" mt-8 xs:w-64 items-center uppercase flex justify-center font-semibold">post: {{ \Illuminate\Support\Facades\DB::table('posts')->where('post_code', "0024")->value('post_title') }}</span>
                            @foreach(\Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0024")->get() as $candidate)
                                <div  class="bg-gray-200 shadow-xl mt-8 xs:w-64 smx:w-2/3 lg:w-1/2 flex flex-col p-3 gap-2 h-72 rounded-md w-full">
                                    <div class="flex gap-2 items-center">
                                        <img src="{{ asset('storage/'.$candidate->photo_url) }}" alt="candidate_photo" class="bg-green-400 xs:text-xs mt-3 lg:mt-1 justify-center xs:h-16 items-center lg:w-20 lg:h-20 xs:w-16 flex  rounded-md" />


                                        <div class="text-xs">{{ $candidate->full_name }}</div>
                                    </div>
                                    <div class="flex-col mt-1 xs:h-32 ">
                                        <div class=" mt-3 xs:w-full xs:justify-between xs:h-10 mb-4 xs:flex-col xs:text-xs flex gap-2 h-44 w-fit p-1">
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>Reg Number</span>
                                                <span>{{ $candidate->reg_no }}</span>
                                            </div>
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>Year</span>
                                                <span>{{ $candidate->year }}</span>
                                            </div>
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>College</span>
                                                <span>{{ $candidate->college }}</span>
                                            </div>

                                        </div>
                                        @if($this->voter_choice_0024)
                                        @else
                                            <div class=" xs:w-32 h-44 w-fit p-1 gap-3 text-xs justify-start items-center flex ml-1">
                                                <input wire:model="voter_choice_0024"   type="radio" class="form-radio ring-4 border-2 border-gray-300 ring-gray-300 rounded p-3 vote-option" value="{{ $candidate->cand_idty }}" name="{{ $candidate->post }}">
                                                <span>Tick to  vote</span>
                                            </div>
                                        @endif
                                    </div>

                                </div>
                            @endforeach
                            @if($this->voter_choice_0024)
                                <span class="flex mt-6">Your vote went to : <b class="ml-1.5">{{ \Illuminate\Support\Facades\DB::table('candidates')->where('cand_idty', $this->voter_choice_0024)->value('full_name') }}</b></span>
                            @else
                                <button type="submit" class="flex items-start bg-gray-200 shadow-lg p-2 rounded-md mt-6 justify-start text-xs lg:text-sm">Submit</button>
                            @endif

                        </div>


                    </form>
                    @endif

                @if($post_title_0027)
                    <form wire:submit="submitVote0027" id="votingForm" class="bg-gray-300 smx:w-full  p-3  mt-8 mb-8 xs:w-72 flex flex-col items-center justify-evenly rounded-md w-fit">
                        <div class="w-full items-center justify-center flex flex-col">
                            <span class=" mt-8 xs:w-64 items-center uppercase flex justify-center font-semibold">post: {{ \Illuminate\Support\Facades\DB::table('posts')->where('post_code', "0027")->value('post_title') }}</span>
                            @foreach(\Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0027")->get() as $candidate)
                                <div  class="bg-gray-200 shadow-xl mt-8 xs:w-64 smx:w-2/3 lg:w-1/2 flex flex-col p-3 gap-2 h-72 rounded-md w-full">
                                    <div class="flex gap-2 items-center">
                                        <img src="{{ asset('storage/'.$candidate->photo_url) }}" alt="candidate_photo" class="bg-green-400 xs:text-xs mt-3 lg:mt-1 justify-center xs:h-16 items-center lg:w-20 lg:h-20 xs:w-16 flex  rounded-md" />


                                        <div class="text-xs">{{ $candidate->full_name }}</div>
                                    </div>
                                    <div class="flex-col mt-1 xs:h-32 ">
                                        <div class=" mt-3 xs:w-full xs:justify-between xs:h-10 mb-4 xs:flex-col xs:text-xs flex gap-2 h-44 w-fit p-1">
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>Reg Number</span>
                                                <span>{{ $candidate->reg_no }}</span>
                                            </div>
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>Year</span>
                                                <span>{{ $candidate->year }}</span>
                                            </div>
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>College</span>
                                                <span>{{ $candidate->college }}</span>
                                            </div>

                                        </div>
                                        @if($this->voter_choice_0027)
                                        @else
                                            <div class=" xs:w-32 h-44 w-fit p-1 gap-3 text-xs justify-start items-center flex ml-1">
                                                <input wire:model="voter_choice_0027"   type="radio" class="form-radio ring-4 border-2 border-gray-300 ring-gray-300 rounded p-3 vote-option" value="{{ $candidate->cand_idty }}" name="{{ $candidate->post }}">
                                                <span>Tick to  vote</span>
                                            </div>
                                        @endif
                                    </div>

                                </div>
                            @endforeach
                            @if($this->voter_choice_0027)
                                <span class="flex mt-6">Your vote went to : <b class="ml-1.5">{{ \Illuminate\Support\Facades\DB::table('candidates')->where('cand_idty', $this->voter_choice_0027)->value('full_name') }}</b></span>
                            @else
                                <button type="submit" class="flex items-start bg-gray-200 shadow-lg p-2 rounded-md mt-6 justify-start text-xs lg:text-sm">Submit</button>
                            @endif

                        </div>


                    </form>
                    @endif

                @if($post_title_0030)
                    <form wire:submit="submitVote0030" id="votingForm" class="bg-gray-300 smx:w-full  p-3  mt-8 mb-8 xs:w-72 flex flex-col items-center justify-evenly rounded-md w-fit">
                        <div class="w-full items-center justify-center flex flex-col">
                            <span class=" mt-8 xs:w-64 items-center uppercase flex justify-center font-semibold">post: {{ \Illuminate\Support\Facades\DB::table('posts')->where('post_code', "0030")->value('post_title') }}</span>
                            @foreach(\Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0030")->get() as $candidate)
                                <div  class="bg-gray-200 shadow-xl mt-8 xs:w-64 smx:w-2/3 lg:w-1/2 flex flex-col p-3 gap-2 h-72 rounded-md w-full">
                                    <div class="flex gap-2 items-center">
                                        <img src="{{ asset('storage/'.$candidate->photo_url) }}" alt="candidate_photo" class="bg-green-400 xs:text-xs mt-3 lg:mt-1 justify-center xs:h-16 items-center lg:w-20 lg:h-20 xs:w-16 flex  rounded-md" />


                                        <div class="text-xs">{{ $candidate->full_name }}</div>
                                    </div>
                                    <div class="flex-col mt-1 xs:h-32 ">
                                        <div class=" mt-3 xs:w-full xs:justify-between xs:h-10 mb-4 xs:flex-col xs:text-xs flex gap-2 h-44 w-fit p-1">
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>Reg Number</span>
                                                <span>{{ $candidate->reg_no }}</span>
                                            </div>
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>Year</span>
                                                <span>{{ $candidate->year }}</span>
                                            </div>
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>College</span>
                                                <span>{{ $candidate->college }}</span>
                                            </div>

                                        </div>
                                        @if($this->voter_choice_0030)
                                        @else
                                            <div class=" xs:w-32 h-44 w-fit p-1 gap-3 text-xs justify-start items-center flex ml-1">
                                                <input wire:model="voter_choice_0030"   type="radio" class="form-radio ring-4 border-2 border-gray-300 ring-gray-300 rounded p-3 vote-option" value="{{ $candidate->cand_idty }}" name="{{ $candidate->post }}">
                                                <span>Tick to  vote</span>
                                            </div>
                                        @endif
                                    </div>

                                </div>
                            @endforeach
                            @if($this->voter_choice_0030)
                                <span class="flex mt-6">Your vote went to : <b class="ml-1.5">{{ \Illuminate\Support\Facades\DB::table('candidates')->where('cand_idty', $this->voter_choice_0030)->value('full_name') }}</b></span>
                            @else
                                <button type="submit" class="flex items-start bg-gray-200 shadow-lg p-2 rounded-md mt-6 justify-start text-xs lg:text-sm">Submit</button>
                            @endif

                        </div>


                    </form>
                    @endif

                 @if($post_title_0033)
                    <form wire:submit="submitVote0033" id="votingForm" class="bg-gray-300 smx:w-full  p-3  mt-8 mb-8 xs:w-72 flex flex-col items-center justify-evenly rounded-md w-fit">
                        <div class="w-full items-center justify-center flex flex-col">
                            <span class=" mt-8 xs:w-64 items-center uppercase flex justify-center font-semibold">post: {{ \Illuminate\Support\Facades\DB::table('posts')->where('post_code', "0033")->value('post_title') }}</span>
                            @foreach(\Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0033")->get() as $candidate)
                                <div  class="bg-gray-200 shadow-xl mt-8 xs:w-64 smx:w-2/3 lg:w-1/2 flex flex-col p-3 gap-2 h-72 rounded-md w-full">
                                    <div class="flex gap-2 items-center">
                                        <img src="{{ asset('storage/'.$candidate->photo_url) }}" alt="candidate_photo" class="bg-green-400 xs:text-xs mt-3 lg:mt-1 justify-center xs:h-16 items-center lg:w-20 lg:h-20 xs:w-16 flex  rounded-md" />


                                        <div class="text-xs">{{ $candidate->full_name }}</div>
                                    </div>
                                    <div class="flex-col mt-1 xs:h-32 ">
                                        <div class=" mt-3 xs:w-full xs:justify-between xs:h-10 mb-4 xs:flex-col xs:text-xs flex gap-2 h-44 w-fit p-1">
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>Reg Number</span>
                                                <span>{{ $candidate->reg_no }}</span>
                                            </div>
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>Year</span>
                                                <span>{{ $candidate->year }}</span>
                                            </div>
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>College</span>
                                                <span>{{ $candidate->college }}</span>
                                            </div>

                                        </div>
                                        @if($this->voter_choice_0033)
                                        @else
                                            <div class=" xs:w-32 h-44 w-fit p-1 gap-3 text-xs justify-start items-center flex ml-1">
                                                <input wire:model="voter_choice_0033"   type="radio" class="form-radio ring-4 border-2 border-gray-300 ring-gray-300 rounded p-3 vote-option" value="{{ $candidate->cand_idty }}" name="{{ $candidate->post }}">
                                                <span>Tick to  vote</span>
                                            </div>
                                        @endif
                                    </div>

                                </div>
                            @endforeach
                            @if($this->voter_choice_0033)
                                <span class="flex mt-6">Your vote went to : <b class="ml-1.5">{{ \Illuminate\Support\Facades\DB::table('candidates')->where('cand_idty', $this->voter_choice_0033)->value('full_name') }}</b></span>
                            @else
                                <button type="submit" class="flex items-start bg-gray-200 shadow-lg p-2 rounded-md mt-6 justify-start text-xs lg:text-sm">Submit</button>
                            @endif

                        </div>


                    </form>
                    @endif

                @if($post_title_0036)
                    <form wire:submit="submitVote0036" id="votingForm" class="bg-gray-300 smx:w-full  p-3  mt-8 mb-8 xs:w-72 flex flex-col items-center justify-evenly rounded-md w-fit">
                        <div class="w-full items-center justify-center flex flex-col">
                            <span class=" mt-8 xs:w-64 items-center uppercase flex justify-center font-semibold">post: {{ \Illuminate\Support\Facades\DB::table('posts')->where('post_code', "0036")->value('post_title') }}</span>
                            @foreach(\Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0036")->get() as $candidate)
                                <div  class="bg-gray-200 shadow-xl mt-8 xs:w-64 smx:w-2/3 lg:w-1/2 flex flex-col p-3 gap-2 h-72 rounded-md w-full">
                                    <div class="flex gap-2 items-center">
                                        <img src="{{ asset('storage/'.$candidate->photo_url) }}" alt="candidate_photo" class="bg-green-400 xs:text-xs mt-3 lg:mt-1 justify-center xs:h-16 items-center lg:w-20 lg:h-20 xs:w-16 flex  rounded-md" />


                                        <div class="text-xs">{{ $candidate->full_name }}</div>
                                    </div>
                                    <div class="flex-col mt-1 xs:h-32 ">
                                        <div class=" mt-3 xs:w-full xs:justify-between xs:h-10 mb-4 xs:flex-col xs:text-xs flex gap-2 h-44 w-fit p-1">
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>Reg Number</span>
                                                <span>{{ $candidate->reg_no }}</span>
                                            </div>
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>Year</span>
                                                <span>{{ $candidate->year }}</span>
                                            </div>
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>College</span>
                                                <span>{{ $candidate->college }}</span>
                                            </div>

                                        </div>
                                        @if($this->voter_choice_0036)
                                        @else
                                            <div class=" xs:w-32 h-44 w-fit p-1 gap-3 text-xs justify-start items-center flex ml-1">
                                                <input wire:model="voter_choice_0036"   type="radio" class="form-radio ring-4 border-2 border-gray-300 ring-gray-300 rounded p-3 vote-option" value="{{ $candidate->cand_idty }}" name="{{ $candidate->post }}">
                                                <span>Tick to  vote</span>
                                            </div>
                                        @endif
                                    </div>

                                </div>
                            @endforeach
                            @if($this->voter_choice_0036)
                                <span class="flex mt-6">Your vote went to : <b class="ml-1.5">{{ \Illuminate\Support\Facades\DB::table('candidates')->where('cand_idty', $this->voter_choice_0036)->value('full_name') }}</b></span>
                            @else
                                <button type="submit" class="flex items-start bg-gray-200 shadow-lg p-2 rounded-md mt-6 justify-start text-xs lg:text-sm">Submit</button>
                            @endif

                        </div>


                    </form>
                    @endif

                @if($post_title_0039)
                    <form wire:submit="submitVote0039" id="votingForm" class="bg-gray-300 smx:w-full  p-3  mt-8 mb-8 xs:w-72 flex flex-col items-center justify-evenly rounded-md w-fit">
                        <div class="w-full items-center justify-center flex flex-col">
                            <span class=" mt-8 xs:w-64 items-center uppercase flex justify-center font-semibold">post: {{ \Illuminate\Support\Facades\DB::table('posts')->where('post_code', "0039")->value('post_title') }}</span>
                            @foreach(\Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0039")->get() as $candidate)
                                <div  class="bg-gray-200 shadow-xl mt-8 xs:w-64 smx:w-2/3 lg:w-1/2 flex flex-col p-3 gap-2 h-72 rounded-md w-full">
                                    <div class="flex gap-2 items-center">
                                        <img src="{{ asset('storage/'.$candidate->photo_url) }}" alt="candidate_photo" class="bg-green-400 xs:text-xs mt-3 lg:mt-1 justify-center xs:h-16 items-center lg:w-20 lg:h-20 xs:w-16 flex  rounded-md" />


                                        <div class="text-xs">{{ $candidate->full_name }}</div>
                                    </div>
                                    <div class="flex-col mt-1 xs:h-32 ">
                                        <div class=" mt-3 xs:w-full xs:justify-between xs:h-10 mb-4 xs:flex-col xs:text-xs flex gap-2 h-44 w-fit p-1">
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>Reg Number</span>
                                                <span>{{ $candidate->reg_no }}</span>
                                            </div>
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>Year</span>
                                                <span>{{ $candidate->year }}</span>
                                            </div>
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>College</span>
                                                <span>{{ $candidate->college }}</span>
                                            </div>

                                        </div>
                                        @if($this->voter_choice_0039)
                                        @else
                                            <div class=" xs:w-32 h-44 w-fit p-1 gap-3 text-xs justify-start items-center flex ml-1">
                                                <input wire:model="voter_choice_0039"   type="radio" class="form-radio ring-4 border-2 border-gray-300 ring-gray-300 rounded p-3 vote-option" value="{{ $candidate->cand_idty }}" name="{{ $candidate->post }}">
                                                <span>Tick to  vote</span>
                                            </div>
                                        @endif
                                    </div>

                                </div>
                            @endforeach
                            @if($this->voter_choice_0039)
                                <span class="flex mt-6">Your vote went to : <b class="ml-1.5">{{ \Illuminate\Support\Facades\DB::table('candidates')->where('cand_idty', $this->voter_choice_0039)->value('full_name') }}</b></span>
                            @else
                                <button type="submit" class="flex items-start bg-gray-200 shadow-lg p-2 rounded-md mt-6 justify-start text-xs lg:text-sm">Submit</button>
                            @endif

                        </div>


                    </form>
                    @endif

                @if($post_title_0042)
                    <form wire:submit="submitVote0042" id="votingForm" class="bg-gray-300 smx:w-full  p-3  mt-8 mb-8 xs:w-72 flex flex-col items-center justify-evenly rounded-md w-fit">
                        <div class="w-full items-center justify-center flex flex-col">
                            <span class=" mt-8 xs:w-64 items-center uppercase flex justify-center font-semibold">post: {{ \Illuminate\Support\Facades\DB::table('posts')->where('post_code', "0042")->value('post_title') }}</span>
                            @foreach(\Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0042")->get() as $candidate)
                                <div  class="bg-gray-200 shadow-xl mt-8 xs:w-64 smx:w-2/3 lg:w-1/2 flex flex-col p-3 gap-2 h-72 rounded-md w-full">
                                    <div class="flex gap-2 items-center">
                                        <img src="{{ asset('storage/'.$candidate->photo_url) }}" alt="candidate_photo" class="bg-green-400 xs:text-xs mt-3 lg:mt-1 justify-center xs:h-16 items-center lg:w-20 lg:h-20 xs:w-16 flex  rounded-md" />


                                        <div class="text-xs">{{ $candidate->full_name }}</div>
                                    </div>
                                    <div class="flex-col mt-1 xs:h-32 ">
                                        <div class=" mt-3 xs:w-full xs:justify-between xs:h-10 mb-4 xs:flex-col xs:text-xs flex gap-2 h-44 w-fit p-1">
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>Reg Number</span>
                                                <span>{{ $candidate->reg_no }}</span>
                                            </div>
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>Year</span>
                                                <span>{{ $candidate->year }}</span>
                                            </div>
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>College</span>
                                                <span>{{ $candidate->college }}</span>
                                            </div>

                                        </div>
                                        @if($this->voter_choice_0042)
                                        @else
                                            <div class=" xs:w-32 h-44 w-fit p-1 gap-3 text-xs justify-start items-center flex ml-1">
                                                <input wire:model="voter_choice_0042"   type="radio" class="form-radio ring-4 border-2 border-gray-300 ring-gray-300 rounded p-3 vote-option" value="{{ $candidate->cand_idty }}" name="{{ $candidate->post }}">
                                                <span>Tick to  vote</span>
                                            </div>
                                        @endif
                                    </div>

                                </div>
                            @endforeach
                            @if($this->voter_choice_0042)
                                <span class="flex mt-6">Your vote went to : <b class="ml-1.5">{{ \Illuminate\Support\Facades\DB::table('candidates')->where('cand_idty', $this->voter_choice_0042)->value('full_name') }}</b></span>
                            @else
                                <button type="submit" class="flex items-start bg-gray-200 shadow-lg p-2 rounded-md mt-6 justify-start text-xs lg:text-sm">Submit</button>
                            @endif

                        </div>


                    </form>
                    @endif

                @if($post_title_0045)
                    <form wire:submit="submitVote0045" id="votingForm" class="bg-gray-300 smx:w-full  p-3  mt-8 mb-8 xs:w-72 flex flex-col items-center justify-evenly rounded-md w-fit">
                        <div class="w-full items-center justify-center flex flex-col">
                            <span class=" mt-8 xs:w-64 items-center uppercase flex justify-center font-semibold">post: {{ \Illuminate\Support\Facades\DB::table('posts')->where('post_code', "0045")->value('post_title') }}</span>
                            @foreach(\Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0045")->get() as $candidate)
                                <div  class="bg-gray-200 shadow-xl mt-8 xs:w-64 smx:w-2/3 lg:w-1/2 flex flex-col p-3 gap-2 h-72 rounded-md w-full">
                                    <div class="flex gap-2 items-center">
                                        <img src="{{ asset('storage/'.$candidate->photo_url) }}" alt="candidate_photo" class="bg-green-400 xs:text-xs mt-3 lg:mt-1 justify-center xs:h-16 items-center lg:w-20 lg:h-20 xs:w-16 flex  rounded-md" />


                                        <div class="text-xs">{{ $candidate->full_name }}</div>
                                    </div>
                                    <div class="flex-col mt-1 xs:h-32 ">
                                        <div class=" mt-3 xs:w-full xs:justify-between xs:h-10 mb-4 xs:flex-col xs:text-xs flex gap-2 h-44 w-fit p-1">
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>Reg Number</span>
                                                <span>{{ $candidate->reg_no }}</span>
                                            </div>
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>Year</span>
                                                <span>{{ $candidate->year }}</span>
                                            </div>
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>College</span>
                                                <span>{{ $candidate->college }}</span>
                                            </div>

                                        </div>
                                        @if($this->voter_choice_0045)
                                        @else
                                            <div class=" xs:w-32 h-44 w-fit p-1 gap-3 text-xs justify-start items-center flex ml-1">
                                                <input wire:model="voter_choice_0045"   type="radio" class="form-radio ring-4 border-2 border-gray-300 ring-gray-300 rounded p-3 vote-option" value="{{ $candidate->cand_idty }}" name="{{ $candidate->post }}">
                                                <span>Tick to  vote</span>
                                            </div>
                                        @endif
                                    </div>

                                </div>
                            @endforeach
                            @if($this->voter_choice_0045)
                                <span class="flex mt-6">Your vote went to : <b class="ml-1.5">{{ \Illuminate\Support\Facades\DB::table('candidates')->where('cand_idty', $this->voter_choice_0045)->value('full_name') }}</b></span>
                            @else
                                <button type="submit" class="flex items-start bg-gray-200 shadow-lg p-2 rounded-md mt-6 justify-start text-xs lg:text-sm">Submit</button>
                            @endif

                        </div>


                    </form>
                    @endif

                @if($post_title_0048)
                    <form wire:submit="submitVote0048" id="votingForm" class="bg-gray-300 smx:w-full  p-3  mt-8 mb-8 xs:w-72 flex flex-col items-center justify-evenly rounded-md w-fit">
                        <div class="w-full items-center justify-center flex flex-col">
                            <span class=" mt-8 xs:w-64 items-center uppercase flex justify-center font-semibold">post: {{ \Illuminate\Support\Facades\DB::table('posts')->where('post_code', "0048")->value('post_title') }}</span>
                            @foreach(\Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0048")->get() as $candidate)
                                <div  class="bg-gray-200 shadow-xl mt-8 xs:w-64 smx:w-2/3 lg:w-1/2 flex flex-col p-3 gap-2 h-72 rounded-md w-full">
                                    <div class="flex gap-2 items-center">
                                        <img src="{{ asset('storage/'.$candidate->photo_url) }}" alt="candidate_photo" class="bg-green-400 xs:text-xs mt-3 lg:mt-1 justify-center xs:h-16 items-center lg:w-20 lg:h-20 xs:w-16 flex  rounded-md" />


                                        <div class="text-xs">{{ $candidate->full_name }}</div>
                                    </div>
                                    <div class="flex-col mt-1 xs:h-32 ">
                                        <div class=" mt-3 xs:w-full xs:justify-between xs:h-10 mb-4 xs:flex-col xs:text-xs flex gap-2 h-44 w-fit p-1">
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>Reg Number</span>
                                                <span>{{ $candidate->reg_no }}</span>
                                            </div>
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>Year</span>
                                                <span>{{ $candidate->year }}</span>
                                            </div>
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>College</span>
                                                <span>{{ $candidate->college }}</span>
                                            </div>

                                        </div>
                                        @if($this->voter_choice_0048)
                                        @else
                                            <div class=" xs:w-32 h-44 w-fit p-1 gap-3 text-xs justify-start items-center flex ml-1">
                                                <input wire:model="voter_choice_0048"   type="radio" class="form-radio ring-4 border-2 border-gray-300 ring-gray-300 rounded p-3 vote-option" value="{{ $candidate->cand_idty }}" name="{{ $candidate->post }}">
                                                <span>Tick to  vote</span>
                                            </div>
                                        @endif
                                    </div>

                                </div>
                            @endforeach
                            @if($this->voter_choice_0048)
                                <span class="flex mt-6">Your vote went to : <b class="ml-1.5">{{ \Illuminate\Support\Facades\DB::table('candidates')->where('cand_idty', $this->voter_choice_0048)->value('full_name') }}</b></span>
                            @else
                                <button type="submit" class="flex items-start bg-gray-200 shadow-lg p-2 rounded-md mt-6 justify-start text-xs lg:text-sm">Submit</button>
                            @endif

                        </div>


                    </form>
                    @endif

                @if($post_title_0051)
                    <form wire:submit="submitVote0051" id="votingForm" class="bg-gray-300 smx:w-full  p-3  mt-8 mb-8 xs:w-72 flex flex-col items-center justify-evenly rounded-md w-fit">
                        <div class="w-full items-center justify-center flex flex-col">
                            <span class=" mt-8 xs:w-64 items-center uppercase flex justify-center font-semibold">post: {{ \Illuminate\Support\Facades\DB::table('posts')->where('post_code', "0051")->value('post_title') }}</span>
                            @foreach(\Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0051")->get() as $candidate)
                                <div  class="bg-gray-200 shadow-xl mt-8 xs:w-64 smx:w-2/3 lg:w-1/2 flex flex-col p-3 gap-2 h-72 rounded-md w-full">
                                    <div class="flex gap-2 items-center">
                                        <img src="{{ asset('storage/'.$candidate->photo_url) }}" alt="candidate_photo" class="bg-green-400 xs:text-xs mt-3 lg:mt-1 justify-center xs:h-16 items-center lg:w-20 lg:h-20 xs:w-16 flex  rounded-md" />


                                        <div class="text-xs">{{ $candidate->full_name }}</div>
                                    </div>
                                    <div class="flex-col mt-1 xs:h-32 ">
                                        <div class=" mt-3 xs:w-full xs:justify-between xs:h-10 mb-4 xs:flex-col xs:text-xs flex gap-2 h-44 w-fit p-1">
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>Reg Number</span>
                                                <span>{{ $candidate->reg_no }}</span>
                                            </div>
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>Year</span>
                                                <span>{{ $candidate->year }}</span>
                                            </div>
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>College</span>
                                                <span>{{ $candidate->college }}</span>
                                            </div>

                                        </div>
                                        @if($this->voter_choice_0051)
                                        @else
                                            <div class=" xs:w-32 h-44 w-fit p-1 gap-3 text-xs justify-start items-center flex ml-1">
                                                <input wire:model="voter_choice_0051"   type="radio" class="form-radio ring-4 border-2 border-gray-300 ring-gray-300 rounded p-3 vote-option" value="{{ $candidate->cand_idty }}" name="{{ $candidate->post }}">
                                                <span>Tick to  vote</span>
                                            </div>
                                        @endif
                                    </div>

                                </div>
                            @endforeach
                            @if($this->voter_choice_0051)
                                <span class="flex mt-6">Your vote went to : <b class="ml-1.5">{{ \Illuminate\Support\Facades\DB::table('candidates')->where('cand_idty', $this->voter_choice_0051)->value('full_name') }}</b></span>
                            @else
                                <button type="submit" class="flex items-start bg-gray-200 shadow-lg p-2 rounded-md mt-6 justify-start text-xs lg:text-sm">Submit</button>
                            @endif

                        </div>


                    </form>
                    @endif

                @if($post_title_0054)
                    <form wire:submit="submitVote0054" id="votingForm" class="bg-gray-300 smx:w-full  p-3  mt-8 mb-8 xs:w-72 flex flex-col items-center justify-evenly rounded-md w-fit">
                        <div class="w-full items-center justify-center flex flex-col">
                            <span class=" mt-8 xs:w-64 items-center uppercase flex justify-center font-semibold">post: {{ \Illuminate\Support\Facades\DB::table('posts')->where('post_code', "0054")->value('post_title') }}</span>
                            @foreach(\Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0054")->get() as $candidate)
                                <div  class="bg-gray-200 shadow-xl mt-8 xs:w-64 smx:w-2/3 lg:w-1/2 flex flex-col p-3 gap-2 h-72 rounded-md w-full">
                                    <div class="flex gap-2 items-center">
                                        <img src="{{ asset('storage/'.$candidate->photo_url) }}" alt="candidate_photo" class="bg-green-400 xs:text-xs mt-3 lg:mt-1 justify-center xs:h-16 items-center lg:w-20 lg:h-20 xs:w-16 flex  rounded-md" />


                                        <div class="text-xs">{{ $candidate->full_name }}</div>
                                    </div>
                                    <div class="flex-col mt-1 xs:h-32 ">
                                        <div class=" mt-3 xs:w-full xs:justify-between xs:h-10 mb-4 xs:flex-col xs:text-xs flex gap-2 h-44 w-fit p-1">
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>Reg Number</span>
                                                <span>{{ $candidate->reg_no }}</span>
                                            </div>
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>Year</span>
                                                <span>{{ $candidate->year }}</span>
                                            </div>
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>College</span>
                                                <span>{{ $candidate->college }}</span>
                                            </div>

                                        </div>
                                        @if($this->voter_choice_0054)
                                        @else
                                            <div class=" xs:w-32 h-44 w-fit p-1 gap-3 text-xs justify-start items-center flex ml-1">
                                                <input wire:model="voter_choice_0054"   type="radio" class="form-radio ring-4 border-2 border-gray-300 ring-gray-300 rounded p-3 vote-option" value="{{ $candidate->cand_idty }}" name="{{ $candidate->post }}">
                                                <span>Tick to  vote</span>
                                            </div>
                                        @endif
                                    </div>

                                </div>
                            @endforeach
                            @if($this->voter_choice_0054)
                                <span class="flex mt-6">Your vote went to : <b class="ml-1.5">{{ \Illuminate\Support\Facades\DB::table('candidates')->where('cand_idty', $this->voter_choice_0054)->value('full_name') }}</b></span>
                            @else
                                <button type="submit" class="flex items-start bg-gray-200 shadow-lg p-2 rounded-md mt-6 justify-start text-xs lg:text-sm">Submit</button>
                            @endif

                        </div>


                    </form>
                    @endif

                @if($post_title_0057)
                    <form wire:submit="submitVote0057" id="votingForm" class="bg-gray-300 smx:w-full  p-3  mt-8 mb-8 xs:w-72 flex flex-col items-center justify-evenly rounded-md w-fit">
                        <div class="w-full items-center justify-center flex flex-col">
                            <span class=" mt-8 xs:w-64 items-center uppercase flex justify-center font-semibold">post: {{ \Illuminate\Support\Facades\DB::table('posts')->where('post_code', "0057")->value('post_title') }}</span>
                            @foreach(\Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0057")->get() as $candidate)
                                <div  class="bg-gray-200 shadow-xl mt-8 xs:w-64 smx:w-2/3 lg:w-1/2 flex flex-col p-3 gap-2 h-72 rounded-md w-full">
                                    <div class="flex gap-2 items-center">
                                        <img src="{{ asset('storage/'.$candidate->photo_url) }}" alt="candidate_photo" class="bg-green-400 xs:text-xs mt-3 lg:mt-1 justify-center xs:h-16 items-center lg:w-20 lg:h-20 xs:w-16 flex  rounded-md" />


                                        <div class="text-xs">{{ $candidate->full_name }}</div>
                                    </div>
                                    <div class="flex-col mt-1 xs:h-32 ">
                                        <div class=" mt-3 xs:w-full xs:justify-between xs:h-10 mb-4 xs:flex-col xs:text-xs flex gap-2 h-44 w-fit p-1">
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>Reg Number</span>
                                                <span>{{ $candidate->reg_no }}</span>
                                            </div>
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>Year</span>
                                                <span>{{ $candidate->year }}</span>
                                            </div>
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>College</span>
                                                <span>{{ $candidate->college }}</span>
                                            </div>

                                        </div>
                                        @if($this->voter_choice_0057)
                                        @else
                                            <div class=" xs:w-32 h-44 w-fit p-1 gap-3 text-xs justify-start items-center flex ml-1">
                                                <input wire:model="voter_choice_0057"   type="radio" class="form-radio ring-4 border-2 border-gray-300 ring-gray-300 rounded p-3 vote-option" value="{{ $candidate->cand_idty }}" name="{{ $candidate->post }}">
                                                <span>Tick to  vote</span>
                                            </div>
                                        @endif
                                    </div>

                                </div>
                            @endforeach
                            @if($this->voter_choice_0057)
                                <span class="flex mt-6">Your vote went to : <b class="ml-1.5">{{ \Illuminate\Support\Facades\DB::table('candidates')->where('cand_idty', $this->voter_choice_0057)->value('full_name') }}</b></span>
                            @else
                                <button type="submit" class="flex items-start bg-gray-200 shadow-lg p-2 rounded-md mt-6 justify-start text-xs lg:text-sm">Submit</button>
                            @endif

                        </div>


                    </form>
                    @endif

                @if($post_title_0060)
                    <form wire:submit="submitVote0060" id="votingForm" class="bg-gray-300 smx:w-full  p-3  mt-8 mb-8 xs:w-72 flex flex-col items-center justify-evenly rounded-md w-fit">
                        <div class="w-full items-center justify-center flex flex-col">
                            <span class=" mt-8 xs:w-64 items-center uppercase flex justify-center font-semibold">post: {{ \Illuminate\Support\Facades\DB::table('posts')->where('post_code', "0060")->value('post_title') }}</span>
                            @foreach(\Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0060")->get() as $candidate)
                                <div  class="bg-gray-200 shadow-xl mt-8 xs:w-64 smx:w-2/3 lg:w-1/2 flex flex-col p-3 gap-2 h-72 rounded-md w-full">
                                    <div class="flex gap-2 items-center">
                                        <img src="{{ asset('storage/'.$candidate->photo_url) }}" alt="candidate_photo" class="bg-green-400 xs:text-xs mt-3 lg:mt-1 justify-center xs:h-16 items-center lg:w-20 lg:h-20 xs:w-16 flex  rounded-md" />


                                        <div class="text-xs">{{ $candidate->full_name }}</div>
                                    </div>
                                    <div class="flex-col mt-1 xs:h-32 ">
                                        <div class=" mt-3 xs:w-full xs:justify-between xs:h-10 mb-4 xs:flex-col xs:text-xs flex gap-2 h-44 w-fit p-1">
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>Reg Number</span>
                                                <span>{{ $candidate->reg_no }}</span>
                                            </div>
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>Year</span>
                                                <span>{{ $candidate->year }}</span>
                                            </div>
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>College</span>
                                                <span>{{ $candidate->college }}</span>
                                            </div>

                                        </div>
                                        @if($this->voter_choice_0060)
                                        @else
                                            <div class=" xs:w-32 h-44 w-fit p-1 gap-3 text-xs justify-start items-center flex ml-1">
                                                <input wire:model="voter_choice_0060"   type="radio" class="form-radio ring-4 border-2 border-gray-300 ring-gray-300 rounded p-3 vote-option" value="{{ $candidate->cand_idty }}" name="{{ $candidate->post }}">
                                                <span>Tick to  vote</span>
                                            </div>
                                        @endif
                                    </div>

                                </div>
                            @endforeach
                            @if($this->voter_choice_0060)
                                <span class="flex mt-6">Your vote went to : <b class="ml-1.5">{{ \Illuminate\Support\Facades\DB::table('candidates')->where('cand_idty', $this->voter_choice_0060)->value('full_name') }}</b></span>
                            @else
                                <button type="submit" class="flex items-start bg-gray-200 shadow-lg p-2 rounded-md mt-6 justify-start text-xs lg:text-sm">Submit</button>
                            @endif

                        </div>


                    </form>
                    @endif

                @if($post_title_0063)
                    <form wire:submit="submitVote0063" id="votingForm" class="bg-gray-300 smx:w-full  p-3  mt-8 mb-8 xs:w-72 flex flex-col items-center justify-evenly rounded-md w-fit">
                        <div class="w-full items-center justify-center flex flex-col">
                            <span class=" mt-8 xs:w-64 items-center uppercase flex justify-center font-semibold">post: {{ \Illuminate\Support\Facades\DB::table('posts')->where('post_code', "0063")->value('post_title') }}</span>
                            @foreach(\Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0063")->get() as $candidate)
                                <div  class="bg-gray-200 shadow-xl mt-8 xs:w-64 smx:w-2/3 lg:w-1/2 flex flex-col p-3 gap-2 h-72 rounded-md w-full">
                                    <div class="flex gap-2 items-center">
                                        <img src="{{ asset('storage/'.$candidate->photo_url) }}" alt="candidate_photo" class="bg-green-400 xs:text-xs mt-3 lg:mt-1 justify-center xs:h-16 items-center lg:w-20 lg:h-20 xs:w-16 flex  rounded-md" />


                                        <div class="text-xs">{{ $candidate->full_name }}</div>
                                    </div>
                                    <div class="flex-col mt-1 xs:h-32 ">
                                        <div class=" mt-3 xs:w-full xs:justify-between xs:h-10 mb-4 xs:flex-col xs:text-xs flex gap-2 h-44 w-fit p-1">
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>Reg Number</span>
                                                <span>{{ $candidate->reg_no }}</span>
                                            </div>
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>Year</span>
                                                <span>{{ $candidate->year }}</span>
                                            </div>
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>College</span>
                                                <span>{{ $candidate->college }}</span>
                                            </div>

                                        </div>
                                        @if($this->voter_choice_0063)
                                        @else
                                            <div class=" xs:w-32 h-44 w-fit p-1 gap-3 text-xs justify-start items-center flex ml-1">
                                                <input wire:model="voter_choice_0063"   type="radio" class="form-radio ring-4 border-2 border-gray-300 ring-gray-300 rounded p-3 vote-option" value="{{ $candidate->cand_idty }}" name="{{ $candidate->post }}">
                                                <span>Tick to  vote</span>
                                            </div>
                                        @endif
                                    </div>

                                </div>
                            @endforeach
                            @if($this->voter_choice_0063)
                                <span class="flex mt-6">Your vote went to : <b class="ml-1.5">{{ \Illuminate\Support\Facades\DB::table('candidates')->where('cand_idty', $this->voter_choice_0063)->value('full_name') }}</b></span>
                            @else
                                <button type="submit" class="flex items-start bg-gray-200 shadow-lg p-2 rounded-md mt-6 justify-start text-xs lg:text-sm">Submit</button>
                            @endif

                        </div>




                    </form>
                    @endif

                    @if($post_title_0066)
                        <form wire:submit="submitVote0066" id="votingForm" class="bg-gray-300 smx:w-full  p-3  mt-8 mb-8 xs:w-72 flex flex-col items-center justify-evenly rounded-md w-fit">
                            <div class="w-full items-center justify-center flex flex-col">
                                <span class=" mt-8 xs:w-64 items-center uppercase flex justify-center font-semibold">post: {{ \Illuminate\Support\Facades\DB::table('posts')->where('post_code', "0066")->value('post_title') }}</span>
                                @foreach(\Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0066")->get() as $candidate)
                                    <div  class="bg-gray-200 shadow-xl mt-8 xs:w-64 smx:w-2/3 lg:w-1/2 flex flex-col p-3 gap-2 h-72 rounded-md w-full">
                                        <div class="flex gap-2 items-center">
                                            <img src="{{ asset('storage/'.$candidate->photo_url) }}" alt="candidate_photo" class="bg-green-400 xs:text-xs mt-3 lg:mt-1 justify-center xs:h-16 items-center lg:w-20 lg:h-20 xs:w-16 flex  rounded-md" />


                                            <div class="text-xs">{{ $candidate->full_name }}</div>
                                        </div>
                                        <div class="flex-col mt-1 xs:h-32 ">
                                            <div class=" mt-3 xs:w-full xs:justify-between xs:h-10 mb-4 xs:flex-col xs:text-xs flex gap-2 h-44 w-fit p-1">
                                                <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                    <span>Reg Number</span>
                                                    <span>{{ $candidate->reg_no }}</span>
                                                </div>
                                                <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                    <span>Year</span>
                                                    <span>{{ $candidate->year }}</span>
                                                </div>
                                                <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                    <span>College</span>
                                                    <span>{{ $candidate->college }}</span>
                                                </div>

                                            </div>
                                            @if($this->voter_choice_0066)
                                            @else
                                                <div class=" xs:w-32 h-44 w-fit p-1 gap-3 text-xs justify-start items-center flex ml-1">
                                                    <input wire:model="voter_choice_0066"   type="radio" class="form-radio ring-4 border-2 border-gray-300 ring-gray-300 rounded p-3 vote-option" value="{{ $candidate->cand_idty }}" name="{{ $candidate->post }}">
                                                    <span>Tick to  vote</span>
                                                </div>
                                            @endif
                                        </div>

                                    </div>
                                @endforeach
                                @if($this->voter_choice_0066)
                                    <span class="flex mt-6">Your vote went to : <b class="ml-1.5">{{ \Illuminate\Support\Facades\DB::table('candidates')->where('cand_idty', $this->voter_choice_0066)->value('full_name') }}</b></span>
                                @else
                                    <button type="submit" class="flex items-start bg-gray-200 shadow-lg p-2 rounded-md mt-6 justify-start text-xs lg:text-sm">Submit</button>
                                @endif

                            </div>


                        </form>
                    @endif



                @if($post_title_0069)
                    <form wire:submit="submitVote0069" id="votingForm" class="bg-gray-300 smx:w-full  p-3  mt-8 mb-8 xs:w-72 flex flex-col items-center justify-evenly rounded-md w-fit">
                        <div class="w-full items-center justify-center flex flex-col">
                            <span class=" mt-8 xs:w-64 items-center uppercase flex justify-center font-semibold">post: {{ \Illuminate\Support\Facades\DB::table('posts')->where('post_code', "0069")->value('post_title') }}</span>
                            @foreach(\Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0069")->get() as $candidate)
                                <div  class="bg-gray-200 shadow-xl mt-8 xs:w-64 smx:w-2/3 lg:w-1/2 flex flex-col p-3 gap-2 h-72 rounded-md w-full">
                                    <div class="flex gap-2 items-center">
                                        <img src="{{ asset('storage/'.$candidate->photo_url) }}" alt="candidate_photo" class="bg-green-400 xs:text-xs mt-3 lg:mt-1 justify-center xs:h-16 items-center lg:w-20 lg:h-20 xs:w-16 flex  rounded-md" />


                                        <div class="text-xs">{{ $candidate->full_name }}</div>
                                    </div>
                                    <div class="flex-col mt-1 xs:h-32 ">
                                        <div class=" mt-3 xs:w-full xs:justify-between xs:h-10 mb-4 xs:flex-col xs:text-xs flex gap-2 h-44 w-fit p-1">
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>Reg Number</span>
                                                <span>{{ $candidate->reg_no }}</span>
                                            </div>
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>Year</span>
                                                <span>{{ $candidate->year }}</span>
                                            </div>
                                            <div class="flex justify-between bg-gray-100 w-full p-2 rounded-md flex-row">
                                                <span>College</span>
                                                <span>{{ $candidate->college }}</span>
                                            </div>

                                        </div>
                                        @if($this->voter_choice_0069)
                                        @else
                                            <div class=" xs:w-32 h-44 w-fit p-1 gap-3 text-xs justify-start items-center flex ml-1">
                                                <input wire:model="voter_choice_0069"   type="radio" class="form-radio ring-4 border-2 border-gray-300 ring-gray-300 rounded p-3 vote-option" value="{{ $candidate->cand_idty }}" name="{{ $candidate->post }}">
                                                <span>Tick to  vote</span>
                                            </div>
                                        @endif
                                    </div>

                                </div>
                            @endforeach
                            @if($this->voter_choice_0069)
                                <span class="flex mt-6">Your vote went to : <b class="ml-1.5">{{ \Illuminate\Support\Facades\DB::table('candidates')->where('cand_idty', $this->voter_choice_0069)->value('full_name') }}</b></span>
                            @else
                                <button type="submit" class="flex items-start bg-gray-200 shadow-lg p-2 rounded-md mt-6 justify-start text-xs lg:text-sm">Submit</button>
                            @endif

                        </div>


                    </form>
                    @endif







            </div>



        <script>

        </script>
    </div>


</div>
