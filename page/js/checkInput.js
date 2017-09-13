//check the input of course number
function checkCourseNumber(courseNumber) {
  var reg_checkCourseNumber = /^([a-zA-Z])+(\/[a-zA-Z]+)?\s[0-9]{4}$/;
  if (courseNumber.value == '') {
    courseNumber.setCustomValidity('Require course number!');
  }
  else if (!reg_checkCourseNumber.test(courseNumber.value)) {
    courseNumber.setCustomValidity('The format of course number is not valid! Example: ME 2031 or CS/ME 1202');
  }
  else {
    courseNumber.setCustomValidity('');
  }
  return true;
}

// check the input of course number
function checkCourseName(courseName) {
  var reg_checkcourseName = /^([a-zA-z]+\s)*[a-zA-z]+$/;
  if (courseName.value == '') {
    courseName.setCustomValidity('Require course name!');
  }
  else if (!reg_checkcourseName.test(courseName.value)) {
    courseName.setCustomValidity('The course name is not valid!');
  }
  else {
    courseName.setCustomValidity('');
  }
  return true;
}

// check the input of instructor name
function checkInstructorName(instructorName) {
  var reg_checkinstructorName = /^([a-zA-z]+\s)*[a-zA-z]+$/;
  if (instructorName.value == '') {
    instructorName.setCustomValidity('Require instructor name!');
  }
  else if (!reg_checkinstructorName.test(instructorName.value)) {
    instructorName.setCustomValidity('The instructor name is not valid!');
  }
  else {
    instructorName.setCustomValidity('');
  }
  return true;
}

// check the input of estimate student number
function checkStuNum(stuNum) {
  var reg_checkStuNum = /^[0-9]+$/;
  if (stuNum.value == '') {
    stuNum.setCustomValidity('Require estimate student number!');
  }
  else if (!reg_checkStuNum.test(stuNum.value)) {
    stuNum.setCustomValidity('The estimate student number should be positive integer!');
  }
  else {
    stuNum.setCustomValidity('');
  }
  return true;
}

// check the input of estimate student number
function checkProjectName(ProjectName) {
  var reg_ProjectName = /^([a-zA-z]+\s)*[a-zA-z]+$/;
  if (ProjectName.value == '') {
    ProjectName.setCustomValidity('Require project name!');
  }
  else if (!reg_ProjectName.test(ProjectName.value)) {
    ProjectName.setCustomValidity('The project name is not valid!');
  }
  else {
    ProjectName.setCustomValidity('');
  }
  return true;
}

// check the input of estimate student number
function checkAdvisorEmail(advisorEmail) {
  var reg_advisorEmail = /^[a-zA-Z](\w)+(\.\w+)?@(\.gatech.edu)$/;
  if (advisorEmail.value == '') {
    advisorEmail.setCustomValidity('Require advisor email!');
  }
  else if (!reg_advisorEmail.test(advisorEmail.value)) {
    advisorEmail.setCustomValidity('The format of advisor email is not valid! Example: chris.saldana@gatech.edu');
  }
  else {
    advisorEmail.setCustomValidity('');
  }
  return true;
}
