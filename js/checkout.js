document.getElementById("checkout-btn").onclick = function () {
  document.getElementById("left-content").style.width = "100%";
  document.getElementById("lowerleft-content").style.width = "70%";
  document.getElementById("right-content").style.width = "0%";
  document.getElementById("right-content").style.display = "none";
  let price = document.getElementsByClassName("proPrice");
  for (var i = 0; i < price.length; i++) {
    price[i].textContent = "Purchased!";
    //display total price
    var totalPrice = 1;
    totalPrice += 1;
  }

  let time = document.getElementById("time").value;
  let date = document.getElementById("deliverydate").value;
  let content = document.querySelector(".right");
  let deltime = document.createElement("div");
  deltime.innerHTML =
    "Preparing your order!<br>Please Prepare " +
    totalPrice +
    "php and<br> pick up<br>" +
    date +
    " in " +
    time;
  deltime.classList.add("deltime");
  content.appendChild(deltime);

  let left = document.getElementById("left");
  left.style.width = "fit-content";

  let widthMatch = window.matchMedia("(max-width: 700px)");
  if (widthMatch.matches) {
    document.getElementById("left-content").style.display = "inline-block";
  }
  widthMatch.addEventListener("change", function (mm) {
    if (mm.matches) {
      document.getElementById("left-content").style.display = "inline-block";
    }
  });

  let arrow = document.getElementById("arrow");
  arrow.remove();
};
