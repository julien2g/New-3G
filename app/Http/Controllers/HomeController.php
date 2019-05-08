<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\News;

class HomeController extends Controller
{
    public function Home()
    {

        $cookie = $this->setCookie();
        $news = News::orderBy('date', 'desc')->limit(10)->paginate(1);;


        return view('welcome')->with('news', $news)->with('cookie', $cookie);
    }


    public function setCookie()
    {
        $value = 'actif';

        setcookie("modal", $value,time()+3600);
       // echo $_COOKIE["modal"];
        return $_COOKIE["modal"];
    }

    public function email(Request $request){


        echo $this->generateRandomString(5);

        $params = $request->except(['_token']);

        $user = User::firstOrCreate(['email' => $params['email'], 'password' => md5($this->generateRandomString(5))]);

        $user->save();
    }



    public function generateRandomString($length) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}

