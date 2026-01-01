<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Session;
use App\Models\register;
use Illuminate\Support\Facades\Hash;
use Session;
class UserController extends Controller
{
    public function login(Request $request){
    	 $request->validate([
        'email' => 'required',
        'password' => 'required|min:4|max:12',
    ]);
    	 $user = register::where('email',$request->email)->first();
    	 //Register::firstWhere($id)
    	 //Register::findorFail($id);
    	 if($user){
    	 	if(Hash::check($request->password,$user->password)){
    	 		return redirect('index')->with('success','Wellcome to site !');
    	 	}else{
    	 		return back()->with('fail','password does not matched!');
    	 	}
    	 }
    	 else{
    	 	return back()->with('fail','Email is incorrect !');	
    	 }
    }
    public function signup(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:registers',
        'password' => 'required|min:4|max:12',
        'confirm_password' => 'required|same:password',
        'mobile' => 'required|string',
    ]);

    $data = new register;
    $data->name = $request->input('name');
    $data->email = $request->input('email');
    $data->mobile = $request->input('mobile');
    $data->password = Hash::make($request->input('password'));
    $check = $request->input('skill');
    $data->skill = implode(',', $check);
    $data->gender = $request->input('gender');
    $data->country = $request->input('country');

    // Handle multiple image uploads
    $image_names = [];

    if ($request->hasFile('image')) {
        foreach ($request->file('image') as $image) {
            $ext = $image->getClientOriginalExtension();
            $image_name = time() . '.' . $ext;
            $image->move('client/images', $image_name);
            $image_names[] = $image_name;
        }
    }

    $data->image = implode(',', $image_names);

    $result = $data->save();

    if ($result) {
        return redirect('login')->with('success', 'Registered successfully!');
    } else {
        return back()->with('fail', 'Something went wrong');
    }
}
    ////fetch data;
    public function fetch(){
    	$data = register::all();
    	return view('display',['getData'=>$data]);
    }
    //delete data;
    public function delete($id){
   	$data = register::find($id);
   	$data->delete();
   	return redirect('display');
    }
    //showData update data;
    public function showData($id){
   	$data = register::find($id);
   	return view('edit',['display'=>$data]);
    }
    //finally updated data;
  public function update(Request $request, $id)
{
    $data = register::find($id);
    $image_name = $data->image;

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $ext = $image->getClientOriginalExtension();
        $image_name = time() . '.' . $ext;
        $image->move('client/images', $image_name);
    }

    $data->name = $request->name;
    $data->email = $request->email;
    $data->mobile = $request->mobile;
    $check = $request->input('skill');
    $data->skill = implode(',', $check);
    $data->gender = $request->gender;
    $data->country = $request->country;
    $data->image = $image_name;
    $data->update();

    return redirect('display');
}


}
