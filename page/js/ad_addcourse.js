$(document).ready(function() {
  var categorys = [];
  var instructorName;
  var courseNumber;
  var courseName;
  var designationName;
  var estimateNumStu;
  
  $('#mycategory').multiselect({
    buttonWidth: '190 px',
    numberDisplayed: 1,
    allSelectedText: 'All Selected',
  });

  $('#mycategory').on('change', function(){
    categorys = [];
    var selected = $(this).find("option:selected");
    selected.each(function(){
      categorys.push($(this).val());
    });

  });

  $('#form-input').on('submit',function (e) {
    instructorName = document.getElementById("courseinstructor").value;
    courseNumber = document.getElementById("coursenumber").value;
    courseName = document.getElementById("coursename").value;
    designationName = document.getElementById("mydesignation").value;
    estimateNumStu = document.getElementById("coursestudentNum").value;

    if(categorys.length == 0) {
        alert("Select at least one categoty!");
    }

    if(!isEmpty(instructorName) && !isEmpty(courseNumber) && !isEmpty(courseName)
        && !isEmpty(designationName) && !isEmpty(estimateNumStu) && categorys.length != 0) {
      $("#courseModal").modal("show");
      $('#courseTitle').html($('<h4 class="modal-title" id="courseTitle">' + '<b>ADD COURSE REVIEW: </b>' + courseName + '</h4>'));
            
      var category_sentence = '';
      for (i = 0; i < categorys.length; i++) {
        if(i == 0) {
          category_sentence += '<p><b>Category: </b> ' + categorys[i];
        } else {
          category_sentence += ', ' + categorys[i];
        }
      } 
      category_sentence += '</p>';
      
    $('#courseContent').html($('<p><b>Course Name: </b> ' + courseName  + '</p>'
                + '<p><b>Instructor: </b> ' + instructorName  + '</p>'
                + '<p><b>Desination: </b> ' + designationName  + '</p>'
                + category_sentence 
                + '<p><b>Estimate number of students:</b> ' + estimateNumStu  + '</p>'));
    }   
    e.preventDefault();
  });
        
  $('#btn-confirm').click(function(){
    $.ajax({
      type: 'POST',
      url: '../php/ad_addCourse.php',
      data: {"courseName": courseName, "courseNumber": courseNumber, "instructorName":instructorName,
              "designationName":designationName, "estimateNumStu":estimateNumStu, "category":categorys},
      success: function(data) {
        var result = $.trim(data);
        if(result == "good") {
          $("#confirmModal").modal("show");
          $('#confirmTitle').html($('<h4><b>Succesful</b></h4>'));
          $('#confirmContent').html($('<p>You will be redirected to main page in 3 seconds.</p>'));
          window.setTimeout(function(){
            window.location.href = "ad_mainpage.php";
          }, 3000);
        } else {
          $("#confirmModal").modal("show");
          $('#confirmTitle').html($('<h4><b>Error</b></h4>'));
          $('#confirmContent').html($('<p>'+ data + '</p>'));
        }
      }
    });
  });

  $('#btn-return').click(function(){
    window.location.href = "ad_mainpage.php";
  });
        
  function isEmpty(str){
    return !str.replace(/^\s+/g, '').length; // boolean (`true` if field is empty)
  }
});