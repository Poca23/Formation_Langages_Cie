const slide = [
  "share-2482016_1920.jpg",
  "horses-5365974_1920.jpg",
  "golf-787826_1920.jpg",
  "siblings-7103506_1920.jpg",
  "tennis-1381230_1920.jpg",
  "trees-7710539_1920.jpg",
];
let numero = 0;

function changeSlide(sens) {
  numero = numero + sens;
  if (numero > slide.length - 1) numero = 0;
  if (numero < 0) numero = slide.length - 1;
  document.getElementById("slide").src =
    "../htmlCss241122/assets/" + slide[numero];
}

intervalID = continueSlide();

function stopSlide() {
  clearInterval(intervalID);
}
function continueSlide() {
  intervalID = setInterval("changeSlide(1)", 1500);
  return intervalID;
}
