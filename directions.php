<?php 
    include('include/header.php');
?>

<!-- Main content Container -->
            <div id="main_content_container" class="col-12">
                <div class="row">

                    <!-- Landing Carousel -->
                    <div id="landing_carousel" class="other_pages_carousel">
                        <div class="carousel_text">
                            <h2>Directions to the venue</h2>
                        </div>
                    </div>
                    <!-- Landing Carousel -->

                    <!-- Directions to the Venue -->
                    <div id="directions_to_the_venue" class="landing_section col-12">

                        <div class="apply_max_width">
                            <div id="venue_tabs_container">
                                <div class="venue_tabs col-12 col-md-4 col-lg-3 col-xl-3">
                                    <div class="tablink current" data-tab="tab-location"><i class="fas fa-map-marker-alt"></i> Location</div>
                                    <div class="tablink" data-tab="tab-air"><i class="fas fa-plane"></i> By Air</div>
                                    <div class="tablink" data-tab="tab-car"><i class="fas fa-car"></i> By Car</div>
                                </div>
                                <div class="venue_tab_detail col-12 col-md-8 col-lg-9 col-xl-9">
                                    <div id="tab-location" class="tabcontent current">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magnaaliqua. Ut enim ad minim veniam, quis nostrud exercitationullamco.</p>
                                        <div>
                                            XYZ Convention Center
                                            <br>
                                            Addison, IL
                                            <br>
                                            123-456-7890
                                        </div>
                                        <a href="#">Get Directions</a>
                                    </div>
                                    <div id="tab-air" class="tabcontent">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magnaaliqua. Ut enim ad minim veniam, quis nostrud exercitationullamco.</p>
                                        <div>By Air</div>
                                    </div>
                                    <div id="tab-car" class="tabcontent">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magnaaliqua. Ut enim ad minim veniam, quis nostrud exercitationullamco.</p>
                                        <div>By Car</div>
                                    </div>
                                </div>
                            </div>

                            <div class="location_map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2968.095236197564!2d-87.98741788411576!3d41.933804879217796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880fb2f1b98f53f3%3A0x2731366fc8693ae1!2sAddison+Park+District!5e0!3m2!1sen!2sin!4v1523255020999" width="600" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <!-- Apply max width -->
                    </div>
                    <!-- Directions to the Venue -->

                </div>
                <!-- End of main_content_container row -->
            </div>
            <!-- End of main_content_container -->
<?php 
    include('include/footer.php');
?>