@extends('admin.layouts.app')

@section('content')
	<div class="wrapper">

		<x-admin-header/>

		<div class="content-wrapper">
			<div class="container-full">
				<div class="content-header">
					<div class="d-flex align-items-center">
						<div class="me-auto">
							<h4 class="page-title">Patients</h4>
							<div class="d-inline-block align-items-center">
								<nav>
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="#"><i class="mdi mdi-home-outline"></i></a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">Patients</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</div>

				<section class="content">
					<div class="row">
						<div class="col-12">
							<div class="box">
								<div class="box-body">
									<div class="rounded table-responsive card-table">
										<table class="table border-no" id="example1">
											<thead>
											<tr>
												<th>Patient ID</th>
												<th>Date Check In</th>
												<th>Patient Name</th>
												<th>Doctor Assgined</th>
												<th>Status</th>
												<th>Room No</th>
												<th></th>
											</tr>
											</thead>
											<tbody>
											{{-- repeat --}}
											@foreach($orders as $order)
											<tr class="hover-primary">
												<td>{{ $order->id }}</td>
												<td>{{ $order->time }}</td>
												<td>{{ \App\Models\User::where('id', $order->user_id)->first()->name }}</td>
												<td>{{ \App\Models\User::where('id', $order->doctor_id)->first()->name }}</td>
												<td><span class="badge badge-danger-light">New Patient</span></td>
												<td>FF-103</td>
												<td>
													<div class="btn-group">
														<a class="hover-primary dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="#">View Details</a>
															<a class="dropdown-item" href="#">Edit</a>
															<a class="dropdown-item" href="#">Delete</a>
														</div>
													</div>
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
				</section>
			</div>
		</div>

		<div class="control-sidebar-bg"></div>
	</div>

@endsection
