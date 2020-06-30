@extends('theme.theme1')
@section('content')
<div class="card-body">
    <div class="col-md-8  col-sm-12 offset-md-2">
        <table class="table table-condensed">
            <thead>
            <tr><th colspan="2" class="bg-success"><span style="text-transform: uppercase;"> data  process maintenace harian | {{date('d-m-Y:h-s-m',strtotime($kegiatan->updated_at)) }}</span></th></tr>   
            </thead>
            <tr><td width="30%">no tiket</td><td>{{$kegiatan->kode_tiket}}</td></thead>
            <tr><td width="30%">Nama</td><td>{{$kegiatan->nama_pelanggan}}</td></tr>
            <tr><td width="30%">No Telepon</td><td>{{$kegiatan->no_tlp}}</td></tr>
            <tr><td width="30%">No Internet</td><td>{{$kegiatan->no_inet}}</td></tr>
            <tr><td width="30%">Summary</td><td>{{$kegiatan->keterangan}}</td></tr>
            <tr><td width="30%">redaman Sebelum </td><td>{{$kegiatan->redaman1}}</td></tr>
        <tr><td width="30%"> </td><td><img src="{{asset('./uploads/gambar/redaman/'.$kegiatan->gambar1)}}" width="50%"></td></tr>
        <tr><td width="30%">Redaman Sesudah</td><td>{{$kegiatan->redaman2}}</td></tr>
        <tr><td width="30%"></td><td><img src="{{asset('/uploads/gambar/redaman/'.$kegiatan->gambar2)}}" width="50%" alt="{{$kegiatan->gambar2}}"></td></tr>

        </table>
         <a href="{{route('kegiatan.index')}}" class="btn btn-warning btn-sm"><i class="icons icon-arrow-left-circle"> kembali</i></a>   
    </div>
</div>

@endsection  