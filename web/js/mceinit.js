$(function() {
  tinyMCE.init({
    mode : "specific_textareas",
    editor_selector : "wisiwyg-editor",

    theme : "advanced",
    keep_styles : true,
    plugins : "table,contextmenu,paste,fullpage",
    content_css : "/css/tinymce.css",
    // apply_source_formatting : true,
    theme_advanced_buttons3_add : "fullpage",
    theme_advanced_buttons3_add_before : "tablecontrols,separator",
    width : "1100",
    height : "768",
    apply_source_formatting : true,
    convert_fonts_to_spans : true,
    convert_newlines_to_brs : false,
    fix_list_elements : true,
    fix_table_elements : false,
    fix_nesting : true,
    forced_root_block : false,
    cleanup_on_startup : true,
    heading_clear_tag : 'p',
    verify_html : true,
    remove_trailing_nbsp : true,

    relative_urls : false,
    remove_script_host : true,

    theme_advanced_blockformats : 'p,h2,h3,h4',
    theme_advanced_toolbar_location : 'top',
    theme_advanced_toolbar_align : 'left',
    theme_advanced_statusbar_location : 'bottom',
    theme_advanced_resize_horizontal : false,
    theme_advanced_resizing : true,

    plugins : 'safari,pagebreak,spellchecker,style,table,inlinepopups,media,contextmenu,paste,'
    + 'fullscreen,nonbreaking,xhtmlxtras,advhr,advimage,advlink,paste,visualchars,nonbreaking,xhtmlxtras',
    advimage_styles:'Align Left=left;Alight Right=right',
    advlink_styles : 'Code=code;Excel=excel;Flash=flash;Sound=sound;Office=office;PDF=pdf;Image=image;PowerPoint=powerpoint;Word=word;Video=video',
    theme_advanced_buttons1 : 'cut,copy,pastetext,pasteword,undo,redo,|,formatselect,fontsizeselect,forecolor,|,bold,italic,'
    + '|,link,unlink,|,image,cleanup,removeformat,spellchecker',
    theme_advanced_buttons2 : 'bullist,numlist,outdent,indent,hr,justifyleft,justifycenter,justifyright,justifyfull,code,visualaid,fullscreen',
    theme_advanced_buttons3 : 'tablecontrols'
  });
});