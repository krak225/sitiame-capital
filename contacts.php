<?php require_once('header.php'); ?>

        <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="title-breadcrumb">
                            <h2>Contact</h2>
                            <ol class="breadcrumb">
                                <li><a href="index.php">Accueil</a></li>
                                <li>Nous contacter</li>
                            </ol>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->    


        <!-- start contact-pg-contact-section -->  
        <section class="contact-pg-contact-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8 col-sm-8">
                        <div class="contact-form">
                            <form class="row contact-validation-active"  id="contact-form-s2">
                                <div class="col col-sm-6">
                                    <label for="f-name">Nom</label>
                                    <input type="text" class="form-control" id="f-name" name="f_name">
                                </div>
                                <div class="col col-sm-6">
                                    <label for="l-name">Prénoms</label>
                                    <input type="text" class="form-control" id="l-name" name="l_name">
                                </div>
                                <div class="col col-sm-6">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="col col-sm-6">
                                    <label for="phone">Téléphone</label>
                                    <input type="text" class="form-control" id="phone" name="phone">
                                </div>
                                <div class="col col-xs-12">
                                    <label for="message">Message</label>
                                    <textarea id="message" name="note" class="form-control"></textarea>
                                </div>
                                <div class="col col-xs-12">
                                    <div class="submit-btn">
                                        <button type="submit" class="theme-btn-s2">Envoyer</button>
                                        <div id="loader">
                                            <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-xs-12">
                                    <div class="error-handling-messages">
                                        <div id="success">Thank you</div>
                                        <div id="error"> Error occurred while sending email. Please try again later. </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-sm-4">
                        <div class="contact-info">
                            <div class="title-text">
                            <h3>Nos contacts</h3>
                            <p>N'hésitez pas à nous contacter.</p>
                            <ul>
                                <li><i class="fa fa-phone"></i> +225 2724523043</li>
                                <li><i class="fa fa-envelope"></i> contact@sitiame-capital.com</li>
                                <li><i class="fa fa-home"></i> Abidjan, Côte d'Ivoire</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end contact-pg-contact-section -->

<?php require_once('footer.php'); ?>