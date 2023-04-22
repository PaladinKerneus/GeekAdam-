<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="Logo">
                <h1 class="Geekadam_logo">GeekAdam</h1>

            </div>
            <div class="Navbar">
            <a href="main.php">Anasayfa</a>
                <a href="admin.php">Admin</a>
                <a href="yaziekle.php">Yeni Yazi</a>
            </div>
        </div>
    </div>

    <div class="container2">
        <div class="maintext">GeekAdam!</div>
        <div class="posts">
          
           <div class="kont">
            
             
             <?php
             
            
             
             
             
         $balganti= mysqli_connect('localhost','root','','blog');
             
             
      
             
                 $SQL = "SELECT * FROM giriler ORDER BY yazi_id DESC  LIMIT 3";
                 $ekle=mysqli_query($balganti,$SQL);
                 $fetch = mysqli_fetch_all($ekle);
                 foreach($fetch as $row){
                     echo "
                     <div class='kontent'>
                     <h1 class='post_baslik'>
                         $row[1]
                     </h1>
                     <p class='icerik'>$row[2]</p>
                     <p class='posttime'>$row[3] tarihinde paylasildi</p>
                     <p class='yazar'>'$row[4]'</p> 
                 </div>
                     ";
                 }
               
             
             
         
          
     ?>
           </div>
           
        </div>
    </div>
    <div class="footer">
        <div>
            <h1 class="telif">Telif hakki Mertcan Sanliya aittir</h1>
        </div>
    </div>
</body>
</html>