<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MData;

class Data extends BaseController
{
    public function __construct()
    {
        $this->tbl_fitrah = new MData;
    }

    public function index()
    {
        $data = $this->tbl_fitrah->getData();
        $array = array(
            'hasil' => $data,
        );
        //var_dump($data);
        return view('V_showData',$array);
    }

    public function insertData()
    {
        return view('V_insertData');
    }

    public function saveData()
    {
        $data =[
            'nik'               => $this->request->getVar('nik'),
            'nama'              => $this->request->getVar('nama'),
            'no_telpon'         => $this->request->getVar('no_telpon'),
            'jenis_zakat'       => $this->request->getVar('jenis_zakat'),
            'jumlah_jiwa'       => $this->request->getVar('jumlah_jiwa'),
            'nominal'           => $this->request->getVar('nominal'),
        ];
        $insert = $this->tbl_fitrah->saveData($data);
        return redirect()->to('data');
        //$namakita = $this->request->getVar('nama');
    }
    public function editData($nik)
    {
        $selectdata = $this->tbl_fitrah->getSelectData($nik);
        $array = [
            'data' =>$selectdata,
            
        ];
        return view('V_editData',$array);
    }
    public function saveEditData($nik)
    {
        $data =[
            'nik'               => $this->request->getVar('nik'),
            'nama'              => $this->request->getVar('nama'),
            'no_telpon'         => $this->request->getVar('no_telpon'),
            'jenis_zakat'       => $this->request->getVar('jenis_zakat'),
            'jumlah_jiwa'       => $this->request->getVar('jumlah_jiwa'),
            'nominal'           => $this->request->getVar('nominal'),
        ];
        $update = $this->tbl_fitrah->saveEditData($data,$nik);
        return redirect()->to('data');
    }
    public function hapusData($nik)
    {
        $selectdata = $this->tbl_fitrah->hapusData($nik);
        return redirect()->to('data');
    }
}
