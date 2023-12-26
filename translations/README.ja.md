![良い最初の号](./assets/github/social-preview.png)

# 良い最初の号

**Good First Issues** は、オープンソースに貢献したことがない開発者でもすぐに始められるように、人気のあるプロジェクトから簡単に選んだものを厳選する取り組みです。

ウェブサイト: [good-first-issues.github.io](https://good-first-issues.github.io)

この Web サイトは主に、オープン ソース ソフトウェアに貢献したいが、どこからどのように始めればよいかわからない開発者を対象としています。

オープンソースのメンテナーは常に、より多くの人を参加させようとしていますが、新しい開発者は一般に、コントリビューターになるのは難しいと考えています。 私たちは、開発者に非常に簡単な問題を修正してもらうことで、将来の貢献に対する障壁を取り除くことができると信じています。 これが、*Good First Issues* が存在する理由です。

## 新しいプロジェクトの追加

*Good First Issues* に新しいプロジェクトを追加することはできます。次の手順に従ってください。

- *Good First Issues* のプロジェクトの品質を維持するには、GitHub リポジトリが次の基準を満たしていることを確認してください。

     - 「良好な初号」ラベルが付いた号が少なくとも 3 件あります。 このラベルは、デフォルトですべてのリポジトリにすでに存在します。

     - プロジェクトの詳細なセットアップ手順が記載された「README.md」が含まれています

     - 積極的にメンテナンスされています (最終更新は 1 か月以内)

- [repositories.json](https://github.com/gomzyakov/good-first-issue/blob/main/repositories.json) にリポジトリのパス (「所有者/名前」形式および辞書編集順) を追加します。

- 新しいプルリクエストを作成します。 PR の説明にリポジトリの問題ページへのリンクを追加してください。 プル リクエストがマージされると、変更は [good-first-issues.github.io](https://good-first-issues.github.io) で公開されます。

## どのように機能するのでしょうか?

- First *Good First Issues* は、[PHP](https://www.php.net)` を使用して HTML ファイルを生成する静的 Web サイトです。
- [GitHub REST API](https://docs.github.com/en/rest) を使用して、[repositories.json](https://github.com/gomzyakov/good-first) にリストされているリポジトリから問題を取得します。 -issue/blob/main/repositories.json)。
- 問題を定期的に (1 日 2 回) 循環するには、[GitHub ワークフロー](https://docs.github.com/en/actions/using-workflows) を使用します。

## 私たちの成長にご協力ください

オープンソース プロジェクトをナビゲートすることは、初心者にとっても経験豊富な貢献者にとっても同様に非常に困難な場合があります。 *Good First Issues* は、オープンソースを始めようとしている人や、新しいプロジェクトに参加しようとしている人に出発点となるプラットフォームを提供することで、この問題を解決しようとしています。

[good-first-issues.github.io](https://good-first-issues.github.io) について知っている人が多ければ多いほど、良いことになります。 私たちの成長に貢献できるさまざまな方法があります。たとえば、「素晴らしい」リストに投稿したり、私たちについてブログを書いたり、ブロガー、技術的影響力のある人、開発者や Twitter や YouTube のオープンソースに連絡したりすることができます。 [good-first-issues.github.io](https://good-first-issues.github.io) がビデオまたはツイートで言及されるようにしてください。

## ご提案とご要望

質問や提案がある場合 (またはバグを見つけた場合)、いつでも [問題](https://github.com/good-first-issues/good-first-issues.github.io/issues) に書き込んでいただけます。

## ライセンス

これは、[MIT ライセンス](https://github.com/good-first-issues/good-first-issues.github.io/blob/main/LICENSE) に基づいてライセンス供与されたオープンソース ソフトウェアです。