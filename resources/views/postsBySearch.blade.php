@extends('layouts.frontend.app')

@section('title')
{{  $query }}
@endsection
@push('css')
   <link href="{{ asset('public/assets/frontend/css/category/styles.css') }}" rel="stylesheet">

    <link href="{{ asset('public/assets/frontend/css/category/responsive.css') }}" rel="stylesheet">
     <style>
    .header-section{
             height: 80px;
             width: 100%;
             text-align: center;
             background-color: #0b6e64;
             color: rgb(255, 255, 255);
             padding-top: 20px;
         }
        .favoritePost{
            color: blue;
        }
    </style>
@endpush

@section('content')

	<div class="header-section">
		<h2 ><b>{{ $posts->count() }} search results for {{ $query }}</b></h2>
	</div><!-- slider -->

	<section class="blog-area section">

            <div class="container">

			<div class="row">
                @if($posts->count() > 0)
               @foreach ($posts as $post)
                <div class="col-lg-4 col-md-6">
					<div class="card h-100">
						<div class="single-post post-style-1">

							<div class="blog-image" ><img src="{{ asset('public/storage/post/'.$post->image) }}" alt="{{ $post->title }}"></div>

							<a class="avatar" href="{{ route('author.profile',$post->user->username) }}"><img src="{{ asset('public/storage/profile/'.$post->user->image) }}" alt="Profile Image"></a>

							<div class="blog-info">

								<h4 class="title"><a href="{{ route('post.details',$post->slug) }}"><b>{{ $post->title }}</b></a></h4>

								<ul class="post-footer">
									<li>
                                        @guest
                                            <a href="javascript:void(0);" onclick="toastr.info('You need login first to add this post at favorite list','Info',{
                                                closeButton:true,
                                                progressBar:true,
                                            })"><i class="ion-heart"></i>{{ $post->favoritePostUser->count() }}</a>
                                            @else
                                             <a href="javascript:void(0);" onclick = "document.getElementById('favorite-form-{{ $post->id }}').submit(); " class="{{ !Auth::user()->userFavoritePost()->where('post_id',$post->id)->count() == 0 ? 'favoritePost' : '' }}"><i class="ion-heart"></i>{{ $post->favoritePostUser->count() }}</a>

                                             <form id="favorite-form-{{ $post->id }}" method="POST" action="{{ route('post.favorite',$post->id) }}" style="display: none;">
                                            @csrf
                                            </form>

                                        @endguest

                                    </li>
									<li><a href="#"><i class="ion-chatbubble"></i>{{ $post->comments->count() }}</a></li>
									<li><a href="#"><i class="ion-eye"></i>{{ $post->view_count }}</a></li>
								</ul>

							</div><!-- blog-info -->
						</div><!-- single-post -->
					</div><!-- card -->
				</div><!-- col-lg-4 col-md-6 -->
               @endforeach
               @else

                <div class="col-lg-4 col-md-6">
					<div class="card h-100">
								<h4 class="title"><strong>No post found for this search !</strong></h4>
					</div><!-- card -->
				</div><!-- col-lg-4 col-md-6 -->
               @endif
			</div><!-- row -->

			{{-- {{ $posts->links() }} --}}

		</div><!-- container -->


	</section><!-- section -->

@endsection

@push('js')

@endpush
