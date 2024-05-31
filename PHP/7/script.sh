#!/bin/bash

# Paràmetres rebuts del formulari web
nom_plantilla_html="$1"
titol_pagina="$2"
color_fons="$3"
mostrar_footer="$4"
directori_desti="$5"

# Substitueix espais amb guions i afegeix l'extensió .html al nom de la plantilla
nom_plantilla_html="${nom_plantilla_html// /-}.html"

# Si el directori de destí no és "public", ajusta la ruta
if [ "$directori_desti" != "public" ]; then
    directori_desti="public/$directori_desti"
fi

# Crea el contingut del fitxer HTML
contingut_html="<!DOCTYPE html>
<html lang=\"ca\">
<head>
    <meta charset=\"UTF-8\">
    <title>$titol_pagina</title>
    <style>
        body {
            width: 80%;
            margin: auto;
            background-color: $color_fons;
        }

        header, nav, section, aside, footer {
            border: 1px solid black;
            float: left;
        }

        header {
            width: 100%;
            text-align: center;
        }

        header img {
            float: left;
        }

        nav {
            width: 100%;
            margin: 20px auto 20px auto;
        }

        section {
            width: 70%;
            min-height: 320px;
            display: inline-block;
            text-align: center;
            float: right;
        }

        iframe {
            border: 0;
        }

        aside {
            width: 29.2%;
            min-height: 320px;
        }

        footer {
            width: 100%;
            margin: 20px auto 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <a
            href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRumgd52MNIjlz85XSPwLxinGxcaIvtv3etr_1VTm94bYKldCEL8FPrefJh1csFnWCo0lk\&usqp=CAU"><img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRumgd52MNIjlz85XSPwLxinGxcaIvtv3etr_1VTm94bYKldCEL8FPrefJh1csFnWCo0lk\&usqp=CAU"
                alt="Ziyech"></a>
        <h1>$titol_pagina</h1>
    </header>
    <nav>
        <a href="https://es.wikipedia.org/wiki/Hakim_Ziyech">Wikipedia</a>
        <a href="https://www.transfermarkt.es/hakim-ziyech/profil/spieler/217111">Preu del jugador</a>
        <a href="https://www.instagram.com/hziyech">Instagram del jugador</a>
    </nav>
    <section>
        <h2>Hakim Ziyech vs Canada (Mundial 2022)</h2>
        <iframe src="https://www.youtube.com/embed/zD-cqUe4Oak?si=2HhMPz9PIeDKYcgc" title=\"YouTube video player\"
            allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\"
            allowfullscreen></iframe>
    </section>
    <aside>
        <ul>
            <li> <a href="https://es.wikipedia.org/wiki/Football_Club_Twente">Equip Antic: F. C. Twente</a></li>
            <li> <a href="https://es.wikipedia.org/wiki/Ajax_de_%C3%81msterdam">Equip Antic: Ajax</a></li>
            <li> <a href="https://es.wikipedia.org/wiki/Chelsea_Football_Club">Equip Antic: Chelsea</a></li>
        </ul>
    </aside>
    "

# Afegim el footer si és necessari
if [ "$mostrar_footer" = "true" ]; then
    contingut_html+="
    <footer>
        <a href="https://i.pinimg.com/736x/54/89/39/548939c693843e93597686a2cb137724.jpg"><img
                src="https://i.pinimg.com/736x/54/89/39/548939c693843e93597686a2cb137724.jpg"
                alt=\"Ajax, equip de futbol\"></a>
        <a href="https://www.freepnglogos.com/uploads/logo-chelsea-png/logo-chelsea-chelsea-gamebanana-sprays-6.png"><img
                src="https://www.freepnglogos.com/uploads/logo-chelsea-png/logo-chelsea-chelsea-gamebanana-sprays-6.png"
                alt=\"Chealsea, equip de futbol\"></a>
        <a href="https://images.footballtransfers.com/?url=https://static.footballtransfers.com/resources/teams/9551.png\&h=200"
            ><img
                src=\"https://images.footballtransfers.com/?url=https://static.footballtransfers.com/resources/teams/9551.png\&h=200\" alt=\"galatasaray, equip actual de Ziyech\"></a>
    </footer>
    "
fi

# Tanquem el document HTML
contingut_html+="</body></html>"

# Guardem el contingut al fitxer HTML al directori de destí
echo "$contingut_html" > "$directori_desti/$nom_plantilla_html"

# Ruta relativa del fitxer creat
echo "$nom_plantilla_html"
