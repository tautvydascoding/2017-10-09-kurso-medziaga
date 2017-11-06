<?php include "./header.php"?>

<section class="contacts">
    <div class="map">
        <iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyD3a0HgSQ_junHAGq4_9QYVOsoGrp8m188&q=Kuršių+g.+7,+Kaunas" allowfullscreen>
        </iframe>
    </div>
    <div class="contacts-info-container">
        <div class="contacts-form-container">
            <div class="contacts-form">
                <h3>Get in touch </h3>
                <form id="contact-form" class="w100">
                    <div class="form-group">
                        <label for="your-name">Your name*</label>
                        <input class="form-input" id="your-name"  type="text" name="name" value="">
                    </div>
                    <div class="form-group">
                        <label for="your-email">Your email*</label>
                        <input class="form-input" id="your-email"  type="text" name="email" value="">
                    </div>
                    <div class="form-group">
                        <label for="your-email">Subject*</label>
                        <input class="form-input" id="your-subject"  type="text" name="subject" value="">
                    </div>
                    <div class="form-group">
                        <label for="your-message">Your message*</label>
                        <textarea class="form-input" id="your-message" name="text" value=""></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="button">Submit</button>
                    </div>
                </form>

            </div>
            <div class="message">

            </div>
        </div>
        <div class="contacts-info-block">
            <div>
                <h3>Contacts info</h3>
                <div class="contacts-table">
                    <table>
                        <tr>
                            <td class="contact-type">Address</td>
                            <td class="contact-info">Kuršių g. 7, Kaunas 48109</td>
                        </tr>
                        <tr class="">
                            <td class="contact-type">Phone</td>
                            <td class="contact-info">+370 699 99999</td>
                        </tr>
                        <tr>
                            <td class="contact-type">Email</td>
                            <td class="contact-info">email@email.com</td>
                        </tr>
                        <tr class="small-hidden">
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>
                    </table>
                </div>

            </div>
            <h3>Get social</h3>
            <div class="contacts-social">
                <a class="contacts-social-item" href="#"><span class="icon-google-plus"></span></a>
                <a class="contacts-social-item" href="#"><span class="icon-facebook"></span></a>
                <a class="contacts-social-item" href="#"><span class="icon-instagram"></span></a>
                <a class="contacts-social-item" href="#"><span class="icon-twitter"></span></a>
                <a class="contacts-social-item" href="#"><span class="icon-behance"></span></a>
                <a class="contacts-social-item" href="#"><span class="icon-pinterest2"></span></a>
                <a class="contacts-social-item" href="#"><span class="icon-linkedin2"></span></a>
                <a class="contacts-social-item" href="#"><span class="icon-skype"></span></a>
            </div>

        </div>
    </div>
</section>

<?php include "./footer.php"?>
