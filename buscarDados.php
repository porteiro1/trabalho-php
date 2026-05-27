<html>
<body>
<?php 
      $hostname ="127.0.0.1";
      $user = "root";
      $password = "";
      $database = "time";

      $conexao = new mysqli($hostname,$user,$password,$database);
      //se conexao retorna errro?
      if($conexao -> connect_errno){
        echo "Failed to connect to MySQL: " .$conexao -> connect_errno;
        exit();
      }else{
      //evita caracteres especiais   "$conexao -> real_escape_string" é igual a se tal coisa estiver dentro da conexao aciona o comando
      $nome = $conexao -> real_escape_string($_POST['nome']);
      $sql = "select * from `jogador` where `nome` = '".$nome."';";
      $resultado = $conexao ->query($sql);
      
      if($resultado ->num_rows != 0){
        $row = $resultado -> fetch_array();
        $conexao -> close();
        echo "O nome do jogador é: $row[1]";
        echo "<br> O salario do jogador é: $row[3]";
        echo "<br> a posição é: $row[2]";
    
      }else{
        $conexao -> close();
        echo "nada econtrado";
      }
    }
      echo"<br> <a href ='index.php'> voltar</a>";
?>
</body>
</html>
