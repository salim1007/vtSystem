<div class="flex w-full flex-col">
    <div class="flex items-center justify-center mt-4 mb-2" >
        <input type="search" class="rounded-md lg:w-96 text-sm" placeholder="Search post..." />
    </div>
    <div class="w-full h-full flex flex-col items-center gap-2 p-3 ">
        <div class="bg-amber-400 w-5/6 smx:w-full xs:w-80 items-center flex justify-center rounded-lg flex-col  ">
            <span class=" mt-8 xs:w-64 items-center flex justify-center font-semibold">POST: CHAIRPERSON</span>
            <div class="bg-red-500 smx:w-full  p-3  mt-8 mb-8 xs:w-72 flex flex-col items-center justify-evenly rounded-md w-fit">
                <div class="bg-blue-400 mt-8 xs:w-64 smx:w-2/3 lg:w-1/2 flex flex-col p-3 gap-2 h-72 rounded-md w-full">
                    <div class="flex gap-2 items-center">
                        <div class="bg-green-400 xs:text-xs mt-3 lg:mt-1 justify-center xs:h-16 items-center lg:w-20 lg:h-20 xs:w-16 flex  rounded-md">
                            salim
                        </div>
                        <div class="text-xs">SALIM IDDI MCHOMVU</div>
                    </div>
                    <div class="flex-col mt-1 xs:h-32 ">
                        <div class=" mt-3 xs:w-full xs:justify-between xs:h-10 mb-4 xs:flex-col xs:text-xs flex gap-2 h-44 w-fit p-1">
                            <div class="flex justify-between bg-green-400 w-full flex-row">
                                <span>Reg Number</span>
                                <span>2021-04-06692</span>
                            </div>
                            <div class="flex justify-between bg-green-400 w-full flex-row">
                                <span>Gender</span>
                                <span>gender</span>
                            </div>
                            <div class="flex justify-between bg-green-400 w-full flex-row">
                                <span>Year</span>
                                <span>year</span>
                            </div>
                            <div class="flex justify-between bg-green-400 w-full flex-row">
                                <span>College</span>
                                <span>college</span>
                            </div>

                        </div>
                        <div class=" xs:w-32 h-44 w-fit p-1 gap-3 text-xs justify-start items-center flex ml-1">
                            <input type="checkbox" class="form-radio ring-4 border-2 rounded p-3 vote-option" value="" name="candidate">
                            <span>Tick to  vote</span>
                        </div>
                    </div>

                </div>
                <span class="flex items-center justify-center xs:text-xs p-3 font-semibold">VS</span>

                <div class="bg-blue-400 xs:w-64 smx:w-2/3 lg:w-1/2 flex flex-col p-3 gap-2 h-72 rounded-md w-full">
                    <div class="flex gap-2 items-center">
                        <div class="bg-green-400 xs:text-xs mt-3 lg:mt-1 justify-center xs:h-16 items-center lg:w-20 lg:h-20 xs:w-16 flex  rounded-md">
                            salim
                        </div>
                        <div class="text-xs">SALIM IDDI MCHOMVU</div>
                    </div>
                    <div class="flex-col mt-1 xs:h-32 ">
                        <div class=" mt-3 xs:w-full xs:justify-between xs:h-10 mb-4 xs:flex-col xs:text-xs flex gap-2 h-44 w-fit p-1">
                            <div class="flex justify-between bg-green-400 w-full flex-row">
                                <span>Reg Number</span>
                                <span>2021-04-06692</span>
                            </div>
                            <div class="flex justify-between bg-green-400 w-full flex-row">
                                <span>Gender</span>
                                <span>gender</span>
                            </div>
                            <div class="flex justify-between bg-green-400 w-full flex-row">
                                <span>Year</span>
                                <span>year</span>
                            </div>
                            <div class="flex justify-between bg-green-400 w-full flex-row">
                                <span>College</span>
                                <span>college</span>
                            </div>

                        </div>
                        <div class=" xs:w-32 h-44 w-fit p-1 justify-start items-center text-xs gap-3 flex ml-1">
                            <input type="checkbox" class="form-radio ring-4 border-2 p-3 rounded vote-option" value="" name="candidate">
                            <span>Tick to  vote</span>
                        </div>
                    </div>
                </div>
                <button class="flex items-start bg-green-400 p-2 rounded-md mt-6 justify-start text-xs lg:text-sm">Submit</button>
            </div>


        </div>

        <script>
            const checkboxes = document.querySelectorAll('.vote-option');

            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    if (this.checked) {
                        checkboxes.forEach(cb => {
                            if (cb !== this) {
                                cb.checked = false;
                            }
                        });
                    }
                });
            });

            document.getElementById('votingForm').addEventListener('submit', function(event) {
                event.preventDefault();
                const selectedCandidate = document.querySelector('input[name="candidate"]:checked');
                if (selectedCandidate) {
                    // Simulate submitting the vote, you may handle it with AJAX or form submission
                    console.log('Voted for:', selectedCandidate.value);
                    // Clear selection after voting if needed
                    selectedCandidate.checked = false;
                } else {
                    console.log('Please select a candidate.');
                }
            });

        </script>
    </div>


</div>
