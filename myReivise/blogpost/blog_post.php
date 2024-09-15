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

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Custom CSS -->
    <style>
        /* Custom Blog Section Styles */
        /* Custom Blog Section Styles */
        #blog {
            background-color: #1e1e1e;
            /* Dark background for the blog section */
            color: #f0f0f0;
            /* Light text color */
        }

        #blog .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .card {
            background-color: #2c2c2c;
            /* Darker card background */
            color: #f0f0f0;
            /* Light text color */
            border: 1px solid #444;
            /* Dark border */
            border-radius: 15px;
            transition: transform 0.2s ease-in-out, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            /* Lift effect on hover */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
            /* Darker shadow on hover */
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
            text-align: justify;
            /*justifies the content, though not the title, of the blog post */
            -webkit-line-clamp: 3;
            /* Limit to 3 lines */
            -webkit-box-orient: vertical;
        }

        .card-text.expanded {
            display: block;
            overflow: visible;
            white-space: normal;
        }

        .card-footer {
            background-color: #1c1c1c;
            /* Dark footer background */
            color: #888;
            /* Gray text color */
        }

        /* Custom Feedback Section Styles */
        #feedback {
            background-color: #2c2c2c;
            /* Dark background */
            color: #f0f0f0;
            /* Light text color */
        }

        #feedback .container {
            max-width: 600px;
        }

        .btn-primary {
            background-color: #007bff;
            /* Primary button color */
            border-color: #007bff;
            /* Matching border color */
        }

        .btn-primary:hover {
            background-color: #0056b3;
            /* Darker button background on hover */
            border-color: #004085;
            /* Darker button border on hover */
        }

        /* Links */
        a {
            color: #007bff;
            /* Link color */
        }

        a:hover {
            color: #0056b3;
            /* Darker link color on hover */
            text-decoration: underline;
        }

        /* Heading Styles */
        h2,
        h3 {
            color: #f0f0f0;
            /* Light text color for headings */
        }

        /* Form Section */
        .form-section {
            background-color: #333;
            /* Dark background for form */
            color: #f0f0f0;
            /* Light text color */
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            /* Dark shadow */
        }
    </style>

</head>

<body>
    <header>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand ml-2" href="#">Reivise</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ml-4">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../chatbot.html">ChatBOT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">MCQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Solutions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Notes</a>
                    </li>
                    <li class="nav-item mr-2">
                        <a class="nav-link" href="#">Books</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            MCQs
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li> -->
                    <li>
                        <form class="form-inline my-2 my-lg-0" id="searchForm">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                        <!-- javascript to redirect the user to chatbot.html irrespective of what is entered! -->
                        <script>
                            document.getElementById('searchForm').addEventListener('submit', function(event) {
                                event.preventDefault(); // Prevent default form submission
                                window.location.href = '../chatbot.html'; // Redirect to the desired page
                            });
                        </script>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Blog Section -->
    <section id="blog" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Latest Blogs</h2>
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
                        echo '<div class="col-md-4 mb-4">';
                        echo '    <div class="card shadow-sm blog-card">';
                        echo '        <div class="card-body">';
                        echo '            <h5 class="card-title">' . htmlspecialchars($row["title"]) . '</h5>';
                        echo '            <p class="card-text">' . htmlspecialchars($row["content"]) . '</p>';
                        echo '            <button class="btn btn-primary read-more-btn">Read More</button>';
                        echo '        </div>';
                        echo '        <div class="card-footer text-muted">';
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
    <section id="feedback" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4 ">Submit Your Feedback</h2>
            <?php
            // Check for success parameter
            $success = isset($_GET['success']) ? $_GET['success'] : '';

            // Display alert if success parameter is present
            if ($success == '1') {
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Hooray!</strong> Your feedback has been submitted successfully.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
          </div>';
            } elseif ($success == '0') {
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> There was an error submitting your feedback. Please try again.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
          </div>';
            }
            ?>
            <div class="form-section mt-5">
                <h3 class="text-center mb-4">Feedback Form</h3>
                <form id="feedbackForm" action="submit_feedback.php" method="POST">
                    <div class="form-group">
                        <label for="name">Enter Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="class">Enter Your Class</label>
                        <input type="text" class="form-control" id="class" name="class" required>
                    </div>
                    <div class="form-group">
                        <label for="feedback">Your Feedback</label>
                        <textarea class="form-control" id="feedback" name="feedback" rows="6" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Feedback</button>
                </form>
            </div>
        </div>
    </section>

    <!-- JavaScript for Read More/Read Less functionality -->
    <script>
        document.querySelectorAll('.read-more-btn').forEach(button => {
            button.addEventListener('click', function() {
                const cardText = this.previousElementSibling;
                cardText.classList.toggle('expanded');

                if (cardText.classList.contains('expanded')) {
                    this.textContent = 'Read Less';
                } else {
                    this.textContent = 'Read More';
                }
            });
        });
    </script>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>

</html>