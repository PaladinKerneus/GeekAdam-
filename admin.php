
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styleadmin.css">
</head>
<body>
<div  >
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
        <div class="row">
                <div class="">
                     <table class="tablo">
                     <?php
        
       
        
        
        
        $balganti= mysqli_connect('localhost','root','','blog');
        
        

        
            $SQL = "SELECT * FROM `giriler`ORDER BY yazi_id DESC";
            $ekle=mysqli_query($balganti,$SQL);
            $fetch = mysqli_fetch_all($ekle);
            foreach($fetch as $row){
                echo "
                <tr>
                <td>
                <a class='veriler' href='yazi.php?link=$row[4]'  target='_blank'>'$row[1]'</a>
                
                
                </td>
                <td>'$row[3]'</td>
            </tr>
                ";
            }
          
        
        
    
     
?>
                     </table>
                </div>
        </div>
        
    </div>

 
    </div>
</body>
</html>
