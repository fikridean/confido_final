@extends('layouts.front')

@section('front')
				<div class="wrapper">
								<!-- Navbar -->
								<x-front-dashboard-navbar></x-front-dashboard-navbar>
								<!-- /.Navbar -->

								<!-- Main Sidebar Container -->
								<aside class="main-sidebar sidebar-dark-primary elevation-4">
												<!-- Brand Logo -->
												<a href="/dashboard" class="brand-link">
																<img src="{{ asset('dist/img/ConfidoLogo.png') }}" alt="Confido Logo"
																				class="brand-image img-circle elevation-3" style="opacity: .8">
																<span class="brand-text font-weight-light">Confido</span>
												</a>

												<!-- Sidebar Menu -->
												<x-front-sidemenu></x-front-sidemenu>
												<!-- /.sidebar Menu -->
								</aside>

								<!-- Content Wrapper. Contains page content -->
								<div class="content-wrapper">
												<!-- Content Header (Page header) -->
												<section class="content-header">
																<div class="container-fluid">
																				<div class="row mb-2">
																								<div class="col-sm-6">
																												<h1>Users</h1>
																								</div>
																								<div class="col-sm-6">
																												<ol class="breadcrumb float-sm-right">
																																<li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
																																<li class="breadcrumb-item active">Profile</li>
																												</ol>
																								</div>
																				</div>
																</div><!-- /.container-fluid -->
												</section>

												<!-- Main content -->
												<section class="content">
																<div class="container-fluid">
																				<div class="row">
																								@if (session('sameTicket'))
																												<div class="alert alert-danger">
																																{{ session('sameTicket') }}
																												</div>
																								@endif
																				</div>
																				<div class="row">
																								<div class="col-md-3">

																												<!-- Profile Image -->
																												<div class="card card-primary @can('isAdmin') card-danger @endcan card-outline">
																																<div class="card-header box-profile d-flex flex-column align-items-center">
																																				<div class="text-center">
																																								<img class="profile-user-img img-fluid img-circle" src="{{ asset($user->image) }}"
																																												alt="{{ $user->name }}" style="width: 100px; height: 100px">
																																				</div>

																																				<h3 class="mt-3 profile-username text-center">{{ $user->name }}</h3>

																																				<h6
																																								class="mt-3 text-center bg-primary @can('isAdmin') bg-danger @endcan rounded w-50 h-100">
																																								{{ $user->role }} </h6>

																																</div>
																																<!-- /.card-body -->

																																<div class="card-body">
																																				<p class="text-muted text-center">{{ $user->email }} &#65312;</p>

																																				<p class="text-muted text-center">
																																								@if ($user->email_verified_at)
																																												Email telah terverifikasi <span
																																																style="color: green; font-size: 20px">&#10003;</span>
																																								@else
																																												Email belum terverifikasi <span
																																																style="color: red; font-size: 20px">&#10540;</span>
																																								@endif
																																				</p>

																																				<p class="text-muted text-center">
																																								@if ($user->phone_number)
																																												{{ $user->phone_number }} &#128383;
																																								@else
																																												Nomor telepon belum di set
																																								@endif
																																				</p>

																																				<p class="text-muted text-center">
																																								@if ($user->gender == 1)
																																												Laki-laki
																																								@elseif($user->gender == 0)
																																												Perempuan
																																								@else
																																												belum di set
																																								@endif
																																				</p>

																																				<div class="card-footer">
																																								<div class="row">
																																												<div class="col-sm-12 d-flex justify-content-center">
																																																<form action="{{ route('logout') }}" method="POST">
																																																				@csrf
																																																				<button class="btn btn-danger w-100">Logout</button>
																																																</form>
																																												</div>
																																								</div>
																																				</div>
																																</div>
																												</div>
																												<!-- /.card -->


																												<!-- /.card -->
																								</div>
																								<!-- /.col -->
																								<div class="col-md-9">
																												<div class="card">
																																<div class="card-body">
																																				<div class="tab-content">
																																								<div class="active tab-pane" id="settings">
																																												<form action="/users/{{ $user->id }}" method="POST"
																																																enctype="multipart/form-data">
																																																@csrf
																																																@method('PUT')

																																																<div class="modal-body">
																																																				<div class="form-group row">
																																																								<label for="name" class="col-sm-2 col-form-label">Nama:</label>
																																																								<input type="text" class="form-control col-sm-10"
																																																												value="{{ old('name', $user->name) }}" name="name" required>
																																																				</div>

																																																				<div class="form-group row">
																																																								<label for="email" class="col-sm-2 col-form-label">Email:</label>
																																																								<input type="email" class="form-control col-sm-10"
																																																												value="{{ old('email', $user->email) }}" disabled>
																																																				</div>

																																																				<div class="form-group row">
																																																								<label for="phone_number" class="col-sm-2 col-form-label">Nomor
																																																												Telepon:</label>
																																																								<input type="text" class="form-control col-sm-10"
																																																												value="{{ old('phone_number', $user->phone_number) }}"
																																																												name="phone_number" required>
																																																				</div>

																																																				<div class="form-group row">
																																																								<label for="gender" class="col-sm-2 col-form-label">Jenis:</label>
																																																								<select name="gender" id="gender" class="form-control col-sm-10"
																																																												required>
																																																												<option selected value="" disabled>
																																																																Pilih Jenis
																																																												</option>
																																																												@if ($user->gender == 1)
																																																																<option value=1 selected>
																																																																				Laki-laki
																																																																</option>
																																																																<option value=0>
																																																																				Perempuan
																																																																</option>
																																																												@elseif ($user->gender == 0)
																																																																<option value=1>
																																																																				Laki-laki
																																																																</option>
																																																																<option value=0 selected>
																																																																				Perempuan
																																																																</option>
																																																												@else
																																																																<option value=1>
																																																																				Laki-laki
																																																																</option>
																																																																<option value=0>
																																																																				Perempuan
																																																																</option>
																																																												@endif

																																																								</select>
																																																				</div>

																																																				<div class="form-group column">
																																																								<label for="image" class="col-sm-2 col-form-label">Poto
																																																												Profil:</label>

																																																								<img style="max-width: 100px" src="{{ asset($user->image) }}"
																																																												alt="User Image">

																																																								<input type="file" class="form-control1" name="image">
																																																				</div>


																																																</div>


																																																<div class="modal-footer">

																																																				<input type="submit" class="btn btn-success" />

																																																</div>
																																												</form>
																																								</div>
																																								<!-- /.tab-pane -->
																																				</div>
																																				<!-- /.tab-content -->
																																</div><!-- /.card-body -->
																												</div>
																												<!-- /.card -->
																								</div>
																								<!-- /.col -->
																				</div>
																				<!-- /.row -->
																</div><!-- /.container-fluid -->
												</section>
												<!-- /.content -->
								</div>
								<!-- /.content-wrapper -->
								<footer class="main-footer">
												<strong>Confido &copy; 2022.</strong>
												All rights reserved.
												<div class="float-right d-none d-sm-inline-block">
												</div>
								</footer>

								<!-- Control Sidebar -->
								<aside class="control-sidebar control-sidebar-dark">
												<!-- Control sidebar content goes here -->
								</aside>
								<!-- /.control-sidebar -->
				</div>
				<!-- ./wrapper -->
@endsection
