<x-layout>    

      <section class="grid" id="pagination">
        @if (!empty($previousPage))
          <div><a href="{{ route("home") }}?page={{$previousPage}}"><small><</small></a></div>
        @endif
        @if(!empty($nextPage))
          <div><a href="{{ route("home") }}?page={{$nextPage}}"><small>></small></a></div>
        @endif
        </section>
      <section class="grid">
        @foreach($articles as $article)
            <a href="/article/{{ $article->id }}" class="cardArticle">
              <article>
                <hgroup>
                  <h3>{{ $article->title }}</h3>
                  {{-- <h5>{{ $article->subtitle }}</h5> --}}
                  <small>Publié le {{ $article->updated_at->format('d/m/Y') }}</small>
                </hgroup>
                <img src="{{ $article->image }}">
              </article>
            </a>
        @endforeach 
      </section>
      
</x-layout>