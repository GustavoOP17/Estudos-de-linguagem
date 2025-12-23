<?php 
    $valores = explode(" ", trim(fgets(STDIN)));

    $media = ($valores[0] * 2 + $valores[1] * 3 + $valores[2] * 4 + $valores[3] * 1) / 10;
    printf("Media: %.1f\n", $media);

    if ($media >= 7.0) {
        echo "Aluno aprovado.\n";
    } elseif ($media < 5.0) {
        echo "Aluno reprovado.\n";
    } else {
        echo "Aluno em exame.\n";
        $recuperacao = (float) fgets(STDIN);
    printf("Nota do exame: %.1f\n", $recuperacao);

        $media = ($media + $recuperacao)/2;


        
        if ($media >= 5.0) {
            echo "Aluno aprovado.\n";
        } else {
            echo "Aluno reprovado.\n";
            
        }
        printf("Media final: %.1f\n", $media);
    }
?>