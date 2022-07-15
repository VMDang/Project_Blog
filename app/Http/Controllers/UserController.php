<?php
namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request as Request;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function form_register(){
        return view('users.createUser');
    }

    public function register(Request $request){

       $data = $request->all();
       $data['password'] = bcrypt($request->password);


       $user = new User();
       $user->name = $data['name'];
       $user->phone = $data['phone'];
       $user->email = $data['email'];
       $user->birthday = $data['birthday'];
       $user->address = $data['address'];
       $user->work = $data['work'];
       $user->description = $data['description'];
       $user->password = $data['password'];

       if ($request->hasFile('image')){
           $file = $request->file('image');
           $extension = $file->getClientOriginalExtension();
           $filename = time().'.'.$extension;
           $file->move('images',$filename);
           $user->image = $filename;
       }else {
           return $request;
           $user->image = '';
       }

       $user->save();
       return redirect()->route('form_register')->with('success');
    }
}
