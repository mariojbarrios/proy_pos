<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Inventario;
class Inventarios extends Controller{

    public function listaInventarios(){
        $inventario = new Inventario();
        $datos['inventariosDb']=$inventario->findAll();
        return view('vista_inventario/lista_inventarios',$datos);
    }

    public function agregarInventarios(){
        $inventario = new Inventario();
        $idproducto = $this->request->getVar('txt_idproducto');
        $descripcion = $this->request->getVar('txt_descripcion');
        $costo = $this->request->getVar('txt_costo');
        $venta = $this->request->getVar('txt_precio');
        $cantidad = $this->request->getVar('txt_cantidad');

        $datos=['idproducto'=>$idproducto,
        'descripcion'=>$descripcion,
        'costo'=>$costo,
        'venta'=>$venta,
        'cantidad'=>$cantidad
        ];
        $inventario->insert($datos);  
        $datos['inventariosDb']=$inventario->findAll();
        return view('vista_inventario/lista_inventarios',$datos); 
    }
    public function eliminarInventarios($codigo=null){
        $inventario = new Inventario();
        $inventario->delete($codigo);
        
        $datos['inventariosDb']=$inventario->findAll();
        return view('vista_inventario/lista_inventarios',$datos);       
    }    
    public function datosInventarios($codigo=null){
        $inventario = new Inventario();
        $datos['inventariosDb']=$inventario->where('idproducto',$codigo)->first();
        return view('vista_inventario/frm_actualizar_inv',$datos);  
 
     }    
     public function actualizarInventarios(){
        $inventario = new Inventario();
        $idproducto = $this->request->getVar('txt_idproducto');
        $descripcion = $this->request->getVar('txt_descripcion');
        $costo = $this->request->getVar('txt_costo');
        $venta = $this->request->getVar('txt_venta');
        $cantidad = $this->request->getVar('txt_cantidad');
              
        $datos=['idproducto'=>$idproducto,
        'descripcion'=>$descripcion,
        'costo'=>$costo,
        'venta'=>$venta,
        'cantidad'=>$cantidad
        ];

        $inventario->update($idproducto,$datos);

        $datos['inventariosDb']=$inventario->findAll();
        return view('vista_inventario/lista_inventarios',$datos);          

    }     
}