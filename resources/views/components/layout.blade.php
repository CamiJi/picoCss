<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $article->title ?? 'Camille Aubert - PicoBlog' }}</title>
    <meta name="description" content="{{ $article->description ?? 'Blog de Camille Aubert, développeur web à Paris' }}">
    <meta name="author" content="Camille Aubert">
    <meta name="keywords" content="Camille Aubert, développeur web, blog, Paris, Laravel, PicoCss">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="google" content="nositelinkssearchbox">
    <meta name="google" content="notranslate">



    {{-- Ajout des favicons source : https://favicon.io/favicon-converter/ --}}
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicons/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

  </head>
  <body>
    <main class="container">
      <nav>
          <a href="{{ route("home") }}">
                 
                  <hgroup>
                      <h1>Camille Aubert</h1>
                      <h2>PicoBlog</h2>                
                  </hgroup>
          </a>
          <div id="reseauxSociaux">
            <a href="https://github.com/CamiJi" target="_blank">
              <img src="assets/icons/github.png" alt="logo github">
            </a>
            <a href="https://mobile.twitter.com/camWebDevParis" target="_blank">
              <img src="assets/icons/twitter.png" alt="logo twitter">              
            </a>
            <a href="https://www.linkedin.com/in/camille-aubert-27760a56/" target="_blank">
              <img src="assets/icons/linkedin.png" alt="logo linkedin">
            </a>
          </div>
              
      </nav>

        {{ $slot }}


    </main>
    <footer><small>Built with <a href="https://laravel.com/" target="_blank">Laravel</a> & <a href="https://picocss.com/" target="_blank">PicoCss</a></small></footer>
  </body>
</html> 