<?php
include('parciais/menu.php');
?>
<div class="main-content">
    <div class="linha">
        <h1>Adicionar adiministrador</h1>
<br><br>
        <form action="" method="POST">

        <table class="tbl-30">
          <tr>
           <td> Nome:</td>
            <td><input type="text" name="nome" placeholder="ex: maria das couves"></td>
            </tr>
       
            <tr>
           <td> Usuario:</td>
            <td><input type="text" name="usuario" placeholder="ex: mari.couves36"></td>
            </tr>
            <tr>

           <td> senha:</td>
            <td><input type="password" name="password" placeholder="digite sua senha ex:***1259"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" nome="submit" value="Adicionar Admin" class="btn-secundario">
                </td>
            </tr>
       
        </table>


        </form>
    </div>
</div>


<?php
include('parciais/footer.php');
?>

<?php
//grava database pelo form
if(isset($_POST['submit']));
$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$password = md5($_POST['password']);

//2. sql quary para salvar no banco
$sql = "INSERT INTO tb_admin SET nome = '$nome',usuario ='$usuario',password = '$password'";
//3. execura quary e salva no banco
$res = mysqli_quary($conn,$sql) or die(mysqli_error());//database conexao

//4

if($res==TRUE){
   // echo "sucesso"
    $_SESSION['add' ] = "<div class='success'>SUCESSO</div>";
        header("location:".SITEURL.'admin/add-admin.php')
else{
    //echo "falha";
    $_SESSION['add'] = "<div class='erro'>Falha</div>";
    header("location:".SITEURL.'admin/add-admin.php')

}

?>