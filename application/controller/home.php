<?php
class Home extends Controller{
    public function index(){
        require 'application/views/index.php';
    }
    public function clientes(){
        require 'application/views/cliente.php';
    }
    public function nosotros(){
        require 'application/views/nosotros.php';
    }
    public function productos(){
        require 'application/views/producto.php';
    }
    public function marcas(){
        require 'application/views/marcas.php';
    }
    public function enviar_email(){
        $name = test_input($_POST["name"]);
        $correo = test_input($_POST['correo']);
        $empresa = test_input($_POST['empresa']);
        $cargo = test_input($_POST['cargo']);
        $mensaje = $_POST['mensaje'];
        $telefono = $_POST['telefono'];
        if(isset($name) || $name==""){
            header("Location:".URL."home/index");
        }
        if(isset($cargo) || $cargo==""){
            header("Location:".URL."home/index");
        }
        if(isset($empresa) || $empresa==""){
            header("Location:".URL."home/index");
        }
        if(isset($mensaje) || $mensaje==""){
            header("Location:".URL."home/index");
        }
        if(isset($telefono) || $telefono==""){
            header("Location:".URL."home/index");
        }
        if (preg_match("/^[a-zA-Z ]*$/",$name)) {
            if(filter_var($correo, FILTER_VALIDATE_EMAIL)){
                echo $name." ".$correo;
                require_once 'application/libs/PHPMailer_5.2.4/class.phpmailer.php';
                $mail = new PHPMailer();
                $body = '<body style="margin: 10px;">
                        <div style="width: 640px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">

                        <br>
                        &nbsp;Envio de consulta<br>
                        <br>
                        <strong>DATOS DEL CONTACTO</strong><br>
                        Nombre: <strong>'.$name.'</strong><br>
                        Correo: <strong>'.$correo.'</strong><br>
                        Empresa: <strong>'.$empresa.'</strong><br>
                        Cargo: <strong>'.$cargo.'</strong><br>
                        Telefono: <strong>'.$telefono.'</strong><br>
                        <br>
                        <br>
                        '.$mensaje.'
                        </div>
                        </body>';
                //$body = preg_replace('/[\]/','',$body);
                $mail->IsSMTP(); // telling the class to use SMTP
                $mail->Host          = "mail.jkolaz.com";
                $mail->SMTPAuth      = true;
                $mail->Username      = "info@jkolaz.com"; // SMTP account username
                $mail->Password      = "info10557788177428";        // SMTP account password
                $mail->From = "info@jkolaz.com";
                $mail->FromName = CORREO_SUBJECT."consultas";
                //$mail->AddAddress("minasyconcentradoras@gmail.com");
                $mail->AddAddress("j.salsavilca@gmail.com");
                $mail->WordWrap = 50;
                $mail->IsHTML(true);
                $mail->Subject =  CORREO_SUBJECT."consultas";
                $mail->Body = $body;
                $mail->AltBody = strip_tags($body);
                $rs_mail = $mail->Send();
                if (!$rs_mail) {
                    @mail("info@jkolaz.com", "Error en envio de email MyC SA", $mail->ErrorInfo . "\n->" . $correo . "\n============================================\n" . $body);                  
                }
            }
        }
    }
}

?>
