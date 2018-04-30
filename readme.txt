Wizard Duels - Read Me
----------------------------------------------------------
Wizard Duels submitted as coursework for CM4025 Enterprise Web Development - RGU 2018
Developed by Scott Learmonth.

Built using PHP Storm.
Written in PHP with a MySQL database.
Game and database both hosted on Microsoft Azure.

Playable at https://cm4025-wiz.azurewebsites.net/

About:
Wizard Duels is an MMORPG in which players can duel other wizards.
Each wizard has access to four spells of varying power.
When a wizard defeats another, they gain experience points (XP).
The more XP a wizard has, they higher up they are on the leaderboard.

How to play:
To play the game, login with username and password, or create an account.
The index page (Your Stats) displays your current health points (HP) and XP.
You can check how many power points (PP) are left for your spells in the Your Spells page.
To attack a player, open the rankings page and click on a player's name.
On the player's page, you can see how much HP and XP the player has.
Select the name of the spell you wish to attack with at the bottom of the page.
You can attack the same player twice every two minutes.

If you loose HP, it can be replenished at a cost of 1XP per HP.
PP can be replenished to full at a cost of 100XP.

Spells:
Avada Kedavra: Damage -100; Max PP -1; Chance of hitting -25%
Crucio: Damage -70; Max PP -10; Chance of hitting -50%
Flipendo: Damage -20; Max PP -70; Chance of hitting -75%
Expelliarmous: Damage -10; Max PP -100; Chance of hitting -100%