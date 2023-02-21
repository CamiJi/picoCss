
<x-layout>


    <hgroup>
        <h1>{{$article->title}}</h1>
        <h2></h2>
        <small>Publié le {{$article->updated_at}} par Camille Aubert</small>
        </hgroup>
        <br />
        <img src="{{ $article->image }}"> 
        <p>{{ $article->content }}</p>


</x-layout>