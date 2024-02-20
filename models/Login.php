<?php
//require_once "models/DataBase.php";
class Login
{
    private $dbh;
    private $Usuario;
    private $Password;

    public function __construct($Usuario, $Password)
    {
        $this->Usuario = $Usuario;
        $this->Password = $Password;
        $this->dbh = DataBase::connection();

    }

    public function setUsuario($Usuario)
    {
        $this->Usuario = $Usuario;
    }
    public function getUsuario()
    {
        return $this->Usuario;
    }


    public function setPassword($Password)
    {
        $this->Password = $Password;
    }
    public function getPassword()
    {
        return $this->Password;
    }


    public function login()
    {
        $sql = 'SELECT * FROM Login WHERE Usuario = :Usuario AND Password = :Password';

        $stmt = $this->dbh->prepare($sql);
        $stmt->bindValue(':Usuario', $this->getUsuario());
        $stmt->bindValue(':Password', ($this->getPassword()));
        $stmt->execute();
        $userDb = $stmt->fetch();

        if ($userDb) {
            $login = new Login(
                $userDb['Usuario'],
                $userDb['Password']
            );
            return $login;
        } else {
            return false;
        }
    }
}
?>