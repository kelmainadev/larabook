<?php
//use Larabook\Forms\RegistrationForm;
class RegistrationController extends \BaseController {
 private $registrationForm;

//  function __construct(RegistrationForm $registrationForm)
//    {
//        $this->registrationForm= $registrationForm;
//    }

    public function create()
	{
		return View::make('registration.create');
	}
	public function store(){
//        $this -> registrationForm -> validate(Input::all());
	   $user= user::create(
	        Input::only('username','email','password')
        );
	    Auth::login($user);
	    return Redirect::home();
    }


}
