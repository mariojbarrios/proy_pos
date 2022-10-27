<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Lista_compra;
use App\Models\Compra;
use App\Models\Inventario;
use App\Models\Proveedor;
use App\Models\Empleado;

class Compras extends Controller{
    public function listarCompras(){
        $compra = new Lista_compra();
        $listarcompra=$compra->findAll();

        $invetarios = new Inventario();
        $listarinvetarios=$invetarios->findAll();

        $proveedores = new Proveedor();
        $listarproveedores=$proveedores->findAll();

        $empleados = new Empleado();
        $listarempleados=$empleados->findAll();

        $datos = array('comprasDb'=>$listarcompra,'inventarioDb'=>$listarinvetarios,'proveedorDb'=>$listarproveedores,'empleadoDb'=>$listarempleados);
        return view('vista_compras/lista_compras',$datos);
    }
    public function agregarCompras(){
        $comp = new Compra();
        $idcompras = $this->request->getVar('txt_idcompras');
        $fecha_compras = $this->request->getVar('txt_fecha_compra');
        $idproducto = $this->request->getVar('txt_idproducto');
        $costo = $this->request->getVar('txt_costo');
        $cantidad = $this->request->getVar('txt_cantidad');
        $tipo_pago = $this->request->getVar('txt_tipo_pago');
        $documento= $this->request->getVar('txt_documento');
        $idproveedor= $this->request->getVar('txt_idproveedor');
        $idempleado = $this->request->getVar('txt_idempleado');

        $datos=['idcompras'=>$idcompras,
        'fecha_compra'=>$fecha_compras,
        'idproducto'=>$idproducto,
        'costo'=>$costo,
        'cantidad'=>$cantidad,
        'tipo_pago'=>$tipo_pago,
        'documento'=>$documento,
        'idproveedor'=>$idproveedor,
        'idempleado'=>$idempleado
        ];
       
        $comp->insert($datos);  
        return $this->listarCompras();   
    }
    public function eliminarCompras($codigo=null){
        $com = new Compra();
        $com->delete($codigo);
        return $this->listarCompras();  
    }
    public function datosCompras($codigo=null){
        $compras = new Compra();
        $listacompra=$compras->where('idcompras',$codigo)->first();

        $invetarios = new Inventario();
        $listarinvetarios=$invetarios->findAll();

        $proveedores = new Proveedor();
        $listarproveedores=$proveedores->findAll();

        $empleados = new Empleado();
        $listarempleados=$empleados->findAll();

        $datos = array('comprasDb'=>$listacompra,'inventarioDb'=>$listarinvetarios,'proveedorDb'=>$listarproveedores,'empleadoDb'=>$listarempleados);
        return view('vista_compras/frm_actualizar_com',$datos);
      }  
      public function actualizarCompras(){
        $compra = new Lista_compra();
        $com = new Compra();
        
        $idcompras = $this->request->getVar('txt_idcompras');
        $fecha_compras = $this->request->getVar('txt_fecha_compra');
        $idproducto = $this->request->getVar('txt_idproducto');
        $costo = $this->request->getVar('txt_costo');
        $cantidad = $this->request->getVar('txt_cantidad');
        $tipo_pago = $this->request->getVar('txt_tipo_pago');
        $documento= $this->request->getVar('txt_documento');
        $idproveedor= $this->request->getVar('txt_idproveedor');
        $idempleado = $this->request->getVar('txt_idempleado');

        $datos=['idcompras'=>$idcompras,
        'fecha_compra'=>$fecha_compras,
        'idproducto'=>$idproducto,
        'costo'=>$costo,
        'cantidad'=>$cantidad,
        'tipo_pago'=>$tipo_pago,
        'documento'=>$documento,
        'idproveedor'=>$idproveedor,
        'idempleado'=>$idempleado
        ];
        
        $com->update($idcompras,$datos);
        return $this->listarCompras();  
      }


}