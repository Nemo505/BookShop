<x-backend>
	<h2 class="text-center text-primary">Upload Post</h2>
	<form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label for="posttitle">Post Title</label>
			<input type="text" class="form-control" id="posttitle" name="posttitle">
		</div>
		<div class="form-group">
			<label for="postcategory">Post Category</label>
			<select class="form-control" id="postcategory" name="postcategory">
				<option value="0"> Choose Category </option>
					@foreach($categories as $category)
						<option value="{{ $category->id }}">{{ $category->name }}</option>
					@endforeach
			</select>
		</div>
		<div class="form-group">
			<label for="postauthor">Post Author</label>
			<input type="text" class="form-control" id="postauthor" name="postauthor">
		</div>
		<div class="form-group">
            <label for="postsubcontent">Post SubContent</label>
            <textarea name="postsubcontent" class="form-control" id="" cols="30" rows="3" id="postsubcontent"></textarea>
        </div>
		<div class="form-group">
			<label for="postimage">Post Image</label>
			<input type="file" class="form-control-file" id="postimage" name="postimage">
		</div>
		<div class="form-group">
            <label for="postcaption">Post Caption</label>
            <input type="text" name="postcaption" class="form-control" id="postcaption">
        </div>
		<div class="form-group">
            <label for="postdate">Post Date</label>
            <input type="date" name="postdate" class="form-control" id="postdate">
        </div>
        
        <div class="form-group">
            <label for="postcontent">Post Content</label>
            <textarea name="postcontent" class="form-control" id="" cols="30" rows="10" id="postcontent"></textarea>
        </div>

        <div class="form-group">
            <label for="poststatus">Post Status</label>
            <select class="form-control" id="poststatus" name="poststatus">
            	<option selected=""> Choose Status </option>				
				<option value="1"> 0 </option>
				<option value="2"> 1 </option>					
			</select>
        </div>
        <div class="form-group">
			<label> Language</label>
			<select class="form-control select2" name="postlanguage" >
				<option value="0"> Choose Language </option>

				@foreach($languages as $language)
					<option value="{{ $language->id }}">{{ $language->name }}</option>
				@endforeach
			</select>

		</div>

        <div class="form-group">
            <input type="submit" value="Upload" class="btn btn-primary">
        </div>
	</form>
</x-backend>