<?php

namespace App\Http\Controllers;
use App\File;
use App\Absubmit;
use Illuminate\Http\Request;
Use Auth;
use Image;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $user = Auth::user();
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return view('home');
        $user = Auth::user();
        return view('home',compact('user',$user));
    }

  
    public function showUploadForm(){
        $id = Auth::user()->id;
        $data=Absubmit::where('user_id',auth()->id())->get();
        return view('abstract', compact('data'));
       //return view('abstract');
      
       
    }
    
    

    

    public function saveabsForm(Request $request){

        //print_r($request->input());

        $id = Auth::user()->id;
        $abs= new Absubmit;
        $abs->user_id=$id;
        $abs->title=$request->title;
        $abs->typeofsubmit=$request->typeofsubmit;
        $abs->theme=$request->theme;


        if($file = $request->file('abstractnoauthor')){
            $abs->abstractnoauthor='ABSN'.$id.time().$request->abstractnoauthor->getClientOriginalName();
            $name='ABSN'.$id.time().$file->getClientOriginalName();
            $file -> move('upload',$name);
            }


    

        if($file = $request->file('fullabstract')){
            $abs->fullabstract='ABS'.$id.time().$request->fullabstract->getClientOriginalName();
            $name='ABS'.$id.time().$file->getClientOriginalName();
            $file -> move('upload',$name);
            }

        

                if($file = $request->file('eposter')){
                    $abs->eposter='EPS'.$id.time().$request->eposter->getClientOriginalName();
                    $name='EPS'.$id.time().$file->getClientOriginalName();
                    $file -> move('upload',$name);
                    }
        
       
                    
        
        $abs->author=$request->author;
        $abs->tp=$request->tp;
        $abs->email=$request->email;
        $abs->save();
        //dd("Mail Send Successfully");
        // $myEmail = 'ssejayantha@gmail.com';
        //	Mail::to($myEmail)->send(new WelcomeMail($data));
    	//dd("Mail Send Successfully");
       //Mail::to('ssejayantha@gmail.com')->send(new WelcomeMail($data));


                $myEmail = 'ssejayantha@gmail.com';
                $data = array(
                    'title'=> $abs->title,
                    'typeofsubmit'=> $abs->typeofsubmit,
                    'theme'=> $abs->theme,
                    'fullabstract'=> $abs->fullabstract,
                    'abstractnoauthor'=> $abs->abstractnoauthor,
                    'eposter'=> $abs->eposter,
                    'author'=> $abs->author,
                    'tp'=> $abs->tp,
                    'email'=> $abs->email,
                    );
                Mail::to($myEmail)->send(new WelcomeMail($data));

                return redirect()->route('show.abstract')
                ->with('successMsg','You have successfully submited the  abstract.');
                
    }

    public function profile(){
        return view('profile', array('user'=>Auth::user()));
    }

    
public function updateAvatar(Request $request){
    $request->validate([
        'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $user = Auth::user();

    $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();

    $request->avatar->storeAs('public/avatars',$avatarName);

    $user->avatar = $avatarName;
    $user->save();

    return back()
        ->with('success','You have successfully upload image.');
}


public function absdestroy(Request $req){
    $abs=Absubmit::find($req->id);
    $abs->delete();
    return redirect()->route('show.abstract')
            ->with('deleteMsg','You have successfully deleted record .');
    ;
   // $id = Auth::user()->id;
   // $data=Absubmit::where('user_id',auth()->id())->get();
    //return view('abstract', compact('data'));
}


}
    


