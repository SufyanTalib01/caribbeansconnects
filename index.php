<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caribbeansconnects</title>
    <link rel="stylesheet" href="assets/css/landing_page.css">
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>


</head> 
<body>
    <div class="main-container">
        <nav class="const-padding">
            <div class="left-nav">
                <img src="assets/img/logo.png" alt="">
            </div>
            <div class="right-nav">
                <ul>
                    <li><a href="">Find Job</a></li>
                    <li><a href="">Talents</a></li>
                    <li><a href="">Community <i class="fa fa-chevron-down"></i></a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Contact Us</a></li>
                    <li><a href="">Login</a></li>
                    <li><a href="">Register</a></li>
                </ul>
                <i class="fa-solid fa-bars-staggered"></i>
                
            </div>
        </nav>
        <section>
            <div class="main-image">
                <div class="main-data">
                    <p>Search for Exciting & Apply Now</p>
                    <h1>Unlock your Potential  <strong>Join Today As </strong>Talent Or Crew!</h1>
                    <span>Castings opportunities for, actors, models, musicians and more, of all ages, and levels of experience. <strong>Register now !</strong></span>
                    <button>Register now</button>
                </div>
            </div>

            <?php require_once('components/creativity-category.php') ?>
            <div class="casting">
                <h1>Search Casting & Jobs Calls</h1>
                <div class="casting-input">
                    <div class="input">
                        <label for="">Location</label>
                        <select class="prompt" name="" id="" type="text">
                            <option value="">Select Locations</option>
                        </select>
                    </div>
                    <div class="input">
                        <label for="">Gender</label>
                        <select class="gender" name="" id="" type="text">
                        <option value="">Select Gender</option>
                        </select>
                    </div>
                    <div class="input">
                        <label for="">Compensation</label>
                        <select class="compensation" name="" id="" type="text">
                        <option value="">Select Compensation</option>
                        </select>
                    </div>
                </div>
                <div class="range-div">
                    <div class="input-range">
                        <label for="">Age Range</label>
                        <input type="range">
                        <p>16 -- 21</p>
                    </div>
                    <div class="ethnicity">
                        <label for="">Ethnicity</label>
                        <select class="prompt" name="" id="">
                        <option value="">Select Ethnicity</option>
                        </select>
                    </div>
                </div>
                <div class="popular-search">
                    <p>popular searches:</p>
                    <div class="popular-input">
                    <div class="sub-input">
                    <input type="checkbox">
                    <span>
                    International Submissions</span>
                    </div>
                    <div class="sub-input">
                    <input type="checkbox">
                    <span>
                    International Submissions</span>
                    </div>
                    <div class="sub-input">
                    <input type="checkbox">
                    <span>
                    International Submissions</span>
                    </div>
                    
                </div>
            </div>
            </div>
            <?php require_once("components/cards.php");?>

            <div class="flags">
                <div class="flag-content">
                <h1>Post Your Casting Job</h1>
                <p>Find your talent from <br><strong>Caribbeans Connects.</strong> Post Your Job <br>Today</p>
                <button>Register Now</button>
                </div>
            </div>

            <div class="instructions const-padding">
                <h1>Instructions</h1>
                <div class="sub-instruction">
                    <div class="instruction">
                        <h1>Register</h1>
                        <p>Click on Register and buy our premium membership to get all accessibility. </p>
                    </div>
                    <div class="instruction">
                        <h1>Caribbeansconnects Members</h1>
                        <p>You will be our Caribbeansconnects Members after purchasing membership.</p>
                    </div>
                    <div class="instruction">
                        <h1>Post Job</h1>
                        <p>Successfully logged in you will options for “Post Job” and “Manage Profile” </p>
                    </div>
                </div>
            </div>
        </section>
        <footer>
        <?php require_once("footer.php");?>

        </footer>
    </div>


<!-- SCRIPT  -->
    <script>
        var cities = 
        [
    { "id": 0, "text": "Addis Ababa" },
    { "id": 1, "text": "Bangkok" },
    { "id": 2, "text": "Beijing" },
    { "id": 3, "text": "Berlin" },
    { "id": 4, "text": "Bogotá" },
    { "id": 5, "text": "Brisbane" },
    { "id": 6, "text": "Buenos Aires" },
    { "id": 7, "text": "Cairo" },
    { "id": 8, "text": "Chicago" },
    { "id": 9, "text": "Houston" },
    { "id": 10, "text": "Johannesburg" },
    { "id": 11, "text": "Lagos" },
    { "id": 12, "text": "Lima" },
    { "id": 13, "text": "Los Angeles" },
    { "id": 14, "text": "Madrid" },
    { "id": 15, "text": "Melbourne" },
    { "id": 16, "text": "Mexico City" },
    { "id": 17, "text": "Montreal" },
    { "id": 18, "text": "Mumbai" },
    { "id": 19, "text": "Nairobi" },
    { "id": 20, "text": "New York City" },
    { "id": 21, "text": "Paris" },
    { "id": 22, "text": "Perth" },
    { "id": 23, "text": "Rome" },
    { "id": 24, "text": "São Paulo" },
    { "id": 25, "text": "Santiago" },
    { "id": 26, "text": "Seattle" },
    { "id": 27, "text": "Seoul" },
    { "id": 28, "text": "Toronto" },
    { "id": 29, "text": "Tokyo" }
];

var gender = [
    { "id": 01, "text": "Male"},
    {"id": 02, "text": "Female"},
];
var compensation = [
    { "id": 01, "text": "Paid"},
    {"id": 02, "text": "No Pay"},
];
$(".prompt").select2({
    data:cities,
    width: "100%",
});
$(".gender").select2({
    data:gender,
    width: "100%",
});
$(".compensation").select2({
    data:compensation,
    width: "100%",
});
    </script>
</body>
<script src="https://kit.fontawesome.com/9c88be4b7a.js" crossorigin="anonymous"></script>



</html>