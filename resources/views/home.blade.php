<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Camille Aubert - PicoBlog</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body  class="container">
    <header>
      {{-- <hgroup>
        <h1>Camille Aubert</h1>
        <h2>Développeur Web</h2>
      </hgroup> --}}
    </header>
    {{-- <nav>
      <ul>
        <li><strong>Blog personnel</strong></li>
      </ul>
      <ul>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#" role="button">Button</a></li>
      </ul>
    </nav> --}}
    <nav>
      <ul>
        <li><a href="#" class="secondary"><--</a></li>
      </ul>
      <ul>
        <li>      
          <hgroup>
            <h1>Camille Aubert</h1>
            <h2>Développeur Web - PicoBlog</h2>
          </hgroup>
      </li>
      </ul>
      <ul>
        <li><a href="#" class="secondary">--></a></li>
      </ul>
    </nav>
    <main>
      <section class="grid">
        <article>
          <hgroup>
            <h3>PHP est mort</h3>
            <h4>Le décès est survenu en 2089</h4>
            <small>Publié le 01/01/2021</small>
          </hgroup>
          <img src="https://via.placeholder.com/300x150/2c3d49">
        </article>
        <article>
          <hgroup>
            <h3>PHP est mort</h3>
            <h4>Le décès est survenu en 2089</h4>
            <small>Publié le 01/01/2021</small>
          </hgroup>
          <img src="https://via.placeholder.com/300x150/2c3d49">
        </article>
        <article>
          <hgroup>
            <h3>PHP est mort</h3>
            <h4>Le décès est survenu en 2089</h4>
            <small>Publié le 01/01/2021</small>
          </hgroup>
          <img src="https://via.placeholder.com/300x150/2c3d49">
        </article>



       
      </section>

    </main>
    <footer><small>Built with Laravel & Pico</small></footer>
  </body>
</html> 