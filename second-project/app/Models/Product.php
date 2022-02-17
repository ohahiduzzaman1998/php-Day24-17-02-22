<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static function getAllProduct()
    {
        return [
            0   =>[
                'id'     =>'1',
                'name'  => 'T-shirt',
                'price' =>  '2050',
                'description' => 'description',
                'image' => asset('/img/s4.jpg'),
            ],
            1   =>[
                'id'     =>'2',
                'name'  => 'Watch',
                'price' =>  '1200',
                'description' => 'description',
                'image' => asset('/img/x1.jpg'),
            ],
            2   =>[
                'id'     =>'3',
                'name'  => 'Ring',
                'price' =>  '700',
                'description' => 'description',
                'image' => asset('/img/x2.jpg'),
            ],
        ];
    }
}
