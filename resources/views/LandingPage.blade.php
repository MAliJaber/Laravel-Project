<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel = "stylesheet"  type = "text/css"  href = "{{URL::asset('CSS/style.css')}}" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">

  <title>DRAGON STONES GENERATOR</title>
</head>
<body>
<div class="bg1"></div>

<div class="stylemain" stlye="text-align:left;margin-left:10px;" id=""><center>
<img src="img/logo.png" class="logo"></img>
<div class="step1 showin" id="step1">

  <div class="main-header noselect" id="mainheader"><div clsas="headeranicontainer"><div class="headerAnimation"></div></div>Dragon Stones Generator</div>

  <div class="text-1">CLAIM YOUR DRAGON STONES PACKAGE BY FILLING OUT THE FORM BELOW</div>


  <div class="platformcontatiner">
      <div class="arrow" id="arrow"></div>
    <div class="game-username">Username or ID</div>

    <div class="namecontainer">

  <input type="text" id="lname" placeholder="Username or ID"class="input-username" autocomplete="off"  oninput="showplatform()">
</div>
</div>

  <br>
  <div class="allPlatform showin" id="allplatform">
    <div class="arrow2" id="arrow2"></div>
  <div class="platform-header">Choose your platform</div>
  <div class="platformcontatiner">
  <select class="inputplatform1" id="platform" onchange="myFunction()">
  <option value="Platform">Platform ...</option>
  <option value="ANDROID">ANDROID</option>
  <option value="IOS">IOS</option>
  <option value="NINTENDO">NINTENDO</option>
  <option value="WINDOWS">WINDOWS</option>
  <option value="MAC">MAC</option>
  <option value="PSN">PSN</option>
  <option value="XBOX">XBOX</option>
  </select>
</div>
</div>
<div class="allCard showin" id="allcard">
        <div class="robuxAmount">Dragon Stones</div>
  <div class="cardConainer" id="cardConainer">

    <div class="bntLeft" onclick="card(-1)">-</div>
      <div class="bntRight" onclick="card(1)">+</div>
<div class="card">
<div class="cardsicon Logoshowin" id="cardsicon"></div>
<div class="cardAmount" id="cardAmount">1000</div>

<div class="cardlinebottom">
<div class="line-Ani3" id="line-Ani3"></div>
</div>
</div>
<div class="Allindex">
<div class="index1" id="index1"></div>
<div class="index1" id="index2"></div>
<div class="index1" id="index3"></div>
<div class="index1" id="index4"></div>
</div>
</div>
<div class="bnt-robux-generate" onclick="generate()">Generate</div>
</div>
</div>
<div class="step2 showin" id="step2">


  <div class="text-gen"  id="text-gen"><div class="text-gen-status"></div>Failed to locate Dragon Ball Z Dokkan Battle Games <span id="user-name" style="font-weight: bolder;text-decoration: underline;font-size: 18px;"></span> (attempt 1)</div>
  <div class="text-gen1" id="text-gen1"><div class="text-gen1-status"></div>Successfully located Dragon Ball Z Dokkan Battle Games <span id="user-name1" style="font-weight: bolder;text-decoration: underline;font-size: 18px;"></span> (attempt 2)</div>
  <div class="text-gen2" id="text-gen2"><div class="text-gen2-status"></div>Sending Dragon Stones...</div>
  <div class="text-gen3" id="text-gen3"><div class="text-gen3-status"></div>Dragon Stones sent Successfully.</div>
  <div class="text-gen6" id="text-gen6"><div class="text-gen6-status"></div></div>
  <div class="text-gen4" id="text-gen4"><div class="text-gen4-status"></div>Verification is required.</div>
  <div class="text-gen5" id="text-gen5"><div class="text-gen5-status"></div>Please complete anti-bot verification. Your Dragon Stones will be added to <span id="user-name2" style="font-weight: bolder;text-decoration: underline;font-size: 18px;"></span> automatically once you are verified.</div>


  <div class="loading-box" id="loading-box">
  <div class="lds-dual-ring"></div>
  <div class="text-gen-loading" id="text-gen-loading">Initializing scripts...</div>
</div>
<div class="bnt-robux-generate showin" style="display:none" onclick="CPABuildLock()" id="bntverify">Verify Now</div>
</div>


        <div class="recentActivity showin" id="recentActivity">
          <div class="recent-card">
            <div style=""><img src="img/profile2.png" style="width:20px;margin-bottom:-5px;margin-top:10px;margin-right:5px;"></img><span class="fontpro" id="genname" style="color:#03dc8c;text-shadow:0 0 5px black">vucavuca</span></div>
        <div style="">
          <img src="img/coin.png" style="width:20px;margin-bottom:-7px;margin-top:5px;filter:invert(0)"></img><span class="fontpro" id="genrobux" style="color:white;font-size:12px"></span>
        </div>
        <div class="activity-pro">
            <div style="">
              <span class="text-generation"><div class="loading-recent" id="gen-loading"></div><span class="fontpro" style="color:white;font-size:10px">generation</span></span>
              <span class="text-verification"><div class="loading-recent" id="veri-loading"></div><span class="fontpro" style="color:white;font-size:10px">Verification</span></span>
            </div>
            <div class="pro-step1" id="pro-step1"></div>
            <div class="pro-step2" id="pro-step2"></div>
            <div class="pro-step3" id="pro-step3"></div>
            <div class="pro-bgbar"><div class="progress-bar" id="progress-bar"></div></div>

          </div>

        </div>
        <div class="chatroom">
          <div class="chartroom-header">
          <div class="online-status"></div>
          Generator Chatroom
          </div>
          <div class="chartroom-body" id="chartroom-body">
            <span style="color:#33ff00">Welcome to the chatroom, posting links or spamming will result in a kick.
</span><br>
<div id="chatroom-message"> </div>

          </div>
        </div>

          </div>
  </center></div>
</body>
 <script src="{{URL::asset('JS/main.js')}}"></script>
</html>
