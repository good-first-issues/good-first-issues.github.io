>**NOTE:** _This file has been translated automatically. If you find an error, just make a PR with the edits" to all translation files._
![Goede eerste problemen](../assets/github/social-preview.png)

# Goede eerste nummers

**Good First Issues** is een initiatief om makkelijke keuzes uit populaire projecten samen te stellen, zodat ontwikkelaars die nog nooit aan open source hebben bijgedragen snel aan de slag kunnen.

Website: [good-first-issues.github.io](https://good-first-issues.github.io)

Deze website is vooral gericht op ontwikkelaars die een bijdrage willen leveren aan open source software, maar niet weten waar en hoe te beginnen.

Open-source-onderhouders willen altijd meer mensen erbij betrekken, maar nieuwe ontwikkelaars vinden het over het algemeen een uitdaging om een bijdrager te worden. Wij zijn van mening dat als je ontwikkelaars supereenvoudig problemen laat oplossen, de barrière voor toekomstige bijdragen wordt weggenomen. Dit is de reden waarom *Good First Issues* bestaat.

## Een nieuw project toevoegen

Je bent van harte welkom om een nieuw project toe te voegen aan *Good First Issues*. Volg gewoon deze stappen:

- Om de kwaliteit van projecten in *Good First Issues* te behouden, moet u ervoor zorgen dat uw GitHub-repository aan de volgende criteria voldoet:

     - Er zijn minstens drie nummers met het label 'goed eerste nummer'. Dit label is standaard al aanwezig op alle repositories.

     - Het bevat een `README.md` met gedetailleerde installatie-instructies voor het project

     - Het wordt actief onderhouden (laatste update minder dan 1 maand geleden)

- Voeg het pad van uw repository toe (in het formaat `eigenaar/naam` en lexicografische volgorde) in [repositories.json](https://github.com/gomzyakov/good-first-issue/blob/main/repositories.json).

- Maak een nieuw pull-verzoek. Voeg de link naar de problemenpagina van de repository toe in de PR-beschrijving. Zodra het pull-verzoek is samengevoegd, zullen de wijzigingen live staan op [good-first-issues.github.io](https://good-first-issues.github.io).

## Hoe werkt het?

- First *Good First Issues* is een statische website die [PHP](https://www.php.net)` gebruikt om HTML-bestanden te genereren.
- We gebruiken [GitHub REST API](https://docs.github.com/en/rest) om problemen op te halen uit de repositories vermeld in [repositories.json](https://github.com/gomzyakov/good-first -issue/blob/main/repositories.json).
- Om periodiek door problemen te bladeren (twee keer per dag), gebruiken we [GitHub Workflow](https://docs.github.com/en/actions/using-workflows).

## Help ons groeien

Navigeren door open-sourceprojecten kan behoorlijk overweldigend zijn voor zowel beginners als ervaren bijdragers. *Good First Issues* probeert dit probleem op te lossen door een platform te bieden dat als startpunt dient voor degenen die aan de slag willen met open source of voor degenen die aan een nieuw project willen beginnen.

Hoe meer mensen op de hoogte zijn van [good-first-issues.github.io](https://good-first-issues.github.io), hoe beter. Er zijn verschillende manieren waarop u ons kunt helpen groeien: u kunt bijdragen aan 'geweldige' lijsten, over ons bloggen, contact opnemen met bloggers, technische invloeden, ontwikkelaars en open source op bijvoorbeeld Twitter en YouTube. Probeer [good-first-issues.github.io](https://good-first-issues.github.io) genoemd te krijgen in een video of tweet!

## Suggesties en wensen

Als je vragen of suggesties hebt (of een bug hebt gevonden), kun je altijd schrijven naar [issues](https://github.com/good-first-issues/good-first-issues.github.io/issues).

## Licentie

Dit is open source software gelicentieerd onder de [MIT-licentie] (https://github.com/good-first-issues/good-first-issues.github.io/blob/main/LICENSE).
