 
<div class="container my-3 my-3">
    <table border="1" class="table">
       <thead class="table-dark">
           <tr>  
            <td>Name</td>  
            <td>E-mail</td>
            <td>Address</td>
            <td>Action</td>
         </tr> 
       </thead> 
       <tbody>
           <?php  
         foreach ($info->result() as $row)  
         {  
             ?><tr>
              <?php $id= $row->id;?>
            <td><?php echo $row->name;?></td>  
            <td><?php echo $row->email;?></td> 
            <td><?php echo $row->address;?></td> 
            <td><a href="<?= base_url("site/edit/{$id}") ?>"><button>edit</button></a>
            <a href="<?= base_url("site/delete/{$id}") ?>"><button>delete</button></a></td>
            </tr>  
         <?php }  
         ?>  
       </tbody> 
  </table>  

</div>
