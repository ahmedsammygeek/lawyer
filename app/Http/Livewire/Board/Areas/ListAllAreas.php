<?php

namespace App\Http\Livewire\Board\Areas;

use Livewire\Component;
use App\Models\Area;
class ListAllAreas extends Component
{


    protected $listeners = ['deleteITem'];


    public function deleteITem($itemId)
    {
        $item = Area::find($itemId);
        if ($item) 
            $item->delete();
    }

    public function render()
    {
        $areas = Area::with('user')->get();
        return view('livewire.board.areas.list-all-areas' , compact('areas'));
    }
}
