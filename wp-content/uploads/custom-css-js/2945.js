<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
var images = ['imagem1.jpg', 'imagem2.jpg', 'imagem3.jpg'];
var currentIndex = 0;

function changeBackground() {
    document.querySelector('.slideshow-container').style.backgroundImage = "url('" + images[currentIndex] + "')";
    currentIndex = (currentIndex + 1) % images.length;
}

setInterval(changeBackground, 5000);</script>
<!-- end Simple Custom CSS and JS -->
