<?php 

require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM media WHERE id = {$id}" ;
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();

   $connect->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/styles1.css" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <title>Update Media</title>
</head>
<body>
    
<div class="container-fluid">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <!--<a class="navbar-brand" href="#">Andreas Pirkner</a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="create.php">Add Media</a>
        </li>
         <li class="nav-item">
            <a class="nav-link" href="">Follows</a>
        </li>
        </ul>
    </div>
    </nav><!--END NAV-->
    
   
    
    
    <div class="parallax_section1 parallax_image">
    </div><!--END PARALLAX-->
    
    

    
<div class="parallax_section2 parallax_image">
  <div class="row">
   
    <!--UPDATE DATA-->
    <div class="card border-dark">
      
      <h3>Update Media</h3>
      <hr>
        <fieldset>

   <form action="actions/a_update.php"  method="post">
       <table  cellspacing="0" cellpadding= "0">
           <tr>
               <th>Image</th>
               <td><input type="text"  name="image" placeholder ="img/filenumber.jpg" value="<?php echo $data['image'] ?>"  /></td>
           </tr>     
           <tr>
               <th>Title</th>
               <td><input type= "text" name="title"  placeholder="Title" value ="<?php echo $data['title'] ?>" /></td >
           </tr>
           <tr>
               <th>Publishing Date</th>
               <td><input type ="text" name= "p_date" placeholder= "JJJJ-MM-DD" value= "<?php echo $data['p_date'] ?>" /></td>
           </tr>
           <tr>
               <th>Media Type</th>
               <td><input type= "text" name="media_type"  placeholder="DVD, CD or Book" value ="<?php echo $data['media_type'] ?>" /></td >
           </tr>
           <tr>
               <th>Description</th>
               <td><input type ="text" name= "description" placeholder= "max. 70 characters" value= "<?php echo $data['description'] ?>" /></td>
           </tr>
           <tr>
               <th>ISBN</th>
               <td><input type ="text" name= "isbn" placeholder= "max. 2147483647!" value= "<?php echo $data['isbn'] ?>" /></td>
           </tr>
           <tr>
               <th>Author First Name</th>
               <td><input type ="text" name= "a_first_name" placeholder= "Author First Name" value= "<?php echo $data['a_first_name'] ?>" /></td>
           </tr>
           <tr>
               <th>Author Last Name</th>
               <td><input type ="text" name= "a_last_name" placeholder= "Author Last Name" value= "<?php echo $data['a_last_name'] ?>" /></td>
           </tr>
           <tr>
               <th>Publisher</th>
               <td><input type ="text" name= "publisher" placeholder= "Publisher" value= "<?php echo $data['publisher'] ?>" /></td>
           </tr>
           <tr>
               <th>Publisher Address</th>
               <td><input type ="text" name= "p_address" placeholder= "Insert City" value= "<?php echo $data['p_address'] ?>" /></td>
           </tr>
           <tr>
               <th>Publisher Type</th>
               <td><input type ="text" name= "p_type" placeholder= "Insert S, M or L" value= "<?php echo $data['p_type'] ?>" /></td>
           </tr>
           <tr>
               <th>Availability</th>
               <td><input type ="text" name= "availability" placeholder= "Insert 0, 1, 2..." value= "<?php echo $data['availability'] ?>" /></td>
           </tr> 
       </table>
       <hr>
       <input type= "hidden" name= "id" value= "<?php echo $data['id']?>" />
               <button class='btn btn-success border border-dark'  type= "submit">Save Changes</button >
               <a href= "index.php"><button class='btn btn-dark border border-dark' type="button">Back</button ></a >
   </form >

</fieldset >

      
    </div><!--END UPDATE DATA-->
    

    
  </div><!--END ROW-->
</div><!--END PARALLAX 2-->


  
  
<div class="parallax_section1 parallax_image">
</div><!--END PARALLAX-->


  
    
    
 


  
    

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <!--<a class="navbar-brand" href="#">Andreas Pirkner</a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="create.php">Add Media</a>
        </li>
         <li class="nav-item">
            <a class="nav-link" href="">Follows</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="mailto:andreas.pirkner@gmx.net" >Andreas Pirkner 2020</a>
        </li> 
        </ul>
    </div>
    </nav><!--END FOOTER-->
    
    
</div><!--END CONTAINER-->
 

   </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
</body>
</html>
<?php 
}
?>