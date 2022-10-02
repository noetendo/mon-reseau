<!DOCTYPE html>
<html>
    <head>
        <title>test php </title>
        <meta charset="utf-8" />
    </head>
    <body>
    
            <p>on est le <?php echo date('d/m/Y '); ?></p>

            <?php
$isEnabled = true; // La condition d'accès

if ($isEnabled == true) {
    echo "Vous êtes autorisé(e) à accéder au site ✅";}?>
    </br>
    
    <?php

$grade = 10;

switch ($grade) 
{ 
    case 0: // dans le cas où $grade vaut 0
        echo "Tu es vraiment un gros nul !!!";
    break;
    
    case 5: // dans le cas où $grade vaut 5
        echo "Tu es très mauvais";
    break;
    
    case 7: // dans le cas où $grade vaut 7
        echo "Tu es mauvais";
    break;
    
    case 10: // etc. etc.
        echo "Tu as pile poil la moyenne, c'est un peu juste…";
    break;
    
    case 12:
        echo "Tu es assez bon";
    break;
    
    case 16:
        echo "Tu te débrouilles très bien !";
    break;
    
    case 20:
        echo "Excellent travail, c'est parfait !";
    break;
    
    default:
        echo "Désolé, je n'ai pas de message à afficher pour cette note";
}
?>
<?php
$lines = 1;

while ($lines <= 100) {
    echo 'Je ne dois pas regarder les mouches voler quand j\'apprends le PHP.<br />';
    $lines++; // $lines = $lines + 1
}
?>
</body>
  </html>