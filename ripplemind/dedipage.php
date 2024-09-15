<?php
// Connect to the database
include('db.php'); // Include your database connection file

// Get table and post ID from URL
$table = $_GET['table'] ?? 'blogposts'; // Default table is 'blogposts'
$post_id = $_GET['id'] ?? 1; // Default post ID

// Whitelist allowed table names for security
$allowed_tables = ['blogposts', 'edublogs', 'sciblogposts']; // Add allowed table names

if (!in_array($table, $allowed_tables)) {
    die('Invalid table name');
}

// Prepare the SQL statement
$sql = "SELECT title, visit_page_txt, image_path, post_date FROM $table WHERE id = ?";

// Prepare and execute the statement
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $post_id);
$stmt->execute();
$result = $stmt->get_result();
$post = $result->fetch_assoc();

// Check if the post exists
if (!$post) {
    die("Blog post not found.");
}

// Format the date
$formattedDate = date("F j, Y", strtotime($post['post_date']));

// Determine which navbar item is active
$activeBlog = ($table == 'blogposts') ? 'active' : '';
$activeTechBlog = ($table == 'sciblogposts') ? 'active' : '';
$activeEduBlog = ($table == 'edublogs') ? 'active' : '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Read the full article titled '<?php echo htmlspecialchars($post['title']); ?>' on RippleMind. Learn more about relevant topics, insights, and updates.">
    <meta name="keywords" content="Blog, Articles, <?php echo htmlspecialchars($post['title']); ?>, Learning, Education, News">
    <meta name="author" content="Admin">
    <title><?php echo htmlspecialchars($post['title']); ?> - RippleMind</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">

    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #004080;
            border-bottom: 2px solid #003366;
        }

        .navbar-brand {
            color: #fff !important;
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            color: #e0e0e0 !important;
        }

        .navbar-nav .nav-link.active {
            color: #fff !important;
        }

        .navbar-toggler-icon {
            background-image: url('data:image/svg+xml;charset=utf8,<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"><path stroke="%23e0e0e0" stroke-width="2" d="M5 7h20M5 15h20M5 23h20"/></svg>');
        }

        .search-form {
            display: flex;
            align-items: center;
        }

        .input-group {
            display: flex;
            align-items: center;
            border-radius: 25px;
        }

        .search-input {
            border: 1px solid #ced4da;
            border-radius: 25px 0 0 25px;
            padding: 10px 15px;
            flex: 1;
            font-size: 1rem;
        }

        .search-input:focus {
            border-color: #004080;
            outline: none;
            box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.25);
        }

        .search-icon-button {
            border-radius: 0 25px 25px 0;
            background-color: #004080;
            border: none;
            width: 50px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .search-icon-button i {
            color: white;
            font-size: 1.7rem;
        }

        .search-icon-button:hover {
            background-color: #003366;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        }

        .search-icon-button:active {
            background-color: #002244;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .blog-header {
            background: linear-gradient(to right, #004080, #003366);
            color: #fff;
            padding: 80px 0;
            text-align: center;
            position: relative;
        }

        .blog-header h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .blog-header p {
            font-size: 1.2rem;
        }

        .blog-content {
            margin: 50px auto;
            padding: 0 15px;
            max-width: 800px;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        .blog-content img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
            border-bottom: 4px solid #004080;
        }

        .blog-content p {
            font-size: 1.2rem;
            line-height: 1.8;
            color: #555;
            padding: 0 20px;
        }

        .custom-hr {
            border: 0;
            height: 3px;
            background: #004080;
            margin: 30px 0;
        }

        .author-info {
            margin-top: 30px;
            color: #777;
            font-size: 0.9rem;
            padding: 0 20px;
        }

        .author-info small {
            display: block;
            margin-top: 5px;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .blog-header h1 {
                font-size: 2.5rem;
            }

            .blog-header p {
                font-size: 1rem;
            }

            .search-input {
                font-size: 0.9rem;
            }

            .search-icon-button {
                width: 40px;
                height: 35px;
            }

            .search-icon-button i {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 576px) {
            .blog-header h1 {
                font-size: 1.8rem;
            }

            .blog-header p {
                font-size: 0.9rem;
            }

            .search-input {
                font-size: 0.8rem;
            }

            .search-icon-button {
                width: 35px;
                height: 30px;
            }

            .search-icon-button i {
                font-size: 1.3rem;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#"><b>RippleMind</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><i class="fa-solid fa-house mr-1"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $activeBlog; ?>" href="index1.php"><i class="fa-solid fa-blog mr-1"></i> Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $activeTechBlog; ?>" href="sciandtech.php"><i class="fa-solid fa-biohazard mr-1"></i> Tech-Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $activeEduBlog; ?>" href="edublog.php"><i class="fa-solid fa-chalkboard-user mr-1"></i> Edu-Blog</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0 ml-auto">
                <div class="input-group search-form">
                    <input class="form-control search-input" type="search" placeholder="Search..." aria-label="Search">
                    <button class="search-icon-button" type="submit">
                        <i class="fa-solid fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </nav>

    <!-- Header Section -->
    <header class="blog-header">
        <div class="container">
            <h1><?php echo htmlspecialchars($post['title']); ?></h1>
            <p><?php echo $formattedDate; ?></p>
        </div>
    </header>

    <!-- Blog Content Section -->
    <div class="container blog-content">
        <?php if ($post['image_path']): ?>
        <img src="<?php echo htmlspecialchars($post['image_path']); ?>" alt="<?php echo htmlspecialchars($post['title']); ?>">
        <?php endif; ?>
        <div class="content">
            <?php echo $post['visit_page_txt']; ?>
        </div>
        <hr class="custom-hr">
        <div class="author-info">
            <small>Published on: <?php echo $formattedDate; ?></small>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; <?php echo date("Y"); ?> RippleMind. All rights reserved.</p>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
