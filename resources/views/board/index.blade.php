@extends('board.layouts.master')

@section('page_content')

<div class='page-body'>
	<div class="container-xl">

		<div class="row row-deck row-cards">
			<h2> مرحبا بك فى لوحه تحكم الموقع </h2>
		</div>

		<div class="row row-deck row-cards">
			<div class="col-12">
				<div class="row row-cards">

					<div class="col-sm-6 col-lg-3">
						<div class="card card-sm">
							<div class="card-body">
								<div class="row align-items-center">
									<div class="col-auto">
										<span class="bg-primary text-white avatar">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
										</span>
									</div>
									<div class="col">
										<div class="font-weight-medium">
											{{ $admins_count }} 
										</div>
										<div class="text-muted">
											مشرف
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-lg-3">
						<div class="card card-sm">
							<div class="card-body">
								<div class="row align-items-center">
									<div class="col-auto">
										<span class="bg-primary text-white avatar">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chart-pie-2"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M12 3v9h9" /><path d="M3 12a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /></svg>
										</span>
									</div>
									<div class="col">
										<div class="font-weight-medium">
											{{ $categories_count }} 
										</div>
										<div class="text-muted">
											تصنيف مضاف
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			
					<div class="col-sm-6 col-lg-3">
						<div class="card card-sm">
							<div class="card-body">
								<div class="row align-items-center">
									<div class="col-auto">
										<span class="bg-twitter text-white avatar">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-book"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0" /><path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" /><path d="M3 6l0 13" /><path d="M12 6l0 13" /><path d="M21 6l0 13" /></svg>
										</span>
									</div>
									<div class="col">
										<div class="font-weight-medium">
											{{ $topics_count }}
										</div>
										<div class="text-muted">
											مقال مضاف
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-lg-3">
						<div class="card card-sm">
							<div class="card-body">
								<div class="row align-items-center">
									<div class="col-auto">
										<span class="bg-twitter text-white avatar">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-server-bolt"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M3 7a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v2a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3" /><path d="M15 20h-9a3 3 0 0 1 -3 -3v-2a3 3 0 0 1 3 -3h12" /><path d="M7 8v.01" /><path d="M7 16v.01" /><path d="M20 15l-2 3h3l-2 3" /></svg>
										</span>
									</div>
									<div class="col">
										<div class="font-weight-medium">
											{{ $services_count }}
										</div>
										<div class="text-muted">
											خدمه مضاف
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				

				</div>
			</div>
		</div>
		<hr>
		<div class="row row-deck row-cards">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<ul class="nav nav-tabs card-header-tabs nav-fill" data-bs-toggle="tabs">
							<li class="nav-item">
								<a href="#tabs-home-7" class="nav-link active " data-bs-toggle="tab">
									<span> المقالات الاكثر مشاهده </span>
									<span class="badge bg-blue text-blue-fg ms-2   ">10</span>
								</a>
							</li>

						</ul>
					</div>
						<div class="card-body">
						<div class="tab-content">
						
							<div class="tab-pane active" id="tabs-profile-7">
								<div>
									<table class="table table-vcenter card-table">
										<thead>
											<tr>
												<th> عنوان المقال  </th>
												<th> عدد المشاهدات </th>
												<th> تاريخ الاضافه </th>
												<th class="w-1"></th>
											</tr>
										</thead>
										<tbody>
											@foreach ($most_viewd_topics as $most_viewd_topic)
											<tr>
												<td> {{ $most_viewd_topic->title }} </td>
												<td >
													{{ $most_viewd_topic->views_count }}  
													<span class="text-muted"> مشاهده </span>
												</td>
												<td >
													{{ $most_viewd_topic->created_at }} - <span class="text-muted"> {{ $most_viewd_topic->created_at->diffForHumans() }} </span>
												</td>
												<td>
													<a href="{{ route('board.topics.show' , $most_viewd_topic ) }}"> شاهد </a>
												</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						
						</div>
					</div> 
				</div>
			</div>
		</div>
	</div>
</div>

@endsection