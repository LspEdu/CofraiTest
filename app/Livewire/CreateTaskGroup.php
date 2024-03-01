<?php

namespace App\Livewire;

use App\Models\TaskGroup;
use Livewire\Attributes\Validate;
use LivewireUI\Modal\ModalComponent;

class CreateTaskGroup extends ModalComponent
{
    #[Validate('required|min:3|string')]
    public $name;
    #[Validate('required|min:3|string')]
    public $description;


    public function save(){
        $this->validate();

        $taskGroup = new TaskGroup();
        $taskGroup->name = $this->name;
        $taskGroup->description = $this->description;
        $taskGroup->save();

        $this->closeModalWithEvents([
            'taskUpdated',
        ]);
    }


    public function render()
    {
        return <<<'HTML'
            <div class="py-4 px-4">
                <h2 class="text-xl">Create Task Group</h2>
                <hr class="mt-2 mb-2 shadow">
                <form wire:submit="save" class="">
                    <div class="mt-4 mb-4">
                        <label class="block text-gray-700  font-bold mb-2" for="name">Name </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="name" wire:model="name"/>
                        <div class="text-red-600">@error('name') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700  font-bold mb-2" for="description">Description </label>
                        <textarea  class="shadow appearance-none border rounded w-full py-2 px-3" name="description" id="description" cols="30" rows="5" wire:model="description"></textarea>
                        <div class="text-red-600">@error('description') {{ $message }} @enderror</div>
                    </div>
                    <button class="bg-green-400" type="submit">Add</button>
                </form>
            </div>
        HTML;
    }
}
