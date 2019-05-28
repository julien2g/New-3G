<?php

namespace App\Http\Controllers;

use App\Chien;
use App\Image;
use App\Portee;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ChienController extends Controller
{

    public function getOwnChiens()
    {

        $images = [];

        $chiens = Chien::where([['sex', '=', 1], ['own', '=', 1], ['adult', '=', 1]])->get();


        foreach ($chiens as $key => $chien) {
            $image = Image::where('id_chien', '=', $chien->id)->limit(4)->get();

            $array = ($key = $image);
            array_push($images, $array);
        }

        return view('chien/listChiens')->with('chiens', $chiens)->with('images', $images);

    }

    public function getOwnChiennes()
    {

        $images = [];

        $chiens = Chien::where([['sex', '=', 0], ['own', '=', 1], ['adult', '=', 1]])->get();


        foreach ($chiens as $key => $chien) {
            $image = Image::where('id_chien', '=', $chien->id)->limit(4)->get();

            $array = ($key = $image);
            array_push($images, $array);
        }

        return view('chien/listChiens')->with('chiens', $chiens)->with('images', $images);

    }


    public function getExtChiens()
    {
        $images = [];

        $chiens = Chien::where('owner', '!=', 0)->get();

        foreach ($chiens as $key => $chien) {
            $image = Image::where('id_chien', '=', $chien->id)->limit(4)->get();

            $array = ($key = $image);
            array_push($images, $array);
        }

        return view('chien/listChiens')->with('chiens', $chiens)->with('images', $images);
    }

    public function getChiots($own)
    {

        $images = [];

        $chiens = Chien::where([['own', '=', $own], ['adult', '=', '0']])->paginate(2);


        foreach ($chiens as $key => $chien) {
            $image = Image::where('id_chien', '=', $chien->id)->limit(4)->get();

            $array = ($key = $image);
            array_push($images, $array);
        }

        return view('chien/listChiots')->with('chiens', $chiens)->with('images', $images);
    }

    public function getFuturesPortees()
    {
        $parents = [];
        $images = [];


        $portees = Portee::where('birth_date', '>', Carbon::now())->get();


        foreach ($portees as $portee) {

            $dad = Chien::where('id', '=', $portee->id_dad)->get();
            $mom = Chien::where('id', '=', $portee->id_mom)->get();

            $dad_img = Image::where('id_chien', '=', $dad[0]->id)->first();
            $mom_img = Image::where('id_chien', '=', $mom[0]->id)->first();


            $img = array("dad" => $dad_img, "mom" => $mom_img);
            array_push($images, $img);


            $order = array("dad" => $dad[0], "mom" => $mom[0]);
            array_push($parents, $order);
        }

        return view('chien.listPortees')->with('portees', $portees)->with('parents', $parents)->with('images', $images);
    }

    public function getAnciennesPortees()
    {
        $parents = [];
        $images = [];
        $chiots = [];
        $images_chiots = [];


        $portees = Portee::where('birth_date', '<', Carbon::now())->get();


        foreach ($portees as $portee) {

            $dad = Chien::where('id', '=', $portee->id_dad)->get();
            $mom = Chien::where('id', '=', $portee->id_mom)->get();

            $dad_img = Image::where('id_chien', '=', $dad[0]->id)->first();
            $mom_img = Image::where('id_chien', '=', $mom[0]->id)->first();


            $img = array("dad" => $dad_img, "mom" => $mom_img);
            array_push($images, $img);


            $order = array("dad" => $dad[0], "mom" => $mom[0]);
            array_push($parents, $order);


            $enfants = Chien::where('id_portee', '=', $portee->id)->get();

            foreach ($enfants as $enfant) {

                $img_enfants = Image::where('id_chien', '=', $enfant->id)->first();

                array_push($images_chiots, $img_enfants);
            }

            array_push($chiots, $enfants);

        }

        return view('chien.listPortees')->with('portees', $portees)->with('parents', $parents)->with('images', $images)->with('chiots', $chiots)->with('images_chiots', $images_chiots);
    }

    public function getDetails($id, $title = null)
    {
        $images_rdm = [];

        $chien = Chien::where('id', '=', $id)->get();
        $images = Image::where('id_chien', '=', $id)->get();

        $chiens_rdm = Chien::orderByRaw('RAND()')->take(4)->get();


        foreach ($chiens_rdm as $c) {

            $img = Image::where('id_chien', '=', $c->id)->first();

            array_push($images_rdm, $img);
        }

        if ($chien[0]->id_portee){
            $portee = Portee::where('id', '=', $chien[0]->id_portee)->get();


            $dad = Chien::where('id', '=', $portee[0]->id_dad)->first();
            $mom = Chien::where('id', '=', $portee[0]->id_mom)->first();

           $dad_img = Image::where('id_chien', '=', $dad->id)->first();
            $mom_img = Image::where('id_chien', '=', $mom->id)->first();


            $parents = [$dad, $mom];
            $parents_images = [$dad_img,  $mom_img];
            return view('chien.detailsChien')->with('chien', $chien[0])->with('images', $images)->with('chiens_rdm', $chiens_rdm)->with('images_rdm', $images_rdm)->with('title', $title)->with('parents', $parents)->with('parents_image', $parents_images);

        }

        return view('chien.detailsChien')->with('chien', $chien[0])->with('images', $images)->with('chiens_rdm', $chiens_rdm)->with('images_rdm', $images_rdm)->with('title', $title);
    }

    public function addChien(Request $request)
    {

        $params = $request->except(['_token']);

        if ($params['id'] == '') // test if need add or modify
        {
            $chien = new Chien();
        }
        else
        {
            $chien = Chien::where('id', '=', $params['id'])->first();
        }

        $chien->name = $params['name'];
        $chien->title = $params['title'];
        $chien->adult = $params['adult'];
        $chien->owner =  $params['owner'];
        $chien->own = $params['own'];
        $chien->race = $params['race'];
        $chien->info = $params['info'];
        $chien->awards = $params['award'];
        $chien->expositions = $params['exposition'];
        $chien->analyses = $params['analyse'];
        $chien->sex = $params['sex'];
        $chien->id_portee = $params['portee'];
        $chien->birthday = $params['birthday'];

        $chien->save();

        return view('admin.admin')->with('success', 'TRUE');

    }

    public function addPortee(Request $request){

        $params = $request->except(['_token']);

        if ($params['id'] == '') // test if need add or modify
        {
            $portee = new Portee();
        }
        else
        {
            $portee = Portee::where('id', '=', $params['id'])->first();
        }

        $portee->id_dad = $params['dad'];
        $portee->id_mom = $params['mom'];

        $portee->sex_date = $params['sex'];
        $portee->infos = $params['infos'];

        $portee->birth_date = $params['birth'];

        $portee->save();


    }

}
