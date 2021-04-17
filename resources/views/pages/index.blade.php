@forelse($themes as $id=>$theme)
	<div>
		<a href="route('news::category',['id'=>$id])$theme"></a>
	</div>
	
	@endforelse
