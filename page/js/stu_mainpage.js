$(document).ready(function() {
	//Self infomation
	var SELF_username = document.getElementById("SELF_username").value;
	var SELF_year = document.getElementById("SELF_year").value;
	var SELF_major = document.getElementById("SELF_major").value;
	var SELF_department = document.getElementById("SELF_department").value;
	var proj_name = '';
	var proj_req_year = '';
	var proj_req_major = '';
	var proj_req_depart = '';

  var categorys = [];

  $('#mydepartment').on('change',function() {
    var sel_dep = $(this).val();
    if(sel_dep){
      $.ajax({
        type: 'POST',
        url: '../php/updateMajorByDept_mainpage.php',
        data: ({select_department: sel_dep}),
        success:function(html) {
          $('#mymajor').html(html);
        }
      });
    }
  });

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

  $('#filter-form').on('reset', function() {
    $('#mycategory option:selected').each(function() {
      $(this).prop('selected', false);
    })
    $('#mycategory').multiselect('refresh');
    location.reload();
  });

  $('#applyFilter').click(function(e){
    var keyword = document.getElementById("name_keyword").value;
    var department = document.getElementById("mydepartment").value;
    var year = document.getElementById("myyear").value;
    var major = document.getElementById("mymajor").value;
    var designation = document.getElementById("mydesignation").value;
    var type = document.getElementById("mytype").value;

    if(keyword==''&&department=='ALL'&&year=='ALL'
        &&major=='ALL'&&designation=='ALL'&&type=='ALL'&&categorys.length==0) {
    } else {
      document.getElementById("table-content").innerHTML = "";

      if(type == 'Project') {
        filterProject(keyword, department, major, year, designation, categorys);
      } else if(type == 'Course') {
        filterCourse(keyword, designation, categorys);
      } else {
        filterCourse(keyword, designation, categorys);
        filterProject(keyword, department, major, year, designation, categorys);
      } 

      e.preventDefault();
    }
  });

  function filterProject(keyword, department, major, year, designation, category) {
    $.ajax({
      type: 'POST',
      url: '../php/stu_filterProject.php',
      data: {"keyword":keyword, "department":department, "major":major,
              "year":year, "designation":designation, "category":category},
      success: function(html) {
        $('#table-content').append(html); 
      }
    });
  }

  function filterCourse(keyword, designation, category) {
    $.ajax({
      type: 'POST',
      url: '../php/stu_filterCourse.php',
      data: {"keyword":keyword, "designation":designation, "category":category},
      success: function(html) {
        $('#table-content').append(html);
      }
    });
  }

  $('#courseModal').modal({
  	keyboard: true,
  	backdrop: "static",
  	show: false,

  }).on('show',function(){
  	var getIdFromRow = $(event.target).closest('tr');
  	$(this).find('#courseDiscription').html($('<b> Order Id selected: ' + getIdFromRow  + '</b>'));
  });


  $("#table-content").on("click", "tr", function(e) {
    var tableData = $(this).children("td").map(function() {
        return $(this).text();
    }).get();
    var name = $.trim(tableData[0]);
    var type = $.trim(tableData[1]);
    console.log(name);
    console.log(type);

    if(type == 'Project') {
    	$("#projectModal").modal("show");
    	$.ajax({
        type: 'POST',
        url: '../php/getProjectInfo.php',
        data: {"projectName": name},
        success: function(data) {
        	var projectObj = jQuery.parseJSON(data);
        	var projectObj_len = projectObj.length;

        	$('#projectTitle').html($('<h4 class="modal-title" id="projectTitle">' + '<b>PROJECT: </b>' + projectObj[0].Pname + '</h4>'));

        	var category_sentence = '';
        	for (i = 0; i < parseInt(projectObj_len); i++) {
        		if(i == 0)
        			category_sentence += '<p><b>Category:</b> ' + projectObj[i].CcategoryName;
        		else{
        			category_sentence += ', ' + projectObj[i].CcategoryName;
        		}  
        	}
          category_sentence += '</p>';

        	var requirements_sentence = '<p><b>Requirements: </b> ';
        	if(projectObj[0].Prequirement_Department != 'ALL') {
        		requirements_sentence += projectObj[0].Prequirement_Department + ' students only; ';
        	}
        	if(projectObj[0].Prequirement_Major != 'ALL') {
        		requirements_sentence += projectObj[0].Prequirement_Major + ' students only; ';
        	}
        	if(projectObj[0].Prequirement_Year != 'ALL') {
        		requirements_sentence += projectObj[0].Prequirement_Year + ' students only; ';
        	}                      	
        	requirements_sentence += '</p>';
                	
        	$('#projectContent').html($('<p><b>Advisor: </b> ' + projectObj[0].AdvName  + ' ('+projectObj[0].AdvEmail+')'+'</p>'
                            					+ '<p><b>Description: </b> ' + projectObj[0].Description  + '</p>'
                            					+ '<p><b>Designation: </b> ' + projectObj[0].PDName  + '</p>'
                            					+ category_sentence
                            					+ requirements_sentence
                            					+ '<p><b>Estimate number of students: </b> ' + projectObj[0].PEstNumStu  + '</p>'));

        	proj_req_depart = projectObj[0].Prequirement_Department;
        	proj_req_year = projectObj[0].Prequirement_Year;
        	proj_req_major = projectObj[0].Prequirement_Major;
        	proj_name = name;
        }
      });
    } else {
    	$("#courseModal").modal("show");
    	$.ajax({
        type: 'POST',
        url: '../php/getCourseInfo.php',
        data: {"courseName": name},
        success: function(data) {
        	var courseObj = jQuery.parseJSON(data);
        	var courseObj_len = courseObj.length;
        	$('#courseTitle').html($('<h4 class="modal-title" id="courseTitle">' + '<b>COURSE: </b>' + courseObj[0].CourseNumber + '</h4>'));
        	var category_sentence = '';
        	for (i = 0; i < parseInt(courseObj_len); i++) {
        		if(i == 0) {
        			category_sentence += '<p><b>Category: </b> ' + courseObj[i].CategoryName;
            } else {
        			category_sentence += ', ' + courseObj[i].CategoryName;
        		}  
        	}
        	category_sentence += '</p>';
        	$('#courseContent').html($('<p><b>Course Name: </b> ' + courseObj[0].Name  + '</p>'
                          						+ '<p><b>Instructor: </b> ' + courseObj[0].Instructor  + '</p>'
                          						+ '<p><b>Desination: </b> ' + courseObj[0].CDName  + '</p>'
                          						+ category_sentence 
                          						+ '<p><b>Estimate number of students:</b> ' + courseObj[0].CEstNumStu  + '</p>'));
        }
      });
    }
  });

	$('#btnApply').click(function(){
	 	$("#applyModal").modal("show");
	 	var applyFlag = 'YES';
	 	var apply_sentence = '';
	 
	 	if(SELF_year != proj_req_year && proj_req_year != 'ALL') {
	 		applyFlag = 'NO';
	 		apply_sentence += '<p>Year restrication</p>'
	 	}

	 	if(SELF_department != proj_req_depart && proj_req_depart != 'ALL') {
	 		applyFlag = 'NO';
	 		apply_sentence += '<p>Department restrication</p>'
	 	}

	 	if(SELF_major != proj_req_major && proj_req_major != 'ALL') {
	 		applyFlag = 'NO';
	 		apply_sentence += '<p>Major restrication</p>'
	 	}

	 	if(applyFlag == 'YES'){
      console.log(SELF_username, SELF_year, SELF_major);
	 		$.ajax({
        type: 'POST',
        url: '../php/application_submit.php',
        data: {"userName": SELF_username, "projectName": proj_name},
        success: function(data) {
          console.log(data);
          if(data == 1) {
			 		  $('#applyTitle').html($('<p><b>Application Succeed</b></p>'));
			 		  $('#applyContent').html($('<p>Your application has been submitted.</p>'));                      		
          } else {
            $('#applyTitle').html($('<p><b>Application ERROR</b></p>'));
            $('#applyContent').html($('<p>You have applied this course.</p>'));     
          }
		 	  }
		 	});
	 	} else {
	 		$('#applyTitle').html($('<p><b>Application ERROR</b></p>'));
	 		$('#applyContent').html($('<p><b>Error reason</b></p>'
	 								+ apply_sentence));
	 	}
	});
});