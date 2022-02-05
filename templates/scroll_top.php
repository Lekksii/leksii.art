<a class="f-ua" id="btn-back-to-top">
    <i class="fas fa-arrow-up"></i>
</a>

<script>
    //Берем кнопку
let mybutton = document.getElementById("btn-back-to-top");

// КОгда мі удалимся вниз на 20 пикселей - показываем кнопку
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// Когда юзер тыкает на кнопку - переносимся наверх
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>