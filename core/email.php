<?php

include('../config.php');
$site = BASE_URL;
$email = MAIL;


$conteudo = [];
/************************************************************************/
                $conteudo["site"] = $site;
                $conteudo["email"] = $email;
/************************************************************************/

    foreach ($_POST as $key=>$value)

                if ($value !== '' && $key !== 'email' && $key !== 'site') {
                    $conteudo[$key] = $value;
                }



$content = http_build_query($conteudo);

$context = stream_context_create(array(
    'http' => array(
        'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => $content
    )
));

//$result = file_get_contents('http://webvila.com.br/contato/auto_envio.php', null, $context);

if (!$result = file_get_contents('http://webvila.com.br/contato/auto_envio.php', null, $context)) {
	   echo "<script>alert('erro no script');window.location='".$site."';</script>";
	} else {
	    echo "<script>alert('Sua mensagem foi enviada com sucesso!');window.location='".$site."';</script>";
	}
?>