<?php
class Rol
{

    // Atributos: Encapsulamiento
    private $dbh;
    private $rol_code;
    private $rol_name;


    public function __construct(
        $rol_code = null,
        $rol_name = null,


    ) {
        $this->dbh = DataBase::connection();
        $this->rol_code = $rol_code;
        $this->rol_name = $rol_name;


    }

    public function __construct2($rol_code, $rol_name)
    {
        $this->rol_code = $rol_code;
        $this->rol_name = $rol_name;
    }
    public function setRolCode($rol_code)
    {
        $this->rol_code = $rol_code;
    }

    public function getRolCode()
    {
        return $this->rol_code;
    }
    public function setRolName($rol_name)
    {
        $this->rol_name = $rol_name;
    }
    public function getRolName()
    {
        return $this->rol_name;
    }
    
   
}
?>