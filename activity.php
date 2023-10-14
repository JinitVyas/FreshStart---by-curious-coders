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

      /* Style the header */
      header {
        background-color: #0073e6;
        color: #fff;
        text-align: center;
        padding: 20px;
      }

      /* Style the main content */
      .activity-grid {
        display: grid; /* Use grid layout */
        grid-template-columns: repeat(2, 1fr); /* 2 columns of equal width */
        gap: 20px; /* Add spacing between grid items */
        padding: 20px;
      }

      /* Style individual activities */
      .activity {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        font-size: 18px;
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
  <body>
    <header>
      <h1 class="w-100">My Activity Page</h1>
    </header>

    <main class="activity-grid">
      <div class="activity">
        <h1><b>Culture Activity</b></h1>
        <br />
        <img
          src="partials/images/culture1.jpg"
          alt="Activity 1 Image"
          height="300px"
          width="300px"
        />
        <p>
          A cultural event is a gathering or activity that celebrates and
          showcases various aspects of a specific culture or cultural heritage.
          These events provide opportunities for people to learn about and
          appreciate the customs, traditions, arts, music, cuisine, and history
          of different cultures. Cultural events can take many forms, from
          festivals and exhibitions to performances and workshops.
        </p>
        <h3>Examples</h3>
        <p>
          <strong>1. Diverse Dance Styles:</strong> The showcase features a wide
          range of dance styles, including ballet, salsa, hip-hop, classical
          Indian, African, and more. <br />
          <strong>2. Live Music:</strong> Accomplished musicians perform live
          music, adding authenticity and energy to each dance performance.
          Traditional Costumes: Dancers wear authentic costumes that represent
          their respective cultures, creating a visually stunning spectacle.
        </p>
      </div>
      <div class="activity">
        <h1><b>Social Activity</b></h1>
        <br />
        <img
          src="partials/images/social1.jpg"
          alt="Activity 2 Image"
          height="250px"
          width="250px"
        />
        <p>
          Social activities encompass a wide range of events and gatherings that
          provide opportunities for people to interact, socialize, and engage in
          leisure or recreational activities. These events are essential for
          building relationships, fostering community, and having fun.
        </p>
        <h3>Examples</h3>
        <p>
          <strong> 1. Picnic Games: </strong>The event features classic picnic
          games like sack races, tug-of-war, and three-legged races for both
          kids and adults.<br />
          <strong> 2. Potluck Feast: </strong>Attendees are encouraged to bring
          their favorite dishes to share, creating a diverse potluck feast with
          a variety of cuisines.
          <br />
          <strong> 3. Kids' Zone:</strong> A designated area offers activities
          for children, including face painting, a bouncy castle, and arts and
          crafts.
        </p>
      </div>
      <div class="activity">
        <h1><b>Sports Activity</b></h1>
        <br />
        <img
          src="partials/images/sport1.jpg"
          alt="Activity 1 Image"
          height="300px"
          width="300px"
        />
        <p>
          Sports activities encompass a wide range of physical activities and
          games that individuals or teams participate in for exercise,
          competition, recreation, and enjoyment. These activities promote
          physical fitness, teamwork, skill development, and a sense of
          camaraderie.
        </p>
        <h3>Examples</h3>
        <p>
          <strong> 1. Race Categories:</strong> Participants can choose to run
          or walk the 5K course, and there are separate categories for adults
          and children.<br />
          <strong> 2. Fundraising:</strong> Participants are encouraged to raise
          funds for a selected charity or cause. Prizes may be awarded to the
          top fundraisers.<br />
          <strong> 3. Costumes and Themes: </strong>Some participants dress up
          in costumes or choose a fun theme to make the event more enjoyable.
        </p>
      </div>
      <div class="activity">
        <h1><b>Personal Activity</b></h1>
        <br />
        <img
          src="partials/images/personal.jpg"
          alt="Activity 2 Image"
          height="300px"
          width="300px"
        />
        <p>
          Personality development activities are designed to help individuals
          improve their personal and interpersonal skills, enhance
          self-awareness, and develop a well-rounded and confident personality.
          These activities focus on various aspects of personal growth,
          including communication skills, emotional intelligence,
          self-confidence, and leadership abilities.
        </p>
        <div>
        <h3>Examples</h3>
        <p>
          <strong>1. Communication Skills:</strong> The workshop covers
          essential communication skills, including active listening, non-verbal
          communication, and clarity in speech.<br />
          <strong>2. Public Speaking:</strong> Participants learn how to
          overcome public speaking anxiety, structure speeches, and deliver
          compelling presentations.<br />
          <strong>3. Body Language: </strong> The importance of body language
          and gestures in communication is explored, with practical exercises
          for improvement.<br />
          <strong>4. Effective Storytelling:</strong> Effective Storytelling:
          Storytelling techniques are introduced to help participants engage and
          captivate their audience.
        </p>
        
      </div>
    </main>
    <div class="center-button">
        <button><a href="index.php">Back to Home</a></button>
    </div>
  </body>
</html>
<?php
  include 'partials/footer.php';
?>