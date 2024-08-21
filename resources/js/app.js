// import './bootstrap';

import 'flowbite';
import jQuery from 'jquery';
window.$ = jQuery;

import { MySlider, Lazyload, initMap, Gallery, Maklon } from './function';

$(function () {
    let pathName = window.location.pathname;

    MySlider.banner();
    Lazyload.init();
    initMap();

    // function for milestones page
    if (pathName.includes("milestones")) {
        MySlider.scrollbar();
    } 
    // function for our-facility page
    if (pathName.includes("our-facility")) {
        Gallery.open();
    }
    // function for our-customer page
    if (pathName.includes("our-customer")) {
        Maklon.product();
    }
    // function for car-care page
    // if (pathName.includes("car-care") || pathName.includes("house-care")) {
        MySlider.productThumb();
    // }
});