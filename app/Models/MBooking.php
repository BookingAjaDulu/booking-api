<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class MBooking extends Model
{
    protected $table = 'booking';
     protected $primaryKey = 'id';
     protected $allowedFields = ['nama_lapang', 'tanggal', 'jam_mulai', 'total_jam_main', 'nominal'];
}