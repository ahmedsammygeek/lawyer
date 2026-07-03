@extends('board.layouts.master')

@section('page_content')
<div class="page-header d-print-none">
	<div class="container-xl">
		<div class="row g-2 align-items-center">
			<div class="col">
				<div class="page-pretitle">
					تعديل
				</div>
				<h2 class="page-title">
					نبذة عني 
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
				<form class="card" method='POST' action='{{ route('board.about.update') }}' enctype="multipart/form-data" >
					@csrf
					@method('PATCH')
					<div class="card-header bg-primary">
						<h3 class="card-title text-white"> تعديل من نحن  </h3>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label required"> الصوره الرئيسيه </label>
									<div>
										<input type='file'  class="form-control @error('main_image') is-invalid @enderror " name='main_image' >
										@error('main_image')
										<small class="form-hint text-danger"> {{ $message }} </small>
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label required"> صوره السيره الذاتيه </label>
									<div>
										<input type='file' class="form-control @error('bio_image') is-invalid @enderror " name='bio_image' >
										@error('bio_image')
										<small class="form-hint text-danger"> {{ $message }} </small>
										@enderror
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label required"> الاسم بالعربيه </label>
									<div>
										<input type='text'  class="form-control @error('name_ar') is-invalid @enderror " name='name_ar' value="{{ $about->getTranslation('name' , 'ar') }}" >
										@error('name_ar')
										<small class="form-hint text-danger"> {{ $message }} </small>
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label required"> الاسم بالانجليزيه </label>
									<div>
										<input type='text' class="form-control @error('name_en') is-invalid @enderror " name='name_en' value="{{ $about->getTranslation('name' , 'en') }}" >
										@error('name_en')
										<small class="form-hint text-danger"> {{ $message }} </small>
										@enderror
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label required"> المسمى الوظيفى بالعربيه </label>
									<div>
										<input type='text'  class="form-control @error('job_title_ar') is-invalid @enderror " name='job_title_ar' value="{{ $about->getTranslation('job_title' , 'ar') }}" >
										@error('job_title_ar')
										<small class="form-hint text-danger"> {{ $message }} </small>
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label required"> المسمى الوظيفى بالانجليزيه </label>
									<div>
										<input type='text' class="form-control @error('job_title_en') is-invalid @enderror " name='job_title_en' value="{{ $about->getTranslation('job_title' , 'en') }}" >
										@error('job_title_en')
										<small class="form-hint text-danger"> {{ $message }} </small>
										@enderror
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label required"> الاقتباس بالعربيه </label>
									<div>
										<input type='text'  class="form-control @error('quote_ar') is-invalid @enderror " name='quote_ar' value="{{ $about->getTranslation('quote' , 'ar') }}" >
										@error('quote_ar')
										<small class="form-hint text-danger"> {{ $message }} </small>
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label required"> الاقتباس بالانجليزيه </label>
									<div>
										<input type='text' class="form-control @error('quote_en') is-invalid @enderror " name='quote_en' value="{{ $about->getTranslation('quote' , 'en') }}" >
										@error('quote_en')
										<small class="form-hint text-danger"> {{ $message }} </small>
										@enderror
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="mb-3">
									<label class="form-label required"> النص الاول بالعربيه </label>
									<div>
										<input type='text'  class="form-control @error('left_text_ar') is-invalid @enderror " name='left_text_ar' value="{{ $about->getTranslation('left_text' , 'ar') }}" >
										@error('left_text_ar')
										<small class="form-hint text-danger"> {{ $message }} </small>
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<label class="form-label required"> النص الاول بالانجليزيه </label>
									<div>
										<input type='text' class="form-control @error('left_text_en') is-invalid @enderror " name='left_text_en' value="{{ $about->getTranslation('left_text' , 'en') }}" >
										@error('left_text_en')
										<small class="form-hint text-danger"> {{ $message }} </small>
										@enderror
									</div>
								</div>
							</div>
						</div>


						<div class="row">
							<div class="col-md-12">
								<div class="mb-3">
									<label class="form-label required"> النص الثانى بالعربيه </label>
									<div>
										<input type='text'  class="form-control @error('right_text_ar') is-invalid @enderror " name='right_text_ar' value="{{ $about->getTranslation('right_text' , 'ar') }}" >
										@error('right_text_ar')
										<small class="form-hint text-danger"> {{ $message }} </small>
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<label class="form-label required"> النص الثانى بالانجليزيه </label>
									<div>
										<input type='text' class="form-control @error('right_text_en') is-invalid @enderror " name='right_text_en' value="{{ $about->getTranslation('right_text' , 'en') }}" >
										@error('right_text_en')
										<small class="form-hint text-danger"> {{ $message }} </small>
										@enderror
									</div>
								</div>
							</div>
						</div>
						

						

						<div class="mb-3">
							<label class="form-label required"> السيره الذاتيه بالعربيه </label>
							<div>
								<textarea  class="form-control @error('bio_ar') is-invalid @enderror " name='bio_ar' id="tinymce-mytextarea" cols="30" rows="6"> {{ $about->getTranslation('bio'  , 'ar' ) }} </textarea>
								@error('bio_ar')
								<small class="form-hint text-danger"> {{ $message }} </small>
								@enderror
							</div>
						</div>

						<div class="mb-3">
							<label class="form-label required"> السيره الذاتيه بالانجليزيه </label>
							<div>
								<textarea  class="form-control @error('bio_en') is-invalid @enderror " name='bio_en' id="tinymce-mytextarea" cols="30" rows="6"> {{ $about->getTranslation('bio'  , 'ar' ) }} </textarea>
								@error('bio_en')
								<small class="form-hint text-danger"> {{ $message }} </small>
								@enderror
							</div>
						</div>

						<div class="mb-3">
							<label class="form-label required"> الصوره الرئيسيه الحاليه </label>
							<div>
								<img src="{{ Storage::url('about/'.$about->main_image) }}" class="img-thumbnail" alt="">
							</div>
						</div>

						<div class="mb-3">
							<label class="form-label required"> صوره السيره الذاتيه الحاليه </label>
							<div>
								<img src="{{ Storage::url('about/'.$about->bio_image) }}" class="img-thumbnail" alt="">
							</div>
						</div>


					</div>
					<div class="card-footer text-end">
						<div class='d-flex' >
							<a href="{{ route('board.about.edit') }}" class="btn btn-link"> تراجع </a>
							<button type="submit" class="btn btn-primary ms-auto">تعديل</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

{{-- @section('scripts')
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
				'advlist autolink lists link image charmap print preview anchor',
				'searchreplace visualblocks code fullscreen',
				'insertdatetime media table paste code help wordcount'
			],
			toolbar: 'undo redo | formatselect | ' +
			'bold italic backcolor forecolor | alignleft aligncenter ' +
			'alignright alignjustify | bullist numlist outdent indent | ' +
			'removeformat',
		}
		if (localStorage.getItem("tablerTheme") === 'dark') {
			options.skin = 'oxide-dark';
			options.content_css = 'dark';
		}
		tinyMCE.init(options);
	})
      // @formatter:on
</script>
@endsection --}}