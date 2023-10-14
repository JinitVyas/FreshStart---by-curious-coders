<?php
    include 'partials/header.php';
?>

<div class="carousel">
    <div class="slides">
        <div class="slide first">
            <img src="partials/images/college1.jpeg" alt="Image 1" />
        </div>
        <div class="slide">
            <img src="partials/images/college2.jpeg" alt="Image 2" />
        </div>
        <div class="slide">
            <img src="partials/images/college3.jpg" alt="Image 3" />
        </div>
    </div>
</div>

<!-- Banner Section -->
<section class="banner  px-2">
    <h1 class="text-center">Welcome to FreshStart Guide</h1>
    <h4 class="text-center">Your College Companion</h4>
    
    <p>Freshstart Guide is your ultimate companion for navigating college life.<br>
	  Our website is a comprehensive resource that gathers valuable insights and guidance<br>
	  from experienced seniors, offering a wealth of information about your college, its events, and activities. <br>
	  Whether you're a new student looking for tips or a seasoned one seeking the latest updates,<br>
	  Freshstart Guide has you covered. Explore, connect, and make the most of your college journey with us.</p>
</section>

<!-- Key Features Section -->
<center>
    <section class="key-features">
        <div class="feature">
            <h2>Campus Map</h2>
            <p>Navigate the campus easily.</p>
            <img src="partials/images/map.png" alt="Image Map Example" usemap="#exampleMap" style="max-width: 100%;">
            <!-- Define the Image Map -->
            <map name="exampleMap">
                <!-- Define clickable areas within the image using <area> tags -->
                <!-- Example 1: Clickable Rectangle -->
                <area shape="rect" coords="100,100,200,200" href="https://www.example.com/page1.html" alt="college building" title="college">
                <!-- Example 2: Clickable Circle -->
                <area shape="circle" coords="300,200,50" href="https://www.example.com/page2.html" alt="hostel" title="Hostel">
                <!-- Example 1: Clickable Rectangle -->
                <area shape="rect" coords="300,300,100,100" href="https://www.example.com/page1.html" alt="sports area" title="sports">
                <!-- Example 1: Clickable Rectangle -->
                <area shape="rect" coords="300,400,200,200" href="https://www.example.com/page1.html" alt="Resourse area" title="Resourse">
                <!-- Example 1: Clickable Rectangle -->
                <area shape="rect" coords="50,100,150,200" href="https://www.example.com/page1.html" alt="library" title="library">
                <area shape="rect" coords="50,50,300,300" href="https://www.example.com/page1.html" alt="auditorium hall" title="auditorium">
            </map>
        </div>
    </section>
</center>

    <!-- Add more feature elements for other key features -->

<!-- How It Works Section -->
<section class="how-it-works">
    <h2>How It Works</h2>
    <p>Freshstart Guide is your ultimate companion for navigating college life.<br>
	  Our website is a comprehensive resource that gathers valuable insights and guidance<br>
	  from experienced seniors, offering a wealth of information about your college, its events, and activities. <br>
	  Whether you're a new student looking for tips or a seasoned one seeking the latest updates,<br>
	  Freshstart Guide has you covered. Explore, connect, and make the most of your college journey with us.</p>

    <!-- Add step-by-step explanation or content here -->
</section>

<!-- Testimonials Section -->
<section class="testimonials">
    <h2>What Students Say</h2>
    <div class="testimonial">
        <p>
            "FreshStart Guide made my college transition so much smoother. I
            highly recommend it!"
        </p>
        <p>- John Doe, Junior Student</p>
    </div>
    <!-- Add more testimonials as needed -->
</section>

<!-- Call to Action Section -->
<section class="cta">
    <h2>Ready to Get Started?</h2>
    <a href="#" class="cta-button">Get Started</a>
</section>

<?php
    include 'partials/footer.php';
?>