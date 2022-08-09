<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('include/css.php'); ?>
    <title>Contact Us</title>
    <meta name="description" content="">
</head>

<body>
    <?php include('include/header.php'); ?>

    <div class="top-height">
    </div>

    <div class="banner">
        <div class="container">
            <h2 class="head2">
                Contact Us
            </h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $link; ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>

    <section class="section-padding contact-form">
        <div class="container">
            <div class="main-heading text-center">
                <span class="line">
                    Get In Touch
                </span>
                <h2 class="head2">
                    Contact <span> Us </span>
                </h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-6 d-flex align-items-center">
                        <div class="my-4">
                            <form id="contact-form" action="php/contact.php" method="post">

                                <div class="form-body">
                                    <h3 class="head3">
                                        DO YOU HAVE ANY QUESTION? SIMPLY SEND US MESSAGE
                                    </h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Name*"
                                                aria-label="Name" name="full_name" >
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Phone Number*"
                                                aria-label="Phone Number" name="phone_number" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="email" class="form-control" placeholder="Email"
                                                aria-label="Email" name="email" >
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Subject"
                                                aria-label="Last name" name="subject" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"
                                                placeholder="Message" name="message" ></textarea>
                                        </div>
                                    </div>
                                    <div class="book-appointment d-flex mt-2 justify-content-center">
                                        <button type="submit" class="btn3" title="">
                                            <span>Send Enquiry</span> </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 d-flex align-items-center">
                        <div class="w-100">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13326028.870292367!2d134.5009592!3d-35.3699133!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe8cf5f877ee7011c!2sTeam%20Removals!5e0!3m2!1sen!2sin!4v1659967605520!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include('include/footer.php'); ?>

    <?php include('include/javascript.php'); ?>
</body>

</html>