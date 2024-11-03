<?php define('MAIN_INCLUDED', 1); ?>
<?php
$_arguments = array();
if (count($_POST) > 0) {
    $_arguments = $_POST;
} else if (count($_GET) > 0) {
    $_arguments = $_GET;
}

// Initialize $page with a default value of null
$page = null;

if (isset($_arguments["do"]) && ($_arguments["do"] != "")) {
    switch ($_arguments["do"]) {
        case "add_classroom": //MSK-000143-add_classroom
            $page = "model/add_classroom.php";
            break;
        case "add_grade": //MSK-000143-add_grade
            $page = "model/add_grade.php";
            break;
        case "add_subject": //MSK-000143-add_subject
            $page = "model/add_subject.php";
            break;
        case "add_teacher": //MSK-000143-add_teacher
            $page = "model/add_teacher.php";
            break;
        case "update_teacher": //MSK-000143-update_teacher
            $page = "model/update_teacher.php";
            break;
        case "add_subject_routing": //MSK-000143-add_subject_routing
            $page = "model/add_subject_routing.php";
            break;
        case "add_timetable": //MSK-000143-add_timetable
            $page = "model/add_timetable.php";
            break;
        case "update_timetable": //MSK-000143-update_timetable
            $page = "model/update_timetable.php";
            break;
        case "add_student": //MSK-000143-add_student
            $page = "model/add_student.php";
            break;
        case "update_student": //MSK-000143-update_student
            $page = "model/update_student.php";
            break;
        case "add_student_payment": //MSK-000143-add_student_payment
            $page = "model/add_student_payment.php";
            break;
        case "add_exam": //MSK-000143-add_exam
            $page = "model/add_exam.php";
            break;
        case "add_emarks_range_grade": //MSK-000143-add_emarks_range_grade
            $page = "model/add_emarks_range_grade.php";
            break;
        case "add_exam_timetable": //MSK-000143-add_exam_timetable
            $page = "model/add_exam_timetable.php";
            break;
        case "update_exam_timetable": //MSK-000143-update_exam_timetable
            $page = "model/update_exam_timetable.php";
            break;
        case "add_student_exam_mark": //MSK-000143-add_student_exam_mark
            $page = "model/add_student_exam_mark.php";
            break;
        case "add_student_exam_mark1": //MSK-000143-add_student_exam_mark1
            $page = "model/add_student_exam_mark1.php";
            break;
        case "update_student_exam_mark": //MSK-000143-update_student_exam_mark
            $page = "model/update_student_exam_mark.php";
            break;
        case "update_student_exam_mark2": //MSK-000143-update_student_exam_mark2
            $page = "model/update_student_exam_mark2.php";
            break;
        case "add_teacher_salary": //MSK-000143-add_teacher_salary
            $page = "model/add_teacher_salary.php";
            break;
        case "add_attendance": //MSK-000143-add_attendance
            $page = "model/add_attendance.php";
            break;
        case "user_login": //MSK-000143-user_login
            $page = "model/user_login.php";
            break;
        case "add_petty_cash": //MSK-000143-add_petty_cash
            $page = "model/add_petty_cash.php";
            break;
        case "add_events": //MSK-000143-add_events
            $page = "model/add_events.php";
            break;
        case "update_events": //MSK-000143-update_events
            $page = "model/update_events.php";
            break;
        case "update_admin_profile": //MSK-000143-update_admin_profile
            $page = "model/update_admin_profile.php";
            break;
        case "update_teacher_profile": //MSK-000143-update_teacher_profile
            $page = "model/update_teacher_profile.php";
            break;
        case "update_student_profile": //MSK-000143-update_student_profile
            $page = "model/update_student_profile.php";
            break;
        case "update_parents_profile": //MSK-000143-update_parents_profile
            $page = "model/update_parents_profile.php";
            break;
        case "add_group_message": //MSK-000143-add_group_message
            $page = "model/add_group_message.php";
            break;
        default:
            $page = null;
            break;
    }
}

// Handle cases where $page is not set correctly
if ($page !== null && file_exists($page)) {
    require $page;
} else {
    // Redirect or display an error message if the page is not found or $page is empty
    header("Location: /school-management-system/school-management-system/view/login.php");
    exit; // Stop further script execution
}
?>
