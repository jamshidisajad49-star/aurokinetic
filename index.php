<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Auro Kinetic - Elevate Your Fitness & Wellness</title>
  <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3E%3Ctext x='0' y='14' style='font-size: 14px;'%3E%5B%5BCOMPANY_NAME%5D%5D%3C/text%3E%3C/svg%3E">
  <meta name="description" content="Discover premium fitness and wellness services at Auro Kinetic. We offer personal training, group fitness, nutrition coaching, recovery programs, and online coaching in New York.">
  <style>
    :root {
      --primary: #e01e3e;
      --primary_light: #e48090;
      --primary_dark: #9d152c;
      --secondary: #c66738;
      --accent: #35e3c6;
      --background_base: hsl(350, 10%, 98%);
      --text_dark: hsl(350, 20%, 15%);
      --text_light: hsl(350, 10%, 95%);
      --gradient_main: linear-gradient(135deg, #e01e3e 0%, #c66738 100%);
      --gradient_accent: linear-gradient(135deg, #35e3c6 0%, #e01e3e 100%);
      --gradient_overlay: linear-gradient(to bottom, rgba(20, 5, 10, 0.4), rgba(20, 5, 10, 0.8));
      --border_radius: 16px;
      --section_spacing: 6rem 0;
      --mobile_section_spacing: 3rem 0;
    }

    /* Basic Reset & Typography */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    body {
      font-family: 'Nunito', sans-serif;
      color: var(--text_dark);
      background-color: var(--background_base);
      line-height: 1.6;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }
    h1, h2, h3, h4, h5, h6 {
      font-weight: 800;
      color: var(--text_dark);
      margin-bottom: 1rem;
    }
    p {
      font-weight: 400;
      margin-bottom: 1rem;
    }
    a {
      color: var(--primary);
      text-decoration: none;
      transition: color 0.3s ease;
    }
    a:hover {
      color: var(--primary_dark);
    }
    ul {
      list-style: none;
    }

    /* Layout & Utilities */
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 1rem;
    }
    .text-center {
      text-align: center;
    }
    .text-light {
      color: var(--text_light);
    }
    .section-padding {
      padding: var(--section_spacing);
      margin-bottom: 2rem;
    }

    /* Responsive Grid - Simple Flexbox based */
    .row {
      display: flex;
      flex-wrap: wrap;
      margin: -1rem; /* Negative margin to offset column padding */
    }
    .col-12 { width: 100%; padding: 1rem; }
    .col-md-6 { width: 100%; padding: 1rem; }
    .col-lg-4 { width: 100%; padding: 1rem; }
    .col-lg-8 { width: 100%; padding: 1rem; }
    @media (min-width: 768px) { /* Medium devices */
      .col-md-6 { width: 50%; }
      .col-lg-4 { width: 33.333%; }
      .col-lg-8 { width: 66.666%; }
    }
    @media (min-width: 992px) { /* Large devices */
      .col-lg-4 { width: 33.333%; }
      .col-lg-8 { width: 66.666%; }
    }

    /* Buttons */
    .btn {
      display: inline-block;
      padding: 1rem 2rem;
      border-radius: var(--border_radius);
      font-size: 1rem;
      font-weight: 600;
      cursor: pointer;
      text-align: center;
      transition: all 0.3s ease;
    }
    .btn-primary {
      background: transparent;
      border: 2px solid var(--primary);
      color: var(--primary);
    }
    .btn-primary:hover {
      background: var(--gradient_main);
      color: #fff;
      border-color: transparent;
      transform: scale(1.05);
    }
    .btn-secondary {
      background: var(--accent);
      border: 2px solid var(--accent);
      color: var(--text_dark);
    }
    .btn-secondary:hover {
      background: var(--gradient_accent);
      color: var(--text_light);
      border-color: transparent;
      transform: scale(1.05);
    }

    /* Cards */
    .card {
      background: linear-gradient(145deg, hsl(350, 10%, 100%), hsl(350, 15%, 95%));
      border-radius: var(--border_radius);
      box-shadow: 0 4px 20px rgba(224, 30, 62, 0.1);
      padding: 2rem;
      margin-bottom: 2rem;
      transition: transform 0.3s ease;
    }
    .card:hover {
      transform: scale(1.03);
    }

    /* Specific Components */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 0;
      background-color: var(--background_base);
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }
    .navbar .brand {
      font-size: 1.8rem;
      font-weight: 800;
      color: var(--primary);
    }
    .navbar .nav-links {
      display: none;
      flex-grow: 1;
      justify-content: flex-end;
      align-items: center;
    }
    .navbar .nav-links a {
      margin-left: 2rem;
      font-weight: 600;
      color: var(--text_dark);
    }
    .navbar .nav-links a:hover {
      color: var(--primary);
    }
    .nav-toggle {
      display: block;
      cursor: pointer;
      font-size: 2rem;
      background: none;
      border: none;
      color: var(--text_dark);
    }
    @media (min-width: 768px) {
      .navbar .nav-links {
        display: flex;
      }
      .nav-toggle {
        display: none;
      }
    }

    /* Hero Section */
    .hero {
      position: relative;
      background-size: cover;
      background-position: center;
      color: var(--text_light);
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      min-height: 80vh;
      width: 100%;
    }
    .hero::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: var(--gradient_overlay); /* Dark gradient from JSON */
      z-index: 1;
    }
    .hero-content {
      position: relative;
      z-index: 2;
      max-width: 800px;
      padding: 2rem 1rem;
    }
    .hero h1 {
      font-size: 2.8rem;
      margin-bottom: 1.5rem;
      color: var(--text_light);
    }
    .hero p {
      font-size: 1.25rem;
      margin-bottom: 2.5rem;
      line-height: 1.8;
      color: var(--text_light);
    }
    .hero .hero-buttons .btn {
      margin: 0 0.5rem;
      padding: 1.25rem 2.5rem;
      font-size: 1.1rem;
    }
    /* Button specific overrides for hero to ensure dark background contrast */
    .hero .btn-primary {
      color: var(--text_light);
      border-color: var(--text_light);
    }
    .hero .btn-primary:hover {
      background: var(--gradient_main);
      border-color: transparent;
      color: #fff;
    }
    .hero .btn-secondary {
      background: var(--accent);
      border-color: var(--accent);
      color: var(--text_dark);
    }
    .hero .btn-secondary:hover {
      color: var(--text_light);
      background: var(--gradient_accent);
      border-color: transparent;
    }

    /* Services Section Specifics */
    .service-card-main {
      padding: 2.5rem;
      display: flex;
      flex-direction: column;
      height: 100%;
      background: linear-gradient(145deg, hsl(0, 0%, 100%), hsl(0, 0%, 95%));
    }
    .service-card-main img {
      width: 100%;
      height: auto;
      border-radius: var(--border_radius);
      margin-bottom: 1.5rem;
      object-fit: cover;
    }
    .service-card-main h3 {
      font-size: 2rem;
      color: var(--primary_dark);
    }
    .service-card-main p {
      flex-grow: 1;
    }

    .service-card-sidebar {
      padding: 2rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
      background: linear-gradient(145deg, hsl(0, 0%, 100%), hsl(0, 0%, 95%));
      height: 100%;
      text-align: center;
    }
    .service-card-sidebar img {
      max-width: 128px; /* Smaller images */
      height: auto;
      border-radius: var(--border_radius);
      margin: 0 auto 1rem auto;
      display: block;
    }
    .service-card-sidebar h4 {
      font-size: 1.4rem;
      color: var(--primary);
    }

    /* Recovery Features */
    .icon-container {
      clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
      padding: 1rem;
      background: var(--gradient_main);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 80px;
      height: 80px;
      margin-bottom: 1rem;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }
    .icon-container svg {
      color: var(--text_light);
      width: 40px;
      height: 40px;
    }
    .feature-item h3 {
      color: var(--primary_dark);
      font-size: 1.5rem;
    }
    .recovery-image {
      border-radius: var(--border_radius);
      box-shadow: 0 8px 30px rgba(0,0,0,0.1);
      width: 100%;
      height: auto;
      object-fit: cover;
      transition: transform 0.3s ease;
    }
    .recovery-image:hover {
      transform: scale(1.02);
    }

    /* Testimonials */
    .testimonial-card {
      background: linear-gradient(145deg, hsl(350, 10%, 100%), hsl(350, 15%, 95%));
      border-radius: var(--border_radius);
      padding: 3rem;
      margin-bottom: 2rem;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08); /* More subtle shadow for testimonials */
      position: relative;
      text-align: center;
      transition: transform 0.3s ease;
    }
    .testimonial-card:hover {
      transform: translateY(-5px);
    }
    .testimonial-card::before {
      content: "“";
      font-size: 8rem;
      color: var(--primary_light);
      position: absolute;
      top: 0rem;
      left: 50%;
      transform: translateX(-50%);
      line-height: 1;
      opacity: 0.2;
      z-index: 0;
    }
    .testimonial-card p {
      font-size: 1.2rem;
      line-height: 1.8;
      margin-bottom: 1.5rem;
      position: relative;
      z-index: 1;
      color: var(--text_dark);
    }
    .testimonial-card .author {
      font-weight: 800;
      color: var(--primary_dark);
      margin-bottom: 0.5rem;
      display: block;
    }
    .testimonial-card .role {
      font-size: 0.9rem;
      color: var(--secondary);
      display: block;
    }

    /* Contact Form */
    .contact-form-container, .contact-info-container {
      background: linear-gradient(145deg, hsl(350, 10%, 100%), hsl(350, 15%, 95%));
      border-radius: var(--border_radius);
      padding: 2.5rem;
      height: 100%;
      box-shadow: 0 4px 20px rgba(224, 30, 62, 0.1);
    }
    .input-group {
      margin-bottom: 1.5rem;
    }
    .input-group label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: 600;
      color: var(--text_dark);
    }
    .input-group input, .input-group textarea, .input-group select {
      width: 100%;
      padding: 0.8rem 1rem;
      border: 1px solid #ccc;
      border-radius: 8px; /* Slightly smaller border radius for form elements */
      font-family: 'Nunito', sans-serif;
      font-size: 1rem;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }
    .input-group input:focus, .input-group textarea:focus, .input-group select:focus {
      border-color: var(--primary);
      box-shadow: 0 0 0 3px rgba(var(--primary_dark), 0.2);
      outline: none;
    }
    .input-group textarea {
      min-height: 120px;
      resize: vertical;
    }
    .contact-info-container h3, .contact-form-container h3 {
      color: var(--primary_dark);
      margin-bottom: 1.5rem;
      font-size: 1.8rem;
    }
    .contact-info-container p {
      margin-bottom: 1rem;
      font-size: 1.1rem;
    }
    .contact-info-container a {
      color: var(--primary);
      text-decoration: none;
      display: block;
      margin-bottom: 0.5rem;
    }
    .contact-info-container a svg {
      vertical-align: middle;
      margin-right: 0.5rem;
      color: var(--primary);
    }
    .google-map {
      width: 100%;
      height: 300px;
      border: 0;
      border-radius: var(--border_radius);
      margin-top: 1.5rem;
    }

    /* Footer */
    .footer {
      background: linear-gradient(135deg, #212529 0%, #343a40 100%); /* Dark background from design */
      color: var(--text_light);
      padding: 4rem 0;
      margin-top: 2rem;
    }
    .footer a {
      color: var(--accent);
    }
    .footer a:hover {
      color: var(--primary_light);
    }
    .footer .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 2rem;
    }
    .footer .footer-col {
      flex: 1 1 100%;
      min-width: 250px;
      margin-bottom: 1.5rem;
    }
    @media (min-width: 768px) {
      .footer .footer-col {
        flex: 1 1 auto;
      }
    }
    .footer h4 {
      font-size: 1.2rem;
      color: var(--text_light);
      margin-bottom: 1rem;
    }
    .footer ul {
      padding-left: 0;
    }
    .footer ul li {
      margin-bottom: 0.5rem;
    }
    .footer .brand-text {
      font-size: 1.5rem;
      font-weight: 800;
      color: var(--primary_light);
      margin-bottom: 1rem;
    }
    .footer .description {
      font-size: 0.95rem;
      line-height: 1.7;
      color: rgba(255, 255, 255, 0.8);
    }
    .footer .copyright {
      margin-top: 2.5rem;
      text-align: center;
      font-size: 0.85rem;
      color: rgba(255, 255, 255, 0.6);
      width: 100%;
    }

    /* Cookie Consent */
    #cookie-consent-banner {
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      background-color: var(--text_dark);
      color: var(--text_light);
      padding: 1rem 0;
      z-index: 10000;
      text-align: center;
      display: none; /* Hidden by default */
    }
    #cookie-consent-banner.show {
      display: block;
    }
    #cookie-consent-banner p {
      margin-bottom: 1rem;
      font-size: 0.9rem;
    }
    #cookie-consent-banner button {
      background-color: var(--primary);
      color: white;
      border: none;
      padding: 0.7rem 1.5rem;
      border-radius: 8px;
      cursor: pointer;
      font-size: 0.9rem;
      transition: background-color 0.3s ease, transform 0.3s ease;
    }
    #cookie-consent-banner button:hover {
      background-color: var(--primary_dark);
      transform: scale(1.05);
    }

    /* Mobile specific adjustments */
    @media (max-width: 767px) {
      .section-padding {
        padding: var(--mobile_section_spacing);
      }
      .hero {
        min-height: 60vh;
      }
      .hero h1 {
        font-size: 2rem;
      }
      .hero p {
        font-size: 1rem;
      }
      .hero .hero-buttons .btn {
        margin: 0.5rem 0;
        display: block;
        width: 100%;
      }
      .navbar .nav-links {
        flex-direction: column;
        width: 100%;
        position: absolute;
        top: 60px; /* Adjust based on header height */
        left: 0;
        background-color: var(--background_base);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        padding: 1rem 0;
        display: none; /* Hidden by default */
      }
      .navbar .nav-links.active {
        display: flex;
      }
      .navbar .nav-links a {
        margin: 0.5rem 0;
        padding: 0.5rem 1rem;
        width: 100%;
        text-align: center;
      }
      .footer .container {
        flex-direction: column;
        align-items: center;
      }
      .footer .footer-col {
        text-align: center;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="container navbar">
      <a href="./" class="brand">Auro Kinetic</a>
      <button class="nav-toggle" aria-label="Toggle navigation">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
      </button>
      <nav class="nav-links">
        <a href="#services">Services</a>
        <a href="#recovery">Recovery</a>
        <a href="#trainers">Trainers</a>
        <a href="#testimonials">Testimonials</a>
        <a href="#contact">Contact</a>
        <a href="#booking" class="btn btn-primary">Book Now</a>
      </nav>
    </div>
  </header>
<main>
    <section id="hero" class="hero" style="background-image: url('images/hero-fitness-overlay-background.jpeg');">
      <div class="hero-content">
        <h1>Transform Your Life at Auro Kinetic</h1>
        <p>Experience premium personal training, high-energy group fitness, and advanced recovery programs designed for your absolute best.</p>
        <div class="hero-buttons">
          <a href="#contact" class="btn btn-primary">Start Your Journey</a>
          <a href="#services" class="btn btn-secondary">Explore Memberships</a>
        </div>
      </div>
    </section>

    <section id="services" class="section-padding container">
      <div class="text-center">
        <h2>Our Core Services</h2>
        <p>Comprehensive fitness solutions tailored to your unique goals.</p>
      </div>
      <div class="row" style="margin-top: 3rem;">
        <div class="col-lg-8 col-md-6 col-12">
          <div class="card service-card-main">
            <img src="images/personal-training-focus.jpeg" alt="Personal trainer assisting a client with form in a modern gym" width="768" height="512">
            <h3>Elite Personal Training</h3>
            <p>Work 1-on-1 with master trainers at Auro Kinetic to build a sustainable, results-driven fitness pathway. Our certified coaches craft personalized regimens focusing on strength, endurance, and flexibility, ensuring every session progresses you towards peak performance and injury prevention.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <div class="row">
            <div class="col-12">
              <div class="card service-card-sidebar">
                <img src="images/group-fitness-class.jpeg" alt="Energetic group fitness session" width="256" height="256">
                <h4>Group Fitness</h4>
                <p>High-octane classes. Move with purpose and energy, surrounded by a motivating community. From intense HIIT to rejuvenating yoga, find your rhythm.</p>
              </div>
            </div>
            <div class="col-12">
              <div class="card service-card-sidebar">
                <img src="images/nutrition-coaching-meal.jpeg" alt="Healthy meal prep on a kitchen counter" width="256" height="256">
                <h4>Nutrition Coaching</h4>
                <p>Fuel your body right. Our expert nutritionists will guide you to make sustainable, healthy eating choices that complement your training and lifestyle.</p>
              </div>
            </div>
            <div class="col-12">
              <div class="card service-card-sidebar">
                <img src="images/online-coaching-app.jpeg" alt="Mobile fitness app interface displaying workout metrics" width="256" height="256">
                <h4>Online Coaching</h4>
                <p>Train anywhere, anytime. Access custom workout plans and coaching support remotely, maintaining your fitness journey on your own terms.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="recovery" class="section-padding container">
      <div class="text-center">
        <h2>Advanced Recovery Programs</h2>
        <p>Because resting is just as crucial as lifting. Accelerate your healing and improve mobility.</p>
      </div>
      <div class="row" style="align-items: center; margin-top: 3rem;">
        <div class="col-lg-6 col-12">
          <img src="images/recovery-room-facility.jpeg" alt="Auro Kinetic modern recovery and wellness room with cryotherapy and saunas" width="640" height="640" class="recovery-image">
        </div>
        <div class="col-lg-6 col-12">
          <div style="padding-left: 2rem;">
            <div class="feature-item" style="margin-bottom: 2.5rem;">
              <div class="icon-container">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thermometer"><path d="M14 14.76V3.5a2.5 2.5 0 0 0-5 0v11.26a4.5 4.5 0 1 0 5 0z"></path></svg>
              </div>
              <h3>Cryotherapy & Cold Plunge</h3>
              <p>Reduce inflammation and muscle soreness instantly. Our cutting-edge cryotherapy chambers and invigorating cold plunges are designed to optimize recovery and boost your body's natural healing processes.</p>
            </div>
            <div class="feature-item" style="margin-bottom: 2.5rem;">
              <div class="icon-container">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
              </div>
              <h3>Infrared Saunas</h3>
              <p>Detoxify and relax your muscles post-workout. Our infrared saunas offer deep tissue penetration, promoting circulation, pain relief, and a profound sense of well-being.</p>
            </div>
            <div class="feature-item">
              <div class="icon-container">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-massage"><path d="M2 14s-2 6 2 6 6-2 6-2l-2-2 2-2 2 2 2-2 2 2s6-2 6 2c4 0 2-6 2-6l-2-2 2-2-4-4-2 2-2-2-2 2zm16-4l2 2" transform="rotate(45 12 12)"></path></svg>
              </div>
              <h3>Percussive Therapy</h3>
              <p>Deep tissue massage to improve blood flow and mobility. Our state-of-the-art percussive therapy devices provide targeted relief, breaking up knots and alleviating muscle tension for faster recovery.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="testimonials" class="section-padding" style="background: linear-gradient(to right, var(--primary_light), var(--primary)); margin-top: 2rem;">
      <div class="container text-center text-light">
        <h2>Member Success Stories</h2>
        <p class="text-light">Hear directly from our community about their transformative journeys.</p>
        <div class="row" style="margin-top: 3rem;">
          <div class="col-md-6 col-12">
            <div class="testimonial-card">
              <p>"Joining Auro Kinetic was the best decision I've made for my health. The personal training pushed me beyond my limits in the safest way possible, and I've achieved results I never thought possible!"</p>
              <span class="author">Sarah Jenkins</span>
              <span class="role">Dedicated Member since 2022</span>
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="testimonial-card">
              <p>"The combination of top-tier nutrition coaching and the incredible recovery programs sets this place apart from any other gym. My performance has soared, and I feel better than ever after my marathons."</p>
              <span class="author">Michael Torres</span>
              <span class="role">Elite Marathon Runner & Coach</span>
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="testimonial-card">
              <p>"From struggling with basic movements to lifting heavier than I imagined, Auro Kinetic's group fitness classes provided the community and energy I needed. Every day is a new challenge."</p>
              <span class="author">Aisha Khan</span>
              <span class="role">Group Fitness Enthusiast</span>
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="testimonial-card">
              <p>"I travel frequently, and the online coaching program has been a lifesaver. I can maintain my routine and progress no matter where I am, thanks to the flexible and supportive trainers."</p>
              <span class="author">David Chen</span>
              <span class="role">Remote Client & Business Traveler</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="section-padding container">
      <div class="text-center">
        <h2>Join Auro Kinetic Today</h2>
        <p>Ready to redefine your fitness and wellness journey? Reach out to us.</p>
      </div>
      <div class="row" style="margin-top: 3rem;">
        <div class="col-lg-6 col-12">
          <div class="contact-form-container">
            <h3>Request a Consultation</h3>
            <form action="#" method="POST">
              <div class="input-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" required>
              </div>
              <div class="input-group">
                <label for="email">Your Email</label>
                <input type="email" id="email" name="email" required>
              </div>
              <div class="input-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone">
              </div>
              <div class="input-group">
                <label for="service-interest">Service of Interest</label>
                <select id="service-interest" name="service-interest">
                  <option value="">Select a service</option>
                  <option value="Personal Training">Personal Training</option>
                  <option value="Group Fitness">Group Fitness</option>
                  <option value="Nutrition Coaching">Nutrition Coaching</option>
                  <option value="Recovery Programs">Recovery Programs</option>
                  <option value="Online Coaching">Online Coaching</option>
                  <option value="General Inquiry">General Inquiry</option>
                </select>
              </div>
              <div class="input-group">
                <label for="message">Your Message</label>
                <textarea id="message" name="message" rows="5"></textarea>
              </div>
              <button type="submit" class="btn btn-primary" style="width: 100%;">Request Consultation</button>
            </form>
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="contact-info-container">
            <h3>Contact Information</h3>
            <p>We're here to help you achieve your fitness goals. Get in touch with us through any of the methods below.</p>
            <p>
              <a href="https://maps.google.com/?q=878%20Park%20Avenue,%20New%20York,%20New%20York,%20USA&z=14" target="_blank" rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                878 Park Avenue, New York, New York, 11206, USA
              </a>
            </p>
            <p>
              <a href="tel:+19834887505">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-3.15-3.15 19.79 19.79 0 0 1-3.07-8.63A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                +1 983 488 7505
              </a>
            </p>
            <p>
              <a href="mailto:info@<?php echo $_SERVER['HTTP_HOST']; ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                info@<?php echo $_SERVER['HTTP_HOST']; ?>
              </a>
            </p>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d151163.66578051756!2d-74.0084534720973!3d40.70588698940822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25091720d20d3%3A0xc39f8f2b1d3d6e5d!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2scz!4v1701389774640!5m2!1sen!2scz"
              allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="google-map">
            </iframe>
          </div>
        </div>
      </div>
    </section>
  </main>
<footer class="footer">
    <div class="container">
      <div class="footer-col">
        <div class="brand-text">Auro Kinetic</div>
        <p class="description">Empowering physical excellence through holistic wellness and elite training. We are dedicated to helping you achieve your ultimate potential.</p>
      </div>
      <div class="footer-col">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="#services">Services</a></li>
          <li><a href="#recovery">Recovery</a></li>
          <li><a href="#trainers">Our Trainers</a></li>
          <li><a href="#testimonials">Testimonials</a></li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Legal</h4>
        <ul>
          <li><a href="./privacy.html">Privacy Policy</a></li>
          <li><a href="./tos.html">Terms of Service</a></li>
        </ul>
      </div>
      <div class="copyright">
        <p>© 2024 Auro Kinetic. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <div id="cookie-consent-banner">
    <div class="container">
      <p>We use cookies to ensure you get the best experience on our website. By continuing to use this site, you agree to our <a href="./privacy.html" style="color: var(--accent); text-decoration: underline;">Privacy Policy</a>.</p>
      <button id="accept-cookies">Accept</button>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Mobile navigation toggle
      const navToggle = document.querySelector('.nav-toggle');
      const navLinks = document.querySelector('.nav-links');

      navToggle.addEventListener('click', function() {
        navLinks.classList.toggle('active');
      });

      // Close nav when a link is clicked (for mobile)
      navLinks.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
          if (navLinks.classList.contains('active')) {
            navLinks.classList.remove('active');
          }
        });
      });

      // Cookie Consent
      const cookieBanner = document.getElementById('cookie-consent-banner');
      const acceptCookiesBtn = document.getElementById('accept-cookies');
      const cookieName = 'consent_Auro Kinetic_cookies'; // Unique cookie name

      function getCookie(name) {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        if (parts.length === 2) return parts.pop().split(';').shift();
      }

      function setCookie(name, value, days) {
        const d = new Date();
        d.setTime(d.getTime() + (days * 24 * 60 * 60 * 1000));
        const expires = `expires=${d.toUTCString()}`;
        document.cookie = `${name}=${value}; ${expires}; path=/; SameSite=Lax`;
      }

      if (!getCookie(cookieName)) {
        cookieBanner.classList.add('show');
      }

      acceptCookiesBtn.addEventListener('click', function() {
        setCookie(cookieName, 'accepted', 365); // Consent for 1 year
        cookieBanner.classList.remove('show');
      });

      // Simple scroll-based animation for sections - fade in effect
      const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
      };

      const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.style.opacity = 1;
            entry.target.style.transform = 'translateY(0)';
            observer.unobserve(entry.target);
          }
        });
      }, observerOptions);

      document.querySelectorAll('section:not(#hero)').forEach(section => {
        section.style.opacity = 0;
        section.style.transform = 'translateY(20px)';
        section.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
        observer.observe(section);
      });
    });
  </script>
</body>
</html>