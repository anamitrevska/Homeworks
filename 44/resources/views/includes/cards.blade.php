<div id="extra">
    <div class="container">
        <div class="row no-collapse-1">
            @foreach ($cards as $value)
            <section class="4u"> <a href="#" class="image featured"><img src="images/{{$value->img_filename}}" alt=""></a>
                <div class="box">
                <p>{{$value->body}}</p>
                    <a href="#" class="button">Read More</a> </div>
            </section>
            @endforeach
        </div>
        <div class="row no-collapse-1">
            @foreach ($cards as $value)
            <section class="4u"> <a href="#" class="image featured"><img src="images/{{$value->img_filename}}" alt=""></a>
                <div class="box">
                <p>{{$value->body}}</p>
                    <a href="#" class="button">Read More</a> </div>
            </section>
            @endforeach
        </div>
    </div>
</div>