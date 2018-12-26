(function() {

	tinymce.PluginManager.add('secoond_button', function( editor, url ) {
		editor.addButton('secoond_button', {
			text: 'ShortCodes',
			icon: false,
			type: 'menubutton',
			menu: [
					{
						text: 'Menu 1',
						onclick: function() {
						editor.insertContent('[myslider1]');
						}
					},
					{
						text: 'Menu 2',
						menu: [
							{
								text: 'Second Menu 1',
								onclick: function() {
								editor.insertContent('[myslider11]');
								}
							},{
								text: 'Second Menu 2',
								onclick: function() {
								editor.insertContent('[myslider12]');
								}
							},{
								text: 'Second Menu 3',
								onclick: function() {
								editor.insertContent('[myslider13]');
								}
							}
						]
					},
					{
							text: 'Pop-Up',
							onclick: function() {
								editor.windowManager.open( {
									title: 'Insert User Shortcode',
									body: [
										{
											type: 'textbox',
											name: 'name',
											label: 'User Name',
											value: 'Ruhul'
										},
										{
											type: 'textbox',
											name: 'address',
											label: 'Address',
											multiline: true,
											minWidth: 300,
											minHeight: 100
										},
										{
											type: 'listbox',
											name: 'sex',
											label: 'Sex',
											'values': [
												{text: 'Male', value: 'male'},
												{text: 'Female', value: 'female'}
											]
										}
									],
									onsubmit: function( e ) {
										editor.insertContent( '[userregistation username="' + e.data.name + '" address="' + e.data.address + '" sex="' + e.data.sex + '"]');
									}
								});
							}
						}

			]
		});
	});
})();

