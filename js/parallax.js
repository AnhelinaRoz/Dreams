"use strict"
window.onload = function() {
  const parallax = document.querySelector('.parallax');
    if (parallax) {
      const content = document.querySelector('.parallax_label');
      const forClouds = 5;

      const speed = 0.05;

      let positionX = 0,
        positionY = 0;
      let coordXprocent = 0,
        coordYprocent = 0;
  console.log (content);
      function setMouseParallaxStyle() {
        const distX = coordXprocent - positionX;
        const distY = coordYprocent - positionY;

        positionX = positionX + (distX * speed);
        positionY = positionY + (distY * speed);
        content.style.cssText = `transform: translate(${positionX / forClouds}% , ${positionY / forClouds}% )`;
        requestAnimationFrame(setMouseParallaxStyle)
      }
      setMouseParallaxStyle();
      parallax.addEventListener("mousemove", function(e) {
        const parallaxWidth = parallax.offsetWidth;
        const parallaxHeight = parallax.offsetHeight;

        const coordX = e.pageX - parallaxWidth / 2;
        const coordY = e.pageY - parallaxHeight / 2;

        coordXprocent = coordX / parallaxWidth * 100;
        coordYprocent = coordY / parallaxHeight * 100;
      })
    }const parallax_smm = document.querySelector('.parallax.smm');
      if (parallax) {
        const content = parallax_smm.querySelector('.parallax_label');
        const forClouds = 5;

        const speed = 0.05;

        let positionX = 0,
          positionY = 0;
        let coordXprocent = 0,
          coordYprocent = 0;
    console.log (content);
        function setMouseParallaxStyle() {
          const distX = coordXprocent - positionX;
          const distY = coordYprocent - positionY;

          positionX = positionX + (distX * speed);
          positionY = positionY + (distY * speed);
          content.style.cssText = `transform: translate(${positionX / forClouds}% , ${positionY / forClouds}% )`;
          requestAnimationFrame(setMouseParallaxStyle)
        }
        setMouseParallaxStyle();
        parallax_smm.addEventListener("mousemove", function(e) {
          const parallaxWidth = parallax.offsetWidth;
          const parallaxHeight = parallax.offsetHeight;

          const coordX = e.pageX - parallaxWidth / 2;
          const coordY = e.pageY - parallaxHeight / 2;

          coordXprocent = coordX / parallaxWidth * 100;
          coordYprocent = coordY / parallaxHeight * 100;
        })
      }
}
