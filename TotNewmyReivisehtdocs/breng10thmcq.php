<!DOCTYPE html>
<?php include 'db_connect.php'; ?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BSEB 10th The Pace for Living - 10th Panorama</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #121212;
            /* Dark background for better contrast */
            color: #e0e0e0;
            /* Light text color for readability */
            margin: 0;
            padding: 0;
        }

        .containerofMCQs {
            width: 100%;
            margin: auto;
            max-width: 700px;
            /*default = 900px*/
            padding: 20px;
            /*default = 20px;*/

        }

        .mcqwholeheading .icon {
            font-size: 2.2rem;
            /* Size of the icon */
            color: #f0f0f0;
            /* alternative good one is #c5c5c5 */
            margin-right: 4px;
            /* Space between icon and text */
            margin-bottom: 0px;
        }

        .mcqHead {
            text-transform: capitalize;
            /*for making the heading capitalise!*/
            color: #f0f0f0;
        }

        @media (max-width: 950px) and (min-width: 460px) {
            .containerofMCQs {
                width: 88%;
            }
        }

        @media (max-width: 759px) {
            .containerofMCQs {
                width: 95%;
            }
        }

        .mcqwhole {
            background-color: #121212;
        }

        /* Section for listing other subjects */
        .other-subjects-section {
            background-color: #1f1f1f;
            /* Darker background for the section */
            padding: 15px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.4);
            /* Subtle shadow for depth */
            margin: 20px auto;
            width: 250px;
            /* Adjusted width */
            border-radius: 6px;
            /* Slightly smaller border radius */
        }


        .other-subjects-heading {
            font-size: 1.25rem;
            /* Reduced font size */
            color: #f0f0f0;
            /* Light text color */
            margin-bottom: 10px;
            border-bottom: 2px solid #333;
            /* Underline effect */
            padding-bottom: 5px;
            /* Adjusted padding */
        }

        .other-subjects-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .other-subjects-list li {
            margin-bottom: 8px;
            /* Reduced margin */
        }

        .other-subjects-list a {
            color: #e0e0e0;
            /* Accent color for links */
            text-decoration: none;
            font-size: 1rem;
            /* Reduced font size */
            transition: color 0.3s;
            display: block;
            padding: 8px;
            /* Added padding for clickable area */
            border-radius: 4px;
            /* Rounded corners for links */
        }

        .other-subjects-list a:hover {
            color: #c0c0c0;
            /* Light color on hover */
            text-decoration: underline;
            background-color: #3a3a3a;
            /* Slight background color change on hover */
        }

        .containerofMCQs {
            margin-block: 0px;
            /*default = null, this class didn't exist and i don't know what the margin-block would be if i remove it!*/
        }

        /* .question {
            color: #fff;
            font-size: 1.18rem;
            max-width: 700px;
        }

        .mcqHeading {
            font-weight: 600;
            color: #121212;
        } */







        .option:hover {
            background-color: #e2e6ea;
        }

        .option.correct {
            background-color: #d4edda;
            border-color: #c3e6cb;
        }

        .option.incorrect {
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }

        .tick-icon {
            color: green;
        }

        .cross-icon {
            color: red;
        }

        /*.tick-icon,
        .cross-icon {
            font-size: 20px;
            display: none;
        }*/

        /* .ripple {
            position: absolute;
            border-radius: 50%;
            background: rgba(0, 0, 0, 0.2);
            transform: scale(0);
            pointer-events: none;
        } */

        /* .option input[type="radio"] {
            display: block;
        }

        .option input[type="radio"]:checked~.cross-icon {
            display: none;
        } */

        .answer-section {
            font-size: 16px;
            margin-top: 10px;
            display: none;
        }




        /* CSS FOR THE MCQ OPTIONS */

        .mcqwhole {
            margin-block: 80px;
        }

        /* CSS FOR THE HEADING OF THE ULTIMATE MCQ SECTIONS */
        .mcqwholeheading {
            font-size: 1.55rem;
            text-align: center;
            margin-top: 90px;
            margin-bottom: 15px;
            margin-inline: 50px;
            text-transform: uppercase;
        }

        @media (max-width: 740px) {
            .mcqwholeheading {
                font-size: 1.385rem;
            }
        }

        .question-section {
            background-color: #fcfcfc;
            border-radius: 8px;
            padding: 20px;
            margin-block: -15px;
        }

        .question {
            font-size: 1.135rem;
            font-weight: 500;
            margin-bottom: 15px;
            color: #b60000;
        }

        .containerofMCQs {
            width: 100%;
            margin: auto;
            max-width: 700px;
            padding: 20px;
        }

        .mcqHead {
            text-transform: capitalize;
        }

        @media (max-width: 950px) and (min-width: 460px) {
            .containerofMCQs {
                width: 88%;
            }
        }

        @media (max-width: 759px) {
            .containerofMCQs {
                width: 95%;
            }
        }

        /* .mcq-options {
            list-style-type: none;
            padding: 0;
            margin: 0;
        } */

        .mcq-options .option {
            background-color: #fcfcfc;
            border: 1px solid #a3a3a3;
            border-radius: 5px;
            margin-bottom: 6px;
            padding-inline: 10px;
            padding-block: 3px;
            padding: 10px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.28s;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            box-sizing: border-box;
        }


        .mcq-options .option:hover {
            background-color: #f5f5f5;
            transform: scale(1.017);
        }

        .mcq-options .option:active {
            transform: scale(0.94);
        }

        .mcq-options .option.correct {
            background-color: #d4edda;
            border: 0.3px solid #28a745;
        }

        .mcq-options .option.incorrect {
            background-color: #f8d7da;
            border: 0.3px solid #dc3545;
        }

        .mcq-options .option input[type="radio"] {
            margin-right: 10px;
            cursor: pointer;
            position: absolute;
            /* Position radio buttons off-screen */
            width: 0;
            height: 0;
            opacity: 0;
        }

        .mcq-options .option label {
            display: flex;
            align-items: center;
            width: 100%;
            cursor: pointer;
        }

        .mcq-options .tick-icon,
        .mcq-options .cross-icon {
            font-size: 1.2rem;
            margin-left: 10px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .mcq-options .tick-icon {
            color: green;
            /* Green for correct answers */
        }

        .mcq-options .cross-icon {
            color: red;
            /* Red for incorrect answers */
        }

        .mcq-options .option.correct .tick-icon {
            opacity: 1;
            transition: opacity 0.3s ease;
        }

        .mcq-options .option.incorrect .cross-icon {
            opacity: 1;
            transition: opacity 0.3s ease;
        }

        .answer-section {
            display: none;
            margin-top: 20px;
            font-size: 1rem;
            color: #333;
        }

        .answer-section span {
            font-weight: 600;
        }

        @media (max-width: 768px) {
            .mcq-options .option {
                font-size: 1rem;
            }
        }

        .mcq-options .option {
            position: relative;
            overflow: hidden;
            font-size: 1rem;
            height: 33.2px;
            font-weight: 500;
            color: #333;

        }

        .mcq-options .option .ripple {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transform: scale(0);
            animation: ripple 500ms linear;
            pointer-events: none;

        }

        @keyframes ripple {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }

        /* FOR THE DESIRED ALIGNMENT OF THE NAV BAR */
        .containernav {
            margin: auto;
            max-width: 900px;
        }

        /* Add these styles to your CSS file or within a <style> tag */
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
                        <li><a href="#home">Home</a></li>
                        <li><a href="#mcqs">MCQs</a></li>
                        <li><a href="#solutions">Solutions</a></li>
                        <li><a href="#tests">Online Tests</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main class="mcqwhole">
        <h2 class="mcqwholeheading">
            <i class="fa-solid fa-square-poll-vertical icon" title="MCQs"></i><span class="mcqHead">The Pace For Living - 10th Panorama</span>
        </h2>
        <?php
        include 'db_connect.php'; // Include your database connection file

        // Define the SQL query to join subjects, chapters, and contents
        $sql = "SELECT contents.id AS content_id, 
                   chapters.id AS chapter_id, 
                   contents.question, 
                   contents.option_a, 
                   contents.option_b, 
                   contents.option_c, 
                   contents.option_d, 
                   contents.correct_option, 
                   contents.ans_section 
            FROM contents 
            JOIN chapters ON contents.chapter_id = chapters.id
            JOIN subjects ON chapters.subject_id = subjects.id
            ORDER BY contents.id";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Fetch the data from the database
                $uniqueId = "mcq" . htmlspecialchars($row["content_id"]);
                $correctOption = htmlspecialchars($row["correct_option"]);
                $ansSection = htmlspecialchars($row["ans_section"]);

                // Echo the question and options
                echo "<div class='containerofMCQs'>";
                echo "<div class='question-section' id='$uniqueId'>";
                echo "<h2 class='question'>" . htmlspecialchars($row["content_id"]) . ". " . htmlspecialchars($row["question"]) . "</h2>";
                echo "<div class='mcq-options'>";

                // Option A
                echo "<div class='option'>";
                echo "<label for='option" . htmlspecialchars($row["content_id"]) . "A' class='text-lg cursor-pointer flex items-center w-full'>";
                echo "<input type='radio' name='option" . htmlspecialchars($row["content_id"]) . "' value='A' id='option" . htmlspecialchars($row["content_id"]) . "A' data-correct='$correctOption'>";
                echo "a) " . htmlspecialchars($row["option_a"]);
                echo "<span class='tick-icon hidden'>&#10003;</span>";
                echo "<span class='cross-icon hidden'>&#10007;</span>";
                echo "<span class='ripple'></span>";
                echo "</label>";
                echo "</div>";

                // Option B
                echo "<div class='option'>";
                echo "<label for='option" . htmlspecialchars($row["content_id"]) . "B' class='text-lg cursor-pointer flex items-center w-full'>";
                echo "<input type='radio' name='option" . htmlspecialchars($row["content_id"]) . "' value='B' id='option" . htmlspecialchars($row["content_id"]) . "B' data-correct='$correctOption'>";
                echo "b) " . htmlspecialchars($row["option_b"]);
                echo "<span class='tick-icon hidden'>&#10003;</span>";
                echo "<span class='cross-icon hidden'>&#10007;</span>";
                echo "<span class='ripple'></span>";
                echo "</label>";
                echo "</div>";

                // Option C
                echo "<div class='option'>";
                echo "<label for='option" . htmlspecialchars($row["content_id"]) . "C' class='text-lg cursor-pointer flex items-center w-full'>";
                echo "<input type='radio' name='option" . htmlspecialchars($row["content_id"]) . "' value='C' id='option" . htmlspecialchars($row["content_id"]) . "C' data-correct='$correctOption'>";
                echo "c) " . htmlspecialchars($row["option_c"]);
                echo "<span class='tick-icon hidden'>&#10003;</span>";
                echo "<span class='cross-icon hidden'>&#10007;</span>";
                echo "<span class='ripple'></span>";
                echo "</label>";
                echo "</div>";

                // Option D
                echo "<div class='option'>";
                echo "<label for='option" . htmlspecialchars($row["content_id"]) . "D' class='text-lg cursor-pointer flex items-center w-full'>";
                echo "<input type='radio' name='option" . htmlspecialchars($row["content_id"]) . "' value='D' id='option" . htmlspecialchars($row["content_id"]) . "D' data-correct='$correctOption'>";
                echo "d) " . htmlspecialchars($row["option_d"]);
                echo "<span class='tick-icon hidden'>&#10003;</span>";
                echo "<span class='cross-icon hidden'>&#10007;</span>";
                echo "<span class='ripple'></span>";
                echo "</label>";
                echo "</div>";

                // Answer Section
                echo "</div>"; // Close mcq-options
                echo "<div class='answer-section'>";
                echo "<p class='text-lg font-normal'><span>Ans: </span>" . $ansSection . "</p>";
                echo "</div>"; // Close answer-section
                echo "</div>"; // Close question-section
                echo "</div>"; // Close containerofMCQs
            }
        } else {
            echo "No MCQs found";
        }

        $conn->close();
        ?>

    </main>
    <!-- Javascript for the functionality of mcqs -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Iterate over each MCQ container
            document.querySelectorAll('.containerofMCQs').forEach(mcqContainer => {
                const options = mcqContainer.querySelectorAll('.option input[type="radio"]');
                const correctAnswer = mcqContainer.querySelector('.option input').getAttribute('data-correct');
                const answerSection = mcqContainer.querySelector('.answer-section');

                options.forEach(option => {
                    option.addEventListener('change', () => {
                        // Hide all tick and cross icons
                        mcqContainer.querySelectorAll('.tick-icon, .cross-icon').forEach(el => el.style.display = 'none');

                        // Remove previous correctness styles
                        mcqContainer.querySelectorAll('.option').forEach(el => el.classList.remove('correct', 'incorrect'));

                        // Get the selected option and the corresponding container
                        const optionContainer = option.closest('.option');

                        // Check if the selected option is correct
                        if (option.value === correctAnswer) {
                            optionContainer.classList.add('correct');
                            optionContainer.querySelector('.tick-icon').style.display = 'block';
                        } else {
                            optionContainer.classList.add('incorrect');
                            optionContainer.querySelector('.cross-icon').style.display = 'block';
                            // Show the tick icon for the correct option
                            const correctOptionContainer = mcqContainer.querySelector(`input[value="${correctAnswer}"]`).closest('.option');
                            correctOptionContainer.classList.add('correct');
                            correctOptionContainer.querySelector('.tick-icon').style.display = 'block';
                        }

                        // Show the answer explanation
                        answerSection.style.display = 'block';
                    });
                });
            });
        });
    </script>


    <div class="next-chapter-section">
        <p class="next-chapter-text" href="#" style="cursor: pointer;">Chapter 2: Me and the Ecology Bit</p>
        <a class="next-chapter-button">अगला अध्याय →</a>
    </div>

    <!-- New section for listing remaining chapters -->
    <div class="remaining-chapters-section">
        <h3 class="remaining-chapters-title">BSEB 10th Panorama के अन्य अध्याय: </h3>
        <hr />
        <ul class="remaining-chapters-list">
            <li>Chapter 3: द्विघात समीकरण</li>
            <li>Chapter 4: त्रिकोणमिति</li>
            <li>Chapter 5: सांख्यिकी</li>
            <!-- Add more chapters as needed -->
        </ul>
    </div>

    <section class="other-subjects-section">
        <h2 class="other-subjects-heading"> 📚 Other Subjects</h2>
        <ul class="other-subjects-list">
            <li><a href="#subject1">English</a></li>
            <li><a href="#subject2">संस्कृत</a></li>
            <li><a href="#subject3">भूगोल</a></li>
            <li><a href="#subject4">राजनीतिक शस्त्र</a></li>
            <li><a href="#subject7">इतिहास </a></li>
            <li><a href="#subject5">हिन्दी</a></li>
            <li><a href="#subject6 ">विज्ञान</a></li>
            <!-- Add more subjects as needed -->
        </ul>
    </section>

    <footer>
        <div class="container">
            <div class="follow-us">
                <h4>Follow Us</h4>
                <div class="social-icons">
                    <!-- WhatsApp Icon -->
                    <a href="https://whatsapp.com/yourprofile" class="icon whatsapp" title="WhatsApp">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-6 h-6" fill="currentColor">
                            <path d="M92.1 254.6c0 24.9 7 49.2 20.2 70.1l3.1 5-13.3 48.6L152 365.2l4.8 2.9c20.2 12 43.4 18.4 67.1 18.4h.1c72.6 0 133.3-59.1 133.3-131.8c0-35.2-15.2-68.3-40.1-93.2c-25-25-58-38.7-93.2-38.7c-72.7 0-131.8 59.1-131.9 131.8zM274.8 330c-12.6 1.9-22.4 .9-47.5-9.9c-36.8-15.9-61.8-51.5-66.9-58.7c-.4-.6-.7-.9-.8-1.1c-2-2.6-16.2-21.5-16.2-41c0-18.4 9-27.9 13.2-32.3c.3-.3 .5-.5 .7-.8c3.6-4 7.9-5 10.6-5c2.6 0 5.3 0 7.6 .1c.3 0 .5 0 .8 0c2.3 0 5.2 0 8.1 6.8c1.2 2.9 3 7.3 4.9 11.8c3.3 8 6.7 16.3 7.3 17.6c1 2 1.7 4.3 .3 6.9c-3.4 6.8-6.9 10.4-9.3 13c-3.1 3.2-4.5 4.7-2.3 8.6c15.3 26.3 30.6 35.4 53.9 47.1c4 2 6.3 1.7 8.6-1c2.3-2.6 9.9-11.6 12.5-15.5c2.6-4 5.3-3.3 8.9-2s23.1 10.9 27.1 12.9c.8 .4 1.5 .7 2.1 1c2.8 1.4 4.7 2.3 5.5 3.6c.9 1.9 .9 9.9-2.4 19.1c-3.3 9.3-19.1 17.7-26.7 18.8zM448 96c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96zM148.1 393.9L64 416l22.5-82.2c-13.9-24-21.2-51.3-21.2-79.3C65.4 167.1 136.5 96 223.9 96c42.4 0 82.2 16.5 112.2 46.5c29.9 30 47.9 69.8 47.9 112.2c0 87.4-72.7 158.5-160.1 158.5c-26.6 0-52.7-6.7-75.8-19.3z" />
                        </svg>
                    </a>

                    <!-- Instagram Icon -->
                    <a href="https://instagram.com/yourprofile" class="icon instagram" title="Instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-6 h-6" fill="currentColor">
                            <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                        </svg>
                    </a>

                    <!-- Twitter Icon -->
                    <a href="https://twitter.com/yourprofile" class="icon twitter" title="Twitter">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-6 h-6" fill="currentColor">
                            <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                        </svg>
                    </a>
                </div>
            </div>
            <p>&copy; 2024 Reivise. All rights reserved.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>