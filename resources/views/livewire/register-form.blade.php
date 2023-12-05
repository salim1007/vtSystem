<div class=" w-full h-full flex flex-col ">
    <form class="xs:mt-24 sm:items-center xs:items-center flex flex-col gap-4 lg:items-center sm:mb-8 w-full">
        <div class="flex flex-col">
            <h1 class=" font-bold text-2xl text-blue-600 sm:text-lg sml:text-lg xs:text-sm mb-6">Welcome to Student E-Voting</h1>
            <h1 class="text-gray-800 font-semibold italic sm:text-lg sml:text-lg xs:text-sm text-2xl mb-6">Fill the form below to register</h1>
        </div>
        <div class=" flex-row gap-4 sm:flex-col xs:flex-col md:flex md:flex-row lg:flex lg:flex-row lg:gap-8 ">
            <div class=" flex flex-col gap-2 md:flex md:gap-4">
                <div>
                    <div class="sml:w-96 w-80 md:w-80 lg:w-72 xs:w-48 sm:w-64 ">
                        <input wire:model="firstname" type="text" name="firstname" id="firstname" placeholder="First Name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>
                    @error('firstname')
                    <span class=" rounded-md  text-red-600 text-xs p-2 w-64">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <div class="sml:w-96 w-80 md:w-80 lg:w-72 xs:w-48 sm:w-64 ">
                        <input wire:model="midname" type="text" name="midname" id="midname" placeholder="Mid-Name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>
                    @error('midname')
                    <span class="  text-red-600 text-xs p-2 w-64">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <div class="sml:w-96 w-80 md:w-80 lg:w-72 xs:w-48 sm:w-64 ">
                        <input wire:model="surname" type="text" name="surname" id="surname" placeholder="Surname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>
                    @error('surname')
                    <span class="  text-red-600 text-xs p-2 w-64">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <div class="sml:w-96 w-80 md:w-80 lg:w-72 xs:w-48 sm:w-64 ">
                        <input wire:model="username" type="text" name="username" id="username" placeholder="Username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>
                    @error('username')
                    <span class=" rounded-md  text-red-600 text-xs p-2 w-64">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <div class="sml:w-96 w-80 md:w-80 lg:w-72 xs:w-48 sm:w-64 ">
                        <input wire:model="email" type="text" name="email" id="email" placeholder="Email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>
                    @error('email')
                    <span class="  text-red-600 text-xs p-2 w-64">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <div class="sml:w-96 w-80 md:w-80 lg:w-72 xs:w-48 sm:w-64 ">
                        <input wire:model="regNo" type="text" name="regNo" id="regNo" placeholder="Reg. No." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>
                    @error('regNo')
                    <span class="  text-red-600 text-xs p-2 w-64">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <div class="sml:w-96 w-80 md:w-80 lg:w-72 xs:w-48 sm:w-64 mb-2 ">
                        <select wire:model="yearOfStudy" class="bg-gray-50 border border-gray-300 text-gray-900 p-2.5 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option class="w-80 md:w-80 lg:w-72" value="">Year of Study</option>
                            <option class="w-80 md:w-80 lg:w-72" value="I">I</option>
                            <option class="w-80 md:w-80 lg:w-72" value="II">II</option>
                            <option class="w-80 md:w-80 lg:w-72" value="III">III</option>
                            <option class="w-80 md:w-80 lg:w-72" value="IV">IV</option>
                            <option class="w-80 md:w-80 lg:w-72" value="V">V</option>
                        </select>
                    </div>
                    @error('yearOfStudy')
                    <span class="  text-red-600 text-xs p-2 w-64">{{ $message }}</span>
                    @enderror
                </div>


            </div>
            <div class="flex flex-col gap-2 md:flex md:gap-4">
                <div>
                    <div class="sml:w-96 w-80 md:w-80 lg:w-72 xs:w-48 sm:w-64 ">
                        <input wire:model="phoneNumber" type="text" name="phoneNumber" id="phoneNumber" placeholder="Phone number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>
                    @error('phoneNumber')
                    <span class="  text-red-600 text-xs p-2 w-64">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <div class="sml:w-96 w-80 md:w-80 lg:w-72 xs:w-48 sm:w-64 ">
                        <input wire:model="voteNumber" type="text" name="voteNumber" id="voteNumber" placeholder="Vote number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>
                    @error('voteNumber')
                    <span class="  text-red-600 text-xs p-2 w-64">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <div class="sml:w-96 w-80 md:w-80 lg:w-72 xs:w-48 sm:w-64 ">
                        <input wire:model="profilePic" type="file" name="profilePic" id="profilePic" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>
                    @error('profilePic')
                    <span class="  text-red-600 text-xs p-2 w-64">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <div class="sml:w-96 w-80 md:w-80 lg:w-72 xs:w-48 sm:w-64 ">
                        <select wire:model="programme" class="bg-gray-50 border border-gray-300 text-gray-900 p-2.5 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option class="w-80 md:w-80 lg:w-72" value="">Programme</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.A. in Archaeology">B.A. in Archaeology</option>
                            <option class="w-80 md:w-80 lg:w-72" value="Bachelor of Arts B.A. in Archaeology and History">Bachelor of Arts B.A. in Archaeology and History</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.A. in Heritage Management">B.A. in Heritage Management</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.A. in Language Studies">B.A. in Language Studies</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.A. Literature">B.A. Literature</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.A. in History">B.A. in History</option>
                            <option class="w-80 md:w-80 lg:w-72" value="Bachelor of Arts in History and Political Science">Bachelor of Arts in History and Political Science</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.A. with Education">B.A. with Education</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.A. in Philosophy and Ethics">B.A. in Philosophy and Ethics</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.A. in Music">B.A. in Music</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.A. in Art and Design">B.A. in Art and Design</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.A. in Theatre Arts">B.A. in Theatre Arts</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.A. in Economics and Statistics">B.A. in Economics and Statistics</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.A. in Geography and Environmental Studies">B.A. in Geography and Environmental Studies</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.A. in Political Science and Public Administration">B.A. in Political Science and Public Administration</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.A. in Sociology">B.A. in Sociology</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Sc. in Civil Engineering">B.Sc. in Civil Engineering</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Sc. in Mechanical Engineering">B.Sc. in Mechanical Engineering</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Sc. in Industrial Engineering">B.Sc. in Industrial Engineering</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Sc. in Chemical and Process Engineering">B.Sc. in Chemical and Process Engineering</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Sc. in Metallurgy and Mineral Process Engineering">B.Sc. in Metallurgy and Mineral Process Engineering</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Sc. in Mining Engineering">B.Sc. in Mining Engineering</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Sc. in Electrical Engineering">B.Sc. in Electrical Engineering</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Sc. in Petroleum Engineering">B.Sc. in Petroleum Engineering</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Sc. in Architecture">B.Sc. in Architecture</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Sc. in Quantity Survey">B.Sc. in Quantity Survey</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Sc. in Textile Engineering">B.Sc. in Textile Engineering</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Sc. in Actuarial Science">B.Sc. in Actuarial Science</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Sc. in Applied Zoology">B.Sc. in Applied Zoology</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Sc. in Botanical Sciences">B.Sc. in Botanical Sciences</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Sc. in Chemistry">B.Sc. in Chemistry</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Sc. in Geology">B.Sc. in Geology</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Sc. in Engineering Geology">B.Sc. in Engineering Geology</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Sc. in Microbiology">B.Sc. in Microbiology</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Sc. in Molecular Biology and Biotechnology">B.Sc. in Molecular Biology and Biotechnology</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Sc. in Molecular Biology and Biotechnology">B.Sc. in Molecular Biology and Biotechnology</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Sc. in Petroleum Geology">B.Sc. in Petroleum Geology</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Sc. in Meteorology">B.Sc. in Meteorology</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Sc. in Computer Science">B.Sc. in Computer Science</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Sc. in Electronic Science and Communication">B.Sc. in Electronic Science and Communication</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Sc. in Computer Engineering and Information Technology">B.Sc. in Computer Engineering and Information Technology</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Sc. in Telecommunications Engineering">B.Sc. in Telecommunications Engineering</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Sc. in Beekeeping Science and Technology">B.Sc. in Beekeeping Science and Technology</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Sc. in Food Science and Technology">B.Sc. in Food Science and Technology</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Sc. in Agricultural and Natural Resources Economics and Business">B.Sc. in Agricultural and Natural Resources Economics and Business</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Sc. in Aquatic Sciences and Fisheries">B.Sc. in Aquatic Sciences and Fisheries</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B. Sc.B.Sc. in Agricultural Engineering and Mechanisation">B. Sc.B.Sc. in Agricultural Engineering and Mechanisation</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.A. in Journalism">B.A. in Journalism</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.A. in Mass Communication">B.A. in Mass Communication</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Com. in Accounting">B.Com. in Accounting</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Com. in Banking and Financial Services">B.Com. in Banking and Financial Services</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Com. in Finance">B.Com. in Finance</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Com. in Human Resources Management">B.Com. in Human Resources Management</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Com. in Marketing">B.Com. in Marketing</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Com. in Tourism and Hospitality Management">B.Com. in Tourism and Hospitality Management</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Ed. in Adult and Community Education">B.Ed. in Adult and Community Education</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Ed. in Commerce">B.Ed. in Commerce</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Ed. in Early Childhood Education">B.Ed. in Early Childhood Education</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Ed. in Psychology">B.Ed. in Psychology</option>
                            <option class="w-80 md:w-80 lg:w-72" value="Bachelor of Laws">Bachelor of Laws</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.A. in Law Enforcement">B.A. in Law Enforcement</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.A. in Kiswahili">B.A. in Kiswahili</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.A. in Development Studies">B.A. in Development Studies</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.A. with Education">B.A. with Education</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Ed. in Arts">B.Ed. in Arts</option>
                            <option class="w-80 md:w-80 lg:w-72" value="B.Ed. in Science">B.Ed. in Science</option>
                        </select>
                    </div>
                    @error('programme')
                    <span class="  text-red-600 text-xs p-2 w-64">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <div class="sml:w-96 w-80 md:w-80 lg:w-72 xs:w-48 sm:w-64 ">
                        <select wire:model="college" class="bg-gray-50 border border-gray-300 text-gray-900 p-2.5 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option class="w-80 md:w-80 lg:w-72" value="">College / School</option>
                            <option class="w-80 md:w-80 lg:w-72" value="CoHU">CoHU</option>
                            <option class="w-80 md:w-80 lg:w-72" value="CoSS">CoSS</option>
                            <option class="w-80 md:w-80 lg:w-72" value="CoET">CoET</option>
                            <option class="w-80 md:w-80 lg:w-72" value="CoNAS">CoNAS</option>
                            <option class="w-80 md:w-80 lg:w-72" value="CoICT">CoICT</option>
                            <option class="w-80 md:w-80 lg:w-72" value="CoAF">CoAF</option>
                            <option class="w-80 md:w-80 lg:w-72" value="SJMC">SJMC</option>
                            <option class="w-80 md:w-80 lg:w-72" value="UDBS">UDBS</option>
                            <option class="w-80 md:w-80 lg:w-72" value="SOED">SOED</option>
                            <option class="w-80 md:w-80 lg:w-72" value="UDSoL">UDSoL</option>
                            <option class="w-80 md:w-80 lg:w-72" value="IKS">IKS</option>
                            <option class="w-80 md:w-80 lg:w-72" value="IDS">IDS</option>
                            <option class="w-80 md:w-80 lg:w-72" value="DUCE">DUCE</option>
                            <option class="w-80 md:w-80 lg:w-72" value="MUCE">MUCE</option>
                            <option class="w-80 md:w-80 lg:w-72" value="IKS">IKS</option>
                        </select>
                    </div>
                    @error('college')
                    <span class="  text-red-600 text-xs p-2 w-64">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <div class="sml:w-96 w-80 md:w-80 lg:w-72 xs:w-48 sm:w-64 ">
                        <input wire:model="password" type="password" name="password" id="password" placeholder="Password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>
                    @error('password')
                    <span class="  text-red-600 text-xs p-2 w-64">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <div class="sml:w-96 w-80 md:w-80 lg:w-72 xs:w-48 sm:w-64 ">
                        <input wire:model="confirmPassword" type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>
                    @error('confirmPassword')
                    <span class=" text-red-600 text-xs p-2 w-64">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="md:items-center sml:items-center sml:flex sml:flex-col md:flex md:flex-col">
            <button type="submit" wire:click.prevent="register" class="block md:w-80 lg:w-72 w-full bg-indigo-600 mt-4 py-2 rounded-2xl sml:w-96 text-white font-semibold mb-2 hover:bg-blue-900">Register</button>
            <span class="text-sm ml-2  cursor-pointer">Already have an account? <a wire:navigate href="/login" class=" text-blue-500 font-bold">Sign In</a></span>
        </div>

    </form>

</div>
