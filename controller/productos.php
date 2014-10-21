<?php


class Producto extends Controller
{
    
    public function index()
    {
        $productos_model = $this->loadModel('productosmodel');
        $data = $productos_model->listadoProductos();       

        require './views/_templates/header.php';
        require './views/productos/index.php';
        require './views/_templates/footer.php';

    }

}
