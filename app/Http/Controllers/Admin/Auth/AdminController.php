<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;

class AdminController extends Controller
{
	protected $guard = 'admin';
    protected $broker = 'admin';


    public function getLogin(){
    	return $this->showLogin();
    }

    public function showLogin(){
    	if(\Auth::guard($this->guard)->check())
    	{
    		return redirect()->route('admin.index');
    	}
    	// return redirect()->route('get.admin.login');
    	return view('admin.auth.login');
    }

    public function postLogin(Request $request){
    	return $this->login($request);
    }

    public function login(Request $request)
    {
    	$validator = $this->validateLogin($request->all());
    	if($validator->fails()){
    		return redirect()->back()->withErrors($validator)->withInput();
    	}
    	$credentials = [
    		'email' 	=> $request->email,
    		'password' => $request->password
    	];

    	if(\Auth::guard($this->guard)->attempt($credentials)){
    		return redirect()->route('admin.index');
    	}else{
    		return redirect()->back()->withErrors(['email' => 'tai khoan hoac mat khau khong chinh xac'])->withinput();
    	}

    }

    public function validateLogin(array $data)
    {
    	return Validator::make($data,[
    		'email' => 'required|email|max:255',
    		'password' => 'required',
    	]);
    }




    public function showResetForm(Request $request, $token = null)
    {
        return view('admin.auth.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }

    /**
     * Reset the given user's password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function reset(Request $request)
    {
        $this->validate($request, [
            'token' => 'required', 'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
        ]);

        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        $response = $this->broker()->reset(
            $this->credentials($request), function ($user, $password) {
                $this->resetPassword($user, $password);
            }
        );

        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        return $response == Password::PASSWORD_RESET
                    ? $this->sendResetResponse($response)
                    : $this->sendResetFailedResponse($request, $response);
    }

    /**
     * Get the password reset credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        return $request->only(
            'email', 'password', 'password_confirmation', 'token'
        );
    }

    /**
     * Reset the given user's password.
     *
     * @param  \Illuminate\Contracts\Auth\CanResetPassword  $user
     * @param  string  $password
     * @return void
     */
    protected function resetPassword($user, $password)
    {
        $user->forceFill([
            'password' => bcrypt($password),
            'remember_token' => Str::random(60),
        ])->save();

        $this->guard()->login($user);
    }

    /**
     * Get the response for a successful password reset.
     *
     * @param  string  $response
     * @return \Illuminate\Http\Response
     */
    protected function sendResetResponse($response)
    {
        return redirect($this->redirectPath())
                            ->with('status', trans($response));
    }

    /**
     * Get the response for a failed password reset.
     *
     * @param  \Illuminate\Http\Request
     * @param  string  $response
     * @return \Illuminate\Http\Response
     */
    protected function sendResetFailedResponse(Request $request, $response)
    {
        return redirect()->back()
                    ->withInput($request->only('email'))
                    ->withErrors(['email' => trans($response)]);
    }

    /**
     * Get the broker to be used during password reset.
     *
     * @return \Illuminate\Contracts\Auth\PasswordBroker
     */
    public function broker()
    {
        return Password::broker();
    }

    /**
     * Get the guard to be used during password reset.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }

    

}
