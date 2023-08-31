<!DOCTYPE html>
<html>
    <?php
     session_start();?>
    <link rel="stylesheet" type="text/css" href= "devoir.css" />
        <title>beinvenu a l'autriche</title>
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
        function popup(id){
        document.getElementById(id).style.display="block";

        }
        function closepop(id){
        document.getElementById(id).style.display="none";
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

        <div class="stats">
            <h2>news</h2>
            
            <?php
                $conn = new mysqli("localhost", "root", "", "projet");
                if ($conn->connect_error) {
                die("Connection failed:" . $conn->connect_error);}
               $insert="select * from news";
                 $sql4 = $GLOBALS["conn"]->query($insert);
                 $tab4 = array();
                 while ($row_user4= $sql4->fetch_assoc())
                     $tab4[] = $row_user4;
                     
                echo '<table style=" border: 1px solid black;border-collapse: collapse;">
                     <tr style=" border: 1px solid black;border-collapse: collapse;"><td style=" border: 1px solid black;border-collapse: collapse;"> id  <td style=" border: 1px solid black;border-collapse: collapse;"> datepub  <td style=" border: 1px solid black;border-collapse: collapse;"> head  <td style=" border: 1px solid black;border-collapse: collapse;">
                     </tr>';
                     foreach($tab4 as $key => $value):
               echo '<td style=" border: 1px solid black;border-collapse: collapse;"> '.$value["id"] .'<td style=" border: 1px solid black;border-collapse: collapse;"> '.$value["datpub"] .'<td style=" border: 1px solid black;border-collapse: collapse;"> '.$value["head"].'<td style=" border: 1px solid black;border-collapse: collapse;"> </tr>';
                     endforeach;
                echo '   </table>';
             ?>
            <button onclick='popup("add")'> add</button>
            <button onclick='popup("delete")'> delete</button>
            <div id="add" > 
                            <button id="close" onclick="closepop('add')" style="background-color: #b11414;">&times;</button>
                            <h1> veuiller entrer votre nom et email</h1>
                            <form  name="quest1"  action="" method="post" >
                                <legend>headline:</legend>
                                <input type="text" name="head"><br>
                                <legend>lien:</legend>
                                <input type="text" name="lien"><br>
                                <legend>date:</legend>
                                <input type="date" name="date"><br>
                                <input type="submit"  name="add" value="add">
                            </form>
                            <?php
                           
                            
                                If(isset($_POST['add'])){add();}
                        
                                 function add(){
                                            $insert = "insert into news(head,lien,datpub) values ('" . $_POST['head'] . "','" . $_POST['lien'] . "','" . $_POST['date'] . "');";
                                            $GLOBALS["conn"]->query($insert);
                                            
                                    }
                            ?>
                        </div>
            <div id="delete"  > 
                            <button id="close" onclick="closepop('delete')" style="background-color: #b11414;">&times;</button>
                            <?php
                                echo"<form  name='quest2'  action='' method='post' >";
                            $count = 0;
                                while ($row_user4= $sql4->fetch_assoc())
                                    $tab4[] = $row_user4;
                                    
                                echo '<table style=" border: 1px solid black;border-collapse: collapse;">
                                    <tr style=" border: 1px solid black;border-collapse: collapse;"><td style=" border: 1px solid black;border-collapse: collapse;"><td style=" border: 1px solid black;border-collapse: collapse;"> id  <td style=" border: 1px solid black;border-collapse: collapse;"> datepub  <td style=" border: 1px solid black;border-collapse: collapse;"> head  <td style=" border: 1px solid black;border-collapse: collapse;">
                                    </tr>';
                                    foreach($tab4 as $key => $value):
                            echo '<td style=" border: 1px solid black;border-collapse: collapse;"><input type="radio" name="a'.$count.'" value="'.$value["id"] .'"><td style=" border: 1px solid black;border-collapse: collapse;"> '.$value["id"] .'<td style=" border: 1px solid black;border-collapse: collapse;"> '.$value["datpub"] .'<td style=" border: 1px solid black;border-collapse: collapse;"> '.$value["head"].'<td style=" border: 1px solid black;border-collapse: collapse;"> </tr>';
                                $count++;
                            endforeach;
                             echo '   </table>';
                            echo '<input type="submit" name="subt3" value="search"   onclick=""/> ';
                           
                            If(isset($_POST['delete'])){delete();}
                            function delete(){
                               
                                $conditions = "";
                                        for($i=0;$i<$GLOBALS["count"];$i++){
                                            
                                    if (isset($_POST["a" . $i]))
                                       { if($conditions=="")
                                        $conditions = $conditions."news.id = " . $_POST["a" . $i];
                                        else
                                        $conditions = $conditions." or news.id = " . $_POST["a" . $i];
                                        }}
                                       
                                    $insert = "delete from news where ".$conditions.";";
                                    $GLOBALS["conn"]->query($insert);
                                        }
                            ?>

                            
                           
                               
                        </div>
        </div>                
        <div class="stats">
             <h2>subscritions</h2>
            <?php
                $conn = new mysqli("localhost", "root", "", "projet");
                if ($conn->connect_error) {
                die("Connection failed:" . $conn->connect_error);}
               $insert="select * from newsletter";
                 $sql4 = $GLOBALS["conn"]->query($insert);
                 $tab4 = array();
                 while ($row_user4= $sql4->fetch_assoc())
                     $tab4[] = $row_user4;
                     
                echo '<table style=" border: 1px solid black;border-collapse: collapse;">
                     <tr style=" border: 1px solid black;border-collapse: collapse;"><td style=" border: 1px solid black;border-collapse: collapse;"> id  <td style=" border: 1px solid black;border-collapse: collapse;"> nom  <td style=" border: 1px solid black;border-collapse: collapse;"> email  <td style=" border: 1px solid black;border-collapse: collapse;">
                     </tr>';
                     foreach($tab4 as $key => $value):
               echo '<td style=" border: 1px solid black;border-collapse: collapse;"> '.$value["id"] .'<td style=" border: 1px solid black;border-collapse: collapse;"> '.$value["nom"] .'<td style=" border: 1px solid black;border-collapse: collapse;"> '.$value["email"].'<td style=" border: 1px solid black;border-collapse: collapse;"> </tr>';
                     endforeach;
                echo '   </table>';
            
             ?>
             
        </div>
        <div class="stats">
             <h2>message</h2>
            <?php
                $conn = new mysqli("localhost", "root", "", "projet");
                if ($conn->connect_error) {
                die("Connection failed:" . $conn->connect_error);}
               $insert="select * from message";
                 $sql4 = $GLOBALS["conn"]->query($insert);
                 $tab4 = array();
                 while ($row_user4= $sql4->fetch_assoc())
                     $tab4[] = $row_user4;
                     
                echo '<table style=" border: 1px solid black;border-collapse: collapse;">
                     <tr style=" border: 1px solid black;border-collapse: collapse;"><td style=" border: 1px solid black;border-collapse: collapse;"> id  <td style=" border: 1px solid black;border-collapse: collapse;"> nom  <td style=" border: 1px solid black;border-collapse: collapse;"> email  <td style=" border: 1px solid black;border-collapse: collapse;">message  <td style=" border: 1px solid black;border-collapse: collapse;">
                     </tr>';
                     foreach($tab4 as $key => $value):
               echo '<td style=" border: 1px solid black;border-collapse: collapse;"> '.$value["id"] .'<td style=" border: 1px solid black;border-collapse: collapse;"> '.$value["nom"] .'<td style=" border: 1px solid black;border-collapse: collapse;"> '.$value["email"].'<td style=" border: 1px solid black;border-collapse: collapse;"> '.$value["message"].'<td style=" border: 1px solid black;border-collapse: collapse;"> </tr>';
                     endforeach;
                echo '   </table>';
            
             ?>
             
        </div>
        </div>
   <footer>
    copyright XXXXXX 2022-2025
   </footer>
</body>
</html>