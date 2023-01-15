@extends('layouts.front')

@section('front')
				<div class="wrapper">
								<!-- Main content -->
								<section class="invoice" style="margin: 30px; border: none">
												<!-- title row -->
												<div class="row">
																<div class="col-12">
																				<h2 class="page-header">
																								<img src="{{ asset('dist/img/LogoConfido.png') }}" alt="Confido Logo" width="220">
																				</h2>
																</div>
																<!-- /.col -->
												</div>
												<!-- info row -->
												<div class="row invoice-info">
																<div class="col-sm-4 invoice-col">
																				<br>
																				<br>
																				<address>
																								<strong>Confido</strong><br>
																								Jl. Cabe V 91, Pd. Cabe Ilir<br>
																								Kec. Pamulang, Kota Tangerang Selatan, Banten 15418<br>
																								Phone: 081384002161<br>
																								Email: confidotiket@gmail.com
																				</address>
																</div>
																<!-- /.col -->
																<div class="col-sm-4 invoice-col">

																				<br>
																				<br>
																				<address>
																								@isset($order->user->phone_number)
																												<strong>{{ $order->user->name }}</strong>
																								@endisset

																								@isset($order->user->phone_number)
																												<br> Phone: {{ $order->user->phone_number }}
																								@endisset

																								@isset($order->user->email)
																												<br> Email: {{ $order->user->email }}
																								@endisset

																				</address>
																</div>
																<!-- /.col -->
																<div class="col-sm-4 invoice-col">
																				<br>
																				<br>
																				<b>Invoice #{{ $order->order_code }}</b><br>
																				<b>Order ID:</b> {{ $order->order_code }}<br>
																				@isset($order->transaction->method->method)
																								<b>Metode Pembayaran :</b> {{ $order->transaction->method->method }}
																								<br>
																				@endisset

																				<b>Payment date:</b> {{ $order->transaction->updated_at }}<br>
																</div>
																<!-- /.col -->
												</div>
												<!-- /.row -->
												<br>
												<!-- Table row -->
												<div class="row">
																<div class="col-12 table-responsive">
																				<table class="table table-striped">
																								<thead>
																												<tr>
																																<th>No</th>
																																<th>Maskapai</th>
																																<th>Kelas</th>
																																<th>Rute</th>
																																<th>Gate</th>
																																<th>Tanggal Pergi</th>
																																<th>Jam Terbang</th>
																												</tr>
																								</thead>
																								<tbody>
																												@foreach ($order->passengers as $passenger)
																																<tr>
																																				<td>{{ $loop->iteration }}</td>
																																				<td>{{ $order->ticket->airline->name }}</td>
																																				<td>{{ $order->ticket->type->name }}</td>
																																				<td>{{ $order->ticket->track->from_route }} - {{ $order->ticket->track->to_route }}
																																				</td>
																																				<td>{{ $order->ticket->airline->gate }}</td>
																																				<td>{{ $order->go_date }}</td>
																																				<td>{{ $order->ticket->type->flight_at }} WIB</td>
																																</tr>
																												@endforeach
																								</tbody>
																				</table>
																</div>
																<!-- /.col -->
												</div>
												<!-- /.row -->

												<div class="row">
																<!-- accepted payments column -->
																<div class="col-6">

																</div>
																<!-- /.col -->
																<div class="col-6">

																				<div class="table-responsive">
																								<table class="table">
																												<tr>
																																<th>Total:</th>
																																<td style="font-weight: bold">Rp {{ $order->transaction->total }}</td>
																												</tr>
																								</table>
																				</div>
																				<p class="lead">Your Payment Was Successful &nbsp; &nbsp;<i class="fas fa-check"></i> <br></p>

																</div>
																<!-- /.col -->
												</div>
												<!-- /.row -->
								</section>
								<!-- /.content -->
				</div>
				<!-- ./wrapper -->
@endsection

<script type="text/javascript">
				<!--
				window.print();
				//
				-->
</script>
