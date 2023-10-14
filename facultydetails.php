<?php
  include "partials/header.php";
?>
<style>
      /* Reset some default styles for better consistency */
      body,
      h1,
      h2,
      p {
        margin: 0;
        padding: 0;
      }

      /* Style the header */
      header {
        background-color: #0073e6;
        color: #fff;
        text-align: center;
        padding: 20px;
      }

      /* Style the main content */
      main {
        padding: 20px;
      }

      /* Style individual activities */
      .activity {
        display: flex; /* Use flexbox for layout */
        justify-content: center; /* Center-align content horizontally */
        align-items: center; /* Center-align content vertically */
        margin-bottom: 20px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 18px;
      }

      .activity-image {
        flex: 1; /* Expand to fill available space */
      }

      .activity-info {
        flex: 2; /* Expand to fill more space than the image */
        padding: 20px; /* Add some spacing between info and image */
        text-align: left; /* Align text to the left */
      }

      .activity img {
        max-width: 100%;
        height: auto;
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
    
    <header>
      <h1 class="w-100">Faculty Details</h1>
    </header>

    <main>
      <div class="activity">
        <div class="activity-image">
          <img src="partials/images/sample2.png" alt="Faculty1" />
        </div>
        <div class="activity-info">
          <h1><b>Pushplatha Swami</b></h1>
          <p>Professor of Python Language</p>
          <p>Experience: 20 years</p>
        </div>
      </div>
      <div class="activity">
        <div class="activity-image">
          <img src="partials/images/sample2.png" alt="Faculty2" />
        </div>
        <div class="activity-info">
          <h1><b>Menka Lilani</b></h1>
          <p>Professor of Database Management System</p>
          <p>Experience: 2 years</p>
        </div>
      </div>
      <div class="activity">
        <div class="activity-image">
          <img src="partials/images/sample.jpg" alt="Faculty3" />
        </div>
        <div class="activity-info">
          <h1><b>Jaydeep Rathod</b></h1>
          <p>Professor of Cloud Computing & Networks</p>
          <p>Experience: 12 years</p>
        </div>
      </div>
      <div class="activity">
        <div class="activity-image">
          <img src="partials/images/sample.jpg" alt="Faculty4" />
        </div>
        <div class="activity-info">
          <h1><b>Paramveer Chahar</b></h1>
          <p>Professor of Technical Communication</p>
          <p>Experience: 3 years</p>
        </div>
      </div>
      <div class="center-button">
        <button><a href="index.php">Back to Home</a></button>
      </div>
    </main>
  </body>
</html>
<?php
  include "partials/footer.php";
?>