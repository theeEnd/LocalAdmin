<?php
/*
| ----------------------------------------------------------------------------------------
|  L o c a l A d m i n   S E T T I N G S
|
|  Documentation: https://github.com/JoergHolz/LocalAdmin
| ----------------------------------------------------------------------------------------
|  MIT License (MIT) Copyright (c) 2016 Joerg Holz | https://www.workflow-management.net
|
|  Permission is hereby granted, free of charge, to any person obtaining a copy
|  of this software and associated documentation files (the "Software"), to deal
|  in the Software without restriction, including without limitation the rights
|  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
|  copies of the Software, and to permit persons to whom the Software is
|  furnished to do so, subject to the following conditions:
|
|  The above copyright notice and this permission notice shall be included in all
|  copies or substantial portions of the Software.
|
|  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
|  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
|  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
|  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
|  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
|  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
|  SOFTWARE.
| ----------------------------------------------------------------------------------------
*/

$this->config->load("settings");

echo "<!DOCTYPE html><html lang='en'><head>
    <meta charset='utf-8'>
    <title>" . $this->config->item("title") . "</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link rel='apple-touch-icon' sizes='57x57' href='/images/default/favicons/apple-touch-icon-57x57.png'>
    <link rel='apple-touch-icon' sizes='60x60' href='/images/default/favicons/apple-touch-icon-60x60.png'>
    <link rel='apple-touch-icon' sizes='72x72' href='/images/default/favicons/apple-touch-icon-72x72.png'>
    <link rel='apple-touch-icon' sizes='76x76' href='/images/default/favicons/apple-touch-icon-76x76.png'>
    <link rel='apple-touch-icon' sizes='114x114' href='/images/default/favicons/apple-touch-icon-114x114.png'>
    <link rel='apple-touch-icon' sizes='120x120' href='/images/default/favicons/apple-touch-icon-120x120.png'>
    <link rel='apple-touch-icon' sizes='144x144' href='/images/default/favicons/apple-touch-icon-144x144.png'>
    <link rel='apple-touch-icon' sizes='152x152' href='/images/default/favicons/apple-touch-icon-152x152.png'>
    <link rel='apple-touch-icon' sizes='180x180' href='/images/default/favicons/apple-touch-icon-180x180.png'>
    <link rel='icon' type='image/png' href='/images/default/favicons/favicon-32x32.png' sizes='32x32'>
    <link rel='icon' type='image/png' href='/images/default/favicons/android-chrome-192x192.png' sizes='192x192'>
    <link rel='icon' type='image/png' href='/images/default/favicons/favicon-96x96.png' sizes='96x96'>
    <link rel='icon' type='image/png' href='/images/default/favicons/favicon-16x16.png' sizes='16x16'>
    <link rel='manifest' href='/images/default/favicons/manifest.json'>
    <link rel='mask-icon' href='/images/default/favicons/safari-pinned-tab.svg' color='#e20048'>
    <link rel='shortcut icon' href='/images/default/favicons/favicon.ico'>
    <meta name='msapplication-TileColor' content='#ffffff'>
    <meta name='msapplication-TileImage' content='/images/default/favicons/mstile-144x144.png'>
    <meta name='msapplication-config' content='/images/default/favicons/browserconfig.xml'>
    <meta name='theme-color' content='#e20048'>
    <link rel='stylesheet' href='assets/css/bootstrap.css' media='screen'>
   <link rel='stylesheet' href='assets/css/main.css'>
    <script src='assets/js/jquery-2.2.0.min.js'></script>
    <script src='assets/js/bootstrap.js'></script>
    <script src='assets/js/js.cookie.js'></script>
    <script src='assets/js/main.js'></script>
<script>";

echo "var button_groups_in_two_rows_at = " . $this->config->item("general")["button_groups_in_two_rows_at"] . "; ";

if ($this->config->item("general")["show_tooltips"] === TRUE) {
    echo " var show_tooltips = true;";
} else {
    echo " var show_tooltips = false;";
}

if ($this->config->item("navbar")["general"]["show_public_ip"] === TRUE) {
    echo " var show_public_ip = true;";
} else {
    echo " var show_public_ip = false;";
}

echo "app.index();";
if (!empty($shell_warning) AND $shell_warning === TRUE){
   echo " alert('Shell functions are disabled, please read the documentation: https://github.com/JoergHolz/LocalAdmin');";
}

echo "</script>
</head>
<body>";

if (!empty($show_splashscreen) AND $show_splashscreen === TRUE) {
    echo "<div class='preloader'>
            <div class='load-con'>" . $splashscreen_logo . $splashscreen_text .
        "<div class='spinner'>
                    <div class='bounce1'></div>
                    <div class='bounce2'></div>
                    <div class='bounce3'></div>
                </div>
            </div>
        </div>";
}

