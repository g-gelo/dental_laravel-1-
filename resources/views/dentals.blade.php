<!DOCTYPE html>
@extends('layouts.layout')

@section("content")

<html lang="en">

<body>
 

  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="/dentals" class="logo me-auto"><img src="/img/logo.png" alt=""></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="#home">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
        


      <a href="/appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a>

    </div>
  </header><!-- End Header -->

  <section class="mt-5" style="">
    <div class="container" data-aos="fade-up">

      <div class="text-center col-md-5 mx-auto">
        <p>Already have an appointment? Enter your tracking number here:</p>
      </div>
      <form action="" method="post" role="form">
        <div class="col-md-5 mx-auto">
            <input type="text" name="name" style="" class="form-control" id="name" placeholder="Enter tracking number" required>
            <button class="btn btn-secondary search-button" style="background-color:#3fbbc0; border:none;">
              <div class="magnifying"><i class="fa-solid fa-magnifying-glass"></i></div>
            </button>
          </div>
        </form>

    </div>
    </section>
          

        
  </section>
   <!-- ======= Appointment Section ======= -->
   <section id="home" class="appointment section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title apt">
        <h2>Make an Appointment</h2>
      </div>

      <form action="" method="post" role="form" class="php-email-form">
        <div class="row">
          <div class="col-md-4 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
            <div class="validate"></div>
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email (Optional)" data-rule="email" data-msg="Please enter a valid email">
            <div class="validate"></div>
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
            <div class="validate"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 form-group mt-3">
            <input type="date" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
            <div class="validate"></div>
          </div>
          <div class="col-md-4 form-group mt-3">
            <input type="time" name="date" class="form-control datepicker" id="date" placeholder="Appointment Time" required>

            <div class="validate"></div>
          </div>
          <div class="col-md-4 form-group mt-3">
            <select name="doctor" id="doctor" class="form-select">
              <option value="">Select Services</option>
              <option value="Services 1">Restoration/Filling</option>
              <option value="Services 2">Oral Prophylaxis</option>
              <option value="Services 3">Deep Scaling</option>
              <option value="Services 4">Gum Treatment, Flouride, Cavity liner</option>
              <option value="Services 5">Prostho Thermosen</option>
              <option value="Services 6">Flexable/Rubberize Dentures</option>
              <option value="Services 7">Partial Porcelain Jacket</option>
              <option value="Services 8">Plastic Jacket</option>
              <option value="Services 9">All Porcelaine Zirconia and Veneering Composite</option>
              <option value="Services 10">All Porcelaine Veneer</option>
              <option value="Services 11">Braces/Retainers</option>
              <option value="Services 12">Impaction(Wisdom Tooth Removal)</option>
              <option value="Services 13">Tooth Extraction</option>
            </select>
            <div class="validate"></div>
          </div>
        </div>

        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
          <div class="validate"></div>
        </div>
        <div class="mb-3">
        </div>
        <div class="text-center"><button type="submit" style="background-color:#3fbbc0;">Make an Appointment</button></div>
      </form>

    </div>
  </section><!-- End Appointment Section -->
  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Dra. Ma. Sheree Delos Reyes</h3><br>
            
            <ul>
              <li><i class="fa-sharp fa-solid fa-fingerprint"></i><p>General dentistry, Orthodontics, and Cosmetic dentistry.</p></li>
              <br>
              <li><i class="fa-regular fa-building"></i><p>Business Founded in the year of 2014, Smith-Delos Reyes Dental Clinic founded.</p></li>
              <br>
              <li><i class="fa-regular fa-calendar-days"></i><p>Monday to Saturday, by Sunday could be settle by directly messaging Dra. Delos Reyes. <br><br>
                Clinic Hours 10:00AM to 5:00PM. </p></li>
            </ul>
           
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Performing oral screenings to detect diseases and infections. Getting rid of tooth decay and plaque Applying prosthetics, sealants, and whiteners.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fa-sharp fa-solid fa-fill-drip"></i></div>
            <h4 class="title"><a href="">Restoration/Filling</a></h4>
            <p class="description">Fillings are special materials that your dentist places in or on your teeth to repair tooth decay (cavities) or defects on the tooth surface.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fa-solid fa-teeth-open"></i></div>
            <h4 class="title"><a href="">Oral Prophylaxis</a></h4>
            <p class="description">Cleaning procedure performed to thoroughly clean the teeth. Prophylaxis is an important dental treatment for halting the progression of periodontal disease and gingivitis.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fa-solid fa-teeth-open"></i></div>
            <h4 class="title"><a href="">Deep Scaling</a></h4>
            <p class="description">Deep cleaning, during routine dental check-ups, hygienists typically clean teeth up to the gum line.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fa-solid fa-teeth-open"></i></div>
            <h4 class="title"><a href="">Gum Treatment, Flouride, Cavity liner</a></h4>
            <p class="description">Dentists provide professional fluoride treatments in the form of a highly concentrated rinse, foam, gel, or varnish.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fa-solid fa-teeth-open"></i></div>
            <h4 class="title"><a href="">Prostho Thermosen</a></h4>
            <p class="description">Flexable/Rubberize Dentures, Complete, Partial Porcelain Jacket, Plastic Jacket,
              all Porcelaine Zirconia and Veneering Composite, all Porcelaine Veneer.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fa-regular fa-face-grimace"></i></div>
            <h4 class="title"><a href="">Braces and Retainers</a></h4>
            <p class="description">Braces, are much more robust.Retainers can be a solution for minor problems.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fa-regular fa-face-grimace"></i></div>
            <h4 class="title"><a href="">Impaction (Wisdom Tooth Removal)</a></h4>
            <p class="description">If a tooth does not come in, or emerges only partially, it is considered to be impacted.
              This most commonly happens with the wisdom teeth</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fa-regular fa-face-grimace"></i></div>
            <h4 class="title"><a href="">Tooth Extraction</a></h4>
            <p class="description">Permanent removal of a tooth from its socket and may be done manually using forceps or surgically.</p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->   
    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3864.0391284653933!2d120.93774551449688!3d14.424907985226145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d2f5d11810d3%3A0x5a505f26c163f059!2sNueno%20Ave%2C%20Imus%2C%20Cavite!5e0!3m2!1sen!2sph!4v1669956572509!5m2!1sen!2sph" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="fa-sharp fa-solid fa-location-pin"></i>
                  <h3>Our Address</h3>
                  <p>Nueno Street Imus Cavite 0412 Imus, Philippines</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4"><a href="https://www.facebook.com/Smthdelosreyes" target="_blank">
                  <i class="fa-brands fa-facebook"></i></a>
                  <h3>Facebook</h3>
                  <p>Smith-Delos Reyes Dental Clinic</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="fa-solid fa-phone"></i>
                  <h3>Call Us</h3>
                  <p>0917 959 4101</p>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Smith-Delos Reyes Dental Clinic</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      </div>
    </div>
  </footer>
  <!-- End Footer -->
</body>

</html>

@endsection