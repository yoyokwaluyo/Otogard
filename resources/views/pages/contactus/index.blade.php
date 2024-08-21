@extends('layouts.app')

@section('style')
@endsection

@section('main')

<div class="flex max-sm:flex-col">
    <div class="basis-[60%] bg-black py-14 md:pl-[8%] md:pr-[4%] max-sm:px-4">
        <div class="text-white text-5xl font-medium border-gray-400 border-b-4 w-fit pb-2 mb-8">Get in touch!</div>
        <form action="#">
            <div class="mb-4">
                <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-800 font-light text-sm focus:ring-gray-300 focus:border-gray-300 block w-full p-3" placeholder="Name" required />
            </div>
            <div class="mb-4">
                <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-800 font-light text-sm focus:ring-gray-300 focus:border-gray-300 block w-full p-3" placeholder="Email Address" required />
            </div>
            <div class="mb-4">
                <textarea name="message" id="message" rows="5" class="bg-gray-50 border border-gray-300 text-gray-800 font-light text-sm focus:ring-gray-300 focus:border-gray-300 block w-full p-3" placeholder="Message" required></textarea>
            </div>
            <div class="mb-4">
                <button class="bg-gray-600 py-3.5 px-10 text-white hover:bg-gray-700 transition duration-150 ease-in" type="submit">SUMBIT</button>
            </div>
        </form>
    </div>
    <div class="basis-[40%] bg-white md:p-16 max-sm:py-10 max-sm:px-6">
        <div class="md:w-3/4 mb-8">
            <h4 class="text-xl font-medium mb-2 uppercase">Address</h4>
            <p class="font-light">Jl. Karanggan Muda Raya No.86, RT.07/RW.4, Karanggan, Kec. Gn. Putri, Kabupaten Bogor, Jawa Barat 16960</p>
        </div>
        <div class="md:w-3/4 mb-8">
            <h4 class="text-xl font-medium mb-2 uppercase">Phone</h4>
            <p class="font-light">021 - 89729412</p>
        </div>
        <div class="md:w-3/4 mb-8">
            <h4 class="text-xl font-medium mb-2 uppercase">Email</h4>
            <p class="font-light">inquiry@kreasisemestagroup.com</p>
        </div>
    </div>
</div>

@endsection

@section('scripts')
@endsection