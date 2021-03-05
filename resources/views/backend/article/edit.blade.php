<x-backend>
	<h2 class="text-center text-primary">Edit Post</h2>
	<form action="{{ route('article.update',$article->id) }}" method="POST" enctype="multipart/form-data">
		@csrf
		@method('PUT')
		<input type="hidden" name="oldphoto" value="{{ $article->image }}">
		<div class="form-group">
			<label for="posttitle">Post Title</label>
			<input type="text" class="form-control" id="posttitle" name="posttitle" value="{{ $article->title }}">
		</div>
		<div class="form-group">
			<label for="postcategory">Post Category</label>
			<select class="form-control" id="postcategory" name="postcategory">
				<option value="0"> Choose Category </option>
					@foreach($categories as $category)
						<option 
						@if($article->category_id==$category->id)
							selected
							@endif 
						value="{{ $category->id }}">{{ $category->name }}</option>
					@endforeach
			</select>
		</div>
		<div class="form-group">
			<label for="postauthor">Post Author</label>
			<input type="text" class="form-control" id="postauthor" name="postauthor" value="{{ $article->author }}">
		</div>
		<div class="form-group">
            <label for="postsubcontent">Post SubContent</label>
            <textarea name="postsubcontent" class="form-control" id="" cols="30" rows="3" id="postsubcontent" value="{{ $article->subcontent }}">{{ $article->subcontent }}</textarea>
        </div>

		<div class="form-group row">
        	<label class="col-sm-2 col-form-label" for="postimage">Post Image</label>
            <div class="col-sm-10">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
				  	<li class="nav-item">
				    	<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Old Photo</a>
				  	</li>
				  	<li class="nav-item">
				   	 	<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">New Photo</a>
				  	</li>
		
				</ul>
				<div class="tab-content" id="myTabContent">
				  	<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
				  		<img src="{{ $article->image }}" style="height: 150px; width: 150px;">
				  	</div>
				  	<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
				  		<input type="file" name="postimage">
				  	</div>
				</div>
			</div>
		</div>
		<div class="form-group">
            <label for="postcaption">Post Caption</label>
            <input type="text" name="postcaption" class="form-control" id="postcaption" value="{{ $article->caption }}">
        </div>
		<div class="form-group">
            <label for="postdate">Post Date</label>
            <input type="date" name="postdate" class="form-control" id="postdate" value="{{ $article->publishdate }}">
        </div>
        
        <div class="form-group">
            <label for="postcontent">Post Content</label>
            <textarea name="postcontent" class="form-control" id="" cols="30" rows="10" id="postcontent" value="{{ $article->content }}">{{ $article->content }}</textarea>
        </div>

        <div class="form-group">
            <label for="poststatus">Post Status</label>
            <select class="form-control" id="poststatus" name="poststatus">
            	<option value="0">{{ $article->status }}</option>				
				<option value="1"> 0 </option>
				<option value="2"> 1 </option>					
			</select>
        </div>
        <div class="form-group">
			<label> Language</label>
			<select class="form-control select2" name="postlanguage" >
				<option value="0"> Choose Language </option>

				@foreach($languages as $language)
					<option 
					@if($article->language_id==$language->id)
						selected
						@endif 
					value="{{ $language->id }}">{{ $language->name }}</option>
				@endforeach
			</select>

		</div>

        <div class="form-group">
            <input type="submit" value="Upload" class="btn btn-primary">
        </div>
	</form>
</x-backend>