<x-layout>
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold font display-2">Benvenuti nel Blog Marvel! </h1>
          
        </div>
        
      </div>
    </div>
  </header>
  
  <!-- Page Content -->
  <div class="container">

    @if (session('status'))

    <div class="alert alert-success">
      {{ session('status') }}
    </div>
        
    @endif
    
    <div class="row">
   <div class="col-12 col-md-2">

   </div>
      <!-- Blog Entries Column -->
      <div class="col-12 col-md-8">
        
        <p class=" display-4 my-4 text-white font py-5 ">Ultimi post inseriti</p>
        
        <!-- Blog Post -->
        @foreach ($posts as $post)
        <div class="card mb-4">
          <img class="card-img-top " src="{{Storage::url($post->img )}}" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title font display-4 font-red-marvel">{{$post->title}}</h2>
            <p class="card-text font-body h4 mb-3">{{Str::limit($post->body,200)}}</p>
            <a href="{{ route('post.show', compact ('post')) }}" class="btn btn-color text-white font">Continua a leggere... &rarr;</a>
          </div>
          <div class="card-footer text-muted font text-right ">
            Postato il <span>{{$post->created_at->format('d/m/y')}}</span>
            
          </div>
          @endforeach
          
        </div>
      </div>  
    </div>
  </x-layout>