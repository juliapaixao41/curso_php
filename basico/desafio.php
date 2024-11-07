<div class="titulo">Desafio do Módulo</div>

<h1 descricao> O Desafio do Módulo Básico é Calcular as seguintes operações:</h1>


<?php 
    $n1 = 4;
    $n2 = 4;

    $soma = $n1 + $n2;
?>


<ul>
    <li>1 + 1 = <?= 1 + 1 ?> </li>
    <li>4 + 4 = <?php echo $soma; ?></li>
    <li>8 + 8 = <?php echo 8 + 8 ?></li>
</ul>

<p detalhe> Detalhes: Para o resultado das operações a cima, foi utilizado três formas de intregração de HTML E PHP.</p>
 

<style>
    [descricao] {
        font-size: 22px;
        color: #1212D7;
    }

    [detalhe] {
        font-size: 20px;
        color: #CF5252;
    }
</style>