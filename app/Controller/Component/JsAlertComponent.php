<?php

class JsAlertComponent extends Component
{

    function startup(Controller $controller)
    {
        $this->controller = $controller;
    }

    function alert($string)
    {
        return '<script>info("' . $string . '");</script>';
    }
}