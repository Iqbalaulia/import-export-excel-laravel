<?php

namespace App\Imports;

use App\Siswas;
use Maatwebsite\Excel\Concerns\ToModel;

class SiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Siswas([
            'nama' => $row[1],
            'nis' => $row[2], 
            'alamat' => $row[3],
        ]);
    }
}
