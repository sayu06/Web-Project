<?php
session_start();
if(!isset($_SESSION['User_'])){
    header('location:login.php');
}



$con=mysqli_connect('localhost',"root");
mysqli_select_db($con,"quiz");

if(isset($_POST['submit'])){
    if(!empty($_POST['quizcheck'])){
        $count=count($_POST['quizcheck']);
        // echo "Out of 10 you have selected ".$count." options";

        $result=0;
        $i=1;

        $selected=$_POST['quizcheck'];
        // print_r($selected);//  selected element id 
        echo "<br>";
        $q="select * from questions ";
        $query=mysqli_query($con,$q);

        while($rows=mysqli_fetch_array($query)){
            // print_r($rows['ans_id']);
            $checked=$rows['ans_id']==$selected[$i];

            if($checked){
                $result++;
            }
            $i++;
        }

        // echo "Your total score is ".$result;

    }
}
    $name=$_SESSION['User_'];
    $finalresult="insert into user(username,totalquestions,anscorrect) values('$name','10','$result')";
    $queryresult=mysqli_query($con,$finalresult);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container text-center">

    <br><br>
    <table class="table text-center table-borderd table-hover">
    <tr>
        <th colspan="2" class="bg-dark"><h1 class="text-white">result</h1></th>
    </tr>
    <tr>
        <td>Questions Attempted</td>
        <td>
        <!-- display attempted questions using php -->
        <?php
        echo "Out of 10 you have selected ".$count." options";
        ?>
    </td>
    </tr>

    

    <tr>
        <td>
            Your total score:
        </td>
        <td>
            <!-- display total score using php -->
            
            <?php
            echo "Your total score is ".$result;
            ?>
        </td>
    </tr>







    </table>
    </div>
    <form action="pdf.php" method="post">
        <input type="submit" name="btn_pdf" value="PDF" class="btn btn-success m-auto d-block">
    </form>
</body>
</html>