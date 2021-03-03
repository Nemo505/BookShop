<x-backend>
<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
	    <h6 class="m-0 font-weight-bold text-primary">All Languages</h6>
	    <a class="btn btn-primary btn-round float-right" href="">
			<i class='bx bx-plus' ></i>
			Add New
		</a>
	</div>
	<div class="card-body">
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

						@foreach($languages as $language)
						@php 
							$id = $language->id;
							
						@endphp
	                <tr>
	                    <td> {{ $i++ }} </td>
	                    <td> {{ $language->name }} </td>	                    
	                    <td>
	                    	<div class="text-center">
	                    		<a href="" class=" btn btn-success w-50"><i class="icofont-ui-settings">Edit</i></a>
	                    	</div>
	                    </td>
	                    <td>
	                    	<div class="text-center">
	                    		<a href="" class=" btn btn-danger w-50"><i class="icofont-ui-settings">Delete</i></a>
	                    	</div>
	                    </td>
	                </tr>
	                
	            	@endforeach
	            </tbody>
	        </table>
	    </div>
	</div>
</div>
</x-backend>