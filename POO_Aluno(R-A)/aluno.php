<?PHP
Include 'aluno.class.php';

$aluno = new Aluno();
//$aluno2 = new Aluno();

$aluno->setNome("Cleiton");
$aluno->setMatricula(12345);
$aluno->setN1(5);
$aluno->setN2(6);
$aluno->setN3(7);


//$aluno2 -> setNome(Paulo);
//$aluno2 -> setMatricula(12455);
//$aluno2 -> setN1(8);
//$aluno2 -> setN2(9);
//$aluno2 -> setN3(10);

Echo "Nome: ".$aluno -> getNome()."<br>";
Echo "Matrícula: ".$aluno -> getMatricula()."<br>";
Echo "Nota 1: ".$aluno -> getN1()."<br>";
Echo "Nota 2: ".$aluno -> getN2()."<br>";
Echo "Nome: ".$aluno -> getN3()."<br>";

//Echo "Nome: ".$aluno2 -> getNome()."<br>";
//Echo "Matrícula: ".$aluno2 -> getMatricula()."<br>";
//Echo "Nota 1: ".$aluno2 -> getN1()."<br>";
//Echo "Nota 2: ".$aluno2 -> getN2()."<br>";
//Echo "Nome: ".$aluno2 -> getN3()."<br>";

echo "<br>". $aluno-> notaFinal($aluno->getN1(), $aluno->getN2(), $aluno->getN3())."<br>";

$aluno2 = new Aluno();


$aluno2 -> setNome("Paulo");
$aluno2 -> setMatricula(12455);
$aluno2 -> setN1(8);
$aluno2 -> setN2(9);
$aluno2 -> setN3(10);

Echo "Nome: ".$aluno2 -> getNome()."<br>";
Echo "Matrícula: ".$aluno2 -> getMatricula()."<br>";
Echo "Nota 1: ".$aluno2 -> getN1()."<br>";
Echo "Nota 2: ".$aluno2 -> getN2()."<br>";
Echo "Nome: ".$aluno2 -> getN3()."<br>";

echo "". $aluno2-> notaFinal($aluno2->getN1(), $aluno2->getN2(), $aluno2->getN3());
?>