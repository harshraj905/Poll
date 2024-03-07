<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .results-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
      }

      .result-box {
        background-color: #f0f0f0; 
        border-radius: 50px; 
        margin: 10px;
        padding: 20px 40px; 
        text-align: center;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1); 
        width: fit-content;
      }

      body, html {
        height: 100%;
        margin: 0;
        display: flex;
        flex-direction: column; 
        justify-content: center;
        background-image: url(assets/images/bg.jpg);
        background-repeat: no-repeat;
        background-size: cover; 
      }

      .exit-button-container {
        text-align: center; 
        margin-top: auto; 
        padding: 20px; 
      }

      button {
        padding: 10px 20px; 
        border-radius: 20px; 
        border: none; 
        background-color: #007bff; 
        color: white; 
        cursor: pointer; 
      }

      button:hover {
        background-color: #0056b3;
      }
    </style>

  </head>
  <body>

    <?php
    session_start(); 

    echo '<div class="results-container">';

    if (isset($_SESSION['votePercentages'])) {
        $votePercentages = $_SESSION['votePercentages'];

        foreach ($votePercentages as $option => $percentage) {
            echo '<div class="result-box">' . htmlspecialchars($option) . '  : ' . number_format($percentage, 2) . '%</div>';
        }
    } else {
        echo "<div class='result-box'>No voting results available.</div>";
    }

    echo '</div>'; 

    unset($_SESSION['votePercentages']);
    ?>

    <div class="exit-button-container">
      <button onclick="window.location.href='http://localhost/Poll/login/login.php'">Exit</button>
    </div>
            
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
  </body>
</html>
