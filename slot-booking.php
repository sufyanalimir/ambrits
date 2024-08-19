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
                        <h5 class="sub-title sub-title-1">Want to Appear for Exam?</h5>
                        <h2 class="title-color">
                            Book a <span>Slot</span>
                        </h2>
                    </div>
                </div>
                <!--- END COL -->
            </div>
        </div>
        <div class="container section-padding pt-0">
            <div class="row">
                <div class="col-lg-6 col-md-5 col-12 m-auto">
                    <div class="text-center">
                        <div id="mailalert">
                        </div>
                    </div>
                    <form id="slot-booking-form">
                        <h2 class="mb-4">BOOK EXAM SLOT</h2>
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
                                    <input type="email" class="form-control" id="email" name="mail"
                                        placeholder="Your Email" autocomplete="off" required>
                                    <label for="mail">Your Email</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="mobile" name="mobile"
                                        placeholder="Your Mobile" autocomplete="off" required>
                                    <label for="mobile">Your Mobile</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <select class="form-select" name="exam" autocomplete="off" id="exam">
                                        <option value="IELTS" selected="">IELTS</option>
                                        <option value="PTE">PTE</option>
                                    </select>
                                    <label for="exam">Choose Exam</label>
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
                                <button class="btn btn-primary w-100 py-3 btn-book" type="submit"
                                    onclick="bookSlot()">Book
                                    Now</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-5 col-12 m-auto d-flex justify-content-center">
                    <img src="assets/images/PTE-IELTS-Booking-Ad-960x1536.png" alt="Slot Booking" class="img-fluid"
                        style="height: 30em">
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