@extends('masterpage.main')

@section('content')

    @component('components.photos.photo',
    [
        'galleryTittle'      => $tittle,
        'galleryDescription' => $description,
        'listImages'         => $images

    ])
    @endcomponent
    
@endsection