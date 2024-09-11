<!DOCTYPE html>

<html class="html" xmlns="http://www.w3.org/1999/xhtml" lang="ru">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title> Культурный фонд имени И.А. Гончарова </title>

	<?php wp_head(); // сюда подключаются стили и скрипты предподключенные WP
	include_once __DIR__ . "/functions.php" ?>

	<meta name="keywords" content="совет музеев Приволжского федерального округа">
	<meta name="description" content="Официальный сайт совета музеев Приволжского федерального округа">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

	<link rel="shortcut icon" href="https://istoki-volgi.ru/favicon.ico" type="image/x-icon">
	<link rel="icon" href="https://istoki-volgi.ru/favicon.ico" type="image/x-icon">
	<meta property="og:image" content="https://istoki-volgi.ru/base/sysvalues/471.jpg">

	<meta name="proculture-verification" content="905197975acdae856d5326b3fc94fda7">
	<style type="text/css" id="ya_share_style">
		.b-share-popup-wrap {
			z-index: 1073741823;
			position: absolute;
			width: 500px
		}

		.b-share-popup {
			position: absolute;
			z-index: 1073741823;
			border: 1px solid #888;
			background: #FFF;
			color: #000
		}

		.b-share-popup-wrap .b-share-popup_down {
			top: 0
		}

		.b-share-popup-wrap .b-share-popup_up {
			bottom: 0
		}

		.b-share-popup-wrap_state_hidden {
			position: absolute !important;
			top: -9999px !important;
			right: auto !important;
			bottom: auto !important;
			left: -9999px !important;
			visibility: hidden !important
		}

		.b-share-popup,
		x:nth-child(1) {
			border: 0;
			padding: 1px !important
		}

		@media all and (resolution=0) {

			.b-share-popup,
			x:nth-child(1),
			x:-o-prefocus {
				padding: 0 !important;
				border: 1px solid #888
			}
		}

		.b-share-popup__i {
			display: -moz-inline-box;
			display: inline-block;
			padding: 5px 0 !important;
			overflow: hidden;
			vertical-align: top;
			white-space: nowrap;
			visibility: visible;
			background: #FFF;
			-webkit-box-shadow: 0 2px 9px rgba(0, 0, 0, .6);
			-moz-box-shadow: 0 2px 9px rgba(0, 0, 0, .6);
			box-shadow: 0 2px 9px rgba(0, 0, 0, .6)
		}

		.b-share-popup__item {
			font: 1em/1.25em Arial, sans-serif;
			display: block;
			padding: 5px 15px !important;
			white-space: nowrap;
			background: #FFF
		}

		.b-share-popup__item,
		a.b-share-popup__item:link,
		a.b-share-popup__item:visited {
			text-decoration: none !important;
			border: 0 !important
		}

		a.b-share-popup__item {
			cursor: pointer
		}

		a.b-share-popup__item .b-share-popup__item__text {
			display: inline;
			text-decoration: underline;
			color: #1A3DC1
		}

		a.b-share-popup__item:hover {
			word-spacing: 0
		}

		a.b-share-popup__item:hover .b-share-popup__item__text {
			color: red;
			cursor: pointer
		}

		.b-share-popup__icon {
			display: -moz-inline-box;
			display: inline-block;
			margin: -3px 0 0;
			padding: 0 5px 0 0 !important;
			vertical-align: middle
		}

		.b-share-popup__icon_input {
			width: 21px;
			height: 16px;
			margin-top: -6px;
			padding: 0 !important
		}

		.b-share-popup__icon__input {
			margin-right: 0;
			margin-left: 2px;
			vertical-align: top
		}

		.b-share-popup__spacer {
			display: block;
			padding-top: 10px !important
		}

		.b-share-popup__header {
			font: 86%/1em Verdana, sans-serif;
			display: block;
			padding: 10px 15px 5px !important;
			color: #999
		}

		.b-share-popup__header_first {
			padding-top: 5px !important
		}

		.b-share-popup__input {
			font: 86%/1em Verdana, sans-serif;
			display: block;
			padding: 5px 15px !important;
			color: #999;
			text-align: left
		}

		.b-share-popup__input__input {
			font: 1em/1em Verdana, sans-serif;
			display: block;
			width: 10px;
			margin: 5px 0 0;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			resize: none;
			text-align: left;
			direction: ltr
		}

		.b-share-popup_down .b-share-popup_with-link .b-share-popup__input_link {
			position: absolute;
			top: 5px;
			right: 0;
			left: 0
		}

		.b-share-popup_up .b-share-popup_with-link .b-share-popup__input_link {
			position: absolute;
			right: 0;
			bottom: 5px;
			left: 0
		}

		.b-share-popup_down .b-share-popup_with-link {
			padding-top: 55px !important
		}

		.b-share-popup_up .b-share-popup_with-link {
			padding-bottom: 55px !important
		}

		.b-share-popup_down .b-share-popup_expandable .b-share-popup__main {
			padding-bottom: 25px !important
		}

		.b-share-popup_up .b-share-popup_expandable .b-share-popup__main {
			padding-top: 25px !important
		}

		.b-share-popup_down .b-share-popup_yandexed {
			padding-bottom: 10px !important
		}

		.b-share-popup_up .b-share-popup_yandexed {
			padding-top: 10px !important
		}

		.b-share-popup__yandex {
			position: absolute;
			right: 4px;
			bottom: 2px;
			font: 78.125%/1em Verdana, sans-serif;
			padding: 3px !important;
			background: 0 0
		}

		a.b-share-popup__yandex:link,
		a.b-share-popup__yandex:visited {
			color: #C6C5C5;
			text-decoration: none
		}

		a.b-share-popup__yandex:link:hover,
		a.b-share-popup__yandex:visited:hover {
			color: red;
			text-decoration: underline
		}

		.b-share-popup_up .b-share-popup__yandex {
			top: 2px;
			bottom: auto
		}

		.b-share-popup_expandable .b-share-popup__yandex {
			right: auto;
			left: 4px
		}

		.b-share-popup_to-right .b-share-popup_expandable .b-share-popup__yandex {
			right: 4px;
			left: auto
		}

		.b-share-popup__expander .b-share-popup__item {
			position: absolute;
			bottom: 5px;
			font: 86%/1em Verdana, sans-serif;
			margin: 10px 0 0;
			padding: 5px 10px !important;
			cursor: pointer;
			color: #999;
			background: 0 0
		}

		.b-share-popup_to-right,
		.b-share-popup_to-right .b-share-popup__expander {
			direction: rtl
		}

		.b-share-popup_to-right .b-share-popup__expander .b-share-popup__icon {
			padding: 0 0 0 5px !important
		}

		.b-share-popup_up .b-share-popup__expander .b-share-popup__item {
			top: -5px;
			bottom: auto
		}

		.b-share-popup__expander .b-share-popup__item:hover .b-share-popup__item__text {
			text-decoration: underline
		}

		.b-share-popup__expander .b-ico_action_rarr,
		.b-share-popup_to-right .b-share-popup__expander .b-ico_action_larr,
		.b-share-popup_full .b-share-popup__expander .b-ico_action_larr,
		.b-share-popup_to-right .b-share-popup_full .b-share-popup__expander .b-ico_action_rarr,
		.b-share-popup__expander .b-share-popup__item__text_collapse,
		.b-share-popup_full .b-share-popup__item__text_expand {
			display: none
		}

		.b-share-popup_to-right .b-share-popup__expander .b-ico_action_rarr,
		.b-share-popup_full .b-share-popup__item__text_collapse,
		.b-share-popup_full .b-share-popup__expander .b-ico_action_rarr,
		.b-share-popup_to-right .b-share-popup_full .b-share-popup__expander .b-ico_action_larr {
			display: inline
		}

		.b-ico_action_rarr,
		.b-ico_action_larr {
			width: 8px;
			height: 7px;
			border: 0
		}

		.b-share-popup__main,
		.b-share-popup__extra {
			direction: ltr;
			vertical-align: bottom;
			text-align: left
		}

		.b-share-popup_down .b-share-popup__main,
		.b-share-popup_down .b-share-popup__extra {
			vertical-align: top
		}

		.b-share-popup__main {
			display: -moz-inline-stack;
			display: inline-block
		}

		.b-share-popup__extra {
			display: none;
			margin: 0 -10px 0 0
		}

		.b-share-popup_full .b-share-popup__extra {
			display: -moz-inline-stack;
			display: inline-block
		}

		.b-share-popup_to-right .b-share-popup__extra {
			margin: 0 0 0 -10px
		}

		.b-share-popup__tail {
			position: absolute;
			width: 21px;
			height: 10px;
			margin: 0 0 0 -11px
		}

		.b-share-popup_down .b-share-popup__tail {
			top: -10px;
			background: url("//yastatic.net/share/static/b-share-popup_down__tail.gif") 0 0 no-repeat
		}

		.b-share-popup_up .b-share-popup__tail {
			bottom: -10px;
			background: url("//yastatic.net/share/static/b-share-popup_up__tail.gif") 0 0 no-repeat
		}

		.b-share-popup_down .b-share-popup__tail,
		x:nth-child(1) {
			top: -9px;
			background-image: url("//yastatic.net/share/static/b-share-popup_down__tail.png")
		}

		.b-share-popup_up .b-share-popup__tail,
		x:nth-child(1) {
			bottom: -9px;
			background-image: url("//yastatic.net/share/static/b-share-popup_up__tail.png")
		}

		@media all and (resolution=0) {

			.b-share-popup_down .b-share-popup__tail,
			x:nth-child(1),
			x:-o-prefocus {
				top: -10px;
				background-image: url("//yastatic.net/share/static/b-share-popup_down__tail.gif")
			}

			.b-share-popup_up .b-share-popup__tail,
			x:nth-child(1),
			x:-o-prefocus {
				bottom: -10px;
				background-image: url("//yastatic.net/share/static/b-share-popup_up__tail.gif")
			}
		}

		.b-share-popup .b-share-popup_show_form_mail,
		.b-share-popup .b-share-popup_show_form_html {
			padding: 0 !important
		}

		.b-share-popup .b-share-popup_show_form_mail .b-share-popup__main,
		.b-share-popup .b-share-popup_show_form_html .b-share-popup__main,
		.b-share-popup .b-share-popup_show_form .b-share-popup__main,
		.b-share-popup .b-share-popup_show_form_mail .b-share-popup__extra,
		.b-share-popup .b-share-popup_show_form_html .b-share-popup__extra,
		.b-share-popup .b-share-popup_show_form .b-share-popup__extra {
			height: 15px;
			padding: 0 !important;
			overflow: hidden;
			visibility: hidden
		}

		.b-share-popup_show_form_mail .b-share-popup__expander,
		.b-share-popup_show_form_html .b-share-popup__expander,
		.b-share-popup_show_form .b-share-popup__expander,
		.b-share-popup_show_form_mail .b-share-popup__input_link,
		.b-share-popup_show_form_html .b-share-popup__input_link,
		.b-share-popup_show_form .b-share-popup__input_link {
			display: none
		}

		.b-share-popup__form {
			position: relative;
			display: none;
			overflow: hidden;
			padding: 5px 0 0 !important;
			margin: 0 0 -15px;
			white-space: normal
		}

		.b-share-popup_show_form_mail .b-share-popup__form_mail,
		.b-share-popup_show_form_html .b-share-popup__form_html,
		.b-share-popup_show_form .b-share-popup__form {
			display: block
		}

		.b-share-popup__form__link {
			padding: 5px !important;
			margin: 0 0 5px 10px;
			text-decoration: underline;
			cursor: pointer;
			color: #1A3DC1
		}

		.b-share-popup__form__link,
		.b-share-popup__form__button {
			font: 86%/1.4545em Verdana, sans-serif;
			float: left;
			display: inline
		}

		.b-share-popup__form__button {
			margin: 5px 0 0 15px
		}

		.b-share-popup__form__close {
			font: 86%/1.4545em Verdana, sans-serif;
			float: right;
			display: inline;
			padding: 5px !important;
			margin: 0 10px 5px 0;
			cursor: pointer;
			color: #999
		}

		a.b-share-popup__form__link:hover,
		a.b-share-popup__form__close:hover {
			text-decoration: underline;
			color: red
		}

		.b-share-popup_font_fixed .b-share-popup__item {
			font-size: 12.8px
		}

		.b-share-popup_font_fixed .b-share-popup__header,
		.b-share-popup_font_fixed .b-share-popup__input,
		.b-share-popup_font_fixed .b-share-popup__expander .b-share-popup__item,
		.b-share-popup_font_fixed .b-share-popup__form__link,
		.b-share-popup_font_fixed .b-share-popup__form__button,
		.b-share-popup_font_fixed .b-share-popup__form__close {
			font-size: 11px
		}

		.b-share-popup_font_fixed .b-share-popup__yandex {
			font-size: 10px
		}

		.b-share-form-button {
			font: 86%/17px Verdana, Arial, sans-serif;
			display: -moz-inline-box;
			display: inline-block;
			position: relative;
			height: 19px;
			margin: 0 3px;
			padding: 0 4px;
			cursor: default;
			white-space: nowrap;
			text-decoration: none !important;
			color: #000 !important;
			border: none;
			outline: none;
			background: url("//yastatic.net/share/static/b-share-form-button.png") 0 -20px repeat-x
		}

		.b-share-form-button:link:hover,
		.b-share-form-button:visited:hover {
			color: #000 !important
		}

		.b-share-form-button__before,
		.b-share-form-button__after {
			position: absolute;
			width: 3px;
			height: 19px;
			background: url("//yastatic.net/share/static/b-share-form-button.png")
		}

		.b-share-form-button__before {
			margin-left: -7px
		}

		.b-share-form-button__after {
			margin-left: 4px;
			background-position: -3px 0
		}

		.b-share-form-button::-moz-focus-inner {
			border: none
		}

		button.b-share-form-button .b-share-form-button__before,
		button.b-share-form-button .b-share-form-button__after {
			margin-top: -1px
		}

		@-moz-document url-prefix() {
			button.b-share-form-button .b-share-form-button__after {
				margin-top: -2px;
				margin-left: 6px
			}

			button.b-share-form-button .b-share-form-button__before {
				margin-top: -2px;
				margin-left: -9px
			}
		}

		SPAN.b-share-form-button:hover,
		.b-share-form-button_state_hover {
			background-position: 0 -60px
		}

		SPAN.b-share-form-button:hover .b-share-form-button__before,
		.b-share-form-button_state_hover .b-share-form-button__before {
			background-position: 0 -40px
		}

		SPAN.b-share-form-button:hover .b-share-form-button__after,
		.b-share-form-button_state_hover .b-share-form-button__after {
			background-position: -3px -40px
		}

		.b-share-form-button_state_pressed,
		.b-share-form-button_state_pressed .b-share-form-button_share {
			background-position: 0 -100px !important
		}

		.b-share-form-button_state_pressed .b-share-form-button__before {
			background-position: 0 -80px !important
		}

		.b-share-form-button_state_pressed .b-share-form-button__after {
			background-position: -3px -80px !important
		}

		button.b-share-form-button_state_pressed {
			overflow: visible
		}

		.b-share-form-button_icons {
			position: relative;
			padding: 0;
			background-position: 0 -20px !important
		}

		.b-share-form-button_icons .b-share-form-button__before {
			left: 0;
			margin-left: -3px;
			background-position: 0 0 !important
		}

		.b-share-form-button_icons .b-share-form-button__after {
			z-index: -1;
			margin-left: 0;
			background-position: -3px 0 !important
		}

		.b-share-form-button_icons .b-share__handle {
			padding: 2px !important
		}

		.b-share-form-button_icons .b-share__handle_more {
			position: relative;
			padding-right: 6px !important;
			margin-right: -4px
		}

		.b-share-form-button_icons .b-share-icon {
			opacity: .5;
			background-image: url("//yastatic.net/share/static/b-share-icon_size_14.png")
		}

		.b-share-form-button_icons A.b-share__handle:hover .b-share-icon {
			opacity: 1
		}

		.b-share {
			font: 86%/1.4545em Arial, sans-serif;
			display: -moz-inline-box;
			display: inline-block;
			padding: 1px 3px 1px 4px !important;
			vertical-align: middle
		}

		.b-share .b-share-form-button {
			font-size: 1em
		}

		.b-share__text .b-share-icon {
			margin: 0 5px 0 0;
			border: none
		}

		.b-share__text {
			margin-right: 5px
		}

		.b-share__handle {
			float: left;
			height: 16px;
			padding: 5px 3px 5px 2px !important;
			cursor: pointer;
			text-align: left;
			text-decoration: none !important
		}

		.b-share__handle_cursor_default {
			cursor: default
		}

		.b-share__handle .b-share-form-button {
			margin-top: -2px
		}

		.b-share__hr {
			display: none;
			float: left;
			width: 1px;
			height: 26px;
			margin: 0 3px 0 2px
		}

		a.b-share__handle:hover .b-share__text {
			text-decoration: underline;
			color: red
		}

		.b-share_bordered {
			padding: 0 2px 0 3px !important;
			border: 1px solid #E4E4E4;
			-moz-border-radius: 5px;
			-webkit-border-radius: 5px;
			border-radius: 5px
		}

		.b-share_bordered .b-share__hr {
			display: inline;
			background: #E4E4E4
		}

		.b-share_link {
			margin: -8px 0
		}

		a.b-share_link {
			margin: 0
		}

		.b-share_link .b-share__text {
			text-decoration: underline;
			color: #1A3DC1
		}

		.b-share-form-button_share {
			padding-left: 26px !important;
			vertical-align: top
		}

		.b-share-form-button_share .b-share-form-button__before {
			margin-left: -29px
		}

		.b-share-form-button_share .b-share-form-button__icon {
			position: absolute;
			width: 20px;
			height: 17px;
			margin: 1px 0 0 -23px;
			background: url("//yastatic.net/share/static/b-share-form-button_share__icon.png") 0 0 no-repeat
		}

		.b-share-pseudo-link {
			border-bottom: 1px dotted;
			cursor: pointer;
			text-decoration: none !important
		}

		.b-share_font_fixed {
			font-size: 11px
		}

		.b-share__handle_more {
			font-size: 9px;
			margin-top: -1px;
			color: #7B7B7B
		}

		A.b-share__handle_more:hover {
			color: #000
		}

		.b-share__group {
			float: left
		}

		.b-share-icon {
			float: left;
			display: inline;
			overflow: hidden;
			width: 16px;
			height: 16px;
			padding: 0 !important;
			vertical-align: top;
			border: 0;
			background: url("//yastatic.net/share/static/b-share-icon.png") 0 99px no-repeat
		}

		.b-share-icon_vkontakte,
		.b-share-icon_custom {
			background-position: 0 0
		}

		.b-share-icon_yaru,
		.b-share-icon_yaru_photo,
		.b-share-icon_yaru_wishlist {
			background-position: 0 -17px
		}

		.b-share-icon_lj {
			background-position: 0 -34px
		}

		.b-share-icon_twitter {
			background-position: 0 -51px
		}

		.b-share-icon_facebook {
			background-position: 0 -68px
		}

		.b-share-icon_moimir {
			background-position: 0 -85px
		}

		.b-share-icon_friendfeed {
			background-position: 0 -102px
		}

		.b-share-icon_mail {
			background-position: 0 -119px
		}

		.b-share-icon_html {
			background-position: 0 -136px
		}

		.b-share-icon_postcard {
			background-position: 0 -153px
		}

		.b-share-icon_odnoklassniki {
			background-position: 0 -170px
		}

		.b-share-icon_blogger {
			background-position: 0 -187px
		}

		.b-share-icon_delicious {
			background-position: 0 -221px
		}

		.b-share-icon_gbuzz {
			background-position: 0 -238px
		}

		.b-share-icon_linkedin {
			background-position: 0 -255px
		}

		.b-share-icon_myspace {
			background-position: 0 -272px
		}

		.b-share-icon_evernote {
			background-position: 0 -289px
		}

		.b-share-icon_digg {
			background-position: 0 -306px
		}

		.b-share-icon_juick {
			background-position: 0 -324px
		}

		.b-share-icon_moikrug {
			background-position: 0 -341px
		}

		.b-share-icon_yazakladki {
			background-position: 0 -358px
		}

		.b-share-icon_liveinternet {
			background-position: 0 -375px
		}

		.b-share-icon_tutby {
			background-position: 0 -392px
		}

		.b-share-icon_diary {
			background-position: 0 -409px
		}

		.b-share-icon_gplus {
			background-position: 0 -426px
		}

		.b-share-icon_pocket {
			background-position: 0 -443px
		}

		.b-share-icon_surfingbird {
			background-position: 0 -460px
		}

		.b-share-icon_pinterest {
			background-position: 0 -477px
		}

		.b-share-icon_renren {
			background-position: 0 0
		}

		.b-share-icon_renren,
		.b-share-icon_sina_weibo {
			background: url("//yastatic.net/share/static/b-share-icon__china.png") no-repeat
		}

		.b-share-icon_sina_weibo {
			background-position: -18px 0
		}

		.b-share-icon_qzone {
			background-position: -36px 0
		}

		.b-share-icon_qzone,
		.b-share-icon_tencent_weibo {
			background: url("//yastatic.net/share/static/b-share-icon__china.png") no-repeat
		}

		.b-share-icon_tencent_weibo {
			background-position: -54px 0
		}

		.b-share_theme_dark .b-share-icon {
			background: url("//yastatic.net/share/static/b-share-icons__theme_dark.png") 99px 0 no-repeat
		}

		.b-share_theme_dark .b-share-icon_odnoklassniki {
			background-position: -4px -3px
		}

		.b-share_theme_dark .b-share-icon_vkontakte {
			background-position: -24px -3px
		}

		.b-share_theme_dark .b-share-icon_twitter {
			background-position: -44px -3px
		}

		.b-share_theme_dark .b-share-icon_facebook {
			background-position: -64px -3px
		}

		.b-share_theme_dark .b-share-icon_lj {
			background-position: -85px -3px
		}

		.b-share_theme_dark .b-share-icon_yaru {
			background-position: -105px -3px
		}

		.b-share_theme_dark .b-share-popup .b-share-icon_odnoklassniki,
		.b-share_theme_dark .b-share-icon_odnoklassniki:hover {
			background-position: -4px -28px
		}

		.b-share_theme_dark .b-share-popup .b-share-icon_vkontakte,
		.b-share_theme_dark .b-share-icon_vkontakte:hover {
			background-position: -24px -28px
		}

		.b-share_theme_dark .b-share-popup .b-share-icon_twitter,
		.b-share_theme_dark .b-share-icon_twitter:hover {
			background-position: -44px -28px
		}

		.b-share_theme_dark .b-share-popup .b-share-icon_facebook,
		.b-share_theme_dark .b-share-icon_facebook:hover {
			background-position: -64px -28px
		}

		.b-share_theme_dark .b-share-popup .b-share-icon_lj,
		.b-share_theme_dark .b-share-icon_lj:hover {
			background-position: -85px -28px
		}

		.b-share_theme_dark .b-share-popup .b-share-icon_yaru,
		.b-share_theme_dark .b-share-icon_yaru:hover {
			background-position: -105px -28px
		}

		.b-share_theme_dark .b-share-form-button_share .b-share-form-button__icon {
			background-image: url("//yastatic.net/share/static/b-share-form-button_share__icon_dark.png")
		}

		.b-share_theme_dark .b-share-form-button {
			color: #fff !important;
			opacity: .8
		}

		.b-share_theme_dark .b-share__handle:hover .b-share-form-button,
		.b-share_theme_dark .b-share-form-button:hover {
			opacity: 1;
			cursor: pointer
		}

		.b-share_theme_dark .b-share-form-button,
		.b-share_theme_dark .b-share-form-button__before,
		.b-share_theme_dark .b-share-form-button__after {
			background: 0 0
		}

		.b-share_theme_dark .b-share-popup__i {
			background-color: #333;
			border-radius: 10px;
			-webkit-box-shadow: 0 2px 9px rgba(255, 255, 255, .6);
			-moz-box-shadow: 0 2px 9px rgba(255, 255, 255, .6);
			box-shadow: 0 2px 9px rgba(255, 255, 255, .6)
		}

		.b-share_theme_dark .b-share__text {
			color: #AAA
		}

		.b-share_theme_dark .b-share-popup {
			color: #AAA;
			border-radius: 10px;
			background-color: #333;
			background-color: rgba(50, 50, 50, .3)
		}

		.b-share_theme_dark .b-share-popup__item {
			background: 0 0;
			color: #ccc
		}

		.b-share_theme_dark .b-share-popup .b-share-popup__item__text {
			color: #ccc
		}

		.b-share_theme_counter .b-share {
			display: inline-block;
			vertical-align: middle;
			white-space: nowrap
		}

		.b-share-counter {
			font: 14px Arial, sans-serif;
			line-height: 18px;
			display: none;
			float: left;
			margin: 3px 6px 3px 3px;
			color: #fff
		}

		.b-share_theme_counter .b-share_type_small .b-share-counter {
			font-size: 11px;
			line-height: 14px;
			margin: 2px 6px 2px 1px
		}

		.b-share_theme_counter .b-share-btn__counter .b-share-counter {
			display: block
		}

		.b-share-btn__counter {
			text-decoration: none
		}

		.b-share_theme_counter .b-share-btn__wrap {
			position: relative;
			float: left;
			margin-left: 5px
		}

		.b-share_theme_counter .b-share_type_small .b-share-btn__wrap {
			margin-left: 4px
		}

		.b-share_theme_counter .b-share-btn__wrap:first-child {
			margin-left: 0
		}

		.b-share_theme_counter .b-share__link {
			display: inline-block;
			cursor: pointer;
			-webkit-border-radius: 3px;
			border-radius: 3px
		}

		.b-share_theme_counter .b-share_type_small .b-share__link {
			-webkit-border-radius: 2px;
			border-radius: 2px
		}

		.b-share_theme_counter .b-share-icon {
			display: block;
			float: left;
			width: 24px;
			height: 24px;
			background-image: url("//yastatic.net/share/static/b-share_counter_large.png");
			background-position: -20px 0
		}

		.b-share_theme_counter .b-share_type_small .b-share-icon {
			width: 18px;
			height: 18px;
			background-image: url("//yastatic.net/share/static/b-share_counter_small.png")
		}

		.b-share_theme_counter .b-share-icon_facebook {
			background-position: 0 0
		}

		.b-share_theme_counter .b-share-btn__facebook {
			background-color: #3c5a98
		}

		.b-share_theme_counter .b-share-btn__facebook:hover {
			background-color: #30487a
		}

		.b-share_theme_counter .b-share-btn__facebook:active {
			border-top: 2px solid #24365a;
			background-color: #334d81
		}

		.b-share_theme_counter .b-share-icon_moimir {
			background-position: 0 -29px
		}

		.b-share_theme_counter .b-share-btn__moimir {
			background-color: #226eb7
		}

		.b-share_theme_counter .b-share-btn__moimir:hover {
			background-color: #1b5892
		}

		.b-share_theme_counter .b-share-btn__moimir:active {
			border-top: 2px solid #14426d;
			background-color: #1d5e9c
		}

		.b-share_theme_counter .b-share-icon_vkontakte {
			background-position: 0 -58px
		}

		.b-share_theme_counter .b-share-btn__vkontakte {
			background-color: #48729e
		}

		.b-share_theme_counter .b-share-btn__vkontakte:hover {
			background-color: #3a5b7e
		}

		.b-share_theme_counter .b-share-btn__vkontakte:active {
			border-top: 2px solid #2b445e;
			background-color: #3d6186
		}

		.b-share_theme_counter .b-share-icon_twitter {
			background-position: 0 -87px
		}

		.b-share_theme_counter .b-share-btn__twitter {
			background-color: #00aced
		}

		.b-share_theme_counter .b-share-btn__twitter:hover {
			background-color: #008abe
		}

		.b-share_theme_counter .b-share-btn__twitter:active {
			border-top: 2px solid #00668d;
			background-color: #0092ca
		}

		.b-share_theme_counter .b-share-icon_odnoklassniki {
			background-position: 0 -116px
		}

		.b-share_theme_counter .b-share-btn__odnoklassniki {
			background-color: #ff9f4d
		}

		.b-share_theme_counter .b-share-btn__odnoklassniki:hover {
			background-color: #cc7f3e
		}

		.b-share_theme_counter .b-share-btn__odnoklassniki:active {
			border-top: 2px solid #975e2e;
			background-color: #d98742
		}

		.b-share_theme_counter .b-share-icon_gplus {
			background-position: 0 -145px
		}

		.b-share_theme_counter .b-share-btn__gplus {
			background-color: #c25234
		}

		.b-share_theme_counter .b-share-btn__gplus:hover {
			background-color: #9b422a
		}

		.b-share_theme_counter .b-share-btn__gplus:active {
			border-top: 2px solid #73311f;
			background-color: #a5462c
		}

		.b-share_theme_counter .b-share-icon_yaru {
			background-position: 0 -174px
		}

		.b-share_theme_counter .b-share-btn__yaru {
			background-color: #d83933
		}

		.b-share_theme_counter .b-share-btn__yaru:hover {
			background-color: #ad2e29
		}

		.b-share_theme_counter .b-share-btn__yaru:active {
			border-top: 2px solid #80221e;
			background-color: #b8312b
		}

		.b-share_theme_counter .b-share-icon_pinterest {
			background-position: 0 -203px
		}

		.b-share_theme_counter .b-share-btn__pinterest {
			background-color: #cd1e27
		}

		.b-share_theme_counter .b-share-btn__pinterest:hover {
			background-color: #a4181f
		}

		.b-share_theme_counter .b-share-btn__pinterest:active {
			border-top: 2px solid #7b1217;
			background-color: #ae1921
		}

		.b-share_theme_counter .b-share__link:active {
			height: 22px
		}

		.b-share_theme_counter .b-share_type_small .b-share__link:active {
			height: 16px
		}

		.b-share_theme_counter .b-share__link:active .b-share-icon,
		.b-share_theme_counter .b-share__link:active .b-share-counter {
			position: relative;
			top: -1px
		}

		.b-share_theme_counter .b-share__link::after {
			position: absolute;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			content: "";
			background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==)
		}

		.b-share_theme_counter .b-share__handle {
			height: auto;
			padding: 0 !important
		}
	</style>
	<style type="text/css">
		.highslide img {
			cursor: url(/js/highslide/graphics/zoomin.cur), pointer !important;
		}
	</style>
</head>

<body <?php body_class('site-body'); ?>>

	<?php wp_body_open(); ?>

	

				<nav class="nav nav_offsite desktop">
					<ul class="plain clearfix">
						<li class="nav_item_button button"><a href="/kontaktyi" title="Наш адрес"><img src="/wp-content/themes/fond_goncharova/img/header/round-pointer-24px-white.svg" alt="Как проехать">Ульяновск, бульвар Новый Венец, 3/4</a></li>
						<li class="nav_item_button button"><a href="mailto:uokm@mail.ru" title="Отправить нам email"><img src="/wp-content/themes/fond_goncharova/img/header/round-mail-24px-white.svg" alt="e-mail">uokm@mail.ru</a></li>
						<li class="nav_item_button button"><a href="tel:+7 (8422) 44-30-64" title="Позвонить нам"><img src="/wp-content/themes/fond_goncharova/img/header/round-call-24px-white.svg" alt="Позвонить">+7 (8422) 44-30-64</a></li>
						<li class="nav_item_button button"><a href="/dynamic.php?page=1&amp;setslv=yes" title="Версия оформления"><img src="/wp-content/themes/fond_goncharova/img/header/eye-icon.svg" alt="Версия сайта">Для слабовидящих</a></li>
					</ul>
				</nav>

				<div class="wrapper">
					<nav class="nav nav_onpage">
						<a href="#mobilemenu" class="mobile right"><img src="/wp-content/themes/fond_goncharova/img/header/round-menu-24px.svg" alt="Меню для смартфонов"></a>
						<a href="tel:+7 (8422) 44-30-64" class="mobile right"><img src="/wp-content/themes/fond_goncharova/img/header/round-call-24px.svg" alt="Позвонить"></a>
						<a href="mailto:uokm@mail.ru" class="mobile right"><img src="/wp-content/themes/fond_goncharova/img/header/round-mail-24px.svg" alt="email"></a>
						<a href="#kontaktyi" class="mobile right"><img src="/wp-content/themes/fond_goncharova/img/header/round-pointer-24px.svg" alt="Наш адрес"></a>
						

						<!-- <ul class="plain clearfix menumain desktop mobilemenu"> -->

							<li class="nav_item_text mobile closemobilemenu"><a href="#closemobilemenu"><img src="/wp-content/themes/fond_goncharova/img/header/round-close-24px.svg" alt="Закрыть меню для смартфонов"></a></li>
							<!-- <li class="nav_item_text"><a class="" href="https://fond.local/?page_id=9" title="О фонде">О фонде</a></li>
							<li class="nav_item_text"><a class="" href="https://fond.local/?page_id=12" title="СМИ о нас">СМИ о нас</a></li>
							<li class="nav_item_text"><a class="" href="https://fond.local/?page_id=14" title="Наши проекты">Наши проекты</a></li>
							<li class="nav_item_text"><a class="" href="https://fond.local/?page_id=16" title="Новости">Новости</a></li>
							<li class="nav_item_text"><a class="" href="https://fond.local/?page_id=18" title="Контакты">Контакты</a></li>
						</ul> -->

						<?php
						wp_nav_menu([
							'theme_location'  => '',
							'menu'            => 'main',
							'container'       => 'nav',
							'container_class' => 'nav nav_onpage',
							'container_id'    => '',
							'menu_class'      => 'plain clearfix menumain desktop mobilemenu',
							'menu_id'         => 'menu',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 0,
							'walker'          => '',
						]);
						?>




					</nav>

				</div><!-- wrapper -->

			</header>


			

		</div><!-- wrapper -->

	</header>