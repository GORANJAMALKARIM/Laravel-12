<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
        public function index()
    {
   return DB::select('SELECT * FROM products');
Product::all();
      
    }
    public function store()
    {
     Product::create([
            'name' =>'Product Name',
            'price' => 100.00,
            'note' => 'This is a product note.'
        ]);
        return 'Data inserted successfully';
    

    }
     
  public function delete( $id)
    {
        Product::where('id', $id)->delete();
        return 'Data deleted successfully';
    }
}