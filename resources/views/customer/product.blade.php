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
							<div class="product-preview">
								<img src="{{asset('components/img/a.jpg')}}" alt="">
							</div>

							<div class="product-preview">
								<img src="{{asset('components/img/a.jpg')}}" alt="">
							</div>

							<div class="product-preview">
								<img src="{{asset('components/img/a.jpg')}}" alt="">
							</div>

							<div class="product-preview">
								<img src="{{asset('components/img/a.jpg')}}" alt="">
							</div>
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
							<div class="product-preview">
								<img src="{{asset('components/img/a.jpg')}}" alt="">
							</div>

							<div class="product-preview">
								<img src="{{asset('components/img/a.jpg')}}" alt="">
							</div>

							<div class="product-preview">
								<img src="{{asset('components/img/a.jpg')}}" alt="">
							</div>

							<div class="product-preview">
								<img src="{{asset('components/img/a.jpg')}}" alt="">
							</div>
						</div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						@foreach ($obats as $obat)
						<div class="col-sm-6 col-lg-4 text-center item mb-4">
							<span class="tag">Sale</span>
							<a href="{{route('singleShop',$obat->slug)}}"> <img src="{{$obat->image()}}"
									style="width: 270px; height:370px;" alt="Image"></a>
							<h3 class="text-dark"><a href="{{route('singleShop',$obat->slug)}}">{{$obat->nama_obat}}</a></h3>
							<p class="price"> Rp.{{number_format($obat->harga,0,'.','')}}&mdash;</p>
						</div>
						@endforeach
						<div class="product-details">
							<h2 class="product-name">product name goes here</h2>
							<div>
								
							</div>
							<div>
								<h3 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h3>
								<span class="product-available">In Stock</span>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

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
	