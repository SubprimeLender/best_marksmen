$(document).ready(function(){
    $("#blitzcrank").click(function(){
        $("#thumbs1 img").removeClass("border-highlight");
        $("#blitzcrank").addClass("border-highlight");
    });
     $("#soraka").click(function(){
        $("#thumbs1 img").removeClass("border-highlight");
        $("#soraka").addClass("border-highlight");
    });
      $("#zyra").click(function(){
        $("#thumbs1 img").removeClass("border-highlight");
        $("#zyra").addClass("border-highlight");
    });
    $("#sona").click(function(){
        $("#thumbs2 img").removeClass("border-highlight");
        $("#sona").addClass("border-highlight");
    });
     $("#leona").click(function(){
        $("#thumbs2 img").removeClass("border-highlight");
        $("#leona").addClass("border-highlight");
    });
      $("#lux").click(function(){
        $("#thumbs2 img").removeClass("border-highlight");
        $("#lux").addClass("border-highlight");
    });
    $("#morgana").click(function(){
        $("#thumbs3 img").removeClass("border-highlight");
        $("#morgana").addClass("border-highlight");
    });
     $("#taric").click(function(){
        $("#thumbs3 img").removeClass("border-highlight");
        $("#taric").addClass("border-highlight");
    });
      $("#nautilus").click(function(){
        $("#thumbs3 img").removeClass("border-highlight");
        $("#nautilus").addClass("border-highlight");
    });
});
$(document).ready(function(){
    $("#showforward1").click(function(){
        $("#section1").slideUp();
        $("#section2").slideDown();
    });
    $("#showback1").click(function(){
        $("#section2").slideUp();
        $("#section1").slideDown();
    });
    $("#showforward2").click(function(){
        $("#section2").slideUp();
        $("#section3").slideDown();
    });
    $("#showback2").click(function(){
        $("#section3").slideUp();
        $("#section2").slideDown();
    });
});