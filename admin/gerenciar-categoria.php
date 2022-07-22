<?php
include('parciais/menu.php')
?>

     <!--menu content começa aqui-->
     <div class="main-content">
       <div class="linha">
   
       <h1>Gerenciar Categoria</h1>
       <br>

<a href="add.categoria.php" class="btn-primary">Add Categoria</a>
<br><br><br>

<table class="tbl-full">
      <th>S.N.</th>
      <th>Nome</th>
      <th>Usuario</th>
      <th>Ações</th>

      <tr>
        <td>1. </td>
        <td>Priscila</td>
        <td>pri.ssant</td>
        <td> 
        <a href="" class="btn-secundario">Update </a> 
        <a href="" class="btn-danger">Delete </a> 
       
        </td>
      </tr>
      <tr>

        <td>2. </td>
        <td>Daniel</td>
        <td>daniel.couve</td>
        <td> 
        <a href="" class="btn-secundario">Update </a> 
        <a href="" class="btn-danger">Delete </a> 
       
       
        </td>
      </tr>

      <tr>
        <td>3. </td>
        <td>Igor</td>
        <td>igor.bcouve</td>
        <td> 
        <a href="" class="btn-secundario">Update </a> 
        <a href="" class="btn-danger">Delete </a> 
       
        </td>
      </tr>
      <tr>
        <td>4. </td>
        <td>Ramon</td>
        <td>Ramon.Cibas</td>
        <td> 
        <a href="" class="btn-secundario">Update </a> 
        <a href="" class="btn-danger">Delete </a> 
       
        </td>
      </tr>

</table>

            <div class="clearfix"></div>

          </div>
     </div>
    <!--menu content termina aqui-->
    <!--rodape aqui-->
    <?php 
include('parciais/footer.php');
?>