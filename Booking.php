<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Island Explorer</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="Booking.css">
    <link rel="stylesheet" href="css/styles.css">

</head>

<body background="assets/web-resources/bg-img.png">




    <form action="form_input.php" method="post">

        <!-- Visitor Info -->
        <div class="elem-group">
            <label for="ID"> NIC / Passport No.</label>
            <input type="text" id="id" name="visitor_id" required>
        </div>
        <div class="elem-group">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="visitor_name" placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} required>
        </div>
        <div class="elem-group">
            <label for="email">Your Email</label>
            <input type="email" id="email" name="visitor_email" placeholder="john.doe@email.com" required>
        </div>

        <!-- Tour Packages Selection -->
        <hr>
        <div>

            <p class="main_selection">Accommodations Selection</p>

        </div>

        </div>


        <div class="elem-group">
            <label for="tour-package-selection">Select Tour Package</label>

            <input list="tour_package_selection" name="tour_package_selection" id="tourPackagesCheckboxInput">
            <datalist id="tour_package_selection">
                <!-- <select id="room-selection" name="tour_package_preference" required> -->

                <option value="">Choose a Tour Package from the List</option>
                <option value="Adams Peak overnight trek through wilderness">1. Adams Peak overnight trek through
                    wilderness</option>
                <option value="Ancient city of Polonnaruwa">2. Ancient city of Polonnaruwa</option>
                <option value="Anuradhapura & Mihintale">3. Anuradhapura & Mihintale</option>
                <option value="Anuradhapura & Polonnaruwa two day trip">4. Anuradhapura & Polonnaruwa two day trip
                </option>
                <option value="Colombo city tour">5. Colombo city tour</option>
                <option value="Dambulla & Sigiriya one day trip">6. Dambulla & Sigiriya one day trip</option>
                <option value="Ella: Nine arch and tea factory">7. Ella: Nine arch and tea factory</option>
                <option value="Galle fort & Bentota beach one day trip">8. Galle fort & Bentota beach one day trip
                </option>
                <option value="Hikkaduwa (surfing, paddleboarding & swim with sea turtles)">9. Hikkaduwa (surfing,
                    paddleboarding & swim with sea turtles)</option>
                <option value="Horton Plains, World's End, and Baker's Fall">10. Horton Plains, World's End, and Baker's
                    Fall</option>
                <option value="Jaffna and Delft Island">11. Jaffna and Delft Island</option>
                <option value="Kandy: Temple of the Tooth, Peradeniya Botanical Garden">12. Kandy: Temple of the Tooth,
                    Peradeniya Botanical Garden</option>
                <option value="Kaudulla National Park">13. Kaudulla National Park</option>
                <option value="Kithulgala white water rafting">14. Kithulgala white water rafting</option>
                <option value="Minneriya National Park">15. Minneriya National Park</option>
                <option value="Nuwara Eliya city trip">16. Nuwara Eliya city trip</option>
                <option value="Nuwara Eliya one day trip">17. Nuwara Eliya one day trip</option>
                <option value="Sigiriya and Sigiri village">18. Sigiriya and Sigiri village</option>
                <option value="Sinharaja Rainforest">19. Sinharaja Rainforest</option>
                <option value="The Pekoe Trail, Demodara tree plantation">20. The Pekoe Trail, Demodara tree plantation
                </option>
                <option value="Trincomalee (whale watching, Marble Beach, Dutch Bay & scuba diving)">21. Trincomalee
                    (whale watching, Marble Beach, Dutch Bay & scuba diving)</option>
                <option value="Wasgamuwa National Park">22. Wasgamuwa National Park</option>
                <option value="Wildlife safari to Yala National Park">23. Wildlife safari to Yala National Park</option>
                <option value="Yala National Park">24. Yala National Park</option>

                <!-- </select> -->
            </datalist>
        </div>

        <!-- Accommodations Selection -->
        <hr>
        <div>
            <p class="main_selection">Accommodations Selection</p>
        </div>

        <div class="elem-group ">
            <label for="days">No. of Days</label>
            <input type="number" id="days" name="days" placeholder="1" min="1">
        </div>

        <div class="elem-group inlined">
            <label for="adult">Adults</label>
            <input type="number" id="adult" name="total_adults" placeholder="2" min="1">
        </div>

        <div class="elem-group inlined">
            <label for="child">Children</label>
            <input type="number" id="child" name="total_children" placeholder="2" min="0">
        </div>

        <!-- category checkboxes -->
        <div>
            <p class="main_selection"> Choose category </p>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="myCheckbox1" name="category_selection" onchange="toggleDatalist('myCheckbox1', 'myInput1', 'myDatalist1')">
                <label class="form-check-label" for="myCheckbox1">
                    Star Class Hotels
                </label>

            </div>


            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="myCheckbox2" name="category_selection" onchange="toggleDatalist('myCheckbox2', 'myInput2', 'myDatalist2')">
                <label class="form-check-label" for="myCheckbox2">
                    Other Hotels
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="myCheckbox3" name="category_selection" onchange="toggleDatalist('myCheckbox3', 'myInput3', 'myDatalist3')">
                <label class="form-check-label" for="myCheckbox3">
                    Bunglows
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="myCheckbox4" name="category_selection" onchange="toggleDatalist('myCheckbox4', 'myInput4', 'myDatalist4')">
                <label class="form-check-label" for="myCheckbox4">
                    Cottages
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="myCheckbox5" name="category_selection" onchange="toggleDatalist('myCheckbox5', 'myInput5', 'myDatalist5')">
                <label class="form-check-label" for="myCheckbox5">
                    Tourism Resorts
                </label>
            </div>

        </div>


        <!-- start of datalists -->
        <div class="elem-group">
            <label for="accommodation-selection">Select Accommodation</label>

            <input type="text" id="myInput1" name="accommodation_selection" style="display: none;" placeholder="Star Class Hotels">
            <datalist id="myDatalist1">

                <option value="Amaranthe Bay Resort & Spa">1. Amaranthe Bay Resort & Spa</option>
                <option value="Cinnamon Bentota Beach Hotel">2. Cinnamon Bentota Beach Hotel</option>
                <option value="Tabula Rasa Resort & Spa">3. Tabula Rasa Resort & Spa</option>
                <option value="Thaala Bentota Hotel">4. Thaala Bentota Hotel</option>
                <option value="The Blue Water Hotel">5. The Blue Water Hotel</option>
                <option value="The Kandy Hills">6. The Kandy Hills</option>
                <option value="THE MERCHANT">7. THE MERCHANT</option>
                <option value="The Summit Hotel">8. The Summit Hotel</option>
                <option value="Weligama Bay Marriott Resort & Spa">9. Weligama Bay Marriott Resort & Spa</option>

            </datalist>


            <input type="text" id="myInput2" name="accommodation_selection" style="display: none;" placeholder="Other Hotels">
            <datalist id="myDatalist2">

                <option value="Ayaana Boutique Hotel">1. Ayaana Boutique Hotel</option>
                <option value="Camelot Beach Hotel">2. Camelot Beach Hotel</option>
                <option value="Jetwing Hotel">3. Jetwing Hotel</option>
                <option value="Mount Lanka Hotel & Suites">4. Mount Lanka Hotel & Suites</option>
                <option value="Northgate Jaffna Hotel">5. Northgate Jaffna Hotel</option>
                <option value="Queensland Hotel">6. Queensland Hotel</option>
                <option value="Secret Garden Hotel">7. Secret Garden Hotel</option>
                <option value="The Beehive Colombo">8. The Beehive Colombo</option>
                <option value="The Ramp Hotel">9. The Ramp Hotel</option>

            </datalist>


            <input type="text" id="myInput3" name="accommodation_selection" style="display: none;" placeholder="Bungalows">
            <datalist id="myDatalist3">

                <option value=" Ceylon Tea Trails ">1. Ceylon Tea Trails</option>
                <option value="Goatfell Kandapola ">2. Goatfell Kandapola</option>
                <option value="Gregorys Bungalow ">3. Gregorys Bungalow</option>
                <option value="Haggai Tourist Bungalow & Suites ">4. Haggai Tourist Bungalow & Suites</option>
                <option value="Nine Skies ">5. Nine Skies</option>
                <option value="Rosyth Estate House ">6. Rosyth Estate House</option>
                <option value="Thotalagala Plantation House ">7. Thotalagala Plantation House</option>

            </datalist>


            <input type="text" id="myInput4" name="accommodation_selection" style="display: none;" placeholder="Cottages">
            <datalist id="myDatalist4">

                <option value="Box On Clouds ">1. Box On Clouds</option>
                <option value="Del&#39;s Haven Cottage ">2. Del&#39;s Haven Cottage</option>
                <option value="Dream Cottage ">3. Dream Cottage</option>
                <option value="Eden View Ella Hotel ">4. Eden View Ella Hotel</option>
                <option value="Garden Cottage Arugambay ">5. Garden Cottage Arugambay</option>
                <option value="Haven Chalet ">6. Haven Chalet</option>
                <option value="Indika Lake Resort ">7. Indika Lake Resort</option>
                <option value="Kandy Mountain Cottage ">8. Kandy Mountain Cottage</option>
                <option value="Little England Cottages ">9. Little England Cottages</option>
                <option value="Mowgli Cottage ">10. Mowgli Cottage</option>
                <option value="Quantum Cottage ">11. Quantum Cottage</option>
                <option value="Regina Beach Bungalow ">12. Regina Beach Bungalow</option>
                <option value="Sherwood Cottage ">13. Sherwood Cottage</option>
                <option value="Starfish Beach Bungalows ">14. Starfish Beach Bungalows</option>
                <option value="Stone Cottage ">15. Stone Cottage</option>
                <option value="Sunntop Cabana ">16. Sunntop Cabana</option>


            </datalist>


            <input type="text" id="myInput5" name="accommodation_selection" style="display: none;" placeholder="Tourism Resorts">
            <datalist id="myDatalist5">

                <option value="Amanwella ">1. Amanwella</option>
                <option value="Amaya Resorts And Spa ">2. Amaya Resorts And Spa</option>
                <option value="Anantara Peace Haven Tangalle Resort ">3. Anantara Peace Haven Tangalle Resort</option>
                <option value="Anilana Pasikuda ">4. Anilana Pasikuda</option>
                <option value="Cinnamon Citadel Kandy ">5. Cinnamon Citadel Kandy</option>
                <option value="Cinnamon Grand Colombo ">6. Cinnamon Grand Colombo</option>
                <option value="Cinnamon Wild Yala ">7. Cinnamon Wild Yala</option>
                <option value=" Jetwing Lighthouse ">8. Jetwing Lighthouse</option>
                <option value="Lavanga Resort & Spa ">9. Lavanga Resort & Spa</option>
                <option value="Shangri-La's Hambantota Golf Resort & Spa ">10. Shangri-La's Hambantota Golf Resort & Spa
                </option>
                <option value="Taj Bentota Resort & Spa ">11. Taj Bentota Resort & Spa</option>
                <option value="Taj Samudra ">12. Taj Samudra</option>
                <option value="Taprobana by Asia Leisure Hotels ">13. Taprobana by Asia Leisure Hotels</option>
                <option value="The Eden Resort & Spa ">14. The Eden Resort & Spa</option>
                <option value="The Fortress Resort ">15. The Fortress Resort</option>
                <option value="The Kingsbury Colombo ">16. The Kingsbury Colombo</option>

            </datalist>


        </div>

        <!-- additional notes section -->
        <hr>
        <div class="elem-group ">
            <label for="message ">Additional Notes</label>
            <textarea id="message " name="additional_notes" placeholder="Tell us anything else that might be important. " required></textarea>
        </div>
 
        <button type="submit" name="submit">Place Your Reservation</button>

        <?php
        include_once 'db.php';
        if (isset($_POST["submit"])) {
            $visitor_name = $_POST['visitor_name'];
            $accommodation_selection = $_POST['accommodation_selection'];
            echo $visitor_name;
        }
        ?>

    </form>

    <script>
        function toggleDatalist(checkboxId, inputId, datalistId) {
            var checkbox = document.getElementById(checkboxId);
            var datalist = document.getElementById(datalistId);
            var input = document.getElementById(inputId);

            checkbox.addEventListener('change', function() {
                if (checkbox.checked) {
                    input.setAttribute("list", datalistId);
                    input.style.display = "block";
                } else {
                    input.removeAttribute("list");
                    input.style.display = "none";
                }
            });
        }
    </script>


</body>

</html>