<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kegiatan;
use Response,Redirect;
use Illuminate\Facades\File;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegiatans=Kegiatan::all();
        return view('dashboard.kegiatan.index',(['kegiatans'=>$kegiatans]));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function theme()
    {
        return view ('theme.theme');
    } 
    public function create()
    {
        return view('dashboard.kegiatan.buat');
    }
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       $kgt = new Kegiatan();
       $kgt->kode_tiket = $request->kode_tiket;
       $kgt->nopelanggan=$request->nopelanggan;
       $kgt->nama_pelanggan=$request->pelanggan;
       $kgt->keterangan=$request->keterangan;
       $kgt->no_tlp = $request->no_tlp;
       $kgt->no_inet = $request->no_inet;
       $kgt->redaman1 = $request->redaman1;
       $kgt->tgl_kegiatan=now();
      // $kgt->crew=$request->crew;       
       //dd($kgt);
       $kgt->save();
       return Redirect::route('kegiatan.index')->withKgt(['kgt'=>$kgt]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $kegiatan=Kegiatan::findOrfail($id);
        //return response()->json($kegiatan);
       return view('dashboard.kegiatan._modal',compact('kegiatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit=Kegiatan::findOrFail($id);
        return view('dashboard.kegiatan.form2',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->hasFile('gambar1') && $request->hasFile('gambar2')){
            $gambar1= $request->file('gambar1');
            $name_file = rand().'.'.$gambar1->getClientOriginalExtension();           
            $gambar1->move(public_path('uploads/gambar/redaman'), $name_file);

            $gambar2= $request->file('gambar2');
            $name_file2 = rand().'.'.$gambar2->getClientOriginalExtension();           
            $gambar2->move(public_path('uploads/gambar/redaman'), $name_file2);

            $edit=Kegiatan::findOrFail($id);
            $edit ->gambar1 =$name_file;
            $edit->redaman2=$request->redaman2;
            $edit->gambar2=$name_file2;
            $edit->tgl_kegiatan =now();
            $edit->save();
            
        } else{
            $edit=Kegiatan::findOrFail($id);
            $edit->redaman2 = $request->redaman2;
            $edit->tgl_kegiatan = Now();
            $edit->save();
        }
        return Redirect::route('kegiatan.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kgt=Kegiatan::findOrFail($id);
        if(file_exists(public_path('/uploads/gambar/redaman/').$kgt->gambar1)){
            \File::delete(public_path('/uploads/gambar/redaman/'.$kgt->gambar1)) ;
        $kgt->delete();
        }
        elseif(file_exists(public_path('/uploads/gambar/redaman/').$kgt->gambar2)){
        \File::delete(public_path('/uploads/gambar/redaman/'.$kgt->gambar2));
        $kgt->delete();
        }
         else{
          $kgt->delete();
         }
         return Redirect::route('kegiatan.index');
    }
}
