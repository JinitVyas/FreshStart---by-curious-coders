<?php
  include 'partials/header.php';
?>
<style>
      /* Reset some default styles */
      body,
      h1,
      h2,
      p {
        margin: 0;
        padding: 0;
      }
      article{
        width:fit-content;
      }

      /* Style the header */
      header {
        background-color: #007bff;
        color: white;
        text-align: center;
        padding: 20px;
      }

      /* Style the event list */
      .event-list {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        font-style: bold;
      }

      /* Style individual events */
      .event {
        background-color: #f4f4f4;
        border: 1px solid #ddd;
        margin-bottom: 20px;
        padding: 15px;
        font-style: bold;
      }


      /* Style event headings */
      .event h2 {
        font-size: 1.5rem;
        margin-bottom: 10px;
      }

      /* Style event details */
      .event p {
        margin: 0;
      }

      /* Add hover effect on events */
      .event:hover {
        background-color: #e5e5e5;
        transition: background-color 0.3s;
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
  <body class="text-center">
    <center>
      <header class="text-center">
        <h1 class="text-center w-100">College Event Calendar</h1>
      </header>
      <main>
        <section class="event-list">
          <article class="event">
            <img
              src="partials/images/orientation.jpeg"
              alt="Event 1 Image"
              width="570px"
              height="300px"
            />
            <h2>Orientation Day</h2>
            <strong><p>Date:</strong> October 10, 2023</p>
            <p><strong>Time</strong> 2:00 PM - 4:00 PM</p>
            <p><strong>Location</strong> Student Center</p>
            <p><strong>
              Description:</strong> Join us for an exciting orientation day where you'll
              get to know your fellow students and explore the campus.
            </p>
          </article>
          <article class="event">
            <img
              src="partials/images/welcome.jpg"
              alt="Event 2 Image"
              width="570px"
              height="300px"
            />
            <h2>Welcome Party</h2>
            <strong><p>Date:</strong> October 15, 2023</p>
            <p><strong>Time: </strong>7:00 PM - 10:00 PM</p>
            <p><strong>Location:</strong> Auditorium</p>
            <p><strong>
              Description: </strong>Let's kick off the semester with a bang! Join us for
              a fun-filled welcome party with music, food, and games.
            </p>
          </article>
          <article class="event">
            <img
              src="partials/images/study.jpg"
              alt="Event 3 Image"
              width="570px"
              height="300px"
            />
            <h2>Study Skills Workshop</h2>
            <strong><p>Date:</strong> October 20, 2023</p>
            <p> <strong>Time:</strong> 3:00 PM - 5:00 PM</p>
            <p><strong>Location</strong> Library</p>
            <p><strong>
              Description:</strong> Improve your study skills and time management with
              our workshop. It's a must for academic success!
            </p></strong>
          </article>
          <article class="event">
            <img
              src="partials/images/career.jpg"
              alt="Event 4 Image"
              width="570px"
              height="300px"
            />
            <h2>Career Fair</h2>
            <p><strong><p>Date:</strong> October 25, 2023</p>
            <p><strong>Time:</strong> 10:00 AM - 4:00 PM</p>
            <p><strong>Location</strong> Gymnasium</p>
            <p>
              <strong>
                Description:</strong> Explore job and internship opportunities with top
              companies at our annual career fair.
            </p></strong>
          </article>
          <article class="event">
            <img
              src="partials/images/movie.jpg"
              alt="Event 5 Image"
              width="570px"
              height="300px"
            />
            <h2>Outdoor Movie Night</h2>
            <strong><p>Date:</strong> October 30, 2023</p>
            <p><strong>Time:</strong> 7:30 PM - 10:00 PM</p>
            <p><strong>Location</strong> College Lawn</p>
            <p> <strong>
              Description:</strong> Grab your blankets and join us for a cozy outdoor
              movie night under the stars.
            </p></strong>
          </article>
        </section>
      </main>
      <div class="center-button">
        <button><a href="index.php">Back to Home</a></button>
    </div>
    </center>
  </body>
</html>
<?php
  include 'partials/footer.php';
?>