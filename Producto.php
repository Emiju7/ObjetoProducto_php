<?php

/**
 * @brief Objeto Producto
 * 
 * @author Emilio Luis Pareja Hinojosa @Emiju7
 * @version 1.0
 * @date 25/10/2020
 *  
 */
class Producto
{
    private static $numProductos = 0;

    private $cod;
    private $nombre;
    private $descripcion;
    private $precio;
    private $stock;

    /**
     * Constructor del objeto Producto
     */
    public function __construct($nombre, $precio, $descripcion)
    {
        self::$numProductos++;

        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->descripcion = $descripcion;
        $this->stock = 0;
        $this->cod = (self::$numProductos) . "_" . substr($this->nombre, 0, 4);
    }

    /**
     * @brief Sobrescritura del metodo magico toString
     * 
     * Mostrará de una forma detallada y ordenada todos los parametros del objeto Producto
     */
    public function __toString()
    {
        return ("Codigo: $this->cod <br>" .
            "Nombre del producto: $this->nombre <br>" .
            "Descripción: $this->descripcion <br>" .
            "Precio: $this->precio <br>" .
            "Cantidad Stock: $this->stock <br>");
    }


    /**
     * @brief Sobrescritura del metodo magico set
     * 
     * Comparara si el nombre introducido existe en el objeto y si existe lo modifica con el valor dado
     * 
     * @param $name -> El nombre de la variable a modificar
     * @param $value -> El valor nuevo de la variable
     */
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

    /**
     * @brief Sobrescritura del metodo magico get
     * 
     * Devuelve el valor de de la variable que coincida con el nombre dado, en caso de que coincida alguno
     * 
     * @param $name -> El nombre de la variable a mostrar
     */
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
