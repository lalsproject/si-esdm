CKEDITOR.editorConfig = function( config ) {
	config.toolbarGroups = [
		{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
		{ name: 'links', groups: [ 'links' ] },
		{ name: 'insert', groups: [ 'insert' ] },
		{ name: 'forms', groups: [ 'forms' ] },
		{ name: 'tools', groups: [ 'tools' ] },
		{ name: 'styles', groups: [ 'styles' ] },
		{ name: 'document', groups: [ 'document', 'mode', 'doctools' ] },
		{ name: 'others', groups: [ 'others' ] },
		{ name: 'paragraph', groups: [ 'align', 'list', 'indent', 'blocks', 'bidi', 'paragraph' ] },
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'colors', groups: [ 'colors' ] },
		{ name: 'about', groups: [ 'about' ] }
	];
	config.extraPlugins = 'oembed';
	config.extraPlugins = 'html5video';
	config.extraPlugins = 'base64image';
	config.removeButtons = 'Underline,Subscript,Superscript,Scayt,Anchor,Source,HorizontalRule,SpecialChar,cssanim,UIColor,Outdent,NumberedList,BulletedList,Indent,Strike,RemoveFormat,Font,Copy';
};