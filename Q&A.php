<?php
// Start a new session or resume an existing one
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the question is set and not empty
    if (isset($_POST['question']) && !empty(trim($_POST['question']))) {
        // Get the question and username from the form
        $question = $_POST['question'];
        $username = isset($_POST['username']) ? $_POST['username'] : 'Anonymous';

        // For demonstration purposes, I'm creating dummy data
        $answer = 'I will answer it soon.';
        $date = date('Y-m-d H:i:s');

        // Store the Q&A information in the log file
        $logFilePath = 'other/Q&A questions.html';
        $logEntry = "
        <div class='card border-dark mb-3 mx-2' style='max-width: 20rem;'>
          <div class='card-header'>Q&A</div>
          <div class='card-body'>
            <h6 class='card-title'><strong>{$username}'s Question: {$question}</strong></h6>
            <p class='card-text'>{$answer}</p>
          </div>
          <div class='card-footer'>{$date}</div>
        </div>
        ";

        // Append the new entry to the log file
        file_put_contents($logFilePath, $logEntry, FILE_APPEND | LOCK_EX);

        // Send a response to the client
        echo json_encode(['success' => true, 'html' => $logEntry]);
        exit; // Stop further execution
    }
}
?>


<html>
  <head>
    <meta charset="utf-8">
    <meta name="color-scheme" content="light dark">
    <link rel="stylesheet" href="css\css.css">
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <title>Hidden</title>
    <style>

    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light" data-bs-theme="light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor03">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link" href="hidden.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="Q&A.php"><em>Q&A</em>
                <span class="visually-hidden">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </li>
          </ul>

          <form class="d-flex">
            <input class="form-control me-sm-2" type="search" placeholder="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <!-- Add spacing between buttons and nav -->
    <div class="more-custom-spacing"></div>

    <!--<button type="button" class="btn btn-primary">Primary</button>
    <button type="button" class="btn btn-secondary">Secondary</button>
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-info">Info</button>
    <button type="button" class="btn btn-warning">Warning</button>
    <button type="button" class="btn btn-danger">Danger</button>
    <button type="button" class="btn btn-light">Light</button>
    <button type="button" class="btn btn-dark">Dark</button>
    <button type="button" class="btn btn-link">Link</button>

    <div class="more-custom-spacing"></div>-->

    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Welcome to Q&A!</h1>
        <p class="lead text-muted">You can ask any question and I will answer to the best of my abilities.</p>
        <p>
        <a href="#" class="btn btn-primary my-2">Main call to action</a>
        <a href="#" class="btn btn-secondary my-2">Secondary action</a>
        </p>
      </div>
    </section>

    <div class="more-custom-spacing"></div>

    <form class="custom-form" method="post" action="Q&A.php">
        <input autocomplete="off" type="text" name="username" class="form-control mb-2" placeholder="Replit's user's username" aria-label="Replit's user's username" aria-describedby="button-addon2">
        <input autocomplete="off" type="text" name="question" class="form-control" placeholder="Question" aria-label="Question" aria-describedby="button-addon2" required>
        <button class="btn btn-primary mt-2" type="Submit" id="button-addon2">Submit</button>
    </form>
    </div>

    <div class="more-custom-spacing"></div>

    <div class='container'>
      <div class='row justify-content-center' id='qa-container'> <!-- Display it in here -->

        <div class="card border-dark mb-3 mx-2" style="max-width: 20rem;">
          <div class="card-header">Q&A</div>
          <div class="card-body">
            <h6 class="card-title"><strong>[username]'s Question: [Question]</strong></h6>
            <p class="card-text">[Answer]</p>
          </div>
          <div class="card-footer">[Date submitted]</div>
        </div>

      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
      $(document).ready(function() {
        // Intercept form submission
        $("form.custom-form").submit(function(e) {
          e.preventDefault(); // Prevent the default form submission

          // Perform an AJAX request to handle form submission
          $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: $(this).serialize(),
            dataType: 'json',
            success: function(response) {
              if (response.success) {
                // Append the new Q&A entry to the container
                $("#qa-container").append(response.html);
              }
            }
          });
        });
      });
    </script>
  </body>
</html>
