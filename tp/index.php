<head>
  <meta charset="utf-8">
  <meta name="robots" content="noindex" />
  <style type="text/css">
    body {
      margin: 0;
      padding: 0;
    }
  </style>
</head>
<script type="text/javascript">
  function getParameterByName(name) {
    name = name.replace(/[\[]/, "\[").replace(/[\]]/, "\]");
    var regex = new RegExp("[\?&]" + name + "=([^&#]*)"),
      results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
  }

  var getURL = getParameterByName('get');
  var getIMG = getParameterByName('img');
  var getKEY = getParameterByName('key');
  var getKEY2 = getParameterByName('key2');
  if (getURL == "#") {alert('Vuelve a la página anterior');}
</script>
<script src='https://content.jwplatform.com/libraries/KB5zFt7A.js'></script>
<script> jwplayer.key = 'XSuP4qMl+9tK17QNb+4+th2Pm9AWgMO/cYH8CI0HGGr7bdjo';</script>
<div id="player"></div>
<script type="text/javascript">
  var playerInstance = jwplayer("player");

  playerInstance.setup({

    playlist: [{
      "title": "",
      "description": "",
      "image": getIMG,
      "sources": [
        {
          "default": false,
          "type": "dash",
          "file": getURL,
          "drm": {
            "clearkey": {"keyId": getKEY, "key": getKEY2}
          },
          "label": "0"
        }
      ]
    }],
    width: "100%",
    height: "100%",
    aspectratio: "16:9",
    autostart: true,
    cast: {},
    sharing: {}
  });
</script>

</html>