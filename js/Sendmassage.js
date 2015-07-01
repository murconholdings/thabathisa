function Validate(email,subject,message,PostForm,displayblock) {
    
    if(email.value === " " || email.value === "Email" || subject.value === "Subject" || message.value === "Message"){
        
        
    }
 
    else {
         var count=0;
              for(var i=0; i<email.value.length; i++){
                  if(email.value.toString()[i] === "@"){
                      count++;
                      if(count >1){
                          break;
                      }
                  }
              }  
        if(count === 1){
            
            PostForm.submit();      
        }
        else{
         displayblock.innerHTML = "please enter correct email address";
         displayblock.style.color = 'red';
            alert("please enter correct email address");
        }
       
    }
 
}

function checkForm(email,subject,message,displayblock){
     if(email.value === "" || email.value === "Email" || subject.value === "Subject" || message.value === "Message"){
         var display ="";
         var dspmsg ="";
         if(email.value === "Email"){
             display +="Email";
             dspmsg+="<li>enter email</li>";
             email.style.borderColor ='red';
         }
         else{
              var count=0;
              for(var i=0; i<email.value.length; i++){
                  if(email.value.toString()[i] === "@"){
                      count++;
                      if(count >1){
                          break;
                      }
                  }
              }
              if(count >1){
                 dspmsg+="<li>Please Enter Correct Email Address</li>"; 
                 display +="enter correct Email";
              }
              
         }
        
         if(subject.value === "Subject"){
             display +=" ,Subject";
             dspmsg+="<li>enter Subject</li>";
             subject.style.borderColor ='red';
         }
         
         if(message.value === "Message"){
             display +=" ,message";
             dspmsg+="<li>enter Message</li>";
             message.style.borderColor ='red';
         }
         displayblock.innerHTML = dspmsg;
         displayblock.style.color = 'red';
        alert("Fill "+ display + " on the form");
        
       
    }
}

function checkControl(control){
    if(control.value === "" || control.value === "Email" || control.value === "Subject" || control.value === "Message"){
        control.style.borderColor='red';
    }
    else{
       control.style.borderColor='';
    }
}
function MoveDown(){
    window.scrollTo(0, document.body.scrollHeight || document.documentElement.scrollHeight);
}

