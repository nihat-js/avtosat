<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Car Findal Service</title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- <link
      href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"
      rel="stylesheet"
    /> -->

  <link rel="stylesheet" href="css/app.css" />
  <!-- <link rel="stylesheet" href="css/output.css" /> -->
</head>

<body>
  @include("partials.header")


  <main>
    <!-- New Cars -->
    <section>
      <div class="container">
        <h2>My Favourite Cars</h2>
        <div class="car-items-listing">
          @foreach ([1, 2, 3, 4, 5] as $x)
        <div class="car-item card">
        <a href="/view.html">
          <img src="/img/cars/Lexus-RX200t-2016/1.jpeg" alt="" class="car-item-img rounded-t" />
        </a>
        <div class="p-medium">
          <div class="flex items-center justify-between">
          <small class="m-0 text-muted">New Jersey</small>
          <button class="btn-heart text-primary">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" style="width: 16px">
            <path
              d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z" />
            </svg>
          </button>
          </div>
          <h2 class="car-item-title">2016 - Lexus RX200t</h2>
          <p class="car-item-price">$25,000</p>
          <hr />
          <p class="m-0">
          <span class="car-item-badge">SUV</span>
          <span class="car-item-badge">Electric</span>
          </p>
        </div>
        </div>
      @endforeach
        </div>
        <nav class="pagination my-large">
          <a href="#" class="pagination-item">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" style="width: 18px">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="m18.75 4.5-7.5 7.5 7.5 7.5m-6-15L5.25 12l7.5 7.5" />
            </svg>
          </a>
          <a href="#" class="pagination-item">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" style="width: 18px">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg>
          </a>

          <a href="#" class="pagination-item"> 1 </a>
          <a href="#" class="pagination-item"> 2 </a>
          <span class="pagination-item active"> 3 </span>
          <a href="#" class="pagination-item"> 4 </a>
          <a href="#" class="pagination-item">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" style="width: 18px">
              <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
            </svg>
          </a>
          <a href="#" class="pagination-item">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" style="width: 18px">
              <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
            </svg>
          </a>
        </nav>
      </div>
    </section>
    <!--/ New Cars -->
  </main>

  <footer></footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/4.0.9/scrollreveal.js"
    integrity="sha512-XJgPMFq31Ren4pKVQgeD+0JTDzn0IwS1802sc+QTZckE6rny7AN2HLReq6Yamwpd2hFe5nJJGZLvPStWFv5Kww=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="js/app.js"></script>
</body>

</html>