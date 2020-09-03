@extends('layouts.master')

@section('title')
	{{$product->series}} {{$product->model_name}}
@endsection


@section('content')


	<div class="nav-filler"></div>

	<div class="product-breadcrumbs-container">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="product-breadcrumbs">
						<div class="product-breadcrumbs-text">
							<a href="/">Home</a><span class="breadcrumb-arrow">>></span>
							<a href="/products/">Products</a><span class="breadcrumb-arrow">>></span>
							<a href="/products/{{$product->category}}">{{$product->category}}</a><span class="breadcrumb-arrow">>></span>
						</div>
					</div>

					<hr>
				</div>
			</div>
		</div>
	</div>



	<section class="mbr-section mbr-parallax-background" id="content5-1z" style="background-image: url('/assets/images/products/{{$product->series}} {{$product->model_name}}/{{$product->image_url_header}}'); padding-top: 0px;padding-bottom: 25vh;max-width:1280px;margin-left:auto;margin-right:auto;">



	    <div class="container product-header-container">



			<div class="row">
				<div class="col-xs-9 col-sm-6 col-md-5 col-lg-4">
					<h6 class="product-series no-anim" style="margin-bottom:0px;line-height:1">{{$product->series}}</h6>
					<h3 class="mbr-section-title display-2 no-anim">{{$product->model_name}}</h3>
					<div class="lead">
						<p class="no-anim" style="margin-bottom:0;padding-bottom:10px;font-weight:400">

							{{$product->sub_heading}}

						</p>
							<span style="font-weight:800">MSRP: ${{$product->price}}</span>

						<br/>
						<br/>
						<br/>
						<button class="btn btn-purple product-header-button">FIND A DEALER</button>
						<br/>
						<button class="btn btn-black product-header-button">DOWNLOAD PDF</button>
					</div>

				</div>
			</div>
	    </div>

	</section>







	<!--<section class="mbr-section article" id="msg-box8-18" style="background-color: rgb(255,255,255); color: rgb(35,35,35); padding-top: 4px; padding-bottom: 4px;">


	    <div class="container">
	        <div class="row">
	            <div class="col-md-8 col-md-offset-2 text-xs-center">
	                <h3 class="mbr-section-title display-2">

					</h3>
	            </div>
	        </div>
	    </div>

	</section>-->



	<section class="mbr-gallery mbr-section mbr-section-nopadding mbr-slider-carousel product-gallery-thumb-container" id="gallery1-1c" data-filter="false" style="background-color: rgb(255, 255, 255); padding-top: 0rem; padding-bottom: 0rem;">
	    <!-- Filter -->


	    <!-- Gallery -->
	    <div class="mbr-gallery-row">
	        <div class=" mbr-gallery-layout-default">
	            <div>
	                <div>
	                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Beautiful" data-video-url="false">
	                        <div class="product-gallery-thumb" href="#lb-gallery1-1c" data-slide-to="0" data-toggle="modal">



	                            <!--<img alt="" src="/assets/images/products/{{$product->series}} {{$product->model_name}}/{{$product->gallery_image_1}}">-->

								<img alt="" src="/assets/images/placeholder.svg">

	                            <span class="icon-focus"></span>

	                        </div>
	                    </div><div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Animated" data-video-url="false">
	                        <div class="product-gallery-thumb" href="#lb-gallery1-1c" data-slide-to="1" data-toggle="modal">



	                            <!--<img alt="" src="/assets/images/products/{{$product->series}} {{$product->model_name}}/{{$product->gallery_image_2}}">-->

								<img alt="" src="/assets/images/placeholder.svg">

	                            <span class="icon-focus"></span>

	                        </div>
	                    </div><div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Responsive" data-video-url="false">
	                        <div class="product-gallery-thumb" href="#lb-gallery1-1c" data-slide-to="2" data-toggle="modal">



	                            <!--<img alt="" src="/assets/images/products/{{$product->series}} {{$product->model_name}}/{{$product->gallery_image_3}}">-->

								<img alt="" src="/assets/images/placeholder.svg">

	                            <span class="icon-focus"></span>

	                        </div>
	                    </div><div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Awesome" data-video-url="false">
	                        <div class="product-gallery-thumb" href="#lb-gallery1-1c" data-slide-to="3" data-toggle="modal">



	                            <!--<img alt="" src="/assets/images/products/{{$product->series}} {{$product->model_name}}/{{$product->gallery_image_4}}">-->

								<img alt="" src="/assets/images/placeholder.svg">

	                            <span class="icon-focus"></span>

	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="clearfix"></div>
	        </div>
	    </div>

	    <!-- Lightbox -->
	    <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery1-1c">
	        <div class="modal-dialog">
	            <div class="modal-content">
	                <div class="modal-body">
	                    <ol class="carousel-indicators">
	                        <li data-app-prevent-settings="" data-target="#lb-gallery1-1c" data-slide-to="0"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-1c" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-1c" data-slide-to="2"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-1c" data-slide-to="3"></li>
	                    </ol>
	                    <div class="carousel-inner">
	                        <div class="carousel-item">
								<img alt="" src="/assets/images/placeholder.svg">
	                            <!--<img alt="" src="/assets/images/products/{{$product->series}} {{$product->model_name}}/{{$product->gallery_image_1}}">-->
	                        </div><div class="carousel-item">
							<img alt="" src="/assets/images/placeholder.svg">
	                            <!--<img alt="" src="/assets/images/products/{{$product->series}} {{$product->model_name}}/{{$product->gallery_image_2}}">-->
	                        </div><div class="carousel-item">
							<img alt="" src="/assets/images/placeholder.svg">
	                            <!--<img alt="" src="/assets/images/products/{{$product->series}} {{$product->model_name}}/{{$product->gallery_image_3}}">-->
	                        </div><div class="carousel-item active">
							<img alt="" src="/assets/images/placeholder.svg">
	                            <!--<img alt="" src="/assets/images/products/{{$product->series}} {{$product->model_name}}/{{$product->gallery_image_4}}">-->
	                        </div>
	                    </div>
	                    <a class="left carousel-control" role="button" data-slide="prev" href="#lb-gallery1-1c">
	                        <span class="icon-prev" aria-hidden="true"></span>
	                        <span class="sr-only">Previous</span>
	                    </a>
	                    <a class="right carousel-control" role="button" data-slide="next" href="#lb-gallery1-1c">
	                        <span class="icon-next" aria-hidden="true"></span>
	                        <span class="sr-only">Next</span>
	                    </a>

	                    <a class="close" href="#" role="button" data-dismiss="modal">
	                        <span aria-hidden="true">×</span>
	                        <span class="sr-only">Close</span>
	                    </a>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>










	<section class="mbr-section article mbr-section__container product-body-section" id="content1-1q" style="background-color: rgb(255,255,255); padding-top: 0px; padding-bottom: 0px">


        <div class="product-body-gutter product-body-gutter-left"></div>

	    <div class="container product-body-container" style="background-color: rgb(35,35,35)">






			<?php $count = 0; ?>




			@foreach($features as $feature)

			<?php

				$div1_classes = "";
				$div2_classes = "";
				$img_classes = "";

				//odd
				if ($count%2)
				{
					$div1_classes = "col-md-6 col-md-push-6";
					$div2_classes = "col-md-5 col-md-pull-5 lead product-body-text";
					$img_classes = "product-body-image product-body-image-right";
				}
				//even
				else
				{


					$div1_classes = "col-md-6";
					$div2_classes = "col-md-5 lead product-body-text";
					$img_classes = "product-body-image product-body-image-left";
				}

			?>


	        <div class="row feature-row">
				<div>
					<div class="<?php echo $div1_classes ?>">
							<img src="/assets/images/features/{{$feature->image_url}}" class="<?php echo $img_classes ?>" alt="example product body image" />
					</div>



					<div class="<?php echo $div2_classes ?>">

						<h3 class="mbr-section-title display-2 text-xs-center feature-title">{{$feature->title}}</h3>

						<br/>

                        <p class="feature-body">{!! $feature->description !!}</p>




					</div>
				</div>

			</div>



			<?php
				//iterate odd/even count
				$count++
			?>


			@endforeach






	    </div>

        <div class="product-body-gutter product-body-gutter-right"></div>




	</section>





<div class="specs-container">

	<div class="container">

	<br/>
	<br/>
	<br/>
	<br/>

	<br/>
	<br/>
	<br/>
	<br/>

    <div class="row">

        <div class="col-sm-offset-1 col-sm-10">

            <h4 class="mbr-section-title display-3 text-xs-center specs-header">SPECIFICATIONS</h4>

            <br/>


            <table id="product-specs-table">

                @foreach ($specifications as $spec)

                <tr>
                    <td>{{$spec->name}}</td>
                    <td>{{$spec->value}}</td>
                </tr>

                @endforeach

            </table>



        </div>

    </div>

	<br/>
	<br/>
	<br/>
	<br/>


	<div class="container">
		<div class="row text-xs-center">
			<div class="col-sm-offset-1 col-sm-5">
				<button class="btn btn-black product-footer-button">DOWNLOAD PDF</button>
			</div>
			<div class="col-sm-5">
				<button class="btn btn-purple product-footer-button">FIND A RETAILER</button>
			</div>
		</div>
	</div>



	<br/>
	<br/>
	<br/>
	<br/>
	<br/>

	</div>

</div>















@include('layouts.footer')

@endsection

