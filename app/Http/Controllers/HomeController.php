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

        $news = News::orderBy('created_at', 'desc')->limit(5)->paginate(2);;

        return view('welcome')->with('news', $news);
    }




    public function email(Request $request){


        //echo $this->generateRandomString(5);

        $params = $request->except(['_token']);

        $user = User::firstOrCreate(['email' => $params['email'], 'password' => md5($this->generateRandomString(5))]);

        $user->save();

        return $this->Home();
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


    public function addNews(Request $request){
        $params = $request->except(['_token']);


        if ($params['id'] == '') // test if need add or modify
        {

            $news = new News();
        }
        else
        {
            $news = News::where('id', '=', $params['id'])->first();
        }

       $news->title = $params['title'];
       $news->text = $params['text'];

       $news->save();

        return view('admin.admin')->with('success', 'TRUE');
    }

    public function getNews(){

        $news = News::get();

        return view('admin.addNews')->with('news', $news);
    }
}
