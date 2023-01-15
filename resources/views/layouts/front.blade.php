<!DOCTYPE html>
<html lang="en">

<head>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<title>Confido</title>

				<!-- Google Font: Source Sans Pro -->
				<link rel="stylesheet"
								href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

				<!-- Font Awesome -->
				<link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
				<!-- Ionicons -->
				<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
				<!-- Tempusdominus Bootstrap 4 -->
				<link rel="stylesheet"
								href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
				<!-- iCheck -->
				<link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
				<!-- JQVMap -->
				<link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
				<!-- Theme style -->
				<link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
				<!-- overlayScrollbars -->
				<link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
				<!-- Daterange picker -->
				<link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
				<!-- summernote -->
				<link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">

				<!-- DataTables -->
				<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
				<link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
				<link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
</head>

<body class="hold-transition sidebar-mini" style="height: auto">

				@yield('front')

				<!-- jQuery -->
				<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
				<!-- jQuery UI 1.11.4 -->
				<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
				<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
				<script>
								$.widget.bridge('uibutton', $.ui.button)
				</script>
				<!-- Bootstrap 4 -->
				<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
				<!-- ChartJS -->
				<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
				<!-- Sparkline -->
				<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
				<!-- JQVMap -->
				<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
				<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
				<!-- jQuery Knob Chart -->
				<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
				<!-- daterangepicker -->
				<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
				<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
				<!-- Tempusdominus Bootstrap 4 -->
				<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
				<!-- Summernote -->
				<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
				<!-- overlayScrollbars -->
				<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
				<!-- AdminLTE App -->
				<script src="{{ asset('dist/js/adminlte.js') }}"></script>
				<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
				<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>

				{{-- Tiket --}}
				<!-- DataTables  & Plugins -->
				<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
				<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
				<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
				<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
				<script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
				<script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
				<script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
				<script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
				<script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
				<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
				<script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
				<script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

				{{-- Pesanan --}}
				<!-- bs-custom-file-input -->
				<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

				<script>
								// Ticket
								$(function() {
												$("#example1").DataTable({
																"responsive": true,
																"lengthChange": false,
																"autoWidth": false,
																"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
												}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
												$('#example2').DataTable({
																"paging": true,
																"lengthChange": false,
																"searching": false,
																"ordering": true,
																"info": true,
																"autoWidth": false,
																"responsive": true,
												});
								});

								// Pesanan
								$(document).ready(function() {

												// Pulang pergi toogle
												$('.pulang-toogle').hide();

												$("#pergi-check, #pergi-pulang-check").click(function() {
																if ($('#pergi-pulang-check:checked').val() == undefined) {
																				$('.pulang-toogle').hide();
																} else {
																				$('.pulang-toogle').show();
																}
												});

												switch ($('#jumlah-penumpang').val()) {
																case '5':
																				for (let i = 1; i <= 5; i++) {
																								if (i <= $('#jumlah-penumpang').val()) {
																												$(`#penumpang-${i}`).show();
																								} else {
																												$(`#penumpang-${i}`).hide();
																								}
																				}

																				break;
																case '4':
																				for (let i = 1; i <= 5; i++) {
																								if (i <= $('#jumlah-penumpang').val()) {
																												$(`#penumpang-${i}`).show();
																								} else {
																												$(`#penumpang-${i}`).hide();
																								}
																				}

																				break;
																case '3':
																				for (let i = 1; i <= 5; i++) {
																								if (i <= $('#jumlah-penumpang').val()) {
																												$(`#penumpang-${i}`).show();
																								} else {
																												$(`#penumpang-${i}`).hide();
																								}
																				}

																				break;
																case '2':
																				for (let i = 1; i <= 5; i++) {
																								if (i <= $('#jumlah-penumpang').val()) {
																												$(`#penumpang-${i}`).show();
																								} else {
																												$(`#penumpang-${i}`).hide();
																								}
																				}

																				break;
																case '1':
																				for (let i = 1; i <= 5; i++) {
																								if (i <= $('#jumlah-penumpang').val()) {
																												$(`#penumpang-${i}`).show();
																								} else {
																												$(`#penumpang-${i}`).hide();
																								}
																				}

																				break;
												}

												$('#jumlah-penumpang').click(function() {
																$('#penumpang-2, #penumpang-3, #penumpang-4, #penumpang-5').hide();

																switch ($('#jumlah-penumpang').val()) {
																				case '5':
																								$('#penumpang-5').show();
																				case '4':
																								$('#penumpang-4').show();
																				case '3':
																								$('#penumpang-3').show();
																				case '2':
																								$('#penumpang-2').show();
																				case '1':
																								$('#penumpang-1').show();
																}
												})

								});
				</script>


</body>

</html>
