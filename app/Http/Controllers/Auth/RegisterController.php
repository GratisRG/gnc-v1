<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\SecretCode;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Auth\Events\Registered;

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

    /**
     * Where to redirect users after registration.
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
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'pseudo'  =>'required|string|max:255|unique:users',
        ]);
    }


        /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
/* -----------------------  Check activation code --------------------------*/
        $ok_activation_code = $this->checkActivationCode($request->input('code_activation'));

        if ( $ok_activation_code) {
/*-------------------------------  check code parrain -----------------------*/
            $ok_code_parrain = $this->checkCodeParrain($request->input('code_parrain'));

            if ( !$ok_code_parrain) {

                $key = 'Sponsor code not correct';
                $value = 'Activation';
                $request->session()->flash($key, $value);
                return Redirect::back()->withErrors([$key, $value]);
            }

        } else{

            $key = 'Activation code not correct';
            $value = 'Activation';
            $request->session()->flash($key, $value);
             return Redirect::back()->withErrors([$key, $value]);
        }

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        
        return User::create([
            'user_code' =>$this->getAUserCode(),
            'name' => $data['name'],
            'surname' => $data['surname'],            
            'name' => $data['name'],
            'pseudo' => $data['pseudo'],            
            'code_parrain' => $data['code_parrain'],
            'code_activation' => $data['code_activation'],            
            'telephone' => $data['telephone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'position_parrain'=>$this->getPositionParrain(),
        ]);
    }


    public function checkActivationCode( $code)
    {
        $secretcode = \App\SecretCode::where('uicode', $code)->first();
/* Check if the code exists in our database*/ 
        if ($secretcode === null) {  

            return false;

        }else{
            return true;
        }
    }

    public function checkCodeParrain( $code)
    {
        $usercode = \App\User::where('user_code', $code)->first();
/* Check if the code exists in our database*/ 
        if ($usercode === null) {  

            return false;

        }else{
            return true;
        }
    }


    /*
    *   get an user code for the new user
    */

    public function getAUserCode()
    {

        
        $find = true;

        while ($find) {
            $uicode= uniqid('',false);
            $searchcode = \App\User::where('user_code', $uicode)
               ->count();
            if ( $searchcode < 1) {
                $find = false;
            }
        }
        return $uicode;
    }

    /*
    *   get the position of the new user for his parrain
    */

    public function getPositionParrain()
    {
        return 'LEFT';
    }
}
