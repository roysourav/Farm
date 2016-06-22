<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Session;

use Redirect;

class userController extends Controller
{
	  /**
     * Display a listing of all Users.
     *
     */

      public function index(){
        
        $users = User::all();
        return view('user.user')->withUsers($users);
    }

    /**
     * Remove the specified user from storage.
     *
     * @param  int  $id
     */

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        Session::flash( 'success', 'User Has Been Deleted Successfully !');

        return Redirect::route('user.index');
    }



}
