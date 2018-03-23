$(document).ready(function(){
    $("button").click(function(){
        $("#demo").load("mytext.txt");
    });

    $("button").click(function(){
        $(".myClass").load("mytext.txt");
    });
});