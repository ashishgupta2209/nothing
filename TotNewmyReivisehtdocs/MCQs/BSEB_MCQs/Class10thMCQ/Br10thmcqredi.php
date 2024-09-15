<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> BSEB 8th Solutions - Choose the Subject - Reivise</title>
    <link rel="stylesheet" href="../../../styles1.css">
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
            background-color: #f7f7f7;
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
            background: #f9f9f9;
            /* default = #313131 */
            color: #222;
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
            background-color: #f9f9f9;
        }

        /* Heading inside the item */
        .info-item h3 {
            font-size: 1.4rem;
            /*default = 1.45rem;*/
            margin: 7px 0;
            /*default = 10px 0;*/
            color: #222;
            /* White for headings inside the item */
            text-align: left;
            flex: 1;
            margin-left: 19px;
            margin-right: 10px;

        }


        /* Paragraph text inside the item */
        .info-item p {
            margin-bottom: 20px;
            color: #222;
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
            color: #222;
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
            background-color: #222;
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
    <?php include '../../../navbar.php'?>
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
                    <h3>विज्ञान</h3>
                    <!-- <p>Discover MCQs for Science of BSEB 8th class.</p> -->
                    <a href="#" class="nrbutton n2" id="br10thmcqnr11" aria-label="Science Class 9"><i
                            class="fa-solid fa-square-poll-vertical"></i></a>
                </div>

                <div class="dropdown-content" id="dropdown11">
                    <table>
                        <thead>
                            <tr>
                                <th style="background-color: rgb(42, 195, 241);">S.No.</th>
                                <th style="background-color: #8525f1;">भौतिकी ~ 10th MCQs</th>
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
                            <!-- Add more chapters as needed -->
                        </tbody>
                    </table>
                    <br />
                    <table>
                        <thead>
                            <tr>
                                <th style="background-color: rgb(233, 110, 54);">S.No.</th>
                                <th style="background-color: #3dd642;">रसायन ~ 10th MCQs</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td><a href="#">रासायनिक अभिक्रिया तथा समीकरण</a></td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td><a href="#">अम्ल, क्षार तथा लवण</a></td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td><a href="#">धातु एवं आधातु</a></td>
                            </tr>
                            <!-- Add more chapters as needed -->
                        </tbody>
                    </table>
                    <br />
                    <table>
                        <thead>
                            <tr>
                                <th style="background-color: rgb(179, 0, 164);">S.No.</th>
                                <th style="background-color: rgb(43, 56, 170);">जीवविज्ञान ~ 10th MCQs</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td><a href="#">जैव-प्रक्रम</a></td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td><a href="#">श्वसन</a></td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td><a href="#">उत्सर्जन</a></td>
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
                    <h3>सा० विज्ञान</h3>
                    <!-- <p>Discover MCQs for Science of BSEB 8th class.</p> -->
                    <a href="#" class="nrbutton n1" id="br10thmcqnr15" aria-label="Science Class 9"><i class="fa-solid fa-square-poll-vertical"></i></a>
                </div>

                <div class="dropdown-content" id="dropdown15">
                    <table>
                        <thead>
                            <tr>
                                <th style="background-color: rgb(25, 197, 183);">S.No.</th>
                                <th style="background-color: #7320d3;">इतिहास की दुनिया ~ 10th MCQs</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="#">यूरोप में राष्ट्रवाद</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><a href="#">समाजवाद एक साम्यवाद</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><a href="#">हिन्द-चीन में राष्ट्रवादी आंदोलन</a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><a href="#">भारत में राष्ट्रवाद</a></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><a href="#">अर्थ-व्यवस्था और आजीविका</a></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td><a href="#">शहरीकरण एवं शहरी जीवन</a></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td><a href="#">व्यापार एवं भूमंडलीकरण</a></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td><a href="#">प्रेस-संस्कृति एवं राष्ट्रवाद</a></td>
                            </tr>
                        </tbody>
                    </table>
                    <br />
                    <table>
                        <thead>
                            <tr>
                                <th style="background-color: rgb(206, 80, 22);">S.No.</th>
                                <th style="background-color: #14aa19;">हमारी अर्थव्यवस्था - 10th MCQs</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="#">अर्थव्यवस्था एवं इसके विकास का इतिहास</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><a href="#">राज्य एवं राष्ट्र की आय</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><a href="#">मुद्रा, बचत एवं साख</a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><a href="#">हमारी वित्तीय संस्थाएं</a></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><a href="#">रोजकर एवं सेवाएं</a></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td><a href="#">वैश्वीकरण</a></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td><a href="#">उपभोक्ता जागरण एवं संरक्षण</a></td>
                            </tr>
                            <!-- Add more chapters as needed -->
                        </tbody>
                    </table>
                    <br />
                    <table>
                        <thead>
                            <tr>
                                <th style="background-color: rgb(179, 0, 164);">S.No.</th>
                                <th style="background-color: rgb(43, 56, 170);">भूगोल - 10th MCQs</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>इकाई 1 (क)</td>
                                <td><a href="#">भारत: संसाधन एवं उपयोग</a></td>
                            </tr>
                            <tr>
                                <td>इकाई 2</td>
                                <td><a href="#">कृषि</a></td>
                            </tr>
                            <tr>
                                <td>इकाई 3</td>
                                <td><a href="#">निर्माण उद्योग</a></td>
                            </tr>
                            <tr>
                                <td>इकाई 4</td>
                                <td><a href="#">परिवहन, संचार एवं व्यापार</a></td>
                            </tr>
                            <tr>
                                <td>इकाई 5</td>
                                <td><a href="#">बिहार: कृषि एवं वन संसाधन</a></td>
                            </tr>
                            <tr>
                                <td>इकाई 6</td>
                                <td><a href="#">मानचित्र अध्ययन</a></td>
                            </tr>

                            <tr>
                                <td>इकाई 1 (ख)</td>
                                <td><a href="#">प्राकृतिक आपदा: एक परिचय</a></td>
                            </tr>
                            <tr>
                                <td>इकाई 2</td>
                                <td><a href="#">प्राकृतिक आपदा एवं प्रबंधन: बाढ़ और सुखाड़</a></td>
                            </tr>
                            <tr>
                                <td>इकाई 3</td>
                                <td><a href="#">प्राकृतिक आपदा एवं प्रबंधन: भूकंप एवं सुनामी</a></td>
                            </tr>
                            <tr>
                                <td>इकाई 4</td>
                                <td><a href="#">जीवन रक्षक आकस्मिक प्रबंधन</a></td>
                            </tr>
                            <tr>
                                <td>इकाई 5</td>
                                <td><a href="#">आपदा काल में वैकल्पिक संचार व्यवस्था</a></td>
                            </tr>
                            <tr>
                                <td>इकाई 6</td>
                                <td><a href="#">आपदा और सह-अस्तित्व</a></td>
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
                    <a href="#art-8" class="nrbutton  n3" id="br10thmcqnr20" aria-label="Art Class 8"><i
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
    <?php include '../../../footer.php' ?>

    <script src="../../../script.js"></script>
</body>

</html>