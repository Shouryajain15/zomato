<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=Zomato, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Zomato</title>
  </head>
  <body>
    <header>
      <nav class="navbar">
        <div class="navbar-brand">
          <img src="./assets/logo.png" alt="Logo" class="brand-logo" />
        </div>
        <div class="navbar-nav-items">
          <div class="navbar-nav-item">
            <a href="login.php"><button class="button-primary">Login</button></a>
          </div>
        </div>
      </nav>
    </header>
    <main class="container">
      <section class="hero-container">
        <div class="hero-image-container">
          <img src="./assets/hero.jpg" alt="hero image" class="hero-image" />
          <img
            src="./assets/svg/heroShape.svg"
            alt="hero shape"
            class="hero-image-shape"
          />
          <img
            src="./assets/svg/herobgpattren.svg"
            alt="hero bg pattern"
            class="hero-image-pattern"/>
        </div>
        <div class="hero-description">
          <h1 class="hero-text">
            Order food from favourite restaurants near you.
          </h1>
          <a href="order.php"><button class="button-primary">Order Now</button></a>
        </div>
      </section>
      <section class="food-list-container">
        <h1 class="hero-text" style="text-align: center;">Explore Our Menu</h1>
        <div class="food-list-container-diagonal"></div>
        <div class="food-menu-card-list">
          <div class="food-menu-card">
            <img
              src="./assets/burger.jpg"
              alt="burger"
              class="food-menu-card-image"
            />
            <div class="food-menu-card-description">
              <h4 class="food-menu-card-title">Burgers</h4>
              <p class="food-menu-card-restaurants">
                Burger King, Mcdonalds, Burger Place
                <span style="color: red;">+3</span>
              </p>
            </div>
          </div>
          <div class="food-menu-card">
            <img
              src="./assets/pizza.jpg"
              alt="pizza"
              class="food-menu-card-image"
            />
            <div class="food-menu-card-description">
              <h4 class="food-menu-card-title">Pizzas</h4>
              <p class="food-menu-card-restaurants">
                Pizza Hut, Domino's Pizza
                <span style="color: red;">+3</span>
              </p>
            </div>
          </div>
          <div class="food-menu-card">
            <img
              src="./assets/iceCream.jpg"
              alt="icecream"
              class="food-menu-card-image"
            />
            <div class="food-menu-card-description">
              <h4 class="food-menu-card-title">Ice Creams</h4>
              <p class="food-menu-card-restaurants">
                Baskin Robins, Ibaco
                <span style="color: red;">+3</span>
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="restaurant-list-container">
        <div class="restaurant-list-text">
          <h1 class="hero-text">
            Order food from favourite restaurants near you.
          </h1>
        </div>
        <div class="restaurant-list-image-container">
          <div class="restaurant-list-row-1">
            <img
              src="./assets/restaurant1.jpg"
              alt="resstaurant1"
              class="restaurant1"
            />
            <img
              src="./assets/restaurant2.jpg"
              alt="resstaurant2"
              class="restaurant2"
            />
          </div>
          <div class="restaurant-list-row-2">
            <img
              src="./assets/restaurant3.jpg"
              alt="resstaurant3"
              class="restaurant3"
            />
            <img
              src="./assets/restaurant4.jpg"
              alt="resstaurant4"
              class="restaurant4"
            />
          </div>
        </div>
      </section>
      <section class="email-subscribe-container">
        <div>
          <h1 class="hero-text">Stay Updated</h1>
          <div class="email-subscribe-input-field">
            <div>
              <input
                type="email"
                placeholder="email@email.com"
                class="email-input"
              />
            </div>
            <button class="button-primary">Get Updates</button>
          </div>
        </div>
      </section>
      <section class="quote-container">
        <div class="quote-image-overlay"></div>
        <h3 class="quote-image-text">
          When a man's stomach is full it makes no difference whether he is rich
          or poor.
        </h3>
      </section>
    </main>
    <footer>
      <img src="./assets/logo.png" alt="logo" />
      <ul>
        <li>Pricing</li>
        <li>Terms and condition</li>
        <li>Partnership</li>
        <li>Career</li>
        <li>Contact</li>
      </ul>
    </footer>
  </body>
</html>
