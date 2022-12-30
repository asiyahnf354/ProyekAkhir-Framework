<?php

namespace App\Repositories;

use App\Models\Matkul;
use App\Repositories\BaseRepository;

/**
 * Class MatkulRepository
 * @package App\Repositories
 * @version December 28, 2022, 11:30 am UTC
*/

class MatkulRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_matkul',
        'dosen',
        'sks',
        'jumlah_mahasiswa',
        'ruangan'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Matkul::class;
    }
}
