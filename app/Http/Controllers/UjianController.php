<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Ujian;
use App\transaksi;
use PDF;

class UjianController extends Controller
{
    public function get(){
        $transaksi = transaksi::all();
        return view('welcome',compact('transaksi'));
    }

    public function find($id){
        $transaksi = transaksi::findOrFail($id);
        return view('edit',compact('transaksi'));
    }

    public function create(Request $req){
        $transaksi = transaksi::create($req->all());

        // comment this code if foto not used
        $transaksi_id = $transaksi->id;
        $setuuid = transaksi::findOrFail($transaksi_id);
        // if($req->foto != null)
        // {
        //     $img = $req->file('foto');
        //     $FotoExt  = $img->getClientOriginalExtension();
        //     $FotoName = $transaksi_id;
        //     $foto   = $FotoName.'.'.$FotoExt;
        //     $img->move('img/transaksi', $foto);
        //     $setuuid->foto       = $foto;
        // }else{
        //     $setuuid->foto       = $setuuid->foto;
        // }
        $setuuid->update();

        return redirect(route('transaksi_index'));
    }

    public function update($id, Request $req){
        $transaksi = transaksi::findOrFail($id);

        $transaksi->fill($req->all())->save();

        // comment this code if foto not used
        // if($req->foto != null){
        //         $FotoExt  = $req->foto->getClientOriginalExtension();
        //         $FotoName = $req->transaksi_id;
        //         $foto   = $FotoName.'.'.$FotoExt;
        //         $req->foto->move('img/transaksi', $foto);
        //         $transaksi->foto       = $foto;
        //         }else {
        //             $transaksi->foto  = $transaksi->foto;
        //         }

        $transaksi->update();

        return redirect(route('transaksi_index'));
    }

    public function delete($id){
        $transaksi = transaksi::findOrFail($id);

        // Need to check realational
        // If there relation to other data, return error with message, this data has relation to other table(s)
        $image_path = "img/transaksi/".$transaksi->foto;  // Value is not URL but directory file path
        if(File::exists($image_path)) {
        File::delete($image_path);
        }
        $delete = $transaksi->delete();

        return redirect(route('transaksi_index'));
    }

    public function cetak(){
            $transaksi = transaksi::all();
            $pdf =PDF::loadView('cetak', ['transaksi'=>$transaksi]);
            $pdf->setPaper('a4', 'potrait');
            return $pdf->stream('Data ujian.pdf');
        }
}
