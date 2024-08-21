<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BannerSlider extends Component
{
    public $pages;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        switch (Request()->route()->getName()) {
            case 'home':
                $this->pages = [
                    [
                        'image' => asset('images/banner-home.jpg'),
                        // 'image' => asset('images/banner-car-care.mp4'),
                        'title' => '<p>Lorem ipsum dolor sit amet</p>
                                    <p>Lorem ipsum dolor sit amet</p>',
                        'type'  => 'image',
                        'customTitle' => false
                    ]
                ];
                break;
            case 'our_facility':
                $this->pages = [
                    [
                        'image' => asset('images/facility-banner.png'),
                        'title' => 'Discover Our Company Profile',
                        'type'  => 'image',
                        'customTitle' => true
                        // 'type'  => 'video'
                    ]
                ];
                break;

            default:
                $this->pages = [
                    [
                        'image' => asset('images/banner-home.jpg'),
                        'title' => 'Discover Our Company Profile',
                        'type'  => 'image'
                    ]
                ];
                break;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.banner-slider');
    }
}
