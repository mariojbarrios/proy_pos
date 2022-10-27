<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\usuario;
class Controlmenus extends Controller{

  public function iniciarSesion(){
    session_start();
   $usuario = $this->request->getVar('txt_usuario');
   $clave = $this->request->getVar('txt_clave');
   $sql = "select * from empleados where usuario='{$usuario}' and clave='{$clave}'"; //Query login
   $conexion = db_connect(); //conexión de la bd
   $ejecutar = $conexion->query($sql); //ejecutar sql
   $cantidad = $ejecutar->getNumRows();
   if($cantidad>0){
     $usuario = $ejecutar->getRow(0);
     $_SESSION['tipousuario']=$usuario->idusuario;
     $_SESSION['usuario']=$usuario->usuario;
     if($usuario->idusuario==1){
       return view('menu_principal_admin');
     }elseif($usuario->idusuario==2){
       return view('menu_principal_usuario');
     }
   }else{
    echo "<script>
    alert('Se encontró un error en el usuario y/o clave de acceso, revise sus datos');
    window.location= 'index.php'</script>'";
     //;
   }           
         
  }
 

  public function menucompras(){
    return view('vista_compras/menu_compras');

  }
  public function menuventas(){
    return view('vista_ventas/menu_ventas');

  }
  public function menunosotros(){
    return view('vista_nosotros/menu_nosotros');

  }

  public function menuusuarios(){
    return view('vista_usuarios/menu_usuarios');

  }
  public function Usuarios(){
    return view('vista_usuarios/lista_usuarios');

  }
  public function regresarusuario(){
    session_start();
  if ($_SESSION['tipousuario']==1){
    return view('menu_principal_admin');
   }elseif($_SESSION['tipousuario']==2){
       return view('menu_principal_usuario');
    }
  }
    
public function cerrarSesion(){
  session_start();
  session_destroy();
  return redirect()->route('/');
}


}