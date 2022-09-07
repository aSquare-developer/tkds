<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller {

  /**
   * Display register page.
   *
   * @return \Illuminate\Http\Response
   */
  public function show() {
      return view('dashboard.users.register');
  }

    /**
   * Handle account registration request
   *
   * @param RegisterRequest $request
   *
   * @return \Illuminate\Http\Response
   */
  public function register(RegisterRequest $request) {
      $user = User::create($request->validated());

      auth()->login($user);

      return redirect()->route('dashboard-index')->with('message', 'User created and logged in.');
  }
}