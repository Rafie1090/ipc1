<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = ['nama_pemohon','user_id','email','no_tlp','asal_intansi','nama_kegiatan','pic_kegiatan','pic_pmli','tanggal_pelaksanaan','tempat_platfrom','option1','kebutuhan', 'qty_kebutuhan'];
}
