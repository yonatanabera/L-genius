<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.users.view'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles=User::find($id)->role->pluck('name', 'id');
        $data=User::find($id);

        return view('admin.users.edit', compact('data', 'roles'));
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
        //
        // return $request;

        User::find($id)->update($request->all());
        return redirect(route('users.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function dataAjax(){
        $data=User::all();
        return Datatables::of($data)->editColumn('role_id', function($data){
            return strtoupper($data->role->name);
        })->editColumn('created_at', function($data){
            return $data->created_at->diffForHumans();
        })->addColumn('action', function($data){
            $button='<a type="button" class="edit btn btn-warning btn-sm" href="'. route('users.edit', $data->id).'" name="edit" id="'.$data->id.'">Edit</a>';
            return $button;
        })->rawColumns(['action'])->make(true);
    }
}
