Introduction
============
Student Information Management System can be used by education institutes to maintain the records of students easily. Achieving this objective is difficult using a manual system as the information is scattered, can be redundant and collecting relevant information may be very time consuming. All these problems are solved using this project.

Browser Support
---------------
- IE 9+
- Firefox (latest)
- Chrome (latest)
- Safari (latest)
- Opera (latest)

Full feature list
Full feature list
Multi Login
Student Management.
Teacher Management.
Attendance Management
Salary Management
Payment Management
Timetable Management
Exam Management
Petty Cash Management 
Event Management
Notification Management
Online Chat
Classroom Management
Grade Management
Subject Management
Invoice Management

Requirements
•	PHP 5.5
•	MYSQL 4.6
•	Text Editor Software
Instructions
•	Create new database on the PHPMyAdmin and give any name. Then import the std_db.sql.
•	Upload student-management-system folder to the your root folder.
•	Edit this file.  (controller/config.php)
$servername = "localhost";
$username   = "mani";
$password   = "mani@131149";
$dbname     = "std1";
•	Give your server user name, password and database name.

All Files 
Admin
Dashboard
1.	view/dashboard.php
2.	view/all_events1.php.
3.	view/show_events1.php
My Profile
1.	view/admin_profile.php
2.	model/get_admin_profile.php
3.	view/my_profile_update_form.php
4.	model/update_admin_profile.com
Classroom
1.	view/class_room.php
2.	view/show_classroom_table.php
3.	model/add_classroom.php
4.	model/get_classroom.php
5.	model/update_classroom.php
6.	model/delete_record.php
Grade
1.	view/grade.php
2.	view/show_grade_table.php  
3.	view/emarks_range_grade_update_form.php
4.	view/range_garde_text.php
5.	model/add_grade.php
6.	model/get_grade.php
7.	model/update_grade.php
8.	model/add_emarks_range_grade.php
9.	model/delete_grade.php
10.	model/update_emarks_range_grade.php
11.	model/delete_range_grade.php

Subject
1.	view/subject.php
2.	view/show_subject_table.php
3.	model/add_subject.php
4.	model/get_subject.php
5.	model/update_subject.php
6.	model/delete_record.php

Teacher
	Add Teacher
1.	view/teacher.php
2.	model/add_teacher.php
All Teacher
1.	view/all_teacher.php
2.	view/show_teacher_table.php
3.	model/get_teacher.php
4.	model/update_teacher.php
5.	view/ teacher_salary_details.php
6.	view/ teacher_salary_details2.php
7.	view/ teacher_salary_details3.php
8.	view/ add_teacher_salary.php
9.	view/ teacher_salary_invoice.php
10.	view/teacher_salary_invoice1.php
11.	view/ teacher_salary_history1.php
12.	model/delete_record.php

Subject Routing
1.	view/subject_routing.php
2.	view/show_subject_routing_table.php
3.	view/ subject_fee_text.php
4.	model/add_subject_routing.php
5.	model/get_subject_routing.php
6.	model/update_subject_routing.php
7.	model/update_subject_fee.php

Timetable
1.	view/timetable.php
2.	view/ timetable_grade_wise.php
3.	view/timetable_insert_form.php
4.	view/ timetable_update_form.php
5.	model/get_teacher_timetable.php
6.	model/get_timetable.php
7.	model/add_timetable.php
8.	model/delete_record.php




Student
	Add Student
1.	view/student.php
2.	view/show_student_subject.php       
3.	view/student_first_payment.php
4.	model/add_student.php
5.	model/add_student_ first _payment.php

All Student
1.	view/all_student.php
2.	view/student_grade_wise.php
3.	model/get_student.php
4.	model/ leave_student.php
5.	model/delete_student_grade_subject.php
6.	view/show_student_grade_subject.php
7.	view/ student_first_payment.php
8.	model/add_student_first_payment.php
9.	view/show_student_subject1.php
10.	model/add_student_subject.php
11.	view/student_exam_mark_subject_table.php
12.	view/student_exam_mark_insert_form.php
13.	view/student_exam_mark_subject_view_table.php
14.	view/student_exam_mark_view_form.php
15.	view/exam_mark_text.php
16.	model/update_student_exam_mark.php
17.	view/student_payment_details.php
18.	view/student_payment_details2.php
19.	view/student_payment_invoice.php
20.	view/student_payment_history.php
21.	view/student_payment_details3.php
22.	view/student_payment_invoice1.php

Student Payment
1.	view/student_payment.php
2.	view/student_payment_details.php
3.	view/student_payment_details4.php
4.	model/student_payment_invoice.php    
5.	modal/add_student_payment.php

Attendance 
Add Attenddance
1.	view/add_attendance.php
2.	model/add_attendance.php
3.	model/add_payment_notifications.php

Student  Attendance History
1.	view/student_attendance_history.php
2.	view/student_attendance_history1.php
3.	view/show_student2.php
4.	view/student_profile.php

Teacher  Attendance History
1.	view/teacher_attendance_history.php
2.	view/teacher_attendance_history1.php
3.	view/show_teacher2.php
4.	view/teacher_profile.php






Exam
	Create Exam
1.	view/exam.php
2.	model/get_exam.php
3.	model/update_exam.php
4.	view/show_exam_table.php
5.	model/delete_record.php
6.	model/add_exam.php

Exam Timetable
1.	view/exam_timetable.php
2.	view/exam_timetable_grade_wise.php
3.	view/exam_timetable_insert_form.php
4.	view/exam_timetable_update_form.php
5.	model/get_exam_timetable.php
6.	model/delete_record.php
7.	model/add_exam_timetable.php
8.	model/update_exam_timetable.php
Student Exam Marks
1.	view/student_exam_marks.php
2.	view/show_student.php
3.	view/student_profile.php
4.	view/student_exam_mark_insert_form1.php
5.	view/student_exam_mark_update_form.php
6.	view/my_student_exam_marks1.php
7.	model/add_student_exam_mark1.php
8.	model/update_student_exam_mark2.ph
Student Exam Marks History
1.	view/student_exam_marks_history.php
2.	view/show_student1.php
3.	view/student_profile.php
4.	view/my_student_exam_marks1.php

Petty Cash
1.	view/petty_cash.php
2.	model/approve_petty_cash.php
3.	view/petty_cash_details.php
4.	model/add_petty_cash.php
Friends
	Add Friends
1.	view/add_friends.php
2.	model/add_friends.php
3.	model/confirm_friends.php
4.	view/friend_profile.php
5.	view/find_friends.php
My Friends
1.	view/my_friends.php
2.	view/friend_profile.php
3.	view/conversation_history_admin.php
4.	model/add_message.php
5.	view/conversation_history_admin1.php
6.	model/confirm_msg_read.php
7.	view/unread_msg.php
Event
	My Events
1.	view/my_events.php
2.	view/event1.php
3.	view/show_events.php
4.	view/create_events.php
5.	model/get_events.php
6.	model/delete_record1.php
7.	model/add_events.php
All Events
1.	view/all_events.php
2.	view/all_events1.php
3.	view/show_events1.php
4.	model/get_events.php

Teacher
Dashboard
1.	view/dashboard2.php
2.	view/all_events1.php
3.	view/show_events1.php
My Profile
1.	view/teacher_profile2.php
2.	model/get_teacher_profile.php
3.	view/my_profile_update_form2.php
4.	model/ update_teacher_profile.php

My Student
1.	view/my_student.php
2.	view/student_grade_wise2.php
3.	model/get_student.php
4.	model/leave_student.php
5.	model/delete_student_grade_subject.php
6.	view/show_student_grade_subject.php
7.	view/student_first_payment.php
8.	model/add_student_first_payment.php
9.	model/get_student_subject.php
10.	view/show_student_subject1.php
11.	model/add_student_subject.php
12.	view/student_exam_mark_subject_table.php
13.	view/student_exam_mark_insert_form.php
14.	view/student_exam_mark_subject_view_table.php
15.	view/student_exam_mark_view_form.php
16.	view/exam_mark_text.php
17.	model/update_student_exam_mark.php

Subject
	My Subject
1.	view/my_subject2.php
All Subject
1.	view/all_subject2.php
Timetable
	My Timetable
1.	view/my_timetable2.php
2.	model/get_subject_timetable.php
3.	view/timetable_insert_form2.php
4.	view/timetable_update_form2.php
5.	model/get_timetable.php
6.	model/delete_record.php
7.	model/add_timetable.php
8.	model/update_timetable.php
All Timetable
1.	view/all_timetable2.php
2.	view/timetable_grade_wise2.php
Attendance
	My Attendance
1.	view/my_attendance2.php

	My Attendance History
1.	view/my_attendance_history2.php
2.	view/my_attendance_history3.php
My Salary
1.	view/my_salary.php
2.	view/teacher_salary_details3.php
3.	view/teacher_salary_invoice1.php
My Petty Cash
1.	view/my_petty_cash.php
2.	view/petty_cash_details.php
3.	model/add_petty_cash.php

 Exam
	My Student Exam Marks
1.	view/my_student_exam_marks.php
2.	view/show_my_student.php
3.	view/student_profile.php
4.	view/my_student_exam_mark_insert_form.php
5.	view/my_student_exam_mark_update_form.php
6.	view/my_student_exam_marks1.php
7.	model/add_student_exam_mark.php
8.	model/update_student_exam_mark.php

My Student Exam Marks History
1.	view/my_student_exam_marks_history.php
2.	view/student_profile.php
3.	view/my_student_exam_marks1.php
4.	view/show_my_student1.php
Exam Timetable
1.	view/exam_timetable2.php
2.	view/exam_timetable_grade_wise.php
3.	view/exam_timetable_insert_form2.php
4.	view/exam_timetable_update_form2.php
5.	model/get_exam_timetable.php
6.	model/delete_record.php


Friends
	Add Friends
1.	view/add_friends2.php
2.	view/friend_profile.php
3.	view/find_friends.php
4.	model/add_friends.php
5.	model/confirm_friends.php
My Friends
1.	view/my_friends2.php
2.	view/friend_profile.php
3.	view/conversation_history_teacher.php
4.	model/add_message.php
5.	view/conversation_history_teacher1.php
6.	model/confirm_msg_read.php
7.	view/unread_msg.php
Events
	My Events
1.	view/my_events2.php
2.	view/event1.php
3.	view/show_events.php
4.	view/create_events.php
5.	model/get_events.php
6.	model/delete_record1.php
7.	model/add_events.php

All Events
1.	view/all_events2.php
2.	view/all_events1.php
3.	view/show_events1.php
4.	model/get_events.php


Student
Dashboard
1.	view/dashboard1.php
2.	view/all_events1.php
3.	view/show_events1.php
My Profile
1.	view/my_profile.php
2.	model/get_student_profile.php
3.	view/my_profile_update_form1.php
4.	model/update_student_profile.php
Teacher
	My Teacher
1.	view/my_teacher.php
2.	view/teacher_profile1.php
All Teacher
1.	view/all_teacher1.php
2.	view/teacher_profile1.php
Subject
	My Subject
1.	view/my_subject.php

All Subject
1.	view/all_subject1.php
Timetable
	My Timetable
1.	view/my_timetable.php
All Timetable
1.	view/all_timetable1.php



Attendance
My  Attendance
1.	view/my_attendance.php
 
My  Attendance History
1.	view/my_attendance_history.php
2.	view/my_attendance_history1.php

My Payments
1.	view/my_payments.php
2.	view/student_payment_details3.php
3.	view/student_payment_invoice1.php
Exam
	My Exam Marks
1.	view/my_exam_marks.php
2.	view/my_exam_marks1.php

My Exam Marks History
1.	view/my_exam_marks_history.php
2.	view/my_exam_marks1.php
My Exam Timetable
1.	view/my_exam_timetable.php
2.	view/ my_exam_timetable1.php

Friends
	Add Friends
1.	view/add_friends1.php
2.	view/friend_profile.php
3.	view/find_friends.php
4.	model/add_friends.php
5.	model/confirm_friends.php
My Friends
1.	view/my_friends1.php
2.	view/friend_profile.php
3.	view/conversation_history_student.php
4.	model/add_message.php
5.	view/conversation_history_student1.php
6.	model/confirm_msg_read.php
7.	view/unread_msg.php

Alerts
Classroom
	Insert
1.	classroom_Duplicated  
2.	insert_Success
3.	connection_Problem
Update
1.	update_Success
2.	connection_Problem
3.	update_error1
4.	classroom_Duplicated
Delete
1.	delete_Success
2.	connection_Problem

Grade
	Insert
1.	grade_Duplicated  
2.	insert_Success
3.	connection_Problem
Update
1.	update_Success
2.	connection_Problem
3.	update_error1
4.	grade_Duplicated
Delete
1.	delete_Success
2.	connection_Problem



Subject
	Insert
1.	subject_Duplicated  
2.	insert_Success
3.	connection_Problem
Update
1.	update_Success
2.	connection_Problem
3.	update_error1
4.	subject_Duplicated
Delete
1.	delete_Success
2.	connection_Problem

Subject Routing
	Insert
1.	duplicate_Record1
2.	insert_Success
3.	connection_Problem
Update
1.	update_Success
2.	connection_Problem
3.	update_error1
4.	duplicate_Record1
Delete
1.	delete_Success
2.	connection_Problem





Teacher
	Insert
1.	index_Duplicated
2.	insert_Success
3.	connection_Problem
4.	index_email_Duplicated
5.	email_Duplicated
6.	upload_error1
Update
1.	update_Success
2.	connection_Problem
3.	upload_error1
4.	update_error1
5.	email_Duplicated
Delete
1.	delete_Success
2.	connection_Problem
Student
	Insert
1.	index_Duplicated
2.	insert_Success
3.	connection_Problem
4.	index_email_Duplicated
5.	email_Duplicated
6.	upload_error1
All Student
Update
1.	update_Success
2.	connection_Problem
3.	upload_error1
4.	update_error1
5.	email_Duplicated
Delete
1.	delete_Success
2.	connection_Problem
Timetable
	Insert
1.	duplicate_Record2
2.	insert_Success
3.	connection_Problem
Update
1.	update_Success
2.	connection_Problem
3.	update_error1
4.	duplicate_Record2
Delete
1.	delete_Success
2.	connection_Problem

