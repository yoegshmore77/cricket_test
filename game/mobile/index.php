<?php 
    session_start();
    require_once '../tooyum_cricket/config/config.php';
	
	
			$useragent=$_SERVER['HTTP_USER_AGENT'];
/*
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|

midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|

phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|

aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co

(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|

gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |

\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-

w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-

2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|

phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|

sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|

t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|

vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){


}else{
	header('Location: http://secure.socialdeal4u.com/tooyumm/kararestrikers/mobile/');
	//exit();
}
*/
   unset($_SESSION['token']);
    if(!isset($_SESSION['token'])){
        $cexecute = file_get_contents(MYWEBSITE."tooyum_cricket/ajax/view.php?action=requesttoken");
        $result = json_decode($cexecute,true);
        $_SESSION['token'] = md5("TYC_".$result['token']);
       
       }
//echo $_SESSION['token'];
       //echo $_SESSION['token'];
        

        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-P75D96M');</script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" itemprop="description" content="#GulabiDILKhelega" />
    <meta name="keywords"  content="#GulabiDILKhelega" />

    <title>#GulabiDILKhelega</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <script type="text/javascript" src="js/gyro.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/chance/1.0.6/chance.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.6.0/socket.io.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pixi.js/4.4.3/pixi.min.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <!-- <script type="text/javascript" src="js/validation.js"></script> -->
</head>
<div id="fb-root">
    <h1 id="fbid"></h1>
    
</div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '566669130502468',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.8'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
   
   
   
   function checkLoginState() {
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
}


 function fblogin(){
        $("p.errormsgclass").html("");
        //$("#profilepic,#name,#email").val("");
        FB.login(function(response) {
          if (response.status === "connected") {
             responseFunc();
          } 
        }, {scope: "email,public_profile",return_scopes: true});
  }
  
  
    function responseFunc() {
        FB.api("/me?fields=id,name,email,picture.width(500).height(500)", function(response) {
            var ffbid = response.id;
            var name = response.name;
            var email = response.email;
            addLeads(name,email,null,ffbid);
            TweenMax.to($(".thank-you"), 0.75, { left: 0, ease: Cubic.easeInOut });
            TweenMax.to($("#login-wrap"), 0.75, { left: '-200%', ease: Cubic.easeInOut });
        });
        
        
    }
</script>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P75D96M"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

	<input type="hidden" id="newtoken">
    <input type="hidden" id="total-score-to-share" />
    <a href="#" title="#GulabiDILKhelega" class="logo">
        <img src="images/logo.png" alt="#GulabiDILKhelega" />
    </a>
    <div id="container">
         <div id="inputContainer">
            
            <!--<p class="copyText">Get your code on 
                <span>https://www.tooyumm.com/kararestrikers/</span> on your desktop/laptop
            </p>-->
            <!--<div class="blackPatch">
                <h2 id="title" class="unique_code">
                    <img src="images/unique_code.png" alt="" />
                </h2>
                <div id="codeInput">
                    <input id="one" class="roboto" type="text">
                    <input id="two" class="roboto" type="text">
                    <input id="three" class="roboto" type="text">
                    <input id="four" class="roboto" type="text">
                </div>
                <span class="enterHere">( Enter here )</span>
            </div>-->
        </div>
        <div id="howToPlayContainer" class="howToPlayContainer">
            <h2> <img src="images/howToPlay.png" alt="" /> </h2> 
            <div class="steps_Wrap">
                <div>
                    <div class="innerWrap">
                        <figure>
                            <img src="images/step-1.gif" alt="Step 1" />
                        </figure>
                        <h3 class="h3">Get in position with your phone as the countdown begins</h3>
                        <!-- <div class="iconImg">
                            <img src="images/iconImg1.png" alt="" />
                        </div>
                        <div class="stepContent">
                            <h3 class="h3">STEP 1 HEADER</h3>
                            <p>Lorem ipsum dolor sit amet doler, consectetur adipisicing elit sed do.</p>
                        </div> -->
                    </div>
                </div>
                
                <div>
                    <div class="innerWrap">
                        <figure>
                            <img src="images/step-2.gif" alt="Step 2" />
                        </figure>
                        <h3 class="h3">Swing the phone to hit the ball approaching towards you</h3>
                        <!-- <div class="iconImg">
                            <img src="images/iconImg1.png" alt="" />
                        </div>
                        <div class="stepContent">
                            <h3 class="h3">STEP 1 HEADER</h3>
                            <p>Lorem ipsum dolor sit amet doler, consectetur adipisicing elit sed do.</p>
                        </div> -->
                    </div>
                </div>
                
                <div>
                    <div class="innerWrap">
                        <figure>
                            <img src="images/step-3.gif" alt="Step 3" />
                        </figure>
                        <h3 class="h3">Repeat for an entire over</h3>
                        <!-- <div class="iconImg">
                            <img src="images/iconImg1.png" alt="" />
                        </div>
                        <div class="stepContent">
                            <h3 class="h3">STEP 1 HEADER</h3>
                            <p>Lorem ipsum dolor sit amet doler, consectetur adipisicing elit sed do.</p>
                        </div> -->
                    </div>
                </div>
                
                <!-- <div>
                    <div class="innerWrap">
                        <div class="iconImg">
                            <img src="images/iconImg1.png" alt="" />
                        </div>
                        <div class="stepContent">
                            <h3 class="h3">STEP 1 HEADER</h3>
                            <p>Lorem ipsum dolor sit amet doler, consectetur adipisicing elit sed do.</p>
                        </div>
                    </div>
                </div> -->
            </div>
            
            <span class="noteText">
                NOTE:  In every cricket match, Timing and placement is everything
            </span>
            
            <span class="ok_Btn">
                <img id="ok" src="images/ok.png" alt="" />
            </span>
        </div>
        <!-- next ball screen -->
    
        <div class="next_ball_Screen" style="display: none;">
            <div class="screen_Wrap">
                <div class="run_Content">
                    <div class="firstCol">
                        <div class="score">
                            <span>4</span>
                        </div>
                        <div class="scoreContent">
                            <h2 class="h2">RUNS</h2>
                            <h3 class="h3">that’s a Boundary</h3>
                        </div>
                    </div>
                    <div class="secondCol">
                        <ul>
                            <li>
                                <span class="iconImg">
                                    <img src="images/iconImg2.png" alt="" />
                                </span>
                                <span class="speedText">
                                    Bat Speed :
                                    <strong>149 Km/hr</strong>
                                </span>
                            </li>
                            <li>
                                <span class="iconImg">
                                    <img src="images/iconImg2.png" alt="" />
                                </span>
                                <span class="speedText">
                                    Time :
                                    <strong>0.4 secs</strong>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>    
                <span class="nextBtn">
                    <img src="images/nextBtn.png" alt="" />
                </span>
            </div>
        </div>
    </div>
    <!-- To show more options -->
    <div id="playAgain" class="optionsContainer scored_Rank" style="left:-100%;">
        <div id="score-summary"></div>
        <div class="innerWrap">
            <div class="run_Content">
                <div class="firstCol">
                    <span class="title">Runs scored</span>
                    <abbr id="total-runs">24</abbr>
                    <a href="javascript:;" id="share-score">Share your score</a>
                </div>
                <!-- <div class="secondCol">
                    <span class="title">your RANK</span>
                    <abbr>
                        <em>#</em>92
                    </abbr>
                </div> -->
            </div>    
            
            <p>Submit your score to win tickets.<!--, merch and #GulabiDILKhelega packs or try again!--></p>
            <a id="submit-score" href="javascript:void(0);"></a>
            <a id="play-reset" class="play-reset" href="javascript:void(0);">Play again</a>
        </div>
    </div>

    <!-- Login options -->
    <div class="loginOptions login_Two_Options" style="left:-100%;">
        <div class="innerWrap" id="login-wrap" style="left: -200%">
            <p>Submit your score to win tickets<!--, merch and #GulabiDILKhelega packs or try again!--></p>
            <form class="login-form" type="submit">
                <div class="inputField">
                    <input id="name-input" required type="text" placeholder="Name" />
                    <span id="name-error" style="visibility:hidden;" class="errorMessage">Invalid name</span>
                </div>
                <div class="inputField">
                    <input id="email-input" required type="email" placeholder="Email ID :" />
                    <span id="email-error" style="visibility:hidden;" class="errorMessage">Invalid email</span>
                </div>
                <div class="inputField">
                    <input id="number-input" required type="tel" placeholder="Mobile Number" />
                    <span id="number-error" style="visibility:hidden;" class="errorMessage">Invalid number</span>
                </div>
                <a id="submit-form" href="javascript:;">
                    <img src="images/submit_Btn.png" alt="" />
                </a>
            </form>
            <span class="or">OR</span>
            <ul class="loginVia">
                <li>
                    <a href="javascript:;">Log in via</a>
                </li>
                <li>
                    <a href="javascript:;" onclick="fblogin()" id="facebook-login" target="_blank">
                        <img src="images/facebook_icon.png" alt="" />
                    </a>
                </li>
                <!-- <li>
                    <a href="javascript:;" onclick="" id="" target="">
                        <img src="images/googlePlus.png" alt="" />
                    </a>
                </li> -->
            </ul>
            <!-- <span class="or">OR</span> -->
            
            <!-- <a href="javascript:void(0)" class="guestUser">submit AS GUEST USER</a> -->
            
            <!-- <span class="noteText">
                NOTE: Guest user can not qualify for the contest.
            </span> -->
            
        </div>
        <div class="thank-you" style="left:-200%;">
            <span>Thank you</span>
            <p id="rank"></p>
            <p id="weeklyRank"></p>
            <p id="weeklyScore"></p>
            <p id="overScore"></p>
            <a id="thank-play-reset" href="javascript:void(0);">Play again</a>
        </div>
    </div>
    <script>
    var chance = new Chance();
    var url = 'https://cricketgameonetomany.herokuapp.com/';
    var userid;
    var username;
    var uniqueCode;
    var isConnected = false;
    var delay = 0;
    var currentServerTimestamp, timestamp, hitTimestamp;

    function initSocketIO() {
        // console.log('initSocketIO');

        socket = io.connect(url, {
            'reconnect': true,
            'reconnection_delay': 5000,
            'max reconnection attempts': 5
        });

        // SEND ALL USER DATA TO SERVER
        socket.on('getData', function(msg) {
            isConnected = true;
            // console.log('<< Connected.');

            socket.emit('userData', {
                userid: userid,
                username: username,
                isMobile: true,
                uniqueCode: uniqueCode
            });

            // console.log('>> Sending data.');
        });

        socket.on('incorrectCode', function() {
            $("#title").html('INCORRECT CODE');

            setTimeout(function() {
                $("#title").html('ENTER CODE');

                $("#codeInput input").val("");
                $("#codeInput").css('display', 'flex');
                $("#codeInput input").eq(0).focus();
            }, 2500);
        });

        socket.on('connected', function() {
            // console.log('<< Connected.');
        });

        socket.on('initGame', function(msg) {
            // console.log('<< Initialise game.');

            $("#title").html('< CONNECTED >');

            setTimeout(function() {
                //TweenMax.to($("#inputContainer"), 0.75, { left: wid * -1, ease: Cubic.easeInOut });
                TweenMax.to($("#howToPlayContainer"), 0.75, { left: 0, ease: Cubic.easeInOut });
            }, 500);
            // How to play slider
            howToPlaySlider();
        });

        socket.on('timestamp', function(serverTimestamp) {
            var dd1= serverTimestamp.split('|');
                var dd2= dd1[0];
                counter = Number(dd1[1]);
            reset();
            $.get("timestamp.php", function(data, status) {
                
                
                delay =  Number(data) - Number(dd2);//serverTimestamp;
                currentServerTimestamp = Number(data) - Number(delay);
                // console.log('<< Current Timestamp: ' + currentServerTimestamp + ' >>');
                // console.log('<< Timestamp: ' + serverTimestamp + ' >>');
                // console.log('<<< Delay: ' + delay + 'ms >>>');
                //timingText.text = dd1[1]+'='+delay;//dd1[0];
                //alert(data);
                //alert(dd1);
                timestamp = Date.now();
                stopRecording = false;

                // RESET
                // setTimeout(reset, 10000);
                setTimeout(function() {
                    // if (count == 0) {
                    if(!stopRecording && endScreen ==0){
                        stopRecording = true;
                        missedGfx.alpha = 1;
                        noRunArray();
                        $('#waiting-screen').html('');
                    }
                    //TweenMax.to(tryAgainGfx, 0.5, { alpha: 1, ease: Cubic.easeOut, delay: 3 });
                    if(counter<6){
                        //reset();
                        //TweenMax.to(tryAgainGfx, 0.5, { alpha: 1, ease: Cubic.easeOut, delay: 3 });

                        setTimeout(function() {
                            reset();

                        },3000);
                    }else{
                        setTimeout(function() {
                            overDone();

                        },3000);
                        
                    }
                //}, 6000);
                }, 6500);//10000
            });
        });

        socket.on('disconnect', function(msg) {
            isConnected = false;
            alert('Disconnected');
        });
    }

    function generateRandomNumber(length) {
        return Math.floor(Math.pow(10, length-1) + Math.random() * 9 * Math.pow(10, length-1));
    }

    function generateRandomAlphaNumericString(length) {
        return Math.random().toString(36).substr(2, length);
    }

    var renderer;
    var stage;
    var wid = window.innerWidth;
    var hei = window.innerHeight;
    // console.log(wid + 'x' + hei);
    var timingText, batSpeedText;
    var currBeta, prevBeta, swingArray = [], timeStampArray = [], count = 0;
    var stopRecording = true;
    var swingArcGfx, tryAgainGfx;
    var veryEarlyGfx, earlyGfx, perfectGfx, lateGfx, veryLateGfx, missedGfx;
    // To store score values
    var scoreArray = [];
    var timingArray = [];

    // For clicks count
    //var buttonCount = 0;
	document.addEventListener('contextmenu', function(e) {
	  //e.preventDefault();
	});
	
    $(document).ready(function() {
		initSocketIO();
		/*$(document).keydown(function (event) {
			if (event.keyCode == 123) { // Prevent F12
				return false;
			} else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I        
				return false;
			}
		});*/
        // Handler when the DOM is fully loaded
        // console.log('PIXI initialised!');

        userid = generateRandomNumber(10);
        username = chance.first();
        // console.log(userid + ' | ' + username);


        $("#codeInput input").eq(0).focus();
        $("#codeInput input").keyup(function() {
            $(this).val($(this).val().toLowerCase());

            uniqueCode = $("#one").val() + $("#two").val() + $("#three").val() + $("#four").val();
            $("#codeInput input").eq(uniqueCode.length).focus();

            // console.log(uniqueCode);

            if (uniqueCode.length == 4) {
                $("#title").html('< CONNECTING >');
                $("#codeInput").css('display', 'none');
                initSocketIO();
            }
        });
        //$("#five").val('0');
        $("#ok").click(function() {
            TweenMax.to($("#container"), 0.75, { left: wid * -1, ease: Cubic.easeInOut });
            $("canvas").css('display', 'block');
            TweenMax.to($("canvas"), 0.75, { left: 0, ease: Cubic.easeInOut });
            $("<div/>").attr('id','waiting-screen').insertAfter('canvas');
            $("<div/>").attr('id','run-id').insertBefore('canvas');
            $("<div/>").attr('id','balls-left').insertBefore('canvas');
            $("<div/>").attr('id','missed-id').insertBefore('canvas');
            $('#waiting-screen').html('<img src="images/waiting-screen.png" />');
            $('#balls-left').html('Connecting....');
            setTimeout(function() {
                // $('#waiting-screen').html('');
                socket.emit('nextBall');
            }, 750);
            
        });

        renderer = PIXI.autoDetectRenderer(wid, hei, { backgroundColor: 0xFFFFFF, transparent: false, antialias: true });
        document.body.appendChild(renderer.view);

        // create the root of the scene graph
        stage = new PIXI.Container();
        stage.position.x = wid/2;
        stage.position.y = hei/2 - 40;

        var hitAnalyzerGfx = new PIXI.Sprite.fromImage('images/bgImg.jpg');
        hitAnalyzerGfx.position.x = 0;
        hitAnalyzerGfx.position.y = 0;
        hitAnalyzerGfx.anchor.x = 0.5;
        hitAnalyzerGfx.anchor.y = 0.5;
        stage.addChild(hitAnalyzerGfx);
        var yPos = 80;

        veryEarlyGfx = new PIXI.Sprite.fromImage('images/very-early-screen.png');
        veryEarlyGfx.position.x = 0; veryEarlyGfx.position.y = yPos; veryEarlyGfx.anchor.x = 0.5; veryEarlyGfx.anchor.y = 0.5;
        veryEarlyGfx.alpha = 0;
        stage.addChild(veryEarlyGfx);

        earlyGfx = new PIXI.Sprite.fromImage('images/early-screen.png');
        earlyGfx.position.x = 0; earlyGfx.position.y = yPos; earlyGfx.anchor.x = 0.5; earlyGfx.anchor.y = 0.5;
        earlyGfx.alpha = 0;
        stage.addChild(earlyGfx);

        perfectGfx = new PIXI.Sprite.fromImage('images/perfect.png');
        perfectGfx.position.x = 0; perfectGfx.position.y = yPos; perfectGfx.anchor.x = 0.5; perfectGfx.anchor.y = 0.5;
        perfectGfx.alpha = 0;
        stage.addChild(perfectGfx);

        lateGfx = new PIXI.Sprite.fromImage('images/late.png');
        lateGfx.position.x = 0; lateGfx.position.y = yPos; lateGfx.anchor.x = 0.5; lateGfx.anchor.y = 0.5;
        lateGfx.alpha = 0;
        stage.addChild(lateGfx);

        veryLateGfx = new PIXI.Sprite.fromImage('images/veryLate.png');
        veryLateGfx.position.x = 0; veryLateGfx.position.y = yPos; veryLateGfx.anchor.x = 0.5; veryLateGfx.anchor.y = 0.5;
        veryLateGfx.alpha = 0;
        stage.addChild(veryLateGfx);

        missedGfx = new PIXI.Sprite.fromImage('images/missed-screen.png');
        missedGfx.position.x = 0; missedGfx.position.y = yPos; missedGfx.anchor.x = 0.5; missedGfx.anchor.y = 0.5;
        missedGfx.alpha = 0;
        stage.addChild(missedGfx);

        tryAgainGfx = new PIXI.Sprite.fromImage('images/nextBtn.png');
        tryAgainGfx.interactive = true;

        tryAgainGfx.on('pointerdown', function() {
            // RESET
            TweenMax.to(tryAgainGfx, 0.5, { alpha: 0, ease: Cubic.easeIn });
            $('#waiting-screen').html('');
            $('#balls-left').html('');
            reset();
        });

        tryAgainGfx.position.x = 0; tryAgainGfx.position.y = 280; tryAgainGfx.anchor.x = 0.5; tryAgainGfx.anchor.y = 0.5;
        tryAgainGfx.alpha = 0;
        stage.addChild(tryAgainGfx);

        var style = new PIXI.TextStyle({
            fontFamily: 'Arial',
            fontSize: 52,
            fontWeight: 'bold',
            fill: ['#FFFFFF', '#CCCCCC'], // gradient
            stroke: '#333333',
            strokeThickness: 5,
            dropShadow: true,
            dropShadowColor: '#999999',
            dropShadowBlur: 10,
            dropShadowAngle: Math.PI / 6,
            dropShadowDistance: 2
        });

        // batSpeedText = new PIXI.Text('0', style);
        // batSpeedText.x = 44;
        // batSpeedText.y = -48;
        // batSpeedText.anchor.x = batSpeedText.anchor.y = 0.5;

        // stage.addChild(batSpeedText);
        // console.log('batspeedText', batSpeedText);
        /*
        batSpeedText = new PIXI.Text('0 KMPH');
        batSpeedText.anchor.x = 0.5;
        batSpeedText.x = 0;
        batSpeedText.y = 0;
        stage.addChild(batSpeedText);
        */
        // swingArcContainer = new PIXI.Container();

        // swingArcBackgroundGfx = new PIXI.Graphics();
        // swingArcBackgroundGfx.lineStyle(24, 0xffd900, 1);
        // swingArcBackgroundGfx.arc(0, 0, 150, -47 * (Math.PI/180), 227 * (Math.PI/180), false);

        // swingArcGfx = new PIXI.Graphics();
        // swingArcGfx.lineStyle(16, 0xffffff, 1);

        // swingArcContainer.addChild(swingArcBackgroundGfx);
        // swingArcContainer.addChild(swingArcGfx);
        // stage.addChild(swingArcContainer);

        timingText = new PIXI.Text('0');
        timingText.x = 0;
        timingText.y = 200;
        timingText.anchor.x = 0.5;
        timingText.anchor.y = 0.5;
        timingText.alpha = 1;
        //timingText.style.color='white';
        stage.addChild(timingText);

        // start animating
        animate();

        // Hidden error messages on form
        $('.error-message').css('visibility','hidden');
    });

    gyro.frequency = 10;
    gyro.startTracking(function(o) {
        currBeta = o.beta;

        if (currBeta > 90 && currBeta <= 180) {
            currBeta = -360 + o.beta;
        }
        if (currBeta > 0 && currBeta <= 90) {
            // currBeta = -360 + o.beta;
        }
        currBeta -= 90;
        currBeta += 360;

        if (currBeta < 45)
            currBeta = 45;
        if (currBeta > 815)
            currBeta = 815;
        

        // if (!stopRecording && prevBeta != currBeta) {
            if (!stopRecording) {
                //timingText.text = currBeta;
            swingArray.push(currBeta);
            timeStampArray.push(currentServerTimestamp + (Date.now() - timestamp));

            
            //yogesh// timingText.text = Math.round(currentServerTimestamp - (timeStampArray[timeStampArray.length - 1])+6500)+'='+counter;
            if (prevBeta < 180 && currBeta >= 180) {
                // && count == 0
                count = swingArray.length;
                hitTimestamp = timeStampArray[timeStampArray.length - 1];
                // console.log('count: ' + count);
                // console.log(hitTimestamp + ' | ' + currentServerTimestamp);
                // console.log(currentServerTimestamp - hitTimestamp + 5150);
                ///duration 2.6 sec = 2600 mili sec
                ///2600x2 = 5200
                //var timing = currentServerTimestamp - hitTimestamp + 5150;
                var timing = currentServerTimestamp - hitTimestamp + 6000;//9150(for 10000)
                //timingText.text = timing;
                // console.log('timing here', timing);
                //timingText.text = number(currBeta)+'|'+timing;

                // if (timing > -500 && timing <= -300) {
                //     veryLateGfx.alpha = 1;
                //     noRunArray();
                //     $('#run-id').html('');
                // }
                // if (timing > -300 && timing <= -100) {
                //     lateGfx.alpha = 1;
                //     noRunArray();
                //     $('#run-id').html('');
                // }
                // if(timing>5000){
                //     prevBeta =0;
                //     veryEarlyGfx.alpha = 1;
                //     noRunArray();
                //     $('#waiting-screen').html('');
                //     // console.log('----->Entered the conditon---------');

                // }
                // else if (timing > 1100 && timing <= 5000 ) {//1300
                //     veryEarlyGfx.alpha = 1;
                //     noRunArray();
                //     $('#waiting-screen').html('');
                // }
                // else if (timing <= 1100 && timing > 750) {
                //     earlyGfx.alpha = 1;
                //     noRunArray();
                //     $('#waiting-screen').html('');
                // }
                if (timing >= -650 && timing <=1950) {
                    perfectGfx.alpha = 1;
                    calculateScore(timing);
                    stopRecording = true;
                }
                // else{
                //     missedGfx.alpha = 1;
                //     noRunArray();
                //     $('#waiting-screen').html('');
                //     // $('#missed-id').html('Don&#39;t get fried! Try again.');
                // }
                // if (timing >= 500 && timing < 600) {
                //     earlyGfx.alpha = 1;
                //     noRunArray();
                //     $('#run-id').html('');
                // }
                // if (timing >= 600 && timing < 700) {
                //     veryEarlyGfx.alpha = 1;
                //     noRunArray();
                //     $('#run-id').html('');
                // }
                // if (timing <= -500 || timing >= 700) {
                //     missedGfx.alpha = 1;
                //     noRunArray();
                //     $('#run-id').html('');
                // }
            }
            if (count > 0) {
                // if (swingArray.length - count >= 10) {
                // if (swingArray[swingArray.length - 1] < swingArray[swingArray.length - 2] || swingArray[swingArray.length - 1] > 315) {
                if (Math.abs(swingArray[swingArray.length - 1] - swingArray[swingArray.length - 2]) <= 2 || swingArray[swingArray.length - 1] > 315) {
                    swingArray.pop();
                    timeStampArray.pop();
                    // stopRecording = true;
                    // console.log('swingArray.length: ' + swingArray.length);
                    // console.log(swingArray);

                    // DETECT SWING START
                    for (var index = count; index > 0; index--) {
                        // if (swingArray[index] < swingArray[index - 1] || swingArray[index] <= 45) {
                        if (Math.abs(swingArray[index] - swingArray[index - 1]) <= 2 || swingArray[index] <= 45) {
                            swingArray.splice(0, index);
                            timeStampArray.splice(0, index);
                        }
                    }
                    // console.log(swingArray);

                    // swingArray.splice(0, swingArray.length - 20);
                    // console.log('swingArray.length: ' + swingArray.length);
                    /*
                    var html = '';
                    for (index = 0; index < swingArray.length; index++) {
                        html += '<p>' + swingArray[index] + '</p>';
                    }
                    $("#info").append(html);
                    */
                    // console.log(swingArray[0] + ' | ' + swingArray[swingArray.length - 1]);
                    // console.log(timeStampArray[0] + ' | ' + timeStampArray[timeStampArray.length - 1]);
                    // console.log(timeStampArray[timeStampArray.length - 1] - timeStampArray[0]);

                    var batRotation = swingArray[swingArray.length - 1] - swingArray[0];
                    var time = timeStampArray[swingArray.length - 1] - timeStampArray[0]
                    var batSpeed = (Math.round((batRotation/time) * 1000)) / 10;
                    if (batSpeed > 75) {
                        batSpeed = 75 - (Math.round((Math.random() * 5) * 10) / 10);
                    }
                    // batSpeedText.text = batSpeed;
                    // console.log(batRotation + ' | ' + time + ' | ' + batSpeed + 'kmph');

                    // swingArcGfx.arc(0, 0, 150, (swingArray[0] - 90) * (Math.PI/180), (swingArray[swingArray.length - 1] - 90) * (Math.PI/180), false);

                    // RESET
                    // setTimeout(reset, 5000);
                }
            }
            prevBeta = currBeta;
        }
    });
    //counter = 1;
    var endScreen =0;
    var counter;
    function reset() {
        // console.log('in reset');
        // alert("test");
        //counter = counter+1;
        // console.log('counter', counter);
        // console.log('<<< RESET >>>');
        // swingArcGfx.clear();
        // swingArcGfx.lineStyle(16, 0xffffff, 1);

        // batSpeedText.text = '0';

        veryEarlyGfx.alpha = earlyGfx.alpha = perfectGfx.alpha = lateGfx.alpha = veryLateGfx.alpha = missedGfx.alpha = 0;

        swingArray = [];
        timeStampArray = [];
        count = 0;
        // stopRecording = false;
        if(counter <=6)
        {   

            
            if(endScreen==0){
                $('#run-id').html('');
                $('#balls-left').html(counter+ '&nbsp;/&nbsp;6 balls');
                $('#waiting-screen').html('<img src="images/waiting-screen.png" />');
                socket.emit('nextBall');
            }
        } 
        
    }
    function overDone(){
        if(counter==6){
            endScreen=1;
            // console.log('else');
            missedGfx.alpha = 0;
            $('#run-id').html('');
            $('#balls-left').html('');
            $('#waiting-screen').html('');
            TweenMax.to($("#playAgain"), 0.75, { left: '0', ease: Cubic.easeInOut });
            // $('.loginOptions').css('display','none');
            // console.log(scoreArray, 'stoppedEmission');
            var total = 0;
            for (var i = 0; i < scoreArray.length; i++)
                {
                    total += scoreArray[i];
                }
                // console.log(total,'total');
                /*---- play again --------*/
                    var ttkid = "<?php echo $_SESSION['token'];?>";
                    if($('#newtoken').val()!=""){
                            var ttkid = $('#newtoken').val();
                    }
                    // console.log(ttkid);
                    $.get("<?php echo MYWEBSITE;?>tooyum_cricket/ajax/view.php?action=tryagaid&tokenid="+ttkid, function(data, status){
                        //alert("Data: " + data + "\nStatus: " + status);
                    });
                /*-------------*/
                $('#total-runs').html(total);
                $('#total-score-to-share').val(total);
                if(total > 0){
                    $('#submit-score').html('<img src="images/submit_Btn.png" alt="" />'); 
                    $('#share-score').css('display','block');
                } else {
                    $('#submit-score').html(''); 
                    $('#share-score').css('display','none');
                }
        }

    }
    $('#play-reset').click(function() {
        // console.log('in click');
        TweenMax.to($("#login-wrap"), 0.75, { left: 0, ease: Cubic.easeInOut });
        TweenMax.to($("#playAgain"), 0.75, { left: '-100%', ease: Cubic.easeInOut });
        $('#run-id').fadeIn();
        $('#balls-left').fadeIn();
        //counter=0;
        scoreArray=[];
        timingArray=[];
        endScreen=0;
        reset();
    });
    $('#thank-play-reset').click(function(){
        TweenMax.to($(".thank-you"), 0.75, { left: '-200%', ease: Cubic.easeInOut });
        TweenMax.to($("#login-wrap"), 0.75, { left: '-200%', ease: Cubic.easeInOut });
        TweenMax.to($("#playAgain"), 0.75, { left: '-100%', ease: Cubic.easeInOut });
        TweenMax.to($(".loginOptions"), 0.75, { left: '-100%', ease: Cubic.easeInOut });
        $("canvas").css('display', 'block');
        $('#run-id').fadeIn();
        $('#balls-left').fadeIn();
        TweenMax.to($("canvas"), 0.75, { left: 0, ease: Cubic.easeInOut });
        //counter=0;
        scoreArray=[];
        timingArray=[];
        endScreen=0;
        reset();
    });
    $('#submit-score').click(function() {
        submitScore();
    });
    function submitScore(){
        // console.log('in-submit');
        TweenMax.to($("#playAgain"), 0.75, { left: '-100%', ease: Cubic.easeInOut });
        TweenMax.to($(".loginOptions"), 0.75, { left: 0, ease: Cubic.easeInOut });
        TweenMax.to($("#login-wrap"), 0.75, { left: 0, ease: Cubic.easeInOut });
        TweenMax.to($("canvas"), 0.75, { left: '-100%', ease: Cubic.easeInOut });
        $('#run-id').fadeOut();
        $('#balls-left').fadeOut();
        // console.log('submit-score-array', scoreArray);
    }
    function animate() {
        requestAnimationFrame(animate);

        // render the container
        renderer.render(stage);
    }
    function calculateScore(timeParam){
        if(timeParam <= 18000 && timeParam >= 750){
            socket.emit('sco', 6);
            $('#run-id').html('');
            $('#waiting-screen').html('');
            $('#balls-left').html('');
            $('#run-id').html('<img src="images/runs-6.png" />');
            scoreArray.push(6);
            timingArray.push(timeParam);
        } else if(timeParam < 750 && timeParam > 500){
            socket.emit('sco', 4);
            $('#run-id').html('');
            $('#balls-left').html('');
            $('#waiting-screen').html('');
            $('#run-id').html('<img src="images/runs-4.png" />');
            scoreArray.push(4);
            timingArray.push(timeParam);
        } else if(timeParam <= 500 && timeParam > 300){
            socket.emit('sco', 3);
            $('#waiting-screen').html('');
            $('#balls-left').html('');
            $('#run-id').html('<img src="images/runs-3.png" />');
            scoreArray.push(3);
            timingArray.push(timeParam);
        } else if(timeParam <= 300 && timeParam > 0){
            socket.emit('sco', 2);
            $('#waiting-screen').html('');
            $('#run-id').html('');
            $('#balls-left').html('');
            $('#run-id').html('<img src="images/runs-2.png" />');
            scoreArray.push(2);
            timingArray.push(timeParam);
        } else if(timeParam <= 0 && timeParam >= -650){
            socket.emit('sco', 1);
            $('#run-id').html('');
            $('#balls-left').html('');
            $('#waiting-screen').html('');
            $('#run-id').html('<img src="images/runs-1.png" />');
            scoreArray.push(1);
            timingArray.push(timeParam);
        }
        // console.log(scoreArray, 'calculateScore');
    }
    function noRunArray(){
        socket.emit('sco', 0);
        scoreArray.push(0);
        timingArray.push(0);
        // console.log(scoreArray, 'noRunArray');
    }

    // On form submit
    $('#submit-form').click(function(){
        validateForm();
    });

    function validateForm(){

        var nameReg = /^[a-z ,.'-]+$/i;
        var numberReg =  /^[0]?[6789]\d{9}$/;
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

        var name = $('#name-input').val();
        var number = $('#number-input').val();
        var email = $('#email-input').val();
        var nameSuccess = false, emailSuccess = false, numberSuccess = false;

        if(nameReg.test(name) != true){
            $('#name-error').css('visibility','visible');
        } else if(name == ''){
            $('#name-error').html('Name cannot be empty');
            $('#name-error').css('visibility','visible');
        }
        else{
            $('#name-error').css('visibility','hidden');
            nameSuccess = true;
        }
        if(emailReg.test(email) != true){
            $('#email-error').css('visibility','visible');
        } else if(email == ''){
            $('#email-error').html('Name cannot be empty');
            $('#email-error').css('visibility','visible');
        }
        else{
            $('#email-error').css('visibility','hidden');
            emailSuccess = true;
        }
        if(numberReg.test(number) != true){
            $('#number-error').css('visibility','visible');
        } else if(number == ''){
            $('#number-error').html('Name cannot be empty');
            $('#number-error').css('visibility','visible');
        }else{
            $('#number-error').css('visibility','hidden');
            numberSuccess = true;
        }

        if(nameSuccess == true && emailSuccess == true && numberSuccess == true){
            addLeads(name,email,number,null);
            TweenMax.to($(".thank-you"), 0.75, { left: 0, ease: Cubic.easeInOut });
            TweenMax.to($("#login-wrap"), 0.75, { left: '-200%', ease: Cubic.easeInOut });
        }
            
    }
    function addLeads(name,email,number,appid){
        /*---- add lead again submit--------*/
        var ttkid = "<?php echo $_SESSION['token'];?>";
				if($('#newtoken').val()!=""){
							var ttkid = $('#newtoken').val();
				}
                var total = 0;
                for (var i = 0; i < scoreArray.length; i++)
                    {
                        total += scoreArray[i];
                    }
                var tspent = 0;
                $.get("<?php echo MYWEBSITE;?>tooyum_cricket/ajax/view.php?tokenid="+ttkid+"&name="+name+"&email="+email+"&mobile="+number+"&fb_id="+appid+"&run_ball_1="+timingArray[0]+"&run_ball_2="+timingArray[1]+"&run_ball_3="+timingArray[2]+"&run_ball_4="+timingArray[3]+"&run_ball_5="+timingArray[4]+"&run_ball_6="+timingArray[5]+"&total_runs="+total+"&game_type=online&speed=10&time_spent="+tspent+"&action=addleads", function(data, status){
					$('#newtoken').val(data.newtoken);
                    // var rank = parseInt(data.rank);
                    // var weeklyRank = parseInt(data.weekly_rank);
                    var weeklyScore = parseInt(data.weekly_score);
                    var overScore = parseInt(data.over_score);

                    // $('#rank').html('Your rank is ' +rank);
                    $('#overScore').html('Your Best Score of the Over is <span>' +overScore+ '</span>');
                    $('#weeklyScore').html('Your Total Score of the Week is <span>' +weeklyScore+ '</span>');
                    if(appid == null){
                        $('#name-input').prop("disabled", true);
                        $('#number-input').prop("disabled", true);
                        $('#email-input').prop("disabled", true);
                    }
                    // $('#name-input').prop("disabled", true);
                    // $('#number-input').prop("disabled", true);
                    // $('#email-input').prop("disabled", true);
                    //alert("Data: " + data + "\nStatus: " + status);
                });
            /*-------------*/
    }

    // Score sharing function
    $('#share-score').click(function(){
        var shareValue = $('#total-score-to-share').val();
        sendscore(shareValue);
    });
    // How to play slider
    function howToPlaySlider(){
        $('.steps_Wrap').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 5000
        });
    }

    function sendscore(sval){
        var fburl = "<?php echo MYWEBSITE;?>myscore/"+sval+"/share"
        var fbpopup = window.open("https://www.facebook.com/sharer/sharer.php?u="+fburl, "_blank", "width=600, height=400, scrollbars=no");
        return false;
    }
    </script>
</body>
</html>
