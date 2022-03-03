<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


/////Spatie///
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [

            ////tabla roles///
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',
            ////tabla empleados//
            'ver-socio',
            'crear-socio',
            'editar-socio',
            'eliminar-socio',
            /////tabla telefonia//////
            'ver-agenda',
            'crear-agenda',
            'editar-agenda',
            'eliminar-agenda',
            //////tabla entrevista////
            'ver-entrevista',
            'crear-entrevista',
            'editar-entrevista',
            'eliminar-entrevista',
            ////tabla curso//////
            'ver-curso',
            'crear-curso',
            'editar-curso',
            'eliminar-curso',
            ///////tabla usuarios////
            'ver-usuario',
            'crear-usuario',
            'editar-usuario',
            'eliminar-usuario',
        ];
        foreach($permisos as $permiso){
            Permission::create(['name' =>$permiso]);
        }
    }
}
