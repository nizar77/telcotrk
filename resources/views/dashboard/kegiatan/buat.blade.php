@extends('theme.theme1')
@push('styles')

@endpush
@section('content')
<div class="card">
    <div class="card-body">
        <div class="col-md-8 offset-2">
        <form class="form-horizontal" action="{{route('kegiatan.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
             <div class="form-group row">
                <label class="col-md-3 col-form-label" for="kode_tiket">No tiket</label>
             
                <div class="col-md-9">
                    <input type="text" name="kode_tiket" id="kode_tiket" class="form-control form-control-sm"> 
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
                    <input class="form-control" id="pelanggan" type="text" name="pelanggan" placeholder="">
                    </div>
                </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="keterangan">Keterangan</label>
                    <div class="col-md-9">
                      <textarea class="form-control" id="keterangan" type="text" name="keterangan" rows="5"></textarea>
                    </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="no_tlp">No Telepon</label>
              <div class="col-md-9">
                <input class="form-control" id="no_tlp" type="number" minlength="8" maxlength="13" name="no_tlp" >
                </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="no_inet">No Internet</label>
              <div class="col-md-9">
                <input class="form-control" id="no_inet" type="number" minlength="8" maxlength="13" name="no_inet" >
                </div>
            </div>
            
            
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="redaman1">Redaman</label>
                <div class="col-md-9">
                  <input class="form-control" id="redaman1" type="text" name="redaman1" >
                  </div>
              </div>

              <div class="form-group row">
                <label class="col-md-3 col-form-label" for="team">Nama Team</label>
                <div class="col-md-9">
                  <input class="form-control" id="team" type="text" name="team" >
                </div>
              </div>
              
              <div class="form-group row">
                <label class="col-md-3 col-form-label" for="crew">Crew</label>
                <div class="col-md-9">
                  <input class="form-control" id="crew" type="text" name="crew" >
                </div>
              </div>

               
                <hr>
               <div class="form-group row">
                  <div class="col-md-8 offset-3">
                    <button type="submit" class="btn btn-facebook btn-sm">Simpan</button>
                    <button type="reset" class="btn btn-warning btn-sm">Batal</button>
                  </div>
              </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('scripts')

@endpush
