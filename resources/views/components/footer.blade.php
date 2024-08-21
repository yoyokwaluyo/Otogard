<footer class="max-w-[1800px] mx-auto bg-gray-100 py-10">
    <div class="container md:w-[89%] mx-auto px-4">
        <div class="pb-10">
            <img data-src="{{ asset('images/logo-ksr.png') }}" alt="image" class="lazy h-10">
        </div>
        <div class="grid max-sm:grid-flow-row md:grid-cols-6 gap-x-2 gap-y-6">
            <div class="">
                <h4 class="text-[16px] uppercase mb-5">Our Company</h4>
                <ul class="font-light text-sm flex flex-col gap-2.5 text-black/80">
                    <li>
                        <a href="{{ route('milestones', app()->getLocale()) }}" class="transition duration-150 ease-in hover:text-red-600">{{ __('language.milestone') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('our_facility', app()->getLocale()) }}" class="transition duration-150 ease-in hover:text-red-600">{{ __('language.ourfacility') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('faq', app()->getLocale()) }}" class="transition duration-150 ease-in hover:text-red-600">{{ __('language.faq') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('our_customer', app()->getLocale()) }}" class="transition duration-150 ease-in hover:text-red-600">{{ __('language.ourcust') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('certificate', app()->getLocale()) }}" class="transition duration-150 ease-in hover:text-red-600">{{ __('language.certificate') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('car_care', app()->getLocale()) }}" class="transition duration-150 ease-in hover:text-red-600">{{ __('language.carcare') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('house_care', app()->getLocale()) }}" class="transition duration-150 ease-in hover:text-red-600">{{ __('language.household') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('personal_care', app()->getLocale()) }}" class="transition duration-150 ease-in hover:text-red-600">{{ __('language.personalcare') }}</a>
                    </li>
                </ul>
            </div>
            <div class="">
                <h4 class="text-[16px] uppercase mb-5">More</h4>
                <ul class="font-light text-sm flex flex-col gap-2.5 text-black/80">
                    <li>
                        <a href="{{ route('privacy_policy', app()->getLocale()) }}" class="transition duration-150 ease-in hover:text-red-600">{{ __('language.privacypolicy') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('termcondition', app()->getLocale()) }}" class="transition duration-150 ease-in hover:text-red-600">{{ __('language.term&condition') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('career', app()->getLocale()) }}" class="transition duration-150 ease-in hover:text-red-600">{{ __('language.career') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('contactus', app()->getLocale()) }}" class="transition duration-150 ease-in hover:text-red-600">{{ __('language.contactus') }}</a>
                    </li>
                </ul>
            </div>
            <div class="col-span-2 md:pt-10 md:px-4">
                <h4 class="text-[16px] mb-2">PT Kreasi Semesta Raya</h4>
                <p class="text-sm font-light">
                    <a href="https://g.co/kgs/E17apU9" target="_blank" class="underline transition duration-150 ease-in hover:text-red-600">Address</a>:Jl. Karanggan Muda Raya No.86, RT.07/RW.4, Karanggan, Kec. Gn. Putri, Kabupaten Bogor, Jawa Barat 16960
                </p>
            </div>
            <div class="col-span-2 text-left md:text-end">
                <!-- show gmaps -->
                <div class="w-full h-[230px] mb-10" id="map"></div>
                <small class="text-gray-600">© 2005-2024 PT Kreasi Semesta Raya, All Right Reserved.</small>
            </div>
        </div>
    </div>
</footer>

<style>
    .gm-style-iw-ch {
        padding-top: 0;
    }
    .gm-ui-hover-effect {
        width: 30px !important;
        height: 30px !important;
    }
    .gm-ui-hover-effect span {
        width: 20px !important;
        height: 20px !important;
        margin: 6px !important;
    }
</style>
<script>(g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})
        ({key: "AIzaSyB5bB8aJk76T30fMjo7OkY3kjn_bggcCYo", v: "weekly"});</script>
