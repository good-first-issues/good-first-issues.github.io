NOTE: This file has been translated automatically. If you find an error, just make a PR with the edits" to all translation files.
![Buoni primi numeri](../assets/github/social-preview.png)

# Buoni primi problemi

**Good First Issues** è un'iniziativa volta a selezionare semplici scelte da progetti popolari, in modo che gli sviluppatori che non hanno mai contribuito all'open source possano iniziare rapidamente.

Sito web: [good-first-issues.github.io](https://good-first-issues.github.io)

Questo sito Web è rivolto principalmente agli sviluppatori che desiderano contribuire al software open source ma non sanno da dove o come iniziare.

I manutentori open source cercano sempre di coinvolgere più persone, ma i nuovi sviluppatori generalmente pensano che sia difficile diventare un contributore. Riteniamo che convincere gli sviluppatori a risolvere i problemi in modo estremamente semplice rimuova la barriera per i contributi futuri. Questo è il motivo per cui esiste *Good First Issues*.

## Aggiunta di un nuovo progetto

Puoi aggiungere un nuovo progetto in *Good First Issues*, basta seguire questi passaggi:

- Per mantenere la qualità dei progetti in *Good First Issues*, assicurati che il tuo repository GitHub soddisfi i seguenti criteri:

     - Ha almeno tre numeri con l'etichetta "buono primo numero". Questa etichetta è già presente su tutti i repository per impostazione predefinita.

     - Contiene un `README.md` con istruzioni dettagliate per la configurazione del progetto

     - È mantenuto attivamente (ultimo aggiornamento meno di 1 mese fa)

- Aggiungi il percorso del tuo repository (nel formato `proprietario/nome` e nell'ordine lessicografico) in [repositories.json](https://github.com/gomzyakov/good-first-issue/blob/main/repositories.json).

- Crea una nuova richiesta pull. Si prega di aggiungere il collegamento alla pagina dei problemi del repository nella descrizione del PR. Una volta unita la richiesta pull, le modifiche saranno attive su [good-first-issues.github.io](https://good-first-issues.github.io).

## Come funziona?

- First *Good First Issues* è un sito Web statico che utilizza [PHP](https://www.php.net)` per generare file HTML.
- Utilizziamo [GitHub REST API](https://docs.github.com/en/rest) per recuperare i problemi dai repository elencati in [repositories.json](https://github.com/gomzyakov/good-first -issue/blob/main/repositories.json).
- Per scorrere periodicamente i problemi (due volte al giorno), utilizziamo [GitHub Workflow](https://docs.github.com/en/actions/using-workflows).

## Aiutaci a crescere

La navigazione nei progetti open source può essere piuttosto travolgente sia per i principianti che per i contributori esperti. *Good First Issues* cerca di risolvere questo problema fornendo una piattaforma che funge da punto di partenza per coloro che desiderano iniziare con l'open source o per coloro che desiderano entrare in un nuovo progetto.

Più persone conoscono [good-first-issues.github.io](https://good-first-issues.github.io), meglio è. Ci sono vari modi in cui puoi aiutarci a crescere: potresti contribuire a elenchi "fantastici", scrivere blog su di noi, contattare blogger, influenze tecnologiche, sviluppatori e open source su Twitter e YouTube, ad esempio. Prova a far menzionare [good-first-issues.github.io](https://good-first-issues.github.io) in un video o in un tweet!

## Suggerimenti e desideri

Se hai domande o suggerimenti (o hai trovato un bug), puoi sempre scrivere a [issues](https://github.com/good-first-issues/good-first-issues.github.io/issues).

## Licenza

Questo è un software open source concesso in licenza con la [licenza MIT](https://github.com/good-first-issues/good-first-issues.github.io/blob/main/LICENSE).
