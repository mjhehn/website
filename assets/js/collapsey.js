$('#academiaCollapse').on('show.bs.collapse', function () {
  // do something… like hide the other one
  $('#funCollapse').collapse('hide')
})

$('#funCollapse').on('show.bs.collapse', function () {
  // do something… like hide the other one
  $('#academiaCollapse').collapse('hide')
})

$("#academiaCollapse").on('show.bs.collapse', function(){
    $('#academiaAccordion').find(".fa").removeClass("fa-caret-down").addClass("fa-caret-up");
}).on('hide.bs.collapse', function(){
    $('#academiaAccordion').find(".fa").removeClass("fa-caret-up").addClass("fa-caret-down");
});

$("#funCollapse").on('show.bs.collapse', function(){
    $('#funAccordion').find(".fa").removeClass("fa-caret-down").addClass("fa-caret-up");
}).on('hide.bs.collapse', function(){
    $('#funAccordion').find(".fa").removeClass("fa-caret-up").addClass("fa-caret-down");
});
