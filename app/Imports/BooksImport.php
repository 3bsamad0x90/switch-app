<?php

namespace App\Imports;

use App\Books;
use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class BooksImport implements ToModel ,WithHeadingRow
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
        if ($row['writer'] != '') {
            $newPublisher = createNewWriter($row['writer']);
        } else {
            $newPublisher = '';
        }
        return new Books([
            //
            'publisher_id' => $this->user_id,
            'name_ar' => $row['name_ar'],
            'name_en' => $row['name_en'],
            'des_ar' => $row['des_ar'],
            'des_en' => $row['des_en'],
            'hardCopy' => $row['hardCopy'] ?? '1',
            'hard_price' => $row['hard_price'] ?? 0,
            'pdfCopy' => $row['pdfCopy'] ?? 0,
            'pdf_price' => $row['pdf_price'] ?? 0,
            'available' => $row['available'] ?? '1',
            'stock' => $row['stock'] ?? '1',
            'section_id' => $row['section_id'] ?? 0,
            'writer_id' => $newPublisher,
            'pages' => $row['pages'] ?? 1,
            'booksNo' => $row['booksNo'] ?? 0,
            'weight' => $row['weight'] ?? 1
        ]);
    }
}
