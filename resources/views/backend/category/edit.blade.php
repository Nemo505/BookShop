<x-backend>
	<h2 class="text-center text-dark">Upload Category</h2>
	<form action="{{ route('category.update',$category->id) }}" method="POST" enctype="multipart/form-data">
		@csrf
		@method('PUT')
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
		</div>
        <div class="form-group">
            <div class="card-action">
				<button type="submit" class="btn btn-outline-primary"> 
					<i class="fas fa-save"></i> Save
				</button>
				
				<a class="btn btn-outline-danger btn-round ms-auto" href="{{ route('category.index') }}">
					<i class="fas fa-times"></i>
					Cancel
				</a>
			</div>
        </div>
	</form>
</x-backend>