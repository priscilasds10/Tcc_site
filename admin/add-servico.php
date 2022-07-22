<?php
include('parciais/menu.php')?>

<div class="main-content">
<div class="linha">
<h1>Adicionar Serviço</h1>

<br><br>

<!-- Adicionar form--------->

<form action="" method="post" >
    
      <table class="tbl-30 ">
          <tr>
              <td>Titulo:</td>
              <td>
                  <input type="text" name="title" placeholder="Categoriatitulo">
              </td>
          </tr>
          
          <tr>
              <td>Descrição:   </td>
              <td>
                  <textarea type="description" 
                            cols="30" rows="5" placeholder="Descriçao do serviço" ></textarea>
              </td>
          </tr>
          
          <tr>
               <td>Preço:  </td>
               <td>
                   <input type="number" name="preco">
               </td>
               
          </tr>
          
          <!---- arrumar----->
            <tr>
              <td>Imagem:  </td>
              <td>
                  <input type="file" name="imagem" >
              </td>
          </tr>
          
          <tr>
             <td>Categoria:  </td>
              <td>
                  <select name="Categoria">
                      <option value="1">Analse de Sistemas</option>  <option value="2">Manutenção</option>
                      <option value="3">Redes</option><option value="4">Programação</option>
                  </select>
              </td>
          </tr>
          
          
            <tr>
              <td>Ativo:  </td>
              <td>
                  <input type="radio" name="radio" value="Sim"> Sim
                  <input type="radio" name="radio" value="Não"> Não 
              </td>
          </tr>
            <tr>
              <td colspan="2">
                  <input type="submit" name="submit" value="Adicionar Serviço" class="btn-secundario">
              </td>
          </tr>
          
      </table>
    
    
    
    
    
    
</form>




</div>
</div>


<?php include('parciais/footer.php');?>