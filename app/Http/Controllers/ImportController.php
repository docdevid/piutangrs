<?php

namespace App\Http\Controllers;

use App\Imports\BiayaPerawatanImport;
use App\Imports\PasienImport;
use App\Imports\PiutangImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function __construct(public $file = '')
    {
        $this->file = public_path('file/import.xlsx');
    }

    public function index()
    {
        return '<a href=' . route('import-pasien') . '>Import Pasien</a>
        <br/>
        <a href=' . route('import-piutang') . '>Import Piutang</a>
        <br/>
        <a href=' . route('import-biaya') . '>Import Biaya</a>
        <br/>
        <a href=' . route('dashboard') . '>Ke dashboard</a>
        <br/>
        <br/>' . session('status');
    }
    public function pasien()
    {
        Excel::import(new PasienImport, $this->file);
        return back()->with('status', 'import pasien success');
    }
    public function piutang()
    {
        Excel::import(new PiutangImport, $this->file);
        return back()->with('status', 'import piutang success');
    }
    public function biaya()
    {
        foreach ([1 => 'adm', 'akom', 'js', 'pen', 'ob', 'jss'] as $k => $p) {
            Excel::import(new BiayaPerawatanImport($k, $p), $this->file);
        }
        return back()->with('status', 'import biaya success');
    }
}
