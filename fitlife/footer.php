<footer class="bg-black bg-gradient text-white pt-4">
  <div class="container">
    <div class="row p-3">
      <div class="col-md-4 px-5">
        <h5>Subscribe with us</h5>
        <form id="subscribe">
          <div class="mb-3">
            <input type="text" class="form-control mb-2" name="name" placeholder="Enter your name" required>
            <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
          </div>
          <button class="btn btn-outline-light" type="submit">Subscribe</button>
        </form>
      </div>
      <div class="col-md-4 px-5">
        <h5>About FitLife</h5>
        <p>Your go-to platform for fitness and health. Stay fit, stay strong!</p>
      </div>
      <div class="col-md-4 px-5">
        <h5>Contact Us</h5>
        <ul class="list-unstyled">
          <li><i class="fa fa-map-marker"></i> 123 Fitlife St, Depok</li>
          <li><i class="fa fa-phone"></i> +62 882 9678 7962</li>
          <li><i class="fa fa-envelope"></i> contact@fitlife.com</li>
        </ul>
      </div>
    </div>
    <div class="text-center py-4 mt-5">
      © 2025 FitLife. All rights reserved.
    </div>
  </div>
</footer>
<script>
  function subscribe(event) {
    event.preventDefault(); // Mencegah pengiriman form default

    let form = document.getElementById('subscribe');
    let name = form.name.value.trim();
    let email = form.email.value.trim();

    if (name === "" || email === "") {
      alert("Please fill in all fields!");
      return;
    } else {
      alert("Hello " + name + ", we'll send you an email. Thanks for subscribing!");
    }

  }
  // Tambahkan event listener ke form
  document.getElementById('subscribe').addEventListener('submit', subscribe);
</script>