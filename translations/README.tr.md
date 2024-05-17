>**NOTE:** _This file has been translated automatically. If you find an error, just make a PR with the edits" to all translation files._
![İlk Sayıların İyisi](../assets/github/social-preview.png)

# İyi İlk Sayılar

**Good First Issues**, açık kaynağa daha önce katkıda bulunmamış geliştiricilerin hızlı bir şekilde başlayabilmesi için popüler projelerden kolayca seçilenleri seçen bir girişimdir.

Web sitesi: [good-first-issues.github.io](https://good-first-issues.github.io)

Bu web sitesi öncelikle açık kaynak yazılıma katkıda bulunmak isteyen ancak nereden ve nasıl başlayacağını bilmeyen geliştiricilere yöneliktir.

Açık kaynak bakımcıları her zaman daha fazla insanı dahil etmenin yollarını arıyor, ancak yeni geliştiriciler genellikle katkıda bulunmanın zor olduğunu düşünüyor. Geliştiricilerin son derece kolay sorunları düzeltmesini sağlamanın gelecekteki katkıların önündeki engelleri kaldıracağına inanıyoruz. *İyi İlk Sayılar*'ın var olmasının nedeni budur.

## Yeni bir proje ekleme

*İyi İlk Sayılar*'a yeni bir proje ekleyebilirsiniz; aşağıdaki adımları uygulamanız yeterlidir:

- *İyi İlk Sayılar*'daki projelerin kalitesini korumak için lütfen GitHub deponuzun aşağıdaki kriterleri karşıladığından emin olun:

     - 'İlk sayı iyi' etiketini taşıyan en az üç sayısı var. Bu etiket varsayılan olarak tüm depolarda zaten mevcuttur.

     - Proje için ayrıntılı kurulum talimatlarını içeren bir 'README.md' içerir

     - Aktif olarak bakımı yapılmaktadır (son güncelleme 1 aydan kısa süre önce yapılmıştır)

- Deponuzun yolunu ("sahip/ad" biçiminde ve sözlüksel sırayla) [repositories.json](https://github.com/gomzyakov/good-first-issue/blob/main/repositories.json) dosyasına ekleyin.

- Yeni bir çekme isteği oluşturun. Lütfen PR açıklamasına havuzun sorunlar sayfasının bağlantısını ekleyin. Çekme isteği birleştirildikten sonra değişiklikler [good-first-issues.github.io](https://good-first-issues.github.io) adresinde yayınlanacaktır.

## O nasıl çalışır?

- First *Good First Issues*, HTML dosyaları oluşturmak için [PHP](https://www.php.net)` kullanan statik bir web sitesidir.
- [repositories.json](https://github.com/gomzyakov/good-first) içinde listelenen depolardan sorunları almak için [GitHub REST API](https://docs.github.com/en/rest) kullanıyoruz -issue/blob/main/repositories.json).
- Sorunlar arasında periyodik olarak (günde iki kez) geçiş yapmak için [GitHub İş Akışı](https://docs.github.com/en/actions/using-workflows) kullanıyoruz.

## Büyümemize yardım edin

Açık kaynaklı projelerde gezinmek hem yeni başlayanlar hem de deneyimli katkıda bulunanlar için oldukça zorlayıcı olabilir. *Good First Issues*, açık kaynakla başlamak isteyenler veya yeni bir projeye başlamak isteyenler için başlangıç noktası görevi gören bir platform sağlayarak bu sorunu çözmeye çalışıyor.

[good-first-issues.github.io](https://good-first-issues.github.io) hakkında ne kadar çok kişi bilgi sahibi olursa o kadar iyidir. Büyümemize yardımcı olabileceğiniz çeşitli yollar var: "harika" listelere katkıda bulunabilir, hakkımızda blog yazabilir, blog yazarlarına, teknoloji etkilerine, geliştiricilere ve Twitter ve YouTube'daki açık kaynak kodlarına ulaşabilirsiniz. Bir videoda veya tweet'te [good-first-issues.github.io](https://good-first-issues.github.io)'dan bahsetmeyi deneyin!

## Öneri ve dilekler

Sorularınız veya önerileriniz varsa (veya bir hata bulduysanız) her zaman [sorunlara](https://github.com/good-first-issues/good-first-issues.github.io/issues) yazabilirsiniz.

## Lisans

Bu, [MIT Lisansı](https://github.com/good-first-issues/good-first-issues.github.io/blob/main/LICENSE) kapsamında lisanslanan açık kaynaklı bir yazılımdır.
