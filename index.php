<?php

/*
-----------------------------------------
Judicial Engagement Network Main Theme
-----------------------------------------
Site:      judicialengagementnetwork.org
Email:     info@judicialengagementnetwork.org
@license:  Copyrighted Commercial Software
@copyright (C) 2017 NCJFCJ

 */

defined( '_JEXEC' ) or die( 'Restricted access' );

// Remove Generator Line
$this->setGenerator('');

// determine if this is the home page
$isHome = false;
$app = JFactory::getApplication();
$menu = $app->getMenu();
$activeMenu = $menu->getActive();
if($activeMenu == $menu->getDefault()){
	$isHome = true;
};



// Stylesheets
$templateUrl = $this->baseurl.'/templates/'.$this->template;


// Output as HTML5
$this->setHtml5(true);

// positions
$showContentBottom = $this->countModules('content-bottom');

?>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>

    <?php

    // Generate Meta tags
    foreach($this->_metaTags as $type => $items){
        foreach($items as $name => $content){
            if($name != "content-type" && !empty($content)){
                echo '<meta name="' . $name . '" content="' . htmlspecialchars($content) . '" />';
            }
        }
    }

    // Generate Description tag
    $documentDescription = $this->getDescription();
    if($documentDescription){
        echo '<meta name="description" content="' . htmlspecialchars($documentDescription) . '" />';
    }
    ?>

    <!--Generate Title-->
    <title><?php echo trim(htmlspecialchars($this->getTitle(), ENT_COMPAT, 'UTF-8')); ?></title>


    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="apple-mobile-web-app-capable" content="YES" />
    <meta charset="utf-8" />
    <meta name="referrer" content="unsafe-url" />

    
 


    <link href="<?php echo $templateUrl ?>/stylesheets/css/system_general.css" rel="stylesheet" />
    <link href="<?php echo $templateUrl ?>/stylesheets/css/styles.min.css" rel="stylesheet" media="screen" />
    <script src="<?php echo $templateUrl ?>/js/build/vendors.min.js"></script>
    <script src="<?php echo $templateUrl ?>/js/build/joomla.min.js"></script>



    <base href="/" />
    <!--[if lte IE 8]><link href="<?php echo $templateUrl ?>/css/ie.css" rel="stylesheet" /><![endif]-->


    <!--Favicons-->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo $templateUrl ?>/images/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $templateUrl ?>/images/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $templateUrl ?>/images/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $templateUrl ?>/images/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo $templateUrl ?>/images/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo $templateUrl ?>/images/favicon/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="<?php echo $templateUrl ?>/images/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?php echo $templateUrl ?>/images/favicon/favicon-16x16.png" sizes="16x16" />
    <meta name="application-name" content="Judicial Engagement Network" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="<?php echo $templateUrl ?>/images/favicon/mstile-144x144.png" />    

    <script type="text/javascript">
 Calendar._DN = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"]; Calendar._SDN = ["Sun","Mon","Tue","Wed","Thu","Fri","Sat","Sun"]; Calendar._FD = 0; Calendar._MN = ["January","February","March","April","May","June","July","August","September","October","November","December"]; Calendar._SMN = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]; Calendar._TT = {"INFO":"About the Calendar","ABOUT":"DHTML Date\/Time Selector\n(c) dynarch.com 2002-2005 \/ Author: Mihai Bazon\nFor latest version visit: http:\/\/www.dynarch.com\/projects\/calendar\/\nDistributed under GNU LGPL.  See http:\/\/gnu.org\/licenses\/lgpl.html for details.\n\nDate selection:\n- Use the \u00ab and \u00bb buttons to select year\n- Use the < and > buttons to select month\n- Hold mouse button on any of the buttons above for faster selection.","ABOUT_TIME":"\n\nTime selection:\n- Click on any of the time parts to increase it\n- or Shift-click to decrease it\n- or click and drag for faster selection.","PREV_YEAR":"Select to move to the previous year. Select and hold for a list of years.","PREV_MONTH":"Select to move to the previous month. Select and hold for a list of the months.","GO_TODAY":"Go to today","NEXT_MONTH":"Select to move to the next month. Select and hold for a list of the months.","SEL_DATE":"Select a date.","DRAG_TO_MOVE":"Drag to move.","PART_TODAY":" Today ","DAY_FIRST":"Display %s first","WEEKEND":"0,6","CLOSE":"Close","TODAY":"Today","TIME_PART":"(Shift-)Select or Drag to change the value.","DEF_DATE_FORMAT":"%Y-%m-%d","TT_DATE_FORMAT":"%a, %b %e","WK":"wk","TIME":"Time:"};
        jQuery(document).ready(function (){
            jQuery('select').chosen({"disable_search_threshold":10,"search_contains":true,"allow_single_deselect":true,"placeholder_text_multiple":"Type or select some options","placeholder_text_single":"Select an option","no_results_text":"No results match"});
        });
    
    Joomla.submitbutton = function(task)
    {
        if (task == 'article.cancel' || document.formvalidator.isValid(document.getElementById('adminForm')))
        {
            if (tinyMCE.get("jform_articletext").isHidden()) {tinyMCE.get("jform_articletext").show()};
            Joomla.submitform(task);
        }
    }


        
        // Add extra modal close functionality for tinyMCE-based editors
        document.onreadystatechange = function () {
            if (document.readyState == 'interactive' && typeof tinyMCE != 'undefined' && tinyMCE)
            {
                if (typeof window.jModalClose_no_tinyMCE === 'undefined')
                {   
                    window.jModalClose_no_tinyMCE = typeof(jModalClose) == 'function'  ?  jModalClose  :  false;
                    
                    jModalClose = function () {
                        if (window.jModalClose_no_tinyMCE) window.jModalClose_no_tinyMCE.apply(this, arguments);
                        tinyMCE.activeEditor.windowManager.close();
                    };
                }
        
                if (typeof window.SqueezeBoxClose_no_tinyMCE === 'undefined')
                {
                    if (typeof(SqueezeBox) == 'undefined')  SqueezeBox = {};
                    window.SqueezeBoxClose_no_tinyMCE = typeof(SqueezeBox.close) == 'function'  ?  SqueezeBox.close  :  false;
        
                    SqueezeBox.close = function () {
                        if (window.SqueezeBoxClose_no_tinyMCE)  window.SqueezeBoxClose_no_tinyMCE.apply(this, arguments);
                        tinyMCE.activeEditor.windowManager.close();
                    };
                }
            }
        };
        
jQuery(function($){ $(".hasPopover").popover({"html": true,"trigger": "hover focus","container": "body"}); });
            function jSelectArticle(id, title, catid, object, link, lang)
            {
                var hreflang = '';
                if (lang !== '')
                {
                    var hreflang = ' hreflang = "' + lang + '"';
                }
                var tag = '<a' + hreflang + ' href="' + link + '">' + title + '</a>';
                jInsertEditorText(tag, 'jform_articletext');
                jModalClose();
            }
            function insertReadmore(editor)
            {
                var content = tinyMCE.activeEditor.getContent();
                if (content.match(/<hr\s+id=("|')system-readmore("|')\s*\/*>/i))
                {
                    alert('There is already a Read more ... link that has been inserted. Only one link is permitted. Use {pagebreak} to split the page up further.');
                    return false;
                } else {
                    jInsertEditorText('<hr id="system-readmore" />', editor);
                }
            }
            
        var setCustomDir    = '';
        var mediaUploadPath = '';
        var uploadUri       = 'http://sbdev.judicialengagementnetwork.org/index.php?option=com_media&amp;task=file.upload&amp;tmpl=component&amp;78eaa5b1c1c9f4226773eb6c8f13dffe=9dkbmoefqdmfl46bicqe0fo493&amp;c3a60ec26130fc58f04aa9c42f7c9010=1&amp;asset=image&amp;format=json';
            
        window.getSize = window.getSize || function(){return {x: jQuery(window).width(), y: jQuery(window).height()};};
        tinymce.suffix = '.min';
        tinymce.baseURL = 'http://sbdev.judicialengagementnetwork.org/media/editors/tinymce';
        tinymce.init({
        
        directionality: "ltr",
        selector: "textarea#jform_articletext",
        language : "en",
        mode : "specific_textareas",
        autosave_restore_when_empty: false,
        skin : "lightgray",
        theme : "modern",
        schema: "html5",
        
        inline_styles : true,
        gecko_spellcheck : true,
        entity_encoding : "raw",
        verify_html: true,
        force_br_newlines : false, force_p_newlines : true, forced_root_block : 'p',
        toolbar_items_size: "small",
        
        relative_urls : true,
        remove_script_host : false,
        
        content_css : "/templates/system/css/editor.css",
        document_base_url : "http://sbdev.judicialengagementnetwork.org/",
        setup: function (editor) {
            
            !(function(){
                var getBtnOptions = new Function("return {handler: \'iframe\', size: {x: 800, y: 500}}"),
                    btnOptions = getBtnOptions(),
                    modalWidth = btnOptions.size && btnOptions.size.x ?  btnOptions.size.x : null,
                    modalHeight = btnOptions.size && btnOptions.size.y ?  btnOptions.size.y : null;
                editor.addButton("button-0Module", {
                    text: "Module",
                    title: "Module",
                    icon: "none icon-file-add",
                    onclick: function () {
                            var modalOptions = {
                                title  : "Module",
                                url : 'http://sbdev.judicialengagementnetwork.org/index.php?option=com_modules&amp;view=modules&amp;layout=modal&amp;tmpl=component&amp;editor=jform_articletext&amp;c3a60ec26130fc58f04aa9c42f7c9010=1',
                                buttons: [{
                                    text   : "Close",
                                    onclick: "close"
                                }]
                            }
                            if(modalWidth){
                                modalOptions.width = modalWidth;
                            }
                            if(modalHeight){
                                modalOptions.height = modalHeight;
                            }
                            editor.windowManager.open(modalOptions);
                    }
                });
            })();; 
            !(function(){
                var getBtnOptions = new Function("return {handler: \'iframe\', size: {x: 800, y: 500}}"),
                    btnOptions = getBtnOptions(),
                    modalWidth = btnOptions.size && btnOptions.size.x ?  btnOptions.size.x : null,
                    modalHeight = btnOptions.size && btnOptions.size.y ?  btnOptions.size.y : null;
                editor.addButton("button-1Article", {
                    text: "Article",
                    title: "Article",
                    icon: "none icon-file-add",
                    onclick: function () {
                            var modalOptions = {
                                title  : "Article",
                                url : 'http://sbdev.judicialengagementnetwork.org/index.php?option=com_content&amp;view=articles&amp;layout=modal&amp;tmpl=component&amp;c3a60ec26130fc58f04aa9c42f7c9010=1',
                                buttons: [{
                                    text   : "Close",
                                    onclick: "close"
                                }]
                            }
                            if(modalWidth){
                                modalOptions.width = modalWidth;
                            }
                            if(modalHeight){
                                modalOptions.height = modalHeight;
                            }
                            editor.windowManager.open(modalOptions);
                    }
                });
            })();; 
            !(function(){
                var getBtnOptions = new Function("return {handler: \'iframe\', size: {x: 800, y: 500}}"),
                    btnOptions = getBtnOptions(),
                    modalWidth = btnOptions.size && btnOptions.size.x ?  btnOptions.size.x : null,
                    modalHeight = btnOptions.size && btnOptions.size.y ?  btnOptions.size.y : null;
                editor.addButton("button-2Image", {
                    text: "Image",
                    title: "Image",
                    icon: "none icon-pictures",
                    onclick: function () {
                            var modalOptions = {
                                title  : "Image",
                                url : 'http://sbdev.judicialengagementnetwork.org/index.php?option=com_media&amp;view=images&amp;tmpl=component&amp;e_name=jform_articletext&amp;asset=60&amp;author=189',
                                buttons: [{
                                    text   : "Close",
                                    onclick: "close"
                                }]
                            }
                            if(modalWidth){
                                modalOptions.width = modalWidth;
                            }
                            if(modalHeight){
                                modalOptions.height = modalHeight;
                            }
                            editor.windowManager.open(modalOptions);
                    }
                });
            })();; 
            !(function(){
                var getBtnOptions = new Function("return {handler: \'iframe\', size: {x: 500, y: 300}}"),
                    btnOptions = getBtnOptions(),
                    modalWidth = btnOptions.size && btnOptions.size.x ?  btnOptions.size.x : null,
                    modalHeight = btnOptions.size && btnOptions.size.y ?  btnOptions.size.y : null;
                editor.addButton("button-3PageBreak", {
                    text: "Page Break",
                    title: "Page Break",
                    icon: "none icon-copy",
                    onclick: function () {
                            var modalOptions = {
                                title  : "Page Break",
                                url : 'http://sbdev.judicialengagementnetwork.org/index.php?option=com_content&amp;view=article&amp;layout=pagebreak&amp;tmpl=component&amp;e_name=jform_articletext',
                                buttons: [{
                                    text   : "Close",
                                    onclick: "close"
                                }]
                            }
                            if(modalWidth){
                                modalOptions.width = modalWidth;
                            }
                            if(modalHeight){
                                modalOptions.height = modalHeight;
                            }
                            editor.windowManager.open(modalOptions);
                    }
                });
            })();; 
            !(function(){
                var btnOptions = {}, modalWidth = null, modalHeight = null;
                editor.addButton("button-4ReadMore", {
                    text: "Read More",
                    title: "Read More",
                    icon: "none icon-arrow-down",
                    onclick: function () {

                        insertReadmore('jform_articletext');return false;
                            
                    }
                });
            })();
        },
        paste_data_images: true,
        
            valid_elements : "",
            extended_valid_elements : "hr[id|title|alt|class|width|size|noshade]",
            invalid_elements : "script,applet,iframe",
            // Plugins
            plugins : "table link code hr charmap autolink lists importcss jdragdrop",
            // Toolbar
            toolbar1: "bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | formatselect | bullist numlist | outdent indent | undo redo | link unlink anchor code | hr table | subscript superscript | charmap | button-0Module | button-1Article | button-2Image | button-3PageBreak | button-4ReadMore",
            removed_menuitems: "newdocument",
            // Layout
            importcss_append: true,
            // Advanced Options
            resize: "both",
            height : "550",
            width : ""
        });
            
        function jInsertEditorText( text, editor )
        {
            tinyMCE.activeEditor.execCommand('mceInsertContent', false, text);
        }
        
jQuery(function($){ $(".hasTooltip").tooltip({"html": true,"container": "body"}); });
        jQuery(document).ready(function (){
            jQuery('#jform_tags').chosen({"disable_search_threshold":10,"search_contains":true,"allow_single_deselect":true,"placeholder_text_multiple":"Type or select some options","placeholder_text_single":"Select an option","no_results_text":"No results match"});
        });
    
        jQuery(document).ready(function ($) {
            $('#jform_tags').ajaxChosen({
                type: 'GET',
                url: 'http://sbdev.judicialengagementnetwork.org/index.php?option=com_tags&task=tags.searchAjax',
                dataType: 'json',
                jsonTermKey: 'like',
                afterTypeDelay: '500',
                minTermLength: '3'
            }, function (data) {
                var results = [];

                $.each(data, function (i, val) {
                    results.push({ value: val.value, text: val.text });
                });

                return results;
            });
        });
    
        jQuery(document).ready(function ($) {

            var customTagPrefix = '#new#';

            // Method to add tags pressing enter
            $('#jform_tags_chzn input').keyup(function(event) {

                // Tag is greater than the minimum required chars and enter pressed
                if (this.value && this.value.length >= 3 && (event.which === 13 || event.which === 188)) {

                    // Search an highlighted result
                    var highlighted = $('#jform_tags_chzn').find('li.active-result.highlighted').first();

                    // Add the highlighted option
                    if (event.which === 13 && highlighted.text() !== '')
                    {
                        // Extra check. If we have added a custom tag with this text remove it
                        var customOptionValue = customTagPrefix + highlighted.text();
                        $('#jform_tags option').filter(function () { return $(this).val() == customOptionValue; }).remove();

                        // Select the highlighted result
                        var tagOption = $('#jform_tags option').filter(function () { return $(this).html() == highlighted.text(); });
                        tagOption.attr('selected', 'selected');
                    }
                    // Add the custom tag option
                    else
                    {
                        var customTag = this.value;

                        // Extra check. Search if the custom tag already exists (typed faster than AJAX ready)
                        var tagOption = $('#jform_tags option').filter(function () { return $(this).html() == customTag; });
                        if (tagOption.text() !== '')
                        {
                            tagOption.attr('selected', 'selected');
                        }
                        else
                        {
                            var option = $('<option>');
                            option.text(this.value).val(customTagPrefix + this.value);
                            option.attr('selected','selected');

                            // Append the option an repopulate the chosen field
                            $('#jform_tags').append(option);
                        }
                    }

                    this.value = '';
                    $('#jform_tags').trigger('liszt:updated');
                    event.preventDefault();

                }
            });
        });
        
jQuery(document).ready(function($) {Calendar.setup({
            // Id of the input field
            inputField: "jform_publish_up",
            // Format of the input field
            ifFormat: "%Y-%m-%d %H:%M:%S",
            // Trigger for the calendar (button ID)
            button: "jform_publish_up_img",
            // Alignment (defaults to "Bl")
            align: "Tl",
            singleClick: true,
            firstDay: 0
            });});
jQuery(document).ready(function($) {Calendar.setup({
            // Id of the input field
            inputField: "jform_publish_down",
            // Format of the input field
            ifFormat: "%Y-%m-%d %H:%M:%S",
            // Trigger for the calendar (button ID)
            button: "jform_publish_down_img",
            // Alignment (defaults to "Bl")
            align: "Tl",
            singleClick: true,
            firstDay: 0
            });});
    </script>

</head>
<body <?php echo ($isHome ? 'class="home"': "") ?>>

    <div class="wrapper">
    <!--Skip Links-->
    <a href="#main" class="v-hidden focusable">
        <?php echo JText::_('TPL_JEN_SKIP_TO_CONTENT'); ?>
    </a>

    <a href="#nav" class="v-hidden focusable">
        <?php echo JText::_('TPL_JEN_JUMP_TO_NAV'); ?>
    </a>


    <header>
            <a class="site-branding" href="/" title="Go to Home Page">
                <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 612 262" overflow="scroll">
                    <title>Judicial Engagement Network</title>
                    <path d="M92.7 212.2v-83.1c0-.4-.2-.8-.5-1.1-4.6-4.5-9.3-6.5-14-6.1-6.6.6-10.4 6.1-10.6 6.3-.2.2-.3.5-.3.9v83.1H92.7zM139.8 212.2v-83.1c0-.4-.2-.8-.5-1.1-4.6-4.5-9.3-6.5-14-6.1-6.6.6-10.4 6.1-10.6 6.3-.2.2-.3.5-.3.9v83.1H139.8zM186.9 212.2v-83.1c0-.4-.2-.8-.5-1.1-4.6-4.5-9.3-6.5-13.9-6.1-6.6.6-10.4 6.1-10.6 6.3-.2.2-.3.5-.3.9v83.1H186.9zM39 99.8h6.6v112.4H39zM204.9 99.8h6.6v112.4h-6.6zM38.5 222.5h173.4v6.6H38.5zM27.6 236.4h195.2v6.6H27.6zM17.1 250.4h216.2v6.6H17.1zM205.4 23.4h-24.6v20.1l-53.2-42L15.1 90.9v8.8l225 .1v-9.5l-34.7-27.4V23.4zM140 79.2h-25.5V53.6H140v25.6zM252.4 125.9c.9.4 2.1.6 3.4.6 1.8 0 3.2-.2 4.3-.7 1.1-.5 1.9-1.1 2.5-2 .6-.8 1-1.7 1.1-2.8.2-1 .3-2.1.3-3.2v-16.9h-4.4v17.2c0 .8 0 1.5-.1 2.1-.1.6-.3 1.1-.5 1.5-.3.4-.6.7-1.1.9s-1 .3-1.7.3c-1.3 0-2.2-.4-2.7-1.2-.5-.8-.7-1.9-.7-3.3v-1.3h-4.4v1.3c0 1.1.1 2.2.4 3.2s.7 1.8 1.3 2.5c.6.8 1.4 1.4 2.3 1.8zM271.7 124.1c.9.8 2 1.4 3.2 1.8s2.7.6 4.2.6 2.9-.2 4.2-.6 2.3-1 3.2-1.8c.9-.8 1.6-1.8 2.1-3s.7-2.6.7-4.2v-16H285v14.6c0 .8 0 1.7-.1 2.6-.1.9-.3 1.6-.7 2.3-.4.7-1 1.3-1.8 1.7-.8.4-1.9.7-3.3.7s-2.5-.2-3.3-.7c-.8-.4-1.4-1-1.8-1.7-.4-.7-.6-1.5-.7-2.3-.1-.9-.1-1.7-.1-2.6v-14.6h-4.4v16c0 1.6.2 3 .7 4.2s1.3 2.2 2.2 3zM309.5 124.9c1.4-.7 2.5-1.5 3.4-2.7.9-1.1 1.5-2.5 2-4 .4-1.5.6-3.1.6-4.9 0-1.7-.2-3.3-.6-4.9-.4-1.5-1.1-2.8-2-4-.9-1.1-2-2-3.4-2.7-1.4-.7-3.1-1-5-1h-10.4v25h10.4c2 .2 3.6-.1 5-.8zm-10.9-2.6v-17.9h4.3c1.7 0 3.1.2 4.2.7 1.1.5 1.9 1.1 2.6 1.9.6.8 1 1.8 1.3 2.8.2 1.1.3 2.3.3 3.5 0 1.3-.1 2.4-.3 3.5-.2 1.1-.6 2-1.3 2.8-.6.8-1.5 1.4-2.6 1.9s-2.5.7-4.2.7h-4.3zM319.3 100.9h4.4v25h-4.4zM330.6 122.7c1 1.2 2.3 2.1 3.8 2.8s3.2 1 5 1c1.5 0 2.9-.2 4.2-.7 1.3-.5 2.4-1.2 3.3-2.1.9-.9 1.7-2 2.2-3.2.5-1.2.9-2.6 1-4.1h-4.3c-.1.9-.3 1.8-.6 2.6s-.7 1.5-1.3 2.1c-.5.6-1.2 1.1-1.9 1.4-.7.3-1.6.5-2.6.5-1.3 0-2.5-.3-3.4-.8-1-.5-1.8-1.3-2.4-2.2-.6-.9-1.1-1.9-1.3-3.1-.3-1.1-.4-2.3-.4-3.5s.1-2.4.4-3.5c.3-1.1.7-2.2 1.3-3.1.6-.9 1.4-1.6 2.4-2.2 1-.5 2.1-.8 3.4-.8.9 0 1.7.1 2.4.4s1.3.6 1.8 1 .9 1 1.3 1.6c.3.6.6 1.3.8 2h4.4c-.1-1.4-.5-2.6-1.1-3.6-.6-1.1-1.3-1.9-2.3-2.7-.9-.7-2-1.3-3.3-1.7-1.2-.4-2.6-.6-4-.6-1.9 0-3.5.4-5 1-1.5.7-2.7 1.6-3.8 2.8-1 1.2-1.8 2.6-2.4 4.2-.5 1.6-.8 3.3-.8 5 0 1.8.3 3.5.8 5.1.6 1.8 1.4 3.2 2.4 4.4zM353.8 100.9h4.4v25h-4.4zM367.3 119.3h10l2.3 6.6h4.7l-9.6-25H370l-9.6 25h4.5l2.4-6.6zm5-14.1h.1l3.7 10.7h-7.6l3.8-10.7zM403.7 122.1H391v-21.2h-4.4v25h17.1M268.6 151v-3.8h-18v25h18.2v-3.8H255v-7.3h12.6v-3.6H255V151M288.4 165.6h-.1l-11.4-18.4h-4.6v25h4.2v-18.4h.1l11.3 18.4h4.7v-25h-4.2M319.3 159h-10.6v3.3h6.7c0 1-.2 2-.5 2.9-.3.9-.8 1.6-1.3 2.2-.6.6-1.3 1-2.2 1.4-.9.3-1.9.5-3 .4-1.3 0-2.5-.3-3.4-.8-1-.5-1.8-1.3-2.4-2.2-.6-.9-1.1-1.9-1.3-3.1-.3-1.1-.4-2.3-.4-3.5 0-1.2.1-2.4.4-3.5.3-1.1.7-2.2 1.3-3.1.6-.9 1.4-1.6 2.4-2.2 1-.5 2.1-.8 3.4-.8.8 0 1.6.1 2.3.3s1.4.5 2 .9c.6.4 1.1.9 1.5 1.6.4.6.6 1.3.8 2.2h4.3c-.2-1.4-.6-2.6-1.2-3.7s-1.4-2-2.4-2.7c-1-.7-2-1.2-3.3-1.6-1.2-.4-2.5-.5-3.9-.5-1.9 0-3.5.4-5 1-1.5.7-2.7 1.6-3.8 2.8-1 1.2-1.8 2.6-2.4 4.2-.5 1.6-.8 3.3-.8 5 0 1.8.3 3.5.8 5.1s1.3 3 2.4 4.2c1 1.2 2.3 2.1 3.8 2.8 1.5.7 3.2 1 5 1 1.5 0 2.9-.3 4-.8s2.3-1.4 3.5-2.8l.7 2.9h2.8V159zM330.9 147.2l-9.6 25h4.5l2.3-6.6h10l2.3 6.6h4.7l-9.6-25h-4.6zm-1.6 15l3.8-10.7h.1l3.7 10.7h-7.6zM348.3 150.5c-1 1.2-1.8 2.6-2.4 4.2-.5 1.6-.8 3.3-.8 5 0 1.8.3 3.5.8 5.1s1.3 3 2.4 4.2c1 1.2 2.3 2.1 3.8 2.8s3.2 1 5 1c1.5 0 2.9-.3 4-.8 1.2-.5 2.3-1.4 3.5-2.8l.7 2.9h2.8V159h-10.6v3.3h6.6c0 1-.2 2-.5 2.9-.3.9-.8 1.6-1.3 2.2s-1.3 1-2.2 1.4c-.9.3-1.9.5-3 .4-1.3 0-2.5-.3-3.4-.8-1-.5-1.8-1.3-2.4-2.2-.6-.9-1.1-1.9-1.3-3.1-.3-1.1-.4-2.3-.4-3.5 0-1.2.1-2.4.4-3.5.3-1.1.7-2.2 1.3-3.1.6-.9 1.4-1.6 2.4-2.2 1-.5 2.1-.8 3.4-.8.8 0 1.6.1 2.3.3.7.2 1.4.5 2 .9s1.1.9 1.5 1.6c.4.6.6 1.3.8 2.2h4.3c-.2-1.4-.6-2.6-1.2-3.7s-1.4-2-2.4-2.7c-1-.7-2-1.2-3.3-1.6-1.2-.4-2.5-.5-3.9-.5-1.9 0-3.5.4-5 1-1.6.9-2.9 1.8-3.9 3zM391 168.4h-13.9v-7.3h12.6v-3.6h-12.6V151h13.6v-3.8h-18v25H391M394.5 147.2v25h4.1v-19.3h.1l6.9 19.3h3.7l6.9-19.3h.1v19.3h4.1v-25h-6.1l-6.7 19.6h-.1l-6.9-19.6M443.6 168.4h-13.8v-7.3h12.6v-3.6h-12.6V151h13.6v-3.8h-18v25h18.2M463.2 165.6h-.1l-11.4-18.4h-4.6v25h4.2v-18.4h.1l11.3 18.4h4.7v-25h-4.2M477.8 172.2h4.3V151h8v-3.8h-20.2v3.8h7.9M266.5 211.9h-.1L255 193.5h-4.6v25h4.2v-18.4h.1l11.4 18.4h4.6v-25h-4.2M293.6 197.3v-3.8h-18v25h18.3v-3.8H280v-7.3h12.6v-3.6H280v-6.5M295.6 197.3h7.9v21.2h4.4v-21.2h7.9v-3.8h-20.2M345.3 193.5l-4.6 19.1h-.1l-4.9-19.1h-4.5l-5 19.1h-.1l-4.5-19.1h-4.5l6.6 25h4.5l5.1-19.1h.1l5 19.1h4.5l6.9-25M371.2 215.2c1-1.2 1.8-2.6 2.4-4.2s.8-3.3.8-5.1c0-1.8-.3-3.5-.8-5-.5-1.6-1.3-3-2.4-4.2-1-1.2-2.3-2.1-3.8-2.8s-3.2-1-5-1c-1.9 0-3.5.3-5 1s-2.7 1.6-3.8 2.8c-1 1.2-1.8 2.6-2.4 4.2-.5 1.6-.8 3.3-.8 5 0 1.8.3 3.5.8 5.1.5 1.6 1.3 3 2.4 4.2 1 1.2 2.3 2.1 3.8 2.8s3.2 1 5 1c1.9 0 3.5-.3 5-1s2.8-1.6 3.8-2.8zm-1.6-5.7c-.3 1.1-.7 2.2-1.3 3.1-.6.9-1.4 1.6-2.4 2.2-1 .5-2.1.8-3.4.8s-2.5-.3-3.4-.8c-1-.5-1.8-1.3-2.4-2.2-.6-.9-1.1-1.9-1.3-3.1-.3-1.1-.4-2.3-.4-3.5 0-1.2.1-2.4.4-3.5.3-1.1.7-2.2 1.3-3.1.6-.9 1.4-1.6 2.4-2.2 1-.5 2.1-.8 3.4-.8s2.5.3 3.4.8c1 .5 1.8 1.3 2.4 2.2.6.9 1.1 1.9 1.3 3.1.3 1.1.4 2.3.4 3.5 0 1.2-.1 2.3-.4 3.5zM397.9 211.9c0-1-.1-1.8-.4-2.5-.2-.7-.6-1.2-.9-1.6s-.8-.7-1.2-.9c-.4-.2-.8-.3-1.2-.4v-.1c.2-.1.5-.2 1-.4s.9-.6 1.4-1c.5-.5.9-1.1 1.2-1.9.3-.8.5-1.8.5-3 0-2.1-.7-3.8-2.1-5-1.4-1.2-3.4-1.8-6.2-1.8h-11.9v25h4.4V208h6.4c1 0 1.8.1 2.5.4.6.3 1.1.7 1.5 1.2s.6 1.2.8 2.1c.1.8.2 1.8.2 3 0 .6 0 1.2.1 1.9s.3 1.2.6 1.8h4.7c-.5-.5-.8-1.4-1-2.6s-.4-2.4-.4-3.9zm-5.1-8c-.7.7-1.8 1-3.2 1h-7.2v-7.8h7.1c.6 0 1.1 0 1.6.1s1 .3 1.4.6c.4.3.7.7 1 1.2.2.5.4 1.1.4 1.9 0 1.3-.3 2.3-1.1 3zM424.2 218.5l-10.6-15 9.9-10h-5.3L407 204.9v-11.4h-4.3v25h4.3v-8.4l3.6-3.6 8.2 12M257.5 248.8c-.5-.5-1.3-1-2.4-1.6l-1.4-.7c-.9-.5-1.5-1-1.9-1.5-.4-.5-.6-1-.6-1.6 0-.7.3-1.4.8-1.9.6-.5 1.3-.8 2.1-.8.9 0 1.7.3 2.4.8s1.1 1.3 1.4 2.3v-3.2c-.4-.3-1-.6-1.6-.8s-1.3-.3-1.9-.3c-1.4 0-2.6.4-3.6 1.2-1 .8-1.4 1.8-1.4 3.1 0 .6.1 1.2.3 1.7.2.5.5.9.9 1.2.4.4.8.7 1.2 1 .5.3.9.6 1.4.8.5.3.9.5 1.4.8.4.3.8.5 1.2.9.4.3.6.7.9 1.1s.3.9.3 1.4c0 .8-.3 1.5-.9 2s-1.4.7-2.3.7c-2.2 0-3.7-1.3-4.5-3.7v3.7c.6.4 1.2.7 1.9.9.7.2 1.5.4 2.3.4 1.2 0 2.1-.2 2.9-.6.8-.4 1.4-.9 1.8-1.6.4-.7.6-1.4.6-2.3 0-.7-.1-1.3-.4-1.9-.1-.6-.4-1.1-.9-1.5zM266.1 254.8c-.4.3-.8.4-1.2.4-.5 0-.9-.2-1.1-.6-.3-.4-.4-.9-.4-1.7v-7h3.4v-1.2h-3.4V242l-3.3 3.9h1.5v7.5c0 .9.2 1.7.7 2.3.5.6 1.1.9 1.8.9.8 0 1.4-.2 1.9-.7.5-.5.9-1.2 1.1-2-.2.3-.5.6-1 .9zM272.9 245.2c-.7.6-1.2 1.3-1.5 2.1v-3.1l-3 1.3h.2c.3 0 .5.1.6.2s.2.3.3.6c.1.3.1.7.1 1.1v6.5c0 .6-.1 1.1-.3 1.5-.2.4-.4.6-.7.7h3.7c-.3 0-.5-.3-.7-.6-.2-.4-.3-.9-.3-1.5v-3.4c0-.8.1-1.6.4-2.3s.6-1.3 1.1-1.7c.5-.4.9-.6 1.4-.6.4 0 .7.1 1 .3s.6.5.8.8v-2.5c-.4-.2-.7-.3-1.1-.3-.6 0-1.3.3-2 .9zM286.2 245.1c-.8-.5-1.8-.8-2.9-.8-1.1 0-2.1.3-3 .8-.9.6-1.5 1.3-2 2.3-.5 1-.7 2-.7 3.2 0 1.1.2 2.1.7 3 .4.9 1.1 1.6 1.9 2.1.8.5 1.8.8 2.9.8 1.1 0 2.1-.3 3-.8.9-.5 1.5-1.3 2-2.3.5-1 .7-2.1.7-3.2s-.2-2.1-.7-3c-.4-.9-1.1-1.6-1.9-2.1zm.2 8c-.3.7-.7 1.3-1.2 1.7-.5.4-1.1.6-1.8.6-.8 0-1.5-.2-2.1-.7-.6-.5-1.1-1.1-1.4-1.9-.3-.8-.5-1.7-.5-2.6 0-.8.2-1.6.5-2.4.3-.8.7-1.3 1.2-1.7s1.1-.6 1.7-.6c.8 0 1.4.2 2 .7.6.5 1.1 1.1 1.4 1.9s.5 1.7.5 2.6c.1.9 0 1.7-.3 2.4zM300.7 255.6c-.2-.4-.3-.9-.3-1.5v-6c0-1.2-.3-2.1-.8-2.8-.6-.7-1.3-1-2.3-1-.7 0-1.5.2-2.3.7-.8.4-1.4 1-1.8 1.6v-2.3l-3.2 1.4h.3c.5 0 .8.2 1 .5.2.3.2.9.2 1.7v6.3c0 .6-.1 1.1-.2 1.4-.2.4-.4.6-.8.7h3.8c-.3-.1-.6-.3-.7-.6s-.3-.8-.3-1.4v-5.2c0-.5.2-1.1.5-1.5.3-.5.8-.9 1.3-1.2.5-.3 1-.4 1.5-.4.7 0 1.2.2 1.6.7.4.5.6 1.2.6 2.1v5.5c0 .6-.1 1.1-.2 1.4-.2.4-.4.6-.7.7h3.7c-.5-.3-.7-.5-.9-.8zM309.7 244.6c-.7-.2-1.3-.3-1.9-.3-.9 0-1.7.2-2.4.6-.7.4-1.2.9-1.6 1.6-.4.7-.6 1.4-.6 2.2 0 .8.2 1.4.6 2.1.4.6 1 1.1 1.7 1.4-.6.3-1.1.7-1.5 1.1-.4.4-.6.8-.6 1.2 0 .4.1.7.4 1 .3.3.6.5 1.1.6-.6.2-1.2.6-1.6 1.1-.5.5-.7 1-.7 1.5 0 .7.4 1.2 1.2 1.7s1.8.6 3 .6c1.3 0 2.4-.2 3.3-.5 1-.3 1.7-.8 2.2-1.4s.8-1.2.8-1.9-.3-1.3-.9-1.7c-.6-.4-1.4-.7-2.5-.7l-2.9-.1c-.6 0-1-.1-1.3-.3s-.5-.4-.5-.6.1-.5.4-.8c.3-.3.7-.5 1.2-.7.3 0 .6.1 1.1.1 1.3 0 2.4-.4 3.2-1.1.8-.7 1.2-1.7 1.2-2.8 0-1-.3-1.9-.9-2.5h1.2c.4 0 .7-.1.8-.1v-1.5c-.5.4-1.2.6-2 .6-.5-.1-1-.2-1.5-.4zm-3.6 11.7c1.1 0 2.1.1 2.9.1.9 0 1.5.1 2 .3s.7.6.7 1c0 .6-.4 1.1-1.1 1.5-.7.4-1.7.5-3 .5-1.1 0-1.9-.1-2.4-.4s-.8-.7-.8-1.1c0-.7.5-1.3 1.7-1.9zm3.5-5.7c-.5.5-1 .8-1.8.8s-1.5-.3-2-.9c-.5-.6-.8-1.4-.8-2.4 0-.8.2-1.4.7-1.9.4-.5 1-.8 1.8-.8s1.5.3 2 .9.8 1.4.8 2.3c0 .8-.2 1.5-.7 2zM321.9 242.2v11.7c0 .7-.1 1.2-.3 1.6-.2.4-.5.6-.9.7h4.2c-.4-.1-.6-.3-.8-.7-.2-.4-.3-.9-.3-1.5v-5.5h3.5c.5 0 .9.1 1.3.3.3.2.5.4.6.7v-3.2c-.1.4-.4.6-.7.8-.3.1-.7.2-1.2.2h-3.5v-6.2h3.9c.8 0 1.4.1 1.9.3.5.2.8.6.9 1.1v-2.6h-9.8c.8.2 1.2 1 1.2 2.3zM340.6 254.7c-.3-.4-.5-1-.5-1.7v-5.3c0-1.1-.3-1.9-1-2.5s-1.5-.9-2.7-.9c-.9 0-1.7.1-2.4.4s-1.2.7-1.6 1.2c-.4.5-.6 1.1-.6 1.7 0 .5.1.9.3 1.3l2-.8c-.2-.1-.3-.2-.4-.4s-.2-.4-.2-.7c0-.5.2-.9.7-1.2.4-.3 1-.5 1.8-.5s1.3.2 1.7.7.6 1.1.6 2v1.3c-2.2.5-3.9 1.1-5 1.9-1.1.8-1.7 1.6-1.7 2.6 0 .8.3 1.5.9 1.9s1.4.7 2.4.7c.8 0 1.6-.2 2.2-.5.7-.3 1.1-.7 1.4-1.3.1.4.3.8.6 1.2.4.4.8.6 1.3.7l1.8-1.4h-.4c-.4.3-.9.1-1.2-.4zm-2.3-1.7c0 .7-.3 1.2-.9 1.7-.6.5-1.2.7-2 .7-.6 0-1.1-.2-1.5-.5s-.6-.8-.6-1.3c0-.7.4-1.3 1.2-1.8.8-.5 2-.9 3.7-1.3v2.5zM360.1 255.6c-.2-.4-.3-.9-.3-1.5v-5.8c0-1.2-.3-2.2-.8-2.9-.5-.7-1.3-1.1-2.2-1.1-.8 0-1.6.2-2.3.6-.8.4-1.4.9-1.8 1.6-.1-.7-.4-1.2-.9-1.6-.5-.4-1.1-.6-1.7-.6-.7 0-1.5.2-2.2.6-.8.4-1.3.9-1.8 1.6v-2.3l-3.2 1.4h.3c.5 0 .8.2 1 .5.2.3.2.9.2 1.7v6.3c0 .6-.1 1.1-.2 1.4s-.4.6-.8.7h3.7c-.3-.1-.5-.3-.7-.7-.2-.4-.2-.9-.2-1.5v-5.2c0-.5.1-1 .4-1.5s.7-.9 1.2-1.2 1-.4 1.5-.4c.6 0 1.1.3 1.4.8.3.5.5 1.3.5 2.3v5.3c0 .6-.1 1.1-.2 1.5-.2.4-.4.6-.7.6h3.7c-.3 0-.5-.3-.7-.6-.2-.4-.3-.9-.3-1.5v-5.2c0-.8.3-1.6 1-2.2.6-.6 1.4-.9 2.2-.9.6 0 1.1.3 1.5.8.3.5.5 1.3.5 2.3v5.3c0 .6-.1 1.1-.2 1.5s-.4.6-.7.7h3.7c-.5-.2-.7-.5-.9-.8zM365.3 241.9c.2-.2.3-.5.3-.9s-.1-.7-.4-.9c-.2-.2-.5-.3-.9-.3s-.7.1-.9.3c-.2.2-.4.5-.4.9 0 .3.1.6.3.9s.5.4.9.4c.6-.1.9-.2 1.1-.4zM365.8 255.6c-.2-.4-.3-.9-.3-1.5v-9.8l-3.2 1.4h.3c.4 0 .7.1.9.4.2.3.3.8.3 1.5v6.5c0 .6-.1 1.1-.3 1.5s-.4.6-.8.7h3.9c-.4-.2-.6-.4-.8-.7zM371.4 255.6c-.2-.4-.3-.9-.3-1.5v-14.8l-3.3 1.3h.2c.5 0 .8.2 1 .5.2.4.3.9.3 1.8v11.3c0 .6-.1 1.1-.3 1.5-.2.4-.4.6-.7.7h3.8c-.3-.2-.5-.5-.7-.8zM377 255.6c-.2-.4-.3-.9-.3-1.5v-9.8l-3.2 1.4h.3c.4 0 .7.1.9.4.2.3.3.8.3 1.5v6.5c0 .6-.1 1.1-.3 1.5s-.4.6-.8.7h3.9c-.3-.2-.6-.4-.8-.7zM374.7 240.1c-.2.2-.4.5-.4.9 0 .3.1.6.3.9s.5.4.9.4.7-.1.9-.4c.2-.2.3-.5.3-.9s-.1-.7-.4-.9c-.2-.2-.5-.3-.9-.3-.1 0-.4.1-.7.3zM387 254.5c-.7.4-1.3.5-2 .5s-1.4-.2-2-.6c-.6-.4-1.1-1-1.4-1.7-.3-.7-.5-1.6-.5-2.5h7.6c-.1-1.8-.5-3.3-1.3-4.3-.8-1.1-1.8-1.6-3.1-1.6-1 0-1.8.3-2.6.8s-1.4 1.3-1.8 2.3c-.4 1-.6 2-.6 3.2 0 1.1.2 2.1.6 3.1s1 1.6 1.8 2.1 1.7.7 2.7.7c1.1 0 2-.3 2.8-.9.7-.6 1.3-1.5 1.7-2.8-.6.8-1.2 1.4-1.9 1.7zm-5.4-7.2c.3-.6.6-1.1 1.1-1.4.4-.3.9-.5 1.5-.5.8 0 1.4.4 1.8 1.1.4.7.7 1.6.7 2.8h-5.5c0-.8.1-1.4.4-2zM396.8 250.9c-.4-.3-1.1-.7-2.1-1.2-.7-.4-1.3-.7-1.6-.9-.3-.2-.5-.5-.7-.7s-.2-.5-.2-.9c0-.5.2-.9.6-1.2.4-.3.9-.5 1.5-.5 1.2 0 2.2.7 2.9 2.2v-2.5c-.8-.5-1.8-.8-2.9-.8-1.1 0-2 .3-2.7 1-.7.6-1 1.4-1 2.4 0 .7.2 1.3.6 1.8.4.5 1.1 1 2.1 1.6l1.2.6c.6.3 1 .7 1.3 1 .3.3.4.7.4 1.1 0 .5-.2 1-.7 1.3-.4.3-1 .5-1.8.5-1.5 0-2.6-.9-3.3-2.7v2.9c.4.3.8.5 1.4.7.6.2 1.2.3 1.8.3 1.3 0 2.3-.3 3-.9.7-.6 1.1-1.4 1.1-2.4 0-.5-.1-.9-.3-1.3.1-.8-.2-1.1-.6-1.4zM406 237.1h1.4v24.5H406zM423.8 248.8c-.5-.5-1.3-1-2.4-1.6l-1.4-.7c-.9-.5-1.5-1-1.9-1.5-.4-.5-.6-1-.6-1.6 0-.7.3-1.4.8-1.9.6-.5 1.3-.8 2.1-.8.9 0 1.7.3 2.4.8s1.1 1.3 1.4 2.3v-3.2c-.4-.3-1-.6-1.6-.8-.6-.2-1.3-.3-1.9-.3-1.4 0-2.6.4-3.6 1.2-1 .8-1.4 1.8-1.4 3.1 0 .6.1 1.2.3 1.7.2.5.5.9.9 1.2.4.4.8.7 1.2 1 .5.3.9.6 1.4.8.5.3.9.5 1.4.8s.8.5 1.2.9c.4.3.6.7.9 1.1s.3.9.3 1.4c0 .8-.3 1.5-.9 2s-1.4.7-2.3.7c-2.2 0-3.7-1.3-4.5-3.7v3.7c.6.4 1.2.7 1.9.9.7.2 1.5.4 2.3.4 1.2 0 2.1-.2 2.9-.6.8-.4 1.4-.9 1.8-1.6.4-.7.6-1.4.6-2.3 0-.7-.1-1.3-.4-1.9 0-.6-.4-1.1-.9-1.5zM436.3 254.7c-.3-.4-.5-1-.5-1.7v-5.3c0-1.1-.3-1.9-1-2.5s-1.5-.9-2.7-.9c-.9 0-1.7.1-2.4.4s-1.2.7-1.6 1.2c-.4.5-.6 1.1-.6 1.7 0 .5.1.9.3 1.3l2-.8c-.2-.1-.3-.2-.4-.4s-.2-.4-.2-.7c0-.5.2-.9.7-1.2.4-.3 1-.5 1.8-.5s1.3.2 1.7.7.6 1.1.6 2v1.3c-2.2.5-3.9 1.1-5 1.9-1.1.8-1.7 1.6-1.7 2.6 0 .8.3 1.5.9 1.9s1.4.7 2.4.7c.8 0 1.6-.2 2.2-.5.7-.3 1.1-.7 1.4-1.3.1.4.3.8.6 1.2.4.4.8.6 1.3.7l1.8-1.4h-.4c-.5.3-.9.1-1.2-.4zM434 253c0 .7-.3 1.2-.9 1.7-.6.5-1.2.7-2 .7-.6 0-1.1-.2-1.5-.5s-.6-.8-.6-1.3c0-.7.4-1.3 1.2-1.8.8-.5 2-.9 3.7-1.3v2.5zM441.3 240.6c-.6.9-1 2.1-1 3.6v.5h-2v1.2h2v8.1c0 .6-.1 1.2-.3 1.5-.2.4-.4.6-.8.7h3.8c-.3 0-.5-.3-.7-.7-.2-.4-.3-.9-.3-1.6v-8.1h2.9v-1.2H442V243c0-.9.1-1.6.3-2 .2-.4.5-.6 1-.6.3 0 .7.1 1 .3s.5.4.7.7v-2.2c-.3-.1-.7-.1-1.1-.1-1.1.2-2 .6-2.6 1.5zM453.8 254.5c-.7.4-1.3.5-2 .5s-1.4-.2-2-.6c-.6-.4-1.1-1-1.4-1.7-.3-.7-.5-1.6-.5-2.5h7.6c-.1-1.8-.5-3.3-1.3-4.3-.8-1.1-1.8-1.6-3.1-1.6-1 0-1.8.3-2.6.8s-1.4 1.3-1.8 2.3c-.4 1-.6 2-.6 3.2 0 1.1.2 2.1.6 3.1s1 1.6 1.8 2.1 1.7.7 2.7.7c1.1 0 2-.3 2.8-.9.7-.6 1.3-1.5 1.7-2.8-.6.8-1.2 1.4-1.9 1.7zm-5.4-7.2c.3-.6.6-1.1 1.1-1.4.4-.3.9-.5 1.5-.5.8 0 1.4.4 1.8 1.1.4.7.7 1.6.7 2.8H448c0-.8.1-1.4.4-2zM461.3 245.2c-.7.6-1.2 1.3-1.5 2.1v-3.1l-3 1.3h.2c.3 0 .5.1.6.2.1.1.2.3.3.6.1.3.1.7.1 1.1v6.5c0 .6-.1 1.1-.3 1.5-.2.4-.4.6-.7.7h3.7c-.3 0-.5-.3-.7-.6s-.3-.9-.3-1.5v-3.4c0-.8.1-1.6.4-2.3s.6-1.3 1.1-1.7c.5-.4.9-.6 1.4-.6.4 0 .7.1 1 .3.3.2.6.5.8.8v-2.5c-.4-.2-.7-.3-1.1-.3-.5 0-1.2.3-2 .9zM482.7 254.5c-.9.4-1.8.7-2.6.7-1.2 0-2.3-.3-3.3-.9s-1.7-1.5-2.2-2.6c-.5-1.1-.8-2.4-.8-3.7 0-2 .6-3.7 1.7-5 1.1-1.4 2.6-2 4.4-2 2.4 0 4 1.1 4.9 3.3v-3.6c-1.3-.7-2.8-1.1-4.4-1.1-1.6 0-3.1.4-4.4 1.1-1.3.7-2.3 1.8-3.1 3.2-.8 1.4-1.1 2.9-1.1 4.6 0 1.6.3 3 1 4.3.7 1.3 1.6 2.2 2.8 2.9 1.2.7 2.6 1 4.2 1 1.1 0 2.1-.2 3-.6.9-.4 1.7-1 2.4-1.8v-1.6c-.8.7-1.6 1.4-2.5 1.8zM495.5 245.1c-.8-.5-1.8-.8-2.9-.8-1.1 0-2.1.3-3 .8-.9.6-1.5 1.3-2 2.3-.5 1-.7 2-.7 3.2 0 1.1.2 2.1.7 3 .4.9 1.1 1.6 1.9 2.1s1.8.8 2.9.8c1.1 0 2.1-.3 3-.8s1.5-1.3 2-2.3c.5-1 .7-2.1.7-3.2s-.2-2.1-.7-3c-.4-.9-1.1-1.6-1.9-2.1zm.2 8c-.3.7-.7 1.3-1.2 1.7-.5.4-1.1.6-1.8.6-.8 0-1.5-.2-2.1-.7-.6-.5-1.1-1.1-1.4-1.9-.3-.8-.5-1.7-.5-2.6 0-.8.2-1.6.5-2.4.3-.8.7-1.3 1.2-1.7.5-.4 1.1-.6 1.7-.6.8 0 1.5.2 2 .7.6.5 1.1 1.1 1.4 1.9s.5 1.7.5 2.6c.1.9 0 1.7-.3 2.4zM516.5 255.6c-.2-.4-.3-.9-.3-1.5v-5.8c0-1.2-.3-2.2-.8-2.9-.5-.7-1.3-1.1-2.2-1.1-.8 0-1.6.2-2.3.6-.8.4-1.4.9-1.8 1.6-.1-.7-.4-1.2-.9-1.6-.5-.4-1.1-.6-1.7-.6-.7 0-1.5.2-2.2.6-.8.4-1.3.9-1.8 1.6v-2.3l-3.2 1.4h.3c.5 0 .8.2 1 .5.2.3.2.9.2 1.7v6.3c0 .6-.1 1.1-.2 1.4s-.4.6-.8.7h3.7c-.3-.1-.5-.3-.7-.7-.2-.4-.2-.9-.2-1.5v-5.2c0-.5.1-1 .4-1.5s.7-.9 1.2-1.2 1-.4 1.5-.4c.6 0 1.1.3 1.4.8.3.5.5 1.3.5 2.3v5.3c0 .6-.1 1.1-.2 1.5-.2.4-.4.6-.7.6h3.7c-.3 0-.5-.3-.7-.6-.2-.4-.3-.9-.3-1.5v-5.2c0-.8.3-1.6 1-2.2.6-.6 1.4-.9 2.2-.9.6 0 1.1.3 1.5.8.3.5.5 1.3.5 2.3v5.3c0 .6-.1 1.1-.2 1.5s-.4.6-.7.7h3.7c-.5-.2-.7-.5-.9-.8zM535.8 255.6c-.2-.4-.3-.9-.3-1.5v-5.8c0-1.2-.3-2.2-.8-2.9-.5-.7-1.3-1.1-2.2-1.1-.8 0-1.6.2-2.3.6-.8.4-1.4.9-1.8 1.6-.1-.7-.4-1.2-.9-1.6-.5-.4-1.1-.6-1.7-.6-.7 0-1.5.2-2.2.6-.8.4-1.3.9-1.8 1.6v-2.3l-3.2 1.4h.3c.5 0 .8.2 1 .5.2.3.2.9.2 1.7v6.3c0 .6-.1 1.1-.2 1.4s-.4.6-.8.7h3.7c-.3-.1-.5-.3-.7-.7-.2-.4-.2-.9-.2-1.5v-5.2c0-.5.1-1 .4-1.5s.7-.9 1.2-1.2 1-.4 1.5-.4c.6 0 1.1.3 1.4.8.3.5.5 1.3.5 2.3v5.3c0 .6-.1 1.1-.2 1.5-.2.4-.4.6-.7.6h3.7c-.3 0-.5-.3-.7-.6-.2-.4-.3-.9-.3-1.5v-5.2c0-.8.3-1.6 1-2.2.6-.6 1.4-.9 2.2-.9.6 0 1.1.3 1.5.8.3.5.5 1.3.5 2.3v5.3c0 .6-.1 1.1-.2 1.5s-.4.6-.7.7h3.7c-.5-.2-.7-.5-.9-.8zM548.1 254.8c-.2-.3-.2-.8-.2-1.6v-8.6H545c.4.1.7.4.8.7.1.4.2.8.2 1.4v5c0 .5-.2 1-.5 1.6-.3.5-.7 1-1.3 1.3-.5.3-1.1.5-1.6.5-.7 0-1.2-.3-1.6-.8-.4-.5-.6-1.2-.6-2.1v-7.6h-3.1c.5.1.8.4 1 .7.2.4.3.9.3 1.6v5.6c0 1.3.3 2.3.8 3s1.3 1 2.3 1c.8 0 1.6-.2 2.4-.6.8-.4 1.4-1 1.8-1.7v2.4l3.2-1.4h-.2c-.3.1-.7-.1-.8-.4zM561 255.6c-.2-.4-.3-.9-.3-1.5v-6c0-1.2-.3-2.1-.8-2.8-.6-.7-1.3-1-2.3-1-.7 0-1.5.2-2.3.7-.8.4-1.4 1-1.8 1.6v-2.3l-3.2 1.4h.3c.5 0 .8.2 1 .5.2.3.2.9.2 1.7v6.3c0 .6-.1 1.1-.2 1.4s-.4.6-.8.7h3.8c-.3-.1-.6-.3-.7-.6s-.3-.8-.3-1.4v-5.2c0-.5.2-1.1.5-1.5.3-.5.8-.9 1.3-1.2.5-.3 1-.4 1.5-.4.7 0 1.2.2 1.6.7.4.5.6 1.2.6 2.1v5.5c0 .6-.1 1.1-.2 1.4s-.4.6-.7.7h3.7c-.5-.3-.7-.5-.9-.8zM565.2 242.2c.4 0 .7-.1.9-.4.2-.2.3-.5.3-.9s-.1-.7-.4-.9c-.2-.2-.5-.3-.9-.3s-.7.1-.9.3c-.2.2-.4.5-.4.9 0 .3.1.6.3.9s.8.4 1.1.4zM566.6 255.6c-.2-.4-.3-.9-.3-1.5v-9.8l-3.2 1.4h.3c.4 0 .7.1.9.4.2.3.3.8.3 1.5v6.5c0 .6-.1 1.1-.3 1.5s-.4.6-.8.7h3.9c-.3-.2-.6-.4-.8-.7zM574.4 254.8c-.4.3-.8.4-1.2.4-.5 0-.9-.2-1.1-.6-.3-.4-.4-.9-.4-1.7v-7h3.4v-1.2h-3.4V242l-3.3 3.9h1.5v7.5c0 .9.2 1.7.7 2.3.5.6 1.1.9 1.8.9.8 0 1.4-.2 1.9-.7.5-.5.9-1.2 1.1-2-.2.3-.6.6-1 .9zM578.8 242.2c.4 0 .7-.1.9-.4.2-.2.3-.5.3-.9s-.1-.7-.4-.9c-.2-.2-.5-.3-.9-.3s-.7.1-.9.3c-.2.2-.4.5-.4.9 0 .3.1.6.3.9s.7.4 1.1.4zM580.2 255.6c-.2-.4-.3-.9-.3-1.5v-9.8l-3.2 1.4h.3c.4 0 .7.1.9.4.2.3.3.8.3 1.5v6.5c0 .6-.1 1.1-.3 1.5s-.4.6-.8.7h3.9c-.4-.2-.7-.4-.8-.7zM590.1 254.5c-.7.4-1.3.5-2 .5s-1.4-.2-2-.6c-.6-.4-1.1-1-1.4-1.7-.3-.7-.5-1.6-.5-2.5h7.6c-.1-1.8-.5-3.3-1.3-4.3-.8-1.1-1.8-1.6-3.1-1.6-1 0-1.8.3-2.6.8s-1.4 1.3-1.8 2.3c-.4 1-.6 2-.6 3.2 0 1.1.2 2.1.6 3.1s1 1.6 1.8 2.1 1.7.7 2.7.7c1.1 0 2-.3 2.8-.9.7-.6 1.3-1.5 1.7-2.8-.6.8-1.2 1.4-1.9 1.7zm-5.4-7.2c.3-.6.6-1.1 1.1-1.4.4-.3.9-.5 1.5-.5.8 0 1.4.4 1.8 1.1.4.7.7 1.6.7 2.8h-5.5c0-.8.2-1.4.4-2zM600.8 251.9c-.2-.4-.5-.7-.8-1-.4-.3-1.1-.7-2.1-1.2-.7-.4-1.3-.7-1.6-.9-.3-.2-.5-.5-.7-.7s-.2-.5-.2-.9c0-.5.2-.9.6-1.2.4-.3.9-.5 1.5-.5 1.2 0 2.2.7 2.9 2.2v-2.5c-.8-.5-1.8-.8-2.9-.8-1.1 0-2 .3-2.7 1-.7.6-1 1.4-1 2.4 0 .7.2 1.3.6 1.8.4.5 1.1 1 2.1 1.6l1.2.6c.6.3 1 .7 1.3 1 .3.3.4.7.4 1.1 0 .5-.2 1-.7 1.3-.4.3-1 .5-1.8.5-1.5 0-2.6-.9-3.3-2.7v2.9c.4.3.8.5 1.4.7.6.2 1.2.3 1.8.3 1.3 0 2.3-.3 3-.9.7-.6 1.1-1.4 1.1-2.4.2-.9.1-1.3-.1-1.7z"></path>
                </svg>
                <!--[if lt IE 8]><img src="<?php echo $templateUrl ?>/images/logo_jen.png" alt="Judicial Engagement Logo"/><![endif]-->
            </a>

            <section class="header-right">
                <!--Search Button-->
                <input type="checkbox" id="btn-search" class="hidden"/>
                <label for="btn-search" onclick class="search-toggle" role="button" aria-controls="mod-search-searchword">  
                        <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 406 422" overflow="auto" role="button">
                            <g>
                                <path d="M271.8 147.5c0-71.9-58.3-130.3-130.3-130.3-71.9 0-130.3 58.3-130.3 130.3 0 71.9 58.3 130.3 130.3 130.3 27.8 0 53.6-8.7 74.7-23.5l18.2 18.2 29.5-29.5-17.9-17.9c16.3-21.7 25.8-48.5 25.8-77.6zm-205 74.7c-20-20-31-46.5-31-74.7 0-28.2 11-54.8 31-74.7 20-20 46.5-31 74.7-31 28.2 0 54.8 11 74.7 31 20 20 31 46.5 31 74.7s-11 54.8-31 74.7c-20 20-46.5 31-74.7 31s-54.7-11-74.7-31zM368.5 404.7l-122.6-133 17.4-17.4 131.4 124.2"></path>
                            </g>
                        </svg>
                </label>

                <jdoc:include type="modules" name="header-right" />
            </section>


    </header>
    <!--Nav-->
        <nav class="nav-main">
            <a href="#reveal-nav" id="reveal-nav" class="nav-toggle nav-toggle-reveal btn-primary" role="button" aria-controls="nav">Main Menu</a>
            <a href="#hide-nav" id="hide-nav" class="nav-toggle nav-toggle-hide btn-primary" role="button" aria-controls="nav">Close</a>
            <jdoc:include type="modules" name="main-nav" />
            <button type="button" class="btn-primary login-button">MEMBER LOGIN</button>
        </nav>
    <!--Hero Image-->
    <?php if($isHome): ?>
    <section class="hero">
        <jdoc:include type="modules" name="hero" />
    </section>
    <?php endif; ?>

        <div class="system-message-container">
            <jdoc:include type="message"></jdoc:include>
        </div>

    <!--Content-->
    <main class="container">
        <jdoc:include type="component" />
    </main>


    <?php if($showContentBottom): ?>
    <!--Content Bottom-->
    <div class="bkgd-blue">
        <div class="container">
            <jdoc:include type="modules" name="content-bottom" />
        </div>
    </div>
    <?php endif; ?>

    <!--Footer-->
    <footer>
        <div class="container">
            <hr /><br />
            <div class="footer-left">
                <div class="footer-top">
                    <jdoc:include type="modules" name="footer-1" style="xhtml" />
                    <div class="footer-2">
                        <jdoc:include type="modules" name="footer-2" />
                        <button type="button" class="btn-primary login-button">MEMBER LOGIN</button>
                    </div>
                </div>
                <hr />
                <div class="footer-bottom">
                    <a class="site-branding" href="/" title="Go to Home Page">
                        <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 612 262" overflow="scroll">
                            <title>Judicial Engagement Network</title>
                            <path d="M92.7 212.2v-83.1c0-.4-.2-.8-.5-1.1-4.6-4.5-9.3-6.5-14-6.1-6.6.6-10.4 6.1-10.6 6.3-.2.2-.3.5-.3.9v83.1H92.7zM139.8 212.2v-83.1c0-.4-.2-.8-.5-1.1-4.6-4.5-9.3-6.5-14-6.1-6.6.6-10.4 6.1-10.6 6.3-.2.2-.3.5-.3.9v83.1H139.8zM186.9 212.2v-83.1c0-.4-.2-.8-.5-1.1-4.6-4.5-9.3-6.5-13.9-6.1-6.6.6-10.4 6.1-10.6 6.3-.2.2-.3.5-.3.9v83.1H186.9zM39 99.8h6.6v112.4H39zM204.9 99.8h6.6v112.4h-6.6zM38.5 222.5h173.4v6.6H38.5zM27.6 236.4h195.2v6.6H27.6zM17.1 250.4h216.2v6.6H17.1zM205.4 23.4h-24.6v20.1l-53.2-42L15.1 90.9v8.8l225 .1v-9.5l-34.7-27.4V23.4zM140 79.2h-25.5V53.6H140v25.6zM252.4 125.9c.9.4 2.1.6 3.4.6 1.8 0 3.2-.2 4.3-.7 1.1-.5 1.9-1.1 2.5-2 .6-.8 1-1.7 1.1-2.8.2-1 .3-2.1.3-3.2v-16.9h-4.4v17.2c0 .8 0 1.5-.1 2.1-.1.6-.3 1.1-.5 1.5-.3.4-.6.7-1.1.9s-1 .3-1.7.3c-1.3 0-2.2-.4-2.7-1.2-.5-.8-.7-1.9-.7-3.3v-1.3h-4.4v1.3c0 1.1.1 2.2.4 3.2s.7 1.8 1.3 2.5c.6.8 1.4 1.4 2.3 1.8zM271.7 124.1c.9.8 2 1.4 3.2 1.8s2.7.6 4.2.6 2.9-.2 4.2-.6 2.3-1 3.2-1.8c.9-.8 1.6-1.8 2.1-3s.7-2.6.7-4.2v-16H285v14.6c0 .8 0 1.7-.1 2.6-.1.9-.3 1.6-.7 2.3-.4.7-1 1.3-1.8 1.7-.8.4-1.9.7-3.3.7s-2.5-.2-3.3-.7c-.8-.4-1.4-1-1.8-1.7-.4-.7-.6-1.5-.7-2.3-.1-.9-.1-1.7-.1-2.6v-14.6h-4.4v16c0 1.6.2 3 .7 4.2s1.3 2.2 2.2 3zM309.5 124.9c1.4-.7 2.5-1.5 3.4-2.7.9-1.1 1.5-2.5 2-4 .4-1.5.6-3.1.6-4.9 0-1.7-.2-3.3-.6-4.9-.4-1.5-1.1-2.8-2-4-.9-1.1-2-2-3.4-2.7-1.4-.7-3.1-1-5-1h-10.4v25h10.4c2 .2 3.6-.1 5-.8zm-10.9-2.6v-17.9h4.3c1.7 0 3.1.2 4.2.7 1.1.5 1.9 1.1 2.6 1.9.6.8 1 1.8 1.3 2.8.2 1.1.3 2.3.3 3.5 0 1.3-.1 2.4-.3 3.5-.2 1.1-.6 2-1.3 2.8-.6.8-1.5 1.4-2.6 1.9s-2.5.7-4.2.7h-4.3zM319.3 100.9h4.4v25h-4.4zM330.6 122.7c1 1.2 2.3 2.1 3.8 2.8s3.2 1 5 1c1.5 0 2.9-.2 4.2-.7 1.3-.5 2.4-1.2 3.3-2.1.9-.9 1.7-2 2.2-3.2.5-1.2.9-2.6 1-4.1h-4.3c-.1.9-.3 1.8-.6 2.6s-.7 1.5-1.3 2.1c-.5.6-1.2 1.1-1.9 1.4-.7.3-1.6.5-2.6.5-1.3 0-2.5-.3-3.4-.8-1-.5-1.8-1.3-2.4-2.2-.6-.9-1.1-1.9-1.3-3.1-.3-1.1-.4-2.3-.4-3.5s.1-2.4.4-3.5c.3-1.1.7-2.2 1.3-3.1.6-.9 1.4-1.6 2.4-2.2 1-.5 2.1-.8 3.4-.8.9 0 1.7.1 2.4.4s1.3.6 1.8 1 .9 1 1.3 1.6c.3.6.6 1.3.8 2h4.4c-.1-1.4-.5-2.6-1.1-3.6-.6-1.1-1.3-1.9-2.3-2.7-.9-.7-2-1.3-3.3-1.7-1.2-.4-2.6-.6-4-.6-1.9 0-3.5.4-5 1-1.5.7-2.7 1.6-3.8 2.8-1 1.2-1.8 2.6-2.4 4.2-.5 1.6-.8 3.3-.8 5 0 1.8.3 3.5.8 5.1.6 1.8 1.4 3.2 2.4 4.4zM353.8 100.9h4.4v25h-4.4zM367.3 119.3h10l2.3 6.6h4.7l-9.6-25H370l-9.6 25h4.5l2.4-6.6zm5-14.1h.1l3.7 10.7h-7.6l3.8-10.7zM403.7 122.1H391v-21.2h-4.4v25h17.1M268.6 151v-3.8h-18v25h18.2v-3.8H255v-7.3h12.6v-3.6H255V151M288.4 165.6h-.1l-11.4-18.4h-4.6v25h4.2v-18.4h.1l11.3 18.4h4.7v-25h-4.2M319.3 159h-10.6v3.3h6.7c0 1-.2 2-.5 2.9-.3.9-.8 1.6-1.3 2.2-.6.6-1.3 1-2.2 1.4-.9.3-1.9.5-3 .4-1.3 0-2.5-.3-3.4-.8-1-.5-1.8-1.3-2.4-2.2-.6-.9-1.1-1.9-1.3-3.1-.3-1.1-.4-2.3-.4-3.5 0-1.2.1-2.4.4-3.5.3-1.1.7-2.2 1.3-3.1.6-.9 1.4-1.6 2.4-2.2 1-.5 2.1-.8 3.4-.8.8 0 1.6.1 2.3.3s1.4.5 2 .9c.6.4 1.1.9 1.5 1.6.4.6.6 1.3.8 2.2h4.3c-.2-1.4-.6-2.6-1.2-3.7s-1.4-2-2.4-2.7c-1-.7-2-1.2-3.3-1.6-1.2-.4-2.5-.5-3.9-.5-1.9 0-3.5.4-5 1-1.5.7-2.7 1.6-3.8 2.8-1 1.2-1.8 2.6-2.4 4.2-.5 1.6-.8 3.3-.8 5 0 1.8.3 3.5.8 5.1s1.3 3 2.4 4.2c1 1.2 2.3 2.1 3.8 2.8 1.5.7 3.2 1 5 1 1.5 0 2.9-.3 4-.8s2.3-1.4 3.5-2.8l.7 2.9h2.8V159zM330.9 147.2l-9.6 25h4.5l2.3-6.6h10l2.3 6.6h4.7l-9.6-25h-4.6zm-1.6 15l3.8-10.7h.1l3.7 10.7h-7.6zM348.3 150.5c-1 1.2-1.8 2.6-2.4 4.2-.5 1.6-.8 3.3-.8 5 0 1.8.3 3.5.8 5.1s1.3 3 2.4 4.2c1 1.2 2.3 2.1 3.8 2.8s3.2 1 5 1c1.5 0 2.9-.3 4-.8 1.2-.5 2.3-1.4 3.5-2.8l.7 2.9h2.8V159h-10.6v3.3h6.6c0 1-.2 2-.5 2.9-.3.9-.8 1.6-1.3 2.2s-1.3 1-2.2 1.4c-.9.3-1.9.5-3 .4-1.3 0-2.5-.3-3.4-.8-1-.5-1.8-1.3-2.4-2.2-.6-.9-1.1-1.9-1.3-3.1-.3-1.1-.4-2.3-.4-3.5 0-1.2.1-2.4.4-3.5.3-1.1.7-2.2 1.3-3.1.6-.9 1.4-1.6 2.4-2.2 1-.5 2.1-.8 3.4-.8.8 0 1.6.1 2.3.3.7.2 1.4.5 2 .9s1.1.9 1.5 1.6c.4.6.6 1.3.8 2.2h4.3c-.2-1.4-.6-2.6-1.2-3.7s-1.4-2-2.4-2.7c-1-.7-2-1.2-3.3-1.6-1.2-.4-2.5-.5-3.9-.5-1.9 0-3.5.4-5 1-1.6.9-2.9 1.8-3.9 3zM391 168.4h-13.9v-7.3h12.6v-3.6h-12.6V151h13.6v-3.8h-18v25H391M394.5 147.2v25h4.1v-19.3h.1l6.9 19.3h3.7l6.9-19.3h.1v19.3h4.1v-25h-6.1l-6.7 19.6h-.1l-6.9-19.6M443.6 168.4h-13.8v-7.3h12.6v-3.6h-12.6V151h13.6v-3.8h-18v25h18.2M463.2 165.6h-.1l-11.4-18.4h-4.6v25h4.2v-18.4h.1l11.3 18.4h4.7v-25h-4.2M477.8 172.2h4.3V151h8v-3.8h-20.2v3.8h7.9M266.5 211.9h-.1L255 193.5h-4.6v25h4.2v-18.4h.1l11.4 18.4h4.6v-25h-4.2M293.6 197.3v-3.8h-18v25h18.3v-3.8H280v-7.3h12.6v-3.6H280v-6.5M295.6 197.3h7.9v21.2h4.4v-21.2h7.9v-3.8h-20.2M345.3 193.5l-4.6 19.1h-.1l-4.9-19.1h-4.5l-5 19.1h-.1l-4.5-19.1h-4.5l6.6 25h4.5l5.1-19.1h.1l5 19.1h4.5l6.9-25M371.2 215.2c1-1.2 1.8-2.6 2.4-4.2s.8-3.3.8-5.1c0-1.8-.3-3.5-.8-5-.5-1.6-1.3-3-2.4-4.2-1-1.2-2.3-2.1-3.8-2.8s-3.2-1-5-1c-1.9 0-3.5.3-5 1s-2.7 1.6-3.8 2.8c-1 1.2-1.8 2.6-2.4 4.2-.5 1.6-.8 3.3-.8 5 0 1.8.3 3.5.8 5.1.5 1.6 1.3 3 2.4 4.2 1 1.2 2.3 2.1 3.8 2.8s3.2 1 5 1c1.9 0 3.5-.3 5-1s2.8-1.6 3.8-2.8zm-1.6-5.7c-.3 1.1-.7 2.2-1.3 3.1-.6.9-1.4 1.6-2.4 2.2-1 .5-2.1.8-3.4.8s-2.5-.3-3.4-.8c-1-.5-1.8-1.3-2.4-2.2-.6-.9-1.1-1.9-1.3-3.1-.3-1.1-.4-2.3-.4-3.5 0-1.2.1-2.4.4-3.5.3-1.1.7-2.2 1.3-3.1.6-.9 1.4-1.6 2.4-2.2 1-.5 2.1-.8 3.4-.8s2.5.3 3.4.8c1 .5 1.8 1.3 2.4 2.2.6.9 1.1 1.9 1.3 3.1.3 1.1.4 2.3.4 3.5 0 1.2-.1 2.3-.4 3.5zM397.9 211.9c0-1-.1-1.8-.4-2.5-.2-.7-.6-1.2-.9-1.6s-.8-.7-1.2-.9c-.4-.2-.8-.3-1.2-.4v-.1c.2-.1.5-.2 1-.4s.9-.6 1.4-1c.5-.5.9-1.1 1.2-1.9.3-.8.5-1.8.5-3 0-2.1-.7-3.8-2.1-5-1.4-1.2-3.4-1.8-6.2-1.8h-11.9v25h4.4V208h6.4c1 0 1.8.1 2.5.4.6.3 1.1.7 1.5 1.2s.6 1.2.8 2.1c.1.8.2 1.8.2 3 0 .6 0 1.2.1 1.9s.3 1.2.6 1.8h4.7c-.5-.5-.8-1.4-1-2.6s-.4-2.4-.4-3.9zm-5.1-8c-.7.7-1.8 1-3.2 1h-7.2v-7.8h7.1c.6 0 1.1 0 1.6.1s1 .3 1.4.6c.4.3.7.7 1 1.2.2.5.4 1.1.4 1.9 0 1.3-.3 2.3-1.1 3zM424.2 218.5l-10.6-15 9.9-10h-5.3L407 204.9v-11.4h-4.3v25h4.3v-8.4l3.6-3.6 8.2 12M257.5 248.8c-.5-.5-1.3-1-2.4-1.6l-1.4-.7c-.9-.5-1.5-1-1.9-1.5-.4-.5-.6-1-.6-1.6 0-.7.3-1.4.8-1.9.6-.5 1.3-.8 2.1-.8.9 0 1.7.3 2.4.8s1.1 1.3 1.4 2.3v-3.2c-.4-.3-1-.6-1.6-.8s-1.3-.3-1.9-.3c-1.4 0-2.6.4-3.6 1.2-1 .8-1.4 1.8-1.4 3.1 0 .6.1 1.2.3 1.7.2.5.5.9.9 1.2.4.4.8.7 1.2 1 .5.3.9.6 1.4.8.5.3.9.5 1.4.8.4.3.8.5 1.2.9.4.3.6.7.9 1.1s.3.9.3 1.4c0 .8-.3 1.5-.9 2s-1.4.7-2.3.7c-2.2 0-3.7-1.3-4.5-3.7v3.7c.6.4 1.2.7 1.9.9.7.2 1.5.4 2.3.4 1.2 0 2.1-.2 2.9-.6.8-.4 1.4-.9 1.8-1.6.4-.7.6-1.4.6-2.3 0-.7-.1-1.3-.4-1.9-.1-.6-.4-1.1-.9-1.5zM266.1 254.8c-.4.3-.8.4-1.2.4-.5 0-.9-.2-1.1-.6-.3-.4-.4-.9-.4-1.7v-7h3.4v-1.2h-3.4V242l-3.3 3.9h1.5v7.5c0 .9.2 1.7.7 2.3.5.6 1.1.9 1.8.9.8 0 1.4-.2 1.9-.7.5-.5.9-1.2 1.1-2-.2.3-.5.6-1 .9zM272.9 245.2c-.7.6-1.2 1.3-1.5 2.1v-3.1l-3 1.3h.2c.3 0 .5.1.6.2s.2.3.3.6c.1.3.1.7.1 1.1v6.5c0 .6-.1 1.1-.3 1.5-.2.4-.4.6-.7.7h3.7c-.3 0-.5-.3-.7-.6-.2-.4-.3-.9-.3-1.5v-3.4c0-.8.1-1.6.4-2.3s.6-1.3 1.1-1.7c.5-.4.9-.6 1.4-.6.4 0 .7.1 1 .3s.6.5.8.8v-2.5c-.4-.2-.7-.3-1.1-.3-.6 0-1.3.3-2 .9zM286.2 245.1c-.8-.5-1.8-.8-2.9-.8-1.1 0-2.1.3-3 .8-.9.6-1.5 1.3-2 2.3-.5 1-.7 2-.7 3.2 0 1.1.2 2.1.7 3 .4.9 1.1 1.6 1.9 2.1.8.5 1.8.8 2.9.8 1.1 0 2.1-.3 3-.8.9-.5 1.5-1.3 2-2.3.5-1 .7-2.1.7-3.2s-.2-2.1-.7-3c-.4-.9-1.1-1.6-1.9-2.1zm.2 8c-.3.7-.7 1.3-1.2 1.7-.5.4-1.1.6-1.8.6-.8 0-1.5-.2-2.1-.7-.6-.5-1.1-1.1-1.4-1.9-.3-.8-.5-1.7-.5-2.6 0-.8.2-1.6.5-2.4.3-.8.7-1.3 1.2-1.7s1.1-.6 1.7-.6c.8 0 1.4.2 2 .7.6.5 1.1 1.1 1.4 1.9s.5 1.7.5 2.6c.1.9 0 1.7-.3 2.4zM300.7 255.6c-.2-.4-.3-.9-.3-1.5v-6c0-1.2-.3-2.1-.8-2.8-.6-.7-1.3-1-2.3-1-.7 0-1.5.2-2.3.7-.8.4-1.4 1-1.8 1.6v-2.3l-3.2 1.4h.3c.5 0 .8.2 1 .5.2.3.2.9.2 1.7v6.3c0 .6-.1 1.1-.2 1.4-.2.4-.4.6-.8.7h3.8c-.3-.1-.6-.3-.7-.6s-.3-.8-.3-1.4v-5.2c0-.5.2-1.1.5-1.5.3-.5.8-.9 1.3-1.2.5-.3 1-.4 1.5-.4.7 0 1.2.2 1.6.7.4.5.6 1.2.6 2.1v5.5c0 .6-.1 1.1-.2 1.4-.2.4-.4.6-.7.7h3.7c-.5-.3-.7-.5-.9-.8zM309.7 244.6c-.7-.2-1.3-.3-1.9-.3-.9 0-1.7.2-2.4.6-.7.4-1.2.9-1.6 1.6-.4.7-.6 1.4-.6 2.2 0 .8.2 1.4.6 2.1.4.6 1 1.1 1.7 1.4-.6.3-1.1.7-1.5 1.1-.4.4-.6.8-.6 1.2 0 .4.1.7.4 1 .3.3.6.5 1.1.6-.6.2-1.2.6-1.6 1.1-.5.5-.7 1-.7 1.5 0 .7.4 1.2 1.2 1.7s1.8.6 3 .6c1.3 0 2.4-.2 3.3-.5 1-.3 1.7-.8 2.2-1.4s.8-1.2.8-1.9-.3-1.3-.9-1.7c-.6-.4-1.4-.7-2.5-.7l-2.9-.1c-.6 0-1-.1-1.3-.3s-.5-.4-.5-.6.1-.5.4-.8c.3-.3.7-.5 1.2-.7.3 0 .6.1 1.1.1 1.3 0 2.4-.4 3.2-1.1.8-.7 1.2-1.7 1.2-2.8 0-1-.3-1.9-.9-2.5h1.2c.4 0 .7-.1.8-.1v-1.5c-.5.4-1.2.6-2 .6-.5-.1-1-.2-1.5-.4zm-3.6 11.7c1.1 0 2.1.1 2.9.1.9 0 1.5.1 2 .3s.7.6.7 1c0 .6-.4 1.1-1.1 1.5-.7.4-1.7.5-3 .5-1.1 0-1.9-.1-2.4-.4s-.8-.7-.8-1.1c0-.7.5-1.3 1.7-1.9zm3.5-5.7c-.5.5-1 .8-1.8.8s-1.5-.3-2-.9c-.5-.6-.8-1.4-.8-2.4 0-.8.2-1.4.7-1.9.4-.5 1-.8 1.8-.8s1.5.3 2 .9.8 1.4.8 2.3c0 .8-.2 1.5-.7 2zM321.9 242.2v11.7c0 .7-.1 1.2-.3 1.6-.2.4-.5.6-.9.7h4.2c-.4-.1-.6-.3-.8-.7-.2-.4-.3-.9-.3-1.5v-5.5h3.5c.5 0 .9.1 1.3.3.3.2.5.4.6.7v-3.2c-.1.4-.4.6-.7.8-.3.1-.7.2-1.2.2h-3.5v-6.2h3.9c.8 0 1.4.1 1.9.3.5.2.8.6.9 1.1v-2.6h-9.8c.8.2 1.2 1 1.2 2.3zM340.6 254.7c-.3-.4-.5-1-.5-1.7v-5.3c0-1.1-.3-1.9-1-2.5s-1.5-.9-2.7-.9c-.9 0-1.7.1-2.4.4s-1.2.7-1.6 1.2c-.4.5-.6 1.1-.6 1.7 0 .5.1.9.3 1.3l2-.8c-.2-.1-.3-.2-.4-.4s-.2-.4-.2-.7c0-.5.2-.9.7-1.2.4-.3 1-.5 1.8-.5s1.3.2 1.7.7.6 1.1.6 2v1.3c-2.2.5-3.9 1.1-5 1.9-1.1.8-1.7 1.6-1.7 2.6 0 .8.3 1.5.9 1.9s1.4.7 2.4.7c.8 0 1.6-.2 2.2-.5.7-.3 1.1-.7 1.4-1.3.1.4.3.8.6 1.2.4.4.8.6 1.3.7l1.8-1.4h-.4c-.4.3-.9.1-1.2-.4zm-2.3-1.7c0 .7-.3 1.2-.9 1.7-.6.5-1.2.7-2 .7-.6 0-1.1-.2-1.5-.5s-.6-.8-.6-1.3c0-.7.4-1.3 1.2-1.8.8-.5 2-.9 3.7-1.3v2.5zM360.1 255.6c-.2-.4-.3-.9-.3-1.5v-5.8c0-1.2-.3-2.2-.8-2.9-.5-.7-1.3-1.1-2.2-1.1-.8 0-1.6.2-2.3.6-.8.4-1.4.9-1.8 1.6-.1-.7-.4-1.2-.9-1.6-.5-.4-1.1-.6-1.7-.6-.7 0-1.5.2-2.2.6-.8.4-1.3.9-1.8 1.6v-2.3l-3.2 1.4h.3c.5 0 .8.2 1 .5.2.3.2.9.2 1.7v6.3c0 .6-.1 1.1-.2 1.4s-.4.6-.8.7h3.7c-.3-.1-.5-.3-.7-.7-.2-.4-.2-.9-.2-1.5v-5.2c0-.5.1-1 .4-1.5s.7-.9 1.2-1.2 1-.4 1.5-.4c.6 0 1.1.3 1.4.8.3.5.5 1.3.5 2.3v5.3c0 .6-.1 1.1-.2 1.5-.2.4-.4.6-.7.6h3.7c-.3 0-.5-.3-.7-.6-.2-.4-.3-.9-.3-1.5v-5.2c0-.8.3-1.6 1-2.2.6-.6 1.4-.9 2.2-.9.6 0 1.1.3 1.5.8.3.5.5 1.3.5 2.3v5.3c0 .6-.1 1.1-.2 1.5s-.4.6-.7.7h3.7c-.5-.2-.7-.5-.9-.8zM365.3 241.9c.2-.2.3-.5.3-.9s-.1-.7-.4-.9c-.2-.2-.5-.3-.9-.3s-.7.1-.9.3c-.2.2-.4.5-.4.9 0 .3.1.6.3.9s.5.4.9.4c.6-.1.9-.2 1.1-.4zM365.8 255.6c-.2-.4-.3-.9-.3-1.5v-9.8l-3.2 1.4h.3c.4 0 .7.1.9.4.2.3.3.8.3 1.5v6.5c0 .6-.1 1.1-.3 1.5s-.4.6-.8.7h3.9c-.4-.2-.6-.4-.8-.7zM371.4 255.6c-.2-.4-.3-.9-.3-1.5v-14.8l-3.3 1.3h.2c.5 0 .8.2 1 .5.2.4.3.9.3 1.8v11.3c0 .6-.1 1.1-.3 1.5-.2.4-.4.6-.7.7h3.8c-.3-.2-.5-.5-.7-.8zM377 255.6c-.2-.4-.3-.9-.3-1.5v-9.8l-3.2 1.4h.3c.4 0 .7.1.9.4.2.3.3.8.3 1.5v6.5c0 .6-.1 1.1-.3 1.5s-.4.6-.8.7h3.9c-.3-.2-.6-.4-.8-.7zM374.7 240.1c-.2.2-.4.5-.4.9 0 .3.1.6.3.9s.5.4.9.4.7-.1.9-.4c.2-.2.3-.5.3-.9s-.1-.7-.4-.9c-.2-.2-.5-.3-.9-.3-.1 0-.4.1-.7.3zM387 254.5c-.7.4-1.3.5-2 .5s-1.4-.2-2-.6c-.6-.4-1.1-1-1.4-1.7-.3-.7-.5-1.6-.5-2.5h7.6c-.1-1.8-.5-3.3-1.3-4.3-.8-1.1-1.8-1.6-3.1-1.6-1 0-1.8.3-2.6.8s-1.4 1.3-1.8 2.3c-.4 1-.6 2-.6 3.2 0 1.1.2 2.1.6 3.1s1 1.6 1.8 2.1 1.7.7 2.7.7c1.1 0 2-.3 2.8-.9.7-.6 1.3-1.5 1.7-2.8-.6.8-1.2 1.4-1.9 1.7zm-5.4-7.2c.3-.6.6-1.1 1.1-1.4.4-.3.9-.5 1.5-.5.8 0 1.4.4 1.8 1.1.4.7.7 1.6.7 2.8h-5.5c0-.8.1-1.4.4-2zM396.8 250.9c-.4-.3-1.1-.7-2.1-1.2-.7-.4-1.3-.7-1.6-.9-.3-.2-.5-.5-.7-.7s-.2-.5-.2-.9c0-.5.2-.9.6-1.2.4-.3.9-.5 1.5-.5 1.2 0 2.2.7 2.9 2.2v-2.5c-.8-.5-1.8-.8-2.9-.8-1.1 0-2 .3-2.7 1-.7.6-1 1.4-1 2.4 0 .7.2 1.3.6 1.8.4.5 1.1 1 2.1 1.6l1.2.6c.6.3 1 .7 1.3 1 .3.3.4.7.4 1.1 0 .5-.2 1-.7 1.3-.4.3-1 .5-1.8.5-1.5 0-2.6-.9-3.3-2.7v2.9c.4.3.8.5 1.4.7.6.2 1.2.3 1.8.3 1.3 0 2.3-.3 3-.9.7-.6 1.1-1.4 1.1-2.4 0-.5-.1-.9-.3-1.3.1-.8-.2-1.1-.6-1.4zM406 237.1h1.4v24.5H406zM423.8 248.8c-.5-.5-1.3-1-2.4-1.6l-1.4-.7c-.9-.5-1.5-1-1.9-1.5-.4-.5-.6-1-.6-1.6 0-.7.3-1.4.8-1.9.6-.5 1.3-.8 2.1-.8.9 0 1.7.3 2.4.8s1.1 1.3 1.4 2.3v-3.2c-.4-.3-1-.6-1.6-.8-.6-.2-1.3-.3-1.9-.3-1.4 0-2.6.4-3.6 1.2-1 .8-1.4 1.8-1.4 3.1 0 .6.1 1.2.3 1.7.2.5.5.9.9 1.2.4.4.8.7 1.2 1 .5.3.9.6 1.4.8.5.3.9.5 1.4.8s.8.5 1.2.9c.4.3.6.7.9 1.1s.3.9.3 1.4c0 .8-.3 1.5-.9 2s-1.4.7-2.3.7c-2.2 0-3.7-1.3-4.5-3.7v3.7c.6.4 1.2.7 1.9.9.7.2 1.5.4 2.3.4 1.2 0 2.1-.2 2.9-.6.8-.4 1.4-.9 1.8-1.6.4-.7.6-1.4.6-2.3 0-.7-.1-1.3-.4-1.9 0-.6-.4-1.1-.9-1.5zM436.3 254.7c-.3-.4-.5-1-.5-1.7v-5.3c0-1.1-.3-1.9-1-2.5s-1.5-.9-2.7-.9c-.9 0-1.7.1-2.4.4s-1.2.7-1.6 1.2c-.4.5-.6 1.1-.6 1.7 0 .5.1.9.3 1.3l2-.8c-.2-.1-.3-.2-.4-.4s-.2-.4-.2-.7c0-.5.2-.9.7-1.2.4-.3 1-.5 1.8-.5s1.3.2 1.7.7.6 1.1.6 2v1.3c-2.2.5-3.9 1.1-5 1.9-1.1.8-1.7 1.6-1.7 2.6 0 .8.3 1.5.9 1.9s1.4.7 2.4.7c.8 0 1.6-.2 2.2-.5.7-.3 1.1-.7 1.4-1.3.1.4.3.8.6 1.2.4.4.8.6 1.3.7l1.8-1.4h-.4c-.5.3-.9.1-1.2-.4zM434 253c0 .7-.3 1.2-.9 1.7-.6.5-1.2.7-2 .7-.6 0-1.1-.2-1.5-.5s-.6-.8-.6-1.3c0-.7.4-1.3 1.2-1.8.8-.5 2-.9 3.7-1.3v2.5zM441.3 240.6c-.6.9-1 2.1-1 3.6v.5h-2v1.2h2v8.1c0 .6-.1 1.2-.3 1.5-.2.4-.4.6-.8.7h3.8c-.3 0-.5-.3-.7-.7-.2-.4-.3-.9-.3-1.6v-8.1h2.9v-1.2H442V243c0-.9.1-1.6.3-2 .2-.4.5-.6 1-.6.3 0 .7.1 1 .3s.5.4.7.7v-2.2c-.3-.1-.7-.1-1.1-.1-1.1.2-2 .6-2.6 1.5zM453.8 254.5c-.7.4-1.3.5-2 .5s-1.4-.2-2-.6c-.6-.4-1.1-1-1.4-1.7-.3-.7-.5-1.6-.5-2.5h7.6c-.1-1.8-.5-3.3-1.3-4.3-.8-1.1-1.8-1.6-3.1-1.6-1 0-1.8.3-2.6.8s-1.4 1.3-1.8 2.3c-.4 1-.6 2-.6 3.2 0 1.1.2 2.1.6 3.1s1 1.6 1.8 2.1 1.7.7 2.7.7c1.1 0 2-.3 2.8-.9.7-.6 1.3-1.5 1.7-2.8-.6.8-1.2 1.4-1.9 1.7zm-5.4-7.2c.3-.6.6-1.1 1.1-1.4.4-.3.9-.5 1.5-.5.8 0 1.4.4 1.8 1.1.4.7.7 1.6.7 2.8H448c0-.8.1-1.4.4-2zM461.3 245.2c-.7.6-1.2 1.3-1.5 2.1v-3.1l-3 1.3h.2c.3 0 .5.1.6.2.1.1.2.3.3.6.1.3.1.7.1 1.1v6.5c0 .6-.1 1.1-.3 1.5-.2.4-.4.6-.7.7h3.7c-.3 0-.5-.3-.7-.6s-.3-.9-.3-1.5v-3.4c0-.8.1-1.6.4-2.3s.6-1.3 1.1-1.7c.5-.4.9-.6 1.4-.6.4 0 .7.1 1 .3.3.2.6.5.8.8v-2.5c-.4-.2-.7-.3-1.1-.3-.5 0-1.2.3-2 .9zM482.7 254.5c-.9.4-1.8.7-2.6.7-1.2 0-2.3-.3-3.3-.9s-1.7-1.5-2.2-2.6c-.5-1.1-.8-2.4-.8-3.7 0-2 .6-3.7 1.7-5 1.1-1.4 2.6-2 4.4-2 2.4 0 4 1.1 4.9 3.3v-3.6c-1.3-.7-2.8-1.1-4.4-1.1-1.6 0-3.1.4-4.4 1.1-1.3.7-2.3 1.8-3.1 3.2-.8 1.4-1.1 2.9-1.1 4.6 0 1.6.3 3 1 4.3.7 1.3 1.6 2.2 2.8 2.9 1.2.7 2.6 1 4.2 1 1.1 0 2.1-.2 3-.6.9-.4 1.7-1 2.4-1.8v-1.6c-.8.7-1.6 1.4-2.5 1.8zM495.5 245.1c-.8-.5-1.8-.8-2.9-.8-1.1 0-2.1.3-3 .8-.9.6-1.5 1.3-2 2.3-.5 1-.7 2-.7 3.2 0 1.1.2 2.1.7 3 .4.9 1.1 1.6 1.9 2.1s1.8.8 2.9.8c1.1 0 2.1-.3 3-.8s1.5-1.3 2-2.3c.5-1 .7-2.1.7-3.2s-.2-2.1-.7-3c-.4-.9-1.1-1.6-1.9-2.1zm.2 8c-.3.7-.7 1.3-1.2 1.7-.5.4-1.1.6-1.8.6-.8 0-1.5-.2-2.1-.7-.6-.5-1.1-1.1-1.4-1.9-.3-.8-.5-1.7-.5-2.6 0-.8.2-1.6.5-2.4.3-.8.7-1.3 1.2-1.7.5-.4 1.1-.6 1.7-.6.8 0 1.5.2 2 .7.6.5 1.1 1.1 1.4 1.9s.5 1.7.5 2.6c.1.9 0 1.7-.3 2.4zM516.5 255.6c-.2-.4-.3-.9-.3-1.5v-5.8c0-1.2-.3-2.2-.8-2.9-.5-.7-1.3-1.1-2.2-1.1-.8 0-1.6.2-2.3.6-.8.4-1.4.9-1.8 1.6-.1-.7-.4-1.2-.9-1.6-.5-.4-1.1-.6-1.7-.6-.7 0-1.5.2-2.2.6-.8.4-1.3.9-1.8 1.6v-2.3l-3.2 1.4h.3c.5 0 .8.2 1 .5.2.3.2.9.2 1.7v6.3c0 .6-.1 1.1-.2 1.4s-.4.6-.8.7h3.7c-.3-.1-.5-.3-.7-.7-.2-.4-.2-.9-.2-1.5v-5.2c0-.5.1-1 .4-1.5s.7-.9 1.2-1.2 1-.4 1.5-.4c.6 0 1.1.3 1.4.8.3.5.5 1.3.5 2.3v5.3c0 .6-.1 1.1-.2 1.5-.2.4-.4.6-.7.6h3.7c-.3 0-.5-.3-.7-.6-.2-.4-.3-.9-.3-1.5v-5.2c0-.8.3-1.6 1-2.2.6-.6 1.4-.9 2.2-.9.6 0 1.1.3 1.5.8.3.5.5 1.3.5 2.3v5.3c0 .6-.1 1.1-.2 1.5s-.4.6-.7.7h3.7c-.5-.2-.7-.5-.9-.8zM535.8 255.6c-.2-.4-.3-.9-.3-1.5v-5.8c0-1.2-.3-2.2-.8-2.9-.5-.7-1.3-1.1-2.2-1.1-.8 0-1.6.2-2.3.6-.8.4-1.4.9-1.8 1.6-.1-.7-.4-1.2-.9-1.6-.5-.4-1.1-.6-1.7-.6-.7 0-1.5.2-2.2.6-.8.4-1.3.9-1.8 1.6v-2.3l-3.2 1.4h.3c.5 0 .8.2 1 .5.2.3.2.9.2 1.7v6.3c0 .6-.1 1.1-.2 1.4s-.4.6-.8.7h3.7c-.3-.1-.5-.3-.7-.7-.2-.4-.2-.9-.2-1.5v-5.2c0-.5.1-1 .4-1.5s.7-.9 1.2-1.2 1-.4 1.5-.4c.6 0 1.1.3 1.4.8.3.5.5 1.3.5 2.3v5.3c0 .6-.1 1.1-.2 1.5-.2.4-.4.6-.7.6h3.7c-.3 0-.5-.3-.7-.6-.2-.4-.3-.9-.3-1.5v-5.2c0-.8.3-1.6 1-2.2.6-.6 1.4-.9 2.2-.9.6 0 1.1.3 1.5.8.3.5.5 1.3.5 2.3v5.3c0 .6-.1 1.1-.2 1.5s-.4.6-.7.7h3.7c-.5-.2-.7-.5-.9-.8zM548.1 254.8c-.2-.3-.2-.8-.2-1.6v-8.6H545c.4.1.7.4.8.7.1.4.2.8.2 1.4v5c0 .5-.2 1-.5 1.6-.3.5-.7 1-1.3 1.3-.5.3-1.1.5-1.6.5-.7 0-1.2-.3-1.6-.8-.4-.5-.6-1.2-.6-2.1v-7.6h-3.1c.5.1.8.4 1 .7.2.4.3.9.3 1.6v5.6c0 1.3.3 2.3.8 3s1.3 1 2.3 1c.8 0 1.6-.2 2.4-.6.8-.4 1.4-1 1.8-1.7v2.4l3.2-1.4h-.2c-.3.1-.7-.1-.8-.4zM561 255.6c-.2-.4-.3-.9-.3-1.5v-6c0-1.2-.3-2.1-.8-2.8-.6-.7-1.3-1-2.3-1-.7 0-1.5.2-2.3.7-.8.4-1.4 1-1.8 1.6v-2.3l-3.2 1.4h.3c.5 0 .8.2 1 .5.2.3.2.9.2 1.7v6.3c0 .6-.1 1.1-.2 1.4s-.4.6-.8.7h3.8c-.3-.1-.6-.3-.7-.6s-.3-.8-.3-1.4v-5.2c0-.5.2-1.1.5-1.5.3-.5.8-.9 1.3-1.2.5-.3 1-.4 1.5-.4.7 0 1.2.2 1.6.7.4.5.6 1.2.6 2.1v5.5c0 .6-.1 1.1-.2 1.4s-.4.6-.7.7h3.7c-.5-.3-.7-.5-.9-.8zM565.2 242.2c.4 0 .7-.1.9-.4.2-.2.3-.5.3-.9s-.1-.7-.4-.9c-.2-.2-.5-.3-.9-.3s-.7.1-.9.3c-.2.2-.4.5-.4.9 0 .3.1.6.3.9s.8.4 1.1.4zM566.6 255.6c-.2-.4-.3-.9-.3-1.5v-9.8l-3.2 1.4h.3c.4 0 .7.1.9.4.2.3.3.8.3 1.5v6.5c0 .6-.1 1.1-.3 1.5s-.4.6-.8.7h3.9c-.3-.2-.6-.4-.8-.7zM574.4 254.8c-.4.3-.8.4-1.2.4-.5 0-.9-.2-1.1-.6-.3-.4-.4-.9-.4-1.7v-7h3.4v-1.2h-3.4V242l-3.3 3.9h1.5v7.5c0 .9.2 1.7.7 2.3.5.6 1.1.9 1.8.9.8 0 1.4-.2 1.9-.7.5-.5.9-1.2 1.1-2-.2.3-.6.6-1 .9zM578.8 242.2c.4 0 .7-.1.9-.4.2-.2.3-.5.3-.9s-.1-.7-.4-.9c-.2-.2-.5-.3-.9-.3s-.7.1-.9.3c-.2.2-.4.5-.4.9 0 .3.1.6.3.9s.7.4 1.1.4zM580.2 255.6c-.2-.4-.3-.9-.3-1.5v-9.8l-3.2 1.4h.3c.4 0 .7.1.9.4.2.3.3.8.3 1.5v6.5c0 .6-.1 1.1-.3 1.5s-.4.6-.8.7h3.9c-.4-.2-.7-.4-.8-.7zM590.1 254.5c-.7.4-1.3.5-2 .5s-1.4-.2-2-.6c-.6-.4-1.1-1-1.4-1.7-.3-.7-.5-1.6-.5-2.5h7.6c-.1-1.8-.5-3.3-1.3-4.3-.8-1.1-1.8-1.6-3.1-1.6-1 0-1.8.3-2.6.8s-1.4 1.3-1.8 2.3c-.4 1-.6 2-.6 3.2 0 1.1.2 2.1.6 3.1s1 1.6 1.8 2.1 1.7.7 2.7.7c1.1 0 2-.3 2.8-.9.7-.6 1.3-1.5 1.7-2.8-.6.8-1.2 1.4-1.9 1.7zm-5.4-7.2c.3-.6.6-1.1 1.1-1.4.4-.3.9-.5 1.5-.5.8 0 1.4.4 1.8 1.1.4.7.7 1.6.7 2.8h-5.5c0-.8.2-1.4.4-2zM600.8 251.9c-.2-.4-.5-.7-.8-1-.4-.3-1.1-.7-2.1-1.2-.7-.4-1.3-.7-1.6-.9-.3-.2-.5-.5-.7-.7s-.2-.5-.2-.9c0-.5.2-.9.6-1.2.4-.3.9-.5 1.5-.5 1.2 0 2.2.7 2.9 2.2v-2.5c-.8-.5-1.8-.8-2.9-.8-1.1 0-2 .3-2.7 1-.7.6-1 1.4-1 2.4 0 .7.2 1.3.6 1.8.4.5 1.1 1 2.1 1.6l1.2.6c.6.3 1 .7 1.3 1 .3.3.4.7.4 1.1 0 .5-.2 1-.7 1.3-.4.3-1 .5-1.8.5-1.5 0-2.6-.9-3.3-2.7v2.9c.4.3.8.5 1.4.7.6.2 1.2.3 1.8.3 1.3 0 2.3-.3 3-.9.7-.6 1.1-1.4 1.1-2.4.2-.9.1-1.3-.1-1.7z"></path>
                        </svg>
                        <!--[if lt IE 8]><img src="<?php echo $templateUrl ?>/images/logo_jen.png" alt="Judicial Engagement Logo"/><![endif]-->
                    </a>
                    <jdoc:include type="modules" name="footer-3" />
                </div>
            </div>
            <div class="footer-right">
                <jdoc:include type="modules" name="footer-4" style="xhtml" />
            </div>
        </div>
    </footer>

    </div>
    <section class="login-modal">
        <jdoc:include type="modules" name="modal" />
    </section>

    <script src="<?php echo $templateUrl ?>/js/build/main.min.js"></script>
</body>
</html>
