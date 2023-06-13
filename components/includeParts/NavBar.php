<head>
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
    <nav>
        <div class="logo">
            <i class="bx bx-menu menu-icon"></i>
            <span class="logo-name">CodingLab</span>
            <?php if (basename($_SERVER['PHP_SELF']) === 'index.php') { ?>
                <div class="search-btn">
                    <div class="InputContainer">
                        <input type="text" name="text" class="input" id="searchInput" placeholder="Search" />

                        <label style="cursor: pointer;" for="input" class="labelforsearch">
                            <svg viewBox="0 0 512 512" class="searchIcon">
                                <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                            </svg>
                        </label>
                        <div class="border"></div>

                        <button class="micButton">
                            <svg viewBox="0 0 384 512" class="micIcon">
                                <path d="M192 0C139 0 96 43 96 96V256c0 53 43 96 96 96s96-43 96-96V96c0-53-43-96-96-96zM64 216c0-13.3-10.7-24-24-24s-24 10.7-24 24v40c0 89.1 66.2 162.7 152 174.4V464H120c-13.3 0-24 10.7-24 24s10.7 24 24 24h72 72c13.3 0 24-10.7 24-24s-10.7-24-24-24H216V430.4c85.8-11.7 152-85.3 152-174.4V216c0-13.3-10.7-24-24-24s-24 10.7-24 24v40c0 70.7-57.3 128-128 128s-128-57.3-128-128V216z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            <?php } ?>
        </div>

        <div class="sidebar">
            <div class="logo">
                <i class="bx bx-menu menu-icon"></i>
                <span class="logo-name">CodingLab</span>
            </div>
            <div class="sidebar-content">
                <ul class="lists">
                    <li class="list">
                        <a href="/multimedia" class="nav-link">
                            <i class="bx bx-home-alt icon"></i>
                            <span class="link">Home</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="/multimedia/components/Subscriptions/subscription.php" class="nav-link">
                            <i class="bx bx-bar-chart-alt-2 icon"></i>
                            <span class="link">Subscriptions</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="#" class="nav-link">
                            <i class="bx bx-heart icon"></i>
                            <span class="link">Liked Videos</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="/multimedia/components/WatchLater/watchLater.php" class="nav-link">
                            <i class="bx bx-message-rounded icon"></i>
                            <span class="link">Watch Later</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="/multimedia/components/Kids/Kids.php" class="nav-link">
                            <i class="bx bx-pie-chart-alt-2 icon"></i>
                            <span class="link">Kids</span>
                        </a>
                    </li>
                </ul>
                <div class="bottom-cotent">
                    <li class="list">
                        <a href="#" class="nav-link">
                            <i class="bx bx-cog icon"></i>
                            <span class="link">Settings</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="#" class="nav-link">
                            <i class="bx bx-log-out icon"></i>
                            <span class="link">Logout</span>
                        </a>
                    </li>
                </div>
            </div>
        </div>
    </nav>
    <section class="overlay"></section>
    <script>
        const navBar = document.querySelector("nav"),
            menuBtns = document.querySelectorAll(".menu-icon"),
            overlay = document.querySelector(".overlay");

        menuBtns.forEach((menuBtn) => {
            menuBtn.addEventListener("click", () => {
                navBar.classList.toggle("open");
            });
        });

        overlay.addEventListener("click", () => {
            navBar.classList.remove("open");
        });
    </script>
</body>