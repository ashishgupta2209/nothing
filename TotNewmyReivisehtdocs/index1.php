<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reivise - Home</title>
    <link rel="stylesheet" href="styles1.css">
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

        /* #explore i {
            margin-right: 12px;
           
            font-size: 2.1rem;
            
            color: #e0e0e0;
           
            margin-block: 0px;
            position: relative;
            
        } */

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



        /* Hero section styles */


        /* Search bar styles */
        .search-container {
            display: flex;
            justify-content: center;
            align-items: center;
            max-width: 600px;
            margin-inline: auto;
            margin-top: -7px;
            margin-bottom: 15px;
        }

        .search-container input {
            padding: 10px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 25px 0 0 25px;
            font-size: 16px;
            outline: none;
            width: 100%;
            max-width: 400px;

        }

        /* Enhanced focus effect */
        .search-container input:focus {
            border: 2px solid #1e90ff;
            /* Change border color on focus */
            border-radius: 25px 0 0 25px;
            /* Keep the rounded corners consistent */
            background-color: #f0f8ff;
            /* Light background on focus */
            box-shadow: 0 0 5px rgba(30, 144, 255, 0.5);
            /* Subtle shadow for emphasis */
            outline: none;
            /* Remove default focus outline */
        }

        .search-container button {
            padding: 10px 20px;
            background-color: #1e90ff;
            border: 2px solid #1e90ff;
            border-radius: 0 25px 25px 0;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        .search-container button i {
            margin-right: 5px;
            font-size: 17px;
        }

        .search-container button:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .search-container button:active {
            transform: scaleY(0.92);
        }

        .search-container input::placeholder {
            color: #aaa;
        }

        /* Styles for the aside section */
        .recent-posts {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            font-family: 'Arial', sans-serif;
            margin-inline: auto;
            margin-block: 15px 10px;
            max-width: 100%;
            margin-inline: 10px;
            border: 1px solid #666;
            font-family: inherit;

        }

        .recent-posts h2 {
            font-size: 1.1rem;
            text-transform: uppercase;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
            color: #333;
            padding-block: 5px;
            border-radius: 5px;
            border-bottom: 1px solid #666;
        }

        .recent-posts h2 span {
            width: 1px;
            height: 18px;
            background-color: black;
            margin-inline: 1.5px;
        }

        .recent-posts h2 i {
            font-size: 1.35rem;
            color: #1e90ff;
        }

        .recent-posts ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        /* .recent-posts ul li {
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 15px;
        border-bottom: 1px solid #eee; 
        padding-bottom: 10px; 
        } */

        .recent-posts ul li a {
            font-size: 0.94rem;
            color: #3b3b3b;
            text-decoration: none;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 10px;
            flex: 1;
            /* Allows the link to take available space */
            margin-block: 18px
        }

        .recent-posts ul li a i {
            font-size: 1.4rem;
            /* Slightly larger for better visibility */
            color: #333;
        }

        .recent-posts ul li a:hover {
            text-decoration: underline;
        }

        .recent-posts ul li p {
            margin: 0;
            color: #666;
            font-size: 0.9rem;
            margin-left: 5px;
            /* Add space between the icon and the text */
        }

        .nrbutton {
            transition: all 0.3s ease;


        }

        .nrbutton:hover {
            transform: translateY(-2px);
        }

        .nrbutton:active {
            transform: scale(0.9);

        }

        /* Container for buttons and popover */
        .popover-container {
            position: relative;
            display: inline-block;
        }

        /* Styling for the popover */
        .popover {
            display: none;
            width: 180px;
            /* default = 160px*/
            /* Adjust width as needed */
            background-color: #333;
            color: #fff;
            text-align: center;
            border: 1.5px solid #444;
            border-radius: 5px;
            padding: 10px;
            position: absolute;
            z-index: 10;
            bottom: 125%;
            /* Position above the button */
            left: 50%;
            margin-left: -80px;
            /* Center the popover */
            opacity: 0;
            transition: opacity 0.3s, visibility 0.3s;
            font-size: 0.9rem;
            /* Adjust font size as needed */
        }

        /* Title section in the popover */
        .popover-title {
            font-weight: bold;
            padding-bottom: 5px;
            border-bottom: 1px solid #555;
            /* Optional border to separate title from content */
            margin-bottom: 5px;
        }

        /* Content section in the popover */
        .popover-content {
            padding: 5px 0;
        }

        /* Arrow pointing to the button */
        .popover::after {
            content: "";
            position: absolute;
            top: 100%;
            /* Arrow at the bottom of the popover */
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #333 transparent transparent transparent;
        }

        /* Show the popover on active class */
        .popover-active {
            display: block;
            opacity: 1;
        }

        .instruc {
            display: block !important;
            margin-block: 7px;
            text-transform: capitalize;
            color: #ffffff;

        }
        
    </style>
</head>

<body>
    <?php include 'navbar.php' ?>

    <!-- Hero Section! -->
    <section class="hero home">
        <div class="hero-content button-container">
            <h2>BOOST Your Learning with Reivise</h2>
            <p>Your ultimate resource for <span style="font-weight:bold">MCQs</span>, <span style="font-weight:bold">Solutions</span>, and <span style="font-weight:bold">Online Tests</span> for BSEB and CBSE boards.</p>

            <!-- Search Bar -->
            <div class="search-container">
                <input type="text" placeholder="Ask ChatBOT...">
                <button type="submit"><i class="fas fa-search"></i></button>
            </div>
            <a href="MCQsredi.php" class="button button-zero">Explore MCQs</a>
            <a href="Soluredi.html" class="button button-one">View Solutions</a>
            <a href="onlineredi.html" class="button button-secondary">ChatBOT</a>
            <a href="getnotesredi.html" class="button button-tertiary">Get Notes</a>
        </div>

    </section>

    <!-- Main Section -->
    <section class="misc-info">
        <div class="container">
            <h2 id="explore">
                <i class="fa-solid fa-binoculars" style="margin-right: 12px; font-size: 2.1rem;"></i>Explore Our Top Resources
            </h2>

            <div class="info-items">
                <div class="info-item">
                    <div class="icon">
                        <i class="fa-solid fa-square-poll-vertical" aria-hidden="true"></i>
                    </div>
                    <h3>MCQs</h3>
                    <p>Test your knowledge with frequently asked Solutions designed to make you Unbeatable.</p>
                    <div class="popover-container">
                        <a href="MCQsredi.php" class="nrbutton nrm1" data-popover="popover-mcqs-bseb">BSEB <i class="fa-solid fa-caret-down"></i></a>
                        <div id="popover-mcqs-bseb" class="popover">
                            <div class="popover-title">बिहार बोर्ड MCQs</div>
                            <span class="instruc">अपनी कक्षा चुने:</span>
                            <div class="popover-content"><a href="MCQs\BSEB_MCQs\Class10thMCQ\Br10thmcqredi.php" class="nrbutton nrm2" style="margin-bottom: 3.2px !important">Class 9th <i class="fa-solid fa-caret-right"></i></a>
                                <a href="MCQs\BSEB_MCQs\Class10thMCQ\Br10thmcqredi.php" class="nrbutton nrm4">Class 10th <i class="fa-solid fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="popover-container">
                        <a href="MCQsredi.php" class="nrbutton nrm2" data-popover="popover-mcqs-cbse">CBSE <i class="fa-solid fa-caret-down"></i></a>
                        <div id="popover-mcqs-cbse" class="popover">
                            <div class="popover-title">CBSE MCQs</div>
                            <span class="instruc">Select Your Class:</span>
                            <div class="popover-content"><a href="MCQsredi.php" class="nrbutton nrm4" data-popover="popover-mcqs-bseb" style="margin-bottom: 3.2px !important">Class 9th <i class="fa-solid fa-caret-right"></i></a>
                                <a href="MCQsredi.php" class="nrbutton nrm1" data-popover="popover-mcqs-bseb">Class 10th <i class="fa-solid fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="info-item">
                    <div class="icon">
                        <i class="fa-brands fa-searchengin" id="solusearch" aria-hidden="true" style="font-size: 59px;"></i>
                    </div>
                    <h3>Solutions</h3>
                    <p>Access the most optimal and accurate text-book Solutions to CBSE and Bihar Board.</p>
                    <div class="popover-container">
                        <a href="MCQsredi.php" class="nrbutton nrm4" data-popover="popover-sol-bseb">BSEB <i class="fa-solid fa-caret-down"></i></a></a>
                        <div id="popover-sol-bseb" class="popover">
                            <div class="popover-title">BSEB Board Solutions</div>
                            <span class="instruc">Get BSEB Text-book Solutions for:</span>
                            <div class="popover-content"><a href="MCQsredi.php" class="nrbutton nrm1" data-popover="popover-mcqs-bseb" style="margin-bottom: 3.2px !important">Class 9th <i class="fa-solid fa-caret-right"></i></a>
                                <a href="MCQsredi.php" class="nrbutton nrm2" data-popover="popover-mcqs-bseb">Class 10th <i class="fa-solid fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="popover-container">
                        <a href="MCQsredi.php" class="nrbutton nrm1" data-popover="popover-sol-cbse">CBSE <i class="fa-solid fa-caret-down"></i></a></a>
                        <div id="popover-sol-cbse" class="popover">
                            <div class="popover-title">CBSE Solutions</div>
                            <span class="instruc">Access CBSE Text-book Solutions for:</span>
                            <div class="popover-content"><a href="MCQsredi.php" class="nrbutton nrm4" data-popover="popover-mcqs-bseb" style="margin-bottom: 3.2px !important">Class 9th <i class="fa-solid fa-caret-right"></i></a>
                                <a href="MCQsredi.php" class="nrbutton nrm1" data-popover="popover-mcqs-bseb">Class 10th <i class="fa-solid fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const buttons = document.querySelectorAll('.popover-container a');
                        const popovers = document.querySelectorAll('.popover');

                        buttons.forEach(button => {
                            button.addEventListener('click', function(event) {
                                // Check if the clicked element has a popover associated with it
                                const popover = button.nextElementSibling;

                                // If the button has an associated popover and it's currently inactive
                                if (popover && popover.classList.contains('popover')) {
                                    event.preventDefault(); // Prevent link navigation for toggling popover
                                    // Hide all other popovers
                                    popovers.forEach(p => {
                                        if (p !== popover) {
                                            p.classList.remove('popover-active');
                                        }
                                    });

                                    // Toggle the visibility of the clicked popover
                                    popover.classList.toggle('popover-active');
                                }
                            });
                        });

                        document.addEventListener('click', function(event) {
                            // Close all popovers when clicking outside
                            if (!event.target.closest('.popover-container')) {
                                popovers.forEach(p => p.classList.remove('popover-active'));
                            }
                        });
                    });
                </script>

                <div class="info-item">
                    <div class="icon">
                        <i class="fa-solid fa-robot" aria-hidden="true"></i>
                    </div>
                    <h3>ChatBOT</h3>
                    <p>Access our specially designed Reivise ChatBOT, talks both in Hindi and English, as per your Board.</p>
                    <a href="onlineredi.html" class="nrbutton nrm3">ChatBOT <i class="fa-solid fa-paper-plane"></i></a>
                </div>
                <div class="info-item">
                    <div class="icon">
                        <i class="fa fa-file-alt" aria-hidden="true"></i>
                    </div>
                    <h3>Get Notes</h3>
                    <p>Connect with experienced tutors who provide personalized guidance and support.</p>
                    <div class="popover-container">
                        <a href="MCQsredi.php" class="nrbutton nrm2" data-popover="popover-notes-bseb">BSEB <i class="fa-solid fa-caret-down"></i></a></a>
                        <div id="popover-notes-bseb" class="popover">
                            <div class="popover-title"> Bihar Board Notes</div>
                            <span class="instruc">Get hand-written BSEB notes for:</span>
                            <div class="popover-content"><a href="MCQsredi.php" class="nrbutton nrm1" data-popover="popover-mcqs-bseb" style="margin-bottom: 3.2px !important">Class 9th <i class="fa-solid fa-caret-right"></i></a>
                                <a href="MCQsredi.php" class="nrbutton nrm4" data-popover="popover-mcqs-bseb">Class 10th <i class="fa-solid fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="popover-container">
                        <a href="MCQsredi.php" class="nrbutton nrm1" data-popover="popover-notes-cbse">CBSE <i class="fa-solid fa-caret-down"></i></a></a>
                        <div id="popover-notes-cbse" class="popover">
                            <div class="popover-title">CBSE Notes</div>
                            <span class="instruc">Get CBSE Text-Book Notes For</span>
                            <div class="popover-content"><a href="MCQsredi.php" class="nrbutton nrm4" data-popover="popover-mcqs-bseb" style="margin-bottom: 3.2px !important">Class 9th <i class="fa-solid fa-caret-right"></i></a>
                                <a href="MCQsredi.php" class="nrbutton nrm2" data-popover="popover-mcqs-bseb">Class 10th <i class="fa-solid fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
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

                    <a href="" class="nrbutton" id="done-button">Done </a>
                </div>


            </div>
        </div>
    </section>

    <!-- Aside Section for Recent Posts -->
    <aside class="recent-posts">
        <h2><i class="fa-solid fa-clock"></i> <span></span>Recent Posts</h2>
        <ul>
            <li><a href="">> Class 10th Social Science Subjective</a></li>
            <li><a href="">> Class 10th Science Subjective</a></li>
            <li><a href="">> Class 10th Hindi Subjective</a></li>
            <li><a href="">> Class 10th Social Science Objective</a></li>
            <li><a href="">> Class 10th Hindi Objective</a></li>
            <li><a href="">> Class 10th Science Objective</a></li>
            <li><a href="">> Class 10th Sanskrit Subjective</a></li>
            <li><a href="">> Class 10th PDF Download</a></li>
            <!-- Add more posts as needed -->
        </ul>
    </aside>


    <!-- footer -->
    <?php include 'footer.php' ?>
    <script src="script.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var header = document.querySelector('header');
            var lastScrollTop = 0;

            window.addEventListener('scroll', function() {
                var currentScroll = window.pageYOffset || document.documentElement.scrollTop;

                if (currentScroll > lastScrollTop) {
                    // Scrolling down
                    header.style.top = '-80px'; // Adjust based on header height
                } else {
                    // Scrolling up
                    header.style.top = '0';
                }
                lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // For Mobile or negative scrolling
            });
        });
    </script>


</body>

</html>