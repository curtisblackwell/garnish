### Features
* Convert Text To Title Case
* Convert text to sentence case
* CONVERT TEXT TO UPPERCASE
* convert text to lowercase

### Installation
Upload the `garnish` folder to `system/expressionengine/third_party`.

### The Tag Pair
    {exp:garnish}{/exp:garnish}

### Functions
#### title_case
    {exp:garnish:title_case}five years{/exp:garnish:title_case}

will return

    Five Years

#### sentence_case
    {exp:garnish:sentence_case}it was cold, and it rained, so I felt like an actor.{/exp:garnish:sentence_case}

will return

    It was cold, and it rained, so I felt like an actor.

#### uppercase
    {exp:garnish:uppercase}my brain hurts a lot!{/exp:garnish:uppercase}

will return

    MY BRAIN HURTS A LOT!

#### lowercase
    {exp:garnish:lowercase}That's all we've got.{/exp:garnish:lowercase}

will return

    that's all we've got.

### Avoiding Potential Confusion
Garnish finds words by looking for spaces, so if you have HTML tags within the tag pair, you may run into issues. For example:

    {exp:garnish:title_case}<h1>five years</h1>{/exp:garnish:title_case}
    <h1>{exp:garnish:title_case}five years{/exp:garnish:title_case}</h1>

will return

    <h1>five Years</h1>
    <h1>Five Years</h1>
