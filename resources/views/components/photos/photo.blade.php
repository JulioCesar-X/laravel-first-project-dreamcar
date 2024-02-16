<div class="container" style="padding: 2%">
    <div class="jumbotron text-black bg-light text-center">
        <h1 class="display-4">{{ $galleryTittle }}</h1>
        <p class="lead">{{ $galleryDescription }}</p>
        <button  href="#" class="btn btn-outline-dark my-2 my-sm-0 border" type="submit" style="box-shadow: 0 0 10px 5px rgba(0, 0, 0, 50);">View Now</button>
    </div>

    <div class="row justify-content-center">

        @foreach ( $listImages as $image )   

            <div class="col-md-3">
                <img src="{{ $image }}" class="img-fluid gallery-img" style="padding:1%;">
            </div>

        @endforeach 
      
    </div>
</div>