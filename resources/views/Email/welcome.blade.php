<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//BG" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>HaoSaudi</title>
    <style type="text/css">

        body {
            margin: 0;
            padding: 0;
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
            margin-top: 20px !important;
            margin-bottom: 20px !important;
            font-size: 14px !important;
        }

        .mt-15 {
            margin-top: 15px !important;
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
            color: #D76A7A;
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
            color: #D76A7A !important;
            cursor: pointer;
        }

        .footer-bottom {
            text-align: center;
            padding: 20px 40px;
            background: #D76A7A !important;
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
                width: 100% !important;
                margin-bottom: 15px !important
            }
        }
    </style>
</head>

<body>
    <table class="content" cellpadding="0" cellspacing="0" border="0">
        <tr >
            <td>
                <div class="hao-header">
                    <div class="hao-icon">
                        <img class="logo" src="{{asset('email_assets/hao-logo.png')}}">
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
                </div>
            </td>
        </tr>



        <tr>
            <td>
                <div class="hao-footer">
                    <div class="footer-content">
                        <div class="social-links mt-10">
                            <a href="https://www.azharmughal.com/" class="social-link ml-10 mb-10">
                                <img class="social-img" src="{{asset('email_assets/social-twitter.png')}}">
                            </a>
                            <a href="https://www.azharmughal.com/" class="social-link ml-10 mb-10">
                                <img class="social-img" src="{{asset('email_assets/social-insta.png')}}">
                            </a>
                            <a href="https://www.azharmughal.com/" class="social-link ml-10 mb-10">
                                <img class="social-img" src="{{asset('email_assets/social-whatsapp.png')}}">
                            </a>
                        </div>

                        <div class="hao-icon">
                            <img class="logo" src="{{asset('email_assets/hao-logo.png')}}">
                        </div>

                        <div class="download-title mt-15">
                            Download The App Now
                        </div>

                        <div class="download-buttons mt-15">
                            <a href="https://www.azharmughal.com/" class="download-link mr-10 mb-10">
                                <img class="download-img" src="{{asset('email_assets/download-apple.png')}}">
                            </a>
                            <a href="https://www.azharmughal.com/" class="download-link mr-10 mb-10">
                                <img class="download-img" src="{{asset('email_assets/download-android.png')}}">
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

</body>
