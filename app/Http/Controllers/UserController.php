<?php

namespace App\Http\Controllers;
use App\Models\Kelas;
use App\Models\User;
use App\Models\UserModel;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        $kelasModel = new Kelas();

        $kelas = $kelasModel->getKelas();

        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }
    // public function store(Request $request){
    //     $data = [
    //         'nama'=>$request->input('nama'),
    //         'kelas'=>$request->input('kelas'),
    //         'npm'=>$request->input('npm'),
    //     ];
    //     return view('profile', $data);
    // }
    public function store(UserRequest $request){
        $this->userModel->create([ 
            'nama' => $request->input('nama'), 
            'npm' => $request->input('npm'), 
            'kelas_id' => $request->input('kelas_id'), 
            ]); 
            return redirect()->to('/user');

    }
    public $userModel;
    public $kelasModel;

    public function __construct(){
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function index(){
        $data = [
            'title' => 'Create User',
            'users' => $this->userModel->getUser(),
        ];
        return view('list_user', $data);
    }
}