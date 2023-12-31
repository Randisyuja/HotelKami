<?php
ob_start();
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions


if(isset($_POST['sukses'])){
    $mail = new PHPMailer(true);

    $name=$_POST['name'];
    $email=$_POST['email'];
    $nopayment=$_POST['nopayment'];
    $branch=$_POST['branch'];
    $checkin=$_POST['checkin'];
    $checkout=$_POST['checkout'];
    $tipe_kamar=$_POST['tipekamar'];
    $gambar=$_POST['gambar'];

    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'hotelkami05@gmail.com';                     //SMTP username
    $mail->Password   = 'bjidlzexrbyckhfm';                               //SMTP password
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('hotelkami05@gmail.com', 'HotelKami');
    $mail->addAddress($email, $name);     //Add a recipient
    $mail->addReplyTo('hotelkami05@gmail.com', 'HotelKami');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment("img/$gambar");         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Pesanan Hotel Kami';
    $mail->Body    = 
    '  
        <h1>Hotel Kami</h1>
        <br><br>
        <b>Halo '.$name.', terima kasih sudah menggunakan jasa Hotel Kami</b>
        <h2>No Payment '.$nopayment.'</h2>
        <h3>Twin Bed Room</h3>
        <table >
            <thead>
                <tr>
                    <th scope="col">Check In</th>
                    <th>   </th>
                    <th scope="col">Check Out</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>'.$checkin.'</td>
                    <td>   </td>
                    <td>'.$checkout.'</td>
                </tr>
                    </tbody>
        </table>
    ';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if($mail->send()){
        header("Location: index.php");
    }
    else{
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}