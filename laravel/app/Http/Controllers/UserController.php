<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Direction;

class UserController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $data = request()->all();
        try {
            $OK = false;

            $user = User::where('email', $data['email'])->exists();

            if ($user != 1) {

                $newUser = new User();
                $newUser->name = $data['name'];
                $newUser->email = $data['email'];
                $newUser->birthdate = $data['birthdate'];
                $OK = $newUser->save();

                foreach ($data['direction'] as $value => $item) {
                    $direction = new Direction();
                    $direction->user_id = $newUser->id;
                    $direction->direction = $item;
                    $OK && $OK = $direction->save();
                }
            } else {
                echo 'El usuario ya fue registrado';
                exit();
            }

            if ($OK) {
                //return redirect()->back()->with('success', 'Se registro con éxito el usuario');
                echo 'Usuario registrado';
                exit();
            } else {
                //return redirect()->back()->with('danger', 'Se registro con éxito el usuario');
                echo 'No se pudo registra el usuario';
                exit();
            }
        } catch (\Exception $ex) {
            //return logger()->log('Error al momento de registra el usuario', $ex->getTraceAsString().' '. $ex->getMessage());
            print_r($ex->getMessage());
            exit();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show() {
        $viewsUsers = User::all();
        $directions = Direction::all();

        return view('viewUsers', ['users' => $viewsUsers, 'directions' => $directions]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
