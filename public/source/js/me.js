$(document).ready(function(){

    // register + update js
    var check_state = document.getElementById("dating_alone");
    $("select#state").change(function(){
        var selectedVal_State = $(this).children("option:selected").val();
        if(selectedVal_State == "Single" || selectedVal_State == "State"){
            check_state.style.visibility = 'hidden';
        }else if( selectedVal_State == "Dating"){
            check_state.style.visibility = 'visible';
        }
    });

    var check_sex = document.getElementById("female");


    $("select#sex").change(function(){
        var selectedVal_Sex = $(this).children("option:selected").val();
        if(selectedVal_Sex == "Male"){
            check_sex.style.visibility = 'hidden';
        }
        else if( selectedVal_Sex == "Fe_Male"){
            check_sex.style.visibility = 'visible';
        }
    });

});