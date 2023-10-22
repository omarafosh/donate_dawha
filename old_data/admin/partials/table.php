    <style>
        .content .container {
            width: 100%;
        }

        .content table {
            border: 1px solid #ccc;
            border-collapse: collapse;
            table-layout: fixed;
            width: 100%;
            margin: 13px auto;
        }


        .content table caption {
            font-size: 1.5em;
            margin: .5em 0 .75em;
        }

        .content table tr {
            background-color: #f8f8f8;
            border: 1px solid #ddd;
            padding: .35em;
        }

        .content table th,
        table td {
            padding: .625em;
            text-align: center;
        }

        .content table th {
            font-size: .85em;
            text-transform: uppercase;
        }

        @media screen and (max-width: 768px) {
            .content table {
                border: 0;
                width: 100%;
            }


            .content table caption {
                font-size: 1.3em;
            }

            .content table thead {
                border: none;
                clip: rect(0 0 0 0);
                height: 1px;
                margin: -1px;
                overflow: hidden;
                padding: 0;
                position: absolute;
                width: 1px;
            }

            .content table tr {
                border-bottom: 3px solid #ddd;
                display: block;
                margin-bottom: .625em;
            }

            .content table td {
                border-bottom: 1px solid #ddd;
                display: block;
                font-size: .8em;
                text-align: left;
            }

            .content table td::after {
                content: attr(data-label);
                float: right;
                font-weight: bold;
                text-transform: uppercase;
            }

            .content table td:last-child {
                border-bottom: 0;
            }
        }
    </style>