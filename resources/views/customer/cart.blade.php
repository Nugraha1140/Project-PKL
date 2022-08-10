@extends('layouts.user')
@section('content')

	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap">
						<div class="container">
						<table border="2" class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove"></th>
									<th class="product-image">Product Image</th>
									<th class="product-name">Name</th>
									<th class="product-price">Price</th>
									<th class="product-quantity">Quantity</th>
								</tr>
							</thead>
							<tbody>
								<tr class="table-body-row" enctype=>
									<td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a></td>
									<td class="product-image"><img src="{{$barang->image()}}" style="width:30%" alt=""></td>
									<td class="product-name">{{$barang->nama_baju}}</td>
									<td class="product-price">Rp.{{number_format($barang->harga,0,'.','.')}}</td>
									<td class="product-quantity"><input type="number" placeholder="0"></td>
									<td class="product-total">{{$barang->jumlah}}</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

			</div>
		</div>
	</div>
	
	
	

@endsection