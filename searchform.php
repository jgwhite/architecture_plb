<form method="get" id="searchform" action="http://www.architectureplb.com/development">
	<div id="search-inputs">

		<input type="text" value="Enter Keywords" name="s" id="s"
		 onblur="if (this.value == '') {this.value = 'Enter Keywords';}"
		 onfocus="if (this.value == 'Enter Keywords') {this.value = '';}" />
		
		
		<a href="#" onclick="form.submit();">Search</a>
	</div><!--search-inputs-->
</form>