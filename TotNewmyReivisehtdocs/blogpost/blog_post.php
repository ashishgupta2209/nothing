    <!-- php code to establish connection with the blog_posts database -->
    <?php
    $servername = "localhost"; // or your database server address
    $username = "root"; // your database username
    $password = ""; // your database password
    $dbname = "blog_posts"; // your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blog - Educational Website</title>
        <link rel="stylesheet" href="../styles1.css"> <!-- Custom CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <style>
            /* Reset CSS */
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                background-color: #f8f9fa;
                /* Light background color */
                color: #212529;
                /* Dark text color for readability */
            }

            .form-inline {
                display: flex;
                gap: 0.5rem;
            }

            .form-control {
                padding: 0.5rem;
                border-radius: 0.25rem;
                border: 1px solid #ced4da;
            }

            .btn {
                padding: 0.5rem 1rem;
                border-radius: 0.25rem;
                cursor: pointer;
                border: none;
            }

            .btn-primary {
                background-color: #007bff;
                /* Blue button color */
                color: #ffffff;
                /* White text color */
            }

            .btn-primary:hover {
                background-color: #0056b3;
                /* Darker blue on hover */
            }

            .alert {
                padding: 1rem;
                border-radius: 0.25rem;
                margin-bottom: 1rem;
            }

            .alert-warning {
                background-color: #fff3cd;
                /* Light yellow background */
                color: #856404;
                /* Dark yellow text */
            }

            .alert .close {
                float: right;
                font-size: 1.25rem;
                cursor: pointer;
            }

            /* Style for the Read More button */
            .read-more-btn {
                background-color: #027295;
                /* Primary color */
                color: #ffffff;
                padding: 0.5rem 0.7rem;
                border: none;
                border-radius: 0.25rem;
                cursor: pointer;
                transition: background-color 0.3s ease;
                display: inline-block;
                margin-top: 1rem;
            }

            .read-more-btn:hover {
                background-color: #004494;
                /* Darker shade for hover effect */
            }

            .read-more-btn:active {
                transform: scale(0.92);
            }

            /* Blog Section */
            #blog {
                padding: 2rem 0;
            }

            .container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 1rem;
            }

            h2 {
                text-align: center;
                margin-bottom: 2rem;
            }

            .row {
                display: flex;
                flex-wrap: wrap;
                gap: 1rem;
                justify-content: center;
            }

            .col-md-4 {
                flex: 1 1 30%;
                max-width: 30%;
            }

            .card {
                background-color: #ffffff;
                /* White background for cards */
                border: 1px solid #dee2e6;
                /* Light border */
                border-radius: 0.5rem;
                transition: transform 0.2s ease-in-out, box-shadow 0.3s ease;
                overflow: hidden;
            }

            .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
                /* Light shadow */
            }

            .card-body {
                padding: 1rem;
            }

            .card-title {
                font-size: 1.2rem;
                font-weight: 600;
            }

            .card-text {
                font-size: 0.9rem;
                overflow: hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-line-clamp: 3;
                -webkit-box-orient: vertical;
                text-align: justify;
            }

            .card-text.expanded {
                display: block;
                overflow: visible;
                white-space: normal;
            }

            .card-footer {
                background-color: #f8f9fa;
                /* Light background for footer */
                color: #495057;
                /* Darker text color */
                padding: 0.5rem 1rem;
            }

            /* Feedback Section */
            #feedback {
                padding: 2rem 0;
            }

            .form-section {
                background-color: #ffffff;
                /* White background for form section */
                padding: 2rem;
                border-radius: 0.5rem;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                /* Light shadow */
                max-width: 600px;
                margin: 0 auto;
            }

            .form-group {
                margin-bottom: 1rem;
            }

            .form-group label {
                display: block;
                margin-bottom: 0.5rem;
            }

            .form-group input,
            .form-group textarea {
                width: 100%;
                padding: 0.5rem;
                border-radius: 0.25rem;
                border: 1px solid #ced4da;
                background-color: #ffffff;
                /* White background for inputs */
                color: #212529;
                /* Dark text color */
            }

            .form-group textarea {
                resize: vertical;
            }

            /* Blog Section */
            #blog {
                padding: 2rem 0;
            }

            .container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 1rem;
            }

            .blog .container h2 {
                text-align: center;
                margin-bottom: 2rem;
            }

            #feedback .container h2 {
                text-align: center;
                margin-bottom: 2rem;
            }

            .row {
                display: flex;
                flex-wrap: wrap;
                gap: 1rem;
                justify-content: center;
            }

            /* Card Styles */
            .col-md-4 {
                flex: 1 1 30%;
                max-width: 30%;
            }

            .card {
                background-color: #ffffff;
                /* White background for cards */
                border: 1px solid #dee2e6;
                /* Light border */
                border-radius: 0.5rem;
                transition: transform 0.2s ease-in-out, box-shadow 0.3s ease;
                overflow: hidden;
            }

            /* Responsive Design */
            @media (max-width: 768px) {
                .col-md-4 {
                    flex: 1 1 45%;
                    max-width: 45%;
                }
            }

            @media (max-width: 576px) {
                .col-md-4 {
                    flex: 1 1 100%;
                    max-width: 100%;
                }
            }

            .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
                /* Light shadow */
            }

            .card-body {
                padding: 1rem;
            }

            .card-title {
                font-size: 1.25rem;
                font-weight: 600;
                margin-bottom: 5px;
            }

            .card-text {
                font-size: 0.97rem;
                overflow: hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-line-clamp: 3;
                -webkit-box-orient: vertical;
                text-align: justify;
            }

            .card-text.expanded {
                display: block;
                overflow: visible;
                white-space: normal;
            }

            .card-footer {
                background-color: #f8f9fa;
                /* Light background for footer */
                color: #495057;
                /* Darker text color */
                padding: 0.5rem 1rem;
            }

            .form-control {
                padding: 0.5rem;
                border-radius: 0.25rem;
                border: 1px solid #ced4da;
                background-color: #ffffff;
                /* White background for the select box */
                color: #212529;
                /* Dark text color */
            }

            .form-control:focus {
                border-color: #007bff;
                /* Blue border on focus */
                box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
                /* Light blue shadow on focus */
            }

            /* Styling for the feedback textarea */
            .feedback {
                width: 100%;
                padding: 0.75rem;
                /* Add padding for text visibility */
                border-radius: 0.25rem;
                border: 1px solid #ced4da;
                background-color: #ffffff;
                /* White background */
                color: #212529;
                /* Dark text color */
                font-size: 1rem;
                /* Font size for readability */
                resize: vertical;
                /* Allows vertical resizing only */
                box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075);
                /* Light shadow for depth */
                line-height: 1.5;
                /* Line height for text spacing */
                overflow: auto;
                /* Handle text overflow gracefully */
            }

            /* Feedback textarea focus styling */
            .feedback:focus {
                border-color: #007bff;
                /* Blue border on focus */
                box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
                /* Light blue shadow on focus */
                outline: none;
                /* Removes default outline */
            }

            /* Placeholder styling */
            .feedback::placeholder {
                color: #6c757d;
                /* Light grey color for placeholder */
                font-size: 1rem;
                /* Match font size of textarea text */
                opacity: 1;
                /* Ensure placeholder is visible */
            }
        </style>
    </head>

    <body>
        <?php include '../navbar.php' ?>

        <!-- Blog Section -->
        <section id="blog" class="blog" style="margin-top: 80px">
            <div class="container">
                <h2>Latest Blogs</h2>
                <div class="row">
                    <!-- Blog Post 1 -->
                    <?php
                    // Fetch blog posts from the database
                    $sql = "SELECT * FROM blog_posts";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            // Convert the date from the database to the desired format
                            $datePosted = new DateTime($row["date_posted"]);
                            $formattedDate = $datePosted->format('F d, Y');
                            // Display each blog post
                            echo '<div class="col-md-4">';
                            echo '    <div class="card">';
                            echo '        <div class="card-body">';
                            echo '            <h5 class="card-title">' . htmlspecialchars($row["title"]) . '</h5>';
                            echo '            <p class="card-text">' . htmlspecialchars($row["content"]) . '</p>';
                            echo '            <button class="btn btn-primary read-more-btn">Read More</button>';
                            echo '        </div>';
                            echo '        <div class="card-footer">';
                            echo '            Posted on ' . $formattedDate;
                            echo '        </div>';
                            echo '    </div>';
                            echo '</div>';
                        }
                    } else {
                        echo '<p>No blog posts found.</p>';
                    }
                    ?>
                </div>
            </div>
        </section>

        <!-- Feedback Section -->
        <section id="feedback">
            <div class="container">
                <h2>Submit Your Feedback</h2>
                <?php
                // Check for success parameter
                $success = isset($_GET['success']) ? $_GET['success'] : '';

                // Display alert if success parameter is present
                if ($success == '1') {
                    echo '<div class="alert alert-warning">
            <strong>Hooray!</strong> Your feedback has been submitted successfully.
            <span class="close" aria-label="Close">&times;</span>
          </div>';
                } elseif ($success == '0') {
                    echo '<div class="alert alert-warning">
            <strong>Holy guacamole!</strong> There was an error submitting your feedback. Please try again.
            <span class="close" aria-label="Close">&times;</span>
          </div>';
                }
                ?>
                <div class="form-section">
                    <h3>Feedback Form</h3>
                    <form id="feedbackForm" action="submit_feedback.php" method="POST">
                        <div class="form-group">
                            <label for="name">Enter Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="class">Select Your Class</label>
                            <select class="form-control" id="class" name="class" required>
                                <option value="" disabled selected>Select your class</option>
                                <option value="8">8th Grade</option>
                                <option value="9">9th Grade</option>
                                <option value="10">10th Grade</option>
                            </select>
                        </div>
                        <!-- main feedback textarea -->
                        <div class="form-group">
                            <label for="feedback">Your Feedback</label>
                            <textarea class="feedback" id="feedback" name="feedback" placeholder="Type your feedback..." rows="6" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit Feedback</button>

                    </form>
                </div>
            </div>
        </section>
        <?php include '../footer.php'?>

        <script>
            // JavaScript to handle "Read More" button click
            document.querySelectorAll('.read-more-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const cardText = this.previousElementSibling;
                    cardText.classList.toggle('expanded');
                    this.textContent = cardText.classList.contains('expanded') ? 'Read Less' : 'Read More';
                });
            });

            // JavaScript to handle alert close button
            document.querySelectorAll('.alert .close').forEach(closeButton => {
                closeButton.addEventListener('click', function() {
                    this.parentElement.style.display = 'none';
                });
            });
        </script>
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
        <script src="../script.js"></script>
    </body>

    </html>