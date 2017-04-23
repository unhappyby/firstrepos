<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('uploadfile');
    }

    public function showUploadFile(Request $request)
    {
        $file = $request->files('image');

        //Display File Name
        echo 'File Name: '. $file->getClientOriginalName();
        echo '<br>';

        //Display File Extension
        echo 'File Extention: '. $file->getClientOriginalExeption();
        echo '<br>';

        //Display File Size
        echo 'File Size: '. $file->getSize();
        echo '<br>';

        //Display File Mime Type
        echo 'File Mime Type: '. $file->getMimeType();
        echo '<br>';

        //Display Uploaded File
        echo 'Uploaded File: '. $file->getClientOriginalName();

        //Move Uploaded File
        $destinationPath = 'uploads';
        $file->move($destinationPath, $file->getClientOriginalName());
    }
}
