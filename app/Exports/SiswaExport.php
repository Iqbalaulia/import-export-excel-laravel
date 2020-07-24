<?php

namespace App\Exports;

use App\Siswa;
use App\Siswas;
use Maatwebsite\Excel\Concerns\FromCollection;

class SiswaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Siswas::all();
    }
}
