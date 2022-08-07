@extends('layouts.user')
@section('content')

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							@if (isset($barang) && $barang->image())
							<p>
								<img src="{{ asset('images/barang/' . $barang->image()) }}" class="img-rounded img-responsive"
									style="width: 75px; height:75px;" alt="">
							</p>
						@endif
						
						</div>
					</div>
					<!-- /Product main img -->

					
					<!-- /Product thumb imgs -->

					<!-- Product details -->
						<div class="product-details">
							<h2 class="product-name">{{ $barang->nama_baju }}</h2>
							<div>
								
							</div>
							<div>
								<h3 class="product-price">{{ $barang->harga }}</h3>
								<span class="product-available">{{ $barang->stok }}</span>
							</div>
							<p>{{ $barang->deskripsi }}</p>

							<div class="product-options">
								<label>
									Size
									<select class="input-select">
										<option value="0">X</option>
									</select>
								</label>
								<label>
									Color
									<select class="input-select">
										<option value="0">Red</option>
									</select>
								</label>
							</div>

							<div class="add-to-cart">
								<div class="qty-label">
									Qty
									<div class="input-number">
										<input type="number">
										<span class="qty-up">+</span>
										<span class="qty-down">-</span>
									</div>
								</div>
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
								<br>
								<br>
							</div>

						

						</div>
					</div>
					<!-- /Product details -->

					<!-- Product tab -->
					
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- Section -->
		
	@endsection
	