<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> BSEB 8th Solutions - Choose the Subject - Reivise</title>
    <link rel="stylesheet" href="../../../styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .nrbutton {
            border-radius: 8px;
            /*See if you want to make the borders circular by asinging a value of 50% or not!*/
            font-size: 1.65rem;
            /* default = 1.4rem*/
            padding: 7px 13px;
            /*default = 9px 16.5px*/
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
            /* Subtle shadow */
            margin-right: 4px;
            /*default = null*/
            /* margin-right: 5px; see if you want to specify left margin, since it look good without it too! */
        }

        .n1 {
            background: #ff4b5c;
        }

        .n2 {
            background: #1e90ff;
            /* Blue */
        }

        .n3 {
            background: #cc4bff;
            /*default = #222*/
        }

        .n1:hover {
            background: #e03e47;
            transform: translateY(-2px);
        }

        .n3:hover {
            background: #ad3eeb;
            /* default = #333*/
            transform: translateY(-2px);
        }

        .n2:hover {
            background: #238fd8;
            /* Darker blue */
            transform: translateY(-2px);
        }

        .n1::before,
        .n2::before,
        .n3::before {
            content: '';
            position: absolute;
            background: rgba(255, 255, 255, 0.289);
            /*default = 0.3 opacity*/
            border-radius: 50%;
            width: 300%;
            height: 300%;
            left: -50%;
            top: -50%;
            transition: transform 0.5s, opacity 0.5s;
            transform: scale(0);
            opacity: 0;
        }

        .n1:focus::before,
        .n1:hover::before,
        .n2:focus::before,
        .n2:hover::before,
        .n3:focus::before,
        .n3:hover::before {
            transform: scale(1);
            opacity: 1;
        }

        /* for the ripple effect only when the button is clicked for coarse pointered devices */
        @media (pointer: coarse) {

            .n1:active::before,
            .n2:active::before,
            .n3:active::before {
                transform: scale(1);
                opacity: 1;
            }
        }

        .n1:active,
        .n2:active,
        .n3:active {
            transform: scale(0.915);
        }

        /* Ensure the section has padding and center alignment */
        .misc-info {
            background-color: #202020;
            /* default = #202020 */
            color: #fff;
            /* White text for contrast */
            padding: 40px 20px;
            text-align: center;
        }

        /* Heading styling
    .misc-info h2 {
        margin-bottom: 20px;
        font-weight: bold;
    } */

        /* Ensure info items do not stretch too wide and center them */
        .info-item {
            background: #313131;
            /* default = #313131 */
            color: #fff;
            padding: 27px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
            max-width: 380px;
            /* best for tablets and mobile - 320.3px */
            max-height: 65px;
            /*default one was 70px*/
            width: 95%;
            /* default and probably best - 100% */
            margin: 2px;
            /*defalut = 2px without the ius sign '-'*/
            transition: transform 0.3s, box-shadow 0.3s;
            overflow: hidden;
            position: relative;
            /* Ensure the strip is properly positioned */
            display: flex;
            align-items: center;
            justify-content: space-between;
            white-space: nowrap;
            /* Prevent content from wrapping */

        }

        .info-item:hover {
            transform: translateY(-3px);
            /* default = -10px, as per style.css*/
            background-color: #413f3f;
        }

        /* Heading inside the item */
        .info-item h3 {
            font-size: 1.4rem;
            /*default = 1.45rem;*/
            margin: 7px 0;
            /*default = 10px 0;*/
            color: #fff;
            /* White for headings inside the item */
            text-align: left;
            flex: 1;
            margin-left: 19px;
            margin-right: 10px;

        }


        /* Paragraph text inside the item */
        .info-item p {
            margin-bottom: 20px;
            color: #ccc;
            /* Lighter gray for paragraph text */
        }

        .info-items {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px;
        }

        /* Adjust layout for larger screens */
        @media (min-width: 600px) {

            /*default = 768px;*/
            .info-items {
                flex-direction: column;
                /* Change to row layout on larger screens */
                flex-wrap: wrap;
                /* Allow wrapping if necessary */
                justify-content: center;
                /* Center items horizontally */
                align-items: center;
                gap: 20px;
            }
        }

        .misc-info h2 {
            /*Css of the font-size of misc-info h2 to override that of styles.css!*/
            font-size: 1.5rem;
            margin-top: 35px;
            margin-bottom: 15px;
        }

        /* Strip for each info item */
        .info-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 10px;
            /* Width of the strip */
            height: 100%;
            /* Full height of the option */
            background-color: #d8e700;
            /* Color of the strip */
            border-radius: 2px 0 0 2px;
            /* Rounded corners on the left side */


        }

        .info1::before {
            background-color: #1e90ff;
        }

        .info2::before {
            background-color: #ff4b5c;
        }

        .info3::before {
            background-color: #4caf50;
        }

        .info4::before {
            background-color: #cc4bff;
        }

        .info6::before {
            background-color: #40ff8f
        }

        .icon {
            font-size: 33px;
            /*default = 35px*/
            color: #f8f8f8;
            /* default = #e0e0e0, second best consideration = #ececec */
            margin-block: 12px;
        }

        /* The vertical bar between the icon and the heading of info-item h3 */
        .info-item h3::before {
            content: '';
            position: relative;
            display: inline-block;
            /* Ensures the pseudo-element respects width and height */
            width: 1.55px;
            /* default = 1.5px*/
            height: 25px;
            /* Height of the vertical line */
            background-color: #f8f8f8;
            /* Color of the vertical line */
            margin-left: -5px;
            /* default = -8px */
            margin-right: 16px;
        }

        @media (max-width: 470px) {
            /*default = 450px*/

            .info-item {
                padding: 15px;
                /* Reduce padding */
                max-width: 95%;
                /* Make sure items fit the screen */
                max-height: 65px;
                /* yaha bhi default = 70px*/
                width: 100%;
                /* Full width */
                margin: 0px 0;
                /* default = 5px 0 */

            }

            /* Adjust heading sizes inside .info-item */
            .info-item h3 {
                font-size: 1.35rem;
                /* default = 1.35rem */
                margin: 5px 0;
                /* Adjust margin */
                margin-right: 14.5px;
            }

            /* Adjust .nrbutton styles */
            .nrbutton {
                font-size: 1.6rem;
                /* Reduce font size */
                padding: 8px 13px;
                /* Reduce padding */

                margin-right: 9px;
            }

            /* Adjust icon size */
            .icon {
                font-size: 30px;
                /* Reduce icon size */
                margin-right: 10px;
                /* Adjust margin */
                margin-left: 10px;
            }
        }

        .dropdown-content tr:active {
            transform: scale(0.98);
            transition: transform 0.3s ease;
        }
    </style> !important
    <!-- The important above IS important and does work, so don't remove it! -->

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
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- MCQs BSEB and CBSE options here -->
    <section class="misc-info">
        <div class="container">
            <h2>MCQs - 10th Bihar Board</h2> <!--There was Select Your Board here with font-size of 1.9rem!-->
            <div class="info-items">
                <div class="info-item info1">
                    <div class="icon">
                        <i class="fa-solid fa-calculator" aria-hidden="true"></i>
                    </div>

                    <h3>गणित </h3>

                    <a href="Br8thmcqsubjects\mathmcqlistch\mathmcqchlist.html" class="nrbutton n1" id="br10thmcqnr10"
                        aria-label="Mathematics Class 8"><i class="fa-solid fa-square-poll-vertical"></i></a>
                </div>

                <!-- Dropdown Content -->
                <div class="dropdown-content" id="dropdown10">
                    <table>
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>गणित ~ BSEB 10th MCQs</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td><a href="#">वास्तविक संख्याएँ</a></td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td><a href="#">बहुपद</a></td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td><a href="#">दो चरों वाले रैखिक समीकरण युग्म</a></td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td><a href="#">द्विघात समीकरण</a></td>
                            </tr>
                            <tr>
                                <td>5.</td>
                                <td>समांतर श्रेढ़ियाँ</td>
                            </tr>
                            <tr>
                                <td>6.</td>
                                <td>त्रिभुज</td>
                            </tr>
                            <tr>
                                <td>7.</td>
                                <td>निर्देशांक ज्यामिति</td>
                            </tr>
                            <tr>
                                <td>8.</td>
                                <td>त्रिकोणमिति का परिचय</td>
                            </tr>
                            <!-- Add more chapters as needed -->
                        </tbody>
                    </table>
                </div>
                <script>
    document.addEventListener('DOMContentLoaded', () => {
        const buttons = document.querySelectorAll('.nrbutton');
        let lastOpenedDropdown = localStorage.getItem('lastOpenedDropdown');

        // Handle button clicks
        buttons.forEach(button => {
            button.addEventListener('click', (event) => {
                event.preventDefault();

                // Get the target dropdown id from the button id
                const buttonId = button.id; // e.g., 'br10thmcqnr1', 'br10thmcqnr2'
                const targetId = `dropdown${buttonId.slice(-2)}`; // Convert 'br10thmcqnr1' to 'dropdown1'
                const dropdown = document.getElementById(targetId);

                // Toggle the dropdown visibility
                if (dropdown.style.display === 'block') {
                    dropdown.style.display = 'none';
                    localStorage.removeItem('lastOpenedDropdown'); // Remove from localStorage if closed
                } else {
                    // Close all other dropdowns
                    document.querySelectorAll('.dropdown-content').forEach(content => {
                        content.style.display = 'none';
                    });

                    // Open the clicked dropdown
                    dropdown.style.display = 'block';
                    localStorage.setItem('lastOpenedDropdown', buttonId); // Save the current buttonId as the last opened
                }
            });
        });

        // Open only the last opened dropdown on page load
        if (lastOpenedDropdown) {
            const targetId = `dropdown${lastOpenedDropdown.slice(-2)}`; // Convert 'br10thmcqnr1' to 'dropdown1'
            const dropdown = document.getElementById(targetId);
            if (dropdown) {
                dropdown.style.display = 'block';
            }
        }
    });
</script>



                <div class="info-item info2">
                    <div class="icon">
                        <i class="fa-solid fa-flask" aria-hidden="true"></i>
                    </div>
                    <h3>भौतिकी</h3>
                    <!-- <p>Discover MCQs for Science of BSEB 8th class.</p> -->
                    <a href="#" class="nrbutton n3" id="br10thmcqnr11" aria-label="Science Class 9"><i
                            class="fa-solid fa-square-poll-vertical"></i></a>
                </div>

                <div class="dropdown-content" id="dropdown11">
                    <table>
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>भौतिकी ~ BSEB 10th MCQs</th>
                                <!--only changed the name and removed the three different tables!-->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td><a href="#">प्रकाश का परावर्तन</a></td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td><a href="#">प्रकाश का अपवर्तन</a></td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td><a href="#">मानव नेत्र</a></td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td><a href="#">विधुत धारा</a></td>
                            </tr>
                            <!-- Add more chapters as needed -->
                        </tbody>
                    </table>
                </div>
                <div class="info-item info5">
                    <div class="icon">
                        <i class="fa-solid fa-dna" aria-hidden="true"></i>
                    </div>
                    <h3>जीव-विज्ञान</h3>
                    <!-- <p>Discover MCQs for Science of BSEB 8th class.</p> -->
                    <a href="#" class="nrbutton n2" id="br10thmcqnr12" aria-label="Science Class 9"><i
                            class="fa-solid fa-square-poll-vertical"></i></a>
                </div>

                <div class="dropdown-content" id="dropdown12">
                    <table>
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>भौतिकी ~ BSEB 10th MCQs</th>
                                <!--only changed the name and removed the three different tables!-->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td><a href="#">प्रकाश का परावर्तन</a></td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td><a href="#">प्रकाश का अपवर्तन</a></td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td><a href="#">मानव नेत्र</a></td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td><a href="#">विधुत धारा</a></td>
                            </tr>
                            <!-- Add more chapters as needed -->
                        </tbody>
                    </table>
                </div>

                <div class="info-item info1">
                    <div class="icon">
                        <i class="fa-solid fa-microscope" aria-hidden="true"></i>
                    </div>
                    <h3>रसायन</h3>
                    <!-- <p>Discover MCQs for Science of BSEB 8th class.</p> -->
                    <a href="#" class="nrbutton n1" id="br10thmcqnr13" aria-label="Science Class 9"><i
                            class="fa-solid fa-square-poll-vertical"></i></a>
                </div>

                <div class="dropdown-content" id="dropdown13">
                    <table>
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>भौतिकी ~ BSEB 10th MCQs</th>
                                <!--only changed the name and removed the three different tables!-->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td><a href="#">प्रकाश का परावर्तन</a></td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td><a href="#">प्रकाश का अपवर्तन</a></td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td><a href="#">मानव नेत्र</a></td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td><a href="#">विधुत धारा</a></td>
                            </tr>
                            <!-- Add more chapters as needed -->
                        </tbody>
                    </table>
                </div>

                <div class="info-item info3">
                    <div class="icon">
                        <i class="fa-solid fa-book" aria-hidden="true"></i>
                    </div>
                    <h3>English</h3>
                    <!-- <p>Find MCQs for your English text-book of BSEB 8th class.</p> -->
                    <a href="Br8thmcqsubjects\englishmcqlistch\englishmcqchlist.html" class="nrbutton  n3"
                        id="br10thmcqnr14" aria-label="English Class 10"><i
                            class="fa-solid fa-square-poll-vertical"></i></a>
                </div>

                <!-- Dropdown Content -->
                <div class="dropdown-content" id="dropdown14">
                    <table>
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>English Prose ~ 10th MCQs</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td><a href="Br10thmcqsubjects\englishmcqlistch\br10thengmcqch1.php?subject=eng&chapter=1&chapter_id=1">The Pace For Living</a></td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td><a href="Br10thmcqsubjects\englishmcqlistch\br10thengmcqch1.php?subject=eng&chapter=2&chapter_id=2">Me and The Ecoglogy
                                        Bit</a></td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td><a href="Br10thmcqsubjects\englishmcqlistch\br10thengmcqch1.php?subject=eng&chapter=3&chapter_id=3">Gillu</a></td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td><a href="Br10thmcqsubjects\englishmcqlistch\br10thengmcqch1.php?subject=eng&chapter=3&chapter_id=4">What is Wrong with Indian Films</a></td>
                            </tr>
                            <tr>
                                <td>5.</td>
                                <td>Acceptance</td>
                            </tr>
                            <tr>
                                <td>6.</td>
                                <td>Once Upon a Time</td>
                            </tr>
                            <tr>
                                <td>7.</td>
                                <td>The Unity of Indian Culture</td>
                            </tr>
                            <tr>
                                <td>8.</td>
                                <td>Little Girls Wiser Than Men</td>
                            </tr>
                            <!-- Add more chapters as needed -->
                        </tbody>
                    </table>
                    <br />
                    <table>
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Poetry ~ 10th English MCQs</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td><a href="#">God Made the Country</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><a href="#">Ode on Solitude</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><a href="#">Polythene Bag</a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><a href="#">Thinner Than A Crescent</a></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>The Empty Heart</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Koel</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>the Sleeping Porter</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Martha</td>
                            </tr>
                            <!-- Add more chapters as needed -->
                        </tbody>
                    </table>
                </div>


                <div class="info-item info1">
                    <div class="icon">
                        <i class="fa-solid fa-clock-rotate-left" aria-hidden="true"></i>
                    </div>
                    <h3>इतिहास</h3>
                    <!-- <p>Discover MCQs for Science of BSEB 8th class.</p> -->
                    <a href="#" class="nrbutton n2" id="br10thmcqnr15" aria-label="Science Class 9"><i class="fa-solid fa-square-poll-vertical"></i></a>
                </div>

                <div class="dropdown-content" id="dropdown15">
                    <table>
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>इतिहास ~ BSEB 10th MCQs</th> <!--only changed the name and removed the three different tables!-->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td><a href="#">यूरोप में राष्ट्रवाद</a></td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td><a href="#">समाजवाद एवं साम्यवाद</a></td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td><a href="#">हिन्द-चीन में राष्ट्रवाद</a></td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td><a href="#">भारत में राष्ट्रवाद</a></td>
                            </tr>
                            <!-- Add more chapters as needed -->
                        </tbody>
                    </table>
                </div>
                <div class="info-item info6">
                    <div class="icon">
                        <i class="fa-solid fa-landmark" aria-hidden="true"></i>
                    </div>
                    <h3>राजनीति</h3>
                    <!-- <p>Discover MCQs for Science of BSEB 8th class.</p> -->
                    <a href="#" class="nrbutton n1" id="br10thmcqnr16" aria-label="Science Class 9"><i class="fa-solid fa-square-poll-vertical"></i></a>
                </div>

                <div class="dropdown-content" id="dropdown16">
                    <table>
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>राजनीति ~ BSEB 10th MCQs</th> <!--only changed the name and removed the three different tables!-->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td><a href="#">लोकतंत्र में सत्ता की साझेदारी</a></td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td><a href="#">सत्ता में साझेदारी की कार्यप्रणाली</a></td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td><a href="#">लोकतंत्र में प्रतिस्पर्धा एवं संघर्ष</a></td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td><a href="#">लोकतंत्र की उपलब्धियां</a></td>
                            </tr>
                            <!-- Add more chapters as needed -->
                        </tbody>
                    </table>
                </div>

                <div class="info-item info5">
                    <div class="icon">
                        <i class="fa-solid fa-earth-africa" aria-hidden="true"></i>
                    </div>
                    <h3>भूगोल</h3>
                    <!-- <p>Discover MCQs for Science of BSEB 8th class.</p> -->
                    <a href="#" class="nrbutton n2" id="br10thmcqnr17" aria-label="Science Class 9"><i class="fa-solid fa-square-poll-vertical"></i></a>
                </div>

                <div class="dropdown-content" id="dropdown17">
                    <table>
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>भूगोल ~ BSEB 10th MCQs</th> <!--only changed the name and removed the three different tables!-->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td><a href="#">भूमि एवं संसाधन</a></td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td><a href="#">खनिज संसाधन</a></td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td><a href="#">जैव अपहरण</a></td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td><a href="#">प्राकृतिक आपदाएं</a></td>
                            </tr>
                            <!-- Add more chapters as needed -->
                        </tbody>
                    </table>
                </div>

                <div class="info-item info3">
                    <div class="icon">
                        <i class="fa-regular fa-credit-card" aria-hidden="true"></i>
                    </div>
                    <h3>अर्थव्यवस्था</h3>
                    <!-- <p>Discover MCQs for Science of BSEB 8th class.</p> -->
                    <a href="#" class="nrbutton n3" id="br10thmcqnr18" aria-label="Science Class 9"><i class="fa-solid fa-square-poll-vertical"></i></a>
                </div>

                <div class="dropdown-content" id="dropdown18">
                    <table>
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>अर्थव्यवस्था ~ BSEB 10th MCQs</th> <!--only changed the name and removed the three different tables!-->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td><a href="#">आर्थिक क्रियाएं</a></td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td><a href="#">मौद्रिक प्रणाली</a></td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td><a href="#">हमारी वित्तीय संस्थाएं</a></td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td><a href="#">वैश्वीकरण</a></td>
                            </tr>
                            <!-- Add more chapters as needed -->
                        </tbody>
                    </table>
                </div>

                <div class="info-item info5">
                    <div class="icon">
                        <i class="fa-solid fa-language" aria-hidden="true"></i>
                    </div>
                    <h3>हिन्दी </h3>
                    <!-- <p>Find MCQs for Hindi of BSEB 8th text-book.</p> -->
                    <a href="#history-9" class="nrbutton  n2" id="br10thmcqnr19" aria-label="History Class 9"><i
                            class="fa-solid fa-square-poll-vertical"></i></a>
                </div>

                <!-- Dropdown Content -->
                <div class="dropdown-content" id="dropdown19">
                    <table>
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>गद्यखंड ~ गोधूलि भाग-2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="#">श्रम-विभाजन और जाति प्रथा (निबंध)</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><a href="#">विश के दांत (कहानी)</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><a href="#">भारत से हम क्या सीखें (भाषण)</a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><a href="#">नाखून क्यों बढ़ते हैं (ललित निबंध)</a></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>नागरी लिपि (निबंध)</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>बहादुर(कहानी)</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>परंपरा का मूल्यांकन (निबंध)</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>जित-जित मैं निरखत हूँ (साक्षात्कार)</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>आविन्यों (ललित रचना)</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>मछली (कहानी)</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>नौबतखाने में इबादत (व्यक्तिचित्र)</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>शिक्षा और संस्कृति (शिक्षाशास्त्र)</td>
                            </tr>

                            <!-- Add more chapters as needed -->
                        </tbody>
                    </table>
                    <br />
                    <table>
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>काव्यखंड ~ गोधूलि भाग-2 </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="Br10thmcqsubjects\hindimcqlistch\br10thhinch1Kavya.html">राम बिनु बिरथे जगि
                                        जनमा; जो नर दुख में दुख नहिं मानै </a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><a href="#">प्रेम-अयनी श्री राधिका; करील के कुंजन ऊपर वारौं</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><a href="#">अति सूधो सनेह को मारग है, मो अंसुवानिहिं लै बरसौ</a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><a href="#">स्वदेशी</a></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>भारतमाता</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>जनतंत्र का जन्म</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>हिरोशिमा</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>एक वृक्ष की हत्या</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>हमारी नींद</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>अक्षर-ज्ञान</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>लौटकर आऊँगा फिर</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>मेरे बिना तुम प्रभु</td>
                            </tr>

                            <!-- Add more chapters as needed -->
                        </tbody>
                    </table>
                </div>


                <div class="info-item info6">
                    <div class="icon">
                        <i class="fa-solid fa-book-open" aria-hidden="true"></i>
                    </div>
                    <h3>संस्कृत </h3>
                    <!-- <p>Explore MCQs for Sanksrit of BSEB 8th text-book.</p> -->
                    <a href="#art-8" class="nrbutton  n1" id="br10thmcqnr20" aria-label="Art Class 8"><i
                            class="fa-solid fa-square-poll-vertical"></i></a>
                </div>

                <!-- Dropdown Content -->
                <div class="dropdown-content" id="dropdown20">
                    <table>
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>संस्कृत ~ BSEB 10th MCQs</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td><a href="#">मङ्गलम्</a></td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td><a href="#">पाटलिपुत्रवैभवम्</a></td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td><a href="#">अलसकथा</a></td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td><a href="#">संस्कृतसाहित्ये लेखिकाः</a></td>
                            </tr>
                            <tr>
                                <td>5.</td>
                                <td>भारतमहिमा</td>
                            </tr>
                            <tr>
                                <td>6.</td>
                                <td>भारतीयसंस्काराः</td>
                            </tr>
                            <tr>
                                <td>7.</td>
                                <td>नीतिश्लोकाः</td>
                            </tr>
                            <tr>
                                <td>8.</td>
                                <td>कर्मवीर कथाः</td>
                            </tr>
                            <tr>
                                <td>9.</td>
                                <td>स्वामी दयानन्दः</td>
                            </tr>
                            <tr>
                                <td>10.</td>
                                <td>मन्दाकिनीवर्णनम्</td>
                            </tr>
                            <tr>
                                <td>11.</td>
                                <td>व्याघ्रपथिककथाः</td>
                            </tr>
                            <tr>
                                <td>12.</td>
                                <td>कर्णस्य दानवीरता</td>
                            </tr>
                            <tr>
                                <td>13.</td>
                                <td>विश्वशांतिः</td>
                            </tr>
                            <tr>
                                <td>14.</td>
                                <td>शास्त्रकाराः</td>
                            </tr>
                            <!-- Add more chapters as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        </script>
    </section>
    <footer>
        <div class="container">
            <div class="follow-us">
                <h4>Follow Us</h4>
                <div class="social-icons">
                    <!-- WhatsApp Icon -->
                    <a href="https://whatsapp.com/yourprofile" class="icon whatsapp" title="WhatsApp">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-6 h-6"
                            fill="currentColor">
                            <path
                                d="M92.1 254.6c0 24.9 7 49.2 20.2 70.1l3.1 5-13.3 48.6L152 365.2l4.8 2.9c20.2 12 43.4 18.4 67.1 18.4h.1c72.6 0 133.3-59.1 133.3-131.8c0-35.2-15.2-68.3-40.1-93.2c-25-25-58-38.7-93.2-38.7c-72.7 0-131.8 59.1-131.9 131.8zM274.8 330c-12.6 1.9-22.4 .9-47.5-9.9c-36.8-15.9-61.8-51.5-66.9-58.7c-.4-.6-.7-.9-.8-1.1c-2-2.6-16.2-21.5-16.2-41c0-18.4 9-27.9 13.2-32.3c.3-.3 .5-.5 .7-.8c3.6-4 7.9-5 10.6-5c2.6 0 5.3 0 7.6 .1c.3 0 .5 0 .8 0c2.3 0 5.2 0 8.1 6.8c1.2 2.9 3 7.3 4.9 11.8c3.3 8 6.7 16.3 7.3 17.6c1 2 1.7 4.3 .3 6.9c-3.4 6.8-6.9 10.4-9.3 13c-3.1 3.2-4.5 4.7-2.3 8.6c15.3 26.3 30.6 35.4 53.9 47.1c4 2 6.3 1.7 8.6-1c2.3-2.6 9.9-11.6 12.5-15.5c2.6-4 5.3-3.3 8.9-2s23.1 10.9 27.1 12.9c.8 .4 1.5 .7 2.1 1c2.8 1.4 4.7 2.3 5.5 3.6c.9 1.9 .9 9.9-2.4 19.1c-3.3 9.3-19.1 17.7-26.7 18.8zM448 96c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96zM148.1 393.9L64 416l22.5-82.2c-13.9-24-21.2-51.3-21.2-79.3C65.4 167.1 136.5 96 223.9 96c42.4 0 82.2 16.5 112.2 46.5c29.9 30 47.9 69.8 47.9 112.2c0 87.4-72.7 158.5-160.1 158.5c-26.6 0-52.7-6.7-75.8-19.3z" />
                        </svg>
                    </a>

                    <!-- Instagram Icon -->
                    <a href="https://instagram.com/yourprofile" class="icon instagram" title="Instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-6 h-6"
                            fill="currentColor">
                            <path
                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                        </svg>
                    </a>

                    <!-- Twitter Icon -->
                    <a href="https://twitter.com/yourprofile" class="icon twitter" title="Twitter">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-6 h-6"
                            fill="currentColor">
                            <path
                                d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                        </svg>
                    </a>
                </div>
            </div>
            <p>&copy; 2024 Reivise. All rights reserved.</p>
        </div>
    </footer>

    <script src="../../../script.js"></script>
</body>

</html>