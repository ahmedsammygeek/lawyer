<?php

namespace App\Http\Livewire\Board\PageSeo;

use Livewire\Component;
use App\Models\PageSeo;
use Livewire\WithFileUploads;
class EditPageSeo extends Component
{
    use WithFileUploads;
    public $page;
    public $page_id;
    public $page_title_ar;
    public $page_title_en;
    public $meta_description_ar;
    public $meta_description_en;
    public $open_graph_title_ar;
    public $open_graph_title_en;
    public $open_graph_description_ar;
    public $open_graph_description_en;
    public $canonical_url;
    public $robots_follow  = true;
    public $robots_index  = true;
    public $open_image_url;


    protected $rules = [
        'page_title_ar' => 'required',
        'page_title_en' => 'required',
        'meta_description_ar' => 'required',
        'meta_description_en' => 'required',
        'open_graph_title_ar' => 'required',
        'open_graph_title_en' => 'required',
        'open_graph_description_ar' => 'required',
        'open_graph_description_en' => 'required',
        'canonical_url' => 'required|url' , 
    ];





    public function updatedPageId($value) {

        $page = PageSeo::where('id' , $value )->first();
        $this->resetValidation();
        if ($page) {
            $this->page = $page;
            $this->page_title_ar = $page->getTranslation('page_title' , 'ar' );
            $this->page_title_en = $page->getTranslation('page_title' , 'en' );
            $this->meta_description_ar = $page->getTranslation('meta_description' , 'ar' );
            $this->meta_description_en = $page->getTranslation('meta_description' , 'en' );
            $this->open_graph_title_ar = $page->getTranslation('open_graph_title' , 'ar' );
            $this->open_graph_title_en = $page->getTranslation('open_graph_title' , 'en' );
            $this->open_graph_description_ar = $page->getTranslation('open_graph_description' , 'ar' );
            $this->open_graph_description_en = $page->getTranslation('open_graph_description' , 'en' );
            $this->canonical_url = $page->canonical_url;
            $this->robots_index = (bool)$page->robots_index;
            $this->robots_follow = (bool)$page->robots_follow;
        }
        
    }


    public function mount()
    {
        $this->page_id = 1;
        $page= PageSeo::where('id' , 1 )->first();
        if ($page) {
            $this->page = $page;
            $this->page_title_ar  = $page->getTranslation('page_title' , 'ar' );
            $this->page_title_en  = $page->getTranslation('page_title' , 'en' );
            $this->meta_description_ar = $page->getTranslation('meta_description' , 'ar' );
            $this->meta_description_en = $page->getTranslation('meta_description' , 'en' );
            $this->open_graph_title_ar = $page->getTranslation('open_graph_title' , 'ar' );
            $this->open_graph_title_en = $page->getTranslation('open_graph_title' , 'en' );
            $this->open_graph_description_ar = $page->getTranslation('open_graph_description' , 'ar' );
            $this->open_graph_description_en = $page->getTranslation('open_graph_description' , 'en' );
            $this->canonical_url = $page->canonical_url;
            $this->robots_index = (bool)$page->robots_index;
            $this->robots_follow = (bool)$page->robots_follow;
        }
    }

    public function saveEdits()
    {
        $this->validate();

        $this->page->setTranslation('page_title' , 'ar' , $this->page_title_ar );
        $this->page->setTranslation('page_title' , 'en' , $this->page_title_en );

        $this->page->setTranslation('meta_description' , 'ar' , $this->meta_description_ar );
        $this->page->setTranslation('meta_description' , 'en' , $this->meta_description_en );

        $this->page->setTranslation('open_graph_title' , 'ar' , $this->open_graph_title_ar );
        $this->page->setTranslation('open_graph_title' , 'en' , $this->open_graph_title_en );

        $this->page->setTranslation('open_graph_description' , 'ar' , $this->open_graph_description_ar );
        $this->page->setTranslation('open_graph_description' , 'en' , $this->open_graph_description_en );

        $this->page->canonical_url = $this->canonical_url;

        $this->page->robots_index = $this->robots_index ? 1 : 0;
        $this->page->robots_follow = $this->robots_follow ? 1 : 0;

        if ($this->open_image_url) {
            $this->page->open_image_url =  basename($this->open_image_url->store('settings')) ;
        }

        $this->page->save();
        $this->emit('updated');
    }


    public function render()
    {
        $pages = PageSeo::get();
        return view('livewire.board.page-seo.edit-page-seo' , compact('pages') );
    }
}
