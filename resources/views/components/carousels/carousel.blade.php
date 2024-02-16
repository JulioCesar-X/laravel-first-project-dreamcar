<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ $carouselImage1}}" class="d-block w-100" alt="">
        <div class="carousel-caption d-none d-md-block">
          <h5>{{ $carouselLabel1 }}</h5>
          <p>{{ $carouselTxt3 }}</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ $carouselImage2}}" class="d-block w-100" alt="">
        <div class="carousel-caption d-none d-md-block">
          <h5>{{ $carouselLabel2 }}</h5>
          <p>{{ $carouselTxt2 }}</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ $carouselImage3}}" class="d-block w-100" alt="">
        <div class="carousel-caption d-none d-md-block">
          <h5>{{ $carouselLabel3 }}</h5>
          <p>{{ $carouselTxt3 }}</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
  </div>