@extends('layouts.master')
@section('title','Blog Home')
@section('content')

		<!-- Main Content -->
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-lg	-offset-2 col-md-10 col-md-offset-1">
			@foreach($posts as $post)
				<div class="post-preview">
					<a href="{{ route('blog.post',$post->slug) }}">
						<h2 class="post-title">
							{{ $post->title }}
						</h2>
						<h3 class="post-subtitle">
							{{ $post->content }}
						</h3>
					</a>
					<p class="post-meta">Escrito por {{ $post->users->name }} em {{ $post->created_at->format('d/m/Y H:m:s') }}</p>
				</div>
				<hr>
			@endforeach

			<div class="col-md-12 text-center">
				{!! $posts->render() !!}
			</div>
		</div>
	</div>
</div>

<hr>

@stop