<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('profile', array('user' => Auth::user() ));
    }

    public function upload(Request $req) {
        if ($req->hasFile('image_source')) {
            $fullFileName = $req->file('image_source')->getClientOriginalName();
            $fileName = pathinfo($fullFileName, PATHINFO_FILENAME);
            $extention = strtolower($req->file('image_source')->getClientOriginalExtension());
            $fileNameToStore = $fileName . '_' . time() . '.' . $extention;
            $path = $req->file('image_source')->storeAs('public/avatars/' . Auth::user()->id, $fileNameToStore);

        } else {
            $fileNameToStore = 'not.jpg';
        }

        $user = Auth::user();
            $oldImage = Auth::user()->img_url;
            $fileLocation = 'storage/public/avatars/{{Auth::user()->id}}/' . $oldImage;
            if (File::exists($fileLocation) ) {
                File::delete($fileLocation);
            }
            $user->img_url = $fileNameToStore;
            $user->save();
        return view('profile', array('user' => Auth::user()));
    }
}
