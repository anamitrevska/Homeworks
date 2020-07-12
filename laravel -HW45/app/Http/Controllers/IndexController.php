<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\UploadedFile;
class IndexController extends Controller
{
    public function index(){
        $cards=Card::all();
        return view('includes.extra',['cards'=>$cards]);
    }


    public function show(Card $card){

        return view('cards.show',['card'=>$card]);
        
    }


    public function create() {
        return view('cards.create');
    }

    public function store(Request $request){
        $this->validateCard();
        $filename=$request->imageUpload;
        $file = $request->file('imageUpload');
        $extension = $file->getClientOriginalExtension();
        $filename=$file->getClientOriginalName();
        Storage::disk('public')->put($filename,  File::get($file));
        $card = new Card();
        $card->body = request('body');
        $card->img_filename = $filename;
        $card->save();      
    return redirect('/');
}

    public function edit($card) { 

        $card = Card::findOrFail($card);

        return view('cards.edit', ['card'=>$card]);
        
    }

    public function update(Card $card) {

     
        $card->update();

        return redirect('/');
        
    }


    public function destroy(Card $card) {
        $card->delete();
        
        return redirect('/');
    }


    private function validateCard() {
        return request()->validate([
            'body' => 'required|min:15',
            'imageUpload' => 'required',
        ]);
    }

}
