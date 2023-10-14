<?php
    include 'dbconnect.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>FreshStart Guide</title>

<style>


              /* Reset some default styles for better consistency */
          body, h1, h2, p {
              margin: 0;
              padding: 0;
          }

          /* Style the header */
          header {
              background-color: #333;
              color: #fff;
              text-align: center;
              padding: 20px;
          }

          /* Style the navigation menu */
          nav ul {
              list-style-type: none;
              background-color: #333;
              text-align: center;
              padding: 10px;
          }

          nav li {
              display: inline;
              margin-right: 20px;
          }

          nav a {
              text-decoration: none;
              color: #fff;
              font-weight: bold;
          }

          /* Style the main content */
          main {
              padding: 20px;
          }

          .activity {
              margin-bottom: 20px;
              padding: 10px;
              border: 1px solid #ccc;
              border-radius: 5px;
              text-align: center;
          }

          .activity img {
              max-width: 100%;
              height: auto;
          }

          /* Style the footer */
          footer {
              text-align: center;
              background-color: #333;
              color: #fff;
              padding: 10px;
          }


      /* Reset some default styles */
      body,
      h1,
      h2,
      p {
        margin: 0;
        padding: 0;
      }

      /* Basic styling for the header */
      header {
        background-color: #0073e6;
        color: #fff;
        padding: 10px 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      nav ul {
        list-style: none;
      }

      nav ul li {
        display: inline;
        align-items: center;
        margin-right: 20px;
      }

      nav a {
        text-decoration: none;
        color: #fff;
        font-weight: bold;
        align-items: center;
      }

      .auth-section a {
        margin-left: 20px;
        color: #fff;
        text-decoration: none;
      }

      /* Styling for the banner section */
      .banner {
        background-size: cover;
        text-align: center;
        padding: 100px 0;
        color: black;
      }

      .banner h1 {
        font-size: 36px;
        margin-bottom: 20px;
      }

      .banner p {
        font-size: 18px;
      }

      /* Styling for key features section */
      .key-features {
        display: flex;
        justify-content: space-around;
        align-items: center;
        background-color: #f7f7f7;
        padding: 40px 0;
      }

      .feature {
        text-align: center;
        padding: 20px;
      }

      .feature h2 {
        font-size: 24px;
        margin-bottom: 10px;
      }

      /* Styling for how it works section */
      .how-it-works {
        text-align: center;
        padding: 40px 0;
      }

      .how-it-works h2 {
        font-size: 28px;
        margin-bottom: 20px;
      }

      /* Styling for testimonials section */
      .testimonials {
        background-color: #f7f7f7;
        padding: 40px 0;
        text-align: center;
      }

      .testimonial {
        margin: 20px;
      }

      .testimonial p {
        font-style: italic;
      }

      /* Styling for call to action section */
      .cta {
        text-align: center;
        background-color: #0073e6;
        padding: 40px 0;
        color: #fff;
      }

      .cta h2 {
        font-size: 28px;
        margin-bottom: 20px;
      }

      .cta-button {
        display: inline-block;
        background-color: #fff;
        color: #0073e6;
        padding: 10px 20px;
        text-decoration: none;
        font-weight: bold;
        border-radius: 5px;
      }

      .cta-button:hover {
        background-color: #0073e6;
        color: #fff;
      }

      /* Styling for the footer */
      footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 20px 0;
      }

      footer ul {
        list-style: none;
      }

      footer ul li {
        display: inline;
        margin: 0 10px;
      }

      footer a {
        text-decoration: none;
        color: #fff;
      }
      /* ... (previous styles remain the same) */

      /* Styles for the carousel */
      .carousel {
        position: relative;
        max-width: 100%;
        margin: 0 auto;
        overflow: hidden;
      }

      .slides {
        display: flex;
        animation: slide 10s infinite;
      }

      .slide {
        flex: 1;
        min-width: 100%;
        text-align: center;
        transition: opacity 2s ease;
      }

      .slide img {
        max-width: 100%;
        height: 400px;
      }

      .navigation {
        position: absolute;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);
      }

      .navigation label {
        cursor: pointer;
        width: 15px;
        height: 15px;
        background: #ddd;
        margin: 0 5px;
        border-radius: 50%;
        display: inline-block;
        transition: background 0.3s ease;
      }

      /* Show/hide slides when radio button is checked */
      input[type="radio"]:checked + .navigation label {
        background: #0073e6;
      }

      /* Keyframes for the slide animation */
      @keyframes slide {
        0% {
          transform: translateX(0);
        }
        20% {
          transform: translateX(0);
        }
        25% {
          transform: translateX(-100%);
        }
        45% {
          transform: translateX(-100%);
        }
        50% {
          transform: translateX(-200%);
        }
        70% {
          transform: translateX(-200%);
        }
        75% {
          transform: translateX(0);
        }
        95% {
          transform: translateX(0);
        }
        100% {
          transform: translateX(100%);
        }
      }
</style>
</head>
  <body>
    <header>
      <nav>
        <ul>
          <li>
            <img
              src="partials/images/logo.jpg"
              alt="FreshStart Guide Logo"
              height="40px"
              width="40px"
            />
          </li>
          <li><a href="event.php">Event Calendar</a></li>
          <li><a href="club.php">College Clubs</a></li>
          <li><a href="guidelines.php">Course Guidelines</a></li>
          <li><a href="activity.php">Activities</a></li>
          <li><a href="facultydetails.php">Faculty Details</a></li>
          <li><a href="syllabus.php">Syllabus</a></li>
        </ul>
      </nav>

      <div class="auth-section">

      <?php
        if(!isset($_SESSION['Role']))
        {
      ?>
        <a href="login.php">Log In</a>
        <a href="signup.php">Sign Up</a>
        <?php
        }
        else
        {
          echo $_SESSION['Role'];
          ?>
            <a href="partials/handlelogin.php?logout=1">Logout</a>
          <?php
        }
      ?>
  
      </div>
    </header>

  <?php
  if(isset($_SESSION['Role']))
  {
    if($_SESSION['Role']=="Senior" || $_SESSION['Role']=="Both")
    {
  ?>
    <header>
      <nav>
        <ul>
          <li>
            <h5 class="text-start d-inline">Management:</h5>
          </li>
          <li><a href="eventForm.php">Event</a></li>
          <li><a href="clubForm.php">Clubs</a></li>
          <li><a href="courseForm.php">Course</a></li>
          <li><a href="activityForm.php">Activities</a></li>
          <li><a href="syllabusForm.php">Syllabus</a></li>
        </ul>
      </nav>

      <div class="auth-section">
  
      </div>
    </header>
<?php
    }}
?>

<?php
  // Code for Signup
  if ( isset($_GET['signupSuccess']) && $_GET['signupSuccess'] == "true" )
  {
    echo '  <div class="alert alert-success alert-dismissible fade show my-0" role="alert">
                <strong>Success!</strong> You can now login.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
  }
  elseif( isset($_GET['signupSuccess']) && $_GET['signupSuccess'] == "false" )
  {
    echo '  <div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
                <strong>Error!</strong> '. $_GET['error'] .'
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
  }

  if ( isset($_GET['LoginSuccess']) && $_GET['LoginSuccess'] == "True" )
  {
    echo '  <div class="alert alert-success alert-dismissible fade show my-0" role="alert">
                <strong>Success!</strong> Welcome back <b>'. $_SESSION['FName'] .'</b>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
  }
  elseif( isset($_GET['LoginSuccess']) && $_GET['LoginSuccess'] == "false" )
  {
    echo '  <div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
                <strong>Error!</strong> '. $_GET['Fault'] .'
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
  }

  if ( isset($_GET['form']) && $_GET['form'] == "true" )
  {
    echo '  <div class="alert alert-success alert-dismissible fade show my-0" role="alert">
                <strong>Success!</strong>Form submitted successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
  }
  elseif( isset($_GET['form']) && $_GET['form'] == "false" )
  {
    echo '  <div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
                <strong>Error!</strong> '. $_GET['error'] .'
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
  }


  if ( isset($_GET['logout']) && $_GET['logout'] == "1" )
  {
    echo '  <div class="alert alert-success alert-dismissible fade show my-0" role="alert">
                <strong>Lgged out succesfully!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
  }

?>