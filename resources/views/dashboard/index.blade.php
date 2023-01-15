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
												<div class="content-header">
																<div class="container-fluid">
																				<div class="row mb-2">
																								<div class="col-sm-6">
																												<h1 class="m-0">Dashboard</h1>
																								</div><!-- /.col -->
																								<div class="col-sm-6">
																												<ol class="breadcrumb float-sm-right">
																																<li class="breadcrumb-item"><a href="#">Home</a></li>
																																<li class="breadcrumb-item active">Dashboard</li>
																												</ol>
																								</div><!-- /.col -->
																				</div><!-- /.row -->
																</div><!-- /.container-fluid -->
												</div>
												<!-- /.content-header -->

												<!-- Main content -->
												<section class="content">
																<div class="container-fluid">
																				<!-- Small boxes (Stat box) -->
																				@can('isAdmin')
																								<div class="row">
																												<div class="col-lg-3 col-6">
																																<!-- small box -->
																																<div class="small-box bg-info">
																																				<div class="inner">
																																								<h3>Tiket</h3>
																																								<p>{{ $tickets->count() }} tiket telah terdaftar!</p>
																																								<br>
																																				</div>
																																				<div class="icon">
																																								<i class="ion ion-bag"></i>
																																				</div>
																																				<a href="/tickets" class="small-box-footer">Klik untuk melihat daftar harga tiket <i
																																												class="fas fa-arrow-circle-right"></i></a>
																																</div>
																												</div>
																												<!-- ./col -->
																												<div class="col-lg-3 col-6">
																																<!-- small box -->
																																<div class="small-box bg-success">
																																				<div class="inner">
																																								<h3>Pesanan</h3>
																																								<p>Terdapat pesanan lebih dari {{ $orders->count() - 1 }}</p>
																																								<br>
																																				</div>
																																				<div class="icon">
																																								<i class="ion ion-stats-bars"></i>
																																				</div>
																																				<a href="#" class="small-box-footer">Klik untuk melihat daftar pesanan <i
																																												class="fas fa-arrow-circle-right"></i></a>
																																</div>
																												</div>
																												<!-- ./col -->
																												<div class="col-lg-3 col-6">
																																<!-- small box -->
																																<div class="small-box bg-warning">
																																				<div class="inner">
																																								<h3>Transaksi</h3>

																																								<p>Terdapat {{ $transactions->count() }} yang belum di konfirmasi/setujui</p>
																																								<br>
																																				</div>
																																				<div class="icon">
																																								<i class="ion ion-person-add"></i>
																																				</div>
																																				<a href="/transactions" class="small-box-footer">Klik untuk melihat daftar transaksi <i
																																												class="fas fa-arrow-circle-right"></i></a>
																																</div>
																												</div>
																												<!-- ./col -->
																												<div class="col-lg-3 col-6">
																																<!-- small box -->
																																<div class="small-box bg-danger">
																																				<div class="inner">
																																								<h3>Keluhan</h3>

																																								<p>Terdapat {{ $complaints->count() }} keluhan/obrolan yang belum ditanggapi</p>
																																				</div>
																																				<div class="icon">
																																								<i class="ion ion-pie-graph"></i>
																																				</div>
																																				<a href="/orders" class="small-box-footer">Klik untuk melihat daftar keluhan <i
																																												class="fas fa-arrow-circle-right"></i></a>
																																</div>
																												</div>

																												<!-- /.card-body -->
																								</div>
																				@endcan
																				@can('isCustomer')
																								<div class="row">
																												<div class="col-lg-3 col-6">
																																<!-- small box -->
																																<div class="small-box bg-success">
																																				<div class="inner">
																																								<h3>Pesanan</h3>

																																								<p>Ayo, pesan tiket pesawat mu sekarang!</p>
																																								<br>
																																				</div>
																																				<div class="icon">
																																								<i class="ion ion-stats-bars"></i>
																																				</div>
																																				<a href="/orders/create" class="small-box-footer">Klik untuk memesan tiket pesawat <i
																																												class="fas fa-arrow-circle-right"></i></a>
																																</div>
																												</div>
																												<!-- ./col -->

																												<div class="col-lg-3 col-6">
																																<!-- small box -->
																																<div class="small-box bg-info">
																																				<div class="inner">
																																								<h3>Tiket</h3>

																																								<p>Terdapat lebih dari {{ $tickets->count() - 1 }} tiket yang dapat kamu pesan sekarang!
																																								</p>
																																				</div>
																																				<div class="icon">
																																								<i class="ion ion-bag"></i>
																																				</div>
																																				<a href="/tickets" class="small-box-footer">Klik untuk melihat daftar harga tiket <i
																																												class="fas fa-arrow-circle-right"></i></a>
																																</div>
																												</div>
																												<!-- ./col -->

																												<div class="col-lg-3 col-6">
																																<!-- small box -->
																																<div class="small-box bg-warning">
																																				<div class="inner">
																																								<h3>Transaksi</h3>
																																								<p>Terdapat {{ $transactions->count() }} transaksi yang belum di konfirmasi/setujui</p>
																																				</div>
																																				<div class="icon">
																																								<i class="ion ion-person-add"></i>
																																				</div>
																																				<a href="/transactions" class="small-box-footer">Klik untuk melihat daftar transaksimu
																																								<i class="fas fa-arrow-circle-right"></i></a>
																																</div>
																												</div>

																												<div class="col-lg-3 col-6">
																																<!-- small box -->
																																<div class="small-box bg-danger">
																																				<div class="inner">
																																								<h3>Keluhan</h3>

																																								<p>Terdapat {{ $complaints->count() }} keluhan/obrolan yang belum ditanggapi</p>
																																				</div>
																																				<div class="icon">
																																								<i class="ion ion-pie-graph"></i>
																																				</div>
																																				<a href="/orders" class="small-box-footer">Klik untuk melihat daftar keluhan <i
																																												class="fas fa-arrow-circle-right"></i></a>
																																</div>
																												</div>
																												<!-- ./col -->
																												<!-- /.card-body -->
																								</div>
																				@endcan
																				<!-- ./col -->
																</div>
																<!-- /.row -->
																<!-- Main row -->
																<div class="row">
																				<!-- Left col -->
																				<!-- /.Left col -->
																				<!-- right col (We are only adding the ID to make the widgets sortable)-->
																				<section class="col-lg-5 connectedSortable">

																								<!-- Map card -->
																								<div class="card bg-gradient-primary">
																												<!-- /.card-body-->
																								</div>
																								<!-- /.card-body -->
																								<div class="card-footer bg-transparent">
																												<div class="row">
																												</div>
																												<!-- /.row -->
																								</div>
																								<!-- /.card-footer -->
																</div>
																<!-- /.card -->
																<!-- /.card -->
												</section>
												<!-- right col -->
								</div>
								<!-- /.row (main row) -->
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

				<!-- Page specific script -->
				<script>
								$(function() {
												/* ChartJS
												 * -------
												 * Here we will create a few charts using ChartJS
												 */

												//--------------
												//- AREA CHART -
												//--------------

												// Get context with jQuery - using jQuery's .get() method.
												var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

												var areaChartData = {
																labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
																datasets: [{
																								label: 'Digital Goods',
																								backgroundColor: 'rgba(60,141,188,0.9)',
																								borderColor: 'rgba(60,141,188,0.8)',
																								pointRadius: false,
																								pointColor: '#3b8bba',
																								pointStrokeColor: 'rgba(60,141,188,1)',
																								pointHighlightFill: '#fff',
																								pointHighlightStroke: 'rgba(60,141,188,1)',
																								data: [28, 48, 40, 19, 86, 27, 90]
																				},
																				{
																								label: 'Electronics',
																								backgroundColor: 'rgba(210, 214, 222, 1)',
																								borderColor: 'rgba(210, 214, 222, 1)',
																								pointRadius: false,
																								pointColor: 'rgba(210, 214, 222, 1)',
																								pointStrokeColor: '#c1c7d1',
																								pointHighlightFill: '#fff',
																								pointHighlightStroke: 'rgba(220,220,220,1)',
																								data: [65, 59, 80, 81, 56, 55, 40]
																				},
																]
												}

												var areaChartOptions = {
																maintainAspectRatio: false,
																responsive: true,
																legend: {
																				display: false
																},
																scales: {
																				xAxes: [{
																								gridLines: {
																												display: false,
																								}
																				}],
																				yAxes: [{
																								gridLines: {
																												display: false,
																								}
																				}]
																}
												}

												// This will get the first returned node in the jQuery collection.
												new Chart(areaChartCanvas, {
																type: 'line',
																data: areaChartData,
																options: areaChartOptions
												})

												//-------------
												//- LINE CHART -
												//--------------
												var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
												var lineChartOptions = $.extend(true, {}, areaChartOptions)
												var lineChartData = $.extend(true, {}, areaChartData)
												lineChartData.datasets[0].fill = false;
												lineChartData.datasets[1].fill = false;
												lineChartOptions.datasetFill = false

												var lineChart = new Chart(lineChartCanvas, {
																type: 'line',
																data: lineChartData,
																options: lineChartOptions
												})

												//-------------
												//- DONUT CHART -
												//-------------
												// Get context with jQuery - using jQuery's .get() method.
												var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
												var donutData = {
																labels: [
																				'Chrome',
																				'IE',
																				'FireFox',
																				'Safari',
																				'Opera',
																				'Navigator',
																],
																datasets: [{
																				data: [700, 500, 400, 600, 300, 100],
																				backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
																}]
												}
												var donutOptions = {
																maintainAspectRatio: false,
																responsive: true,
												}
												//Create pie or douhnut chart
												// You can switch between pie and douhnut using the method below.
												new Chart(donutChartCanvas, {
																type: 'doughnut',
																data: donutData,
																options: donutOptions
												})

												//-------------
												//- PIE CHART -
												//-------------
												// Get context with jQuery - using jQuery's .get() method.
												var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
												var pieData = donutData;
												var pieOptions = {
																maintainAspectRatio: false,
																responsive: true,
												}
												//Create pie or douhnut chart
												// You can switch between pie and douhnut using the method below.
												new Chart(pieChartCanvas, {
																type: 'pie',
																data: pieData,
																options: pieOptions
												})

												//-------------
												//- BAR CHART -
												//-------------
												var barChartCanvas = $('#barChart').get(0).getContext('2d')
												var barChartData = $.extend(true, {}, areaChartData)
												var temp0 = areaChartData.datasets[0]
												var temp1 = areaChartData.datasets[1]
												barChartData.datasets[0] = temp1
												barChartData.datasets[1] = temp0

												var barChartOptions = {
																responsive: true,
																maintainAspectRatio: false,
																datasetFill: false
												}

												new Chart(barChartCanvas, {
																type: 'bar',
																data: barChartData,
																options: barChartOptions
												})

												//---------------------
												//- STACKED BAR CHART -
												//---------------------
												var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
												var stackedBarChartData = $.extend(true, {}, barChartData)

												var stackedBarChartOptions = {
																responsive: true,
																maintainAspectRatio: false,
																scales: {
																				xAxes: [{
																								stacked: true,
																				}],
																				yAxes: [{
																								stacked: true
																				}]
																}
												}

												new Chart(stackedBarChartCanvas, {
																type: 'bar',
																data: stackedBarChartData,
																options: stackedBarChartOptions
												})
								})
				</script>
@endsection
