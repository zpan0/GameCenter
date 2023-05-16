window.onload = function(){ 
    var playing = false;
    var score;
    var action;
    var timeremaining;
    var correctAnswer;
    
    // get username of user for later highscores input
    function getCookie(name) {
        var dc = document.cookie;
        var prefix = name + "=";
        var begin = dc.indexOf("; " + prefix);
        if (begin == -1) {
            begin = dc.indexOf(prefix);
            if (begin != 0) return null;
        }
        else
        {
            begin += 2;
            var end = document.cookie.indexOf(";", begin);
            if (end == -1) {
            end = dc.length;
            }
        }
        return decodeURI(dc.substring(begin + prefix.length, end));
    }
    
    document.getElementById("start").onclick = function(){
            playing = true;
            //show all game elements
            gameStart();
            score = 0;
            
            document.getElementById("scorevalue").innerHTML = score;
            //show count
            show("timeremaining");
            timeremaining = 60;
                    
            document.getElementById("timeremainingvalue").innerHTML = timeremaining;
                    
            //start count
            startCountdown();
            
            //generate quetion
            generateQA();
            
    }
    document.getElementById("reset").onclick = function(){
        if (playing == true){
            location.reload();
        }
    }
    
    
    for(i=1; i<5; i++){
        document.getElementById("box"+i).onclick = function(){
            if (playing == true){
                if(this .innerHTML == correctAnswer){
                    //increase score
                    score = score + 2;
                    document.getElementById("scorevalue").innerHTML = score;
                    hide("wrong");
                    show("correct");
                    setTimeout(function(){
                        hide("correct");
                    }, 1000);
                    generateQA();
                }else{
                        //wrong answer
                        if (score == 0){
                            score;
                        }else{
                            score = score - 1;
                        }
                        document.getElementById("scorevalue").innerHTML = score;
                        hide("correct");
                        show("wrong");
                        setTimeout(function(){
                        hide("wrong");
                    }, 1000);
                }		
            }
        }
    }
    
    //start count
    function startCountdown(){
        action = setInterval(function(){
            timeremaining -= 1;
            
            document.getElementById("timeremainingvalue").innerHTML = timeremaining;
            if(timeremaining == 0){
                stopCountdown();
                show("gameOver");
                //game over			
                document.getElementById("gameOver").innerHTML = 
                    "<p>Game over!</p><p>Your score is " + score + ".</p>";
                    insertScore();
                    hide("timeremaining");
                    hide("correct");
                    hide("wrong");
                    //playing = false;
                    
                //document.getElementById("start").innerHTML = "START GAME";
            }
        }, 1000);
    }
    
    // insert score into database
    function insertScore(){
        user = getCookie("username");
        $.post("./score_Ajax.php", 
            {"username" : user, 
            "game" : 'Addition Game',
            "score" : score}
        );
        return(false);
    }
    
    //stop count
    function stopCountdown() {
        clearInterval(action);
    }
    
    //hide
    function hide(Id){
        document.getElementById(Id).style.display = "none";
    }
    
    //show
    function show(Id) {
        document.getElementById(Id).style.display = "block";
    }
    
    //hide game elements
    function hideGame(){
        hide("choices");
        hide("question");
        hide("instruction");
        hide("score");
        hide("reset");
    }
    hideGame();
    
    // start the game
    function gameStart(){
        show("choices");
        show("question");
        show("instruction");
        show("score");
        hide("title");
        //hide game over
        hide("gameOver");
            
        //hide start btn, show reset btn
        show("reset");
        hide("start");
    }
    
    //guestion
    function generateQA(){
        var x = 1+ Math.round(100*Math.random());
        var y = 1+ Math.round(100*Math.random());
        correctAnswer = x+y;
        
        document.getElementById("question").innerHTML = x + "+" + y;
        var correctPosition = 1+ Math.round(3*Math.random());
            
        document.getElementById("box"+correctPosition).innerHTML = correctAnswer;//correct answer
            
        //wrong answers
        var answers = [correctAnswer];
            
        for(i=1; i<5; i++){
            if (i != correctPosition) {
                var wrongAnswer;
                do{
                    wrongAnswer = (1+
                        Math.round(9*Math.random()))*(1+
                        Math.round(9*Math.random()));//wrong answer
                    
                }while(answers.indexOf(wrongAnswer)>-1)
                    
                document.getElementById("box"+i).innerHTML = wrongAnswer;			
                answers.push(wrongAnswer);
            }
        }
    }
    
};

    