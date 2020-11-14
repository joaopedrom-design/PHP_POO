<?PHP
 Class Aluno {
        Private $nome;
        Private $matricula;
        Private $n1;
        Private $n2;
        Private $n3; // nota trab

// GET
Public function getNome(){
 Return $this-> nome;
}

Public function getMatricula(){
 Return $this-> matricula;
}

Public function getN1(){
 Return $this-> n1;
}

Public function getN2(){
 Return $this-> n2;
}

Public function getN3(){
 Return $this-> n3;
}

// SET
Public function setNome($nome){
 $this-> nome = $nome ;
}

Public function setMatricula($matricula){
 $this-> matricula = $matricula ;
}

Public function setN1($Nota){
 $this-> n1 = $Nota ;
}

Public function setN2($Nota){
 $this-> n2 = $Nota ;
}

Public function setN3($Nota){
 $this-> n3 = $Nota ;
}

// Métodos
Public function notaFinal ($n1, $n2,$n3){
$notaFinal = ($n1 * 3.5) +
($n2 * 3.5) + ($n3 * 3);

if($notaFinal >= 70){
echo "VOCÊ FOI APROVADO, sua nota foi: ". $notaFinal;
}
else if($notaFinal<70) {
echo "VOCÊ FOI REPROVADO, sua nota foi: ". $notaFinal;
}

else{
Echo"Digite números reais!!! ";
}


}

}

?>