<?php

namespace Alura;

$emails = "ana@empresa.com.br; junior@empresa.com.br; maria@empresa.com.br";

$arrays_emails = explode("; ", $emails);

foreach ($arrays_emails as $email) {
    echo "<p>$email</p>";
}



