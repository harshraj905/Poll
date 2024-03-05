<?php
// Sample PHP script structure
if (isset($_POST['opt1'])) {
    $vote = $_POST['opt1'];
    // Update vote count in the database...

    // Fetch updated vote counts...
    $voteResults = ['Python' => 25, 'Javascript' => 40, /* and so on... */];

    // Store results in session or pass through URL
    $_SESSION['voteResults'] = $voteResults;
    header('Location: index.php'); // Adjust the redirect location as needed
}
?>
