<?php 
/**
	Admin Page Framework v3.8.26 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/read-offline>
	Copyright (c) 2013-2021, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
class Read_Offline_AdminPageFramework_Form_View___CSS_Section extends Read_Offline_AdminPageFramework_Form_View___CSS_Base {
    protected function _get() {
        return $this->_getFormSectionRules();
    }
    private function _getFormSectionRules() {
        $_sCSSRules = ".read-offline-section .form-table {margin-top: 0;}.read-offline-section .form-table td label { display: inline;}.read-offline-section-tabs-contents {margin-top: 1em;}.read-offline-section-tabs { margin: 0;}.read-offline-tab-content { padding: 0.5em 2em 1.5em 2em;margin: 0;border-style: solid;border-width: 1px;border-color: #dfdfdf;background-color: #fdfdfd; }.read-offline-section-tab {background-color: transparent;vertical-align: bottom; margin-bottom: -2px;margin-left: 0px;margin-right: 0.5em;background-color: #F1F1F1;font-weight: normal;}.read-offline-section-tab:hover {background-color: #F8F8F8;}.read-offline-section-tab.active {background-color: #fdfdfd; }.read-offline-section-tab h4 {margin: 0;padding: 0.4em 0.8em;font-size: 1.12em;vertical-align: middle;white-space: nowrap;display:inline-block;font-weight: normal;}.read-offline-section-tab.nav-tab {padding: 0.2em 0.4em;}.read-offline-section-tab.nav-tab a {text-decoration: none;color: #464646;vertical-align: inherit; outline: 0; }.read-offline-section-tab.nav-tab a:focus { box-shadow: none;}.read-offline-section-tab.nav-tab.active a {color: #000;}.read-offline-content ul.read-offline-section-tabs > li.read-offline-section-tab {list-style-type: none;margin: -4px 4px -1px 0;}.read-offline-repeatable-section-buttons {float: right;clear: right;margin-top: 1em;}.read-offline-repeatable-section-buttons.disabled > .repeatable-section-button {color: #edd;border-color: #edd;}.read-offline-section-caption {text-align: left;margin: 0;}.read-offline-section .read-offline-section-title {}.read-offline-sections.sortable-section > .read-offline-section {padding: 1em 1.8em 1em 2.6em;}.read-offline-sections.sortable-section > .read-offline-section.is_subsection_collapsible {display: block; float: none;border: 0px;padding: 0;background: transparent;}.read-offline-sections.sortable-section > .read-offline-tab-content {display: block; float: none;border: 0px;padding: 0.5em 2em 1.5em 2em;margin: 0;border-style: solid;border-width: 1px;border-color: #dfdfdf;background-color: #fdfdfd;}.read-offline-sections.sortable-section > .read-offline-section {margin-bottom: 1em;}.read-offline-section {margin-bottom: 1em; }.read-offline-sectionset {margin-bottom: 1em; display:inline-block;width:100%;}.read-offline-section > .read-offline-sectionset {margin-left: 2em;}";
        $_sCSSRules.= $this->___getForWP47();
        $_sCSSRules.= $this->___getForWP53();
        return $_sCSSRules;
    }
    private function ___getForWP47() {
        if (version_compare($GLOBALS['wp_version'], '4.7', '<')) {
            return '';
        }
        return ".read-offline-content ul.read-offline-section-tabs > li.read-offline-section-tab {margin-bottom: -2px;}";
    }
    private function ___getForWP53() {
        if (version_compare($GLOBALS['wp_version'], '5.3', '<')) {
            return '';
        }
        return ".repeatable-section-button.button.button-large {padding: 0;margin: 0;min-width: 2.48em;}.repeatable-section-button .dashicons {font-size: 1.32em;width: 100%;vertical-align: middle;}@media screen and (max-width: 782px) {.repeatable-section-button.button.button-large {min-width: 40px;}.repeatable-section-button .dashicons {height: 22px;}}";
    }
    }
    