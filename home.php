<?php


$con = mysqli_connect('localhost', "root");
mysqli_select_db($con, "cpp");


?>
<html>

<head>

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

    <div class="container">

        <br>
        <h1 class="text-center text-primary"></h1>
        <!-- <h2 class="text-center text-success">Welcome
            <?php echo $_SESSION['User_']; ?>
        </h2> -->
        <div class="col-lg-8 m-auto d-block">
            <div class="card">

                <h3 class="text-center card-header">Rules </h3>
                <!-- <h3 class="text-center card-header">you have to select 1 out of any 4 options -->
                </h3>
                <h3 class="text-center card-header">All Questions are Mandatory</h3>
                <h3 class="text-center card-header">The result will be displayed in the end after submit button is clicked</h3>


            </div><br>


            <form action="check.php" method="post">
                <?php



                for ($i = 1; $i < 11; $i++) {



                    $q = "select * from questions where qid=$i";
                    $query = mysqli_query($con, $q);

                    
                    while ($rows = mysqli_fetch_array($query)) {
                        ?>


                        <div class="card">

                            <h4 class="card-header">
                                <?php echo $rows['questions'] ?>
                            </h4>
                            <?php
                            $q = "select * from answers where ans_id=$i";
                            $query = mysqli_query($con, $q);


                            while ($rows = mysqli_fetch_array($query)) {
                                ?>
                                <div class="card-body">
                                    <input type="radio" name="quizcheck[<?php echo $rows["ans_id"]; ?>]"
                                        value="<?php echo $rows['aid']; ?>">
                                    <?php echo $rows['answer']; ?>

                                </div>




                                <?php
                            }
                    }
                }

                ?>

                    <input type="submit" name="submit" value="Submit" class="btn btn-success m-auto d-block">
            </form>
        </div>
    </div><br><br>
    
    </div>
</body>

</html>