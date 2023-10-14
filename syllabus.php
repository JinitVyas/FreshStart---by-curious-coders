<?php
  include "partials/header.php";
?>
    <!-- Include Bootstrap CSS -->
    <link
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <!-- Custom CSS -->
<style>
      /* Add your custom styles here */
      *{
        margin: 0;
        padding: 0;
      }

      .syllabus-card {
        margin-bottom: 20px;
      }
      .pdf-button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #0073e6;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        font-size: 16px;
        font-weight: bold;
        transition: background-color 0.3s ease;
      }
      .download-link {
        display: inline-block;
        padding: 10px 20px;
        background-color: #0073e6;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        font-size: 16px;
        font-weight: bold;
        transition: background-color 0.3s ease;
      }
      .download-link:hover {
        background-color: #fff;
      }

      .pdf-button:hover {
        background-color: #fff;
      }
      .center-button {
        display: flex;
        justify-content: center;
        margin-top: 20px;
      }

      button {
        background-color: #0073e6;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }

      button a {
        text-decoration: none;
        color: #fff;
      }
</style>
  <body>
    

    <div class="container">
      <center><h1 class="mt-4">Syllabus</h1></center>

      <!-- Sample Syllabus Cards -->
      <div class="card syllabus-card">
        <div class="card-body">
          <h5 class="card-title">BCOM</h5>
          <a href="syllebus.html" download="partials/Syllabus.pdf" class="download-link"
            >Download Syllabus</a
          >
          <a href="partials/Syllabus.pdf" target="_blank" class="pdf-button">Open PDF</a>
        </div>
      </div>

      <div class="card syllabus-card">
        <div class="card-body">
          <h5 class="card-title">BBA</h5>
          <a href="syllebus.html" download="partials/Syllabus.pdf" class="download-link"
            >Download Syllabus</a
          >
          <a href="partials/Syllabus.pdf" target="_blank" class="pdf-button">Open PDF</a>
        </div>
      </div>

      <div class="card syllabus-card">
        <div class="card-body">
          <h5 class="card-title">BCA</h5>
          <a href="syllebus.html" download="partials/Syllabus.pdf" class="download-link"
            >Download Syllabus</a
          >
          <a href="partials/Syllabus.pdf" target="_blank" class="pdf-button">Open PDF</a>
        </div>
      </div>

      <div class="card syllabus-card">
        <div class="card-body">
          <h5 class="card-title">MCOM</h5>
          <a href="syllebus.html" download="partials/Syllabus.pdf" class="download-link"
            >Download Syllabus</a
          >
          <a href="partials/Syllabus.pdf" target="_blank" class="pdf-button">Open PDF</a>
        </div>
      </div>

      <div class="card syllabus-card">
        <div class="card-body">
          <h5 class="card-title">MBA</h5>
          <a href="syllebus.html" download="partials/Syllabus.pdf" class="download-link"
            >Download Syllabus</a
          >
          <a href="partials/Syllabus.pdf" target="_blank" class="pdf-button">Open PDF</a>
        </div>
      </div>

      <div class="card syllabus-card">
        <div class="card-body">
          <h5 class="card-title">MCA</h5>
          <a href="syllebus.html" download="partials/Syllabus.pdf" class="download-link"
            >Download Syllabus</a
          >
          <a href="partials/Syllabus.pdf" target="_blank" class="pdf-button">Open PDF</a>
        </div>
      </div>
    </div>
    <div class="center-button">
      <button><a href="index.php">Back to Home</a></button>
    </div>

    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
<?php
  include "partials/footer.php";
?>