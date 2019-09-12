# KupperGlass Wordpress

Paczka zawiera wyeksportowane pliki Wordpress, wraz z templatem i bazą danych.

## Technologia

Użyte technologie w projekcie to *Less* z metodologią *BEM*, grid Bootstrap, slajder *Flickity*, menu nawigacyjne *MMenu*

## LESS

Plik główny *style.less* importuje inne pliki less z podkatalogów, osobno zawierające różne moduły, np. grid, flickity, zmienne, framework, breadcrumbs, tabele oraz inne. Niektóre importy zostały zakomentowane ponieważ niektóre moduły nie zostały użyte w tym projekcie ale mogą służyć rozbudowaniu projektu.

Ponadto wspomniany plik główny *style.less* zawiera strukturę głównego DOM.

## JS

Pliki JS, które znajdują się w podfolderach folderu /wp-content/theme/kupperglass/js zostały scalone i skompresowane do jednego pliku compressed.js. Narzędzie do scalanie plików JS znajduje się również w tym samym katalogu - /wp-content/theme/kupperglass/js/minify.php.

## Edycja projektu od strony CMS

System CMS został zaopatrzony w ACF oraz Theme Options i Contact Form 7. Wszystkie te wtyczki pozwalają na całkowitą zmianę treści wszystkich elementów strony, również stopki.

## Kontakt z wykonawcą

Karol Salamądry,
tel: 500-011-544,
mail: salamadry.karol@gmail.com