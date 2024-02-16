<div class="col-md-8">
    <p>Daily News</p>
    <hr />
    @foreach ($posts as $post)
        <div class="row">
            <div class="col-md-12">
                <h2>{{ $post[ "tittle".$loop->iteration ] }}</h2>
                <p class="text-muted">{{ $post[ "month" ]." ".$post[ "day" ].", ".$post[ "year" ]." by ".$post[ "auth".$loop->iteration ] }}</p>
                <p>{{ $post[ "content".$loop->iteration ] }}</p>
            </div>
        </div>
    @endforeach

</div>