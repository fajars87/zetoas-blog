      <div class="sidebar-box">
      <h4>Latest Posts</h4>
      <ul class="latest-posts">
          @foreach($psb as $lp)
          <li><span class="date"><em class="day">{{ date('d', strtotime($lp->created_at)) }}</em><em class="month">{{ date('M', strtotime($lp->created_at)) }}</em></span> <a href="/post/{{ $lp->slug }}">{{ $lp->title }}</a> </li>
          @endforeach
        </ul>
        
      </div> 
       <div class="sidebar-box">
      <h4>Custom Text</h4>
      <p>Cras vehicula, enim ac rutrum imperdiet, tellus nibh sodales magna, at mollis odio mi a urna. Aliquam augue augue, sodales eu condimentum a, scelerisque eget purus. Sed suscipit mattis molestie.</p>
      </div>
      
      
      <div class="sidebar-box">
      <h4>Categories</h4>
      <div class="cat-list">
      <ul>
      @foreach($cat as $cl)
      	<li><a href="#">{{ $cl->name }} <span>{{ $cl->blog_posts->count() }}</span></a></li>
      @endforeach
      </ul>
      </div>
      </div>
      
      <!--
      <div class="sidebar-box">
      <h4>Sponsors</h4>
      <ul class="ads">
		<li><a href="#"><img src="{{asset('/light/')}}/style/images/art/ad1.jpg" alt="" /></a></li>
		<li><a href="#"><img src="{{asset('/light/')}}/style/images/art/ad2.jpg" alt="" /></a></li>
		<li><a href="#"><img src="{{asset('/light/')}}/style/images/art/ad3.jpg" alt="" /></a></li>
		<li><a href="#"><img src="{{asset('/light/')}}/style/images/art/ad4.jpg" alt="" /></a></li>
      </ul>
      </div>
      -->
     
      