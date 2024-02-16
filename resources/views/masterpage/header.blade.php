<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{ route('home') }}">Júlio César</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="{{ route('home') }}">Home</a>
      <a class="nav-item nav-link" href="{{ route('gallery') }}">Gallery</a>
      <a class="nav-item nav-link" href="{{ route('blog') }}">Blog</a>
      <a class="nav-item nav-link" href="{{ route('contact') }}">Contact Us</a>
    </div>
    <form class="form-inline my-2 my-lg-0 ml-lg-auto">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>