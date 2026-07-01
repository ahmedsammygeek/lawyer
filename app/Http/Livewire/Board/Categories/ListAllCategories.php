<?php

namespace App\Http\Livewire\Board\Categories;

use Livewire\Component;
use App\Models\Category;
class ListAllCategories extends Component
{


    protected $listeners = ['deleteITem'];


    public function deleteITem($itemId)
    {
        $item = Category::find($itemId);
        if ($item) 
            $item->delete();
    }

    public function render()
    {
        $categories = Category::with('user')->get();
        return view('livewire.board.categories.list-all-categories' , compact('categories'));
    }
}
