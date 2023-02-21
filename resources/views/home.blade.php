<x-layout>
      <section class="grid">

        @foreach($articles as $article)
            <a href="/article/{{ $article->id }}">
              <article>
                <hgroup>
                  <h3>{{ $article->title }}</h3>
                  <h5>{{ $article->subtitle }}</h5>
                  <small>Publié le {{ $article->updated_at }}</small>
                </hgroup>
                <img src="{{ $article->image }}">
              </article>
            </a>
        @endforeach

      </section>
</x-layout>