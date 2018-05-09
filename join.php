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


        <div class="jumbotron" style="background-image:  url('Assets/plantsinpots.png');" >
            <div class ="container">
            </div>
        </div>


        <div class= "membership">
            <div class="container">
                <h2 class="section-heading">Become a Member</h2>

                <div class="membership-form">
                </div>
                <main>
                    <p>All Transition Town Media Events and Meetings are open to the public, however, membership is required to join a Working Group or an Administrative Team. All memberships are free, donations are greatly appreciated. Transition Town Media (TTM)
                    </p>

                    <!-- <div class="form-wrapper"> -->
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputFirstName">First name</label>
                                <input type="FirstName" class="form-control" id="inputFirstName" placeholder="First name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputLastName">Last name</label>
                                <input type="LastName" class="form-control" id="inputLastName" placeholder="Last name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">City</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">State</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip">Zip</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                        </div>
                        <div class="form-row"> 
                            <div class="form-group col-md-6">
                                <label for="inputEmail">Your email</label>
                                <input type="text" class="form-control" id="inputEmail" placeholder="e.g. name@email.com">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPhoneNumber">Your best phone</label>
                                <input type="PhoneNumber" class="form-control" id="inputPhoneNumber" placeholder="Your phone number">
                            </div>
                        </div>
                        <hr>

                        <!--<div class="form-group">
<div class="form-check">
<input class="form-check-input" type="checkbox" id="gridCheck">
<label class="form-check-label" for="gridCheck">
Check me out
</label>
</div>
</div>
<button type="submit" class="btn btn-primary">Sign in</button>
-->
                    </form>


                    <h3>Would you like to join a Working Group?</h3>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="yesNo" id="yesNo" value="option1">
                        <label class="form-check-label" for="yesNo">
                            Yes
                        </label>    
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="yesNo" id="yesNo" value="option1">
                        <label class="form-check-label" for="yesNo">
                            No
                        </label>
                        <div class="row mb-4">
                        </div>
                    </div>

                    <h3>Would you like to join our TimeBank?</h3>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="yesNo" id="yesNo" value="option1">
                        <label class="form-check-label" for="yesNo">
                            Yes
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="yesNo" id="yesNo" value="option1" >
                        <label class="form-check-label" for="yesNo">
                            No
                        </label>
                        <div class="row mb-4">
                        </div>
                    </div>



                    <h3>Would you like to join Transition Town Media as a paying member and submit a donation with you membership?</h3>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="yesNo" id="yesNo">
                        <label class="form-check-label" for="yesNo">
                            Yes
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="yesNo" id="yesNo" value="option1" >
                        <label class="form-check-label" for="yesNo">
                            No
                        </label>
                        <div class="row mb-4">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Become a Member</button>

                    <div class="row mb-5">
                    </div>
                </main>
            </div>
        </div>

        <?php include('includes/footer.php'); ?>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
    </body>
</html>