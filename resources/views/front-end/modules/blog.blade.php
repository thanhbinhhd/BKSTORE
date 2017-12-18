@extends('front-end.layout.master')
@section('pageTitle','BKSTORE:Tin tức')
@section('content')
<div class="container">
			<div class="row">
				<div class="col-sm-1">
					
				</div>
				<div class="col-sm-10">
					<div class="blog-post-area">
                        <h2 class="title text-center">Trang tin tức</h2>
                        @foreach($news as $new)
						<div class="single-blog-post">
							<h3>{{$new->title}}</h3>
							<div class="post-meta">
								<ul>
									<li><i class="fa fa-user"></i>{{$new->author}}</li>
									<li><i class="fa fa-clock-o"></i>{{$new->created_at->format('H:i a')}}</li>
									<li><i class="fa fa-calendar"></i>{{$new->created_at->format('M j, Y')}}</li>
								</ul>
							</div>
							<a href="/uploads/news/{{$new->images}}">
								<img src="/uploads/news/{{$new->images}}" class="img-reponsive" alt="">
							</a>
							<div><?=$new->intro?></div>
							<a  class="btn btn-primary" href="/blog_detail/{{$new->id}}">Read More</a>
                        </div>
                        <hr/>
                        @endforeach
					</div>
                </div>
                
			</div>
		</div>
@endsection('content')
