//  Swiper Services

document.addEventListener("DOMContentLoaded", function () {
  new Splide('#slider1', {
      perPage: 2, // عدد الشرائح المعروضة في وقت واحد
      perMove: 1, // عدد الشرائح المتحركة عند التنقل
      pagination: false, // تعطيل الصفحة
      arrows: true, // تمكين الأسهم للتنقل
      direction: 'rtl'
  }).mount();
});
document.addEventListener("DOMContentLoaded", function () {
  new Splide('#slider2', {
      perPage: 2, // عدد الشرائح المعروضة في وقت واحد
      perMove: 1, // عدد الشرائح المتحركة عند التنقل
      pagination: false, // تعطيل الصفحة
      arrows: true, // تمكين الأسهم للتنقل
      direction: 'rtl'
  }).mount();
});