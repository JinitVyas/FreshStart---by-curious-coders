<?php
    include "partials/header.php";
?>
<style>
        /* Reset some default styles for consistency */
        body, h1, h2, p, ul {
            margin: 0;
            padding: 0;
        }

        /* Apply a background color and set text color */
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            color: #333;
            line-height: 1.6;
        }

        /* Style the header */
        header {
            background-color: #0077b6;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        /* Style the navigation menu */
        nav ul {
            list-style-type: none;
            background-color: #333;
            text-align: center;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
        }

        /* Style the main content */
        main {
            max-width: 100%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #fff;
        }

        h2 {
            color: #0077b6;
        }

        /* Style the footer */
        footer {
            text-align: center;
            padding: 10px 0;
            background-color: #333;
            color: #fff;
        }
    th, td {
                border: 1px solid #ccc;
                padding: 8px;
                text-align: left;
            }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
	
	.rule {
		width:65%;
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
<body><center>
    <header>
        <h1 class="w-100">Course Guidelines</h1>
	</header>
    <main>
        <section id="section1">
            <h2>Introduction:-</h2><br>
            <p>Welcome to our college and thank you for your interest in our course.<br> 
            Here is a list of courses which are offered by our college and designed to provide students with a comprehensive understanding of concepts.
        </p><br>
    
	<table border="2px"><h2>Courses:</h2>
        <tr>
            <th>Bachelor's</th>
            <th>Master's</th>
            <th>Specialization </th>
        </tr>
        <tr>
            <td>BCA</td>
            <td>MCA</td>
            <td>AI & ML</td>
        </tr>
        <tr>
            <td>BBA</td>
            <td>MBA</td>
            <td>Digital Marketing</td>
        </tr>
        <tr>
            <td>B.Com</td>
            <td>M.Com</td>
            <td>Finance Management</td>
        </tr>
        <tr>
            <td>B.Sc</td>
            <td>M.Sc</td>
            <td>Forensic Science</td>
        </tr>
        
    </table><br>
        </section>
        
	<section id="section2">
            <h2>Course Duration:-</h2>
            <tr>
<table>
            <th>Bachelor's</th>
            <th>Master's</th>
            <th>Specialization </th>
            </tr>
	    <tr>
            <td>3 Years</td>
            <td>2 Years</td>
            <td>6 Month To 1 Years</td>
            </tr>
    </table>  <br>  	
        
        
        <section id="section3">
	<div class="rule">
            <h2>Rules & Regulations:-</h2>
            <h4>Academic Integrity:</h4>
		<p>Plagiarism and cheating are strictly prohibited.
		Students are expected to uphold academic honesty and integrity in all coursework.</p>

		<h4>Attendance:</h4>
		<p>Some colleges have attendance policies, and students may be required to attend a certain percentage of classes to be eligible for exams 		or receive credit for courses.<p>

		<h4>Code of Conduct:</h4>
		<p>Students are expected to follow a code of conduct that promotes respectful and responsible behavior within the college community.</p>

		<h4>Dress Code:</h4>
		<p>Some colleges have specific dress codes or guidelines for appropriate attire on campus.</p>

		<h4>Alcohol and Drug Policies:</h4>
		<p>Policies regarding the possession and use of alcohol and drugs on campus.<p>

		<h4>Safety and Security:</h4>
		<p>Guidelines for campus safety, including rules about access to buildings, security procedures, and emergency protocols.</p>

		<h4>Housing Regulations:</h4>
		<p>Rules and expectations for students living in college dormitories or housing facilities.</p>

		<h4>Library and Computer Lab Rules:</h4>
		<p>Guidelines for the use of college libraries and computer labs, including borrowing policies and acceptable use of technology.</p>

		<h4>Harassment and Discrimination Policies:</h4>
		<p>Policies against harassment, discrimination, and hate speech, as well as procedures for reporting such incidents.</p>
		
		<h4>Financial Responsibilities:</h4>
		<p>Information on tuition, fees, payment deadlines, and financial aid policies.</p>

		<h4>Parking and Transportation:</h4>
		<p>Rules regarding parking on campus and the use of college transportation services.</p>

		<h4>Social Events and Parties:</h4>
		<p>Policies for hosting and attending social events, parties, and gatherings on or off campus.</p>
		
		<h4>Smoking and Tobacco Policies:</h4>
		<p>Rules regarding smoking and tobacco use on campus.</p>
</div>

        </section>
        <div class="center-button">
            <button><a href="index.php">Back to Home</a></button>
        </div>
    </main>
</center> 
    </body>
</html>
<?php
    include "partials/footer.php";
?>