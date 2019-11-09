$(function(){
	$( 'textarea.texteditor' ).ckeditor({toolbar:'Full', filebrowserBrowseUrl: siteURL});
	$( 'textarea.mini-texteditor' ).ckeditor({toolbar:'Basic',width:700});
});