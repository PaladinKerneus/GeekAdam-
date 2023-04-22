

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styleyeni.css">
    <title>Document</title>
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
            <?php
        
       
        
        
        if(isset($_POST["gonder"])){
            $balganti= mysqli_connect('localhost','root','','blog');
            $baslik = $_POST["baslik"];
            $aciklama = $_POST["bilgi"];
            $link= $_POST["link"];
         
            echo "Selam";

            if (empty($baslik) || empty($aciklama) ){
                echo '<p>Lütfen Alani Doldurnuz </p>';
                
            }
            else {
                $SQL = "INSERT INTO giriler( yazi_baslik, yazi_aciklama,yazi_link) VALUES ('$baslik',' $aciklama' ,'$link')";
                $ekle=mysqli_query($balganti,$SQL);
                if ($ekle){
                    echo '<p> Basariyla eklendi! </p>';
                     
                    mysqli_close($balganti);

                }
                else {
                    echo("Error description: " . mysqli_error($balganti));
                    
                }
            }
            
        }
         
?>
 
            <div class="col-lg-6 text-righ">
                <a href="main.php" class="menu">Siteyi Gör</a>
                <a href="admin.php" class="menu">Yazilar</a>
                <a href="yazıekle.php" class="menu">Yazi ekle</a>
            </div>

        </div>
    </div>
    <div class="container2">
        <div class="row">
                <div class="col-lg-12 mt-5 mb-5">
                     
                    <form action="" method="post">
                        <strong>Başlik:
                        </strong>
                        <input type="text" name="baslik" id="" class="form-control">
                        <strong>yazar :
                        </strong>
                        <input type="text" name="link" id="" class="form-control">
                        <br> <br>
                        <h1>İcerik</h1>
                        
                       <textarea name="bilgi" id="" cols="60" rows="30" class="texts"></textarea>
                        
                        <br>
                        
                        <input type="submit" name="gonder" value="gonder" class="buton">
                    </form>
                    
                </div>
        </div>

        <div class="footer">
        <div>
            <h1 class="telif">Telif hakki Mertcan Sanliya aittir</h1>
        </div>
    </div>
   
</body>
</html>
