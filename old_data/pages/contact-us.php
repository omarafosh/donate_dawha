<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <?php include('partials/header.php'); ?>
    <style>
        .contact-us table {
            border: 1px solid #ccc;
            border-collapse: collapse;
            table-layout: fixed;
            width: 100%;
            margin: 13px auto;
        }
        

        .contact-us table caption {
            font-size: 1.5em;
            margin: .5em 0 .75em;
        }

        .contact-us table tr {
            background-color: #f8f8f8;
            border: 1px solid #ddd;
            padding: .35em;
        }

        .contact-us table th,
        table td {
            padding: .625em;
            text-align: center;
        }

        .contact-us table th {
            font-size: .85em;
            text-transform: uppercase;
        }

        @media screen and (max-width: 768px) {
            .contact-us table {
                border: 0;
                width: 100%;
            }


            .contact-us table caption {
                font-size: 1.3em;
            }

            .contact-us table thead {
                border: none;
                clip: rect(0 0 0 0);
                height: 1px;
                margin: -1px;
                overflow: hidden;
                padding: 0;
                position: absolute;
                width: 1px;
            }

            .contact-us table tr {
                border-bottom: 3px solid #ddd;
                display: block;
                margin-bottom: .625em;
            }

            .contact-us table td {
                border-bottom: 1px solid #ddd;
                display: block;
                font-size: .8em;
                text-align: left;
            }

            .contact-us table td::after {
                content: attr(data-label);
                float: right;
                font-weight: bold;
                text-transform: uppercase;
            }

            .contact-us table td:last-child {
                border-bottom: 0;
            }
        }
    </style>
</head>

<body>
    <div class="navbar">
        <?php include 'partials/navbar.php' ?>
    </div>
    <div class="contact-us">
        <div class="container">
            <table>
                <thead>
                    <th>م</th>
                    <th>موقع المركز</th>
                    <th>نوع المركز</th>
                    <th>رقم الهاتف</th>
                    <th>البلدية</th>
                    <th>المنطقة</th>
                </thead>
                <tbody>
                    <td data-label="م">1</td>
                    <td data-label="موقع المركز">البنك التجاري - الهلال</td>
                    <td data-label="نوع المركز">حاوية</td>
                    <td data-label="رقم الهاتف">32646</td>
                    <td data-label="البلدية">الدوحة</td>
                    <td data-label="المنطقة">عنيزة</td>
                </tbody>
            </table>
        </div>

    </div>

    <script src="../assets/js/script.js"></script>
</body>

</html>