<?php

require_once 'model/medallero.php';

class MedalleroController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Medallero();
    }

    public function Index()
    {

        session_start();

        $medallero = $this->getMedallero();
        $cont = 1;

        require_once 'view/header.php';
        require_once 'view/Medallero/medallero.php';
        require_once 'view/footer.php';

    }

    public function getMedallero(){
        return $this->model->Listar();
    }
}
