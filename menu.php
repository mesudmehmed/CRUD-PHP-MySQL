<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php"><b>CRUD</a></b>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <?php
                // controleer of de URL overeenkomt met de huidige pagina en voeg 'active' toe aan de link
                $currentPage = basename($_SERVER['PHP_SELF']);
                $homeUrl = "home.php";
                $loginUrl = "login.php";
                $logoutUrl = "logout.php";
                if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
                    $homeClass = ($currentPage == $homeUrl) ? "active" : "";
                    $loginClass = ($currentPage == $loginUrl) ? "active" : "";
                    echo '<li class="nav-item"><a class="nav-link '.$homeClass.'" aria-current="page" href="'.$homeUrl.'">Home</a></li>';
                    echo '<li class="nav-item"><a class="nav-link '.$loginClass.'" href="'.$loginUrl.'">Login</a></li>';
                }else{
                    $homeClass = ($currentPage == $homeUrl) ? "active" : "";
                    $logoutClass = ($currentPage == $logoutUrl) ? "active" : "";
                    echo '<li class="nav-item"><a class="nav-link" aria-current="page"><i class="fa-sharp fa-solid fa-user-secret"></i><b> ' . htmlspecialchars($_SESSION["username"]) . '</b></a></li>';
                    echo '<li class="nav-item"><a class="nav-link '.$homeClass.'" aria-current="page" href="'.$homeUrl.'">Home</a></li>';
                    echo '<li class="nav-item"><a class="nav-link '.$logoutClass.'" href="'.$logoutUrl.'">Logout</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>