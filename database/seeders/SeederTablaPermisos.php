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
            'desactivar-socio',
            /////tabla telefonia//////
            'ver-agenda',
            'crear-agenda',
            'editar-agenda',
            'desactivar-agenda',
            //////tabla entrevista////
            'ver-entrevista',
            'crear-entrevista',
            'editar-entrevista',
            'desactivar-entrevista',
            ////tabla curso//////
            'ver-curso',
            'crear-curso',
            'editar-curso',
            'desactivar-curso',
            ///////tabla usuarios////
            'ver-usuario',
            'crear-usuario',
            'editar-usuario',
            'desactivar-usuario',
        ];
        foreach($permisos as $permiso){
            Permission::create(['name' =>$permiso]);
        }
    }
}
