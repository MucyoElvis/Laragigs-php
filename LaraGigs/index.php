<?php include('./components/navbar.php');
include('./controllers/users.php');
include('./controllers/items.php');

?>
<section>
    <div class="container">
      <div class="input-group mt-5">
        <input type="search" class="form-control mx-3" placeholder="Search Laravel Gigs ..." name="search_text">
        <button class="btn btn-danger btn-lg " type="button">search</button>
      </div>
    </div>
  </section>
  <!-- grid -->

  <!-- item 1 -->
  <section class="p-5">
    <div class="container">
      <div class="row">

        <div class="col-md-6 mb-4">
          <div class="card  bg-second" style="border: none;">
            <div class="card-body text-center">
              <div class="h1 mb-3">
                <img src="./assets/images/php.png">
              </div>

              <h3 class="card-title   mb-3">Secondary Developer | Laravel & Vue</h3>
              <p class="card-text">
                A++ Labs
              </p>

              <a href="#" class="btn btn-sm bg-dark text-light" style="border-radius: 1rem;">Laravel</a>
              <a href="#" class="btn btn-sm bg-dark text-light" style="border-radius: 1rem;">API</a>
              <a href="#" class="btn btn-sm bg-dark text-light" style="border-radius: 1rem;">Vue</a>

              <p class="my-3 mt-4"><img src="./assets/images/location_50px.png" class="img-fluid mx-2 "
                  style="width: 2rem;">Miami ,Florida</p>
            </div>
          </div>
        </div>
        <!-- item 2 -->
        <div class="col-md-6 mb-4 ">
          <div class="card  bg-second" style="border: none;">
            <div class="card-body text-center">
              <div class="h1 mb-3">
                <img src="./assets/images/csharp.png">
              </div>

              <h3 class="card-title mb-3">Senior Developer | C++ & C#</h3>
              <p class="card-text">
                A++ Labs
              </p>

              <a href="#" class="btn btn-sm bg-dark text-light" style="border-radius: 1rem;">C#</a>
              <a href="#" class="btn btn-sm bg-dark text-light" style="border-radius: 1rem;">Python</a>
              <a href="#" class="btn btn-sm bg-dark text-light" style="border-radius: 1rem;">C++</a>

              <p class="my-3 mt-4"><img src="./assets/images/location_50px.png" class="img-fluid mx-2 "
                  style="width: 2rem;">Miami ,Florida</p>
            </div>
          </div>
        </div>
        <!-- item 3 -->
        <div class="col-md-6 mb-4">
          <div class="card  bg-second" style="border: none;">
            <div class="card-body text-center">
              <div class="h1 mb-3">
                <img src="./assets/images/go.png">
              </div>

              <h3 class="card-title mb-3">Junior Developer | Laravel & Ruby</h3>
              <p class="card-text">
                A++ Labs
              </p>

              <a href="#" class="btn btn-sm bg-dark text-light" style="border-radius: 1rem;">API</a>
              <a href="#" class="btn btn-sm bg-dark text-light" style="border-radius: 1rem;">Ruby</a>
              <a href="#" class="btn btn-sm bg-dark text-light" style="border-radius: 1rem;">Linode</a>

              <p class="my-3 mt-4"><img src="./assets/images/location_50px.png" class="img-fluid mx-2 "
                  style="width: 2rem;">Minnesota ,missouri</p>
            </div>
          </div>
        </div>
        <!-- item 4 -->

        <div class="col-md-6 mb-4">
          <div class="card  bg-second" style="border: none;">
            <div class="card-body text-center">
              <div class="h1 mb-3">
                <img src="./assets/images/node.png">
              </div>

              <h3 class="card-title   mb-3">Back End Developer | Php & Node.js</h3>
              <p class="card-text">
                A++ Labs
              </p>

              <a href="#" class="btn btn-sm bg-dark text-light" style="border-radius: 1rem;">Php</a>
              <a href="#" class="btn btn-sm bg-dark text-light" style="border-radius: 1rem;">Laravel</a>
              <a href="#" class="btn btn-sm bg-dark text-light" style="border-radius: 1rem;">Node</a>

              <p class="my-3 mt-4"><img src="./assets/images/location_50px.png" class="img-fluid mx-2 "
                  style="width: 2rem;">Tampa ,Florida</p>
            </div>
          </div>
        </div>
        <!-- item 5 -->
        <div class="col-md-6 mb-4">
          <div class="card  bg-second" style="border: none;">
            <div class="card-body text-center">
              <div class="h1 mb-3">
                <img src="./assets/images/python.png">
              </div>

              <h3 class="card-title   mb-3">Computer Science Engineer | Phython & Linode</h3>
              <p class="card-text">
                A++ Labs
              </p>

              <a href="#" class="btn btn-sm bg-dark text-light" style="border-radius: 1rem;">Phython</a>
              <a href="#" class="btn btn-sm bg-dark text-light" style="border-radius: 1rem;">Linode</a>
              <a href="#" class="btn btn-sm bg-dark text-light" style="border-radius: 1rem;">Java</a>

              <p class="my-3 mt-4"><img src="./assets/images/location_50px.png" class="img-fluid mx-2 "
                  style="width: 2rem;">Brooklyn ,New York</p>
            </div>
          </div>
        </div>

        <!-- item 6 -->
        <div class="col-md-6 mb-4">
          <div class="card  bg-second" style="border: none;">
            <div class="card-body text-center">
              <div class="h1 mb-3">
                <img src="./assets/images/ruby.png">
              </div>

              <h3 class="card-title   mb-3">Full Stack Developer | Linux & Python</h3>
              <p class="card-text">
                A++ Labs
              </p>

              <a href="#" class="btn btn-sm bg-dark text-light" style="border-radius: 1rem;">Linux</a>
              <a href="#" class="btn btn-sm bg-dark text-light" style="border-radius: 1rem;">Python</a>
              <a href="#" class="btn btn-sm bg-dark text-light" style="border-radius: 1rem;">Vue</a>

              <p class="my-3 mt-4"><img src="./assets/images/location_50px.png" class="img-fluid mx-2 "
                  style="width: 2rem;">Miami ,Florida</p>
            </div>
          </div>
        </div>
        <!-- item 7 -->
        <div class="col-md-6 mb-4">
          <div class="card  bg-second" style="border: none;">
            <div class="card-body text-center">
              <div class="h1 mb-3">
                <img src="./assets/images/scala.png">
              </div>

              <h3 class="card-title   mb-3">Senior Engineer | Linode & Linux</h3>
              <p class="card-text">
                A++ Labs
              </p>

              <a href="#" class="btn btn-sm bg-dark text-light" style="border-radius: 1rem;">Linode</a>
              <a href="#" class="btn btn-sm bg-dark text-light" style="border-radius: 1rem;">Linux</a>
              <a href="#" class="btn btn-sm bg-dark text-light" style="border-radius: 1rem;">Python</a>

              <p class="my-3 mt-4"><img src="./assets/images/location_50px.png" class="img-fluid mx-2 "
                  style="width: 2rem;">Boston ,Missouri</p>
            </div>
          </div>
        </div>

  </section>
  <!-- modal -->
<div class="modal fade" id="enroll" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">

<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header text-center">
      <h4 class="modal-title" id="enrollLabel">Registration Form</h4>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <p class="lead text-center">
        Fill Out This Form To Start Listing Gigs
      </p>
      <?php include('./components/form.php') ?>
    </div>
  </div>
</div>

 <?php include('./components/footer.php'); ?>