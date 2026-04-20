<?php

// =====================================
// 📘 INTRODUÇÃO AO PHP
// =====================================

// PHP é uma linguagem de back-end (roda no servidor)

// =====================================
// 📌 VARIÁVEIS
// =====================================

$nome = "Rafa";     
$idade = 21;        
$altura = 1.70;     
$ativo = true;      


// =====================================
// 📌 EXIBINDO DADOS
// =====================================

echo "Nome: $nome <br>";
echo "Idade: $idade <br>";
echo "Altura: $altura <br>";


// 👉 ATIVIDADE:
// Mostrar uma frase completa com seus dados


echo "<br><br>";


// =====================================
// 📌 OPERAÇÕES MATEMÁTICAS
// =====================================

$valor1 = 10;
$valor2 = 5;

$soma = $valor1 + $valor2;
$sub = $valor1 - $valor2;
$mult = $valor1 * $valor2;
$div = $valor1 / $valor2;

echo "Soma: $soma <br>";
echo "Subtração: $sub <br>";
echo "Multiplicação: $mult <br>";
echo "Divisão: $div <br>";


// 👉 ATIVIDADE:
// Usar uma variável $resultado para todas operações


echo "<br><br>";


// =====================================
// 📌 CONDICIONAL (IF / ELSE)
// =====================================

$nota = 7;

if ($nota >= 7){
    echo "Aprovado <br>";
} else {
    echo "Reprovado <br>";
}


// 👉 ATIVIDADE:
// Criar sistema com aprovação, recuperação e reprovação


echo "<br><br>";


// =====================================
// 📌 LOOP FOR
// =====================================

for ($i = 0; $i <= 5; $i++){
    echo "Número: $i <br>";
}


// 👉 ATIVIDADE:
// Fazer uma tabuada


echo "<br><br>";


// =====================================
// 📌 LOOP WHILE
// =====================================

$contador = 0;

while ($contador <= 5){
    echo "Contador: $contador <br>";
    $contador++;
}


// 👉 ATIVIDADE:
// Mostrar números pares até 20


echo "<br><br>";


// =====================================
// 📌 LOOP DO WHILE
// =====================================

$numero = 0;

do {
    echo "Valor: $numero <br>";
    $numero++;
} while ($numero <= 5);


// 👉 ATIVIDADE:
// Contagem regressiva de 10 até 0


echo "<br><br>";


// =====================================
// 📌 EXERCÍCIO: MÉDIA
// =====================================

$nota1 = 8;
$nota2 = 7;
$nota3 = 6;

$media = ($nota1 + $nota2 + $nota3) / 3;

echo "Média: $media <br>";


// 👉 ATIVIDADE:
// Mostrar se o aluno foi aprovado


echo "<br><br>";


// =====================================
// 📌 EXERCÍCIO: IMC
// =====================================

$peso = 65;
$altura = 1.70;

$imc = $peso / ($altura * $altura);

echo "IMC: $imc <br>";


// 👉 ATIVIDADE:
// Classificar IMC


echo "<br><br>";


// =====================================
// 📌 CALCULADORA (IF)
// =====================================

$n1 = 10;
$n2 = 2;
$operador = "+";
$resultado = 0;

if ($operador == "+"){
    $resultado = $n1 + $n2;
} else if ($operador == "-"){
    $resultado = $n1 - $n2;
} else if ($operador == "*"){
    $resultado = $n1 * $n2;
} else if ($operador == "/"){
    $resultado = $n1 / $n2;
}

echo "Resultado: $resultado <br>";


// 👉 ATIVIDADE:
// Fazer com SWITCH


echo "<br><br>";


// =====================================
// 🧠 EXERCÍCIOS (SEUS ORIGINAIS)
// =====================================


// 1️⃣ Calcular IMC e mostrar valores utilizados
// Saída esperada: O IMC é: X


// 2️⃣ Calcular quantos segundos existem em 2 horas e 30 minutos
// Dica: converter tudo para segundos
// Saída esperada: 9000


// 3️⃣ Simular uma calculadora com:
// IF / ELSE e SWITCH
// Operadores: + - * /


// 4️⃣ Exibir números em ordem DECRESCENTE (10 até 0)


// 5️⃣ Calcular o fatorial de um número
// Ex: 5! = 5 × 4 × 3 × 2 × 1 = 120


// 6️⃣ Mostrar:
// - 10 primeiros números pares
// - 5 primeiros números primos
