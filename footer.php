<footer id="contact" class="l-footer">
            <div class="p-footer__container">
                <!--左側のテキスト-->
                <div class="p-footer__text__wrapper">
                    <h2 class="p-footer__heading2--English">Contact<span class="p-footer__heading2--Japanese">お問い合わせ</span></h2>
                    <p class="p-footer__text">お仕事のご依頼やご相談は<br>こちらのフォームからお願いいたします。</p>
                    <p class="p-footer__text"><span class="c-asterisk">&lowast;</span>のついている枠は回答必須項目です。</p>
                </div>
                <?php
                $page_data = get_page_by_path('contact'); $page = get_post($page_data);
                $content = $page -> post_content;
                // 本文を表示する（自動整形含む）
                echo apply_filters('the_content', $content);
                // 本文を表示する
                //echo $content;
                ?>
            </div>
            <div class="p-footer__copyright">
                <p class="p-footer__copyright__text">copyright&nbsp;&copy;narumi,All&nbsp;rights&nbsp;reserved.</p>
            </div>
        </footer>
        <?php wp_footer(); ?>
        </body>