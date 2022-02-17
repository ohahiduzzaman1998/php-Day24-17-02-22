<?php
namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
class ViewController extends Controller
{
    private $city;
    private $mobile;
    private $data = [];
    private $data1 = [];
    private $products;

    public function index()
    {
        return view('test');
    }
    public function bitm()
    {
        $this->city ='Dhaka';
        $this->mobile ='01726684197';
        $this->data = [10,20,30,'bitm',10.2,true];
        $this->data1 = [
            0   =>[
                'name'  => 'shehon',
                'city'  =>  'Dhaka',
                'mobile'=>  '01970481744',
            ],
            1   =>[
                'name'  => 'nahid',
                'city'  =>  'mirpur',
                'mobile'=>  '01631481744',
            ],
            2   =>[
                'name'  => 'ohid',
                'city'  =>  'kalabagan',
                'mobile'=>  '01852814850',
            ],
        ];

        return view('demo', [
            'a'      => $this->city,
            'shehon' => $this->mobile,
            'nahid'  => $this->data,
            'array' => $this->data1,
            ]);
    }
    public function about()
    {
        $this->products = Product::getAllProduct();

       return view('about',['products' => $this->products]);
    }
    public function contact()
    {
        return view('contact');
    }
    public function detail($id)
    {
        $this->products = Product::getAllProduct();
        foreach ($this->products as $item)
        {
            if ($item['id'] == $id)
            {
                return view('detail',['data' =>$item]);
            }
        }
    }
}
