<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class UsersImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach ($collection as $row) 
        {
            if($row[0] != 'name'){
                $ok = User::create([
                    'name' => $row[0],
                    'phone' => $row[1],
                    'email'      => $row[2],
                    'promo'  => $row[3],
                ]);
            }
        } 
    }
}
