<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Auth;
use App\Yga;
use App\Mail\YgaMail;
use Illuminate\Support\Facades\Mail;




class YgaController extends Controller
{
    //

public function __construct()
{
    $user = Auth::user();
    $this->middleware(['auth','verified']);
}

    public function index(){

        $id = Auth::user()->id;
        $data=Yga::where('user_id',auth()->id())->get();
        return view('yga', compact('data'));

    }

    public function save(Request $request){

        //print_r($request->input());

        $request->validate([
            'fname' => 'required',
            'dob' => 'required',
            'qualifications' => 'required',
            'workplace' => 'required',
            'preworkplace' => 'required',
            'mnumber' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'title' => 'required',
            'theme' => 'required',
            'pptfile' => 'required',
            'cv' => 'required',
        ]);


        $id = Auth::user()->id;
        $yga= new Yga;
        $yga->user_id=$id;
        $yga->fname=$request->fname;
        $yga->dob=$request->dob;
        $yga->qualifications=$request->qualifications;
        $yga->workplace=$request->workplace;
        $yga->preworkplace=$request->preworkplace;
        $yga->mnumber=$request->mnumber;
        $yga->phone=$request->phone;
        $yga->email=$request->email;
        $yga->title=$request->title;
        $yga->theme=$request->theme;

        if($file = $request->file('pptfile')){
            $yga->pptfile='yga'.$id.time().$request->pptfile->getClientOriginalName();
            $name='yga'.$id.time().$file->getClientOriginalName();
            $file -> move('upload',$name);
            }

            if($file = $request->file('cv')){
                $yga->cv='yga'.$id.time().$request->cv->getClientOriginalName();
                $name='yga'.$id.time().$file->getClientOriginalName();
                $file -> move('upload',$name);
                }

        $yga->save();

        $myEmail = 'ssejayantha@gmail.com';
        $data = array(
            'fname'=> $yga->fname,
            'dob'=> $yga->dob,
            'qualifications'=> $yga->qualifications,
            'workplace'=> $yga->workplace,
            'preworkplace'=> $yga->preworkplace,
            'eposter'=> $yga->eposter,
            'phone'=> $yga->phone,
            'email'=> $yga->email,
            'title'=> $yga->title,
            'theme'=> $yga->theme,
            'pptfile'=> $yga->pptfile,
            'cv'=> $yga->cv,
            );
        Mail::to($myEmail)->send(new YgaMail($data));
        $request->session()->flash('successMsg', 'Successfully added YGA  Form');
        return redirect()->route('show.yga');

    }

    public function delete(Request $req){

        $yga=Yga::find($req->id);
        $yga->delete();
        $req->session()->flash('deleteMsg', 'Successfully deleted YGA Form ');
        return redirect()->route('show.yga');

    }


    
}
