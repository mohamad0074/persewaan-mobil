<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Role;
use App\User;
use App\Mobil;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Role();
        $admin->name = 'admin';
        $admin->display_name = 'Admin';
        $admin->save();
        
        $pelanggan = new Role();
        $pelanggan->name = 'klien';
        $pelanggan->display_name = 'Klien';
        $pelanggan->save();

        /**
         * ADMIN DATA
         */

        $a = new User();
        $a->name = 'admin';
        $a->email = 'admin@sample.com';
        $a->password = Hash::make('admin123');
        $a->save();
        // $a->attachRole($admin);
        
        $c = new User();
        $c->name = 'klien 1';
        $c->email = 'klien1@sample.com';
        $c->password = Hash::make('klien123');
        $c->save();
        // $c->attachRole($pelanggan);

        $c = new User();
        $c->name = 'klien 2';
        $c->email = 'klien2@sample.com';
        $c->password = Hash::make('klien123');
        $c->save();
        // $c->attachRole($pelanggan);

        $c = new User();
        $c->name = 'klien 3';
        $c->email = 'klien3@sample.com';
        $c->password = Hash::make('klien123');
        $c->save();
        // $c->attachRole($pelanggan);



        $m = new Mobil();
        $m->merk = 'Honda';
        $m->model = 'Family Car';
        $m->nama = 'Mobilio';
        $m->no_plat = 'D 4123 FG';
        $m->tarif = 100000;
        $m->save();

        $m1 = new Mobil();
        $m1->merk = 'KIA';
        $m1->model = 'Sport';
        $m1->nama = 'KIA Phantom';
        $m1->no_plat = 'B 1234 GA';
        $m1->tarif = 200000;
        $m1->save();

        $m2 = new Mobil();
        $m2->merk = 'Hyundai';
        $m2->model = 'Electric';
        $m2->nama = 'IONIC 5';
        $m2->no_plat = 'D 5555 CD';
        $m2->tarif = 500000;
        $m2->save();

        $m3 = new Mobil();
        $m3->merk = 'Toyota';
        $m3->model = 'Sedan';
        $m3->nama = 'Marseile';
        $m3->no_plat = 'PA 9123 DD';
        $m3->tarif = 250000;
        $m3->save();

        
    }
}
