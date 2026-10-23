# 应用卡片展示图

`../img/apps/` 中每个产品卡片对应一张 4:3 SVG 展示图。新应用加入 `src/data/products.json` 时，请同时提供清晰的展示图，并为图片填写有意义的替代文本。

## 图片与产品依据

| 文件 | 产品 | 核对来源与展示内容 |
| --- | --- | --- |
| `markdown-long-weibo.svg` | Markdown2长微博 | [在线应用](https://rainssong.github.io/markdown2long-weibo/)；依据应用说明表现 Markdown 编辑、所见所得预览、主题切换和长图导出。 |
| `cyber-roast.svg` | 赛博留几手 | [Wordware 应用页](https://app.wordware.ai/explore/apps/c4d50019-7f66-4a71-810f-e12e1b57033e)；页面当前限流，图片只依据项目卡片标题和简介表现照片上传及 AI 吐槽概念。 |
| `image-split-merge.svg` | 图片裁剪合并 | [在线应用](https://rainssong.github.io/ImageSplitAndMerge/)；依据页面功能表现多图裁切、调整、拼接方向与导出。 |
| `gitbook2epub.svg` | GitBook2Epub | [GitHub 项目说明](https://github.com/rainssong/gitbook2epub)；依据项目文档表现解析 `SUMMARY.md`、保留章节目录并生成 EPUB。 |
| `getsrt.svg` | SRT字幕工具 | [GetSrt 首页](https://srt.rainssong.com/)；依据首页流程表现上传音视频、生成带时间码的 SRT 并下载。 |

## 维护说明

这些 SVG 是按已核对的产品功能绘制的界面示意图，包含示例内容，不是实时网页截图。产品界面或功能调整后，请复核上表来源并更新对应图片。保持画布比例为 4:3，可直接适配首页卡片。

## 2026-10-24 更新

上述五个产品现改用 *-capture.svg：真实内置浏览器截图与统一标题构图。旧概念图保留作为历史素材。调研、截图边界和更新方法见 doc/design/2026-10-24-app-covers.md。

## 最终展示图

经用户反馈，最终卡片使用 *-artwork.jpg：基于调研功能重新设计的产品插画，由内置 image_gen 生成。*-capture.svg 仅保留为历史稿。提示词和原图说明见 doc/design/app-artwork-prompts.md。
