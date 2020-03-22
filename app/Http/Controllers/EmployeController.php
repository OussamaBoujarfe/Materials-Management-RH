<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Employe;
use App\Http\Requests\employeRequest;
class EmployeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
      
          }
    public function index(){
        $listemploye= Employe::all();
        return view('employe.index',['employes' => $listemploye]);
       }
       public function all(){
        $listemploye=DB::table('employes')->paginate(12);
        return view('employe.all',['employes' => $listemploye]);
       }
       public function create(){
           return view('employe.create');
       }
       public function store(employeRequest $req){
   
           $employe= new employe();
           $employe->matricule= $req->input('matricule');
           $employe->nomc= $req->input('nomc');
           $employe->departement= $req->input('departement');
           $employe->fonction= $req->input('fonction');
           $employe->etat= $req->input('etat');
           $employe->save();
           session()->flash('success','L\'employé a été Bien Enregistré !!');
           return redirect('employes');
       }
       public function edit($id){
           $employe= Employe::find($id);
           return view('employe/edit',['employe'=>$employe]);
       }
       public function update(employeRequest $req ,$id){
           $employe= Employe::find($id);
           $employe->matricule= $req->input('matricule');
           $employe->nomc= $req->input('nomc');
           $employe->departement= $req->input('departement');
           $employe->fonction= $req->input('fonction');
           $employe->etat= $req->input('etat');
           $employe->save();
           return redirect('employes');
           
         
       }
       public function show($id){
        $employes = Employe::where('id',$id)->get();
        return view('employe.show',['employes' => $employes]);

        } 
       public function destroy(Request $req, $id){
        $employe=Employe::find($id);
        $employe->delete();
        return redirect('employes');
       }
}
