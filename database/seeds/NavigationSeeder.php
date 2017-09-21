<?php

use Illuminate\Database\Seeder;

class NavigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Sitenavigation::create([
            'LinkText'=>'3D Printer Queue',
            'LinkImage'=>'/Images/3d_printer1600.png',
            'LinkLoginReqd'=>'',
            'LinkURL'=>'auto3dprintqueue',
            'LinkDescription'=>'Check out the queued 3D prints',
        ]);

        \App\Sitenavigation::create([
            'LinkText'=>'Web CAD',
            'LinkImage'=>'',
            'LinkLoginReqd'=>'',
            'LinkURL'=>'cadmodel',
            'LinkDescription'=>'Create and edit your model',
        ]);

    }
}
