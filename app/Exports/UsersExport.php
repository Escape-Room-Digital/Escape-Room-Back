<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    
    public function collection()
    {
        return User::all();
    }

    public function headings(): array 
    {
      return[
        'id',
        'name',
        'phone',
        'email',
        'promo',
        'solution',
        'testdone',
        'email_verified_at',
        'password',
        'remember_token',
        'created_at',
        'updated_at',
      ];
    }
}
