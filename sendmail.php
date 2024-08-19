<?php

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    $name = $data["name"];
    $email = $data["email"];
    $mobile = $data["mobile"];
    $message = $data["message"];


    $to = 'rasshadahmed@gmail.com';
    $subject = 'Enquiry at Ambrits Training Hub';
    $headers = "From: rasshadahmed@gmail.com\r\n";
    $headers .= "Reply-To: rasshadahmed@gmail.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $message = '<p>Dear Sir,<br/><br/> Please find below enquiry received through website.</p><br/>
        <br/>
        <table style="border-collapse: collapse;margin-top:10px;">
            <tbody>
                <tr>
                    <th style="border: 1px solid #000;border-collapse: collapse;padding:5px;">Name</th>
                    <td style="border: 1px solid #000;border-collapse: collapse;padding:5px;">' . $name . '</td>
                </tr>
                <tr >
                    <th style="border: 1px solid #000;border-collapse: collapse;padding:5px;">Email</th>
                    <td style="border: 1px solid #000;border-collapse: collapse;padding:5px;">' . $email . '</td>
                </tr>
                <tr>
                    <th style="border: 1px solid #000;border-collapse: collapse;padding:5px;">Mobile</th>
                    <td style="border: 1px solid #000;border-collapse: collapse;padding:5px;">' . $mobile . '</td>
                </tr>
                <tr>
                    <th style="border: 1px solid #000;border-collapse: collapse;padding:5px;">Message</th>
                    <td style="border: 1px solid #000;border-collapse: collapse;padding:5px;">' . $message . '</td>
                </tr>
            </tbody>
        </table>';
    if (mail($to, $subject, $message, $headers)) {
        echo json_encode(array("Result" => "1", "Message" => "Thanks for contacting us . Our support team will connect you in sometime", "HasError" => 0));
    } else {
        echo json_encode(array("Result" => "0", "Message" => "Something went wrong", "HasError" => 1));

    }
}
