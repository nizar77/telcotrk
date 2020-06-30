<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $fillable=['kode_tiket','nopelanggan','no_tlp','no_inet','nama_pelanggan','keterangan','redaman1','redaman2','gambar1','gambar2','tgl_kegiatan','user_id'];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
