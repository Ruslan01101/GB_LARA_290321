<?php
namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Support\Facades\View;

class CategoryController extends Controller{
	private $themes=[1 =>'Культура', 2 =>'Наука', 3 =>'Technic'];

	public function index(){
		return view('pages.index',['themes'=>$this->themes]);
	}



	public function actionCategories($id){
		$card= new ModelNews()->getList();
		view('pages.list','news'=>$news);

	}
	public function actionCard($id){
		$news=$this->news[$id];
		view('pages.blocks.card',['news'=>$news]);
	}



}
