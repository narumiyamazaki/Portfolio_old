<?php get_header(); ?>
<body>
    <header class="l-header">
        <!--header背景画像-->
        <div class="p-header__backgroundImage">
            <h1 class="p-header__title">
                <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
            </h1>
        </div>
    </header>
    <!--コンテンツ部分の両端の余白-->
    <div class="l-main--margin">
        <!--askneについて-->
        <section class="p-aboutSite__content">
            <div class="p-aboutSite__backgroundImage">
                <h2 class="p-aboutSite__heading">Webサイト制作はaskneにお任せください</h2>  
                <!--LP・・・の部分-->
                <div class="p-aboutSite__wrapper--top">
                    <div class="p-aboutSite__text--top">
                        <p>LP（ランディングページ）・プロモーションサイト<br>WordPress（オリジナルテーマ・既存データカスタマイズ）<br>他にもお客様の課題に合った形式のWebサイトを提案させていただきます。</p><br>
                        <p>askneの由来はask（尋ねる・頼む）+ne（ね）。<br>悩んでいることを何でも相談してねという意味を込めました。</p>
                    </div>
                    <img class="p-aboutSite__image--top" src="<?php echo get_template_directory_uri(); ?>/image/abousite_top_img.jpg" alt="相談している製作者とお客様">
                </div>
                <!--思い描いているゴール・・・の部分-->
                <div class="p-aboutSite__wrapper--middle">
                    <img class="p-aboutSite__image--middle" src="<?php echo get_template_directory_uri(); ?>/image/aboutsite_middle.jpg" alt="目標に対するゴール">
                    <div class="p-aboutSite__box__blank"></div>
                    <div class="p-aboutSite__text--middle">
                        <p>思い描いているゴールがあると思います。<br>その形ははっきりしないかもしれません。<br></p><br>
                        <p>はっきりしていなくても大丈夫です。<br>なんでも相談してください。<br>相談していく中で考え方が整理出来ていきます。</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-service__wrapper">
            <h2 class="p-service__heading">制作特徴</h2>
            <div class="p-service__backgroundImage">
                <!--文字部分とイラスト部分-->
                <div class="p-service__container">
                    <!--文字を出すときにアニメーションにする？-->
                    <ul class="p-service__text">
                        <li>HTMLタグの正確な仕様でSEO対策</li>
                        <li>レスポンシブ対応（スマートフォン向けのコーディング）可能！</li>
                        <li>動きのあるWebサイト制作も承ります！</li>
                        <li>Githubを使用したバージョン管理の実施！</li>
                        <li>アニメーションを使って動きのあるサイト制作も！</li>
                        <li>FLOCSSに準じたCSS設計でメンテナンス性の高いコーディング！</li>
                    </ul>
                    <div class="p-aboutSite__box__blank"></div>
                    <img class="p-service__image" src="<?php echo get_template_directory_uri(); ?>/image/Service.jpg" alt="説明する女性">
                </div>
                <!--グリッドで実装-->
                <div class="p-service__skillImage__container">
                    <div class="p-service__skillBox--HTML">
                        <p class="p-service__skillText">HMTL5</p>
                        <img class="p-service__skillImage--HTML" src="<?php echo get_template_directory_uri(); ?>/image/HTML5.png" alt="HTMLのアイコン">
                    </div>
                    <div class="p-service__skillBox--CSS3">
                        <div class="p-service__skillText__container">
                            <p class="p-service__skillText">CSS3</p>
                        </div>
                        <img class="p-service__skillImage--CSS3" src="<?php echo get_template_directory_uri(); ?>/image/CSS3.png" alt="CSSのアイコン">
                    </div>
                    <div class="p-service__skillBox--SCSS">
                        <div class="p-service__skillText__container">
                            <p class="p-service__skillText">SCSS</p>
                        </div>
                        <img class="p-service__skillImage--SCSS" src="<?php echo get_template_directory_uri(); ?>/image/SCSS.png" alt="SCSSのアイコン">
                    </div>
                    <div class="p-service__skillBox--FLOCSS">
                        <div class="p-service__skillText__container">
                            <p class="p-service__skillText">FLOCSS</p>
                        </div>
                        <img class="p-service__skillImage--FLOCSS" src="<?php echo get_template_directory_uri(); ?>/image/FLOCSS.png" alt="FLOCSSのアイコン">
                    </div>
                    <div class="p-service__skillBox--jQuery">
                        <p class="p-service__skillText">jQuery</p>
                        <img class="p-service__skillImage--jQuery" src="<?php echo get_template_directory_uri(); ?>/image/jQuery.png" alt="jQueryのアイコン">
                    </div>
                    <div class="p-service__skillBox--Responsive">
                        <p class="p-service__skillText">Responsive</p>
                        <img class="p-service__skillImage--Responsive" src="<?php echo get_template_directory_uri(); ?>/image/Responsive.png" alt="スマートフォン・タブレット・PCのアイコン">
                    </div>
                    <div class="p-service__skillBox--WordPress">
                        <p class="p-service__skillText">WordPress</p>
                        <img class="p-service__skillImage--WordPress" src="<?php echo get_template_directory_uri(); ?>/image/WordPress.png" alt="WordPressのアイコン">
                    </div>
                    <div class="p-service__skillBox--GitHub">
                        <p class="p-service__skillText">GitHub</p>
                        <img class="p-service__skillImage--GitHub" src="<?php echo get_template_directory_uri(); ?>/image/GitHub-Mark-120px-plus.png" alt="GitHubのアイコン">
                    </div>
                <!--グリッド部分終了-->
                </div>
            </div>
        </section>
        <!--制作実績-->
        <section class="p-work">
            <h2 class="p-work__heading">制作実績</h2>
            <div class="p-work__container">
                <!--ハンバーガーサイト-->
                <div class="p-work__box--hamburger">
                    <a class="p-work--link" href="http://raisetech-hamburger.com/"><img class="p-work--image" src="<?php echo get_template_directory_uri(); ?>/image/hambureger-site.jpg" alt="ハンバーガーサイトのスクリーンショット"></a>
                    <p class="p-work--introduction">ハンバーガーサイト（デモサイト）</p>
                </div>
                <div class="p-work--box--portfolio">
                    <a class="p-work--link" href="http://askneportfolio.com/"><img class="p-work--image" src="<?php echo get_template_directory_uri(); ?>/image/hambureger-site.jpg" alt="当サイトのスクリーンショット"></a>
                    <p class="p-work--introduction">当サイト</p>
                </div>
                <div class="p-work__backgroundImage"></div>
            </div>
        </section>
        <!--about me部分-->
        <section class="p-profile">
            <h2 class="p-profile__heading">About&nbsp;me</h2>
            <div class="p-profile__backgroundImage">
                <div class="p-profile__container">
                    <p class="p-profile__info">制作者：narumi<br><br>2020年10月よりWeb制作の学習を開始<br>お客様の問題解決が目的であり、Webサイト制作は<br>その手段の1つでしかないという考えから<br>お客様へのヒアリングを特に大事にしている</p>
                    <div class="p-aboutSite__box__blank"></div>
                    <img class="p-profile__image" src="<?php echo get_template_directory_uri(); ?>/image/about_me_img.jpg" alt="製作者のイメージ画像">
                </div>
                <!--sns・GitHubへのリンク-->
                <div class="profile__icon--wrapper">
                    <a href="https://twitter.com/narumi13329161"><img class="p-profile__icon" src="<?php echo get_template_directory_uri(); ?>/image/Twitter-logo-blue.png" alt="Twitterアイコン"></a>
                    <a href="https://github.com/"><img class="profile__icon" src="<?php echo get_template_directory_uri(); ?>/image/GitHub-Mark-32px.png" alt="GitHubアイコン"></a>
                </div>
            </div>
        </section>
        <!--料金表-->
        <section class="p-price">
            <h2 class="p-price__heading">料金表</h2>
            <div class="p-price__backgroundImage">
            <table>
                <thead class="p-price__table__header--coding">
                    <tr>
                        <th colspan="2">マークアップ&amp;コーディング</th>
                    </tr>
                </thead>
                <tbody class="p-price__table--body">
                    <tr>
                        <td class="p-price__table__category--topPage">トップページ</td>
                        <td class="p-price__table__price--topPage">30,000円～</td>
                    </tr>
                    <tr>
                        <!--下層ページやランディングページのスタイルはエクステンドを使用-->
                        <td class="p-price__table__category--subPage">下層ページ(1p)</td>
                        <td class="p-price__table__price--subPage">30,000円～</td>
                    </tr>
                    <tr>
                        <td class="p-price__table__category--landingPage"> ランディングページ</td>
                        <td class="p-price__table__price--landingPage">50,000円～</td>
                    </tr>
                </tbody>
                <tfoot class="p-price__table--footer">
                    <tr>
                        <td class="p-price__table__category--WordPress">WordPress実装(コーディング別)</td>
                        <td class="p-price__table__price--WordPress">100,000円～</td>
                    </tr>
                </tfoot>
            </table>
            <table class="p-price__table--design">
                <thead class="p-price__table__header--design">
                    <tr>
                        <th colspan="2">デザイン</th>
                    </tr>
                </thead>
                <tbody class="p-price__table--body">
                    <tr>
                        <td class="p-price__table__category--design">デザイン料(外部デザイナー様へ委託)</td>
                        <td class="p-price__table__price--design">100,000円～</td>
                    </tr>
                </tbody>
            </table>
            <p class="p-price__info">マークアップ&amp;コーディング・デザイン共に税抜き価格を表示しております。</p>
            </div>
        </section>
        <!--お問い合わせ-->
        <section class="p-contact">
            <h2 class="p-contact__heading">お問い合わせ</h2>
            <div class="p-contact__backgroundImage">
            <!--固定ページのスラッグからURLを取得-->
            <?php
            $page_data = get_page_by_path('contact'); $page = get_post($page_data);
            $content = $page -> post_content;
            //本文を表示（自動整形含む）
            echo apply_filters('the_content', $content); 
            ?>
            </div>
        </section>
    </div>
    <footer class="p-footer">
        <p class="p-footer__copyright">copyright&nbsp;&#169;narumi&nbsp;2021</p>
    </footer>
    <script>
        $(function (){
          objectFitImages()
        });
      </script>
    <script src="js/ofi.min.js"></script>     
</body>
</html>