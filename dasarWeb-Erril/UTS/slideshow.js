
var i = 0;
const images = [
    "./img/arwana1.png",
    "./img/arwana2.jpg",
]

$(document).ready(function () {
  $("#slider img").hide();
  showNextImage();
  setInterval("showNextImage()", 3000);
});

function showNextImage() {
  i++;
  if (i >= images.length) {
    i = 0;
  }
  $("#slider img")
    .attr("src", images[i])
    .fadeIn(1100)
    .fadeOut(1100);
}