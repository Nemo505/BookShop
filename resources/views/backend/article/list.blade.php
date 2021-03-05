<x-backend>
<h1 class="h3 mb-2 text-gray-800">Article</h1>
	<!-- Table for articles -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
	    <h6 class="m-0 font-weight-bold text-primary">All Articles</h6>
	</div>
	<div class="card-body">
		@if(session('successMsg') != NULL)
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>SUCCESS!</strong>
				{{ session('successMsg')}}
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		@endif
	    <div class="table-responsive">
	        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	            <thead>
	                <tr>
	                    <th>No.</th>
	                    <th>Title</th>
	                    <th>Category</th>
	                    <th>Author</th>                    
	                   	<th>Image</th>                
	                    <th>Date</th>
	                    <th>Language</th>
	                    <th>Status</th>
	                    <th>Edit</th>
	                    <th>Delete</th>
	                </tr>
	            </thead>
	            <tfoot>
	                <tr>
	                    <th>No.</th>
	                    <th>Title</th>
	                    <th>Category</th>
	                    <th>Author</th>	                    
	                   	<th>Image</th>           
	                    <th>Date</th>
	                    <th>Language</th>
	                    <th>Status</th>
	                    <th>Edit</th>
	                    <th>Delete</th>

	                </tr>
	            </tfoot>
	            <tbody>
	            	@php $i = 1; @endphp

						@foreach($articles as $article)
						@php 
							$id = $article->id;
							
						@endphp

	                <tr>
	                    <td> {{ $i++ }} </td>
	                    <td> {{ $article->title }} </td>

	                    <td> {{ $article->category->name }} </td>
	                    <td> {{ $article->author }} </td>	                    
	                    <td><img src="{{ $article->image }}" style="width: 150px; height: 150px;"></td>

	                    {{-- <td> {{ $article->caption }} </td>	               	                     --}}
	                    <td> {{ $article->publishdate }} </td>
	                    {{-- <td> {{ $article->status }} </td> --}}
	                    <td> {{ $article->language->name }} </td>

	                    <td>
	                    	<div class="text-center">
	                    		<a href="" class=" btn btn-outline-success w-100">
	                    			<span class="btn-label">
										<i class="icofont-trash">Change Hide</i>
									</span>
								</a>
	                    	</div>
	                    </td>

	                    <td>
	                    	<div class="text-center">
	                    		<a href="{{ route('article.edit',$id) }}" class=" btn btn-outline-primary w-100">
	                    			<span class="btn-label">
										<i class="icofont-trash">Edit</i>
									</span>
								</a>
	                    	</div>
	                    </td>
	                    
	                    <td>
	                    	<form class="d-inline-block" action="{{ route('article.destroy', $id) }}" method="POST" onsubmit="return confirm('Are you sure want to delete?')">
								@csrf
								@method('DELETE')
								<button  class="btn btn-outline-danger">
									<span class="btn-label">
										<i class="icofont-trash">Remove</i>
									</span>
								</button>
							</form>
	                    </td>
	                </tr>
	                
	                @endforeach
	            </tbody>
	        </table>
	    </div>
	</div>
</div>
</x-backend>