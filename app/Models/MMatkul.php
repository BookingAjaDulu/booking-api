<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class MMatkul extends Model
{
    protected $table = 'matkul';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kode_matkul', 'nama_matkul', 'sks'];
} 