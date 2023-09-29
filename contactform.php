<div  class="success-Message alert alert-success" style="display: none;"></div>
	<section class="container-fluid my-4">
       <div class="col-md-6 mx-auto shadow p-md-4 p-4 contact-container">
    <h3 class="mb-4 text-center">Contact Us</h3>
    <form method="POST" id="contactForm" name="contactForm" class="contactForm">
        <div class="row my-3">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="label" for="name">Full Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" >
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="label" for="email">Email Address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" >
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="label" for="phone">Phone No</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone no" >
                </div>
            </div>
           
        </div>
        <div class="row my-3">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="label" for="message">Message</label>
                    <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message" ></textarea>
                </div>
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md-12 text-center">
                <div class="form-group">
          <div id="error-message" class="alert alert-danger" style="display: none;" ></div>
          <div id='success-Message' class=" alert alert-success " style="display: none;"></div>

                    <input type="submit" value="Send Message" class="btn btn-success btn-lg">
                </div>
            </div>
        </div>
    </form>
    </div>
	</section>
</div>