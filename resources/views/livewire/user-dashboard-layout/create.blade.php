<div class=" w-full p-5">
    <h3 class=" text-center my-4 font-semibold text-gray-800 text-lg selection:bg-red-500 selection:text-white">Create
        new task</h3>

    <form class="bg-white w-full max-w-lg p-5 rounded-lg mx-auto" method="post">
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

        <button class="main-button" wire:click.prevent="store">Save</button>
    </form>
</div>
