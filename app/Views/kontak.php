<?= $this->extend('lelang/page_layout'); ?>
<?= $this->section('content'); ?>

<!-- Page Content -->
<div class="page-heading contact-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h4>hubungi kami</h4>
                    <h2>mari kita berhubungan</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="find-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Lokasi kami di Maps</h2>
                </div>
            </div>
            <div class="col-md-8">
                <!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.4425150276793!2d105.23507596513998!3d-5.349230117836988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40c543ca06a57d%3A0xf31aefecd76428e4!2sPerumahan%20Bataranila!5e0!3m2!1sen!2sid!4v1609342357052!5m2!1sen!2sid" width="100%" height="330px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-4">
                <div class="left-content">
                    <h4>Tentang kantor kami</h4>
                    <p>TIM BARA<br><br>Universitas Lampung<br> Bandar Lampung, Lampung, Indonesia</p>
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="send-message">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Kirimkan pesan kepada kami</h2>
                </div>
            </div>
            <div class="col-md-8">
                <div class="contact-form">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail Address" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <ul class="accordion">
                    <li>
                        <a>Accordion Title One</a>
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti elite.</p>
                        </div>
                    </li>
                    <li>
                        <a>Second Title Here</a>
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti elite.</p>
                        </div>
                    </li>
                    <li>
                        <a>Accordion Title Three</a>
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti elite.</p>
                        </div>
                    </li>
                    <li>
                        <a>Fourth Accordion Title</a>
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti elite.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="happy-clients">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Pelanggan Kami Yang Bahagia</h2>
                </div>
            </div>
            <div class="col-md-12">
                <div class="owl-clients owl-carousel">
                    <div class="client-item">
                        <img src="<?= base_url(); ?>/assets/e-auction/assets/images/client-01.png" alt="1">
                    </div>

                    <div class="client-item">
                        <img src="<?= base_url(); ?>/assets/e-auction/assets/images/client-01.png" alt="2">
                    </div>

                    <div class="client-item">
                        <img src="<?= base_url(); ?>/assets/e-auction/assets/images/client-01.png" alt="3">
                    </div>

                    <div class="client-item">
                        <img src="<?= base_url(); ?>/assets/e-auction/assets/images/client-01.png" alt="4">
                    </div>

                    <div class="client-item">
                        <img src="<?= base_url(); ?>/assets/e-auction/assets/images/client-01.png" alt="5">
                    </div>

                    <div class="client-item">
                        <img src="<?= base_url(); ?>/assets/e-auction/assets/images/client-01.png" alt="6">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>