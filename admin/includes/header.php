<div class="myHead px-3 shadow-sm">
    <div class="d-flex gap-4 align-items-center">
        <h5 class="text-light curserPoint burger"><i class="fas fa-bars"></i></h5>
        <h5 class="text-light">WE FOR WIN</h5>
    </div>
    <div class="d-flex gap-4 align-items-center">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdown" data-bs-toggle="dropdown">
                    <i class="fas fa-user"></i>
                </a>
                <ul class="dropdown-menu border-0 shadow" aria-labelledby="navbarDropdown">
                    <li>
                        <a class="dropdown-item curserPoint">
                            <small class="card-text mb-2">Logged in as:</small>
                            <!-- <p class="mb-1"><i class="fas fa-user-circle me-2"></i>Guest</p> -->
                            <?php
                            if (isset($_SESSION['userDetails'])) {
                                echo "<p class='mb-1'><i class='fas fa-user-circle me-2'></i>Admin</p>";
                                // echo "<p class='mb-1'><i class='fas fa-user-circle me-2'></i>" . $_SESSION['userDetails']['userName'] . "</p>";
                            } else {
                                echo "<p class='mb-1'><i class='fas fa-user-circle me-2'></i>Guest</p>";
                            }
                            ?>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item" href="process/auth/logoutprocess.php">
                            <i class="fas fa-sign-out-alt me-2"></i>Logout
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>