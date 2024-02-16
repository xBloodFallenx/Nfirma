<?php
require_once "models/user.php";

class Users
{
    public function userCreate()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user = new User(
                $_POST['Primer_Nombre'],
                $_POST['Segund_Nombre'],
                $_POST['Primer_Apellido'],
                $_POST['Segund_Apellido'],
                $_POST['direccion'],
                $_POST['Telefono_Cor'],
                $_POST['Celular'],
                $_POST['Ext'],
                $_POST['Ciudad'],
                $_POST['Indicativo'],
                $_POST['Id_Cargo']
            );

            $user->userCreate();
            $this->crearFirma($user);

            // header('Views/vistaFirma.php');
            include 'Views/vistaFirma.php';
            exit();
        }
    }
    private function crearFirma($user)
    {
        $plantilla = imagecreatefromjpeg('assets/images/firma.jpeg');

        $nombre = $user->getPrimerNombre();
        $segundo_nombre = $user->getSegundoNombre();
        $apellido_1 = $user->getPrimerApellido();
        $apellido_2 = $user->getSegundoApellido();
        $direccion = $user->getDireccion();
        $telefono = $user->getTelefonoCor();
        $celular = $user->getCelular();
        $ext = $user->getExt();
        $ciudad = $user->getCiudad();
        $indicativo = $user->getIndicativo();
        $cargo = $user->getCargoId();

        $color_texto = imagecolorallocate($plantilla, 0, 0, 0);


        $font = 'assets/Fonts/RobotoRegular.ttf';
        $tamanio_fuente = 12;
        $espacio_entre_lineas = 20;


        $coordenada_nombre_x = 100;
        $coordenada_nombre_y = 150;
        $coordenada_segundo_nombre_x = 100;
        $coordenada_segundo_nombre_y = 170;
        $coordenada_apellido_1_x = 100;
        $coordenada_apellido_1_y = 150;
        $coordenada_apellido_2_x = 100;
        $coordenada_apellido_2_y = 150;
        $coordenada_direccion_x = 100;
        $coordenada_direccion_y = 150;
        $coordenada_telefono_x = 100;
        $coordenada_telefono_y = 150;
        $coordenada_celular_x = 100;
        $coordenada_celular_y = 150;
        $coordenada_ext_x = 100;
        $coordenada_ext_y = 150;
        $coordenada_ciudad_x = 100;
        $coordenada_ciudad_y = 150;
        $coordenada_indicativo_x = 100;
        $coordenada_indicativo_y = 150;
        $coordenada_cargo_x = 100;
        $coordenada_cargo_y = 150;


        imagettftext($plantilla, $tamanio_fuente, 0, $coordenada_nombre_x, $coordenada_nombre_y, $color_texto, $font, $nombre);

        imagettftext($plantilla, $tamanio_fuente, 0, $coordenada_segundo_nombre_x, $coordenada_segundo_nombre_y, $color_texto, $font, $segundo_nombre);

        imagettftext($plantilla, $tamanio_fuente, 0, $coordenada_apellido_1_x, $coordenada_apellido_1_y, $color_texto, $font, $apellido_1);

        imagettftext($plantilla, $tamanio_fuente, 0, $coordenada_apellido_2_x, $coordenada_apellido_2_y, $color_texto, $font, $apellido_2);

        imagettftext($plantilla, $tamanio_fuente, 0, $coordenada_direccion_x, $coordenada_direccion_y, $color_texto, $font, $direccion);
        imagettftext($plantilla, $tamanio_fuente, 0, $coordenada_telefono_x, $coordenada_telefono_y, $color_texto, $font, $telefono);
        imagettftext($plantilla, $tamanio_fuente, 0, $coordenada_celular_x, $coordenada_celular_y, $color_texto, $font, $celular);
        imagettftext($plantilla, $tamanio_fuente, 0, $coordenada_ext_x, $coordenada_ext_y, $color_texto, $font, $ext);

        imagettftext($plantilla, $tamanio_fuente, 0, $coordenada_ciudad_x, $coordenada_ciudad_y, $color_texto, $font, $ciudad);

        imagettftext($plantilla, $tamanio_fuente, 0, $coordenada_indicativo_x, $coordenada_indicativo_y, $color_texto, $font, $indicativo);

        imagettftext($plantilla, $tamanio_fuente, 0, $coordenada_cargo_x, $coordenada_cargo_y, $color_texto, $font, $cargo);

        $nombre_firma = $nombre . '_' . $apellido_1 . '_firma.jpg';
        imagejpeg($plantilla, $nombre_firma);


        imagedestroy($plantilla);

        //include 'Views/vistaFirma.php';
        //header('Views/vistaFirma.php');
        header('Location: Views/vistaFirma.php');


    }


}
?>