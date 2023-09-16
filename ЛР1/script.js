document.addEventListener("DOMContentLoaded", function () {
    var windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    var windowHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
    
    var screenWidth = screen.width;
    var screenHeight = screen.height;
    var availScreenWidth = screen.availWidth;
    var availScreenHeight = screen.availHeight;
    var colorDepth = screen.colorDepth;

    document.getElementById("windowSize").textContent = "Ширина окна: " + windowWidth + " пикселей, Высота окна: " + windowHeight + " пикселей";
    document.getElementById("screenInfo").textContent = "Ширина экрана: " + screenWidth + " пикселей, Высота экрана: " + screenHeight + " пикселей";
    document.getElementById("availScreenInfo").textContent = "Доступная ширина экрана: " + availScreenWidth + " пикселей, Доступная высота экрана: " + availScreenHeight + " пикселей";
    document.getElementById("colorDepth").textContent = "Глубина цвета экрана: " + colorDepth + " бит";
});
