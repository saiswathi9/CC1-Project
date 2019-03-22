system_app.controller('chatbot-controller', function($scope, $http) {

});

$(document).ready(function() {
 	// api.ai Credentials
    // please change the accessToken to configure this to work with yoru Dialogflow agent
    // var baseUrl = "https://api.api.ai/v1/query?v=20160910&";
    var baseUrl = "https://api.dialogflow.com/v1/query?v=20170712&";
    var accessToken = "6e5c2c2195084691937add3ae219e397"; // VIDURA bot 
    // var accessToken = "553ab6017e584e0fa351952c8c9ca956"; // ashwin demo bot

    // ------------- declare and intialize chat window widget variables ----------------//
    var $chatbox = $('.chatbox'),
    $chatboxTitle = $('.chatbox__title'),
    $chatboxTitleClose = $('.chatbox__title__close'),
    $chatboxCredentials = $('.chatbox__credentials');

    // ------------
    $chatboxTitle.on('click', function() {
    	$chatbox.toggleClass('chatbox--tray');
    	if ($chatbox.hasClass('chatbox--closed')) 
    		$chatbox.removeClass('chatbox--closed'), 
    		$chatbox.addClass('chatbox--tray');

    });

    // -------------  execute this when close button is clicked   ---------------------//
    $chatboxTitleClose.on('click', function(e) {
    	e.stopPropagation();
    	$chatbox.addClass('chatbox--closed');
    });

    // -------------     ---------------------//
    $chatbox.on('transitionend', function() {
    	// if ($chatbox.hasClass('chatbox--closed')) $chatbox.remove();
    });

    // ----------- submit button function in the chatbot window -------------//
    $chatboxCredentials.on('submit', function(e) {
    	e.preventDefault();
    	$chatbox.removeClass('chatbox--empty');
    	var userName = $('#inputName').val();
    	var userEmail = $('#inputEmail').val();
		// check if user is returning user
		var isOldUser = localStorage.getItem('name');
		console.log(isOldUser);
		if (isOldUser) {
			console.log(isOldUser);
			setBotResponse('Hello! ' +userName+' welcome back to CyNeuro portal. How can I help you today?');
			console.log("old user");
		}
		else {
			setBotResponse('Hello! '+ userName+' welcome to CyNeuro portal.');
			localStorage.setItem('name', 'arjun');
			console.log("new user");
			setBotResponse('To assist you better , can you please fill this short survey to get personalized responses.\
			<a href= "https://missouri.qualtrics.com/jfe/form/SV_2aSzBCdyq7MDyAd" target="_blank" style="color:red"> Click Here to take survey </a> ');
		}
    	//setBotResponse('<span class="alert alert-warning">suggestions 01</span>');
    	//sendUserText('My name is ' + userName);
    	$("#user_input").focus();
		
    });


    // given a string set the usertext in the chat window with appropriate styling
    function setUserText(val) {
    	var userTextBefore = '<p class="userText">';
    	var userTextAfter = '</p>';
    	var userTextFinal = userTextBefore + val + userTextAfter;
    	$('#chatbox_body_content').append(userTextFinal);
        // set the value of input field to empty string
        $('#user_input').val('');
        // scroll to the bottom of the chatbot body
        $('#chatbox_body_content').scrollTop(1E10);
    }

    function setUserContext(val) {

    }

    // given a string set the bot response in the chat window with appropriate styling
    function setBotResponse(val) {
    	if($.trim(val) == '') {
    		val = 'I couldn\'t get that. Let\' try something else!';
    	} else {
    		val = val.replace(new RegExp('\r?\n','g'), '<br />');
    	}
    	var botResponseBefore = '<p class="botResponse">';
    	var botResponseAfter = '</p>';
    	var botResponseFinal = botResponseBefore + val + botResponseAfter;
    	$('#chatbox_body_content').append(botResponseFinal);
        // scroll to the bottom of the chatbot body
        $('#chatbox_body_content').scrollTop(1E10);
    }

    // send i.e ajax call to the dialog server 
    // pass the user entered text and get the response
    function sendUserText(text, context) {
        //setBotResponse('bot reply goes here');
        //setUserContext();
        $.ajax({
        	type: "GET",
        	url: baseUrl+"query="+text+"&lang=en-us&sessionId="+mysession,
        	contentType: "application/json",
        	dataType: "json",
        	headers: {
        		"Authorization": "Bearer " + accessToken
        	},
            // data: JSON.stringify({ query: text, lang: "en", sessionId: "somerandomthing" }),
            success: function(data) {
            	main(data);
                console.log(data);
            },
            error: function(e) {
            	console.log (e);
            }
        });
		
		
    }

    // execute this when user hits enter button in the chat window input
    $("#user_input").keypress(function(e){
    	var code = (e.keyCode ? e.keyCode : e.which);
    	if (code == 13){
            // get user query text
            var userText = $('#user_input').val();
            var contextJSON = $('#chat_context').val();

            // set the user text in the chat window 
            setUserText(userText);

            // send the user text to the chat server
            sendUserText(userText, contextJSON);

        } // end of if condition
    }); // end of keypress function

    // Session Init (is important so that each user interaction is unique)-----------
    var session = function() {
        // Retrieve the object from storage
        if(sessionStorage.getItem('session')) {
        	var retrievedSession = sessionStorage.getItem('session');
        } else {
            // Random Number Generator
            var randomNo = Math.floor((Math.random() * 1000) + 1);
            // get Timestamp
            var timestamp = Date.now();
            // get Day
            var date = new Date();
            var weekday = new Array(7);
            weekday[0] = "Sunday";
            weekday[1] = "Monday";
            weekday[2] = "Tuesday";
            weekday[3] = "Wednesday";
            weekday[4] = "Thursday";
            weekday[5] = "Friday";
            weekday[6] = "Saturday";
            var day = weekday[date.getDay()];
            // Join random number+day+timestamp
            var session_id = randomNo+day+timestamp;
            // Put the object into storage
            sessionStorage.setItem('session', session_id);
            var retrievedSession = sessionStorage.getItem('session');
        }
        return retrievedSession;
        // console.log('session: ', retrievedSession);
    }

    // Call Session init
    var mysession = session();

	
	

    // Main function: this method has the logic to handle differen parts of the response returned from the chat server
    function main(data) {
        console.log(data.result.fulfillment);
    	var action = data.result.action;
    	var speech = data.result.fulfillment.speech;
        // use incomplete if you use required in api.ai questions in intent
        // check if actionIncomplete = false
        var incomplete = data.result.actionIncomplete;
        if(data.result.fulfillment.messages) { // check if messages are there
            if(data.result.fulfillment.messages.length > 0) { //check if quick replies are there
            	var suggestions = data.result.fulfillment.messages[1];
            }
        }
        switch(action) {
            // case 'your.action': // set in api.ai
            // Perform operation/json api call based on action
            // Also check if (incomplete = false) if there are many required parameters in an intent
            // if(suggestions) { // check if quick replies are there in api.ai
            //   addSuggestion(suggestions);
            // }
            // break;
            default:
			if(speech==="homeNextButton")
			{
				$('#firstPageNextButton').click();
				setBotResponse("Let's get started with first step which is defining geometry of neuron");
			}
			else if(speech==="singleView1NextButton")
			{
				$('#singleView1NextButton').click();
				setBotResponse("Let's choose channels here");

			}
			else if(speech==="singleView2NextButton"){
				$('#singleView2NextButton').click();
				setBotResponse("Let's choose model here");
			}
			else if(speech==="singleView3NextButton"){
				$('#singleView3NextButton').click();
				setBotResponse("Let's choose type of visualization here");
			}
            else if(speech==="singleView4NextButton"){
				$('#singleView4NextButton').click();
				setBotResponse("You can download your job related files here!(This is optional)");
			}
			else if(speech==="singleView5NextButton"){
				$('#runButton').click();
				setBotResponse("Congratulations!! Your job has been submitted!");
			}
			else if(speech==="jupyterNotebooks")
			{
				//if(speech==="neuron,single cell"){
				setBotResponse("Here are the JupyterNotebooks I found relevant for you.");
				setBotResponse("1. ActionPotential.ipynb");
				setBotResponse("2. PassiveCell.ipynb");
				setBotResponse('<a href= "http://149.165.171.30:8000/user/sss26x/tree/notebooks/JupyterSWTutorials" target="_blank" style="color:blue"> Please click here to access Notebooks </a>');
			}
			else if(speech==="nsgNotebooks"){
					setBotResponse("Here are the JupyeNotebooks I found relevant for you.");
				setBotResponse("1. NSG_Demo.ipynb");
				setBotResponse("2. NSG_Demo-Copy1.ipynb");
				setBotResponse('<a href= "http://149.165.171.30:8000/user/sss26x/tree/notebooks/JupyterSWTutorials/NSG-R" target="_blank" style="color:blue"> Please click here to access Notebooks </a>');

				}
				
			
			else{
            setBotResponse(speech);
			}
            if(suggestions) { // check if quick replies are there in api.ai
                addSuggestion(suggestions);
            }
            break;
        }
    }


    // Suggestions -----------------------------------------------------------------------------------------
    function addSuggestion(textToAdd) {
        setTimeout(function(){
            var suggestions = textToAdd.replies;
			console.log(suggestions);
           // var suggLength = textToAdd.replies.length;

            var botResponseBefore = '<div class="suggestions"><div class="sugg-title">Suggestions:</div>';
            var botResponseAfter = '</div>';


            var val = '';
            

            // Loop through suggestions
			//if(undefined!== suggestions.length()){
            for(i=0;i<suggestions.length;i++) {
                val += '<span class="sugg-options">' + suggestions[i] + '</span>';
            }

            var botResponseFinal = botResponseBefore + val + botResponseAfter;
            $('#chatbox_body_content').append(botResponseFinal);

            // scroll to the bottom of the chatbot body
            $('#chatbox_body_content').scrollTop(1E10);

        }, 1000);
    }

    // on click of suggestions get value and send to API.AI
    $(document).on("click", ".suggestions span", function() {
        var text = this.innerText;
        setUserText(text);
        sendUserText(text);
        $('.suggestions').remove();
    });
    // Suggestions end -----------------------------------------------------------------------------------------
	
	/**************************/


	/*****************/
});