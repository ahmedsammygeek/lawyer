
@extends('site.layouts.master')

@section('page_content')
<section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>المشاريع المتاحة</h2>
                <p>نحن نمتلك مجموعة من الأماكن الفاخرة للايجار في أرقي الأماكن</p>
            </div>
        </div>
    </div>
</section>
<section class="listing">
    @livewire('site.projects.list-all-projects')
</section>
@endsection