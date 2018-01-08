<?php
/**
 * Config file for theme selector.
 *
 */
return [

    "separator" => "------------------------------------------------",

    "themes" => [

        "separator0" => "------------------------------------------------",

        "base"      => [
            "title"      => "Minimal style, only the plain base",
            "class"      => "",
            "stylesheets" => [
                "css/modules.min.css"
            ]
        ],

        "default"   => [
            "title"      => "Your own selected default theme",
            "class"      => "",
            "stylesheets" => [
                "css/style.min.css"
            ]
        ],

        "separator1" => "------------------------------------------------",

        "light"     =>  [
            "title"      => "Very light theme, white, black and nuances of grey",
            "class"      => "light",
            "stylesheets" => [
                "css/light-theme.min.css"
            ]
        ],

        "color"     => [
            "title"      => "Enhance the light theme by adding a tiny bit of color",
            "class"      => "color",
            "stylesheets" => [
                "css/colour-theme.min.css"
            ]
        ],

        "dark"      => [
            "title"      => "Dark background and light text",
            "class"      => "dark",
            "stylesheets" => ["css/dark-theme.min.css"]
        ],

        "colorful"  => [
            "title"      => "Make a very colorful theme",
            "class"      => "colorful",
            "stylesheets" => ["css/colourfull-theme.min.css"]
        ],

        "typography" => [
            "title"      => "A theme where the typography really stands out",
            "class"      => "light",
            "stylesheets" => ["css/typhography-theme.min.css"]
        ],

        "separator2" => "------------------------------------------------",

        "vgrid"       => [
            "title"      => "Grid",
            "class"      => "",
            "stylesheets" => ["css/layout.css"]
        ],

        "separator3" => "------------------------------------------------",

        "designtheme01"       => [
            "title"      => "Designtheme 1",
            "class"      => "",
            "stylesheets" => ["css/designtheme01.min.css"]
        ],

        "designtheme02"       => [
            "title"      => "Designtheme 2",
            "class"      => "",
            "stylesheets" => ["css/designtheme02.min.css"]
        ],

        "designtheme03"       => [
            "title"      => "Designtheme 3",
            "class"      => "",
            "stylesheets" => ["css/designtheme03.min.css"]
        ],

        "designtheme04"       => [
            "title"      => "Designtheme 4",
            "class"      => "",
            "stylesheets" => ["css/designtheme04.min.css"]
        ],

        "designtheme05"       => [
            "title"      => "Designtheme 5",
            "class"      => "",
            "stylesheets" => ["css/designtheme05.min.css"]
        ],
    ]
];
