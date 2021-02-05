@extends('template.main')
@section('content')
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container">
      
              <div class="section-title mt-5">
                <h2>{{$databaseContact[0] -> h2}}</h2>
                <p>{{$databaseContact[0] -> para1}}</p>
              </div>
      
              <div class="row">
      
                <div class="col-lg-6">
      
                  <div class="row">
                    <div class="col-md-12">
                      <div class="info-box">
                        <i class="{{$databaseContact[0] -> iconmap}}"></i>
                        <h3>{{$databaseContact[0] -> h3adresse}}</h3>
                        <p>{{$databaseContact[0] -> paraadresse}}</p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="info-box mt-4">
                        <i class="{{$databaseContact[0] -> iconenvelope}}"></i>
                        <h3>{{$databaseContact[0] -> h3mail}}</h3>
                        <p>{{$databaseContact[0] -> paramail}}<br>{{$databaseContact[0] -> paramailcontact}}</p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="info-box mt-4">
                        <i class="{{$databaseContact[0] -> iconphone}}"></i>
                        <h3>{{$databaseContact[0] -> h3call}}</h3>
                        <p>{{$databaseContact[0] -> paracall}}<br>{{$databaseContact[0] -> paramail2}}</p>
                      </div>
                    </div>
                  </div>
      
                </div>
      
                <div class="col-lg-6 mt-4 mt-lg-0">
                  <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="form-row">
                      <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validate"></div>
                      </div>
                      <div class="col-md-6 form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validate"></div>
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                      <div class="validate"></div>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                      <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                      <div class="loading">{{$databaseContact[0] -> loading}}</div>
                      <div class="error-message"></div>
                      <div class="sent-message">{{$databaseContact[0] -> parasent}}</div>
                    </div>
                    <div class="text-center"><button type="submit">{{$databaseContact[0] -> button}}</button></div>
                  </form>
                </div>
      
              </div>
      
            </div>
          </section><!-- End Contact Section -->
@endsection