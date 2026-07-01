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

					<div class="col-sm-6 col-lg-2">
						<div class="card card-sm">
							<div class="card-body">
								<div class="row align-items-center">
									<div class="col-auto">
										<span class="bg-primary text-white avatar">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-armchair-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
												<path d="M5 10v-4a3 3 0 0 1 3 -3h8a3 3 0 0 1 3 3v4"></path>
												<path d="M16 15v-2a3 3 0 1 1 3 3v3h-14v-3a3 3 0 1 1 3 -3v2"></path>
												<path d="M8 12h8"></path>
												<path d="M7 19v2"></path>
												<path d="M17 19v2"></path>
											</svg>
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

					<div class="col-sm-6 col-lg-2">
						<div class="card card-sm">
							<div class="card-body">
								<div class="row align-items-center">
									<div class="col-auto">
										<span class="bg-primary text-white avatar">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-armchair-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
												<path d="M5 10v-4a3 3 0 0 1 3 -3h8a3 3 0 0 1 3 3v4"></path>
												<path d="M16 15v-2a3 3 0 1 1 3 3v3h-14v-3a3 3 0 1 1 3 -3v2"></path>
												<path d="M8 12h8"></path>
												<path d="M7 19v2"></path>
												<path d="M17 19v2"></path>
											</svg>
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
			
					<div class="col-sm-6 col-lg-2">
						<div class="card card-sm">
							<div class="card-body">
								<div class="row align-items-center">
									<div class="col-auto">
										<span class="bg-twitter text-white avatar">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-bank" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
												<path d="M3 21l18 0"></path>
												<path d="M3 10l18 0"></path>
												<path d="M5 6l7 -3l7 3"></path>
												<path d="M4 10l0 11"></path>
												<path d="M20 10l0 11"></path>
												<path d="M8 14l0 3"></path>
												<path d="M12 14l0 3"></path>
												<path d="M16 14l0 3"></path>
											</svg>
										</span>
									</div>
									<div class="col">
										<div class="font-weight-medium">
											{{ $products_count }}
										</div>
										<div class="text-muted">
											منتج مضاف
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
									<span> المنتجات الاكثر مشاهده </span>
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
												<th> اسم الخدمه </th>
												<th> عدد مرات المشاهده </th>
												<th class="w-1"></th>
											</tr>
										</thead>
										<tbody>
											@foreach ($most_viewd_products as $most_viewd_product)
											<tr>
												<td> {{ $most_viewd_product->name }} </td>
												<td class="text-secondary">
													{{ $most_viewd_product->views_count }}
												</td>
												<td>
													<a href="{{ route('board.products.show' , $most_viewd_product ) }}"> شاهد </a>
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