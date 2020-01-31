<div {!! $attrTag !!} id="carouselExampleCaptions" data-ride="carousel">
    <ol class="carousel-indicators">
        @for($x = 0; $x < $meta['count-plugins']; $x++)
            <li data-target="#carouselExampleCaptions" data-slide-to="{{$x}}" class="{{!$x ? 'active' : ''}}"></li>
        @endfor
    </ol>
    <div class="carousel-inner">
        {!! $htmlPlugins !!}
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
