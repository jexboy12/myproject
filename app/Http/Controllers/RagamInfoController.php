<?php

namespace App\Http\Controllers;

use App\Models\RagamInfo;
use Illuminate\Http\Request;

class RagamInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Diubah dari get() menjadi paginate(5) untuk 5 artikel per halaman
        $allRagamInfo = RagamInfo::with('user')->latest()->paginate(5);

        return view('ragam-info', [
            'title' => 'Ragam Info',
            'posts' => $allRagamInfo
        ]);
    }


    
    public function show(RagamInfo $ragamInfo)
    {
        return view('ragam-info-detail', [
            'title' => $ragamInfo->title,
            'post' => $ragamInfo
        ]);
    }
}
