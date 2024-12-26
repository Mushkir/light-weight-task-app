<?php

namespace App\Livewire;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

use function Flasher\Prime\flash;

class Tasks extends Component
{
    public $title, $description;
    public $tasks;

    // Insert new task
    public function store()
    {

        $validatedData = $this->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:10',
            // 'user_id' => Auth::id()
        ]);

        $validatedData['user_id'] = Auth::id();

        Task::create($validatedData);

        flash()->success('New task has been created successfully.');
        $this->resetInputs();
    }

    private function resetInputs()
    {
        $this->title = "";
        $this->description = '';
    }


    public function render()
    {
        $no = 1;
        $this->tasks = Task::where("user_id", Auth::id())->get();
        return view('livewire.tasks', compact('no'));
    }
}
