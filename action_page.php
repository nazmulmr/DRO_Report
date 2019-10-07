

<?php
$connect = mysqli_connect('localhost','root','','report');
//include('database_connection.php');

session_start();
/*if($_SESSION['id'] == NULL){
    header('Location:login.php');
}*/


extract($_POST);
$year = $_POST["year"];
$month = $_POST["month"];
$upzillaCount = $_POST["upzillaCount"];
$somiteeCount = $_POST["somiteeCount"];
$currentMonthAmount = $_POST["currentMonthAmount"];
$currentYearAmount = $_POST["currentYearAmount"];
$currentMonthDisburse = $_POST["currentMonthDisburse"];
$currentYearDisburse = $_POST["currentYearDisburse"];
$currentMonthCollection = $_POST["currentMonthCollection"];
$currentYearCollection = $_POST["currentYearCollection"];
$currentDue = $_POST["currentDue"];
$OverDue = $_POST["OverDue"];
$totalOwe = $_POST["totalOwe"];
$somitteMeeting = $_POST["somitteMeeting"];
$bmAttendingMeeting = $_POST["bmAttendingMeeting"];
$joAttendingMeeting = $_POST["joAttendingMeeting"];
$faAttendingMeeting = $_POST["faAttendingMeeting"];


$sql = "INSERT INTO `dsodata` (`year`, `month`, `upzillaCount`, `somiteeCount`, `currentMonthAmount`, `currentYearAmount`, `currentMonthDisburse`, `currentYearDisburse`, `currentMonthCollection`, `currentYearCollection`, `currentDue`, `OverDue`, `totalOwe`, `somitteMeeting`, `bmAttendingMeeting`, `joAttendingMeeting`, `faAttendingMeeting`) 
VALUES ('$year', '$month', '$upzillaCount', '$somiteeCount', '$currentMonthAmount', '$currentYearAmount', '$currentMonthDisburse', '$currentYearDisburse', '$currentMonthCollection', 
'$currentYearCollection', '$currentDue', '$OverDue', '$totalOwe', '$somitteMeeting', '$bmAttendingMeeting', '$joAttendingMeeting', '$faAttendingMeeting')";
//$sql = "INSERT INTO dsodata (Lastname, Firstname, Address, City)
//VALUES ('John', 'Doe', 'john@example', 'john@example')";
echo $year;
if ($connect->query($sql) === TRUE) {
	//header("location:home.php");
} else {
    echo "Error: " . $sql . "<br>" . $connect->error;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="colorlib.com">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>উপজেলা ভিত্তিক মাসিক প্রতিবেদন</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="main">

    <div class="container">
        <h2>উপজেলা ভিত্তিক মাসিক প্রতিবেদন</h2>
        <form method="POST" id="signup-form" class="signup-form">
            <h3>
                <span class="title_text">প্রতিবেদন  প্রাক তথ্য</span>
            </h3>
            <fieldset>
                <div class="fieldset-content1">
                    <div class="form-select">
                        <label>বছর সিলেক্ট করুন</label>
                        <select required="true" name="year" id = "year">
                            <option value = "1">বছর সিলেক্ট করুন</option>
                            <option value = "2019">2019</option>
                            <option value = "2018">2018</option>
                            <option value = "2017">2017</option>
                            <option value = "2016">2016</option>
                            <option value = "2015">2015</option>
                            <option value = "2014">2014</option>
                        </select>
                    </div>

                    <div class="form-select">
                        <label>মাস সিলেক্ট করুন</label>
                        <select required="true" name="month" id = "month">
                            <option value = "1"> মাস সিলেক্ট করুন</option>
                            <option value = "January">January</option>
                            <option value = "February">February</option>
                            <option value = "March">March</option>
                            <option value = "April">April</option>
                            <option value = "April">May</option>
                            <option value = "June">June</option>
                            <option value = "July">July</option>
                            <option value = "August">August</option>
                            <option value = "September">September</option>
                            <option value = "October">October</option>
                            <option value = "November">November</option>
                            <option value = "December">December</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="উপজেলার সংখ্যা" class="form-label">উপজেলার সংখ্যা</label>
                        <input type="number" name="upzillaCount" id="upzillaCount" placeholder="উপজেলার সংখ্যা" />
                    </div>

                    <div class="form-group">
                        <label for="সমিতির সংখ্যা" class="form-label">সমিতির সংখ্যা</label>
                        <input type="number" name="somiteeCount" id="somiteeCount" placeholder="সমিতির সংখ্যা" />
                    </div>

                </div>
                <div class="fieldset-footer">
                    <span>Step 1 of 3</span>
                </div>
            </fieldset>

            <h3>
                <span class="title_text">সঞ্চয় ও ঋন কার্যক্রমের প্রতিবেদন</span>
            </h3>
            <fieldset>

                <div class="fieldset-content2">
                    <div class="form-group">
                        <label for="বর্তমান মাস সংগৃহীত সঞ্চয়" class="form-label">বর্তমান মাস সংগৃহীত সঞ্চয়</label>
                        <input type="number" name="currentMonthAmount" id="currentMonthAmount" placeholder="বর্তমান মাস সংগৃহীত সঞ্চয়" />
                    </div>

                    <div class="form-group">
                        <label for="বর্তমান বছরে সংগৃহীত সঞ্চয়" class="form-label">বর্তমান বছরে সংগৃহীত সঞ্চয়</label>
                        <input type="number" name="currentYearAmount" id="currentYearAmount" placeholder="বর্তমান বছরে সংগৃহীত সঞ্চয়" />
                    </div>

                    <div class="form-group">
                        <label for="বর্তমান মাসে বিতরণকৃত ঋন" class="form-label">বর্তমান মাসে বিতরণকৃত ঋন</label>
                        <input type="number" name="currentMonthDisburse" id="currentMonthDisburse" placeholder="বর্তমান মাসে বিতরণকৃত ঋন" />
                    </div>

                    <div class="form-group">
                        <label for="বর্তমান বছরে বিতরণকৃত ঋন" class="form-label">বর্তমান বছরে বিতরণকৃত ঋন</label>
                        <input type="number" name="currentYearDisburse" id="currentYearDisburse" placeholder="বর্তমান বছরে বিতরণকৃত ঋন" />
                    </div>

                    <div class="form-group">
                        <label for="বর্তমান মাসে ঋন আদায়" class="form-label">বর্তমান মাসে ঋন আদায়</label>
                        <input type="number" name="currentMonthCollection" id="currentMonthCollection" placeholder="বর্তমান মাসে ঋন আদায়" />
                    </div>

                    <div class="form-group">
                        <label for="বর্তমান বছরে ঋন আদায়" class="form-label">বর্তমান বছরে ঋন আদায়</label>
                        <input type="number" name="currentYearCollection" id="currentYearCollection" placeholder="বর্তমান বছরে ঋন আদায়" />
                    </div>

                    <div class="form-group">
                        <label for="চলতি বকেয়া" class="form-label">চলতি বকেয়া</label>
                        <input type="number" name="currentDue" id="currentDue" placeholder="চলতি বকেয়া" />
                    </div>
                    <div class="form-group">
                        <label for="এক বছরের বেশি খেলাপী ঋন" class="form-label">এক বছরের বেশি খেলাপী ঋন</label>
                        <input type="number" name="OverDue" id="OverDue" placeholder="এক বছরের বেশি খেলাপী ঋন" />
                    </div>

                    <div class="form-group">
                        <label for="মোট পাওনা ঋন" class="form-label">মোট পাওনা ঋন</label>
                        <input type="number" name="totalOwe" id="totalOwe" placeholder="মোট পাওনা ঋন" />
                    </div>


                </div>

                <div class="fieldset-footer">
                    <span>Step 2 of 3</span>
                </div>

            </fieldset>

            <h3>
                <span class="title_text">উঠান বৈঠকের প্রতিবেদন</span>
            </h3>
            <fieldset>
                <div class="fieldset-content3">

                    <div class="form-group">
                        <label for="সমিতির বৈঠকের সংখ্যা" class="form-label">সমিতির বৈঠকের সংখ্যা</label>
                        <input type="number" name="somitteMeeting" id="somitteMeeting" placeholder="সমিতির বৈঠকের সংখ্যা" />
                    </div>

                    <div class="form-group">
                        <label for="শাখা ব্যবস্থাপক কর্তৃক পরিদর্শিত উঠান বৈঠকের সংখ্যা" class="form-label">শাখা ব্যবস্থাপক কর্তৃক পরিদর্শিত সংখ্যা</label>
                        <input type="number" name="bmAttendingMeeting" id="bmAttendingMeeting" placeholder="শাখা ব্যবস্থাপক কর্তৃক পরিদর্শিত উঠান বৈঠকের সংখ্যা" />
                    </div>

                    <div class="form-group">
                        <label for="জুনিয়র অফিসার কর্তৃক পরিদর্শিত উঠান বৈঠকের সংখ্যা" class="form-label">জুনিয়র অফিসার কর্তৃক পরিদর্শিত সংখ্যা</label>
                        <input type="number" name="joAttendingMeeting" id="joAttendingMeeting" placeholder="জুনিয়র অফিসার কর্তৃক পরিদর্শিত উঠান বৈঠকের সংখ্যা" />
                    </div>

                    <div class="form-group">
                        <label for="মাঠ সহকারী কর্তৃক পরিদর্শিত উঠান বৈঠকের সংখ্যা" class="form-label">মাঠ সহকারী কর্তৃক পরিদর্শিত সংখ্যা</label>
                        <input type="number" name="faAttendingMeeting" id="faAttendingMeeting" placeholder="মাঠ সহকারী কর্তৃক পরিদর্শিত উঠান বৈঠকের সংখ্যা" />
                    </div>

                    <td><input type="submit" name="btn" value="Save"></td>
                    <div class="fieldset-footer">
                        <span>Step 3 of 3</span>
                    </div>
            </fieldset>

        </form>
    </div>

</div>

<!-- JS -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
<script src="vendor/jquery-steps/jquery.steps.min.js"></script>
<script src="vendor/minimalist-picker/dobpicker.js"></script>
<script src="vendor/jquery.pwstrength/jquery.pwstrength.js"></script>
<script src="js/main.js"></script>
</body>

</html>
