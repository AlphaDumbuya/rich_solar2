@extends('layout')
@section('content')
<section class="contact">
    <div class="content">
     <h2>Contact Us</h2>
     <p>Get in touch with us on the following details below.</p>
    </div>
    <div class="container">
     <div class="contactInfo">
          <!-- box 1 -->
         <div class="box">
             <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
             <div class="text">
                 <h2>Address</h2>
                 <p>No. 24 Regent Road Lumley</p>
             </div>
         </div>
         <!-- box 2 -->
         <div class="box">
             <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
             <div class="text">
                 <h2>Phone</h2>
                  <p>+23230388888</p>
             </div>
         </div>
         <!-- box 3 -->
         <div class="box">
             <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i>
             </div>
             <div class="text">
                 <h2>Email</h2>
                  <p>richsolarsl@gmail.com</p>
             </div>
         </div>
     </div>
     <!-- contact -->
    <div class="contact-form">
     <form action="https://formspree.io/f/mlekveny"
     method="POST">
         <h3>Send Message</h3>
         <div class="input-box">
             <input type="text" name="name required="requi">
             <span>Full Name</span>
         </div>
         <div class="input-box">
             <input type="text" name="email" required="required">
             <span>Email</span>
         </div>
         <div class="input-box">
             <textarea name="message" required="required"></textarea>
             <span>Type your  Message...</span>
         </div>
         <div class="input-box">
             <input type="submit" value="send" name="">
         </div>
     </form>
 </div>
    </div>
 </section>
 @endsection