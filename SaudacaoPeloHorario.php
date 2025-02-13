<?php 

$horario = 10;

if ($horario >= 0 && $horario < 12) {
    echo "Bom dia, são $horario horas";
} elseif ($horario >= 12 && $horario < 18) {
    echo "Boa tarde, são $horario horas";
} else {
    echo "Boa noite, são $horario horas";
}
    
