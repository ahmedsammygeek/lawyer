<?php

namespace App\Http\Livewire\Board\Slides;

use Livewire\Component;
use App\Models\Slide;
class ListAllSlides extends Component
{


    protected $listeners = ['deleteITem'];


    public function deleteITem($itemId)
    {
        $item = Slide::find($itemId);
        if ($item) 
            $item->delete();
    }

    public function render()
    {
        $slides = Slide::with('user')->latest()->get();
        return view('livewire.board.slides.list-all-slides' , compact('slides'));
    }
}
