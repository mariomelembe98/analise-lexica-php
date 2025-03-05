<?php

// Função para verificar se a palavra SELECT está presente na string (case insensitive sem usar funções nativas)
function containsSelect($input) {
    $keyword = ['S', 'E', 'L', 'E', 'C', 'T']; // Representação da palavra SELECT

    $length = strlen($input);

    for ($i = 0; $i <= $length - 6; $i++) {
        $found = true; // Assumimos que encontramos a palavra

        for ($j = 0; $j < 6; $j++) {
            if (!(
                ($input[$i + $j] == $keyword[$j]) || // Maiúscula corresponde
                ($input[$i + $j] == chr(ord($keyword[$j]) + 32)) // Minúscula correspondente
            )) {
                $found = false;
                break;
            }
        }

        if ($found) {
            return true;
        }
    }

    return false;
}

// Exemplo de uso
$input = "Esta é uma declaração sElEcT";
if (containsSelect($input)) {
    echo "Palavra SELECT encontrada!";
} else {
    echo "Palavra SELECT não encontrada!";
}

?>
