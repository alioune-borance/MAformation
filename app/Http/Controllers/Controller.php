<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Infos_site;
use App\Models\Contact;
use App\Models\Module;
use App\Models\Question;
use App\Models\Reponse;


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

    public function modules(){
        $modules = Module::all();
        return view('modules',compact('modules'));
    }

    public function about(){
        $infos = Infos_site::all()->first();
        return view('about',compact('infos'));
    }

    public function faq(){
        $questions = Question::all();
        $reponses = Reponse::all();
        $qu = array();

        foreach ($questions as $q){
            foreach ($reponses as $r){
                if ($r->question_id == $q->id)
                    array_push($qu,$q);
            }
        }
        return view('faq',compact('qu'));
    }

    public function question(){
        $question = new Question();

        if ((request('nom') == 'admin') && request('email') == 'admin@admin.com'){
            $questions = Question::all();

            return view('admin',compact('questions'));
        }

        $question->nom = request('nom');
        $question->email = request('email');
        $question->contenu =  request('contenu');
        $question->date = request('date');

        $question->save();

        return redirect()->route('faq');
    }


    public function adminQuestion(){
        $questions = Question::all();

        return view('admin',compact('questions'));

    }


    public function repondreQuestion($idQ){
        $questions = Question::all();
        $reponse = new Reponse();

        $reponse->contenu = request('reponse');
        $reponse->question_id = $idQ;

        $reponse->save();

        return view('admin',compact('questions'));

    }
}
