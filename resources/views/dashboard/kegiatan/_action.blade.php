<div class="btn-group" role="group">
<a href="{{URL::to('/kegiatan/'.$items->id)}}" class="btn btn-info btn-sm"><i class="icons icon-eye"></i></a>
    @if($items->gambar1 =='')<a href="{{URL::to('/kegiatan/'.$items->id.'/edit')}}"  class="btn btn-sm btn-primary"><i class="icons icon-arrow-right-circle"></i></a>@else @endif
    <!--<a href="{{URL::to('/kegiatan/'.$items->id)}}" class="btn btn-sm btn-danger" id="" >hapus</a>-->
<form method="post" action="{{route('kegiatan.destroy', $items->id)}}">
   @csrf
   @method('DELETE')
<button type="submit" class="btn btn-danger btn-sm" id="hapus"><i class="icons icon-trash"></i></=>
</form>
</div>
