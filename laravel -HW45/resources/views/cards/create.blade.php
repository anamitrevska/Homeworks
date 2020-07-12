@extends('index')

@section('create')

<div id="wrapper">
    <div id="page" class="container" >
        <h1 class="heading has-text-weight-bold is-size-4"> New Card</h1>
        <form action="/cards" method="POST" enctype="multipart/form-data">
            @csrf 
     
            <!-- @if($errors->any())
                {!! implode("", $errors->all())!!}
            @endif -->
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Card text</label>
                <textarea class="form-control border border-dark" name='body' id="textcard" rows="2"></textarea>
              </div>
             <p>Select image to upload:</p> 
              <input type="file" name="imageUpload" id="imageUpload" >
              <div class="control">
                  <br>
                <button class="button" type="submit">Save Card</button>
            </div>
        </form>
    </div>
    </div>

@endsection