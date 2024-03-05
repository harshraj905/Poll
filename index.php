<?php 
session_start();
include('config.php');

$fetchPoll = mysqli_query($config, "SELECT question, opt1, opt2, opt3, opt4 FROM admin LIMIT 1");
$pollData = mysqli_fetch_assoc($fetchPoll);

// while ($row = mysqli_fetch_assoc($fetchSession)) {
    // $activeusername = $row['email'];
// }

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
                <div style="float: right; display: flex; align-items: center; font-weight: 200px;">
                    <h5> <?php echo $_SESSION["loggedInUser"] ?></h5>
                    <img style="width: 60px; padding: 10px;" src="https://e7.pngegg.com/pngimages/799/987/png-clipart-computer-icons-avatar-icon-design-avatar-heroes-computer-wallpaper-thumbnail.png">     

                    
                </div>

               

    <main class="overflow-hidden">
        <div class="container">
            <div class="wrapper popreveal">
                <div class="main-heading">
                   <?php echo isset($pollData['question']) ? $pollData['question'] : 'No question found'; ?>
                </div>
                
                <div class="pole-form">

                    <!-- form -->
                    <form class="show-section" id="steps" method="POST">


                        <fieldset id="step1" class="fields">
                            <div class="radiofield">
                                <input type="radio" name="opt" value="Option 1">
                                <label><?php echo isset($pollData['opt1']) ? $pollData['opt1'] : ''; ?></label>
                            </div>
                            <div class="radiofield delay-100ms">
                                <input type="radio" name="opt2" value="Option 2">
                                <label><?php echo isset($pollData['opt2']) ? $pollData['opt2'] : ''; ?></label>
                            </div>
                            <div class="radiofield delay-200ms">
                                <input type="radio" name="opt3" value="Option 3">
                                <label><?php echo isset($pollData['opt3']) ? $pollData['opt3'] : ''; ?></label>
                            </div>
                            <div class="radiofield delay-300ms">
                                <input type="radio" name="opt4" value="Option 4">
                                <label><?php echo isset($pollData['opt4']) ? $pollData['opt4'] : ''; ?></label>
                            </div>
                            
                            <!-- next btn -->
                            <div class="next_prev">
                                <button type="submit" name="vote" class="next" id="sub">
                                    <span>Vote Now</span>
                                </button>
                            </div>
                        </fieldset>
                    </form>
                </div>

                <!-- footer  -->
                <footer>
                    <div class="vote_count">
                        <div class="users">
                            <img class="no-left" src="assets/images/users/u1.png" alt="">
                            <img src="assets/images/users/u2.png" alt="">
                            <img src="assets/images/users/u1.png" alt="">
                        </div>
                        <div class="total-votes">
                            Total Votes: <span>24</span>
                        </div>
                        <div class="dot">
                        </div>
                        <div id="countdown">

                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </main>

    <!-- thankyou section -->
    <main class="thankyoupage overflow-hidden">
        <div class="container">
            <div class="wrapper popreveal">
                <div class="main-heading">
                    What Programming Language do You use  During the Coding interview?
                </div>
                <div class="pole-form">
                    <div class="thankyou">
                        <div class="result opt1">
                            <div class="prnct">15%</div>
                            <div class="bar">
                                <label>Python</label>
                                <div class="prnct-bar"></div>
                            </div>
                        </div>
                        <div class="result opt2">
                            <div class="prnct">15%</div>
                            <div class="bar">
                                <label>Javascript</label>
                                <div class="prnct-bar"></div>
                            </div>
                        </div>
                        <div class="result opt3">
                            <div class="prnct">10%</div>
                            <div class="bar">
                                <label>Go</label>
                                <div class="prnct-bar"></div>
                            </div>
                        </div>
                        <div class="result opt4">
                            <div class="prnct">60%</div>
                            <div class="bar">
                                <label>PHP</label>
                                <div class="prnct-bar"></div>
                            </div>
                        </div>
                    </div>
                    <div class="next_prev">
                        <button id="goback" type="button" class="next">
                            <span>Undo?</span>
                        </button>
                    </div>
                </div>
                <footer>
                    <div class="vote_count">
                        <div class="users">
                            <img class="no-left" src="assets/images/users/u1.png" alt="">
                            <img src="assets/images/users/u2.png" alt="">
                            <img src="assets/images/users/u1.png" alt="">
                        </div>
                        <div class="total-votes">
                            Total Votes: <span>24</span>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </main>





    
    <div id="error">

    </div>


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
 
if(isset($_POST['vote']))
{
  $eml = $_SESSION['loggedInUser']; 
  $voteOption = $_POST['opt']; 

  $checkEntry = mysqli_query($config,"SELECT * FROM votes WHERE voter = '$eml'");

  if(mysqli_num_rows($checkEntry) > 0)
  {
    echo "<script>alert('Already Voted');</script>";
    echo "<script>window.location.href='http://localhost/Poll/login/login.php';</script>";
  }
  else
  {

    mysqli_query($config,"INSERT INTO votes(voter, vote) VALUES('$eml', '$voteOption')");
    echo "<script>alert('Vote Submitted');</script>";
    echo "<script>window.location.href='http://localhost/Poll/login/login.php';</script>"; 
  }
}

?>