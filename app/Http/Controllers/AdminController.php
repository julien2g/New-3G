<?php

namespace App\Http\Controllers;

use App\Album;
use App\Chien;
use App\Image;
use App\ImageAlbum;
use App\News;
use App\Portee;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addChien()
    {
        $parents = [];

        $portees = Portee::get();
        foreach ($portees as $portee) {

            $dad = Chien::where('id', '=', $portee->id_dad)->get();
            $mom = Chien::where('id', '=', $portee->id_mom)->get();

            $order = array("dad" => $dad[0], "mom" => $mom[0]);
            array_push($parents, $order);
        }

        return view('admin.chien')->with('parents', $parents)->with('portees', $portees);
    }

    public function getAdminCenter()
    {
        return view('admin.admin');
    }

    public function modifyChien(){
        $chiens = Chien::get();


        return view('admin.chien')->with('chiens', $chiens);
    }

    public function getChienFilled(Request $request){
        $id = $request['id'];

        $chien = Chien::where('id', '=', $id)->first();

        $images = Image::where('id_chien', '=', $id)->get();

        $parents = [];
        $portees = Portee::get();

        foreach ($portees as $portee) {

            $dad = Chien::where('id', '=', $portee->id_dad)->get();
            $mom = Chien::where('id', '=', $portee->id_mom)->get();

            $order = array("dad" => $dad[0], "mom" => $mom[0]);
            array_push($parents, $order);
        }

        return view('admin.chien')->with('chien', $chien)->with('images', $images)->with('parents', $parents)->with('portees', $portees);
    }

    public function addNews(){
        return view('admin.addNews');
    }


    public function getNewsFilled(Request $request){
        $id = $request['id'];
        $new = News::where('id', '=', $id)->first();

        return view('admin.addNews')->with('new', $new);
    }

    public function addAlbum(){
        return view('admin.addAlbum');
    }

    public function getAlbumFilled(Request $request){
        $id = $request['id'];
        $album = Album::where('id', '=', $id)->first();

        $images = ImageAlbum::where('id_album', '=', $id)->get();


        return view('admin.addAlbum')->with('album', $album)->with('images', $images);
    }

    public function addPortee(){
        $dad = Chien::where('sex', '=', 1)->get();
        $mom = Chien::where('sex', '=', 0)->get();


        return view('admin.addPortee')->with('choice_dad', $dad)->with('choice_mom', $mom);
    }

    public function getPorteeFilled(Request $request){
        $id = $request['id'];
        $portee = Portee::where('id', '=', $id)->first();


        $dad = Chien::where('id', '=', $portee->id_dad)->get();
        $mom = Chien::where('id', '=', $portee->id_mom)->get();

        $choice_dad = Chien::where('sex', '=', 1)->get();
        $choice_mom = Chien::where('sex', '=', 0)->get();


        return view('admin.addPortee')->with('portee', $portee)->with('dad', $dad)->with('mom', $mom)->with('choice_dad', $choice_dad)->with('choice_mom', $choice_mom);
    }


}
