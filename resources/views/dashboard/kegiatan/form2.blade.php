@extends('theme.theme1')
@push('styles')

@endpush
@section('content')
<div class="card">
    <div class="card-body">
        <div class="col-md-8 offset-2">
        <form class="form-horizontal" action="{{route('kegiatan.update',$edit->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
             <div class="form-group row">
                <label class="col-md-3 col-form-label" for="kode_tiket">No tiket</label>
             
                <div class="col-md-9">
                <input type="text" name="kode_tiket" id="kode_tiket" class="form-control form-control-sm" value="{{$edit->kode_tiket}}"> 
              </div>
             </div>
             <div class="form-group row">
                <label class="col-md-3 col-form-label" for="nopelanggan">No Pelanggan</label>
               
                <div class="col-md-9">
                    <input type="text" name="nopelanggan" id="nopelanggan" class="form-control form-control-sm">
             </div>
            </div>    
            <div class="form-group row">
                  <label class="col-md-3 col-form-label" for="pelanggan">Nama Pelanggan</label>
                  <div class="col-md-9">
                  <input class="form-control" id="pelanggan" type="text" name="pelanggan" value="{{$edit->nama_pelanggan}}">
                    </div>
                </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="keterangan">Keterangan</label>
                    <div class="col-md-9">
                    <textarea class="form-control" id="keterangan" type="text" name="keterangan" rows="5">{{$edit->keterangan}}</textarea>
                    </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="no_tlp">No Telepon</label>
              <div class="col-md-9">
              <input class="form-control" id="no_tlp" type="number" minlength="8" maxlength="13" name="no_tlp" value="{{$edit->no_tlp}}">
                </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="no_inet">No Internet</label>
              <div class="col-md-9">
              <input class="form-control" id="no_inet" type="number" minlength="8" maxlength="13" name="no_inet" value="{{$edit->no_inet}}">
                </div>
            </div>
            
            
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="redaman1">Redaman</label>
                <div class="col-md-9">
                <input class="form-control" id="redaman1" type="text" name="redaman1" value="{{$edit->redaman1}}">
                  </div>
              </div>

              <div class="form-group row">
                <label class="col-md-3 col-form-label" for="gambar1">Uploads Gambar</label>
                <div class="col-md-9">
                  <input class="form-control" id="gambar1" type="file" name="gambar1" >
                  </div>
              </div> 

              <div class="form-group row">
                <label class="col-md-3 col-form-label" for="redaman2">Redaman setelah perbaikan</label>
                <div class="col-md-9">
                  <input class="form-control" id="redaman2" type="text" name="redaman2">
                  </div>
              </div>

              <div class="form-group row">
                <label class="col-md-3 col-form-label" for="gambar2">Uploads Gambar</label>
                <div class="col-md-9">
                  <input class="form-control" id="gambar2" type="file" name="gambar2" >
                  </div>
              </div> 

              <div class="form-group row">
                <label class="col-md-3 col-form-label" for="tgl_kegiatan">Tgl_pengecekan</label>
                <div class="col-md-9">
                  <input class="form-control" id="tgl_kegiatan" type="text" name="tgl_kegiatan">
                  </div>
              </div> 
                <hr>
               <div class="form-group row">
                  <div class="col-md-8 offset-3">
                    <button type="submit" class="btn btn-facebook btn-sm">Simpan</button>
                  <a href="{{route('kegiatan.index') }}" class="btn btn-warning btn-sm">Batal</a>
                  </div>
              </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('scripts')

@endpush
