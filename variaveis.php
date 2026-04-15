<?php
 //mock
//r dados de usuario, sendo eles: 
 
$nome = "rafa";
$idade = "21";
$sexo = "feminino";
$nomePai = "jose guimaraes";
$nomeMae ="maria lopes";

//*echo "o usuario de nome $nome " . "idade $idade". "sexo $sexo". "é filho de $nomePai". "e $nomeMae";
//echo "<br>";
//echo "o usuario de nome $nome idade $idade sexo $sexo é filho de $nomePai e $nomeMae";

$valor1 = "1";
$valor2 = "1";
$soma = $valor1 + $valor2;

echo "a soma de $valor1 e $valor2 eh $soma";
echo "<br>";
$valor1 = "1";
$valor2 = "1";
$sub = $valor1 - $valor2;

echo "a subtracao de $valor1 e $valor2 eh $sub"; 

 echo "<br>";
$valor1 = "1";
$valor2 = "1";
$mult = $valor1 * $valor2;

echo "a multiplicaçao de $valor1 e $valor2 eh $mult"; 

 echo "<br>";
$valor1 = "1";
$valor2 = "1";
$div = $valor1 / $valor2;

echo "a divisao de $valor1 e $valor2 eh $div"; 
//$numero = 10;//int
//$numero = 10.4;//float, long
//$numero = "10";// string
//$numero = "10"// char


// tipos de estruturas
// array || vetor

//$array = [];
//$array = array ();
//$objeto = new stdClass (); // objeto ouu classe

//echo $numero; 
//echo date ("H:1:s");//

 echo "<br>";
  echo "<br>";

$nota1 = 15;
$nota2 = 10;
$nota3 = 6;
$peso1 = 1;
$peso2 = 2;
$peso3 = 3;
$somaPeso = $peso1 + $peso2 + $peso3;
$mediaFinal = (($nota1 * $peso1) + ($nota2 * $peso2) + ($nota3 * $peso3))/$somaPeso;
 
if ($mediaFinal >= 7){
    echo "aluno aprovado <br>";
} else{
    echo "aluno reprovado";
} 


echo "<br>";
echo "<br>";


// LOOPs
$numero = 3;

for($calcu = 0; $calcu <= 10; $calcu++) {
  echo "$numero x $calcu =" . $numero * $calcu. "<br>";
}

echo "<br>";
echo "<br>";

$numero = 2;
$calcu = 0;

while ($calcu <=10)
{
    echo "$numero x $calcu =" . $numero * $calcu. "<br>";  
    $calcu++;  
}

echo "<br>";
echo "<br>";
  

while ($calcu <=10)//while completo faz3r dps 
{
    echo "$numero x $calcu =" . $numero * $calcu. "<br>";  
    $calcu++;  
}

echo "<br>";
echo "<br>";

$numero = 5;
$calcu = 0;

do 
{ 
    echo "$numero x $calcu =" . $numero * $calcu. "<br>";  
    $calcu++;  
} while ($calcu <=10);


echo "<br>"; //exercicios para saber se o numero é par
echo "<br>";

$contador = 0;
for($numero = 1; $contador < 10; $numero++) {
    if ($numero % 2== 0)
    echo "$numero<br>";
    $contador++;
}

echo "<br>";
echo "<br>";
// EXERCICIOS de REVISAO AULA 14/04/2026.

/**
 * Calcular IMC(Indice de Massa Corporal) de uma pessoa e
 * exibir os valores utilizados no calculo assim como o seu IMC.
 *
 * Saída esperada: O IMC é: 123
 */

$altura = 1.70;
$peso = 65;
$imc = $peso/($altura * $altura);

echo "o imc é igual a $imc baseado na altura $altura e no peso $peso";


echo "<br>";
echo "<br>";
/*
 * Calcular quantos segundos tem em 2 horas e 30 minutos e exibir o valor.
 *
 * Dica: converter tudo para uma mesma medida (segundos) para facilitar o calculo.
 *
 * Saída esperada: O Total em segundos é: 9000.
 */
$horas = 2.30;
$minutos = $horas/60;  /*jaja arrumo*/
$segundos = $minutos/60;
echo "$segundos"; 



echo "<br>";
echo "<br>";
/**
 * Simular o funcionamento de uma calculadora com as duas estruturas lógicas:
 * Switch Case e IF ELSE IF ELSE. Não é necessário o ZERAR, somente o calculo.
 * Operadores: + - * /
 *
 * Dica: utilizar 4 variáveis, uma delas vai ser $operador a outra $resultado.
 */
$n1 = 2;
$n2 = 2;
$operador = "*";
$resul = 0;

if ($operador == "*"){
    echo "a multiplicação de $n1 e $n2 é igual a =" . $n1 * $n2. "<br>"; 
} else if ($operador == "+"){
    echo "a soma de $n1 mais $n2 é igual a =" . $n1 + $n2. "<br>"; 
} else if ($operador == "-"){
    echo "a subtração de $n1 e $n2 é igual a =" . $n1 - $n2. "<br>"; 
} else if ($operador == "/"){
    echo "a divisão de $n1 e $n2 é igual a =" . $n1 / $n2. "<br>"; 
}

echo "<br>";
echo "<br>";

$n1 = 2;
$n2 = 2;
$operador = "*";
$resul = 0;


echo "<br>";
echo "<br>";

/**
 * Exibir os numeros em ordem DECRESCENTE(Maior para Menor - DESC) de 10 - 0.
 *
 * Dica: utilizar laçoes de repetição(loops) FOR e WHILE
 *
 * Saída esperada: 10, 9, 8, 7, 6, 5, 4, 3, 2, 1, 0.
 */
$ne = 10; 
$ni = 0; 
 while ($ne > $ni)
{
     echo "numero descrecente=" . $ne. "<br>"; 
    $ne--;  
}

echo "<br>";
echo "<br>";

/**
 * Calcular o fatorial de um numero qualquer.
 * Ex.: calcular o fatorial de 5 (5!).
 *
 * Dica: 5 x 4 x 3 x 2 x 1. utilizar laçoes de repetição(loops) FOR e WHILE
 *
 * Saída esperada: o fatorial de 5 é: 120.
 */
$ne = 0; 
$calcu = 1;
$result = 0;

 for($ne = 5; $ne > $calcu; $ne--) {
    $result = $ne * $ne;
    echo "numero fatorial=" . $result. "<br>";
 }

/**
 * Com base no exercicio de:
 * Listar os 10 primeiros numeros pares com laçoes de repetição(loops) utilizando FOR e WHILE.
 *
 * Encontrar os 5 primeiros numeros Primos.
 *
 * Dica: Utilizar calculo dos pares, sendo que o unico primo par é o 2.
 *
 * Saída esperada: Os 5 primeiros Primos são: 3, 5, 7, 11, 13
 **/
