<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width = device-width, initial-scale = 1">
		<title>skillstack.ph</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel = "stylesheet" type = "text/css" href = "css/style.css">
	</head>
	<body>
    <? include 'headerHome.php'; ?>
		<div class="container" id="modulePage" style="padding-top: 120px;" align="center">
      <div class="jumbotron">
          <img src="images/green-circle.png" style="margin: 24px; margin-right: 0px;" height="32" width="32" align="right">
          <p id="lessonTitle" align="left">Lesson 1 - Value Proposition</p>
          <p id="lessonMentor" align="left">Business Plan Making by Paul Rivera</p>
          <hr>
          <div id="player"></div>
          <script>
            var tag = document.createElement('script');
            tag.src = "https://www.youtube.com/iframe_api";
            var firstScriptTag = document.getElementsByTagName('script')[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
            var player;
            function onYouTubeIframeAPIReady(){
              player = new YT.Player('player', {
              height: '350',
              width: '600',
              videoId: 'M7lc1UVf-VE',
              events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
              }
              });
            }
            function onPlayerReady(event) {
              event.target.playVideo();
            }
            var done = false;
            function onPlayerStateChange(event) {
              if (event.data == YT.PlayerState.PLAYING && !done) {
                setTimeout(stopVideo, 6000);
                done = true;
              }
            }
            function stopVideo() {
              player.stopVideo();
            }
          </script>
          <hr>
          <p style="font-size: 16px">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
	</body>
</html>