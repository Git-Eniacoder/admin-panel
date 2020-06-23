<div id="layoutSidenav_content">
<main>
   <div class="container-fluid">
      <h1 class="mt-4 mb-4">Admin Management</h1>
      <div class="container">
         <form action="" method="post">
            <div class="form-group">
               <label for="exampleFormControlInput1">Name</label>
               <input type="text" class="form-control" value="<?php echo $data['user_name']; ?>" name="name" placeholder="Name">
            </div>
            <div class="form-group">
            <label for="exampleFormControlInput1">User Name</label>
               <input type="text" class="form-control" value="<?php echo $data['user_uname']; ?>" name="user_name" placeholder="User Name">
            </div>
            <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
               <input type="email" class="form-control" value="<?php echo $data['user_email']; ?>" name="email" placeholder="Name@gmail.com">
            </div>
            <div class="form-group">
            <label for="exampleFormControlInput1">Old Password</label>
               <input type="password" class="form-control"  name="old_password" placeholder="Old Password">   
            </div>
            <div class="form-group">
            <label for="exampleFormControlInput1">New Password</label>
             <input type="password" class="form-control" name="new_password" placeholder="New Password">
             <?php  
               //  if($data['user_pass']) == $_POST['old_password'] )
               // {

               // }
               ?> 
            </div>
            <div class="form-group">
               <input type="submit" class="btn" value="Update">
            </div>
         </form>
      </div>
   </div>
</main>
<style>
h1{
    text-align:center;
  }
.btn{
   background-color:#ff5200;
   color:white;
}  
</style>