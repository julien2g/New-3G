<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadRequest;
use App\ImageAlbum;
use Illuminate\Http\Request;


class UploadController extends Controller
{
    public function uplaod(UploadRequest $request)
    {

        $params = $request->except(['_token']);

        foreach ($params['image'] as $img) { // For each img upload
            $slug = $this->generateRandomString(5); // Give name

            $img->storeAs('/public/' . $params['folder'], $slug . '.' . $img->getClientOriginalExtension()); // Store imgWith the name "Slug"

            echo '<br>';


            if ($params['folder'] == 'albums') { // if albums folder

                $imagesPos = ImageAlbum::where('id_album', '=', $params['id'])->orderBy('pos', 'desc')->first();




                $image_album = new ImageAlbum();

                $image_album->id_album = $params['id'];
                $image_album->slug = $slug;
                $image_album->pos = $imagesPos['pos']  + 1 ;
                $image_album->ext = '.' . $img->getClientOriginalExtension();


                $image_album->save(); // Save the img entry in bdd

            } elseif ($params['folder'] == 'chien') {

            }

            echo $image_album;
            echo '<br>';
        }
        die;


        /*


                echo '<br>';
                echo '<br>';
                echo '<br>';
                echo '<br>';

                echo $params['id'];


        $slug = $this->generateRandomString(5);

        $request->file('image')->storeAs('/public/' . $params['folder'], $slug . '.' . $request->file('image')->getClientOriginalExtension());


        //echo 'File Extension: '.$request->file('image')->getClientOriginalExtension();
        echo '<br>';


        if ($params['folder'] == 'albums') {
            $image_album = new ImageAlbum();

            $image_album->id_album = $params['id'];
            $image_album->slug = $slug;
            $image_album->pos = $params['id'];
            $image_album->ext = '.' . $request->file('image')->getClientOriginalExtension();


            $image_album->save();

        }elseif ($params['folder'] == 'chien')
        {

        }

        return $image_album;*/
        /*if (request()->hasFile('images')) {
            $path = $request->file('images')->store('avatars');

            echo $path;
            die;
        }
        else{
            echo'no';
        }
        /*$file = $request->file('image');

        //Display File Name
        echo 'File Name: '.$file->getClientOriginalName();
        echo '<br>';

        //Display File Extension
        echo 'File Extension: '.$file->getClientOriginalExtension();
        echo '<br>';

        //Display File Real Path
        echo 'File Real Path: '.$file->getRealPath();
        echo '<br>';

        //Display File Size
        echo 'File Size: '.$file->getSize();
        echo '<br>';

        //Display File Mime Type
        echo 'File Mime Type: '.$file->getMimeType();

        //Move Uploaded File
        $destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());
*/

    }


    public function generateRandomString($length)
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
