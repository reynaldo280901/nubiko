<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Saleslab Internal - Nubiko</title>
    <style>
        .bg-dark {
            background-color: #343a40 !important
        }



        :root {
            --blue: #007bff;
            --indigo: #6610f2;
            --purple: #6f42c1;
            --pink: #e83e8c;
            --red: #dc3545;
            --orange: #fd7e14;
            --yellow: #ffc107;
            --green: #28a745;
            --teal: #20c997;
            --cyan: #17a2b8;
            --white: #fff;
            --gray: #6c757d;
            --gray-dark: #343a40;
            --primary: #3f6ad8;
            --secondary: #6c757d;
            --success: #3ac47d;
            --info: #16aaff;
            --warning: #f7b924;
            --danger: #d92550;
            --light: #eee;
            --dark: #343a40;
            --focus: #444054;
            --alternate: #794c8a;
            --breakpoint-xs: 0;
            --breakpoint-sm: 576px;
            --breakpoint-md: 768px;
            --breakpoint-lg: 992px;
            --breakpoint-xl: 1200px;
            --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
        }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, segoe ui, Roboto, helvetica neue, Arial, noto sans, sans-serif, apple color emoji, segoe ui emoji, segoe ui symbol, noto color emoji;
            font-size: .88rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            text-align: left;
            background-color: #fff
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-top: 0;
            margin-bottom: .5rem
        }



        ol,
        ul,
        dl {
            margin-top: 0;
            margin-bottom: 1rem
        }

        th {
            text-align: inherit
        }

        label {
            display: inline-block;
            margin-bottom: .5rem
        }

        button {
            border-radius: 0
        }

        input,
        button,
        select,
        optgroup,
        textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit
        }

        button,
        input {
            overflow: visible
        }

        button,
        select {
            text-transform: none
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6 {
            margin-bottom: .5rem;
            font-family: inherit;
            font-weight: 400;
            line-height: 1.2;
            color: inherit
        }

        h5,
        .h5 {
            font-size: 1.25rem
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px
        }

        .col-1,
        .col-2,
        .col-3,
        .col-4,
        .col-5,
        .col-6,
        .col-7,
        .col-8,
        .col-9,
        .col-10,
        .col-11,
        .col-12,
        .col,
        .col-auto,
        .col-sm-1,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm,
        .col-sm-auto,
        .col-md-1,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md,
        .col-md-auto,
        .col-lg-1,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg,
        .col-lg-auto,
        .col-xl-1,
        .col-xl-2,
        .col-xl-3,
        .col-xl-4,
        .col-xl-5,
        .col-xl-6,
        .col-xl-7,
        .col-xl-8,
        .col-xl-9,
        .col-xl-10,
        .col-xl-11,
        .col-xl-12,
        .col-xl,
        .col-xl-auto {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px
        }

        .col-12 {
            flex: 0 0 100%;
            max-width: 100%
        }

        @media(min-width:576px) {
            .col-sm {
                flex-basis: 0;
                flex-grow: 1;
                max-width: 100%
            }

            .col-sm-auto {
                flex: 0 0 auto;
                width: auto;
                max-width: 100%
            }

            .col-sm-12 {
                flex: 0 0 100%;
                max-width: 100%
            }
        }

        @media(min-width:768px) {
            .col-md {
                flex-basis: 0;
                flex-grow: 1;
                max-width: 100%
            }

            .col-md-auto {
                flex: 0 0 auto;
                width: auto;
                max-width: 100%
            }

            .col-md-12 {
                flex: 0 0 100%;
                max-width: 100%
            }


        }

        @media(min-width:992px) {
            .col-lg {
                flex-basis: 0;
                flex-grow: 1;
                max-width: 100%
            }

            .col-lg-auto {
                flex: 0 0 auto;
                width: auto;
                max-width: 100%
            }

            .col-lg-3 {
                flex: 0 0 25%;
                max-width: 25%
            }
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            color: #495057;
            text-align: center;
            vertical-align: middle;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .25rem;
            transition: color .15s, background-color .15s, border-color .15s, box-shadow .15s
        }

        @media screen and (prefers-reduced-motion:reduce) {
            .btn {
                transition: none
            }
        }

        .btn:not(:disabled):not(.disabled) {
            cursor: pointer
        }

        .btn-primary {
            color: #fff;
            background-color: #3f6ad8;
            border-color: #3f6ad8
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            float: left;
            min-width: 15rem;
            padding: .65rem 0;
            margin: .125rem 0 0;
            font-size: .88rem;
            color: #495057;
            text-align: left;
            list-style: none;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .15);
            border-radius: .25rem
        }

        .dropdown-menu-right {
            right: 0;
            left: auto
        }

        @media screen and (prefers-reduced-motion:reduce) {

            .custom-control-label::before,
            .custom-file-label,
            .custom-select {
                transition: none
            }
        }

        .nav {
            display: flex;
            flex-wrap: wrap;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none
        }



        .mt-0,
        .my-0 {
            margin-top: 0 !important
        }



        .mb-0,
        .my-0 {
            margin-bottom: 0 !important
        }



        .mt-3,
        .my-3 {
            margin-top: 1rem !important
        }


        .mb-3,
        .my-3 {
            margin-bottom: 1rem !important
        }

        .ml-3,
        .mx-3 {
            margin-left: 1rem !important
        }

        .app-header.header-text-light .app-header-right>.header-btn-lg .header-user-info>.btn-shadow {
            box-shadow: 0 0.125rem 0.625rem rgba(0, 0, 0, .1), 0 0.0625rem 0.125rem rgba(0, 0, 0, .2);
        }

        .btn:not(:disabled):not(.disabled) {
            cursor: pointer;
        }

        .btn {
            position: relative;
            transition: color .15s, background-color .15s, border-color .15s, box-shadow .15s;
            font-size: .8rem;
        }

        a,
        button,
        .btn {
            outline: none !important;
        }

        .btn-sm,
        .btn-group-sm>.btn {
            padding: 0.25rem 0.5rem;
            font-size: .875rem;
            line-height: 1.5;
            border-radius: 0.2rem;
        }

        .btn-primary {
            color: #fff;
            background-color: #3f6ad8;
            border-color: #3f6ad8;
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            text-align: center;
            vertical-align: middle;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            transition: color .15s, background-color .15s, border-color .15s, box-shadow .15s;
        }

        .text-white {
            color: #fff !important;
        }

        .fa,
        .fas {
            font-family: 'font awesome 5 free';
            font-weight: 900;
        }


        .p-1 {
            padding: 0.25rem !important;
        }

        .p-0 {
            padding: 0 !important
        }


        .pr-0,
        .px-0 {
            padding-right: 0 !important
        }


        .p-1 {
            padding: .25rem !important
        }



        .pr-1,
        .px-1 {
            padding-right: .25rem !important
        }

        .pl-1,
        .px-1 {
            padding-left: .25rem !important
        }


        .ml-auto,
        .mx-auto {
            margin-left: auto !important
        }

        a,
        button,
        .btn {
            outline: none !important
        }

        .app-container {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
            margin: 0
        }


        .app-header {
            height: 60px;
            display: flex;
            align-items: center;
            align-content: center;
            position: relative;
            z-index: 10;
            transition: all .2s
        }

        .app-header.header-shadow {
            box-shadow: 0 .46875rem 2.1875rem rgba(4, 9, 20, .03), 0 .9375rem 1.40625rem rgba(4, 9, 20, .03), 0 .25rem .53125rem rgba(4, 9, 20, .05), 0 .125rem .1875rem rgba(4, 9, 20, .03)
        }

        .app-header .app-header__content {
            display: flex;
            align-items: center;
            align-content: center;
            flex: 1;
            padding: 0 1.5rem;
            height: 60px
        }

        .app-header .app-header__content .app-header-left {
            display: flex;
            align-items: center
        }

        .app-header .app-header__content .app-header-right {
            align-items: center;
            display: flex;
            margin-left: auto
        }

        .app-header .header-user-info>.widget-heading,
        .app-header .header-user-info>.widget-subheading {
            white-space: nowrap
        }

        .app-header .header-user-info>.widget-subheading {
            font-size: .8rem
        }

        .app-header__logo {
            padding: 0 1.5rem;
            height: 60px;
            width: 280px;
            display: flex;
            align-items: center;
            transition: width .2s
        }

        .app-header__menu,
        .app-header__mobile-menu {
            display: none;
            padding: 0 1.5rem;
            height: 60px;
            align-items: center
        }

        .fixed-header .app-header {
            position: fixed;
            width: 100%;
            top: 0
        }

        .app-header.header-shadow {
            box-shadow: 0 0.46875rem 2.1875rem rgba(4, 9, 20, .03), 0 0.9375rem 1.40625rem rgba(4, 9, 20, .03), 0 0.25rem 0.53125rem rgba(4, 9, 20, .05), 0 0.125rem 0.1875rem rgba(4, 9, 20, .03);
        }

        .bg-primary {
            background-color: #3f6ad8 !important;
        }

        .text-white {
            color: #fff !important;
        }

        .font-weight-bold {
            font-weight: 700 !important;
        }

        .text-capitalize {
            text-transform: capitalize !important;
        }

        .fixed-header .app-header .app-header__logo {
            visibility: visible
        }

        .fixed-header .app-main {
            padding-top: 60px
        }


        .app-header.header-text-light .app-header-right .icon-wrapper-alt .badge-dot {
            border-color: transparent
        }

        .app-header.header-text-light .app-header-right>.header-btn-lg .widget-content-left .btn-group>.btn,
        .app-header.header-text-light .app-header-right>.header-btn-lg .widget-heading,
        .app-header.header-text-light .app-header-right>.header-btn-lg .widget-subheading {
            color: rgba(255, 255, 255, .8)
        }

        .app-header.header-text-light .app-header-right>.header-btn-lg .header-user-info>.btn-shadow {
            box-shadow: 0 .125rem .625rem rgba(0, 0, 0, .1), 0 .0625rem .125rem rgba(0, 0, 0, .2)
        }

        .app-header.header-text-light .header-btn-lg .hamburger-inner,
        .app-header.header-text-light .header-btn-lg .hamburger.is-active .hamburger-inner,
        .app-header.header-text-light .header-btn-lg .hamburger-inner::before,
        .app-header.header-text-light .header-btn-lg .hamburger-inner::after,
        .app-header.header-text-light .header__pane .hamburger-inner,
        .app-header.header-text-light .header__pane .hamburger.is-active .hamburger-inner,
        .app-header.header-text-light .header__pane .hamburger-inner::before,
        .app-header.header-text-light .header__pane .hamburger-inner::after {
            background-color: rgba(255, 255, 255, .8) !important
        }


        .app-sidebar {
            width: 280px;
            display: flex;
            z-index: 11;
            overflow: hidden;
            min-width: 280px;
            position: relative;
            flex: 0 0 280px;
            margin-top: -60px;
            padding-top: 60px;
            transition: all .2s
        }

        .app-sidebar .app-sidebar__inner {
            padding: 2px 1.5rem 1.5rem
        }

        .app-sidebar .scrollbar-sidebar {
            z-index: 15;
            width: 100%
        }

        .app-sidebar .app-header__logo {
            position: absolute;
            left: 0;
            top: 0;
            display: none;
            z-index: 11
        }

        .app-sidebar.sidebar-shadow {
            box-shadow: 7px 0 60px rgba(0, 0, 0, .05)
        }

        .app-sidebar__heading {
            text-transform: uppercase;
            font-size: .8rem;
            margin: .75rem 0;
            font-weight: 700;
            color: #3f6ad8;
            white-space: nowrap;
            position: relative
        }



        .vertical-nav-menu {
            margin: 0;
            padding: 0;
            position: relative;
            list-style: none
        }

        .vertical-nav-menu::after {
            content: " ";
            pointer-events: none;
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            top: 0
        }



        .vertical-nav-menu li a {
            display: block;
            line-height: 2.4rem;
            height: 2.4rem;
            padding: 0 1.5rem 0 45px;
            position: relative;
            border-radius: .25rem;
            color: #343a40;
            white-space: nowrap;
            transition: all .2s;
            margin: .1rem 0
        }

        .vertical-nav-menu i.metismenu-state-icon,
        .vertical-nav-menu i.metismenu-icon {
            text-align: center;
            width: 34px;
            height: 34px;
            line-height: 34px;
            position: absolute;
            left: 5px;
            top: 50%;
            margin-top: -17px;
            font-size: 1.5rem;
            opacity: .3;
            transition: color 300ms
        }



        .app-sidebar.sidebar-text-light {
            border-right: 0 !important
        }

        .app-sidebar.sidebar-text-light .app-sidebar__heading {
            color: rgba(255, 255, 255, .6)
        }


        .app-sidebar.sidebar-text-light .vertical-nav-menu li a {
            color: rgba(255, 255, 255, .7)
        }

        .app-sidebar.sidebar-text-light .vertical-nav-menu li a i.metismenu-icon {
            opacity: .5
        }

        .fixed-sidebar .app-sidebar {
            position: fixed;
            height: 100vh
        }

        .fixed-sidebar .app-main .app-main__outer {
            z-index: 9;
            padding-left: 280px
        }

        .fixed-sidebar.fixed-header .app-sidebar .app-header__logo {
            display: none
        }

        .app-main {
            flex: 1;
            display: flex;
            z-index: 8;
            position: relative
        }

        .app-main .app-main__outer {
            flex: 1;
            flex-direction: column;
            display: flex;
            z-index: 12
        }

        .app-main .app-main__inner {
            padding: 30px 30px 0;
            flex: 1
        }

        .app-theme-white.app-container {
            background: #f1f4f6
        }

        .app-theme-white .app-sidebar {
            background: #fff
        }

        .app-theme-white .app-page-title {
            background: rgba(255, 255, 255, .45)
        }

        .app-theme-white .app-footer .app-footer__inner,
        .app-theme-white .app-header {
            background: #fafbfc
        }

        .app-theme-white.fixed-header .app-header__logo {
            background: rgba(250, 251, 252, .1)
        }

        .app-page-title {
            padding: 30px;
            margin: -30px -30px 30px;
            position: relative
        }

        .app-page-title .page-title-wrapper {
            position: relative;
            display: flex;
            align-items: center
        }

        .app-page-title .page-title-heading,
        .app-page-title .page-title-subheading {
            margin: 0;
            padding: 0
        }

        .app-page-title .page-title-heading {
            font-size: 1.25rem;
            font-weight: 400;
            display: flex;
            align-content: center;
            align-items: center
        }

        .app-page-title .page-title-subheading {
            padding: 3px 0 0;
            font-size: .88rem;
            opacity: .6
        }


        .app-page-title .page-title-icon {
            font-size: 2rem;
            display: flex;
            align-items: center;
            align-content: center;
            text-align: center;
            padding: .83333rem;
            margin: 0 30px 0 0;
            background: #fff;
            box-shadow: 0 .46875rem 2.1875rem rgba(4, 9, 20, .03), 0 .9375rem 1.40625rem rgba(4, 9, 20, .03), 0 .25rem .53125rem rgba(4, 9, 20, .05), 0 .125rem .1875rem rgba(4, 9, 20, .03);
            border-radius: .25rem;
            width: 60px;
            height: 60px
        }

        .app-page-title .page-title-icon i {
            margin: auto
        }


        .icon-gradient {
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }


        .dropdown-menu {
            box-shadow: 0 .46875rem 2.1875rem rgba(4, 9, 20, .03), 0 .9375rem 1.40625rem rgba(4, 9, 20, .03), 0 .25rem .53125rem rgba(4, 9, 20, .05), 0 .125rem .1875rem rgba(4, 9, 20, .03);
            margin: .125rem
        }

        .dropdown-menu.dropdown-menu-right {
            right: 0 !important
        }

        .widget-content {
            padding: 1rem;
            flex-direction: row;
            align-items: center
        }

        .widget-content .widget-content-wrapper {
            display: flex;
            flex: 1;
            position: relative;
            align-items: center
        }


        .widget-content .widget-content-left .widget-subheading {
            opacity: .5
        }

        .widget-content .widget-content-right {
            margin-left: auto
        }


        .scrollbar-sidebar,
        .scrollbar-container {
            position: relative;
            height: 100%
        }


        .fa,
        .fas {
            font-family: 'font awesome 5 free';
            font-weight: 900
        }

        .fa,
        .fas,
        .far,
        .fal,
        .fab {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            line-height: 1
        }


        [class^=pe-7s-],
        [class*=" pe-7s-"] {
            display: inline-block;
            font-family: pe-icon-7-stroke;
            font-style: normal;
            font-weight: 400;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }


        .hamburger {
            padding: 0;
            display: inline-block;
            cursor: pointer;
            transition-property: opacity, filter;
            transition-duration: .15s;
            transition-timing-function: linear;
            font: inherit;
            color: inherit;
            text-transform: none;
            background-color: transparent;
            border: 0;
            margin: 0;
            overflow: visible
        }

        .hamburger-box {
            width: 24px;
            height: 14px;
            display: inline-block;
            position: relative
        }

        .hamburger-inner {
            display: block;
            top: 50%;
            margin-top: -1px
        }

        .hamburger-inner,
        .hamburger-inner::before,
        .hamburger-inner::after {
            width: 24px;
            height: 2px;
            background-color: #3f6ad8;
            border-radius: 10px;
            position: absolute;
            transition-property: transform;
            transition-duration: .15s;
            transition-timing-function: ease
        }

        .hamburger-inner::before,
        .hamburger-inner::after {
            content: "";
            display: block
        }

        .hamburger-inner::before {
            top: -6px
        }

        .hamburger-inner::after {
            bottom: -6px
        }

        .hamburger--elastic .hamburger-inner {
            top: 1px;
            transition-duration: .275s;
            transition-timing-function: cubic-bezier(.68, -.55, .265, 1.55)
        }

        .hamburger--elastic .hamburger-inner::before {
            top: 6px;
            transition: opacity .125s .275s ease
        }

        .hamburger--elastic .hamburger-inner::after {
            top: 12px;
            transition: transform .275s cubic-bezier(.68, -.55, .265, 1.55)
        }

/* KEBUTUHAN YANG PERLU DITAMBAHKAN */

        .container {
            width: 100%;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            
        }
        .container-menu-tracking{
            width: 100%;
            background-color: #fff;
            box-sizing: border-box;
            border: 1px solid black;
            padding-left: 1%;
            padding-top: 1.5%;
        }

h1 {
    font-size: 18px;
    color: #333;
    margin-bottom: 15px;
    font-weight: bold;
}

.btn-scan{
    width: 100%;
            margin: 0 auto;
            background-color: #fff;
            padding-top: 10%;
            padding-bottom: 15%;
            padding-left: 2%;
            padding-right: 2%;
           
}
.btn-scan-paket {
    box-sizing: border-box;
            border: 0px solid black;
    width: 100%;
    text-align: left;
    background-color: #000AFF4D;
    padding: 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 18px;
    transition: background-color 0.3s;
}

.btn-scan-paket:hover {
    background-color: #45a049;
}

    </style>

</head>

<body>
    <div class="loader" style="display: none;"></div>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow bg-primary header-text-light">
            <div class="app-header__logo">
                <div class="text-white">
                    <h5 class="font-weight-bold">Nubiko</h5>
                </div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                            data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm keluar">
                        <i class="fa fa-arrow-right text-white pr-1 pl-1"></i> Keluar
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
                    <ul class="header-menu nav">
                        <li class="nav-item text-white font-weight-bold text-capitalize">
                            Doktersales
                        </li>
                    </ul>
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">User
                                                Account</button>
                                            <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                            <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                            <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="" style="color: white">
                                    </div>
                                    <div class="widget-subheading">
                                    </div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm keluar">
                                        <i class="fa fa-arrow-right text-white pr-1 pl-1"></i> Keluar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow bg-dark sidebar-text-light">
                <div class="app-header__logo">
                    <div class="text-white">
                        <h5 class="font-weight-bold">Nubiko</h5>
                    </div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                                data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button"
                            class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar" style="overflow-y: scroll;">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu metismenu">
                            <li class="app-sidebar__heading">Pengelolaan</li>
                            <li>
                            <a href="/scan-paket-outbound">
                                    <i class="metismenu-icon pe-7s-target"></i>
                                    Paket Tracking Outbound
                                </a>
                                <a href="/tanda-terima">
                                    <i class="metismenu-icon pe-7s-target"></i>
                                    Bukti Tanda Terima
                                </a>
                            </li>
                        </ul>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-graph1 icon-gradient bg-happy-itmeo"></i>
                                </div>
                                <div>
                                    Menu Tracking
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="container-menu-tracking">
                        <h1>MENU TRACKING</h1>
                        </div>
                        <div class="btn-scan">
                        <button class="btn-scan-paket" onclick="window.location.href='tanggal-paket-outbound'">Scan Paket Outbound</button>

                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>