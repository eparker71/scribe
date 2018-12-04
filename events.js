$(document).ready(function () {
  ga('send', 'pageview');
  console.log("event: pageview");
  $('#home').click(function () {
    ga('send', 'event', 'Home', 'click', 'user clicked Home');
    console.log("event: Home");
  });
  $('#license').click(function () {
    ga('send', 'event', 'License', 'click', 'user clicked License');
    console.log("event: License");
  });
  $('#training').click(function () {
    ga('send', 'event', 'Training', 'click', 'user clicked Training');
    console.log("event: Training");
  });
  $('#help').click(function () {
    ga('send', 'event', 'Help', 'click', 'user clicked Help');
    console.log("event: Help");
  });
  $('#piechart').click(function () {
    ga('send', 'event', 'PieChart', 'click', 'user clicked PieChart');
    console.log("event: PieChart");
  });
  $('.addCard').click(function () {
    ga('send', 'event', 'AddLicense', 'click', 'user clicked AddLicense');
    console.log("event: AddLicense");
  });

  $('.card').click(function () {
    ga('send', 'event', 'EditLicense', 'click', 'user clicked EditLicense');
    console.log("event: EditLicense");
  });

});
