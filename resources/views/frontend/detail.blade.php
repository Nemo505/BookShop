<x-frontend>
  
 <section>
    <!-- Page Content -->
  <div class="container">
    <div class="row">
      @php $i = 1; @endphp
      
      @php 
              $id = $article->id;
              
      @endphp
      <!-- Post Content Column -->
        <div class="col-lg-12">      
          <h2 class="mt-4">{{ $article->title }}</h2>    
          <p class="lead">
            by
            <a href="#">{{ $article->author }}</a>
          </p>
          <hr>
          <p>{{ $article->publishdate }}</p>
          <hr>

          <!-- Preview Image -->      
          <div class="text-center">          
            <img src="{{ $article->image }}" class="mb-0 img-fluid rounded" alt="Responsive image">
          </div>
            <h3><small class="text-muted">{{ $article->caption }}</small></h3>
          <hr>
          <!-- Post Content -->
          <p class="lead text-justify">{{ $article->content }}</p>
        <hr>

      </div>

    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>


</x-frontend>