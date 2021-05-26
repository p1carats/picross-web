# picross-web

Web interface used to play with [piC11ross](https://github.com/inspwastaken/piC11ross), developed in HTML, CSS, JS, and PHP.

## Highlights

 - Play Picross interactively and find your way on our generated grids
 - Supports multiple themes and languages
 - Find out more about this game and how to play it
 - And much more!

## Journal

May 18th:
  - Started working on the website by gathering different ideas and models of how it could look like around the game.
  - After an idea by Romain, we searched, tested and successively coded the header of the website, using JavaScript for the first time.
  - Created footer of the website.
  - Started working on the page of the game itself, and how to make the game playable with PHP and/or JS. 
  - Encountered many problems while trying to make the grid of the game clickable.

May 19th:
  - Focused on resolving the problem with the game's grid, which disappeared by using JavaScript.
  - Put a test game on that page to give an idea of the game.
  - Worked on the aesthetic of the grid, particularly the borders and legends.
  - Worked on the Home page and the Game page, following the models conceived the day before.
  - Worked on the aesthetic of the website, following the theme and colors of the game Animal Crossing.

May 20th:
  - Created the Tutorial page of the website, giving tips and a global idea of how a nonogram works to the reader.
  - Reworked the header, footer, Home page and Game page with a few corrections.
  - Added buttons to travel between pages: one Home button in the header, two buttons in the Home page to the Tutorial and the Game page, and two buttons on the Tutorial page to Home and the Game page.
  - Started working on the Settings page, encountering problems of visibility with the elements and images on it.

May 21st:
  - Finished working on the settings page of the website, which appears when going to the Game page.
  - Created options on that same page, useless as of right now and waiting for the program to be fully active to be functional.

May 24th:
  - Put the website through a system of pages and htaccess, which makes easier to find websites pages and offers the possibility of to create a "404 Page Not Found" error page.

May 25th:
  - Reworked buttons of the website.
  - Created an error page, following the aesthetic of the website.
  - Added an automatic chronometer on the Game page, which will be the score of the player at the end of the game.
  - Started working on the communication between the website and the program, by looking up how to use a program coded in C# in a website with JavaScript, and how to use a text file alongside.

May 26th:
  - Added buttons on the Game page to change the background image of the website. The players has now three options: "Day Theme" which is default, "Night Theme", and "Beach Theme"
  - Started the creation of a database to communicate and save information between the website and the program, such as the scoreboard and the generated games.

## Bibliography

Main source to help with errors in PHP, CSS and JavaScript:
Stackoverflow (various forums on different errors): https://stackoverflow.com/
W3School (for various CSS and HTML elements): https://www.w3schools.com

Websites for documentation on HTML, CSS, PHP and JS declarations:
- MDN Web Docs: 
  - for discovering how to code in JavaScript: https://developer.mozilla.org/fr/docs/Learn/Getting_started_with_the_web/JavaScript_basics
  - for the help on various CSS declarations: https://developer.mozilla.org/fr/docs/Learn/Getting_started_with_the_web/CSS_basics
  - for the help on buttons and input elements: https://developer.mozilla.org/fr/docs/Web/HTML/Element/Button
- MySQL: 
  - for a better understanding of how works a database like MySQL: https://dev.mysql.com/doc/mysql-getting-started/en/
  - for particularly helping on "LOAD DATA LOCAL INFILE" code: https://dev.mysql.com/doc/refman/8.0/en/load-data.html
  - for also helping in manipulating MySQL and the command line to work with it: https://dev.mysql.com/doc/refman/8.0/en/server-system-variables.html#sysvar_local_infile
- Codepen.io:
  - for the main idea of the creation of the dynamic grid of the game: https://codepen.io/kelseyhisek/pen/nupFh
  - for the chronometer: https://codepen.io/korell/pen/bVbBgg?editors=101
- Openclassrooms:
  - for helping with phpMyAdmin: https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913893-phpmyadmin
  - for helping with inserting data to a database: https://openclassrooms.com/fr/courses/1959476-administrez-vos-bases-de-donnees-avec-mysql/1960995-inserez-des-donnees
- CSS Débutant, for helping with borders around an element: http://css.mammouthland.net/border-css.php
- jQuery API Documentation, for helping removing the class of an element dynamically: https://api.jquery.com/removeclass/
- Christopher Aue, for helping with vertical alignment in CSS: https://christopheraue.net/design/vertical-align
- CSS Tricks, for helping with the aesthetic of the game grid: https://css-tricks.com/rotated-table-column-headers/
- Wikipedia, and PuzzleMuseum, for the story of the Nonogram: https://www.puzzlemuseum.com/griddler/gridhist.htm
- Font Awesome, for icons: https://fontawesome.com/
- Google Fonts, for fonts: https://fonts.google.com/specimen/Sanchez?preview.text=Animal%20Crossing&preview.text_type=custom&query=sanchez
- GrandGamersGuild, for clearly explaining how to solve a Nonogram: https://grandgamersguild.com/how-to-solve-picross-puzzle/
- Medium, for explaining how Node.js works: https://medium.com/jspoint/a-simple-guide-to-load-c-c-code-into-node-js-javascript-applications-3fcccf54fd32
- Puzzle Mobile, for quickly using Nonogram grids: https://www.puzzles-mobile.com/nonograms/random/10x10

## Licensing

Licensed under [MIT](LICENSE).

```
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
```
