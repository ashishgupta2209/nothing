<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCQs - Select Your Board - Reivise</title>
    <link rel="stylesheet" href="styles1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .nrbutton {
            border-radius: 5px;
        }

        .n1 {
            background: #ff4b5c;
        }

        .n2 {
            background: #1e90ff;
            /* Blue */
        }

        .n3 {
            background: #4caf50;
            /*default = #222*/
        }

        .n1:hover {
            background: #e03e47;
            transform: translateY(-2px);
        }


        .n3:hover {
            background: #43a047;
            /* default = #333*/
            transform: translateY(-2px);
        }

        .n2:hover {
            background: #1c6ea4;
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

        /* for the ripple effect only when the button is clicked for coarse pointered devices*/
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

        /* Ensure info items do not stretch too wide and center them */
        .info-item {

            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            max-width: 500px;
            /*default - 500px*/
            width: 100%;
            /*default = 280px*/
            margin: 5px;
            /*default - 0 auto*/
            transition: transform 0.3s, box-shadow 0.3s;
        }

        /* Heading inside the item */
        .info-item h3 {
            font-size: 1.5rem;
            margin: 10px 0;
            /* White for headings inside the item */
        }

        /* Paragraph text inside the item */
        .info-item p {
            margin-bottom: 20px;
            /* Lighter gray for paragraph text */
        }
    </style> !important

</head>

<body>
    <?php include 'navbar.php' ?>
    <!-- MCQs BSEB and CBSE options here -->
    <section class="misc-info">
        <div class="container">
            <h2>
                <i class="fa-solid fa-list-check ol" aria-hidden="true" style="font-size: 30px;  margin-right: 10px"></i>Select Your Board
            </h2>
            <div class="info-items">
                <div class="info-item">
                    <div class="icon">
                        <i class="fa-solid fa-book" aria-hidden="true"></i>
                    </div>
                    <h3>Bihar Board MCQs</h3>
                    <p>Find MCQs tailored for the Bihar Board text-books.</p>
                    <a href="MCQs\BSEB_MCQs\Class8thMCQ\Br8thmcqredi.html" class="nrbutton n1" aria-label="Explore BSEB MCQs">Class 8th</a>
                    <a href="MCQsredi.html" class="nrbutton n2" aria-label="Explore BSEB MCQs">Class 9th</a>
                    <a href="MCQs\BSEB_MCQs\Class10thMCQ\Br10thmcqredi.php" class="nrbutton n3" aria-label="Explore BSEB MCQs">Class 10th</a>
                </div>
                <div class="info-item">
                    <div class="icon">
                        <i class="fa-solid fa-graduation-cap" aria-hidden="true"></i>
                    </div>
                    <h3>CBSE MCQs</h3>
                    <p>Discover a range of MCQs for the CBSE Board curriculum.</p>
                    <a href="#tools" class="nrbutton n1" aria-label="Explore CBSE MCQs">Class 8th</a>
                    <a href="#tools" class="nrbutton n3" aria-label="Explore CBSE MCQs">Class 9th</a>
                    <a href="#tools" class="nrbutton n2" aria-label="Explore CBSE MCQs">Class 10th</a>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php' ?>

    <script src="script.js"></script>
</body>

</html>