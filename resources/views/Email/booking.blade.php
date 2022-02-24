<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//BG" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>HaoSaudi</title>
    <style type="text/css">
        body {
            padding: 0;
            margin: 0;
        }

        .wrapper {
            margin: 0;
            padding: 20px 0;
            min-width: 100% !important;
            color: #263238 !important;
            background: #EAEAEA !important;
            font-family: Ubuntu, Helvetica, Arial, sans-serif !important;
        }

        .content {
            width: 100%;
            max-width: 700px;
            background: #fff;
            margin: auto !important;
            font-size: 14px !important;
        }

        .primary-color {
            color: #D76878 !important;
        }

        .bold {
            font-weight: bold;
        }

        .mt-15 {
            margin-top: 15px !important;
        }

        .mt-25 {
            margin-top: 25px !important;
        }

        .mr-10 {
            margin-right: 10px !important;
        }

        .ml-10 {
            margin-left: 10px !important;
        }

        .mr-15 {
            margin-right: 10px !important;
        }

        .mb-10 {
            margin-bottom: 10px !important;
        }

        .mt-negative {
            margin-top: -35px !important;
        }

        .center {
            text-align: center;
        }

        .m-auto {
            margin: auto;
        }

        /* ------HEADER------ */
        .hao-header {
            padding: 40px;
            background: #CADDD9 !important;
            text-align: left !important;
        }

        .hao-icon {
            width: fit-content;
            /* text-align: left; */
        }

        .logo {
            width: 75px;
            height: 75px;
        }

        .header-title {
            color: #D76878;
            font-size: 28px !important;
            margin-top: 20px;
        }

        .header-desc {
            font-size: 24px !important;
        }

        /* ------FOOTER------ */
        .hao-footer {
            width: 100% !important;
            background: #CADDD9 !important;
            text-align: left !important;
        }

        .footer-content {
            padding: 40px;
        }

        .social-links {
            float: right;
            text-align: right;
        }

        .social-link {
            color: transparent !important;
            text-decoration: none !important;
        }

        .social-img {
            width: 30px;
        }

        .download-title {
            font-size: 16px !important;
            font-weight: bold;
        }

        .download-link {
            color: transparent !important;
            text-decoration: none !important;
        }

        .download-img {
            width: 125px !important;
        }

        .unsubscribe {
        }

        .unsubscribe-btn {
            color: #D76878 !important;
            cursor: pointer;
        }

        .footer-bottom {
            text-align: center;
            padding: 20px 40px;
            background: #D76878 !important;
        }

        .page-link {
            color: #fff !important;
            text-decoration: none;
        }


        /* ------CONTENT-BODY------ */
        .content-body {
            padding: 40px;
            background: #ffffff !important;
            text-align: center !important;
        }

        .quotation {
            background: #F6F6F6;
            border-radius: 25px;
            max-width: 450px;
            padding: 30px;
            margin: auto;
            font-size: 16px;
            line-height: 1.5;
        }

        .greetings {
            font-weight: bold;
        }

        .message {
            margin-top: 10px;
        }

        .simple-header {
            border-bottom: 1px solid #D2D2D2;
            background: #fff !important;
        }

        .welcome-content {
            max-width: 500px;
            padding: 30px;
        }

        .booking-summary {
            max-width: 550px;
            margin: 20px auto;
            text-align: left;
            border-radius: 10px;
            border: 1px solid #D2D2D2;
        }

        .summary-header {
            background: #A1CCC4 !important;
            padding: 15px 20px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .summary-content {

        }
        .summary-content > .booking-item:nth-of-type(2n)
        {
            background: #F6F6F6 !important;
            background-color: #F6F6F6;
        }

        .fill {
            background-color: #F6F6F6 !important;
        }
        .underline {
            text-decoration: underline;
        }

        .booking-item {
            padding: 15px 20px;
            overflow-y: hidden;
        }

        .booking-total {
            padding: 20px 20px;
            text-align: right;
        }

        .total-value {
            margin-left: 50px;
        }

        .item-key {
        }
        .item-value {
            float: right;
            margin-left: 15px;
            text-align: right;
        }

        .map-link {
            background: #D76878;
        }

        .hao-btn {
            color: #fff !important;
            text-decoration: none !important;
            background: #D76878;
            padding: 15px 30px;
            border-radius: 50px;
            border: none;
            cursor: pointer;
            /* height: 50px; */
        }

        .love {
            width: 25px;
            vertical-align: middle;
        }
        @media only screen and (max-width: 550px),
        screen and (max-device-width: 550px) {
            .hao-header {
                padding: 40px 20px !important;
            }
            .footer-content {
                padding: 40px 20px !important;
            }
            .content-body {
                padding: 40px 20px !important;
            }
            .summary-header {
                padding: 15px 10px !important;
            }
            .booking-item {
                padding: 15px 10px !important;
            }
            .footer-bottom {
                padding: 20px 20px !important;
                margin-bottom: 15px !important
            }
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <table class="content" cellpadding="0" cellspacing="0" border="0">
            <tr >
                <td>
                    <div class="hao-header simple-header">
                        <div class="hao-icon center m-auto">
                            <img class="logo" src="{{ $message->embed(public_path('email_assets/hao-logo.png')) }}" alt="Hao"/>
                        </div>
                    </div>
                </td>
            </tr>


            <tr >
                <td>
                    <div class="content-body">
                        <div class="quotation">
                            “The purpose of life is to live it, to taste experience to the utmost, to reach out eagerly and without fear for newer and richer experience.” ―
                            <span class="bold primary-color">Eleanor Roosevelt</span>
                        </div>

                        <div class="greetings mt-15">
                            Azhar Mughal,
                        </div>

                        <div class="message">
                            Welcome
                        </div>

                        <div class="welcome-content center m-auto">
                            Here’s your journey start in exploring the world
                            <br>
                            Thank you for booking in.
                        </div>

                        <div class="booking-summary">
                            <div class="summary-header">
                                Booking Summary
                            </div>
                            <div class="summary-content">
                                <div class="booking-item">
                                    <span class="item-key">Booking No</span>
                                    <span class="item-value primary-color bold">10717</span>
                                </div>
                                <div class="booking-item fill">
                                    <span class="item-key">Date</span>
                                    <span class="item-value bold">2022-01-13</span>
                                </div>
                                <div class="booking-item ">
                                    <span class="item-key">Time</span>
                                    <span class="item-value"><span class="bold">14:00  to 15:00</span> (Hao uses 24 H format Hao uses 24 H format Hao uses 24 H format)</span>
                                </div>
                                <div class="booking-item fill">
                                    <span class="item-key">Person</span>
                                    <span class="item-value bold">2</span>
                                </div>
                                <div class="booking-total">
                                    <span class="item-key">Total</span>
                                    <span class="total-value bold">320.00 SR</span>
                                </div>
                            </div>
                        </div>

                        <div class="booking-content">
                            Location description
                            <br>
                            You can enter from road A23 then enter the white building, you can find us on third floor

                            <br> <br>
                            Location on Google Map
                            <br>
                            <a href="https://www.azharmughal.com/" class="bold primary-color underline mb-10">Link</a>

                            <br><br>

                            <a href="https://www.azharmughal.com/" class="bold primary-color underline mb-10">Click here</a>
                            to visit your profile and check you experience booking details

                            <br><br><br>
                            Hope it will be experience full of exploring new things and pleasure
                        </div>
                    </div>
                </td>
            </tr>


            <tr >
                <td>
                    <div class="mb-10 center">
                        Sent With
                        <img class="love" src="{{$message->embed(public_path('email_assets/heart.png'))}}" />
                         From Hao
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="hao-footer">
                        <div class="footer-content">
                            <div class="social-links mt-10">
                                <a href="https://www.azharmughal.com/" class="social-link ml-10 mb-10">
                                    <img class="social-img" src="{{$message->embed(public_path('email_assets/social-twitter.png'))}}" />
                                </a>
                                <a href="https://www.azharmughal.com/" class="social-link ml-10 mb-10">
                                    <img class="social-img" src="{{$message->embed(public_path('email_assets/social-insta.png'))}}" />
                                </a>
                                <a href="https://www.azharmughal.com/" class="social-link ml-10 mb-10">
                                    <img class="social-img" src="{{$message->embed(public_path('email_assets/social-whatsapp.png'))}}" />
                                </a>
                            </div>

                            <div class="hao-icon">
                                <img class="logo" src="{{$message->embed(public_path('email_assets/hao-logo.png'))}}">
                            </div>

                            <div class="download-title mt-15">
                                Download The App Now
                            </div>

                            <div class="download-buttons mt-15">
                                <a href="https://www.azharmughal.com/" class="download-link mr-10 mb-10">
                                    <img class="download-img" src="{{$message->embed(public_path('email_assets/download-apple.png'))}}" />
                                </a>
                                <a href="https://www.azharmughal.com/" class="download-link mr-10 mb-10">
                                    <img class="download-img" src="{{$message->embed(public_path('email_assets/download-android.png'))}}" />
                                </a>
                            </div>

                            <div class="unsubscribe mt-15">
                                If you want to permanently remove your email address from our mailing list please use this link to
                                <a class="unsubscribe-btn">Unsubscribe</a>
                            </div>
                        </div>

                        <div class="footer-bottom">
                            <div class="pages-link">
                                <a href="https://www.azharmughal.com/" class="page-link mr-10">
                                    Email Preferences
                                </a>
                                <a href="https://www.azharmughal.com/" class="page-link mr-10">
                                    Contact Us
                                </a>
                                <a href="https://www.azharmughal.com/" class="page-link mr-10">
                                    Privacy
                                </a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>

        </table>
    </div>
</body>
