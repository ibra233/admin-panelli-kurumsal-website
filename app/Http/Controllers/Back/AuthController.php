<?php

namespace App\Http\Controllers\Back;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function add(Request $request){
$validated=$request->validate([
    'name' => 'required|min:5',
    'email' => 'required|email|unique:users',
    'password' => 'required|min:8'
]);

       $user=new User;
       $user->name=$request->name;
       $user->email=$request->email;
       $user->password=Hash::make($request->password);

$query=$user->save();
if($query){
    return back()->with('succes','Kullanıcı başarıyla eklendi');
}else{
    return back()->with('fail','Kullanıcı eklenemedi');
}
    }
    public function login(Request $request){
        $validated=$request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt(['name' => $request->name, 'password' => $request->password],$request->remember)) {
            return redirect('/admin');
        }else{
            return redirect('giris');
        }
    }

    public function logout(){
        Auth::logout();
       return redirect('giris');
    }
}
