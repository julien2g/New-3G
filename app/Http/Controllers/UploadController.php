<?php

namespace App\Http\Controllers;

use App\Album;
use App\Http\Requests\UploadRequest;
use App\Image;
use App\ImageAlbum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class UploadController extends Controller
{
    public function uplaod(UploadRequest $request)
    {

        $params = $request->except(['_token']);

        foreach ($params['image'] as $img) { // For each img upload
            $slug = $this->generateRandomString(5); // Give name

            $img->storeAs('/public/' . $params['folder'], $slug . '.' . $img->getClientOriginalExtension()); // Store imgWith the name "Slug"


            if ($params['folder'] == 'albums') { // if albums folder // /////:///////// //////////////////// NEED VERIFY IF POS = 1

                $imagesPos = ImageAlbum::where('id_album', '=', $params['id'])->orderBy('pos', 'desc')->first(); // To take the last position

                $image = new ImageAlbum();

                $image->id_album = $params['id'];
                $image->slug = $slug;
                $image->pos = $imagesPos['pos'] + 1;
                $image->ext = '.' . $img->getClientOriginalExtension();


            } elseif ($params['folder'] == 'chiens') {
                // if (Image::where('id_chien', '=', $params['id'])->orderBy('pos', 'asc')->first() == 1) {
                $imagesPos = Image::where('id_chien', '=', $params['id'])->orderBy('pos', 'desc')->first(); // To take the last position
                //} else {
                //  $imagesPos = 0;

                //}

                $image = new Image();

                $image->id_chien = $params['id'];
                $image->slug = $slug;
                $image->pos = $imagesPos['pos'] + 1;
                $image->ext = '.' . $img->getClientOriginalExtension();
            }

            $image->save(); // Save the img entry in bdd

        }

        return redirect('admin/modify/' . $params['folder'] . '/vue/filled?id=' . $params['id']);

    }

    public function delete($folder, $id_album, $idImage, $slug)
    {

        if ($folder == 'albums') { // if albums folder

            ImageAlbum::destroy($idImage);

        } elseif ($folder == 'chiens') {

            Image::destroy($idImage);

        }

        Storage::delete('/public/' . $folder . '/' . $slug);


        return redirect('admin/modify/' . $folder . '/vue/filled?id=' . $id_album);
    }


    public function uploadVideo(Request $request){

        $params = $request->except(['_token']);

        $imagesPos = ImageAlbum::where('id_album', '=', $params['id'])->orderBy('pos', 'desc')->first(); // To take the last position

        $image = new ImageAlbum();

        $image->id_album = $params['id'];
        $image->slug = $params['lien'];
        $image->pos = $imagesPos['pos'] + 1;
        $image->ext = 'video';

        $image->save();

        return redirect('admin/modify/' . $params['folder'] . '/vue/filled?id=' . $params['id']);
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
