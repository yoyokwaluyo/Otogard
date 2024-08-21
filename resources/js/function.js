// core version + navigation, pagination modules:
import Swiper from "swiper";
import {
    Navigation,
    Pagination,
    Autoplay,
    Parallax,
    EffectCoverflow,
    FreeMode,
    Thumbs,
    Scrollbar
} from "swiper/modules";
// import Swiper and modules styles
import "swiper/css";
import "swiper/css/effect-coverflow";
import "swiper/css/navigation";
import "swiper/css/pagination";
import "swiper/css/thumbs";
import "swiper/css/free-mode";
import 'swiper/css/scrollbar';

import { Fancybox } from "@fancyapps/ui";
import "@fancyapps/ui/dist/fancybox/fancybox.css";


const MySlider = {
    banner: function () {
        var banner = document.querySelector(".myBanners");
        if (banner) {
            new Swiper(".myBanners", {
                lazy: true,
                autoplay: true,
                speed: 1000,
                parallax: true,
                dynamicBullets: true,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                modules: [Navigation, Parallax, Autoplay],
            });
        }

        var video = document.querySelector(".myBannerVideo");
        if (video) {
            new Swiper(".myBannerVideo", {
                direction: 'horizontal',
                loop: false,
                parallax: true,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                on: {
                    init: function () {
                        console.log('swiper initialized '+this.activeIndex);
                    },
                    // transitionStart: function() {
                    //     var videos = document.querySelectorAll('video');
                    //     Array.prototype.forEach.call(videos, function(video){
                    //         video.pause();
                    //     });
                    //     console.log("start");
                    // },
                    // transitionEnd: function(){
                    //     var activeIndex = this.activeIndex;
                    //     var activeSlide = document.getElementsByClassName('swiper-slide')[activeIndex];
                    //     var activeSlideVideo = activeSlide.getElementsByTagName('video')[0];
                    //     activeSlideVideo.play();
                    //     console.log("end");
                    // }
                },
                // configure Swiper to use modules
                modules: [Navigation, Parallax],
            });
        }
    },
    scrollbar: function() {
        new Swiper(".scrollbarSwiper", {
            lazy: true,
            speed: 1000,
            dynamicBullets: true,
            slidesPerView: 5,
            breakpoints: {
                320: {
                    slidesPerView: 2,
                },
                480: {
                    slidesPerView: 2,
                },
                640: {
                    slidesPerView: 5,
                }
            },
            navigation: {
                nextEl: ".swiper-next-icon",
                prevEl: ".swiper-prev-icon",
            },
            scrollbar: {
                el: ".swiper-scrollbar",
            },
            modules: [Navigation, Scrollbar],
        });
    },
    productThumb: function() {
        if (document.querySelector(".product-show") != null) {
            var swiper = new Swiper(".product-thumb", {
                loop: true,
                spaceBetween: 10,
                slidesPerView: 4,
                freeMode: true,
                watchSlidesProgress: true,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                    320: {
                        slidesPerView: 3,
                    },
                    480: {
                        slidesPerView: 3,
                    },
                    640: {
                        slidesPerView: 4,
                    }
                },
                modules: [Navigation, FreeMode, Thumbs]
            });
            var swiper2 = new Swiper(".product-show", {
                loop: true,
                spaceBetween: 10,
                thumbs: {
                    swiper: swiper,
                },
                modules: [FreeMode, Thumbs]
            });
        }
    }
}

const Lazyload = {
    init: function () {
        $(".lazy").Lazy({
            scrollDirection: "vertical",
            effect: "fadeIn",
            effectTime: 1000,
            threshold: 0,
            visibleOnly: true,
            // beforeLoad: function (element) {
            //     console.log("on Load "+ element.data("src"));
            // },
            onError: function (element) {
                console.log("error loading " + element.data("src"));
            }
        });
    },
};

// the Maps JavaScript API - footer addon a map
async function initMap() {
    const { Map } = await google.maps.importLibrary("maps");

    const map = new Map(document.getElementById('map'), {
        center: { lat: -6.4646543, lng: 106.8810155 },
        zoom: 10,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
    });
    
    const locations = [{ 
        lat: -6.4646543, 
        lng: 106.8810155, 
        title: 'OTOGARD', 
        phone: '02187929412', 
        address: 'Jl. Karanggan Muda Raya No.86, RT.07/RW.4, Karanggan, Kec. Gn. Putri, Kabupaten Bogor, Jawa Barat 16960', 
        web: `${window.location.origin}` 
    }];

    locations.forEach(location => {
        const marker = new google.maps.Marker({
            position: { lat: location.lat, lng: location.lng },
            map: map,
            title: location.title,
        });

        const infoWindow = new google.maps.InfoWindow({
            content: `
                <div class="text-gray-800 max-w-[300px]">
                    <div class="text-lg">${location.title}</div>
                    <div class="text-xs mb-3">${location.address}</div>
                    <a href="${location.web}" class="flex items-center gap-1 text-xs group">
                        <i class='bx bx-link-alt text-lg'></i>
                        <span class="group-hover:font-semibold">${location.web}</span>
                    </a>
                    <a href="tel:0218302060" class="flex items-center gap-1 text-xs group">
                        <i class='bx bxs-phone-call text-lg'></i>
                        <span class="group-hover:font-semibold">${location.phone}</span>
                    </a>
                    <div class="">
                        <i class='bx bxs-map text-red-600 text-lg'></i>
                        <span>${location.lat}</span>,
                        <span>${location.lng}</span>
                    </div>
                </div>
            `,
        });

        marker.addListener('click', () => {
            infoWindow.open(map, marker);
        });
    });
}

const Gallery = {
    open: function () {
        let arr = ['plant', 'rnd', 'warehouse'];
        arr.forEach(element => {
            Fancybox.bind('[data-fancybox="'+element+'"]', {
                Thumbs : {
                  type: "modern"
                }
            });
        });
    }
}

const Maklon = {
    product: function () {
        let btnAll = document.querySelectorAll("#maklon-btn div");
        let content= document.querySelectorAll("#maklon-content div.all");

        btnAll.forEach(element => {
            element.addEventListener("click", function() {
                var attrVal = element.getAttribute("data-value");
                $(".lazy").Lazy();
                // remove active button maklon
                btnAll.forEach(el => {
                    el.classList.remove("active")
                });
                element.classList.add("active");

                // hide content maklon
                content.forEach(elmt => {
                    elmt.classList.add("hidden");
                });
                if (attrVal == "all") {
                    content.forEach(elmt => {
                        elmt.classList.remove("hidden");
                    }); 
                    document.querySelector(".soon").classList.add("hidden");
                } else {
                    var activeContent = document.querySelectorAll("."+attrVal);
                    
                    if (activeContent.length == 0) {
                        document.querySelector(".soon").classList.remove("hidden");
                    } else {
                        activeContent.forEach(el => {
                            el.classList.remove("hidden");
                        });
                    }
                }
            });
        });
    }
}


export { MySlider, Lazyload, initMap, Gallery, Maklon }