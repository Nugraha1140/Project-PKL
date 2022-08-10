@extends('layouts.user')
@section('content')
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Billing address</h3>
							</div>
							<form action="{{route('costumer.status')}}" method="post">

								<div class="form-group">
								<label class="form-label">Nama Lengkap</label>
									<input class="input" type="text" name="nama_costumer" placeholder="Nama Lengkap">
								</div>
								<div class="form-group">
								<label> Jenis Kelamin</label>
								<br>
								<br>
								<input class="form-check-input" type="radio" name="jk" value="Laki-laki">
							<label class="form-check-label">
								Laki-laki
							</label>
							&nbsp;<input class="form-check-input" type="radio" name="jk" value="Perempuan">
							<label class="form-check-label">
								Perempuan
							</label>
							
						</div>
						
							<div class="form-group">
							<label class="form-label">Nomor Telpon</label>
								<input class="input" type="text" name="no_telpon" placeholder="Nomor Telpon">
							</div>
							<div class="form-group">
							<label class="form-label">Alamat</label>
								<textarea name="alamat" placeholder="Alamat" id="" cols="65" rows="10"></textarea>
							</div>
							
						</div>
						<!-- /Billing Details -->
						
						<!-- Shiping Details -->
						<div class="shiping-details">
							<div class="section-title">
								
							</div>
							
							
							
						</div>
						<!-- /Shiping Details -->

						<!-- Order notes -->
						
						<!-- /Order notes -->
					</div>

					<!-- Order Details -->
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Your Order</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>PRODUCT</strong></div>
								<div><strong>TOTAL</strong></div>
							</div>
							<div class="order-products">
								<div class="order-col">
									@foreach ($transaksi as $data)
									<div>{{ $data->barang->nama_baju }}</div>
									<div>Rp. {{ number_format($data->barang->harga, 0, ',', '.') }}</div>
									
								</div>
							</div>
							<div class="order-col">
								<div>Jumlah</div>
								<div><strong>{{$data->jumlah}}</strong></div>
							</div>
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong>Rp. {{ number_format($data->total, 0, ',', '.') }}</strong></div>
							</div>
							@endforeach
						</div>
						<div class="input-checkbox">
							<input type="checkbox" id="terms">
							<label for="terms">
								<span></span>
								I've read and accept the <a href="#">terms & conditions</a>
							</label>
						</div>
						<button class="primary-btn order-submit" type="save">Order</button>
					</div>
				</form>
					<!-- /Order Details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
@endsection
	