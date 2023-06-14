<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Form Peserta</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        <style>
        .footer{
          position:absolute;
          bottom:0;
          width:100%;
        }
      </style>
    </head>
    <body class="bg-success">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="form">Form</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="daftar">Tabel Daftar</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
         <br>
         <br>
         <br> 

            <div class="container">
                <?php echo $__env->yieldContent('content'); ?>
            </div>

        <footer class="footer text-center bg-white">
            Copyrigth &copy; Yunus 2023
        </footer>

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>
<?php /**PATH E:\Semester2\ForFun\DevCamp\devcampcrud\resources\views/layouts/layout1.blade.php ENDPATH**/ ?>