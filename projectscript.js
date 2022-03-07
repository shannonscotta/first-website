    function fadeIn(el) {
        
        el.style.opacity = 0;
        var tick = function () {
            el.style.opacity = +el.style.opacity + 0.005;
            if (+el.style.opacity < 1) {
                (window.requestAnimationFrame && requestAnimationFrame(tick)) || setTimeout(tick, 16)
            }
        };
        tick();
    }
 
    
   
    let d = document.getElementById("tesla");

    fadeIn(d); 