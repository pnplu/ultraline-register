$(document).ready(function(){
  $('#fname_input').bind("keyup blur", function(){
    if($(this).val().length > 0){
      $('#fname').css("top","-10px");
      $('#fname').css("color","#FFFFFF");
      $('#fname').css("font-size","1em");
      $('#fname').css("transition","all 0.5s ease");

    }
    else {
      $('#fname').css("top","10px");
      $('#fname').css("color","#8067b9");
      $('#fname').css("font-size","1.2em");
      $('#fname').css("transition","all 0.5s ease");
    }
  });
  $('#position_input').bind("keyup blur", function(){
    if($(this).val().length > 0){
      $('#position').css("top","-10px");
      $('#position').css("color","#FFFFFF");
      $('#position').css("font-size","1em");
      $('#position').css("transition","all 0.5s ease");

    }
    else {
      $('#position').css("top","10px");
      $('#position').css("color","#8067b9");
      $('#position').css("font-size","1.2em");
      $('#position').css("transition","all 0.5s ease");
    }
  });
  $('#oranization_input').bind("keyup blur", function(){
    if($(this).val().length > 0){
      $('#oranization').css("top","-10px");
      $('#oranization').css("color","#FFFFFF");
      $('#oranization').css("font-size","1em");
      $('#oranization').css("transition","all 0.5s ease");

    }
    else {
      $('#oranization').css("top","10px");
      $('#oranization').css("color","#8067b9");
      $('#oranization').css("font-size","1.2em");
      $('#oranization').css("transition","all 0.5s ease");
    }
  });
  $('#tel_input').bind("keyup blur", function(){
    if($(this).val().length > 0){
      $('#tel').css("top","-10px");
      $('#tel').css("color","#FFFFFF");
      $('#tel').css("font-size","1em");
      $('#tel').css("transition","all 0.5s ease");
    }
    else {
      $('#tel').css("top","10px");
      $('#tel').css("color","#8067b9");
      $('#tel').css("font-size","1.2em");
      $('#tel').css("transition","all 0.5s ease");
    }
  });
  $('#email_input').bind("keyup blur", function(){
    if($(this).val().length > 0){
      $('#email').css("top","-10px");
      $('#email').css("color","#FFFFFF");
      $('#email').css("font-size","1em");
      $('#email').css("transition","all 0.5s ease");
    }
    else {
      $('#email').css("top","10px");
      $('#email').css("color","#8067b9");
      $('#email').css("font-size","1.2em");
      $('#email').css("transition","all 0.5s ease");
    }
  });
});
