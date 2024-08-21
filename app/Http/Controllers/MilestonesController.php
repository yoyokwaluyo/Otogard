<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MilestonesController extends Controller
{
    public function index(Request $request)
    {
        $milestones = [
            [
                'year' => '2006',
                'title' => 'Pendirian Perusahaan', 
                'image' => asset('images/ml-1.png'),
                'content' => [
                    ['title' => 'Pendirian Perusahaan', 'image' => asset('images/ml-1.png'), 'border' => '']
                ],
                'color' => ['from' => 'from-black', 'to' => 'to-black/90'],
                'activeColor' => 'bg-black/90',
                'borderColor' => 'border-black/90',
                'position' => 'top',
                'idModal' => '2006'
            ],
            [
                'year' => '2008',
                'title' => 'Pabrik Di Pulogadung', 
                'image' => asset('images/ml-2.png'),
                'content' => [
                    ['title' => 'Pabrik Di Pulogadung', 'image' => asset('images/ml-2.png'), 'border' => '']
                ],
                'color' => ['from' => 'from-black/90', 'to' => 'to-sky-800'],
                'activeColor' => 'bg-sky-900',
                'borderColor' => 'border-sky-900',
                'position' => 'top',
                'idModal' => '2008'
            ],
            [
                'year' => '2013',
                'title' => 'Move Pabrik To Karanggan', 
                'image' => asset('images/ml-3.png'),
                'content' => [
                    ['title' => 'Move Pabrik To Karanggan', 'image' => asset('images/ml-3.png'), 'border' => '']
                ],
                'color' => ['from' => 'from-sky-800', 'to' => 'to-sky-700'],
                'activeColor' => 'bg-sky-800',
                'borderColor' => 'border-sky-800',
                'position' => 'top',
                'idModal' => '2013'
            ],
            [
                'year' => '2014',
                'title' => 'Sertifikat ISO 90001 : 2008', 
                'image' => asset('images/ml-4.png'),
                'content' => [
                    ['title' => 'Sertifikat ISO 90001 : 2008', 'image' => asset('images/ml-4.png'), 'border' => '']
                ],
                'color' => ['from' => 'from-sky-700', 'to' => 'to-sky-600'],
                'activeColor' => 'bg-sky-700',
                'borderColor' => 'border-sky-700',
                'position' => 'top',
                'idModal' => '2014'
            ],
            [
                'year' => '2016',
                'title' => 'Adding a New Line for Car Care', 
                'image' => asset('images/ml-5.png'),
                'content' => [
                    ['title' => 'Adding a New Line for Car Care', 'image' => asset('images/ml-5.png'), 'border' => '']
                ],
                'color' => ['from' => 'from-sky-600', 'to' => 'to-sky-500'],
                'activeColor' => 'bg-sky-500',
                'borderColor' => 'border-sky-500',
                'position' => 'bottom',
                'idModal' => '2016'
            ],
            [
                'year' => '2017',
                'title' => 'Sertifikat ISO 90001 : 2015', 
                'image' => asset('images/ml-4.png'),
                'content' => [
                    ['title' => 'Sertifikat ISO 90001 : 2015', 'image' => asset('images/ml-4.png'), 'border' => '']
                ],
                'color' => ['from' => 'from-sky-500', 'to' => 'to-sky-500'],
                'activeColor' => 'bg-sky-500',
                'borderColor' => 'border-sky-500',
                'position' => 'bottom',
                'idModal' => '2017-1'
            ],
            [
                'year' => '2017',
                'title' => 'Perizinan Ekspor', 
                'image' => asset('images/ml-6.png'),
                'content' => [
                    ['title' => 'Perizinan Ekspor', 'image' => asset('images/ml-6.png'), 'border' => '']
                ],
                'color' => ['from' => 'from-sky-500 from-60%', 'to' => 'to-sky-600 to-90%'],
                'activeColor' => 'bg-sky-600',
                'borderColor' => 'border-sky-600',
                'position' => 'bottom',
                'idModal' => '2017-2'
            ],
            [
                'year' => '2019',
                'title' => 'Maklon Untuk Otomotif Brand', 
                'image' => asset('images/ml-7.png'),
                'content' => [
                    ['title' => 'Maklon Untuk Otomotif Brand', 'image' => asset('images/ml-7.png'), 'border' => '']
                ],
                'color' => ['from' => 'from-rose-800', 'to' => 'to-rose-700'],
                'activeColor' => 'bg-rose-800',
                'borderColor' => 'border-rose-800',
                'position' => 'bottom',
                'idModal' => '2019'
            ],
            [
                'year' => '2020',
                'title' => 'Adding New Building for PKRT Product', 
                'image' => asset('images/ml-8.png'),
                'content' => [
                    ['title' => 'Adding New Building for PKRT Product', 'image' => asset('images/ml-8.png'), 'border' => 'border-r-[1px] border-rose-600'],
                    ['title' => 'Sertifikat Kemenkes (PKRT)', 'image' => asset('images/ml-9.png'), 'border' => '']
                ],
                'color' => ['from' => 'from-rose-700', 'to' => 'to-rose-600'],
                'activeColor' => 'bg-rose-600',
                'borderColor' => 'border-rose-600',
                'position' => 'top',
                'idModal' => '2020-1'
            ],
            [
                'year' => '2020',
                'title' => 'Sertifikat Kemenkes (PKRT)', 
                'image' => asset('images/ml-9.png'),
                'content' => [
                    ['title' => 'Adding New Building for PKRT Product', 'image' => asset('images/ml-8.png'), 'border' => 'border-r-[1px] border-rose-600'],
                    ['title' => 'Sertifikat Kemenkes (PKRT)', 'image' => asset('images/ml-9.png'), 'border' => ''],
                ],
                'color' => ['from' => 'from-rose-600', 'to' => 'to-rose-500'],
                'activeColor' => 'bg-rose-500',
                'borderColor' => 'border-rose-500',
                'position' => 'top',
                'idModal' => '2020-2'
            ],
            [
                'year' => '2022',
                'title' => 'Sertifikat BPOM (Kelas B)', 
                'image' => asset('images/ml-10.png'),
                'content' => [
                    ['title' => 'Sertifikat BPOM (Kelas B)', 'image' => asset('images/ml-10.png'), 'border' => '']
                ],
                'color' => ['from' => 'from-rose-500', 'to' => 'to-rose-500'],
                'activeColor' => 'bg-rose-500',
                'borderColor' => 'border-rose-500',
                'position' => 'top',
                'idModal' => '2022'
            ]
        ];

        return view('pages.milestones.index', compact('milestones'));
    }
}
