<?php
// Get table and post ID from URL
$table = $_GET['table'] ?? 'blogposts'; // Default table is 'blogposts'
$post_id = $_GET['id'] ?? 1; // Default post ID

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Blog Cards</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">

    <style>
        .card-text {
            overflow: hidden;
            max-height: 4.5em;
            /* Controls the initial visible height of the text */
            line-height: 1.5em;
            /* Line height for the text */
            transition: max-height 0.9s ease;
            /*default = 0.5s */
            /* Smooth transition for max-height */
            display: -webkit-box;
            /* Flexbox display for webkit browsers */
            -webkit-box-orient: vertical;
            /* Vertical orientation for the flexbox */
            -webkit-line-clamp: 3;
            /* Limits the text to 3 lines and adds ellipsis */
            color: #535454;
        }

        .card-content-expanded {
            max-height: 100em;
            /* A large value to ensure all content is shown when expanded */
            -webkit-line-clamp: unset;
            /* Removes line clamping when expanded */
        }

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

        /* Customize the horizontal rule below the title */
        .custom-hr {
            border: 0;
            height: 2px;
            /* Slightly thicker */
            background-image: linear-gradient(to right, #4a90e2, #022a52);
            /* Subtle gradient */
            margin: 10px 0;
            /* Adjust spacing */
            width: 75%;
            /*by chatgpt = 60% */
            /* Not too long, keeps it centered */
        }

        .create-blog-btn {
            background-color: #007bff;
            border: none;
            color: white;
            padding: 9px 28px;
            font-size: 1.05rem;
            border-radius: 50px;
            transition: background-color 0.3s, transform 0.3s;
            display: inline-block;
            text-transform: uppercase;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border: 2px solid #007bff;
            font-weight: 500;
        }

        .create-blog-btn:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.25);
        }

        .create-blog-btn i {
            margin-right: 10px;
            font-size: 1.2rem;
        }

        /* Responsive font size adjustments */
        @media (max-width: 768px) {
            .create-blog-btn {
                font-size: 1rem;
                /* Slightly smaller font size on tablets */
                padding: 8px 20px;
            }
        }

        @media (max-width: 576px) {
            .create-blog-btn {
                font-size: 0.9rem;
                /* Even smaller font size on mobile */
                padding: 8px 20px;
            }
        }
    </style>
</head>

<body>

    <?php include 'navbar.php' ?>

    <!-- Featured Blog Card -->
    <div class="container mt-5">
        <div class="row">
            <?php
            include 'db.php';

            // Fetch the featured blog post
            $sql_featured = "SELECT * FROM featuredblog ORDER BY id DESC LIMIT 1";
            $featured_result = $conn->query($sql_featured);

            if ($featured_result->num_rows > 0) {
                $featured = $featured_result->fetch_assoc();
                $featuredDate = new DateTime($featured["post_date"]);
                $formattedFeaturedDate = $featuredDate->format('F d, Y');

                echo '
            <div class="col-12">
                <div class="card bg-light featured-card h-100">
                    <div class="ribbon"><span>Featured</span></div>
                    <img src="' . $featured['image_path'] . '" class="card-img-top img-fluid" alt="Featured Post Image">
                    <div class="card-body">
                        <h4 class="card-title featured-title">' . htmlspecialchars($featured['title']) . '</h4>
                        <hr class="my-3 custom-hr">
                        <p class="card-text">' . htmlspecialchars($featured['text']) . '</p>
                        <a href="#" class="btn btn-dark read-more-btn" type="button" title="Click to Read Full">Read More</a>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <p class="text-muted mb-0"><small>Posted on ' . $formattedFeaturedDate . ' by Admin</small></p>
                        </li>
                    </ul>
                </div>
            </div>';
            } else {
                echo '<p>No featured blog available.</p>';
            }

            $conn->close();
            ?>
        </div>
    </div>



    <!-- Blog Cards -->
    <div class="container blogcontainer mt-5">
        <!-- Full-width cards row -->
        <div class="row g-4">
            <?php
            include 'db.php';

            $sql = "SELECT * FROM blogposts ORDER BY post_date DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // Convert the date from the database to the desired format
                    $datePosted = new DateTime($row["post_date"]);
                    $formattedDate = $datePosted->format('F d, Y');

                    echo '<div class="col-12">
                        <div class="card bg-light blogcard h-100">
                            <img src="' . $row['image_path'] . '" class="card-img-top img-fluid" alt="Post Image">
                            <div class="card-body">
                                <h5 class="card-title">' . htmlspecialchars($row['title']) . '</h5>
                                <hr class="custom-hr">
                                <p class="card-text">' . htmlspecialchars($row['text']) . '</p>
                                <a href="#" class="btn btn-dark read-more-btn" title="Click to Read Full" type="button">Read More</a>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <p class="text-muted mb-0 mt-0"><small>Posted on ' . $formattedDate . ' by Admin</small></p> 
                                </li>
                                <li class="list-group-item bg-light">
                                    <a href="dedipage.php?table=' . urlencode($table) . '&id=' . intval($row['id']) . '" class="btn btn-outline-info btn-smaller" target="_self">Visit Page</a>
                                </li>

                            </ul>
                        </div>
                    </div>';
                }
            } else {
                echo '<p>No blog posts found.</p>';
            }

            $conn->close();
            ?>
        </div>
    </div>


    <!-- Create Your Own Blog Button -->
    <div class="container text-center mt-5 mb-5">
        <a href="sub_user_blog.php" class="btn btn-lg btn-primary create-blog-btn">
            <i class="fas fa-pencil-alt"></i> Create Your Own Blog
        </a>
    </div>

    <!-- Footer -->
    <?php include 'footer.php' ?>
    <!-- Bootstrap JS and dependencies (for functionality) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>


</body>

</html>