@extends('layouts.master')

@section('title','Switch GROW - Sweepstakes')


@section('content')

<style>
	label{
		color:white;
	}

	.navbar{
		display:none;
	}

	.form-control-checkbox{
		display:inline-block;
		width: 25px;
		height:25px;
		min-height:0;
		line-height:1;
		position:relative;
		top:7px;
		margin-right:7px;
	}

	.form-subcaption{
		position:relative;
		margin-left:35px;
		font-size:0.875rem;
	}

	.sweepstakes-logo-container{
background: rgba(0,0,0,0.4);
background: -moz-radial-gradient(center, ellipse cover, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0) 75%, rgba(0,0,0,0) 100%);
background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(0,0,0,0.4)), color-stop(75%, rgba(0,0,0,0)), color-stop(100%, rgba(0,0,0,0)));
background: -webkit-radial-gradient(center, ellipse cover, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0) 75%, rgba(0,0,0,0) 100%);
background: -o-radial-gradient(center, ellipse cover, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0) 75%, rgba(0,0,0,0) 100%);
background: -ms-radial-gradient(center, ellipse cover, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0) 75%, rgba(0,0,0,0) 100%);
background: radial-gradient(ellipse at center, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0) 75%, rgba(0,0,0,0) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#000000', GradientType=1 );
	}
</style>


	<section class="mbr-section mbr-section-hero mbr-section-full header2 mbr-after-navbar hue-rotate-15" id="header2-1" style="background-image: url(/assets/images/mj_crop.jpg)">
	  <div class="mbr-overlay" style="opacity: 0.4; background-color: rgba(76, 47, 124,1); ">
	  </div>
	  <div class="mbr-table-full">
	    <div class="">
	      <div class="container splash-text-container">


<br/>

		  <div class="text-xs-center sweepstakes-logo-container">


		  	<a href="/">
		  		<img src="/assets/images/switch_grow_SOLUTIONS_logo.svg" class="switch_grow_logo_large" alt="Switch GROW Logo" />
			</a>
		</div>


	          
                    


                    <form action="{{ action('HomeController@postSweepstakes') }}" method="post" data-form-title="CONTACT FORM">

                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

												<div class="row">

													<div class="col-xs-12 text-xs-center">
														<h1 class="mbr-section-title display-2">
														</h1>

														<p style="font-size:16pt;font-weight:600;text-transform:uppercase">
															Submit your entry below for a chance to win one of our <span style="color:#fff;text-shadow: 0px 0px 16px rgba(255,255,255,0.7);font-weight:800">X-45 grow lights</span>
														</p>

														<br/>
													</div>

												</div>

												<br/>

                        <div class="row row-sm-offset">

                            <div class="col-md-offset-3 col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-2h-name">Name<span class="form-asterisk">*</span></label>
                                    <input type="text" class="form-control" name="name" required="" data-form-field="Name" id="form1-2h-name" maxlength="255">
                                </div>
                            </div>

                            <div class="col-md-offset-3 col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-2h-email">Email<span class="form-asterisk">*</span></label>
                                    <input type="email" class="form-control" name="email" required="" data-form-field="Email" id="form1-2h-email" maxlength="255">
																		
                                </div>
                            </div>


							<div class="col-md-offset-3 col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-2h-phone">Phone</label>
                                    <input type="text" class="form-control" name="phone" data-form-field="Phone" id="form1-2h-phone" maxlength="255">
																		<br/>
                                </div>
                            </div>



                            <div class="col-md-offset-3 col-md-8">
                                <div class="form-group">
									<input type="checkbox" class="form-control form-control-checkbox" name="prescription" data-form-field="prescription" id="form1-2h-prescription">
                                    <label class="form-control-label" for="form1-2h-prescription">I have a prescription for medicinal cannabis</label>
																		
                                </div>
                            </div>

							<div class="col-md-offset-3 col-md-8">
                                <div class="form-group">
									<input type="checkbox" class="form-control form-control-checkbox" id="form1-2h-cookies">
                                    <label class="form-control-label" for="form1-2h-cookies">I like chocolate chip cookies</label>
																		
                                </div>
                            </div>

							<div class="col-md-offset-3 col-md-8">
                                <div class="form-group">
									<input type="checkbox" class="form-control form-control-checkbox" name="experienced" data-form-field="prescription" id="form1-2h-experienced">
                                    <label class="form-control-label" for="form1-2h-experienced">I have previous experience growing cannabis</label>
									<br/><span class="form-subcaption">(Don’t worry…we won’t tell your mom!)</span>
									<br/>
									
																		
                                </div>
                            </div>

							<div class="col-md-offset-3 col-md-8">
                                <div class="form-group">

                                    <label class="form-control-label" for="form1-2h-greenthumb">I would consider my green thumb to be</label>
									<select name="greenthumb" style="color:black" id="form1-2h-greenthumb">
										<option value="green">Green (Good)</option>
										<option value="blue">Blue (Alright)</option>
										<option value="purple">Purple (I Need Help)</option>
									</select>
                                </div>
                            </div>


							<div class="col-md-offset-3 col-md-8">
                                <div class="form-group">
									<input type="checkbox" class="form-control form-control-checkbox" name="help" data-form-field="help" id="form1-2h-help">
                                    <label class="form-control-label" for="form1-2h-help">I have questions, please email and help me out</label>
                                </div>
                            </div>


							<div class="col-md-offset-3 col-md-8">
                                <div class="form-group">
									<input type="checkbox" class="form-control form-control-checkbox" name="optin" data-form-field="optin" id="form1-2h-optin">
                                    <label class="form-control-label" for="form1-2h-optin">I want to WIN the X-45 light, please add me to your mailing list</label>
									<br/>
									<span class="form-subcaption">(Fear not, we promise not to spam you!)</span>
																		<br/>
																		<br/>
                                </div>
                            </div>

                        </div>


                        <div class="text-xs-center">
							<button type="submit" class="btn btn-white">SUBMIT</button>
						</div>

                    </form>

					<br/>
					<br/>
					<br/>
					<br/>

										



					<div data-form-alert="true">
                        <div hidden="" data-form-alert-success="true" class="alert alert-form alert-success text-xs-center">Thanks for filling out form!</div>
                    </div>

				</div>

	      	</div>

	  	</div>

		<div class="container">

			<div class="row">

				<div class="col-md-offset-1 col-md-10 text-xs-center" style="position:absolute;bottom:5px">

			
						<p style="font-size:8pt">
							One entry per person. No purchase necessary. The contest will be open until May 31st. A winning entry will be selected on June 1st. The winner will be contacted via email. Prizes are postage-paid for Canada and Continental US. International shipping can be provided at the winner's expense. Prize has no cash value and may not be exchanged for another item. Switch GROW Solutions Inc. maintains the write to withhold prizes in the event of fraud.
						</p>


				</div>

			</div>

		</div>

		
	</section>





@endsection