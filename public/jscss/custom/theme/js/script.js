	$(document).ready(function() {

	    $('input:image[name=image1]').click(function() {
	        if ($(this).val() == 1) {
	            document.getElementById("selection1").style.display = "block";
                document.getElementById("button1").style.display = "block";
            } else {
	            document.getElementById("selection1").style.display = "none";
               
	        }

	        if ($(this).val() == 2) {
	            document.getElementById("selection2").style.display = "block";
                document.getElementById("button1").style.display = "none";
	        } else {
	            document.getElementById("selection2").style.display = "none";
               
	        }
	        if ($(this).val() == 3) {
	            document.getElementById("selection3").style.display = "block";
                document.getElementById("button1").style.display = "block";
	        } else {
	            document.getElementById("selection3").style.display = "none";
                 
	        }


	    });
	});



$(document).ready(function() {

	    $('input:radio[name=optradio]').click(function() {
	        if ($(this).val() == 1) {
	        	document.getElementById("single-checkbox").style.display = "block";
	        } else {
	        	document.getElementById("single-checkbox").style.display = "none";
	        }

	        if ($(this).val() == 2) {

	            document.getElementById("connectivity").style.display = "block";
	             
	        } else {
	            document.getElementById("connectivity").style.display = "none";
	             
	        }

	      

	    });
	});



	$(document).ready(function() {

	    $('input:radio[name=optradio1]').click(function() {
	       
		    if ($(this).val() == 4) {
	            document.getElementById("weight").style.display = "block";
	        } else {
	            document.getElementById("weight").style.display = "none";
	        }
	    });
	});

    $(document).ready(function() {

        $('input:radio[name=inj_mod]').click(function() {
           
            if ($(this).val() == 1) {
                document.getElementById("curr_inj").style.display = "block";
            } else {
                document.getElementById("curr_inj").style.display = "none";
            }

             if ($(this).val() == 2) {
                document.getElementById("synapse_inj").style.display = "block";
            } else {
                document.getElementById("synapse_inj").style.display = "none";
            }
        });
    });


     $(document).ready(function() {

        $('input:radio[name=geometry]').click(function() {
           
            if ($(this).val() == 1) {
                document.getElementById("single").style.display = "block";
            } else {
                document.getElementById("single").style.display = "none";
            }

             if ($(this).val() == 2) {
                document.getElementById("double").style.display = "block";
            } else {
                document.getElementById("double").style.display = "none";
            }

             if ($(this).val() == 3) {
                document.getElementById("triple").style.display = "block";
            } else {
                document.getElementById("triple").style.display = "none";
            }
        });
    });



$(document).ready(function() {

	    $('input:image[name=arrowdown]').click(function() {
	        if ($(this).val() == 1) {

	            if (document.getElementById("advanced").style.display === "none") {
	                document.getElementById("advanced").style.display = "block";
	            } else {
	                document.getElementById("advanced").style.display = "none";
	            }

	        }

	    });

	});



$(document).ready(function() {

$("select").change(function() {
$('input.single-checkbox').on('click', function(evt) {
	var e = document.getElementById("typesDropdown");
	var limit = e.options[e.selectedIndex].text;
   if($(this).siblings(':checked').length >= limit) {
	   this.checked = false;
   }

	 
    
    
    if ($('#c1').is(":checked") && limit ==1 )
	{
  	document.getElementById("one").style.display = "block";
    document.getElementById("two").style.display = "block";
    } else 
    {
    document.getElementById("one").style.display = "none";
    document.getElementById("two").style.display = "none";
    } 

    if ($('#c2').is(":checked") && limit ==1 )
	{
  	document.getElementById("three").style.display = "block";
    document.getElementById("four").style.display = "block";
    } else 
    {
    document.getElementById("three").style.display = "none";
    document.getElementById("four").style.display = "none";
    } 

    if ($('#c3').is(":checked") && limit ==1 )
	{
  	document.getElementById("five").style.display = "block";
    document.getElementById("six").style.display = "block";
    } else 
    {
    document.getElementById("five").style.display = "none";
    document.getElementById("six").style.display = "none";
    }

    if ($('#c4').is(":checked") && limit ==1 )
	{
  	document.getElementById("seven").style.display = "block";
    document.getElementById("eight").style.display = "block";
    } else 
    {
    document.getElementById("seven").style.display = "none";
    document.getElementById("eight").style.display = "none";
    }

    if ($('#c5').is(":checked") && limit ==1 )
	{
  	document.getElementById("nine").style.display = "block";
    document.getElementById("ten").style.display = "block";
    } else 
    {
    document.getElementById("nine").style.display = "none";
    document.getElementById("ten").style.display = "none";
    } 

    if ($('#c1').is(":checked") && $('#c2').is(":checked") && limit ==2 )
	{
  	document.getElementById("eleven").style.display = "block";
    document.getElementById("twelwe").style.display = "block";
    document.getElementById("thirteen").style.display = "block";
    } else 
    {
    document.getElementById("eleven").style.display = "none";
    document.getElementById("twelwe").style.display = "none";
    document.getElementById("thirteen").style.display = "none";
    }

    if ($('#c1').is(":checked") && $('#c3').is(":checked") && limit ==2 )
	{
  	document.getElementById("14").style.display = "block";
    document.getElementById("15").style.display = "block";
    document.getElementById("16").style.display = "block";
    } else 
    {
    document.getElementById("14").style.display = "none";
    document.getElementById("15").style.display = "none";
    document.getElementById("16").style.display = "none";
    }

    if ($('#c1').is(":checked") && $('#c4').is(":checked") && limit ==2 )
	{
  	document.getElementById("17").style.display = "block";
    document.getElementById("18").style.display = "block";
    document.getElementById("19").style.display = "block";
    } else 
    {
    document.getElementById("17").style.display = "none";
    document.getElementById("18").style.display = "none";
    document.getElementById("19").style.display = "none";
    }

    if ($('#c1').is(":checked") && $('#c5').is(":checked") && limit ==2 )
	{
  	document.getElementById("20").style.display = "block";
    document.getElementById("21").style.display = "block";
    document.getElementById("22").style.display = "block";
    } else 
    {
    document.getElementById("20").style.display = "none";
    document.getElementById("21").style.display = "none";
    document.getElementById("22").style.display = "none";
    }

    if ($('#c2').is(":checked") && $('#c3').is(":checked") && limit ==2 )
	{
  	document.getElementById("23").style.display = "block";
    document.getElementById("24").style.display = "block";
    document.getElementById("25").style.display = "block";
    } else 
    {
    document.getElementById("23").style.display = "none";
    document.getElementById("24").style.display = "none";
    document.getElementById("25").style.display = "none";
    }

    if ($('#c2').is(":checked") && $('#c4').is(":checked") && limit ==2 )
	{
  	document.getElementById("26").style.display = "block";
    document.getElementById("27").style.display = "block";
    document.getElementById("28").style.display = "block";
    } else 
    {
    document.getElementById("26").style.display = "none";
    document.getElementById("27").style.display = "none";
    document.getElementById("28").style.display = "none";
    }

    if ($('#c2').is(":checked") && $('#c5').is(":checked") && limit ==2 )
	{
  	document.getElementById("29").style.display = "block";
    document.getElementById("30").style.display = "block";
    document.getElementById("31").style.display = "block";
    } else 
    {
    document.getElementById("29").style.display = "none";
    document.getElementById("30").style.display = "none";
    document.getElementById("31").style.display = "none";
    }

    if ($('#c3').is(":checked") && $('#c4').is(":checked") && limit ==2 )
	{
  	document.getElementById("32").style.display = "block";
    document.getElementById("33").style.display = "block";
    document.getElementById("34").style.display = "block";
    } else 
    {
    document.getElementById("32").style.display = "none";
    document.getElementById("33").style.display = "none";
    document.getElementById("34").style.display = "none";
    }

    if ($('#c3').is(":checked") && $('#c5').is(":checked") && limit ==2 )
	{
  	document.getElementById("35").style.display = "block";
    document.getElementById("36").style.display = "block";
    document.getElementById("37").style.display = "block";
    } else 
    {
    document.getElementById("35").style.display = "none";
    document.getElementById("36").style.display = "none";
    document.getElementById("37").style.display = "none";
    }

    if ($('#c4').is(":checked") && $('#c5').is(":checked") && limit ==2 )
	{
  	document.getElementById("38").style.display = "block";
    document.getElementById("39").style.display = "block";
    document.getElementById("40").style.display = "block";
    } else 
    {
    document.getElementById("38").style.display = "none";
    document.getElementById("39").style.display = "none";
    document.getElementById("40").style.display = "none";
    }


    if ($('#c1').is(":checked") && $('#c2').is(":checked") && $('#c3').is(":checked") && limit ==3 )
	{
  	document.getElementById("41").style.display = "block";
    document.getElementById("42").style.display = "block";
    document.getElementById("43").style.display = "block";
    document.getElementById("44").style.display = "block";
    } else 
    {
    document.getElementById("41").style.display = "none";
    document.getElementById("42").style.display = "none";
    document.getElementById("43").style.display = "none";
    document.getElementById("44").style.display = "none";
    }

     if ($('#c1').is(":checked") && $('#c2').is(":checked") && $('#c4').is(":checked") && limit ==3 )
	{
  	document.getElementById("45").style.display = "block";
    document.getElementById("46").style.display = "block";
    document.getElementById("47").style.display = "block";
    document.getElementById("48").style.display = "block";
    } else 
    {
    document.getElementById("45").style.display = "none";
    document.getElementById("46").style.display = "none";
    document.getElementById("47").style.display = "none";
    document.getElementById("48").style.display = "none";
    }

     if ($('#c1').is(":checked") && $('#c2').is(":checked") && $('#c5').is(":checked") && limit ==3 )
	{
  	document.getElementById("49").style.display = "block";
    document.getElementById("50").style.display = "block";
    document.getElementById("51").style.display = "block";
    document.getElementById("52").style.display = "block";
    } else 
    {
    document.getElementById("49").style.display = "none";
    document.getElementById("50").style.display = "none";
    document.getElementById("51").style.display = "none";
    document.getElementById("52").style.display = "none";
    }

     if ($('#c1').is(":checked") && $('#c3').is(":checked") && $('#c4').is(":checked") && limit ==3 )
	{
  	document.getElementById("53").style.display = "block";
    document.getElementById("54").style.display = "block";
    document.getElementById("55").style.display = "block";
    document.getElementById("56").style.display = "block";
    } else 
    {
    document.getElementById("53").style.display = "none";
    document.getElementById("54").style.display = "none";
    document.getElementById("55").style.display = "none";
    document.getElementById("56").style.display = "none";
    }

     if ($('#c1').is(":checked") && $('#c3').is(":checked") && $('#c5').is(":checked") && limit ==3 )
	{
  	document.getElementById("57").style.display = "block";
    document.getElementById("58").style.display = "block";
    document.getElementById("59").style.display = "block";
    document.getElementById("60").style.display = "block";
    } else 
    {
    document.getElementById("57").style.display = "none";
    document.getElementById("58").style.display = "none";
    document.getElementById("59").style.display = "none";
    document.getElementById("60").style.display = "none";
    }

     if ($('#c1').is(":checked") && $('#c4').is(":checked") && $('#c5').is(":checked") && limit ==3 )
	{
  	document.getElementById("61").style.display = "block";
    document.getElementById("62").style.display = "block";
    document.getElementById("63").style.display = "block";
    document.getElementById("64").style.display = "block";
    } else 
    {
    document.getElementById("61").style.display = "none";
    document.getElementById("62").style.display = "none";
    document.getElementById("63").style.display = "none";
    document.getElementById("64").style.display = "none";
    }

     if ($('#c2').is(":checked") && $('#c3').is(":checked") && $('#c4').is(":checked") && limit ==3 )
	{
  	document.getElementById("65").style.display = "block";
    document.getElementById("66").style.display = "block";
    document.getElementById("67").style.display = "block";
    document.getElementById("68").style.display = "block";
    } else 
    {
    document.getElementById("65").style.display = "none";
    document.getElementById("66").style.display = "none";
    document.getElementById("67").style.display = "none";
    document.getElementById("68").style.display = "none";
    }

     if ($('#c2').is(":checked") && $('#c3').is(":checked") && $('#c5').is(":checked") && limit ==3 )
	{
  	document.getElementById("69").style.display = "block";
    document.getElementById("70").style.display = "block";
    document.getElementById("71").style.display = "block";
    document.getElementById("72").style.display = "block";
    } else 
    {
    document.getElementById("69").style.display = "none";
    document.getElementById("70").style.display = "none";
    document.getElementById("71").style.display = "none";
    document.getElementById("72").style.display = "none";
    }

     if ($('#c2').is(":checked") && $('#c4').is(":checked") && $('#c5').is(":checked") && limit ==3 )
	{
  	document.getElementById("73").style.display = "block";
    document.getElementById("74").style.display = "block";
    document.getElementById("75").style.display = "block";
    document.getElementById("76").style.display = "block";
    } else 
    {
    document.getElementById("73").style.display = "none";
    document.getElementById("74").style.display = "none";
    document.getElementById("75").style.display = "none";
    document.getElementById("76").style.display = "none";
    }

     if ($('#c3').is(":checked") && $('#c4').is(":checked") && $('#c5').is(":checked") && limit ==3 )
	{
  	document.getElementById("77").style.display = "block";
    document.getElementById("78").style.display = "block";
    document.getElementById("79").style.display = "block";
    document.getElementById("80").style.display = "block";
    } else 
    {
    document.getElementById("77").style.display = "none";
    document.getElementById("78").style.display = "none";
    document.getElementById("79").style.display = "none";
    document.getElementById("80").style.display = "none";
    }

});

});

});