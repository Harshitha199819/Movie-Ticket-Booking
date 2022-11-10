<!DOCTYPE html>
<html>
    <head>
        <title>STORED PROCEDURE</title>
        <link rel="stylesheet" href="css/table.css" type="text/css" />
        <style type="text/css">
  form {
    border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #82172B;
   
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
    opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #D9D9F3;
}

/* Center the avatar image inside this container */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
    width: 20%;
    border-radius: 20%;
    float: center;
}

/* Add padding to containers */
.container {
    padding: 6px;
    float: center;
}

/* The "Forgot password" text */
span.psw {
    float: left;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
        display: block;
        float: none;
    }
    .cancelbtn {
        width: 100%;
    }
}
h2{
font-family: "Snell Roundhand", cursive;}
body{
    color:#cc0066;
    font-size: 250%;
}
</style>
    </head>
    <body background="ct.jpg" >
        <?php
        require_once 'config.php';
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=movie", "root", "");
            // execute the stored procedure
            $sql = 'CALL moviedetail()';
            // call the stored procedure
            $q = $pdo->query($sql);
            $q->setFetchMode(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Error occurred:" . $e->getMessage());
        }
        ?>
        <center>
        <table>
          <tr>
               <h1>  <th>Actor     </th>
                <h1><th>Director  </th>
                <h1><th>Movie name</th>
            </tr>
            <?php while ($r = $q->fetch()): ?>
             <tr>
                    
                        <h1><td style='width:350px;border:3px solid #800000;'><?php echo $r['actor'] ?></td></h1>
                         <h1><td style='width:350px;border:3px solid #800000;'><?php echo $r['director'] ?></td></h1>
                         <h1><td style='width:350px;border:3px solid #800000;'><?php echo $r['description'] ?></td></h1>
                   
                    
                    </td>
                </tr>

            <?php endwhile; ?>
        </table>
</center>
    </body>
</html>
