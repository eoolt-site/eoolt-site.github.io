# The website content for eoolt.org

If you need to create a new EOOLT edition, please copy the folder with the latest edition, and name the folder using the year of the workshop. The following parts need to be updated.

* All source content is located in the files named `source-*.html`. Do not modify the other html files, since they are generated using the `Makescript`.

* The file `source-top.html` contains the top-level content, including the menus, the news sidebar etc.

* The file `source-bottom.html` contains the bottom of all files. Typically, you don't need to change this file.

* Before you commit to Github, you need to generate the html files. Simply run `make` in the folder for the year. The script  concatenates all source files, with the `source-top.html` and `source-bottom.html` at the top and the bottom, respectively.

* If you want to add new menu items, add a new file with name `source-xxx.html` where `xxx` is the name of the new menu item. Add this name in file `Makefile`. Also, don't forget to update the menu in file `source-index.html`.

* Note that each year's folder is independent, so it is possible to update and change the procedure and format for the new year without affecting old workshops.

* Before releasing the first version, do not forget to update file `index.html` in the root directly.
