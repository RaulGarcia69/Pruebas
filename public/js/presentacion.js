function changeImage() {
    document.getElementById("myImage").src = "http://localhost/proyectos/primera-prueba/public/images/jaja.jpg";
  }

  function restoreImage() {
    document.getElementById("myImage").src = "http://localhost/proyectos/primera-prueba/public/images/beee.jpg";
  }

  /**video */

  document.addEventListener("DOMContentLoaded", function() {
    const videoItems = document.querySelectorAll(".video-item");
  
    videoItems.forEach(function(videoItem) {
      const image = videoItem.querySelector("img");
      const video = videoItem.querySelector("video");
  
      let isPlaying = false;
      let seekTime = 0;
  
      videoItem.addEventListener("click", function() {
        if (isPlaying) {
          video.pause();
          isPlaying = false;
        } else {
          image.style.opacity = 0;
          video.style.display = "block";
          video.currentTime = seekTime;
          video.play();
          isPlaying = true;
        }
      });
  
      video.addEventListener("timeupdate", function() {
        seekTime = video.currentTime;
      });
  
      videoItem.addEventListener("mouseleave", function() {
        if (isPlaying) {
          video.pause();
          isPlaying = false;
        }
        video.style.display = "none";
        image.style.opacity = 1;
      });
    });
  });