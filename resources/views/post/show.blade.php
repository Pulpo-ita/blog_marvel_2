<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <img class="card-img-top" src="{{ Storage::url($post->img) }}" alt="Card image cap">
                    <div class="card-body">
                     <h5 class="card-title">{{$post->title}}</h5>
                      <p class="card-text">{{$post->body}}</p>
                      
                    </div>
            </div>
    <div class="row">
        <div class="col-12 col-md-4 mt-2">
            <a href="{{ route('homepage') }}" class="btn btn-primary">HOMEPAGE</a>
        </div>
        <div class="col-12 col-md-4 mt-2">
            <a href="{{ route('post.edit', compact('post')) }}" class="btn btn-success">modifica post</a>
        </div>
        <div class="col-12 col-md-4 mt-2">
            <form action="{{ route('post.destroy', compact ('post')) }} " method="post">
                @method('delete')
                @csrf
                <button class="btn btn-danger">cancella post</button>
            </form>
           
        </div>
    </div>
</div>
</div>
</x-layout>