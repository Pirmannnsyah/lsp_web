<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function showForm()
    {
        return view('register');
    }

    public function submitForm(Request $request)
    {
        // Validasi dan proses data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
        ]);

        // Simpan data atau lakukan tindakan lain
        // Mahasiswa::create($request->all());

        return redirect('/register')->with('success', 'Pendaftaran berhasil!');
    }
}
