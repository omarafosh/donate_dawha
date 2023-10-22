
  .footer {
    background-color: #000;
    color: #fff;
    width: 100%;
    margin: 0px auto;
    padding-top: 30px;
  }

  .footer .container .footer-content {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
  }

  @media screen and (max-width: 768px) {
    .footer .container .footer-content {
      align-items: center;
    }
  }

  .footer .header-footer {
    text-align: right;

  }

  .footer .small-icon {
    width: 100px;
    height: 100px;
  }

  .footer .icon {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    column-gap: 46px;
    row-gap: 15px;

  }

  @media screen and (max-width: 768px) {
    .footer .icon {
      grid-template-columns: repeat(1, 1fr);
      column-gap: 10px;
    }
  }

  .footer footer {
    background-color: #121315;
    color: #a7a7a7;
    font-size: 16px;
    width: 100%;
  }

  .footer .row {
    padding: 1em 1em;
  }

  .footer .row.primary {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    align-items: stretch;
    row-gap: 30px;
    text-align: center;
  }


  @media screen and (max-width: 768px) {
    .footer h3 {
      text-align: center !important;
    }
  }

  @media screen and (max-width: 768px) {
    .footer .column {
      text-align: center;
    }
  }

  .footer ul {
    list-style: none;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 0;
    margin: 0;
  }

  .footer li:not(:first-child) {
    margin-top: 0.8em;
  }

  .footer ul li a {
    color: #a7a7a7;
    text-decoration: none;
  }

  .footer ul li a:hover {
    color: #2a8ded;
  }

  .footer .about p {
    text-align: justify;
    line-height: 2;
    margin: 0;
  }





  .footer div.social {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 2.4em;
    flex-direction: row;
    column-gap: 21px;
  }

  .footer .social i {
    color: #bac6d9;
  }

  .footer .copyright {
    padding: 1.3em 1em;

    font-size: 12px;
    padding: 10px;
  }

  .footer .footer-menu {
    float: left;
    margin-top: 10px;
  }

  .footer .footer-menu a {
    color: #cfd2d6;
    padding: 6px;
    text-decoration: none;
  }

  .footer .footer-menu a:hover {
    color: #27bcda;
  }

  .footer .copyright p {
    font-size: 0.9em;
    text-align: right;
  }

  @media screen and (max-width: 768px) {
    .footer .row.primary {
      grid-template-columns: 1fr;
    }
  }

  .footer hr {
    color: #fff;
    height: 1px;
    width: 93%;
    background-color: #fff;
    margin: 15px 0px;
  }
