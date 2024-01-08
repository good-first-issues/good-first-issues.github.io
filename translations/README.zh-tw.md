![好的第一期](https://github.com/Krishna01work/good-first-issues.github.io/blob/f5ac4b7f8543913637057e166638f1735512434c/assets/github/social-preview.png)

# 好的第一期

**Good First Issues** 是一項從熱門專案中輕鬆挑選的舉措，因此從未為開源做出過貢獻的開發人員可以快速入門。

網址：[good-first-issues.github.io](https://good-first-issues.github.io)

該網站主要針對那些想要為開源軟體做出貢獻但不知道從哪裡或如何開始的開發人員。

開源維護者總是希望讓更多人參與進來，但新開發人員普遍認為成為貢獻者俱有挑戰性。 我們相信讓開發人員解決超級簡單的問題可以消除未來貢獻的障礙。 這就是「Good First Issues」存在的原因。

## 新增項目

歡迎您在*Good First Issues*中新增項目，只需按照以下步驟操作：

- 為了保持 *Good First Issues* 中的專案質量，請確保您的 GitHub 儲存庫符合以下標準：

     - 它至少有三個問題與「良好的第一期」標籤有關。 預設情況下，該標籤已存在於所有儲存庫中。

     - 它包含一個“README.md”，其中包含項目的詳細設定說明

     - 積極維護（最後更新不到 1 個月前）

- 在[repositories.json](https://github.com/gomzyakov/good-first-issue/blob/main/repositories.json) 中新增儲存庫的路徑（格式為「擁有者/名稱」和字典順序）。

- 建立一個新的拉取請求。 請在 PR 描述中新增指向儲存庫問題頁面的連結。 合併拉取請求後，更改將在 [good-first-issues.github.io](https://good-first-issues.github.io) 上生效。

＃＃ 它是如何運作的？

- First *Good First Issues* 是一個使用 [PHP](https://www.php.net)` 產生 HTML 檔案的靜態網站。
- 我們使用[GitHub REST API](https://docs.github.com/en/rest) 從[repositories.json](https://github.com/gomzyakov/good-first) 中列出的儲存庫中取得問題-issue/blob/main/repositories.json）。
- 為了定期循環處理問題（每天兩次），我們使用 [GitHub Workflow](https://docs.github.com/en/actions/using-workflows)。

## 幫助我們成長

對於初學者和經驗豐富的貢獻者來說，瀏覽開源專案可能會非常困難。 *Good First Issues* 旨在透過提供一個平台來解決這個問題，該平台可以作為那些希望開始使用開源或希望進入新專案的人的起點。

了解 [good-first-issues.github.io](https://good-first-issues.github.io) 的人越多越好。 您可以透過多種方式幫助我們成長：例如，您可以為「棒極了」列表做出貢獻，撰寫有關我們的博客，接觸 Twitter 和 YouTube 上的博主、技術影響力、開發人員和開源人士。 試著在影片或推文中提及 [good-first-issues.github.io](https://good-first-issues.github.io)！

## 建議和願望

如果您有疑問或建議（或發現錯誤），您可以隨時寫信給 [issues](https://github.com/good-first-issues/good-first-issues.github.io/issues)。

＃＃ 執照

這是根據 [MIT 許可證](https://github.com/good-first-issues/good-first-issues.github.io/blob/main/LICENSE) 授權的開源軟體。