<div class="relative overflow-x-auto px-5 mb-5">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 rounded-lg overflow-hidden">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    S.No
                </th>
                <th scope="col" class="px-6 py-3">
                    Title
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
            @foreach ($tasks as $task)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        #{{ $no++ }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $task->title }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $task->description }}
                    </td>
                    <td class="px-6 py-4 space-x-3">
                        <button class=" px-5 py-2 bg-green-700 text-white rounded-md hover:bg-green-800 transition-all"
                            wire:click.prevent="edit({{ $task->id }})">Edit</button>
                        <button class=" px-5 py-2 bg-red-800 rounded-md text-white hover:bg-red-900 transition-all"
                            wire:click="">Delete</button>
                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>
</div>
