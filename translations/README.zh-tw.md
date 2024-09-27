>**NOTE:** _本檔案由GPT自動翻譯，由 [@octopus058](https://github.com/Octopus058/) 初步校正_
![](../assets/github/social-preview.png)

# 簡介

**Good First Issues**幫助您對開源事業做出第一次貢獻。 從未瞭解過開源的開發人員可以從此快速開始。

網站：[good-first-issues.github.io](https://good-first-issues.github.io)

該網站主要針對那些想要為開源軟件做出貢獻但不知道從哪裡或如何開始的開發人員。

開源維護者總是希望讓更多人參與開源事業，但新的開發人員普遍認為這是一件很有挑戰性的事。 我們相信讓開發人員從解决簡單的問題開始可以逐漸消除未來的障礙。 這就是_Good First Issues_存在的原因。

## 添加新項目

歡迎在*Good First Issues*中新增項目，只需按照以下步驟操作：

- 為了保持 *Good First Issues* 中的項目質量，請確保您的GitHub倉庫滿足以下標準：

     - 至少有三個問題與 *Good First Issues* 標籤有關。 默認情况下，該標籤已存在於所有倉庫中

     - 包含一個README，其中包含項目的詳細說明

     - 積極維護（最後更新時間短於1個月）

- 在[repositories.json](https://github.com/gomzyakov/good-first-issue/blob/main/repositories.json) 中新增倉庫的路徑（格式為「擁有者/名稱」和字典順序）。

- 建立一個新的拉取請求。 請在 PR 描述中新增指向儲存庫問題頁面的連結。 合併拉取請求後，更改將在 [good-first-issues.github.io](https://good-first-issues.github.io) 上生效。

## 工作原理

- First *Good First Issues* 是一個使用 [PHP](https://www.php.net)` 產生 HTML 檔案的靜態網站。
- 我們使用[GitHub REST API](https://docs.github.com/en/rest) 從[repositories.json](https://github.com/gomzyakov/good-first) 中列出的倉庫中取得問題-issue/blob/main/repositories.json）。
- 為了定期處理問題（每天兩次），我們使用 [GitHub Workflow](https://docs.github.com/en/actions/using-workflows)。

## 幫助我們

對於大部分初學者來說，瀏覽開源項目有時是很困難的。*Good First Issues* 旨在通過提供一個平臺來解决這個問題，這個平臺可以作為那些希望加入開源事業或進入新項目的人的起點。

知道 [good-first-issues.github.io](https://good-first-issues.github.io) 的人越多越好。 您可以透過多種方式幫助我們成長：例如，您可以為`awesome`列表做出貢獻，撰寫有關我們的博客，接觸Bilibili和其他平臺上的博主、開發人員和開源人士，嘗試在視頻或部落格中提及 [good-first-issues.github.io](https://good-first-issues.github.io)！

## 建議和願望

如果您有疑問或建議（或發現錯誤），您可以隨時提交 [issues](https://github.com/good-first-issues/good-first-issues.github.io/issues)。

## 許可

遵守 [MIT ](https://github.com/good-first-issues/good-first-issues.github.io/blob/main/LICENSE) 開源許可。
