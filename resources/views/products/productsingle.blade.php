@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row slider-text justify-content-center align-items-center">

		<div class="col-md-7 col-sm-12 text-center ftco-animate">

			<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span>
				<span>{{">"}}</span>
				<span>Product Details</span>
			</p>
		</div>

	</div>
</div>
<div class="container">
@if(Session::has('success'))
<p class="alert {{Session::get('alert-class','alert-info')}}">{{Session::get('success')}}</p>
@endif
</div>

<section class="ftco-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mb-5 ftco-animate">
				<a href="{{ asset('assets/images/products/'.$product->image.'')}}" class="image-popup"><img src="{{ asset('assets/images/products/'.$product->image.'')}}" class="img-fluid" alt="Colorlib Template"></a>
			</div>
			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
				<h3>{{ $product->name }}</h3>
				<p class="price"><span>{{ $product->price }}&#8364</span></p>
				<p>
					{{$product->description}}
				</p>
				<div class="row mt-4">
					<div class="col-md-6">
						<div class="form-group d-flex">
							<div class="select-wrap">
								<div class="icon">
									
									
									<img src="{{asset('assets/images/arrow-down.svg')}}">
								</div>
								<select name="quantity" id="product-quantity" class="form-control">
									<option value="small">Small</option>
									<option value="medium">Medium</option>
									<option value="large">Large</option>
									<option value="extra large">Extra Large</option>
								</select>
							</div>
						</div>
					</div>
					<div class="w-100"></div>
					<div class="input-group col-md-6 d-flex mb-3">
						<span class="input-group-btn mr-2">
							<button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
								-
							</button>
						</span>
						<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
						<span class="input-group-btn ml-2">
							<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
								+
							</button>
						</span>
					</div>
				</div>
				<form method="POST" action="{{route('add.cart',$product->id)}}">
					@csrf
					<input type="hidden" name="name" value="{{$product->name}}">
					<input type="hidden" name="prd_id" value="{{$product->id}}">
					<input type="hidden" name="price" value="{{$product->price}}">
					@if($checkingInCart==0)
					<button type="submit" name="cart_submit" class="btn btn-primary py-3 px-5">Add to Cart</button>
					@else
					<button style="background-color: black" class="text-white btn btn-primary py-3 px-5" disabled>Added to Cart</button>
					@endif
			</div>
		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section ftco-animate text-center">
				<span class="subheading">Discover</span>
				<h2 class="mb-4">Related products</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
			</div>
		</div>
		<div class="row">
		@foreach ($relatedProducts as $relatedProduct)
		
			<div class="col-md-3">
				<div class="menu-entry">
					<a href="#" class="img" style="background-image: url({{ asset('assets/images/products/'.$relatedProduct->image.'') }});"></a>
					<div class="text text-center pt-4">
						<h3><a href="#">{{$relatedProduct->name}}</a></h3>
						<p>{{$relatedProduct->description}}</p>
						<p class="price"><span>{{$relatedProduct->price}}&#8364</span></p>
						<p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
					</div>
				</div>
			</div>
			
		
		@endforeach
	</div>
	</div>
</section>

@endsection