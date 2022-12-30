<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Matkul
 * @package App\Models
 * @version December 28, 2022, 11:30 am UTC
 *
 * @property string $nama_matkul
 * @property string $dosen
 * @property integer $sks
 * @property integer $jumlah_mahasiswa
 * @property string $ruangan
 */
class Matkul extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'matkuls';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama_matkul',
        'dosen',
        'sks',
        'jumlah_mahasiswa',
        'ruangan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nama_matkul' => 'string',
        'dosen' => 'string',
        'sks' => 'integer',
        'jumlah_mahasiswa' => 'integer',
        'ruangan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama_matkul' => 'required',
        'dosen' => 'required',
        'sks' => 'required',
        'jumlah_mahasiswa' => 'required',
        'ruangan' => 'required'
    ];

    
}
