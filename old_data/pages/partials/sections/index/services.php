<div class="container">
  <div class="header"> بالتعلم استطيع</div>
  <div class="splide" id="slider1">
    <div class="splide__track">
      <ul class="splide__list">
        <?php
        $ad_learnning = get_data($conn, "ad_learnning");
        foreach ($ad_learnning as $key => $item) {
        ?>
          <li class="splide__slide">
            <div class="card-image">
              <img src="../assets/uploads/<?php echo $item['id'] . "/" . $item['photo'] ?>" alt="" class="card-img">
              <div class="card-content">
                <h2 class="name" id="header-db"> <?php echo $item['header'] ?> </h2>
                <p class="description">
                  <?php echo $item['description'] ?>
                </p>
                <button class="button" id="btn_services" data-modal="modal-learnning"> تبرع الان</button>
              </div>
            </div>
            
          </li>
        <?php } ?>

      </ul>
    </div>
  </div>
</div>
<?php include($partials . 'modal_payment_learnning.php'); ?>
<script>
  const modalButtons = document.querySelectorAll("#btn_services");
  const modals = document.querySelectorAll("#modal-learnning");
  modalButtons.forEach(button => {
    button.addEventListener("click", () => {
      modals.forEach(modal => {
        modal.style.display = "none";
      });
      const modalId = button.getAttribute("data-modal");
      const modal = document.getElementById(modalId);
      modal.style.display = "block";
    });
  });

  const closeButtons = document.querySelectorAll(".close-modal");
  closeButtons.forEach(closeButton => {
    closeButton.addEventListener("click", () => {
      const modal = closeButton.parentElement.parentElement;
      modal.style.display = "none";
    });
  });
  const cancel = document.querySelectorAll("#cancel");
  cancel.forEach(closeButton => {
    cancel.addEventListener("click", () => {
      const modal = closeButton.parentElement.parentElement;
      modal.style.display = "none";
    });
  });


  window.addEventListener("click", event => {
    if (event.target.classList.contains("modal")) {
      event.target.style.display = "none";
    }
  });

  account_person();
</script>
<style>
  .services {
    background-image: linear-gradient(to bottom, #436ab3, #32bcad, #84c98b);
    width: 100%;
    padding-bottom: 12px;
    height: 550px;
  }

  @media screen and (max-width: 768px) {
    .services {
      height: calc(100vh - 130px);
    }
  }

  .services .header {
    text-align: center;
    font-size: 40px;
    color: #fff;
    padding-top: 18px;
    padding-bottom: 18px;
  }

  @media screen and (max-width: 768px) {
    .services .header {
      font-size: 30px !important;
      padding-top: 10px;
      padding-bottom: 10px;
    }
  }

  .services .slide-container {
    max-width: 1120px;
    width: 100%;
  }

  @media screen and (max-width: 768px) {
    .services .slide-container {
      padding: 0;
    }
  }

  .services .slide-content {
    margin: 0 40px;
    overflow: hidden;
    border-radius: 25px;
  }

  .services .card {
    border-radius: 25px;
    background-color: #fff;
    width: 400px !important;
    margin: 11% 30%;
  }

  .services .image-content,
  .services .card-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 10px 14px;
  }

  .services .image-content {
    position: relative;
    row-gap: 5px;
    padding: 25px 0;
  }


  .services .card-image {
    position: relative;
    height: 400px;
    width: 300px;
    border-radius: 20px;
    background: #fff;
    padding: 10px;
  }

  .services .card-image .card-img {
    height: 60%;
    width: 100%;
    object-fit: cover;
    border-radius: 20px;
  }

  .services .name {
    font-size: 18px;
    font-weight: 500;
    color: #333;
  }

  .services .description {
    font-size: 14px;
    color: #707070;
    text-align: center;
  }

  .services .button {
    border: none;
    font-size: 16px;
    color: #fff;
    padding: 8px 16px;
    background-color: var(--buttons);
    border-radius: 6px;
    margin: 14px;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .services .button:hover {
    background: #265df2;
  }
</style>