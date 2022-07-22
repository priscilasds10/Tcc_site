

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
   
   <div class="login">
       <h1 class="text-center">Login</h1><br><br>
       
       <?php 
    //   if(isset($_SESSION['login'])){
    //       echo $_SESSION['login'];
    //       unset ($_SESSION['login']);
     //  }
       ?>
       
       
       <!--form ---->
       
       <form action="" method="post" class="text-center">
         <label> Nome:<br><br>
             <input type="text" name="username" placeholder="digite usuario ex:maria123">  </label> <br><br>
             
              <label> Usuario:<br><br>
             <input type="text" name="username" placeholder="digite usuario ex:maria123">  </label> <br><br>
     
                   <label>Senha: <br><br>
           <input type="password" name="password" placeholder="digite sua senha"></label>     <br>  <br>  
           
           <label >
               <input type="submit" name="submit" value="login" class="btn-primary"></label><br><br>  
           
       </form><br><br>
       
       <p class="text-center"><a href="../admin/cadastrar.php"> Cadastrar</a></p>
   </div>


</body>
</html>