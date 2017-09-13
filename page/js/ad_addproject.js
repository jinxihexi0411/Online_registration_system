$(document).ready(function() {
  var categorys = [];
  var projectName;
  var advisorName;
  var advisorEmail;
  var description;
  var designation;
  var prjectStuNum;
  var req_department;
  var req_major;
  var req_year;

  $('#mycategory').multiselect({
    buttonWidth: '190 px',
    // includeSelectAllOption: true,
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

  $('#req_department').on('change',function() {
    var sel_dep = $(this).val();
    if(sel_dep){
      $.ajax({
        type: 'POST',
        url: '../php/updateMajorByDept_addProject.php',
        data: ({select_department: sel_dep}),
        success:function(html) {
        $('#req_major').html(html);
        }
      });
    }
  }); 

  $('#form-input').on('submit',function (e) {
    projectName = document.getElementById("projectName").value;
    advisorName = document.getElementById("advisorName").value;
    advisorEmail = document.getElementById("advisorEmail").value;
    description = document.getElementById("description").value;
    designation = document.getElementById("designation").value;
    prjectStuNum = document.getElementById("prjectStuNum").value;
    req_department = document.getElementById("req_department").value;
    req_major = document.getElementById("req_major").value;
    req_year = document.getElementById("req_year").value;

    if(categorys.length == 0) {
        alert("Select at least one categoty!");
    }

    if(!isEmpty(projectName) && !isEmpty(advisorName) && !isEmpty(advisorEmail)
        && !isEmpty(description) && !isEmpty(designation)
        && !isEmpty(prjectStuNum) && categorys.length != 0) {
      $("#projectModal").modal("show");

      $('#projectTitle').html($('<h4 class="modal-title" id="courseTitle">' + '<b>ADD PROJECT REVIEW: </b>' + projectName + '</h4>'));
            
      var category_sentence = '';
      for (i = 0; i < categorys.length; i++) {
        if(i == 0) {
          category_sentence += '<p><b>Category: </b> ' + categorys[i];
        } else {
          category_sentence += ', ' + categorys[i];
        }
      }
      category_sentence += '</p>';

      var requirements_sentence = '<p><b>Requirements: </b> ';
      if(req_department != 'ALL') {
        requirements_sentence += req_department + ' students only; ';
      }
      if(req_major != 'ALL') {
        requirements_sentence += req_major + ' students only; ';
      }
      if(req_year != 'ALL') {
        requirements_sentence += req_year + ' students only; ';
      }                       
      requirements_sentence += '</p>';

      $('#projectContent').html($('<p><b>Advisor: </b> ' + advisorName  + ' (' + advisorEmail + ')' + '</p>'
                              + '<p><b>Description: </b> ' + description  + '</p>'
                              + '<p><b>Designation: </b> ' + designation  + '</p>'
                              + category_sentence
                              + requirements_sentence
                              + '<p><b>Estimate number of students: </b> ' + prjectStuNum  + '</p>'));
    }  
     
    e.preventDefault();

  });
  $('#btn-confirm').click(function(){
    
    projectName = document.getElementById("projectName").value;
    advisorName = document.getElementById("advisorName").value;
    advisorEmail = document.getElementById("advisorEmail").value;
    description = document.getElementById("description").value;
    designation = document.getElementById("designation").value;
    prjectStuNum = document.getElementById("prjectStuNum").value;
    req_department = document.getElementById("req_department").value;
    req_major = document.getElementById("req_major").value;
    req_year = document.getElementById("req_year").value;

    $.ajax({
      type: 'POST',
      url: '../php/ad_addProject.php',
      data: {"projectName":projectName, "advisorName":advisorName, "advisorEmail":advisorEmail,
              "description":description, "designationName":designation, "estimateNumStu":prjectStuNum, 
              "category":categorys,"req_department":req_department, "req_major":req_major,
              "req_year":req_year},
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