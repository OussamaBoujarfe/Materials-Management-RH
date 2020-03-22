<?php

namespace App\Http\Controllers;
use Excel;
use DB;
use App\Employe;
use App\Materiel;
use View;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\materielRequest;
class MaterielController extends Controller
{   
    public function __construct(){
  $this->middleware('auth');

    }
    public function index(){
     $listmateriel=Materiel::all();
     return view('materiel.index',['materiels' => $listmateriel]);
    }
    public function all(){
        $listmateriel=DB::table('materiels')->paginate(16);
        return view('materiel.all',['materiels' => $listmateriel]);
       }
    public function create(){
        $emp =DB::table('employes')->get();
       
        return view('materiel.create', ['emp' => $emp]);

       /*  $listemp = Employe::all(['nomc']);
        return View::make('materiel.create',['employes' => $listemp]);

       $listemp=Employe::where('nomc');
        return view('materiel.create',['employes' => $listemp]);*/
    }
    public function store(materielRequest $req){

        $materiel= new materiel();
        $materiel->nomc= $req->input('nomc');
        $materiel->matricule= $req->input('matricule');
        
        $materiel->Nserie= $req->input('Nserie');
        $materiel->type= $req->input('type');
        $materiel->fabriquant= $req->input('fabriquant');
        $materiel->modele= $req->input('modele');
        $materiel->user_id= auth::user()->id;
        $materiel->save();
        session()->flash('success','Attribution a été Bien Effectué !!');
        return redirect('materiels');
    }
    public function edit($id){
        $materiel= Materiel::find($id);
        return view('materiel/edit',['materiel'=>$materiel]);
    }
    public function update(materielRequest $req ,$id){
        $materiel= Materiel::find($id);
        $materiel->nomc= $req->input('nomc');
        $materiel->matricule= $req->input('matricule');
        
        $materiel->Nserie= $req->input('Nserie');
        $materiel->type= $req->input('type');
        $materiel->fabriquant= $req->input('fabriquant');
        $materiel->modele= $req->input('modele');
        $materiel->save();
        return redirect('materiels');
        
    }
    
    public function show($id){
        $materiels = Materiel::where('id',$id)->get();
        return view('materiel.show',['materiels' => $materiels]);

        } 
    public function destroy(Request $req, $id){
        $materiel=Materiel::find($id);
        $materiel->delete();
        return redirect('materiels');

        
    }
    
   
       
}
