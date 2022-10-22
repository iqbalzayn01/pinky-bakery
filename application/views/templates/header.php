<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <!-- Style: Start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css'); ?>" type="text/css">
    <!-- Style: End -->
    <!-- ?v=<time();? -->

</head>
<body>

<!-- Navbar: Start -->
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url(); ?>">TokoKue</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse c-navbar" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">about</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('auth'); ?>">login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('auth/registration'); ?>">sign up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <svg width="25" height="25" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 3.75C0 3.41848 0.131696 3.10054 0.366117 2.86612C0.600537 2.6317 0.918479 2.5 1.25 2.5H5C5.27883 2.50008 5.54963 2.59338 5.76933 2.76506C5.98903 2.93675 6.14502 3.17696 6.2125 3.4475L7.225 7.5H36.25C36.4335 7.50017 36.6148 7.54076 36.7809 7.61888C36.947 7.697 37.0938 7.81074 37.211 7.95201C37.3282 8.09328 37.4128 8.25863 37.4588 8.43629C37.5049 8.61396 37.5113 8.79959 37.4775 8.98L33.7275 28.98C33.6739 29.2664 33.5219 29.5252 33.2977 29.7114C33.0736 29.8976 32.7914 29.9997 32.5 30H10C9.70858 29.9997 9.42641 29.8976 9.20228 29.7114C8.97814 29.5252 8.82612 29.2664 8.7725 28.98L5.025 9.0175L4.025 5H1.25C0.918479 5 0.600537 4.8683 0.366117 4.63388C0.131696 4.39946 0 4.08152 0 3.75ZM12.5 30C11.1739 30 9.90215 30.5268 8.96447 31.4645C8.02678 32.4021 7.5 33.6739 7.5 35C7.5 36.3261 8.02678 37.5979 8.96447 38.5355C9.90215 39.4732 11.1739 40 12.5 40C13.8261 40 15.0979 39.4732 16.0355 38.5355C16.9732 37.5979 17.5 36.3261 17.5 35C17.5 33.6739 16.9732 32.4021 16.0355 31.4645C15.0979 30.5268 13.8261 30 12.5 30ZM30 30C28.6739 30 27.4021 30.5268 26.4645 31.4645C25.5268 32.4021 25 33.6739 25 35C25 36.3261 25.5268 37.5979 26.4645 38.5355C27.4021 39.4732 28.6739 40 30 40C31.3261 40 32.5979 39.4732 33.5355 38.5355C34.4732 37.5979 35 36.3261 35 35C35 33.6739 34.4732 32.4021 33.5355 31.4645C32.5979 30.5268 31.3261 30 30 30ZM12.5 32.5C13.163 32.5 13.7989 32.7634 14.2678 33.2322C14.7366 33.7011 15 34.337 15 35C15 35.663 14.7366 36.2989 14.2678 36.7678C13.7989 37.2366 13.163 37.5 12.5 37.5C11.837 37.5 11.2011 37.2366 10.7322 36.7678C10.2634 36.2989 10 35.663 10 35C10 34.337 10.2634 33.7011 10.7322 33.2322C11.2011 32.7634 11.837 32.5 12.5 32.5ZM30 32.5C30.663 32.5 31.2989 32.7634 31.7678 33.2322C32.2366 33.7011 32.5 34.337 32.5 35C32.5 35.663 32.2366 36.2989 31.7678 36.7678C31.2989 37.2366 30.663 37.5 30 37.5C29.337 37.5 28.7011 37.2366 28.2322 36.7678C27.7634 36.2989 27.5 35.663 27.5 35C27.5 34.337 27.7634 33.7011 28.2322 33.2322C28.7011 32.7634 29.337 32.5 30 32.5V32.5Z" fill="black"/>
            </svg>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Navbar: End -->