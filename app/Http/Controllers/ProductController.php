<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Inertia\Inertia;


class ProductController extends Controller
{

    private $products = [
        ['id' => 1, 'name' => ' ถุงเท้าลายที่ 1', 'description' => 'ถุงเท้าลายคริสมาส 5 คู่ ',
         'price' => 2, 'image' => '/images/sock1.jpg'],
        ['id' => 2, 'name' => 'ถุงเท้าลายที่ 2', 'description' => 'ถุงเท้าน้องแมว 5 สี 5 คู่',
         'price' => 2, 'image' => '/images/sock2.jpg'],
        ['id' => 3, 'name' => 'ถุงเท้าลายที่ 3', 'description' => 'ถุงเท้าน้องแมว 5 สี 5 คู่',
         'price' => 2, 'image' => '/images/sock3.jpg'],
        ['id' => 4, 'name' => 'ถุงเท้าลายที่ 4', 'description' => 'ถุงเท้าลายสมายล์ ขาว-ดำ 5 คู่',
         'price' => 2, 'image' => '/images/sock4.jpg'],
        ['id' => 5, 'name' => 'ถุงเท้าลายที่ 5', 'description' => 'ถุงเท้าลายแมว ชมพู-ดำ 5 คู่',
         'price' => 2, 'image' => '/images/sock5.jpg'],
        ['id' => 6, 'name' => 'ถุงเท้าลายที่ 6', 'description' => 'ถุงเท้าลานหมี ขาว-น้ำตาล 5 คู่',
         'price' => 2, 'image' => '/images/sock6.jpg'],
        ['id' => 7, 'name' => 'ถุงเท้าลายที่ 7', 'description' => 'ถุงเท้าผลไม้ 5 ชนิด 5 คู่',
         'price' => 2, 'image' => '/images/sock7.jpg'],
        ['id' => 8, 'name' => 'ถุงเท้าลายที่ 8', 'description' => 'ถุงเท้าการ์ตูน 5 สี 5 คู่',
         'price' => 2, 'image' => '/images/sock8.jpg'],
        ['id' => 9, 'name' => 'ถุงเท้าลายที่ 9', 'description' => 'ถุงเท้าน้องเป็ด 5 สี 5 คู่',
         'price' => 2, 'image' => '/images/sock9.jpg'],
        ['id' => 10, 'name' => 'ถุงเท้าลายที่ 10', 'description' => 'ถุงเท้าvintage 5 สี 5 คู่',
         'price' => 2, 'image' => '/images/sock10.jpg'],
        ['id' => 11, 'name' => 'ถุงเท้าลายที่ 11', 'description' => 'ถุงเท้าน่ารักๆ 5 สี 5 คู่',
         'price' => 2, 'image' => '/images/sock11.jpg'],
        ['id' => 12, 'name' => 'ถุงเท้าลายที่ 12', 'description' => 'ถุงเท้าล้างstock 10 สี 10 คู่',
         'price' => 3, 'image' => '/images/sock12.jpg'],

        ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Products/Index', ['products' =>
        $this->products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $product = collect($this->products)->firstWhere('id', $id);

        if (!$product) {
        abort(404, 'Product not found');
    }
        return Inertia::render('Products/Show', ['product' => $product]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function test()
    {
    return Inertia::render('Test');
    }

}
