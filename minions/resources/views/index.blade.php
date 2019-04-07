<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Minions</title>
  <style>
    html, body {
      margin: 0;
      padding: 0;,
      height: 100%;
      width: 100%;
      background-color: #d1d1d1
    }
    #mute {
      position: absolute;
    }
    #mute.on {
      opacity: 0.7;
      z-index: 1000;
      background: white;
      height: 100%;
      width: 100%;
    }
    .minion {
        margin: 10px auto;
        padding-bottom: 5px;
        border-bottom: 1px solid #BBB;
    }
    .color {
        display: inline-block;
        width: 100px;
        height: 30px;
        border-radius: 5px;
    }
    .color.green {
        background-color: green;
    }
    .color.red {
        background-color: red;
    }
    .color.blue {
        background-color: blue;
    }
  </style>
</head>
<body>
    <div id="app"></div>
    <script src="js/app.js"></script>
</body>
</html>