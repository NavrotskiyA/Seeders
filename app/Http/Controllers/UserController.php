<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function registration()
    {
//        return '<h2>Registration form</h2>
//                <form method="POST" action="'.route('user.show').'">
//                    <h3>Choose your number</h3>
//                    <input name="id" type="number">
//                    <input type="submit" value="ENTER">
//                    <input type="hidden" name="type" value="registration">
//                    <input type="hidden" name="_token" value="'.csrf_token().'" />
//                </form>';
        return 'Registration method';
    }
    public function auth()
    {
//        return '<h2>Authorisation form</h2>
//                <form method="POST" action="'.route('user.show').'">
//                    <h3>Choose your number</h3>
//                    <input name="id" type="number">
//                    <input type="submit" value="ENTER">
//                    <input type="hidden" name="type" value="authorisation">
//                    <input type="hidden" name="_token" value="'.csrf_token().'" />
//                </form>';
        return 'Authorisation method';
    }
    public function show($id)
    {
        return 'Hello user with id '.$id;
    }
    public function delete($id)
    {
        return 'User with '.$id.' was deleted';
    }
}
