<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function UserExport(){
      return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function UserImport() 
    {
      //Aca se colocara el nombre del archivo donde estaran los usuarios que deseas subir, importante guardar ese archivo en la carpeta public.
        Excel::import(new UsersImport, 'candidatos.csv');              
    }
}
