<?php

namespace Synext\Components\Htmls;
class Header
{
    public static function show($title,$description,$keywords,$url,$image=null){
        return <<<HTML
            <title>{$title}</title>
            <meta name="culture" content="fr-FR"> 
            <meta name="secure-url" content=""> 
            <meta name="keywords" content="{$keywords}"> 
            <meta name="description" content="{$description}"> 
            <meta name="author" content="NAS-SARRA Immobilier"> 
            <meta name="robots" content="index,follow"/> 

            <meta property="og:language" content="fr"/> 
            <meta property="og:site_name" content="NAS-SARRA Immobilier"> 
            <meta property="og:title" content="{$title}"> 
            <meta property="og:type" content="Product"> 
            <meta property="og:url" content=""> 
            <meta property="og:image" content="/storages/imgs/principal-pic.jpg"/> 
            <meta property="og:description" content="{$description}"/> 
            <meta property="fb:page_id" content="104998398368290"/> 

            <link rel="canonical" href="{$url}"> 
            <link rel="shortcut icon" href="/storages/imgs/favicon.ico"> 
HTML;
    }
}