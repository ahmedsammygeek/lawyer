@extends('board.layouts.master')

@section('page_content')
<div class="page-header d-print-none">
	<div class="container-xl">
		<div class="row g-2 align-items-center">
			<div class="col">
				<!-- Page pre-title -->
				<div class="page-pretitle">
					تعديل
				</div>
				<h2 class="page-title">
					سياسه الموقع
				</h2>
			</div>
		</div>
	</div>
</div>
<!-- Page body -->
<div class="page-body">
	<div class="container-xl">
		<div class="row row-deck row-cards">
			<div class="col-md-12">
				<form class="card" method='POST' action='{{ route('board.terms.update') }}' enctype="multipart/form-data" >
					@csrf
					@method('PATCH')
					<div class="card-header bg-primary">
						<h3 class="card-title text-white"> تعديل الشروط و الاحكام   </h3>
					</div>
					<div class="card-body">

						<div class="mb-3">
							<label class="form-label required"> البانر </label>
							<div>
								<input type='file'  class="form-control @error('terms_banner') is-invalid @enderror " name='terms_banner' >
								@error('terms_banner')
								<small class="form-hint text-danger"> {{ $message }} </small>
								@enderror
							</div>
						</div>
						

						<div class="mb-3">
							<label class="form-label required"> المحتوى  بالعربيه </label>
							<div>
								<textarea  class="form-control @error('terms_ar') is-invalid @enderror " name='terms_ar' id="tinymce-mytextarea" cols="30" rows="10"> {{ $settings->getTranslation('terms'  , 'ar' ) }} </textarea>
								@error('terms_ar')
								<small class="form-hint text-danger"> {{ $message }} </small>
								@enderror
							</div>
						</div>

						<div class="mb-3">
							<label class="form-label required"> المحتوى  بالانجليزيه </label>
							<div>
								<textarea  class="form-control @error('terms_en') is-invalid @enderror " name='terms_en' id="tinymce-mytextarea" cols="30" rows="10">{{ $settings->getTranslation('terms'  , 'en' ) }}</textarea>
								@error('terms_en')
								<small class="form-hint text-danger"> {{ $message }} </small>
								@enderror
							</div>
						</div>

						<div class="mb-3">
							<label class="form-label required"> البانر الحالى </label>
							<div>
								<img src="{{ Storage::url('settings/'.$settings->terms_banner) }}" alt="">
							</div>
						</div>




					</div>
					<div class="card-footer text-end">
						<div class='d-flex' >
							<a href="{{ route('board.terms.edit') }}" class="btn btn-link"> تراجع </a>
							<button type="submit" class="btn btn-primary ms-auto">تعديل</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('board_assets/dist/libs/tinymce/tinymce.min.js?1684106062') }}" defer></script>

<script>
      // @formatter:off
	document.addEventListener("DOMContentLoaded", function () {
		let options = {
			selector: '#tinymce-mytextarea',
			height: 300,
			menubar: false,
			statusbar: false,
			directionality : 'rtl' , 
			language: 'ar' ,
			plugins: [
				'a11ychecker','advlist','advcode','advtable','autolink','checklist','markdown',
				'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks',
				'powerpaste','fullscreen','formatpainter','insertdatetime','media','table','help','wordcount'
			],
			toolbar: 'undo redo | a11ycheck casechange blocks | bold italic backcolor forecolor | alignleft aligncenter alignright alignjustify | bullist numlist checklist outdent indent | removeformat | code table help',

		}
		if (localStorage.getItem("tablerTheme") === 'dark') {
			options.skin = 'oxide-dark';
			options.content_css = 'dark';
		}
		tinyMCE.init(options);
	})
      // @formatter:on
</script>
@endsection