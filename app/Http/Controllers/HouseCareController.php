<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HouseCareController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.housecare.index');
    }

    public function product(Request $request)
    {
        $aerosol = [
            [
                'image' => asset('images/car-care-3.png'),
                'brand' => 'Otogard',
                'merek' => 'Tar Remover',
                'detail' => '
                    <p>Produk perawatan khusus yang digunakan untuk xxxx xxxx xxxxxxxx xxxx xxxx xxxx</p>
                    <ul><li>- Cair</li></ul>
                    <p>Variasi Kemasan:</p>
                    <p>Jerigen 4L</p>
                ',
                'button' => [
                    ['title'=> 'Tanya MOQ Produk', 'link'=> '#'],
                    ['title'=> 'Buat Produk Ini', 'link'=> '#']
                ]
            ],
            [
                'image' => asset('images/car-care-2.png'),
                'brand' => 'Otogard',
                'merek' => 'Tar Remover',
                'detail' => '
                    <p>Produk perawatan khusus yang digunakan untuk xxxx xxxx xxxxxxxx xxxx xxxx xxxx</p>
                    <ul><li>- Cair</li></ul>
                    <p>Variasi Kemasan:</p>
                    <p>Jerigen 4L</p>
                ',
                'button' => [
                    ['title'=> 'Tanya MOQ Produk', 'link'=> '#'],
                    ['title'=> 'Buat Produk Ini', 'link'=> '#']
                ]
            ],
            [
                'image' => asset('images/car-care-1.png'),
                'brand' => 'Otogard',
                'merek' => 'Tar Remover',
                'detail' => '
                    <p>Produk perawatan khusus yang digunakan untuk xxxx xxxx xxxxxxxx xxxx xxxx xxxx</p>
                    <ul><li>- Cair</li></ul>
                    <p>Variasi Kemasan:</p>
                    <p>Jerigen 4L</p>
                ',
                'button' => [
                    ['title'=> 'Tanya MOQ Produk', 'link'=> '#'],
                    ['title'=> 'Buat Produk Ini', 'link'=> '#']
                ]
            ],
            [
                'image' => asset('images/car-care-3.png'),
                'brand' => 'Otogard',
                'merek' => 'Tar Remover',
                'detail' => '
                    <p>Produk perawatan khusus yang digunakan untuk xxxx xxxx xxxxxxxx xxxx xxxx xxxx</p>
                    <ul><li>- Cair</li></ul>
                    <p>Variasi Kemasan:</p>
                    <p>Jerigen 4L</p>
                ',
                'button' => [
                    ['title'=> 'Tanya MOQ Produk', 'link'=> '#'],
                    ['title'=> 'Buat Produk Ini', 'link'=> '#']
                ]
            ],
            [
                'image' => asset('images/car-care-2.png'),
                'brand' => 'Otogard',
                'merek' => 'Tar Remover',
                'detail' => '
                    <p>Produk perawatan khusus yang digunakan untuk xxxx xxxx xxxxxxxx xxxx xxxx xxxx</p>
                    <ul><li>- Cair</li></ul>
                    <p>Variasi Kemasan:</p>
                    <p>Jerigen 4L</p>
                ',
                'button' => [
                    ['title'=> 'Tanya MOQ Produk', 'link'=> '#'],
                    ['title'=> 'Buat Produk Ini', 'link'=> '#']
                ]
            ],
            [
                'image' => asset('images/car-care-1.png'),
                'brand' => 'Otogard',
                'merek' => 'Tar Remover',
                'detail' => '
                    <p>Produk perawatan khusus yang digunakan untuk xxxx xxxx xxxxxxxx xxxx xxxx xxxx</p>
                    <ul><li>- Cair</li></ul>
                    <p>Variasi Kemasan:</p>
                    <p>Jerigen 4L</p>
                ',
                'button' => [
                    ['title'=> 'Tanya MOQ Produk', 'link'=> '#'],
                    ['title'=> 'Buat Produk Ini', 'link'=> '#']
                ]
            ]
        ];

        return view('pages.housecare.product', ['data' => $aerosol]);
    }

}
