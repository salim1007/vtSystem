<div class="flex w-full flex-col">
    <div class="flex items-center h-16 bg-green-400 p-2 justify-center mb-2" >
        You can only vote once, goodluck!
    </div>
    <div class="w-full h-full flex flex-col items-center gap-2 p-3 ">

            <div class="bg-amber-400 w-5/6 smx:w-full xs:w-80 items-center flex justify-center rounded-lg flex-col  ">
                    <form wire:submit="submitVote0003" id="votingForm" class="bg-red-500 smx:w-full  p-3  mt-8 mb-8 xs:w-72 flex flex-col items-center justify-evenly rounded-md w-fit">
                            <div class="w-full items-center justify-center flex flex-col">
                                <span class=" mt-8 xs:w-64 items-center uppercase flex justify-center font-semibold">post: {{ \Illuminate\Support\Facades\DB::table('posts')->where('post_code', 0003)->value('post_title') }}</span>
                                @foreach(\Illuminate\Support\Facades\DB::table('candidates')->where('post_code', 0003)->get() as $candidate)
                                    <div  class="bg-blue-400 mt-8 xs:w-64 smx:w-2/3 lg:w-1/2 flex flex-col p-3 gap-2 h-72 rounded-md w-full">
                                        <div class="flex gap-2 items-center">
                                            <img src="{{ asset('storage/'.$candidate->photo_url) }}" alt="candidate_photo" class="bg-green-400 xs:text-xs mt-3 lg:mt-1 justify-center xs:h-16 items-center lg:w-20 lg:h-20 xs:w-16 flex  rounded-md" />


                                            <div class="text-xs">{{ $candidate->full_name }}</div>
                                        </div>
                                        <div class="flex-col mt-1 xs:h-32 ">
                                            <div class=" mt-3 xs:w-full xs:justify-between xs:h-10 mb-4 xs:flex-col xs:text-xs flex gap-2 h-44 w-fit p-1">
                                                <div class="flex justify-between bg-green-400 w-full p-2 rounded-md flex-row">
                                                    <span>Reg Number</span>
                                                    <span>{{ $candidate->reg_no }}</span>
                                                </div>
                                                <div class="flex justify-between bg-green-400 w-full p-2 rounded-md flex-row">
                                                    <span>Year</span>
                                                    <span>{{ $candidate->year }}</span>
                                                </div>
                                                <div class="flex justify-between bg-green-400 w-full p-2 rounded-md flex-row">
                                                    <span>College</span>
                                                    <span>{{ $candidate->college }}</span>
                                                </div>

                                            </div>
                                            @if($this->voter_choice_0003)
                                            @else
                                            <div class=" xs:w-32 h-44 w-fit p-1 gap-3 text-xs justify-start items-center flex ml-1">
                                                <input wire:model="voter_choice_0003"  type="radio" class="form-radio ring-4 border-2 rounded p-3 vote-option" value="{{ $candidate->cand_idty }}" name="{{ $candidate->post }}">
                                                <span>Tick to  vote</span>
                                            </div>
                                            @endif
                                        </div>

                                    </div>
                                @endforeach
                                @if($this->voter_choice_0003)
                                    <span class="flex mt-6">Your vote went to : <b class="ml-1.5">{{ \Illuminate\Support\Facades\DB::table('candidates')->where('cand_idty', $this->voter_choice_0003)->value('full_name') }}</b></span>
                                @else
                                    <button type="submit" class="flex items-start bg-green-400 p-2 rounded-md mt-6 justify-start text-xs lg:text-sm">Submit</button>
                                @endif

                            </div>


                    </form>

                <form wire:submit="submitVote0006" id="votingForm" class="bg-red-500 smx:w-full  p-3  mt-8 mb-8 xs:w-72 flex flex-col items-center justify-evenly rounded-md w-fit">
                    <div class="w-full items-center justify-center flex flex-col">
                        <span class=" mt-8 xs:w-64 items-center uppercase flex justify-center font-semibold">post: {{ \Illuminate\Support\Facades\DB::table('posts')->where('post_code', 0006)->value('post_title') }}</span>
                        @foreach(\Illuminate\Support\Facades\DB::table('candidates')->where('post_code', 0006)->get() as $candidate)
                            <div  class="bg-blue-400 mt-8 xs:w-64 smx:w-2/3 lg:w-1/2 flex flex-col p-3 gap-2 h-72 rounded-md w-full">
                                <div class="flex gap-2 items-center">
                                    <img src="{{ asset('storage/'.$candidate->photo_url) }}" alt="candidate_photo" class="bg-green-400 xs:text-xs mt-3 lg:mt-1 justify-center xs:h-16 items-center lg:w-20 lg:h-20 xs:w-16 flex  rounded-md" />


                                    <div class="text-xs">{{ $candidate->full_name }}</div>
                                </div>
                                <div class="flex-col mt-1 xs:h-32 ">
                                    <div class=" mt-3 xs:w-full xs:justify-between xs:h-10 mb-4 xs:flex-col xs:text-xs flex gap-2 h-44 w-fit p-1">
                                        <div class="flex justify-between bg-green-400 w-full p-2 rounded-md flex-row">
                                            <span>Reg Number</span>
                                            <span>{{ $candidate->reg_no }}</span>
                                        </div>
                                        <div class="flex justify-between bg-green-400 w-full p-2 rounded-md flex-row">
                                            <span>Year</span>
                                            <span>{{ $candidate->year }}</span>
                                        </div>
                                        <div class="flex justify-between bg-green-400 w-full p-2 rounded-md flex-row">
                                            <span>College</span>
                                            <span>{{ $candidate->college }}</span>
                                        </div>

                                    </div>
                                    @if($this->voter_choice_0006)
                                    @else
                                    <div class=" xs:w-32 h-44 w-fit p-1 gap-3 text-xs justify-start items-center flex ml-1">
                                        <input wire:model="voter_choice_0006"   type="radio" class="form-radio ring-4 border-2 rounded p-3 vote-option" value="{{ $candidate->cand_idty }}" name="{{ $candidate->post }}">
                                        <span>Tick to  vote</span>
                                    </div>
                                    @endif
                                </div>

                            </div>
                        @endforeach
                        @if($this->voter_choice_0006)
                            <span class="flex mt-6">Your vote went to : <b class="ml-1.5">{{ \Illuminate\Support\Facades\DB::table('candidates')->where('cand_idty', $this->voter_choice_0006)->value('full_name') }}</b></span>
                        @else
                            <button type="submit" class="flex items-start bg-green-400 p-2 rounded-md mt-6 justify-start text-xs lg:text-sm">Submit</button>
                        @endif

                    </div>


                </form>

                <form wire:submit="submitVote0009" id="votingForm" class="bg-red-500 smx:w-full  p-3  mt-8 mb-8 xs:w-72 flex flex-col items-center justify-evenly rounded-md w-fit">
                    <div class="w-full items-center justify-center flex flex-col">
                        <span class=" mt-8 xs:w-64 items-center uppercase flex justify-center font-semibold">post: {{ \Illuminate\Support\Facades\DB::table('posts')->where('post_code', "0009")->value('post_title') }}</span>
                        @foreach(\Illuminate\Support\Facades\DB::table('candidates')->where('post_code', "0009")->get() as $candidate)
                            <div  class="bg-blue-400 mt-8 xs:w-64 smx:w-2/3 lg:w-1/2 flex flex-col p-3 gap-2 h-72 rounded-md w-full">
                                <div class="flex gap-2 items-center">
                                    <img src="{{ asset('storage/'.$candidate->photo_url) }}" alt="candidate_photo" class="bg-green-400 xs:text-xs mt-3 lg:mt-1 justify-center xs:h-16 items-center lg:w-20 lg:h-20 xs:w-16 flex  rounded-md" />


                                    <div class="text-xs">{{ $candidate->full_name }}</div>
                                </div>
                                <div class="flex-col mt-1 xs:h-32 ">
                                    <div class=" mt-3 xs:w-full xs:justify-between xs:h-10 mb-4 xs:flex-col xs:text-xs flex gap-2 h-44 w-fit p-1">
                                        <div class="flex justify-between bg-green-400 w-full p-2 rounded-md flex-row">
                                            <span>Reg Number</span>
                                            <span>{{ $candidate->reg_no }}</span>
                                        </div>
                                        <div class="flex justify-between bg-green-400 w-full p-2 rounded-md flex-row">
                                            <span>Year</span>
                                            <span>{{ $candidate->year }}</span>
                                        </div>
                                        <div class="flex justify-between bg-green-400 w-full p-2 rounded-md flex-row">
                                            <span>College</span>
                                            <span>{{ $candidate->college }}</span>
                                        </div>

                                    </div>
                                    @if($this->voter_choice_0009)
                                    @else
                                        <div class=" xs:w-32 h-44 w-fit p-1 gap-3 text-xs justify-start items-center flex ml-1">
                                            <input wire:model="voter_choice_0009"   type="radio" class="form-radio ring-4 border-2 rounded p-3 vote-option" value="{{ $candidate->cand_idty }}" name="{{ $candidate->post }}">
                                            <span>Tick to  vote</span>
                                        </div>
                                    @endif
                                </div>

                            </div>
                        @endforeach
                        @if($this->voter_choice_0009)
                            <span class="flex mt-6">Your vote went to : <b class="ml-1.5">{{ \Illuminate\Support\Facades\DB::table('candidates')->where('cand_idty', $this->voter_choice_0009)->value('full_name') }}</b></span>
                        @else
                            <button type="submit" class="flex items-start bg-green-400 p-2 rounded-md mt-6 justify-start text-xs lg:text-sm">Submit</button>
                        @endif

                    </div>


                </form>

{{--                <form wire:submit="submitVote0003" id="votingForm" class="bg-red-500 smx:w-full  p-3  mt-8 mb-8 xs:w-72 flex flex-col items-center justify-evenly rounded-md w-fit">--}}
{{--                    <div class="w-full items-center justify-center flex flex-col">--}}
{{--                        <span class=" mt-8 xs:w-64 items-center uppercase flex justify-center font-semibold">post: {{ \Illuminate\Support\Facades\DB::table('posts')->where('post_code', 0003)->value('post_title') }}</span>--}}
{{--                        @foreach(\Illuminate\Support\Facades\DB::table('candidates')->where('post_code', 0003)->get() as $candidate)--}}
{{--                            <div  class="bg-blue-400 mt-8 xs:w-64 smx:w-2/3 lg:w-1/2 flex flex-col p-3 gap-2 h-72 rounded-md w-full">--}}
{{--                                <div class="flex gap-2 items-center">--}}
{{--                                    <img src="{{ asset('storage/'.$candidate->photo_url) }}" alt="candidate_photo" class="bg-green-400 xs:text-xs mt-3 lg:mt-1 justify-center xs:h-16 items-center lg:w-20 lg:h-20 xs:w-16 flex  rounded-md" />--}}


{{--                                    <div class="text-xs">{{ $candidate->full_name }}</div>--}}
{{--                                </div>--}}
{{--                                <div class="flex-col mt-1 xs:h-32 ">--}}
{{--                                    <div class=" mt-3 xs:w-full xs:justify-between xs:h-10 mb-4 xs:flex-col xs:text-xs flex gap-2 h-44 w-fit p-1">--}}
{{--                                        <div class="flex justify-between bg-green-400 w-full p-2 rounded-md flex-row">--}}
{{--                                            <span>Reg Number</span>--}}
{{--                                            <span>{{ $candidate->reg_no }}</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="flex justify-between bg-green-400 w-full p-2 rounded-md flex-row">--}}
{{--                                            <span>Year</span>--}}
{{--                                            <span>{{ $candidate->year }}</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="flex justify-between bg-green-400 w-full p-2 rounded-md flex-row">--}}
{{--                                            <span>College</span>--}}
{{--                                            <span>{{ $candidate->college }}</span>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                    <div class=" xs:w-32 h-44 w-fit p-1 gap-3 text-xs justify-start items-center flex ml-1">--}}
{{--                                        <input @if($this->voter_choice) wire:model="{{ $this->voter_choice }}" disabled checked @else wire:model="voter_choice"  @endif  type="radio" class="form-radio ring-4 border-2 rounded p-3 vote-option" value="{{ $candidate->cand_idty }}" name="{{ $candidate->post_title }}">--}}
{{--                                        <span>Tick to  vote</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                        @if($this->voter_choice)--}}
{{--                            <span class="flex mt-6">Your vote went to : <b class="ml-1.5">{{ \Illuminate\Support\Facades\DB::table('candidates')->where('cand_idty', $this->voter_choice)->value('full_name') }}</b></span>--}}
{{--                        @else--}}
{{--                            <button type="submit" class="flex items-start bg-green-400 p-2 rounded-md mt-6 justify-start text-xs lg:text-sm">Submit</button>--}}
{{--                        @endif--}}

{{--                    </div>--}}


{{--                </form>--}}





            </div>



        <script>
            // const checkboxes = document.querySelectorAll('.vote-option');
            //
            // checkboxes.forEach(checkbox => {
            //     checkbox.addEventListener('change', function() {
            //         if (this.checked) {
            //             checkboxes.forEach(cb => {
            //                 if (cb !== this) {
            //                     cb.checked = false;
            //                 }
            //             });
            //         }
            //     });
            // });
            //
            // document.getElementById('votingForm').addEventListener('submit', function(event) {
            //     event.preventDefault();
            //     const selectedCandidate = document.querySelector('input[name="candidate"]:checked');
            //     if (selectedCandidate) {
            //         // Simulate submitting the vote, you may handle it with AJAX or form submission
            //         console.log('Voted for:', selectedCandidate.value);
            //         // Clear selection after voting if needed
            //         selectedCandidate.checked = false;
            //     } else {
            //         console.log('Please select a candidate.');
            //     }
            // });

        </script>
    </div>


</div>
