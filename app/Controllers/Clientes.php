<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Cliente;
class Clientes extends Controller{

    public function listaClientes(){
        $cliente = new Cliente();
        $datos['clientesDb']=$cliente->findAll();
        return view('vista_ventas/lista_clientes',$datos);
    }
    public function agregarClientes(){
        $cliente = new Cliente();
        $idcliente = $this->request->getVar('txt_idcliente');
        $nombre_cliente= $this->request->getVar('txt_nombre_cliente');
        $nit_cliente= $this->request->getVar('txt_nit_cliente');
        $telefono_cliente= $this->request->getVar('txt_telefono_cliente');
        $direccion_cliente= $this->request->getVar('txt_direccion_cliente');
        $email_cliente= $this->request->getVar('txt_email_cliente');

        $datos=['idcliente'=>$idcliente,
        'nombre_cliente'=>$nombre_cliente,
        'nit_cliente'=>$nit_cliente,
        'telefono_cliente'=>$telefono_cliente,
        'direccion_cliente'=>$direccion_cliente,
        'email_cliente'=>$email_cliente        
        ];

        $cliente->insert($datos);  
        $datos['clientesDb']=$cliente->findAll();
        return view('vista_ventas/lista_clientes',$datos);
    }   
    public function eliminarClientes($codigo=null){
        $cliente = new Cliente();
        $cliente->delete($codigo);
        
        $datos['clientesDb']=$cliente->findAll();
        return view('vista_ventas/lista_clientes',$datos);    
    }
    public function datosClientes($codigo=null){
        $cliente = new Cliente();
        $datos['clientesDb']=$cliente->where('idcliente',$codigo)->first();
        return view('vista_ventas/frm_actualizar_cli',$datos);
 
     }    
     public function actualizarClientes(){
        $cliente = new Cliente();
        $idcliente = $this->request->getVar('txt_idcliente');
        $nombre_cliente= $this->request->getVar('txt_nombre_cliente');
        $nit_cliente= $this->request->getVar('txt_nit_cliente');
        $telefono_cliente= $this->request->getVar('txt_telefono_cliente');
        $direccion_cliente= $this->request->getVar('txt_direccion_cliente');
        $email_cliente= $this->request->getVar('txt_email_cliente');

        $datos=['idcliente'=>$idcliente,
        'nombre_cliente'=>$nombre_cliente,
        'nit_cliente'=>$nit_cliente,
        'telefono_cliente'=>$telefono_cliente,
        'direccion_cliente'=>$direccion_cliente,
        'email_cliente'=>$email_cliente        
        ];

        $cliente->update($idcliente,$datos);

        $datos['clientesDb']=$cliente->findAll();
        return view('vista_ventas/lista_clientes',$datos);        

    }     
}