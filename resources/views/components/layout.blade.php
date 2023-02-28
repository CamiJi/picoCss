<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>{{ $article->title ?? 'Camille Aubert - PicoBlog' }}</title>
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
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path fill="#333" d="M12 0a12 12 0 0 0-3.8 23.36c.6.11.82-.26.82-.58v-1.92c-3.35.73-4.05-1.55-4.05-1.55-.55-1.4-1.33-1.77-1.33-1.77-1.08-.74.08-.72.08-.72 1.2.08 1.83 1.23 1.83 1.23 1.07 1.84 2.81 1.3 3.5.99.1-.76.42-1.28.76-1.58-2.66-.3-5.46-1.34-5.46-6.04 0-1.34.48-2.44 1.23-3.3-.12-.3-.53-1.56.1-3.24 0 0 1-.33 3.3 1.25.96-.27 1.98-.4 3-.4 1.02 0 2.04.14 3 .4 2.3-1.58 3.3-1.25 3.3-1.25.63 1.68.22 2.94.1 3.24.75.86 1.23 1.96 1.23 3.3 0 4.7-2.8 5.74-5.47 6.03.43.38.81 1.13.81 2.28v3.38c0 .32.22.7.83.57A12 12 0 0 0 12 0z"/>
              </svg>
            </a>
            <a href="https://mobile.twitter.com/camWebDevParis" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M23.996 6.877a9.14 9.14 0 0 1-2.6.713 4.56 4.56 0 0 0 2.002-2.524 9.116 9.116 0 0 1-2.89 1.104 4.557 4.557 0 0 0-7.788 4.155 12.945 12.945 0 0 1-9.4-4.767 4.557 4.557 0 0 0 1.41 6.078 4.527 4.527 0 0 1-2.06-.567v.057a4.56 4.56 0 0 0 3.64 4.47 4.597 4.597 0 0 1-2.054.078 4.557 4.557 0 0 0 4.257 3.16 9.14 9.14 0 0 1-5.672 1.956 9.428 9.428 0 0 1-1.13-.068 12.888 12.888 0 0 0 6.98 2.043c8.4 0 12.993-6.957 12.993-12.994 0-.198-.005-.397-.015-.593a9.276 9.276 0 0 0 2.272-2.375z"/>
              </svg>
            </a>
            <a href="https://www.linkedin.com/in/camille-aubert-27760a56/" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="#0077B5" d="M22 2H2a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h20a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zM8.17 19.1H4.39V9.81h3.78zm-1.89-10.6h-.03c-1.06 0-1.77-.73-1.77-1.64a1.62 1.62 0 0 1 1.75-1.66c1.06 0 1.77.74 1.8 1.64a1.64 1.64 0 0 1-1.75 1.66zM20 19.1h-3.78v-5.6c0-1.33-.47-2.24-1.65-2.24a1.8 1.8 0 0 0-1.68 1.22 2.2 2.2 0 0 0-.11.78v5.84h-3.78s.05-10.33 0-11.4h3.78v1.61a3.82 3.82 0 0 1 3.46-1.9c2.35 0 4.1 1.54 4.1 4.83z"/>
              </svg>
            </a>
          </div>
              
      </nav>

        {{ $slot }}


    </main>
    <footer><small>Built with <a href="https://laravel.com/" target="_blank">Laravel</a> & <a href="https://picocss.com/" target="_blank">PicoCss</a></small></footer>
  </body>
</html> 