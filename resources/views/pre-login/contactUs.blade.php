@extends('template.homepage')
@section('content')

<section class="contactUs_section">
    <div class="container " >
      <div class="row my-5 gx-lg-5 gx-4 align-items-center">
        
        <div class="col-lg-5 text-center contact-info-area">
          
          <h4>Address</h4>
          <p>Lorem, ipsum dolor.<br>
          Lorem ipsum dolor sit.<br>
          Lorem, ipsum.</p>
          <h4>Tel:</h4>
          <p>+21252200000<br>
          212522100000</p>
        
        </div>
      

        <div class="col-lg-7 my-4 contact-message">
          
          <p class="my-2">
            <div class="contact-form">
              <div class="form-header text-center">
                <h2 class="text-center">Get in touch!</h2>
                  <p>How can we help you?</p>
              </div>
              <form method="post" action="">
                  @csrf
                  <div class="row">
                      <div class="form-group col-sm-6">
                          <input type="text" name="fname" placeholder="First Name" class="form-control" required>
                      </div>
                      <div class="form-group col-sm-6">
                          <input type="text" name="lname" placeholder="Last Name" class="form-control">
                      </div>
                  </div>                  
                  <div class="form-group">
                      <input type="email" name="email" placeholder="Email" class="form-control" required>
                  </div>
                  <div class="form-group">
                      <input type="text" name="number" placeholder="Mobile Number" class="form-control">
                  </div>
                  <div class="form-group">
                      <textarea name ="textmessage" placeholder="Your Message" class="form-control"></textarea>
                  </div>
                  <div class="form-group text-right">
                      <button class="btn btn-primary">Submit</button>
                  </div>
              </form>
          </div>
          </p>
        
        </div>
      </div>
    </div>
  </section>
@endsection