<div class="container">
  <div class="header"> الحملات الحالية</div>
  <div class="splide" id="slider2">
    <div class="splide__track">
      <ul class="splide__list">
        <?php
        $ad_campaigns = get_data($conn, "ad_campaigns");
        foreach ($ad_campaigns as $key => $item) {
        ?>
          <li class="splide__slide">
            <div class="card-image">
              <div class="overlay"></div>
              <img src="../assets/uploads/<?php echo $item['id'] . "/" . $item['photo'] ?>" alt="" class="card-img">
              <div class="card-content">
                <h2 class="name"> <?php echo $item['header'] ?> </h2>
                <p class="description">
                  <?php echo $item['description'] ?>
                </p>
              </div>
              <button class="button" id="btn_chrity" data-modal="modal-chrity"> تبرع الان</button>
            </div>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>

</div>
<?php include($partials . 'modal_payment_chrity.php'); ?>

<script>
  const modalButtons_chrity = document.querySelectorAll("#btn_chrity");
  console.log(modalButtons_chrity);
  const modals_chrity = document.querySelectorAll("#modal-chrity");
  modalButtons_chrity.forEach(button => {
    button.addEventListener("click", () => {
      modals_chrity.forEach(modal => {
        modal.style.display = "none";
      });
      const modalId_chrity = button.getAttribute("data-modal");
      const modal_chrity = document.getElementById(modalId_chrity);
      modal_chrity.style.display = "block";
    });
  });

  const closeButtons_chrity = document.querySelectorAll(".close-modal-chrity");
  closeButtons_chrity.forEach(closeButton => {
    closeButton.addEventListener("click", () => {
      const modal_chrity = closeButton.parentElement.parentElement;
      modal_chrity.style.display = "none";
    });
  });
  const cancel_chrity = document.querySelectorAll("#cancel");
  cancel_chrity.forEach(closeButton => {
    cancel.addEventListener("click", () => {
      const modal_chrity = closeButton.parentElement.parentElement;
      modal_chrity.style.display = "none";
    });
  });


  window.addEventListener("click", event => {
    if (event.target.classList.contains("modal")) {
      event.target.style.display = "none";
    }
  });
</script>
<style>
  /* Start campaigns */

  .campaigns {
    background-color: #fff;
    width: 100%;
    padding-bottom: 12px;
    height: 550px;
  }

  .splide__arrows--rtl .splide__arrow--prev {
    left: auto;
    right: -5em;
  }

  .splide__arrows--rtl .splide__arrow--next {
    left: -5em;
    right: 100%;
  }

  @media screen and (max-width: 768px) {
    .splide__slide {
      width: 100% !important;
      display: flex;
      justify-content: center;
    }

    .splide__arrows--rtl .splide__arrow--prev {
      left: auto;
      right: 0em;
    }

    .splide__arrows--rtl .splide__arrow--next {
      left: 1em;
      right: 94%;
    }
  }

  .campaigns .card {
    border-radius: 25px;
    background-color: #fff;
    width: 400px !important;
    margin: 11% 30%;
  }

  .campaigns .image-content,
  .campaigns .card-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    position: absolute;
    padding: 10px 14px;
    top: 0px;
    width: 100%;
  }

  .campaigns .image-content {
    position: relative;
    row-gap: 5px;
    padding: 25px 0;
  }

  .campaigns .overlay {
    position: absolute;
    left: 9px;
    top: 10px;
    height: 90%;
    width: 94%;
    background-color: rgb(0, 0, 0, 0.3);
    border-radius: 25px;
  }

  .campaigns .card-image {
    position: relative;
    height: 400px;
    width: 300px;
    border-radius: 20px;
    background: #fff;
    padding: 10px;
    border: 1px solid #ccc;

  }

  .campaigns .card-image .card-img {
    height: 360px;
    width: 100%;
    object-fit: cover;
    border-radius: 20px;
  }

  .campaigns .name {
    font-size: 18px;
    font-weight: 700;
    color: #fff;
  }

  .campaigns .description {
    font-size: 14px;
    color: #fff;
    text-align: center;
  }

  .campaigns .button {
    border: none;
    font-size: 16px;
    color: #fff;
    padding: 8px 48px;
    background-color: var(--buttons);
    border-radius: 6px;
    margin: 14px;
    cursor: pointer;
    transition: all 0.3s ease;
    position: absolute;
    top: 82%;
    left: 22%;
  }

  .campaigns .header {
    text-align: center;
    font-size: 40px;
    color: var(--buttons);
    padding-top: 18px;
    padding-bottom: 18px;
  }

  .campaigns .button:hover {
    background: #265df2;
  }

  /* End campaigns */
</style>