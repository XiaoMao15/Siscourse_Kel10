<main class="container my-5">
    <section class="intro text-center mb-5">
        <h1 class="display-4 mb-5">Contact Us</h1>
        <div class="row row-cols-1 row-cols-md-3 g-3">
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fa fa-map-marker fa-3x mb-3"></i>
                        <h5 class="card-title">Location</h5>
                        <p class="card-text">123 Street Name, City, Country</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fa fa-phone fa-3x mb-3"></i>
                        <h5 class="card-title">Phone</h5>
                        <p class="card-text">+123 456 789</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fa fa-envelope fa-3x mb-3"></i>
                        <h5 class="card-title">Email</h5>
                        <p class="card-text">info@example.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="row mt-5 bg-dark border border-success p-4 mb-2 rounded-end-5">
            <div class="col-md-6 p-3  bg-black">
                <form id="message">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-light">Send Message</button>
                </form>
            </div>
            <div class="col-md-6 p-3 text-center text-light d-flex flex-column justify-content-center align-items-center">
                <h3>Have a question?</h3>
                <h1>Send us a Message</h1>
            </div>
        </div>
    </section>
</main>
<script>
  function message(event) {
    event.preventDefault(); // Mencegah pengiriman form default

    let form = document.getElementById('message');
    let name = form.name.value.trim();
    let email = form.email.value.trim();
    let message = form.message.value.trim();

    if (name === "" || email === "" || message === "") {
      alert("Please fill in all fields!");
      return;
    } else {
      alert("Thanks for the message! We will reply by email, have a nice day " + name);
    }

  }
  // Tambahkan event listener ke form
  document.getElementById('message').addEventListener('submit', message);
</script>