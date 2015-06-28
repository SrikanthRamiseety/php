<?php include'header.php'; ?>
<br>
<br>
<style>
 th{
 background-color:aqua;
 }
</style>
<!DOCTYPE html>
<html lang="en">
  <head>
  </head>
  <body>
  
 
     <div class="row">
     <div class="col-md-2">
     &nbsp;&nbsp;
     <a href="http://localhost:82/login_signup/index.php/User/index">LandingPage</a>
     </div>
     <div class="col-md-8">
    <table class="table table-bordered">
     <tr>
     <th><strong>Id</strong></th>
      <th><strong>FirstName</strong></th>
      <th><strong>LastName</strong></th>
       <th><strong>Email</strong></th>
        <th><strong>Mobile</strong></th>
         <th><strong>Edit</strong></th>
          <th><strong>Delete</strong></th>
    </tr>
     <?php foreach($contact as $post){?>
     <tr>
     <td><?php echo $post->id?></td>
         <td><?php echo $post->firstname?></td>
         <td><?php echo $post->lastname?></td>
          <td><?php echo $post->emailad?></td>
           <td><?php echo $post->mobile?></td>
           <td><a href="http://localhost:82/login_signup/index.php/User/edit?id=<?php echo $post->id?>" class="btn btn-sx btn-info">Edit</a>
           <td><a href="http://localhost:82/login_signup/index.php/User/delete?id=<?php echo $post->id?>"" class="btn btn-sx btn-danger">Delete</button>
      </tr>    
     <?php }?>  
   </table>
 </div>
 </div>
  </body>
</html>
 