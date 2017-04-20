<?php
include_once '../php/counter.php';
 
# получаем данные и отсекаем пробельные символы в начале и конце:
$name         = @ trim ($_POST['name']);
$phone        = @ trim ($_POST['phone']);
$design       = @ trim ($_POST['design']);
$s_horizontal = @ trim ($_POST['s_horizontal']);
$s_vertical_l = @ trim ($_POST['s_vertical_l']);
$s_vertical_r = @ trim ($_POST['s_vertical_r']);
$view	      = @ trim ($_POST['view']);
$countertop   = @ trim ($_POST['countertop']);
$wall_plates  = @ trim ($_POST['wall_plates']);
$closers      = @ trim ($_POST['closers']);
$diode_lights = @ trim ($_POST['diode_lights']);
$equipment    = @ trim ($_POST['equipment']);
$ordername    = @ trim ($_POST['ordername']);
$folder		  = "http://kuhnijam.ru/"; // папка где хранить файлы
$emailTo      = "pjatakvvadim@yandex.ru, admin@zurbazar.ru"; //место для электрmонной почты 
$from         = "webmaster@kuhnijam.ru"; 
$data = date('d.m.Y');

if(is_uploaded_file($_FILES["upload_file"]["tmp_name"])) {
	$whitelist = array(".gif", ".jpeg", ".jpg", ".png", ".pdf", ".docx", ".doc", ".rar", ".zip");         
    $error = true;

    foreach  ($whitelist as  $item) {
        if(preg_match("/$item\$/i",$_FILES['upload_file']['name'])) $error = false;
    }
	
	if(!$error) { 
		$filename = preg_replace(' ','',$_FILES["upload_file"]["name"]);
		$uploaddir = "../uploads/". time() . $filename;
		move_uploaded_file($_FILES["upload_file"]["tmp_name"], $uploaddir);
		$uploaddir2 = $folder . time() . $filename;
	}
}

function create_message($title, $data) {

		$time = date('d.m.Y в H:i');

        $message = "
            <!doctype html>
                <html>
                    <head>
                        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
                        <title>$title</title>
                        <style>
                            div, p, span, strong, b, em, i, a, li, td {
                                -webkit-text-size-adjust: none;
                            }
                            td{vertical-align:middle}
                        </style>
                    </head>

                    <body>

                        <table width='500' cellspacing='0' cellpadding='5' border='1' bordercolor='1' style='border:solid 1px #000;border-collapse:collapse;'>
                            <caption align='center' bgcolor='#dededd' style='background:#dededd'>$title</caption>";

            foreach ($data as $key => $val) {

                if ($val != '')
                    $message .= '<tr><td bgcolor="#efeeee" style="background:#efeeee">' . $key . ':</td><td>' . $val . '</td>';

            }

            $message .= "<tr><td bgcolor='#efeeee' style='background:#efeeee'>Дата:</td><td>$time</td></table></body></html>";

        return $message;

    }

    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers    .= "MIME-Version: 1.0\r\n";
    $headers    .= "From: ".$from."\r\n";

	$subject    = "Новая заявка от $data - $counter - kuhnijam.ru";
    $body = create_message($text, array(
                                            'Имя' => $name,
                                            'Телефон' => $phone,
											'Конструкция' => $design,
											'Размер по горизонтали' => $s_horizontal,
											'Размер по левому краю' => $s_vertical_l,
											'Размер по правому краю' => $s_vertical_r,
											'Вид' => $view,
											'Столешница' => $countertop,
											'Стеновая панель' => $wall_plates,
											'Доводчики' => $closers,
											'Диодная подсветка' => $diode_lights,
											'Техника' => $equipment,
											'Адрес файла' => $uploaddir2, 
											'Название формы' => $ordername
                                            ));
    mail ($emailTo, $subject, $body, $headers);
?>