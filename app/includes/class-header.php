<header>
    <nav id="class-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <h3><i class="bi bi-clock"></i> School</h3>
            </a>
            <ul class="navbar-nav ms-auto d-flex flex-row">
                <li class="nav-item"><a class="nav-link me-3 me-lg-0">Welcome, <span style="text-transform: capitalize;"><?php echo $fname; ?></span>!</a></li>
                <li class="nav-item"><a class="nav-link me-3 me-lg-0" href="<?php echo BASE_URL . '/admin/profile.php' ?>"><i class="bi bi-person"></i>  Profile</a></li>
                <li class="nav-item"><a class="nav-link me-3 me-lg-0" href="<?php echo BASE_URL . '/logout.php' ?>">Logout</a></li>
                <li class="nav-item"><a class="nav-link me-3 me-lg-0" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link me-3 me-lg-0" href="<?php echo BASE_URL . '/pages/entry/login.php' ?>">Login/Signup</a></li>
            </ul>
        </div>
    </nav>
</header>
