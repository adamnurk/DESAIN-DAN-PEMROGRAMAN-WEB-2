<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class studentApiController extends Controller
{
    public function index()
    {
        // Untuk mengambil data dari database,
        // Untuk menyimpan kedalam array terlebih dahulu
        $data['students'] = Student::all();

        // Untuk return data array ke API
        return response() -> json($data);
    }

    // Untuk Menampilkan data siswa melalui API 
    public function getById($id)
    {
        // Untuk mengambil data dari database berdasarkan id,
        $data['student'] = Student::find($id);

        return response() -> json($data);
    }

    // Untuk Menampilkan data siswa melalui API 
    // Menggunakan parameter Nim
    public function getByNim($nim)
    {
        // Mengambil data dari database berdasarkan id kemudian disimpan kedalam array
        $data['student'] = Student::where('nim', $nim) -> first();

        // Return data array ke API
        return response() -> json($data);
    }

    public function save()
    {
        $student = new Student;
        $student->nim = request('nim');
        $student->name = request('name');
        $student->gender = request('gender');
        $student->departement = request('departement');
        $student->address = request('address');
        $student->save();

        return response() -> json(['message' => "Data berhasil disimpan"]);
    }

    public function update($id)
    {
        $student = Student::find($id);
        $student->nim = request('nim');
        $student->name = request('name');
        $student->gender = request('gender');
        $student->departement = request('departement');
        $student->address = request('address');
        $student->save();

        return response() -> json(['message' => "Data berhasil diubah"]);
    }

    public function delete($id)
    {
        // Untuk mengambil data dari database berdasarkan id,
        $student = Student::find($id);

        // Untuk menghapus data siswa
        $student->delete();

        return response() -> json(['message' => "Data berhasil dihapus"]);
    }
}
