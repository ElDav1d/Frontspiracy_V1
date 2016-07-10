<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: Formulario'; 
    $to = 'info@frontspiracy.com'; 
    $subject = 'Contacto';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    if ($_POST['submit']) {
    if ($name != '' && $email != '') {
        if ($human == '4') {				 
            if (mail ($to, $subject, $body, $from)) { 
	        echo '<p>¡Tu mensaje ha sido enviado!</p>';
	    } else { 
	        echo '<p>¡Ups! Algo no ha ido bien...por favor, vuelve a intentarlo.</p>'; 
	    } 
	} else if ($_POST['submit'] && $human != '4') {
	    echo '<p>¿Cuanto son 2+2?</p>';
	}
    } else {
        echo '<p>Por favor: rellena los campos obligatorios.</p>';
    }
}

?>
