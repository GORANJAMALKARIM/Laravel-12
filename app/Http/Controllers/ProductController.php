<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
        public function index()
    {
   return DB::select('SELECT * FROM products');

      
    }
    public function insert()
    {
       DB::insert('insert into products (name,price,Palary,calculat) values (?,?,?,?)',
        ['Goran',100.00,50.00,25.00]);
       return 'Data inserted successfully';
    

    }
     
  public function delete( $id)
    {
        DB::delete('delete from products where id = ?', [$id]);
        return 'Data deleted successfully';
    }
}