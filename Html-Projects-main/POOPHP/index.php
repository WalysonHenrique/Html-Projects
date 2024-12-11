<?php

include "Aluno.php";
include "Conn.php";

$objAluno = new Aluno("", 2, "");

//$objAluno->set_nome("Walyson");
//$objAluno->set_idade(21);

 echo $objAluno->get_nome() . ", voce possui " . $objAluno->get_idade() . "  Anos !";

$conn->close();

?>