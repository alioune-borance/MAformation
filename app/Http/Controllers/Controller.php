<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Infos_site;
use App\Models\Contact;
use App\Models\Module;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home(){
        $infos = Infos_site::all()->first();
        $contact = Contact::all()->first();

        return view('home',compact('infos','contact'));
    }

    public function formations(){
        $modules = Module::all();
        return view('formations',compact('modules'));
    }

    public function about(){
        $infos = Infos_site::all()->first();
        return view('about',compact('infos'));
    }

    public function faq(){

        return view('faq');
    }
}
