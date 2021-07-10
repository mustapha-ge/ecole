<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cours;
use Illuminate\Http\Request;

class CoursController extends Controller{


    public function coursAction(Request $request) {
        $cour = new Cours();
        $cour->fill($request->all());
        $cour->save();


                return redirect('/cours-list');

    }


    public function indexAction(Request $request){
        $courslist = new Cours();
        $ListCours = $courslist->all();


// return view
        return view('user.affechierCours', array(
            'courses' => $ListCours,
        ));
    }

}
