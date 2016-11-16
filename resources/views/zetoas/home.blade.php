@extends('zetoas.layout.layout')

@section('content')
      <div class="content"> 
        @foreach($post as $ppost)
        <!-- Begin Post -->
        <div class="post"> 
          
          <!-- Begin Post Info -->
          <div class="post-info"> 
            <!-- Begin Date -->
            <div class="post-date"> <span class="day">{{ date('d', strtotime($ppost->created_at)) }}</span> <span class="month">{{ date('M', strtotime($ppost->created_at)) }}</span> <span class="year">{{ date('Y', strtotime($ppost->created_at)) }}</span> </div>
            <!-- End Date --> 
            <!-- Begin Title -->
            <div class="post-title">
              <h1><a href="/post/{{ $ppost->slug }}">{{ $ppost->title }}</a></h1>
              <div class="post-meta"> <span class="creator"><a href="#">{{ $ppost->user->name or '' }}</a></span> <span class="categories"><a href="#">{{ $ppost->cat->name or '' }}</a></span> </div>
            </div>
            <!-- End Title --> 
          </div>
          <!-- End Post Info -->
          
          <div class="post-text"> <a href="/post/{{ $ppost->slug }}"><img width="100%" src="{{asset('/storage/').'/'. $ppost->image}}" alt="" /></a> <br />
            <p>{{ $ppost->excerpt }} <a class="more" href="/post/{{ $ppost->slug }}">Continue Reading →</a></p>
          </div>
          <!-- End Text --> 
          <span class="tags"><a href="#">Black & White</a>, <a href="#">Color</a>, <a href="#">Portfolio</a></span>
        </div>
        <!-- End Post --> 
        @endforeach
        <!-- Begin Page Navi -->
    			<div class="page-navi">
    				<p>Page 1 of 3</p>
    				<ul>
    					<li><a href="#" class="current">1</a></li>
    					<li><a href="#">2</a></li>
    					<li><a href="#">3</a></li>
    				</ul>
    			</div>
    			<!-- End Page Navi -->
        
      </div>
@endsection