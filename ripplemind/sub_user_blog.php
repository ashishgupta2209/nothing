<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_db_blog";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Initialize the success message variable
$successMessage = "";
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input data
    $name = htmlspecialchars($conn->real_escape_string($_POST['userName']));
    $email = htmlspecialchars($conn->real_escape_string($_POST['userEmail']));
    $blog_image_url = htmlspecialchars($conn->real_escape_string($_POST['blogImage']));
    $blog_title = htmlspecialchars($conn->real_escape_string($_POST['blogTitle']));
    $blog_content = htmlspecialchars($conn->real_escape_string($_POST['blogContent']));

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO userblogs (name, email, blog_image_url, blog_title, blog_content) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $blog_image_url, $blog_title, $blog_content);

    // Execute the statement
    if ($stmt->execute()) {
        $successMessage = '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your blog has been submitted for review.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div id="loadingOverlay" class="spinner-overlay d-none">
            <div class="spinner-border" role="status"></div>
            <p class="spinner-text mt-2 ml-3">Submitting...</p>
        </div>
        <script>
            setTimeout(function() {
                window.location.href = "index1.php";
            }, 2000); // Redirect after 2 seconds
            document.getElementById("loadingOverlay").classList.remove("d-none");
        </script>';
        // Close the statement
        $stmt->close();
    } else {
        $successMessage = '<div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading">Oops!</h4>
                        <p>There was an error while processing your request. Please try again.</p>
                        <hr>
                        <p class="mb-0">If the problem persists, contact support.</p>
                    </div>';
    }
}

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Your Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Spinner container with overlay */
        .spinner-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            /* Dark semi-transparent background */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 999;
            /* Ensure it's above other content */
        }

        /* Spinner styles */
        .spinner-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100px;
            /* Adjust height as needed */
        }

        .spinner-border {
            width: 3rem;
            height: 3rem;
            border-width: 0.6em;
            border-top-color: #f2f;
            /* Customize spinner color */
            animation: spin 0.9s linear infinite;
        }

        .spinner-text {
            margin-top: 1.2rem !important;
            font-size: 1.25rem;
            color: #fff;
            /* Customize text color */
            font-weight: 500;
        }

        /* Spinner animation */
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Ensure the success message remains fully visible */
        .alert {
            position: relative;
            z-index: 1000;
            /* Ensure it's above the spinner overlay */
        }
    </style>

    <style>
        /* Search Form Styles */
        .search-form {
            display: flex;
            align-items: center;
        }

        .input-group {
            display: flex;
            align-items: center;
            border-radius: 25px;
            /* Rounded corners for the entire group */
            overflow: hidden;
            /* Ensures that the rounded corners are applied to the whole input group */
        }

        .search-input {
            border: 1px double #ced4da;
            /* Light gray border for the input */
            border-radius: 25px 0 0 25px;
            /* Rounded corners, left side */
            padding: 10px 15px;
            /* Padding inside the input */
            flex: 1;
            /* Takes up remaining space in the flex container */
        }

        .search-input:focus {
            border-color: #007bff;
            /* Border color when focused */
            outline: none;
            /* Remove default outline */
            box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.25);
            /* Subtle shadow effect */
        }

        .search-icon-button {
            border-radius: 0 25px 25px 0;
            /* Rounded corners, right side */
            background-color: #007bff;
            /* Button background color */
            border: none;
            /* Remove default border */
            width: 50px;
            /* Fixed width for the button */
            height: 40px;
            /* Fixed height for the button */
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
            /* Remove default padding */
            cursor: pointer;
            /* Pointer cursor to indicate it's clickable */
            transition: background-color 0.3s, box-shadow 0.3s;
            /* Smooth transition */
        }

        .search-icon-button i {
            color: white;
            /* Icon color */
            font-size: 1.7rem;
            /* Icon size */
        }

        .search-icon-button:hover {
            background-color: #0056b3;
            /* Darker background color on hover */
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
            /* Subtle shadow effect on hover */
        }

        .search-icon-button:active {
            background-color: #004494;
            /* Even darker background color on click */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
            /* Reduced shadow effect on click */
        }

        .search-input {
            border: 2px solid transparent;
            /* Initial border */
            border-radius: 25px 0 0 25px;
            /* Rounded corners */
            padding: 10px 15px;
            /* Padding inside the input */
            background-color: #fff;
            /* Background color of the input */
            position: relative;
            /* Relative positioning to place the pseudo-element */
            transition: border-color 0.15s, box-shadow 0.15s;
            /* Smooth transition */
        }
    </style>
</head>

<body>
    <?php include('navbar.php') ?>
    <div class="container userblogcontainer mt-5">
        <h2>Create Your Own Blog</h2>

        <!-- Display success or error message -->
        <?php if ($successMessage): ?>
            <?php echo $successMessage; ?>
        <?php endif; ?>

        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group userblogformgroup">
                <label for="userName">Name</label>
                <input type="text" class="form-control userblogformgroup" id="userName" name="userName" placeholder="Enter your name" required>
            </div>
            <div class="form-group userblogformgroup">
                <label for="userEmail">Email address</label>
                <input type="email" class="form-control userblogformgroup" id="userEmail" name="userEmail" placeholder="Enter your email" required>
            </div>
            <div class="form-group userblogformgroup">
                <label for="blogImage">Blog Image URL</label>
                <input type="url" class="form-control userblogformgroup" id="blogImage" name="blogImage" placeholder="Enter the URL of the blog image" required>
            </div>
            <div class="form-group userblogformgroup">
                <label for="blogTitle">Blog Title</label>
                <input type="text" class="form-control userblogformgroup" id="blogTitle" name="blogTitle" placeholder="Enter the title of your blog" required>
            </div>
            <div class="form-group userblogformgroup">
                <label for="blogContent">Blog Content</label>
                <textarea class="form-control blogusercontrol" id="blogContent" name="blogContent" rows="5" placeholder="Enter the content of your blog" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <!-- note -->
            <div class="card mt-4">
                <div class="card-header">
                    Note:
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>Please be aware that your content may be slightly altered to meet our standards and guidelines. We strive to maintain the quality and consistency of all blog posts published on our platform.</p>
                        <hr class="mb-2">
                        <footer class="blockquote-footer">The RippleMind Team</footer>
                    </blockquote>
                </div>
            </div>
            <!-- note ends -->
        </form>
    </div>
    <?php include 'footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>