<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * @var array
     */
    protected $factories = [
        App\Modules\Auth\Entities\User::class,
    ];

    /**
     * @return void
     */
    public function run()
    {
        foreach ($this->factories as $entityClass) {
            for ($i = 0; $i < rand(5, 15); ++$i) {
                factory($entityClass)->create();
            }
        }
    }
}
