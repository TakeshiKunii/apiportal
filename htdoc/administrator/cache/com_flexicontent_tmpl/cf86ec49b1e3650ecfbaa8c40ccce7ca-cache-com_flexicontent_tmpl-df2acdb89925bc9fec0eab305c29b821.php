<?php die("Access Denied"); ?>#x#a:2:{s:6:"result";O:8:"stdClass":2:{s:5:"items";O:8:"stdClass":5:{s:4:"blog";O:8:"stdClass":20:{s:4:"name";s:4:"blog";s:7:"xmlpath";s:78:"/opt/axway/apiportal/htdoc/components/com_flexicontent/templates/blog/item.xml";s:8:"xmlmtime";i:1504273337;s:4:"view";s:4:"item";s:7:"tmplvar";s:11:".items.blog";s:5:"thumb";s:51:"components/com_flexicontent/templates/blog/item.png";s:6:"params";s:5509:"<?xml version="1.0" encoding="utf-8"?>
<form>
	<author>Emmanuel Danan, George Papadakis</author>
	<website>www.flexicontent.org</website>
	<email>emmanuel@vistamedia.fr</email>
	<license>GPLv3</license>
	<version>1.2</version>
	<release>20 May 2014</release>
	<microdata_support>1</microdata_support>

	<defaulttitle>FLEXI_TMPL_BLOG_ITEM_DEFAULT_TITLE</defaulttitle>
	<description>FLEXI_TMPL_BLOG_ITEM_SHORT_DESC</description>

	<fields name="attribs">
		<fieldset name="attribs" addfieldpath="/administrator/components/com_flexicontent/elements">
			
			<field name="custom_layout_title" type="text" size="3" not_inherited="1" default="" label="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE" description="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE_DESC"/>
			
			<field name="title_grp" type="separator" cssprep="1" default="FLEXI_TMPL_ITEM_TITLE" description="" level="level2"/>
			<field name="title_color" type="color" cssprep="less" default="inherit" label="Title color" description="Color of title"/>
			<field name="title_cut_text" type="text" size="3" default="" label="FLEXI_TITLE_MAXLEN" description="FLEXI_TITLE_MAXLEN_DESC"/>
			
			<field name="label_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_LABEL_STYLING" description="" level="level2"/>
			<field name="label_bg_color" type="color" cssprep="less" default="#999999" label="FLEXI_TMPL_LABEL_BG" description="FLEXI_TMPL_LABEL_BG_DESC"/>
			<field name="label_txt_color" type="color" cssprep="less" default="#ffffff" label="FLEXI_TMPL_LABEL_TXT_COLOR" description="FLEXI_TMPL_LABEL_TXT_COLOR_DESC"/>
			<field name="label_radius" type="number" cssprep="less" default="3" label="FLEXI_TMPL_LABEL_RADIUS" description="FLEXI_TMPL_LABEL_RADIUS_DESC" min="0" max="80" step="1"/>
			
			<field name="display_field_grp" type="separator" cssprep="1" default="FLEXI_TMPL_FIELD_DISPLAY" description="" level="level2"/>
			<field name="show_author" type="radio" default="" label="FLEXI_SHOWAUTHOR" description="FLEXI_SHOWAUTHOR_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_HIDE</option>
				<option value="1">FLEXI_SHOW</option>
			</field>
			<field name="show_create_date" type="radio" default="" label="FLEXI_SHOWCREATED" description="FLEXI_SHOWCREATED_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_HIDE</option>
				<option value="1">FLEXI_SHOW</option>
			</field>
			<field name="show_modifier" type="radio" default="" label="FLEXI_SHOWMODIFIEDBY" description="FLEXI_SHOWMODIFIEDBY_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_HIDE</option>
				<option value="1">FLEXI_SHOW</option>
			</field>
			<field name="show_modify_date" type="radio" default="" label="FLEXI_SHOWMODIFIED" description="FLEXI_SHOWMODIFIED_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_HIDE</option>
				<option value="1">FLEXI_SHOW</option>
			</field>
			<field name="show_category" type="radio" default="" label="FLEXI_SHOWCATS" description="FLEXI_SHOWCATS_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_HIDE</option>
				<option value="1">FLEXI_SHOW</option>
			</field>
			<field name="show_vote" type="radio" default="" label="FLEXI_SHOWRATING" description="FLEXI_SHOWRATING_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_HIDE</option>
				<option value="1">FLEXI_SHOW</option>
			</field>
			<field name="show_favs" type="radio" default="" label="FLEXI_SHOWFAVS" description="FLEXI_SHOWFAVS_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_HIDE</option>
				<option value="1">FLEXI_SHOW</option>
			</field>
			<field name="show_tags" type="radio" default="" label="FLEXI_SHOWTAGS" description="FLEXI_SHOWTAGS_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_HIDE</option>
				<option value="1">FLEXI_SHOW</option>
			</field>
			
			<field name="Customblocks" type="separator" default="FLEXI_BLOCKS_CUSTOM_FIELDS" level="level2"/>
			
			<field name="columnmode" type="radio" default="" label="FLEXI_COLUMN_MODE" description="FLEXI_COLUMN_MODE_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_COLUMN_MODE_FORCE_1_COLS</option>
				<option value="1">FLEXI_COLUMN_MODE_FORCE_2_COLS</option>
				<option value="2">FLEXI_COLUMN_MODE_FORCE_AUTO_COLS</option>
			</field>
			
			<field name="templatehtmlmode" type="separator" default="FLEXI_TEMPLATE_HTML_MODE" level="level2"/>
			<field name="htmlmode" type="radio" default="" label="FLEXI_HTML_MODE" description="FLEXI_HTML_MODE_DESC" filter="int" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_XHTML</option>
				<option value="1">FLEXI_HTML5</option>
			</field>
			
		</fieldset>
	</fields> 
	
	<fieldgroups>
		<group readonly="true">fields_top</group>
		<group>beforedescription</group>
		<group readonly="true">description</group>
		<group>afterdescription</group>
		<group readonly="true">fields_bottom</group>
		<group>renderonly</group>
	</fieldgroups>
	<cssitem>
		<file>css/item.css</file>
	</cssitem>
	<jsitem>
	</jsitem>	
</form>
";s:6:"author";s:32:"Emmanuel Danan, George Papadakis";s:7:"website";s:20:"www.flexicontent.org";s:5:"email";s:22:"emmanuel@vistamedia.fr";s:7:"license";s:5:"GPLv3";s:7:"version";s:3:"1.2";s:7:"release";s:11:"20 May 2014";s:17:"microdata_support";s:1:"1";s:12:"defaulttitle";s:34:"FLEXI_TMPL_BLOG_ITEM_DEFAULT_TITLE";s:11:"description";s:31:"FLEXI_TMPL_BLOG_ITEM_SHORT_DESC";s:10:"attributes";a:6:{i:0;a:1:{s:8:"readonly";s:4:"true";}i:1;a:0:{}i:2;a:1:{s:8:"readonly";s:4:"true";}i:3;a:0:{}i:4;a:1:{s:8:"readonly";s:4:"true";}i:5;a:0:{}}s:9:"positions";a:6:{i:0;s:10:"fields_top";i:1;s:17:"beforedescription";i:2;s:11:"description";i:3;s:16:"afterdescription";i:4;s:13:"fields_bottom";i:5;s:10:"renderonly";}s:3:"css";O:8:"stdClass":1:{s:1:"0";s:55:"components/com_flexicontent/templates/blog/css/item.css";}s:10:"less_files";a:1:{i:0;s:14:"less/item.less";}}s:7:"default";O:8:"stdClass":20:{s:4:"name";s:7:"default";s:7:"xmlpath";s:81:"/opt/axway/apiportal/htdoc/components/com_flexicontent/templates/default/item.xml";s:8:"xmlmtime";i:1504273337;s:4:"view";s:4:"item";s:7:"tmplvar";s:14:".items.default";s:5:"thumb";s:54:"components/com_flexicontent/templates/default/item.png";s:6:"params";s:9869:"<?xml version="1.0" encoding="utf-8"?>
<form>
	<author>Emmanuel Danan, George Papadakis</author>
	<website>www.flexicontent.org</website>
	<email>emmanuel@vistamedia.fr</email>
	<license>GPLv3</license>
	<version>1.2</version>
	<release>20 May 2014</release>
	<microdata_support>1</microdata_support>

	<defaulttitle>FLEXI_TMPL_DEFAULT_ITEM_DEFAULT_TITLE</defaulttitle>
	<description>FLEXI_TMPL_DEFAULT_ITEM_SHORT_DESC</description>

	<fields name="attribs">
		<fieldset name="attribs" addfieldpath="/administrator/components/com_flexicontent/elements">

			<field name="custom_layout_title" type="text" size="3" not_inherited="1" default="" label="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE" description="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE_DESC"/>
			
			<field name="title_grp" type="separator" cssprep="1" default="FLEXI_TMPL_ITEM_TITLE" description="" level="level2"/>
			<field name="title_color" type="color" cssprep="less" default="inherit" label="Title color" description="Color of title"/>
			<field name="title_cut_text" type="text" size="3" default="" label="FLEXI_TITLE_MAXLEN" description="FLEXI_TITLE_MAXLEN_DESC"/>
			
			<field name="label_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_LABEL_STYLING" description="" level="level2"/>
			<field name="label_bg_color" type="color" cssprep="less" default="#999999" label="FLEXI_TMPL_LABEL_BG" description="FLEXI_TMPL_LABEL_BG_DESC"/>
			<field name="label_txt_color" type="color" cssprep="less" default="#ffffff" label="FLEXI_TMPL_LABEL_TXT_COLOR" description="FLEXI_TMPL_LABEL_TXT_COLOR_DESC"/>
			<field name="label_radius" type="number" cssprep="less" default="3" label="FLEXI_TMPL_LABEL_RADIUS" description="FLEXI_TMPL_LABEL_RADIUS_DESC" min="0" max="80" step="1"/>
			
			<field name="tab_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_TABS_STYLING" description="" level="level2"/>
			<field name="tab_handles_grp" type="separator" cssprep="1" default="FLEXI_TMPL_TABS_HANDLES" description="" level="level3"/>
			<field name="tab_bg_color_start" type="color" cssprep="less" default="#3093c7" label="FLEXI_TMPL_TAB_BG_START" description="FLEXI_TMPL_TAB_BG_START_DESC"/>
			<field name="tab_bg_color_end" type="color" cssprep="less" default="#1c5a85" label="FLEXI_TMPL_TAB_BG_END" description="FLEXI_TMPL_TAB_BG_END_DESC"/>
			<field name="tab_title_color" type="color" cssprep="less" default="#ffffff" label="FLEXI_TMPL_TAB_TITLE_COLOR" description="FLEXI_TMPL_TAB_TITLE_COLOR_DESC"/>
			
			<field name="column_display_grp" type="separator" cssprep="1" default="FLEXI_TMPL_COLUMNS_DISPLAY" description="" level="level2"/>
			<field name="top_cols" type="radio" default="" label="FLEXI_ITEM_TOP_COLS" description="FLEXI_ITEM_TOP_COLS_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="one">FLEXI_1_COL</option>
				<option value="two">FLEXI_2_COLS</option>
			</field>
			<field name="bottom_cols" type="radio" default="" label="FLEXI_ITEM_BOTTOM_COLS" description="FLEXI_ITEM_BOTTOM_COLS_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="one">FLEXI_1_COL</option>
				<option value="two">FLEXI_2_COLS</option>
			</field>
			
			<field name="subtitle_tabs_grp" type="separator" default="SubTitle Tabs" description="" level="level2"/>
			<field name="subtitle_tab1_label" type="text" default="" label="Label for Tab 1" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab2_label" type="text" default="" label="Label for Tab 2" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab3_label" type="text" default="" label="Label for Tab 3" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab4_label" type="text" default="" label="Label for Tab 4" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab5_label" type="text" default="" label="Label for Tab 5" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab6_label" type="text" default="" label="Label for Tab 6" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab7_label" type="text" default="" label="Label for Tab 7" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab8_label" type="text" default="" label="Label for Tab 8" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab9_label" type="text" default="" label="Label for Tab 9" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab10_label" type="text" default="" label="Label for Tab 10" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab11_label" type="text" default="" label="Label for Tab 11" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab12_label" type="text" default="" label="Label for Tab 12" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			
			<field name="bottom_tabs_grp" type="separator" default="Bottom Tabs" description="" level="level2"/>
			<field name="bottom_tab1_label" type="text" default="" label="Label for Tab 1" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab2_label" type="text" default="" label="Label for Tab 2" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab3_label" type="text" default="" label="Label for Tab 3" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab4_label" type="text" default="" label="Label for Tab 4" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab5_label" type="text" default="" label="Label for Tab 5" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab6_label" type="text" default="" label="Label for Tab 6" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab7_label" type="text" default="" label="Label for Tab 7" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab8_label" type="text" default="" label="Label for Tab 8" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab9_label" type="text" default="" label="Label for Tab 9" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab10_label" type="text" default="" label="Label for Tab 10" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab11_label" type="text" default="" label="Label for Tab 11" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab12_label" type="text" default="" label="Label for Tab 12" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			
			<field name="templatehtmlmode" type="separator" default="FLEXI_TEMPLATE_HTML_MODE" level="level2"/>
			<field name="htmlmode" type="radio" default="" label="FLEXI_HTML_MODE" description="FLEXI_HTML_MODE_DESC" filter="int" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_XHTML</option>
				<option value="1">FLEXI_HTML5</option>
			</field>
			
		</fieldset>
	</fields>
	
	<fieldgroups>
		<group>subtitle1</group>
		<group>subtitle2</group>
		<group>subtitle3</group>
		<group posrow="subtitle">subtitle_tab1</group>
		<group posrow="subtitle">subtitle_tab2</group>
		<group posrow="subtitle">subtitle_tab3</group>
		<group posrow="subtitle">subtitle_tab4</group>
		<group posrow="subtitle">subtitle_tab5</group>
		<group posrow="subtitle">subtitle_tab6</group>
		<group posrow="subtitle_wrap2">subtitle_tab7</group>
		<group posrow="subtitle_wrap2">subtitle_tab8</group>
		<group posrow="subtitle_wrap2">subtitle_tab9</group>
		<group posrow="subtitle_wrap2">subtitle_tab10</group>
		<group posrow="subtitle_wrap2">subtitle_tab11</group>
		<group posrow="subtitle_wrap2">subtitle_tab12</group>
		<group posrow="img_top">image</group>
		<group posrow="img_top">top</group>
		<group>description</group>
		<group posrow="bottom">bottom_tab1</group>
		<group posrow="bottom">bottom_tab2</group>
		<group posrow="bottom">bottom_tab3</group>
		<group posrow="bottom">bottom_tab4</group>
		<group posrow="bottom">bottom_tab5</group>
		<group posrow="bottom">bottom_tab6</group>
		<group posrow="bottom_wrap2">bottom_tab7</group>
		<group posrow="bottom_wrap2">bottom_tab8</group>
		<group posrow="bottom_wrap2">bottom_tab9</group>
		<group posrow="bottom_wrap2">bottom_tab10</group>
		<group posrow="bottom_wrap2">bottom_tab11</group>
		<group posrow="bottom_wrap2">bottom_tab12</group>
		<group>bottom</group>
		<group>renderonly</group>
	</fieldgroups>
	<cssitem>
		<file>css/item.css</file>
	</cssitem>
	<jsitem>
	</jsitem>	
</form>
";s:6:"author";s:32:"Emmanuel Danan, George Papadakis";s:7:"website";s:20:"www.flexicontent.org";s:5:"email";s:22:"emmanuel@vistamedia.fr";s:7:"license";s:5:"GPLv3";s:7:"version";s:3:"1.2";s:7:"release";s:11:"20 May 2014";s:17:"microdata_support";s:1:"1";s:12:"defaulttitle";s:37:"FLEXI_TMPL_DEFAULT_ITEM_DEFAULT_TITLE";s:11:"description";s:34:"FLEXI_TMPL_DEFAULT_ITEM_SHORT_DESC";s:10:"attributes";a:32:{i:0;a:0:{}i:1;a:0:{}i:2;a:0:{}i:3;a:1:{s:6:"posrow";s:8:"subtitle";}i:4;a:1:{s:6:"posrow";s:8:"subtitle";}i:5;a:1:{s:6:"posrow";s:8:"subtitle";}i:6;a:1:{s:6:"posrow";s:8:"subtitle";}i:7;a:1:{s:6:"posrow";s:8:"subtitle";}i:8;a:1:{s:6:"posrow";s:8:"subtitle";}i:9;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:10;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:11;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:12;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:13;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:14;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:15;a:1:{s:6:"posrow";s:7:"img_top";}i:16;a:1:{s:6:"posrow";s:7:"img_top";}i:17;a:0:{}i:18;a:1:{s:6:"posrow";s:6:"bottom";}i:19;a:1:{s:6:"posrow";s:6:"bottom";}i:20;a:1:{s:6:"posrow";s:6:"bottom";}i:21;a:1:{s:6:"posrow";s:6:"bottom";}i:22;a:1:{s:6:"posrow";s:6:"bottom";}i:23;a:1:{s:6:"posrow";s:6:"bottom";}i:24;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:25;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:26;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:27;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:28;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:29;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:30;a:0:{}i:31;a:0:{}}s:9:"positions";a:32:{i:0;s:9:"subtitle1";i:1;s:9:"subtitle2";i:2;s:9:"subtitle3";i:3;s:13:"subtitle_tab1";i:4;s:13:"subtitle_tab2";i:5;s:13:"subtitle_tab3";i:6;s:13:"subtitle_tab4";i:7;s:13:"subtitle_tab5";i:8;s:13:"subtitle_tab6";i:9;s:13:"subtitle_tab7";i:10;s:13:"subtitle_tab8";i:11;s:13:"subtitle_tab9";i:12;s:14:"subtitle_tab10";i:13;s:14:"subtitle_tab11";i:14;s:14:"subtitle_tab12";i:15;s:5:"image";i:16;s:3:"top";i:17;s:11:"description";i:18;s:11:"bottom_tab1";i:19;s:11:"bottom_tab2";i:20;s:11:"bottom_tab3";i:21;s:11:"bottom_tab4";i:22;s:11:"bottom_tab5";i:23;s:11:"bottom_tab6";i:24;s:11:"bottom_tab7";i:25;s:11:"bottom_tab8";i:26;s:11:"bottom_tab9";i:27;s:12:"bottom_tab10";i:28;s:12:"bottom_tab11";i:29;s:12:"bottom_tab12";i:30;s:6:"bottom";i:31;s:10:"renderonly";}s:3:"css";O:8:"stdClass":1:{s:1:"0";s:58:"components/com_flexicontent/templates/default/css/item.css";}s:10:"less_files";a:1:{i:0;s:14:"less/item.less";}}s:3:"faq";O:8:"stdClass":20:{s:4:"name";s:3:"faq";s:7:"xmlpath";s:77:"/opt/axway/apiportal/htdoc/components/com_flexicontent/templates/faq/item.xml";s:8:"xmlmtime";i:1504273337;s:4:"view";s:4:"item";s:7:"tmplvar";s:10:".items.faq";s:5:"thumb";s:50:"components/com_flexicontent/templates/faq/item.png";s:6:"params";s:9861:"<?xml version="1.0" encoding="utf-8"?>
<form>
	<author>Emmanuel Danan, George Papadakis</author>
	<website>www.flexicontent.org</website>
	<email>emmanuel@vistamedia.fr</email>
	<license>GPLv3</license>
	<version>1.2</version>
	<release>20 May 2014</release>
	<microdata_support>1</microdata_support>

	<defaulttitle>FLEXI_TMPL_FAQ_ITEM_DEFAULT_TITLE</defaulttitle>
	<description>FLEXI_TMPL_FAQ_ITEM_SHORT_DESC</description>

	<fields name="attribs">
		<fieldset name="attribs" addfieldpath="/administrator/components/com_flexicontent/elements">

			<field name="custom_layout_title" type="text" size="3" not_inherited="1" default="" label="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE" description="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE_DESC"/>
			
			<field name="title_grp" type="separator" cssprep="1" default="FLEXI_TMPL_ITEM_TITLE" description="" level="level2"/>
			<field name="title_color" type="color" cssprep="less" default="inherit" label="Title color" description="Color of title"/>
			<field name="title_cut_text" type="text" size="3" default="" label="FLEXI_TITLE_MAXLEN" description="FLEXI_TITLE_MAXLEN_DESC"/>
			
			<field name="label_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_LABEL_STYLING" description="" level="level2"/>
			<field name="label_bg_color" type="color" cssprep="less" default="#999999" label="FLEXI_TMPL_LABEL_BG" description="FLEXI_TMPL_LABEL_BG_DESC"/>
			<field name="label_txt_color" type="color" cssprep="less" default="#ffffff" label="FLEXI_TMPL_LABEL_TXT_COLOR" description="FLEXI_TMPL_LABEL_TXT_COLOR_DESC"/>
			<field name="label_radius" type="number" cssprep="less" default="3" label="FLEXI_TMPL_LABEL_RADIUS" description="FLEXI_TMPL_LABEL_RADIUS_DESC" min="0" max="80" step="1"/>
			
			<field name="tab_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_TABS_STYLING" description="" level="level2"/>
			<field name="tab_handles_grp" type="separator" cssprep="1" default="FLEXI_TMPL_TABS_HANDLES" description="" level="level3"/>
			<field name="tab_bg_color_start" type="color" cssprep="less" default="#3093c7" label="FLEXI_TMPL_TAB_BG_START" description="FLEXI_TMPL_TAB_BG_START_DESC"/>
			<field name="tab_bg_color_end" type="color" cssprep="less" default="#1c5a85" label="FLEXI_TMPL_TAB_BG_END" description="FLEXI_TMPL_TAB_BG_END_DESC"/>
			<field name="tab_title_color" type="color" cssprep="less" default="#ffffff" label="FLEXI_TMPL_TAB_TITLE_COLOR" description="FLEXI_TMPL_TAB_TITLE_COLOR_DESC"/>
			
			<field name="column_display_grp" type="separator" cssprep="1" default="FLEXI_TMPL_COLUMNS_DISPLAY" description="" level="level2"/>
			<field name="top_cols" type="radio" default="" label="FLEXI_ITEM_TOP_COLS" description="FLEXI_ITEM_TOP_COLS_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="one">FLEXI_1_COL</option>
				<option value="two">FLEXI_2_COLS</option>
			</field>
			<field name="bottom_cols" type="radio" default="" label="FLEXI_ITEM_BOTTOM_COLS" description="FLEXI_ITEM_BOTTOM_COLS_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="one">FLEXI_1_COL</option>
				<option value="two">FLEXI_2_COLS</option>
			</field>
			
			<field name="subtitle_tabs_grp" type="separator" default="SubTitle Tabs" description="" level="level2"/>
			<field name="subtitle_tab1_label" type="text" default="" label="Label for Tab 1" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab2_label" type="text" default="" label="Label for Tab 2" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab3_label" type="text" default="" label="Label for Tab 3" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab4_label" type="text" default="" label="Label for Tab 4" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab5_label" type="text" default="" label="Label for Tab 5" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab6_label" type="text" default="" label="Label for Tab 6" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab7_label" type="text" default="" label="Label for Tab 7" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab8_label" type="text" default="" label="Label for Tab 8" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab9_label" type="text" default="" label="Label for Tab 9" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab10_label" type="text" default="" label="Label for Tab 10" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab11_label" type="text" default="" label="Label for Tab 11" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab12_label" type="text" default="" label="Label for Tab 12" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			
			<field name="bottom_tabs_grp" type="separator" default="Bottom Tabs" description="" level="level2"/>
			<field name="bottom_tab1_label" type="text" default="" label="Label for Tab 1" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab2_label" type="text" default="" label="Label for Tab 2" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab3_label" type="text" default="" label="Label for Tab 3" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab4_label" type="text" default="" label="Label for Tab 4" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab5_label" type="text" default="" label="Label for Tab 5" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab6_label" type="text" default="" label="Label for Tab 6" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab7_label" type="text" default="" label="Label for Tab 7" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab8_label" type="text" default="" label="Label for Tab 8" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab9_label" type="text" default="" label="Label for Tab 9" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab10_label" type="text" default="" label="Label for Tab 10" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab11_label" type="text" default="" label="Label for Tab 11" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab12_label" type="text" default="" label="Label for Tab 12" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			
			<field name="templatehtmlmode" type="separator" default="FLEXI_TEMPLATE_HTML_MODE" level="level2"/>
			<field name="htmlmode" type="radio" default="" label="FLEXI_HTML_MODE" description="FLEXI_HTML_MODE_DESC" filter="int" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_XHTML</option>
				<option value="1">FLEXI_HTML5</option>
			</field>
			
		</fieldset>
	</fields>
	
	<fieldgroups>
		<group>subtitle1</group>
		<group>subtitle2</group>
		<group>subtitle3</group>
		<group posrow="subtitle">subtitle_tab1</group>
		<group posrow="subtitle">subtitle_tab2</group>
		<group posrow="subtitle">subtitle_tab3</group>
		<group posrow="subtitle">subtitle_tab4</group>
		<group posrow="subtitle">subtitle_tab5</group>
		<group posrow="subtitle">subtitle_tab6</group>
		<group posrow="subtitle_wrap2">subtitle_tab7</group>
		<group posrow="subtitle_wrap2">subtitle_tab8</group>
		<group posrow="subtitle_wrap2">subtitle_tab9</group>
		<group posrow="subtitle_wrap2">subtitle_tab10</group>
		<group posrow="subtitle_wrap2">subtitle_tab11</group>
		<group posrow="subtitle_wrap2">subtitle_tab12</group>
		<group posrow="img_top">image</group>
		<group posrow="img_top">top</group>
		<group>description</group>
		<group posrow="bottom">bottom_tab1</group>
		<group posrow="bottom">bottom_tab2</group>
		<group posrow="bottom">bottom_tab3</group>
		<group posrow="bottom">bottom_tab4</group>
		<group posrow="bottom">bottom_tab5</group>
		<group posrow="bottom">bottom_tab6</group>
		<group posrow="bottom_wrap2">bottom_tab7</group>
		<group posrow="bottom_wrap2">bottom_tab8</group>
		<group posrow="bottom_wrap2">bottom_tab9</group>
		<group posrow="bottom_wrap2">bottom_tab10</group>
		<group posrow="bottom_wrap2">bottom_tab11</group>
		<group posrow="bottom_wrap2">bottom_tab12</group>
		<group>bottom</group>
		<group>renderonly</group>
	</fieldgroups>
	<cssitem>
		<file>css/item.css</file>
	</cssitem>
	<jsitem>
	</jsitem>	
</form>
";s:6:"author";s:32:"Emmanuel Danan, George Papadakis";s:7:"website";s:20:"www.flexicontent.org";s:5:"email";s:22:"emmanuel@vistamedia.fr";s:7:"license";s:5:"GPLv3";s:7:"version";s:3:"1.2";s:7:"release";s:11:"20 May 2014";s:17:"microdata_support";s:1:"1";s:12:"defaulttitle";s:33:"FLEXI_TMPL_FAQ_ITEM_DEFAULT_TITLE";s:11:"description";s:30:"FLEXI_TMPL_FAQ_ITEM_SHORT_DESC";s:10:"attributes";a:32:{i:0;a:0:{}i:1;a:0:{}i:2;a:0:{}i:3;a:1:{s:6:"posrow";s:8:"subtitle";}i:4;a:1:{s:6:"posrow";s:8:"subtitle";}i:5;a:1:{s:6:"posrow";s:8:"subtitle";}i:6;a:1:{s:6:"posrow";s:8:"subtitle";}i:7;a:1:{s:6:"posrow";s:8:"subtitle";}i:8;a:1:{s:6:"posrow";s:8:"subtitle";}i:9;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:10;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:11;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:12;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:13;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:14;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:15;a:1:{s:6:"posrow";s:7:"img_top";}i:16;a:1:{s:6:"posrow";s:7:"img_top";}i:17;a:0:{}i:18;a:1:{s:6:"posrow";s:6:"bottom";}i:19;a:1:{s:6:"posrow";s:6:"bottom";}i:20;a:1:{s:6:"posrow";s:6:"bottom";}i:21;a:1:{s:6:"posrow";s:6:"bottom";}i:22;a:1:{s:6:"posrow";s:6:"bottom";}i:23;a:1:{s:6:"posrow";s:6:"bottom";}i:24;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:25;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:26;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:27;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:28;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:29;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:30;a:0:{}i:31;a:0:{}}s:9:"positions";a:32:{i:0;s:9:"subtitle1";i:1;s:9:"subtitle2";i:2;s:9:"subtitle3";i:3;s:13:"subtitle_tab1";i:4;s:13:"subtitle_tab2";i:5;s:13:"subtitle_tab3";i:6;s:13:"subtitle_tab4";i:7;s:13:"subtitle_tab5";i:8;s:13:"subtitle_tab6";i:9;s:13:"subtitle_tab7";i:10;s:13:"subtitle_tab8";i:11;s:13:"subtitle_tab9";i:12;s:14:"subtitle_tab10";i:13;s:14:"subtitle_tab11";i:14;s:14:"subtitle_tab12";i:15;s:5:"image";i:16;s:3:"top";i:17;s:11:"description";i:18;s:11:"bottom_tab1";i:19;s:11:"bottom_tab2";i:20;s:11:"bottom_tab3";i:21;s:11:"bottom_tab4";i:22;s:11:"bottom_tab5";i:23;s:11:"bottom_tab6";i:24;s:11:"bottom_tab7";i:25;s:11:"bottom_tab8";i:26;s:11:"bottom_tab9";i:27;s:12:"bottom_tab10";i:28;s:12:"bottom_tab11";i:29;s:12:"bottom_tab12";i:30;s:6:"bottom";i:31;s:10:"renderonly";}s:3:"css";O:8:"stdClass":1:{s:1:"0";s:54:"components/com_flexicontent/templates/faq/css/item.css";}s:10:"less_files";a:1:{i:0;s:14:"less/item.less";}}s:12:"items-tabbed";O:8:"stdClass":20:{s:4:"name";s:12:"items-tabbed";s:7:"xmlpath";s:86:"/opt/axway/apiportal/htdoc/components/com_flexicontent/templates/items-tabbed/item.xml";s:8:"xmlmtime";i:1504273337;s:4:"view";s:4:"item";s:7:"tmplvar";s:19:".items.items-tabbed";s:5:"thumb";s:59:"components/com_flexicontent/templates/items-tabbed/item.png";s:6:"params";s:9860:"<?xml version="1.0" encoding="utf-8"?>
<form>
	<author>Emmanuel Danan, George Papadakis</author>
	<website>www.flexicontent.org</website>
	<email>emmanuel@vistamedia.fr</email>
	<license>GPLv3</license>
	<version>1.2</version>
	<release>20 May 2014</release>
	<microdata_support>1</microdata_support>

	<defaulttitle>FLEXI_TMPL_ITEMSTABBED_ITEM_DEFAULT_TITLE</defaulttitle>
	<description>FLEXI_TMPL_ITEMSTABBED_ITEM_SHORT_DESC</description>

	<fields name="attribs">
		<fieldset name="attribs" addfieldpath="/administrator/components/com_flexicontent/elements">

			<field name="custom_layout_title" type="text" size="3" not_inherited="1" default="" label="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE" description="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE_DESC"/>
			
			<field name="title_grp" type="separator" cssprep="1" default="FLEXI_TMPL_ITEM_TITLE" description="" level="level2"/>
			<field name="title_color" type="color" cssprep="less" default="inherit" label="Title color" description="Color of title"/>
			<field name="title_cut_text" type="text" size="3" default="" label="FLEXI_TITLE_MAXLEN" description="FLEXI_TITLE_MAXLEN_DESC"/>
			
			<field name="field_cols_grp" type="separator" cssprep="1" default="Field columns" description="" level="level2"/>
			<field name="top_cols" type="radio" default="" label="FLEXI_ITEM_TOP_COLS" description="FLEXI_ITEM_TOP_COLS_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="one">FLEXI_1_COL</option>
				<option value="two">FLEXI_2_COLS</option>
			</field>
			<field name="bottom_cols" type="radio" default="" label="FLEXI_ITEM_BOTTOM_COLS" description="FLEXI_ITEM_BOTTOM_COLS_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="one">FLEXI_1_COL</option>
				<option value="two">FLEXI_2_COLS</option>
			</field>
			
			<field name="label_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_LABEL_STYLING" description="" level="level2"/>
			<field name="label_bg_color" type="color" cssprep="less" default="#999999" label="FLEXI_TMPL_LABEL_BG" description="FLEXI_TMPL_LABEL_BG_DESC"/>
			<field name="label_txt_color" type="color" cssprep="less" default="#ffffff" label="FLEXI_TMPL_LABEL_TXT_COLOR" description="FLEXI_TMPL_LABEL_TXT_COLOR_DESC"/>
			<field name="label_radius" type="number" cssprep="less" default="3" label="FLEXI_TMPL_LABEL_RADIUS" description="FLEXI_TMPL_LABEL_RADIUS_DESC" min="0" max="80" step="1"/>
			
			<field name="tab_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_TABS_STYLING" description="" level="level2"/>
			<field name="tab_handles_grp" type="separator" cssprep="1" default="FLEXI_TMPL_TABS_HANDLES" description="" level="level3"/>
			<field name="tab_bg_color_start" type="color" cssprep="less" default="#3093c7" label="FLEXI_TMPL_TAB_BG_START" description="FLEXI_TMPL_TAB_BG_START_DESC"/>
			<field name="tab_bg_color_end" type="color" cssprep="less" default="#1c5a85" label="FLEXI_TMPL_TAB_BG_END" description="FLEXI_TMPL_TAB_BG_END_DESC"/>
			<field name="tab_title_color" type="color" cssprep="less" default="#ffffff" label="FLEXI_TMPL_TAB_TITLE_COLOR" description="FLEXI_TMPL_TAB_TITLE_COLOR_DESC"/>
			
			<field name="subtitle_tabs_grp" type="separator" default="SubTitle Tabs" description="" level="level2"/>
			<field name="subtitle_tab1_label" type="text" default="" label="Label for Tab 1" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab2_label" type="text" default="" label="Label for Tab 2" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab3_label" type="text" default="" label="Label for Tab 3" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab4_label" type="text" default="" label="Label for Tab 4" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab5_label" type="text" default="" label="Label for Tab 5" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab6_label" type="text" default="" label="Label for Tab 6" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab7_label" type="text" default="" label="Label for Tab 7" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab8_label" type="text" default="" label="Label for Tab 8" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab9_label" type="text" default="" label="Label for Tab 9" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab10_label" type="text" default="" label="Label for Tab 10" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab11_label" type="text" default="" label="Label for Tab 11" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab12_label" type="text" default="" label="Label for Tab 12" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			
			<field name="bottom_tabs_grp" type="separator" default="Bottom Tabs" description="" level="level2"/>
			<field name="bottom_tab1_label" type="text" default="" label="Label for Tab 1" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab2_label" type="text" default="" label="Label for Tab 2" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab3_label" type="text" default="" label="Label for Tab 3" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab4_label" type="text" default="" label="Label for Tab 4" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab5_label" type="text" default="" label="Label for Tab 5" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab6_label" type="text" default="" label="Label for Tab 6" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab7_label" type="text" default="" label="Label for Tab 7" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab8_label" type="text" default="" label="Label for Tab 8" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab9_label" type="text" default="" label="Label for Tab 9" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab10_label" type="text" default="" label="Label for Tab 10" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab11_label" type="text" default="" label="Label for Tab 11" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab12_label" type="text" default="" label="Label for Tab 12" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			
			<field name="templatehtmlmode" type="separator" default="FLEXI_TEMPLATE_HTML_MODE" level="level2"/>
			<field name="htmlmode" type="radio" default="" label="FLEXI_HTML_MODE" description="FLEXI_HTML_MODE_DESC" filter="int" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_XHTML</option>
				<option value="1">FLEXI_HTML5</option>
			</field>
			
		</fieldset>
	</fields>
	
	<fieldgroups>
		<group>subtitle1</group>
		<group>subtitle2</group>
		<group>subtitle3</group>
		<group posrow="subtitle">subtitle_tab1</group>
		<group posrow="subtitle">subtitle_tab2</group>
		<group posrow="subtitle">subtitle_tab3</group>
		<group posrow="subtitle">subtitle_tab4</group>
		<group posrow="subtitle">subtitle_tab5</group>
		<group posrow="subtitle">subtitle_tab6</group>
		<group posrow="subtitle_wrap2">subtitle_tab7</group>
		<group posrow="subtitle_wrap2">subtitle_tab8</group>
		<group posrow="subtitle_wrap2">subtitle_tab9</group>
		<group posrow="subtitle_wrap2">subtitle_tab10</group>
		<group posrow="subtitle_wrap2">subtitle_tab11</group>
		<group posrow="subtitle_wrap2">subtitle_tab12</group>
		<group posrow="img_top">image</group>
		<group posrow="img_top">top</group>
		<group>description</group>
		<group posrow="bottom">bottom_tab1</group>
		<group posrow="bottom">bottom_tab2</group>
		<group posrow="bottom">bottom_tab3</group>
		<group posrow="bottom">bottom_tab4</group>
		<group posrow="bottom">bottom_tab5</group>
		<group posrow="bottom">bottom_tab6</group>
		<group posrow="bottom_wrap2">bottom_tab7</group>
		<group posrow="bottom_wrap2">bottom_tab8</group>
		<group posrow="bottom_wrap2">bottom_tab9</group>
		<group posrow="bottom_wrap2">bottom_tab10</group>
		<group posrow="bottom_wrap2">bottom_tab11</group>
		<group posrow="bottom_wrap2">bottom_tab12</group>
		<group>bottom</group>
		<group>renderonly</group>
	</fieldgroups>
	<cssitem>
		<file>css/item.css</file>
	</cssitem>
	<jsitem>
	</jsitem>	
</form>
";s:6:"author";s:32:"Emmanuel Danan, George Papadakis";s:7:"website";s:20:"www.flexicontent.org";s:5:"email";s:22:"emmanuel@vistamedia.fr";s:7:"license";s:5:"GPLv3";s:7:"version";s:3:"1.2";s:7:"release";s:11:"20 May 2014";s:17:"microdata_support";s:1:"1";s:12:"defaulttitle";s:41:"FLEXI_TMPL_ITEMSTABBED_ITEM_DEFAULT_TITLE";s:11:"description";s:38:"FLEXI_TMPL_ITEMSTABBED_ITEM_SHORT_DESC";s:10:"attributes";a:32:{i:0;a:0:{}i:1;a:0:{}i:2;a:0:{}i:3;a:1:{s:6:"posrow";s:8:"subtitle";}i:4;a:1:{s:6:"posrow";s:8:"subtitle";}i:5;a:1:{s:6:"posrow";s:8:"subtitle";}i:6;a:1:{s:6:"posrow";s:8:"subtitle";}i:7;a:1:{s:6:"posrow";s:8:"subtitle";}i:8;a:1:{s:6:"posrow";s:8:"subtitle";}i:9;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:10;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:11;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:12;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:13;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:14;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:15;a:1:{s:6:"posrow";s:7:"img_top";}i:16;a:1:{s:6:"posrow";s:7:"img_top";}i:17;a:0:{}i:18;a:1:{s:6:"posrow";s:6:"bottom";}i:19;a:1:{s:6:"posrow";s:6:"bottom";}i:20;a:1:{s:6:"posrow";s:6:"bottom";}i:21;a:1:{s:6:"posrow";s:6:"bottom";}i:22;a:1:{s:6:"posrow";s:6:"bottom";}i:23;a:1:{s:6:"posrow";s:6:"bottom";}i:24;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:25;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:26;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:27;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:28;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:29;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:30;a:0:{}i:31;a:0:{}}s:9:"positions";a:32:{i:0;s:9:"subtitle1";i:1;s:9:"subtitle2";i:2;s:9:"subtitle3";i:3;s:13:"subtitle_tab1";i:4;s:13:"subtitle_tab2";i:5;s:13:"subtitle_tab3";i:6;s:13:"subtitle_tab4";i:7;s:13:"subtitle_tab5";i:8;s:13:"subtitle_tab6";i:9;s:13:"subtitle_tab7";i:10;s:13:"subtitle_tab8";i:11;s:13:"subtitle_tab9";i:12;s:14:"subtitle_tab10";i:13;s:14:"subtitle_tab11";i:14;s:14:"subtitle_tab12";i:15;s:5:"image";i:16;s:3:"top";i:17;s:11:"description";i:18;s:11:"bottom_tab1";i:19;s:11:"bottom_tab2";i:20;s:11:"bottom_tab3";i:21;s:11:"bottom_tab4";i:22;s:11:"bottom_tab5";i:23;s:11:"bottom_tab6";i:24;s:11:"bottom_tab7";i:25;s:11:"bottom_tab8";i:26;s:11:"bottom_tab9";i:27;s:12:"bottom_tab10";i:28;s:12:"bottom_tab11";i:29;s:12:"bottom_tab12";i:30;s:6:"bottom";i:31;s:10:"renderonly";}s:3:"css";O:8:"stdClass":1:{s:1:"0";s:63:"components/com_flexicontent/templates/items-tabbed/css/item.css";}s:10:"less_files";a:1:{i:0;s:14:"less/item.less";}}s:12:"presentation";O:8:"stdClass":20:{s:4:"name";s:12:"presentation";s:7:"xmlpath";s:86:"/opt/axway/apiportal/htdoc/components/com_flexicontent/templates/presentation/item.xml";s:8:"xmlmtime";i:1504273337;s:4:"view";s:4:"item";s:7:"tmplvar";s:19:".items.presentation";s:5:"thumb";s:59:"components/com_flexicontent/templates/presentation/item.png";s:6:"params";s:9879:"<?xml version="1.0" encoding="utf-8"?>
<form>
	<author>Emmanuel Danan, George Papadakis</author>
	<website>www.flexicontent.org</website>
	<email>emmanuel@vistamedia.fr</email>
	<license>GPLv3</license>
	<version>1.2</version>
	<release>20 May 2014</release>
	<microdata_support>1</microdata_support>

	<defaulttitle>FLEXI_TMPL_PRESENTATION_ITEM_DEFAULT_TITLE</defaulttitle>
	<description>FLEXI_TMPL_PRESENTATION_ITEM_SHORT_DESC</description>

	<fields name="attribs">
		<fieldset name="attribs" addfieldpath="/administrator/components/com_flexicontent/elements">

			<field name="custom_layout_title" type="text" size="3" not_inherited="1" default="" label="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE" description="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE_DESC"/>
			
			<field name="title_grp" type="separator" cssprep="1" default="FLEXI_TMPL_ITEM_TITLE" description="" level="level2"/>
			<field name="title_color" type="color" cssprep="less" default="inherit" label="Title color" description="Color of title"/>
			<field name="title_cut_text" type="text" size="3" default="" label="FLEXI_TITLE_MAXLEN" description="FLEXI_TITLE_MAXLEN_DESC"/>
			
			<field name="label_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_LABEL_STYLING" description="" level="level2"/>
			<field name="label_bg_color" type="color" cssprep="less" default="#999999" label="FLEXI_TMPL_LABEL_BG" description="FLEXI_TMPL_LABEL_BG_DESC"/>
			<field name="label_txt_color" type="color" cssprep="less" default="#ffffff" label="FLEXI_TMPL_LABEL_TXT_COLOR" description="FLEXI_TMPL_LABEL_TXT_COLOR_DESC"/>
			<field name="label_radius" type="number" cssprep="less" default="3" label="FLEXI_TMPL_LABEL_RADIUS" description="FLEXI_TMPL_LABEL_RADIUS_DESC" min="0" max="80" step="1"/>
			
			<field name="tab_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_TABS_STYLING" description="" level="level2"/>
			<field name="tab_handles_grp" type="separator" cssprep="1" default="FLEXI_TMPL_TABS_HANDLES" description="" level="level3"/>
			<field name="tab_bg_color_start" type="color" cssprep="less" default="#3093c7" label="FLEXI_TMPL_TAB_BG_START" description="FLEXI_TMPL_TAB_BG_START_DESC"/>
			<field name="tab_bg_color_end" type="color" cssprep="less" default="#1c5a85" label="FLEXI_TMPL_TAB_BG_END" description="FLEXI_TMPL_TAB_BG_END_DESC"/>
			<field name="tab_title_color" type="color" cssprep="less" default="#ffffff" label="FLEXI_TMPL_TAB_TITLE_COLOR" description="FLEXI_TMPL_TAB_TITLE_COLOR_DESC"/>
			
			<field name="column_display_grp" type="separator" cssprep="1" default="FLEXI_TMPL_COLUMNS_DISPLAY" description="" level="level2"/>
			<field name="top_cols" type="radio" default="" label="FLEXI_ITEM_TOP_COLS" description="FLEXI_ITEM_TOP_COLS_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="one">FLEXI_1_COL</option>
				<option value="two">FLEXI_2_COLS</option>
			</field>
			<field name="bottom_cols" type="radio" default="" label="FLEXI_ITEM_BOTTOM_COLS" description="FLEXI_ITEM_BOTTOM_COLS_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="one">FLEXI_1_COL</option>
				<option value="two">FLEXI_2_COLS</option>
			</field>
			
			<field name="subtitle_tabs_grp" type="separator" default="SubTitle Tabs" description="" level="level2"/>
			<field name="subtitle_tab1_label" type="text" default="" label="Label for Tab 1" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab2_label" type="text" default="" label="Label for Tab 2" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab3_label" type="text" default="" label="Label for Tab 3" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab4_label" type="text" default="" label="Label for Tab 4" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab5_label" type="text" default="" label="Label for Tab 5" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab6_label" type="text" default="" label="Label for Tab 6" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab7_label" type="text" default="" label="Label for Tab 7" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab8_label" type="text" default="" label="Label for Tab 8" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab9_label" type="text" default="" label="Label for Tab 9" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab10_label" type="text" default="" label="Label for Tab 10" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab11_label" type="text" default="" label="Label for Tab 11" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab12_label" type="text" default="" label="Label for Tab 12" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			
			<field name="bottom_tabs_grp" type="separator" default="Bottom Tabs" description="" level="level2"/>
			<field name="bottom_tab1_label" type="text" default="" label="Label for Tab 1" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab2_label" type="text" default="" label="Label for Tab 2" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab3_label" type="text" default="" label="Label for Tab 3" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab4_label" type="text" default="" label="Label for Tab 4" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab5_label" type="text" default="" label="Label for Tab 5" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab6_label" type="text" default="" label="Label for Tab 6" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab7_label" type="text" default="" label="Label for Tab 7" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab8_label" type="text" default="" label="Label for Tab 8" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab9_label" type="text" default="" label="Label for Tab 9" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab10_label" type="text" default="" label="Label for Tab 10" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab11_label" type="text" default="" label="Label for Tab 11" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab12_label" type="text" default="" label="Label for Tab 12" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			
			<field name="templatehtmlmode" type="separator" default="FLEXI_TEMPLATE_HTML_MODE" level="level2"/>
			<field name="htmlmode" type="radio" default="" label="FLEXI_HTML_MODE" description="FLEXI_HTML_MODE_DESC" filter="int" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_XHTML</option>
				<option value="1">FLEXI_HTML5</option>
			</field>
			
		</fieldset>
	</fields>
	
	<fieldgroups>
		<group>subtitle1</group>
		<group>subtitle2</group>
		<group>subtitle3</group>
		<group posrow="subtitle">subtitle_tab1</group>
		<group posrow="subtitle">subtitle_tab2</group>
		<group posrow="subtitle">subtitle_tab3</group>
		<group posrow="subtitle">subtitle_tab4</group>
		<group posrow="subtitle">subtitle_tab5</group>
		<group posrow="subtitle">subtitle_tab6</group>
		<group posrow="subtitle_wrap2">subtitle_tab7</group>
		<group posrow="subtitle_wrap2">subtitle_tab8</group>
		<group posrow="subtitle_wrap2">subtitle_tab9</group>
		<group posrow="subtitle_wrap2">subtitle_tab10</group>
		<group posrow="subtitle_wrap2">subtitle_tab11</group>
		<group posrow="subtitle_wrap2">subtitle_tab12</group>
		<group posrow="img_top">image</group>
		<group posrow="img_top">top</group>
		<group>description</group>
		<group posrow="bottom">bottom_tab1</group>
		<group posrow="bottom">bottom_tab2</group>
		<group posrow="bottom">bottom_tab3</group>
		<group posrow="bottom">bottom_tab4</group>
		<group posrow="bottom">bottom_tab5</group>
		<group posrow="bottom">bottom_tab6</group>
		<group posrow="bottom_wrap2">bottom_tab7</group>
		<group posrow="bottom_wrap2">bottom_tab8</group>
		<group posrow="bottom_wrap2">bottom_tab9</group>
		<group posrow="bottom_wrap2">bottom_tab10</group>
		<group posrow="bottom_wrap2">bottom_tab11</group>
		<group posrow="bottom_wrap2">bottom_tab12</group>
		<group>bottom</group>
		<group>renderonly</group>
	</fieldgroups>
	<cssitem>
		<file>css/item.css</file>
	</cssitem>
	<jsitem>
	</jsitem>	
</form>
";s:6:"author";s:32:"Emmanuel Danan, George Papadakis";s:7:"website";s:20:"www.flexicontent.org";s:5:"email";s:22:"emmanuel@vistamedia.fr";s:7:"license";s:5:"GPLv3";s:7:"version";s:3:"1.2";s:7:"release";s:11:"20 May 2014";s:17:"microdata_support";s:1:"1";s:12:"defaulttitle";s:42:"FLEXI_TMPL_PRESENTATION_ITEM_DEFAULT_TITLE";s:11:"description";s:39:"FLEXI_TMPL_PRESENTATION_ITEM_SHORT_DESC";s:10:"attributes";a:32:{i:0;a:0:{}i:1;a:0:{}i:2;a:0:{}i:3;a:1:{s:6:"posrow";s:8:"subtitle";}i:4;a:1:{s:6:"posrow";s:8:"subtitle";}i:5;a:1:{s:6:"posrow";s:8:"subtitle";}i:6;a:1:{s:6:"posrow";s:8:"subtitle";}i:7;a:1:{s:6:"posrow";s:8:"subtitle";}i:8;a:1:{s:6:"posrow";s:8:"subtitle";}i:9;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:10;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:11;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:12;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:13;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:14;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:15;a:1:{s:6:"posrow";s:7:"img_top";}i:16;a:1:{s:6:"posrow";s:7:"img_top";}i:17;a:0:{}i:18;a:1:{s:6:"posrow";s:6:"bottom";}i:19;a:1:{s:6:"posrow";s:6:"bottom";}i:20;a:1:{s:6:"posrow";s:6:"bottom";}i:21;a:1:{s:6:"posrow";s:6:"bottom";}i:22;a:1:{s:6:"posrow";s:6:"bottom";}i:23;a:1:{s:6:"posrow";s:6:"bottom";}i:24;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:25;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:26;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:27;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:28;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:29;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:30;a:0:{}i:31;a:0:{}}s:9:"positions";a:32:{i:0;s:9:"subtitle1";i:1;s:9:"subtitle2";i:2;s:9:"subtitle3";i:3;s:13:"subtitle_tab1";i:4;s:13:"subtitle_tab2";i:5;s:13:"subtitle_tab3";i:6;s:13:"subtitle_tab4";i:7;s:13:"subtitle_tab5";i:8;s:13:"subtitle_tab6";i:9;s:13:"subtitle_tab7";i:10;s:13:"subtitle_tab8";i:11;s:13:"subtitle_tab9";i:12;s:14:"subtitle_tab10";i:13;s:14:"subtitle_tab11";i:14;s:14:"subtitle_tab12";i:15;s:5:"image";i:16;s:3:"top";i:17;s:11:"description";i:18;s:11:"bottom_tab1";i:19;s:11:"bottom_tab2";i:20;s:11:"bottom_tab3";i:21;s:11:"bottom_tab4";i:22;s:11:"bottom_tab5";i:23;s:11:"bottom_tab6";i:24;s:11:"bottom_tab7";i:25;s:11:"bottom_tab8";i:26;s:11:"bottom_tab9";i:27;s:12:"bottom_tab10";i:28;s:12:"bottom_tab11";i:29;s:12:"bottom_tab12";i:30;s:6:"bottom";i:31;s:10:"renderonly";}s:3:"css";O:8:"stdClass":1:{s:1:"0";s:63:"components/com_flexicontent/templates/presentation/css/item.css";}s:10:"less_files";a:1:{i:0;s:14:"less/item.less";}}}s:8:"category";O:8:"stdClass":5:{s:4:"blog";O:8:"stdClass":20:{s:4:"name";s:4:"blog";s:7:"xmlpath";s:82:"/opt/axway/apiportal/htdoc/components/com_flexicontent/templates/blog/category.xml";s:8:"xmlmtime";i:1504273337;s:4:"view";s:8:"category";s:7:"tmplvar";s:14:".category.blog";s:5:"thumb";s:55:"components/com_flexicontent/templates/blog/category.png";s:6:"params";s:14135:"<?xml version="1.0" encoding="utf-8"?>
<form>
	<author>Emmanuel Danan, George Papadakis</author>
	<website>www.flexicontent.org</website>
	<email>emmanuel@vistamedia.fr</email>
	<license>GPLv3</license>
	<version>1.2</version>
	<release>20 May 2014</release>
	<microdata_support>1</microdata_support>
	
	<defaulttitle>FLEXI_TMPL_BLOG_CATEGORY_DEFAULT_TITLE</defaulttitle>
	<description>FLEXI_TMPL_BLOG_CATEGORY_SHORT_DESC</description>

	<fields name="attribs">
		<fieldset name="attribs" addfieldpath="/administrator/components/com_flexicontent/elements">
			
			<field name="custom_layout_title" type="text" size="3" not_inherited="1" default="" label="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE" description="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE_DESC"/>
			
			<field name="title_grp" type="separator" cssprep="1" default="FLEXI_TMPL_ITEM_TITLE" description="" level="level2"/>
			<field name="title_color" type="color" cssprep="less" default="inherit" label="Title color" description="Color of title"/>
			
			<field name="label_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_LABEL_STYLING" description="" level="level2"/>
			<field name="label_bg_color" type="color" cssprep="less" default="#999999" label="FLEXI_TMPL_LABEL_BG" description="FLEXI_TMPL_LABEL_BG_DESC"/>
			<field name="label_txt_color" type="color" cssprep="less" default="#ffffff" label="FLEXI_TMPL_LABEL_TXT_COLOR" description="FLEXI_TMPL_LABEL_TXT_COLOR_DESC"/>
			<field name="label_radius" type="number" cssprep="less" default="3" label="FLEXI_TMPL_LABEL_RADIUS" description="FLEXI_TMPL_LABEL_RADIUS_DESC" min="0" max="80" step="1"/>
			
			<field name="leadingitems_sep" type="separator" default="FLEXI_LEADING_ITEMS" description="FLEXI_LEADING_ITEMS_DESC" level="level1"/>
			<field name="lead_num" type="text" size="3" default="" label="FLEXI_LEADING_NUM" description="FLEXI_LEADING_NUM_DESC"/>
			<field name="lead_cols" type="radio" default="" label="FLEXI_MAX_ITEM_COLS_RESPONSIVE" description="FLEXI_MAX_ITEM_COLS_RESPONSIVE_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="1">FLEXI_1_COL</option>
				<option value="2">FLEXI_2_COLS</option>
				<option value="3">FLEXI_3_COLS</option>
				<option value="4">FLEXI_4_COLS</option>
			</field>
			<field name="lead_placement" type="radio" default="" label="FLEXI_ITEMS_PLACEMENT" description="FLEXI_ITEMS_PLACEMENT_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_CLEARED</option>
				<option value="1">FLEXI_AS_MASONRY_TILES</option>
			</field>
			
			<field name="lead_link_to_popup" type="radio" default="" label="Open items in popup" description="Items will be opened in a modal popup window" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_NO</option>
				<option value="1">FLEXI_YES</option>
			</field>
			
			<field name="lead_catblock_sep" type="separator" default="(sub) Category block, at (sub-)category start" description="Enable to show (sub-)category information when next (sub-)category starts" level="level2"/>
			<field name="lead_catblock_sep_msg" type="separator" default="Warning: this makes sense, if you order your items by their category (1st level order), (2nd level order can be anything e.g. title)" description="" level="level3"/>
			<field name="lead_catblock" type="radio" default="" label="FLEXI_ENABLE" description=" " class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_NO</option>
				<option value="1">FLEXI_YES</option>
			</field>
			<field name="lead_catblock_title" type="radio" default="" label="FLEXI_SHOW_CAT_TITLE" description="FLEXI_SHOW_CAT_TITLE_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="1">FLEXI_YES</option>
			</field>
			
			<field name="leadingitems_text_sep" type="separator" default="FLEXI_TEXT" description="FLEXI_TEXT_DESC" level="level2"/>
			<field name="lead_use_description" type="radio" default="" label="FLEXI_DISPLAY_DESCRIPTION" description="FLEXI_DISPLAY_DESCRIPTION_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_NO</option>
				<option value="1">FLEXI_YES</option>
			</field>
			<field name="lead_strip_html" type="radio" default="" label="FLEXI_STRIP_N_CUT" description="FLEXI_STRIP_N_CUT_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_NO</option>
				<option value="1">FLEXI_YES_FORCE_READ_MORE</option>
				<option value="2">FLEXI_YES_IF_NEEDED</option>
			</field>
			<field name="lead_cut_text" type="text" size="4" default="" label="FLEXI_CUT_INTRO" description="FLEXI_CUT_INTRO_DESC"/>
			<field name="leadingitems_img_sep" type="separator" default="FLEXI_IMAGE" description="FLEXI_IMAGE_DESC" level="level2"/>
			<field name="lead_use_image" type="radio" default="" label="FLEXI_USE_IMAGE" description="FLEXI_USE_IMAGE_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_NO</option>
				<option value="1">FLEXI_YES</option>
			</field>
			<field name="lead_image" type="fcimage" default="" label="FLEXI_IMAGE_SOURCE" description="FLEXI_IMAGE_SOURCE_DESC"/>
			<field name="lead_position" type="radio" default="" label="FLEXI_IMAGE_POSITION" description="FLEXI_IMAGE_POSITION_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_IMAGE_LEFT</option>
				<option value="1">FLEXI_IMAGE_RIGHT</option>
			</field>		
			<field name="lead_link_image" type="radio" default="" label="FLEXI_LINK_IMAGE" description="FLEXI_LINK_IMAGE_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_NO</option>
				<option value="1">FLEXI_YES</option>
			</field>
			<field name="lead_link_image_to" type="radio" default="" label="Link to" description="If you are using an image field then you may use the custom link add to the image" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_ITEM</option>
				<option value="1">Custom link (image field)</option>
			</field>
			<field name="lead_image_size" type="radio" default="" label="FLEXI_INTRO_IMAGE_SIZE" description="FLEXI_INTRO_IMAGE_SIZE_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_PARAMS</option>
				<option value="s">FLEXI_SMALL</option>
				<option value="m">FLEXI_MEDIUM</option>
				<option value="l">FLEXI_LARGE</option>
				<option value="o">FLEXI_ORIGINAL</option>
			</field>
			<field name="lead_width" type="text" size="4" default="" label="FLEXI_IMAGE_WIDTH" description="FLEXI_IMAGE_WIDTH"/>
			<field name="lead_height" type="text" size="4" default="" label="FLEXI_IMAGE_HEIGHT" description="FLEXI_IMAGE_HEIGHT"/>
			<field name="lead_method" type="radio" default="" label="FLEXI_PROCESSING_METHOD" description="FLEXI_PROCESSING_METHOD" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_SCALE</option>
				<option value="1">FLEXI_CROP</option>
			</field>
			<field name="lead_default_images" type="textarea" default="" label="FLEXI_TMPL_BLOG_DEFAULT_IMAGES" description="FLEXI_TMPL_BLOG_DEFAULT_IMAGES_DESC"/>
			
			
			<field name="introitems_sep" type="separator" default="FLEXI_INTRO_ITEMS" description="FLEXI_INTRO_ITEMS_DESC" level="level1"/>
			<field name="intro_cols" type="radio" default="" label="FLEXI_MAX_ITEM_COLS_RESPONSIVE" description="FLEXI_MAX_ITEM_COLS_RESPONSIVE_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="1">FLEXI_1_COL</option>
				<option value="2">FLEXI_2_COLS</option>
				<option value="3">FLEXI_3_COLS</option>
				<option value="4">FLEXI_4_COLS</option>
			</field>
			<field name="intro_placement" type="radio" default="" label="FLEXI_ITEMS_PLACEMENT" description="FLEXI_ITEMS_PLACEMENT_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_NONE</option>
				<option value="1">FLEXI_AS_MASONRY_TILES</option>
			</field>
			<field name="intro_link_to_popup" type="radio" default="" label="Open items in popup" description="Items will be opened in a modal popup window" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_NO</option>
				<option value="1">FLEXI_YES</option>
			</field>
			
			<field name="intro_catblock_sep" type="separator" default="(sub) Category block, at (sub-)category start" description="Enable to show (sub-)category information when next (sub-)category starts" level="level2"/>
			<field name="intro_catblock_sep_msg" type="separator" default="Warning: this makes sense, if you order your items by their category (1st level order), (2nd level order can be anything e.g. title)" description="" level="level3"/>
			<field name="intro_catblock" type="radio" default="" label="FLEXI_ENABLE" description=" " class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_NO</option>
				<option value="1">FLEXI_YES</option>
			</field>
			<field name="intro_catblock_title" type="radio" default="" label="FLEXI_SHOW_CAT_TITLE" description="FLEXI_SHOW_CAT_TITLE_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="1">FLEXI_YES</option>
			</field>
			
			<field name="introitems_text_sep" type="separator" default="FLEXI_TEXT" description="FLEXI_TEXT_DESC" level="level2"/>
			<field name="intro_use_description" type="radio" default="" label="FLEXI_DISPLAY_DESCRIPTION" description="FLEXI_DISPLAY_DESCRIPTION_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_NO</option>
				<option value="1">FLEXI_YES</option>
			</field>
			<field name="intro_strip_html" type="radio" default="" label="FLEXI_STRIP_N_CUT" description="FLEXI_STRIP_N_CUT_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_NO</option>
				<option value="1">FLEXI_YES_FORCE_READ_MORE</option>
				<option value="2">FLEXI_YES_IF_NEEDED</option>
			</field>
			<field name="intro_cut_text" type="text" size="4" default="" label="FLEXI_CUT_INTRO" description="FLEXI_CUT_INTRO_DESC"/>
			<field name="introitems_img_sep" type="separator" default="FLEXI_IMAGE" description="FLEXI_IMAGE_DESC" level="level2"/>
			<field name="intro_use_image" type="radio" default="" label="FLEXI_USE_IMAGE" description="FLEXI_USE_IMAGE_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_NO</option>
				<option value="1">FLEXI_YES</option>
			</field>
			<field name="intro_image" type="fcimage" default="" label="FLEXI_IMAGE_SOURCE" description="FLEXI_IMAGE_SOURCE_DESC"/>
			<field name="intro_position" type="radio" default="" label="FLEXI_IMAGE_POSITION" description="FLEXI_IMAGE_POSITION_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_IMAGE_LEFT</option>
				<option value="1">FLEXI_IMAGE_RIGHT</option>
			</field>		
			<field name="intro_link_image" type="radio" default="" label="FLEXI_LINK_IMAGE" description="FLEXI_LINK_IMAGE_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_NO</option>
				<option value="1">FLEXI_YES</option>
			</field>
			<field name="intro_link_image_to" type="radio" default="" label="Link to" description="If you are using an image field then you may use the custom link add to the image" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_ITEM</option>
				<option value="1">Custom link (image field)</option>
			</field>
			<field name="intro_image_size" type="radio" default="" label="FLEXI_INTRO_IMAGE_SIZE" description="FLEXI_INTRO_IMAGE_SIZE_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_PARAMS</option>
				<option value="s">FLEXI_SMALL</option>
				<option value="m">FLEXI_MEDIUM</option>
				<option value="l">FLEXI_LARGE</option>
				<option value="o">FLEXI_ORIGINAL</option>
			</field>
			<field name="intro_width" type="text" size="4" default="" label="FLEXI_IMAGE_WIDTH" description="FLEXI_IMAGE_WIDTH"/>
			<field name="intro_height" type="text" size="4" default="" label="FLEXI_IMAGE_HEIGHT" description="FLEXI_IMAGE_HEIGHT"/>
			<field name="intro_method" type="radio" default="" label="FLEXI_PROCESSING_METHOD" description="FLEXI_PROCESSING_METHOD" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_SCALE</option>
				<option value="1">FLEXI_CROP</option>
			</field>
			<field name="intro_default_images" type="textarea" default="" label="FLEXI_TMPL_BLOG_DEFAULT_IMAGES" description="FLEXI_TMPL_BLOG_DEFAULT_IMAGES_DESC"/>
			
			<field name="templatehtmlmode" type="separator" default="FLEXI_TEMPLATE_HTML_MODE" level="level1"/>
			<field name="htmlmode" type="radio" default="0" label="FLEXI_HTML_MODE" description="FLEXI_HTML_MODE_DESC" filter="int" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_XHTML</option>
				<option value="1">FLEXI_HTML5</option>
			</field>
		
		</fieldset>
	</fields>
	<fieldgroups>
		<group>above-description-line1</group>
		<group>above-description-line1-nolabel</group>
		<group>above-description-line2</group>
		<group>above-description-line2-nolabel</group>
		<group>under-description-line1</group>
		<group>under-description-line1-nolabel</group>
		<group>under-description-line2</group>
		<group>under-description-line2-nolabel</group>
		<group>renderonly</group>
	</fieldgroups>
	<csscategory>
		<file>css/category.css</file>
	</csscategory>
	<jscategory>
	</jscategory>	
</form>
";s:6:"author";s:32:"Emmanuel Danan, George Papadakis";s:7:"website";s:20:"www.flexicontent.org";s:5:"email";s:22:"emmanuel@vistamedia.fr";s:7:"license";s:5:"GPLv3";s:7:"version";s:3:"1.2";s:7:"release";s:11:"20 May 2014";s:17:"microdata_support";s:1:"1";s:12:"defaulttitle";s:38:"FLEXI_TMPL_BLOG_CATEGORY_DEFAULT_TITLE";s:11:"description";s:35:"FLEXI_TMPL_BLOG_CATEGORY_SHORT_DESC";s:10:"attributes";a:9:{i:0;a:0:{}i:1;a:0:{}i:2;a:0:{}i:3;a:0:{}i:4;a:0:{}i:5;a:0:{}i:6;a:0:{}i:7;a:0:{}i:8;a:0:{}}s:9:"positions";a:9:{i:0;s:23:"above-description-line1";i:1;s:31:"above-description-line1-nolabel";i:2;s:23:"above-description-line2";i:3;s:31:"above-description-line2-nolabel";i:4;s:23:"under-description-line1";i:5;s:31:"under-description-line1-nolabel";i:6;s:23:"under-description-line2";i:7;s:31:"under-description-line2-nolabel";i:8;s:10:"renderonly";}s:3:"css";O:8:"stdClass":1:{s:1:"0";s:59:"components/com_flexicontent/templates/blog/css/category.css";}s:10:"less_files";a:1:{i:0;s:18:"less/category.less";}}s:7:"default";O:8:"stdClass":20:{s:4:"name";s:7:"default";s:7:"xmlpath";s:85:"/opt/axway/apiportal/htdoc/components/com_flexicontent/templates/default/category.xml";s:8:"xmlmtime";i:1504273337;s:4:"view";s:8:"category";s:7:"tmplvar";s:17:".category.default";s:5:"thumb";s:58:"components/com_flexicontent/templates/default/category.png";s:6:"params";s:4100:"<?xml version="1.0" encoding="utf-8"?>
<form>
	<author>Emmanuel Danan, George Papadakis</author>
	<website>www.flexicontent.org</website>
	<email>emmanuel@vistamedia.fr</email>
	<license>GPLv3</license>
	<version>1.2</version>
	<release>20 May 2014</release>
	<microdata_support>1</microdata_support>

	<defaulttitle>FLEXI_TMPL_DEFAULT_CATEGORY_DEFAULT_TITLE</defaulttitle>
	<description>FLEXI_TMPL_DEFAULT_CATEGORY_SHORT_DESC</description>

	<fields name="attribs">
		<fieldset name="attribs" addfieldpath="/administrator/components/com_flexicontent/elements">
		
			<field name="custom_layout_title" type="text" size="3" not_inherited="1" default="" label="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE" description="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE_DESC"/>
			
			<field name="title_grp" type="separator" cssprep="1" default="FLEXI_TMPL_ITEM_TITLE" description="" level="level2"/>
			<field name="title_color" type="color" cssprep="less" default="inherit" label="Title color" description="Color of title"/>
			
			<field name="label_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_LABEL_STYLING" description="" level="level2"/>
			<field name="label_bg_color" type="color" cssprep="less" default="#999999" label="FLEXI_TMPL_LABEL_BG" description="FLEXI_TMPL_LABEL_BG_DESC"/>
			<field name="label_txt_color" type="color" cssprep="less" default="#ffffff" label="FLEXI_TMPL_LABEL_TXT_COLOR" description="FLEXI_TMPL_LABEL_TXT_COLOR_DESC"/>
			<field name="label_radius" type="number" cssprep="less" default="3" label="FLEXI_TMPL_LABEL_RADIUS" description="FLEXI_TMPL_LABEL_RADIUS_DESC" min="0" max="80" step="1"/>
			
			<field name="table_color_grp" type="separator" cssprep="1" default="FLEXI_TMPL_TABLE_STYLING" description="" level="level2"/>
			<field name="table_row0_bg_color" type="color" cssprep="less" default="#ffffff" label="FLEXI_TMPL_TABLE_ROW0_BG" description="FLEXI_TMPL_TABLE_ROW0_BG_DESC"/>
			<field name="table_row1_bg_color" type="color" cssprep="less" default="#f7f7f7" label="FLEXI_TMPL_TABLE_ROW1_BG" description="FLEXI_TMPL_TABLE_ROW0_BG_DESC"/>
			<field name="table_value_color" type="color" cssprep="less" default="#555555" label="FLEXI_TMPL_TABLE_TEXT_COLOR" description="FLEXI_TMPL_TABLE_TEXT_COLOR_DESC"/>
			
			<field name="disp_params" type="separator" default="FLEXI_DISPLAY" level="level1"/>
			<field name="show_field_labels_row" type="radio" default="" label="FLEXI_SHOW_LABELS_ROW" description="FLEXI_SHOW_LABELS_ROW_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_NO</option>
				<option value="1">FLEXI_YES</option>
			</field>
			<field name="customize_titlecol_header" type="radio" default="" label="FLEXI_CUSTOMIZE_TITLE_COLUMN_HEADER" description="FLEXI_CUSTOMIZE_TITLE_COLUMN_HEADER_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_NO</option>
				<option value="1">FLEXI_YES</option>
			</field>
			<field name="titlecol_header_text" type="text" default="" label="FLEXI_TITLE_COLUMN_HEADER_TEXT" description="FLEXI_TITLE_COLUMN_HEADER_TEXT_DESC"/>
			<field name="togglable_table_cols" type="radio" default="" label="FLEXI_TMPL_DEFAULT_TOGGLABLE_TABLE_COLS" description="FLEXI_TMPL_DEFAULT_TOGGLABLE_TABLE_COLS_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_NO</option>
				<option value="1">FLEXI_YES</option>
			</field>
			
			<field name="templatehtmlmode" type="separator" default="FLEXI_TEMPLATE_HTML_MODE" level="level2"/>
			<field name="htmlmode" type="radio" default="" label="FLEXI_HTML_MODE" description="FLEXI_HTML_MODE_DESC" filter="int" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_XHTML</option>
				<option value="1">FLEXI_HTML5</option>
			</field>
			
		</fieldset>
	</fields>
	
	<fieldgroups>
		<group>table</group>
		<group>renderonly</group>
	</fieldgroups>
	<csscategory>
		<file>css/category.css</file>
	</csscategory>
	<jscategory>
	</jscategory>	
</form>
";s:6:"author";s:32:"Emmanuel Danan, George Papadakis";s:7:"website";s:20:"www.flexicontent.org";s:5:"email";s:22:"emmanuel@vistamedia.fr";s:7:"license";s:5:"GPLv3";s:7:"version";s:3:"1.2";s:7:"release";s:11:"20 May 2014";s:17:"microdata_support";s:1:"1";s:12:"defaulttitle";s:41:"FLEXI_TMPL_DEFAULT_CATEGORY_DEFAULT_TITLE";s:11:"description";s:38:"FLEXI_TMPL_DEFAULT_CATEGORY_SHORT_DESC";s:10:"attributes";a:2:{i:0;a:0:{}i:1;a:0:{}}s:9:"positions";a:2:{i:0;s:5:"table";i:1;s:10:"renderonly";}s:3:"css";O:8:"stdClass":1:{s:1:"0";s:62:"components/com_flexicontent/templates/default/css/category.css";}s:10:"less_files";a:1:{i:0;s:18:"less/category.less";}}s:3:"faq";O:8:"stdClass":20:{s:4:"name";s:3:"faq";s:7:"xmlpath";s:81:"/opt/axway/apiportal/htdoc/components/com_flexicontent/templates/faq/category.xml";s:8:"xmlmtime";i:1504273337;s:4:"view";s:8:"category";s:7:"tmplvar";s:13:".category.faq";s:5:"thumb";s:54:"components/com_flexicontent/templates/faq/category.png";s:6:"params";s:2810:"<?xml version="1.0" encoding="utf-8"?>
<form>
	<author>Emmanuel Danan, George Papadakis</author>
	<website>www.flexicontent.org</website>
	<email>emmanuel@vistamedia.fr</email>
	<license>GPLv3</license>
	<version>1.2</version>
	<release>20 May 2014</release>
	<microdata_support>1</microdata_support>
	
	<defaulttitle>FLEXI_TMPL_FAQ_CATEGORY_DEFAULT_TITLE</defaulttitle>
	<description>FLEXI_TMPL_FAQ_CATEGORY_SHORT_DESC</description>

	<fields name="attribs">
		<fieldset name="attribs" addfieldpath="/administrator/components/com_flexicontent/elements">

			<field name="custom_layout_title" type="text" size="3" not_inherited="1" default="" label="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE" description="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE_DESC"/>
			
			<field name="disp_params" type="separator" default="FLEXI_CATEGORY_INFO" level="level2"/>
			<field name="descr_cut_text" type="text" size="3" default="" label="FLEXI_CATDESCR_MAXLEN" description="FLEXI_CATDESCR_MAXLEN_DESC"/>
			
			<field name="subcat_conf" type="separator" default="FLEXI_SUBCATEGORIES" level="level2"/>
			<field name="descr_cut_text_subcat" type="text" size="3" default="" label="FLEXI_CATDESCR_MAXLEN" description="FLEXI_CATDESCR_MAXLEN_DESC"/>
			<field name="tmpl_cols" type="radio" default="" label="FLEXI_SUBCAT_COLS" description="FLEXI_SUBCAT_COLS_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="1">FLEXI_1_COL</option>
				<option value="2">FLEXI_2_COLS</option>
				<option value="3">FLEXI_3_COLS</option>
				<option value="4">FLEXI_4_COLS</option>
			</field>
			<field name="cols_placement" type="radio" default="" label="FLEXI_TMPL_FAQ_COLS_PLACEMENT" description="FLEXI_TMPL_FAQ_COLS_PLACEMENT_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_CLEARED</option>
				<option value="1">FLEXI_AS_MASONRY_TILES</option>
			</field>
			
			<field name="templatehtmlmode" type="separator" default="FLEXI_TEMPLATE_HTML_MODE" level="level2"/>
			<field name="htmlmode" type="radio" default="" label="FLEXI_HTML_MODE" description="FLEXI_HTML_MODE_DESC" filter="int" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_XHTML</option>
				<option value="1">FLEXI_HTML5</option>
			</field>
			
		</fieldset>
	</fields>
	
	<fieldgroups>
		<group readonly="true">subcategory_title</group>
		<group readonly="true">subcategory_description</group>
		<group>aftertitle</group>
		<group>aftertitle_nolabel</group>
		<group>aftertitle2</group>
		<group>aftertitle_nolabel2</group>
		<group>aftertitle3</group>
		<group>aftertitle_nolabel3</group>
	</fieldgroups>
	<csscategory>
		<file>css/category.css</file>
	</csscategory>
	<jscategory>
	</jscategory>	
</form>
";s:6:"author";s:32:"Emmanuel Danan, George Papadakis";s:7:"website";s:20:"www.flexicontent.org";s:5:"email";s:22:"emmanuel@vistamedia.fr";s:7:"license";s:5:"GPLv3";s:7:"version";s:3:"1.2";s:7:"release";s:11:"20 May 2014";s:17:"microdata_support";s:1:"1";s:12:"defaulttitle";s:37:"FLEXI_TMPL_FAQ_CATEGORY_DEFAULT_TITLE";s:11:"description";s:34:"FLEXI_TMPL_FAQ_CATEGORY_SHORT_DESC";s:10:"attributes";a:8:{i:0;a:1:{s:8:"readonly";s:4:"true";}i:1;a:1:{s:8:"readonly";s:4:"true";}i:2;a:0:{}i:3;a:0:{}i:4;a:0:{}i:5;a:0:{}i:6;a:0:{}i:7;a:0:{}}s:9:"positions";a:8:{i:0;s:17:"subcategory_title";i:1;s:23:"subcategory_description";i:2;s:10:"aftertitle";i:3;s:18:"aftertitle_nolabel";i:4;s:11:"aftertitle2";i:5;s:19:"aftertitle_nolabel2";i:6;s:11:"aftertitle3";i:7;s:19:"aftertitle_nolabel3";}s:3:"css";O:8:"stdClass":1:{s:1:"0";s:58:"components/com_flexicontent/templates/faq/css/category.css";}s:10:"less_files";a:1:{i:0;s:18:"less/category.less";}}s:12:"items-tabbed";O:8:"stdClass":20:{s:4:"name";s:12:"items-tabbed";s:7:"xmlpath";s:90:"/opt/axway/apiportal/htdoc/components/com_flexicontent/templates/items-tabbed/category.xml";s:8:"xmlmtime";i:1504273337;s:4:"view";s:8:"category";s:7:"tmplvar";s:22:".category.items-tabbed";s:5:"thumb";s:63:"components/com_flexicontent/templates/items-tabbed/category.png";s:6:"params";s:3416:"<?xml version="1.0" encoding="utf-8"?>
<form>
	<author>Emmanuel Danan, George Papadakis</author>
	<website>www.flexicontent.org</website>
	<email>emmanuel@vistamedia.fr</email>
	<license>GPLv3</license>
	<version>1.2</version>
	<release>20 May 2014</release>
	<microdata_support>1</microdata_support>

	<defaulttitle>FLEXI_TMPL_ITEMSTABBED_CATEGORY_DEFAULT_TITLE</defaulttitle>
	<description>FLEXI_TMPL_ITEMSTABBED_CATEGORY_SHORT_DESC</description>

	<fields name="attribs">
		<fieldset name="attribs" addfieldpath="/administrator/components/com_flexicontent/elements">

			<field name="custom_layout_title" type="text" size="3" not_inherited="1" default="" label="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE" description="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE_DESC"/>
			
			<field name="title_grp" type="separator" cssprep="1" default="FLEXI_TMPL_ITEM_TITLE" description="" level="level2"/>
			<field name="title_color" type="color" cssprep="less" default="inherit" label="Title color" description="Color of title"/>
			<field name="title_cut_text" type="text" size="3" default="" label="FLEXI_TITLE_MAXLEN" description="FLEXI_TITLE_MAXLEN_DESC"/>
			
			<field name="field_cols_grp" type="separator" cssprep="1" default="Field columns" description="" level="level2"/>
			<field name="top_cols" type="radio" default="" label="FLEXI_ITEM_TOP_COLS" description="FLEXI_ITEM_TOP_COLS_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="one">FLEXI_1_COL</option>
				<option value="two">FLEXI_2_COLS</option>
			</field>
			<field name="bottom_cols" type="radio" default="" label="FLEXI_ITEM_BOTTOM_COLS" description="FLEXI_ITEM_BOTTOM_COLS_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="one">FLEXI_1_COL</option>
				<option value="two">FLEXI_2_COLS</option>
			</field>
			
			<field name="tab_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_TABS_STYLING" description="" level="level2"/>
			<field name="tab_handles_grp" type="separator" cssprep="1" default="FLEXI_TMPL_TABS_HANDLES" description="" level="level3"/>
			<field name="tab_bg_color_start" type="color" cssprep="less" default="#3093c7" label="FLEXI_TMPL_TAB_BG_START" description="FLEXI_TMPL_TAB_BG_START_DESC"/>
			<field name="tab_bg_color_end" type="color" cssprep="less" default="#1c5a85" label="FLEXI_TMPL_TAB_BG_END" description="FLEXI_TMPL_TAB_BG_END_DESC"/>
			<field name="tab_title_color" type="color" cssprep="less" default="#ffffff" label="FLEXI_TMPL_TAB_TITLE_COLOR" description="FLEXI_TMPL_TAB_TITLE_COLOR_DESC"/>
			
			<field name="templatehtmlmode" type="separator" default="FLEXI_TEMPLATE_HTML_MODE" level="level2"/>
			<field name="htmlmode" type="radio" default="" label="FLEXI_HTML_MODE" description="FLEXI_HTML_MODE_DESC" filter="int" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_XHTML</option>
				<option value="1">FLEXI_HTML5</option>
			</field>
			
		</fieldset>
	</fields>
	
	<fieldgroups>
		<group>subtitle1</group>
		<group>subtitle2</group>
		<group>subtitle3</group>
		<group posrow="img_top">image</group>
		<group posrow="img_top">top</group>
		<group>description</group>
		<group>bottom</group>
		<group>renderonly</group>
	</fieldgroups>
	<csscategory>
		<file>css/category.css</file>
	</csscategory>
	<jscategory>
	</jscategory>	
</form>
";s:6:"author";s:32:"Emmanuel Danan, George Papadakis";s:7:"website";s:20:"www.flexicontent.org";s:5:"email";s:22:"emmanuel@vistamedia.fr";s:7:"license";s:5:"GPLv3";s:7:"version";s:3:"1.2";s:7:"release";s:11:"20 May 2014";s:17:"microdata_support";s:1:"1";s:12:"defaulttitle";s:45:"FLEXI_TMPL_ITEMSTABBED_CATEGORY_DEFAULT_TITLE";s:11:"description";s:42:"FLEXI_TMPL_ITEMSTABBED_CATEGORY_SHORT_DESC";s:10:"attributes";a:8:{i:0;a:0:{}i:1;a:0:{}i:2;a:0:{}i:3;a:1:{s:6:"posrow";s:7:"img_top";}i:4;a:1:{s:6:"posrow";s:7:"img_top";}i:5;a:0:{}i:6;a:0:{}i:7;a:0:{}}s:9:"positions";a:8:{i:0;s:9:"subtitle1";i:1;s:9:"subtitle2";i:2;s:9:"subtitle3";i:3;s:5:"image";i:4;s:3:"top";i:5;s:11:"description";i:6;s:6:"bottom";i:7;s:10:"renderonly";}s:3:"css";O:8:"stdClass":1:{s:1:"0";s:67:"components/com_flexicontent/templates/items-tabbed/css/category.css";}s:10:"less_files";a:1:{i:0;s:18:"less/category.less";}}s:12:"presentation";O:8:"stdClass":20:{s:4:"name";s:12:"presentation";s:7:"xmlpath";s:90:"/opt/axway/apiportal/htdoc/components/com_flexicontent/templates/presentation/category.xml";s:8:"xmlmtime";i:1504273337;s:4:"view";s:8:"category";s:7:"tmplvar";s:22:".category.presentation";s:5:"thumb";s:63:"components/com_flexicontent/templates/presentation/category.png";s:6:"params";s:9272:"<?xml version="1.0" encoding="utf-8"?>
<form>
	<author>Emmanuel Danan, George Papadakis</author>
	<website>www.flexicontent.org</website>
	<email>emmanuel@vistamedia.fr</email>
	<license>GPLv3</license>
	<version>1.2</version>
	<release>20 May 2014</release>
	<microdata_support>1</microdata_support>

	<defaulttitle>FLEXI_TMPL_PRESENTATION_CATEGORY_DEFAULT_TITLE</defaulttitle>
	<description>FLEXI_TMPL_PRESENTATION_CATEGORY_SHORT_DESC</description>

	<fields name="attribs">
		<fieldset name="attribs" addfieldpath="/administrator/components/com_flexicontent/elements">

			<field name="custom_layout_title" type="text" size="3" not_inherited="1" default="" label="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE" description="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE_DESC"/>
			
			<field name="title_grp" type="separator" cssprep="1" default="FLEXI_TMPL_ITEM_TITLE" description="" level="level2"/>
			<field name="title_color" type="color" cssprep="less" default="inherit" label="Title color" description="Color of title"/>
			<field name="title_cut_text" type="text" size="3" default="" label="FLEXI_TITLE_MAXLEN" description="FLEXI_TITLE_MAXLEN_DESC"/>
			
			<field name="field_cols_grp" type="separator" cssprep="1" default="Field columns" description="" level="level2"/>
			<field name="top_cols" type="radio" default="" label="FLEXI_ITEM_TOP_COLS" description="FLEXI_ITEM_TOP_COLS_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="one">FLEXI_1_COL</option>
				<option value="two">FLEXI_2_COLS</option>
			</field>
			<field name="bottom_cols" type="radio" default="" label="FLEXI_ITEM_BOTTOM_COLS" description="FLEXI_ITEM_BOTTOM_COLS_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="one">FLEXI_1_COL</option>
				<option value="two">FLEXI_2_COLS</option>
			</field>
			
			<field name="tab_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_TABS_STYLING" description="" level="level2"/>
			<field name="tab_handles_grp" type="separator" cssprep="1" default="FLEXI_TMPL_TABS_HANDLES" description="" level="level3"/>
			<field name="tab_bg_color_start" type="color" cssprep="less" default="#3093c7" label="FLEXI_TMPL_TAB_BG_START" description="FLEXI_TMPL_TAB_BG_START_DESC"/>
			<field name="tab_bg_color_end" type="color" cssprep="less" default="#1c5a85" label="FLEXI_TMPL_TAB_BG_END" description="FLEXI_TMPL_TAB_BG_END_DESC"/>
			<field name="tab_title_color" type="color" cssprep="less" default="#ffffff" label="FLEXI_TMPL_TAB_TITLE_COLOR" description="FLEXI_TMPL_TAB_TITLE_COLOR_DESC"/>
			
			<field name="subtitle_tabs_grp" type="separator" default="SubTitle Tabs" description="" level="level2"/>
			<field name="subtitle_tab1_label" type="text" default="" label="Label for Tab 1" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab2_label" type="text" default="" label="Label for Tab 2" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab3_label" type="text" default="" label="Label for Tab 3" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab4_label" type="text" default="" label="Label for Tab 4" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab5_label" type="text" default="" label="Label for Tab 5" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab6_label" type="text" default="" label="Label for Tab 6" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab7_label" type="text" default="" label="Label for Tab 7" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab8_label" type="text" default="" label="Label for Tab 8" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab9_label" type="text" default="" label="Label for Tab 9" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab10_label" type="text" default="" label="Label for Tab 10" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab11_label" type="text" default="" label="Label for Tab 11" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab12_label" type="text" default="" label="Label for Tab 12" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			
			<field name="bottom_tabs_grp" type="separator" default="Bottom Tabs" description="" level="level2"/>
			<field name="bottom_tab1_label" type="text" default="" label="Label for Tab 1" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab2_label" type="text" default="" label="Label for Tab 2" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab3_label" type="text" default="" label="Label for Tab 3" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab4_label" type="text" default="" label="Label for Tab 4" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab5_label" type="text" default="" label="Label for Tab 5" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab6_label" type="text" default="" label="Label for Tab 6" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab7_label" type="text" default="" label="Label for Tab 7" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab8_label" type="text" default="" label="Label for Tab 8" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab9_label" type="text" default="" label="Label for Tab 9" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab10_label" type="text" default="" label="Label for Tab 10" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab11_label" type="text" default="" label="Label for Tab 11" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab12_label" type="text" default="" label="Label for Tab 12" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			
			<field name="templatehtmlmode" type="separator" default="FLEXI_TEMPLATE_HTML_MODE" level="level2"/>
			<field name="htmlmode" type="radio" default="" label="FLEXI_HTML_MODE" description="FLEXI_HTML_MODE_DESC" filter="int" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_XHTML</option>
				<option value="1">FLEXI_HTML5</option>
			</field>
			
		</fieldset>
	</fields>
	
	<fieldgroups>
		<group>subtitle1</group>
		<group>subtitle2</group>
		<group>subtitle3</group>
		<group posrow="subtitle">subtitle_tab1</group>
		<group posrow="subtitle">subtitle_tab2</group>
		<group posrow="subtitle">subtitle_tab3</group>
		<group posrow="subtitle">subtitle_tab4</group>
		<group posrow="subtitle">subtitle_tab5</group>
		<group posrow="subtitle">subtitle_tab6</group>
		<group posrow="subtitle_wrap2">subtitle_tab7</group>
		<group posrow="subtitle_wrap2">subtitle_tab8</group>
		<group posrow="subtitle_wrap2">subtitle_tab9</group>
		<group posrow="subtitle_wrap2">subtitle_tab10</group>
		<group posrow="subtitle_wrap2">subtitle_tab11</group>
		<group posrow="subtitle_wrap2">subtitle_tab12</group>
		<group posrow="img_top">image</group>
		<group posrow="img_top">top</group>
		<group>description</group>
		<group posrow="bottom">bottom_tab1</group>
		<group posrow="bottom">bottom_tab2</group>
		<group posrow="bottom">bottom_tab3</group>
		<group posrow="bottom">bottom_tab4</group>
		<group posrow="bottom">bottom_tab5</group>
		<group posrow="bottom">bottom_tab6</group>
		<group posrow="bottom_wrap2">bottom_tab7</group>
		<group posrow="bottom_wrap2">bottom_tab8</group>
		<group posrow="bottom_wrap2">bottom_tab9</group>
		<group posrow="bottom_wrap2">bottom_tab10</group>
		<group posrow="bottom_wrap2">bottom_tab11</group>
		<group posrow="bottom_wrap2">bottom_tab12</group>
		<group>bottom</group>
		<group>renderonly</group>
	</fieldgroups>
	<csscategory>
		<file>css/category.css</file>
	</csscategory>
	<jscategory>
	</jscategory>	
</form>
";s:6:"author";s:32:"Emmanuel Danan, George Papadakis";s:7:"website";s:20:"www.flexicontent.org";s:5:"email";s:22:"emmanuel@vistamedia.fr";s:7:"license";s:5:"GPLv3";s:7:"version";s:3:"1.2";s:7:"release";s:11:"20 May 2014";s:17:"microdata_support";s:1:"1";s:12:"defaulttitle";s:46:"FLEXI_TMPL_PRESENTATION_CATEGORY_DEFAULT_TITLE";s:11:"description";s:43:"FLEXI_TMPL_PRESENTATION_CATEGORY_SHORT_DESC";s:10:"attributes";a:32:{i:0;a:0:{}i:1;a:0:{}i:2;a:0:{}i:3;a:1:{s:6:"posrow";s:8:"subtitle";}i:4;a:1:{s:6:"posrow";s:8:"subtitle";}i:5;a:1:{s:6:"posrow";s:8:"subtitle";}i:6;a:1:{s:6:"posrow";s:8:"subtitle";}i:7;a:1:{s:6:"posrow";s:8:"subtitle";}i:8;a:1:{s:6:"posrow";s:8:"subtitle";}i:9;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:10;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:11;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:12;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:13;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:14;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:15;a:1:{s:6:"posrow";s:7:"img_top";}i:16;a:1:{s:6:"posrow";s:7:"img_top";}i:17;a:0:{}i:18;a:1:{s:6:"posrow";s:6:"bottom";}i:19;a:1:{s:6:"posrow";s:6:"bottom";}i:20;a:1:{s:6:"posrow";s:6:"bottom";}i:21;a:1:{s:6:"posrow";s:6:"bottom";}i:22;a:1:{s:6:"posrow";s:6:"bottom";}i:23;a:1:{s:6:"posrow";s:6:"bottom";}i:24;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:25;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:26;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:27;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:28;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:29;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:30;a:0:{}i:31;a:0:{}}s:9:"positions";a:32:{i:0;s:9:"subtitle1";i:1;s:9:"subtitle2";i:2;s:9:"subtitle3";i:3;s:13:"subtitle_tab1";i:4;s:13:"subtitle_tab2";i:5;s:13:"subtitle_tab3";i:6;s:13:"subtitle_tab4";i:7;s:13:"subtitle_tab5";i:8;s:13:"subtitle_tab6";i:9;s:13:"subtitle_tab7";i:10;s:13:"subtitle_tab8";i:11;s:13:"subtitle_tab9";i:12;s:14:"subtitle_tab10";i:13;s:14:"subtitle_tab11";i:14;s:14:"subtitle_tab12";i:15;s:5:"image";i:16;s:3:"top";i:17;s:11:"description";i:18;s:11:"bottom_tab1";i:19;s:11:"bottom_tab2";i:20;s:11:"bottom_tab3";i:21;s:11:"bottom_tab4";i:22;s:11:"bottom_tab5";i:23;s:11:"bottom_tab6";i:24;s:11:"bottom_tab7";i:25;s:11:"bottom_tab8";i:26;s:11:"bottom_tab9";i:27;s:12:"bottom_tab10";i:28;s:12:"bottom_tab11";i:29;s:12:"bottom_tab12";i:30;s:6:"bottom";i:31;s:10:"renderonly";}s:3:"css";O:8:"stdClass":1:{s:1:"0";s:67:"components/com_flexicontent/templates/presentation/css/category.css";}s:10:"less_files";a:1:{i:0;s:18:"less/category.less";}}}}s:6:"output";s:0:"";}