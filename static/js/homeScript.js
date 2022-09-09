// services scripts
    function openDoor() {
        content1.style.transform = "translateX(0)";
        content2.style.transform = "translateX(1000px)";
        content3.style.transform = "translateX(1000px)";
        but1.style.color = "#2fccf8";
        but2.style.color = "#555";
        but3.style.color = "#555";
        content1.style.transitionDelay = "0.3s";
        content2.style.transitionDelay = "0";
        content3.style.transitionDelay = "0";
    }
    function openWindow() {
        content1.style.transform = "translateX(1000px)";
        content2.style.transform = "translateX(0)";
        content3.style.transform = "translateX(1000px)";
        but1.style.color = "#555";
        but2.style.color = "#2fccf8";
        but3.style.color = "#555";
        content1.style.transitionDelay = "0";
        content2.style.transitionDelay = "0.3s";
        content3.style.transitionDelay = "0";
    }
    function openProduct() {
        content1.style.transform = "translateX(1000px)";
        content2.style.transform = "translateX(1000px)";
        content3.style.transform = "translateX(0)";
        but1.style.color = "#555";
        but2.style.color = "#555";
        but3.style.color = "#2fccf8";
        content1.style.transitionDelay = "0";
        content2.style.transitionDelay = "0";
        content3.style.transitionDelay = "0.3s";
    }
