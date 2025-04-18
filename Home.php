<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />

  <script src="https://cdn.tailwindcss.com"></script>

  <title>Furniture Website</title>

<style>

  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Footer styles */
.footer {
    background-color: #fff;
    border-top: 1px solid #eee;
    padding: 60px 0 0;
}

.footer-content {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 40px;
}

/* Brand section */
.footer-brand {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.brand-logo {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 24px;
    font-weight: bold;
    color: #333;
    text-decoration: none;
}

.brand-logo svg {
    width: 32px;
    height: 32px;
    fill: #00BFB3;
}

.brand-description {
    color: #666;
    font-size: 14px;
    line-height: 1.6;
}

.social-links {
    display: flex;
    gap: 16px;
}

.social-links a {
    color: #666;
    transition: color 0.2s;
}

.social-links a:hover {
    color: #00BFB3;
}

/* Category and Support sections */
.footer-section h3 {
    font-size: 14px;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    margin-bottom: 20px;
    color: #333;
}

.footer-links {
    list-style: none;
}

.footer-links li {
    margin-bottom: 12px;
}

.footer-links a {
    color: #666;
    text-decoration: none;
    font-size: 14px;
    transition: color 0.2s;
}

.footer-links a:hover {
    color: #00BFB3;
}

/* Newsletter section */
.newsletter-form {
    display: flex;
    gap: 8px;
    margin-bottom: 12px;
}

.newsletter-input {
    flex: 1;
    padding: 8px 12px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 14px;
}

.newsletter-button {
    background-color: #078b07;
    color: white;
    border: none;
    padding: 8px 16px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 14px;
    transition: background-color 0.2s;
}

.newsletter-button:hover {
    background-color:#34c66a ;
}

.newsletter-description {
    color: #666;
    font-size: 14px;
}

/* Bottom bar */
.footer-bottom {
    margin-top: 40px;
    padding: 20px 0;
    border-top: 1px solid #eee;
}

.footer-bottom-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.footer-copyright {
    color: #666;
    font-size: 14px;
}

.payment-methods img {
    height: 24px;
    width: auto;
}

/* Responsive design */
@media (max-width: 1024px) {
    .footer-content {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .footer {
        padding: 40px 0 0;
    }

    .footer-content {
        grid-template-columns: 1fr;
        gap: 32px;
    }

    .footer-bottom-content {
        flex-direction: column;
        gap: 20px;
        text-align: center;
    }
}

@media (max-width: 480px) {
    .newsletter-form {
        flex-direction: column;
    }

    .newsletter-button {
        width: 100%;
    }
}



.button {

  display: flex;
            justify-content: center;
            align-items: center;
            padding: 15px 30px;
            font-size: 18px;
            background-color: #078b07;
            margin:0;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
        }
        .button:hover {
            background-color:  #34c66a;
        }




        .button-container {
  text-align: center;
  margin: 20px;
}

.icon-link {
  display: inline-block;
  padding: 10px 20px;
  border-radius: 5px;
  background-color: #f0f0f0;
  text-decoration: none;
  color: #333;
  transition: background-color 0.3s ease;
  margin-bottom: 10px;
}

.icon-link:hover {
  background-color: #ddd;
}

.icon-link svg {
  width: 20px;
  height: 20px;
  margin-right: 10px;
  vertical-align: middle;
}

.contact-button {
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  background-color: #4CAF50;
  color: #fff;
  cursor: pointer;
}

.contact-button:hover {
  background-color: #3e8e41;
}

/* Responsive styles */

@media (max-width: 768px) {
  .icon-link {
    padding: 8px 16px;
  }
  .icon-link svg {
    width: 18px;
    height: 18px;
  }
  .contact-button {
    padding: 8px 16px;
  }
}

@media (max-width: 480px) {
  .icon-link {
    padding: 6px 12px;
  }
  .icon-link svg {
    width: 16px;
    height: 16px;
  }
  .contact-button {
    padding: 6px 12px;
  }
}




.more-products-btn {
    display: inline-block;
    padding: 12px 24px;
    background: linear-gradient(135deg,rgb(4, 255, 0),rgb(0, 255, 13));
    color: white;
    border: none;
    border-radius: 30px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: background 0.3s, transform 0.2s;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin: 20px auto;
    display: block;
    text-align: center;
}

.more-products-btn:hover {
    background: linear-gradient(135deg,rgb(87, 196, 50),rgb(0, 204, 88));
    transform: scale(1.05);
}

.more-products-btn:active {
    transform: scale(0.98);
}

@media (max-width: 600px) {
    .more-products-btn {
        width: 90%;
        font-size: 14px;
    }
}





</style>


</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="#">
          <img
            src="img/logo1-removebg-preview (1).png"
            alt="Logo"
            width="50"
            height="50" />
          <span class="ms-2">Comforty</span>
        </a>
        <div class="ms-auto">
          <button class="cart-btn border-0">
            <span class="cart-icon">🛒</span>
            <span>Cart</span>
          </button>
        </div>
      </div>
    </nav>

    <nav class="navigation">
      <ul class="list-items">
        <li>Home</li>
        <li>Shop</li>
        <li>Product</li>
        <li>Pages</li>
        <li>About</li>
      </ul>
    </nav>
    <section class="header">
      <div class="head">
        <div class="header-content">
          <div class="header-text">
            <div class="header-welcome-heading">
              <p>WELCOME TO CHAIRY</p>
            </div>
            <div class="header-heading">
              <h1>
                Best Furniture Collection <br />
                For Your Interior
              </h1>
            </div>
            <button>Shop Now</button>
          </div>
          <div class="header-img">
            <img src="img/head-removebg-preview.png" alt="Header" />
          </div>
        </div>
      </div>
    </section>
  </header>

  <section class="sponsors">
    <ul class="sponsors-logo">
      <li><img src="img/zapier-removebg-preview.png" alt="Zapier" /></li>
      <li>
        <img src="img/pipedrive-removebg-preview.png" alt="Pipedrive" />
      </li>
      <li><img src="img/CIB-removebg-preview.png" alt="CIB" /></li>
      <li>
        <img
          src="img/WhatsApp_Image_2025-01-05_at_12.32.13_AM-removebg-preview (2).png"
          alt="Luminfy" />
      </li>
      <li><img src="img/BToast-removebg-preview.png" alt="Burnt-Toast" /></li>
      <li><img src="img/MOZ-removebg-preview.png" alt="MOZ" /></li>
    </ul>
  </section>



  <section id="products-container">
    <div class="bg-white">
      <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <h2 class="text-2xl font-bold tracking-tight text-gray-900">Featured Products</h2>

        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
          <div class="group relative">
            <img src="Uploads/cocktail-valvet-chair-35,500.webp" alt="Front of men&#039;s Basic Tee in black." class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80">
            <div class="mt-4 flex justify-between">
              <div>
                <h3 class="text-sm text-gray-700">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    Cocktail Valvet Chair
                  </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">Pink</p>
              </div>
              <p class="text-sm font-medium text-gray-900">$35</p>
            </div>
          </div>




          <!-- More products... -->





          <div class="group relative">
            <img src="Uploads/dinning-arm-chair-19,999.webp" alt="Front of men&#039;s Basic Tee in black." class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80">
            <div class="mt-4 flex justify-between">
              <div>
                <h3 class="text-sm text-gray-700">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    Dinning Arm Chair
                  </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">BLack</p>
              </div>
              <p class="text-sm font-medium text-gray-900">$35</p>
            </div>
          </div>




          <div class="group relative">
            <img src="Uploads/Emily_Dinning_chair_9,999.00.webp" alt="Front of men&#039;s Basic Tee in black." class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80">
            <div class="mt-4 flex justify-between">
              <div>
                <h3 class="text-sm text-gray-700">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    Emily Dinning Chair
                  </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">Dak</p>
              </div>
              <p class="text-sm font-medium text-gray-900">$35</p>
            </div>
          </div>



          <div class="group relative">
            <img src="Uploads/metal-arm-chair-18,299.webp" alt="Front of men&#039;s Basic Tee in black." class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80">
            <div class="mt-4 flex justify-between">
              <div>
                <h3 class="text-sm text-gray-700">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    Metal Arm Chair
                  </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">Brown Wooden</p>
              </div>
              <p class="text-sm font-medium text-gray-900">$35</p>
            </div>
          </div>
        </div>
  </section>



  <section class="Top-categories">





    <div class="bg-white">
      <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <h2 class="text-2xl font-bold tracking-tight text-gray-900">Top Categories</h2>

        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
          <div class="group relative">
            <img src="Uploads/metal-arm-cream-accent-chair-25,999.webp" alt="Front of men&#039;s Basic Tee in black." class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80">
            <div class="mt-4 flex justify-between">
              <div>
                <h3 class="text-sm text-gray-700">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    Metal Arm Cream Accent Chair
                  </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">Pink</p>
              </div>
              <p class="text-sm font-medium text-gray-900">$35</p>
            </div>
          </div>




          <!-- More products... -->





          <div class="group relative">
            <img src="Uploads/Plush-Modern-tufted-accent-chair-36500.webp" alt="Front of men&#039;s Basic Tee in black." class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80">
            <div class="mt-4 flex justify-between">
              <div>
                <h3 class="text-sm text-gray-700">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    Plush Modern Tufted Accent Chair
                  </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">BLack</p>
              </div>
              <p class="text-sm font-medium text-gray-900">$35</p>
            </div>
          </div>




          <div class="group relative">
            <img src="Uploads/Rustic-dinning-chair-9,999.webp" alt="Front of men&#039;s Basic Tee in black." class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80">
            <div class="mt-4 flex justify-between">
              <div>
                <h3 class="text-sm text-gray-700">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    Rustic Dinning Chair
                  </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">Dak</p>
              </div>
              <p class="text-sm font-medium text-gray-900">$35</p>
            </div>
          </div>



          <div class="group relative">
            <img src="Uploads/setof2 bedroom-armlesschairs-accent-loungchair-74,750.webp" alt="Front of men&#039;s Basic Tee in black." class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80">
            <div class="mt-4 flex justify-between">
              <div>
                <h3 class="text-sm text-gray-700">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    Set Of 2 Bedroom Arm Less Chairs Acccent loung Chairs
                  </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">Brown Wooden</p>
              </div>
              <p class="text-sm font-medium text-gray-900">$35</p>
            </div>
          </div>
        </div>
  </section>




  <section class="Our-products">



    <div class="bg-white">
      <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <h2 class="sr-only">Products</h2>

        <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
          <a href="#" class="group">
            <img src="Uploads/stakable-metal -chair-18,999.webp" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
            <h3 class="mt-4 text-sm text-gray-700">Stakable Metal Chair</h3>
            <p class="mt-1 text-lg font-medium text-gray-900">$48</p>
          </a>
          <a href="#" class="group">
            <img src="Uploads/valvet-dinning-chairs-65,999.webp" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
            <h3 class="mt-4 text-sm text-gray-700">Valvet Dinning Chair</h3>
            <p class="mt-1 text-lg font-medium text-gray-900">$35</p>
          </a>
          <a href="#" class="group">
            <img src="uploads/yellow-valvet-accent-chair-with gold-iron-legs-37,999.webp" alt="Person using a pen to cross a task off a productivity paper card." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
            <h3 class="mt-4 text-sm text-gray-700">Yellow Valvet Accent Chair With Gold Iron Legs</h3>
            <p class="mt-1 text-lg font-medium text-gray-900">$89</p>
          </a>
          <a href="#" class="group">
            <img src="Uploads/dinning-arm-chair-19,999.webp" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
            <h3 class="mt-4 text-sm text-gray-700">Dinnig Arm Chair</h3>
            <p class="mt-1 text-lg font-medium text-gray-900">$35</p>
          </a>

          <a href="#" class="group">
            <img src="Uploads/Emily_Dinning_chair_9,999.00.webp" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
            <h3 class="mt-4 text-sm text-gray-700">Emily Dinnig Chair</h3>
            <p class="mt-1 text-lg font-medium text-gray-900">$35</p>
          </a>


          <a href="#" class="group">
            <img src="Uploads/stakable-metal -chair-18,999.webp" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
            <h3 class="mt-4 text-sm text-gray-700">Stakable Metal Chair</h3>
            <p class="mt-1 text-lg font-medium text-gray-900">$35</p>
          </a>




          <a href="#" class="group">
            <img src="Uploads/Emily_Dinning_chair_9,999.00.webp" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
            <h3 class="mt-4 text-sm text-gray-700">Emily Dinnig Chair</h3>
            <p class="mt-1 text-lg font-medium text-gray-900">$35</p>
          </a>



          <a href="#" class="group">
            <img src="Uploads/cocktail-valvet-chair-35,500.webp" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
            <h3 class="mt-4 text-sm text-gray-700">Cocktail VAlvet Chair</h3>
            <p class="mt-1 text-lg font-medium text-gray-900">$35</p>
          </a>



        </div>
      </div>
    </div>


  

  </section>




  <button id="loadMoreBtn" onclick="window.location.href='products.php'"  class="more-products-btn">More Products</button>


<script>
let offset = 0;
const limit = 6; // how many products to load each time

document.getElementById("loadMoreBtn").addEventListener("click", function () {
    fetch(`products.php?offset=${offset}&limit=${limit}`)
        .then(response => response.text())
        .then(data => {
            document.getElementById("product-list").innerHTML += data;
            offset += limit;
        });
});
</script>





  <a href="form.php" class="button">Contact Us</a>








  <footer class="footer">
    <div class="container">
        <div class="footer-content">
            <!-- Brand Section -->
            <div class="footer-brand">
                <a href="/" class="brand-logo">
                    <svg viewBox="0 0 24 24">
                        <path d="M20 10.5V6a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v4.5"/>
                        <path d="M4 15v3a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-3"/>
                        <path d="M12 12h0.01"/>
                        <path d="M2 9h20v3H2z"/>
                    </svg>
                    Comforty
                </a>
                <p class="brand-description">
                    Vivamus tristique odio sit amet velit semper, eu posuere turpis interdum. Cras egestas purus
                </p>
                <div class="social-links">
                    <a href="#" aria-label="Facebook">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
                        </svg>
                    </a>
                    <a href="#" aria-label="Twitter">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/>
                        </svg>
                    </a>
                    <a href="#" aria-label="Instagram">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
                        </svg>
                    </a>
                    <a href="#" aria-label="YouTube">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"/>
                            <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Category Section -->
            <div class="footer-section">
                <h3>Category</h3>
                <ul class="footer-links">
                    <li><a href="#">Sofa</a></li>
                    <li><a href="#">Armchair</a></li>
                    <li><a href="#">Wing Chair</a></li>
                    <li><a href="#">Desk Chair</a></li>
                    <li><a href="#">Wooden Chair</a></li>
                    <li><a href="#">Park Bench</a></li>
                </ul>
            </div>

            <!-- Support Section -->
            <div class="footer-section">
                <h3>Support</h3>
                <ul class="footer-links">
                    <li><a href="#">Help & Support</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Help</a></li>
                </ul>
            </div>

            <!-- Newsletter Section -->
            <div class="footer-section">
                <h3>Newsletter</h3>
                <form class="newsletter-form">
                    <input type="email" class="newsletter-input" placeholder="Your email" required>
                    <button type="submit" class="newsletter-button">Subscribe</button>
                </form>
                <p class="newsletter-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tincidunt erat enim.
                </p>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="footer-bottom">
            <div class="footer-bottom-content">
                <p class="footer-copyright">
                    © 2025 - Blogy -  Developed by <b>Shohaab Aslam </b>
                </p>
                <div class="payment-methods">
                    
                </div>
            </div>
        </div>
    </div>
</footer>



</body>

</html>