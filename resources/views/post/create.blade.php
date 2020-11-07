<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Crea il tuo nuovo post</h1>
            </div>
        </div>
        
        <div class="row">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="col-12 col-md-6 offset-md-3">
                <form method="POST" action="{{route('post.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="title">Inserisci il titolo</label>
                        <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Inserisci il titolo..." value="{{old('title')}}" name="title">
                        
                    </div>
                    <div class="form-group">
                        <label for="body">Inserisci il tuo Post</label>
                        <textarea name="body" cols="30" rows="10">{{old('body')}}</textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Invia!</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>