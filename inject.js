setInterval(function(){fetch('https://yourdomain.com/check.php')
    .then(function(response) {
      return response.text();
    })
    .then(function(text) {
      if (text == "j"){
        // Here, insert the code you'd like to run when someone fetches privolat.php
      }
    })},5555)
