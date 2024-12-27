<?php

namespace App\Livewire;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

use function Flasher\Prime\flash;

class Tasks extends Component
{
    public $title, $description, $task_id;
    public $tasks;
    public $edit_task_state = false;

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

    // Find task by id
    public function edit($id)
    {
        $this->edit_task_state = true;

        $task = Task::find($id);

        $this->title = $task->title;
        $this->description = $task->description;
        $this->task_id = $task->id;
    }

    // Update task
    public function update()
    {
        $validatedData = $this->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:10',
        ]);

        $validatedData['user_id'] = Auth::id();

        $task = Task::find($this->task_id);
        $task->update($validatedData);

        flash()->success('Task has been updated successfully.');
        $this->resetInputs();
        $this->edit_task_state = false;
    }

    // Delete task
    public function destroy($id)
    {
        Task::destroy($id);
        flash()->success('Task ID No. ' . $id . ' has been deleted successfully.');
    }

    public function cancelUpdate()
    {
        $this->edit_task_state = false;
        $this->resetInputs();
    }

    private function resetInputs()
    {
        $this->title = "";
        $this->description = "";
    }


    public function render()
    {
        $no = 1;
        $user_id = Auth::id();
        $this->tasks = Task::where("user_id", $user_id)->get();
        $numberOfTasks = Task::where('user_id', $user_id)->count();
        return view('livewire.tasks', compact('no', 'numberOfTasks'));
    }
}
