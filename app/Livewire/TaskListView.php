<?php

namespace App\Livewire;

use App\Models\Task;
use Carbon\Carbon;
use Livewire\Attributes\On;
use Livewire\Component;

class TaskListView extends Component
{



    public $tasks;
    public $title;
    public $color;


    public function mount($tasks, $title, $color)
    {
        $this->tasks = $tasks;
        $this->title = $title;
        $this->color = $color;
    }

    #[On('taskUpdated')]
    public function updateTasks()
    {
        return $this->redirect('/dashboard',200);

    }
    public function render()
    {
        return <<<'HTML'
            <div  class="bg-{{$this->color}}-400 w-25  my-3 rounded p-2 shadow  hover:shadow-xl">
                <h3 class="text-xl text-bolder text-center mb-4 " >{{$title}}</h3>
                <ul class="list-inside list-disc">
                    @if(empty($tasks[0])) <li>Nothing to do!😉</li>
                    @else
                        @foreach($tasks as $task)
                        <li><b  class="cursor-pointer hover:underline decoration-double" wire:click="$dispatch('openModal', { component: 'TaskView' , arguments: { task: {{ $task }} } })">{{ $task->name }} </b></li>
                        @endforeach
                    @endif
                </ul>
            </div>
        HTML;
    }
}
