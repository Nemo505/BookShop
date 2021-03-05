<x-backend>
<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
	    <h6 class="m-0 font-weight-bold text-dark">All Categories</h6>
	    <a class="btn btn-dark btn-round float-right" href="{{ route('category.create')}}">
			<i class='bx bx-plus' ></i>
			Add New
		</a>
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
	                    <th>Category</th>
	                    
	                    <th>Edit</th>
	                    <th>Delete</th>
	                </tr>
	            </thead>
	            <tfoot>
	                <tr>
	                    <th>No.</th>
	                    <th>Category</th>
	                    
	                    <th>Edit</th>
	                    <th>Delete</th>
	                </tr>
	            </tfoot>
	            <tbody>
	            	@php $i = 1; @endphp

						@foreach($categories as $category)
						@php 
							$id = $category->id;
							
						@endphp
	                <tr>
	                    <td> {{ $i++ }} </td>
	                    <td> {{ $category->name }} </td>	                    
	                    <td>
	                    	<div class="text-center">
	                    		<a href="{{ route('category.edit',$id) }}" class=" btn btn-success w-50"><i class="icofont-ui-settings">Edit</i></a>
	                    	</div>
	                    </td>
	                    <td>
	                    	<div class="text-center">	                    	
	                    	<form class="d-inline-block" action="{{ route('category.destroy', $id) }}" method="POST" onsubmit="return confirm('Are you sure want to delete?')">
								@csrf
								@method('DELETE')								
									<button  class="btn btn-danger ">
									<span class="btn-label">
										<i class="icofont-trash">Remove</i>
									</span>
								</button>								
							</form>
							<div>
	                    </td>
	                </tr>
	                
	            @endforeach
	            </tbody>
	        </table>
	    </div>
	</div>
</div>
</x-backend>