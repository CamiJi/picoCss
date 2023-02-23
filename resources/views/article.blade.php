
<x-layout>

    <div id="article">

        <hgroup>
            <h1>{{$article->title}}</h1>
            <h2></h2>
            <small>Publié le {{$article->updated_at->format('d/m/Y')}} par Camille Aubert</small>
        </hgroup>
        <br />
        <img src="{{ $article->image }}"> 
        <p>{{ $article->content }}</p>
        
    </div>

</x-layout>