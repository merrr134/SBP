@extends('layouts.app')

@section('content')
<section class="relative bg-cover bg-center h-[300px] md:h-[400px] text-black flex items-center justify-center bg-primary-light" style="background-image: url('{{ asset('images/struktur-bg.jpg') }}');">
      <!-- Overlay -->
      <div class="absolute inset-0 "></div>
  
      <!-- Content -->
      <div class="relative z-10 w-full">
          <div class="container mx-auto text-staart px-8 md:px-16 lg:px-36">
              <h1 class="text-3xl md:text-5xl font-bold mb-4 italic">ASET PERUSAHAAN</h1>
          </div>
          <nav class="flex lg:px-36 px-8" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
              <li class="inline-flex items-center">
                <a href="/" class="inline-flex items-center text-sm font-medium text-black dark:text-black ">
                  <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                  </svg>
                  Home
                </a>
              </li>
              <li>
                <div class="flex items-center">
                  <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                  </svg>
                  <a href="#" class="ms-1 text-sm font-medium text-black md:ms-2 dark:text-black ">Tentang Kami</a>
                </div>
              </li>
              <li aria-current="page">
                <div class="flex items-center">
                  <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                  </svg>
                  <span class="ms-1 text-sm font-medium text-black md:ms-2 dark:text-black">Laporan Penjualan</span>
                </div>
              </li>
            </ol>
          </nav>
      </div>
</section>
<div class="max-w-screen-xl mx-auto p-6 space-y-6">
    <h1 class="text-2xl font-semibold">Aset perusahaan PT Sumber Bumi Putera</h1>
    <p class="text-lg">Saat ini PT. Sumber Bumi Putera memiliki alat-alat berat diantaranya 7 Excavator kapasitas 20 Ton, 1 Excavator kapitas 30 Ton, memiliki 1 Greder dan 1 Vibro. PT. Sumber Bumi Putera juga memiliki 10 unit Dump Truck dan kendaraan Support Operasional diantaranya Water Truck 3 Unit, Fuel Truck 1 Unit, Mobil Light Vehicle 7 Unit, Motor Trail 2 Unit dan Ambulance 1 Unit.</p>
    <p class="text-lg">Alat berat dan dump truck adalah faktor terpenting dalam menjalankan usaha pertambangan nikel. Terutama untuk melakukan proses ore getting, hauling, dan barging.</p>
    <hr class="border-t border-gray-400">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Card Items -->
        <div class="flex flex-col items-center bg-gray-100 rounded-lg p-4 shadow-md">
            <img src="{{ asset('images/excavator.svg') }}" alt="Excavator" class="h-20 mb-4">
            <p class="font-medium">Excavator</p>
        </div>
        <div class="flex flex-col items-center bg-gray-100 rounded-lg p-4 shadow-md">
            <img src="{{ asset('images/fuel.svg') }}" alt="Fuel Truck" class="h-20 mb-4">
            <p class="font-medium">Fuel Truck</p>
        </div>
        <div class="flex flex-col items-center bg-gray-100 rounded-lg p-4 shadow-md">
            <img src="{{ asset('images/greader.svg') }}" alt="Motor Graders" class="h-20 mb-4">
            <p class="font-medium">Motor Graders</p>
        </div>
        <div class="flex flex-col items-center bg-gray-100 rounded-lg p-4 shadow-md">
            <img src="{{ asset('images/ambulans.svg') }}" alt="Ambulance" class="h-20 mb-4">
            <p class="font-medium">Ambulance</p>
        </div>
        <div class="flex flex-col items-center bg-gray-100 rounded-lg p-4 shadow-md">
            <img src="{{ asset('images/water.svg') }}" alt="Water Truck" class="h-20 mb-4">
            <p class="font-medium">Water Truck</p>
        </div>
        <div class="flex flex-col items-center bg-gray-100 rounded-lg p-4 shadow-md">
            <img src="{{ asset('images/dt.svg') }}" alt="Dump Truck" class="h-20 mb-4">
            <p class="font-medium">Dump Truck</p>
        </div>
        <div class="flex flex-col items-center bg-gray-100 rounded-lg p-4 shadow-md">
            <img src="{{ asset('images/lv.svg') }}" alt="Light Vehicle" class="h-20 mb-4">
            <p class="font-medium">Light Vehicle</p>
        </div>
        <div class="flex flex-col items-center bg-gray-100 rounded-lg p-4 shadow-md">
            <img src="{{ asset('images/vibro.svg') }}" alt="Vibro" class="h-20 mb-4">
            <p class="font-medium">Vibro</p>
        </div>
        <div class="flex flex-col items-center bg-gray-100 rounded-lg p-4 shadow-md lg:mb-12 ">
            <img src="{{ asset('images/traill.svg') }}" alt="Motor Trail" class="h-20 mb-4">
            <p class="font-medium">Motor Trail</p>
        </div>
    </div>
</div>
@endsection
