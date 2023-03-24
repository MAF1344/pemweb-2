<style>
 .formulir{
  justify-content: center;
  margin: auto;
  text-align: center;
  background-color: grey;
  width: 300px;
  height: 300px;
  margin-top: 150px;
  border-radius: 10px;
  box-shadow: 3px 3px 4px black;
 }

 #exampleInputEmail1{
  margin-top: 40%;
  margin-bottom: 15px;
 }
 #exampleInputPassword1{
  margin-bottom: 15px;
 }
</style>
<div class="formulir">
  <form action="" method="$_GET">  
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<?php 
ini_set('display_errors', 0);

if(isset($_GET['submit'])){
  $email = $_GET['email'];
  $password = $_GET['password'];

}
if($email == "admin@gmail.com" and $password == "admin"){
  echo "<script>window.open('home.php','_self')</script>";
}
else{
  echo "<script>window.alert('Akun tidak Terdaftar')</script>";
}
?>