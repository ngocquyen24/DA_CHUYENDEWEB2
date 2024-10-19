<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class LoginController extends Controller
{
    public function index(){
        return view('admin.users.login',[
            'title' => 'Admin'
        ]);
    }

    public function store(Request $request ) {
        //dd($request->input());

       $this->validate($request, [
            'email' => 'required|email:filter',
            'password' => 'required',

       ]);

       if(Auth::attempt(['email' => $request->input('email'),
            'password' => $request->input('password'),

            ], $request->input('remember') )) {
            return redirect()->route('admin');
       }
       Session::flash('error','Email hoac Password khong dung');

       return redirect()->back();
    }

    public function indexRegister(){

        return view('admin.users.register',[
            'title' => 'Register Admin'
        ]);
    }

    public function register(Request $request)
    {
         //kiem tra du lieu  dau vao
         $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|same:password1',
            'phone' => 'required|min:10',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);
         //Kiem tra tep tin co truong du lieu avatar hay kh
         if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $extension = $file->getClientOriginalExtension();//Lay ten mo rong .jpg, .png...
            $filename = time().'.'.$extension;//
            $file->move('avatar/',$filename) ;  //upload len thu muc avatar trong public
        }

        //Lay tat ca co so du lieu gan vao mang data
        $data = $request->all();

        $check = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            'avatar' => $filename ?? NULL,
            // 'avatar' => $avatarName ?? NULL,

        ]);

        return redirect("admin\users\login");
    }

    public function forgetPassword(){
        return view('admin.users.forgetPassword',[
            'title' => 'Forget Password'

        ]);
    }
    /**
     * Sign out
     */
    public function signOut() {
        Session::flush();
        Auth::logout();

<<<<<<< HEAD
        return Redirect('admin\users\login');
=======
        return Redirect('/');
>>>>>>> Giỏ_Hàng
    }

    // public function postForgetPass(Request $request){
    //     $request->validate([
    //         'email' =>'required|exists:users' // kiem tra email co ton tai trong csdl khong
    //     ]);

    //     $token = strtoupper(Str::random(10));
    //     $users = User::where('email', $request->email)->first();
    //     $users->update(['token' => $token]);

    //     Mail::send('emails.check_email_forget', compact('users'), function($email) use ($users){
    //         $email->subject('Email - Reset Password ');
    //         $email->to($users->email,$users->name);
    //     });

    //     return redirect()->back()->with('Yes', 'Please check email ');

    // }


}
