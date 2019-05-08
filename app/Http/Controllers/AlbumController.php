<?php

namespace App\Http\Controllers;

use App\Album;
use App\ImageAlbum;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function getAlbums(){

        $images = [];

        $albums = Album::paginate(4);



        foreach ($albums as $key => $chien) {
            $image = ImageAlbum::where('id_album', '=', $albums[$key]->id)->first();

            $array = ($key = $image);
            array_push($images, $array);
        }

        return view('album.listAlbums')->with('albums', $albums)->with('images', $images);
    }


    public function getAlbumDetails($id){

        $album = Album::where('id', '=', $id)->first();
        $images = ImageAlbum::where('id_album', '=', $id)->paginate(10);

        return view('album.detailAlbum')->with('album', $album)->with('images', $images);
    }

}
