<?php

namespace App\Http\Livewire\Board\Goals;

use Livewire\Component;
use App\Models\Goal;
class ListAllGoals extends Component
{


    protected $listeners = ['deleteITem'];


    public function deleteITem($itemId)
    {
        $item = Goal::find($itemId);
        if ($item) 
            $item->delete();
    }

    public function render()
    {
        $goals = Goal::latest()->get();
        return view('livewire.board.goals.list-all-goals' , compact('goals'));
    }
}
