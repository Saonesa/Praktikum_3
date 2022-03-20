<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'List User',
            'users' => User::all(),
        ];
        return view('admin.user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        {
            $data=[
                'title'=>'Tambah User',
                // 'route' => route(''),
            ];
            return view('admin.user.create', $data);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = new User;
        $user->nik = $request->nik;
        $user->name = $request->name;
        $user->jk=$request->jk;
        $user->tgl_lahir=$request->tgl_lahir;
        $user->alamat=$request->alamat;
        $user->telp=$request->telp;

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
           $filename = $user->nik . '-' . $user->id . '.' . $image->getClientOriginalExtension();
           $location = $request->file('photo')->move('images/user/', $filename);
           $user->photo = $location;
       }
        $user->email=$request->email;
        $user->password=$request->password;


        $user->save();
        return redirect()->route('list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        

            $data = [
                'Title' => 'Curriculum Vitae',
                'user' => User::where('id', $id)->first(),
            ];
            return view('admin.profile', $data);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'title' => 'Edit User',
            'method' => 'PUT',
            'route' => route('update_user', $id),
            'user' => User::where('id', $id)->first(),
        ];
        return view('admin.user.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->nik = $request->nik;
        $user->name = $request->name;
        $user->jk=$request->jk;
        $user->tgl_lahir=$request->tgl_lahir;
        $user->alamat=$request->alamat;
        $user->telp=$request->telp;

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
           $filename = $user->nik . '-' . $user->id . '.' . $image->getClientOriginalExtension();
           $location = $request->file('photo')->move('images/user/', $filename);
           $user->photo = $location;
       }
        $user->email=$request->email;
        $user->password=$request->password;
        
        $user->update();
        return redirect()->route('list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $destroy =User::where('id', $id);
        $destroy->delete();
        return redirect(route('list'));
        
    }
}
