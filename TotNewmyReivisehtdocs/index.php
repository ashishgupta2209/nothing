<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reivise - Home</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .nrm1 {
            background-color: #1e90ff;
        }

        .nrm2 {
            background-color: #ff4b5c;
        }

        .nrm3 {
            background-color: #b840e7;
        }

        .nrm4 {
            background-color: #32bb36;
        }

        .nrm1:hover {
            background-color: #238fd8;
        }

        .nrm2:hover {
            background-color: #e03e47;
        }

        .nrm3:hover {
            background-color: #9532ce;
        }

        .nrm4:hover {
            background-color: #26a32b;
        }

        #done-button {
            background-color: rgb(31, 182, 157);
        }

        #done-button:hover {
            background-color: rgb(30, 161, 139);
        }

        h3 {
            margin-bottom: 6px;
            margin-top: -5px;
            font-size: 1.24rem;
            /*default - it was not set i.e. font-size = null!*/
        }

        #explore i {
            margin-right: 12px;
            /* best one might be 2px; Space between the icon and the heading text */
            font-size: 2.1rem;
            /* Adjust the icon size as needed */
            color: #e0e0e0;
            /* Adjust the color to match your design */
            margin-block: 0px;
            position: relative;
            /*default = null*/
        }

        #solusearch {
            font-size: 52px;
            /*it is separately sized because it seems small with the other normal icons' sizing!*/
        }



        .dropdowns {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-bottom: 20px;
        }

        .dropdown {
            padding: 12px;
            font-size: 1rem;
            border-radius: 7.5px;
            border: 1px solid #666666;
            /* Dark gray border */
            background-color: #3b3b3b;
            /* default = #333333 */
            color: #ffffff;
            /* White text */
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }


        .dropdown:hover,
        .dropdown:focus {
            background-color: #333333;
        }
    </style>
</head>

<body>
    <header>
        <div class="container containernav">
            <h2 class="navreivise" title="Reivise (home)">Reivise</h2>
            <nav>
                <div class="menu-toggle">

                    <span class="bar1"></span>
                    <span class="bar2"></span>
                    <span class="bar3"></span>
                </div>
                <div class="navicons">
                    <ul class="nav-links">
                        <li><a href="blogpost/blog_post.php">Blog</a></li>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#home">ChatBOT</a></li>
                        <li><a href="#mcqs">MCQs</a></li>
                        <li><a href="#solutions">Solutions</a></li>
                        <li><a href="#tests">Notes</a></li>
                        <li><a href="breng10thmcq.php">Contact</a></li>
                    </ul>

                </div>
            </nav>
        </div>

    </header>

    <!-- Hero Section! -->
    <section class="hero home">
        <div class="hero-content button-container">
            <h2>BOOST Your Learning with Reivise</h2>
            <p>Your ultimate resource for <span style="font-weight:bold">MCQs</span>, <span style="font-weight:bold">Solutions</span>, and <span style="font-weight:bold">Online Tests</span> for BSEB and CBSE boards.</p>
            <a href="MCQsredi.html" class="button button-zero">Explore MCQs</a>
            <a href="Soluredi.html" class="button button-one">View Solutions</a>
            <a href="onlineredi.html" class="button button-secondary">Take a test</a>
            <a href="getnotesredi.html" class="button button-tertiary">Get Notes</a>
        </div>

    </section>
    <!-- Main Section -->
    <section class="misc-info">
        <div class="container">
            <h2 id="explore">
                <i class="fa-solid fa-binoculars"></i>Explore Our Top Resources
            </h2>

            <div class="info-items">
                <div class="info-item">
                    <div class="icon">
                        <i class="fa-solid fa-square-poll-vertical" aria-hidden="true" style="font-size: 50px;"></i>
                    </div>
                    <h3>MCQs</h3>
                    <p>Test your knowledge with frequently asked MCQs designed to make you Unbeatable.</p>
                    <a href="MCQsredi.html" class="nrbutton nrm1">Access MCQs</a>
                </div>
                <div class="info-item">
                    <div class="icon">
                        <i class="fa-brands fa-searchengin" id="solusearch" aria-hidden="true" style="font-size: 58px;"></i>
                    </div>
                    <h3>Solutions</h3>
                    <p>Access the most optimal and accurate text-book Solutions to CBSE and Bihar Board.</p>
                    <a href="Soluredi.html" class="nrbutton nrm2">Text-Book Solutions</a>
                </div>
                <div class="info-item">
                    <div class="icon">
                    <i class="fa-solid fa-robot" aria-hidden="true"></i>
                    </div>
                    <h3>ChatBOT</h3>
                    <p>Access our specially designed Reivise ChatBOT, talks both in Hindi and English, as per your Board.</p>
                    <a href="onlineredi.html" class="nrbutton nrm3">ChatBOT</a>
                </div>
                <div class="info-item">
                    <div class="icon">
                        <i class="fa fa-file-alt" aria-hidden="true"></i>
                    </div>
                    <h3>Get Notes</h3>
                    <p>Connect with experienced tutors who provide personalized guidance and support.</p>
                    <a href="getnotesredi.html" class="nrbutton nrm4">Get Notes</a>
                </div>
                <div class="info-item" style="transform: translateY(0px) !important">
                    <div class="icon">
                        <i class="fa-regular fa-square-caret-down" aria-hidden="true"></i>

                    </div>
                    <h3>Short-Cut</h3>
                    <p>Select your Board, Class, and Question Type.</p>

                    <div class="dropdowns">
                        <!-- Board Dropdown -->
                        <select id="board-select" class="dropdown" required>
                            <option value="" disabled selected>Select Your Board</option>
                            <option value="cbse">CBSE</option>
                            <option value="bihar-board">Bihar Board</option>
                            <!-- Add more boards if needed -->
                        </select>

                        <!-- Class Dropdown -->
                        <select id="class-select" class="dropdown" required>
                            <option value="" disabled selected>Select Your Class</option>
                            <option value="class8">Class 8</option>
                            <option value="class9">Class 9</option>
                            <option value="class10">Class 10</option>
                            <!-- Add more classes if needed -->
                        </select>

                        <!-- Subject Dropdown -->
                        <select id="subject-select" class="dropdown" required>
                            <option value="" disabled selected>Select Question Type</option>
                            <option value="mcqs">MCQs</option>
                            <option value="text_book_solution">Text-Book Solution</option>
                            <option value="online_test">Online Test</option>
                            <option value="get_notes">Notes</option>
                            <!-- Add more subjects if needed -->
                        </select>
                    </div>

                    <a href="" class="nrbutton" id="done-button">Done</a>
                </div>


            </div>
        </div>
    </section>

    <?php include 'footer.php' ?>

    <script src="script.js"></script>

</body>

</html>