@extends('layouts.app')
@section('content')
<div style="max-height: 100px;" class="container">
	
	@foreach($posts as $post)
	{{-- <ul> --}}
		{{-- {{ $post->title }}  {{ $post->content }} --}}
	{{-- </ul> --}}
	{{-- <div class="">
		<div class="">{!! $post->title !!}</div>
		
	</div>
	<div class="">
		<h2>{!! $post->content !!}</h2>
	</div> --}}
	
	
	{{-- <div class="poginate">
		{{ $posts->links() }}
	</div> --}}

	 


{{-- </div> --}}
{{-- <div  class="container"> --}}
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-6">
			<div id="postlist">
				<div class="panel">
					<div class="panel-heading">
						<div class="text-center">
							<div class="row">
								<div class="col-sm-9">
									<h3 class="pull-left">{!! $post->title !!}</h3>
								</div>
								<div class="col-sm-3">
									<h4 class="pull-right">
									<small><em>{{-- 2014-07-30<br>18:30:00</em></small> --}}
									<b>{!! date('Y m d H:i', strtotime($post->created_at)) !!}</b>
									</em></small>
									</h4>
								</div>
							</div>
						</div>
					</div>
					
					<div class="panel-body">{!! $post->content !!}{{-- 
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in... <a href="#">Read more --}}</a>
					</div>
					
					
				</div>
				
				
			</div>
			
		</div>
	</div>
	@endforeach
	<div class="poginate">
		{{ $posts->links() }}
	</div>
	@endsection