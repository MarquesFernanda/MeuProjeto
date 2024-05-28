<?php
define("INFERIOR",1);
define("SUPERIOR",100);

$numero = rand(INFERIOR, SUPERIOR);
echo "Meu numero da sorte: <br>";
echo $numero."<br>";
?>
<?php
$x = 5; //Ambito global

function meuTeste () {
    echo "<p>A variavel x dentro da função é: $x</p><br>";
    }
    //Ambito local
         meuTeste ();
    echo "<p>A variavel x dentro da função é: $x</p><br>";
   
?>

<?php
$x = 5;
$y = 10;
function numero(){
    global $x, $y;
    $y= $x + $y;
    }
numero();
echo $y;
?>

<?php
//ambito estatico
function teste(){
        static $x = 0;
        echo $x;
        $x++;
    }
echo "<br>";
echo "<br>";
teste();
echo "<br>";
teste();
echo "<br>";
teste();

?>

<?php
echo "<br>Fernanda";
print "<br>Fernanda<br><br>";
?>

<?php
$x = 5;
var_dump($x);
echo "<br>";
?>

<?php
$x = 'Minha string';
$y = "Minha string 2!";
var_dump($x);
echo "<br>";
var_dump($y);
echo "<br>";
?>

<?php
$x = 3.14;
var_dump($x);
echo "<br>";
?>

<?php
$x = true;
var_dump($x);
echo "<br>";
?>

<?php
$cars =array("BMW","BYD","AUDI");
var_dump($cars);
echo "<br>";
?>

<?php
echo "<br>";
echo strlen("Olá Mundo!")
?>

<?php
echo "<br>";
echo str_word_count('Olá mundo!')
?>

<?php
echo "<br>";
echo strpos("Novo Bravo Mundo", "Iron Maiden")
?>

<?php
$x = "Ola mundo!";
echo strtoupper($x);
?>

<?php
$x = "Novo Teste";
echo strtolower ($x);
?>

<?php
$x = "Meu Teste";
echo "<br>";
echo str_replace ("Teste", "Arquivo", $x);
?>

<?php
$x = "Meu Teste";
echo "<br>";
echo strrev ($x);
?>

<?php
echo "<br>";
$x = "Meu Teste";
echo trim($x);
?>

<?php
echo "<br>";
echo "<input value='" . $x . "'>";
echo "<br>";
echo "<input value='" . trim($x) . "'>";
?>

<?php
$x = "Meu ";
$y = "Teste";
$z= $x . $y;
echo "<br>";
echo $z;
?>

<?php 
$x = "Fernanda ";
$y = "Marques ";
$p = "Pereira";
$w = $x . $y . $p;
echo "<br>";
echo $w;
?> 

<?php 
$x = "Meu Teste";
echo "<br>";
echo substr($x, 3);
?>

<?php 
//<--*Caracteres de escape*-->
//\' Single Quote
//\" Double Quote 
//\$ PHP variables
//\n New Line 
//\r Carriage Return
//\t Tab
//\f Form Feed
//\ooo Octal Value 
//\xhh Hex Value
 
$x = "Somos os chamados \"Vikings\" do norte";
echo $x;
?>

<?php 
$a = 5;
$b = 5.34;
$c = "25";
$y = 1.9e411;
echo "<br>";
var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
var_dump($y);
echo "<br>";
?>

<?php 
//verifique se o tipo de uma var é inteiro
$x = 9685;
var_dump(is_int($x));
echo "<br>";
//verificar novamente
$x = 3.14;
var_dump(is_int($x));
echo "<br>";
$x = 10.123;
var_dump(is_float($x));
echo "<br>";
$x = 1.9e411;
var_dump(is_infinite($x));
echo "<br>";
echo "<br>";
?>

<?php 
$x = 25.232;
var_dump(is_string($x));
echo "<br>";
$x = 5489;
var_dump(is_string($x));
echo "<br>";
$x = "Meu Teste";
var_dump(is_string($x));
echo "<br>";
$x = 12.5e896;
var_dump(is_string($x));
echo "<br>";
?>

<?php 
//Converter float para inteiro
echo "<br>";
$x = 120.45075;
$int_cast = (int)$x;
echo $int_cast;
echo "<br>";
echo "<br>";
?>

<?php 
$octeto = 172;
$mascara = 248;
$valor = $octeto & $mascara;
echo "<br> Aplicando a operacao AND entre a máscara  e octeto com valor $valor";
?>

<?php 
$valor = 20;
if ($valor == 15){ //testa se a variável valor é igual a 15
	echo "<br> Valor é 15";
}
elseif ($valor >= 10){
	echo "<br>Valor é maior ou igual a 10";
}
else {
	echo "<br>Valor é menor que 10";
}
?>

<?php 
echo "<br>";
$v = "Fabio";
$nome = $v . " dos Reis";
echo $nome;
?>

<?php 
$valor = 10;
if ($valor === "10") {
	echo "Valor é string";
}
else {
	echo "Valor não é string";
}
echo "<br><br>";
echo "Agora, fazendo cast no valor atribuído a varável: <br>";
$valor = (string)10;
if ($valor === "10") {
	echo "Valor é string";
}
else {
	echo "Valor não é string";
}
?>

<?php 
$a = 10;
$b = 20;
echo ($a == 10) && ($b == 20);
echo "<br>";
if (($a == 10) && ($b == 20)) {
	echo "Ambos os valores estão corretos <br>";
}
if (($a == 20) && ($b == 10)) {
	echo "Um dos valores está correto <br>";
}
if (($a == 10) && ($b == 10)) {
	echo "Um dos valores está errado <br>";
}
?>

<?php 
$a = 3 + 5 * 4;
$b = (3 + 5) * 4;
echo "<br>";
echo "O valor da primeira conta é ", $a;
echo "<br>";
echo "O valor da segunda conta é ", $b;
?>

<?php 
$a = 10;
$b = 9;
$c = 5;
$resultado = ($a+$b+$c)/3;
echo "<br>";
echo "A média é : $resultado";
echo "<br>";
?>

<?php 
$n1 = 5;
$n2 = 4;
$n3 = 3;
$resultado = ($n1+$n2+$n3)/3;
if ($resultado >= 7) {
	echo "<br>";
	echo "A média é $resultado, o aluno está aprovado.";
}
else {
	echo "<br>";
	echo " A média é $resultado, o aluno está reprovado.";
}
?>

<?php 
$nota1 = 5;
$nota2 = 4;
$nota3 = 5;
$nota4 = 3;
$resultado = ($nota1+$nota2+$nota3+$nota4)/4;

if (($resultado >= 7) && ($resultado != 10)) {
	$mensagem = 'O aluno foi aprovado.';
	echo "<br>";
	echo "A média foi $resultado. $mensagem ";
}
elseif ($resultado == 0) {
	$mensagem = 'Estude mais, você não acertou nada.';
	echo "<br><br>";
	echo "A média foi $resultado. $mensagem ";
}
elseif ($resultado == 10) {
	$mensagem = 'Parabéns! Aprovado com nota máxima';
	echo "<br><br>";
	echo "A média foi $resultado. $mensagem ";
}
else {
	$mensagem = 'O aluno foi reprovado.';
	echo "<br><br>";
	echo "A média foi $resultado. $mensagem";
}
?>