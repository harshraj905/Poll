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

    <main class="overflow-hidden">
        <div class="container">
            <div class="wrapper popreveal">
                <div class="main-heading">
                    What Programming Language do You use  During the Coding interview?
                </div>
                
                <div class="pole-form">

                    <!-- form -->
                    <form class="show-section" id="steps" method="post">


                        <!-- step 1 -->
                        <fieldset id="step1" class="fields">
                            <div class="radiofield">
                                <input type="radio" name="opt1" value="Python">
                                <label>Python</label>
                            </div>
                            <div class="radiofield delay-100ms">
                                <input type="radio" name="opt1" value="Javascript">
                                <label>Javascript</label>
                            </div>
                            <div class="radiofield delay-200ms">
                                <input type="radio" name="opt1" value="Go">
                                <label>Go</label>
                            </div>
                            <div class="radiofield delay-300ms">
                                <input type="radio" name="opt1" value="PHP">
                                <label>PHP</label>
                            </div>
                            
                            <!-- next btn -->
                            <div class="next_prev">
                                <button type="button" class="next" id="sub">
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