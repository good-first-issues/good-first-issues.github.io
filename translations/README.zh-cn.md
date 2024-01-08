![好的第一期](https://github.com/Krishna01work/good-first-issues.github.io/blob/f5ac4b7f8543913637057e166638f1735512434c/assets/github/social-preview.png)

# 好的第一期

**Good First Issues** 是一项从热门项目中轻松挑选的举措，因此从未为开源做出过贡献的开发人员可以快速入门。

网站：[good-first-issues.github.io](https://good-first-issues.github.io)

该网站主要针对那些想要为开源软件做出贡献但不知道从哪里或如何开始的开发人员。

开源维护者总是希望让更多人参与进来，但新开发人员普遍认为成为贡献者具有挑战性。 我们相信让开发人员解决超级简单的问题可以消除未来贡献的障碍。 这就是“Good First Issues”存在的原因。

## 添加新项目

欢迎您在*Good First Issues*中添加新项目，只需按照以下步骤操作：

- 为了保持 *Good First Issues* 中的项目质量，请确保您的 GitHub 存储库满足以下标准：

     - 它至少有三个问题与“良好的第一期”标签有关。 默认情况下，该标签已存在于所有存储库中。

     - 它包含一个“README.md”，其中包含项目的详细设置说明

     - 积极维护（最后更新不到 1 个月前）

- 在 [repositories.json](https://github.com/gomzyakov/good-first-issue/blob/main/repositories.json) 中添加存储库的路径（格式为“所有者/名称”和字典顺序）。

- 创建一个新的拉取请求。 请在 PR 描述中添加指向存储库问题页面的链接。 合并拉取请求后，更改将在 [good-first-issues.github.io](https://good-first-issues.github.io) 上生效。

＃＃ 它是如何工作的？

- First *Good First Issues* 是一个使用 [PHP](https://www.php.net)` 生成 HTML 文件的静态网站。
- 我们使用 [GitHub REST API](https://docs.github.com/en/rest) 从 [repositories.json](https://github.com/gomzyakov/good-first 中列出的存储库中获取问题 -issue/blob/main/repositories.json）。
- 为了定期循环处理问题（每天两次），我们使用 [GitHub Workflow](https://docs.github.com/en/actions/using-workflows)。

## 帮助我们成长

对于初学者和经验丰富的贡献者来说，浏览开源项目可能会非常困难。 *Good First Issues* 旨在通过提供一个平台来解决这个问题，该平台可以作为那些希望开始使用开源或那些希望进入新项目的人的起点。

了解 [good-first-issues.github.io](https://good-first-issues.github.io) 的人越多越好。 您可以通过多种方式帮助我们成长：例如，您可以为“棒极了”列表做出贡献，撰写有关我们的博客，接触 Twitter 和 YouTube 上的博主、技术影响力、开发人员和开源人士。 尝试在视频或推文中提及 [good-first-issues.github.io](https://good-first-issues.github.io)！

## 建议和愿望

如果您有疑问或建议（或发现错误），您可以随时写信给 [issues](https://github.com/good-first-issues/good-first-issues.github.io/issues)。

＃＃ 执照

这是根据 [MIT 许可证](https://github.com/good-first-issues/good-first-issues.github.io/blob/main/LICENSE) 许可的开源软件。