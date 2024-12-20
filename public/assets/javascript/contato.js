let textarea =  document.querySelector('#textarea');
textarea.addEventListener('keyup', e =>{
    let textHeight = e.target.scrollHeight;
    console.log(textHeight);
    textarea.style.height = `${textHeight}px`
    if(textarea == ''){
        textarea.style.height = `59px`;
        textarea.value.innerText = ''
    }
})

document.addEventListener("DOMContentLoaded", function() {
    let loop = document.querySelector("#loop");

    if (loop) {
        var performanceTiming = window.performance.timing;
        var loadTime = performanceTiming.loadEventEnd - performanceTiming.navigationStart;

        if (loadTime >= 2000) {
            loop.style.display = "block";
        } else {
            loop.style.display = "none";
        }
    }

    setTimeout(() => {
        document.querySelector("main").style.display = "block";
    }, 1000); // Delay by 1 second
});
