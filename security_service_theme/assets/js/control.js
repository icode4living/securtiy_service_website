jQuery(document).ready(function(){
   
     jQuery("#contat-form").submit(function(e){
         e.preventDefault();
 jQuery("#subBtn").html("Please wait..");
          let email = jQuery("#email").val();
let fname = jQuery("#fname").val();
let lname = jQuery("#lname").val();
let phone = jQuery("#phone").val();
let message = jQuery("#message").val();
       //  jQuery('.modal-container').css('display','block');
      jQuery.ajax({
          type:'post',
          url:localize._ajax_url,
          //dataType:'json',
          data:{action:'save_newsletter_subscriber',
		'email':email,
		'phone':phone,
		'fname':fname,
		'lname':lname,
		'message':message,
		}
          
      }).done((resp)=>{
          cookieSetter('isSubscriber','false',360);
    //success response
   // console.log(resp);
   jQuery("#newsletter").css('display','none');
alert('Thanks for contatacting us');
      }).fail((res)=>{
          //fial response
     });
      
      });
 
 });
