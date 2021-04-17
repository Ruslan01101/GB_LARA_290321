@extends('layouts.Mainpage')
@section('titleOfPage')
'DailyNews'
@endsecion
@section('linksOfContent')
@forelse($news as $id=>$item)
	<div>
		<a href="{{$route=route('news::card',['id'=>$id])}}">{{$item['title']}}</a><br>
		
	</div>
	@empty 'Haven't news yet'
	@endforelse
	@endsection