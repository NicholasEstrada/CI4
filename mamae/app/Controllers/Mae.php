<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MaeModel;

class Mae extends BaseController
{
    private $maeModel;

    public function __construct()
    {
        $this->maeModel = new MaeModel();
    }

    public function index()
    {
        return view('mae', [
            'cores' => $this->maeModel->findAll()
        ]);
    }

    public function escreve(){
        return view('form');
    }

    public function grava(){
        if($this->maeModel->save($this->request->getPost())){
            return view('form');
        }
    }

    public function delete($id){
        if($this->maeModel->delete($id)){
            return view('form');
        }else{
            echo "erro";
        }
    }

}
