



<section id="blog" class="blog-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Blog
              </h3>
              <p class="subtitle-a">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        
        <div class="row">
          @foreach($blog as $item)
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="{{route('blog-details',$item->id)}}"><img src="{{$item->image}}" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">{{$item->type}}</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="blog-single.html">{{$item->title}}</a></h3>
                <p class="card-description">
                 {!! \Illuminate\Support\Str::limit($item->description, 140, '') !!}
                 @if (strlen($item->description) > 170)
                 <span id="dots">...</span><a href="{{ route('blog-details',$item->id) }}" class="read-more mt-2">Read More</a> @endif
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="{{asset('theme/assets')}}/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                    <span class="author">Morgan Freeman</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="ion-ios-clock-outline"></span> {{$item->count}}
                </div>
              </div>
            </div>
          </div>
          @endforeach
          
         
        </div>
        {{$blog->links()}}
        
      </div>
    </section>