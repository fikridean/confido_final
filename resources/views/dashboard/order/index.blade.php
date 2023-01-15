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
																												<h1>Riwayat Pesanan</h1>
																								</div>
																								<div class="col-sm-6">
																												<ol class="breadcrumb float-sm-right">
																																<li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
																																<li class="breadcrumb-item active">Riwayat Pesanan</li>
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
																												@if (session('hapus'))
																																<div class="alert alert-success" role="alert">
																																				{{ session('hapus') }}
																																</div>
																												@endif

																												@if (session('lapor'))
																																<div class="alert alert-success" role="alert">
																																				{{ session('lapor') }}
																																</div>
																												@endif

																												@if (session('paymentCheckFailed'))
																																<div class="alert alert-warning" role="alert">
																																				{{ session('paymentCheckFailed') }}
																																</div>
																												@endif

																												<div class="card">
																																<div class="card-header">
																																				<h3 class="card-title">Data Riwayat Pesanan</h3>
																																</div>

																																<!-- /.card-header -->
																																<div class="card-body">
																																				<table id="example1" class="table table-bordered table-striped">
																																								<thead>

																																												<tr>
																																																<th>No</th>
																																																<th>ID Booking</th>
																																																<th>Nama</th>
																																																<th>Maskapai</th>
																																																<th>Jenis</th>
																																																<th>Rute</th>
																																																<th>Jumlah</th>
																																																<th>Pulang-Pergi</th>
																																																<th>Tanggal</th>
																																																<th>Action</th>
																																												</tr>

																																								</thead>
																																								<tbody>
																																												@foreach ($orders as $order)
																																																<tr>
																																																				<td>
																																																								{{ $loop->iteration }}
																																																				</td>
																																																				<td>
																																																								@isset($order->order_code)
																																																												{{ $order->order_code }}
																																																								@else
																																																												Tidak dapat ditampilkan
																																																								@endisset
																																																				</td>
																																																				<td>
																																																								@isset($order->user->name)
																																																												{{ $order->user->name }}
																																																								@else
																																																												Tidak dapat ditampilkan
																																																								@endisset

																																																				</td>
																																																				<td>
																																																								@isset($order->ticket->airline->name)
																																																												{{ $order->ticket->airline->name }}
																																																								@else
																																																												Tidak dapat ditampilkan
																																																								@endisset

																																																				</td>
																																																				<td>
																																																								@isset($order->ticket->type->name)
																																																												{{ $order->ticket->type->name }}
																																																								@else
																																																												Tidak dapat ditampilkan
																																																								@endisset

																																																				</td>
																																																				<td>
																																																								@isset($order->ticket->track->from_route)
																																																												@isset($order->ticket->track->to_route)
																																																																{{ $order->ticket->track->from_route }} -
																																																																{{ $order->ticket->track->to_route }}
																																																												@endisset
																																																								@else
																																																												Tidak dapat ditampilkan
																																																								@endisset

																																																				</td>
																																																				<td>
																																																								@isset($order->amount)
																																																												{{ $order->amount }}
																																																								@else
																																																												Tidak dapat ditampilkan
																																																								@endisset

																																																				</td>
																																																				<td>
																																																								@isset($order->round_trip)
																																																												Ya
																																																								@else
																																																												Tidak
																																																								@endisset

																																																				</td>
																																																				<td>
																																																								@isset($order->updated_at)
																																																												{{ $order->updated_at }}
																																																								@else
																																																												Tidak dapat ditampilkan
																																																								@endisset

																																																				</td>
																																																				<td>
																																																								@can('isAdmin')
																																																												<a href="/print?order={{ $order->order_code }}" target="_blank">
																																																																<button class="btn btn-success btn-xs"
																																																																				type="button">Cetak</button>
																																																												</a>
																																																								@else
																																																												@if ($order->transaction->status == true)
																																																																<a href="/print?order={{ $order->order_code }}"
																																																																				target="_blank">
																																																																				<button class="btn btn-success btn-xs"
																																																																								type="button">Cetak</button>
																																																																</a>
																																																												@endif
																																																								@endcan

																																																								@can('isCustomer')
																																																												@if ($order->transaction->status == false)
																																																																<form action="orders/{{ $order->id }}" method="POST"
																																																																				onsubmit="return confirm('Yakin ingin menghapus?');">
																																																																				@csrf
																																																																				@method('DELETE')
																																																																				<button class="btn btn-danger btn-xs" type="submit">
																																																																								@can('is_admin')
																																																																												Hapus
																																																																								@else
																																																																												Batal
																																																																								@endcan
																																																																				</button>
																																																																</form>
																																																												@endif
																																																								@else
																																																												<form action="orders/{{ $order->id }}" method="POST"
																																																																onsubmit="return confirm('Yakin ingin menghapus?');">
																																																																@csrf
																																																																@method('DELETE')
																																																																<button class="btn btn-danger btn-xs" type="submit">
																																																																				@can('is_admin')
																																																																								Hapus
																																																																				@else
																																																																								Batal
																																																																				@endcan
																																																																</button>
																																																												</form>
																																																								@endcan


																																																								<button class="btn btn-warning btn-xs position-relative"
																																																												type="button" data-toggle="modal"
																																																												data-target="#modal-lapor-{{ $order->id }}"
																																																												id="button-{{ $order->id }}">Lapor


																																																												@can('isCustomer')
																																																																@if ($order->complaints->where('seenForAdmin', 0)->count() != 0)
																																																																				<span
																																																																								class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
																																																																								{{ $order->complaints->where('seenForAdmin', 0)->count() }}
																																																																				</span>
																																																																@endif
																																																												@else
																																																																@if ($order->complaints->where('seen', 0)->count() != 0)
																																																																				<span
																																																																								class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
																																																																								{{ $order->complaints->where('seen', 0)->count() }}
																																																																				</span>
																																																																@endif
																																																												@endcan


																																																								</button>


																																																								<div class="modal fade" id="modal-lapor-{{ $order->id }}">
																																																												<div class="modal-dialog modal-lg">
																																																																<div class="modal-content">
																																																																				<div class="modal-header">
																																																																								<h4 class="modal-title">Form Pengaduan</h4>
																																																																								<button type="button" class="close"
																																																																												data-dismiss="modal" aria-label="Close">
																																																																												<span aria-hidden="true">&times;</span>
																																																																								</button>
																																																																				</div>

																																																																				<div class="modal-body d-flex flex-column">
																																																																								@foreach ($order->complaints as $complaint)
																																																																												<div
																																																																																class="d-flex flex-row align-items-center mb-2 @if ($complaint->user->id == Auth::id()) justify-content-end @endif">
																																																																																<img src="{{ asset($complaint->user->image) }}"
																																																																																				alt="{{ $complaint->user->name }}"
																																																																																				style="max-width: 30px; max-height: 30px"
																																																																																				class="rounded-circle mx-2">

																																																																																<label
																																																																																				class="my-1">{{ $complaint->user->name }}</label>
																																																																												</div>
																																																																												<p
																																																																																class="border rounded mx-2 mb-4 p-2 fw-normal">
																																																																																{{ $complaint->body }}</p>
																																																																								@endforeach
																																																																				</div>

																																																																				<form action="/complaints" method="POST">
																																																																								@csrf
																																																																								@method('POST')

																																																																								<div class="modal-body">
																																																																												<div class="row">
																																																																																<label for="phone_number"
																																																																																				class="col-sm-3 col-form-label">Kirim
																																																																																				pesan
																																																																																				baru: </label>
																																																																																<input type="text"
																																																																																				class="form-control col-sm-7"
																																																																																				name="body" required>
																																																																																<input type="hidden"
																																																																																				value={{ $order->id }}
																																																																																				name="order_id">
																																																																																<input type="submit"
																																																																																				class="btn btn-success col-sm-2"
																																																																																				name="submit" value="Submit" />
																																																																												</div>
																																																																								</div>
																																																																				</form>
																																																																</div>
																																																												</div>
																																																								</div>
																																																				</td>
																																																</tr>
																																												@endforeach
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
