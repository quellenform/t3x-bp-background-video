// Add automatic playback of background videos on iOS devices when energy-saving mode has been activated.
document.addEventListener('DOMContentLoaded', () => {

  Object.defineProperty(HTMLMediaElement.prototype, 'playing', {
    get: function () {
      return !!(this.currentTime > 0 && !this.paused && !this.ended && this.readyState > 2);
    }
  });

  const videoAutoplay = () => {
    const videos = document.querySelectorAll('.backgroundvideo');
    if (videos.length >= 1) {
      videos.forEach(function (element) {
        if (!element.playing) {
          // Video is not playing, so play video now
          element.play();
        }
      });
    }
  };

  // Add triggers to the body
  const body = document.querySelector('body');
  body.addEventListener('click', videoAutoplay);
  body.addEventListener('touchstart', videoAutoplay);
});
