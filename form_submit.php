<?php
require("PHPMailer-master/src/PHPMailer.php");
require("PHPMailer-master/src/SMTP.php");
require ("PHPMailer-master/src/Exception.php");

$message = '<html><body> <p>Renseignez Ladresse a estimer.</p>';
$message .= '<label>Code Postal : </label>' . $_POST['postal'] .
    '<br>';
$message .= '<label>Ville : </label>' . $_POST['ville'] . '<br>';
$message .= '<label>Address : </label>' . $_POST['address'] . '<br>';

if($_POST['selected-menu'] == 'maison') {

    $message .= '<p>Informations Principales du bien  </p>';
    $message .= '<label>Surface Habitable : </label>' .             $_POST['habitable'] . '<br>';
    $message .= '<label>Surface totale du terrain  : </label>' . $_POST['nombreDe'] . '<br>';
    $message .= '<label>Nombre de pleaces : </label>' . $_POST['ville'] . '<br>';
    $message .= '<label>Nombre de salles de bain : </label>' . $_POST['deBain'] . '<br>';
    $message .= '<label>Nombre de nivesux : </label>' . $_POST['niveax'] . '<br>';
    $message .= '<label>Appartments : </label><br>';
    foreach ($_POST['maisonGroup'] as $key=>$value) {
        $message .= ($key+1) . '.' . $value . '<br>';
    }

}

if($_POST['selected-menu'] == 'appart') {

    $message .= '<p>Informations Principales du bien  </p>';
    $message .= '<label>Surface Carrez : </label>' . $_POST['careez'] . '<br>';
    $message .= '<label>Nombre de pleaces : </label>' . $_POST['dePieces'] . '<br>';
    $message .= '<label>Nombre de salles de bain : </label>' . $_POST['bain'] . '<br>';
    $message .= '<label>Etage de ce bien : </label>' . $_POST['bien'] . '<br>';
    $message .= '<label>Appartments : </label><br>';
    foreach ($_POST['appartments'] as $key=>$value) {
        $message .= ($key+1) . '.' . $value . '<br>';
    }
}

if($_POST['selected-menu'] == 'terrian') {

    $message .= '<p>Informations Principales du bien  </p>';
    $message .= '<label>Surface totale du terain : </label>' . $_POST['totale'] . '<br>';

    $diviosn = isset($_POST['Division-parcellaire']) ? 'Yes' : 'No';
    $message .= '<label>Division parcellaire : </label>' . $diviosn. '<br>';
}

$message .= '<p>Votre demande destimation est prete !  </p>';
$message .= '<label>Nom : </label>' . $_POST['nom'] . '<br>';
$message .= '<label>prenam : </label>' . $_POST['prenom'] . '<br>';
$message .= '<label>Telephone* : </label>' . $_POST['telephone'] . '<br>';
$message .= '<label>Mail : </label>' . $_POST['email'] . '<br>';

$message .= '</body></html>';

$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->Debugoutput = 'html';
$mail->Host = "smtp.ionos.fr";
$mail->Port = 587; // or 587
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth =
$mail->Username = '';
$mail->Password = '';
$mail->SetFrom('', '');
$mail->Subject = "Form Data"; //your subject here
$address = "";
$mail->AddAddress($address);
$mail->MsgHTML($message);
if (!$mail->send()) {
    echo 'failed';
}
else {
    echo 'success';
}

?>
