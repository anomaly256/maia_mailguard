<?php
    /*
     * $Id$
     *
     * MAIA MAILGUARD LICENSE v.1.0
     *
     * Copyright 2004 by Robert LeBlanc <rjl@renaissoft.com>
     *                   Motoharu Kubo  <mkubo@3ware.co.jp>
     *                   Oyaji          <oyaji@mail.aconus.com>
     * All rights reserved.
     *
     * Fri Jul 22 2016 YAMAMOTO Takashi <yamachan@piwikjapan.org>
     * - Checked for version 1.0.4
     *
     * PREAMBLE
     *
     * This License is designed for users of Maia Mailguard
     * ("the Software") who wish to support the Maia Mailguard project by
     * leaving "Maia Mailguard" branding information in the HTML output
     * of the pages generated by the Software, and providing links back
     * to the Maia Mailguard home page.  Users who wish to remove this
     * branding information should contact the copyright owner to obtain
     * a Rebranding License.
     *
     * DEFINITION OF TERMS
     *
     * The "Software" refers to Maia Mailguard, including all of the
     * associated PHP, Perl, and SQL scripts, documentation files, graphic
     * icons and logo images.
     *
     * GRANT OF LICENSE
     *
     * Redistribution and use in source and binary forms, with or without
     * modification, are permitted provided that the following conditions
     * are met:
     *
     * 1. Redistributions of source code must retain the above copyright
     *    notice, this list of conditions and the following disclaimer.
     *
     * 2. Redistributions in binary form must reproduce the above copyright
     *    notice, this list of conditions and the following disclaimer in the
     *    documentation and/or other materials provided with the distribution.
     *
     * 3. The end-user documentation included with the redistribution, if
     *    any, must include the following acknowledgment:
     *
     *    "This product includes software developed by Robert LeBlanc
     *    <rjl@renaissoft.com>."
     *
     *    Alternately, this acknowledgment may appear in the software itself,
     *    if and wherever such third-party acknowledgments normally appear.
     *
     * 4. At least one of the following branding conventions must be used:
     *
     *    a. The Maia Mailguard logo appears in the page-top banner of
     *       all HTML output pages in an unmodified form, and links
     *       directly to the Maia Mailguard home page; or
     *
     *    b. The "Powered by Maia Mailguard" graphic appears in the HTML
     *       output of all gateway pages that lead to this software,
     *       linking directly to the Maia Mailguard home page; or
     *
     *    c. A separate Rebranding License is obtained from the copyright
     *       owner, exempting the Licensee from 4(a) and 4(b), subject to
     *       the additional conditions laid out in that license document.
     *
     * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDER AND CONTRIBUTORS
     * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
     * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
     * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
     * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
     * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
     * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS
     * OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
     * ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR
     * TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE
     * USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
     *
     */

    // Page subtitle
    $lang['banner_subtitle'] =  "管理者のためのヘルプ";

    // Table header
    $lang['header_help_menu'] =  "ヘルプ";

    // Users
    $lang['adminhelp_find_users'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"検索パターンにマッチするユーザを検索して一覧表示します。" .
"文字'*'は0文字以上の任意の文字にマッチするワイルドカードです。" .
"たとえば\"ja*n\"は\"jan\"、\"jason\"などにマッチします。" .
"ただし大文字と小文字は区別されます。" .
"このため、\"jan\"は\"Jan\"にはマッチしません。" .
"ドメイン管理者の場合は、管理できるドメインのメールアドレスを持つユーザのみを検索できます。";

    $lang['adminhelp_add_email_address'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"メールアドレスをデータベースに登録します。" .
"メールアドレスは誰かのユーザに属していなければならないため、メールアドレスを登録すると、ユーザも同時に登録されます。" .
"登録されるユーザ名はメールアドレスから決められます。" .
"POP3またはIMAP認証を使っている場合、メールサーバのドメイン名に合致するよう、指定したメールアドレスが書き換えられることがあります。" .
"この書き換えは自動的に行われるので、通常使用するメールアドレスを指定するだけでかまいません。";

    $lang['adminhelp_link_email_address'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"登録してあるメールアドレスとユーザを\"リンク\"させます。" .
"すべてのメールアドレスはユーザに属する必要があるため、リンクを作ると以前のユーザとの関係は破棄されます。" .
"以前のユーザに対応づけられたメールアドレスがなくなったら、そのユーザは削除されます。" .
"指定したメールアドレスは新しく指定したユーザに移行します。" .
"そのメールアドレスに関する統計値、隔離メール、正規メール、ホワイトリスト、ブラックリストは" .
"すべて新しいユーザのそれらに追加されます。";

    $lang['adminhelp_delete_email_address'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"メールアドレスを削除します。" .
"ただし、この方法でユーザのプライマリアドレスを削除することはできません。" .
"プライマリアドレスを削除するには、まず他のどれかのアドレスをプライマリアドレスに指定し、" .
"その後削除してください。" .
"これは、ユーザの唯一のアドレスを間違って削除してしまわないための安全弁です。" .
"ユーザ自体を削除したい場合は、次項の<b>%s</b>を使ってください。";

    $lang['adminhelp_delete_user'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"ユーザのアカウント情報すべてを削除します。" .
"削除されるのは、統計値、ホワイトリスト、ブラックリスト、隔離エリアならびに正規メール保存エリアに保存されたメールです。" .
"また、これらの削除に伴って、メールアドレスも削除されます。" .
"「<b>%s</b>」が有効になっていると、新しいアドレス宛のメールが届くたびに新しいユーザが登録されます。" .
"この設定の場合、ユーザを削除しても、また対応するアドレス宛のメールが届くと同じユーザが再登録されます。";

    $lang['adminhelp_impersonate'] =
"<b>ユーザ一覧表</b>&nbsp;&nbsp;&nbsp;" .
"ユーザの検索条件を指定して[ユーザ検索]をクリックすると、検索結果が表示されます。" .
"表の左上の「<b>%s</b>」は見つかったユーザ数です。" .
"一覧表のユーザ名をクリックすると、そのアカウントに「なりすます」ことができます。" .
"つまり、そのユーザでログインしたのと同様の操作が可能になり、" .
"ユーザサポートに役立ちます。" .
"「なりすまし」状態を終了するには、画面上部のツールバーにある%sをクリックしてください。" .
"管理者自身のアカウントでログインした状態に戻ります。";

    // Domains
    $lang['adminhelp_domain_administration'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"管理権限があるドメインの一覧表を表示します。" .
"\"@.\"というドメインはシステム全体のデフォルトの設定を保持する特別なドメインで、削除できません。" .
"ドメイン名をクリックすると、そのドメインのデフォルト設定を指定する画面が表示されます。" .
"ドメインのデフォルト設定は、そのドメインに属するユーザ全員に適用されますが、" .
"個々のユーザは自分自身の設定を変更することで上書きできます。".
"Listed are the cache contents for the " .
"domain user itself if you use the domain as a catchall for " .
"spam filtering. Click on a domain to 'impersonate' the domain " .
"user to manage caches, settings, and default values for the domain.";

    $lang['adminhelp_add_domain'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"スーパー管理者は新しいドメインを追加できます。" .
"追加したドメインのデフォルト設定はシステムデフォルト(@.)ドメインの値がコピーされます。" .
"追加したドメインに管理者を任命したりデフォルト設定を変更するには、" .
"登録されているドメインの一覧表でドメイン名をクリックしてください。";

    $lang['adminhelp_domain_settings'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"ドメインのデフォルト設定を行います。" .
"表示内容は、個々のメールアドレスの設定を確認・設定する画面と同じです。" .
"このため、設定項目の詳細はユーザ向けの%sをご覧ください。" .
"ここで設定した内容は、設定したドメインに追加登録したメールアドレスの初期設定値になります。" .
"個々のユーザは、初期設定を書き換えることができます。";

    $lang['adminhelp_administrators'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"ドメイン管理者を一覧表示します。" .
"スーパー管理者は任意の管理者の管理権限を取り消すことができます。" .
"スーパー管理者は<i>すべての</i>ドメインを管理することができ、" .
"この設定画面を使ってその権限を取り消すことはできません" .
"(取り消すには、\"&amp;super=unregister\"をURL末尾に指定してログインする必要があります)。";

    $lang['adminhelp_add_administrator'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"指定されたドメインの管理者になっていないユーザ全員がリスト表示されます。" .
"スーパー管理者は任意のユーザをドメイン管理者に任命できます。" .
"個々のユーザは、スーパー管理者が任命さえすれば、複数のドメインを管理できます。" .
"また、ドメインごとに複数の管理者を任命することができます。";

    $lang['adminhelp_domain_transport'] = "<b>%s</b> displays a form to set a SMTP Transport host. " .
"If you have an SMTP server set to check the maia_domains table, " .
"it can use routing_domain and transport columns to route the email " .
"after scanning.";

    // Virus Aliases
    $lang['adminhelp_virus_aliases'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"複数のウィルスチェックエンジンを使っている場合、" .
"同一ウィルスに対して複数のウィルス名が付けられることがあります(例: Worm.Klez.HとWorm/Klez-H@MM)。" .
"このような場合、どれかのウィルス名を実名とし、他のウィルス名を別名にできます。" .
"Maia Mailguardは別名と実名を同じウィルス実体と認識するので、ウィルスに関する統計値が正確になります。" .
"この一覧表に登録ずみの別名が表示されます。" .
"ウィルス別名はいつでも削除できます。" .
"ただし、削除した別名は実名に戻りません。";

    $lang['adminhelp_add_virus_alias'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"同一のウィルスに2つ以上の名前が付けられている場合、" .
"この設定パネルでどれかを実名に、他の名前をその別名に指定できます。";

    // Languages
    $lang['adminhelp_languages'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"Maia Mailguardにインストールされている言語を一覧表示します。" .
"不要な言語はここでアンインストールできます。" .
"ただしデフォルトの言語であるEnglishはアンインストールできません";

    $lang['adminhelp_install_languages'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"提供されている言語ファイルをここで選択してインストールできます。" .
"言語をインストールすると、ログイン時に表示言語を切り替えられるようになります。";

    // Themes
    $lang['adminhelp_themes'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"現在有効なテーマを示します。" .
"これらのテーマをアンインストールするとユーザは使用できなくなります。" .
"ユーザがアンインストールされるテーマを使用しているなら、システム・" .
"デフォルトユーザ(@.)に使用されるテーマがユーザに設定されます。" .
"また、システム・デフォルト(@.)ユーザによって使用されたテーマは、" .
"初期のログインスクリーンに使用されるためアンインストールできません。" .
"ログインスクリーンを変える場合は、システム・デフォルト(@.)ドメイン設定" .
"ページのテーマを変えてください。" ;

    $lang['adminhelp_install_themes'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"テーマフォルダで解凍されたテーマを活性化します。";

    // System Configuration
    $lang['adminhelp_enable_user_autocreation'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"Maia Mailguardのデータベースに登録されていないユーザ宛のメールが届いた場合に、" .
"そのメールアドレスとユーザを自動登録することができます。" .
"ユーザ名の初期値はユーザ名そのものです。" .
"そしてそのユーザがはじめてMaia Mailguardにログインしたときに、" .
"ユーザ名を変更できます。" .
"ユーザの設定は、メールアドレスのドメイン部分にもとづいて、ドメインのデフォルト値がコピーされます。" .
"ドメインのデフォルト値が設定されていなければ、システムのデフォルト値になります。" .
"この機能を無効にすると、ユーザアカウントは、ユーザがMaia Mailguardにログインしたときにのみ" .
"自動登録されます。" .
"この機能を有効にするときには、存在しないユーザ宛のメールを受け取らないようにメールサーバが設定されていることを確認してください。" .
"辞書などによって総当たり的にスパムが送られることがあり、メールサーバの設定が不適切だったら" .
"Maia Mailguardに膨大な数のユーザが登録されてしまう可能性があります。";

    $lang['adminhelp_internal_auth'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"ユーザを登録したときに乱数にもとづく8文字の初期パスワードを自動生成し、ユーザ名とともにユーザにメールで通知できます。" .
"ユーザはこのユーザ名とパスワードでログインして、その後パスワードを変更できます。";

    $lang['adminhelp_enable_false_negative_management'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"正規メール保存機能を使うかどうかを指定します。" .
"正規メールに混じってスパムが配送された場合(false negative)、" .
"これを追跡してMaia Mailguardに再学習させることができれば、" .
"スパムの検出精度を高めることができます。" .
"このため、ディスク容量が不足している場合などやむを得ない場合を除いて、" .
"本機能を有効にすることを推奨します。" .
"なお、<b>%s</b>で正規メール保存エリアの保存日数を設定できます。";

    $lang['adminhelp_enable_stats_tracking'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"Maia Mailguardが処理したメールに関する各種統計値を収集するかどうかを制御します。" .
"ログファイルの集計など他の方法で統計値を収集したいユーザを除いて、" .
"この機能は有効にしておく方が便利でしょう。";

    $lang['adminhelp_enable_virus_scanning'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"ウィルスチェック機能をサポートするかどうかを制御します。";

    $lang['adminhelp_user_virus_scanning'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"ユーザが個々にウィルスチェック機能をON/OFFできるようにします。";

    $lang['adminhelp_enable_spam_filtering'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"スパムチェック機能をサポートするかどうかを制御します。";

    $lang['adminhelp_user_spam_filtering'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"ユーザが個々にスパムチェック機能をON/OFFできるようにします。";

    $lang['adminhelp_enable_banned_files_checking'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"危険な添付ファイルのチェック機能をサポートするかどうかを制御します。";

    $lang['adminhelp_user_banned_files_checking'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"ユーザが個々に危険な添付ファイルのチェック機能をON/OFFできるようにします。";

    $lang['adminhelp_enable_bad_header_checking'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"不正ヘッダのチェック機能をサポートするかどうかを制御します。";

    $lang['adminhelp_user_bad_header_checking'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"ユーザが個々に不正ヘッダのチェック機能をON/OFFできるようにします。";

    $lang['adminhelp_enable_spamtraps'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"「スパムトラップ用アカウント」とは、スパムのサンプルを収集する目的で作ったメールアドレスのことです。" .
"このため、スパムトラップ用アカウントだと指定したメールアドレス宛のメールは、" .
"すべて自動的にスパムだと最終判断されます。" .
"<b>スパムトラップアカウントに指定するメールアドレスは、慎重に作成して運用しなければなりません。</b>" .
"スパムトラップアカウント宛のメールはすべてスパムだと自動判断されるため、" .
"メールサーバ上のこのアドレスにはメールは一切配送されません。" .
"このため、スパムトラップアカウントを使ってメールを送受信すべきではありません。" .
"一般ユーザがスパムトラップアカウントを運用しないことが明らかであれば、" .
"「いいえ」を選んでおく方がいいでしょう。";

    $lang['adminhelp_enable_address_linking'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"ユーザが、一つのアカウントの下で複数のメールアドレスをリンクできるかどうかを設定します。" .
"これが無効であっても、管理者がユーザのためにユーザ管理ページからアドレスをリンクできます。";

    $lang['adminhelp_enable_username_changes'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"ユーザが自分のユーザ名を変更できるようにするかどうかを制御します。" .
"ユーザ名の変更機能はMaia Mailguardの内部認証を使う場合のみ有効です。";

    $lang['adminhelp_enable_privacy_invasion'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"管理者が他のユーザのメール(一覧および本文)を表示できるかどうかを制御します。" .
"ユーザのプライバシーを尊重するために、一般的にこの機能は無効にすべきです。" .
"しかしプライバシーポリシーが許す場合には、この機能を有効にすることもありえます。";

    $lang['adminhelp_system_default_user_is_local'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"システムのデフォルトユーザ(@.)がローカルユーザのみにマッチするか、" .
"登録されていないすべてのメールアドレスにマッチするかを制御します。" .
"「いいえ」を選ぶと、外部に送信されるメールも対象にできます。" .
"ほとんどの場合「はい」でかまわないでしょう。";

    $lang['adminhelp_size_limit'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"コンテンツチェックの対象とするメールの上限サイズをバイト単位で指定します。" .
"このサイズを変更する場合、データベース側の設定も変更しなければならないことがあります(" .
"MySQLでは<b>max_allowed_packet</b>の値はこの上限値よりも大きくしなければなりません)。";

    $lang['adminhelp_oversize_policy'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"上限サイズよりも大きいメールの取り扱いを指定します。" .
"<b>%s</b>を指定すると、サイズ超過メールも配送されます。" .
"<b>%s</b>を指定すると、サイズ超過メールの受信は拒否され、理由を通知するメールが差出人に送られます。";

    $lang['adminhelp_installation_directory'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"Maia MailguardのPHPスクリプトが格納されたディレクトリの絶対パスを指定します。" .
"この値は言語ファイルやその他のシステムに関する情報を扱うときに参照されます。";

    $lang['adminhelp_amavisd_conf'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"amavisd.confの絶対パスを指定します。";

    $lang['adminhelp_admin_email'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"ユーザがサポートを必要とするときに問い合わせるためのメールアドレスを指定します。";

    $lang['adminhelp_smtp_server'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"隔離エリアから救出したメールやさまざまな通知メールを送信するために接続するSMTPサーバを、" .
"IPアドレスまたはホスト名で指定します。";

    $lang['adminhelp_smtp_port'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"隔離エリアから救出したメールやさまざまな通知メールを送信するために接続するSMTPサーバの接続先ポートを" .
"指定します。" .
"一般的なSMTPポート番号は25ですが、ウィルス・スパムチェックのために2つのMTAポートを開いているサーバの場合は、" .
"SMTPクライアントからのメールを待ち受ける「入力」ポート(MTA-RX、通常ポート番号は25)と" .
"チェックプログラムからのSMTP接続を待ち受ける「出力」ポート(MTA-TX、10025などのポートを使うことが多い)が" .
"あります。" .
"このようなSMTPサーバを使う場合は、MSA-TXのポート番号を指定してください。";

    $lang['adminhelp_key_file'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"Blowfish暗号化のための鍵ファイル名を指定します。" .
"Maia Mailguardのインストールパスからの相対パス、または絶対パスで指定してください。" .
"Maia Mailguardデータベースにメールを暗号化せずに格納する場合には、" .
"このフィールドを指定する必要はありません。" .
"鍵ファイルを新たに作るには、ユーティリティプログラム</b>generate-key.pl</b>を実行して、" .
"その出力をファイルに保存してください。";

    $lang['adminhelp_newuser_template_file'] =
"<b>%s</b>(内部認証を使っている場合のみ有効)&nbsp;&nbsp;&nbsp;" .
"新規ユーザにユーザ名とパスワードを通知するときのテンプレートのファイル名を、" .
"Maia Mailguardのインストールパスからの相対パス、または絶対パスで指定してください。" .
"テンプレートファイルに書いた以下のプレースホルダは、それぞれユーザ名やパスワードなどに置き換えられ、" .
"新しく作成したユーザの通知メールが送られます。" .
"利用できるプレースホルダ: <font color=\"red\">%%%%LOGIN%%%%</font>, " .
"<font color=\"red\">%%%%PASSWORD%%%%</font>, " .
"<font color=\"red\">%%%%LOGINURL%%%%</font>, and " .
"<font color=\"red\">%%%%ADMINEMAIL%%%%</font>";

    $lang['adminhelp_expiry_period'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"スパム隔離エリアにメールを保存する日数を指定します。" .
"ユーザが隔離エリアをチェックしてスパムと最終判定するか救出を指示すると、" .
"そのメールはただちに削除されます。" .
"したがって、ここで指定する保存期間は、ユーザが何もしなかった場合にのみ適用されます。";

    $lang['adminhelp_ham_cache_expiry_period'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"正規メール保存エリアにメールを保存する日数を指定します。" .
"ユーザがこのエリアをチェックして正規メールかスパムの最終判定を行うと、" .
"そのメールはただちに削除されます。" .
"したがって、ここで指定する保存期間は、ユーザが何もしなかった場合にのみ適用されます。";

    $lang['adminhelp_reminder_threshold_count'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"隔離エリアに保存されたメールの数が閾値を超えると、隔離エリアの状態を通知するメールをユーザに送信できます。";

    $lang['adminhelp_reminder_threshold_size'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"隔離エリアに保存されたメールの合計サイズが閾値を超えると、隔離エリアの状態を通知するメールをユーザに送信できます。" ;

    $lang['adminhelp_reminder_template_file'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"隔離エリアに一定数以上のメールが保存されているときに送信する通知メールのテンプレートを" .
"Maia Mailguardのインストールパスからの相対パス、または絶対パスで指定してください。" .
"テンプレートファイルに書いた以下のプレースホルダは、それぞれユーザ名やパスワードなどに置き換えられ、" .
"新しく作成したユーザの通知メールが送られます。" .
"利用できるプレースホルダ: <font color=\"red\">%%%%VIRUSCOUNT%%%%</font>, " .
"<font color=\"red\">%%%%SPAMCOUNT%%%%</font>, " .
"<font color=\"red\">%%%%BANNEDCOUNT%%%%</font>, " .
"<font color=\"red\">%%%%HEADERCOUNT%%%%</font>, " .
"<font color=\"red\">%%%%VIRUSSIZE%%%%</font>, " .
"<font color=\"red\">%%%%SPAMSIZE%%%%</font>, " .
"<font color=\"red\">%%%%BANNEDSIZE%%%%</font>, " .
"<font color=\"red\">%%%%HEADERSIZE%%%%</font>, " .
"<font color=\"red\">%%%%MAIAURL%%%%</font>, " .
"<font color=\"red\">%%%%ADMINEMAIL%%%%</font>, " .
"<font color=\"red\">%%%%EXPIRYPERIOD%%%%</font>, " .
"<font color=\"red\">%%%%OLDESTITEMTTL%%%%</font>, and " .
"<font color=\"red\">%%%%OLDESTITEMAGE%%%%</font>.";

    $lang['adminhelp_reminder_login_url'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"通常はMaia MailguardのログインページのURLを指定します。";

    $lang['adminhelp_banner_title'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"Webページの先頭に表示するシステム名を指定します(デフォルトは\"Maia Mailguard\")。";

    $lang['adminhelp_use_icons'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"Webページのメニューをアイコンで表示するかどうかを指定します。";

    $lang['adminhelp_use_logo'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"Webページの先頭にMaia Mailguardのロゴ画像を表示するかどうかを指定します。";

    $lang['adminhelp_logo_file'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"ロゴ画像ファイルをMaia Mailguardのインストールパスからの相対パスで指定します。";

    $lang['adminhelp_logo_alt_text'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"ロゴ画像を表示するとき、画像に指定する代替テキストを指定します。";

    $lang['adminhelp_logo_url'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"ロゴ画像をユーザがクリックしたときに表示するWebページのURLを指定します。";

    $lang['adminhelp_virus_info_url'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"ウィルス感染メールの隔離エリアやウィルスに関する統計値のページでウィルス名をクリックして、" .
"インターネット上のウィルスデータベースにアクセスできるように設定できます。" .
"このように設定したい場合、ウィルス対策製品のベンダーなどのURLをここに指定します。" .
"検索ページを指定する場合、%%VIRUSNAME%%をURLに埋め込むことができます。" .
"このプレースホルダは、次項の書き換えルールにしたがって検索用に置換したウィルス名に置き換えられます。";

    $lang['adminhelp_virus_lookup'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"ウィルスチェックエンジンが検出したウィルス名を検索用のキーワードに置換するためのルールを指定します。" .
"主要ウィルス対策製品ベンダー、Google向けの置換ルールが登録されているので、もっとも適切なものを選んでください。" .
"ここで選んだルールで置換した結果が、<b>%s</b>のURLに埋め込まれます。";

    $lang['adminhelp_currency_label'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"Maia Mailguardの統計値表示機能でコスト分析を行うことができます。" .
"コストを表示するときに使う通貨記号を指定してください。" .
"なお日本円を示す記号(\\)はプログラム内部の制御文字と衝突するため、\"￥\"(全角)または\"円\"を指定してください。";

    $lang['adminhelp_bandwidth_cost'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"1ギガバイトの転送に要するコストの推定値を指定すると、" .
"正規メール、スパムなどのタイプごとのコストを推定することができます。";

    $lang['adminhelp_enable_stats_reporting'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"確認されたスパムからデータを抜き出し、Maiaに統計をレポートサーバにメール報告させます。" .
"そのため、マイアの効果はかなりのスケールで追跡でき、他の参加しているマイアユーザは" .
"共同で利益を得ることができます。統計は、個人情報や実際のメールは一切含まず集計だけが報告されます。" .
"レポートサーバは、確認されたスパムとウイルスのサイト全体の統計、ルールのトリガとなる" .
"SpamAssassin統計、および送付者IPアドレスに興味を持っているだけです。" .
"（スパムとウイルスと認定された送信者のIPアドレスは、それらのアドレスから送られるスパムや" .
"マルウェアの量によって時間加重の基礎となるIPアドレスのスコアを得点するのに使用されます。)" .
"このリストは、SpamAssassinルールに加えるため絶えず更新されたスコア値とともに外部のテストしている" .
"マイアユーザに提供します。付加的な（実験的な）機能では、SpamAssassinのルールがどれくらい" .
"非スパム対スパム（あなたのユーザによって確定された）を正確に診断したか追跡します。" .
"そして、これらのルールの各々のスコア値が基本設定を再調整します。";

    $lang['adminhelp_primary_report_server'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"プライマリマイアレポートサーバのホスト名かIPアドレスを設定します。" .
"通常、これは公式のマイアMailguard報告サイトです。" .
"(そのサイトは、世界中のマイアからレポートを集めます)。";

    $lang['adminhelp_primary_report_port'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"プライマリマイアレポートサーバのポート番号を設定します。 " .
"SSLで保護した通信が最も安全なため、多くの場合、このポートはサーバのHTTPSポート(443が標準)です。";

    $lang['adminhelp_secondary_report_server'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"もしあるならば、追加のマイアレポートサーバのホスト名かIPアドレスを設定します。" .
"この値が空でなければ、レポートをプライマリマイアレポートサーバとこのサーバにも送ります。" .
"これにより、組織として企業などの支店からのレポートを集める自前のサーバを運用します。";

    $lang['adminhelp_secondary_report_port'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"セカンダリマイアレポートサーバのポート番号を設定します。 " .
"SSLで保護した通信が最も安全なため、多くの場合、このポートはサーバのHTTPSポート(443が標準)です。";

    $lang['adminhelp_reporter_sitename'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"Maiaレポータのリストに記載するあなたのサイト" .
"（一般的にあなたの組織）の名前をセットします。";

    $lang['adminhelp_reporter_username'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"Maiaレポートサーバで認証するためのMaiaレポート用" .
"スクリプトで使用するユーザ名（リポータID）を設定します。あなたの" .
"サイトのレポータIDを登録するために、%sページへ行ってください。";

    $lang['adminhelp_reporter_registration'] =
"Maia レポータ登録";

    $lang['adminhelp_reporter_password'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"Maiaレポートサーバで認証するためのMaiaレポート用" .
"スクリプトで使用するパスワードを設定します。これは、あなたがMaia" .
"リポータIDマイアを登録したとき設定したパスワードと同じでなければ" .
"なりません。";

    $lang['adminhelp_enable_charts'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"Maia Mailguardは統計値を数値の一覧表で表示するだけでなく、グラフで表示する機能を持っています。" .
"当然ながら、グラフを表示するには、<b>%s</b>も有効にしておく必要があります。" .
"グラフをリクエストするたびに最新状況のグラフを動的に生成するか、" .
"一定時間ごとに生成しておいたグラフを表示するかを選べます。" .
"詳しくは<b>%s</b>を参照してください。";

    $lang['adminhelp_chart_ham_colour'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"正規メールの統計値を表示するときの使用カラーを指定します。";

    $lang['adminhelp_chart_spam_colour'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"スパムメールの統計値を表示するときの使用カラーを指定します。";

    $lang['adminhelp_chart_virus_colour'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"ウィルス感染メールの統計値を表示するときの使用カラーを指定します。";

    $lang['adminhelp_chart_fp_colour'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"False Positiveの統計値を表示するときの使用カラーを指定します。";

    $lang['adminhelp_chart_fn_colour'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"False Negativeの統計値を表示するときの使用カラーを指定します。";

    $lang['adminhelp_chart_suspected_ham_colour'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"正規メール保存エリアにあるメールに関する統計値を表示するときの使用カラーを指定します。";

    $lang['adminhelp_chart_suspected_spam_colour'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"スパム隔離エリアにあるメールに関する統計値を表示するときの使用カラーを指定します。";

    $lang['adminhelp_chart_wl_colour'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"ホワイトリストで処理したメールに関する統計値を表示するときの使用カラーを指定します。";

    $lang['adminhelp_chart_bl_colour'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"ブラックリストで処理したメールに関する統計値を表示するときの使用カラーを指定します。";

    $lang['adminhelp_chart_background_colour'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"グラフの背景色を指定します。";

    $lang['adminhelp_chart_font_colour'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"グラフ中のテキストの色を指定します。";

    $lang['adminhelp_chart_autogeneration_interval'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"グラフを定期的に生成して保存しておき、リクエストがあったときには保存しておいたグラフを表示することができます。" .
"グラフの生成間隔を分単位で指定してください。" .
"グラフの生成はサーバ負荷を高めます。" .
"このため、サーバの負荷が高い環境では定期的に生成したグラフを静的に表示させる方がいいでしょう。";

    // Statistics
    $lang['adminhelp_reset_stats'] =
"<b>%s</b>&nbsp;&nbsp;&nbsp;" .
"ウィルス統計、SpamAssassinのルール統計、メール処理に関する統計のカウンタをクリアします。" .
"各種隔離エリアや正規メール保存エリアのメールの数は当然ながらクリアされません。";

?>
