<?php

namespace Database\Factories;

use App\Models\Matkul;
use Illuminate\Database\Eloquent\Factories\Factory;

class MatkulFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Matkul::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_matkul' => $this->faker->word,
        'dosen' => $this->faker->word,
        'sks' => $this->faker->randomDigitNotNull,
        'jumlah_mahasiswa' => $this->faker->randomDigitNotNull,
        'ruangan' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
