<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function UserExport(){
      return Excel::download(new UsersExport, 'users.xlsx');
    }
}
