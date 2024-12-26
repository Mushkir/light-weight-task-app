<div class=" w-full p-5">
    <h3 class=" text-center my-4 font-semibold text-gray-800 text-lg selection:bg-red-500 selection:text-white">Edit task
    </h3>

    <form class="bg-white w-full max-w-2xl p-5 rounded-lg mx-auto" method="post">
        {{-- Title --}}
        <div class="formInputGroups">
            <label for="title" class=" font-semibold text-gray-700">Title<span class=" text-red-500">*</span></label>
            <input type="text" wire:model="title" id="title" class=" bg-slate-200 border-none rounded-md"
                name="title" placeholder="Enter the task title">

            {{-- Error msg for title --}}
            @error('title')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        {{-- Description --}}
        <div class="formInputGroups">
            <label for="description" class=" font-semibold text-gray-700">Description<span
                    class=" text-red-500">*</span></label>
            <textarea id="description" wire:model="description" class=" bg-slate-200 border-none rounded-md" name="description"
                rows="5"></textarea>

            {{-- Error msg for description --}}
            @error('description')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class=" flex items-center justify-between gap-5">
            <button class="main-button" wire:click.prevent="update">Save changes</button>
            <button class="w-full bg-red-800 text-white px-5 py-2 rounded-md mt-2 hover:bg-red-900 transition-all;"
                wire:click.prevent="cancelUpdate">Cancel</button>
        </div>
    </form>
</div>
