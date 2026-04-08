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




echo "<br>";
echo "<br>";
 

foreach ()
{

}