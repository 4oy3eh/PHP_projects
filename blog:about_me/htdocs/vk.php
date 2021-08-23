
<!DOCTYPE html>
<html  lang='ru' dir='ltr'>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="/images/icons/favicons/fav_logo.ico?6" />

    <link rel="apple-touch-icon" href="/images/icons/pwa/apple/default.png?11">

    <meta http-equiv="content-type" content="text/html; charset=windows-1251" />


    <title>Никита Козловский</title>

    <noscript><meta http-equiv="refresh" content="0; URL=/badbrowser.php"></noscript>

    <link type="text/css" rel="stylesheet" href="https://st1-30.vk.com/css/al/common.b508098bafd2766a55ce.css" /><link type="text/css" rel="stylesheet" href="https://st1-30.vk.com/css/al/base.b01e91188ae878fae628.css" /><link type="text/css" rel="stylesheet" href="https://st1-30.vk.com/css/al/fonts_utf.3e49cba3b57d115e0fd0.css" /><link type="text/css" rel="stylesheet" href="https://st1-30.vk.com/css/al/fonts_cnt.2758ddb836f8883f0d1d.css" />

    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=yVikt_TG4gCyXL4Kw8A_LSaFSTQXUd7aoasHW8t5cRhQw7lXYv_QZnPYb2miRE94" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="https://gc.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cHM6Ly92ay5jb20vNG95M2Vo"/><script type="text/javascript">


        (function() {
            var alertCont;
            function trackOldBrowserEvent(event) {
                var xhr = new XMLHttpRequest();
                xhr.open('GET', '/badbrowser_stat.php?act=track&event=' + event);
                xhr.send();
            }
            function exposeGlobals() {
                window.hideOldBrowser = function() {
                    alertCont.remove();
                    var date = new Date();
                    date.setTime(date.getTime() + (7 * 24 * 60 * 60 * 1000));
                    var expiresDate = date.toGMTString();
                    var domain = window.locDomain;
                    document.cookie = 'remixoldbshown=1; expires=' + expiresDate + '; path=/' + (domain ? '; domain=.' + domain : '') + ';secure';
                    trackOldBrowserEvent('hideAlert_atom');
                }
            }
            function checkOldBrowser() {
                if(!document.body) {
                    setTimeout(checkOldBrowser, 100);
                    return;
                }
                try {
                    if ((false || !('noModule' in HTMLScriptElement.prototype)) && !false) {
                        exposeGlobals();
                        var alert = '<div class="OldBrowser__container OldBrowser__container--atom" style="width:960px;">  Ваш браузер устарел. Попробуйте <a href="https://vk.com/away.php?to=https%3A%2F%2F1l-go.mail.ru%2Fr%2Fadid%2F3165134_2013344%2Fpid%2F102819%2Fpof%2F1%2Ff%2F3%2F%3F_1larg_sub%3Dv3.505007%26rfr%3D505007%26utm_source%3Dvk%26utm_medium%3Dstripeall%26utm_campaign%3DExpVk&badbrowser=atom&badbrowser_meta=_badbrowser_alert" target="_blank">браузер Atom</a>, чтобы работа ВКонтакте была быстрой и стабильной. <a href="https://vk.com/away.php?to=https%3A%2F%2F1l-go.mail.ru%2Fr%2Fadid%2F3165134_2013344%2Fpid%2F102819%2Fpof%2F1%2Ff%2F3%2F%3F_1larg_sub%3Dv3.505007%26rfr%3D505007%26utm_source%3Dvk%26utm_medium%3Dstripeall%26utm_campaign%3DExpVk&badbrowser=atom&badbrowser_meta=_badbrowser_alert" target="_blank">Подробнее</a>  <span class="OldBrowser__close" aria-label="Закрыть" role="button" onclick="hideOldBrowser();"></span></div>';
                        alertCont = document.createElement('div');
                        alertCont.className = 'OldBrowser';
                        alertCont.id = 'old_browser_wrap';
                        alertCont.innerHTML = alert;
                        document.body.appendChild(alertCont);
                        trackOldBrowserEvent('showAlert_atom');
                    } else {
                        if (browserVersion < lastVersions[browserName] - 1) {
                            trackOldBrowserEvent('badBrowser' + (lastVersions[browserName] - browserVersion));
                        }
                    }
                } catch(e) {}
            }
            setTimeout(checkOldBrowser, 0);
        })();
        var vk = {
            ads_rotate_interval: 120000,
            al: parseInt('3') || 4,
            id: 137655984,
            sex: 2,
            intnat: '' ? true : false,
            host: 'vk.com',
            loginDomain: 'https://login.vk.com/',
            lang: 0,
            statsMeta: {"platform":"web2","st":false,"time":1611854783,"hash":"T5hNMwbqGzxsBOeec8aGKayxr5RPYG9rCCXSMIOqTnw"},
            loaderNavSection: '',
            rtl: parseInt('') || 0,
            version: 14463295,
            stDomains: 0,
            stDomain: 'https://st1-30.vk.com',
            navPostfix: "",
            wsTransport: 'https://stats.vk-portal.net',
            stExcludedMasks: ["loader_nav","lang","sw\/"],
            zero: false,
            contlen: 219569,
            loginscheme: 'https',
            ip_h: '8c9001efabbc5f9837',
            navPrefix: '/',
            dt: parseInt('0') || 0,
            fs: parseInt('13') || 13,
            ts: 1611854783,
            tz: 10800,
            pd: 0,
            vcost: 7,
            time: [2021, 1, 28, 20, 26, 23],
            sampleUser: -1, spentLastSendTS: new Date().getTime(),
            a11y: 0,
            statusExportHash: '3d290bba28dd914579',
            audioAdsConfig: {"enabled":false,"sections":["my","user_playlists","group_playlists","my_playlists","recent","audio_feed","recs","recs_audio","recs_album","search","global_search","group_list","user_list","user_wall","group_wall","feed","other","superapp_widget","recoms_recoms","recoms_new_audios","recoms_new_albums","recoms_communities","recoms_added_recommendation","recoms_top_audios_global","recoms_mood_playlists","games","any_case_playlists","collections","genre_rock","genre_pop","genre_rap","editors_playlists","recoms_recent_recommendation","recoms_new_artists","recoms_friends","recoms_recent_audios","recoms_recent_playlists","recoms_top_audios_global","recoms_artist_promo_playlists","recommended_concerts","search_suggestions","search_owned_audios","search_owned_playlist","search_global_audios","search_global_playlist","search_global_albums","search_global_artists","search_videoclips","artist_info","artist_main_albums","artist_main_audios","artist_featured_albums","artist_featured_audios","artist_featured_albums","artist_featured_albums","artist_pages","artist_events","artist_related","artist_new_album","artist_top_audios","artist_top_videos","artist_concerts"],"day_limit_reached":false,"sign":"2cde381f26912b1646678ecd6ce7386f5aadb108"},
            longViewTestGroup: null,
            cma: 1,
            lpConfig: {
                enabled: 1,
                key: '0a1d2f14e3943078961af0fe6551b90f17a3e214',
                ts: 1614926073,
                url: 'https://im.vk.com/nim137655984',
                lpstat: 0,
                sseUrl: 'https://papi.vk.com/pushsse/ruim'
            },

            pr_tpl: "<div class=\"pr %cls%\" id=\"%id%\"><div class=\"pr_bt\"><\/div><div class=\"pr_bt\"><\/div><div class=\"pr_bt\"><\/div><\/div>",
            push_hash: '570a3a89ecaf9a32d2',

            audioInlinePlayerTpl: "<div class=\"audio_inline_player _audio_inline_player no_select\">\n  <div class=\"audio_inline_player_right\">\n    <div class=\"audio_inline_player_volume\"><\/div>\n  <\/div>\n  <div class=\"audio_inline_player_left\">\n    <div class=\"audio_inline_player_progress\"><\/div>\n  <\/div>\n<\/div>",

            pe: {"vk_apps_svg_qr":1,"upload.send_upload_stat":1,"push_notifier":1,"use_web_vitals_api":1,"geminus_counter":1,"notify_new_events_box":1,"mini_apps_web_add_to_favorites":1,"mini_apps_web_add_to_menu":1,"mini_apps_m_web_new_stub_page":1,"cookie_class_samesite":1,"cookie_secure_default_true":1,"stickers_bot_link":1,"market_with_products_of_groups":1,"widgets_xdm_same_origin":1,"stickers_money_transfer_suggestions":1,"web2_story_box_enabled":1,"bridge_mobile_story_box_enabled":1,"navigation_timespent":1,"market_item_recommendations_view_log":1,"market_item_others_view_log":1,"web_stats_transport_story_view":1,"registration_item_stat":1,"mvk_lazy_static_reload":1,"notifications_view_new":1,"ads_market_autopromotion_bookmarks_stats":1,"mini_apps_web_call_api_form_data":1,"web_new_photo_editor":1,"web_new_photo_editor_crop":1,"web_photo_editor_hide_entrypoint":1,"web_stats_try_send":1,"stickers_catalog_reload_after_buy":1,"web_stats_send_on_events_limit":1,"stickers_web_new_ui":1,"ads_new_reports_web_tgb":1,"ads_autopromotion_web_cashback":1,"recognize_mock_turn_off":1,"photo_recognition_web":1,"aliexpress_app_links_with_partner_links":1,"ads_new_reports_web_histories":1,"ads_new_reports_mvk_histories":1,"audio_unauth_preview":1,"ads_easy_promote_goods_new_create_api":1,"mail_history_unread_counter_observer":1,"pinned_conversations":1,"messenger_empty_pinned_support":1},
            ex: [],
            countryISO: 'LV',
            apiConfigDomains: {
                apiDomain: 'api.vk.com',
                loginDomain: 'login.vk.com',
            },

            isCallsDevEnv: '' ? true : false,
        };;vk.rv="105842";;if (!window.constants) { window.constants = {Groups: {
                GROUPS_ADMIN_LEVEL_USER: 0,
                GROUPS_ADMIN_LEVEL_MODERATOR: 1,
                GROUPS_ADMIN_LEVEL_EDITOR: 2,
                GROUPS_ADMIN_LEVEL_ADMINISTRATOR: 3,
                GROUPS_ADMIN_LEVEL_HOST: 4,
                GROUPS_ADMIN_LEVEL_EVENT_CREATOR: 5,
                GROUPS_ADMIN_LEVEL_CREATOR: 6,
                GROUPS_ADMIN_PSEUDO_LEVEL_ADVERTISER: 100
            }}; };

        window.locDomain = vk.host.match(/[a-zA-Z]+\.[a-zA-Z]+\.?$/)[0];
        var _ua = navigator.userAgent.toLowerCase();
        if (/opera/i.test(_ua) || !/msie 6/i.test(_ua) || document.domain != locDomain) document.domain = locDomain;
        var ___htest = (location.toString().match(/#(.*)/) || {})[1] || '', ___to;
        ___htest = ___htest.split('#').pop();
        if (vk.al != 1 && ___htest.length && ___htest.substr(0, 1) == vk.navPrefix) {
            if (vk.al != 3 || vk.navPrefix != '!') {
                ___to = ___htest.replace(/^(\/|!)/, '');
                if (___to.match(/^([^\?]*\.php|login|mobile|away)([^a-z0-9\.]|$)/)) ___to = '';
                location.replace(location.protocol + '//' + location.host + '/' + ___to);
            }
        }

        var StaticFiles = {
            'cmodules/web/common_web.js' : {v: '229'},
            'al/common.b508098bafd2766a55ce.css':{v:''},'common.css':{v:1},'al/base.b01e91188ae878fae628.css':{v:''},'base.css':{v:1},'al/fonts_utf.3e49cba3b57d115e0fd0.css':{v:''},'fonts_utf.css':{v:1},'al/fonts_cnt.2758ddb836f8883f0d1d.css':{v:''},'fonts_cnt.css':{v:1}
            ,'cmodules/bundles/evbus.7f5692940b736ddd6acf.js':{v:'1c4f3e6399b29ddb005c'},'cmodules/bundles/audioplayer.b8a4b7fa8292bdc04a12.js':{v:'a0307aea14e4cfc896db'},'cmodules/bundles/lottie.42c43ab3dd042ab8b845.js':{v:'4d0de2991b49d6fc43f9'},'cmodules/bundles/common.1edfd8754c8a9f1110e0.js':{v:'dafb50eaddaf10901a19'},'cmodules/web/common_web.042ee71e3e27f033cd2c.js':{v:'7421f5656fbc8507b42fe5cf5f90bae1'},'lang0_0.js': {v: 26864246},'al/ui_common.2df1b3d763cda2ddf2be.css':{v:''},'ui_common.css':{v:1},'cmodules/bundles/71af34534be10395f7f6bb3e2039fd2e.60fb4d8eec439a51d0dd.js':{v:'4b78c3e89b3153e7d52b'},'cmodules/web/ui_common.f5aa363e75fd879ea228.js':{v:'4d8d588e6a5dc8d5b7a1ba241a473fd4'},'ui_common.js':{v:1},'cmodules/bundles/983f42e70b3e18d97715513130ff4d9c.71c87b47c4a67e3c5005.js':{v:'2e110c95af558361560b'},'cmodules/bundles/7ff0c31fd89ceca852f0cf5e2f61c8c8.ea69761687671e9162c2.js':{v:'692ac1da5c609cc63991'},'cmodules/bundles/c6f51c78d2a3f17f935b490330a9da66.d954fec92e6569491561.js':{v:'64bcfd2af49e9f37d2fc'},'cmodules/bundles/07ed5e94b188401a51c6fd9fb02f3537.d2616a5d3324110e88e1.js':{v:'c83dd1d500f836de6f29'},'cmodules/bundles/e1eb3733f1f626a37fd0d2e038b98573.aadacc406a6c7b3ca00a.js':{v:'b0d19ef8c8fbc986c661'},'cmodules/bundles/3d69874b9b2a413d4c2d4df376b293a6.60dc83f9f2bc8528477f.js':{v:'0e6a70ff284fb62730c8'},'cmodules/web/page.864989469c3451c6f5f0.js':{v:'18c37c8d514b838fd23af0237fb15e6c'},'page.js':{v:1},'al/page.3afa6fc11b586ea06533.css':{v:''},'page.css':{v:1},'al/post.6fcb3b2f6b92b83e170b.css':{v:''},'post.css':{v:1},'cmodules/bundles/87e53d18c97a21833435b4d03c8ffead.811c2c63e05e66d99767.js':{v:'7ba566648c828d515e67'},'cmodules/web/likes.79f3d60585997ca7eb1a.js':{v:'e000dc8db4dc6b4169f7c4dcd5a9c3fe'},'cmodules/web/likes.js':{v:1},'cmodules/web/ui_media_selector.082033a2cfa33de0104b.js':{v:'d1b1c89d93724c3828716118952b87ad'},'cmodules/web/ui_media_selector.js':{v:1},'al/ui_media_selector.6f5ec534501dfff3d25b.css':{v:''},'ui_media_selector.css':{v:1},'cmodules/bundles/palette.b68646123d97c091c774.js':{v:'d9f799b7560495d5461d'},'cmodules/web/emoji.6b57f339afe82fe4bdfe.js':{v:'0d7c81835c175a13c60714b7a1029eaf'},'cmodules/web/emoji.js':{v:1},'al/notifier.70b93db2f15e3d63c360.css':{v:''},'notifier.css':{v:1},'cmodules/web/poster.df9075ffae801c2dd7ee.js':{v:'796606c30220235c286a4aac562ab9d5'},'cmodules/web/poster.js':{v:1},'al/ProfileActions.06ddde1b075b63f2442c.css':{v:''},'ProfileActions.css':{v:1},'cmodules/bundles/45f3582e0cc9803acd59fee21921ad99.facc6f3b750ba61c0119.js':{v:'f551d777d1d7e48a1faf'},'cmodules/web/market_analytics.1731e3d4d84586121e2f.js':{v:'f18abe52f1b9aeba2515eb36e6679fca'},'cmodules/web/market_analytics.js':{v:1},'al/profile.94600e83d9a2a01f21d0.css':{v:''},'profile.css':{v:1},'cmodules/bundles/9700496d5efd7344a0856baed1cec29e.23e638015690b6ecb7da.js':{v:'8ee35b8236f7eebb9d6b'},'cmodules/web/profile.16a07cab3e2f5fa018b0.js':{v:'fc710f8aaacd9a01401cfc0518cea197'},'cmodules/web/profile.js':{v:1},'al/module.ec5e35f28df2d8979107.css':{v:''},'module.css':{v:1},'mrtarg.js':{v:3},'al/mrtarg.1c1971c772157c733a4c.css':{v:''},'mrtarg.css':{v:1},'cmodules/web/css_types.e95d58af70bddbded353.js':{v:'b6c26c2747377488f26e'},'cmodules/web/css_types.js':{v:1},'cmodules/web/jobs_devtools_notification.e4a323fd2b0a62608b9f.js':{v:'bb92f4cc586fc80699cbee58c84a20d9'},'cmodules/web/jobs_devtools_notification.js':{v:1},'cmodules/web/page_layout.dc99e1b550328f6de93e.js':{v:'c2147c81bbb5a57fbd5db512c50609f6'},'cmodules/web/page_layout.js':{v:1},'cmodules/bundles/f3b0fa9fb1851ddd091630fb24dc4043.1b89a3e7c14920fe33d5.js':{v:'a5a445427a490cca7172'},'cmodules/bundles/vendors.d8be6de74e8d64f67187.js':{v:'d54e61451335845931b5'},'cmodules/bundles/7ed9e4d544bccc8a5ada0a712a9cf1ad.8e0b28e7eb9eaca26e07.js':{v:'3eedcb8289adae4216d6'},'cmodules/bundles/7441004f6b6b66cce39929ceed1ae0cd.7566230e86202c40e6c7.js':{v:'974501a6e9c35eb297ac'},'cmodules/bundles/29ce115e24facf4cb9fb345ec7c74430.bccf7b1f25aedc78ed5c.js':{v:'2f1b6538d972fd226b7a'},'cmodules/web/notifier.47a71561cf37976383c1.js':{v:'cacb6bc50410bdcb3744ebb69a2208ff'},'notifier.js':{v:1}
        }
        var abp;
    </script>

    <script type="text/javascript" src="/js/loader_nav218514461110_0.js"></script><script type="text/javascript" src="https://st1-30.vk.com/js/cmodules/bundles/evbus.7f5692940b736ddd6acf.js?1c4f3e6399b29ddb005c"></script><script type="text/javascript" src="https://st1-30.vk.com/js/cmodules/bundles/audioplayer.b8a4b7fa8292bdc04a12.js?a0307aea14e4cfc896db"></script><script type="text/javascript" src="https://st1-30.vk.com/js/cmodules/bundles/lottie.42c43ab3dd042ab8b845.js?4d0de2991b49d6fc43f9"></script><script type="text/javascript" src="https://st1-30.vk.com/js/cmodules/bundles/common.1edfd8754c8a9f1110e0.js?dafb50eaddaf10901a19"></script><script type="text/javascript" src="https://st1-30.vk.com/js/cmodules/web/common_web.042ee71e3e27f033cd2c.js?7421f5656fbc8507b42fe5cf5f90bae1"></script><script type="text/javascript" src="/js/lang0_0.js?26864246"></script><script type="text/javascript" src="/js/lib/px.js?ch=1"></script><script type="text/javascript" src="/js/lib/px.js?ch=2"></script><link rel="alternate" media="only screen and (max-width: 640px)" href="https://m.vk.com/4oy3eh" /><link rel="alternate" href="android-app://com.vkontakte.android/vkontakte/m.vk.com/4oy3eh" /><meta name="msApplication-ID" content="C6965DD5.VK" /><meta name="msApplication-PackageFamilyName" content="C6965DD5.VK_v422avzh127ra" /><link type="text/css" rel="stylesheet" href="https://st1-30.vk.com/css/al/ui_common.2df1b3d763cda2ddf2be.css" /><script type="text/javascript" src="https://st1-30.vk.com/js/cmodules/bundles/71af34534be10395f7f6bb3e2039fd2e.60fb4d8eec439a51d0dd.js?4b78c3e89b3153e7d52b"></script><script type="text/javascript" src="https://st1-30.vk.com/js/cmodules/web/ui_common.f5aa363e75fd879ea228.js?4d8d588e6a5dc8d5b7a1ba241a473fd4"></script><script type="text/javascript" src="https://st1-30.vk.com/js/cmodules/bundles/983f42e70b3e18d97715513130ff4d9c.71c87b47c4a67e3c5005.js?2e110c95af558361560b"></script><script type="text/javascript" src="https://st1-30.vk.com/js/cmodules/bundles/7ff0c31fd89ceca852f0cf5e2f61c8c8.ea69761687671e9162c2.js?692ac1da5c609cc63991"></script><script type="text/javascript" src="https://st1-30.vk.com/js/cmodules/bundles/c6f51c78d2a3f17f935b490330a9da66.d954fec92e6569491561.js?64bcfd2af49e9f37d2fc"></script><script type="text/javascript" src="https://st1-30.vk.com/js/cmodules/bundles/07ed5e94b188401a51c6fd9fb02f3537.d2616a5d3324110e88e1.js?c83dd1d500f836de6f29"></script><script type="text/javascript" src="https://st1-30.vk.com/js/cmodules/bundles/e1eb3733f1f626a37fd0d2e038b98573.aadacc406a6c7b3ca00a.js?b0d19ef8c8fbc986c661"></script><script type="text/javascript" src="https://st1-30.vk.com/js/cmodules/bundles/3d69874b9b2a413d4c2d4df376b293a6.60dc83f9f2bc8528477f.js?0e6a70ff284fb62730c8"></script><script type="text/javascript" src="https://st1-30.vk.com/js/cmodules/web/page.864989469c3451c6f5f0.js?18c37c8d514b838fd23af0237fb15e6c"></script><link type="text/css" rel="stylesheet" href="https://st1-30.vk.com/css/al/page.3afa6fc11b586ea06533.css" /><link type="text/css" rel="stylesheet" href="https://st1-30.vk.com/css/al/post.6fcb3b2f6b92b83e170b.css" /><script type="text/javascript" src="https://st1-30.vk.com/js/cmodules/bundles/87e53d18c97a21833435b4d03c8ffead.811c2c63e05e66d99767.js?7ba566648c828d515e67"></script><script type="text/javascript" src="https://st1-30.vk.com/js/cmodules/web/likes.79f3d60585997ca7eb1a.js?e000dc8db4dc6b4169f7c4dcd5a9c3fe"></script><script type="text/javascript" src="https://st1-30.vk.com/js/cmodules/web/ui_media_selector.082033a2cfa33de0104b.js?d1b1c89d93724c3828716118952b87ad"></script><link type="text/css" rel="stylesheet" href="https://st1-30.vk.com/css/al/ui_media_selector.6f5ec534501dfff3d25b.css" /><script type="text/javascript" src="https://st1-30.vk.com/js/cmodules/bundles/palette.b68646123d97c091c774.js?d9f799b7560495d5461d"></script><script type="text/javascript" src="https://st1-30.vk.com/js/cmodules/web/emoji.6b57f339afe82fe4bdfe.js?0d7c81835c175a13c60714b7a1029eaf"></script><link type="text/css" rel="stylesheet" href="https://st1-30.vk.com/css/al/notifier.70b93db2f15e3d63c360.css" /><script type="text/javascript" src="https://st1-30.vk.com/js/cmodules/web/poster.df9075ffae801c2dd7ee.js?796606c30220235c286a4aac562ab9d5"></script><link type="text/css" rel="stylesheet" href="https://st1-30.vk.com/css/al/ProfileActions.06ddde1b075b63f2442c.css" /><script type="text/javascript" src="https://st1-30.vk.com/js/cmodules/bundles/45f3582e0cc9803acd59fee21921ad99.facc6f3b750ba61c0119.js?f551d777d1d7e48a1faf"></script><script type="text/javascript" src="https://st1-30.vk.com/js/cmodules/web/market_analytics.1731e3d4d84586121e2f.js?f18abe52f1b9aeba2515eb36e6679fca"></script><link type="text/css" rel="stylesheet" href="https://st1-30.vk.com/css/al/profile.94600e83d9a2a01f21d0.css" /><script type="text/javascript" src="https://st1-30.vk.com/js/cmodules/bundles/9700496d5efd7344a0856baed1cec29e.23e638015690b6ecb7da.js?8ee35b8236f7eebb9d6b"></script><script type="text/javascript" src="https://st1-30.vk.com/js/cmodules/web/profile.16a07cab3e2f5fa018b0.js?fc710f8aaacd9a01401cfc0518cea197"></script><link type="text/css" rel="stylesheet" href="https://st1-30.vk.com/css/al/module.ec5e35f28df2d8979107.css" /><script type="text/javascript" src="https://st1-30.vk.com/js/al/mrtarg.js?3"></script><link type="text/css" rel="stylesheet" href="https://st1-30.vk.com/css/al/mrtarg.1c1971c772157c733a4c.css" /><script type="text/javascript" src="https://st1-30.vk.com/js/cmodules/web/css_types.e95d58af70bddbded353.js?b6c26c2747377488f26e"></script><script type="text/javascript" src="https://st1-30.vk.com/js/cmodules/web/jobs_devtools_notification.e4a323fd2b0a62608b9f.js?bb92f4cc586fc80699cbee58c84a20d9"></script><script type="text/javascript" src="https://st1-30.vk.com/js/cmodules/web/page_layout.dc99e1b550328f6de93e.js?c2147c81bbb5a57fbd5db512c50609f6"></script><script type="text/javascript" src="https://st1-30.vk.com/js/cmodules/bundles/f3b0fa9fb1851ddd091630fb24dc4043.1b89a3e7c14920fe33d5.js?a5a445427a490cca7172"></script><script type="text/javascript" src="https://st1-30.vk.com/js/cmodules/bundles/vendors.d8be6de74e8d64f67187.js?d54e61451335845931b5"></script><script type="text/javascript" src="https://st1-30.vk.com/js/cmodules/bundles/7ed9e4d544bccc8a5ada0a712a9cf1ad.8e0b28e7eb9eaca26e07.js?3eedcb8289adae4216d6"></script><script type="text/javascript" src="https://st1-30.vk.com/js/cmodules/bundles/7441004f6b6b66cce39929ceed1ae0cd.7566230e86202c40e6c7.js?974501a6e9c35eb297ac"></script><script type="text/javascript" src="https://st1-30.vk.com/js/cmodules/bundles/29ce115e24facf4cb9fb345ec7c74430.bccf7b1f25aedc78ed5c.js?2f1b6538d972fd226b7a"></script><script type="text/javascript" src="https://st1-30.vk.com/js/cmodules/web/notifier.47a71561cf37976383c1.js?cacb6bc50410bdcb3744ebb69a2208ff"></script>

</head>

<body onresize="onBodyResize()" class=" new_header_design ">
<div id="system_msg" class="fixed"></div>
<div id="utils"></div>

<div id="layer_bg" class="fixed"></div><div id="layer_wrap" class="scroll_fix_wrap fixed layer_wrap"><div id="layer"></div></div>
<div id="box_layer_bg" class="fixed"></div><div id="box_layer_wrap" class="scroll_fix_wrap fixed"><div id="box_layer"><div id="box_loader"><div class="pr pr_baw pr_medium" id="box_loader_pr"><div class="pr_bt"></div><div class="pr_bt"></div><div class="pr_bt"></div></div><div class="back"></div></div></div></div>

<div id="stl_left"></div><div id="stl_side"></div>

<script type="text/javascript">window.domStarted && domStarted();</script>

<div class="scroll_fix_wrap _page_wrap" id="page_wrap">




            <div id="page_layout">


                <div id="page_body" class="fl_r " style="width: 795px;">

                    <div id="wrap_between"></div>
                    <div id="wrap3"><div id="wrap2">
                            <div id="wrap1">
                                <div id="content"><div id="profile" class="profile_content">

                                        <div class="wide_column_right">

                                            <div class="wide_column_wrap">
                                                <div class="wide_column" id="wide_column">
                                                    <div class="page_block" >
                                                        <div id="page_info_wrap" class="page_info_wrap "><div class="page_top">
                                                                <div class="_profile_online profile_online"><div class="profile_online_lv">online</div> </div>
                                                                <h1 class="page_name">Никита  Козловский</h1>
                                                                <div class="page_current_info" id="page_current_info"><div id="currinfo_editor" class="page_status_editor clear" onclick="cancelEvent(event)">
                                                                        <div class="editor">
                                                                            <div class="page_status_input_wrap _emoji_field_wrap">
                                                                                <div class="emoji_smile_wrap  _emoji_wrap">
                                                                                    <div class="emoji_smile _emoji_btn" role="button" title="Используйте TAB, чтобы быстрее открывать смайлы" onmouseover="return Emoji.show(this, event);" onmouseout="return Emoji.hide(this, event);" onclick="return cancelEvent(event);" aria-label="Добавить эмодзи или стикер">
                                                                                        <div class="emoji_smile_icon"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="page_status_input" id="currinfo_input" contenteditable="true" role="textbox"></div>
                                                                            </div>
                                                                            <div class="page_status_audio checkbox on" id="currinfo_audio" onclick="checkbox(this); Page.audioStatusUpdate('3d290bba28dd914579');">Транслировать музыку в статус</div>
                                                                            <div class="page_status_app checkbox on unshown" id="currinfo_app" onclick="checkbox(this); Profile.appStatusUpdate('3d290bba28dd914579')">Показывать приложение в статусе</div>
                                                                            <button class="flat_button button_small page_status_btn_save" id="currinfo_save">Сохранить</button>
                                                                        </div>
                                                                    </div>
                                                                    <div id="currinfo_wrap" onclick="return Page.infoEdit();" tabindex="0" role="button">
                                                                        <span id="current_info" class="current_info"><span class="my_current_info"><span class="current_text">All These Lolis Calls Me Senpai</span></span></span>
                                                                    </div>
                                                                    <div id="currinfo_fake" style="display: none"><span class="my_current_info"><span class="current_text">All These Lolis Calls Me Senpai</span></span></div></div>
                                                            </div><div class="profile_info profile_info_short" id="profile_short">
                                                                <div class="clear_fix profile_info_row ">
                                                                    <div class="label fl_l">День рождения:</div>
                                                                    <div class="labeled"><a href="/search?c[section]=people&c[bday]=5&c[bmonth]=8">5 августа</a> <a href="/search?c[section]=people&c[byear]=1996">1996 г.</a></div>
                                                                </div><div class="clear_fix profile_info_row ">
                                                                    <div class="label fl_l">Город:</div>
                                                                    <div class="labeled"><a href="/search?c[name]=0&c[section]=people&c[country]=12&c[city]=1925340">R&#299;ga</a></div>
                                                                </div><div class="clear_fix profile_info_row ">
                                                                    <div class="label fl_l">Семейное положение:</div>
                                                                    <div class="labeled"><a href="/search?c[name]=0&c[section]=people&c[status]=1">не женат</a></div>
                                                                </div><div class="clear_fix profile_info_row ">
                                                                    <div class="label fl_l">Образование:</div>
                                                                    <div class="labeled"><a href="/search?c[name]=0&c[section]=people&c[uni_country]=12&c[uni_city]=1925340&c[university]=294705">R&#299;gas Tehnisk&#257; universit&#257;te (RTU, РТУ, РПИ)</a></div>
                                                                </div><div class="clear_fix profile_info_row ">
                                                                    <div class="label fl_l">Сайт:</div>
                                                                    <div class="labeled"><a href="/away.php?to=https%3A%2F%2Fwww.twitch.tv%2F4oy3eh&cc_key=" target="_blank" rel="nofollow noopener" target="_blank" rel="noopener">https://www.twitch.tv/4oy3eh</a> <a href="/away.php?to=https%3A%2F%2Fopen.spotify.com%2Fuser%2Fbxu7roaef98sylvogp04bxhym&cc_key=" target="_blank" rel="nofollow noopener" target="_blank" rel="noopener">https://open.spotify.com/user/bxu7roaef98sylvogp04bxhym</a></div>
                                                                </div><div class="profile_more_info">
                                                                    <a class="profile_more_info_link" onclick="Profile.toggleInfo(this)">
                                                                        <span class="profile_label_more">Показать подробную информацию</span>
                                                                        <span class="profile_label_less">Скрыть подробную информацию</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <?php if($_COOKIE["status"] ==! ''):?>
                                                            <div class="profile_info profile_info_full" id="profile_full">
                                                                <div class="profile_info_block clear_fix">
                                                                    <div class="profile_info_header_wrap">
                                                                        <a class="profile_info_edit" href="/edit">Редактировать</a>
                                                                        <span class="profile_info_header">Основная информация</span>
                                                                    </div>
                                                                    <div class="profile_info">
                                                                        <div class="clear_fix profile_info_row ">
                                                                            <div class="label fl_l">Родной город:</div>
                                                                            <div class="labeled"><a href="/search?c[name]=0&c[section]=people&c[hometown]=%D0%A0%D0%B8%D0%B3%D0%B0">Рига</a></div>
                                                                        </div><div class="clear_fix profile_info_row ">
                                                                            <div class="label fl_l">Языки:</div>
                                                                            <div class="labeled"><a href="/search?c[name]=0&c[section]=people&c[lang]=-1">Русский</a>, <a href="/search?c[name]=0&c[section]=people&c[lang]=56">Latvie&#353;u</a>, <a href="/search?c[name]=0&c[section]=people&c[lang]=3">English</a>, <a href="/search?c[name]=0&c[section]=people&c[lang]=16">Fran&#231;ais</a>, <a href="/search?c[name]=0&c[section]=people&c[lang]=6">Deutsch</a></div>
                                                                        </div>
                                                                    </div>
                                                                </div><div class="profile_info_block clear_fix">
                                                                    <div class="profile_info_header_wrap">
                                                                        <a class="profile_info_edit" href="/edit?act=contacts">Редактировать</a>
                                                                        <span class="profile_info_header">Контактная информация</span>
                                                                    </div>
                                                                    <div class="profile_info">
                                                                        <div class="clear_fix profile_info_row ">
                                                                            <div class="label fl_l">Моб. телефон:</div>
                                                                            <div class="labeled">+371 22000316</div>
                                                                        </div><div class="clear_fix profile_info_row ">
                                                                            <div class="label fl_l">Skype:</div>
                                                                            <div class="labeled"><a href="skype:nick-96?call">nick-96</a></div>
                                                                        </div>
                                                                    </div>
                                                                </div><div class="profile_info_block clear_fix">
                                                                    <div class="profile_info_header_wrap">
                                                                        <a class="profile_info_edit" href="/edit?act=education">Редактировать</a>
                                                                        <span class="profile_info_header">Образование</span>
                                                                    </div>
                                                                    <div class="profile_info">
                                                                        <div class="clear_fix profile_info_row ">
                                                                            <div class="label fl_l">Вуз:</div>
                                                                            <div class="labeled"><a href="/search?c[name]=0&c[section]=people&c[uni_country]=12&c[uni_city]=1925340&c[university]=294705">R&#299;gas Tehnisk&#257; universit&#257;te (RTU, РТУ, РПИ)</a></div>
                                                                        </div><div class="clear_fix profile_info_row ">
                                                                            <div class="label fl_l">Статус:</div>
                                                                            <div class="labeled"><a href="/search?c[name]=0&c[section]=people&c[uni_country]=12&c[uni_city]=1925340&c[university]=294705&c[edu_status]=3">Студент (бакалавр)</a></div>
                                                                        </div><div class="clear_fix profile_info_row block">
                                                                            <div class="label fl_l">Школа:</div>
                                                                            <div class="labeled"><a href="/search?c[name]=0&c[section]=people&c[school_country]=12&c[school_city]=1925340&c[school]=407154">R&#299;gas 40. vidusskola</a><a href="/search?c[name]=0&c[section]=people&c[school_country]=12&c[school_city]=1925340&c[school]=407154&c[school_year]=2014"> '14</a><br>R&#299;ga, 2002–2014 <a href="/search?c[name]=0&c[section]=people&c[school_country]=12&c[school_city]=1925340&c[school]=407154&c[school_year]=2014&c[school_class]=22">(ц)</a><br><a href="/search?c[name]=0&c[section]=people&c[school_country]=12&c[school_city]=1925340&c[school]=407154&c[school_spec]=%D0%A4%D0%98%D0%97%D0%9C%D0%90%D0%A2">ФИЗМАТ</a></div>
                                                                        </div>
                                                                    </div>
                                                                </div><div class="profile_info_block clear_fix">
                                                                    <div class="profile_info_header_wrap">
                                                                        <a class="profile_info_edit" href="/edit?act=personal">Редактировать</a>
                                                                        <span class="profile_info_header">Жизненная позиция</span>
                                                                    </div>
                                                                    <div class="profile_info">
                                                                        <div class="clear_fix profile_info_row ">
                                                                            <div class="label fl_l">Полит. предпочтения:</div>
                                                                            <div class="labeled">Умеренные</div>
                                                                        </div><div class="clear_fix profile_info_row ">
                                                                            <div class="label fl_l">Главное в жизни:</div>
                                                                            <div class="labeled"><a href="/search?c[name]=0&c[section]=people&c[personal_priority]=3">Развлечения и отдых</a></div>
                                                                        </div><div class="clear_fix profile_info_row ">
                                                                            <div class="label fl_l">Главное в людях:</div>
                                                                            <div class="labeled"><a href="/search?c[name]=0&c[section]=people&c[people_priority]=4">Власть и богатство</a></div>
                                                                        </div><div class="clear_fix profile_info_row ">
                                                                            <div class="label fl_l">Отн. к курению:</div>
                                                                            <div class="labeled"><a href="/search?c[name]=0&c[section]=people&c[smoking]=3">Компромиссное</a></div>
                                                                        </div><div class="clear_fix profile_info_row ">
                                                                            <div class="label fl_l">Отн. к алкоголю:</div>
                                                                            <div class="labeled"><a href="/search?c[name]=0&c[section]=people&c[alcohol]=4">Нейтральное</a></div>
                                                                        </div><div class="clear_fix profile_info_row ">
                                                                            <div class="label fl_l">Вдохновляют:</div>
                                                                            <div class="labeled"><a href="/search?c[name]=0&c[section]=people&c[q]=sex%20drugs%20%26amp%3B%20rock%26%2339%3Bn%26%2339%3Broll">sex drugs &amp; rock&#39;n&#39;roll</a>, <a href="/search?c[name]=0&c[section]=people&c[q]=%D0%BD%D0%B0%20%D1%81%D0%B0%D0%BC%D0%BE%D0%BC%20%D0%B4%D0%B5%D0%BB%D0%B5%20%D0%B0%D0%BB%D0%BA%D0%BE%D0%B3%D0%BE%D0%BB%D1%8C%29%290%29">на самом деле алкоголь))0)</a></div>
                                                                        </div>
                                                                    </div>
                                                                </div><div class="profile_info_block clear_fix">
                                                                    <div class="profile_info_header_wrap">
                                                                        <a class="profile_info_edit" href="/edit?act=interests">Редактировать</a>
                                                                        <span class="profile_info_header">Личная информация</span>
                                                                    </div>
                                                                    <div class="profile_info">
                                                                        <div class="clear_fix profile_info_row ">
                                                                            <div class="label fl_l">Интересы:</div>
                                                                            <div class="labeled"><a href="/search?c[name]=0&c[section]=people&c[q]=Diving%3B%20Books%3B%20PC%20Games%3B">Diving; Books; PC Games;</a></div>
                                                                        </div><div class="clear_fix profile_info_row ">
                                                                            <div class="label fl_l">Любимая музыка:</div>
                                                                            <div class="labeled"><a href="/search?c[name]=0&c[section]=audio&c[q]=Check%20Spotify">Check Spotify</a></div>
                                                                        </div><div class="clear_fix profile_info_row ">
                                                                            <div class="label fl_l">Любимые фильмы:</div>
                                                                            <div class="labeled"><a href="/search?c[name]=0&c[section]=video&c[q]=%23Anime">#Anime</a></div>
                                                                        </div><div class="clear_fix profile_info_row ">
                                                                            <div class="label fl_l">Любимые книги:</div>
                                                                            <div class="labeled"><a href="/search?c[name]=0&c[section]=people&c[q]=Dungeon%20Defence%20%231%20Tales%20of%20Demons%20and%20Gods%20%232%20Reincarnator%20%20...%20%20Korean%26gt%3BChinese%26gt%3BJapanese%20Novel%20manga">Dungeon Defence #1 Tales of Demons and Gods #2 Reincarnator  ...  Korean&gt;Chinese&gt;Japanese Novel manga</a></div>
                                                                        </div><div class="clear_fix profile_info_row ">
                                                                            <div class="label fl_l">Любимые игры:</div>
                                                                            <div class="labeled"><a href="/search?c[name]=0&c[section]=people&c[q]=%23dota2">#dota2</a>, <a href="/search?c[name]=0&c[section]=people&c[q]=%23osu">#osu</a>, <a href="/search?c[name]=0&c[section]=people&c[q]=%23csgo">#csgo</a></div>
                                                                        </div><div class="clear_fix profile_info_row ">
                                                                            <div class="label fl_l">Любимые цитаты:</div>
                                                                            <div class="labeled">&quot;Тян и Чулочки лучший паблик вк&quot;))0)</div>
                                                                        </div><div class="clear_fix profile_info_row ">
                                                                            <div class="label fl_l">О себе:</div>
                                                                            <div class="labeled">ебашу</div>
                                                                        </div><div class="clear_fix profile_info_row ">
                                                                            <div class="label fl_l"><a href="/groups?id=137655984" class="profile_label_link" onclick="return nav.go(this, event, {noback: false})">Группы:</a></div>
                                                                            <div class="labeled"><a href="/eugeneloveyou">РАЙЗ</a>, <a href="/avulovstreams">экзистенциальные стримы авулова</a>, <a href="/visualnovel_ru">Visual Novel RUS Новости визуальных новелл</a>, <a href="/full_hent">Fullhent</a>, <a href="/4oy3ehpic">4oy3eH&#39;s FunGodxxPicz</a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div></div><div class="counts_module"></div>
                                                        <?php endif;?>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div></div>
                            </div>
                        </div></div>
                </div>


            </div>


</body>

</html>