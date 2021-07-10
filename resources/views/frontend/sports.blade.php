<x-frontend>
	<section class="banner-sec">
	    <div class="container">

	      <div class="row">
	        @php $i =1; @endphp
            @foreach($sportsarticles as $key => $sportsarticle)


	        <div class="col-md-3">
	          <div class="card"> 
	            <a href="{{ route('frontend.sports')}}">
	              <img class="img-fluid" src="{{ $sportsarticle->image }}" alt="">
	            </a>
	              <div class="card-img-overlay"> <span class="tag tag-pill tag-danger">{{ $sportsarticle->category->name }}</span> </div>
	                <div class="card-block">
	                  <div class="news-title">
	                    <h2 class=" title-small"><a href="{{ route('frontend.detail', $sportsarticle->id)}}">{{ $sportsarticle->caption }}</a></h2>
	                  </div>
	                <p class="card-text"><small class="text-time"><em>{{ $sportsarticle->publishdate }}</em></small></p>
	                </div>
	            </div>
	        </div>

	        @endforeach
	      </div>
	    </div>
	</section>
</x-frontend>