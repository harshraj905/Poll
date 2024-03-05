<?php 
session_start();
include('config.php');

$fetchSession = mysqli_query($config,"SELECT * FROM login WHERE email='{$_SESSION['loggedInUser']}'");

while ($row = mysqli_fetch_assoc($fetchSession)) {
    $activeusername = $row['email'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poll</title>

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Bootstrap-5 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- custom-styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/animation.css">

    
    <!-- color sceme -->
    <link rel="stylesheet" href="assets/css/colorvariants/default.css" id="defaultscheme">



    <!-- color switcher -->
    <link rel="stylesheet" href="colorswitcher/assets/css/colorswitcher.css">
</head>
<body>
                <div style="float: right; display: flex; align-items: center;">
                    <h5><?php echo $_SESSION["loggedInUser"] ?></h5>
                    <img style="width: 60px; padding: 10px;" src="https://e7.pngegg.com/pngimages/799/987/png-clipart-computer-icons-avatar-icon-design-avatar-heroes-computer-wallpaper-thumbnail.png">     

                    
                </div>
			<form class="show-section" id="steps" method="POST">
 			   <main class="overflow-hidden">
			        <div class="container">
			            <div class="wrapper popreveal">
			                <div class="main-heading">
 			               	  <label>Question</label>
			         <input type="text" style="border-radius: 15px; text-align: center;" name="question" placeholder="Type Something...">
 			                 
 			                   
                </div>

                <div class="pole-form">

                    <!-- form -->
                    


                     
                        <fieldset id="step1" class="fields">
                            <div class="radiofield">
                                <input type="text" style="border-radius: 15px; text-align: center;" name="opt1" placeholder="Option 1">
                                
                            </div>
                            <div class="radiofield delay-100ms">
                                <input type="text" style="border-radius: 15px; text-align: center;" name="opt2" placeholder="Option 2">
                                
                            </div>
                            <div class="radiofield delay-200ms">
                                <input type="text" style="border-radius: 15px; text-align: center;" name="opt3" placeholder="Option 3">
                                
                            </div>
                            <div class="radiofield delay-300ms">
                                <input type="text" style="border-radius: 15px; text-align: center;" name="opt4" placeholder="Option 4">
                                
                            </div>
                            
                            <!-- next btn -->
                            <div class="next_prev">
                                <button type="submit" name="confirm" class="next" id="sub">
                                    <span>Create</span>
                                </button>
                            </div>
                        </fieldset>
                    </form>
                </div>

             </div>
        </div>
    </main>

    
    
                
            </div>
        </div>
    </main>





    
    


    <!-- Bootstrap-5 -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Jquery -->
    <script src="assets/js/jquery-3.6.1.min.js"></script>

    <!-- My js -->
    <script src="assets/js/custom.js"></script>

        <!-- colorswitcher -->
        <script src="assets/js/callswitcher.js"></script>
</body>
</html>

<?php 
$creator = $_SESSION['loggedInUser'];
$question = $_POST['question'];
$option1 = $_POST['opt1'];
$option2 = $_POST['opt2'];
$option3 = $_POST['opt3'];
$option4 = $_POST['opt4'];

 
if(isset($_POST['confirm']))
{
  
   mysqli_query($config,"UPDATE `admin` SET `creator`='$creator',`question`='$question ',`opt1`='$option1',`opt2`='$option2',`opt3`='$option3',`opt4`='$option4' WHERE 1");

    echo "<script>alert('Poll Created')</script>";

    echo "<a href='http://localhost/Poll/login/login.php'";
  }  
  else
  {
    echo "<script>alert('No Data Entered')</script>";
  }


?>
