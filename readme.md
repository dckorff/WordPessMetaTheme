#WordPress Meta Theme 
###A theme about themes
This is a simple, heavily-annotated, WordPress theme. Mostly for my own reference and learning but potentially useful to others. Possibly useful as a starter kit for other themes.

- footer.php - Included in the index.php file by calling get_footer();
- functions.php - Special file in the theme which WP will load automatically.
- header.php - Included in the index.php file by calling get_header();
- index.php - Default file that used used when nothing more specific is called for
- style.css - Site css files, includes tags to identify the theme (used when selecting a theme from the WP adming screen)
	- This file is added to the page by calling the getStyles() function which is defined in functions.php


####Most of what's here is based on referencing these resources:
https://www.youtube.com/watch?v=k7olvEeBM2I&index=3&list=PLpcSpRrAaOaqMA4RdhSnnNcaqOVpX7qi5
https://www.youtube.com/watch?v=AShql_Ap1Yo&list=PLpcSpRrAaOaqMA4RdhSnnNcaqOVpX7qi5&index=4