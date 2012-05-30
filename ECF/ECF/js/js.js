$(function() {
    $('.slideshow').before('<div id="heronav" class="heronav">').cycle({
        fx:     'fade',
        speed:  'fast',
        timeout: 6000,
        pager:  '#heronav',
        prev:   '#previo', 
  		next:   '#nextio', 
        before: function() { if (window.console) console.log(this.src); }
    });
});
$(document).ready(function(){
				$('.boxgrid.captionfull').hover(function(){
					$(".cover", this).stop().animate({top:'0'},{queue:false,duration:500});
				}, function() {
					$(".cover", this).stop().animate({top:'-143px'},{queue:false,duration:500});
				});

			});

                $(function () {
                        var tabContainers = $('div.tabs > div');
                        tabContainers.hide().filter(':first').show();
                        
                        $('div.tabs ul.tabNavigation a').click(function () {
                                tabContainers.hide();
                                tabContainers.filter(this.hash).show();
                                $('div.tabs ul.tabNavigation a').removeClass('selected');
                                $(this).addClass('selected');
                                return false;
                        }).filter(':first').click();
                });
                
        
        $().ready(function() {
	
	$("#contactform").validate({
		rules: {
			name: "required",
			subject: "required",
			message: "required",
			email: {
				required: true,
				email: true
			}
		},
		messages: {
			name: "Please enter your name",
			subject: "Please enter a subject",
			message: "Please enter a message",
			email: "Please enter a valid email address"
		}
	});
});

$().ready(function() {
	
	$("#applicationform1").validate({
		invalidHandler: function(e, validator) {
			var errors = validator.numberOfInvalids();
			if (errors) {
				var message = errors == 1
					? 'You missed 1 field. It has been highlighted below'
					: 'You missed ' + errors + ' fields.  They have been highlighted below:';
				$("p.erroroo").html(message);
				$("p.erroroo").show();
			} else {
				$("p.erroroo").hide();
			}
		},

		rules: {
			email: {
				required: true,
				email: true
			},
			a3_organisation_activities: {
      				required: true,
     				 maxlength: 800
   				 }
		}	});
		$("#applicationform2").validate({
		invalidHandler: function(e, validator) {
			var errors = validator.numberOfInvalids();
			if (errors) {
				var message = errors == 1
					? 'You missed 1 field. It has been highlighted below'
					: 'You missed ' + errors + ' fields.  They have been highlighted below:';
				$("p.erroroo").html(message);
				$("p.erroroo").show();
			} else {
				$("p.erroroo").hide();
			}
		},
		rules: {
			email: {
				required: true,
				email: true
			},
			b1_project_title: {
      				required: true,
     				 maxlength: 160
   				 },
			b2_project_details: {
      				required: true,
     				 maxlength: 1200
   				 }
		}	});
		$("#applicationform3").validate({
		invalidHandler: function(e, validator) {
			var errors = validator.numberOfInvalids();
			if (errors) {
				var message = errors == 1
					? 'You missed 1 field. It has been highlighted below'
					: 'You missed ' + errors + ' fields.  They have been highlighted below:';
				$("p.erroroo").html(message);
				$("p.erroroo").show();
			} else {
				$("p.erroroo").hide();
			}
		},
		rules: {
			email: {
				required: true,
				email: true
			},
			c3_senior_management: {
      				required: true,
     				 maxlength: 400
   				 }
		}	});
		$("#applicationform4").validate({
		invalidHandler: function(e, validator) {
			var errors = validator.numberOfInvalids();
			if (errors) {
				var message = errors == 1
					? 'You missed 1 field. It has been highlighted below'
					: 'You missed ' + errors + ' fields.  They have been highlighted below:';
				$("p.erroroo").html(message);
				$("p.erroroo").show();
			} else {
				$("p.erroroo").hide();
			}
		},
		rules: {
			email: {
				required: true,
				email: true
			}
		}	});
		$("#applicationform5").validate({
		invalidHandler: function(e, validator) {
			var errors = validator.numberOfInvalids();
			if (errors) {
				var message = errors == 1
					? 'You missed 1 field. It has been highlighted below'
					: 'You missed ' + errors + ' fields.  They have been highlighted below:';
				$("p.erroroo").html(message);
				$("p.erroroo").show();
			} else {
				$("p.erroroo").hide();
			}
		},
		rules: {
			email: {
				required: true,
				email: true
			},
			e1_previous_application: {required :true},
			e1_successful: {required :true}

		}	});
});
