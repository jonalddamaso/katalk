<!DOCTYPE html>
<html>
<head>
	<title>Loader</title>
	<style type="text/css">
		html, body {
  background: #347fc3;
  width: 100%;
  overflow-x: hidden;
  overflow-y: hidden;
}

.bar {
  position: relative;
  height: 2px;
  width: 500px;
  margin: 0 auto;
  background: #fff;
  margin-top: 150px;
}

.circle {
  position: absolute;
  top: -30px;
  margin-left: -30px;
  height: 60px;
  width: 60px;
  left: 0;
  background: #fff;
  border-radius: 30%;
  -webkit-animation: move 5s infinite;
}

p {
  position: absolute;
  top: -35px;
  right: -85px;
  text-transform: uppercase;
  color: #347fc3;
  font-family: helvetica, sans-serif;
  font-weight: bold;
}

@-webkit-keyframes move {
  0% {left: 0;}
  50% {left: 100%; -webkit-transform: rotate(450deg); width: 150px; height: 150px;}
  75% {left: 100%; -webkit-transform: rotate(450deg); width: 150px; height: 150px;}
  100 {right: 100%;}
} 
	</style>
</head>
<body>
	<div class="bar flex-center position-ref full-height">
  <div class="circle"></div>
  <p>Loading</p>
</div>
</body>
</html>