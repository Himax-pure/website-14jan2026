<?php include 'includes/header.php'; ?>

<section class="page-title">
    <h1>Get In Touch</h1>
    <p>Have questions or need a bulk order? We are here to help.</p>
</section>

<main class="container">
    <div class="contact-wrapper">

        <div class="contact-info">
            <h3>Contact Details</h3>
            <p>Feel free to reach out to us via phone or email for immediate assistance.</p>

            <div class="info-item">
                <span class="icon">📍</span>
                <div>
                    <strong>Our Location</strong>
                    <p>NAHAN, DISTRICT SIRMOUR, HIMACHAL PRADESH (HP)</p>
                </div>
            </div>

            <div class="info-item">
                <span class="icon">📞</span>
                <div>
                    <strong>Phone Number</strong>
                    <p>+91 8219488767</p>
                </div>
            </div>

            <div class="info-item">
                <span class="icon">✉️</span>
                <div>
                    <strong>Email Address</strong>
                    <p>support@himaxpure.com</p>
                </div>
            </div>
        </div>
        <div class="contact-form-container">
            <?php
            if (isset($_POST['submit'])) {
                $name = htmlspecialchars($_POST['name']);
                $email = htmlspecialchars($_POST['email']);
                $phone = htmlspecialchars($_POST['phone']);
                $message = htmlspecialchars($_POST['message']);

                $to = 'support@himaxpure.com';
                $subject = 'New Query from Himax Pure Website';
                $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";
                $headers = "From: support@himaxpure.com\r\n";
                $headers .= "Reply-To: $email\r\n";

                if (@mail($to, $subject, $body, $headers)) {
                    echo "<div class='alert success'>✅ Success! Your message has been sent. We will contact you soon.</div>";
                } else {
                    echo "<div class='alert error'>❌ Error! E-mails are disabled currently. Please contact telephonically.</div>";
                }
            }
            ?>
            <form method="POST" action="contact.php" class="pure-form">
                <div class="form-group">
                    <label>Your Name</label>
                    <input type="text" name="name" placeholder="Full Name" required>
                </div>

                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name="email" placeholder="mail@example.com" required>
                </div>

                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="tel" name="phone" placeholder="XXXXX XXXXX" required>
                </div>

                <div class="form-group">
                    <label>Your Message</label>
                    <textarea name="message" rows="4" placeholder="How can we help you?" required></textarea>
                </div>
                <button type="submit" class="send-btn" name="submit">Send Message</button>
            </form>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
<script>
    window.onload = function() {
        const alertBox = document.querySelector('.alert');

        if (alertBox) {
            setTimeout(() => {
                alertBox.style.transition = "opacity 0.5s ease";
                alertBox.style.opacity = "0";
                setTimeout(() => {
                    alertBox.remove();
                }, 600);
            }, 4000);
        }
    };
</script>