<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use View;
class AdminBaseController extends Controller
{
    protected function loadDataToVie($view_path)
    {
        View::composer($view_path,function ($view)
        {
            $view->with('base_route',$this->base_route);
            $view->with('panel',$this->panel);
            $view->with('folder_name',property_exists($this,'folder_name')?$this->folder_name:'');
        });
        return $view_path;
    }
}
