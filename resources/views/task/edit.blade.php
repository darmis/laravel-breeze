<x-app-layout>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 ">
                    <x-auth-card>

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <form  method="POST" action="{{ route('task.update', $task->id) }}">
                            @csrf
                            @method('PUT')

                            <div>
                                <!-- Title -->
                                <div class="mt-4">
                                    <x-label for="title" :value="__('Title')" />

                                    <x-input id="title" class="block mt-1 w-full" type="text" name="title" value="{{ $task->title }}" required autofocus />
                                </div>

                                <!-- Description -->
                                <div class="mt-4">
                                    <x-label for="description" :value="__('Description')" />

                                    <textarea  id="description" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="description" required rows="5">{{ $task->description }}</textarea>
                                </div>

                                <!-- Due Date -->
                                <div class="mt-4">
                                    <x-label for="due_date" :value="__('Due Date')" />

                                    <x-input id="due_date" class="block mt-1 w-full" type="date" name="due_date" value="{{ $task->due_date }}" required />
                                </div>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ml-4">
                                    {{ __('Update task') }}
                                </x-button>
                            </div>
                        </form>
                    </x-auth-card>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>