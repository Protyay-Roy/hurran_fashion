<?php

namespace App\Imports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\ToModel;

class OrderImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Order([
            'shipping_id' => $row[0],
            'product_id' => $row[1],
            'color_id' => $row[2],
            'size_id' => $row[3],
            'store_id' => $row[4],
            'product_unit_price' => $row[5],
            'quantity' => $row[6],
        ]);
    }
}
