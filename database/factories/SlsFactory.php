<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sls>
 */
class SlsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();
        $slsName = fake()->randomElement(['RT 01 RW 01', 'RT 02 RW 01', 'RT 03 RW 01', 'RT 04 RW 01', 'RT 05 RW 01', 'RT 06 RW 01', 'RT 07 RW 01']);

        return [
            'user_id' => $user,
            'province_name' => fake()->randomElement(['Kepulauan Riau']),
            'district_name' => fake()->randomElement(['Kabupaten Karimun',
                                                        'Kabupaten Natuna',
                                                        'Kabupaten Bintan',
                                                        'Kabupaten Lingga',
                                                        'Kabupaten Kepulauan Anambas',
                                                        'Kota Batam',
                                                        'Kota Tanjungpinang']),
            'subdistrict_name' => fake()->randomElement(['Kecamatan Karimun',
                                                        'Kecamatan Natuna',
                                                        'Kecamatan Bintan',
                                                        'Kecamatan Lingga',
                                                        'Kecamatan Kepulauan Anambas',
                                                        'Kecamatan Batam',
                                                        'Kecamatan Tanjungpinang']),
            'village_name' => fake()->randomElement(['Desa Karimun',
                                                        'Desa Natuna',
                                                        'Desa Bintan',
                                                        'Desa Lingga',
                                                        'Desa Kepulauan Anambas',
                                                        'Desa Batam',
                                                        'Desa Tanjungpinang']),
            'sls_name' => $slsName,
            'slug' => Str::slug($slsName),
        ];
    }
}
