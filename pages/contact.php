
<?php include '../includes/header.php'; ?>

 <!--==================== CONTACT CARDS ====================-->
 
 
 <section class="contact section" id="contact">
            <div class="contact__container container grid">
                <div class="contact__images">
                    <div class="contact__orbe">

                    </div>

                    <div class="contact__img">
                        <img src="assets/img/contact.png" alt="">
                    </div>
                </div>

                <div class="contact__content">
                    <div class="contact__data">
                        <span class="section__subtitle">Contact Us</span>
                        <h2 class="section__title">
                            Easy to Contact <span>Us.</span>
                        </h2>
                        <p class="contact__description">
                            If you liked this website please contact at Lorem ipsum dolor sit amet.
                        </p>
                    </div>

                    <div class="contact__card">
                        <div class="contact__card-box">
                            <div class="contact__card-info">
                                <i class='bx bxs-phone-incoming'></i>
                                <div>
                                    <h3 class="contact__card-title">
                                        Phone Number
                                    </h3>

                                    <p class="contact__card-description">
                                        Lorem ipsum dolor sit.
                                    </p>
                                </div>
                            </div>
                            <button class="contact__card-button popup-enabled">
                                Button
                            </button>
                        </div>
                        <div class="contact__card-box">
                            <div class="contact__card-info">
                                <i class='bx bxs-bell'></i>
                                <div>
                                    <h3 class="contact__card-title">
                                        Email
                                    </h3>

                                    <p class="contact__card-description">
                                        Lorem ipsum dolor sit amet, consectetur.
                                    </p>
                                </div>
                            </div>
                            <button class="contact__card-button popup-enabled">
                                Button
                            </button>
                        </div>
                        <div class="contact__card-box">
                            <div class="contact__card-info">
                                <i class='bx bx-envelope'></i>
                        <div>
                                    <h3 class="contact__card-title">
                                        Land Line
                                    </h3>

                                    <p class="contact__card-description">
                                        Accusantium qui in repudiandae unde
                                    </p>
                                </div>
                            </div>
                            <button class="contact__card-button popup-enabled">
                                Button
                            </button>
                        </div>
                        <div class="contact__card-box">
                            <div class="contact__card-info">
                                <i class='bx bxs-phone'></i>
                                <div>
                                    <h3 class="contact__card-title">
                                        Other
                                    </h3>

                                    <p class="contact__card-description">
                                        Accusantium qui in repudiandae unde
                                    </p>
                                </div>
                            </div>
                            <button class="contact__card-button popup-enabled">
                                Button
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="contact__container_mail">
    <div class="contact__card_mail">
        <div class="contact__card-box">
            <div class="contact__card-info">
                <i class='bx bxs-envelope'></i>
                <div>
                    <h3 class="contact__card-title">Get in Touch</h3>
                    <p class="contact__card-description">Fill in the details below, and we’ll get back to you.</p>
                </div>
            </div>

            <form id="contactForm" method="POST" class="contact__form_mail">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="contact__input-box_mail">
                        <label for="name" class="contact__label_mail">Name</label>
                        <input type="text" id="name" name="name" required class="contact__input_mail">
                    </div>
                    <div class="contact__input-box_mail">
                        <label for="phone" class="contact__label_mail">Phone</label>
                        <input type="tel" id="phone" name="phone" required class="contact__input_mail">
                    </div>
                </div>

                <div class="contact__input-box_mail">
                    <label for="email" class="contact__label_mail">Email</label>
                    <input type="email" id="email" name="email" required class="contact__input_mail">
                </div>

                <div class="contact__input-box_mail">
                    <label for="message" class="contact__label_mail">Message</label>
                    <textarea id="message" name="message" rows="4" required class="contact__input_mail"></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="contact__card-button_mail">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Popup Modal -->
<div id="popupModal" class="popup__overlay">
    <div class="popup__container">
        <h3 class="popup__title">Message Sent</h3>
        <p class="popup__text">Thank you for contacting us! We will get back to you shortly.</p>
        <button onclick="closePopup()" class="popup__button">
            Back
        </button>
    </div>
</div>


<script>
    const form = document.getElementById('contactForm');
    const popupModal = document.getElementById('popupModal');

    form.addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent the default form submission

        // Gather form data
        const formData = new FormData(form);

        // Send form data using AJAX
        fetch('send_mail.php', {
            method: 'POST',
            body: formData,
        })
        .then((response) => response.text()) // Get response as text
        .then((data) => {
            if (data.includes("Your message has been sent successfully")) {
                // Show popup on success
                popupModal.classList.remove('hidden');
            } else {
                // Handle error
                alert("Failed to send the message. Please try again later.");
                console.error(data);
            }
        })
        .catch((error) => {
            alert("An error occurred. Please try again later.");
            console.error("Error:", error);
        });
    });

    function closePopup() {
        popupModal.classList.add('hidden'); // Hide the popup
        form.reset(); // Optional: Reset the form
    }
</script>


<!-- <script src="https://cdn.tailwindcss.com"></script> -->



<?php include '../includes/footer.php'; ?>