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
        // $stats = Inventory::selectRaw('merk, produk, count(merk) as total')
        //     ->groupBy('merk')
        //     ->groupBy('produk')
        //     ->orderBy('total', 'desc')
        //     ->get();

        $stats = Inventory::query()
            ->select(['merk', 'produk'])
            ->get();

        return $stats;
    }
}
