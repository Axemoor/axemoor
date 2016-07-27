Axemoor.net
========

How to use this repository.
--------

This file assumes that you are one of two kinds of visitor: 

1. you are a member of the Barony of Axemoor and would like to propose a change or make a contribution to Axemoor.net or, 
2. You are a member of another SCA group and would like to make a copy and customize the template for your own group's site

For all groups, your first step will be to register for a Github account. 

If you want to take a hands-off approach, and simply make a request for a change, submit a new "Issue" on the Issues tab. It works much like a help desk's ticket function.

If you would like to be more involved in the development process, read on:

Visit http://github.com/Cordelya/axemoor and click the button in the upper right corner labeled "Fork". This will create a copy of the repository in your own account. This is a snapshot of what the repository looked like when you clicked the button. If you want to update from this repository later, you will need to do that manually.
Once you have created the fork, you will then need a way to sync and track changes with your computer, and you will need a development environment (a webserver that you use locally to test while you build or change a site)

For those more comfortable, you can use _git_ to manage sync and track. If you are not comfortable with using _git,_ Github has a client application you may install, which has a graphical user interface. See https://desktop.github.com/ for details. In the instructions below, we will provide basic instructions for using Github Desktop, assuming that anyone using _git_ doesn't really need our help with it.

If you do not have access to a development environment, there are a few free ones you can install. You need one that works with PHP. The easiest way to accomplish this is to install an AMP package. See here: https://www.jetbrains.com/help/phpstorm/10.0/installing-an-amp-package.html

When you have your development environment and a method for managing sync and track, you will then need to use either git or Github Desktop to sync (download) the code that is in the fork you created earlier. See the documentation for either of these methods for more information on how to do that.

Once you have a local copy, test it on your webserver to ensure that it works before you make any changes to it. If you wait until after you have made changes and discover that it doesn't work, you now don't know whether it was the changes you made or something else that is wrong!

When you have verified that your local copy of the code works properly, it's time to start making changes and contributions! Below are some things to keep in mind when proposing changes and additions:

* The Axemoor.net site is built using global headers and footers. This means that there is one header file and one footer file, and it is displayed at the top and bottom of every page. If you create a new page, it is recommended that you use an existing page as a template: save it as a copy, then rename the copy and edit that file.
* In order to have a link to your new page appear in the header, you will need to edit header.php. By default, new links should be inserted somewhere between gulfwars.php and legal.php so they appear in the "More" menu. Placeholders exist for a few pages that don't exist yet. If you are creating a page for one of the placeholders, edit that line with the link rather than creating a new list item.
* If you are unfamiliar with HTML, you can visit here: http://www.w3schools.com/html/ for a tutorial. HTML itself can be viewed in any browser and does not require a webserver. It is recommended that you play around with it for a bit - make yourself some test pages using some of the more common tags (Paragraphs, Anchors, Ordered and Unordered Lists, Tables, Images, Headings, Horizontal Rules, and Divisions). 
* Axemoor.net is built using Bootstrap, a style framework. See http://getbootstrap.com/css for documentation.
* If you are unsure how to properly write the code for something, but you know what you want it to do, include a description in a comment. An HTML comment starts with a less-than (<) and an exlamation point and two dashes, followed by your comment, followed by two more dashes and a greater-than (>) symbol.

        <!-- This is what an HTML comment looks like -->

Once you are satisfied with your changes, commit them to your repository. If you are using Github Desktop, you will see a list of changes that have been made in the local folder, unless you copied your local folder to a different location (like a webserver folder). If you don't see the changes, copy the changed files back into the local repository folder and they should appear.

Add a commit message (A relevant subject plus any extended comments in the comments field) and click "Commit", then click the "Sync" button to synchronize your local version with the online version. Your changes should appear in your fork on Github.com.

It is a good idea to commit on a regular schedule (perhaps every 30 minutes) to allow you to revert any bad changes more easily.

If you are a member of another SCA group who is copying the site to use as a template, make the code your own, and publish it on your webserver once you are ready. Use the repository you made to manage changes. It is exceptionally helpful when you are co-developing with others. Give your kingdom webminister collaborator access!

If you are a member of Axemoor.net and are submitting changes, continue on...

When you are satisfied with your changes, and have made that final commit/sync, your next step is to submit a "Pull Request" against the Axemoor repository. This will submit the changes to the Axemoor webministers, who can review the proposed changes and choose to accept or reject them, and upload them if accepted.

The Axemoor webministers have final say on all changes, and may make modifications to what you submit. (It goes without saying that Kingdom webministers have this same authority over webministers within the same kingdom)
