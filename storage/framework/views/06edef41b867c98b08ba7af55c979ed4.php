<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?> • <?php echo e(getItem('client')); ?></title>
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-928DTPK279"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-928DTPK279');
    </script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Preload -->
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap">
    
    <!-- Load não bloqueante -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet"
          media="print"
          onload="this.media='all'">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="<?php echo e(asset('favicon/favicon-96x96.png')); ?>" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="<?php echo e(asset('favicon/favicon.svg')); ?>" />
    <link rel="shortcut icon" href="<?php echo e(asset('favicon/favicon.ico')); ?>" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('favicon/apple-touch-icon.png')); ?>" />

    <meta name="apple-mobile-web-app-title" content="<?php echo e(getItem('client')); ?>" />
    <link rel="manifest" href="<?php echo e(asset('favicon/site.webmanifest')); ?>" />

    <meta name="title" content="<?php echo $__env->yieldContent('title'); ?> • <?php echo e(getItem('client')); ?>">
    <meta name="author" content="Engenho de imagens">
    <meta name="description" content="<?php echo $__env->yieldContent('description-seo'); ?>">
    <meta name="keywords" content="<?php echo $__env->yieldContent('keywords-seo'); ?>">

    <!-- META TAGS(OPEN GRAPH) -->
    <meta property="og:title" content="<?php echo $__env->yieldContent('title'); ?> • <?php echo e(getItem('client')); ?>"/>
    <meta property="og:type" content="company"/>
    <meta property="og:description" content="<?php echo $__env->yieldContent('description-seo'); ?>"/>
    <meta property="og:url" content="<?php echo e(url()->current()); ?>"/>
    <meta property="og:site_name" content="<?php echo e(getItem('client')); ?>"/>
    <meta name="twitter:card" content="summary">
    <meta name="twitter:description" content="<?php echo $__env->yieldContent('description-seo'); ?>">
    <meta property="twitter:url" content="<?php echo e(url()->current()); ?>"/>
    <meta property="twitter:title" content="<?php echo $__env->yieldContent('title'); ?> • <?php echo e(getItem('client')); ?>"/>

    <!-- Images Compartilhamento (Link) -->
    <meta property="og:image" content="<?php echo e(asset('img/logo-global-silver.webp')); ?>"/>
    <meta property="twitter:image" content="<?php echo e(asset('img/logo-global-silver.webp')); ?>"/>
    <link rel="canonical" href="<?php echo e(url()->current()); ?>" />

    
    <script type="application/ld+json">{ "@context": "https://schema.org/", "@type": "WebSite", "name": "@yield('title') • {{ getItem('client') }}", "url": "{{ url()->current() }}", "potentialAction": { "@type": "SearchAction", "target": "{search_term_string}", "query-input": "required name=search_term_string" }}</script>
    <script type="application/ld+json">{ "@context": "https://schema.org", "@type": "Organization", "name": "{{ getItem('client') }}", "url": "{{ url()->current() }}", "logo": "{{ asset('img/logo-global-silver.webp') }}", "contactPoint": { "@type": "ContactPoint", "telephone": "{{ getItem('whats1') }}", "contactType": "customer service", "contactOption": "TollFree", "areaServed": "BR", "availableLanguage": "Portuguese" }, "sameAs": [ "{{ url()->current() }}" ]}</script>
    

    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>" media="print" onload="this.media='all'">  
    <link rel="stylesheet" href="<?php echo e(asset('css/header.css')); ?>" media="print" onload="this.media='all'">
    
    <link rel="stylesheet" href="<?php echo e(asset('css/style-popup.css')); ?>" media="print" onload="this.media='all'">
    
    <?php echo $__env->yieldPushContent('styles'); ?>
        <style>
            footer::after,footer::before{content:'';position:absolute;top:0;height:100%}footer{overflow:hidden;background-color:#fff;position:relative}footer::after{right:0;width:40%;background-color:#282828}footer::before{right:calc(40% - 50px);width:50px;background:#fff;transform:skewX(-7deg);transform-origin:top;z-index:1}footer .content{padding:3rem 1rem;display:flex;justify-content:space-between;gap:2rem}footer .content>.right{width:40%;display:flex;align-items:center;justify-content:center;position:relative;z-index:1}footer a.logo{display:inline-flex;align-items:center;justify-content:center;margin-bottom:1rem}footer .content>.left{display:flex;align-items:flex-start;justify-content:left;gap:3rem}footer .sobre{max-width:300px}footer .sobre a{font-weight:600;color:var(--color-marrom);font-family:Montserrat,sans-serif}footer .sobre a:hover{transition:.2s;color:var(--color-marrom-light)}footer .content>.left h4{font-size:1rem;font-weight:800;color:#000;margin-bottom:.5rem}footer .content>.left ul{display:flex;flex-direction:column;gap:5px;position:relative;z-index:1}footer svg{width:20px;min-width:20px;fill:#000}footer .content>.left p,footer .content>.left ul a{color:var(--color-marrom);font-weight:600}footer .content>.left ul a{color:var(--color-marrom);white-space:nowrap;transition:.2s}footer .content>.left .contato a{display:inline-flex;align-items:center;gap:5px}footer .content>.left ul a.active,footer .content>.left ul a:hover{color:var(--color-marrom-light);text-decoration:underline}footer .content>.left ul a:hover svg{fill:var(--color-marrom-light)}.by-engenho{display:flex;align-items:center;justify-content:center;padding:0 1rem;background:var(--color-marrom);position:relative;z-index:1}.by-engenho a{display:flex;align-items:center;justify-content:center;padding:5px}@media (min-width:1700px){footer::after{width:43%}footer::before{width:100px;right:calc(39%)}}@media (min-width:2400px){footer::before{width:150px}}@media (max-width:1120px){footer .content{flex-direction:column;gap:1rem;padding:0}footer .content>.left{justify-content:flex-start;flex-direction:column;gap:2rem;max-width:100%;padding:2rem 1rem 1rem}footer .sobre{max-width:100%}footer::after,footer::before{display:none}footer .content>.right{width:100%;background-color:#282828;padding:2rem 1rem}}@media (max-width:400px){footer .content>.left ul a{white-space:normal}footer .content>.left ul a br{display:none}.by-engenho img{width:220px;height:auto}}
        </style>
    <?php echo $__env->yieldContent('head'); ?>

    <style media="print" onload="this.media='all'">
        :root {
            --toast-magic-success: #04bb7b;
            --toast-magic-success-rgb: 4, 187, 123;
            --toast-magic-danger: #dc3545;
            --toast-magic-danger-rgb: 220, 53, 69;
            --toast-magic-info: #0dcaf0;
            --toast-magic-info-rgb: 13, 202, 240;
            --toast-magic-warning: #ffc107;
            --toast-magic-warning-rgb: 255, 193, 7;
            --toast-item-bg: #fff;
            --toast-item-color: #000;
            --toast-magic-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            --toast-close-btn-color: #000;
            --toast-custom-btn-color: #000;
            --toast-color-mode-progress-bg: 0, 0, 0;
        }
        
        body[theme="dark"] {
            --toast-magic-success: #04bb7b;
            --toast-magic-success-rgb: 4, 187, 123;
            --toast-magic-danger: #dc3545;
            --toast-magic-danger-rgb: 220, 53, 69;
            --toast-magic-info: #0dcaf0;
            --toast-magic-info-rgb: 13, 202, 240;
            --toast-magic-warning: #ffc107;
            --toast-magic-warning-rgb: 255, 193, 7;
            --toast-item-bg: #000;
            --toast-item-color: #FFF;
            --toast-magic-box-shadow: -5px 0px 30px 0px rgba(255, 255, 255, 0.1);
            --toast-close-btn-color: #FFF;
            --toast-custom-btn-color: rgba(255, 255, 255, .8);
        
            --toast-color-mode-progress-bg: 255, 255, 255;
        }
        
        .toast-text-success {
            color: var(--toast-magic-success);
        }
        
        .toast-text-danger {
            color: var(--toast-magic-danger);
        }
        
        .toast-text-info {
            color: var(--toast-magic-info);
        }
        
        .toast-text-warning {
            color: var(--toast-magic-warning);
        }
        
        .position-relative {
            position: relative;
        }
        
        /* Toaster */
        .toast-container {
            --tm-toast-z-index: 99990;
            position: fixed;
            inset-block-start: 30px;
            inset-inline-end: 20px;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            z-index: var(--tm-toast-z-index, 1050);
            width: max-content;
            max-width: 100%;
            pointer-events: none;
        
            --toast-progress-start: 0%;
            --toast-progress-end: 100%;
            --toast-item-before-opacity: 0.4;
            --toast-item-after-opacity: 1;
        }
        
        .toast-container.toast-top-start,
        .toast-container.toast-bottom-start {
            --toast-progress-start: 100%;
            --toast-progress-end: 0%;
            --toast-item-before-opacity: 1;
            --toast-item-after-opacity: 0.4;
        }
        
        .toast-container.toast-bottom-start,
        .toast-container.toast-bottom-end {
            inset-block-start: auto;
            inset-block-end: 30px;
        }
        
        .toast-container.toast-bottom-start {
            inset-inline-start: 20px;
            inset-inline-end: auto;
        }
        
        .toast-container.toast-bottom-end {
            inset-inline-start: auto;
            inset-inline-end: 20px;
        }
        
        .toast-container.toast-top-start,
        .toast-container.toast-bottom-start {
            inset-inline-end: auto;
            inset-inline-start: 20px;
        }
        
        .toast-container.toast-top-center {
            left: 50%;
            transform: translate(-50%, 0);
        }
        
        .toast-container.toast-bottom-center {
            left: 50%;
            transform: translate(-50%, 0);
            inset-block-end: 30px;
            inset-block-start: auto;
        }
        
        .toast-container .toast-item {
            --tm-toast-max-width: 370px;
            position: relative;
            overflow: hidden;
            opacity: 0;
            transform: translateX(110%);
            transition: transform .5s ease-in-out, opacity 0.5s ease-in-out;
            width: var(--tm-toast-max-width);
            max-width: 100%;
            font-size: 0.875rem;
            color: var(--toast-item-color);
            pointer-events: auto;
            background-color: var(--toast-item-bg);
            background-clip: padding-box;
            border: 1px solid transparent;
            box-shadow: var(--toast-magic-box-shadow);
            border-radius: .5rem;
            padding: 1.25rem !important;
            align-items: center !important;
        }
        
        .toast-container.theme-default.toast-gradient-enable .toast-item,
        .toast-container.theme-material.toast-gradient-enable .toast-item {
            --toast-item-gradient-opacity: .1;
        }
        
        .toast-container.theme-default.toast-gradient-enable .toast-item.toast-success,
        .toast-container.theme-material.toast-gradient-enable .toast-item.toast-success {
            background-image: linear-gradient(to bottom, rgba(var(--toast-magic-success-rgb), var(--toast-item-gradient-opacity, .1)), #fff);
        }
        
        .toast-container.theme-default.toast-gradient-enable .toast-item.toast-info,
        .toast-container.theme-material.toast-gradient-enable .toast-item.toast-info {
            background-image: linear-gradient(to bottom, rgba(var(--toast-magic-info-rgb), var(--toast-item-gradient-opacity, .1)), #fff);
        }
        
        .toast-container.theme-default.toast-gradient-enable .toast-item.toast-warning,
        .toast-container.theme-material.toast-gradient-enable .toast-item.toast-warning {
            background-image: linear-gradient(to bottom, rgba(var(--toast-magic-warning-rgb), var(--toast-item-gradient-opacity, .1)), #fff);
        }
        
        .toast-container.theme-default.toast-gradient-enable .toast-item.toast-danger,
        .toast-container.theme-material.toast-gradient-enable .toast-item.toast-danger {
            background-image: linear-gradient(to bottom, rgba(var(--toast-magic-danger-rgb), var(--toast-item-gradient-opacity, .1)), #fff);
        }
        
        .toast-container.theme-material .toast-item {
            border-radius: 0;
            --toast-magic-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }
        
        .toast-container.toast-top-start .toast-item,
        .toast-container.toast-bottom-start .toast-item {
            transform: translateX(-110%);
        }
        
        .toast-container.toast-top-center .toast-item {
            transform: translateY(-110%);
        }
        
        .toast-container.toast-bottom-center .toast-item {
            transform: translateY(110%);
        }
        
        .toast-container .toast-item.show {
            transform: translateX(0);
            opacity: 1;
        }
        
        .toast-container.toast-item.hide {
            transform: translateX(100%);
            opacity: 0;
        }
        
        .toast-item-content-center {
            display: flex;
            align-items: start;
            justify-content: space-between;
            gap: .5rem !important;
        }
        
        .toast-item-content-center .toast-body {
            padding: 0;
            word-wrap: break-word;
            display: flex;
            gap: .5rem !important;
        }
        
        .toast-item-content-center .toast-body .toast-body-container {
            display: flex;
            flex-direction: column;
            gap: .25rem;
        }
        
        .toast-item-content-center .toast-body-icon-container {
            inline-size: 22px;
            block-size: 22px;
            padding: 0;
            font-size: 18px;
            border-radius: 0.3125rem;
            line-height: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .toast-item-content-center .toast-body-title {
            display: flex;
            justify-content: start;
            align-items: center;
            min-height: 22px;
            line-height: 1;
        }
        
        .toast-item-content-center .toast-body h4 {
            font-size: 0.875rem;
            font-weight: 500;
            margin: 0;
            line-height: 1.15rem;
        }
        
        .toast-item-content-center .toast-body p {
            font-size: 0.75rem;
            font-weight: 400;
            margin: 0;
            padding: 0;
            white-space: pre-line;
        }
        
        .toast-item-content-center .toast-body-end {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: flex-end;
            gap: .65rem;
        }
        
        .toast-close-btn {
            background: transparent;
            border: 0;
            font-size: 1rem;
            color: var(--toast-close-btn-color);
            width: 1.25rem;
            cursor: pointer;
            z-index: 99999;
            display: flex;
            align-items: start;
            opacity: .65;
            transition: opacity .25s ease-in-out;
            padding: 0;
            margin: 0;
        }
        
        .toast-close-btn:hover {
            opacity: 1;
        }
        
        .toast-container .toast-custom-btn {
            --toast-custom-btn-bg-rgb: var(--toast-magic-success-rgb);
            font-size: 0.75rem;
            white-space: nowrap;
            background-color: rgba(var(--toast-custom-btn-bg-rgb), 0.2);
            color: var(--toast-custom-btn-color);
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            padding: 0.35rem 0.675rem;
            max-width: 100px;
            display: block;
            overflow: hidden;
            text-overflow: ellipsis;
            text-decoration: none;
            border-radius: .275rem;
            font-weight: 600;
            border: 1px solid transparent;
        }
        
        .toast-container.theme-material .toast-custom-btn {
            border-radius: 0;
        }
        
        .toast-container .toast-custom-btn:hover {
            border: 1px solid rgba(var(--toast-custom-btn-bg-rgb), 1);
        }
        
        .toast-btn-bg-success {
            --toast-custom-btn-bg-rgb: var(--toast-magic-success-rgb);
        }
        
        .toast-btn-bg-info {
            --toast-custom-btn-bg-rgb: var(--toast-magic-info-rgb);
        }
        
        .toast-btn-bg-danger {
            --toast-custom-btn-bg-rgb: var(--toast-magic-danger-rgb);
        }
        
        .toast-btn-bg-warning {
            --toast-custom-btn-bg-rgb: var(--toast-magic-warning-rgb);
        }
        
        .toast-item-content-center .fi {
            line-height: 1;
        }
        
        .toast-item.toast-success::before {
            content: "";
            position: absolute;
            inset-block-start: 0;
            inset-inline-start: 0;
            width: 100%;
            height: 4px;
            background-color: rgba(var(--toast-magic-success-rgb), var(--toast-item-before-opacity, 0.4));
            animation: toastProgressReverse 3s linear forwards;
        }
        
        .toast-item.toast-success::after {
            content: "";
            position: absolute;
            inset-block-start: 0;
            inset-inline-end: 0;
            width: 0%;
            height: 4px;
            background-color: rgba(var(--toast-magic-success-rgb), var(--toast-item-after-opacity, 1));
            transform-origin: right;
            animation: toastProgress 3s linear forwards;
        }
        
        .toast-container.toast-color-true .toast-item.toast-success {
            background-color: rgba(var(--toast-magic-success-rgb), var(--toast-item-after-opacity, 1));
        }
        
        .toast-container.toast-color-true .toast-item.toast-info {
            background-color: rgba(var(--toast-magic-info-rgb), var(--toast-item-after-opacity, 1));
        }
        
        .toast-container.toast-color-true .toast-item.toast-warning {
            background-color: rgba(var(--toast-magic-warning-rgb), var(--toast-item-after-opacity, 1));
        }
        
        .toast-container.toast-color-true .toast-item.toast-danger {
            background-color: rgba(var(--toast-magic-danger-rgb), var(--toast-item-after-opacity, 1));
        }
        
        .toast-container.toast-color-true .toast-item.toast-success::before, 
        .toast-container.toast-color-true .toast-item.toast-info::before,
        .toast-container.toast-color-true .toast-item.toast-warning::before,
        .toast-container.toast-color-true .toast-item.toast-danger::before {
            background-color: rgba(var(--toast-color-mode-progress-bg), var(--toast-item-before-opacity, 0.4));
        }
        
        .toast-container.toast-color-true .toast-item.toast-success::after, 
        .toast-container.toast-color-true .toast-item.toast-info::after,
        .toast-container.toast-color-true .toast-item.toast-warning::after,
        .toast-container.toast-color-true .toast-item.toast-danger::after {
            background-color: rgba(var(--toast-color-mode-progress-bg), var(--toast-item-after-opacity, 1));
        }
        
        .toast-container.toast-color-true .toast-body-icon-container,
        .toast-container.toast-color-true .toast-close-btn,
        .toast-container.toast-color-true .toast-item {
            --toast-item-color: #FFFFFF;
            --toast-close-btn-color: #FFFFFF;
            color: var(--toast-item-color);
        }
        
        .toast-container.toast-color-true .toast-custom-btn {
            background-color: #FFF;
            color: #000;
        }
        
        .toast-container.toast-color-true .toast-custom-btn:hover {
            border: 1px solid rgba(var(--toast-color-mode-progress-bg), var(--toast-item-before-opacity, 0.4));
        }
        
        .toast-container.toast-color-true .toast-item-content-center .toast-body h4,
        .toast-container.toast-color-true .toast-item-content-center .toast-body p {
            letter-spacing: 1px;
        }
        
        .toast-item.toast-danger::before {
            content: "";
            position: absolute;
            inset-block-start: 0;
            inset-inline-start: 0;
            width: 100%;
            height: 4px;
            background-color: rgba(var(--toast-magic-danger-rgb), var(--toast-item-before-opacity, 0.4));
            animation: toastProgressReverse 3s linear forwards;
        }
        
        .toast-item.toast-danger::after {
            content: "";
            position: absolute;
            inset-block-start: 0;
            inset-inline-end: 0;
            width: 0%;
            height: 4px;
            background-color: rgba(var(--toast-magic-danger-rgb), var(--toast-item-after-opacity, 1));
            transform-origin: right;
            animation: toastProgress 3s linear forwards;
        }
        
        .toast-item.toast-warning::before {
            content: "";
            position: absolute;
            inset-block-start: 0;
            inset-inline-start: 0;
            width: 100%;
            height: 4px;
            background-color: rgba(var(--toast-magic-warning-rgb), var(--toast-item-before-opacity, 0.4));
            animation: toastProgressReverse 3s linear forwards;
        }
        
        .toast-item.toast-warning::after {
            content: "";
            position: absolute;
            inset-block-start: 0;
            inset-inline-end: 0;
            width: 0%;
            height: 4px;
            background-color: rgba(var(--toast-magic-warning-rgb), var(--toast-item-after-opacity, 1));
            transform-origin: right;
            animation: toastProgress 3s linear forwards;
        }
        
        .toast-item.toast-info::before {
            content: "";
            position: absolute;
            inset-block-start: 0;
            inset-inline-start: 0;
            width: 100%;
            height: 4px;
            background-color: rgba(var(--toast-magic-info-rgb), var(--toast-item-before-opacity, 0.4));
            animation: toastProgressReverse 3s linear forwards;
        }
        
        .toast-item.toast-info::after {
            content: "";
            position: absolute;
            inset-block-start: 0;
            inset-inline-end: 0;
            width: 0%;
            height: 4px;
            background-color: rgba(var(--toast-magic-info-rgb), var(--toast-item-after-opacity, 1));
            transform-origin: right;
            animation: toastProgress 3s linear forwards;
        }
        
        [dir=rtl] .toast-item.hide {
            transform: translateX(-100%);
        }
        
        [dir=rtl] .toast-item .end-0 {
            right: unset !important;
            left: 0 !important;
        }
        
        @media (max-width: 575px) {
            .toast-container {
                inset-inline-end: 12px;
            }
        }
        
        @keyframes toastProgress {
            from {
                width: var(--toast-progress-start, 0%);
            }
        
            to {
                width: var(--toast-progress-end, 100%);
            }
        }
        
        @keyframes toastProgressReverse {
            from {
                width: var(--toast-progress-end, 100%);
            }
        
            to {
                width: var(--toast-progress-start, 0%);
            }
        }
    </style>
</head>
<body>

    <?php echo $__env->make('includes.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('includes.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <div class="box-float">
        <ul>
            <li class="wpp">
                <a href="<?php echo e(getItem('link-whats1')); ?>" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"/></svg>
                </a>
            </li>

            <li class="email">
                <a href="mailto:<?php echo e(getItem('email-client')); ?>">
                    <svg class="email" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M112 128C85.5 128 64 149.5 64 176C64 191.1 71.1 205.3 83.2 214.4L291.2 370.4C308.3 383.2 331.7 383.2 348.8 370.4L556.8 214.4C568.9 205.3 576 191.1 576 176C576 149.5 554.5 128 528 128L112 128zM64 260L64 448C64 483.3 92.7 512 128 512L512 512C547.3 512 576 483.3 576 448L576 260L377.6 408.8C343.5 434.4 296.5 434.4 262.4 408.8L64 260z"/></svg>
                </a>
            </li>

            <li class="instagram">
                <a href="<?php echo e(getItem('link-instagram1')); ?>" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M320.3 205C256.8 204.8 205.2 256.2 205 319.7C204.8 383.2 256.2 434.8 319.7 435C383.2 435.2 434.8 383.8 435 320.3C435.2 256.8 383.8 205.2 320.3 205zM319.7 245.4C360.9 245.2 394.4 278.5 394.6 319.7C394.8 360.9 361.5 394.4 320.3 394.6C279.1 394.8 245.6 361.5 245.4 320.3C245.2 279.1 278.5 245.6 319.7 245.4zM413.1 200.3C413.1 185.5 425.1 173.5 439.9 173.5C454.7 173.5 466.7 185.5 466.7 200.3C466.7 215.1 454.7 227.1 439.9 227.1C425.1 227.1 413.1 215.1 413.1 200.3zM542.8 227.5C541.1 191.6 532.9 159.8 506.6 133.6C480.4 107.4 448.6 99.2 412.7 97.4C375.7 95.3 264.8 95.3 227.8 97.4C192 99.1 160.2 107.3 133.9 133.5C107.6 159.7 99.5 191.5 97.7 227.4C95.6 264.4 95.6 375.3 97.7 412.3C99.4 448.2 107.6 480 133.9 506.2C160.2 532.4 191.9 540.6 227.8 542.4C264.8 544.5 375.7 544.5 412.7 542.4C448.6 540.7 480.4 532.5 506.6 506.2C532.8 480 541 448.2 542.8 412.3C544.9 375.3 544.9 264.5 542.8 227.5zM495 452C487.2 471.6 472.1 486.7 452.4 494.6C422.9 506.3 352.9 503.6 320.3 503.6C287.7 503.6 217.6 506.2 188.2 494.6C168.6 486.8 153.5 471.7 145.6 452C133.9 422.5 136.6 352.5 136.6 319.9C136.6 287.3 134 217.2 145.6 187.8C153.4 168.2 168.5 153.1 188.2 145.2C217.7 133.5 287.7 136.2 320.3 136.2C352.9 136.2 423 133.6 452.4 145.2C472 153 487.1 168.1 495 187.8C506.7 217.3 504 287.3 504 319.9C504 352.5 506.7 422.6 495 452z"/></svg>
                </a>
            </li>

            <li class="linkedin">
                <a href="<?php echo e(getItem('linkedin')); ?>" target="_blank">
                    <svg class="linkedin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M196.3 512L103.4 512L103.4 212.9L196.3 212.9L196.3 512zM149.8 172.1C120.1 172.1 96 147.5 96 117.8C96 103.5 101.7 89.9 111.8 79.8C121.9 69.7 135.6 64 149.8 64C164 64 177.7 69.7 187.8 79.8C197.9 89.9 203.6 103.6 203.6 117.8C203.6 147.5 179.5 172.1 149.8 172.1zM543.9 512L451.2 512L451.2 366.4C451.2 331.7 450.5 287.2 402.9 287.2C354.6 287.2 347.2 324.9 347.2 363.9L347.2 512L254.4 512L254.4 212.9L343.5 212.9L343.5 253.7L344.8 253.7C357.2 230.2 387.5 205.4 432.7 205.4C526.7 205.4 544 267.3 544 347.7L544 512L543.9 512z"/></svg>
                </a>
            </li>
        </ul>
    </div>
    
    

    <!-- ANIMAÇÕES -->
    <script>
        window.addEventListener("DOMContentLoaded", () => {
            const targets = document.querySelectorAll('.animate');

            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        observer.unobserve(entry.target); // Evita reativar várias vezes
                    }
                });
            }, { threshold: 0.3 });

            targets.forEach(target => observer.observe(target));
        });
    </script>

    

    <!-- Btn mobile -->
    <script>
        let btnMobile = document.querySelectorAll('header .btnMobile')
        const header = document.querySelector('header')

        btnMobile.forEach(openMenu =>{
            openMenu.addEventListener('click', function(){
                header.classList.toggle('active');
            })
        })
    </script>
    
    <script type="module">
        (function(w){
            var loads = w.document.querySelectorAll('link[media="print"]');
            if(loads.length > 0){
                for(var i = 0; i < loads.length; i++){
                    if(loads[i].media !== 'all'){
                        loads[i].media = 'all';
                    }
                }
            }
        }(window));
    </script>
    
    <?php echo $__env->yieldContent('scripts'); ?>
    
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session()->has('laravel-toaster-magic::messages')): ?>
        <?php echo ToastMagic::scripts(); ?>

    <?php else: ?>
        <script>
            window.addEventListener('load', function() {
                var s = document.createElement('script');
                s.src = "<?php echo e(asset('packages/devrabiul/laravel-toaster-magic/js/laravel-toaster-magic.js')); ?>";
                document.body.appendChild(s);
            });
        </script>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</body>
</html><?php /**PATH C:\Users\kaikg\Downloads\logus-capital\resources\views/layouts/layout.blade.php ENDPATH**/ ?>