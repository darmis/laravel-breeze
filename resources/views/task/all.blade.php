<x-app-layout>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a class="inline-flex items-center m-4 px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" 
                    href="{{ route('task.create') }}">Add new task</a>
                    <div class="flex flex-col max-w-full overflow-x-hidden shadow-md m-8">
                        <table class="overflow-x-auto w-full bg-white">
                            <thead class="bg-blue-100 border-b border-gray-300">
                                <tr>
                                    <th class="p-4 text-left text-sm font-medium text-gray-500">ID</th>
                                    <th class="p-4 text-left text-sm font-medium text-gray-500">Task</th>
                                    <th class="p-4 text-left text-sm font-medium text-gray-500">Decription</th>
                                    <th class="p-4 text-left text-sm font-medium text-gray-500">Due Date</th>
                                    <th class="p-4 text-left text-sm font-medium text-gray-500">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 text-sm divide-y divide-gray-300">
                                @foreach($tasks as $task)
                                <tr class="bg-white font-medium text-sm divide-y divide-gray-200">
                                    <td class="p-4 whitespace-nowrap">{{ $task->id }}</td>
                                    <td class="p-4 whitespace-nowrap">{{ $task->title }}</td>
                                    <td class="p-4 whitespace-nowrap">{{ $task->description }}</td>
                                    <td class="p-4 whitespace-nowrap">{{ $task->due_date }}</td>
                                    <td class="p-4 whitespace-nowrap">
                                        <div class="flex space-x-1">
                                            <button class="border-2 border-indigo-200 rounded-md p-1">
                                            <a href="{{ route('task.edit', $task->id) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4 text-indigo-500">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </a>
                                            </button>
                                            <form method="POST" action="{{ route('task.destroy', $task->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="border-2 border-red-200 rounded-md p-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4 text-red-500">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>            
        </div>
    </div>
</x-app-layout>