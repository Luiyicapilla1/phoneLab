<?php

namespace app\controllers;
use \app\models\ViewsModel;

class ViewsController extends ViewsModel
{
    public function getControllerViews($view){
        if($view != "")
        {
            $response = $this->getModelViews($view);
        }else{
            $response = 'login';
        }
        return $response;
    }
}