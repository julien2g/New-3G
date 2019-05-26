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


    public function addAlbum(Request $request){
        $params = $request->except(['_token']);


        if ($params['id'] == '') // test if need add or modify
        {

            $album = new Album();
        }
        else
        {
            $album = Album::where('id', '=', $params['id'])->first();
        }

        $album->name = $params['name'];
        $album->info = $params['info'];

        $album->save();

        return view('admin.admin')->with('success', 'TRUE');
    }

    public function getAlbum(){

        $albums = Album::get();

        return view('admin.addAlbum')->with('albums', $albums);
    }

}
