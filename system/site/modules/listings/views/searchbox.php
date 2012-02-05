<form action="<?php echo base_url();?>pages/listing" method="get">
<table style="margin: 0 auto;">
	<tr>
		<td><strong>Find:</strong></td>
		<td><strong>Category:</strong></td>
		<td><strong>Location:</strong></td>
	</tr>
	<tr>
		<td><input type="text" value="" id="keyword" name="keyword"
			class="text" placeholder="enter keyword"/></td>
		<td><select id="category" name="category" class="select">
			<option value="-1">Please select a category</option>
		</select></td>
		<td><input type="text" value="" id="location" name="location"
			class="text" placeholder="country, zipcode, etc."/></td>
		<td><input type="submit" id="submit_search" name="submit_search"
			class="submit" value="Search"/></td>
	</tr>
</table>
</form>

<div class="alpha-filter">
	<span>Filter: </span>
	<a href="/">0-9</a>
	<a href="/">A</a>
	<a href="/">B</a>
	<a href="/">C</a>
	<a href="/">D</a>
	<a href="/">E</a>
	<a href="/">F</a>
	<a href="/">G</a>
	<a href="/">H</a>
	<a href="/">I</a>
	<a href="/">J</a>
	<a href="/">K</a>
	<a href="/">L</a>
	<a href="/">M</a>
	<a href="/">N</a>
	<a href="/">O</a>
	<a href="/">P</a>
	<a href="/">Q</a>
	<a href="/">R</a>
	<a href="/">S</a>
	<a href="/">T</a>
	<a href="/">U</a>
	<a href="/">V</a>
	<a href="/">W</a>
	<a href="/">X</a>
	<a href="/">Y</a>
	<a href="/">Z</a>
</div>