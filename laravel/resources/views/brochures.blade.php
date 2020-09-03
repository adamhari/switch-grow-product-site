@extends('layouts.master')

@section('title', 'Products')


@section('content')

<div class="nav-filler"></div>

<div class="mbr-gallery-row container">


<div class="row">

    <div class="col-xs-12 text-xs-center">

        <h1 class="display-2 text-black">Products</h1>

    </div>

</div>


<br/>
<br/>


<div class="row">

    <div class="mbr-gallery-layout-default">


        @foreach ($products as $product)

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 product_brochure_tile">

                <a href="/assets/brochures/{{$product->series}} {{$product->model_name}}/{{$product->brochure}}" target="_blank" alt="{{$product->model_name}} brochure" style="color:rgb(76,47,124)">

                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1 product-tile" data-category="{{$product->category}}"  data-video-url="false">

                        <p class="product_brochure_tile_label">{{$product->series}} {{$product->model_name}}</p>

                        <br/>

                        <img src="/assets/images/products/{{$product->series}} {{$product->model_name}}/brochure_thumb.PNG" alt="{{$product->series}} {{$product->model_name}} PDF thumbnail" class="product_brochure_thumbnail"/>

                        <a href="/assets/brochures/{{$product->series}} {{$product->model_name}}/{{$product->brochure}}" target="_blank" alt="{{$product->model_name}} brochure download" class="text-xs-center" download>

                            <i class="fa fa-download brochure_pdf_download_icon" aria-hidden="true" title="Download PDF"></i>

                        </a>
                        

                    </div>

                </a>

            </div>


        @endforeach

    </div>

</div>





</div>

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




@include('layouts.footer')





@endsection