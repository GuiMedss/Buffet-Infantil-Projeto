jQuery(document).ready(function($) {
	init();
});

function init(){
	init_tinymce();
}

function init_tinymce(){

	tinymce.init({
		selector:'.tiny',
		plugins: 'image media link tinydrive code imagetools advlist lists checklist',
		height: 400,
	  	toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist checklist | forecolor backcolor casechange permanentpen formatpainter removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media pageembed template link anchor codesample | a11ycheck ltr rtl | showcomments addcomment',
  		quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',

	});
}
