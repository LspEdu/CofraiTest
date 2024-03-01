<?php

namespace App\Livewire;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use LivewireUI\Modal\ModalComponent;

class CreateTask extends ModalComponent
{
    #[Validate('required|min:3|string')]
    public $name = '';

    #[Validate('required|min:3|string')]
    public $description = '';

    #[Validate('required|date')]
    public $start_date = '';

    public $end_date = '';

    public $is_completed = false;


    public function save(){

        $this->validate();


        $task = new Task();
        $task->name = $this->name;
        $task->description = $this->description;
        $task->start_date = $this->start_date;
        $task->end_date = $this->end_date ?: null;
        $task->is_completed = $this->is_completed;
        Auth::user()->tasks()->save($task);


        $this->closeModalWithEvents([
            'taskUpdated',
        ]);
    }



    public function render()
    {
        return <<<'HTML'
            <div class="py-4 px-4">
                <h2 class="text-xl">Create Task</h2>
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
                    <div class="mb-6 flex justify-between">
                        <div class="">
                            <label class="block text-gray-700  font-bold mb-2" for="start_date">Initial Date </label>
                            <input type="date" name="start_date" id="start_date" wire:model="start_date">
                            <div class="text-red-600">@error('start_date') {{ $message }} @enderror</div>
                        </div>
                        <div>
                            <label class="block text-gray-700  font-bold mb-2" for="end_date">End Date </label>
                            <input type="date" name="end_date" id="end_date" wire:model="end_date">
                            <div class="text-red-600">@error('end_date') {{ $message }} @enderror</div>
                        </div>
                    </div>
                    <button class="bg-green-400" type="submit">Add</button>
                </form>
            </div>
        HTML;
    }
}
