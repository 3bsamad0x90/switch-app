<?php

namespace App\Imports;

use App\Writers;
use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class WritersImport implements ToModel ,WithHeadingRow
{
    private $user_id;

    public function __construct($user_id) {
        $this->user_id = $user_id;
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Writers([
            //
            // 'user_id' => $this->user_id,
            'name_ar' => $row['name_ar'],
            'name_en' => $row['name_en'],
            'bio_ar' => $row['bio_ar'],
            'bio_en' => $row['bio_en'],
            'active' => 0
        ]);
    }
}
