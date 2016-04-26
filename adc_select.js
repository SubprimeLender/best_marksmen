// Listen for any click event on a .support_selector_image class
$(".support_selector_image").on('click', function () {

    // get the target group for the clicked image
    var targetSupportGroup = $(this).data('support-group');

    // Reset all highlights
    $(targetSupportGroup).removeClass("border-highlight");

    // Only set the border-highlight for the current clicked element which you can simply access through 'this'
    $(this).addClass("border-highlight");

    // Now we find the target hidden input field
    var inputTarget = $(this).data('target'); // gets value from the data-target field

    // Get the current clicked element's name attribute
    var selectedSupport = $(this).attr('name');

    // Next store the value in the hidden input field
    $(inputTarget).val(selectedSupport);

    // Debugging
    console.log(inputTarget);
    console.log(selectedSupport);
    console.log($(inputTarget).val());
});

$("#showforward1").on('click', function () {
    $("#section1").slideUp();
    $("#section2").slideDown();
});
$("#showback1").on('click', function () {
    $("#section2").slideUp();
    $("#section1").slideDown();
});
$("#showforward2").on('click', function () {
    $("#section2").slideUp();
    $("#section3").slideDown();
});
$("#showback2").on('click', function () {
    $("#section3").slideUp();
    $("#section2").slideDown();
});
