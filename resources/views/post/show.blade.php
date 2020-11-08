        <x-layout>
            <div class="container pt-custom">
                <div class="row">

                    <div class="col-12 col-md-2">

                    </div>
                    <div class="col-12 col-md-8 p-outset">
                        <img class="img-fluid  pt-3 mb-3" src="{{Storage::url($post->img )}}" alt="">
                        <h1 class="font font-red-marvel text-center mb-3">{{$post->title}}</h1>
                        <div class="text-white text-left small font-italic">Postato il 
                            <span>{{$post->created_at->format('d/m/y')}}</span>
                        </div>              
                        <h3 class=" text-justify lead font-body text-white pt-3 word-wrap">{{$post->body}}</h3>
                        <a class="text-white font" href="{{ route('homepage') }}"><-------back-------</a>
                    </div>
                    <div class="col-12 col-md-2">
                       
                        
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12 col-md-6   ">
                    <a href="{{ route('post.edit', compact('post')) }}" class="btn btn-color text-white font font-large float-right">modifica post</a>
                </div>
                <div class="col-12 col-md-6 ">
                    <form action="{{ route('post.destroy', compact ('post')) }} " method="post">
                        @method('delete')
                        @csrf
                        <button class="btn btn-color text-white font font-large">cancella post</button>
                    </form>
                </div>
            </div>
            </x-layout>