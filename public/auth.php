<?php 
function validaCPF($cpf = null) {

    if(empty($cpf)) {
        return false;
    }

    //Elimina possíveis máscaras
    $cpf = preg_replace('[^0-9]', '', $cpf);
    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

    if (strlen($cpf) != 11) {
        return false;
    }

    else if ($cpf == '00000000000' || $cpf == '11111111111' || 
        $cpf == '22222222222' || $cpf == '33333333333' || 
        $cpf == '44444444444' || $cpf == '55555555555' || 
        $cpf == '66666666666' || $cpf == '77777777777' || 
        $cpf == '88888888888' || $cpf == '99999999999') {
        return false;

     } else {
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return false;
            }
        }
        return true;
    }
}

function validaNbr($nbr){
    if(empty($nbr)) {
        return false;
    }

    if (strlen($nbr) < 8 || strlen($nbr) > 11) {
        return false;
    }

    if(!is_numeric($nbr)){
        return false;
    }else{
        return true;
    }
}

function validar_cnpj($cnpj)
{
    $cnpj = preg_replace('/[^0-9]/', '', (string) $cnpj);
    // Valida tamanho
    if (strlen($cnpj) != 14)
        return false;
    // Valida primeiro dígito verificador
    for ($i = 0, $j = 5, $soma = 0; $i < 12; $i++)
    {
        $soma += $cnpj{$i} * $j;
        $j = ($j == 2) ? 9 : $j - 1;
    }
    $resto = $soma % 11;
    if ($cnpj{12} != ($resto < 2 ? 0 : 11 - $resto))
        return false;
    // Valida segundo dígito verificador
    for ($i = 0, $j = 6, $soma = 0; $i < 13; $i++)
    {
        $soma += $cnpj{$i} * $j;
        $j = ($j == 2) ? 9 : $j - 1;
    }
    $resto = $soma % 11;
    return $cnpj{13} == ($resto < 2 ? 0 : 11 - $resto);
}
?>