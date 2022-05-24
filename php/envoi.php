<?php
if(!empty($_POST['surname'])  && !empty($_POST['email']) && !empty($_POST['dep'])  &&   !empty($_POST['message'])){

    $surname = htmlspecialchars($_POST['surname']);
    $email = htmlspecialchars($_POST['email']);
    $dep = htmlspecialchars($_POST['dep']);
    $message = htmlspecialchars($_POST['message']);

if(filter_var($email, FILTER_VALIDATE_EMAIL)){



    $header="MIME-Version: 1.0\r\n";
    $header.="From:'STORM HEBERG'<dylanmaurcot5pv@gmail.com>"."\n";
    $header.="Content-Type:text/html; charset='uft-8'"."\n";
    $header.="Content-Transfer-Encoding: 8bit";
    $message="Prénom: ".$surname."<br>Mail: ".$email."<br>Sujet: ".$dep."<br>Message :<br>".$message;
    mail("dylanmaurcot5pv@gmail.com", "Message de votre site !", $message, $header);


}else{
    echo "Email non valide";
}

}else{
    echo " Vous n'avez pas tous remplit !";
}

?>