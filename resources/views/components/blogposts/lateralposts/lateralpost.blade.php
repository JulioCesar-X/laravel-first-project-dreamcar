<div class="col-md-4">
    <div class="row">
        <ul class="list-group">
            <h4>Archives</h4>
            @foreach ($dates as $date)
                <li><a href="#">{{ $date }}</a></li>    
            @endforeach
        </ul>
    </div>
    <br />
    <div class="row">
        <ul class="list-group">
            <h4>Elsewhere</h4>
            @foreach ($links as $link)
                <li><a href="#">{{ $link }}</a></li>
            @endforeach
        </ul>
    </div>
</div>