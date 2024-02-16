<?php
//require_once "models/DataBase.php";
class User
{
    private $dbh;
    public $Primer_Nombre;
    public $Segund_Nombre;
    public $Primer_Apellido;
    public $Segund_Apellido;
    //public $cargo;
    public $direccion;
    public $Telefono_Cor;
    public $Celular;
    public $Ext;
    public $Ciudad;
    public $Indicativo;
    protected $Id_Cargo;
    private $Id_Estado;
    private $id_Login;

    private $rol_code;

    public function __construct(
        $Primer_Nombre = null,
        $Segund_Nombre = null,
        $Primer_Apellido = null,
        $Segund_Apellido = null,
        $direccion = null,
        $Telefono_Cor = null,
        $Celular = null,
        $Ext = null,
        $Ciudad = null,
        $Indicativo = null,
        $Id_Cargo,

    ) {
        $this->dbh = DataBase::connection();
        $this->Primer_Nombre = $Primer_Nombre;
        $this->Segund_Nombre = $Segund_Nombre;
        $this->Primer_Apellido = $Primer_Apellido;
        $this->Segund_Apellido = $Segund_Apellido;
        $this->direccion = $direccion;
        $this->Telefono_Cor = $Telefono_Cor;
        $this->Celular = $Celular;
        $this->Ext = $Ext;
        $this->Ciudad = $Ciudad;
        $this->Indicativo = $Indicativo;
        $this->Id_Cargo = $Id_Cargo;

    }
    public function setPrimerNombre($Primer_Nombre)
    {
        $this->Primer_Nombre = $Primer_Nombre;
    }

    public function getPrimerNombre()
    {
        return $this->Primer_Nombre;
    }

    public function setSegundoNombre($Segund_Nombre)
    {
        $this->Segund_Nombre = $Segund_Nombre;
    }

    public function getSegundoNombre()
    {
        return $this->Segund_Nombre;
    }

    public function setPrimerApellido($Primer_Apellido)
    {
        $this->Primer_Apellido = $Primer_Apellido;
    }

    public function getPrimerApellido()
    {
        return $this->Primer_Apellido;
    }

    public function setSegundoApellido($Segund_Apellido)
    {
        $this->Segund_Apellido = $Segund_Apellido;
    }

    public function getSegundoApellido()
    {
        return $this->Segund_Apellido;
    }

    // public function setCargo($cargo)
    // {
    //     $this->cargo = $cargo;
    // }

    //public function getCargo()
    // {
    //    return $this->cargo;
    // }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setTelefonoCor($Telefono_Cor)
    {
        $this->Telefono_Cor = $Telefono_Cor;
    }

    public function getTelefonoCor()
    {
        return $this->Telefono_Cor;
    }

    public function setCelular($Celular)
    {
        $this->Celular = $Celular;
    }

    public function getCelular()
    {
        return $this->Celular;
    }
    public function setExt($Ext)
    {
        $this->Ext = $Ext;
    }

    public function getExt()
    {
        return $this->Ext;
    }



    public function setCiudad($Ciudad)
    {
        $this->Ciudad = $Ciudad;
    }

    public function getCiudad()
    {
        return $this->Ciudad;
    }

    public function setIndicativo($Indicativo)
    {
        $this->Indicativo = $Indicativo;
    }

    public function getIndicativo()
    {
        return $this->Indicativo;
    }

    public function setCargoId($Id_Cargo)
    {
        $this->Id_Cargo = $Id_Cargo;
    }

    public function getCargoId()
    {
        return $this->Id_Cargo;
    }

    public function setEstadoId($Id_Estado)
    {
        $this->Id_Estado = $Id_Estado;
    }

    public function getEstadoId()
    {
        return $this->Id_Estado;
    }

    public function setLoginId($id_Login)
    {
        $this->id_Login = $id_Login;
    }

    public function getLoginId()
    {
        return $this->id_Login;
    }

    public function setRolCode($rol_code)
    {
        $this->rol_code = $rol_code;
    }

    public function getRolCode()
    {
        return $this->rol_code;
    }





    public function userCreate()
    {
        try {
            $sql_estado = 'SELECT Id_Estado FROM Estado WHERE Estado = "Activo"';
            $stmt_estado = $this->dbh->query($sql_estado);
            $estadoActivo = $stmt_estado->fetchColumn();

            $sql_rol = 'SELECT rol_code FROM Rol WHERE rol_code = 2';
            $stmt_rol = $this->dbh->query($sql_rol);
            $rol = $stmt_rol->fetchColumn();

            $sql_ultimo_id = 'SELECT MAX(id_Login) AS id_ultimo FROM login';
            $stmt_ultimo_id = $this->dbh->query($sql_ultimo_id);
            $id_ultimo = $stmt_ultimo_id->fetchColumn();

            $sql = 'INSERT INTO user (Primer_Nombre, Segund_Nombre, Primer_Apellido, Segund_Apellido, direccion, Telefono_Cor, Celular, Ext, Ciudad, Indicativo, Id_Cargo, Id_Estado, id_Login, rol_code) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';

            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue(1, $this->getPrimerNombre());
            $stmt->bindValue(2, $this->getSegundoNombre());
            $stmt->bindValue(3, $this->getPrimerApellido());
            $stmt->bindValue(4, $this->getSegundoApellido());
            $stmt->bindValue(5, $this->getDireccion());
            $stmt->bindValue(6, $this->getTelefonoCor());
            $stmt->bindValue(7, $this->getCelular());
            $stmt->bindValue(8, $this->getExt());
            $stmt->bindValue(9, $this->getCiudad());
            $stmt->bindValue(10, $this->getIndicativo());
            $stmt->bindValue(11, $this->getCargoId());
            $stmt->bindValue(12, $id_ultimo);
            $stmt->bindValue(13, $estadoActivo);
            $stmt->bindValue(14, $rol);
            //$stmt->bindValue(14, $this->getRolCode());

            $stmt->execute();

            $this->setLoginId($id_ultimo);

        } catch (PDOException $e) {
            die("Error al crear usuario: " . $e->getMessage());
        }
    }

    public static function getAllUsers()
    {
        try {
            $dbh = DataBase::connection();

            $sql = 'SELECT user.*, Cargo.Nombre_Cargo 
            FROM user
            JOIN Cargo ON user.Id_Cargo = Cargo.Id_Cargo';


            $stmt = $dbh->query($sql);

            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $users;
        } catch (PDOException $e) {
            die("Error al obtener usuarios: " . $e->getMessage());
        }
    }

}


?>