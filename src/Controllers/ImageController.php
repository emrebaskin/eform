<?php

namespace EmreBaskin\Eadmin\Controllers;

use EmreBaskin\Eadmin\Helpers\eHelper;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ImageController extends Controller
{

    public function upload(Request $request)
    {

        $request->validate([
            'eFormImageUpload' => 'required|mimes:jpeg,jpg,png',
        ]);

        $extension = '.' . $request->file('eFormImageUpload')->getClientOriginalExtension();
        $filename  = eHelper::makeSlug(str_replace($extension, '', $request->file('eFormImageUpload')->getClientOriginalName()));

        $path = $request->file('eFormImageUpload')->storeAs('public/images', $filename.$extension);
        $path = str_replace('public/images/','/storage/images/',$path);

        return ['path' => $path];

    }

    public function delete(Request $request)
    {

        return "delete";

    }

}
