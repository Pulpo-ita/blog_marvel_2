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

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <p class=" display-4 my-4 text-white font py-5 ">Ultimi post inseriti
        </p>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top " src="/img/locandina-iron.jpg" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title font display-4 font-red-marvel">titolo</h2>
            <p class="card-text font display-5">descrizione</p>
            <a href="#" class="btn btn-color text-white font">Continua a leggere... &rarr;</a>
          </div>
          <div class="card-footer text-muted font ">
            Posted on data inserimento by autore

          </div>
          
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
                <a href="{{route('post.create')}}" class="btn btn-success mt-3">Inserisci un nuovo post</a>
            </div>
            <div class="row mt-4">
                @foreach ($posts as $post)
                <div class="col-12 col-md-4 ">
                    <div class="card">
                        <div class="card-body">
                            <img class="card-img-top" src="{{Storage::url($post->img )}}" alt="Card image cap">
                        <h5 class="card-title">{{$post->title}}</h5>
                          <p class="card-text">{{$post->body}}</p>
                          <a href="{{ route('post.show', compact ('post')) }}" class="btn btn-primary">Dettaglio</a>
                        </div>
                      </div>
                </div>   
                @endforeach
                
            </div>    
        </div>
      </div>
    </div>  
  </div>
</x-layout>