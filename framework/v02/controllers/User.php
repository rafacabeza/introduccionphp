<?php
require_once 'app/View.php';
require_once 'models/UserModel.php';
class User
{    
    private $_view;
    private $_model;
    
    public function __construct()
    {
        $this->_view = new View;
        $this->_model = new UserModel;
        echo 'Estamos en el construct de User <br>';
    }
    
    public function index()
    {
        echo 'Estamos en el método index <br>';
        $this->_view->users = $this->_model->getAll();
        $this->_view->render('user/index.php');
    }
    
    public function show($id)
    {
        echo 'Estamos en el método show <br>';
        $user = $this->_model->get($id);
        $this->_view->user = $user;
        $this->_view->render('user/show.php');
    }
    
    public function add()
    {
        echo 'Estamos en el método add <br>';
        echo 'Aquí deberíamos llamar a la vista con el formulario correspondiente';
    }
    
}
