# Godiva's Quest 1T5

[Godiva's Quest](http://skulepedia.ca/wiki/Godiva%27s_Quest) is a yearly puzzle competition, open to the University of Toronto's engineering undergraduate students. Much like the MIT Mystery Hunt, the Quest tests its challengers with a set of increasingly difficult logic puzzles and culminates in a mad dash to somewhere on campus; the first person to solve the final puzzle of the Quest is awarded the title of Godiva's Quest Champion and, among other prizes, earns the right to write the next Quest. The Quest's author, or Questmaster, writes all of the puzzles, story, and backend code by themself.

This repository is intended to be an archive for [http://quest.skule.ca/1T5/](Godiva's Quest 1T5) and a jumping-off point for Godiva's Quest 1T6. Much of the Quest code was written in 2008 without version control, and this was my attempt to slightly modernize the codebase while still performing my duties as Questmaster 1T5.

### Setup

* Clone this repository and use XAMPP to get a local copy of the site running on `http://localhost/<this year>`
* Copy `credentials_example.php` as `credentials.php` and fill in your database and email address info
* In `global_variables.php`, set `$GLOBALS['quest_finished'] = false` and change `$GLOBALS['this_year']` to the current year
