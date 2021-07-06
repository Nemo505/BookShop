<x-frontend>
	<section class="banner-sec">
	    <div class="container">

	      <div class="row">
	        @php $i =1; @endphp
            @foreach($techarticles as $key => $techarticle)


	        <div class="col-md-3">
	          <div class="card"> 
	            <a href="{{ route('frontend.tech')}}">
	              <img class="img-fluid" src="{{ $techarticle->image }}" alt="">
	            </a>
	              <div class="card-img-overlay"> <span class="tag tag-pill tag-danger">{{ $techarticle->category->name }}</span> </div>
	                <div class="card-block">
	                  <div class="news-title">
	                    <h2 class=" title-small"><a href="#">{{ $techarticle->caption }}</a></h2>
	                  </div>
	                <p class="card-text"><small class="text-time"><em>{{ $techarticle->publishdate }}</em></small></p>
	                </div>
	            </div>
	        </div>

	        @endforeach
	      </div>
	    </div>
	</section>
</x-frontend>