<div class="titulo">Tipo String</div>

<?php
    echo 'Eu sou uma string';
    echo '<br>';
    var_dump("Eu também"); 
    
    echo '<br>';
    echo '<br>';
    
    echo "Concatenação:";


    echo '<br>';
    echo '<br>';
    
    echo "Nó também" . " somos"; //ponto
    echo '<br>', "Também aceito", " virgulas"; //virgulas
    
    echo '<br>';
    echo "'Teste' " . '"Teste" ' . '\'teste\' ' . "\"Teste\" ", '<br>';
    
    echo '<br>';    
    
    echo "Outra função para imprimir dados na tela alem do echo:";
    
    echo '<br>';

    print("<br> Também exite a função print");
    print "<br> Também exite a função print";
    
    echo '<br>';
    echo '<br>';

    echo "Algumas funções:", '<br>';

    echo '<br>' . strtoupper('maximizado');
    echo '<br>' . strtolower('MINIMIZADO');
    echo '<br>' . ucfirst   ('Só a primeira letra Maiuscula');
    echo '<br>' . ucwords   ('todas as palavras');
    echo '<br>' . strlen    ('Quantas letras?');
    echo '<br>' . mb_strlen ("Eu também", "utf-8");
    echo '<br>' . substr    ('Só uma parte mesmo', 7, 6); //a palavra PARTE que foi selecionada
    
    

?>