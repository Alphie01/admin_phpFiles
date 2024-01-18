/*
Template Name:Admin Panel
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: two step verification Init Js File
*/

// move next
var count = 1;
$(".two-step").keyup(function(e){
    if(count == 0){
        count = 1;
    }
    if(e.keyCode === 8){
        if(count == 5){
            count = 3;
        }
        $("#digit"+count+"-input").focus();
        count--;
    }else{
        if(count > 0) {
            count++;
            $("#digit"+count+"-input").focus();
        }
    }
});