@extends('theme.theme1')
@push('styles')
    
@endpush
@section('content')

    <div class="card-body">
    <a href="{{route('kegiatan.create')}}" class="text-right"><h3><i class="icons icon-plus"></i></h3></a>
        <table class="table table-condensed table-striped">
            <thead>
                <tr><th>NO</th><th>Notiket</th><th>Pelanggan</th><th>no_telepon</th><th>No_internet</th><th>Sumary</th><th>Redaman ke-1</th><th>Action</th></tr>
            </thead>
            <tbody>
                <?php $no=1 ?>
                @foreach($kegiatans as $items)
                <tr>
                <td>{{$no}}</td>
                <td>{{$items->kode_tiket}}</td>
                <td>{{$items->nama_pelanggan}}</td>
                <td>{{$items->no_tlp}}</td>
                <td>{{$items->no_inet}}</td>
                <td>{{$items->keterangan}}</td>
                <td>{{$items->redaman1}}</td>
                <td>@include('dashboard.kegiatan._action')</td>
                </tr>
                <?php $no++?>
                @endforeach
            </tbody>
        </table>
       
    </div>

@endsection
@push('scripts')
<script>
    $(document).ready( function () {
          $.ajaxSetup({
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }
         });
         //var table =$('#table-kegiatan').DataTable({
            
         // }); 
          //table.draw();    
             
    /*  When user click add user button */
$('body').on('click', '#lihat', function(){
var kgt_id = $(this).data('id');
alert(kgt_id);

$.get('/kegiatan/' + kgt_id, function (data){
      $('#pegawai-error').hide();
      $('#modal-title').html("Edit Pegawai");
      $('#btn-save').val("edit-pegawai");
      $('#kgt-modal').modal('show');
      $('#kgt_id').val(data.id);
      $('#nama').val(data.nama_pelanggan);
      $('#nip').val(data.nip);
      $('#alamat').val(data.alamat);
      $('#tlp').val(data.telepon);
      $('#gender_id').val(data.gender_id);     
      $('#jabatan_id').val(data.jabatan_id);  
            
  })
});

$('body').on('click', '#hapus', function () {
 var kgt_id = $(this).data('id');  
   $.ajax({            
      type: "DELETE",
      url: "{{url('/kegiatan')}}/"+kgt_id,
      success: function (data) {
        alert('delete success');
      //var oTable = $('#tabel-jabatan').dataTable(); 
      //oTable.fnDraw(false);
      location.reload();
      },
      error: function (data) {
          console.log('Error:', data);
      }
  });
}); 
});

 </script>
    
@endpush