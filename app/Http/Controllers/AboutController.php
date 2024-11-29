<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function tentangKami()
    {
        return view('about.tentang-kami'); // Pastikan view ini ada di resources/views/about/tentang-kami.blade.php
    }

    public function sejarah()
    {
        return view('about.sejarah'); // Pastikan view ini ada di resources/views/about/sejarah.blade.php
    }

    public function struktur()
    {
        return view('about.struktur'); // Pastikan view ini ada di resources/views/about/struktur.blade.php
    }
}
