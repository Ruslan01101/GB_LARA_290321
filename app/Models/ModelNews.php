<?php
class ModelNews{
	private $news=[1=>
				['id'=>1,
				'title'=>'Olympic games',
				'content'=>'WOFOIUFHWOUIEFHWUEIHUWEHF(WOHF(WEHowWHE(F*h'],
	      		'categoryId'=>1
	      			];
				    2=>
				['id'=>1,
				'title'=>'Technical revolution'
				'content'=>'WOFOIUFHWOUIEFHWUEIHUWEHF(WOHF(WEHowWHE(F*h'],
	      		'categoryId'=>2]     	      

	 public function getlist($categoryId){
	 	$news=[];
	 	foreach($this->news as $id=>$item){
	 		if($item['categoryId']==$categoryId){
	 			$news[$id]=$item
	 		}
	 	}
	 return $news;
	 }




}