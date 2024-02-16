@extends('masterpage.main')

@section('content')
    <div class="container" style="padding: 3%">

        @component('components.blogposts.headerposts.headerpost',
        [
            'blogTittle'       => $tittle,
            'blogDescription' => $description
        ] )
        @endcomponent

        <div class="row">

            @component('components.blogposts.posts.post',
            [
                'posts' => $posts
            ])
            @endcomponent
            
            @component('components.blogposts.lateralposts.lateralpost',
            [
                'dates' => $archiveDates,
                'links' => $linksList
            ])
            @endcomponent
            
        </div>
    </div>    
@endsection