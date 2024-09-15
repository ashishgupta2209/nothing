<header>
        <div class="containernav" >
            <h2 class="navreivise" title="Reivise (home)" style="margin-block: auto !important;">Reivise</h2>
            <nav>
                <div class="menu-toggle">

                    <span class="bar1"></span>
                    <span class="bar2"></span>
                    <span class="bar3"></span>
                </div>
                <div class="navicons">
                    <ul class="nav-links">
                        <li><a href="blogpost/blog_post.php">Blog</a></li>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#home">ChatBOT</a></li>
                        <li><a href="#mcqs">MCQs</a></li>
                        <li><a href="#solutions">Solutions</a></li>
                        <li><a href="#tests">Notes</a></li>
                        <li><a href="breng10thmcq.php">Contact</a></li>
                    </ul>

                </div>
            </nav>
        </div>

    </header>
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