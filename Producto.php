<?php

class Producto
{
    private static $numProductos = 0;

    private $cod;
    private $nombre;
    private $descripcion;
    private $precio;
    private $stock;

    public function __construct($nombre, $precio, $descripcion)
    {
        self::$numProductos++;

        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->descripcion = $descripcion;
        $this->stock = 0;
        $this->cod = (self::$numProductos) + substr($this->nombre, 0, 4);
    }

    public function __toString()
    {
        return ("Codigo: $this->cod <br>" +
            "Nombre del producto: $this->nombre <br>" +
            "Descripción: $this->descripcion <br>" +
            "Precio: $this->precio <br>" +
            "Cantidad Stock: $this->stock <br>");
    }


    public function __set($name, $value)
    {
        //Comprobamos si el nombre de la variable existe en el objeto
        if (in_array($name, get_object_vars($this))) {
            $this->$name = $value;
            //Se le asigna el nuevo valor a la variable y se retorna true
            return true;
        }
        //La variable no existe en el objeto por tanto se devuelve false
        return false;
    }

    public function __get($name)
    {
        //Comprobamos si el nombre de la variable existe en el objeto
        if (in_array($name, get_object_vars($this))) {
            //Se retorna el valor de la variable
            return $this->$name;
        }
        //La variable no existe en el objeto por tanto se devuelve null
        return null;
    }
}
