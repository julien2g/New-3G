<?php

namespace App\Http\Controllers;

use App\Album;
use App\Chien;
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


        echo $chien->name;


        return view('admin.chien')->with('chien', $chien);
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



        return view('admin.addAlbum')->with('album', $album);
    }

}
