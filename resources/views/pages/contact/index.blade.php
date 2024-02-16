@extends('masterpage.main')

@section('content')
    <div class="container" style="padding: 5%;">
        @component('components.forms.headerform',
        [
            'tittle'       => $tittle,
            'description' => $description
        ])
        @endcomponent
        
        @component('components.forms.form')
        @endcomponent
    </div>
@endsection