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

$routes->get('productos', 'Productos::verProductos');
$routes->get('agregar_producto', 'Productos::agregar_productos');
$routes->get('eliminar_producto/(:num)', 'Productos::eliminar_producto/$1');
$routes->get('actualizar_producto/(:num)', 'Productos::actualizar_producto/$1');
$routes->get('actualizar_producto','Productos::actualizarProducto');

$routes->get('sucursales', 'Sucursales::verSucursales');
$routes->get('agregar_sucursal', 'Sucursales::agregar_sucursales');
$routes->get('eliminar_sucursal/(:num)', 'Sucursales::eliminar_sucursal/$1');
$routes->get('actualizar_sucursal/(:num)', 'Sucursales::actualizar_sucursal/$1');
$routes->get('actualizar_sucursal','Sucursales::actualizarSucursal');

//Admins

$routes->get('admin', 'Admins::verAdmins');
$routes->get('agregar_admin', 'Admins::agregar_admins');
$routes->get('eliminar_admin/(:num)', 'Admins::eliminar_admin/$1');
$routes->get('actualizar_admin/(:num)', 'Admins::actualizar_admin/$1');
$routes->get('actualizar_admin','Admins::actualizarAdmin');

//  Detalles Facturas 

$routes->get('detalleFactura', 'Detalle_Facturas::verDetalles');
$routes->get('agregar_detalle', 'Detalle_Facturas::agregar_detalle');
$routes->get('eliminar_detalle/(:num)', 'Detalle_Facturas::eliminar_detalle/$1');
$routes->get('actualizar_detalle/(:num)', 'Detalle_Facturas::actualizar_detalle/$1');
$routes->get('actualizar_detalle','Detalle_Facturas::actualizarDetalle');
