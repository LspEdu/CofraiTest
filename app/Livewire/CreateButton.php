<?php

namespace App\Livewire;

use Livewire\Component;

class CreateButton extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>
            <button onclick="Livewire.dispatch('openModal', { component: 'createTask' })" class="bg-blue-500 hover:bg-blue-700 py-2 px-4 text-white rounded">Add New Task</button>
        </div>
        HTML;
    }
}
