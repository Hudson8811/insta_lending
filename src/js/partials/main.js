$(document).ready(function () {
  $("input[name='phone']").mask(" +7 (999) 999-99-99");

  function modal() {
    $.fancybox.open({
      src: "#modal1",
      type: "inline",
    });
  }

  $(document).on("click", ".call--js", function (e) {
    e.preventDefault();
    modal();
  });
});
