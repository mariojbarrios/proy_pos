<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Proveedor;
class Proveedores extends Controller{

    public function listaProveedores(){
        $proveedor = new Proveedor();
        $datos['proveedoresDb']=$proveedor->findAll();
        return view('vista_compras/lista_proveedores',$datos);
    }
    public function agregarProveedores(){
        $proveedor = new Proveedor();
        $idproveedor = $this->request->getVar('txt_idproveedor');
        $nombre_proveedor= $this->request->getVar('txt_nombre_proveedor');
        $nit_proveedor= $this->request->getVar('txt_nit_proveedor');
        $telefono_proveedor= $this->request->getVar('txt_telefono_proveedor');
        $direccion_proveedor= $this->request->getVar('txt_direccion_proveedor');
        $email_proveedor= $this->request->getVar('txt_email_proveedor');

        $datos=['idproveedor'=>$idproveedor,
        'nombre_proveedor'=>$nombre_proveedor,
        'nit_proveedor'=>$nit_proveedor,
        'telefono_proveedor'=>$telefono_proveedor,
        'direccion_proveedor'=>$direccion_proveedor,
        'email_proveedor'=>$email_proveedor        
        ];
        $proveedor->insert($datos);  
        $datos['proveedoresDb']=$proveedor->findAll();
        return view('vista_compras/lista_proveedores',$datos);   
    }
    public function eliminarProveedores($codigo=null){
        $proveedor = new Proveedor();
        $proveedor->delete($codigo);
        
        $datos['proveedoresDb']=$proveedor->findAll();
        return view('vista_compras/lista_proveedores',$datos);        
    }
    public function datosProveedores($codigo=null){
        $proveedor = new Proveedor();
        $datos['proveedoresDb']=$proveedor->where('idproveedor',$codigo)->first();
        return view('vista_compras/frm_actualizar_pro',$datos);
 
     }
     public function actualizarProveedores(){
        $proveedor = new Proveedor();
        $idproveedor = $this->request->getVar('txt_idproveedor');
        $nombre_proveedor= $this->request->getVar('txt_nombre_proveedor');
        $nit_proveedor= $this->request->getVar('txt_nit_proveedor');
        $telefono_proveedor= $this->request->getVar('txt_telefono_proveedor');
        $direccion_proveedor= $this->request->getVar('txt_direccion_proveedor');
        $email_proveedor= $this->request->getVar('txt_email_proveedor');
              
        $datos=['idproveedor'=>$idproveedor,
        'nombre_proveedor'=>$nombre_proveedor,
        'nit_proveedor'=>$nit_proveedor,
        'telefono_proveedor'=>$telefono_proveedor,
        'direccion_proveedor'=>$direccion_proveedor,
        'email_proveedor'=>$email_proveedor        
        ];

        $proveedor->update($idproveedor,$datos);

        $datos['proveedoresDb']=$proveedor->findAll();
        return view('vista_compras/lista_proveedores',$datos);           

    }
}