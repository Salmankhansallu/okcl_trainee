<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\okcl_model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;
class formController extends Controller
{
    
    public function index(){
        return view("home");
    }
    public function qrcode(){
        return view('qr_code');
    }
    public function registeration(){
        $url=url("register");
        $title="Registeration Form";
        $data=compact("url","title");
        return view("form")->with($data);
    }

    public function register(Request $request){
        
        $request->validate(
            [
                'name'=>"required",
                'email'=>'required|email',
                'password'=>'required',
                'confirm_password'=>'required|same:password'
            ]
        );
        // echo "<pre>";
        // print_r($request->all());
        // return view('thanks');
        $okcl_user= new okcl_model;
        $okcl_user->name=$request["name"];
        $okcl_user->email=$request["email"];
        $okcl_user->phone=$request["phone"];
        $okcl_user->password=md5($request["password"]);
        $okcl_user->confirm_password=md5($request["confirm_password"]);
        $okcl_user->gender=$request["gender"];
        $okcl_user->dob=$request["dob"];
        $okcl_user->save();
        return redirect("login");
    }
    public function login(){
        // $user=session()->get("name");
        // $page=$request["page"]??1;
        // $limit=4;
        // $user_data=compact("user","search","page","limit");
        // if($user!=""){
        //     return $user;
        // }
        // else{
        //     return "hello";
        // }
        //  die();
         return view('login');
    }
    public function loginuser(Request $request){
        
        $login_user= okcl_model::where("email",$request->input("email"))->get();
        // return $user;
        //  $status=false;
        $login_user_data=compact("login_user");
        //  echo $login_user[0]->name;
        //  die();
        if($login_user[0]->password==md5($request->input("password"))){
            $request->session()->put("name",$login_user[0]->name);
            // $request->session()->put('status',true);
            return redirect('user-view');
        }
        else{
            echo "something Wrong..!";
            return redirect("login");
        }
    }

    public function forget(){
        return view('forget');
    }
    public function reset_password(Request $request){
        $email=$request['email'];
        $user=okcl_model::where("email",$email)->first();
        if(!is_null($user)){
            $user->email=$request["email"];
            $user->password=md5($request["new_password"]);
            $user->confirm_password=md5($request["confirm_new_password"]);
            $user->save();
            return redirect("login");
        }
        else{
            return redirect('forget');
        }
    }
    public function view(Request $request,$lang=null){
        // echo $lang;
        // die();
        App::setLocale($lang);
        $search=$request["search"]??"";
        $page=$request["page"]??1;
        $limit=4;
        if($search==""){
            $users= okcl_model::paginate($limit);
        }
        else{
            $users= okcl_model::where("name","LIKE","%$search%")->orwhere("email","LIKE","%$search%")->get();
        }
       
        // echo "<pre>";
        // print_r($user->toArray());
        $user_data=compact("users","search","page","limit");
        return view("user-view")->with($user_data);
    }

    public function delete($id){
        //temporary delete function
        $delete_user=okcl_model::where('id',$id);
        if(!is_null($delete_user)){
            $delete_user->delete();
        }
        return redirect("user-view");
    }
    public function permanent_delete($id){
        //permanent delete function
        $delete_user=okcl_model::withTrashed()->where('id',$id);
        if(!is_null($delete_user)){
            $delete_user->forceDelete();
        }
        return redirect("trash");
    }
    public function restore($id){
        $restore_user=okcl_model::where('id',$id);
        if(!is_null($restore_user)){
            $restore_user->restore();
        }
        return redirect("user-view");
    }
    public function trash(){
        $user=okcl_model::onlyTrashed()->get();
        $data=compact("user");
        return view("trash")->with($data);
    }
    public function update($id){
        $update_user=okcl_model::where('id',$id)->first();
        $url=url("update")."/".$id;
        $title="Update User";
        $data=compact("update_user","url","title");
        if(!is_null($update_user)){
            
            return view("update",)->with($data);
        }
    }
    public function update_user($id,Request $request){
        $okcl_user=okcl_model::where('id',$id)->first();
        $okcl_user->name=$request["name"];
        $okcl_user->email=$request["email"];
        $okcl_user->phone=$request["phone"];
        // $okcl_user->password=md5($request["password"]);
        // $okcl_user->confirm_password=md5($request["confirm_password"]);
        $okcl_user->gender=$request["gender"];
        $okcl_user->dob=$request["dob"];
        $okcl_user->save();
        return redirect("user-view");
    }
    public function logout(Request $request){
        session()->forget("name");
        Auth::logout();
        return redirect("login");
    }
    public function upload(){
        return view("upload");
    }
    public function upload_file(Request $request){
        // echo "<pre>";
        // print_r($request->all());
        $file_name=time().".okcl.".$request->file("file")->getClientOriginalExtension();
        // echo $file_name;
        // die();
        // $request->file("file")->store("uploads");
        $request->file("file")->storeAs("uploads",$file_name);
        return redirect("upload");
    }
}
