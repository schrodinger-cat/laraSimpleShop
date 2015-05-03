<?php namespace App\Http\Controllers;

use Request;
use Carbon\Carbon;

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
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}

	/**
	 * Вывод всех категорий товаров
	 *
	 * @return Response
	 */
	public function category()
	{
		return view('category/category');
	}

	/**
	 * Добавление категории товаров
	 *
	 * @return Response
	 */
	public function createCategory()
	{
		return view('category/category_add');
	}

	public function storeCategory()
	{
		$input = Request::all();
		$input['published_at'] = Carbon::now();

		$cat = new Category;
		$cat->cat_name = $input['cat_name'];
		$cat->published_at = $input['published_at'];
		$cat->save();

		//Category::create($input);

		return redirect('/admin/category');
	}

}
