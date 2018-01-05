# Analys pagespeed

## Metod
Jag har vald att analysera webb-shop sidor, då jag utgår ifrån att prestanda är ekonomisk viktigt för dessa sidor. Jag har vald Boozt.com som ju ofta har reklam på tv och sedan två webb-shopper jag själva användar: Stadium.se och Nordicfeel.se.

Jag har aldrig tidigare gjort sådana analyser, så jag har helt enkelt följd instruktionen och använd Google PageSpeed och Firefox Developer edition. Jag matade in varje URL som skulle mätas i PageSpeed analys input, och tryckte Ctrl-Shift-R för analys mätning utan cache.

<a href="../img/pagespeeddetails.xls" type="vnd.ms-excel">Detaljerade mätresultat</a>
![Pagespeed meassures] (img/pagespeed_meassure.jpg)



## Boozt.com

[FIGURE src="cimage/imgd.php?src=Boozt.jpg&w=600" caption="Boozt.com startsidan"]


Analyserade sidor:
Startsidan:             [Boozt.com](https://www.boozt.com/index)

Kläder för män:         [Boozt.com - herrkläder](https://www.boozt.com/se/sv/klader-for-man/rea)

Kläder för kvinnor:     [Boozt.com - kvinnokläder](https://www.boozt.com/se/sv/klader-for-kvinnor)


En DOM ladningstid på 2-3 sekunder känns bra.
Förslagna åtgärdspunkter: Unvika redirects, optimera bilder, browser cache och ta bort render-blocking above the fold. Detta i siten med minst problem.


## Nordicfeel.se
[FIGURE src="cimage/imgd.php?src=Nordicfeel.jpg&w=600" caption="Nordicfeel.se startsidan"]


Analyserade sidor:
Startsidan:                 [Nordicfeel.se](https://www.nordicfeel.se)

Produkter för män:          [Produkter för män](https://www.nordicfeel.se/man)

Kontaktsidan:               [Kontaktsida](https://www.nordicfeel.se/kundservice)

Förslagna åtgärdspunkter: Förutom de som finns för Boozt.com tycker Pagespeed att man ska prioritera synligt innehåll, aktiver kompression, minimiera server svarstider och minimera javascript.

## Staduim.se
[FIGURE src="cimage/imgd.php?src=Staduim.jpg&w=600" caption="Staduim.se startsidan"]

Analyserade sidor:
Startsidan:                 [Staduim.se](https://www.stadium.se/)

Rea sidan:                  [Rea sidan](https://www.stadium.se/cms/xmas-sale?icid=homepage-xmas-sale-hero)

Kontaktsidan:               [Kontaktsida](https://www.stadium.se/kontakta-oss)

En DOM laddningstid på 5-6 sekunder känns faktisk – inte så att man blir irriterat, men det är tydligt att man väntar någon sekund förrän man kan börja agera på sidan.
Förslagna åtgärdspunkter: Samma som för Nordicfeel.se

## Analys
I min analys framstår Boozt.com som den bäst fungerande sidan, och känslomässigt är det också så för mig som användare. Boozt sidorna har också klart färre åtgärdsförslag, så jag är helt övertyget om att de har jobbet en del med optimering av deras sidor.

Det är tydligt att optimering av bilder kan förbättra alla sidorna, och det är kanske lite förvånande, då dessa e-handelssidor ju använder mängder med bilder och därför borde ha optimerat bildstorleken. Jag kan tänkte mig att man ändå vill prioritera snygga bilder med skuggor etc. för att visa produkten så fin som möjligt (det skapar troligen merförsäljning).

Utifrån ovan rangordnas siterna så här:
1. Boozt.com
2. Nordicfeel.se
3. Stadium.se

Jag tycker att Stadium.se’s laddningstid ligger ungefär på den gräns som känna acceptabel – alltså en 5-6 sekunder för DOM att vara laddad. Jag tror dock att ”kvalitén” på en site även hänger ihop med den produkt man säljer – jag är bered att använda en sämre om jag tycker jag får ett bättra pris för produkten. Jag kanske till och med förväntar mig en sämre sida för en produkt som sälja till ett lägre pris.
Jag har gjort denna analys själva.
