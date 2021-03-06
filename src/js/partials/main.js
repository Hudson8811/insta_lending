$(document).ready(function () {
  $(".pay .call--js").click(function () {
    var service = $(this)
      .siblings(".pay__content")
      .children(".pay__title")
      .text();

    $(".hide_input").val(service);

    console.log(service);
  });

  $("input[name='phone']").mask(" +7 (999) 999-99-99");

  function modal() {
    $.fancybox.open({
      src: "#modal2",
      type: "inline",
    });
  }

  function modal2() {
    $.fancybox.open({
      src: "#modal2",
      type: "inline",
    });
  }

  $(document).on("click", ".call--js", function (e) {
    e.preventDefault();
    modal();
  });

  $(document).on("click", ".cons--js", function (e) {
    e.preventDefault();
    modal2();
  });

  $(".kays__catalog").slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [
      {
        breakpoint: 999,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  });

  $(".reviwe__catalog").slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [
      {
        breakpoint: 999,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  });

  var check = true;

  function validator(item) {
    check = true;

    $(item)
      .find("required")
      .each(function () {
        if ($(this).hasClass("required") && $(this).val() == "") {
          check = false;
          $(this).css("border", "1px solid red");
        } else {
          $(this).css("border", "1px solid transparent");
        }
      });

    if (check) {
      return true;
    } else {
      return false;
    }
  }

  $("#form1").submit(function () {
    if (!validator(this)) {
      return false;
    }

    $.ajax({
      type: "POST",
      url: "php/form1.php",
      data: $("#form1").serialize(),
      success: function (html) {},
    });

    $("#form1").trigger("reset");
    return false;
  });
});
