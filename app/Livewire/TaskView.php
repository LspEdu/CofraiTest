<?php

namespace App\Livewire;

use App\Models\Task;
use App\Models\TaskGroup;
use LivewireUI\Modal\ModalComponent;

class TaskView extends ModalComponent
{

    public Task $task;



    public function mount($task)
    {
        $this->task = $task;
    }

    public function complete()
    {

        $this->task->is_completed = true;
        $this->task->save();
        $this->closeModalWithEvents([
            'taskUpdated',
        ]);
    }


    public function render()
    {
        return <<<'HTML'
            <div class="py-4 px-10">
                <h2 class="text-xl">{{$task->name}}</h2>
                <hr class="mt-2 mb-2 bg-white">
                <p class="w-full py-10 min-h-25 rounded shadow-sm border indent-2 ">{{$task->description}}</p>
                <p>Group Assigned: <b> {{ $task->taskGroup->name }} </b></p>
                <p>Start Date: <b>{{$task->start_date}}</b></p>
                @if($task->end_date)
                    <p>Deliver End Date: <b>{{$task->end_date}}</b></p>
                @endif
                <div class="flex justify-around mt-2">
                    <form wire:submit="complete" class="">
                        <button  class="bg-green-400 hover:bg-green-700 flex justify-items-center items-center  rounded-md  px-12 p-2  shadow-lg " type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                            &nbsp Complete
                        </button>
                    </form>
                        <button class="bg-yellow-400 hover:bg-yellow-600 flex justify-items-center items-center rounded-md px-12 p-2  shadow-lg "type:submit  wire:click="$dispatch('openModal', { component: 'EditTask' , arguments: { task: {{ $task }} } })">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-4 h-4 ">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                            </svg>
                            &nbsp Edit
                        </button>

                </div>
            </div>

        HTML;
    }
}
