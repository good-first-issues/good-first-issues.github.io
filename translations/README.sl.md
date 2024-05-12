NOTE: This file has been translated automatically. If you find an error, just make a PR with the edits" to all translation files.
![Dobre prve izdaje](../assets/github/social-preview.png)

# Dobre prve številke

**Good First Issues** je pobuda za enostavno izbiranje priljubljenih projektov, tako da lahko razvijalci, ki še nikoli niso prispevali k odprtokodnosti, hitro začnejo.

Spletno mesto: [good-first-issues.github.io](https://good-first-issues.github.io)

To spletno mesto je namenjeno predvsem razvijalcem, ki želijo prispevati k odprtokodni programski opremi, vendar ne vedo, kje in kako začeti.

Vzdrževalci odprtokodnih sistemov vedno želijo k sodelovanju pritegniti več ljudi, novi razvijalci pa na splošno menijo, da je postati sodelujoči izziv. Verjamemo, da pridobitev razvijalcev, da popravijo zelo enostavne težave, odstrani oviro za prihodnje prispevke. Zato obstajajo *Good First Issues*.

## Dodajanje novega projekta

Vabimo vas, da dodate nov projekt v *Good First Issues*, sledite tem korakom:

- Če želite ohraniti kakovost projektov v *Good First Issues*, se prepričajte, da vaše skladišče GitHub izpolnjuje naslednja merila:

     - Ima vsaj tri številke z oznako "dobra prva izdaja". Ta oznaka je že privzeto prisotna v vseh repozitorijih.

     - Vsebuje `README.md` s podrobnimi navodili za nastavitev projekta

     - Aktivno se vzdržuje (zadnja posodobitev pred manj kot 1 mesecem)

- Dodajte pot vašega repozitorija (v obliki `lastnik/ime` in leksikografskem vrstnem redu) v [repositories.json](https://github.com/gomzyakov/good-first-issue/blob/main/repositories.json).

- Ustvarite novo zahtevo za vleko. Dodajte povezavo do strani s težavami v skladišču v opisu PR. Ko je zahteva za vlečenje združena, bodo spremembe objavljene na [good-first-issues.github.io](https://good-first-issues.github.io).

## Kako deluje?

- First *Good First Issues* je statično spletno mesto, ki uporablja [PHP](https://www.php.net)` za ustvarjanje datotek HTML.
- Uporabljamo [GitHub REST API](https://docs.github.com/en/rest) za pridobivanje težav iz repozitorijev, navedenih v [repositories.json](https://github.com/gomzyakov/good-first) -issue/blob/main/repositories.json).
- Za občasno kroženje skozi težave (dvakrat na dan) uporabljamo [GitHub Workflow](https://docs.github.com/en/actions/using-workflows).

## Pomagajte nam rasti

Krmarjenje po odprtokodnih projektih je lahko precej naporno tako za začetnike kot za izkušene sodelavce. *Good First Issues* poskuša rešiti to težavo z zagotavljanjem platforme, ki služi kot izhodišče za tiste, ki želijo začeti z odprto kodo, ali tiste, ki se želijo podati v nov projekt.

Več ljudi kot pozna [good-first-issues.github.io](https://good-first-issues.github.io), tem bolje. Obstaja več načinov, kako nam lahko pomagate pri rasti: lahko prispevate k `odličnim` seznamom, pišete blog o nas, se obrnete na blogerje, tehnološke vplive, razvijalce in na primer odprto kodo na Twitterju in YouTubu. Poskusite naj se [good-first-issues.github.io](https://good-first-issues.github.io) omeni v videu ali tvitu!

## Predlogi in želje

Če imate vprašanja ali predloge (ali ste našli napako), lahko kadar koli pišete na [issues](https://github.com/good-first-issues/good-first-issues.github.io/issues).

## Licenca

To je odprtokodna programska oprema, licencirana pod [licenco MIT](https://github.com/good-first-issues/good-first-issues.github.io/blob/main/LICENSE).
