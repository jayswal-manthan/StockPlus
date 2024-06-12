<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stock+</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/homepage.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  
    
</head>
<body>
  

  <main class="container">
    <div class="main-img position-relative">
      <img src="{{ asset('images/img-13.png') }}" class="d-block w-100" alt="Warehouse Management System" height="" weight=""><br>
      <div class="line"></div>
      <!-- Add a container for the hoverable buttons/menus -->
      <div class="head">
        <div class="head-left">
          <b><a href="{{ route('home.page') }}">Stock+</a></b>
        </div>  
        <div class="head-right">
          <b><a href="{{ route('home.page') }}">Home</a></b>
          <a href="{{ route('about.page') }}">About</a>|
          <a href="#"><i class="fas fa-search"></i></a>
          <a href="#"><i class="fas fa-shopping-cart"></i></a>
          <a href="#" onclick="openModal()"><i class="fas fa-user"></i></a>
        </div>
      </div>
      <div class="main-text">
        Welcome to Stock<strong>+</strong>
      </div>
      <div class="hover-buttons">
        <a href="#"><img src="{{ asset('images/Track-1.png') }}" height="100px"></a>
        <button class="logo-1"><a href="#" target="_blank"><img src="{{ asset('images/Inventory.png') }}" height="100px"></a></button>
        <a href="#"><img src="{{ asset('images/ship.png') }}" height="100px"></a>

        <div class="input-group mb-12">
          <input type="" class="form-control" placeholder="Search products..." aria-label="Search" aria-describedby="button-addon2">&nbsp
          <button class="btn btn-outline-secondary" type="button" id="button-addon2" style="color: black;">Search</button>
        </div>
      </div>
    </div>

    <div class="about">
      <div class="abt">
        <div class="abtxt">
          <h1>About Stock+</h1><hr>
        </div>
        <div class="images-container">
          <div class="image-container">
            <img src="{{ asset('images/abt1.jpg') }}" alt="Image 1" class="image">
            <div class="description">
              <h5>Our Histroy</h5>
              <p>Founded in 1995, Stock+ has been providing top-notch storage and warehouse solutions to businesses and individuals for over 25 years. We have grown from a small family-owned business to one of the leading storage providers in the region.</p>
            </div>
          </div>
          <div class="image-container">
            <img src="{{ asset('images/abt3.jpg') }}" alt="Image 2" class="image">
            <div class="description">
              <h5>Our Services</h5>
              <p>We offer a wide range of storage and warehouse solutions to meet the needs of businesses of all sizes. From document storage to inventory management, we have the expertise and resources to help our clients store and manage their goods more efficiently.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <div class="sss">
      <div class="abt">
        <div class="abtxt">
          <h1>Secure Storage Solutions Photo Gallery</h1><hr>
        </div>
      </div>
      <div class="sssimg">
        <div class="image-container1">
          <img src="{{ asset('images/sss.jpg') }}" alt="Image 2" height="350px" class="image">  
        </div>
        <div class="ssstxt">
          <h1>Fortified Storage<br> Solutions</h1>
          <p>Welcome to Stock+, your trusted partner for secure and affordable storage solutions. We offer a variety of storage options that meet your needs. Contact us today!</p>
          <p>At Stock+, we understand the importance of secure storage solutions for businesses and individuals alike. Whether you're a small startup or a large corporation, our state-of-the-art storage facilities offer the perfect solution to safeguard your valuable assets.</p>
        </div>
      </div>
    </div>

    <!-- Transportation -->
    <div class="transportation">
      <div class="abt">
        <div class="abtxt">
          <h1>Transportation</h1><hr>
        </div>
      </div>
      <div class="sssimg">
        <div class="ssstxt">
          <h1>Transportation Services</h1>
          <p>Welcome to Stock+, your trusted partner for efficient transportation services. We offer reliable transportation solutions tailored to meet your business needs. Whether you require freight shipping, logistics management, or supply chain solutions, Stock+ has you covered.</p>
          <p>With a focus on innovation and customer satisfaction, Stock+ ensures timely delivery, cost-effectiveness, and seamless coordination to optimize your transportation operations.</p>
        </div>
        <div class="image-container1">
          <img src="{{ asset('images/ts-1.jpg') }}" alt="Transportation Image" height="350px" class="image">  
        </div>
      </div>
    </div>
    

    <div class="btn modal" id="modal">
      <div class="form-container">
        <form method="POST" action="{{ route('login') }}" class="login-form">
        @csrf
          
            <x-input-label for="login" :value="__('Email/Name/Phone')" />
            <x-text-input id="login" class="block mt-1 w-full @error('login') is-invalid @enderror" type="text" placeholder="Enter your id" name="login" :value="old('login')" required autofocus autocomplete="username" />
            @error('login')
            <span class="text-danger"> {{ $message }} </span>
            @enderror
        
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="Enter your password" required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />        
              
              <div class="form-options">
                <a href="#" class="forgot-password">Forgot password?</a><br>
                <span class="signup">Click here to <a href="#" class="signup-link">sign up</a></span><br><br>
              </div>
        
              <div class="form-buttons">
                <button type="button" class="close-btn" onclick="closeModal()">Close</button>
                <button type="submit" class="login-btn">Login</button>
              </div>
    
        </form>
        <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.6/dist/flatpickr.min.js"></script>
      </div>
    </div>
    
  </main>

  <footer class="footer">
    <div class="footer-container">
      <div class="footer-content">
        <div class="footer-column">
          <h3>About Us</h3><hr>
          <p>Stock+ is a leading provider of innovative warehouse management solutions designed to streamline operations and optimize efficiency. With over two decades of industry experience, Stock+ has been at the forefront of revolutionizing how businesses manage their inventory, storage, and logistics.</p>
        </div>
        <div class="footer-column">
          <h3>Latest News and Updates</h3><hr>
          <p>Stay up to date with the latest news and updates from Stock+.</p>
          <ul>
            <li>Introducing our new product line!</li>
            <li>Join us at the upcoming industry conference.</li>
            <li>Learn about the latest trends in storage solutions.</li>
          </ul>
        </div>
        <div class="footer-column">
          <h3>Quick Links</h3><hr>
          <ul>
            <li><a href="{{ route('home.page') }}">Home</a></li>
            <li><a href="#" onclick="openModal()">Services</a></li>
            <li><a href="{{ route('about.page') }}">About Us</a></li>
            <li><a href="#" onclick="openModal()">Contact Us</a></li>
          </ul>
        </div>
        <div class="footer-column">
          <h3>Contact Us</h3><hr>
          <p>123, Urban Club</p>
          <p>Ahmedabad</p>
          <p>Email: info@stockplus.com</p>
          <p>Phone: 123-456-7890</p>
        </div>
      </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2023 Stock+. All rights reserved.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script>
    function openModal() {
      const modal = document.getElementById('modal');
      modal.style.display = 'block';
    }

    function closeModal() {
      const modal = document.getElementById('modal');
      modal.style.display = 'none';
    }
  </script>  
  
</body>
</html>