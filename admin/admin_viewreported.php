<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['crmsaid']==0)) {
  header('location:logout.php');
  } else{



  ?>

  <?php  include 'connection.php';



   ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>August Research || Quantitative & Qualitataive Research || Company dates reports</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/app.css">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
    </style>
</head>
<body class="light">
<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>
        </div>
    </div>
</div>
<div id="app">
<?php include_once('includes/sidebar.php');?>
<!--Sidebar End-->
<?php include_once('includes/header.php');?>
    <div class="page has-sidebar-left">
    <header class="blue accent-3 relative">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-package"></i>
                        Company Vacancy dates reports
                    </h4>
                </div>
            </div>
        </div>
    </header>

    <div class="animatedParent animateOnce">
        <div class="container-fluid my-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-body b-b">
                            <form method="post" name=""  >
                                   <div class="form-row">
                                    <table class="table" style="width: 700px;color: black">
      <th>S.NO</th>
            <th> Name</th>
                  <th>Address</th>
                    <th>Phone Number</th>
                   <th>Income</th>
                   <th>projectname</th>
                </tr>
                            </thead>
                            <tbody>
                                <?php
                             $q="select * from respondent";
                             $res=select($q);
                             $cnt=1;
                             foreach ($res as $row) {
                                 
                        
?>
                           <tr>
                  <td><?php echo $cnt++?></td>
               <td><?php  echo $row['name'];?></td>
                  <td><?php  echo $row['address'];?></td>
                  <td><?php  echo $row['phone'];?></td>
                  <td><?php echo $row['income'] ?></td>
                  <td><?php echo $row['projectname'] ?></td>
                
                </tr>
                <?php

}?>

</tbody>
</table>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="control-sidebar-bg shadow white fixed"></div>
</div>
<!--/#app -->
<script src="assets/js/app.js"></script>
</body>
</html>

<script type="text/javascript">
$(document).ready(function () {
      
    $('#noofoption').change(function () {

        var value = $(this).val(); var toAppend = '';
        if (value == 2) {
            toAppend = "<tr><th>Option&nbsp;&nbsp;</th><td>1<input type='text' class='form-control' name='text1'><br>2<input type='text' class='form-control' name='text2' ></td></tr><tr><th>Answer</th><td align='center'>1&nbsp;&nbsp;<input type='radio' name='answersel' value='1'>&nbsp;&nbsp;2&nbsp;&nbsp;<input type='radio' name='answersel' value='2'></td></tr>"; $("#container").html(toAppend); return;
        }
        if (value == 3) {
            toAppend = "<tr><th>Option&nbsp;&nbsp;</th><td>1<input type='text'  class='form-control' name='text1'><br>2<input type='text'  class='form-control' name='text2'><br>3<input type='text'  class='form-control' name='text3'></td></tr><tr><th>Answer</th><td align='center'>1&nbsp;&nbsp;<input type='radio' name='answersel' value='1'>&nbsp;&nbsp;2&nbsp;&nbsp;<input type='radio' name='answersel' value='2'>&nbsp;&nbsp;3&nbsp;&nbsp;<input type='radio' name='answersel' value='3'></td></tr>"; $("#container").html(toAppend); return;
        }
         if (value == 4) {
            toAppend = "<tr><th>Option&nbsp;&nbsp;</th><td>1<input type='text' class='form-control' name='text1'><br>2<input type='text' class='form-control' name='text2'><br>3<input type='text' class='form-control' name='text3'><br>4<input type='text' class='form-control' name='text4'></td></tr><tr><th>Answer</th><td align='center'>1&nbsp;&nbsp;<input type='radio' name='answersel' value='1'>&nbsp;&nbsp;2&nbsp;&nbsp;<input type='radio' name='answersel' value='2'>&nbsp;&nbsp;3&nbsp;&nbsp;<input type='radio' name='answersel' value='3'>&nbsp;&nbsp;4&nbsp;&nbsp;<input type='radio' name='answersel' value='4'></td></tr>"; $("#container").html(toAppend); return;
        
        }
        if (value == 5) {
            toAppend = "<tr><th>Option&nbsp;&nbsp;</th><td>1<input type='text' class='form-control' name='text1'><br>2<input type='text' class='form-control' name='text2'><br>3<input type='text' class='form-control' name='text3'><br>4<input type='text' class='form-control' name='text4'><br>5<input type='text' class='form-control' name='text5'></td></tr><tr><th>Answer</th><td align='center'>1&nbsp;&nbsp;<input type='radio' name='answersel' value='1'>&nbsp;&nbsp;2&nbsp;&nbsp;<input type='radio' name='answersel' value='2'>&nbsp;&nbsp;3&nbsp;&nbsp;<input type='radio' name='answersel' value='3'>&nbsp;&nbsp;4&nbsp;&nbsp;<input type='radio' name='answersel' value='4'>&nbsp;&nbsp;5&nbsp;&nbsp;<input type='radio' name='answersel' value='5'></td></tr>"; $("#container").html(toAppend); return;
        
        }

    });

});
 </script>

<?php } ?>




