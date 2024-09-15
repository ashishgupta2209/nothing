<?php
// Get table and post ID from URL
$table = $_GET['table'] ?? 'edublogs'; // Default table is 'blogposts'
$post_id = $_GET['id'] ?? 1; // Default post ID

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RippleMind - Education Blogs</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">

    <style>
        .intro-section {
            padding: 40px 0;
            text-align: center;
            background-color: #f8f9fa;
        }

        .intro-section h2 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 20px;
        }

        .intro-section p {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 30px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn-primary-custom {
            background-color: #3498db;
            border: none;
            padding: 10px 20px;
            color: #fff;
            font-size: 1rem;
        }

        .btn-primary-custom:hover {
            background-color: #2980b9;
        }

        .card-text {
            overflow: hidden;
            max-height: 4.5em;
            line-height: 1.5em;
            transition: max-height 0.9s ease;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;
            color: #535454;
        }

        .card-content-expanded {
            max-height: 100em;
            -webkit-line-clamp: unset;
        }

        .btn-smaller {
            font-size: 0.875rem;
            padding: 0.25rem 0.5rem;
            border-width: 1px;
        }

        .btn-smaller a {
            color: inherit;
            text-decoration: none;
            display: block;
            height: 100%;
        }

        /* Custom styles for the introduction section */
        .intro-section {
            position: relative;
            background: url('img/education-background-vector.png') no-repeat center center;
            background-size: cover;
            color: #ffffff;
            border-radius: 10px;
            overflow: hidden;
        }

        .intro-section .card {
            border-radius: 10px;
        }

        .intro-section .card-body {
            padding: 20px;
        }

        .intro-section .card-title {
            font-size: 1.25rem;
            font-weight: 600;
        }

        .intro-section .card-text {
            font-size: 0.9rem;
            line-height: 1.5;
        }

        @media (max-width: 768px) {
            .intro-section .card-title {
                font-size: 1.1rem;
            }

            .intro-section .card-text {
                font-size: 0.85rem;
            }
        }

        @media (max-width: 480px) {
            .intro-section .card-body {
                padding: 15px;
            }
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
            overflow: hidden;
        }

        .search-input {
            border: 1px double #ced4da;
            border-radius: 25px 0 0 25px;
            padding: 10px 15px;
            flex: 1;
        }

        .search-input:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.25);
        }

        .search-icon-button {
            border-radius: 0 25px 25px 0;
            background-color: #007bff;
            border: none;
            width: 50px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
            cursor: pointer;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .search-icon-button i {
            color: white;
            font-size: 1.7rem;
        }

        .search-icon-button:hover {
            background-color: #0056b3;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        }

        .search-icon-button:active {
            background-color: #004494;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .search-input {
            border: 2px solid transparent;
            border-radius: 25px 0 0 25px;
            padding: 10px 15px;
            background-color: #fff;
            position: relative;
            transition: border-color 0.15s, box-shadow 0.15s;
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

    <!-- Introduction Section -->
    <section class="intro-section bg-gradient text-light py-4">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 col-md-8 mx-auto">
                    <h2 class="display-4 mb-3">Education Insights</h2>
                    <p class="lead mb-4">Dive into our educational blogs covering various topics and resources to enhance your learning journey. Stay informed and inspired with our expert content.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-4 mb-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Learning Strategies</h5>
                            <p class="card-text">Explore effective learning strategies to improve your study habits and academic performance.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Educational Resources</h5>
                            <p class="card-text">Discover valuable resources and tools that can aid in your educational journey.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Expert Advice</h5>
                            <p class="card-text">Gain insights from educational experts and thought leaders to enhance your learning experience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Education blogs -->
    <div class="container blogcontainer mt-5">
        <!-- Full-width cards row -->
        <div class="row g-4">
            <?php
            include 'db.php';

            $sql = "SELECT * FROM edublogs ORDER BY post_date DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $datePosted = new DateTime($row["post_date"]);
                    $formattedDate = $datePosted->format('F d, Y');

                    echo '<div class="col-12">
                        <div class="card bg-light blogcard h-100">
                            <img src="' . $row['image_path'] . '" class="card-img-top img-fluid" alt="Post Image">
                            <div class="card-body">
                                <h5 class="card-title">' . htmlspecialchars($row['title']) . '</h5>
                                <hr>
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