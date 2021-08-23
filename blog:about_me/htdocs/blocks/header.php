<link rel="stylesheet" href="css/forheader.css">


<header class="site-header sticky-top py-1">
    <nav class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="/" aria-label="Product">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"></circle><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"></path></svg>
        </a>
        <a class="py-2 d-none d-md-inline-block" href="about.php">Par sevīm</a>
        <a class="py-2 d-none d-md-inline-block" href="profession.php">Professija</a>
        <a class="py-2 d-none d-md-inline-block" href="freetime.php">Brīvais laiks</a>
        <a class="py-2 d-none d-md-inline-block" href="futureplan.php">Nākotnes plāni</a>
        <?php
        //print_r(xd);

        if (isset($_COOKIE["user"]) == !''):
        ?>
            <a class="py-2 d-none d-md-inline-block" href="form/exit.php">Iziet</a>
        <?php else:?>
        <a class="py-2 d-none d-md-inline-block" href="register.php">Ieiet</a>
        <?php endif;?>
    </nav>
</header>