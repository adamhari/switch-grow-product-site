@extends('layouts.master')

@section('title', 'Products')


@section('content')

<div class="nav-filler"></div>




	
<section class="mbr-gallery product-gallery mbr-section mbr-section-nopadding mbr-slider-carousel" id="gallery2-1e" data-filter="true" style="padding-top: 6rem; padding-bottom: 6rem;">


    

    <!-- Gallery -->
    <div class="mbr-gallery-row container">
	
		<div class="row">
	      <div class="col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-2" style="text-align:center;">

		  	<div class="dropdown product-filter-container">
					<p class="dropdown-toggle product-filter-button" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> 
						<span class="product-filter-button-text-container">
							<span class="product-filter-button-text">{{$category}}</span>
						</span>

					</p>

					
					<ul class="dropdown-menu product-filter-dropdown-menu" aria-labelledby="dropdownMenu1">
						<li><a href="#" class="product-filter-option">All Products</a></li>

						@foreach ($categories as $cat)

							<li><a href="#" class="product-filter-option">{{$cat->category}}</a></li>

						@endforeach
						

						
					</ul>
				</div>

	      </div>
	    </div>
	
	
		<div class="row">
			<div class=" mbr-gallery-layout-default">
				<div>
					<div>
					
					
					@foreach ($products as $product)<a href="/product/{{$product->model_name}}"><div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1 product-tile" data-category="{{$product->category}}"  data-video-url="false">
							<div href="#lb-gallery2-1e">
							
								<div class="product-tile-image" style="background-image: url('/assets/images/products/{{$product->series}} {{$product->model_name}}/{{$product->image_url_header}}')">
								
									<div class="product-tile-label">
										{{$product->series}} {{$product->model_name}}
									</div>
								</div>
							
							
							
								
							</div>
						</div></a>@endforeach
						
						
						
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	
	
        
    </div>

</section>
	
	
	
	
	
	
	
	
	
<br/>
<br/>
<br/>
<br/>

<br/>
<br/>
<br/>
<br/>

<br/>
<br/>
<br/>
<br/>

<br/>
<br/>
<br/>
<br/>

<br/>
<br/>
<br/>
<br/>

<br/>
<br/>
<br/>
<br/>

<br/>
<br/>
<br/>
<br/>

<br/>
<br/>
<br/>
<br/>
	


<script>

$(function() {
	filterTiles("{{$category}}");
});

</script>
	
	

@include('layouts.footer')





@endsection