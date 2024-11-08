<?PHP
echo"<a href='./geradorRifa.php'>voltar</a>";

if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0 &&
    isset($_POST["premio"]) && isset($_POST["valor"]) &&
    isset($_POST["data"]) && isset($_POST["quant"]) ) {

    $premio = ucfirst($_POST["premio"]);
    
    $data = new DateTime();
    $data = new DateTime($_POST["data"]);
$dataString = $data->format('d/m/Y');
    $valor =  (float)$_POST["valor"];;
    $quant =  (int)$_POST["quant"];;

     // Caminho onde o arquivo será salvo (diretório de uploads)
     $diretorio_upload = 'uploads/';
    $erro =null;    
     // Garantir que o diretório exista
     if (!file_exists($diretorio_upload)) {
         mkdir($diretorio_upload, 0777, true);  // Cria o diretório se não existir
     }

     // Nome do arquivo enviado
     $nome_arquivo = $_FILES['imagem']['name'];

     // Caminho completo onde o arquivo será salvo
     $caminho_arquivo = $diretorio_upload . basename($nome_arquivo);

     // Verificar o tipo de arquivo (permitir apenas imagens)
     $tipos_permitidos = ['image/jpeg', 'image/png', 'image/gif'];

     // Verificar se o tipo MIME do arquivo enviado é permitido
     if (in_array($_FILES['imagem']['type'], $tipos_permitidos)) {

         // Mover o arquivo para o diretório de uploads
         if (move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho_arquivo)) {

         } else {
            $erro= "Erro ao mover o arquivo para o diretório de uploads.";
         }
     } else {
         $erro= "Somente arquivos de imagem (JPEG, PNG, GIF) são permitidos.";
     }

if($erro != "Somente arquivos de imagem (JPEG, PNG, GIF) são permitidos."){
echo"<main>";
  for($i=1;$i<=$quant;$i++){
echo"
<section>
<div id='pessoa'>
Nº rifa :".sprintf("%04d",$i)."
<br>
<br>
nome :<br>

<div id='linha'></div>
endereço :<br>

<div id='linha'></div>
Fone :<br>
<div id='linha'></div>

</div>
<div id='line'></div>
 <div id'premio'>
 
 <p>Ação entre amigos</p>
 <br>
premio : $premio <br>
valor : R$ ".number_format($valor, 2)." <br>
data : $dataString
</div>
<div style='display:flex;flex-direction: column;align-items: center'>
foto do premio :
<img style=' margin-left:10px;height:100px;width:100px' src='$caminho_arquivo' alt='a'>
</div>
</section>
<div id='tesoura'><div></div></div>
";
  }  
  echo" </main> <input type='submit' id='imprimir' name='imprimir' value='imprimir'placeholder='imprimir'>";
}else{
echo $erro;

}
} else {
    echo "deu ruim";
}

?>

<style>

section{
    padding: 10px;
    padding-left: 50px;
    padding-right: 50px;
    display: flex;
align-items: center;
    flex-direction: row;
    justify-content: space-evenly;
background-color: #f5f5f5;
color: black;

border: 2px solid;
border-radius: 30px;

}
input{
    margin-right: 50px;
    float:right;
    font-size: 20px;
    margin-top: 10px;
    padding: 20px;
    background-color: black;
    border: 2px solid gray;
    color: white;
    border-radius: 30px;
}

#linha{
    border: 2px,solid gray;
    width: 100px;
   background-color: aliceblue;
   height:10px; 
}
#line{
margin-right: 50px;
margin-left: 50px;
   border: 2px,solid gray;
   background-color: aliceblue;
   height:150px; 
}  a {
   
        font-size: 30px;
        background-color: rgb(100, 100, 100);
        color: aliceblue;
        padding: 5px;
        border-radius: 30px;
        text-decoration: none;

    
    }
    main{
        flex-direction: column;
        align-items: center;   

        justify-content: center;
        display: flex;
    }
    body{
   
        background-color: #212121;
    }
    #tesoura div{

        width: 100%;
        border: 2px dashed  gray;
    }
    #tesoura{
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f5f5f5;
        width: 530px;
        height: 10px;
    }

</style>