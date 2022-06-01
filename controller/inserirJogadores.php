

<?php
extract($_REQUEST,EXTR_OVERWRITE);


  if(inserirJogo($conn,$nome,$email,$fone)){
echo("Os dados foram cadastrados com sucesso");

  }else{
echo("Não foi possível cadastrar seu sdados. Por favor revise seus dados");
  }

 
?>