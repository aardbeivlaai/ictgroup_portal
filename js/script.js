$(document).ready(function(){
	$('.menu-bar').click(function(){
		$('.menu ul').slideToggle(1000);
	});

	//console.log('before validate');

	var v = $("#booking-form").validate({
		rules: {
		  bf_totalGuests: {
			required: true
		  },
		  bf_date: {
			required: true
		  },
		  bf_time: {
			required: true
		  },
		  bf_hours: {
			required: true
		  },
		  bf_fullname: {
			required: true
		  },
		  bf_email: {
			required: true,
			email: true
		  }
   
		},
		errorElement: "span",
		errorClass: "error",
		errorPlacement: function(error, element) {
			  error.insertBefore(element); 
		}
  });

  //console.log('after validate');
  
  $(".next-btn1").click(function() {
	  if (v.form()) {
		$(".tab-pane").hide();
		$("#step2").fadeIn(1000);
		$('.progressbar-dots').removeClass('active');
		$('.progressbar-dots:nth-child(1)').addClass('done');
		$('.progressbar-dots:nth-child(2)').addClass('active');
	  }
   });
  $(".next-btn2").click(function() {
	  if (v.form()) {
		$(".tab-pane").hide();
		$("#step3").fadeIn(1000);
		$('.progressbar-dots').removeClass('active');
		$('.progressbar-dots:nth-child(2)').addClass('done');
		$('.progressbar-dots:nth-child(3)').addClass('active');
	  }
  });
  
  $(".submit-btn").click(function() {
	if (v.form()) {
	  $("#loader").show();
	   setTimeout(function(){
		 $("#booking-form").html("<h2>Your message was sent successfully. Thanks! We'll be in touch as soon as we can, which is usually like lightning (Unless we're sailing or eating tacos!).</h2>");
	   }, 1000);
	  return false;
	}
  });

  $('.quiz-label').click(function(){
	  $('.next-btn').addClass('active');
  });
  $('.next-btn').click(function(){
	  $('.next-btn').removeClass('active');
  });
})

	

window.addEventListener('DOMContentLoaded', () => {
	const listItems = document.querySelectorAll('.checkLi');
  
	listItems.forEach(li => {
	  li.addEventListener('click', () => {
		li.classList.toggle('checkLi--colored');
	  })
	})
  }); 