<x-layout>
    <div class="container pt-custom">
        <div class="row">
            <div class="col-12 col-md-2">

            </div>
            <div class="col-12 col-md-8 text-center p-outset  ">
                <h1 class="font font-red-marvel">{{$post->title}}</h1>
                <div class="text-white small font-italic">Postato il <span>{{$post->created_at->format('d/m/y')}}</span></div>
                <img class="img-fluid pt-3 pb-3" src="{{Storage::url($post->img )}}" alt="">
                
                <h3 class=" text-justify lead font-body text-white pt-3 word-wrap">{{$post->body}}</h3>
            </div>
            <div class="col-12 col-md-2">
                
            </div>
        </div>
    </div>

    <div class="row">
                    
        <div class="col-12 col-md-6 mt-5  ">
            <a href="{{ route('post.edit', compact('post')) }}" class="btn btn-color text-white font font-large float-right">modifica post</a>
        </div>
        <div class="col-12 col-md-6 mt-5">
            <form action="{{ route('post.destroy', compact ('post')) }} " method="post">
                @method('delete')
                @csrf
                <button class="btn btn-color text-white font font-large">cancella post</button>
            </form>
            
        </div>
    </div>
    </x-layout>