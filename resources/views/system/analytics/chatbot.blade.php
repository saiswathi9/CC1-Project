<div class="chatbox chatbox--tray chatbox--empty"> 
    <div class="chatbox__title"> 
        <h5>
            <a href="#">VIDURA Advisor</a>
        </h5> 

        <!-- minimize button -->
        <button class="chatbox__title__tray"> 
            <span></span> 
        </button> 
        <!-- minimize button ends --> 

        <!-- Close button which closes the chatbot --> 
        <button class="chatbox__title__close"> 
            <span> 
                <svg viewBox="0 0 12 12" width="12px" height="12px"> 
                <line stroke="#FFFFFF" x1="11.75" y1="0.25" x2="0.25" y2="11.75"></line> 
                <line stroke="#FFFFFF" x1="11.75" y1="11.75" x2="0.25" y2="0.25"></line> 
                </svg> 
            </span> 
        </button> 
        <!-- close button ends --> 
    </div> 

    <div class="chatbox__body" id="chatbox_body_content"> 
        <!-- content here is dynamically updated by java script as user chats -->
        <!-- <p class="botResponse">Bot response asfasdfa a sfa fasdf asdf asf asf a afasdf asfasf asdf safasf asfasd as df asfa 01</p>
        <p class="userText">user text asf asasd fasdf asdf asf asdfasfasfasdfas fas dfasfasd fasdfasdfas as fs 01</p>
        <p class="botResponse">Bot response 02</p>
        <p class="userText">user text 02</p> -->
        <!-- <div class="suggestions">
            <div class="sugg-title">Suggestions:</div>
            <span class="sugg-options">My Name is Arjun</span>
            <span class="sugg-options">Weather</span>
        </div> -->
    </div> 

    <form class="chatbox__credentials"> 
        <div class="form-group"> 
            <label for="inputName">Name:</label> 
            <input type="text" class="form-control" id="inputName" required> 
        </div> 
        <div class="form-group"> 
            <label for="inputEmail">Email:</label> 
            <input type="text" class="form-control" id="inputEmail" required> 
        </div> 
        <button type="submit" class="btn btn-success btn-block">Enter Chat</button> 
    </form> 

    <input type="hidden" id="chat_context" name="conversation_id" value="{}"> 
    <input type="text" id="user_input" name="user_input" class="chatbox__message" placeholder="Write here"></input> 
</div>