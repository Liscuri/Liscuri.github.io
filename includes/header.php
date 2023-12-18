<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg bg-body-secondary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Admin Test</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
        </ul>
        <form class="d-flex">
            <a class="btn btn-outline-secondary me-1" href="admin.php">Admin</a>
            <a class="btn btn-outline-success" href="login.php">Login</a>
        </form>
    </div>
</nav>

<!-- Include jQuery and Bootstrap 5 JS -->
<script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        let path = window.location.pathname;
        path = path.replace(/^\/admin_practice/, '');  // Remove leading '/' and "/admin_practice" from the path
        path = path.replace(/\/|\.php$/g, '');  // Remove trailing slash and ".php" extension
        console.log('Current Path:', path);

        // Handle navigation links and buttons in the form
        $('.navbar-nav a, .form-btns a').each(function () {
            var href = $(this).attr('href').replace(/\.php$/, '');  // Remove ".php" extension from href
            console.log('Comparing with:', href);

            if (path === href) {
                $(this).addClass('active');
            }
        });
    });

</script>
