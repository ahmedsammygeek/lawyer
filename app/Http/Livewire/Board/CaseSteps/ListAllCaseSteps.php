<?php

namespace App\Http\Livewire\Board\CaseSteps;

use Livewire\Component;
use App\Models\CaseStep;
class ListAllCaseSteps extends Component
{


    protected $listeners = ['deleteITem'];


    public function deleteITem($itemId)
    {
        $item = CaseStep::find($itemId);
        if ($item) 
            $item->delete();
    }

    public function render()
    {
        $steps = CaseStep::with('user')->get();
        return view('livewire.board.case-steps.list-all-case-steps' , compact('steps'));
    }
}
