<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Damilare Fadodun" />
    <meta content="Software Developer" name=" Developer" />
    <title>Home</title>
    <link href="favicon.ico" rel="icon" />
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/styles.css"/>
  </head>
  <body>
    <!-- navbar start here  -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Myblog</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.php">Blog</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
               Category
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Cat 1</a></li>
                <li><a class="dropdown-item" href="#"> Cat 2 </a></li>
              
                
              </ul>
            </li>
          <li class="nav-item" > 
            <a href="login.php" class="nav-link">Login / Signup</a>
          </li>
          </ul>
          <form class="d-flex" role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
          </form>
        </div>
      </div>
    </nav>
    <!-- navbar end here -->
    <div class="container mt-5">
        <section class="d-flex">
            <main class="main-blog">
                <div class="card main-blog-card mb-5" >
                    <img src="upload/blog/hero-bg_01.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Blog title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        <p class="card-text"> <small class="text-body-secondary"> Last updated 3 mins ago </small></p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <div class="card main-blog-card mb-5" >
                    <img src="upload/blog/hero-bg_01.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Blog title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        <p class="card-text"> <small class="text-body-secondary"> Last updated 3 mins ago </small></p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <div class="card main-blog-card mb-5" >
                    <img src="upload/blog/techforgood.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Blog title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        <p class="card-text"> <small class="text-body-secondary"> Last updated 3 mins ago </small></p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </main>

            <aside class="aside-main">
                <div class="list-group category-aside ">
                    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                       Category
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">Category 1</a>
                    <a href="#" class="list-group-item list-group-item-action">Category 2</a>
                    <a href="#" class="list-group-item list-group-item-action">Category 3</a>
                  
                </div>
            </aside>
        </section>
    </div>

    <script src="libs/jquery/jquery-3.7.1.min.js"></script>
    <script src="libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
