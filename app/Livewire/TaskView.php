<?php

namespace App\Livewire;


use LivewireUI\Modal\ModalComponent;

class TaskView extends ModalComponent
{

    public $task;

    public function mount($task){
        $this->task = $task;
    }
    public function render()
    {
        return <<<'HTML'
            <a @click>
                {{$task->name;}}
            </a>

        HTML;
    }
}
