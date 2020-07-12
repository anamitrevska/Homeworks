@extends('index')
@section('showcard')
<link rel="stylesheet" href="../css/skel.css" />
<link rel="stylesheet" href="../css/style.css" />
<link rel="stylesheet" href="../css/style-wide.css" />
<div id="extra">
    <div class="container ">
        <div class="row no-collapse-1">
            <section class="4u "> <a href="#" class="image featured"><img src="../images/{{$card->img_filename}}" alt=""></a>
                <div class="box">
                <p>{{$card->body}}</p>
                <a href="/card/{{$card->id}}/edit" class="button">Edit</a> 

                <form action="/card/{{$card->id}}/delete" method="POST">
                    @csrf
                    @method('DELETE')
                    <br>
                    <button type="submit" class="button">Delete</button>
                </form>
                </div>
            </section>
        </div>
            
    </div>

</div> 
@endsection
 







