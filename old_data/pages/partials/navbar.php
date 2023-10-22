  <div class="header-bar">
    <div class="container">
      <div class="avtar">
        <img src="../assets/imgs/femal.png" alt="">
        <div class="login"> <a href="../pages/auth/login.php">تسجيل الدخول </a></div>|
        <div class="login"> <a href="../pages/auth/register.php">تسجيل حساب </a></div>
      </div>
      <select name="currency" id="">
        <option value="QAR">ريال قطري - QAR</option>
        <option value="QAR">دولار امريكي - USD</option>
        <option value="QAR"> يورو - EUR</option>
        <option value="QAR">دينار كويتي - KWD</option>
        <option value="QAR">درهم اماراتي - AED</option>
        <option value="QAR">ريال سعودي - SAR</option>
        <option value="QAR">دينار بحريني - BHD</option>
      </select>
    </div>
  </div>
  <nav>
    <div class="container">
      <div class="logo">
        <i class="fa fa-bars" aria-hidden="true"></i>
        <a class="logo-text" href="../pages">الدوحة <br> الخيرية</a>
      </div>

      <ul class="nav-links">
        <li><a href="../pages">الرئيسية</a></li>
        <li><a href="../pages/donate.php">بناء المساجد</a></li>
        <li><a href="../pages/learnning.php"> التعليم</a></li>
        <li><a href="../pages/sponsorship.php">كفالة يتيم</a></li>
        <li><a href="../pages/chrity.php">صدقات</a></li>
        <li><a href="../pages/contact-us.php"> اتصل بنا</a></li>
      </ul>
      <a class="btn-donate" href="../pages/donate-fast.php">
        تبرع
      </a>
    </div>
  </nav>

  <style>
    /* Start Info */

    .logo-text {
      font-size: 16px;
      font-weight: 900;
      color: var(--buttons);
    }

    .info {
      height: calc(100vh - 100px);
    }

    .info .container {
      display: flex;
      height: 100%;

    }

    @media (max-width: 767px) {
      .info .container {
        flex-direction: column;

      }

      .header-bar .container {
        height: 40px;
      }
    }

    .info .container .sidebar {
      background-color: #f8f8f8;
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;

    }

    .info .container .content {
      height: 100%;
      flex: 3;
    }

    .sidebar img {
      width: 150px;
      border-radius: 50%;
      border: 5px solid #fff;
      margin-top: 25%;
    }

    .sidebar .personal {
      color: #84bbea
    }

    .sidebar .details {
      width: 100%;
      text-align: center;
    }

    .social {
      direction: ltr;
    }

    .social ul li {
      margin: 10px 0px;
    }

    .social ul li a {
      display: flex;
      justify-content: space-between;
      align-items: self-end;
      column-gap: 20px;
    }

    .social ul li a h6 {
      display: flex;
      align-items: center;
      column-gap: 3px;
    }

    .checked {
      color: orange;
    }

    /* End Info */

    /* Start Table */
    table {
      border: 1px solid #ccc;
      border-collapse: collapse;
      table-layout: fixed;
      width: 97%;
      margin: 15px auto;
    }

    table caption {
      font-size: 1.5em;
      margin: .5em 0 .75em;
    }

    table tr {
      background-color: #f8f8f8;
      border: 1px solid #ddd;
      padding: .35em;
    }

    table th,
    table td {
      padding: .625em;
      text-align: center;
    }

    table th {
      font-size: .85em;
      text-transform: uppercase;
    }

    @media screen and (max-width: 600px) {
      table {
        border: 0;
        width: 100%;
      }

      table caption {
        font-size: 1.3em;
      }

      table thead {
        border: none;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
      }

      table tr {
        border-bottom: 3px solid #ddd;
        display: block;
        margin-bottom: .625em;
      }

      table td {
        border-bottom: 1px solid #ddd;
        display: block;
        font-size: .8em;
        text-align: left;
      }

      table td::after {
        content: attr(data-label);
        float: right;
        font-weight: bold;
        text-transform: uppercase;
      }

      table td:last-child {
        border-bottom: 0;
      }
    }

    .login a {
      color: white !important;
    }


    /* End Table */
  </style>