<div class="flex flex-col h-full w-full">
    <div class="bg-gray-600 h-14 pl-4 justify-between items-center flex">
        <span>jkksdjnk</span>
        <button wire:click="logout" class="flex mr-3 ">
            <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M17 16L21 12M21 12L17 8M21 12L7 12M13 16V17C13 18.6569 11.6569 20 10 20H6C4.34315 20 3 18.6569 3 17V7C3 5.34315 4.34315 4 6 4H10C11.6569 4 13 5.34315 13 7V8" stroke="#374151" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
        </button>
    </div>
    <div class="flex h-full items-center flex-col bg-blue-400">
        @if(!$this->showEditTab)
            <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mt-8">Create Post</span>

        @endif
        @if($this->showEditTab)
            <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mt-8">Edit Post</span>

        @endif
        <div class="flex bg-gray-500 mt-8 rounded-3xl w-2/3 p-4 ">
           @if(!$this->showEditTab)
                <form wire:submit="createPost" class="max-w-sm mx-auto w-full mt-6 mb-6">
                    <div class="mb-5">
                        <label for="post_title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Post Title</label>
                        <input wire:model="post_title" type="text" id="post_title" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                        @error('post_title')
                        <span class=" rounded-md  text-red-400 text-xs p-2 w-64">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea wire:model="post_description" id="post_description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write post description here..."></textarea>
                        @error('post_description')
                        <span class=" rounded-md  text-red-400 text-xs p-2 w-64">{{ $message }}</span>
                        @enderror

                    </div>

                    <button type="submit" class="mt-8 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create Post</button>
                </form>
           @endif
            @if($this->showEditTab)
                    <form wire:submit="updatePost({{ $this->editingPostID }})" class="max-w-sm mx-auto w-full mt-6 mb-6">
                        <div class="mb-5">
                            <label for="post_title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Post Title</label>
                            <input wire:model="post_title" type="text" id="post_title" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                            @error('post_title')
                            <span class=" rounded-md  text-red-400 text-xs p-2 w-64">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                            <textarea wire:model="post_description" id="post_description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write post description here..."></textarea>
                            @error('post_description')
                            <span class=" rounded-md  text-red-400 text-xs p-2 w-64">{{ $message }}</span>
                            @enderror

                        </div>

                        <button type="submit" class="mt-8 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update Post</button>
                    </form>

            @endif


        </div>
        <div class="flex flex-col w-full">
            <span class=" ml-6 text-sm font-medium text-gray-900 dark:text-white flex mt-20">Posts List</span>
            <div class="p-6">
                <div>
                    <input wire:model.live.debounce.200ms="search" id="search" type="search" placeholder="Search post..." class="bg-gray-50 xs:text-xs mb-4 w-56 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                </div>

                <div class="relative overflow-x-auto xs:rounded-lg shadow-md sm:rounded-lg">
                    <table class="w-full xs:text-xs  text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                S/NO
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Post Title
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Post Code
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Description
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr wire:key="{{ $post->id }}" class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $loop->index+1 }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $post->post_title }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $post->post_code }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $post->description }}
                                </td>
                                <td class="px-6 py-4">
                                    <button wire:click="editPost({{ $post->id }})" class="flex rounded-md p-2 bg-blue-400 text-white hover:bg-blue-700">Edit Post</button>
                                </td>


                            </tr>

                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>


        </div>

    </div>

</div>
