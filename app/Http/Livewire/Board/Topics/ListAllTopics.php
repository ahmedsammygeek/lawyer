<?php

namespace App\Http\Livewire\Board\Topics;

use Livewire\Component;
use App\Models\Topic;
class ListAllTopics extends Component
{


    protected $listeners = ['deleteITem'];


    public function deleteITem($itemId)
    {
        $item = Topic::find($itemId);
        if ($item) 
            $item->delete();
    }

    public function render()
    {
        $topics = Topic::with('user')->latest()->get();
        return view('livewire.board.topics.list-all-topics' , compact('topics'));
    }
}
