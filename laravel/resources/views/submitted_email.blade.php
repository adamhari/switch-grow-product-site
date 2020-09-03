@extends('layouts.master')

@section('title','Switch GROW - Email Submitted')


@section('content')

	<section class="mbr-section mbr-section-hero mbr-section-full header2 mbr-parallax-background mbr-after-navbar" id="header2-1" style="background-color: rgba(76,47,124,1);">
  
  <div class="mbr-table mbr-table-full">
    <div class="mbr-table-cell">
      <div class="container">
        <div class="mbr-section row">
          <div class="mbr-table-md-up">
            <div class="mbr-table-cell col-md-5 content-size text-xs-center text-md-right">
              <h3 class="mbr-section-title display-2">Thank you.</h3>
              <div class="mbr-section-text">
                <p>{{$msg}}<br/>
				<a href="{{$redirect}}">Go Back&nbsp;</a>
				</p>
              </div>
            </div>
            <div class="mbr-table-cell mbr-valign-top mbr-left-padding-md-up col-md-7 image-size" style="width: 50%;">
              <div class="mbr-figure">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection