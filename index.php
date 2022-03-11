<?php
    $currentPage="index";
    $title="Home | VD Training";
    $pathHead="res/";
    $pageRedirect="";
    session_start();
    include("res/php/_connect.php");
    include("res/php/_authcheck.php");
    include("res/php/header.php"); 
    include("res/php/navbar.php");
    include("res/php/functions.inc.php");
?>


<!-- Main Content -->
<div class="container">

<div class="row text-center pt-5">
    <div class="col-md-12 text-center">
        <h1>Welcome to VD Training</h1>
        <p>
            A CPD Enrollment platform.
        </p>
    </div>
</div>
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 pt-4">
        </div>

        <!-- Upcoming Courses -->
        <div class="col-sm-12 col-md-6 col-lg-6 pt-4">
            <div class="card">
                <div class="card-header">
                    <h4>My Upcoming Courses</h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Starts on</th>
                                <th>Course</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                
                                $sql = "SELECT * FROM `tblCourses` WHERE `EndDate` >= CURDATE() AND `CUID` = (SELECT `CUID` FROM `tblUserCourses` WHERE `UUID` = ?) ORDER BY `StartDate` ASC";
                                $stmt = $mysqli->prepare($sql);
                                $stmt->bind_param("s", $_SESSION['UserID']);
                                $stmt->execute();
                                $result = $stmt->get_result();
                                while($row = $result->fetch_assoc()) {
                                    echo "<td>" . getFriendlyDate($row['StartDate']) . "</td>";
                                    echo "<td>" . $row['CourseTitle'] . "</td>";
                                    echo "<td>" . $row['DeliveryMethod'] . "</td>";
                                }
                            ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End Upcoming Courses -->
    </div>

</div>
<!-- End Main Content -->


<?php
    include("res/php/footer.php");
?>