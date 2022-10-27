<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuario;

class Usuarios extends Controller{

    public function listaUsuarios(){
        $usuario = new Usuario();
        $datos['usuariosDb']=$usuario->findAll();
        return view('vista_usuarios/lista_usuarios',$datos);
    }
    public function agregarUsuarios(){
        $usuario = new Usuario();
        $idusuario = $this->request->getVar('txt_idusuario');
        $permisos= $this->request->getVar('txt_permisos');
       
        $datos=['idusuario'=>$idusuario,
        'permisos'=>$permisos
        ];
        $usuario->insert($datos);  
        $datos['usuariosDb']=$usuario->findAll();
        return view('vista_usuarios/lista_usuarios',$datos);        
    }
    public function eliminarUsuarios($codigo=null){
        $usuario = new Usuario();
        $usuario->delete($codigo);
        
        $datos['usuariosDb']=$usuario->findAll();
        return view('vista_usuarios/lista_usuarios',$datos);         
    }
    public function datosUsuarios($codigo=null){
       $usuario = new Usuario();
       $datos['usuariosDb']=$usuario->where('idusuario',$codigo)->first();
       return view('vista_usuarios/frm_actualizar_usu',$datos);

    }
    public function actualizarUsuarios(){
        $usuario = new Usuario();
        $idusuario = $this->request->getVar('txt_idusuario');
        $permisos= $this->request->getVar('txt_permisos');
              
        $datos=['idusuario'=>$idusuario,
        'permisos'=>$permisos
        ];

        $usuario->update($idusuario,$datos);

        $datos['usuariosDb']=$usuario->findAll();
        return view('vista_usuarios/lista_usuarios',$datos);        

    }



}