<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //* Membuat beberapa role
        //* Membuat default user untuk super admin

        $ownerRole = Role::create([
            'name'=>'owner'
        ]);
        $studentRole= Role::create([
            'name'=>'student'
        ]);
        $teacherRole= Role::create([
            'name'=>'teacher'
        ]);

        $userOwner = User::create([
            'name'=> 'MS-Owner',
            'occupation'=>'Educator',
            'avatar'=>'images/default-avatar.png',
            'email'=> 'madinahsalam1@gmail.com',
            //? bcrpt adalah bawaan dari laravel 
            'password'=>bcrypt('Madinahsalam123'),
        ]);

        $userOwner->assignRole($ownerRole);
    }
}
