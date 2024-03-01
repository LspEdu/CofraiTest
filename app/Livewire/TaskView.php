<?php

namespace App\Livewire;

use App\Models\Task;
use App\Models\TaskGroup;
use LivewireUI\Modal\ModalComponent;

class TaskView extends ModalComponent
{

    public Task $task;



    public function mount($task){
        $this->task = $task;

    }

    public function complete(){

        $this->task->is_completed = true;
        $this->task->save();
        $this->closeModalWithEvents([
            'taskUpdated',
        ]);
    }


    public function render()
    {
        return <<<'HTML'
            <div class="py-4 px-4">
                <h2 class="text-xl">{{$task->name}}</h2>
                <hr class="mt-2 mb-2 shadow">
                <p class="w-full py-10 min-h-25 rounded shadow-sm border indent-2 ">{{$task->description}}</p>
                <p>Group Assigned: <b> {{ $task->taskGroup->name }} </b></p>
                <p>Deliver End Date: <b>{{$task->end_date}}</b></p>
                <form wire:submit="complete" class="">
                    <button  class="bg-green-400 hover:bg-green-700  rounded-md p-2 mt-2 shadow-lg " type="submit">Add</button>
                </form>
            </div>

        HTML;
    }
}
