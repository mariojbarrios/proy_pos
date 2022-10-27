<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Empleado;
use App\Models\Lista_empleado;
use App\Models\Usuario;

class Empleados extends Controller{

    public function listarEmpleados(){
        $empleado = new Lista_empleado();
        $listarempleados=$empleado->findAll();

        $usuario = new Usuario();
        $listausuarios=$usuario->findAll();

        $datos = array('empleadosDb'=>$listarempleados,'usuariosDb'=>$listausuarios);
        return view('vista_usuarios/lista_empleados',$datos);
    }
    public function agregarEmpleados(){
        $emple = new Empleado();
        $idempleado = $this->request->getVar('txt_idempleado');
        $nombre_empleado = $this->request->getVar('txt_nombre_empleado');
        $puesto = $this->request->getVar('txt_puesto');
        $permiso = $this->request->getVar('txt_permiso');
        $usuario = $this->request->getVar('txt_usuario');
        $clave = $this->request->getVar('txt_clave');

        $datos=['idempleado'=>$idempleado,
        'nombre_empleado'=>$nombre_empleado,
        'puesto'=>$puesto,
        'idusuario'=>$permiso,
        'usuario'=>$usuario,
        'clave'=>$clave
        ];
        $emple->insert($datos);  

        $empleado = new Lista_empleado();
        return $this->listarEmpleados();
    }
    public function eliminarEmpleados($codigo=null){
        $emple = new Empleado();
        $emple->delete($codigo);
        return $this->listarEmpleados();
    }

    public function datosEmpleados($codigo=null){
        $emple = new Empleado();
        $listarempleados=$emple->where('idempleado',$codigo)->first();

        $usuario = new Usuario();
        $listausuarios=$usuario->findAll();

        $datos = array('empleadosDb'=>$listarempleados,'usuariosDb'=>$listausuarios);
        return view('vista_usuarios/frm_actualizar_emp',$datos);
    }
    public function actualizarEmpleados(){
        $emple = new Empleado();
        $idempleado = $this->request->getVar('txt_idempleado');
        $nombre_empleado = $this->request->getVar('txt_nombre_empleado');
        $puesto = $this->request->getVar('txt_puesto');
        $idusuario = $this->request->getVar('txt_idusuario');
        $usuario = $this->request->getVar('txt_usuario');
        $clave = $this->request->getVar('txt_clave');
              
        $datos=['idempleado'=>$idempleado,
        'nombre_empleado'=>$nombre_empleado,
        'puesto'=>$puesto,
        'idusuario'=>$idusuario,
        'usuario'=>$usuario,
        'clave'=>$clave    
        ];
        $emple->update($idempleado,$datos);
        return $this->listarEmpleados();
 
    }

}