<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorPrecios extends Controller
{
    public function precios($precio) {

        if ($precio < 100000) {
            return 'Este producto no tiene descuento';
        }
        elseif ($precio >=100000 && $precio < 150000) {
            $dos = 0.02*$precio;
            return 'El descuento del producto es del 2%, y el total a
            pagar es: ' . $precio-$dos;
        }
        elseif ($precio >=150000 && $precio <= 300000) {
            $tres = 0.03*$precio;
            return 'El descuento del producto es del 2%, y el total a
            pagar es: ' . $precio-$tres;
        }
        elseif ($precio > 300000 && $precio <= 500000) {
            $cuatro = 0.04*$precio;
            return 'El descuento del producto es del 4%, y el
            total a pagar es de: ' . $precio-$cuatro;
        }
    }

    public function getIVA($artic,$pr) {
        $iva = (0.19*$pr);
        $total = $pr+$iva;
        return 'El artículo ' . $artic . ' sin IVA cuesta $' . $pr
        . ' y el precio del IVA es de $' . $iva . '. El total a pagar
        por el articulo es de $' . $total;
    }
}
