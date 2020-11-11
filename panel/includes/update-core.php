<?php
/**
 * WordPress core upgrade functionality.
 *
 * @package WordPress
 * @subpackage Administration
 * @since 2.7.0
 */

/**
 * Stores files to be deleted.
 *
 * @since 2.7.0
 *
 * @global array $_old_files
 * @var array
 * @name $_old_files
 */
global $_old_files;

$_old_files = array(
	// 2.0
	'panel/import-b2.php',
	'panel/import-blogger.php',
	'panel/import-greymatter.php',
	'panel/import-livejournal.php',
	'panel/import-mt.php',
	'panel/import-rss.php',
	'panel/import-textpattern.php',
	'panel/quicktags.js',
	'wp-images/fade-butt.png',
	'wp-images/get-firefox.png',
	'wp-images/header-shadow.png',
	'wp-images/smilies',
	'wp-images/wp-small.png',
	'wp-images/wpminilogo.png',
	'wp.php',
	// 2.0.8
	'vendor/js/tinymce/plugins/inlinepopups/readme.txt',
	// 2.1
	'panel/edit-form-ajax-cat.php',
	'panel/execute-pings.php',
	'panel/inline-uploading.php',
	'panel/link-categories.php',
	'panel/list-manipulation.js',
	'panel/list-manipulation.php',
	'vendor/comment-functions.php',
	'vendor/feed-functions.php',
	'vendor/functions-compat.php',
	'vendor/functions-formatting.php',
	'vendor/functions-post.php',
	'vendor/js/dbx-key.js',
	'vendor/js/tinymce/plugins/autosave/langs/cs.js',
	'vendor/js/tinymce/plugins/autosave/langs/sv.js',
	'vendor/links.php',
	'vendor/pluggable-functions.php',
	'vendor/template-functions-author.php',
	'vendor/template-functions-category.php',
	'vendor/template-functions-general.php',
	'vendor/template-functions-links.php',
	'vendor/template-functions-post.php',
	'vendor/wp-l10n.php',
	// 2.2
	'panel/cat-js.php',
	'panel/import/b2.php',
	'vendor/js/autosave-js.php',
	'vendor/js/list-manipulation-js.php',
	'vendor/js/wp-ajax-js.php',
	// 2.3
	'panel/admin-db.php',
	'panel/cat.js',
	'panel/categories.js',
	'panel/custom-fields.js',
	'panel/dbx-admin-key.js',
	'panel/edit-comments.js',
	'panel/install-rtl.css',
	'panel/install.css',
	'panel/upgrade-schema.php',
	'panel/upload-functions.php',
	'panel/upload-rtl.css',
	'panel/upload.css',
	'panel/upload.js',
	'panel/users.js',
	'panel/widgets-rtl.css',
	'panel/widgets.css',
	'panel/xfn.js',
	'vendor/js/tinymce/license.html',
	// 2.5
	'panel/css/upload.css',
	'panel/images/box-bg-left.gif',
	'panel/images/box-bg-right.gif',
	'panel/images/box-bg.gif',
	'panel/images/box-butt-left.gif',
	'panel/images/box-butt-right.gif',
	'panel/images/box-butt.gif',
	'panel/images/box-head-left.gif',
	'panel/images/box-head-right.gif',
	'panel/images/box-head.gif',
	'panel/images/heading-bg.gif',
	'panel/images/login-bkg-bottom.gif',
	'panel/images/login-bkg-tile.gif',
	'panel/images/notice.gif',
	'panel/images/toggle.gif',
	'panel/includes/upload.php',
	'panel/js/dbx-admin-key.js',
	'panel/js/link-cat.js',
	'panel/profile-update.php',
	'panel/templates.php',
	'vendor/images/wlw/WpComments.png',
	'vendor/images/wlw/WpIcon.png',
	'vendor/images/wlw/WpWatermark.png',
	'vendor/js/dbx.js',
	'vendor/js/fat.js',
	'vendor/js/list-manipulation.js',
	'vendor/js/tinymce/langs/en.js',
	'vendor/js/tinymce/plugins/autosave/editor_plugin_src.js',
	'vendor/js/tinymce/plugins/autosave/langs',
	'vendor/js/tinymce/plugins/directionality/images',
	'vendor/js/tinymce/plugins/directionality/langs',
	'vendor/js/tinymce/plugins/inlinepopups/css',
	'vendor/js/tinymce/plugins/inlinepopups/images',
	'vendor/js/tinymce/plugins/inlinepopups/jscripts',
	'vendor/js/tinymce/plugins/paste/images',
	'vendor/js/tinymce/plugins/paste/jscripts',
	'vendor/js/tinymce/plugins/paste/langs',
	'vendor/js/tinymce/plugins/spellchecker/classes/HttpClient.class.php',
	'vendor/js/tinymce/plugins/spellchecker/classes/TinyGoogleSpell.class.php',
	'vendor/js/tinymce/plugins/spellchecker/classes/TinyPspell.class.php',
	'vendor/js/tinymce/plugins/spellchecker/classes/TinyPspellShell.class.php',
	'vendor/js/tinymce/plugins/spellchecker/css/spellchecker.css',
	'vendor/js/tinymce/plugins/spellchecker/images',
	'vendor/js/tinymce/plugins/spellchecker/langs',
	'vendor/js/tinymce/plugins/spellchecker/tinyspell.php',
	'vendor/js/tinymce/plugins/wordpress/images',
	'vendor/js/tinymce/plugins/wordpress/langs',
	'vendor/js/tinymce/plugins/wordpress/wordpress.css',
	'vendor/js/tinymce/plugins/wphelp',
	'vendor/js/tinymce/themes/advanced/css',
	'vendor/js/tinymce/themes/advanced/images',
	'vendor/js/tinymce/themes/advanced/jscripts',
	'vendor/js/tinymce/themes/advanced/langs',
	// 2.5.1
	'vendor/js/tinymce/tiny_mce_gzip.php',
	// 2.6
	'panel/bookmarklet.php',
	'vendor/js/jquery/jquery.dimensions.min.js',
	'vendor/js/tinymce/plugins/wordpress/popups.css',
	'vendor/js/wp-ajax.js',
	// 2.7
	'panel/css/press-this-ie-rtl.css',
	'panel/css/press-this-ie.css',
	'panel/css/upload-rtl.css',
	'panel/edit-form.php',
	'panel/images/comment-pill.gif',
	'panel/images/comment-stalk-classic.gif',
	'panel/images/comment-stalk-fresh.gif',
	'panel/images/comment-stalk-rtl.gif',
	'panel/images/del.png',
	'panel/images/gear.png',
	'panel/images/media-button-gallery.gif',
	'panel/images/media-buttons.gif',
	'panel/images/postbox-bg.gif',
	'panel/images/tab.png',
	'panel/images/tail.gif',
	'panel/js/forms.js',
	'panel/js/upload.js',
	'panel/link-import.php',
	'vendor/images/audio.png',
	'vendor/images/css.png',
	'vendor/images/default.png',
	'vendor/images/doc.png',
	'vendor/images/exe.png',
	'vendor/images/html.png',
	'vendor/images/js.png',
	'vendor/images/pdf.png',
	'vendor/images/swf.png',
	'vendor/images/tar.png',
	'vendor/images/text.png',
	'vendor/images/video.png',
	'vendor/images/zip.png',
	'vendor/js/tinymce/tiny_mce_config.php',
	'vendor/js/tinymce/tiny_mce_ext.js',
	// 2.8
	'panel/js/users.js',
	'vendor/js/swfupload/plugins/swfupload.documentready.js',
	'vendor/js/swfupload/plugins/swfupload.graceful_degradation.js',
	'vendor/js/swfupload/swfupload_f9.swf',
	'vendor/js/tinymce/plugins/autosave',
	'vendor/js/tinymce/plugins/paste/css',
	'vendor/js/tinymce/utils/mclayer.js',
	'vendor/js/tinymce/wordpress.css',
	// 2.8.5
	'panel/import/btt.php',
	'panel/import/jkw.php',
	// 2.9
	'panel/js/page.dev.js',
	'panel/js/page.js',
	'panel/js/set-post-thumbnail-handler.dev.js',
	'panel/js/set-post-thumbnail-handler.js',
	'panel/js/slug.dev.js',
	'panel/js/slug.js',
	'vendor/gettext.php',
	'vendor/js/tinymce/plugins/wordpress/js',
	'vendor/streams.php',
	// MU
	'README.txt',
	'htaccess.dist',
	'index-install.php',
	'panel/css/mu-rtl.css',
	'panel/css/mu.css',
	'panel/images/site-admin.png',
	'panel/includes/mu.php',
	'panel/wpmu-admin.php',
	'panel/wpmu-blogs.php',
	'panel/wpmu-edit.php',
	'panel/wpmu-options.php',
	'panel/wpmu-themes.php',
	'panel/wpmu-upgrade-site.php',
	'panel/wpmu-users.php',
	'vendor/images/wordpress-mu.png',
	'vendor/wpmu-default-filters.php',
	'vendor/wpmu-functions.php',
	'wpmu-settings.php',
	// 3.0
	'panel/categories.php',
	'panel/edit-category-form.php',
	'panel/edit-page-form.php',
	'panel/edit-pages.php',
	'panel/images/admin-header-footer.png',
	'panel/images/browse-happy.gif',
	'panel/images/ico-add.png',
	'panel/images/ico-close.png',
	'panel/images/ico-edit.png',
	'panel/images/ico-viewpage.png',
	'panel/images/fav-top.png',
	'panel/images/screen-options-left.gif',
	'panel/images/wp-logo-vs.gif',
	'panel/images/wp-logo.gif',
	'panel/import',
	'panel/js/wp-gears.dev.js',
	'panel/js/wp-gears.js',
	'panel/options-misc.php',
	'panel/page-new.php',
	'panel/page.php',
	'panel/rtl.css',
	'panel/rtl.dev.css',
	'panel/update-links.php',
	'panel/panel.css',
	'panel/panel.dev.css',
	'vendor/js/codepress',
	'vendor/js/codepress/engines/khtml.js',
	'vendor/js/codepress/engines/older.js',
	'vendor/js/jquery/autocomplete.dev.js',
	'vendor/js/jquery/autocomplete.js',
	'vendor/js/jquery/interface.js',
	'vendor/js/scriptaculous/prototype.js',
	// Following file added back in 5.1, see #45645.
	//'vendor/js/tinymce/wp-tinymce.js',
	// 3.1
	'panel/edit-attachment-rows.php',
	'panel/edit-link-categories.php',
	'panel/edit-link-category-form.php',
	'panel/edit-post-rows.php',
	'panel/images/button-grad-active-vs.png',
	'panel/images/button-grad-vs.png',
	'panel/images/fav-arrow-vs-rtl.gif',
	'panel/images/fav-arrow-vs.gif',
	'panel/images/fav-top-vs.gif',
	'panel/images/list-vs.png',
	'panel/images/screen-options-right-up.gif',
	'panel/images/screen-options-right.gif',
	'panel/images/visit-site-button-grad-vs.gif',
	'panel/images/visit-site-button-grad.gif',
	'panel/link-category.php',
	'panel/sidebar.php',
	'vendor/classes.php',
	'vendor/js/tinymce/blank.htm',
	'vendor/js/tinymce/plugins/media/css/content.css',
	'vendor/js/tinymce/plugins/media/img',
	'vendor/js/tinymce/plugins/safari',
	// 3.2
	'panel/images/logo-login.gif',
	'panel/images/star.gif',
	'panel/js/list-table.dev.js',
	'panel/js/list-table.js',
	'vendor/default-embeds.php',
	'vendor/js/tinymce/plugins/wordpress/img/help.gif',
	'vendor/js/tinymce/plugins/wordpress/img/more.gif',
	'vendor/js/tinymce/plugins/wordpress/img/toolbars.gif',
	'vendor/js/tinymce/themes/advanced/img/fm.gif',
	'vendor/js/tinymce/themes/advanced/img/sflogo.png',
	// 3.3
	'panel/css/colors-classic-rtl.css',
	'panel/css/colors-classic-rtl.dev.css',
	'panel/css/colors-fresh-rtl.css',
	'panel/css/colors-fresh-rtl.dev.css',
	'panel/css/dashboard-rtl.dev.css',
	'panel/css/dashboard.dev.css',
	'panel/css/global-rtl.css',
	'panel/css/global-rtl.dev.css',
	'panel/css/global.css',
	'panel/css/global.dev.css',
	'panel/css/install-rtl.dev.css',
	'panel/css/login-rtl.dev.css',
	'panel/css/login.dev.css',
	'panel/css/ms.css',
	'panel/css/ms.dev.css',
	'panel/css/nav-menu-rtl.css',
	'panel/css/nav-menu-rtl.dev.css',
	'panel/css/nav-menu.css',
	'panel/css/nav-menu.dev.css',
	'panel/css/plugin-install-rtl.css',
	'panel/css/plugin-install-rtl.dev.css',
	'panel/css/plugin-install.css',
	'panel/css/plugin-install.dev.css',
	'panel/css/press-this-rtl.dev.css',
	'panel/css/press-this.dev.css',
	'panel/css/theme-editor-rtl.css',
	'panel/css/theme-editor-rtl.dev.css',
	'panel/css/theme-editor.css',
	'panel/css/theme-editor.dev.css',
	'panel/css/theme-install-rtl.css',
	'panel/css/theme-install-rtl.dev.css',
	'panel/css/theme-install.css',
	'panel/css/theme-install.dev.css',
	'panel/css/widgets-rtl.dev.css',
	'panel/css/widgets.dev.css',
	'panel/includes/internal-linking.php',
	'vendor/images/admin-bar-sprite-rtl.png',
	'vendor/js/jquery/ui.button.js',
	'vendor/js/jquery/ui.core.js',
	'vendor/js/jquery/ui.dialog.js',
	'vendor/js/jquery/ui.draggable.js',
	'vendor/js/jquery/ui.droppable.js',
	'vendor/js/jquery/ui.mouse.js',
	'vendor/js/jquery/ui.position.js',
	'vendor/js/jquery/ui.resizable.js',
	'vendor/js/jquery/ui.selectable.js',
	'vendor/js/jquery/ui.sortable.js',
	'vendor/js/jquery/ui.tabs.js',
	'vendor/js/jquery/ui.widget.js',
	'vendor/js/l10n.dev.js',
	'vendor/js/l10n.js',
	'vendor/js/tinymce/plugins/wplink/css',
	'vendor/js/tinymce/plugins/wplink/img',
	'vendor/js/tinymce/plugins/wplink/js',
	'vendor/js/tinymce/themes/advanced/img/wpicons.png',
	'vendor/js/tinymce/themes/advanced/skins/wp_theme/img/butt2.png',
	'vendor/js/tinymce/themes/advanced/skins/wp_theme/img/button_bg.png',
	'vendor/js/tinymce/themes/advanced/skins/wp_theme/img/down_arrow.gif',
	'vendor/js/tinymce/themes/advanced/skins/wp_theme/img/fade-butt.png',
	'vendor/js/tinymce/themes/advanced/skins/wp_theme/img/separator.gif',
	// Don't delete, yet: 'wp-rss.php',
	// Don't delete, yet: 'wp-rdf.php',
	// Don't delete, yet: 'wp-rss2.php',
	// Don't delete, yet: 'wp-commentsrss2.php',
	// Don't delete, yet: 'wp-atom.php',
	// Don't delete, yet: 'wp-feed.php',
	// 3.4
	'panel/images/gray-star.png',
	'panel/images/logo-login.png',
	'panel/images/star.png',
	'panel/index-extra.php',
	'panel/network/index-extra.php',
	'panel/user/index-extra.php',
	'panel/images/screenshots/admin-flyouts.png',
	'panel/images/screenshots/coediting.png',
	'panel/images/screenshots/drag-and-drop.png',
	'panel/images/screenshots/help-screen.png',
	'panel/images/screenshots/media-icon.png',
	'panel/images/screenshots/new-feature-pointer.png',
	'panel/images/screenshots/welcome-screen.png',
	'vendor/css/editor-buttons.css',
	'vendor/css/editor-buttons.dev.css',
	'vendor/js/tinymce/plugins/paste/blank.htm',
	'vendor/js/tinymce/plugins/wordpress/css',
	'vendor/js/tinymce/plugins/wordpress/editor_plugin.dev.js',
	'vendor/js/tinymce/plugins/wordpress/img/embedded.png',
	'vendor/js/tinymce/plugins/wordpress/img/more_bug.gif',
	'vendor/js/tinymce/plugins/wordpress/img/page_bug.gif',
	'vendor/js/tinymce/plugins/wpdialogs/editor_plugin.dev.js',
	'vendor/js/tinymce/plugins/wpeditimage/css/editimage-rtl.css',
	'vendor/js/tinymce/plugins/wpeditimage/editor_plugin.dev.js',
	'vendor/js/tinymce/plugins/wpfullscreen/editor_plugin.dev.js',
	'vendor/js/tinymce/plugins/wpgallery/editor_plugin.dev.js',
	'vendor/js/tinymce/plugins/wpgallery/img/gallery.png',
	'vendor/js/tinymce/plugins/wplink/editor_plugin.dev.js',
	// Don't delete, yet: 'wp-pass.php',
	// Don't delete, yet: 'wp-register.php',
	// 3.5
	'panel/gears-manifest.php',
	'panel/includes/manifest.php',
	'panel/images/archive-link.png',
	'panel/images/blue-grad.png',
	'panel/images/button-grad-active.png',
	'panel/images/button-grad.png',
	'panel/images/ed-bg-vs.gif',
	'panel/images/ed-bg.gif',
	'panel/images/fade-butt.png',
	'panel/images/fav-arrow-rtl.gif',
	'panel/images/fav-arrow.gif',
	'panel/images/fav-vs.png',
	'panel/images/fav.png',
	'panel/images/gray-grad.png',
	'panel/images/loading-publish.gif',
	'panel/images/logo-ghost.png',
	'panel/images/logo.gif',
	'panel/images/menu-arrow-frame-rtl.png',
	'panel/images/menu-arrow-frame.png',
	'panel/images/menu-arrows.gif',
	'panel/images/menu-bits-rtl-vs.gif',
	'panel/images/menu-bits-rtl.gif',
	'panel/images/menu-bits-vs.gif',
	'panel/images/menu-bits.gif',
	'panel/images/menu-dark-rtl-vs.gif',
	'panel/images/menu-dark-rtl.gif',
	'panel/images/menu-dark-vs.gif',
	'panel/images/menu-dark.gif',
	'panel/images/required.gif',
	'panel/images/screen-options-toggle-vs.gif',
	'panel/images/screen-options-toggle.gif',
	'panel/images/toggle-arrow-rtl.gif',
	'panel/images/toggle-arrow.gif',
	'panel/images/upload-classic.png',
	'panel/images/upload-fresh.png',
	'panel/images/white-grad-active.png',
	'panel/images/white-grad.png',
	'panel/images/widgets-arrow-vs.gif',
	'panel/images/widgets-arrow.gif',
	'panel/images/wpspin_dark.gif',
	'vendor/images/upload.png',
	'vendor/js/prototype.js',
	'vendor/js/scriptaculous',
	'panel/css/panel-rtl.dev.css',
	'panel/css/panel.dev.css',
	'panel/css/media-rtl.dev.css',
	'panel/css/media.dev.css',
	'panel/css/colors-classic.dev.css',
	'panel/css/customize-controls-rtl.dev.css',
	'panel/css/customize-controls.dev.css',
	'panel/css/ie-rtl.dev.css',
	'panel/css/ie.dev.css',
	'panel/css/install.dev.css',
	'panel/css/colors-fresh.dev.css',
	'vendor/js/customize-base.dev.js',
	'vendor/js/json2.dev.js',
	'vendor/js/comment-reply.dev.js',
	'vendor/js/customize-preview.dev.js',
	'vendor/js/wplink.dev.js',
	'vendor/js/tw-sack.dev.js',
	'vendor/js/wp-list-revisions.dev.js',
	'vendor/js/autosave.dev.js',
	'vendor/js/admin-bar.dev.js',
	'vendor/js/quicktags.dev.js',
	'vendor/js/wp-ajax-response.dev.js',
	'vendor/js/wp-pointer.dev.js',
	'vendor/js/hoverIntent.dev.js',
	'vendor/js/colorpicker.dev.js',
	'vendor/js/wp-lists.dev.js',
	'vendor/js/customize-loader.dev.js',
	'vendor/js/jquery/jquery.table-hotkeys.dev.js',
	'vendor/js/jquery/jquery.color.dev.js',
	'vendor/js/jquery/jquery.color.js',
	'vendor/js/jquery/jquery.hotkeys.dev.js',
	'vendor/js/jquery/jquery.form.dev.js',
	'vendor/js/jquery/suggest.dev.js',
	'panel/js/xfn.dev.js',
	'panel/js/set-post-thumbnail.dev.js',
	'panel/js/comment.dev.js',
	'panel/js/theme.dev.js',
	'panel/js/cat.dev.js',
	'panel/js/password-strength-meter.dev.js',
	'panel/js/user-profile.dev.js',
	'panel/js/theme-preview.dev.js',
	'panel/js/post.dev.js',
	'panel/js/media-upload.dev.js',
	'panel/js/word-count.dev.js',
	'panel/js/plugin-install.dev.js',
	'panel/js/edit-comments.dev.js',
	'panel/js/media-gallery.dev.js',
	'panel/js/custom-fields.dev.js',
	'panel/js/custom-background.dev.js',
	'panel/js/common.dev.js',
	'panel/js/inline-edit-tax.dev.js',
	'panel/js/gallery.dev.js',
	'panel/js/utils.dev.js',
	'panel/js/widgets.dev.js',
	'panel/js/wp-fullscreen.dev.js',
	'panel/js/nav-menu.dev.js',
	'panel/js/dashboard.dev.js',
	'panel/js/link.dev.js',
	'panel/js/user-suggest.dev.js',
	'panel/js/postbox.dev.js',
	'panel/js/tags.dev.js',
	'panel/js/image-edit.dev.js',
	'panel/js/media.dev.js',
	'panel/js/customize-controls.dev.js',
	'panel/js/inline-edit-post.dev.js',
	'panel/js/categories.dev.js',
	'panel/js/editor.dev.js',
	'vendor/js/tinymce/plugins/wpeditimage/js/editimage.dev.js',
	'vendor/js/tinymce/plugins/wpdialogs/js/popup.dev.js',
	'vendor/js/tinymce/plugins/wpdialogs/js/wpdialog.dev.js',
	'vendor/js/plupload/handlers.dev.js',
	'vendor/js/plupload/wp-plupload.dev.js',
	'vendor/js/swfupload/handlers.dev.js',
	'vendor/js/jcrop/jquery.Jcrop.dev.js',
	'vendor/js/jcrop/jquery.Jcrop.js',
	'vendor/js/jcrop/jquery.Jcrop.css',
	'vendor/js/imgareaselect/jquery.imgareaselect.dev.js',
	'vendor/css/wp-pointer.dev.css',
	'vendor/css/editor.dev.css',
	'vendor/css/jquery-ui-dialog.dev.css',
	'vendor/css/admin-bar-rtl.dev.css',
	'vendor/css/admin-bar.dev.css',
	'vendor/js/jquery/ui/jquery.effects.clip.min.js',
	'vendor/js/jquery/ui/jquery.effects.scale.min.js',
	'vendor/js/jquery/ui/jquery.effects.blind.min.js',
	'vendor/js/jquery/ui/jquery.effects.core.min.js',
	'vendor/js/jquery/ui/jquery.effects.shake.min.js',
	'vendor/js/jquery/ui/jquery.effects.fade.min.js',
	'vendor/js/jquery/ui/jquery.effects.explode.min.js',
	'vendor/js/jquery/ui/jquery.effects.slide.min.js',
	'vendor/js/jquery/ui/jquery.effects.drop.min.js',
	'vendor/js/jquery/ui/jquery.effects.highlight.min.js',
	'vendor/js/jquery/ui/jquery.effects.bounce.min.js',
	'vendor/js/jquery/ui/jquery.effects.pulsate.min.js',
	'vendor/js/jquery/ui/jquery.effects.transfer.min.js',
	'vendor/js/jquery/ui/jquery.effects.fold.min.js',
	'panel/images/screenshots/captions-1.png',
	'panel/images/screenshots/captions-2.png',
	'panel/images/screenshots/flex-header-1.png',
	'panel/images/screenshots/flex-header-2.png',
	'panel/images/screenshots/flex-header-3.png',
	'panel/images/screenshots/flex-header-media-library.png',
	'panel/images/screenshots/theme-customizer.png',
	'panel/images/screenshots/twitter-embed-1.png',
	'panel/images/screenshots/twitter-embed-2.png',
	'panel/js/utils.js',
	// Added back in 5.3 [45448], see #43895.
	// 'panel/options-privacy.php',
	'wp-app.php',
	'vendor/class-wp-atom-server.php',
	'vendor/js/tinymce/themes/advanced/skins/wp_theme/ui.css',
	// 3.5.2
	'vendor/js/swfupload/swfupload-all.js',
	// 3.6
	'panel/js/revisions-js.php',
	'panel/images/screenshots',
	'panel/js/categories.js',
	'panel/js/categories.min.js',
	'panel/js/custom-fields.js',
	'panel/js/custom-fields.min.js',
	// 3.7
	'panel/js/cat.js',
	'panel/js/cat.min.js',
	'vendor/js/tinymce/plugins/wpeditimage/js/editimage.min.js',
	// 3.8
	'vendor/js/tinymce/themes/advanced/skins/wp_theme/img/page_bug.gif',
	'vendor/js/tinymce/themes/advanced/skins/wp_theme/img/more_bug.gif',
	'vendor/js/thickbox/tb-close-2x.png',
	'vendor/js/thickbox/tb-close.png',
	'vendor/images/wpmini-blue-2x.png',
	'vendor/images/wpmini-blue.png',
	'panel/css/colors-fresh.css',
	'panel/css/colors-classic.css',
	'panel/css/colors-fresh.min.css',
	'panel/css/colors-classic.min.css',
	'panel/js/about.min.js',
	'panel/js/about.js',
	'panel/images/arrows-dark-vs-2x.png',
	'panel/images/wp-logo-vs.png',
	'panel/images/arrows-dark-vs.png',
	'panel/images/wp-logo.png',
	'panel/images/arrows-pr.png',
	'panel/images/arrows-dark.png',
	'panel/images/press-this.png',
	'panel/images/press-this-2x.png',
	'panel/images/arrows-vs-2x.png',
	'panel/images/welcome-icons.png',
	'panel/images/wp-logo-2x.png',
	'panel/images/stars-rtl-2x.png',
	'panel/images/arrows-dark-2x.png',
	'panel/images/arrows-pr-2x.png',
	'panel/images/menu-shadow-rtl.png',
	'panel/images/arrows-vs.png',
	'panel/images/about-search-2x.png',
	'panel/images/bubble_bg-rtl-2x.gif',
	'panel/images/wp-badge-2x.png',
	'panel/images/wordpress-logo-2x.png',
	'panel/images/bubble_bg-rtl.gif',
	'panel/images/wp-badge.png',
	'panel/images/menu-shadow.png',
	'panel/images/about-globe-2x.png',
	'panel/images/welcome-icons-2x.png',
	'panel/images/stars-rtl.png',
	'panel/images/wp-logo-vs-2x.png',
	'panel/images/about-updates-2x.png',
	// 3.9
	'panel/css/colors.css',
	'panel/css/colors.min.css',
	'panel/css/colors-rtl.css',
	'panel/css/colors-rtl.min.css',
	// Following files added back in 4.5, see #36083.
	// 'panel/css/media-rtl.min.css',
	// 'panel/css/media.min.css',
	// 'panel/css/farbtastic-rtl.min.css',
	'panel/images/lock-2x.png',
	'panel/images/lock.png',
	'panel/js/theme-preview.js',
	'panel/js/theme-install.min.js',
	'panel/js/theme-install.js',
	'panel/js/theme-preview.min.js',
	'vendor/js/plupload/plupload.html4.js',
	'vendor/js/plupload/plupload.html5.js',
	'vendor/js/plupload/changelog.txt',
	'vendor/js/plupload/plupload.silverlight.js',
	'vendor/js/plupload/plupload.flash.js',
	// Added back in 4.9 [41328], see #41755.
	// 'vendor/js/plupload/plupload.js',
	'vendor/js/tinymce/plugins/spellchecker',
	'vendor/js/tinymce/plugins/inlinepopups',
	'vendor/js/tinymce/plugins/media/js',
	'vendor/js/tinymce/plugins/media/css',
	'vendor/js/tinymce/plugins/wordpress/img',
	'vendor/js/tinymce/plugins/wpdialogs/js',
	'vendor/js/tinymce/plugins/wpeditimage/img',
	'vendor/js/tinymce/plugins/wpeditimage/js',
	'vendor/js/tinymce/plugins/wpeditimage/css',
	'vendor/js/tinymce/plugins/wpgallery/img',
	'vendor/js/tinymce/plugins/wpfullscreen/css',
	'vendor/js/tinymce/plugins/paste/js',
	'vendor/js/tinymce/themes/advanced',
	'vendor/js/tinymce/tiny_mce.js',
	'vendor/js/tinymce/mark_loaded_src.js',
	'vendor/js/tinymce/wp-tinymce-schema.js',
	'vendor/js/tinymce/plugins/media/editor_plugin.js',
	'vendor/js/tinymce/plugins/media/editor_plugin_src.js',
	'vendor/js/tinymce/plugins/media/media.htm',
	'vendor/js/tinymce/plugins/wpview/editor_plugin_src.js',
	'vendor/js/tinymce/plugins/wpview/editor_plugin.js',
	'vendor/js/tinymce/plugins/directionality/editor_plugin.js',
	'vendor/js/tinymce/plugins/directionality/editor_plugin_src.js',
	'vendor/js/tinymce/plugins/wordpress/editor_plugin.js',
	'vendor/js/tinymce/plugins/wordpress/editor_plugin_src.js',
	'vendor/js/tinymce/plugins/wpdialogs/editor_plugin_src.js',
	'vendor/js/tinymce/plugins/wpdialogs/editor_plugin.js',
	'vendor/js/tinymce/plugins/wpeditimage/editimage.html',
	'vendor/js/tinymce/plugins/wpeditimage/editor_plugin.js',
	'vendor/js/tinymce/plugins/wpeditimage/editor_plugin_src.js',
	'vendor/js/tinymce/plugins/fullscreen/editor_plugin_src.js',
	'vendor/js/tinymce/plugins/fullscreen/fullscreen.htm',
	'vendor/js/tinymce/plugins/fullscreen/editor_plugin.js',
	'vendor/js/tinymce/plugins/wplink/editor_plugin_src.js',
	'vendor/js/tinymce/plugins/wplink/editor_plugin.js',
	'vendor/js/tinymce/plugins/wpgallery/editor_plugin_src.js',
	'vendor/js/tinymce/plugins/wpgallery/editor_plugin.js',
	'vendor/js/tinymce/plugins/tabfocus/editor_plugin.js',
	'vendor/js/tinymce/plugins/tabfocus/editor_plugin_src.js',
	'vendor/js/tinymce/plugins/wpfullscreen/editor_plugin.js',
	'vendor/js/tinymce/plugins/wpfullscreen/editor_plugin_src.js',
	'vendor/js/tinymce/plugins/paste/editor_plugin.js',
	'vendor/js/tinymce/plugins/paste/pasteword.htm',
	'vendor/js/tinymce/plugins/paste/editor_plugin_src.js',
	'vendor/js/tinymce/plugins/paste/pastetext.htm',
	'vendor/js/tinymce/langs/wp-langs.php',
	// 4.1
	'vendor/js/jquery/ui/jquery.ui.accordion.min.js',
	'vendor/js/jquery/ui/jquery.ui.autocomplete.min.js',
	'vendor/js/jquery/ui/jquery.ui.button.min.js',
	'vendor/js/jquery/ui/jquery.ui.core.min.js',
	'vendor/js/jquery/ui/jquery.ui.datepicker.min.js',
	'vendor/js/jquery/ui/jquery.ui.dialog.min.js',
	'vendor/js/jquery/ui/jquery.ui.draggable.min.js',
	'vendor/js/jquery/ui/jquery.ui.droppable.min.js',
	'vendor/js/jquery/ui/jquery.ui.effect-blind.min.js',
	'vendor/js/jquery/ui/jquery.ui.effect-bounce.min.js',
	'vendor/js/jquery/ui/jquery.ui.effect-clip.min.js',
	'vendor/js/jquery/ui/jquery.ui.effect-drop.min.js',
	'vendor/js/jquery/ui/jquery.ui.effect-explode.min.js',
	'vendor/js/jquery/ui/jquery.ui.effect-fade.min.js',
	'vendor/js/jquery/ui/jquery.ui.effect-fold.min.js',
	'vendor/js/jquery/ui/jquery.ui.effect-highlight.min.js',
	'vendor/js/jquery/ui/jquery.ui.effect-pulsate.min.js',
	'vendor/js/jquery/ui/jquery.ui.effect-scale.min.js',
	'vendor/js/jquery/ui/jquery.ui.effect-shake.min.js',
	'vendor/js/jquery/ui/jquery.ui.effect-slide.min.js',
	'vendor/js/jquery/ui/jquery.ui.effect-transfer.min.js',
	'vendor/js/jquery/ui/jquery.ui.effect.min.js',
	'vendor/js/jquery/ui/jquery.ui.menu.min.js',
	'vendor/js/jquery/ui/jquery.ui.mouse.min.js',
	'vendor/js/jquery/ui/jquery.ui.position.min.js',
	'vendor/js/jquery/ui/jquery.ui.progressbar.min.js',
	'vendor/js/jquery/ui/jquery.ui.resizable.min.js',
	'vendor/js/jquery/ui/jquery.ui.selectable.min.js',
	'vendor/js/jquery/ui/jquery.ui.slider.min.js',
	'vendor/js/jquery/ui/jquery.ui.sortable.min.js',
	'vendor/js/jquery/ui/jquery.ui.spinner.min.js',
	'vendor/js/jquery/ui/jquery.ui.tabs.min.js',
	'vendor/js/jquery/ui/jquery.ui.tooltip.min.js',
	'vendor/js/jquery/ui/jquery.ui.widget.min.js',
	'vendor/js/tinymce/skins/wordpress/images/dashicon-no-alt.png',
	// 4.3
	'panel/js/wp-fullscreen.js',
	'panel/js/wp-fullscreen.min.js',
	'vendor/js/tinymce/wp-mce-help.php',
	'vendor/js/tinymce/plugins/wpfullscreen',
	// 4.5
	'vendor/theme-compat/comments-popup.php',
	// 4.6
	'panel/includes/class-wp-automatic-upgrader.php', // Wrong file name, see #37628.
	// 4.8
	'vendor/js/tinymce/plugins/wpembed',
	'vendor/js/tinymce/plugins/media/moxieplayer.swf',
	'vendor/js/tinymce/skins/lightgray/fonts/readme.md',
	'vendor/js/tinymce/skins/lightgray/fonts/tinymce-small.json',
	'vendor/js/tinymce/skins/lightgray/fonts/tinymce.json',
	'vendor/js/tinymce/skins/lightgray/skin.ie7.min.css',
	// 4.9
	'panel/css/press-this-editor-rtl.css',
	'panel/css/press-this-editor-rtl.min.css',
	'panel/css/press-this-editor.css',
	'panel/css/press-this-editor.min.css',
	'panel/css/press-this-rtl.css',
	'panel/css/press-this-rtl.min.css',
	'panel/css/press-this.css',
	'panel/css/press-this.min.css',
	'panel/includes/class-wp-press-this.php',
	'panel/js/bookmarklet.js',
	'panel/js/bookmarklet.min.js',
	'panel/js/press-this.js',
	'panel/js/press-this.min.js',
	'vendor/js/mediaelement/background.png',
	'vendor/js/mediaelement/bigplay.png',
	'vendor/js/mediaelement/bigplay.svg',
	'vendor/js/mediaelement/controls.png',
	'vendor/js/mediaelement/controls.svg',
	'vendor/js/mediaelement/flashmediaelement.swf',
	'vendor/js/mediaelement/froogaloop.min.js',
	'vendor/js/mediaelement/jumpforward.png',
	'vendor/js/mediaelement/loading.gif',
	'vendor/js/mediaelement/silverlightmediaelement.xap',
	'vendor/js/mediaelement/skipback.png',
	'vendor/js/plupload/plupload.flash.swf',
	'vendor/js/plupload/plupload.full.min.js',
	'vendor/js/plupload/plupload.silverlight.xap',
	'vendor/js/swfupload/plugins',
	'vendor/js/swfupload/swfupload.swf',
	// 4.9.2
	'vendor/js/mediaelement/lang',
	'vendor/js/mediaelement/lang/ca.js',
	'vendor/js/mediaelement/lang/cs.js',
	'vendor/js/mediaelement/lang/de.js',
	'vendor/js/mediaelement/lang/es.js',
	'vendor/js/mediaelement/lang/fa.js',
	'vendor/js/mediaelement/lang/fr.js',
	'vendor/js/mediaelement/lang/hr.js',
	'vendor/js/mediaelement/lang/hu.js',
	'vendor/js/mediaelement/lang/it.js',
	'vendor/js/mediaelement/lang/ja.js',
	'vendor/js/mediaelement/lang/ko.js',
	'vendor/js/mediaelement/lang/nl.js',
	'vendor/js/mediaelement/lang/pl.js',
	'vendor/js/mediaelement/lang/pt.js',
	'vendor/js/mediaelement/lang/ro.js',
	'vendor/js/mediaelement/lang/ru.js',
	'vendor/js/mediaelement/lang/sk.js',
	'vendor/js/mediaelement/lang/sv.js',
	'vendor/js/mediaelement/lang/uk.js',
	'vendor/js/mediaelement/lang/zh-cn.js',
	'vendor/js/mediaelement/lang/zh.js',
	'vendor/js/mediaelement/mediaelement-flash-audio-ogg.swf',
	'vendor/js/mediaelement/mediaelement-flash-audio.swf',
	'vendor/js/mediaelement/mediaelement-flash-video-hls.swf',
	'vendor/js/mediaelement/mediaelement-flash-video-mdash.swf',
	'vendor/js/mediaelement/mediaelement-flash-video.swf',
	'vendor/js/mediaelement/renderers/dailymotion.js',
	'vendor/js/mediaelement/renderers/dailymotion.min.js',
	'vendor/js/mediaelement/renderers/facebook.js',
	'vendor/js/mediaelement/renderers/facebook.min.js',
	'vendor/js/mediaelement/renderers/soundcloud.js',
	'vendor/js/mediaelement/renderers/soundcloud.min.js',
	'vendor/js/mediaelement/renderers/twitch.js',
	'vendor/js/mediaelement/renderers/twitch.min.js',
	// 5.0
	'vendor/js/codemirror/jshint.js',
	// 5.1
	'vendor/random_compat/random_bytes_openssl.php',
	'vendor/js/tinymce/wp-tinymce.js.gz',
	// 5.3
	'vendor/js/wp-a11y.js',     // Moved to: vendor/js/dist/a11y.js
	'vendor/js/wp-a11y.min.js', // Moved to: vendor/js/dist/a11y.min.js
	// 5.4
	'panel/js/wp-fullscreen-stub.js',
	'panel/js/wp-fullscreen-stub.min.js',
	// 5.5
	'panel/css/ie.css',
	'panel/css/ie.min.css',
	'panel/css/ie-rtl.css',
	'panel/css/ie-rtl.min.css',
);

/**
 * Stores new files in wp-content to copy
 *
 * The contents of this array indicate any new bundled plugins/themes which
 * should be installed with the WordPress Upgrade. These items will not be
 * re-installed in future upgrades, this behaviour is controlled by the
 * introduced version present here being older than the current installed version.
 *
 * The content of this array should follow the following format:
 * Filename (relative to wp-content) => Introduced version
 * Directories should be noted by suffixing it with a trailing slash (/)
 *
 * @since 3.2.0
 * @since 4.7.0 New themes were not automatically installed for 4.4-4.6 on
 *              upgrade. New themes are now installed again. To disable new
 *              themes from being installed on upgrade, explicitly define
 *              CORE_UPGRADE_SKIP_NEW_BUNDLED as true.
 * @global array $_new_bundled_files
 * @var array
 * @name $_new_bundled_files
 */
global $_new_bundled_files;

$_new_bundled_files = array(
	'plugins/akismet/'        => '2.0',
	'themes/twentyten/'       => '3.0',
	'themes/twentyeleven/'    => '3.2',
	'themes/twentytwelve/'    => '3.5',
	'themes/twentythirteen/'  => '3.6',
	'themes/twentyfourteen/'  => '3.8',
	'themes/twentyfifteen/'   => '4.1',
	'themes/twentysixteen/'   => '4.4',
	'themes/twentyseventeen/' => '4.7',
	'themes/twentynineteen/'  => '5.0',
	'themes/twentytwenty/'    => '5.3',
);

/**
 * Upgrades the core of WordPress.
 *
 * This will create a .maintenance file at the base of the WordPress directory
 * to ensure that people can not access the web site, when the files are being
 * copied to their locations.
 *
 * The files in the `$_old_files` list will be removed and the new files
 * copied from the zip file after the database is upgraded.
 *
 * The files in the `$_new_bundled_files` list will be added to the installation
 * if the version is greater than or equal to the old version being upgraded.
 *
 * The steps for the upgrader for after the new release is downloaded and
 * unzipped is:
 *   1. Test unzipped location for select files to ensure that unzipped worked.
 *   2. Create the .maintenance file in current WordPress base.
 *   3. Copy new WordPress directory over old WordPress files.
 *   4. Upgrade WordPress to new version.
 *     4.1. Copy all files/folders other than wp-content
 *     4.2. Copy any language files to WP_LANG_DIR (which may differ from WP_CONTENT_DIR
 *     4.3. Copy any new bundled themes/plugins to their respective locations
 *   5. Delete new WordPress directory path.
 *   6. Delete .maintenance file.
 *   7. Remove old files.
 *   8. Delete 'update_core' option.
 *
 * There are several areas of failure. For instance if PHP times out before step
 * 6, then you will not be able to access any portion of your site. Also, since
 * the upgrade will not continue where it left off, you will not be able to
 * automatically remove old files and remove the 'update_core' option. This
 * isn't that bad.
 *
 * If the copy of the new WordPress over the old fails, then the worse is that
 * the new WordPress directory will remain.
 *
 * If it is assumed that every file will be copied over, including plugins and
 * themes, then if you edit the default theme, you should rename it, so that
 * your changes remain.
 *
 * @since 2.7.0
 *
 * @global WP_Filesystem_Base $wp_filesystem          WordPress filesystem subclass.
 * @global array              $_old_files
 * @global array              $_new_bundled_files
 * @global wpdb               $wpdb                   WordPress database abstraction object.
 * @global string             $wp_version
 * @global string             $required_php_version
 * @global string             $required_mysql_version
 *
 * @param string $from New release unzipped path.
 * @param string $to   Path to old WordPress installation.
 * @return string|WP_Error New WordPress version on success, WP_Error on failure.
 */
function update_core( $from, $to ) {
	global $wp_filesystem, $_old_files, $_new_bundled_files, $wpdb;

	set_time_limit( 300 );

	/**
	 * Filters feedback messages displayed during the core update process.
	 *
	 * The filter is first evaluated after the zip file for the latest version
	 * has been downloaded and unzipped. It is evaluated five more times during
	 * the process:
	 *
	 * 1. Before WordPress begins the core upgrade process.
	 * 2. Before Maintenance Mode is enabled.
	 * 3. Before WordPress begins copying over the necessary files.
	 * 4. Before Maintenance Mode is disabled.
	 * 5. Before the database is upgraded.
	 *
	 * @since 2.5.0
	 *
	 * @param string $feedback The core update feedback messages.
	 */
	apply_filters( 'update_feedback', __( 'Verifying the unpacked files&#8230;' ) );

	// Sanity check the unzipped distribution.
	$distro = '';
	$roots  = array( '/wordpress/', '/wordpress-mu/' );
	foreach ( $roots as $root ) {
		if ( $wp_filesystem->exists( $from . $root . 'readme.html' ) && $wp_filesystem->exists( $from . $root . 'vendor/version.php' ) ) {
			$distro = $root;
			break;
		}
	}
	if ( ! $distro ) {
		$wp_filesystem->delete( $from, true );
		return new WP_Error( 'insane_distro', __( 'The update could not be unpacked' ) );
	}

	/*
	 * Import $wp_version, $required_php_version, and $required_mysql_version from the new version.
	 * DO NOT globalise any variables imported from `version-current.php` in this function.
	 *
	 * BC Note: $wp_filesystem->wp_content_dir() returned unslashed pre-2.8
	 */
	$versions_file = trailingslashit( $wp_filesystem->wp_content_dir() ) . 'upgrade/version-current.php';
	if ( ! $wp_filesystem->copy( $from . $distro . 'vendor/version.php', $versions_file ) ) {
		$wp_filesystem->delete( $from, true );
		return new WP_Error( 'copy_failed_for_version_file', __( 'The update cannot be installed because we will be unable to copy some files. This is usually due to inconsistent file permissions.' ), 'vendor/version.php' );
	}

	$wp_filesystem->chmod( $versions_file, FS_CHMOD_FILE );
	require WP_CONTENT_DIR . '/upgrade/version-current.php';
	$wp_filesystem->delete( $versions_file );

	$php_version       = phpversion();
	$mysql_version     = $wpdb->db_version();
	$old_wp_version    = $GLOBALS['wp_version']; // The version of WordPress we're updating from.
	$development_build = ( false !== strpos( $old_wp_version . $wp_version, '-' ) ); // A dash in the version indicates a development release.
	$php_compat        = version_compare( $php_version, $required_php_version, '>=' );
	if ( file_exists( WP_CONTENT_DIR . '/db.php' ) && empty( $wpdb->is_mysql ) ) {
		$mysql_compat = true;
	} else {
		$mysql_compat = version_compare( $mysql_version, $required_mysql_version, '>=' );
	}

	if ( ! $mysql_compat || ! $php_compat ) {
		$wp_filesystem->delete( $from, true );
	}

	$php_update_message = '';

	if ( function_exists( 'wp_get_update_php_url' ) ) {
		/* translators: %s: URL to Update PHP page. */
		$php_update_message = '</p><p>' . sprintf(
			__( '<a href="%s">Learn more about updating PHP</a>.' ),
			esc_url( wp_get_update_php_url() )
		);

		if ( function_exists( 'wp_get_update_php_annotation' ) ) {
			$annotation = wp_get_update_php_annotation();

			if ( $annotation ) {
				$php_update_message .= '</p><p><em>' . $annotation . '</em>';
			}
		}
	}

	if ( ! $mysql_compat && ! $php_compat ) {
		return new WP_Error(
			'php_mysql_not_compatible',
			sprintf(
				/* translators: 1: WordPress version number, 2: Minimum required PHP version number, 3: Minimum required MySQL version number, 4: Current PHP version number, 5: Current MySQL version number. */
				__( 'The update cannot be installed because WordPress %1$s requires PHP version %2$s or higher and MySQL version %3$s or higher. You are running PHP version %4$s and MySQL version %5$s.' ),
				$wp_version,
				$required_php_version,
				$required_mysql_version,
				$php_version,
				$mysql_version
			) . $php_update_message
		);
	} elseif ( ! $php_compat ) {
		return new WP_Error(
			'php_not_compatible',
			sprintf(
				/* translators: 1: WordPress version number, 2: Minimum required PHP version number, 3: Current PHP version number. */
				__( 'The update cannot be installed because WordPress %1$s requires PHP version %2$s or higher. You are running version %3$s.' ),
				$wp_version,
				$required_php_version,
				$php_version
			) . $php_update_message
		);
	} elseif ( ! $mysql_compat ) {
		return new WP_Error(
			'mysql_not_compatible',
			sprintf(
				/* translators: 1: WordPress version number, 2: Minimum required MySQL version number, 3: Current MySQL version number. */
				__( 'The update cannot be installed because WordPress %1$s requires MySQL version %2$s or higher. You are running version %3$s.' ),
				$wp_version,
				$required_mysql_version,
				$mysql_version
			)
		);
	}

	// Add a warning when the JSON PHP extension is missing.
	if ( ! extension_loaded( 'json' ) ) {
		return new WP_Error(
			'php_not_compatible_json',
			sprintf(
				/* translators: 1: WordPress version number, 2: The PHP extension name needed. */
				__( 'The update cannot be installed because WordPress %1$s requires the %2$s PHP extension.' ),
				$wp_version,
				'JSON'
			)
		);
	}

	/** This filter is documented in panel/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Preparing to install the latest version&#8230;' ) );

	// Don't copy wp-content, we'll deal with that below.
	// We also copy version.php last so failed updates report their old version.
	$skip              = array( 'wp-content', 'vendor/version.php' );
	$check_is_writable = array();

	// Check to see which files don't really need updating - only available for 3.7 and higher.
	if ( function_exists( 'get_core_checksums' ) ) {
		// Find the local version of the working directory.
		$working_dir_local = WP_CONTENT_DIR . '/upgrade/' . basename( $from ) . $distro;

		$checksums = get_core_checksums( $wp_version, isset( $wp_local_package ) ? $wp_local_package : 'en_US' );
		if ( is_array( $checksums ) && isset( $checksums[ $wp_version ] ) ) {
			$checksums = $checksums[ $wp_version ]; // Compat code for 3.7-beta2.
		}
		if ( is_array( $checksums ) ) {
			foreach ( $checksums as $file => $checksum ) {
				if ( 'wp-content' === substr( $file, 0, 10 ) ) {
					continue;
				}
				if ( ! file_exists( ABSPATH . $file ) ) {
					continue;
				}
				if ( ! file_exists( $working_dir_local . $file ) ) {
					continue;
				}
				if ( '.' === dirname( $file ) && in_array( pathinfo( $file, PATHINFO_EXTENSION ), array( 'html', 'txt' ), true ) ) {
					continue;
				}
				if ( md5_file( ABSPATH . $file ) === $checksum ) {
					$skip[] = $file;
				} else {
					$check_is_writable[ $file ] = ABSPATH . $file;
				}
			}
		}
	}

	// If we're using the direct method, we can predict write failures that are due to permissions.
	if ( $check_is_writable && 'direct' === $wp_filesystem->method ) {
		$files_writable = array_filter( $check_is_writable, array( $wp_filesystem, 'is_writable' ) );
		if ( $files_writable !== $check_is_writable ) {
			$files_not_writable = array_diff_key( $check_is_writable, $files_writable );
			foreach ( $files_not_writable as $relative_file_not_writable => $file_not_writable ) {
				// If the writable check failed, chmod file to 0644 and try again, same as copy_dir().
				$wp_filesystem->chmod( $file_not_writable, FS_CHMOD_FILE );
				if ( $wp_filesystem->is_writable( $file_not_writable ) ) {
					unset( $files_not_writable[ $relative_file_not_writable ] );
				}
			}

			// Store package-relative paths (the key) of non-writable files in the WP_Error object.
			$error_data = version_compare( $old_wp_version, '3.7-beta2', '>' ) ? array_keys( $files_not_writable ) : '';

			if ( $files_not_writable ) {
				return new WP_Error( 'files_not_writable', __( 'The update cannot be installed because we will be unable to copy some files. This is usually due to inconsistent file permissions.' ), implode( ', ', $error_data ) );
			}
		}
	}

	/** This filter is documented in panel/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Enabling Maintenance mode&#8230;' ) );
	// Create maintenance file to signal that we are upgrading.
	$maintenance_string = '<?php $upgrading = ' . time() . '; ?>';
	$maintenance_file   = $to . '.maintenance';
	$wp_filesystem->delete( $maintenance_file );
	$wp_filesystem->put_contents( $maintenance_file, $maintenance_string, FS_CHMOD_FILE );

	/** This filter is documented in panel/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Copying the required files&#8230;' ) );
	// Copy new versions of WP files into place.
	$result = _copy_dir( $from . $distro, $to, $skip );
	if ( is_wp_error( $result ) ) {
		$result = new WP_Error( $result->get_error_code(), $result->get_error_message(), substr( $result->get_error_data(), strlen( $to ) ) );
	}

	// Since we know the core files have copied over, we can now copy the version file.
	if ( ! is_wp_error( $result ) ) {
		if ( ! $wp_filesystem->copy( $from . $distro . 'vendor/version.php', $to . 'vendor/version.php', true /* overwrite */ ) ) {
			$wp_filesystem->delete( $from, true );
			$result = new WP_Error( 'copy_failed_for_version_file', __( 'The update cannot be installed because we will be unable to copy some files. This is usually due to inconsistent file permissions.' ), 'vendor/version.php' );
		}
		$wp_filesystem->chmod( $to . 'vendor/version.php', FS_CHMOD_FILE );
	}

	// Check to make sure everything copied correctly, ignoring the contents of wp-content.
	$skip   = array( 'wp-content' );
	$failed = array();
	if ( isset( $checksums ) && is_array( $checksums ) ) {
		foreach ( $checksums as $file => $checksum ) {
			if ( 'wp-content' === substr( $file, 0, 10 ) ) {
				continue;
			}
			if ( ! file_exists( $working_dir_local . $file ) ) {
				continue;
			}
			if ( '.' === dirname( $file ) && in_array( pathinfo( $file, PATHINFO_EXTENSION ), array( 'html', 'txt' ), true ) ) {
				$skip[] = $file;
				continue;
			}
			if ( file_exists( ABSPATH . $file ) && md5_file( ABSPATH . $file ) == $checksum ) {
				$skip[] = $file;
			} else {
				$failed[] = $file;
			}
		}
	}

	// Some files didn't copy properly.
	if ( ! empty( $failed ) ) {
		$total_size = 0;
		foreach ( $failed as $file ) {
			if ( file_exists( $working_dir_local . $file ) ) {
				$total_size += filesize( $working_dir_local . $file );
			}
		}

		// If we don't have enough free space, it isn't worth trying again.
		// Unlikely to be hit due to the check in unzip_file().
		$available_space = @disk_free_space( ABSPATH );
		if ( $available_space && $total_size >= $available_space ) {
			$result = new WP_Error( 'disk_full', __( 'There is not enough free disk space to complete the update.' ) );
		} else {
			$result = _copy_dir( $from . $distro, $to, $skip );
			if ( is_wp_error( $result ) ) {
				$result = new WP_Error( $result->get_error_code() . '_retry', $result->get_error_message(), substr( $result->get_error_data(), strlen( $to ) ) );
			}
		}
	}

	// Custom content directory needs updating now.
	// Copy languages.
	if ( ! is_wp_error( $result ) && $wp_filesystem->is_dir( $from . $distro . 'wp-content/languages' ) ) {
		if ( WP_LANG_DIR != ABSPATH . WPINC . '/languages' || @is_dir( WP_LANG_DIR ) ) {
			$lang_dir = WP_LANG_DIR;
		} else {
			$lang_dir = WP_CONTENT_DIR . '/languages';
		}

		// Check if the language directory exists first.
		if ( ! @is_dir( $lang_dir ) && 0 === strpos( $lang_dir, ABSPATH ) ) {
			// If it's within the ABSPATH we can handle it here, otherwise they're out of luck.
			$wp_filesystem->mkdir( $to . str_replace( ABSPATH, '', $lang_dir ), FS_CHMOD_DIR );
			clearstatcache(); // For FTP, need to clear the stat cache.
		}

		if ( @is_dir( $lang_dir ) ) {
			$wp_lang_dir = $wp_filesystem->find_folder( $lang_dir );
			if ( $wp_lang_dir ) {
				$result = copy_dir( $from . $distro . 'wp-content/languages/', $wp_lang_dir );
				if ( is_wp_error( $result ) ) {
					$result = new WP_Error( $result->get_error_code() . '_languages', $result->get_error_message(), substr( $result->get_error_data(), strlen( $wp_lang_dir ) ) );
				}
			}
		}
	}

	/** This filter is documented in panel/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Disabling Maintenance mode&#8230;' ) );
	// Remove maintenance file, we're done with potential site-breaking changes.
	$wp_filesystem->delete( $maintenance_file );

	// 3.5 -> 3.5+ - an empty twentytwelve directory was created upon upgrade to 3.5 for some users, preventing installation of Twenty Twelve.
	if ( '3.5' === $old_wp_version ) {
		if ( is_dir( WP_CONTENT_DIR . '/themes/twentytwelve' ) && ! file_exists( WP_CONTENT_DIR . '/themes/twentytwelve/style.css' ) ) {
			$wp_filesystem->delete( $wp_filesystem->wp_themes_dir() . 'twentytwelve/' );
		}
	}

	/*
	 * Copy new bundled plugins & themes.
	 * This gives us the ability to install new plugins & themes bundled with
	 * future versions of WordPress whilst avoiding the re-install upon upgrade issue.
	 * $development_build controls us overwriting bundled themes and plugins when a non-stable release is being updated.
	 */
	if ( ! is_wp_error( $result ) && ( ! defined( 'CORE_UPGRADE_SKIP_NEW_BUNDLED' ) || ! CORE_UPGRADE_SKIP_NEW_BUNDLED ) ) {
		foreach ( (array) $_new_bundled_files as $file => $introduced_version ) {
			// If a $development_build or if $introduced version is greater than what the site was previously running.
			if ( $development_build || version_compare( $introduced_version, $old_wp_version, '>' ) ) {
				$directory = ( '/' === $file[ strlen( $file ) - 1 ] );

				list( $type, $filename ) = explode( '/', $file, 2 );

				// Check to see if the bundled items exist before attempting to copy them.
				if ( ! $wp_filesystem->exists( $from . $distro . 'wp-content/' . $file ) ) {
					continue;
				}

				if ( 'plugins' === $type ) {
					$dest = $wp_filesystem->wp_plugins_dir();
				} elseif ( 'themes' === $type ) {
					// Back-compat, ::wp_themes_dir() did not return trailingslash'd pre-3.2.
					$dest = trailingslashit( $wp_filesystem->wp_themes_dir() );
				} else {
					continue;
				}

				if ( ! $directory ) {
					if ( ! $development_build && $wp_filesystem->exists( $dest . $filename ) ) {
						continue;
					}

					if ( ! $wp_filesystem->copy( $from . $distro . 'wp-content/' . $file, $dest . $filename, FS_CHMOD_FILE ) ) {
						$result = new WP_Error( "copy_failed_for_new_bundled_$type", __( 'Could not copy file.' ), $dest . $filename );
					}
				} else {
					if ( ! $development_build && $wp_filesystem->is_dir( $dest . $filename ) ) {
						continue;
					}

					$wp_filesystem->mkdir( $dest . $filename, FS_CHMOD_DIR );
					$_result = copy_dir( $from . $distro . 'wp-content/' . $file, $dest . $filename );

					// If a error occurs partway through this final step, keep the error flowing through, but keep process going.
					if ( is_wp_error( $_result ) ) {
						if ( ! is_wp_error( $result ) ) {
							$result = new WP_Error;
						}
						$result->add( $_result->get_error_code() . "_$type", $_result->get_error_message(), substr( $_result->get_error_data(), strlen( $dest ) ) );
					}
				}
			}
		} // End foreach.
	}

	// Handle $result error from the above blocks.
	if ( is_wp_error( $result ) ) {
		$wp_filesystem->delete( $from, true );
		return $result;
	}

	// Remove old files.
	foreach ( $_old_files as $old_file ) {
		$old_file = $to . $old_file;
		if ( ! $wp_filesystem->exists( $old_file ) ) {
			continue;
		}

		// If the file isn't deleted, try writing an empty string to the file instead.
		if ( ! $wp_filesystem->delete( $old_file, true ) && $wp_filesystem->is_file( $old_file ) ) {
			$wp_filesystem->put_contents( $old_file, '' );
		}
	}

	// Remove any Genericons example.html's from the filesystem.
	_upgrade_422_remove_genericons();

	// Remove the REST API plugin if its version is Beta 4 or lower.
	_upgrade_440_force_deactivate_incompatible_plugins();

	// Upgrade DB with separate request.
	/** This filter is documented in panel/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Upgrading database&#8230;' ) );
	$db_upgrade_url = admin_url( 'upgrade.php?step=upgrade_db' );
	wp_remote_post( $db_upgrade_url, array( 'timeout' => 60 ) );

	// Clear the cache to prevent an update_option() from saving a stale db_version to the cache.
	wp_cache_flush();
	// Not all cache back ends listen to 'flush'.
	wp_cache_delete( 'alloptions', 'options' );

	// Remove working directory.
	$wp_filesystem->delete( $from, true );

	// Force refresh of update information.
	if ( function_exists( 'delete_site_transient' ) ) {
		delete_site_transient( 'update_core' );
	} else {
		delete_option( 'update_core' );
	}

	/**
	 * Fires after WordPress core has been successfully updated.
	 *
	 * @since 3.3.0
	 *
	 * @param string $wp_version The current WordPress version.
	 */
	do_action( '_core_updated_successfully', $wp_version );

	// Clear the option that blocks auto-updates after failures, now that we've been successful.
	if ( function_exists( 'delete_site_option' ) ) {
		delete_site_option( 'auto_core_update_failed' );
	}

	return $wp_version;
}

/**
 * Copies a directory from one location to another via the WordPress Filesystem Abstraction.
 *
 * Assumes that WP_Filesystem() has already been called and setup.
 *
 * This is a standalone copy of the `copy_dir()` function that is used to
 * upgrade the core files. It is placed here so that the version of this
 * function from the *new* WordPress version will be called.
 *
 * It was initially added for the 3.1 -> 3.2 upgrade.
 *
 * @ignore
 * @since 3.2.0
 * @since 3.7.0 Updated not to use a regular expression for the skip list.
 *
 * @see copy_dir()
 * @link https://core.trac.wordpress.org/ticket/17173
 *
 * @global WP_Filesystem_Base $wp_filesystem
 *
 * @param string   $from      Source directory.
 * @param string   $to        Destination directory.
 * @param string[] $skip_list Array of files/folders to skip copying.
 * @return true|WP_Error True on success, WP_Error on failure.
 */
function _copy_dir( $from, $to, $skip_list = array() ) {
	global $wp_filesystem;

	$dirlist = $wp_filesystem->dirlist( $from );

	$from = trailingslashit( $from );
	$to   = trailingslashit( $to );

	foreach ( (array) $dirlist as $filename => $fileinfo ) {
		if ( in_array( $filename, $skip_list, true ) ) {
			continue;
		}

		if ( 'f' === $fileinfo['type'] ) {
			if ( ! $wp_filesystem->copy( $from . $filename, $to . $filename, true, FS_CHMOD_FILE ) ) {
				// If copy failed, chmod file to 0644 and try again.
				$wp_filesystem->chmod( $to . $filename, FS_CHMOD_FILE );
				if ( ! $wp_filesystem->copy( $from . $filename, $to . $filename, true, FS_CHMOD_FILE ) ) {
					return new WP_Error( 'copy_failed__copy_dir', __( 'Could not copy file.' ), $to . $filename );
				}
			}

			// `wp_opcache_invalidate()` only exists in WordPress 5.5, so don't run it when upgrading to 5.5.
			if ( function_exists( 'wp_opcache_invalidate' ) ) {
				wp_opcache_invalidate( $to . $filename );
			}
		} elseif ( 'd' === $fileinfo['type'] ) {
			if ( ! $wp_filesystem->is_dir( $to . $filename ) ) {
				if ( ! $wp_filesystem->mkdir( $to . $filename, FS_CHMOD_DIR ) ) {
					return new WP_Error( 'mkdir_failed__copy_dir', __( 'Could not create directory.' ), $to . $filename );
				}
			}

			/*
			 * Generate the $sub_skip_list for the subdirectory as a sub-set
			 * of the existing $skip_list.
			 */
			$sub_skip_list = array();
			foreach ( $skip_list as $skip_item ) {
				if ( 0 === strpos( $skip_item, $filename . '/' ) ) {
					$sub_skip_list[] = preg_replace( '!^' . preg_quote( $filename, '!' ) . '/!i', '', $skip_item );
				}
			}

			$result = _copy_dir( $from . $filename, $to . $filename, $sub_skip_list );
			if ( is_wp_error( $result ) ) {
				return $result;
			}
		}
	}
	return true;
}

/**
 * Redirect to the About WordPress page after a successful upgrade.
 *
 * This function is only needed when the existing installation is older than 3.4.0.
 *
 * @since 3.3.0
 *
 * @global string $wp_version The WordPress version string.
 * @global string $pagenow
 * @global string $action
 *
 * @param string $new_version
 */
function _redirect_to_about_wordpress( $new_version ) {
	global $wp_version, $pagenow, $action;

	if ( version_compare( $wp_version, '3.4-RC1', '>=' ) ) {
		return;
	}

	// Ensure we only run this on the update-core.php page. The Core_Upgrader may be used in other contexts.
	if ( 'update-core.php' !== $pagenow ) {
		return;
	}

	if ( 'do-core-upgrade' !== $action && 'do-core-reinstall' !== $action ) {
		return;
	}

	// Load the updated default text localization domain for new strings.
	load_default_textdomain();

	// See do_core_upgrade().
	show_message( __( 'WordPress updated successfully.' ) );

	// self_admin_url() won't exist when upgrading from <= 3.0, so relative URLs are intentional.
	show_message(
		'<span class="hide-if-no-js">' . sprintf(
			/* translators: 1: WordPress version, 2: URL to About screen. */
			__( 'Welcome to WordPress %1$s. You will be redirected to the About WordPress screen. If not, click <a href="%2$s">here</a>.' ),
			$new_version,
			'about.php?updated'
		) . '</span>'
	);
	show_message(
		'<span class="hide-if-js">' . sprintf(
			/* translators: 1: WordPress version, 2: URL to About screen. */
			__( 'Welcome to WordPress %1$s. <a href="%2$s">Learn more</a>.' ),
			$new_version,
			'about.php?updated'
		) . '</span>'
	);
	echo '</div>';
	?>
<script type="text/javascript">
window.location = 'about.php?updated';
</script>
	<?php

	// Include admin-footer.php and exit.
	require_once ABSPATH . 'panel/admin-footer.php';
	exit;
}

/**
 * Cleans up Genericons example files.
 *
 * @since 4.2.2
 *
 * @global array              $wp_theme_directories
 * @global WP_Filesystem_Base $wp_filesystem
 */
function _upgrade_422_remove_genericons() {
	global $wp_theme_directories, $wp_filesystem;

	// A list of the affected files using the filesystem absolute paths.
	$affected_files = array();

	// Themes.
	foreach ( $wp_theme_directories as $directory ) {
		$affected_theme_files = _upgrade_422_find_genericons_files_in_folder( $directory );
		$affected_files       = array_merge( $affected_files, $affected_theme_files );
	}

	// Plugins.
	$affected_plugin_files = _upgrade_422_find_genericons_files_in_folder( WP_PLUGIN_DIR );
	$affected_files        = array_merge( $affected_files, $affected_plugin_files );

	foreach ( $affected_files as $file ) {
		$gen_dir = $wp_filesystem->find_folder( trailingslashit( dirname( $file ) ) );
		if ( empty( $gen_dir ) ) {
			continue;
		}

		// The path when the file is accessed via WP_Filesystem may differ in the case of FTP.
		$remote_file = $gen_dir . basename( $file );

		if ( ! $wp_filesystem->exists( $remote_file ) ) {
			continue;
		}

		if ( ! $wp_filesystem->delete( $remote_file, false, 'f' ) ) {
			$wp_filesystem->put_contents( $remote_file, '' );
		}
	}
}

/**
 * Recursively find Genericons example files in a given folder.
 *
 * @ignore
 * @since 4.2.2
 *
 * @param string $directory Directory path. Expects trailingslashed.
 * @return array
 */
function _upgrade_422_find_genericons_files_in_folder( $directory ) {
	$directory = trailingslashit( $directory );
	$files     = array();

	if ( file_exists( "{$directory}example.html" ) && false !== strpos( file_get_contents( "{$directory}example.html" ), '<title>Genericons</title>' ) ) {
		$files[] = "{$directory}example.html";
	}

	$dirs = glob( $directory . '*', GLOB_ONLYDIR );
	if ( $dirs ) {
		foreach ( $dirs as $dir ) {
			$files = array_merge( $files, _upgrade_422_find_genericons_files_in_folder( $dir ) );
		}
	}

	return $files;
}

/**
 * @ignore
 * @since 4.4.0
 */
function _upgrade_440_force_deactivate_incompatible_plugins() {
	if ( defined( 'REST_API_VERSION' ) && version_compare( REST_API_VERSION, '2.0-beta4', '<=' ) ) {
		deactivate_plugins( array( 'rest-api/plugin.php' ), true );
	}
}
