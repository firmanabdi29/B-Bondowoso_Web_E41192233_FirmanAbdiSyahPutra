<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUser extends Controller
{
   
    public function index()
    {
        return view('home');
    }

  
    public function create()
    {
        "Method ini nantinya akan digunakan untuk menampilkan form untuk menambah data user";
    }


    public function store(Request $request)
    {
        "Method ini nantinya akan digunakan untuk menciptakan data user yang baru";
    }


    public function show($id)
    {
        "Method ini nantinya akan digunakan untuk mengambil satu data user dengan id=" . $id;
    }

  
    public function edit($id)
    {
        "Method ini nantinya akan digunakan untuk menampilkan form untuk mengubah data edit dengan id=" . $id;
    }


    public function update(Request $request, $id)
    {
        "Method ini nantinya akan digunakan untuk mengubah data user dengan id=" . $id;
    }

 
    public function destroy($id)
    {
        "Method ini nantinya akan digunakan untuk menghapus data user dengan id=" . $id;
    }
}
