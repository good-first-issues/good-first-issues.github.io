![Magandang Unang Isyu](https://github.com/Krishna01work/good-first-issues.github.io/blob/f5ac4b7f8543913637057e166638f1735512434c/assets/github/social-preview.png)

# Magandang Unang Isyu

Ang **Magandang Unang Isyu** ay isang inisyatiba upang i-curate ang mga madaling pagpili mula sa mga sikat na proyekto, kaya ang mga developer na hindi kailanman nag-ambag sa open-source ay maaaring makapagsimula nang mabilis.

Website: [good-first-issues.github.io](https://good-first-issues.github.io)

Ang website na ito ay pangunahing naka-target sa mga developer na gustong mag-ambag sa open source software ngunit hindi alam kung saan o paano magsisimula.

Ang mga open-source maintainer ay palaging naghahanap upang makakuha ng higit pang mga tao na kasangkot, ngunit ang mga bagong developer ay karaniwang iniisip na mahirap maging isang kontribyutor. Naniniwala kami na ang pagkuha sa mga developer na ayusin ang napakadaling isyu ay nag-aalis ng hadlang para sa mga kontribusyon sa hinaharap. Ito ang dahilan kung bakit umiiral ang *Good First Issues*.

## Pagdaragdag ng bagong proyekto

Maaari kang magdagdag ng bagong proyekto sa *Magandang Unang Isyu*, sundin lang ang mga hakbang na ito:

- Upang mapanatili ang kalidad ng mga proyekto sa *Magandang Unang Isyu*, pakitiyak na ang iyong GitHub repository ay nakakatugon sa mga sumusunod na pamantayan:

     - Mayroon itong hindi bababa sa tatlong isyu sa label na `magandang unang isyu`. Ang label na ito ay naroroon na sa lahat ng mga repository bilang default.

     - Naglalaman ito ng `README.md` na may mga detalyadong tagubilin sa pag-setup para sa proyekto

     - Ito ay aktibong pinananatili (huling pag-update wala pang 1 buwan ang nakalipas)

- Idagdag ang path ng iyong repository (sa format na `may-ari/pangalan` at pagkakasunud-sunod ng lexicographic) sa [repositories.json](https://github.com/gomzyakov/good-first-issue/blob/main/repositories.json).

- Gumawa ng bagong pull-request. Pakidagdag ang link sa page ng mga isyu ng repository sa paglalarawan ng PR. Kapag na-merge na ang pull request, magiging live ang mga pagbabago sa [good-first-issues.github.io](https://good-first-issues.github.io).

## Paano ito gumagana?

- Ang Unang *Good First Issues* ay isang static na website na gumagamit ng [PHP](https://www.php.net)` upang bumuo ng mga HTML file.
- Gumagamit kami ng [GitHub REST API](https://docs.github.com/en/rest) para kumuha ng mga isyu mula sa mga repository na nakalista sa [repositories.json](https://github.com/gomzyakov/good-first -issue/blob/main/repositories.json).
- Upang pana-panahong umikot sa mga isyu (dalawang beses sa isang araw), ginagamit namin ang [GitHub Workflow](https://docs.github.com/en/actions/using-workflows).

## Tulungan kaming lumago

Ang pag-navigate sa mga open-source na proyekto ay maaaring maging napakalaki para sa mga nagsisimula at may karanasang mga kontribyutor. Ang *Magandang Unang Isyu* ay naghahanap upang malutas ang problemang ito sa pamamagitan ng pagbibigay ng isang platform na nagsisilbing panimulang punto para sa mga naghahanap upang magsimula sa open-source o sa mga naghahanap upang makakuha ng isang bagong proyekto.

Kung mas maraming tao ang nakakaalam tungkol sa [good-first-issues.github.io](https://good-first-issues.github.io), mas mabuti. Mayroong iba't ibang paraan na matutulungan mo kaming lumago: maaari kang mag-ambag sa mga listahan ng 'kahanga-hanga', mag-blog tungkol sa amin, makipag-ugnayan sa mga blogger, mga impluwensya sa teknolohiya, developer at open-source sa Twitter at YouTube, halimbawa. Subukan at makakuha ng [good-first-issues.github.io](https://good-first-issues.github.io) na binanggit sa isang video o tweet!

## Mga mungkahi at kagustuhan

Kung mayroon kang mga tanong o mungkahi (o nakakita ng bug), maaari kang sumulat anumang oras sa [isyu](https://github.com/good-first-issues/good-first-issues.github.io/issues).

## Lisensya

Ito ay open-sourced software na lisensyado sa ilalim ng [MIT License](https://github.com/good-first-issues/good-first-issues.github.io/blob/main/LICENSE).