<?php namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

Use App\Contact;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		/*$this->middleware('auth');*/
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$transparent = 'transparent';
		return view('home', ['transparent' => $transparent]);
	}
	
	public function postEmail(Request $request)
	{
		$email = $request->input('email');
		
		try
		{
			DB::insert('INSERT INTO contacts (email) values (?)', [$email]);
			
			$msg = $email . " has been added to our mailing list.";
		}
		catch (\Illuminate\Database\QueryException $e)
		{
			$msg = "Unfortunately, something went wrong. Please try again later";
		}

		$redirect = "/";
		
		return view('submitted_email', ['msg' => $msg, 'transparent' => '', 'redirect' => $redirect]);
	}
	












	
	public function sweepstakes()
	{
		$transparent = 'transparent';
		return view('sweepstakes', ['transparent' => $transparent]);
	}



	public function postSweepstakes(Request $request)
	{
		$name = $request->input('name');
		$email = $request->input('email');
		$phone = $request->input('phone');

		$prescription = $request->input('prescription');
		$experienced = $request->input('experienced');
		$greenthumb = $request->input('greenthumb');
		$help = $request->input('help');
		$optin = $request->input('optin');

		$prescription == "on" ? $prescription = 1 : $prescription = 0;
		$experienced == "on" ? $experienced = 1 : $experienced = 0;
		$help == "on" ? $help = 1 : $help = 0;
		$optin == "on" ? $optin = 1 : $optin = 0;
		
		
		try
		{
			DB::table('contest_entries')->insert(

				['name' => $name,'email' => $email,'phone' => $phone,'prescription' => $prescription,'experienced' => $experienced,'greenthumb' => $greenthumb, 'help' => $help, 'optin' => $optin]

			);

			$msg = "Your entry has been submitted";
		}
		catch (\Illuminate\Database\QueryException $e)
		{
			// $msg = "Unfortunately, something went wrong. Please try again later";

			$msg = $e->getMessage();
		}

		$redirect = "/sweepstakes";
		
		return view('submitted_email', ['msg' => $msg, 'transparent' => '', 'redirect' => $redirect]);
	}

}
