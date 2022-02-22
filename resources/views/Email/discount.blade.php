<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//BG" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>HaoSaudi</title>
    <style type="text/css">

        .wrapper {
            margin: 0;
            padding: 20px 0;
            min-width: 100% !important;
            color: #263238 !important;
            background: #EAEAEA !important;
            /* font-family: Ubuntu, Helvetica, Arial, sans-serif !important; */
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
        .greetings {
            font-weight: bold;
        }

        .message {
            margin-top: 10px;
        }

        .discount-content {
            text-align: center
        }
        .discount {
            font-size: 28px !important;
            margin-top: 30px;
        }
        .coupon {
            padding: 20px 125px;
            color: #D76878;
            border: 1px solid #D2D2D2;
            width: fit-content;
            margin: 20px auto;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 40px;
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
            .footer-bottom {
                padding: 20px 20px !important;
                margin-bottom: 15px !important
            }
            .coupon {
                padding: 20px 75px !important;
            }
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <table class="content" cellpadding="0" cellspacing="0" border="0">
            <tr >
                <td>
                    <div class="hao-header">
                        <div class="hao-icon">
                            <img class="logo" src="{{$message->embed(public_path('email_assets/hao-logo.png'))}}" />
                        </div>

                        <div class="header-title">
                            IT'S BIG DEAL!
                        </div>

                        <div class="header-desc">
                            Don't let this deals run away
                        </div>
                    </div>
                </td>
            </tr>


            <tr >
                <td>
                    <div class="content-body">
                        <div class="greetings">
                            Hi John Doe,
                        </div>

                        <div class="message">
                            Congratulation, you Get 20$ Discount on your next booking :).
                        </div>

                        <div class="discount-content">
                            <div class="discount">GET 20% OFF</div>
                            <div class="message center">
                                Here is your coupon code - But Hurry Ends 8/25
                            </div>

                            <div class="coupon">
                                HAO20
                            </div>

                            <a href="https://www.azharmughal.com/" class="mb-10">
                                <button class="hao-btn">
                                    Visit Website
                                </button>
                            </a>
                            {{-- <div class="visit-website mt-15">
                            </div> --}}
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
                                <img class="logo" src="{{$message->embed(public_path('email_assets/hao-logo.png'))}}" />
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
