<?php
namespace App\Http\Controllers;
class ProductController extends Controller {
    public function index() {
        $products = [
            ['title' => 'Inception', 'genre' => 'Sci-Fi', 'year' => 2010],
            ['title' => 'The Dark Knight', 'genre' => 'Action', 'year' => 2008],
            ['title' => 'Interstellar', 'genre' => 'Drama', 'year' => 2014],
            ['title' => 'The Matrix', 'genre' => 'Sci-Fi', 'year' => 1999],
        ];
        return view('products', compact('products'));
    }
}