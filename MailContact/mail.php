 <?php
 if (get_magic_quotes_gpc()) {
     $prenom = stripslashes(trim($_POST['prenom']));
     $nom = stripslashes(trim($_POST['nom']));
     $message = stripslashes(trim($_POST['message']));
 }
 else {
     $prenom = trim($_POST['prenom']);
     $nom = trim($_POST['nom']);
     $message = trim($_POST['message']);
 }

 $to = "contact@as4coding.be";

 $msg = "";
 $msg .= 'Prenom : '.$prenom;
 $msg .= 'Nom : '.$nom;
 $msg .= 'Message : '.$message;

 




/*Le destinataire*/
$to="contact@as4coding.be";

/*Le sujet du message qui apparaitra*/
$sujet="Message depuis le site";
$msg = '';
/*Le message en lui même*/
// $msg = 'Mail envoye depuis le site' "Portfolio";
$msg .= 'Nom : '.$nom." "."<br>";
$msg .= 'Prenom : '.$prenom." "."<br>";
$msg .= 'Message : '.$message." "."<br>";
/*Les en-têtes du mail*/
$headers = 'From: message du site Portfolio<contact@as4coding.be>'." ";
$headers .= " ";
/*L'envoi du mail - Et page de redirection*/
mail($to, $sujet, $msg, $headers);
header('Location:https://as4coding.be');
?> 
