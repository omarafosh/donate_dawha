document.addEventListener("DOMContentLoaded", function () {
    new Splide('#slider-projects', {
        perPage: 2, // عدد الشرائح المعروضة في وقت واحد
        perMove: 1, // عدد الشرائح المتحركة عند التنقل
        pagination: false, // تعطيل الصفحة
        arrows: true, // تمكين الأسهم للتنقل
        direction: 'rtl'
    }).mount();
  });
  document.addEventListener("DOMContentLoaded", function () {
    new Splide("#slider-campaigns", {
      perPage: 2, // عدد الشرائح المعروضة في وقت واحد
      perMove: 1, // عدد الشرائح المتحركة عند التنقل
      pagination: false, // تعطيل الصفحة
      arrows: true, // تمكين الأسهم للتنقل
      direction: "rtl",
    }).mount();
  });


      header_db = document.querySelector("#header-db");
      document.querySelector(".header-model").innerHTML = header_db.innerHTML;
      function account_person(payment) {
        person = 1;
        if (payment > 324) {
          person = 2;
        }
        part1 = " انت الانت سوف تقوم بالمساهمة في تعليم";
        part2 =
          "<br>" +
          "<span style='font-size: 20px; color:#e00570;'>" +
          person +
          "</span>" +
          "فرد ";
        document.querySelector("#person").innerHTML = part1 + part2;
      }

      buttons = document.querySelectorAll('label[name="button"]');
      options = document.querySelectorAll('input[name="amount"]');
      payment = document.querySelector(".payment");
      buttons.forEach(function (button, index) {
        button.addEventListener("click", function () {
          options[index].checked = true;
          payment.value = options[index].value;
          account_person(payment.value);
        });
      });