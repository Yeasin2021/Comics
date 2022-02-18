


<section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Comics
              </h3>
              <p class="subtitle-a">
                Read comics, have fun and enjoy life.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
         

          @foreach ($comics as $key=>$item)
          <div class="col-md-4">
            <div class="work-box">
           
            @foreach (json_decode($item->image,true) as $key => $pic)
              <a href="{{asset('image/comics_image/'.$pic)}}" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="{{asset('image/comics_image/'.$pic)}}" alt="" class="img-fluid">
                </div>
              </a>
              @break
            @endforeach
              
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">{{ $item->comics_title }}</h2>
                    <div class="w-more">
                      <span class="w-ctegory">{{ $item->comics_category->comics_category }}</span><i class="fa fa-eye" style="margin-left:5px;"><span style="font-size:15px;margin-left:5px;">{{ $item->visitor }}</span></i>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="{{ route('comics-details',$item->id) }}"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
         
          @endforeach
        </div>
        {{-- pagination --}}
         {{ $comics->links() }}
      </div>
    </section>