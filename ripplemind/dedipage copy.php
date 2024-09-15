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

// Prepare the SQL statement (ignoring 'visit_link' as requested)
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
        .blog-header {
            background: #f4f4f4;
            padding: 50px 0;
            text-align: center;
        }

        .blog-header h1 {
            font-size: 2.5rem;
            color: #333;
        }

        .blog-content {
            margin: 50px 0;
        }

        .blog-content p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #535454;
        }

        .blog-content img {
            max-width: 100%;
            height: auto;
            margin: 20px 0;
        }

        .custom-hr {
            border: 0;
            height: 2px;
            background-image: linear-gradient(to right, #4a90e2, #022a52);
            margin: 20px 0;
        }

        .author-info {
            margin-top: 30px;
            color: #666;
        }

        .author-info small {
            font-size: 0.9rem;
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
                    <a class="nav-link" href="index.php"><i class="fa-solid fa-house mr-1"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $activeBlog; ?>" href="index1.php"><i class="fa-solid fa-blog mr-1"></i> Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $activeTechBlog; ?>" href="sciandtech.php"><i class="fa-solid fa-biohazard mr-1"></i> Tech-Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $activeEduBlog; ?>" href="edublog.php"><i class="fa-solid fa-user-graduate mr-1"></i> Edu-Blog</a>
                </li>
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


    <!-- Blog Header Section -->
    <div class="blog-header">
        <div class="container">
            <h1><?php echo htmlspecialchars($post['title']); ?></h1>
            <p>Posted on <?php echo $formattedDate; ?> by Admin</p>
        </div>
    </div>

    <!-- Blog Content Section -->
    <div class="container blog-content">
        <div class="row">
            <div class="col-12">
                <!-- Blog Post Image -->
                <?php if (!empty($post['image_path'])): ?>
                    <img src="<?php echo htmlspecialchars($post['image_path']); ?>" alt="Blog Image">
                <?php endif; ?>

                <!-- Blog Post Content -->
                <p><?php echo nl2br(htmlspecialchars($post['visit_page_txt'])); ?></p>
            </div>
        </div>

        <hr class="custom-hr">

        <!-- Author and Date Information -->
        <div class="author-info text-right">
            <p><small>Written by Admin</small></p>
            <p><small>Published on <?php echo $formattedDate; ?></small></p>
        </div>
    </div>
    <!-- Footer -->
    <?php include('footer.php'); ?>

    <!-- Bootstrap JS and Dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>