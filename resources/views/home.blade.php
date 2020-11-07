<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <div class="col-md-8">
                <h1>Benvenuti nel blog della marvel</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
                <a href="{{route('post.create')}}" class="btn btn-success mt-3">Inserisci un nuovo post</a>
            </div>
            <div class="row mt-4">
                @foreach ($posts as $post)
                <div class="col-12 col-md-4 mx-2">
                    <div class="card">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">{{$post->title}}</h5>
                          <p class="card-text">{{$post->body}}</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>   
                @endforeach
                
            </div>    
        </div>
    </div>
</x-layout>