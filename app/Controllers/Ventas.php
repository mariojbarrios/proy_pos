<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Lista_venta;
use App\Models\Venta;
use App\Models\Inventario;
use App\Models\Cliente;
use App\Models\Empleado;

class Ventas extends Controller{
    public function listarVentas(){
        $venta = new Lista_venta();
        $listarventa=$venta->findAll();

        $invetarios = new Inventario();
        $listarinvetarios=$invetarios->findAll();

        $clientes = new Cliente();
        $listarclientes=$clientes->findAll();

        $empleados = new Empleado();
        $listarempleados=$empleados->findAll();

        $datos = array('ventasDb'=>$listarventa,'inventarioDb'=>$listarinvetarios,'clientesDb'=>$listarclientes,'empleadoDb'=>$listarempleados);
        return view('vista_ventas/lista_ventas',$datos);
    }
    public function agregarVentas(){
        $vent = new Venta();
        
        $idventas = $this->request->getVar('txt_idventas');
        $fecha_venta = $this->request->getVar('txt_fecha_venta');
        $idproducto = $this->request->getVar('txt_idproducto');
        $venta = $this->request->getVar('txt_venta');
        $cantidad = $this->request->getVar('txt_cantidad');
        $tipo_pago = $this->request->getVar('txt_tipo_pago');
        $documento= $this->request->getVar('txt_documento');
        $idcliente= $this->request->getVar('txt_idcliente');
        $idempleado = $this->request->getVar('txt_idempleado');

        $datos=['idventas'=>$idventas,
        'fecha_venta'=>$fecha_venta,
        'idproducto'=>$idproducto,
        'venta'=>$venta,
        'cantidad'=>$cantidad,
        'tipo_pago'=>$tipo_pago,
        'documento'=>$documento,
        'idcliente'=>$idcliente,
        'idempleado'=>$idempleado
        ];
        $vent->insert($datos);  

        return $this->listarVentas();   
    }
    public function eliminarVentas($codigo=null){
        $vent = new Venta();
        $vent->delete($codigo);

        $venta = new Lista_venta();
        $datos['ventasDb']=$venta->findAll();
        return view('vista_ventas/lista_ventas',$datos);
    }
    public function datosVentas($codigo=null){
        $vent = new Venta();
        $listaventa=$vent->where('idventas',$codigo)->first();

        $invetarios = new Inventario();
        $listarinvetarios=$invetarios->findAll();

        $clientes = new Cliente();
        $listarclientes=$clientes->findAll();

        $empleados = new Empleado();
        $listarempleados=$empleados->findAll();

        $datos = array('ventasDb'=>$listaventa,'inventarioDb'=>$listarinvetarios,'clientesDb'=>$listarclientes,'empleadoDb'=>$listarempleados);
        return view('vista_ventas/frm_actualizar_ven',$datos);
    }
    public function actualizarVentas(){
        $vent = new Venta();
        $idventas = $this->request->getVar('txt_idventas');
        $fecha_venta = $this->request->getVar('txt_fecha_venta');
        $idproducto = $this->request->getVar('txt_idproducto');
        $venta = $this->request->getVar('txt_venta');
        $cantidad = $this->request->getVar('txt_cantidad');
        $tipo_pago = $this->request->getVar('txt_tipo_pago');
        $documento= $this->request->getVar('txt_documento');
        $idcliente= $this->request->getVar('txt_idcliente');
        $idempleado = $this->request->getVar('txt_idempleado');

        $datos=['idventas'=>$idventas,
        'fecha_venta'=>$fecha_venta,
        'idproducto'=>$idproducto,
        'venta'=>$venta,
        'cantidad'=>$cantidad,
        'tipo_pago'=>$tipo_pago,
        'documento'=>$documento,
        'idcliente'=>$idcliente,
        'idempleado'=>$idempleado
        ];  
        $vent->update($idventas,$datos);
        $venta = new Lista_venta();
        $datos['ventasDb']=$venta->findAll();
        return $this->listarVentas();           
    }

}