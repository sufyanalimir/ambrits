<!DOCTYPE html>
<html lang="en">

<?php include "common/head.php"; ?>

<body>
    <?php include "common/navbar.php"; ?>
    <section id="contact-us">
        <div class="container section-padding">
            <div class="row justify-content-center">
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="section-title text-center">
                        <h5 class="sub-title sub-title-1">Prefer a personal touch?</h5>
                        <h2 class="title-color">
                            Contact <span>Us</span>
                        </h2>
                    </div>
                </div>
                <!--- END COL -->
            </div>
        </div>
        <div class="container section-padding">
            <div class="row g-5">
                <div class="col-lg-6 m-auto py-3">
                    <p class="mb-4">We promise to respond within <b>24</b> hours</p>
                    <div class="text-center">
                        <div id="mailalert">
                        </div>
                    </div>
                    <form id="contact-form">
                        <h2 class="mb-4">SEND US A MESSAGE</h2>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Your Name" autocomplete="off" required>
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="mobile" name="mobile"
                                        placeholder="Your Mobile" autocomplete="off" required>
                                    <label for="mobile">Your Mobile</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="mail"
                                        placeholder="Your Email" autocomplete="off" required>
                                    <label for="mail">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message"
                                        name="message" style="height: 130px" autocomplete="off" required></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-primary w-100 py-3 btn-submit" type="submit"
                                    onclick="sendMail()">Submit
                                    Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container section-padding">
            <div class="row g-5 mt-2">
                <div class="col-lg-6">
                    <p class="mb-4">Reach us at</p>
                    <div>
                        <h2 class="mb-4">Hyderabad - Head Office</h2>
                        <p>3rd Floor, Sudha Nilayam, 12-2-831/84, beside King’s Restaurant,</p>
                        <p>opposite to Hassan Hotel, MIGH Colony, Mehdipatnam,</p>
                        <p>Hyderabad, Telangana 500028</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <iframe class="w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7614.757129199471!2d78.443023!3d17.393611!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb97108d4dbd91%3A0x89871c2cd7142bf1!2sAmbrits%20Training%20Hub%20I%20IELTS%20I%20PTE%20I%20DUOLINGO%20I%20ENGLISH!5e0!3m2!1sen!2sus!4v1723715041409!5m2!1sen!2sus"
                        width="600" height="450" style="min-height: 300px;border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <?php
    include "common/footer.php";
    include "common/script.php";
    ?>
</body>

</html>