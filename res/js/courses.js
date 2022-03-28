$(document).ready(function () {
    $(".enrol-btn").click(function (event) {
        event.preventDefault();
        var courseID = $(this).attr("data-courseid");
        $.ajax({
            type: "post",
            url: "res/php/enrolcourse.php",
            data: {
                courseID: courseID
            },
            cache: false,
            success: function (result) {
                var Data = JSON.parse(result);
                if (Data.statusCode === 200) {
                    swal.fire({
                        icon: 'success',
                        title: 'Enrolled!',
                        text: 'You have successfully enrolled in this course.',
                    }).then(function () {
                        var CurrentValue = String($("#participantCount-" + courseID).text()).split(" ").slice(1).join("").split("/");
                        var NewValue = [parseInt(CurrentValue[0])+1, CurrentValue[1]];
                        $("a[data-courseid='"+courseID+"']").removeClass("btn-primary").removeClass("enrol-btn").addClass("btn-success").text("\u2705 Enrolled!");
                        $("a[data-courseid='"+courseID+"']").removeAttr("data-courseid");
                        $("#participantCount-" + courseID).text("Participants: " + NewValue[0] + "/" + NewValue[1]);
                        $("#progress-"+courseID).attr("Value", (parseInt($("#progress-"+courseID).attr("Value"))+1));
                    });
                }
            }

        });
    });
});