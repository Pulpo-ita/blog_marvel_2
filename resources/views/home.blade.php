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
</x-layout>