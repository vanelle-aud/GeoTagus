<?php

namespace App\Http\Controllers;

use App\Sommet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SommetController extends Controller
{
    public function index()
    {
        return view('admin.form');
    }

    public function storeSommet(Request $request){
        $data =$this->validate($request, [
            'latitude' => 'required',
            'longitude' => 'required',
        ]);
        Sommet::create([
            'latitude' => $data['latitude'],
            'longitude' => $data['longitude'],
           
        ]);

        Log::debug('Form submitted. Custom logic here.', $data);

        return back()->with('success', 'Formulaire soumis');
    }
}
