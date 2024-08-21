<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.career.index');
    }

    public function detail(Request $request)
    {
        $careers = [
            [
                'title' => 'Sales Representative',
                'location' => 'Jakarta, Indonesia',
                'description' => 'As a sales representative at My Site, you will work closely with customers to understand their needs and provide them with the best options for their budget and lifestyle. A successful candidate will have excellent communication skills and a passion for sales.',
                'link' => '#'
            ],
            [
                'title' => 'Service Technician',
                'location' => 'Surabaya, Indonesia',
                'description' => 'As a service technician at My Site, you will be responsible for performing maintenance and repairs on Honda vehicles. A successful candidate will have experience in automotive epair and a commitment to providing exceptional service.',
                'link' => '#'
            ],
            [
                'title' => 'Administrative Assistant',
                'location' => 'Jakarta, Indonesia',
                'description' => 'As an administrative assistant at My Site, you will provide support to the sales and service departments. A successful candidate will have strong organizational skills and attention to detail.',
                'link' => '#'
            ],
            [
                'title' => 'Marketing Specialist',
                'location' => 'Surabaya, Indonesia',
                'description' => 'As a marketing specialist at My Site, you will develop and execute marketing campaigns to promote our dealership and services. A successful candidate will have experience in marketing and a passion for the automotive industry.',
                'link' => '#'
            ]
        ];

        return view('pages.career.detail', compact('careers'));
    }
}
