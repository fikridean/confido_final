<div class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
								<div class="image">
												<img src="{{ asset(Auth::user()->image) }}" class="img-circle elevation-2" style="width: 50px; height: 50px;"
																alt="{{ Auth::user()->name }}">
								</div>
								<div class="info">
												<a href="/users/{{ Auth::id() }}" class="d-block"
																style="{{ Request::is('users*') ? 'color: white' : '' }}; word-wrap: break-word;">{{ Auth::user()->name }}</a>
								</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
								<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
												<!-- Add icons to the links using the .nav-icon class
															with font-awesome or any other icon font library -->
												<li class="nav-item menu-open">
																<?php
																$url = $_SERVER['PHP_SELF'];
																$url = explode('/', $url);
																$lastPart = array_pop($url);
																if ($lastPart == 'index.php') {
																    echo '<a href="./../" class="nav-link">';
																} else {
																    echo '<a href="../../" class="nav-link">';
																}
																?>
																<i class="nav-icon fas fa-home"></i>
																<p>
																				Halaman Utama
																</p>
																</a>
												</li>
												<li class="nav-header">MENUS</li>
												<li class="nav-item menu-open">
																<a href="/dashboard" class="nav-link {{ Request::is('dashboard*') ? 'active' : '' }}">
																				<i class="nav-icon fas fa-tachometer-alt"></i>
																				<p>
																								Dashboard
																				</p>
																</a>
												</li>
												<li class="nav-item">
																<a href="/tickets" class="nav-link {{ Request::is('tickets*') ? 'active' : '' }}">
																				<i class="nav-icon fas fa-money-bill-wave"></i>
																				<p>
																								Daftar Tiket
																								<i class="fas fa-angle-left right"></i>
																				</p>
																</a>
												</li>
												<li class="nav-item">
																<a href="/orders/create" class="nav-link {{ Request::is('orders/create') ? 'active' : '' }}">
																				<i class="nav-icon fas fa-edit"></i>
																				<p>
																								Buat Pesanan
																								<i class="fas fa-angle-left right"></i>
																				</p>
																</a>
												</li>
												<li class="nav-item">
																<a href="#"
																				class="nav-link {{ Request::is('transactions') || Request::is('orders') ? 'active' : '' }}">
																				<i class="nav-icon fas fa-list-ul"></i>
																				<p>
																								Riwayat
																								<i class="fas fa-angle-left right"></i>
																				</p>
																</a>
																<ul class="nav nav-treeview">
																				<li class="nav-item">
																								<a href="/orders" class="nav-link">
																												<i class="far fa-circle nav-icon"
																																style="color	: {{ Request::is('orders') ? 'rgb(0, 141, 193)' : '' }}"></i>
																												<p>Pesanan</p>
																								</a>
																				</li>
																				<li class="nav-item">
																								<a href="/transactions" class="nav-link">
																												<i class="far fa-circle nav-icon"
																																style="color	: {{ Request::is('transactions') ? 'rgb(0, 141, 193)' : '' }}"></i>
																												<p>Transaksi</p>
																								</a>
																				</li>
																</ul>
												</li>
												@can('isAdmin')
																<li class="nav-item">
																				<a href="/users" class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
																								<i class="nav-icon fas fa-users"></i>
																								<p>
																												Users
																												<i class="fas fa-angle-left right"></i>
																								</p>
																				</a>
																</li>
																<li class="nav-item">
																				<a href="/airlines" class="nav-link {{ Request::is('airlines') ? 'active' : '' }}">
																								📜
																								<p>
																												Maskapai
																												<i class="fas fa-angle-left right"></i>
																								</p>
																				</a>
																</li>
																<li class="nav-item">
																				<a href="/types" class="nav-link {{ Request::is('types') ? 'active' : '' }}">
																								📝
																								<p>
																												Kelas Maskapai
																												<i class="fas fa-angle-left right"></i>
																								</p>
																				</a>
																</li>
																<li class="nav-item">
																				<a href="/tracks" class="nav-link {{ Request::is('tracks') ? 'active' : '' }}">
																								📚
																								<p>
																												Rute Penerbangan
																												<i class="fas fa-angle-left right"></i>
																								</p>
																				</a>
																</li>
																<li class="nav-item">
																				<a href="/methods" class="nav-link {{ Request::is('methods') ? 'active' : '' }}">
																								💳
																								<p>
																												Metode Pembayaran
																												<i class="fas fa-angle-left right"></i>
																								</p>
																				</a>
																</li>
												@endcan
								</ul>
				</nav>
				<!-- /.sidebar-menu -->
</div>
