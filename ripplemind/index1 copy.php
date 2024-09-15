<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Blog Cards</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* Custom CSS for card responsiveness */
        .card-body p {
            font-size: 0.5rem;
        }

        .card-title {
            font-size: 1.2rem;
        }

        .blogcontainer {
            padding-top: 20px;
            /* although don't remove the container class from the html */
        }

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
        }

        .card-content-expanded {
            max-height: 100em;
            /* A large value to ensure all content is shown when expanded */
            -webkit-line-clamp: unset;
            /* Removes line clamping when expanded */
        }

        .card-img-top {
            width: 100%;
            height: 180px;
            /* Slightly smaller image height */
            object-fit: cover;
        }

        /* Responsive adjustments */
        @media (max-width: 767.98px) {
            .card-title {
                font-size: 1rem;
                /* Adjust title size for mobile */
            }

            .card-body p {
                font-size: 0.8rem;
                /* Adjust text size for mobile */
            }

            .card-img-top {
                height: 150px;
                /* Smaller image height for mobile */
            }
        }

        @media (min-width: 768px) and (max-width: 991.98px) {
            .card-title {
                font-size: 1.1rem;
                /* Slightly smaller title size for tablets */
            }

            .card-body p {
                font-size: 0.85rem;
                /* Slightly smaller text size for tablets */
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><b>RippleMind</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index1.php"><i class="fa-solid fa-house mr-1"></i> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="chatbot.php"><i class="fa-solid fa-robot mr-1"></i> ChatBOT</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="sciandtech.php"><i class="fa-solid fa-biohazard mr-1"></i>Tech-Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="edublog.php"><i class="fa-solid fa-user-graduate mr-1"></i> Edu-Blog</a>
                </li>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="sciandtech.php">Science and Tech</a>
                        <a class="dropdown-item" href="edublog.php">Education</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">About Us</a>
                    </div>
                </li> -->
            </ul>
            <form class="form-inline my-2 my-lg-0 search-form" role="search">
                <div class="input-group">
                    <input class="form-control search-input" type="search" placeholder="Ask ChatBOT..." aria-label="Search">
                    <button type="submit" class="btn search-icon-button" aria-label="Search">
                        <i class="fa-brands fa-searchengin"></i>
                    </button>
                </div>
            </form>

        </div>
    </nav>

    <!-- Blog Cards -->
    <div class="container blogcontainer mt-5">
        <!-- Centered cards row using Bootstrap classes -->
        <div class="row justify-content-center row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <?php
            include 'db.php';

            $sql = "SELECT * FROM blogposts ORDER BY post_date DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // Convert the date from the database to the desired format
                    $datePosted = new DateTime($row["post_date"]);
                    $formattedDate = $datePosted->format('F d, Y');

                    echo '<div class="col d-flex justify-content-center">
                            <div class="card h-100">
                                <img src="' . $row['image_path'] . '" class="card-img-top img-fluid" alt="Post Image">
                                <div class="card-body">
                                    <h5 class="card-title">' . htmlspecialchars($row['title']) . '</h5>
                                    <hr>
                                    <p class="card-text">' . htmlspecialchars($row['text']) . '</p>
                                    <a href="#" class="btn btn-dark read-more-btn" type="button">Read More</a>
                                </div>
                                 <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <p class="text-muted mb-0 mt-0"><small>Posted on ' . $formattedDate . ' by Admin</small></p>
                                </li>
                               <li class="list-group-item bg-light">
                                    <button type="button" class="btn btn-outline-info btn-smaller">
                                    <a href="' . htmlspecialchars($row['visit_link']) . '" target="_blank">Visit Page</a>
                                    </button>
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
    <!-- Footer -->
    <?php include 'footer.php' ?>
    <!-- Bootstrap JS and dependencies (for functionality) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>

</html>