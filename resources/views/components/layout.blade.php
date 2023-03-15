<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PicoBlog</title>

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
                 
                  <img src="../assets/icons/logo.png" alt="logo du blog">
                  <hgroup>
                      <h1>PicoBlog</h1>
                      <h2>Camille Aubert</h2>                
                  </hgroup>
          </a>
          <div id="reseauxSociaux">
            <a href="https://github.com/CamiJi" target="_blank">
              <img src="../assets/icons/github.png" alt="logo github">
            </a>
            <a href="https://mobile.twitter.com/camWebDevParis" target="_blank">
              <img src="../assets/icons/twitter.png" alt="logo twitter">              
            </a>
            <a href="https://www.linkedin.com/in/camille-aubert-27760a56/" target="_blank">
              <img src="../assets/icons/linkedin.png" alt="logo linkedin">
            </a>
          </div>
              
      </nav>

        {{ $slot }}


    </main>
    <footer><small>Built with <a href="https://laravel.com/" target="_blank">Laravel</a> & <a href="https://picocss.com/" target="_blank">PicoCss</a></small></footer>
  </body>
</html> 