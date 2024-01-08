![Çështjet e para të mira](./assets/github/social-preview.png)

# Çështjet e para të mira

**Çështjet e para të mira** është një iniciativë për të kuruar zgjedhje të lehta nga projektet e njohura, në mënyrë që zhvilluesit që nuk kanë kontribuar kurrë në burim të hapur mund të fillojnë shpejt.

Uebfaqja: [good-first-issues.github.io](https://good-first-issues.github.io)

Kjo faqe interneti synohet kryesisht për zhvilluesit që duan të kontribuojnë në softuerin me burim të hapur, por nuk dinë se ku ose si të fillojnë.

Mbajtësit me burim të hapur janë gjithmonë në kërkim për të përfshirë më shumë njerëz, por zhvilluesit e rinj në përgjithësi mendojnë se është sfiduese të bëheni një kontribues. Ne besojmë se bërja e zhvilluesve për të rregulluar çështje shumë të lehta heq pengesën për kontributet e ardhshme. Kjo është arsyeja pse *Çështjet e para të mira* ekziston.

## Shtimi i një projekti të ri

Jeni të mirëpritur të shtoni një projekt të ri në *Good First Issues*, thjesht ndiqni këto hapa:

- Për të ruajtur cilësinë e projekteve në *Good First Issues*, ju lutemi sigurohuni që depoja juaj e GitHub të plotësojë kriteret e mëposhtme:

     - Ka të paktën tre probleme me etiketën "çështje e parë e mirë". Ky emërtim është tashmë i pranishëm në të gjitha depot si parazgjedhje.

     - Ai përmban një `README.md` me udhëzime të detajuara të konfigurimit për projektin

     - Mbahet në mënyrë aktive (përditësimi i fundit më pak se 1 muaj më parë)

- Shtoni shtegun e depove tuaja (në formatin "pronari/emri" dhe renditja leksikografike) në [repositories.json](https://github.com/gomzyakov/good-first-issue/blob/main/repositories.json).

- Krijo një kërkesë të re tërheqëse. Ju lutemi shtoni lidhjen në faqen e çështjeve të depove në përshkrimin e PR. Pasi të shkrihet kërkesa për tërheqje, ndryshimet do të shfaqen drejtpërdrejt në [good-first-issues.github.io](https://good-first-issues.github.io).

## Si punon?

- First *Good First Issues* është një faqe interneti statike që përdor [PHP](https://www.php.net)` për të gjeneruar skedarë HTML.
- Ne përdorim [GitHub REST API](https://docs.github.com/en/rest) për të marrë probleme nga depot e listuara në [repositories.json](https://github.com/gomzyakov/good-first -issue/blob/main/repositories.json).
- Për të kaluar periodikisht problemet (dy herë në ditë), ne përdorim [GitHub Workflow](https://docs.github.com/en/actions/using-workflows).

## Na ndihmoni të rritemi

Lundrimi i projekteve me burim të hapur mund të jetë mjaft dërrmues si për fillestarët ashtu edhe për kontribuuesit me përvojë. *Good First Issues* duket se do ta zgjidhë këtë problem duke ofruar një platformë që shërben si pikënisje për ata që kërkojnë të fillojnë me burim të hapur ose ata që kërkojnë të hyjnë në një projekt të ri.

Sa më shumë njerëz që dinë për [good-first-issues.github.io](https://good-first-issues.github.io), aq më mirë. Ka mënyra të ndryshme që mund të na ndihmoni të rritemi: ju mund të kontribuoni në listat "të mrekullueshme", të bëni një blog rreth nesh, të kontaktoni blogerët, ndikimet e teknologjisë, zhvilluesit dhe me burim të hapur në Twitter dhe YouTube, për shembull. Provoni dhe merrni [good-first-issues.github.io](https://good-first-issues.github.io) përmendur në një video ose cicërim!

## Sugjerime dhe dëshira

Nëse keni pyetje ose sugjerime (ose keni gjetur një gabim), mund t'i shkruani gjithmonë [issues](https://github.com/good-first-issues/good-first-issues.github.io/issues).

## Liçensë

Ky është softuer me burim të hapur i licencuar sipas [licencës MIT](https://github.com/good-first-issues/good-first-issues.github.io/blob/main/LICENSE).