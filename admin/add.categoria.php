<?php
include('parciais/menu.php')?>

<div class="main-content">
<div class="linha">
<h1>Adicionar categoria</h1>

<br><br>

<!-- Adicionar form--------->

<form action="" method="post">
    
      <table class="tbl-30">
          <tr>
              <td>Titulo:</td>
              <td>
                  <input type="text" name="title" placeholder="Categoriatitulo">
              </td>
          </tr>
          
          <!---- arrumar----->
            <tr>
              <td>Imagem:</td>
              <td>
                  <input type="file" name="imagem" >
              </td>
          </tr>
          
          
            <tr>
              <td>Ativo:</td>
              <td>
                  <input type="radio" name="radio" value="Sim"> Sim
                  <input type="radio" name="radio" value="Não"> Não 
              </td>
          </tr>
            <tr>
              <td colspan="2">
                  <input type="submit" name="submit" value="Adicionar Categoria" class="btn-secundario">
              </td>
          </tr>
          
      </table>
    
    
    
    
    
    
</form>



<?php
   // if(isset($_POST['submit']))
   // {
        //pega valor 
     //   $tiltulo = $_POST['titulo'];
        
      //    if(isset($_POST['text'])){
     //       $imagem = $POST['imagem'];
      ///  }
        
       // if(isset($_POST['ativo'])){
      //      $ativo = $POST['ativo'];
       // }
     //   else {
         //   $ativo = "nao";
        //}

//cria sql query para inserir categoria
    //$sql ="INSERT INTO nomedatabela SET 
    //title='$titulo',
    //imagem = '$imagem',
    //ativo = '$ativo'";
//}
    //executa query e salva no banco
//$res = mysqli_query($conn,$sql);

//checa que add
//if($res==true){
//$_SESSION['add'] ="<div class='success'>Sucesso</div>";

   // header("location:".SITEURL.'admin/add-categoria.php');
//}
//else{
  //  $_SESSION['add']"<div class='erro'>Falha</div>";
    
     //header("location:".SITEURL.'admin/add-categoria.php');
//}
?>



</div>
</div>


<?php include('parciais/footer.php');?>