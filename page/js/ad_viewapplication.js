$(document).ready(function() {
  $('#btn-accept').click(function (e) {
    var result_sentence = '';
    $('#viewapplication_table').find('input[type="checkbox"]:checked').each(function () {
      var projectName = $(this).closest('tr').children()[1].textContent;
      var applicantName = $(this).closest('tr').children()[5].textContent;
      $.ajax({
        type: 'POST',
        url: '../php/ad_acceptProject.php',
        data: {"projectName":projectName, "applicantName":applicantName},
        success: function(data) {
        }
      });
    });
    location.reload();
  });

  $('#btn-reject').click(function (e) {
    var result_sentence = '';
    $('#viewapplication_table').find('input[type="checkbox"]:checked').each(function () {
      var projectName = $(this).closest('tr').children()[1].textContent;
      var applicantName = $(this).closest('tr').children()[5].textContent;
      $.ajax({
        type: 'POST',
        url: '../php/ad_rejectProject.php',
        data: {"projectName":projectName, "applicantName":applicantName},
        success: function(data) {
        }
      });
    });
    location.reload();
  });

  $('#btn-return').click(function(){
    window.location.href = "ad_mainpage.php";
  });

  $('#btn-refresh').click(function(){
    console.log("here");
    location.reload();
  }); 

});