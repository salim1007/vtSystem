<div class="flex w-full flex-col bg-blue-400 h-screen">
    <div class="p-3 pl-4 flex font-medium items-center justify-center bg-amber-200 h-14 text-sm">
        Your thoughts about the system
    </div>
    <form wire:submit.prevent="sendResponse" class="flex h-full bg-slate-400 flex-col">
        <span class="flex p-2.5 w-fit m-4 font-medium text-xs bg-amber-100 shadow-lg rounded-lg"> We rely on your response to improve our system, please feel free to contribute.</span>
        <span class="flex p-2.5 w-fit m-4 font-medium text-xs bg-amber-100 shadow-lg rounded-lg"> We'll ensure the confidentiality of your response</span>
        <span class="flex text-sm ml-4 mt-6">Respond here:</span>
        <div class="flex ">
            <textarea wire:model="mail_body" type="text" class="flex m-4 w-full text-sm h-32 rounded-md"></textarea>

        </div>
        <button type="submit" class="flex ml-4 bg-amber-100 w-fit p-1 rounded-md text-sm">
            Submit
        </button>

    </form>

</div>
