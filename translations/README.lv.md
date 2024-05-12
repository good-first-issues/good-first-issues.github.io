>**NOTE:** _This file has been translated automatically. If you find an error, just make a PR with the edits" to all translation files._
![Good First Issues](../assets/github/social-preview.png)

# Labi pirmie jautājumi

**Good First Issues** ir iniciatīva, kuras mērķis ir viegli atlasīt populārus projektus, lai izstrādātāji, kuri nekad nav piedalījušies atvērtā pirmkoda izstrādē, varētu ātri sākt darbu.

Vietne: [good-first-issues.github.io](https://good-first-issues.github.io)

Šī vietne galvenokārt ir paredzēta izstrādātājiem, kuri vēlas sniegt ieguldījumu atvērtā pirmkoda programmatūras izveidē, bet nezina, kur un kā sākt.

Atvērtā pirmkoda uzturētāji vienmēr cenšas iesaistīt vairāk cilvēku, taču jaunie izstrādātāji parasti uzskata, ka ir grūti kļūt par līdzstrādniekiem. Mēs uzskatām, ka, liekot izstrādātājiem novērst ļoti vienkāršas problēmas, tiek novērsts šķērslis turpmākiem ieguldījumiem. Tāpēc pastāv *Good First Issues*.

## Jauna projekta pievienošana

Varat pievienot jaunu projektu sadaļā *Good First Issues*, vienkārši veiciet šīs darbības:

- Lai saglabātu projektu kvalitāti sadaļā *Good First Issues*, lūdzu, pārliecinieties, vai jūsu GitHub repozitorijs atbilst šādiem kritērijiem:

     - Tam ir vismaz trīs problēmas ar apzīmējumu "labs pirmais izdevums". Šī etiķete pēc noklusējuma jau ir pieejama visos krātuvēs.

     - Tas satur `README.md` ar detalizētām projekta iestatīšanas instrukcijām

     - Tas tiek aktīvi uzturēts (pēdējais atjauninājums mazāk nekā pirms 1 mēneša)

- Pievienojiet repozitorija ceļu (formātā īpašnieks/nosaukums un leksikogrāfiskā secība) failā [repositories.json](https://github.com/gomzyakov/good-first-issue/blob/main/repositories.json).

- Izveidojiet jaunu vilkšanas pieprasījumu. Lūdzu, PR aprakstā pievienojiet saiti uz krātuves problēmu lapu. Kad izvilkšanas pieprasījums būs apvienots, izmaiņas būs pieejamas vietnē [good-first-issues.github.io] (https://good-first-issues.github.io).

## Kā tas darbojas?

- First *Good First Issues* ir statiska vietne, kas izmanto [PHP](https://www.php.net)`, lai ģenerētu HTML failus.
- Mēs izmantojam [GitHub REST API](https://docs.github.com/en/rest), lai ielādētu problēmas no krātuvēm, kas norādītas [repositories.json](https://github.com/gomzyakov/good-first). -issue/blob/main/repositories.json).
- Lai periodiski pārskatītu problēmas (divas reizes dienā), mēs izmantojam [GitHub Workflow] (https://docs.github.com/en/actions/using-workflows).

## Palīdziet mums augt

Navigācija atvērtā pirmkoda projektos var būt diezgan sarežģīta gan iesācējiem, gan pieredzējušiem līdzstrādniekiem. *Good First Issues* cenšas atrisināt šo problēmu, nodrošinot platformu, kas kalpo par sākumpunktu tiem, kas vēlas sākt darbu ar atvērtā pirmkoda izmantošanu vai tiem, kuri vēlas iesaistīties jaunā projektā.

Jo vairāk cilvēku zina par [good-first-issues.github.io](https://good-first-issues.github.io), jo labāk. Ir dažādi veidi, kā palīdzēt mums augt: piemēram, jūs varat palīdzēt izveidot "lieliskus" sarakstus, rakstīt par mums emuārus, sazināties ar emuāru autoriem, tehnoloģiju ietekmēm, izstrādātājiem un atvērtā pirmkoda pakalpojumus pakalpojumā Twitter un YouTube. Izmēģiniet vietni [good-first-issues.github.io](https://good-first-issues.github.io) pieminēt videoklipā vai tvītā!

## Ieteikumi un vēlmes

Ja jums ir jautājumi vai ieteikumi (vai konstatējat kļūdu), vienmēr varat rakstīt uz [issues](https://github.com/good-first-issues/good-first-issues.github.io/issues).

## Licence

Šī ir atvērtā pirmkoda programmatūra, kas licencēta saskaņā ar [MIT licenci] (https://github.com/good-first-issues/good-first-issues.github.io/blob/main/LICENSE).
