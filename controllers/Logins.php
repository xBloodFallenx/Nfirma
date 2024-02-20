<?php
session_start();
require_once "models/DataBase.php";
require_once "models/Login.php";

class Logins
{
    public function __construct()
    {
    }

    public function main()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {

            require_once "Views/login_view.php";
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (empty($_POST['Usuario']) || empty($_POST['Password'])) {
                $message = "Por favor, completa todos los campos.";
            } else {
                $login = new Login($_POST['Usuario'], $_POST['Password']);
                $result = $login->login();

                if ($result) {
                    $_SESSION['session'] = "user";
                    $_SESSION['Usuario'] = $result->getUsuario();
                    require_once "Views/admin_view.php";

                    //  header("Location:?c=Users&a=userCreate");
                    exit();
                } else {
                    echo "Credenciales incorrectas.";
                    require_once "Views/login_view.php";
                }

            }
        }
    }
}


?>