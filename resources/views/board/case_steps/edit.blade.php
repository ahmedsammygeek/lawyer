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
					خطوات القضايا
				</h2>
			</div>
			<!-- Page title actions -->
			<div class="col-auto ms-auto d-print-none">
				<div class="btn-list">

					<a href="{{ route('board.case_steps.index') }}" class="btn btn-primary d-none d-sm-inline-block" >
						<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-discount-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
							<path d="M9 15l6 -6"></path>
							<circle cx="9.5" cy="9.5" r=".5" fill="currentColor"></circle>
							<circle cx="14.5" cy="14.5" r=".5" fill="currentColor"></circle>
							<path d="M5 7.2a2.2 2.2 0 0 1 2.2 -2.2h1a2.2 2.2 0 0 0 1.55 -.64l.7 -.7a2.2 2.2 0 0 1 3.12 0l.7 .7a2.2 2.2 0 0 0 1.55 .64h1a2.2 2.2 0 0 1 2.2 2.2v1a2.2 2.2 0 0 0 .64 1.55l.7 .7a2.2 2.2 0 0 1 0 3.12l-.7 .7a2.2 2.2 0 0 0 -.64 1.55v1a2.2 2.2 0 0 1 -2.2 2.2h-1a2.2 2.2 0 0 0 -1.55 .64l-.7 .7a2.2 2.2 0 0 1 -3.12 0l-.7 -.7a2.2 2.2 0 0 0 -1.55 -.64h-1a2.2 2.2 0 0 1 -2.2 -2.2v-1a2.2 2.2 0 0 0 -.64 -1.55l-.7 -.7a2.2 2.2 0 0 1 0 -3.12l.7 -.7a2.2 2.2 0 0 0 .64 -1.55v-1"></path>
						</svg>
						عرض كافه الخطوات
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
				<form class="card" method='POST' action='{{ route('board.case_steps.update' , $case_step ) }}' >
					@csrf
					@method('PATCH')
					<div class="card-header bg-primary">
						<h3 class="card-title text-white"> تعديل </h3>
					</div>
					<div class="card-body">
						<div class="mb-3">
							<label class="form-label required"> رقم الخطوه بالعربيه </label>
							<div>
								<input type="text" class="form-control @error('step_rank_ar') is-invalid @enderror " name='step_rank_ar' value="{{ $case_step->getTranslation('step_rank' , 'ar') }}" >
								@error('step_rank_ar')
								<small class="form-hint text-danger"> {{ $message }} </small>
								@enderror
							</div>
						</div>

						<div class="mb-3">
							<label class="form-label required"> رقم الخطوه بالانجليزيه </label>
							<div>
								<input type="text" class="form-control @error('step_rank_en') is-invalid @enderror " name='step_rank_en' value="{{ $case_step->getTranslation('step_rank' , 'en') }}" >
								@error('step_rank_en')
								<small class="form-hint text-danger"> {{ $message }} </small>
								@enderror
							</div>
						</div>

						<div class="mb-3">
							<label class="form-label required"> عنوان الخطوه بالعربيه </label>
							<div>
								<input type="text" class="form-control @error('title_ar') is-invalid @enderror " name='title_ar' value="{{ $case_step->getTranslation('title' , 'ar') }}" >
								@error('title_ar')
								<small class="form-hint text-danger"> {{ $message }} </small>
								@enderror
							</div>
						</div>

						<div class="mb-3">
							<label class="form-label required"> عنوان الخطوه بالانجليزيه </label>
							<div>
								<input type="text" class="form-control @error('title_en') is-invalid @enderror " name='title_en' value="{{ $case_step->getTranslation('title' , 'en') }}" >
								@error('title_en')
								<small class="form-hint text-danger"> {{ $message }} </small>
								@enderror
							</div>
						</div>


						<div class="mb-3">
							<label class="form-label required"> المحتوى بالعربيه </label>
							<div>
								<input type="text" class="form-control @error('content_ar') is-invalid @enderror " name='content_ar' value="{{ $case_step->getTranslation('content' , 'ar') }}" >
								@error('content_ar')
								<small class="form-hint text-danger"> {{ $message }} </small>
								@enderror
							</div>
						</div>


						<div class="mb-3">
							<label class="form-label required"> المحتوى بالانجليزيه </label>
							<div>
								<input type="text" class="form-control @error('content_en') is-invalid @enderror " name='content_en' value="{{ $case_step->getTranslation('content' , 'en') }}" >
								@error('content_en')
								<small class="form-hint text-danger"> {{ $message }} </small>
								@enderror
							</div>
						</div>


					</div>
					<div class="card-footer text-end">
						<div class='d-flex' >
							<a href="{{ route('board.case_steps.index') }}" class="btn btn-link"> تراجع </a>
							<button type="submit" class="btn btn-primary ms-auto">تعديل</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection