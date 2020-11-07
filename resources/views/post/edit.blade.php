<x-layout>
    
    <div class="container pt-custom pb-5 mb-5">
        <div class="row justify-content-center">
            
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-color-marvel text-white font display-4">Modifica il post
                        
                    </div>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="card-body">
                        <form method="POST" action="{{route('post.update', compact('post'))}}" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            
                            
                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right font font-large">Inserisci il nuovo titolo</label>
                                
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="title" value="{{$post->title}}" >
                                    
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="img" class="col-md-4 col-form-label text-md-right font font-large">Inserisci una nuova immagine</label>
                                
                                <div class="col-md-6">
                                    <input type="file" class="form-control" name="img" value="" >
                                    
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="body" class="col-md-4 col-form-label text-md-right font font-large">Inserisci un nuovo post</label>
                                
                                <div class="col-md-6">
                                    <textarea name="body" cols="43" rows="10">{{$post->body}}</textarea>
                                    
                                </div>
                                
                            </div>
                            <div class="row form-group ">
                                <div class="col-12 text-right">
                                    <button type="submit" class=" btn btn-color text-white font font-large">Invia!</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>