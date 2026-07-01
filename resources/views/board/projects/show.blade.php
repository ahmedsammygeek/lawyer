@extends('board.layouts.master')

@section('page_content')
<div class="page-header d-print-none">
	<div class="container-xl">
		<div class="row g-2 align-items-center">
			<div class="col">
				<!-- Page pre-title -->
				<div class="page-pretitle">
					عرض تفاصيل
				</div>
				<h2 class="page-title">
					المشاريع
				</h2>
			</div>
			<!-- Page title actions -->
			<div class="col-auto ms-auto d-print-none">
				<div class="btn-list">

					<a href="{{ route('board.projects.index') }}" class="btn btn-primary d-none d-sm-inline-block" >
						<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-discount-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
							<path d="M9 15l6 -6"></path>
							<circle cx="9.5" cy="9.5" r=".5" fill="currentColor"></circle>
							<circle cx="14.5" cy="14.5" r=".5" fill="currentColor"></circle>
							<path d="M5 7.2a2.2 2.2 0 0 1 2.2 -2.2h1a2.2 2.2 0 0 0 1.55 -.64l.7 -.7a2.2 2.2 0 0 1 3.12 0l.7 .7a2.2 2.2 0 0 0 1.55 .64h1a2.2 2.2 0 0 1 2.2 2.2v1a2.2 2.2 0 0 0 .64 1.55l.7 .7a2.2 2.2 0 0 1 0 3.12l-.7 .7a2.2 2.2 0 0 0 -.64 1.55v1a2.2 2.2 0 0 1 -2.2 2.2h-1a2.2 2.2 0 0 0 -1.55 .64l-.7 .7a2.2 2.2 0 0 1 -3.12 0l-.7 -.7a2.2 2.2 0 0 0 -1.55 -.64h-1a2.2 2.2 0 0 1 -2.2 -2.2v-1a2.2 2.2 0 0 0 -.64 -1.55l-.7 -.7a2.2 2.2 0 0 1 0 -3.12l.7 -.7a2.2 2.2 0 0 0 .64 -1.55v-1"></path>
						</svg>
						عرض كافه المشاريع
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
				<div class="card">
					<div class="card-body">
						<table class="table table-responsive table-bordered">
							<tbody>
								<tr>
									<th> تاريخ الاضافه </th>
									<td> {{ $project->created_at }} <span class="text-muted"> {{ $project->created_at->diffForHumans() }} </span> </td>
								</tr>
								<tr>
									<th>  حاله المشروع </th>
									<td> 
										@switch($project->is_active)
										@case(1)
										<span class="badge bg-success"> فعال </span>
										@break
										@case(0)
										<span class="badge bg-danger"> غير فعال </span>
										@break
										@endswitch
									</td>
								</tr>
								
								<tr>
									<th> تم الاضافه بواسطه </th>
									<td> {{ $project->user?->name }}  </td>
								</tr>

								<tr>
									<th> العنوان بالعربيه </th>
									<td> {{ $project->getTranslation('name' , 'ar') }}  </td>
								</tr>
								<tr>
									<th> تفاصيل المشروع </th>
									<td> {{ $project->getTranslation('content' , 'ar') }}  </td>
								</tr>

								<tr>
									<th> التصنيف </th>
									<td> {{ $project->category?->name }}  </td>
								</tr>
								<tr>
									<th> المنطقه </th>
									<td> {{ $project->area?->name }}  </td>
								</tr>

								<tr>
									<th>  النوع </th>
									<td> 
										@switch($project->type)
										@case(1)
										<span class="badge bg-success"> للايجار </span>
										@break
										@case(2)
										<span class="badge bg-info"> للبيع </span>
										@break
										@endswitch
									</td>
								</tr>

								<tr>
									<th> العنوان التفصيلى </th>
									<td> {{ $project->address }}  </td>
								</tr>
								<tr>
									<th> الغرف </th>
									<td> {{ $project->rooms }}  </td>
								</tr>
								<tr>
									<th> الحمامات </th>
									<td> {{ $project->bathrooms }}  </td>
								</tr>
								<tr>
									<th> السعر </th>
									<td> {{ $project->price }}  </td>
								</tr>
								<tr>
									<th> الماسحه الكليه </th>
									<td> {{ $project->total_area }}  </td>
								</tr>
								<tr>
									<th> الجراج </th>
									<td> {{ $project->garage }}  </td>
								</tr>
								<tr>
									<th> بدروم </th>
									<td> {{ $project->basement }}  </td>
								</tr>
								<tr>
									<th> حمام السباحه </th>
									<td> {{ $project->swimming_pool }}  </td>
								</tr>
								<tr>
									<th> رابط فديو يوتيوب </th>
									<td> {{ $project->youtube_link }}  </td>
								</tr>


								<tr>
									<th> صوره المشروع الرئيسيه </th>
									<td> 
										<a class="avatar" data-fslightbox="gallery" href="{{ Storage::url('projects/'.$project->image) }}">
											<img  src="{{ Storage::url('projects/'.$project->image) }}" alt="">
										</a>
									</td>
								</tr>								
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title"> صور المشروع الاضافيه </h3>
					</div>
					<div class="card-body">
						<div id="carousel-indicators-thumb" class="carousel slide carousel-fade" data-bs-ride="carousel">
							<div class="carousel-indicators carousel-indicators-thumb">
								

								@php
								$i = 0;
								@endphp
								@foreach ($project->images()->where('type' , 'image' )->get() as $project_image)
								<button type="button" data-bs-target="#carousel-indicators-thumb" data-bs-slide-to="{{ $i }}" class=" ratio ratio-4x3  {{ $i == 0 ? 'active' : '' }}" style="background-image: url({{ Storage::url('projects/'.$project_image->image) }})">
									
								</button>
								@php
									$i++;
								@endphp
								@endforeach
							</div>
							<div class="carousel-inner">
								@php
								$i = 1;
								@endphp
								@foreach ($project->images()->where('type' , 'image' )->get() as $project_image)
								<div class="carousel-item {{ $i == 1 ? 'active' : '' }}">
									<img class="d-block w-100" alt="" src="{{ Storage::url('projects/'.$project_image->image) }}">
								</div>
								@php
									$i++;
								@endphp
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title"> صور slider </h3>
					</div>
					<div class="card-body">
						<div id="carousel-indicators-thumb" class="carousel slide carousel-fade" data-bs-ride="carousel">
							<div class="carousel-indicators carousel-indicators-thumb">
								

								@php
								$i = 0;
								@endphp
								@foreach ($project->images()->where('type' , 'slide' )->get() as $project_image)
								<button type="button" data-bs-target="#carousel-indicators-thumb" data-bs-slide-to="{{ $i }}" class=" ratio ratio-4x3  {{ $i == 0 ? 'active' : '' }}" style="background-image: url({{ Storage::url('projects/'.$project_image->image) }})">
									
								</button>
								@php
									$i++;
								@endphp
								@endforeach
							</div>
							<div class="carousel-inner">
								@php
								$i = 1;
								@endphp
								@foreach ($project->images()->where('type' , 'slide' )->get() as $project_image)
								<div class="carousel-item {{ $i == 1 ? 'active' : '' }}">
									<img class="d-block w-100" alt="" src="{{ Storage::url('projects/'.$project_image->image) }}">
								</div>
								@php
									$i++;
								@endphp
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('board_assets/dist/libs/fslightbox/index.js?1684106062') }}" defer></script>
@endsection