<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Renderable;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {
  /**
    * Display login page.
    *
    * @return Renderable
    */
    public function show() {
        return view('dashboard.users.login');
    }

    /**
      * Handle account login request
      *
      * @param LoginRequest $request
      *
      * @return \Illuminate\Http\Response
      */
      public function login(LoginRequest $request) {
        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials)):
            return redirect()->route('sign-in-page')->with('error-message', 'Problem with user credentials.');
        endif;

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return redirect()->route('dashboard-index');
      }

  /**
   * Handle response after user authenticated
   *
   * @param Request $request
   * @param Auth $user
   *
   * @return \Illuminate\Http\Response
   */
  protected function authenticated(Request $request, $user) {
      return redirect()->intended();
  }
}
