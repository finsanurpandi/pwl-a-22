<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        // $students = Student::all();
        // $student = Student::find(1);
        // $iteration = 1;

        // send data using array
        // $data['nama'] = 'Nama Mahasiswa';
        // $data['kelas'] = 'A 2022';
        // $data['prodi'] = 'Informatika';

        // return view('student.index', $data);

        // send data using compact method
        $nama = 'Nama Mahasiswa';
        $kelas = 'A 2022';
        $prodi = '<strong>Informatika</strong>';

        $alphabets = ['a', 'b', 'c', 'd', 'e', 'f'];

        return view('student.index', compact('nama', 'kelas', 'prodi', 'alphabets'));
    }
}
