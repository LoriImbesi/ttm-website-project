<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Transition Town Media</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="ttm.css">
    </head>
    <body>
        
        <?php include('includes/nav.php'); ?>
        <header>
            
        </header>

        <main>
            <h2>Become a Member</h2>
            <p>All Transition Town Media Events and Meetings are open to the public, however, membership is required to join a Working Group or an Administrative Team. All memberships are free, donations are greatly appreciated. Transition Town Media (TTM)
            </p>

            <div class="form-wrapper">

                <form> 

                    <p>
                        First Name<br><input type="text" name="first_name" id="first_name" size="40"><br>
                        Last Name<br><input type="text" name="last_name" id="last_name" size="40"><br>
                    <h3>Where do you live?</h3>
                    City<br><input type="text" name="city" id="city" size="30"><br>
                    Zip code<br><input type="text" name="zipcode" id="zipcode" size="15" ><br>
                    <h3>Your Email</h3>
                    e.g. name@email.com<br><input type="email" name="email" id="email" size="40"><br>
                    <h3>Your Best Phone</h3>
                    e.g 222-222-2222<br><input type="tel" name="phone" id="phone" size="30">

                    <p>&nbsp;</p>
                    <p>

                    <h3>Would you like to join a Working Group?</h3>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="yesNo" id="yesNo" value="option1" checked>
                        <label class="form-check-label" for="yesNo">
                            Yes
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="yesNo" id="yesNo" value="option1" checked>
                        <label class="form-check-label" for="yesNo">
                            No
                        </label>
                    </div>

                    <h3>Would you like to join our TimeBank?</h3>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="yesNo" id="yesNo" value="option1" checked>
                        <label class="form-check-label" for="yesNo">
                            Yes
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="yesNo" id="yesNo" value="option1" checked>
                        <label class="form-check-label" for="yesNo    ">
                            No
                        </label>
                    </div>

                    <h3>Would you like to join Transition Town Media as a paying member and submit a donation with you membership?</h3>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="yesNo" id="yesNo" value="option1" checked>
                        <label class="form-check-label" for="yesNo">
                            Yes
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="yesNo" id="yesNo" value="option1" checked>
                        <label class="form-check-label" for="yesNo">
                            No
                        </label>
                    </div>

                    <p>       
                        <input type="submit" value="Become a Member">
                    </p>
                </form>
            </div>
        </main> 

        <?php include('includes/footer.php'); ?>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
    </body>
</html>