<header>
    <nav id="main-navbar" class="navbar navbar-expand-lg d-block navbar-light bg-white fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <h3><i class="bi bi-clock"></i> School</h3>
            </a>
            <?php 

                $uID = $_SESSION['uID'];
                $select = " SELECT * FROM user WHERE userID = '$uID' ";
                $result = mysqli_query($conn, $select);
                if (mysqli_num_rows($result) > 0) {
                   while($row = mysqli_fetch_assoc($result)) {
                    $fname = $row['fname'];
                    $loggedin = $row['loggedin'];
                }}  

            ?>
            <ul class="navbar-nav ms-auto d-flex flex-row">
                <?php
                    if($loggedin == 1) {
                ?>
                <li class="nav-item"><a class="nav-link me-3 me-lg-0">Welcome, <span style="text-transform: capitalize;"><?php echo $fname; ?></span>!</a></li>
                <li class="nav-item"><a class="nav-link me-3 me-lg-0" href="<?php echo BASE_URL . '/admin/profile.php' ?>"><i class="bi bi-person"></i>  Profile</a></li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link me-3 me-lg-0" href="<?php echo BASE_URL . '/logout.php' ?>">Logout</a></li>
                <?php 
                    } else {
                ?>
                <li class="nav-item"><a class="nav-link me-3 me-lg-0" href="<?php echo BASE_URL . '/login.php' ?>">Login/Signup</a></li>
                <?php 
                    }
                ?>
            </ul>
        </div>
    </nav>
</header>
