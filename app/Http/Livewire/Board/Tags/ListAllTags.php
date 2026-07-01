<?php

namespace App\Http\Livewire\Board\Tags;

use Livewire\Component;
use App\Models\Tag;
class ListAllTags extends Component
{


    protected $listeners = ['deleteITem'];


    public function deleteITem($itemId)
    {
        $item = Tag::find($itemId);
        if ($item) 
            $item->delete();
    }

    public function render()
    {
        $tags = Tag::with('user')->get();
        return view('livewire.board.tags.list-all-tags' , compact('tags'));
    }
}
