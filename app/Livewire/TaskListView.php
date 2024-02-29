<?php

namespace App\Livewire;

use Livewire\Component;

class TaskListView extends Component
{



    public $tasks;
    public $title;
    public $color;

    public function mount($tasks, $title, $color){
        $this->tasks = $tasks;
        $this->title = $title;
        $this->color = $color;
    }

    public function render()
    {
        return <<<'HTML'
        <div class="bg-{{$this->color}}-500 max-w-25  my-3 rounded p-2 shadow  hover:shadow-xl">
            <h3 class="text-xl text-bolder text-center mb-4 " >{{$title}}</h3>
            <ul class="list-inside list-disc">
                @foreach($tasks as $task)
                 <li>@livewire('TaskView', ['task' => $task])</li>
                @endforeach
            </ul>
        </div>
        HTML;
    }
}
