<?php 

namespace App\Http\Controllers;

Use App\Product;
Use App\ProductFeature;
Use App\Feature;
Use App\Specification;

Use View;


class ProductController extends Controller {
	
	public function __construct() {
	
		View::share ('transparent', '');
	
	}
	
	public function index($category = "all products"){

		$categories = Product::select('category')->distinct()->get();

		$products = Product::all();
		
		
		return view('products',['products' => $products, 'category' => $category, 'categories' => $categories]);
	}
	
	
	public function getProduct($model_name){
	
		$product = Product::where('model_name', $model_name)->first();


		//create the product's array of features using the product_features join table
		$productfeatures = ProductFeature::where('pid', $product->id)->get();
		$features = array();
		foreach ($productfeatures as $productfeature)
		{
			$features[] = Feature::where('id', $productfeature->fid)->first();
		}

		//build list of product specifications using the specifications table
		$specifications = Specification::where('pid', $product->id)->get();


		
		return view('product',['product' => $product, 'features' => $features, 'specifications' => $specifications, 'transparent' => '']);
	}


	public function productBrochures()
	{
		$products = Product::all();

		return view('brochures',['products' => $products]);
	}

}
