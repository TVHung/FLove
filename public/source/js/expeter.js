  var kq = document.getElementById("get_two_user");
  var error_content =  document.getElementById("show_errors");
  var a =0, b= 0;//luu vi tri cac phan tu duoc danh dau

  function checked_count(){
    var checkbox =  document.getElementsByName("check_select[]"), i;
    var count_ck = 0;
    for (var i = 0; i < checkbox.length; i++){
          if (checkbox[i].checked === true){
            count_ck ++;
            if(count_ck == 1) a = i;
            if(count_ck == 2) b = i;
          }
      }
    if (count_ck != 2){
      return false;
    }else{
      return true;
    }
  }

  function checked_sex(){
    if(checked_count() === true){
      var cell1 = document.getElementById("dataTable").rows[a+1].cells;//do trong bang hang dau tien ghi tieu de
      var cell2 = document.getElementById("dataTable").rows[b+1].cells;
      if( cell1[2].innerHTML != cell2[2].innerHTML){
        return true;
      }
      else{
        return false;
      }
    }else{
      return false;
    }
  }

  function checked_state(){
    if(checked_count() === true){
      var cell1 = document.getElementById("dataTable").rows[a+1].cells;
      var cell2 = document.getElementById("dataTable").rows[b+1].cells;
      if( cell1[6].innerHTML == "Dating" || cell2[6].innerHTML == "Dating"){
        return false;
      }
      else{
        return true;
      }
    }else{
      return false;
    }
  }

  function checked_all(){
    if((checked_sex() === true) && (checked_state() === true)){
      kq.style.backgroundColor  = "green";
      error_content.innerHTML = "Sellect successful!";
      error_content.style.color = "blue";
      return true;
    }else{
      kq.style.backgroundColor = "red";
      error_content.innerHTML = "Sex must is not same and is not Dating now!";
      error_content.style.color = "red";
      return false;
    }
  }

  
    //js functions for expeter_result
    var ck_age   = document.getElementById("check_age"),
        ck_hobby = document.getElementById("check_hobby"),
        ck_add   = document.getElementById("check_address"),
        show_result = document.getElementById("result_navbar"),
        count_num_hb = 0;

    function count_hb(arr1, arr2){
        for(var i = 0; i < arr1.length; i++){
          for(var j = 0; j < arr2.length; j++){
            if(arr2[j] === arr1[i]) count_num_hb++;
          }
        }
    }

    function checked_norm(){
      var cell1_age  = document.getElementById("table_male").rows[2].cells[1].innerHTML,
           num_cell1 = Number(cell1_age),
           cell2_age = document.getElementById("table_fe_male").rows[2].cells[1].innerHTML,
           num_cell2 = Number(cell2_age),
           delta     = Math.abs(num_cell1 - num_cell2);

      var cell1_add  = document.getElementById("table_male").rows[4].cells[1].innerHTML,
          cell2_add  = document.getElementById("table_fe_male").rows[4].cells[1].innerHTML;

      var cell1_hb   = document.getElementById("table_male").rows[3].cells[1].innerHTML,
          cell2_hb   = document.getElementById("table_fe_male").rows[3].cells[1].innerHTML;
      
      var str_hb_1   = cell1_hb.split(', '),
          str_hb_2   = cell2_hb.split(', ');

      count_hb(str_hb_1, str_hb_2);
      var level = 0;

      if(ck_age.checked === true && ck_hobby.checked === false && ck_add.checked === false){
        if(delta < 10){level = 100;}
        else{level = 0;}
      }
      else if(ck_age.checked === false && ck_hobby.checked === false && ck_add.checked === true){
        if(cell1_add === cell2_add){level = 100;
        }else{level = 0;}
      }
      else if(ck_age.checked === false && ck_hobby.checked === true && ck_add.checked === false){
        if(count_num_hb == 1) level = 30;
        else if(count_num_hb == 2) level = 60;
        else if(count_num_hb >= 3) level = 100;
        else level = 0;
      }
      else if(ck_age.checked === true && ck_hobby.checked === false && ck_add.checked === true){
        if(delta < 10 && cell1_add != cell2_add){level = 70;}
        else if(delta < 10 && cell1_add == cell2_add) {level = 100;}
        else if(delta > 10 && cell1_add == cell2_add) level = 30;
      }
      else if(ck_age.checked === true && ck_hobby.checked === true && ck_add.checked === false){
        if(delta < 10){
          if(count_num_hb == 0) level = 25;
          else if(count_num_hb == 1) level = 50;
          else if(count_num_hb == 2) level = 75;
          else level = 100;
        }
        else if(delta > 10){
          if(count_num_hb == 0) level = 0;
          else if(count_num_hb == 1) level = 25;
          else if(count_num_hb == 2) level = 50;
          else level = 75;
        }
      }
      else if(ck_age.checked === false && ck_hobby.checked === true && ck_add.checked === true){
        if(cell1_add == cell2_add){
          if(count_num_hb == 0) level = 10;
          else if(count_num_hb == 1) level = 40;
          else if(count_num_hb == 2) level = 70;
          else level = 100;
        }
        else if(cell1_add != cell2_add){
          if(count_num_hb == 0) level = 0;
          else if(count_num_hb == 1) level = 30;
          else if(count_num_hb == 2) level = 60;
          else level = 90;
        }
      }
      else if(ck_age.checked === true && ck_hobby.checked === true && ck_add.checked === true){
        if(delta < 10){
          if(cell1_add == cell2_add){
            if(count_num_hb == 0) level = 25;
            else if(count_num_hb == 1) level = 50;
            else if(count_num_hb == 2) level = 75;
            else level = 100;
          }else{
            if(count_num_hb == 0) level = 20;
            else if(count_num_hb == 1) level = 45;
            else if(count_num_hb == 2) level = 70;
            else level = 95;
          }
        }else{
          if(cell1_add == cell2_add){
            if(count_num_hb == 0) level = 5;
            else if(count_num_hb == 1) level = 30;
            else if(count_num_hb == 2) level = 55;
            else level = 80;
          }else{
            if(count_num_hb == 0) level = 0;
            else if(count_num_hb == 1) level = 25;
            else if(count_num_hb == 2) level = 50;
            else level = 75;
          }
        }
      }
      else{level = 0;}
      show(level);
    }

    function show(level){
      if(level == 0){
        // console.log("hihi");
        show_result.style.backgroundColor = "red";
        show_result.innerHTML = "Compatible is : " +  level + "%";
      }
      else if(level > 0 && level < 50){
        show_result.style.backgroundColor = "yellowgreen";
        show_result.innerHTML = "Compatible is : "+ level + "%";
      }
      else if(level >= 50 && level < 80){
        show_result.style.backgroundColor = "aqua";
        show_result.innerHTML = "Compatible is : "+ level + "%";
      }else{
        show_result.style.backgroundColor = "green";
        show_result.innerHTML = "Compatible is : "+ level + "%";
      }
      show_result.style.opacity = 1;
      show_result.style.color = "white";
      count_num_hb = 0; //reset 
    }

    

   


