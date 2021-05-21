<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class StatController extends Controller
{
    //
    /**
     * Get stats
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stats = Inventory::selectRaw('count(merk) as total, inventory.*')
            ->groupBy('merk')
            ->groupBy('produk')
            ->orderBy('total', 'desc')
            ->get();

        return view('stats.index', ['stats' => $stats]);
    }
}
