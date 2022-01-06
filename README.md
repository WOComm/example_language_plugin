# Example Jomres language plugin

**Requires Jomres 10.1 or greater**

##This plugin allows you to include your own language in Jomres, if it's not one of the 37 languages currently supported in Jomres Core.[^1]

This is a Jomres specific plugin, which means that it is CMS agnostic so any translations that work in Joomla will also work in Wordpress. To install it please use the Jomres Plugin Manager 3rd party plugin installer.

When creating your own language plugin for Jomres, first you would need to set up the host CMS with the appropriate language, for example Albanian. Once you have done that, you need to modify the j07090xxx.class.php file to indicate the new language you are adding.

See the example in this plugin's sq-AL.php. It's important to note that *this language file is incomplete*, as a result when you view Jomres pages in the CMS in this language you will see a combination of English and the new language file's strings because if the sq-AL language translation doesn't exist then the English one will be used instead.

You can add as many or as few definitions as you want to this language file, so ideally you would copy all definitions from all of the existing language files (yeah, all 127 files) into this custom file, then modify the strings to suit your own language. 

---

There are currently 37 languages supported in Jomres, but this only scratches the surface of the approximately 6,500 languages on earth right now (Belter speech is just too weird).

[^1]Jomres Core contains 4 major language files for each language.

These can be found in /language and it's sub directories, and they consist of the Main language file (all new additions to this file are always added to the end), and more files in the FAQ, Shortcodes and Video tutorials directories.

In addition, there are (to date) 124 plugins with language files.

This means that currently there are approximately 4,588 language files in Jomres and it's plugins.




