![Bon primers problemes](../assets/github/social-preview.png)

# Bons primers números

**Good First Issues** és una iniciativa per seleccionar fàcils de seleccionar projectes populars, de manera que els desenvolupadors que mai no han contribuït al codi obert puguin començar ràpidament.

Lloc web: [good-first-issues.github.io](https://good-first-issues.github.io)

Aquest lloc web està dirigit principalment a desenvolupadors que volen contribuir al programari de codi obert però que no saben per on ni com començar.

Els mantenedors de codi obert sempre busquen implicar més gent, però els desenvolupadors nous en general pensen que és un repte convertir-se en col·laborador. Creiem que aconseguir que els desenvolupadors solucionin problemes molt fàcils elimina la barrera per a futures contribucions. Per això existeix *Good First Issues*.

## Afegint un projecte nou

Podeu afegir un projecte nou a *Good First Issues*, només heu de seguir aquests passos:

- Per mantenir la qualitat dels projectes a *Good First Issues*, assegureu-vos que el vostre dipòsit de GitHub compleixi els criteris següents:

     - Té almenys tres problemes amb l'etiqueta "bon primer número". Aquesta etiqueta ja està present a tots els repositoris de manera predeterminada.

     - Conté un `README.md` amb instruccions detallades de configuració del projecte

     - Es manté activament (darrera actualització fa menys d'1 mes)

- Afegiu el camí del vostre dipòsit (en el format `propietari/nom` i ordre lexicogràfic) a [repositories.json](https://github.com/gomzyakov/good-first-issue/blob/main/repositories.json).

- Creeu una nova sol·licitud d'extracció. Afegiu l'enllaç a la pàgina de problemes del repositori a la descripció de PR. Un cop s'hagi combinat la sol·licitud d'extracció, els canvis estaran en directe a [good-first-issues.github.io](https://good-first-issues.github.io).

## Com funciona?

- First *Good First Issues* és un lloc web estàtic que utilitza [PHP](https://www.php.net)` per generar fitxers HTML.
- Utilitzem [API REST de GitHub](https://docs.github.com/en/rest) per buscar problemes dels dipòsits enumerats a [repositories.json](https://github.com/gomzyakov/good-first -issue/blob/main/repositories.json).
- Per recórrer periòdicament els problemes (dos cops al dia), utilitzem [GitHub Workflow] (https://docs.github.com/en/actions/using-workflows).

## Ajuda'ns a créixer

Navegar per projectes de codi obert pot ser bastant aclaparador tant per a col·laboradors principiants com experimentats. *Good First Issues* busca resoldre aquest problema proporcionant una plataforma que serveixi de punt de partida per a aquells que volen començar amb el codi obert o aquells que volen entrar en un nou projecte.

Com més gent conegui [good-first-issues.github.io](https://good-first-issues.github.io), millor. Hi ha diverses maneres en què ens pots ajudar a créixer: pots contribuir a llistes "increïbles", blogs sobre nosaltres, contactar amb bloggers, influències tecnològiques, desenvolupadors i codi obert a Twitter i YouTube, per exemple. Prova d'esmentar [good-first-issues.github.io](https://good-first-issues.github.io) en un vídeo o tuit!

## Suggeriments i desitjos

Si teniu preguntes o suggeriments (o heu trobat un error), sempre podeu escriure a [issues](https://github.com/good-first-issues/good-first-issues.github.io/issues).

## Llicència

Aquest és un programari de codi obert amb llicència sota la [Llicència MIT](https://github.com/good-first-issues/good-first-issues.github.io/blob/main/LICENSE).