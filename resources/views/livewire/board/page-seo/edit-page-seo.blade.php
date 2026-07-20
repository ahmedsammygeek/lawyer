<div class="card">
    <div class="card-header bg-primary">
        <h3 class="card-title text-white"> تعديل إعدادات SEO  </h3>
    </div>

    <div  class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <label class="form-label "> الصفحه </label>
                    <div>
                        <select wire:model="page_id" id="page_id" class="form-control formatselect" >
                            @foreach ($pages as $single_page)
                            <option value="{{ $single_page->id }}" > {{ $single_page->page_name }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label required"> arabic title  </label>
                    <div>
                        <input type="text" class="form-control @error('page_title_ar') is-invalid @enderror " name='page_title_ar' wire:model="page_title_ar"  >
                        @error('page_title_ar')
                        <small class="form-hint text-danger"> {{ $message }} </small>
                        @enderror
                    </div>
                </div>    
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label required"> english title  </label>
                    <div>
                        <input type="text" class="form-control @error('page_title_en') is-invalid @enderror " name='page_title_en' wire:model="page_title_en"  >
                        @error('page_title_en')
                        <small class="form-hint text-danger"> {{ $message }} </small>
                        @enderror
                    </div>
                </div>
            </div>


            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label required"> arabic meta description  </label>
                    <div>
                        <input type="text" class="form-control @error('meta_description_ar') is-invalid @enderror " name='meta_description_ar' wire:model="meta_description_ar"  >
                        @error('meta_description_ar')
                        <small class="form-hint text-danger"> {{ $message }} </small>
                        @enderror
                    </div>
                </div>    
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label required"> english meta description  </label>
                    <div>
                        <input type="text" class="form-control @error('meta_description_en') is-invalid @enderror " name='meta_description_en' wire:model="meta_description_en"  >
                        @error('meta_description_en')
                        <small class="form-hint text-danger"> {{ $message }} </small>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label required"> arabic open graph title  </label>
                    <div>
                        <input type="text" class="form-control @error('open_graph_title_ar') is-invalid @enderror " name='open_graph_title_ar' wire:model="open_graph_title_ar"  >
                        @error('open_graph_title_ar')
                        <small class="form-hint text-danger"> {{ $message }} </small>
                        @enderror
                    </div>
                </div>    
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label required"> english open graph title  </label>
                    <div>
                        <input type="text" class="form-control @error('open_graph_title_en') is-invalid @enderror " name='open_graph_title_en' wire:model="open_graph_title_en"  >
                        @error('open_graph_title_en')
                        <small class="form-hint text-danger"> {{ $message }} </small>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label required"> arabic open graph description  </label>
                    <div>
                        <input type="text" class="form-control @error('open_graph_description_ar') is-invalid @enderror " name='open_graph_description_ar' wire:model="open_graph_description_ar"  >
                        @error('open_graph_description_ar')
                        <small class="form-hint text-danger"> {{ $message }} </small>
                        @enderror
                    </div>
                </div>    
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label required"> english open graph description  </label>
                    <div>
                        <input type="text" class="form-control @error('open_graph_description_en') is-invalid @enderror " name='open_graph_description_en' wire:model="open_graph_description_en"  >
                        @error('open_graph_description_en')
                        <small class="form-hint text-danger"> {{ $message }} </small>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">

                    <label class="form-check form-switch form-switch-3">
                        <input class="form-check-input" type="checkbox" wire:model="robots_index" >
                        <span class="form-check-label">robots index</span>
                    </label>

                </div>    
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-check form-switch form-switch-3">
                        <input class="form-check-input" type="checkbox" wire:model="robots_follow" >
                        <span class="form-check-label">robots follow</span>
                    </label>
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label "> تغيير صوره open image </label>
                    <div>
                        <input type="file" class="form-control @error('open_image_url') is-invalid @enderror " 
                        wire:model="open_image_url"  >
                        @error('open_image_url')
                        <small class="form-hint text-danger"> {{ $message }} </small>
                        @enderror
                    </div>
                </div>
            </div>


            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label required"> canonical_url  </label>
                    <div>
                        <input type="text" class="form-control @error('canonical_url') is-invalid @enderror " name='canonical_url' wire:model="canonical_url" >
                        @error('canonical_url')
                        <small class="form-hint text-danger"> {{ $message }} </small>
                        @enderror
                    </div>
                </div>
            </div>


            <div class="col-md-12"> 
                <div class="mb-3">
                    <label class="form-label required">  open graph current image </label>
                    <div>
                        <img  class='img-thumbnail' src="{{ Storage::url('settings/'.$page->open_image_url) }}" alt="">
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="card-footer text-end">
        <div class='d-flex' >
            <a href="{{ route('board.page_seo.edit') }}" class="btn btn-link"> تراجع </a>
            <button wire:click="saveEdits()" type="submit" class="btn btn-primary ms-auto">تعديل</button>
        </div>
    </div>
</div>



@section('scripts')
<script>
    $(function() {


        Livewire.on('updated', () => {
            $.toast({
                heading: 'رسال تاكيد',
                text: 'تم التعديل بنجاح',
                hideAfter: 5000 , 
                icon: 'success'  , 
                position: 'top-right',
                textAlign: 'right' , 
                allowToastClose: false , 
            });
        })
        



    });
</script>
@endsection