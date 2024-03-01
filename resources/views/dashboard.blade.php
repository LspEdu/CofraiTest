<x-app-layout>
    <x-slot name="header" class="flex-row justify-items-center ">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tasks') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex gap-1">
                @livewire('CreateButton')
                @livewire('CreateTaskGroupButton')
            </div>
            <div class="bg-white flex p-3 justify-around gap-1 flex-wrap min-h-50 text-gray-900 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                @livewire('TaskListView', ['tasks' => $todayTasks, 'title' => 'Today Tasks', 'color' => 'red'])

            </div>
        </div>
    </div>
</x-app-layout>
