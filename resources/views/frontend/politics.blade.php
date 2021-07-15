<x-frontend>
	<section class="banner-sec">
	    <div class="container">

	      <div class="row">
	        @php $i =1; @endphp
            @foreach($poarticles as $key => $poarticle)


	        <div class="col-md-3">
	          <div class="card"> 
	            <a href="{{ route('frontend.politics')}}">
	              <img class="img-fluid" src="{{ $poarticle->image }}" alt="">
	            </a>
	              <div class="card-img-overlay"> <span class="tag tag-pill tag-danger">{{ $poarticle->category->name }}</span> </div>
	                <div class="card-block">
	                  <div class="news-title">
	                    <h2 class=" title-small"><a href="{{ route('frontend.detail',$poarticle->id)}}">{{ $poarticle->caption }}</a></h2>
	                  </div>
	                <p class="card-text"><small class="text-time"><em>{{ $poarticle->publishdate }}</em></small></p>
	                </div>
	            </div>
	        </div>

	        @endforeach
	      </div>
	    </div>
	</section>
</x-frontend>