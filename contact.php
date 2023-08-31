<!DOCTYPE html>
<html>
    <link rel="stylesheet" type="text/css" href= "devoir.css" />
        <title>beinvenu a l'autriche</title>
        <?php
        session_start();
        $conn = new mysqli("localhost", "root", "", "projet");
        if ($conn->connect_error) {
        die("Connection failed:" . $conn->connect_error);}?>
        <link rel = "icon" src = 
        "resource/drapeau.png" 
                type = "image/png">
         <meta charset="utf-8" />
       <script>
        function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        }
        
        function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        }
        </script>


   
    <body>
            <table class="head" style=" width :100%;">
            <td ><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; menu</span></td>
            <td style="width : 700px;"></td>
            <td><a class="head-button" href="acueil.php"> accueil</a></td>
            <td><a class="head-button" href="plan.html"> plan de site</a></td>
            <td><a class="head-button" href="who_are_we.html"> qui somme nous?</a ></td>
            <td><a class="head-button" href="contact.php"> contact</a></td>
        </table>   
        <h3 style="font-size: 300%;"> si vous avez des questions,<br><span style="margin-left: 200px;"> veuillez nous contacter:</span></h3>
        <div class="contact">
          <form name="acc" method="post">
                <label style="font-size: 40px;" for="name">name:</label>
           <br>
                <input class="emailbox" type="text" name="name" placeholder="name">
           <br>
                <label style="font-size: 40px;" for="emailbox">email:</label>
           <br>
                <input class="emailbox" type="text" name="emailBox" placeholder="your email adress here">
           <br>
                <label  style="font-size: 40px;" for="msgbox">votre message:</label>
           <br>
                <input class="msgbox"  name="msgBox" placeholder="votre message/commentaire" style="height: 100px; width:400px " aria-rowspan="10"></input>
           <br>
           <br>
                <input class="submit" type="submit" name="envoyer">
          <form>
        </div>
        <?php
                                If(isset($_POST['envoyer'])){addd();}
                                 function addd(){
                                            $insert = "insert into message (nom,email,message) values ('" . $_POST['name'] . "','" . $_POST['emailBox'] . "','" . $_POST['msgBox'] . "');";
                                            $GLOBALS["conn"]->query($insert);
                                    }
                            ?>
   <footer>
    copyright XXXXXX 2022-2025
   </footer>
</body>
</html>