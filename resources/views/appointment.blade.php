@extends('layouts.layout')

@section("content")



<!DOCTYPE html>
<html lang="en">

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <a href="/dentals" class="logo me-auto"><img src="/img/logo.png" alt=""></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="dentals#appointment">Home</a></li>
          <li><a class="nav-link scrollto" href="/dentals#about">About</a></li>
          <li><a class="nav-link scrollto" href="/dentals#services">Services</a></li>
          <li><a class="nav-link scrollto" href="/dentals#">Appointment Status</a></li>
          <li><a class="nav-link scrollto" href="/dentals#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="/dentals" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <section class="inner-page">
        <div class="container Track">
            <div class="card" style="border-color: #555;">
              <h4 class="my-3 appoint" style="background-color:#3fbbc0;">Appointment Status</h4>
              <div class="card-body" style="padding-left:6em;">
                @php
                $track = 0;
                $name = "John Doe";
                $email = "Johndoe23@gmail.com";
                $phone = "0917 959 4101";
                $time = "10:00 AM";
                $date = "2021-09-20";
                $service = "Dental Cleaning";
                $status = "Pending";
                @endphp
                
                <div class="row my-3">
                  <div class="col-sm-3 bold-text">Tracking number:</div>
                  <div class="col-sm-9">{{ $track }} </div>
                  <div class="col-sm-3 bold-text">Name:</div>
                  <div class="col-sm-9">{{ $name }} </div>
                  <div class="col-sm-3 bold-text">Email:</div>
                  <div class="col-sm-9">{{ $email }} </div>
                  <div class="col-sm-3 bold-text">Phone number:</div>
                  <div class="col-sm-9">{{ $phone }} </div>
                  <div class="col-sm-3 bold-text">Appointment Time and Date:</div>
                  <div class="col-sm-9">{{ $time }} - {{ $date }} </div>
                  <div class="col-sm-3 bold-text">Service:</div>
                  <div class="col-sm-9">{{ $service }}  </div>
                  <div class="col-sm-3 bold-text">Status:</div>
                  <div class="col-sm-9 text-warning">{{ $status }} </div>
                </div>
  
              </div>
            </div> <br>
            <button type="submit" class="btn btn-primary btn-danger">Request Cancel</button> <br>
            <small class="text-danger">Note: If you have approximately one hour until your appointment, you cannot cancel your request. </small>
          </div> <br> <br> 
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Smith-Delos Reyes</h3>
              <p>
                Nueno Street Imus <br>
                Cavite 0412 Imus, Philippines<br><br>
                <strong>Phone:</strong> 0917 959 4101<br>
                <strong>Facebook:</strong> <a href="https://www.facebook.com/Smthdelosreyes" target="_blank" style="text-decoration: none; color: black;">Smith-Delos Reyes Dental Clinic</a><br>
              </p>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/dentals#appointment">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/dentals#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/dentals#services">Services</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/dentals#services">Restoration/Filling</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/dentals#services">Oral Prophylaxis</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/dentals#services">Deep Scaling</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/dentals#services">Gum Treatment,Flouride,Cavity liner</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/dentals#services">and Many more...</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Smith-Delos Reyes Dental Clinic</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->
</body>

</html>

@endsection