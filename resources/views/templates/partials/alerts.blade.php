@if(Session::has('info'))
	<div class="alert alert-info" role="info">
		{{Session::get('info')}}
	</div>
@endif