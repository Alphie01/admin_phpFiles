<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Yeni bir PHPMailer nesnesi oluşturun

$mail = new PHPMailer(true);

$ret = '<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Posta Başlığı</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f2f2f2;">
<table class="body-wrap" style=" box-sizing: border-box; font-size: 14px; width: 100%; background-color: transparent; margin: 0;">
<tr style=" box-sizing: border-box; font-size: 14px; margin: 0;">
    <td style=" box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;" valign="top"></td>
    <td class="container" width="600" style=" box-sizing: border-box; font-size: 14px; vertical-align: top; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto;" valign="top">
        <div class="content" style=" box-sizing: border-box; font-size: 14px; max-width: 600px; display: block; margin: 0 auto; padding: 20px;">
            <table class="main" width="100%" cellpadding="0" cellspacing="0" style=" box-sizing: border-box; font-size: 14px; border-radius: 7px; background-color: #fff; color: #495057; margin: 0; box-shadow: 0 0.75rem 1.5rem rgba(18,38,63,.03);" bgcolor="#fff">
                <tr style=" box-sizing: border-box; font-size: 14px; margin: 0;">
                    <td class="alert alert-warning" style=" box-sizing: border-box; font-size: 16px; vertical-align: top; color: #fff; font-weight: 500; text-align: center; border-radius: 7px 7px 0 0; background-color: #556ee6; margin: 0; padding: 20px;" align="center" bgcolor="#71b6f9" valign="top">
                    Thank you for choosing the FAITH Project System.
                    </td>
                </tr>
                <tr style=" box-sizing: border-box; font-size: 14px; margin: 0;">
                    <td class="content-wrap" style=" box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 20px;" valign="top">
                        <table width="100%" cellpadding="0" cellspacing="0" style=" box-sizing: border-box; font-size: 14px; margin: 0;">
                            <tr style=" box-sizing: border-box; font-size: 14px; margin: 0;">
                                <td class="content-block" style=" box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
                                    Dear '.$_GET['name'].', <br><br>
                                    Thank you for registering in the Faith Project System. We left behind our 2-year training and consultancy service with experience, trust and success. <b>We Are Here For Your Future<b/>
                                </td>
                            </tr>
                            <tr style=" box-sizing: border-box; font-size: 14px; margin: 0;">
                                <td class="content-block" style=" box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
                                    <b>Why We Need to Verify Our Email<b/><br>
                                    We need your e-mail address to be real so that you can get the best service.
                                </td>
                            </tr>
                            <tr style=" box-sizing: border-box; font-size: 14px; margin: 0;">
                                <td class="content-block" style=" box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
                                    <p style=" box-sizing: border-box; font-size: 14px; color: #FFF; text-decoration: none; line-height: 2em; font-weight: bold; text-align: center; cursor: pointer; display: inline-block; border-radius: 5px; text-transform: capitalize; background-color: #34c38f; margin: 0; border-color: #34c38f; border-style: solid; border-width: 8px 16px;">'.$_GET['code'].'</>
                                </td>
                            </tr>
                            <tr style=" box-sizing: border-box; font-size: 14px; margin: 0;">
                                <td class="content-block" style=" box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
                                    Thank you for choosing the FAITH Project System.
                                </td>
                            </tr>
                            <tr style=" box-sizing: border-box; font-size: 14px; margin: 0;">
                                <td class="content-block" style=" box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
                                    <b>FAITH</b>
                                    <p>Facing Academic Integrity Threats</p>
                                </td>
                            </tr>

                            <tr style=" box-sizing: border-box; font-size: 14px; margin: 0;">
                                <td class="content-block" style="text-align: center; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0;" valign="top">
                                    © 2021 FAITH
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </td>
</tr>
</table>
</body>
</html>
';
try {
    // SMTP ayarlarını belirleyin
    $mail->isSMTP();
    $mail->Host       = 'mail.faithproject.info'; // SMTP sunucusu
    $mail->SMTPAuth   = true;
    $mail->Username   = 'welcome@faithproject.info'; // E-posta hesabınızın kullanıcı adı
    $mail->Password   = 'FaithProject2023.'; // E-posta hesabınızın şifresi
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;
    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    // Alıcı, konu ve mesaj içeriğini belirleyin
    $mail->setFrom('welcome@faithproject.info', 'FAITH Project System');
    $mail->addAddress($_GET['mail'], $_GET['name']);
    $mail->Subject = 'Thank you for registering in the system of the FAITH project!';
    $mail->Body    = $ret;

    // E-postayı gönderin
    $mail->send();
    header('Location:../auth-two-step-verification.php');
} catch (Exception $e) {
    echo "E-posta gönderilemedi. Hata: {$mail->ErrorInfo}";
}
