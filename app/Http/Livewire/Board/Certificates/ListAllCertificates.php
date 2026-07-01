<?php

namespace App\Http\Livewire\Board\Certificates;

use Livewire\Component;
use App\Models\Certificate;
class ListAllCertificates extends Component
{


    protected $listeners = ['deleteITem'];


    public function deleteITem($itemId)
    {
        $item = Certificate::find($itemId);
        if ($item) 
            $item->delete();
    }

    public function render()
    {
        $certificates = Certificate::with('user')->latest()->get();
        return view('livewire.board.certificates.list-all-certificates' , compact('certificates'));
    }
}
