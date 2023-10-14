<?php
  include "partials/header.php";
?>
<style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
      }

      .main {
        background-color: #007bff;
        color: #fff;
        text-align: center;
        padding: 20px;
      }

      .main h1 {
        color: white;
      }

      .clubs-container {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 20px;
        padding: 20px;
      }

      .club {
        background-color: #f9f9f9;
        padding: 20px;
        border: 1px solid #ccc;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }

      .club img {
        max-width: 100%;
        height: auto;
        margin-bottom: 10px;
      }

      h2 {
        color: #007bff;
      }

      p {
        text-align: justify;
      }
      header {
        background-color: #007bff;
        color: #fff;
        text-align: center;
        padding: 20px;
      }

      .container {
        max-width: 800px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }

      h1 {
        color: #007bff;
      }

      .rule {
        margin-bottom: 15px;
      }

      .rule h2 {
        color: #007bff;
        font-size: 18px;
      }

      .rule p {
        font-size: 16px;
        text-align: justify;
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
  </head>
  <body>
    <div class="main">
      <h1>College Clubs</h1>
    </div>

    <div class="clubs-container">
      <div class="club">
        <img src="partials/images/sport.jpeg" alt="Sports Club" height="200px" width="200px" />
        <h2>Sports Club</h2>
        <p>
          The Sports Club at our college is dedicated to promoting physical
          fitness and a healthy lifestyle among students. We organize various
          sports events and tournaments throughout the year, encouraging
          students to stay active and engage in team sports.
        </p>

        <div class="container">
          <div class="rule">
            <h3>Rules</h3>
            <h4>1. Respect and Sportsmanship</h4>
            <p>
              Treat teammates, opponents, and coaches with respect and uphold
              sportsmanship values.
            </p>
          </div>

          <div class="rule">
            <h4>2. Attendance and Commitment</h4>
            <p>
              Attend practices and games regularly, and communicate in advance
              for any absences.
            </p>
          </div>

          <div class="rule">
            <h4>3. Adhere to College Policies</h4>
            <p>
              Follow college rules, especially regarding academics and conduct.
            </p>
          </div>

          <div class="rule">
            <h4>4. Equipment and Facility Care</h4>
            <p>
              Take care of sports equipment and facilities, and maintain
              cleanliness after activities.
            </p>
          </div>
        </div>
      </div>

      <div class="club">
        <img
          src="partials/images/photo.png"
          alt="Photography Club"
          height="200px"
          width="200px"
        />
        <h2>Photography Club</h2>
        <p>
          The Photography Club is a place for students who are passionate about
          capturing moments. We organize photography contests, workshops, and
          exhibitions to nurture the creative talents of our members.
        </p>
        <div class="container">
          <div class="rule">
            <h3>Rules</h3>
            <h4>1: Respect Privacy</h4>
            <p>
              Always respect the privacy and consent of individuals being
              photographed. Obtain permission when necessary.
            </p>
          </div>

          <div class="rule">
            <h4>2. Maintain Equipment</h4>
            <p>
              Take good care of club equipment. Report any damage or issues
              promptly.
            </p>
          </div>

          <div class="rule">
            <h4>3. Originality</h4>
            <p>
              Promote originality and creativity in your photography. Avoid
              plagiarism.
            </p>
          </div>

          <div class="rule">
            <h4>4. Participation</h4>
            <p>
              Actively participate in club activities, meetings, and events to
              foster a supportive community.
            </p>
          </div>
        </div>
      </div>

      <div class="club">
        <img src="partials/images/tech.jpeg" alt="Tech Club" height="200px" width="200px" />
        <h2>Tech Club</h2>
        <p>
          The Tech Club is all about exploring the latest technology trends and
          innovations. We organize coding competitions, tech talks, and hands-on
          workshops to empower students with tech skills.
        </p>
        <div class="container">
          <div class="rule">
            <h3>Rules</h3>
            <h4>1. Respect Code of Conduct</h4>
            <p>
              Members must adhere to the club's code of conduct and maintain
              respectful behavior in all interactions.
            </p>
          </div>

          <div class="rule">
            <h4>2. Attend Meetings Regularly</h4>
            <p>
              Regular attendance at club meetings and events is expected to stay
              informed and engaged.
            </p>
          </div>

          <div class="rule">
            <h4>3. Share Knowledge</h4>
            <p>
              Members are encouraged to share their tech knowledge and skills
              with fellow club members.
            </p>
          </div>

          <div class="rule">
            <h4>4. Collaborate on Projects</h4>
            <p>
              Participate in club projects and collaborate with other members to
              create innovative tech solutions.
            </p>
          </div>
          <div class="rule">
            <h4>5. Stay Updated</h4>
            <p>
              Keep up-to-date with the latest tech trends, tools, and
              technologies to contribute effectively to the club's goals.
            </p>
          </div>
        </div>
      </div>

      <div class="club">
        <img
          src="partials/images/scout.jpeg"
          alt="Scout Guide Club"
          height="200px"
          width="200px"
        />
        <h2>Scout Guide Club</h2>
        <p>
          The Scout Guide Club instills values of leadership, teamwork, and
          outdoor skills in our members. We organize camping trips, community
          service projects, and leadership development programs.
        </p>
        <div class="container">
          <div class="rule">
            <h3>Scout Guide Club Rules</h3>
            <h4>1. Honor Scout Values</h4>
            <p>
              All members must uphold the core values of scouting, including
              honesty, integrity, and respect for others.
            </p>
          </div>

          <div class="rule">
            <h4>2. Be Prepared for Outdoor Adventures</h4>
            <p>
              Members should always be prepared for outdoor activities,
              demonstrating essential outdoor skills and safety.
            </p>
          </div>

          <div class="rule">
            <h4>3. Practice Leave No Trace</h4>
            <p>
              Leave no trace of your presence in the wilderness. Follow
              principles of environmental responsibility and conservation.
            </p>
          </div>

          <div class="rule">
            <h4>4. Participate in Community Service</h4>
            <p>
              Engage in community service projects that promote positive change
              and make a meaningful impact on society.
            </p>
          </div>

          <div class="rule">
            <h4>5. Develop Leadership Skills</h4>
            <p>
              Scout Guide Club members are encouraged to develop leadership
              skills by taking on responsibilities and guiding fellow members.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="center-button">
      <button><a href="index.php">Back to Home</a></button>
    </div>
  </body>
</html>
<?php
  include "partials/footer.php";
?>