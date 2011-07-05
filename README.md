cpb Garnish
===========

Overview
--------

cpb Garnish is an ExpressionEngine 2 plugin that allows you to control the case of text between its variable pairs.

Features
--------

* Convert Text To Title Case
* Convert text to sentence case
* CONVERT TEXT TO UPPERCASE
* convert text to lowercase

Installation
------------

Upload the garnish folder to system/expressionengine/third_party

Usage
-----

Just wrap the text in the appropriate tag:

### Title Case

	{exp:garnish:title_case}five years{/exp:garnish:title_case}

will return

	Five Years

#### Note

Title case will **not** fix things like

	lUlZ, i TyPe LiKe A dUmBaSs

It will only capitalize the first character.

### Sentence Case

	{exp:garnish:sentence_case}it was cold and it rained so I felt like an actor.{/exp:garnish:sentence_case}
	
will return

	It was cold and it rained so I felt like an actor.

### Uppercase

	{exp:garnish:uppercase}my brain hurts a lot!{/exp:garnish:uppercase}

will return

	MY BRAIN HURTS A LOT!

### Lowercase

	{exp:garnish:lowercase}That's all we've got.{/exp:garnish:lowercase}

will return

	that's all we've got.