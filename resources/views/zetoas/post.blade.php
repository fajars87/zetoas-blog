@extends('zetoas.layout.layout')

@section('content')
      <div class="content"> 
        <!-- Begin Post -->
        <div class="post"> 
          
          <!-- Begin Post Info -->
          <div class="post-info"> 
            <!-- Begin Date -->
            <div class="post-date"> <span class="day">{{ date('d', strtotime($post->created_at)) }}</span> <span class="month">{{ date('M', strtotime($post->created_at)) }}</span> <span class="year">{{ date('Y', strtotime($post->created_at)) }}</span> </div>
            <!-- End Date --> 
            <!-- Begin Title -->
            <div class="post-title">
              <h1>{{ $post->title }}</h1>
              <div class="post-meta"> <span class="creator"><a href="#">{{ $post->user->name or '' }}</a></span> <span class="categories"><a href="#">{{ $post->cat->name or '' }}</a></span> </div>
            </div>
            <!-- End Title --> 
          </div>
          <!-- End Post Info -->
          
          <div class="post-text"> <img width="100%" src="{{asset('/storage/').'/'. $post->image}}" alt="" /> <br />
            {!! $post->body !!}
            <br />
            <br />
          </div>
          <!-- End Text --> 
          <span class="tags"><a href="#">Black & White</a>, <a href="#">Color</a>, <a href="#">Portfolio</a></span> </div>
        <!-- End Post -->
        
        <div class="hr2"></div>
        
        <!-- Begin Comments -->
        
        <h3>5 Responses to "Proin euismod dui rutrum risus"</h3>
        
        <!-- Begin Comments -->
        <div id="comments">
          <ol id="singlecomments" class="commentlist">
            <li class= "clearfix">
              <div class="user"><img alt="" src="style/images/art/a1.jpg" height="60" width="60" class="avatar" /></div>
              <div class="message">
                <div class="info">
                  <h3><a href="#">Jacqueline</a></h3>
                  <span class="date">April 4, 2010</span> <a class="reply-link" href="#">Reply</a> </div>
                <p>Quisque tristique tincidunt metus non aliquam. Quisque ac risus sit amet quam sollicitudin vestibulum vitae malesuada libero. Mauris magna elit, suscipit non ornare et, blandit a tellus. Pellentesque dignissim ornare elit, quis mattis eros sodales ac.</p>
              </div>
              <div class="clear"></div>
              <ul class="children">
                <li class= "clearfix">
                  <div class="user"><img alt="" src="style/images/art/a2.jpg" height="60" width="60" class="avatar" /></div>
                  <div class="message">
                    <div class="info">
                      <h3><a href="#">Mathieu</a></h3>
                      <span class="date">April 4, 2010</span> <a class="reply-link" href="#">Reply</a> </div>
                    <p>Quisque tristique tincidunt metus non aliquam. Quisque ac risus sit amet quam sollicitudin vestibulum vitae malesuada libero. Mauris magna elit, suscipit non ornare et, blandit a tellus. Pellentesque dignissim ornare elit, quis mattis eros sodales ac.</p>
                  </div>
                  <div class="clear"></div>
                  <ul class="children">
                    <li class= "clearfix">
                      <div class="user"><img alt="" src="style/images/art/a3.jpg" height="60" width="60" class="avatar" /></div>
                      <div class="message">
                        <div class="info">
                          <h3><a href="#">Charlene</a></h3>
                          <span class="date">April 4, 2010</span> <a class="reply-link" href="#">Reply</a> </div>
                        <p>Quisque tristique tincidunt metus non aliquam. Quisque ac risus sit amet quam sollicitudin vestibulum vitae malesuada libero. Mauris magna elit, suscipit non ornare et, blandit a tellus. Pellentesque dignissim ornare elit, quis mattis eros.</p>
                      </div>
                      <div class="clear"></div>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class= "clearfix">
              <div class="user"><img alt="" src="style/images/art/a4.jpg" height="60" width="60" class="avatar" /></div>
              <div class="message">
                <div class="info">
                  <h3><a href="#">Isabel</a></h3>
                  <span class="date">April 4, 2010</span> <a class="reply-link" href="#">Reply</a> </div>
                <p>Quisque tristique tincidunt metus non aliquam. Quisque ac risus sit amet quam sollicitudin vestibulum vitae malesuada libero. Mauris magna elit, suscipit non ornare et, blandit a tellus. Pellentesque dignissim ornare elit, quis mattis eros sodales ac.</p>
              </div>
              <div class="clear"></div>
            </li>
            <li class= "clearfix">
              <div class="user"><img alt="" src="style/images/art/a5.jpg" height="60" width="60" class="avatar" /></div>
              <div class="message">
                <div class="info">
                  <h3><a href="#">Isabel</a></h3>
                  <span class="date">April 4, 2010</span> <a class="reply-link" href="#">Reply</a> </div>
                <p>Quisque tristique tincidunt metus non aliquam. Quisque ac risus sit amet quam sollicitudin vestibulum vitae malesuada libero. Mauris magna elit, suscipit non ornare et, blandit a tellus. Pellentesque dignissim ornare elit, quis mattis eros sodales ac.</p>
              </div>
              <div class="clear"></div>
            </li>
          </ol>
        </div>
        <!-- End Comments --> 
        
        <!-- Begin Form -->
        <div class="comment-form">
          <h3>Leave a Reply</h3>
          <div class="form-container">
            <form class="forms cform" action="#" method="post">
              <fieldset>
                <ol>
                  <li class="form-row text-input-row">
                    <label>Name</label>
                    <input type="text" name="name" value="" class="text-input required" title="" />
                  </li>
                  <li class="form-row text-input-row">
                    <label>Email</label>
                    <input type="text" name="email" value="" class="text-input required email" title="" />
                  </li>
                  <li class="form-row text-area-row">
                    <label>Message</label>
                    <textarea name="message" class="text-area required"></textarea>
                  </li>
                  <li class="form-row hidden-row">
                    <input type="hidden" name="hidden" value="" />
                  </li>
                  <li class="button-row">
                    <input type="submit" value="Submit" name="submit" class="btn-submit" />
                  </li>
                </ol>
                <input type="hidden" name="v_error" id="v-error" value="Required" />
                <input type="hidden" name="v_email" id="v-email" value="Enter a valid email" />
              </fieldset>
            </form>
            <div class="response"></div>
          </div>
        </div>
        <!-- End Form --> 
        
        <!-- End Comments --> 
        
      </div>
@endsection