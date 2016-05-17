js_tag
======

A custom built function for CodeIgniter's html_helpers, that generates JavaScript tags. Its similar to CI's native link_tag().

The function generates link to one or more JavaScript files. It takes as a parameter either a string or an array.

Follow the CodeIgniter [user guide](http://ellislab.com/codeigniter/user-guide/general/helpers.html) and create a file inside application/helpers/ directory and save it as MY_html_helper.php, in order to extend the html_helper, and paste the js_tag() function in.

Examples:
1. Link to an external javascript file
```
echo js_tag('https://code.jquery.com/jquery.min.js'); // outputs <script src="https://code.jquery.com/jquery.min.js" type="text/javascript"></script>
```
2. Link to a file somewhere in your project
```
echo js_tag('js/my_script_file.min.js'); // outputs <script src="http://www.example.com/js/my_script_file.min.js" type="text/javascript"></script>
```
3. Pass an array of links - scripts
```
echo js_tag(array(
	'https://code.jquery.com/jquery.min.js',
	'js/path/to/my/file/my_script_file.min.js',
));
// outputs
// <script src="https://code.jquery.com/jquery.min.js" type="text/javascript"></script>
// <script src="http://www.example.com/js/path/to/my/file/my_script_file.min.js" type="text/javascript"></script>
```