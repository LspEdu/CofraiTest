<?php

namespace App\Livewire;

use Livewire\Component;

class CreateTaskGroupButton extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>
            <button onclick="Livewire.dispatch('openModal', { component: 'createTaskGroup' })" class="bg-emerald-500 hover:bg-emerald-700 py-2 px-4 text-white rounded">Add New Task Group</button>
        </div>
        HTML;
    }
}
