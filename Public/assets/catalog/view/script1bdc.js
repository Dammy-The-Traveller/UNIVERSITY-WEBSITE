//Script holds registration of new applicant

$(document).ready(function(){	
	$(document).on('change','#changer_here_tag',function(){
        
        if($("#changer_here_tag option:selected").val() == 1)
        {
            $('#changer_here').find('option:contains("Masters Programs")').hide();
            $('#changer_here').find('option:contains("PhD")').hide();
        }
         else if($("#changer_here_tag option:selected").val() == 3)
        {
            $('#overlay').fadeIn(400);
            $('#MoreInfo').fadeIn(400);
        }
        else
        {
            $('#changer_here').find('option:contains("Masters Programs")').show();
            $('#changer_here').find('option:contains("PhD")').show();
        }
        
       
         
    });
    
    $('#closeInfo,#overlay').on('click',function(){
        $('#MoreInfo,#overlay').fadeOut(400);
    });
    

	
	// $('body').delegate("#changer_here","change",function(){
	// 	var tty=$(this).val();
	// 	$('.sng').hide();
	// 	if(tty=='Undergraduates'){
	// 		$('#undergraduates_oum').addClass("access_level_auth_next").show();
	// 		$('#undergraduates_main').val("");
	// 		$('#store_prog_val').val(3);
	// 		$('#masters').val("");
	// 		$('#phd').val("");
	// 		$('#masters,#phd').removeClass('access_level_auth_next');

	// 	}
	// 	else if(tty=='Masters'){
	// 		$('#masters').addClass('access_level_auth_next').show();
	// 		$('#undergraduates,#undergraduates_oum,#phd').removeClass('access_level_auth_next');
	// 		$('#store_prog_val').val(1);
			
	// 	}
	// 	else{
	// 		$('#phd').addClass('access_level_auth_next').show();
	// 		$('#undergraduates,#undergraduates_oum,#masters').removeClass('access_level_auth_next');
	// 		$('#store_prog_val').val(1);
			
	// 	}
	// })

	// $('body').delegate("#changer_here_tag","change",function(){
	// 	var dattty=$(this).val();
	// 	$('.sng').hide();

	// 	if(dattty==1)
	// 	{
	// 		$('#store_prog_val').val(2);
	// 		$('#undergraduates_main').show();
	// 		$('#changer_here').val("Undergraduates");
	// 		$('.set_my_val').val("");
	// 		$('#phd,#undergraduates_oum,#masters').removeClass('access_level_auth_next');
			
	// 	}
	// 	else if(dattty==2)
	// 	{
	// 		$('#changer_here').val("");
	// 		$('#show_me_level_oum').show();
	// 		$('#undergraduates_main').val("");

	// 	}
	// 	else
	// 	{
	// 		//window.location.href="http://localhost/ait/prospective-student.php?mode=1";
	// 	}
	// })



    
    









	$('body').delegate("#goto_next_guy","click",function(biggy){
		biggy.preventDefault();
		 var dataValid = true;
      	
	     $('.access_level_auth').each(function()
	     {
	      var cur = $(this);
	     
	     if ($.trim(cur.val()) === '')
	     {  
	     cur.css("border","1px solid red");
	      $('#all_field_error').fadeIn().html("Please fill the required fields");
	     setTimeout(function(){
	     	cur.css("border","1px solid #c5ced5");
	     	 $('#all_field_error').fadeOut();
	     },6000)
	     dataValid = false;
	     }
	     });		
      			
      				//submit form for verification
      			$('.first_giuy_togggle').hide();
      			$('.next_guy_toggler').fadeIn(700);
      			$("#idLabel").html("STEP 1: Continuation");
      			

	})

	$('body').delegate("#prev_guy_call","click",function(queen){
		queen.preventDefault();
		$('.next_guy_toggler').hide();
		$('.first_giuy_togggle').fadeIn(600);
	})

	// $('body').delegate("#finish_qur","click",function(biggy){
	// 	biggy.preventDefault();
	// 	 var dataValid = true;

      
    // //   if($("#idPhotoVal").val().length !== 0){
    //          $('.access_level_auth_next').each(function()
	//      {
	//       var cur = $(this);
	     
	//      if ($.trim(cur.val()) == '')
	//      {  
	//      cur.css("border","1px solid red");
	//       $('#all_field_error').fadeIn().html("Please fill the required fields");
	//      setTimeout(function(){
	//      	cur.css("border","1px solid #c5ced5");
	//      	 $('#all_field_error').fadeOut();
	//      },6000)
	//      dataValid = false;
	//      }
	//      });
	//       if(dataValid)
	//      {
	//      	$('#form_sessioner').submit();


	//      }
    // //   }else{
    // //       alert("Please Upload Passport Photo to proceed");
    // //   }
      
	// })



    //Update Starts here
    
   
    
    
   


	






	








      $('#changer_here_tag').change(function(){
       var selected = $('option:selected',this).val();  
        if(selected === "1"){
           $("#masters").hide();
            $("#phd").hide();
         $("#show_me_level_oum").show();
        var dropdown = $("#programtype");
            $("#programtype option[value='Masters']").text("Masters Programs").remove();
             $("#programtype option[value='PhD']").text("PhD Programs").remove();
             $("#programtype option[value='Undergraduates']").text("Undergraduates Programs").remove();
             dropdown.append($("<option value='Undergraduates' />").val("Undergraduates").text("Undergraduates Programs"))
        }else if(selected === "2"){

        
         $("#undergraduates_main").hide();
        $("#show_me_level_oum").show();
        var dropdown = $("#programtype");

           $("#programtype option[value='Undergraduates']").text("Undergraduates Programs").remove();
            dropdown.append($("<option value='Undergraduates' />").val("Undergraduates-oum").text("Undergraduates Programs"))
            dropdown.append($("<option value='Masters' />").val("Masters").text("Masters Programs"))
            dropdown.append($("<option value='PhD' />").val("PhD").text("PhD Programs"))
        }
    });





       $('#programtype').change(function(){ 
        var schoolType = $("#changer_here_tag").val();
        var selected = $('option:selected',this).val(); 

         if(schoolType == '1'){
           $("#undergraduates_oum").hide();
          if(selected == 'Undergraduates'){
              $("#undergraduates_main").show();
                $("#masters").hide();
                   $("#phd").hide();

         }
         }else if(schoolType == '2'){
           // $("#undergraduates_main").hide();
           if(selected == 'Undergraduates-oum'){
             $("#undergraduates_main").hide();
            
              $("#undergraduates_oum").show();
                $("#masters").hide();
                   $("#phd").hide();
          }else if(selected == 'Masters'){
                $("#masters").show();
                   $("#undergraduates_main").hide();
                 $("#undergraduates_oum").hide();
                  $("#phd").hide();

          }else if(selected == 'PhD'){
                $("#phd").show();
                  $("#undergraduates_main").hide();
                  $("#undergraduates_oum").hide();
                $("#masters").hide();
          }
         }



    });




})