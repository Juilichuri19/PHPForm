<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <style>
        div {
              margin: auto;
              width: 60%;
              border: 1px solid #CCC;
              padding: 30px;
              margin-top:60px;
            }
     </style>
   </head>
   <body>
     <div>
       <p>Merci <?php echo $_POST["user_prenom"];?> <?php echo $_POST["user_nom"];?>
       de nous avoir contacté à propos de "<?php echo $_POST["user_subject"];?>" .</p>
       <p>Un de nos conseiller vous contactera soit à l’adresse <?php echo $_POST["user_mail"]; ?>
         ou par téléphone au <?php echo $_POST["user_phone"]; ?>
         dans les plus brefs délais pour traiter votre demande  : </p>
        <p><?php echo $_POST["user_message"]; ?></p>
     </div>
   </body>
 </html>
