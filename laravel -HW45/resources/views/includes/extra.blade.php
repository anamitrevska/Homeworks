  @extends('index')
  @section('content')

  <div id="extra">
    <div class="container">
        <div class="row no-collapse-1">
            @foreach ($cards as $value)
            <section style="padding-bottom: 20px;" class="4u"> <a href="#" class="image featured"><img src="images/{{$value->img_filename}}" alt="jh"></a>
                <div class="box">
                <p>{{$value->body}}</p>
                    <a href="/card/{{$value->id}}" class="button">Read More</a> </div>
            </section>
            @endforeach
        </div>
    </div>

    <br>
				<div class="container">
					<a href="/create" class="button">Create New Article</a>

				</div>

</div>  

  @endsection
			