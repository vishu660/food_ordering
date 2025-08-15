<?php include '../includes/header.php'; ?>

<!-- Contact Section -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Heading -->
            <div class="col-lg-8 text-center mb-5">
                <h1 class="fw-bold">Contact Us 📩</h1>
                <p class="text-muted">
                    Have questions, feedback, or suggestions? We’d love to hear from you.
                    Fill out the form below and we’ll get back to you as soon as possible.
                </p>
            </div>
        </div>

        <div class="row justify-content-center">
            <!-- Contact Form -->
            <div class="col-lg-8">
                <form action="" method="POST" class="p-4 bg-light rounded shadow-sm">
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name *</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address *</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="your@email.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message *</label>
                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Your message..." required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger px-4">Send Message</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Contact Info -->
        <div class="row mt-5 text-center">
            <div class="col-md-4 mb-3">
                <h5>📍 Address</h5>
                <p>New Delhi, India</p>
            </div>
            <div class="col-md-4 mb-3">
                <h5>📞 Phone</h5>
                <p>+91 98765 43210</p>
            </div>
            <div class="col-md-4 mb-3">
                <h5>📧 Email</h5>
                <p>support@foody.com</p>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
