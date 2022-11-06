<?php
/*
Template Name:profile
*/
?>
<?php get_header(); ?>
        <main class="p-main--lower-page">
            <div class="p-profile__container--lower-page">
                <!--中央部分のwrapper-->
                <article class="p-profile__wrapper--lower-page">
                    <!--テキスト部分のinner-->
                    <div class="p-profile__inner--lower-page">
                        <!--見出しとコメントのwrapper-->
                        <div class="p-profile__heading__wrapper">
                            <h2 class="p-profile__heading2--English">Profile<span class="p-profile__heading2--Japanese">プロフィール</span></h2>
                            <div class="p-profile__heading__comment__wrapper">
                                <p class="p-profile__heading__comment"><span class="p-profile__heading__comment__emphasis">デザイン的視点</span>を持って<br>コーディングしています。</p>
                                <div class="p-profile__heading__comment__shadow"></div>
                            </div>
                        </div>
                        <table class="p-profile__infomation">
                            <tbody class="p-profile__infomation__wrapper">
                                <tr class="p-profile--top">
                                    <th class="p-profile__item__name--lower-page">氏名<span class="p-profile__item--English-translation">name</span></th>
                                    <td class="p-profile__name--lower-page">narumi</td>
                                    <th class="p-profile__item__residence--lower-page">居住地<span class="p-profile__item--English-translation">residence</span></th>
                                    <td class="p-profile__residence--lower-page">福井県福井市</td>
                                </tr>
                                <tr class="p-profile--bottom">
                                    <th class="p-profile__item__year-of-birth--lower-page">生年<span class="p-profile__item--English-translation">year&nbsp;of&nbsp;birth</span></th>
                                    <td class="p-profile__year-of-birth--lower-page">1989年&lpar;平成元年&rpar;</td>
                                    <th class="p-profile__item__occupation--lower-page">職業<span class="p-profile__item--English-translation">occupation</span></th>
                                    <td class="p-profile__occupation--lower-page">会社員</td>
                                </tr>
                            </tbody>    
                        </table>
                        <!--SP用の表-->
                        <table class="p-profile__infomation--sp">
                            <tbody class="p-profile__infomation__wrapper">
                                <tr class="p-profile__table__residence">
                                    <th class="p-profile__item__name--lower-page"><span class="p-profile__item--Japanese">氏名</span><span class="p-profile__item--English-translation">name</span></th>
                                    <td class="p-profile__name--lower-page">narumi</td>
                                </tr>
                                <tr class="p-profile__table--residence">
                                    <th class="p-profile__item__residence--lower-page"><span class="p-profile__item--Japanese">居住地</span><span class="p-profile__item--English-translation">residence</span></th>
                                    <td class="p-profile__residence--lower-page">福井県福井市</td>
                                </tr>
                                <tr class="p-profile__table--year-of-birth">
                                    <th class="p-profile__item__year-of-birth--lower-page"><span class="p-profile__item--Japanese">生年</span><span class="p-profile__item--English-translation">year&nbsp;of&nbsp;birth</span></th>
                                    <td class="p-profile__year-of-birth--lower-page">1989年&lpar;平成元年&rpar;</td>
                                </tr>
                                <tr class="p-profile__table--occupation">
                                    <th class="p-profile__item__occupation--lower-page"><span class="p-profile__item--Japanese">職業</span><span class="p-profile__item--English-translation">occupation</span></th>
                                    <td class="p-profile__occupation--lower-page">会社員</td>
                                </tr>
                            </tbody>    
                        </table>
                        <section class="p-profile__career">
                            <h3 class="p-profile__career__heading3">経歴</h3>
                            <span class="p-profile__item--English-translation">Career</span>
                            <p class="p-profile__career__text"><span class="u-margin-16px"></span>私は一般企業で働いておりますが、Web関係とはあまり関係のない仕事をしています。コーディングについてなんとなく興味はあったものの、趣味で簡単なコードを書くのみで満足し、仕事として携わっていきたいという気持ちはありませんでした。</p>
                            <p class="p-profile__career__text"><span class="u-margin-16px"></span>そんな折にスクール&lpar;RaiseTech&rpar;のバナーをみつけ、まずは兼業としてコーディング、WordPress対応等をしていきたいと考えるようになりました。</p>
                            <p class="p-profile__career__text"><span class="u-margin-16px"></span>2020年9年 コーディング学習を開始<br><span class="u-margin-16px"></span>スクールにてマークアップ、CSS、WordPress対応、Javascript(jQuery)等について学び、デザインカンプからWordPressオリジナルテーマ開発を行いました。また、クラウドソーシングサービスを通じて実案件をこなすうちに、デザインの知識があったほうが、デザインカンプを正確に読み取れたり、デザイナーの方とのコミュニケーションがうまく取れると感じるようになりました。</p>
                            <p class="p-profile__career__text"><span class="u-margin-16px"></span>2022年04月 デザイン学習を開始<br><span class="u-margin-16px"></span>スクールにてデザインの基本的な考え方やillustrator・Photoshop・Figmaの基本的な使い方、Webバナー、Webサイト制作について学習を行いました。
                        </section>
                    </div>
                    <!--写真・外部リンク-->
                    <div class="p-profile__image__wrapper--lower-page">
                        <img class="p-profile__image--lower-page" src="<?php echo esc_url(get_theme_file_uri('/img/profile__image.png"'))?>" alt="サイト製作者30代男性笑顔の写真">
                        <div class="p-profile__external-link__wrapper">
                            <span class="u-visually-hidden">ツイッター</span>
                            <a class="c-profile__external-link--twitter" href="https://twitter.com/narumi13329161"></a>
                            <span class="u-visually-hidden">ブログ</span>
                            <a class="c-profile__external-link--blog" href="https://askne.blog/"></a>
                            <span class="u-visually-hidden">ギットハブ</span>
                            <a class="c-profile__external-link--GitHub" href="https://github.com/narumiyamazaki"></a>
                        </div>
                        <p class="p-profile__external-link__text">SNS・BLOG・GitHubへのリンクはこちら</p>
                    </div>
                </article>
                <!--両サイドの装飾-->
                <div class="p-lower-page__side--left"></div>
                <div class="p-lower-page__side--right"></div>
            </div>
            <!--私について部分-->
            <div class="p-profile__about-me">
                <!--中央と左右の装飾のwrapper-->
                <article class="p-profile__about-me__wrapper">
                    <!--見出しと内容ののwrapper-->
                    <div class="p-profile__about-me__content__container">
                        <h2 class="p-profile__about-me__heading2--English">About&nbsp;me<span class="p-profile__about-me__heading2--Japanese">私についてもう少しお話しします</span></h2>
                        <!--テキスト部分-->
                        <section class="p-profile__about-me__content__wrapper">
                            <section class="p-profile__about-me__content__inner">
                                <h3 class="p-profile__about-me__heading3"><span class="u-highlighter--about-me">1&#46;あなたの性格を教えてください</span></h3>
                                <div class="p-profile__about-me__text__wrapper">
                                    <p class="p-profile__about-me__text"><span class="u-margin-16px"></span><span class="u-text__emphasis--about-me">過度な自己主張をせず、人のアドバイスに耳を傾ける傾向にあります。</span>その反面自らがリーダーシップを取り皆を引っ張っていく場面はあまり得意ではありません。どちらかといえば間に入って調整するような役割が得意です。</p>
                                    <p class="p-profile__about-me__text"><span class="u-margin-16px"></span><span class="u-text__emphasis--about-me">現実的な考え方を好み、1つの目標に対して着実に進んでいけるような考え方や働き方を希望する傾向にあります。</span>大きな野心を持ったり、成功を求める傾向にはなく、<span class="u-text__emphasis--about-me"></span> 身近な目標に対して誠実に努力し続けるタイプです。</p>
                                    <p class="p-profile__about-me__text"><span class="u-margin-16px"></span><span class="u-text__emphasis--about-me">人付き合いは広く求めるタイプではなく、自分と合った人と長く付き合っていくタイプです。ご縁があれば一緒にお仕事できれば幸いです。</span></p>
                                </div>
                            </section>
                            <section class="p-profile__about-me__content__inner">
                                <h3 class="p-profile__about-me__heading3"><span class="u-highlighter--about-me">2&#46;会社員との兼業だと時間が取れないのでは&#63;</span></h3>
                                <div class="p-profile__about-me__text__wrapper">
                                    <p class="p-profile__about-me__text"><span class="u-margin-16px"></span>現在はフルタイムで働いています。コーダーとしての週の稼働時間としては、<span class="u-text__emphasis--about-me">週15～20時間程度、1カ月ああたり60～80時間確保することが可能です。</span></p>
                                    <p class="p-profile__about-me__text"><span class="u-margin-16px"></span>また、<span class="u-text__emphasis--about-me">限られた時間の中で成果を出すために効率よく作業を進めていく努力をしています。</span>例えば1度調べたことについては、何度も調べ直すことがないように自分用にメモしたり、ブログに記事を残すようにして見返せるようにしています。</p>
                                    <p class="p-profile__about-me__text"><span class="u-margin-16px"></span>コーダーのお仕事は私にとって副業ではなく、兼業と考えております。稼働時間の差こそあれども、<span class="u-text__emphasis--about-me">主副の考えではなく、どちらも同じ責任、誠意で仕事に取り組みます。</span></p>
                                </div>
                            </section>
                            <section class="p-profile__about-me__content__inner">
                                <h3 class="p-profile__about-me__heading3"><span class="u-highlighter--about-me">3&#46;デザイン的視点を持つとはどういうこと&#63;</span></h3>
                                <div class="p-profile__about-me__text__wrapper">
                                    <p class="p-profile__about-me__text"><span class="u-margin-16px"></span><span class="u-text__emphasis--about-me">端的に言えばお客様の課題や目的が何かを意識することです。</span></p>
                                    <p class="p-profile__about-me__text"><span class="u-margin-16px"></span><span class="u-margin-16px">デザインには目的や、解決したい課題など、必ずゴールがあり、どのようにゴールを達成するか考えることがデザインをするという事だと考えます。</span></p>
                                    <p class="p-profile__about-me__text"><span class="u-margin-16px"></span><span class="u-text__emphasis--about-me">デザインカンプにおいてもデザイナーの意図を推測し、分からない部分についてはそのままにせずコミュニケーションをとりながら解決を図ることが出来ます。</span></p>
                                    <p class="p-profile__about-me__text"><span class="u-margin-16px"></span>お客様もWebサイトによってゴールを達成することを求めています。<span class="u-text__emphasis--about-me">そのためコーディングの仕事もサイトを作ることがではなく、お客様のゴールを達成する事が仕事だと考えます。</span></p>
                                </div>
                            </section>
                            <section class="p-profile__about-me__content__inner">
                                <h3 class="p-profile__about-me__heading3"><span class="u-highlighter--about-me">4&#46;コーディングのどんなところに魅力を感じる&#63;</span></h3>
                                <div class="p-profile__about-me__text__wrapper">
                                    <p class="p-profile__about-me__text"><span class="u-margin-16px"></span><span class="u-text__emphasis--about-me">コーディングを始めたころは、単純に自分のコードがブラウザに反映されることが面白く感じており、今でもその気持ちは変わっていません。</span></p>
                                    <p class="p-profile__about-me__text"><span class="u-margin-16px"></span>自分の意図しない挙動になってしまったときにはMDNやHTML・CSSについて解説している記事を読むことでコードを修正し、意図した挙動になった時の達成感も大きな喜びになっています。</p>
                                    <p class="p-profile__about-me__text"><span class="u-margin-16px"></span><span class="u-text__emphasis--about-me">また、環境の変化やツールのアップデートによって様々な知識を吸収し続けられる環境にあることも自分には合っていると感じます</span></p>
                                    <p class="p-profile__about-me__text"><span class="u-margin-16px"></span>身近な目標に対して地道に努力する私の性格的に、そういった目標が定期的に与えられる環境が合っているのだと思います。</p>
                                </div>
                            </section>
                            <section class="p-profile__about-me__content__inner">
                                <h3 class="p-profile__about-me__heading3"><span class="u-highlighter--about-me">5&#46;学習に使っているスクールはどんなところ&#63;</span></h3>
                                <div class="p-profile__about-me__text__wrapper">
                                    <p class="p-profile__about-me__text"><span class="u-margin-16px"></span>RaiseTechを利用し、WordPress副業コース及びデザインコースを受講しました。現役のエンジニア、デザイナーが講師をしています。</p>
                                    <p class="p-profile__about-me__text"><span class="u-margin-16px"></span>Slackを使ったコミュニティもあり、そこではほかの受講生や現役のエンジニア、デザイナーとコミュニケーションを取ることもできます。<span class="u-text__emphasis--about-me">講義が終了した後もSlackは利用できるため技術的なことを質問したり、新しいツールやサービスについて情報共有が行われます。</span></p>
                                    <p class="p-profile__about-me__text"><span class="u-margin-16px"></span>スクールでは自走力をつけることを重視しています。現場に行ったら自分の力で課題を解決する必要があるためです。<span class="u-text__emphasis--about-me">自走力は自分一人で考えるということではありません。自分で調べたり、他人に質問しながら課題を解決していく力です。スクールで得た一番の力は自走力です。</span></p>
                                </div>
                            </section>
                            <section class="p-profile__about-me__content__inner">
                                <h3 class="p-profile__about-me__heading3"><span class="u-highlighter--about-me">6&#46;もう少しあなた自身について教えてください</span></h3>
                                <div class="p-profile__about-me__text__wrapper">
                                    <p class="p-profile__about-me__text"><span class="u-margin-16px"></span>動物が好きで、ハムスター、インコ、トイプードルを飼っていたことがあります。動物園や水族館なども好きです。</p>
                                    <p class="p-profile__about-me__text"><span class="u-margin-16px"></span>学生時代は部活で軟式テニスやバドミントンをしていました。最近では運動不足や腰痛防止のために定期的にジムに通っています。</p>
                                    <p class="p-profile__about-me__text"><span class="u-margin-16px"></span>現職は障害福祉サービスの職員であり、現職を続けている理由は<span class="u-text__emphasis--about-me">ソーシャルセクターとして社会の問題や課題について何か役に立ちたい気持ちがあるためです。実体験として障害福祉サービス系で働く方々はWeb関係や、デザインについての知識がある方は少ない印象にあるため、どちらにも携わることで解決していける課題もあると信じ、どちらの業務も真摯に取り組んでいきたいです。</span></p>
                                </div>
                            </section>
                        </section>
                    </div>
                </article>
                <div class="p-lower-page__side--left"></div>
                <div class="p-lower-page__side--right"></div>
            </div>
        </main>
        <?php get_footer('lower-page'); ?>
</html>