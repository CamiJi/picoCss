<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $article->title ?? 'Camille Aubert - PicoBlog' }}</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
  </head>
  <body  class="container">
    <nav>
      <ul>
        <li><a href="#" class="secondary"><--</a></li>
      </ul>
      <ul>
        <a href="{{ route("home") }}">
            <li>      
                <hgroup>
                    <h1>Camille Aubert</h1>
                    <h2>Développeur Web - PicoBlog</h2>
                </hgroup>
            </li>
        </a>
      </ul>
      <ul>
        <li><a href="#" class="secondary">--></a></li>
      </ul>
    </nav>
    <main>

        {{ $slot }}


    </main>
    <footer><small>Built with Laravel & Pico</small></footer>
  </body>
</html> 