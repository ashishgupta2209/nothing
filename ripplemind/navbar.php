<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #022a52 !important;">
    <a class="navbar-brand" href="#"><b>RippleMind</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php echo basename($_SERVER['SCRIPT_NAME']) == 'index.php' ? 'active' : ''; ?>">
                <a class="nav-link" href="index.php"><i class="fa-solid fa-house mr-1"></i> Home</a>
            </li>
            <li class="nav-item <?php echo basename($_SERVER['SCRIPT_NAME']) == 'index1.php' ? 'active' : ''; ?>">
                <a class="nav-link" href="index1.php"><i class="fa-solid fa-blog mr-1"></i> Blog</a>
            </li>
            <li class="nav-item <?php echo basename($_SERVER['SCRIPT_NAME']) == 'chatbot.php' ? 'active' : ''; ?>">
                <a class="nav-link" href="chatbot.php"><i class="fa-solid fa-robot mr-1"></i> ChatBOT</a>
            </li>
            <li class="nav-item <?php echo basename($_SERVER['SCRIPT_NAME']) == 'sciandtech.php' ? 'active' : ''; ?>">
                <a class="nav-link" href="sciandtech.php"><i class="fa-solid fa-biohazard mr-1"></i> Tech-Blog</a>
            </li>
            <li class="nav-item <?php echo basename($_SERVER['SCRIPT_NAME']) == 'edublog.php' ? 'active' : ''; ?>">
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
