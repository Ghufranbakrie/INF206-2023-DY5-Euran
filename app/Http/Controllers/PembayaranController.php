<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorepembayaranRequest;
use App\Http\Requests\UpdatepembayaranRequest;
use App\Models\pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth()->user();
        return view('informasitagihan', compact('user'));
    }
    

    
    public function indexHistory()
    {
     // Ambil data pembayaran berdasarkan email user yang sama
        $pembayaran = Pembayaran::where('email', Auth::user()->email)->get();
        return view('historyPembayaran', compact('pembayaran'));
    }
    

    public function storePayment()
    {
       // Cek apakah user sudah terautentikasi atau belum
       if (Auth::check()) {
        $user = Auth::user();
        $pembayaran = new Pembayaran();
        $pembayaran->bulan = date('Y-m');
        $pembayaran->email = $user->email;
        $pembayaran->Rupiah = 20000;
        $pembayaran->status = 'bayar';
        $pembayaran->Keterangan = 'Pembayaran bulanan';
        $pembayaran->save();
        $user->status = 'bayar';
        $user->save();


        return redirect()->back()->with('success', 'Pembayaran berhasil ditambahkan.');
        } else {
        return redirect()->back()->with('error', 'Anda belum login.');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepembayaranRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pembayaran $pembayaran)
    {
        //
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pembayaran $pembayaran)
    {
        //
    }

    public function listrumah()
    {
        return view('listrumah', [
            'DataList'=> \App\Models\User::all(),
        ]);
    }

}