<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Website Daftar Peserta</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
            crossorigin="anonymous"
        />
    </head>
    <body class="bg-success">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a
                            class="nav-link active"
                            aria-current="page"
                            href="form"
                            >Form</a
                        >
                        <a
                            class="nav-link active"
                            aria-current="page"
                            href="daftar"
                            >Daftar</a
                        >
                    </div>
                </div>
            </div>
        </nav>
        <br><br><br>

        <div class="container">@yield('content')</div>

        <footer class="bg-white text-center" style="position: absolute; width: 100%; bottom: 0">
            Copyright &copy; Yunus 2023
        </footer>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
