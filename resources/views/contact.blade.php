@extends('welcome')
@section('title', 'Contact')
@section('content')
<section class="section-white" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="section-title">Contact Us</h2>
        <p class="section-subtitle">We'd love to hear from you. Reach out to us for any inquiries or assistance.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <h3>Contact Information</h3>
        <p><strong>Address:</strong> 1234 Example Street, City, Country</p>
        <p><strong>Phone:</strong> +1 (XXX) XXX-XXXX</p>
        <p><strong>Email:</strong> info[at]rubitalent[dot]com</p>
        <p><strong>Business Hours:</strong> Monday - Friday, 9:00 AM - 5:00 PM</p>
      </div>
      <div class="col-md-6">
        <h3>Send Us a Message</h3>
        <form action="/send-message" method="post">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Your Message"
              required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection