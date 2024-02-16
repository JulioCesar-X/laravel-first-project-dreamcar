@extends('masterpage.main')

@section('content')

    @component('components.carousels.carousel',
    [
        'carouselLabel1' => $carsCarousel[ "carouselLabel1" ],
        'carouselTxt1'   => $carsCarousel[ "carouselTxt1" ],
        'carouselImage1' => $carsCarousel[ "carouselImage1" ],
        
        'carouselLabel2' => $carsCarousel[ "carouselLabel2" ],
        'carouselTxt2'   => $carsCarousel[ "carouselTxt2" ],
        'carouselImage2' => $carsCarousel[ "carouselImage2" ],

        'carouselLabel3' => $carsCarousel[ "carouselLabel3" ],
        'carouselTxt3'   => $carsCarousel[ "carouselTxt2" ],
        'carouselImage3' => $carsCarousel[ "carouselImage2" ]
    ])
    @endcomponent

    <div class="container" style="padding: 5%;">

        <div class="row justify-content-center">
            @for ( $i = 1; $i <= 3; $i++ )
                <div class="col-md-4">
                    @component('components.cards.card', [
                        'cardTittle' => $carsCard[ "cardTittle$i" ],
                        'cardTxt'    => $carsCard[ "cardTxt$i" ],
                        'cardImage'  => $carsCard[ "cardImage$i" ]
                    ])
                    @endcomponent
                </div> 
            @endfor
        </div>

        @component('components.grids.grid',
        [
            'gridImage1' => $carsGrid[ "gridImage1" ],
            'gridTxt1'  => $carsGrid[ "gridTxt1" ],
            
            'gridImage2' => $carsGrid[ "gridImage2" ],
            'gridTxt2'  => $carsGrid[ "gridTxt2" ]
        ])
        @endcomponent
        
    </div>

@endsection

