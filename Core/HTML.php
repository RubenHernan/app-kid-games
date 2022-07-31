<?php
require 'URL.php';

class HTML {
    public static function image($normalpath, $attrib = []) {
        $stringFinal = "<img src='" . URL::to('public') . '/' . $normalpath . "'";
        foreach ($attrib as $key => $value) {
            $stringFinal .= " " . $key . "='" . $value . "'";
        }
        return $stringFinal . ">";
    }

    public static function style($normalpath,$attrib = []) {
        if(substr($normalpath,0,4) == "http"){
            $stringFinal = "<link rel='stylesheet' type='text/css' href='" . $normalpath . "'";
        }else{
            $stringFinal = "<link rel='stylesheet' type='text/css' href='" . URL::to('public') . '/' . $normalpath . "'";
        }
        
        foreach ($attrib as $key => $value) {
            $stringFinal .= " " . $key . "='" . $value . "'";
        }
        return $stringFinal . ">";
    }

    public static function script($normalpath, $attrib = []) {
        if(substr($normalpath,0,4) == "http"){
            $stringFinal = "<script type='text/javascript' src='" . $normalpath . "'";
        }else{
            $stringFinal = "<script type='text/javascript' src='" . URL::to('public') . '/' . $normalpath . "'";
        }

        foreach ($attrib as $key => $value) {
            $stringFinal .= " " . $key . "='" . $value . "'";
        }

        return $stringFinal . "></script>";
    }
}