<x-frontend>

  <section class="banner-sec">
    <div class="container">

      <div class="row">
        @for($i=0; $i<=3; $i++)

        <div class="col-md-3">
          <div class="card"> 
            <a href="{{ route('frontend.home', $data[0][$i]->id)}}">
              <img class="img-fluid" src="{{ $data[0][$i]->image }}" alt="">
            </a>
              <div class="card-img-overlay"> <span class="tag tag-pill tag-danger">{{ $data[0][$i]->category->name }}</span> </div>
                <div class="card-block">
                  <div class="news-title">
                    <h2 class=" title-small"><a href="#">{{ $data[0][$i]->caption }}</a></h2>
                  </div>
                <p class="card-text"><small class="text-time"><em>{{ $data[0][$i]->publishdate }}</em></small></p>
                </div>
            </div>
        </div>

        @endfor
      </div>
    </div>
  </div>
</section>

<section class="section-01">
  <div class="container">
    <div class="row">

      <div class="col-lg-8 col-md-12">
        <h3 class="heading-large">Politics</h3>
          <div class="row">
            @php $i =1; @endphp
            @foreach($poarticles as $key => $poarticle)

            <div class="col-lg-6">
              <div class="card"> <img class="img-fluid" src="{{ $poarticle->image }}" alt="">
                <div class="card-block">
                  <div class="news-title">
                    <a href="#"><h2 class=" title-small">{{ $poarticle->caption }}</h2></a>
                  </div>
                  <p class="card-text">{{ $poarticle->subcontent }}</p>
                  <p class="card-text"><small class="text-time"><em>{{ $poarticle->publishdate }}</em></small></p>
                </div>
              </div>
          </div>

           @endforeach     
        </div>
      </div>
          
      <aside class="col-lg-4 side-bar col-md-12">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Latest</a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Top</a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages" role="tab">Featured</a> </li>
        </ul>
      
        <!-- Tab panes -->
        <div class="tab-content sidebar-tabing">
          @php $i =1; @endphp
            @foreach($toparticles as $key => $toparticle)

          <div class="tab-pane active" id="home" role="tabpanel">
            <div class="media"> <a class="media-left" href="#"> <img class="media-object" src="{{ $toparticle->image }}" alt=""> </a>
              <div class="media-body">
                <div class="news-title">
                  <h2 class="title-small"><a href="#">{{ $toparticle->caption }}</a></h2>
                </div>
                <div class="news-auther"><span class="time">{{ $toparticle->publishdate }}</span></div>
              </div>
            </div>

          </div>

            @endforeach

            @php $i =1; @endphp
            @foreach($newarticles as $key => $newarticle)
          <div class="tab-pane" id="profile" role="tabpanel">
            <div class="media"> 
              <a class="media-left" href="#"> <img class="media-object" src="{{ $newarticle->image }}" alt=""> </a>
                <div class="media-body">
                  <div class="news-title">
                    <h2 class="title-small"><a href="#">{{ $newarticle->caption }}</a></h2>
                  </div>
                <div class="news-auther"><span class="time">{{ $newarticle->publishdate }}</span></div>
              </div>
            </div>
          </div>
            @endforeach

            @php $i =1; @endphp
            @foreach($randomarticles as $key => $randomarticle)
          <div class="tab-pane" id="messages" role="tabpanel">
            <div class="media"> <a class="media-left" href="#"> <img class="media-object" src="{{ $randomarticle->image }}" alt=""> </a>
              <div class="media-body">
                <div class="news-title">
                  <h2 class="title-small"><a href="#">{{ $randomarticle->caption }}</a></h2>
                </div>
                <div class="news-auther"><span class="time">{{ $randomarticle->publishdate }}</span></div>
              </div>
            </div>           
          </div>
            @endforeach
        </div>

      </aside>

    </div>
  </div>
</section>

<section class="section-02">
  <div class="container">
    <h3>
      <div class="heading-large">International News Section</div>
    </h3>
    <div class="row">
      <div class="col-md-4">
        <div class="card"> <img class="img-fluid" src="img/media-1.jpg" alt="">
          <div class="card-block">
              <div class="news-title"><a href="#">
                <h2 class=" title-small">An Alternative Form of Mental Health Care Gains a Foothold</h2>
                </a></div>
              <p class="card-text"><small class="text-time"><em>3 mins ago</em></small></p>
          </div>
        </div>
          <ul class="news-listing">
                  <li><a href="#">Key Republicans sign letter warning against candidate</a></li>
                  <li><a href="#">Obamacare Appears to Be Making People Healthier</a></li>
                  <li><a href="#">Syria war: Why the battle for Aleppo matters</a></li>
                  <li><a href="#">‘S.N.L.’ to Lose Two Longtime Cast Members</a></li>
                </ul>
        </div>             
    </div>
  </div>
</section>

<section class="video-gallery-sec">
    <div class="container">
      <h3>
        <div class="heading-large">Today's Image Gallery</div>
      </h3>

      <div class="row">

          <div class="col-md-3">
            <div class="news-block">
              <div class="news-media"><a class="example-image-link" href="img/media-2.jpg" data-lightbox="media-2" data-title="An Alternative Form of Mental Health Care Gains a Foothold"><img class="img-fluid example-image" src="img/media-2.jpg" alt=""></a><span class="gallery-counter"><i class="fa fa-image"></i>12</span></div>
              <h2 class=" title-small">An Alternative Form of Mental Health Care Gains a Foothold</h2>
              <div> </div>
            </div>
          </div>  
      </div>

      <div class="row">

        <div class="col-md-3">
          <div class="news-block">
            <div class="news-media"><a class="example-image-link" href="img/media-6.jpg" data-lightbox="media-6" data-title="Minorities Suffer From Unequal Pain Treatment"><img class="img-fluid" src="img/media-6.jpg" alt=""></a><span class="gallery-counter"><i class="fa fa-image"></i>10</span></div>
            <h2 class=" title-small">Minorities Suffer From Unequal Pain Treatment</h2>
            <div> </div>
          </div>
        </div>
      </div>
            
    </div>
</section>

<div class="sub-footer">
  <div class="container">
    <h3>
      <div class="heading-large">Top Five Stories</div>
    </h3>
      <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
            
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="carousel-item active"> <img class="img-fluid" src="img/footer-col-1.jpg">
            <div class="carousel-caption">
              <div class="news-title">
                <h2 class=" title-large"><a href="#">Ray madison may struggle to get best from Paul in a 4-2-3-1 formation</a></h2>
              </div>
            </div>
          </div>
          <!-- End Item -->
        
          <div class="carousel-item"> <img class="img-fluid" src="img/footer-col-2.jpg">
            <div class="carousel-caption">
              <div class="news-title">
                  <h2 class=" title-large"><a href="#">Delta passengers got pizza delivered to the plane</a></h2>
              </div>
            </div>
          </div>
          <!-- End Item --> 
       </div>
            <!-- End Carousel Inner -->
            
        <ul class="list-group col-sm-4">
          <li data-target="#myCarousel" data-slide-to="0" class="list-group-item active">
            <h4>Ray madison may struggle to get best from Paul in a 4-2-3-1 formation</h4>
          </li>      
        </ul>
            
        <!-- Controls -->
        <div class="carousel-controls"> <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a> <a class="right carousel-control" href="#myCarousel" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a> </div>
    </div>
    <!-- End Carousel --> 
  </div>
</div>
</x-frontend>