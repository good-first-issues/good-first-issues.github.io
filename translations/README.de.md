![Gute Erstausgaben](./assets/github/social-preview.png)

# Gute Erstausgaben

**Good First Issues** ist eine Initiative, die einfache Auswahl aus beliebten Projekten zusammenstellt, damit Entwickler, die noch nie zu Open Source beigetragen haben, schnell loslegen können.

Website: [good-first-issues.github.io](https://good-first-issues.github.io)

Diese Website richtet sich in erster Linie an Entwickler, die zu Open-Source-Software beitragen möchten, aber nicht wissen, wo oder wie sie anfangen sollen.

Open-Source-Betreuer sind immer auf der Suche nach mehr Leuten, die sich engagieren, aber neue Entwickler halten es im Allgemeinen für schwierig, Mitwirkende zu werden. Wir glauben, dass die Hürde für zukünftige Beiträge beseitigt wird, wenn man Entwickler dazu bringt, supereinfache Probleme zu beheben. Aus diesem Grund gibt es *Good First Issues*.

## Ein neues Projekt hinzufügen

Sie können gerne ein neues Projekt in *Good First Issues* hinzufügen. Befolgen Sie einfach diese Schritte:

- Um die Qualität der Projekte in *Good First Issues* aufrechtzuerhalten, stellen Sie bitte sicher, dass Ihr GitHub-Repository die folgenden Kriterien erfüllt:

     - Es gibt mindestens drei Ausgaben mit dem Label „Gute Erstausgabe“. Dieses Label ist standardmäßig bereits in allen Repositorys vorhanden.

     - Es enthält eine „README.md“ mit detaillierten Einrichtungsanweisungen für das Projekt

     - Es wird aktiv gepflegt (letzte Aktualisierung vor weniger als einem Monat)

- Fügen Sie den Pfad Ihres Repositorys (im Format „Eigentümer/Name“ und in lexikografischer Reihenfolge) in [repositories.json](https://github.com/gomzyakov/good-first-issue/blob/main/repositories.json) hinzu.

- Erstellen Sie eine neue Pull-Anfrage. Bitte fügen Sie den Link zur Problemseite des Repositorys in der PR-Beschreibung hinzu. Sobald die Pull-Anfrage zusammengeführt ist, werden die Änderungen auf [good-first-issues.github.io](https://good-first-issues.github.io) live sein.

## Wie funktioniert es?

- First *Good First Issues* ist eine statische Website, die [PHP](https://www.php.net)` zum Generieren von HTML-Dateien verwendet.
– Wir verwenden die [GitHub REST API](https://docs.github.com/en/rest), um Probleme aus den in [repositories.json](https://github.com/gomzyakov/good-first) aufgeführten Repositories abzurufen -issue/blob/main/repositories.json).
- Um Probleme regelmäßig (zweimal täglich) durchzugehen, verwenden wir [GitHub Workflow](https://docs.github.com/en/actions/using-workflows).

## Helfen Sie uns zu wachsen

Das Navigieren in Open-Source-Projekten kann sowohl für Anfänger als auch für erfahrene Mitwirkende ziemlich überwältigend sein. *Good First Issues* möchte dieses Problem lösen, indem es eine Plattform bereitstellt, die als Ausgangspunkt für diejenigen dient, die mit Open Source beginnen möchten oder in ein neues Projekt einsteigen möchten.

Je mehr Leute über [good-first-issues.github.io](https://good-first-issues.github.io) Bescheid wissen, desto besser. Es gibt verschiedene Möglichkeiten, wie Sie uns bei unserem Wachstum helfen können: Sie könnten zu „tollen“ Listen beitragen, über uns bloggen, Blogger, Tech-Influencer, Entwickler und Open-Source auf Twitter und YouTube erreichen, zum Beispiel. Versuchen Sie, [good-first-issues.github.io](https://good-first-issues.github.io) in einem Video oder Tweet erwähnt zu bekommen!

## Anregungen und Wünsche

Wenn Sie Fragen oder Vorschläge haben (oder einen Fehler gefunden haben), können Sie jederzeit an [issues](https://github.com/good-first-issues/good-first-issues.github.io/issues) schreiben.

## Lizenz

Dabei handelt es sich um Open-Source-Software, die unter der [MIT-Lizenz](https://github.com/good-first-issues/good-first-issues.github.io/blob/main/LICENSE) lizenziert ist.