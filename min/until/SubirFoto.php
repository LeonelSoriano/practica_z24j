<?php


class SubirFoto
{
	private $_G;
    private $_name;


    private $_type;

    private $_tmp_name;

    private $_error;

    private $_size;

    private $_nombre_subir;


    private $_extencion;

    /*direccion donde ira*/
    private $_path;

    function __construct($array_file, $Argpath = "")
    {

        $this->_name = $array_file['name'];
        $this->_name = str_replace("'","",$this->_name);
        $this->_name = str_replace('"',"",$this->_name);
        $this->_name = str_replace("\\","",$this->_name);

        $this->_type = $array_file['type'];
        $this->_tmp_name = $array_file['tmp_name'];
        $this->_error = $array_file['error'];
        $this->_size = $array_file['size'];

        $this->_path = $Argpath;

        $this->_nombre_subir =  $this->generarNombre();



    }

    private function  generarPalabraAleatoria()
    {
        return  substr( "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ" ,mt_rand( 0 ,50 ) ,1 ) .substr( md5( time() ), 1);

    }


    private function generarNombre()
    {
        $this->_extencion = strrpos($this->_name, '.'); // busco la estencion

        return $this->path . substr($this->_name, 0, $this->_extencion)  . time(). '-' . $this->generarPalabraAleatoria() .substr($this->_name, $this->_extencion);

    }

    public function cargarFoto()
    {
        if((($this->_type == "image/gif" || $this->_type == "image/jpeg" ||
                    $this->_type == "image/pjpeg") && ($this->_size < 100000)) || $this->_error == 0){
            move_uploaded_file($this->_tmp_name,
                $this->_nombre_subir);
        }else{
            $this->_error = 1;
            echo "ERROR en subir imagen por favor verifique el tipo de archivo o el tamaño";
        }


    }

    public function getNombreSubir(){
        return $this->_nombre_subir;
    }

    /**
     * @return mixed
     */
    public function getError()
    {
        return $this->_error;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->_size;
    }

    /**
     * @return mixed
     */
    public function getTmpName()
    {
        return $this->_tmp_name;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->_path;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->_type;
    }


} 
