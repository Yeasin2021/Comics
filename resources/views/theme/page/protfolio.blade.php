


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
            @foreach (json_decode($item->image,true) as $pic)
              <a href="{{asset('image/comics_image/'.$pic)}}" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="{{asset('image/comics_image/'.$pic)}}" alt="" class="img-fluid">
                </div>
              </a>
            @endforeach
              
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">{{ $item->comics_title }}</h2>
                    <div class="w-more">
                      <span class="w-ctegory">{{ $item->comics_category->comics_category }}</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-details.html"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          


          {{-- <div class="col-md-4">
            <div class="work-box">
              <a href="{{asset('theme/assets')}}/img/work-2.jpg" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="{{asset('theme/assets')}}/img/work-2.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Loreda Cuno Nere</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-details.html"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="{{asset('theme/assets')}}/img/work-3.jpg" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="{{asset('theme/assets')}}/img/work-3.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Mavrito Lana Dere</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-details.html"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="{{asset('theme/assets')}}/img/work-4.jpg" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="{{asset('theme/assets')}}/img/work-4.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Bindo Laro Cado</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-details.html"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="{{asset('theme/assets')}}/img/work-5.jpg" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="{{asset('theme/assets')}}/img/work-5.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Studio Lena Mado</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-details.html"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="{{asset('theme/assets')}}/img/work-6.jpg" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="{{asset('theme/assets')}}/img/work-6.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Studio Big Bang</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2017</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-details.html"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}

        </div>
      </div>
    </section>