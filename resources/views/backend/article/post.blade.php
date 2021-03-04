<x-backend>
	<h2 class="text-center text-primary">Upload Post</h2>
	<form>
		<div class="form-group">
			<label for="posttitle">Post Title</label>
			<input type="text" class="form-control" id="posttitle">
		</div>
		<div class="form-group">
			<label for="postcategory">Post Category</label>
			<select class="form-control" id="postcategory">
				<option>အားကစား</option>
				<option>နိုင်ငံရေး</option>
				<option>ဖျော်ဖြေရေး</option>
				<option>ဆောင်းပါး</option>
				<option>နည်းပညာ</option>
			</select>
		</div>
		<div class="form-group">
			<label for="postauthor">Post Author</label>
			<input type="text" class="form-control" id="postauthor">
		</div>
		<div class="form-group">
			<label for="postimage">Post Image</label>
			<input type="file" class="form-control-file" id="postimage">
		</div>
		<div class="form-group">
            <label for="postdate">Post Date</label>
            <input type="date" name="post_date" class="form-control" id="postdate">
        </div>
        <div class="form-group">
            <label for="">Post Content</label>
            <textarea name="post_content" class="form-control" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" value="Upload" class="btn btn-primary">
        </div>
	</form>
</x-backend>