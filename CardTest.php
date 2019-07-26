<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="mobilecards.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Reigns</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="vertical-center" >
    <div class="container-fluid">
        <div class="row">
            <div class="level"></div>
            <div class="content">
                <!--Вопрос показывается-->
                <div class="question">
                </div>
                <div id="test">
                </div>
                <span id="coordinate">
                </span>
                <div class="image"  >
                    <div id = "image_item16" class="image__item16"  ontouchstart="mobileStart()" ontouchmove="mobileMove(event)" ontouchend="mobileEnd()"  onmousedown="mouseDown(this.id)" onmouseup="mouseUp(this.id)">
                        <img id="b_c16" class="back-card" src="images/cards/end-card.png" alt="end-card">
                        <img id="f_c16" class="front-card" src="images/cards/melisandre2.png" alt="melisandre2">
                        <div class="answer1">Agree moderately</div>
                        <div class="answer2">Disagree moderately</div>
                        <div class="answer3">Neither agree nor disagree</div>
                        <div class="ans_click161"></div>
                        <div class="ans_click162"></div>
                        <div class="ans_click163"></div>
                    </div>
                    <div id = "image_item15" class="image__item15"  ontouchstart="mobileStart()" ontouchmove="mobileMove(event)" ontouchend="mobileEnd()"  onmousedown="mouseDown(this.id)" onmouseup="mouseUp(this.id)">
                        <img id="b_c15" class="back-card" src="images/cards/end-card.png" alt="end-card">
                        <img id="f_c15" class="front-card" src="images/cards/melisandre1.png" alt="melisandre2">
                        <div class="answer1">Agree moderately</div>
                        <div class="answer2">Disagree moderately</div>
                        <div class="answer3">Neither agree nor disagree</div>
                        <div class="ans_click151"></div>
                        <div class="ans_click152"></div>
                        <div class="ans_click153"></div>
                    </div>
                    <div id = "image_item14" class="image__item14"  ontouchstart="mobileStart()" ontouchmove="mobileMove(event)" ontouchend="mobileEnd()"  onmousedown="mouseDown(this.id)" onmouseup="mouseUp(this.id)">
                        <img id="b_c14" class="back-card" src="images/cards/end-card.png" alt="end-card">
                        <img id="f_c14" class="front-card" src="images/cards/melisandre2.png" alt="melisandre2">
                        <div class="answer1">Agree moderately</div>
                        <div class="answer2">Disagree moderately</div>
                        <div class="answer3">Neither agree nor disagree</div>
                        <div class="ans_click141"></div>
                        <div class="ans_click142"></div>
                        <div class="ans_click143"></div>
                    </div>
                    <div id = "image_item13" class="image__item13"  ontouchstart="mobileStart()" ontouchmove="mobileMove(event)" ontouchend="mobileEnd()"  onmousedown="mouseDown(this.id)" onmouseup="mouseUp(this.id)">
                        <img id="b_c13" class="back-card" src="images/cards/end-card.png" alt="end-card">
                        <img id="f_c13" class="front-card" src="images/cards/melisandre1.png" alt="melisandre2">
                        <div class="answer1">Agree moderately</div>
                        <div class="answer2">Disagree moderately</div>
                        <div class="answer3">Neither agree nor disagree</div>
                        <div class="ans_click131"></div>
                        <div class="ans_click132"></div>
                        <div class="ans_click133"></div>
                    </div>
                    <div id = "image_item12" class="image__item12"  ontouchstart="mobileStart()" ontouchmove="mobileMove(event)" ontouchend="mobileEnd()"  onmousedown="mouseDown(this.id)" onmouseup="mouseUp(this.id)">
                        <img id="b_c12" class="back-card" src="images/cards/end-card.png" alt="end-card">
                        <img id="f_c12" class="front-card" src="images/cards/melisandre2.png" alt="melisandre2">
                        <div class="answer1">Agree moderately</div>
                        <div class="answer2">Disagree moderately</div>
                        <div class="answer3">Neither agree nor disagree</div>
                        <div class="ans_click121"></div>
                        <div class="ans_click122"></div>
                        <div class="ans_click123"></div>
                    </div>
                    <div id = "image_item11" class="image__item11"  ontouchstart="mobileStart()" ontouchmove="mobileMove(event)" ontouchend="mobileEnd()"  onmousedown="mouseDown(this.id)" onmouseup="mouseUp(this.id)">
                        <img id="b_c11" class="back-card" src="images/cards/end-card.png" alt="end-card">
                        <img id="f_c11" class="front-card" src="images/cards/melisandre1.png" alt="melisandre2">
                        <div class="answer1">Agree moderately</div>
                        <div class="answer2">Disagree moderately</div>
                        <div class="answer3">Neither agree nor disagree</div>
                        <div class="ans_click111"></div>
                        <div class="ans_click112"></div>
                        <div class="ans_click113"></div>
                    </div>
                    <div id = "image_item10" class="image__item10"  ontouchstart="mobileStart()" ontouchmove="mobileMove(event)" ontouchend="mobileEnd()"  onmousedown="mouseDown(this.id)" onmouseup="mouseUp(this.id)">
                        <img id="b_c10" class="back-card" src="images/cards/end-card.png" alt="end-card">
                        <img id="f_c10" class="front-card" src="images/cards/melisandre2.png" alt="melisandre2">
                        <div class="answer1">Agree moderately</div>
                        <div class="answer2">Disagree moderately</div>
                        <div class="answer3">Neither agree nor disagree</div>
                        <div class="ans_click101"></div>
                        <div class="ans_click102"></div>
                        <div class="ans_click103"></div>
                    </div>
                    <div id = "image_item9" class="image__item9"  ontouchstart="mobileStart()" ontouchmove="mobileMove(event)" ontouchend="mobileEnd()"  onmousedown="mouseDown(this.id)" onmouseup="mouseUp(this.id)">
                        <img id="b_c9" class="back-card" src="images/cards/end-card.png" alt="end-card">
                        <img id="f_c9" class="front-card" src="images/cards/melisandre1.png" alt="melisandre2">
                        <div class="answer1">Agree moderately</div>
                        <div class="answer2">Disagree moderately</div>
                        <div class="answer3">Neither agree nor disagree</div>
                        <div class="ans_click91"></div>
                        <div class="ans_click92"></div>
                        <div class="ans_click93"></div>
                    </div>
                    <div id = "image_item8" class="image__item8"  ontouchstart="mobileStart()" ontouchmove="mobileMove(event)" ontouchend="mobileEnd()"  onmousedown="mouseDown(this.id)" onmouseup="mouseUp(this.id)">
                        <img id="b_c8" class="back-card" src="images/cards/end-card.png" alt="end-card">
                        <img id="f_c8" class="front-card" src="images/cards/melisandre2.png" alt="melisandre2">
                        <div class="answer1">Agree moderately</div>
                        <div class="answer2">Disagree moderately</div>
                        <div class="answer3">Neither agree nor disagree</div>
                        <div class="ans_click81"></div>
                        <div class="ans_click82"></div>
                        <div class="ans_click83"></div>
                    </div>
                    <div id = "image_item7" class="image__item7"  ontouchstart="mobileStart()" ontouchmove="mobileMove(event)" ontouchend="mobileEnd()"  onmousedown="mouseDown(this.id)" onmouseup="mouseUp(this.id)">
                        <img id="b_c7" class="back-card" src="images/cards/end-card.png" alt="end-card">
                        <img id="f_c7" class="front-card" src="images/cards/melisandre1.png" alt="melisandre2">
                        <div class="answer1">Agree moderately</div>
                        <div class="answer2">Disagree moderately</div>
                        <div class="answer3">Neither agree nor disagree</div>
                        <div class="ans_click71"></div>
                        <div class="ans_click72"></div>
                        <div class="ans_click73"></div>
                    </div>
                    <div id = "image_item6" class="image__item6"  ontouchstart="mobileStart()" ontouchmove="mobileMove(event)" ontouchend="mobileEnd()"  onmousedown="mouseDown(this.id)" onmouseup="mouseUp(this.id)">
                        <img id="b_c6" class="back-card" src="images/cards/end-card.png" alt="end-card">
                        <img id="f_c6" class="front-card" src="images/cards/melisandre2.png" alt="melisandre2">
                        <div class="answer1">Agree moderately</div>
                        <div class="answer2">Disagree moderately</div>
                        <div class="answer3">Neither agree nor disagree</div>
                        <div class="ans_click61"></div>
                        <div class="ans_click62"></div>
                        <div class="ans_click63"></div>
                    </div>
                    <div id = "image_item5" class="image__item5"  ontouchstart="mobileStart()" ontouchmove="mobileMove(event)" ontouchend="mobileEnd()"  onmousedown="mouseDown(this.id)" onmouseup="mouseUp(this.id)">
                        <img id="b_c5" class="back-card" src="images/cards/end-card.png" alt="end-card">
                        <img id="f_c5" class="front-card" src="images/cards/melisandre1.png" alt="melisandre2">
                        <div class="answer1">Agree moderately</div>
                        <div class="answer2">Disagree moderately</div>
                        <div class="answer3">Neither agree nor disagree</div>
                        <div class="ans_click51"></div>
                        <div class="ans_click52"></div>
                        <div class="ans_click53"></div>
                    </div>
                    <div id = "image_item4" class="image__item4"  ontouchstart="mobileStart()" ontouchmove="mobileMove(event)" ontouchend="mobileEnd()"  onmousedown="mouseDown(this.id)" onmouseup="mouseUp(this.id)">
                        <img id="b_c4" class="back-card" src="images/cards/end-card.png" alt="end-card">
                        <img id="f_c4" class="front-card" src="images/cards/melisandre2.png" alt="melisandre2">
                        <div class="answer1">Agree moderately</div>
                        <div class="answer2">Disagree moderately</div>
                        <div class="answer3">Neither agree nor disagree</div>
                        <div class="ans_click41"></div>
                        <div class="ans_click42"></div>
                        <div class="ans_click43"></div>
                    </div>
                    <div id = "image_item3" class="image__item3"  ontouchstart="mobileStart()" ontouchmove="mobileMove(event)" ontouchend="mobileEnd()"  onmousedown="mouseDown(this.id)" onmouseup="mouseUp(this.id)">
                        <img id="b_c3" class="back-card" src="images/cards/end-card.png" alt="end-card">
                        <img id="f_c3" class="front-card" src="images/cards/melisandre1.png" alt="melisandre2">
                        <div class="answer1">Agree moderately</div>
                        <div class="answer2">Disagree moderately</div>
                        <div class="answer3">Neither agree nor disagree</div>
                        <div class="ans_click31"></div>
                        <div class="ans_click32"></div>
                        <div class="ans_click33"></div>
                    </div>
                    <div id = "image_item2" class="image__item2"  ontouchstart="mobileStart()" ontouchmove="mobileMove(event)" ontouchend="mobileEnd()"  onmousedown="mouseDown(this.id)" onmouseup="mouseUp(this.id)">
                        <img id="b_c2" class="back-card" src="images/cards/end-card.png" alt="end-card">
                        <img id="f_c2" class="front-card" src="images/cards/melisandre2.png" alt="melisandre2">
                        <div class="answer1">Agree moderately</div>
                        <div class="answer2">Disagree moderately</div>
                        <div class="answer3">Neither agree nor disagree</div>
                        <div class="ans_click21"></div>
                        <div class="ans_click22"></div>
                        <div class="ans_click23"></div>
                    </div>
                    <div id="image_item" class="image__item"  ontouchstart="mobileStart()" ontouchmove="mobileMove(event,this.id)" ontouchend="mobileEnd()" ontouchstart="mobileStart()" ontouchmove="mobileMove(event)" ontouchend="mobileEnd()"  onmousedown="mouseDown(this.id)" onmouseup="mouseUp(this.id)">
                        <div class="answer1">Agree moderately</div>
                        <div class="answer2">Disagree moderately</div>
                        <div class="answer3">Neither agree nor disagree</div>
                        <img src="images/cards/melisandre1.png" alt="melisandre">
                        <div class="ans_click11"></div>
                        <div class="ans_click12"></div>
                        <div class="ans_click13"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    nextQuestion(0);
    var dragging = false;
    var image_width=parseInt($('.image__item').width())/2;
    var image_height=parseInt($('.image__item').height())/2;
    var leftDirection=false;
    var rightDirection=false;
    var bottomDirection=false;
    var lastID;

//mousemove
    function mousemove (event) {
        if (dragging) {
            var id="#"+String(this.id);
            lastID=id;

            if (((event.pageX - $(id).offset().left) < image_width)&&((event.pageY - $(id).offset().top) < image_height)){
                leftDirection=true;
                rightDirection=false;
                bottomDirection=false;

                $(id).css({"transform": "rotate(-15deg)"});
                $(id).css({"left": "-30%", "top": "5%"});
                $(id+'>.answer1').css({"display": "none"});
                $(id+'>.answer2').css({"display": "block"});
                $(id+'>.answer3').css({"display": "none"});
            }
            else if (((event.pageX - $(id).offset().left) > image_width)&&((event.pageY - $(id).offset().top) < image_height)){
                leftDirection=false;
                rightDirection=true;
                bottomDirection=false;
                $(id).css({"transform": "rotate(15deg)"});
                $(id).css({"left": "30%", "top": "5%"});
                $(id+'>.answer1').css({"display": "block"});
                $(id+'>.answer2').css({"display": "none"});
                $(id+'>.answer3').css({"display": "none"});
            }
            else if ((event.pageY - $(id).offset().top) > image_height) {
                leftDirection=false;
                rightDirection=false;
                bottomDirection=true;
                $(id).css({"transform": "rotateX(-35deg)"});
                $(id).css({"left": "0", "top": "0"});
                $(id+'>.answer1').css({"display": "none"});
                $(id+'>.answer2').css({"display": "none"});
                $(id+'>.answer3').css({"display": "block"});
            }
        }
    }
//mousedown to activate card
    function mouseDown(id) {
        dragging = true;
        var el = document.getElementById(id);
        el.addEventListener("mousemove", mousemove, false);
    }
//mouseup on document to set card to origin position
    $(document).mouseup(function (e) {
        dragging=false;
        $(lastID).css({"transform": "rotate(0)"});
        $(lastID).css({"left": "0", "top": "0"});
    });
//mouse up for change trigger
    function mouseUp(id){
        var id="#"+String(id);
        if(leftDirection){
            leftClick(id)
        }
        else if(rightDirection){
            rightClick(id)
        }
        else if(bottomDirection){
            bottomClick(id)
        }
        dragging = false;
        $('.answer1').css({"display": "none"});
        $('.answer2').css({"display": "none"});
        $('.answer3').css({"display": "none"});
    }

//change cards
    var clickImg11 = false;
    var clickImg12 = false;
    var clickImg13 = false;
    function leftClick(id) {

        if (!clickImg11) {
            var number = String(id).slice(11);
            var b, f, ans1, ans2, ans3;
            if (Number.isNaN(parseInt(number))) {
                b = "#b_c2";
                f = "#f_c2";
                ans1 = '.ans_click21';
                ans2 = '.ans_click22';
                ans3 = '.ans_click23';
            }
            else {
                b = "#b_c" + (Number(number) + 1);
                f = "#f_c" + (Number(number) + 1);
                ans1 = '.ans_click' + (Number(number) + 1) + 1;
                ans2 = '.ans_click' + (Number(number) + 1) + 2;
                ans3 = '.ans_click' + (Number(number) + 1) + 3;
            }
            $(id).css({'left': '-35%', 'top': '10%'}).hide(200);
            $(String(b)).delay(1000).css({'transform': 'rotateY(180deg)'});
            $(String(f)).delay(1000).css({'transform': 'rotateY(0deg)'});
            $(ans1).css({'display': 'block'});
            $(ans2).css({'display': 'block'});
            $(ans3).css({'display': 'block'});
            nextQuestion($(".question>p").attr("id"));
        }
    }
    function rightClick(id) {
        if (!clickImg12) {
            var number=String(id).slice(11);
            var b,f,ans1,ans2,ans3;
            if(Number.isNaN(parseInt(number))){
                b="#b_c2";
                f="#f_c2";
                ans1='.ans_click21';
                ans2='.ans_click22';
                ans3='.ans_click23';
            }
            else {
                b = "#b_c" + (Number(number)+1);
                f = "#f_c" + (Number(number)+1);
                ans1='.ans_click'+(Number(number)+1)+1;
                ans2='.ans_click'+(Number(number)+1)+2;
                ans3='.ans_click'+(Number(number)+1)+3;
            }
            $(id).css({'left': '35%', 'top': '10%'}).hide(200);
            $(b).delay(1000).css({'transform': 'rotateY(180deg)'});
            $(f).delay(1000).css({'transform': 'rotateY(0deg)'});
            $(ans1).css({'display': 'block'});
            $(ans2).css({'display': 'block'});
            $(ans3).css({'display': 'block'});
            nextQuestion($(".question>p").attr("id"));
        }
    }
    function bottomClick(id) {
        if (!clickImg13) {
            var number = String(id).slice(11);
            var b, f,ans1,ans2,ans3;
            if (Number.isNaN(parseInt(number))) {
                b = "#b_c2";
                f = "#f_c2";
                ans1='.ans_click21';
                ans2='.ans_click22';
                ans3='.ans_click23';
            }
            else {
                b = "#b_c" + (Number(number)+1);
                f = "#f_c" + (Number(number)+1);
                ans1='.ans_click'+(Number(number)+1)+1;
                ans2='.ans_click'+(Number(number)+1)+2;
                ans3='.ans_click'+(Number(number)+1)+3;
            }

            $(id).css({'left': '35%', 'top': '10%'}).hide(200);
            $(b).delay(1000).css({'transform': 'rotateY(180deg)'});
            $(f).delay(1000).css({'transform': 'rotateY(0deg)'});
            $(ans1).css({'display': 'block'});
            $(ans2).css({'display': 'block'});
            $(ans3).css({'display': 'block'});
            nextQuestion($(".question>p").attr("id"));
        }
    }
    function nextQuestion(id){

        var id=parseInt(id)+1;
        var url = 'callNextQuestion.php';
        xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                $('.question').html("<p id="+id+">"+this.responseText+"<p>");
            }
        };
        xmlhttp.open("GET", url+"?question_id=" + id, true);
        xmlhttp.send();
    }

    function mobileStart() {
        dragging = true;
    }
    function mobileMove(e,id) {

        if (dragging) {
            var id="#"+String(id);
            var x = e.touches[0].clientX;
            var y = e.touches[0].clientY;
            lastID=id;


            if (((x - $(id).offset().left) < image_width)&&((y - $(id).offset().top) < image_height)){
                leftDirection=true;
                rightDirection=false;
                bottomDirection=false;

                $(id).css({"transform": "rotate(-15deg)"});
                $(id).css({"left": "-30%", "top": "5%"});
                $(id+'>.answer1').css({"display": "none"});
                $(id+'>.answer2').css({"display": "block"});
                $(id+'>.answer3').css({"display": "none"});
            }
            else if (((x - $(id).offset().left) > image_width)&&((y - $(id).offset().top) < image_height)){
                leftDirection=false;
                rightDirection=true;
                bottomDirection=false;
                $(id).css({"transform": "rotate(15deg)"});
                $(id).css({"left": "30%", "top": "5%"});
                $(id+'>.answer1').css({"display": "block"});
                $(id+'>.answer2').css({"display": "none"});
                $(id+'>.answer3').css({"display": "none"});
            }
            else if ((y - $(id).offset().top) > image_height) {
                leftDirection=false;
                rightDirection=false;
                bottomDirection=true;
                $(id).css({"transform": "rotateX(-35deg)"});
                $(id).css({"left": "0", "top": "0"});
                $(id+'>.answer1').css({"display": "none"});
                $(id+'>.answer2').css({"display": "none"});
                $(id+'>.answer3').css({"display": "block"});
            }
        }
    }
    function mobileEnd() {
        var id="#"+String(this.id);
        if(leftDirection){
            leftClick(id)
        }
        else if(rightDirection){
            rightClick(id)
        }
        else if(bottomDirection){
            bottomClick(id)
        }
        dragging = false;
        $('.answer1').css({"display": "none"});
        $('.answer2').css({"display": "none"});
        $('.answer3').css({"display": "none"});
    }
</script>
</body>
</html>