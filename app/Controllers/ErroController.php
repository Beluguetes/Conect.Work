<?php

namespace Conectwork\Controllers;

use Conectwork\Core\Controller;

class ErroController extends Controller{

   public function erro($tipo)
   {
     
    switch($tipo){
      case "404":
        $this->view('404');
      break;
      case "controller":
        $this->view('erro',['msg' => 'Erro! Controller Não Existe']);
      break;
      case "metodo":
        $this->view('erro',['msg' => 'Erro! O Método não existe no Controlador']);
      break;
      case "naopermitido":
        $this->view('erro',['msg' => 'Erro! A rota não é permitida para este Método']);
      break;
    }



    
   }

   

}