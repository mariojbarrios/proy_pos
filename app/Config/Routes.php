<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');


/*
 * --------------------------------------------------------------------
 * Definición de Rutas en Menus
 * --------------------------------------------------------------------
 */ 
$routes->post('inicio_sesion', 'Controlmenus::iniciarSesion'); // Inicio de Sesión
$routes->get('cerrar_sesion', 'Controlmenus::cerrarSesion');   // Cierre de Sesión
// ************************ Menus y sub menus Principales ****************
$routes->get('regresar_menu', 'Controlmenus::regresarusuario');  // Regresa al menú principal de todos los menús
$routes->get('menu_nosotros', 'Controlmenus::menunosotros');   // Acceso a la opción nosotros
// ******************** Menu de Compras ******************** 
$routes->get('menu_compras', 'Controlmenus::menucompras');  // Accede al menú de Compras
    //********* Modulo de Proveedores *************
    $routes->get('lista_proveedores', 'Proveedores::listaProveedores'); 
    $routes->post('agregar_proveedores', 'Proveedores::agregarProveedores'); 
    $routes->get('eliminar_proveedores/(:num)', 'Proveedores::eliminarProveedores/$1');
    $routes->get('datos_proveedores/(:num)', 'Proveedores::datosProveedores/$1');
    $routes->post('actualizar_proveedores', 'Proveedores::actualizarProveedores');
    //********* Modulo de Compras *************
    $routes->get('listar_compras', 'Compras::listarCompras');
    $routes->post('agregar_compras', 'Compras::agregarCompras');
    $routes->get('eliminar_compras/(:num)', 'Compras::eliminarCompras/$1');
    $routes->get('datos_compras/(:num)', 'Compras::datosCompras/$1');
    $routes->post('actualizar_compras', 'Compras::actualizarCompras');

// ******************** Menu de Ventas ******************** 
$routes->get('menu_ventas', 'Controlmenus::menuventas');  // Accede al menú de Ventas
    //********* Modulo de Clientes *************
    $routes->get('lista_clientes', 'Clientes::listaClientes');
    $routes->post('agregar_clientes', 'Clientes::agregarClientes'); 
    $routes->get('eliminar_clientes/(:num)', 'Clientes::eliminarClientes/$1');
    $routes->get('datos_clientes/(:num)', 'Clientes::datosClientes/$1');
    $routes->post('actualizar_clientes', 'Clientes::actualizarClientes');
    //********* Modulo de Ventas *************
    $routes->get('listar_ventas', 'Ventas::listarVentas');
    $routes->post('agregar_ventas', 'Ventas::agregarVentas');
    $routes->get('eliminar_ventas/(:num)', 'Ventas::eliminarVentas/$1');
    $routes->get('datos_ventas/(:num)', 'Ventas::datosVentas/$1');
    $routes->post('actualizar_ventas', 'Ventas::actualizarVentas');

// ******************** Modulo de Inventario ********************
$routes->get('lista_inventarios', 'Inventarios::listaInventarios'); // Accede a la ventana de inventario
$routes->post('agregar_inventarios', 'Inventarios::agregarInventarios');  
$routes->get('eliminar_inventarios/(:num)', 'Inventarios::eliminarInventarios/$1');
$routes->get('datos_inventarios/(:num)', 'Inventarios::datosInventarios/$1');
$routes->post('actualizar_inventarios', 'Inventarios::actualizarInventarios');

// ******************** Menu de usuarios ********************
$routes->get('menu_usuarios', 'Controlmenus::menuusuarios');  // Accede al menú de Usuarios

    //********* Modulo de Usuarios *************
    $routes->get('lista_usuarios', 'Usuarios::listaUsuarios'); 
    $routes->post('agregar_usuarios', 'Usuarios::agregarUsuarios');
    $routes->get('eliminar_usuarios/(:num)', 'Usuarios::eliminarUsuarios/$1');
    $routes->get('datos_usuarios/(:num)', 'Usuarios::datosUsuarios/$1');
    $routes->post('actualizar_usuarios', 'Usuarios::actualizarUsuarios');
    //********* Modulo de Empleados *************
    $routes->get('listar_empleados', 'Empleados::listarEmpleados'); 
    $routes->post('agregar_empleados', 'Empleados::agregarEmpleados');
    $routes->get('eliminar_empleados/(:num)', 'Empleados::eliminarEmpleados/$1');
    $routes->get('datos_empleados/(:num)', 'Empleados::datosEmpleados/$1');
    $routes->post('actualizar_empleados', 'Empleados::actualizarEmpleados');
  
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
