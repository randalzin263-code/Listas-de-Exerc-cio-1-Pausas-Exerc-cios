<?php

$admin = "true";

$admin = filter_var($admin, FILTER_VALIDATE_BOOLEAN);

if ($admin === true) {
    echo "Acesso liberado";
} else {
    echo "Acesso negado";
}

?>
