$(document).ready(function () {

  $('.training-card').click(function () {
    document.getElementById('addtraining').style.display = 'block';
  });

  $('#add-training-submit').click(function () {
    var source = document.getElementById("training-card-template").innerHTML;
    var template = Handlebars.compile(source);

    var context = {
      cards: [{
        name: "Art for teaching",
        date: "Jul. 31th, 2023"
      }]
    };

    var html = template(context);
    $("#first-training-card").after(html);
    $("#new-training-card").click(function () {
      document.getElementById('addtraining').style.display = 'block';
    });
    document.getElementById('addtraining').style.display = 'none'
  });

  $('#add-license-submit').click(function () {
    var source = document.getElementById("license-card-template").innerHTML;
    var template = Handlebars.compile(source);

    var context = {
      cards: [{
        name: "Administrator",
        date: "Jul. 31th, 2023"
      }]
    };

    var html = template(context);
    $("#first-license-card").after(html);
    document.getElementById('addlic').style.display = 'none'
  });

});
