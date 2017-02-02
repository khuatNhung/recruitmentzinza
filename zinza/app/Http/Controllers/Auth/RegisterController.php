<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Requests\RegisterRequest;
use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    public function register(RegisterRequest $request)
    {
        // $this->validator($request->all())->validate();

        // event(new Registered($user = $this->create($request->all())));

        // $this->guard()->login($user);

        // return $this->registered($request, $user)
        //     ?: redirect($this->redirectPath());
    }

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data,array $rules,array $messages)
    {
    //     $rules=array(
    //         //
    //         'name' =>'required',
    //         'email' =>'required|unique:users',
    //         'password'=>'required',
    //         'phone' =>'required|unique:users'
    //     );
    //     $messages=array (
    //         'name.required'=>'Vui lòng nhập user name',
    //         'email.required'=>'Vui lòng nhập email',
    //         'email.unique'=>'Email này đã tồn tại',
    //         'password.required'=>'Vui lòng nhập password',
    //         'phone.unique'=>'Số điện thoại này đã tồn tại',
    //         'phone.required'=>'Vui lòng nhập số điện thoại',
    //     );
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
        // return Validator::make($data,$rules,$messages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        // $request=new RegisterRequest();
        // if($request){
        //     echo $request->phone;
        // }
        // else{
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'phone' => $data['phone'],
        ]);
        // }
    }

    // public function getRegister(){
    //     return view('auth.register');
    // }
    // public function postRegister(RegisterRequest $request){
    //     echo $request->name;
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     $data=Input::except(array('token'));
    //     $rules=array(
    //         //
    //         'name' =>'required',
    //         'email' =>'required|unique:users',
    //         'password'=>'required',
    //         'phone' =>'required|unique:users'
    //     );
    //     $messages=array (
    //         'name.required'=>'Vui lòng nhập user name',
    //         'email.required'=>'Vui lòng nhập email',
    //         'email.unique'=>'Email này đã tồn tại',
    //         'password.required'=>'Vui lòng nhập password',
    //         'phone.unique'=>'Số điện thoại này đã tồn tại',
    //         'phone.required'=>'Vui lòng nhập số điện thoại',
    //     );
    //     // return Validator::make($data, [
    //     //     'name' => 'required|max:255',
    //     //     'email' => 'required|email|max:255|unique:users',
    //     //     'password' => 'required|min:6|confirmed',
    //     // ]);
    //     $validator=Validator::make($data,$rules,$messages);
    //     if($validator->fails()){
    //         echo "yes fail";
    //     }
    //     else{
    //         echo "no";
    //     }
    // }

}
