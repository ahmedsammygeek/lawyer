@extends('board.layouts.master')

@section('page_content')
<div class="page-header d-print-none">
	<div class="container-xl">
		<div class="row g-2 align-items-center">
			<div class="col">
				<!-- Page pre-title -->
				<div class="page-pretitle">
					إضافه
				</div>
				<h2 class="page-title">
					المقالات
				</h2>
			</div>
			<!-- Page title actions -->
			<div class="col-auto ms-auto d-print-none">
				<div class="btn-list">
					<a href="{{ route('board.topics.index') }}" class="btn btn-primary d-none d-sm-inline-block" >
						<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-discount-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
							<path d="M9 15l6 -6"></path>
							<circle cx="9.5" cy="9.5" r=".5" fill="currentColor"></circle>
							<circle cx="14.5" cy="14.5" r=".5" fill="currentColor"></circle>
							<path d="M5 7.2a2.2 2.2 0 0 1 2.2 -2.2h1a2.2 2.2 0 0 0 1.55 -.64l.7 -.7a2.2 2.2 0 0 1 3.12 0l.7 .7a2.2 2.2 0 0 0 1.55 .64h1a2.2 2.2 0 0 1 2.2 2.2v1a2.2 2.2 0 0 0 .64 1.55l.7 .7a2.2 2.2 0 0 1 0 3.12l-.7 .7a2.2 2.2 0 0 0 -.64 1.55v1a2.2 2.2 0 0 1 -2.2 2.2h-1a2.2 2.2 0 0 0 -1.55 .64l-.7 .7a2.2 2.2 0 0 1 -3.12 0l-.7 -.7a2.2 2.2 0 0 0 -1.55 -.64h-1a2.2 2.2 0 0 1 -2.2 -2.2v-1a2.2 2.2 0 0 0 -.64 -1.55l-.7 -.7a2.2 2.2 0 0 1 0 -3.12l.7 -.7a2.2 2.2 0 0 0 .64 -1.55v-1"></path>
						</svg>
						عرض كافه المقالات
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Page body -->
<div class="page-body">
	<div class="container-xl">
		<div class="row row-deck row-cards">
			<div class="col-md-12">
				<form class="card" method='POST' action='{{ route('board.topics.store') }}' enctype="multipart/form-data" >
					@csrf
					<div class="card-header bg-primary">
						<h3 class="card-title text-white"> إضافه مقال جديده </h3>
					</div>
					<div class="card-body">

						<div class="mb-3">
							<label class="form-label required"> صوره المقال </label>
							<div>
								<input type="file" class="form-control @error('image') is-invalid @enderror " name='image' >
								@error('image')
								<small class="form-hint text-danger"> {{ $message }} </small>
								@enderror
							</div>
						</div>

						<div class="mb-3">
							<label class="form-label required"> العنوان المقال  </label>
							<div>
								<input type="text" class="form-control @error('title') is-invalid @enderror " name='title' value="{{ old('title') }}" >
								@error('title')
								<small class="form-hint text-danger"> {{ $message }} </small>
								@enderror
							</div>
						</div>




						<div class="mb-3">
							<label class="form-label required"> المحتوى التفصيلى للمقال </label>
							<div>
								<textarea  class="form-control @error('content') is-invalid @enderror " name='content' id="tinymce-mytextarea" cols="30" rows="10"> {{ old('content') }} </textarea>
								@error('content')
								<small class="form-hint text-danger"> {{ $message }} </small>
								@enderror
							</div>
						</div>
						<div class="mb-3">
							<label class="form-label"> خصائص </label>
							<div>
								<label class="form-check">
									<input class="form-check-input" name='is_active' type="checkbox" checked>
									<span class="form-check-label"> السماح بالعرض </span>
								</label>
							</div>
						</div>
						<div class="mb-3">
							<label class="form-label"> الوسوم </label>
							<div>
								<select name="tags[]" class='select form-control' multiple="">
									@foreach ($tags as $tag)
										<option value="{{ $tag->id }}"> {{ $tag->name }} </option>
									@endforeach
								</select>
							</div>
						</div>
					</div>
					<div class="card-footer text-end">
						<div class='d-flex' >
							<a href="{{ route('board.services.index') }}" class="btn btn-link"> تراجع </a>
							<button type="submit" class="btn btn-primary ms-auto">إضافه</button>
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
				'advlist autolink lists link image charmap print preview anchor',
				'searchreplace visualblocks code fullscreen',
				'insertdatetime media table paste code help wordcount'
				],
			toolbar: 'undo redo | formatselect | ' +
			'bold italic backcolor | alignleft aligncenter ' +
			'alignright alignjustify | bullist numlist outdent indent | ' +
			'removeformat',
			content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif; font-size: 14px; -webkit-font-smoothing: antialiased; }'
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