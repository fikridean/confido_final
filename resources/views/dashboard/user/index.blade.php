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
																				class="brand-image img-circle elevation-3">
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
																																<li class="breadcrumb-item active">Users</li>
																												</ol>
																								</div>
																				</div>
																</div><!-- /.container-fluid -->
												</section>

												<!-- Main content -->
												<section class="content">
																<div class="container-fluid">
																				<div class="row">
																								<div class="col-12">
																												@if (session('delete'))
																																<div class="alert alert-success">
																																				{{ session('delete') }}
																																</div>
																												@endif

																												@if (session('update'))
																																<div class="alert alert-success">
																																				{{ session('update') }}
																																</div>
																												@endif

																												<div class="card">
																																<div class="card-header">
																																				<div class="row">
																																								<div class="col-lg-12 col-sm-12 d-flex justify-content-between">
																																												<h3 class="card-title">Data Seluruh User</h3>
																																								</div>
																																				</div>


																																</div>
																																<!-- /.card-header -->
																																<div class="card-body">
																																				<table id="example1" class="table table-bordered table-striped">
																																								<thead>
																																												<tr>
																																																<th>Nama</th>
																																																<th>Email</th>
																																																<th>Email Verifikasi</th>
																																																<th>Nomor Telepon</th>
																																																<th>Jenis Kelamin</th>
																																																<th>Foto Profil</th>
																																																<th>Role</th>
																																																<th>Action</th>
																																												</tr>
																																								</thead>
																																								<tbody>
																																												@foreach ($users as $user)
																																																<tr>
																																																				<td>
																																																								@isset($user->name)
																																																												{{ $user->name }}
																																																								@endisset
																																																				</td>
																																																				<td>
																																																								@isset($user->email)
																																																												{{ $user->email }}
																																																								@endisset
																																																				</td>
																																																				<td>
																																																								@isset($user->email_verified_at)
																																																												{{ $user->email_verified_at }}
																																																								@else
																																																												Belum terverifikasi
																																																								@endisset
																																																				</td>
																																																				<td>
																																																								@isset($user->phone_number)
																																																												{{ $user->phone_number }}
																																																								@else
																																																												Belum di set
																																																								@endisset

																																																				</td>
																																																				<td>
																																																								@if ($user->gender == 1)
																																																												Laki-laki
																																																								@elseif($user->gender == 0)
																																																												Perempuan
																																																								@else
																																																												belum di set
																																																								@endif
																																																				</td>
																																																				<td>
																																																								@isset($user->image)
																																																												<img style="width: 100px; height: 100px"
																																																																src="{{ asset($user->image) }}" alt="{{ $user->name }}">
																																																								@else
																																																												Belum di set
																																																								@endisset

																																																				</td>
																																																				<td>
																																																								@isset($user->role)
																																																												{{ $user->role }}
																																																								@endisset
																																																				</td>
																																																				<td>

																																																								<button class="btn btn-primary btn-xs" type="button"
																																																												data-toggle="modal"
																																																												data-target="#modal-user-{{ $user->id }}">Ubah
																																																								</button>

																																																								<form action="/users/{{ $user->id }}" method="POST">
																																																												@csrf
																																																												@method('DELETE')
																																																												<button class="btn btn-danger btn-xs"
																																																																type="submit">Hapus</button>
																																																								</form>
																																																				</td>


																																																				<div class="modal fade" id="modal-user-{{ $user->id }}">
																																																								<div class="modal-dialog modal-lg">
																																																												<div class="modal-content">
																																																																<div class="modal-header">
																																																																				<h4 class="modal-title">Form Ubah Data User</h4>
																																																																				<button type="button" class="close"
																																																																								data-dismiss="modal" aria-label="Close">
																																																																								<span aria-hidden="true">&times;</span>
																																																																				</button>
																																																																</div>

																																																																<form action="/users/{{ $user->id }}" method="POST"
																																																																				enctype="multipart/form-data">
																																																																				@csrf
																																																																				@method('PUT')

																																																																				<div class="modal-body">
																																																																								<div class="form-group row">
																																																																												<label for="name"
																																																																																class="col-sm-2 col-form-label">Nama:</label>
																																																																												<input type="text" class="form-control1"
																																																																																value="{{ old('name', $user->name) }}"
																																																																																name="name" required>
																																																																								</div>

																																																																								<div class="form-group row">
																																																																												<label for="email"
																																																																																class="col-sm-2 col-form-label">Email:</label>
																																																																												<input type="email" class="form-control1"
																																																																																value="{{ old('email', $user->email) }}"
																																																																																disabled>
																																																																								</div>

																																																																								<div class="form-group row">
																																																																												<label for="phone_number"
																																																																																class="col-sm-2 col-form-label">Nomor
																																																																																Telepon:</label>
																																																																												<input type="text" class="form-control1"
																																																																																value="{{ old('phone_number', $user->phone_number) }}"
																																																																																name="phone_number" required>
																																																																								</div>

																																																																								<div class="form-group row">
																																																																												<label for="gender"
																																																																																class="col-sm-2 col-form-label">Jenis:</label>
																																																																												<select name="gender" id="gender"
																																																																																class="form-control1" required>
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
																																																																												<label for="image"
																																																																																class="col-sm-2 col-form-label">Poto
																																																																																Profil:</label>

																																																																												<img style="max-width: 100px; max-height: 100px"
																																																																																src="{{ asset($user->image) }}"
																																																																																alt="User Image">

																																																																												<input type="file" class="form-control1"
																																																																																name="image">
																																																																								</div>


																																																																				</div>


																																																																				<div class="modal-footer">

																																																																								<input type="submit" class="btn btn-success" />

																																																																				</div>
																																																																</form>
																																																												</div>

																																																								</div>
																																																				</div>
																																																</tr>
																																												@endforeach

																																								</tbody>
																																				</table>
																																</div>
																																<!-- /.card-body -->
																												</div>
																												<!-- /.card -->
																								</div>
																								<!-- /.col -->
																				</div>
																				<!-- /.row -->
																</div>
																<!-- /.container-fluid -->
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
