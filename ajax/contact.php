<?php

setlocale (LC_ALL, 'fra_FRA');
date_default_timezone_set('EUROPE/Paris');
session_start();
include_once('../class/mypdo.class.php');


$data            = array();
$data['id'] = false;

$data['success'] = false;
$data['message']=false;
$data['logs']=false;
  $today = strftime("%A %d %B %H:%M:%S");
require_once '../class/PHPMailer/src/Exception.php';
require_once '../class/PHPMailer/src/PHPMailer.php';
require_once '../class/PHPMailer/src/SMTP.php';
 $mail = new PHPMailer\PHPMailer\PHPMailer;
 
 
 
 /*
  * Configuration de la connexion SMTP
  * 
  */
         /*$mail->SMTPDebug = 4;*/
        $mail->isSMTP();
        $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
        $mail->Host=/*'ngmchoir.com'*/'smtp.gmail.com';
        $mail->SMTPAuth = true; 
        $mail->Username ='nailles95@gmail.com';
        $mail->Password = 'azeqsdwxc1995';
        $mail->SMTPSecure = 'tls';
         $mail->Port = '587';
/************************************************************************/  
         
         
         /**
          * Déclaration des adresses mails
          */
         
  
        $mail->setFrom(/*'ferossenailles@hotmail.fr'*/$_POST['email']);
        $mail->addAddress('borisdagnon@hotmail.fr');
       /**************************************************/
        
         $mail->isHTML(true);                                  // Set email format to HTML
    
    $mail->Body    = '<html lang="fr" >
		<head>
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
      <style>
         .banner-color {
         background-color: #eb681f;
         }
         .title-color {
         color: #0066cc;
         }
         .button-color {
         background-color: #0066cc;
         }
         @media screen and (min-width: 500px) {
         .banner-color {
         background-color: #0066cc;
         }
         .title-color {
         color: #eb681f;
         }
         .button-color {
         background-color: #eb681f;
         }
         }
      </style>
   </head>
   <body>
      <div style="background-color:#ececec;padding:0;margin:0 auto;font-weight:200;width:100%!important">
         <table align="center" border="0" cellspacing="0" cellpadding="0" style="table-layout:fixed;font-weight:200;font-family:Helvetica,Arial,sans-serif" width="100%">
            <tbody>
               <tr>
                  <td align="center">
                     <center style="width:100%">
                        <table bgcolor="#FFFFFF" border="0" cellspacing="0" cellpadding="0" style="margin:0 auto;max-width:512px;font-weight:200;width:inherit;font-family:Helvetica,Arial,sans-serif" width="512">
                           <tbody>
                              <tr>
                                 <td bgcolor="#F3F3F3" width="100%" style="background-color:#f3f3f3;padding:12px;border-bottom:1px solid #ececec">
                                    <table border="0" cellspacing="0" cellpadding="0" style="font-weight:200;width:100%!important;font-family:Helvetica,Arial,sans-serif;min-width:100%!important" width="100%">
                                       <tbody>
                                          <tr>
                                             <td align="left" valign="middle" width="50%"><span style="margin:0;color:#4c4c4c;white-space:normal;display:inline-block;text-decoration:none;font-size:12px;line-height:20px">NGM CHOIR</span></td>
                                             <td valign="middle" width="50%" align="right" style="padding:0 0 0 10px"><span style="margin:0;color:#4c4c4c;white-space:normal;display:inline-block;text-decoration:none;font-size:12px;line-height:20px">'.$today.'</span></td>
                                             <td width="1">&nbsp;</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </td>
                              </tr>
                              <tr>
                                 <td align="left">
                                    <table border="0" cellspacing="0" cellpadding="0" style="font-weight:200;font-family:Helvetica,Arial,sans-serif" width="100%">
                                       <tbody>
                                          <tr>
                                             <td width="100%">
                                                <table border="0" cellspacing="0" cellpadding="0" style="font-weight:200;font-family:Helvetica,Arial,sans-serif" width="100%">
                                                   <tbody>
                                                      <tr>
                                                         <td align="center" bgcolor="#8BC34A" style="padding:20px 48px;color:#ffffff" class="banner-color">
                                                            <table border="0" cellspacing="0" cellpadding="0" style="font-weight:200;font-family:Helvetica,Arial,sans-serif" width="100%">
                                                               <tbody>
                                                                  <tr>
                                                                     <td align="center" width="100%">
                                                                        <h1 style="padding:0;margin:0;color:#ffffff;font-weight:500;font-size:20px;line-height:24px">Message</h1>
                                                                     </td>
                                                                  </tr>
                                                               </tbody>
                                                            </table>
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td align="center" style="padding:20px 0 10px 0">
                                                            <table border="0" cellspacing="0" cellpadding="0" style="font-weight:200;font-family:Helvetica,Arial,sans-serif" width="100%">
                                                               <tbody>
                                                                  <tr>
                                                                     <td align="center" width="100%" style="padding: 0 15px;text-align: justify;color: rgb(76, 76, 76);font-size: 12px;line-height: 18px;">
                                                                        <h3 style="font-weight: 600; padding: 0px; margin: 0px; font-size: 16px; line-height: 24px; text-align: center;" class="title-color">Bonjour vous avez re&ccedil;u un message de la part de, '.$_POST['nom'].' </h3>
                                                                        <p style="margin: 20px 0 30px 0;font-size: 15px;text-align: center;">'.$_POST['message'].'</p>
                                                                        
                                                                     </td>
                                                                  </tr>
                                                               </tbody>
                                                            </table>
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                      </tr>
                                                      <tr>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </td>
                              </tr>
                              <tr>
                                 <td align="left">
                                    <table bgcolor="#FFFFFF" border="0" cellspacing="0" cellpadding="0" style="padding:0 24px;color:#999999;font-weight:200;font-family:Helvetica,Arial,sans-serif" width="100%">
                                       <tbody>
                                          <tr>
                                             <td align="center" width="100%">
                                                <table border="0" cellspacing="0" cellpadding="0" style="font-weight:200;font-family:Helvetica,Arial,sans-serif" width="100%">
                                                   <tbody>
                                                      <tr>
                                                         <td align="center" valign="middle" width="100%" style="border-top:1px solid #d9d9d9;padding:12px 0px 20px 0px;text-align:center;color:#4c4c4c;font-weight:200;font-size:12px;line-height:18px">
                                                            <br><b>NGM CHOIR</b>
                                                         </td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td align="center" width="100%">
                                                <table border="0" cellspacing="0" cellpadding="0" style="font-weight:200;font-family:Helvetica,Arial,sans-serif" width="100%">
                                                   <tbody>
                                                      <tr>
                                                         <td align="center" style="padding:0 0 8px 0" width="100%"></td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </center>
                  </td>
               </tr>
            </tbody>
         </table>
      </div>
   </body>
</html>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
        
        
        $mail->Subject='Audition !';
        /*$mail->Body=$_POST['sujet'];*/
        
        
               if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                   
                   if(!empty($_POST['message']) ){
                       
                       
                       if(strlen($_POST['message'])>=20){
                           
                           
                           if(!$mail->Send()){ //Teste le return code de la fonction
          $data['logs'] =$mail->ErrorInfo; //Affiche le message d'erreur (ATTENTION:voir section 7)
          $data['message'] = 'Erreur problème lors de l\'envoie du message';
        }
        else{     
            $data['message'] = '<b>Le message a été envoyé !<b> Vous recevrez une réponse d\'ici quelques jours.';
        $data['success']  = true;
        }
                           
                       }else{
                           
                           $data['message'] = 'Votre message doit contenir au moins 20 lettres';
                           $data['id']='message';
                       }
                       
                       
  
   
                       
                   }else{
                       $data['message'] = 'Veuillez nous écrire quelque chose dans la zone de message';
                       $data['id']='message';
                   }
                   
 
  
} else {

    
    $data['message'] = 'L\'adresse mail n\'est pas valide';
    $data['id']='email';
}
       
        $mail->SmtpClose();
        unset($mail);
  
 
echo json_encode($data);
?>