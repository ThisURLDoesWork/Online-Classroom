<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #339;
}

li {
  float: left
  ;
}

li a {
  display: block;
  color: white ;
  text-align: center;
  padding: 44px 26px;
  text-decoration: none;
  font-size: 28px;
}

li a:hover {
  background-color: green;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 70%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body style="background-color:pink;">

<ul>
  <li><a class="active" href="joinclass-arjav.html">Join class</a></li>
  <li><a href="classshelf-arjav.html">Class shelf</a></li>
  <li><a href="viewassignments-rohan.html">Class work</a></li>
  <li><a href="#">Grades</a></li>
</ul>
<center><h2>VIEW YOUR ASSIGNMENTS</h2>

<table>
  <tr>
    <th>ASSIGNMENT NAME</th>
    <th>CLASS NAME</th>
    <th>STATUS</th>
    <th>LINKS</th>
  </tr>
  <tr>
    <td>ASSIGNMENT 1</td>
    <td>Classroom 1</td>
    <td>BLAAANK</td>
    <td><form method="post" action="viewassignments-rohan.php" enctype="multipart/form-data">
    <label>File Upload</label>
    <input type="File" name="file">
    <button type="submit" name="submit">
  </form></td>
  </tr>
  <?php
  include'db.php';
  if(isset($_POST['submit']))
{    
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 
 move_uploaded_file($file_loc,$folder.$file);
 $sql="INSERT INTO assignment(file) VALUES('$file')";
 mysqli_query($connection,$sql); 
 if(mysqli_query($connection,$sql)){
 
     echo "File Sucessfully uploaded";
     }
     else{
         echo "Error";
     }
}
?>
<?php
// if (isset($_POST["submit"]))
//  {
//      #retrieve file title
//         $title = $_POST["title"];
     
//     #file name with a random number so that similar dont get replaced
//      $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
 
//     #temporary file name to store file
//     $tname = $_FILES["file"]["tmp_name"];
   
//      #upload directory path
// $uploads_dir = 'images';
//     #TO move the uploaded file to specific location
//     move_uploaded_file($tname, $uploads_dir.'/'.$pname);
 
//     #sql query to insert into database
//     $sql = "INSERT into assignment(assignname,file) VALUES('$title','$pname')";
 
//    
//}
  ?>
  
</table>
</center>
</body>
</html>