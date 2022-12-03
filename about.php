<!DOCTYPE html>
<html lang="en">
<head>
    <title>Job Vacancy Posting System - Post/Search Job</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="framework/css/style.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="framework/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <nav class="navbar sticky-top navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand ps-3" href="index.php">
                <img src="images/lg.png" alt="Logo" style="height:35px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <a class="nav-item nav-link active ps-4" href="postjobform.php">Post Jobs<span class="sr-only"></span></a>
                    <a class="nav-item nav-link active ps-4" href="searchjobform.php">Search Jobs<span class="sr-only"></span></a>
                    <a class="nav-item nav-link active ps-4" href="about.php">About Us<span class="sr-only"></span></a>
                    <li class="nav-item dropdown ps-4">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Support
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Help Centre</a></li>
                            <li><a class="dropdown-item" href="#">Support Inbox</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Report a Problem</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1>About Page</h1>
        <ul>
            <li>What is the PHP version installed in mercury?</li>
            <?php
                echo "<p>The PHP version is " . phpversion() . ".</p>";
            ?>
            <li>What tasks you have not attempted or not completed?</li>
            <p>I have completed all the tasks in this project and also create the design version of this assignment with Bootstrap and Vue.Js</p>
            <li>What special features have you done, or attempted, in creating the site that we should know about?</li>
            <p>Task 1: Home Page contains my name, student SIMS number, student email address, statement, link to the post job and search job form and about page.</p>
            <p>Task 2: Post Job Page with Job vacancy data - Position ID, Title, Description, Closing Date, Position, Contact, Accept, Location satisfied all the requirement that specified in project</p>
            <p>Task 3: Process Post Job Page satisfied all the requirement, instead of using directory data "data/jobposts/jobs.txt", I used "data/jobs.txt". You can see it more clearly through the zip I have submitted.</p> 
            <p>Task 4: Search Job Vacancy Page satisfied all requirement, using GET method for form submission and search through the file jobs.txt. Also provide the link to return Home Page.</p>
            <p>Task 5: Process Search Job Page satisfied all requirement, all records are searched and within string matches are being used and allowed. All matches is displayed for the viewer. In case that user haven't specified input or the system haven't found the matched result by input, It will generate suitable error notification for user.</p>
            <p>Task 6: You are looking my About Page.</p>
            <p>Task 7: Advanced Search Job Vacancy Page. I have modified the searchjobform with searchjobprocess to allow and support the additional search criteria by "Position","Contact","Application Type","Location".</p>
            <p>Task 8: Order and Display Job Vacancy Result Page. I have modified the searchjobprocess to diplay job vacancy from the most future closing data until today's date.</p>
            <li>What discussion points did you participated on in the unit’s discussion board for Assignment 1? If you did not participate, state your reason.</li>
            <p>I discussed directly with my lecturer on Collaborate Ultra (Canvas) when we have a class.</p>
        </ul>
    </div>
    <div class="h4 py-3 text-center">
        <a href="index.php" class="btn btn-secondary btn-lg btn-radius">Return to Home Page</a>
    </div>
    <footer class="bg-dark text-light">
        <div class="container-lg">
            <div class="row">
                <div class="col-lg-4">
                    <div class="p py-4 text-center">Address</div>
                </div>
                <div class="col-lg-4">
                    <div class="p py-4 text-center">Copyright © 2021, ZKL, Inc. All rights reserved.</div>
                </div>
                <div class="col-lg-4">
                    <div class="p py-4 text-center">Contact us: <a href="mailto:mailto:name@mail.com" style="color:orangered">name@mail.com</a></div>
                </div>
            </div>
        </div>
    </footer>
</body>
<!-- boostrap js  -->
<script src="framework/js/bootstrap.bundle.min.js"></script>
</html>