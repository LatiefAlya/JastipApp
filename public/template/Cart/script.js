const price = document.getElementById("price");
const total = document.getElementById("total");
const num = document.getElementById("counter");
const incerement = document.getElementById("incerement");
const decrement = document.getElementById("decerement");

let counter = 1;

num.textContent = counter;
function updateTotal() {
  total.textContent = `Rp.${counter * price.textContent}`;
}
incerement.onclick = function () {
  counter++;
  num.textContent = counter;
  updateTotal();
};
decrement.onclick = function () {
  if (counter > 1) {
    counter--;
    num.textContent = counter;
    updateTotal();
  } else {
    if (confirm("Apakah Anda Yakin Ingin Menghapus Item Ini?") == true) {
      document.getElementById("list-cart").remove();
    }
  }
};

$(document).ready(function () {
  $("#checkall").change(function () {
    $(".cb-element").prop("checked", this.checked);
  });

  $(".cb-element").change(function () {
    if ($(".cb-element:checked").length == $(".cb-element").length) {
      $("#checkall").prop("checked", true);
    } else {
      $("#checkall").prop("checked", false);
    }
  });

  $("#delete").click(function () {
    $(".cb-element:checked").each(function () {
      $("#list-cart").remove();
    });
  });
});
